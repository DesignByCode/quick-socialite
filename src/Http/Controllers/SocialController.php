<?php

namespace DesignByCode\QuickSocialite\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use DesignByCode\QuickSocialite\Helpers\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{

    /**
     * SocialController constructor.
     */
    public function __construct()
    {
        $this->middleware(['guest', 'social']);
    }

    /**
     * @param $service
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect($service, Request $request)
    {
        return Socialite::driver($service)->redirect();
    }

    /**
     * @param $service
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function callback($service, Request $request)
    {
        $serviceUser = Socialite::driver($service)->user();

        $user = $this->getExistingUser($serviceUser, $service);

        if (!$user) {
            $user = User::create([
                'name' => $serviceUser->getName(),
                'email' => $serviceUser->getEmail(),
                'avatar' => $serviceUser->getAvatar(),
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt(Password::make(12))
            ]);
        }

        if ($this->needsToCreate($user, $service)) {
            $user->social()->create([
                'social_id' => $serviceUser->getId(),
                'service' => $service
            ]);
        }

        Auth::login($user, false);

        return redirect()->intended();
    }

    /**
     * @param $serviceUser
     * @param $service
     * @return mixed
     */
    private function getExistingUser($serviceUser, $service)
    {
        return User::where('email', $serviceUser->getEmail())
            ->orWhereHas('social', function ($q) use ($serviceUser, $service) {
                $q->where('social_id', $serviceUser->getId())->where('service', $service);
            })->first();
    }

    /**
     * @param User $user
     * @param $service
     * @return bool
     */
    private function needsToCreate(User $user, $service)
    {
        return !$user->hasSocialLinked($service);
    }

}
