@extends('layouts.master')
@section('content')
    <div class="container mt-5 py-3">
        <form method="POST" action="{{ route('posts.update') }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" value="{{ $singlepost->title }}" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <textarea name="desc" value="{{ $singlepost->description }}" class="form-control" id="desc"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
