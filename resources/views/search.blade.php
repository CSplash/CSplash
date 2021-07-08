@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-auto">
                <div class="card">
                    @forelse ($posts as $post)
                        <li>{{ $post->title }}</li>
                    @empty
                        Not Found
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
