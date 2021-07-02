@extends('layouts.app')

@section('content')
    <div class="d-flex align-items-md-center justify-content-center h-100">
        <form method="post" action="{{ route('user.exec.register') }}">
            @csrf
            <div class="login-card-width">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0 mt-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="float-left justify-content-center">
                        <div class="mt-3 h2 text-light display-3">{{ config('app.name') }}</div>
                    </div>
                    <div class="row mt-3">
                        <div class="offset-2 col-10 offset-2">
                            <label class="input-group w-100">
                                <input type="text" name="name" class="form-control" placeholder="Username" autocomplete="off" maxlength="255" />
                            </label>
                            <label class="input-group w-100">
                                <input type="text" name="email" class="form-control" placeholder="Email" autocomplete="off" maxlength="255" />
                            </label>
                            <label class="input-group w-100">
                                <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off" maxlength="255" />
                            </label>
                            <button type="submit" class="form-control btn btn-success">
                                Sign up
                            </button>
                            <div class="mt-2">
                                <div class="d-flex justify-content-center text-light">
                                    Already have an account?
                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route("login.index") }}" class="text-success">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
