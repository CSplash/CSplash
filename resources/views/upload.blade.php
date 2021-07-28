@extends('layouts.app')

@section('content')
<!-- All -->
<div class="auth-wrapper">
    <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="auth">
            <div class="auth-form-wrapper">
                <div class="form-wrapper">
                    <!-- title -->
                    <div class="auth-title">
                        {{ config('app.name') }}
                    </div>

                    @if ($errors->any())
                    <!-- error handring-->
                    <div class="auth-error">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </div>
                    @endif

                    @isset ($filename)
                    <div>
                        <img src="{{ asset('storage/' . $filename) }}">
                    </div>
                    @endisset

                    <label for="photo">画像ファイル:</label>
                    <input type="file" class="form-control" name="file">
                    <br>
                    <hr>
                    {{ csrf_field() }}
                    <button class="btn btn-success"> Upload </button>
                    </div>
                </div>
            </div>
    </form>
</div>
@endsection