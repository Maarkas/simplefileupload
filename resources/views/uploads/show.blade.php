@extends('layouts.main')

@section('content')
    <div class="row" style="margin-top: 50px">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-info" href="{{ route('upload.index') }}">Back</a>
                    <h4 class="card-title" style="margin-top: 15px">{{ $upload->title }}</h4>
                </div>
                <img class="card-img-top" src="{{ asset('uploads/' . $upload->filename) }}">
            </div>
        </div>
    </div>
@endsection
