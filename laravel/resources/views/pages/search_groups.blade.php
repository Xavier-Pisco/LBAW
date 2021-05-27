@extends('layouts.app')

@push('css_links')
<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/mobile.css') }}" />
<link rel="stylesheet" href="{{ asset('css/post.css') }}" />
<link rel="stylesheet" href="{{ asset('css/left_col.css') }}" />
<link rel="stylesheet" href="{{ asset('css/search_groups.css') }}" />
@endpush

{{-- @push('js_scripts')
@endpush --}}

@section('content')

<div class="container-fluid">
    <div class="row">
        @include('partials.sidebar.sidebar', ["page" => "search"])
        <div class="col-10">
            <div id="center-col">
                <div class="container-fluid">
                    <div class="row search-options-row">
                        <div class="search-options">
                            <div class="col-3">
                                <a href="{{ route('users', ['search' => $search]) }}" class="search-option search-option-people">
                                    People
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="{{ route('posts', ['search' => $search]) }}" class="search-option search-option-posts">
                                    Posts
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="#" class="search-option search-option-groups">
                                    Groups
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row people-section">
                        <div class="container-fluid">
                            @for ($i = 0; $i < count($groups); $i++)
                                @if ($i % 2 == 0)
                                    <div class="row people-row">
                                @endif
                                    @include('partials.search_groups', ['group' => $groups[$i]])
                                @if ($i % 2 == 1)
                                    </div>
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection