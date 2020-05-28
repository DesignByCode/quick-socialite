
@if ($user->social->count() > 1)
<h3>You have the following accounts linked with us</h3>

<ul>
    @foreach($user->social as $social)
        <li>
            {{ config("sosial.services.{$social->service}.name") }}
        </li>
    @endforeach
</ul>

@endif
