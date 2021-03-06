@extends('layouts.app')

@push('css_links')
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/mobile.css') }}" />
<link rel="stylesheet" href="{{ asset('css/post.css') }}" />
<link rel="stylesheet" href="{{ asset('css/left_col.css') }}" />
<link rel="stylesheet" href="{{ asset('css/add_post.css') }}" />
@endpush

@push('js_scripts')
<script src="{{ asset('js/likes.js') }}" defer></script>
<script src="{{ asset('js/commentTextArea.js') }}" defer></script>
<script src="{{ asset('js/comments.js') }}" defer></script>
<script src="{{ asset('js/post_options.js') }}" defer></script>
<script src="{{ asset('js/comment_options.js') }}" defer></script>
<script src="{{ asset('js/add_post.js') }}" defer></script>
<script src="{{ asset('js/change_post_order.js') }}" defer></script>
<script src="{{ asset('js/infinite_scrolling.js') }}" defer></script>
<script src="{{ asset('js/friend_request.js') }}" defer></script>
<script src="{{ asset('js/post_visibility.js') }}" defer></script>
@endpush

@section('content')

<div class="container-fluid">
    <div class="row">
        @include('partials.sidebar.sidebar', ["page" => "home"])
        <div class="col-8 center-col-col-8">
            <div id="center-col">

                @foreach ($posts as $post)
                    @include('partials.post', ['post' => $post, 'comments' => $post->comments->where('deleted', '=', false)->sortByDesc('id')->take(2)])
                @endforeach
                @if (count($posts) > 0)
                    <svg id="load-more" data-login="{{ Auth::check() && (true || Auth::user()->is_admin) }}" data-page-id="1" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>
                    </svg>
                @endif
            </div>
        </div>
    </div>
</div>
<div id="add-post-icon" class="add-post-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="125" height="125" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
    </svg>
</div>
<div hidden id="return-icon" class="add-post-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="125" height="125" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
    </svg>
</div>
@endsection
