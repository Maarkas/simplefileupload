@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{ route('upload.index') }}">Back</a>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $upload->title }}</h4>
                </div>
                <img class="card-img-top" src="{{ asset('uploads/' . $upload->filename) }}">
            </div>
        </div>
    </div>
@endsection