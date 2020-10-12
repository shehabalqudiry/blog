@extends('layouts.master')
@section('content')
    <div class="container mt-5 py-3">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <h5 class="card-title">ID : {{ $singlepost->id }}</h5>
                <h5 class="card-title">Title : {{ $singlepost->title }}</h5>
                <h5 class="card-title">Description : {{ $singlepost->description }}</h5>
            </div>
        </div>
    </div>

@endsection
