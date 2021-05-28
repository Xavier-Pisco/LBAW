@extends('layouts.app')

@push('css_links')
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/mobile.css') }}" />
<link rel="stylesheet" href="{{ asset('css/post.css') }}" />
<link rel="stylesheet" href="{{ asset('css/left_col.css') }}" />
<link rel="stylesheet" href="{{ asset('css/post_page.css') }}" />
@if (Auth::user()->is_admin)
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endif
@endpush

@push('js_scripts')
@if (!Auth::user()->is_admin)
    <script src="{{ asset('js/likes.js') }}" defer></script>
    <script src="{{ asset('js/commentTextArea.js') }}" defer></script>
    <script src="{{ asset('js/comments.js') }}" defer></script>
@endif
<script src="{{ asset('js/post_options.js') }}" defer></script>
<script src="{{ asset('js/comment_options.js') }}" defer></script>
@endpush


@section('content')

<body>

	<div class="container-fluid">
		<div class="row">
            @if (Auth::user()->is_admin)
			    @include('partials.sidebar.sidebar', ["page" => "admin", "reports" => App\Models\Report::all()])
            @else
			    @include('partials.sidebar.sidebar', ["page" => "post"])
            @endif
			<div class="col-10">
				<div id="center-col">
					@include('partials.post', ['post' => $post, 'comments' => $post->comments->where('deleted', '=', false)])
				</div>
			</div>
		</div>
	</div>
</body>

@endsection
