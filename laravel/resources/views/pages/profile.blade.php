@extends('layouts.app')

@push('css_links')
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/mobile.css') }}" />
<link rel="stylesheet" href="{{ asset('css/post.css') }}" />
<link rel="stylesheet" href="{{ asset('css/left_col.css') }}" />
<link rel="stylesheet" href="{{ asset('css/profile.css') }}" />
@endpush

@push('js_scripts')
<script src="{{ asset('js/deleteUser.js') }}" defer></script>
@endpush

@section('content')
@csrf
@if (Auth::user()->user == $user)
    @include("partials.myprofile")
@else
    @include("partials.other_profile")
@endif
@endsection
