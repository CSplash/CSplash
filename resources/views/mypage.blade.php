@extends('layouts.app')

@section('content')
<div class="d-flex align-items-md-center justify-content-center h-100">
  <div class="row justify-content-center">
    <div class="col-md-auto">
      <div class="profile card">
        <div class="contents">
          <div class="# text-light">
            Created: {{ auth()->user()->created_at }}
          </div>
          <div class="data">
            <h1>{{ auth()->user()->name }}</h1>
            <div class="main">
              <p class="text">Hello</p>
              <a href="{{ route('deactive.form') }}" class="button">Deactive</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection