@extends('layouts.app')

@section('content')
<div class="d-flex align-items-md-center justify-content-center h-100">
    <div class="row justify-content-center">
        <div class="col-md-auto">
            <div class="card">
                 <div class="card-body text-center">
                    <form method="POST" action="{{ route('deactive.exec') }}">
                        @csrf
                        <h2>{{ __('This will deactivate your account.') }}</h2>
                        <p>{{ __('Press the Deactive button to continue the process.') }}</p>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Deactive') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection