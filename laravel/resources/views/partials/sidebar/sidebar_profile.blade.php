<div class="col-2 text-center collapse" id="left-col">
    @if ($my_profile)
        @include('partials.notifications.notifications')
    @endif
    <div class="person-friends">
        @for ($i = 0; $i < count($links) && $i < 300; $i++)
            @include('partials.friend', ['user' => $links[$i] ])
        @endfor
    </div>
    @if ($my_profile)
        @include('partials.full_group_carousel')
    @endif
    <div>
        <a href="{{ route('about') }}" class="link-light">About</a>
        <span class="link-light"> | </span>
        <a href="{{ route('faq') }}" class="link-light">FAQ</a>
    </div>
    @if($my_profile)
        <div>
            <a href="{{route('logout')}}" class="link-danger delete_user" data-user-id="{{ $user->id }}">Delete account</a>
        </div>
    @endif
    </div>
