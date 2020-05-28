<?php

namespace DesignByCode\QuickSocialite\Models\Traits;

use DesignByCode\QuickSocialite\Models\UserSocial;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use phpDocumentor\Reflection\Types\Boolean;

trait QuickSocial
{


    public static function bootQuickSocial(): void
    {
        static::retrieved(function(Model $model) {
            $model->fillable = array_merge($model->fillable, ['avatar', 'email_verified_at']);
        });
    }


    /**
     * @return HasMany
     */
    public function social(): HasMany
    {
        return $this->hasMany(UserSocial::class);
    }


    /**
     * @param $service
     * @return bool
     */
    public function hasSocialLinked($service)
    {
        return (boolean) $this->social->where('service', $service)->count();
    }

    /**
     * @param int $size
     * @return string
     * @description return gravatar url
     */
    public function avatar($size = 100) : String
    {
        return "https://secure.gravatar.com/avatar/" . md5(strtolower(trim($this->email))) . "?d/=mp&s={$size}";
    }

    /**
     * @return String
     */
    public function getAvatarAttribute($vaule) : String
    {
        return $vaule ?: $this->avatar();
    }


}
