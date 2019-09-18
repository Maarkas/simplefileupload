@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Simple File Upload</h1>
        </div>
        <div class="col-md-12">
            @include('uploads.create')
        </div>
        <div class="col-md-12">
            <div class="row">
                @forelse ($uploads as $upload)
                    <div class="col-sm-6 col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('uploads/' . $upload->filename) }}">
                            <div class="card-body">
                                <h4 class="card-title">{{ $upload->title }}</h4>
                                <a class="btn btn-info" href="{{ route('upload.show', ['upload' => $upload]) }}">View</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <p>There are currently no uploads.</p>
                    </div>
                @endforelse
            </div>
            {!! $uploads->render() !!}
        </div>
    </div>
@endsection