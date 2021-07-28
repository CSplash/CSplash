@extends('layouts.app')

@section('content')
    <div class="slider-content">
        <div class="profile-wrapper">
            <div class="header">
                <div class="profile-wrapper">
                    <!--provisional-->
                    <a href="{{ route('memo.index') }}"><i class="fas fa-home fa-lg"></i></a>
                    <a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt fa-lg"></i></a>
                    <a href="{{ route('deactive') }}"><i class="fas fa-heart-broken fa-lg"></i></a>
                </div>
                <div class="logo-wrapper">
                    <div class="logo" >{{ config('app.name') }}</div>
                </div>
            </div>
        </div>

        <div class="number-wrapper">
            <div class="number-count">
                <div class="number">{{ $auth->id }}</div>
            </div>
        </div>

        <div class="slider-wrapper">
            <div class="slider-container">
                <div class="slide active">
                    <div class="slide-content txt">
                        <div class="txt-wrapper">
                            <p>Welcome to CSplash</p>
                            <a href="" class="u-name">{{ $auth->name }}</a>
                            <span class="subtitle">About</span>
                            <p class="excerpt"></p>
                        </div>
                    </div>
                    <div class="slide-content img">
                        <img src="https://images.unsplash.com/photo-1502082553048-f009c37129b9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
