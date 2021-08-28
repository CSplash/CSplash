@extends('layouts.app')

@section('content')
    <!-- All -->
    <div class="csplash-wrapper">
        <!-- side bar -->
        <div class="nav-wrapper">
            <!-- btn area -->
            <div class="nav-top">
                <a href="{{ route('profile.index') }}" class="nav-title">{{ config('app.name') }}</a>
            </div>
            <!-- search area -->
            <form class="nav-search" action="{{ route('search.index') }}">
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
                        @empty($memo->title)
                            <span>Untitled</span>
                        @else
                            <span>{{ $memo->title }}</span>
                        @endempty
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
                        <span><span class="show_count">0</span> Character</span>
                        <button type="button" id="js_locked" class="btn-2"><i class="fas fa-lock"></i> Lock</button>
                        <button type="submit" class="btn-2" formaction="{{ route('memo.delete') }}">Trash</button>
                        <button type="submit" class="btn-2" formaction="{{ route('memo.update') }}">Update</button>
                    </div>
                </div>
                <!-- title -->
                <div class="editer">
                    <input type="text" class="memo-title" name="edit_title" placeholder="Untitled"
                        value="{{ $select_memo->title }}" />
                    <!-- editer -->
                    <textarea id="js_count" class="memo-content" name="edit_content"
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
