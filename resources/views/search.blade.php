@extends('layouts.app')

@section('content')
<!-- All -->
<form class="search-wrapper" method="get">
    <div class="search-card">
        <div class="search-app-title">
            <span>{{ config('app.name') }}</span>
        </div>
        <div class="search-content">
                @foreach ($searches as $search)
                    @empty($search->title)
                    <div class="search-content-txt">
                        <p class="search-title">Untitle</p>
                        <span class="search-sentence">Not filled in.</span>
                    </div>
                    @else
                    <a href="" class="search-content-txt">
                        <p class="search-title">{{ $search->title }}</p>
                        <span class="search-sentence">{{ $search->content }}</span>
                    </a>
                    @endempty
                @endforeach
        </div>
    </div>
</form>
@endsection