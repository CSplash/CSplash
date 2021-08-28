@extends('layouts.app')

@section('content')
<!-- All -->
<div class="search-wrapper">
    <div class="search-card">
        <div class="search-app-title">
            <p>{{ config('app.name') }}</p>
        </div>
        <div class="search-content">
                @forelse ($searches as $search)
                    <li class="search-title" href="" name="select">{{ $search->title }}</li>
                    <div class="search-sentence">{{ $searches->content }}</div>
                @empty
                    <div class="search-empty">Not Found</div>
                @endforelse
        </div>
    </div>
</div>
@endsection