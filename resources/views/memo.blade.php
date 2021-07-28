@extends('layouts.app')

@section('content')
    <!-- All -->
    <div class="csplash-wrapper">
        <!-- side bar -->
        <div class="nav-wrapper">
            <!-- btn area -->
            <div class="nav-top">
                <a href="{{ route('profile') }}" class="nav-title">{{ config('app.name') }}</a>
            </div>
            <!-- search area -->
            <form class="nav-search" action="{{ route('memo.search') }}">
                <div class="search">
                    <input type="text" name="key" class="search-inner" placeholder="Enter a title...">
                </div>
            </form>
            <!-- list area -->
            <div class="nav-list">
                @if ($memos->count() === 0)
                    <div class="nothing-list">
                        I could not find the note...
                    </div>
                @endif
                @foreach ($memos as $memo)
                    <a href="{{ route('memo.select', ['id' => $memo->id]) }}" class="select-list @if ($select_memo) {{ $select_memo->id == $memo->id ? 'selected' : '' }} @endif " >
                        <div class=" list-title">
                        @if (empty($memo->title))
                            Untitled
                        @else
                            {{ $memo->title }}
                        @endif
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="nav-footer">
            <a href="{{ route('memo.add') }}" class="nav-btn">AddPage</a>
            <a href="{{ route('memo.logout') }}" class="nav-btn">Logout</a>
            </div>
    </div>

    <!-- text edit area -->
    <div class="edit-wrapper">
        @if ($select_memo)
            <!-- form -->
            <form class="edit-form" method="post">
                @csrf
                <!-- select -->
                <input type="hidden" name="edit_id" value="{{ $select_memo->id }}" />
                <!-- btn area -->
                <div class="edit-top">
                    <div class="nav-trigger">
                        <div class="trigger"></div>
                    </div>
                    <div class="edit-btn">
                        <small>Created:{{ date('Y/m/d H:i', strtotime($memo->updated_at)) }}</small>
                        <button type="submit" class="btn-2">Favorite</button>
                        <button type="submit" class="btn-2" formaction="{{ route('memo.delete') }}">Trash</button>
                        <button type="submit" class="btn-2" formaction="{{ route('memo.update') }}">Update</button>
                    </div>
                </div>
                <!-- title -->
                <div class="editer">
                    <input type="text" class="memo-title" name="edit_title" placeholder="Untitled"
                        value="{{ $select_memo->title }}" />
                    <!-- editer -->
                    <textarea class="memo-content" name="edit_content"
                        placeholder="press any key to continue...">{{ $select_memo->content }}</textarea>
                </div>
            </form>
        @else
            <!-- nothing memo-->
            <div class="alert-wrapper">
                <div class="memo-alert">
                    Create new memo or select one.
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
