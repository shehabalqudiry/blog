@extends('layouts.master')
@section('content')
    <div class="container mt-5 text-center">
        <a href="{{ route('posts.create') }}" class="btn btn-success">Create Post</a>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        {{-- <th scope="row">{{ $post['id'] }}</th>
                        --}}
                        <td>{{ $post->title }}</td>
                        {{-- <td>{{ $post['title'] }}</td> --}}
                        <td>{{ $post->author }}</td>
                        {{-- <td>{{ $post['author'] }}</td> --}}
                        <td>{{ $post->created_at->format('Y-m-d') }}</td>
                        {{-- <td>{{ $post['crated_at'] }}</td>
                        --}}
                        <td>
                            <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="btn btn-info">View</a>
                            <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary">Edit</a>
                            <a class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
