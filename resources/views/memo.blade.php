@extends('layouts.app')

@section('content')
<div class="h-100 bg-white">
    <div class="row h-100 m-0 p-0">
        <div class="side-bar col-2">
            <div class="left-memo-menu d-flex justify-content-between pt-2">
                <div class="pl-2 pt-2">
                    <a href="{{ route('user.mypage') }}" class="h5 text-light">Nxxion</a>
                </div>
                <div class="pr-1">
                    <a href="{{ route('memo.add') }}" class="btn btn-dark" ><img src="{{ asset('images/file-plus.svg') }}"></a>
                    <a href="{{ route('memo.logout') }}" class="btn btn-dark"><img src="{{ asset('images/log-out.svg') }}"></a>
                </div>
            </div>
            <div class="left-memo-list list-group-flush p-0">
                @if ($memos->count() === 0)
                <div class="pl-1 pt-3 h5 text-secondary text-center">
                    I could not find the note...
                </div>
                @endif
                @foreach ($memos as $memo)
                <a href="{{ route('memo.select', ['id' => $memo->id]) }}" class="list-color list-group-item list-group-item-action @if ($select_memo) {{ $select_memo->id == $memo->id ? 'selected' : '' }} @endif " >
                    <div class="d-flex w-100">
                        <div class="list-title">{{ $memo->title }} </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        <div class="mainArea col-10 h-100">
            @if ($select_memo)
            <form class="w-100 h-100" method="post">
                @csrf
                <input type="hidden" name="edit_id" value="{{ $select_memo->id }}" />
                <div id="memo-menu">
                    <button class="menu-button">Favorite</button>
                    <button type="submit" class="menu-button" formaction="{{ route('memo.delete') }}">Trash</button>
                    <button type="submit" class="menu-button" formaction="{{ route('memo.update') }}">Update</button>
                </div>
                <input type="text" id="memo-title" name="edit_title" placeholder="Untitled" value="{{ $select_memo->title }}" />
                <textarea id="memo-content" name="edit_content" placeholder="press any key to continue...">{{ $select_memo->content }}</textarea>
            </form>
            @else
            <div class="mt-3 alert alert-info">
                Create a new memo or select one.
            </div>
            @endif
        </div>
    </div>
</div>
@endsection