@extends('layouts.main')

@section('content')
    <div class="row" style="margin-top: 50px">
        <div class="col-md-12">
            <h1>Simple File Upload</h1>
        </div>
        <div class="col-md-12">
            @include('uploads.create')
        </div>
        <div class="col-md-12">
            <div class="row">
                @forelse ($uploads as $upload)
                    <div class="col-sm-6 col-lg-4" style="margin-bottom: 15px">
                        <a href="{{ route('upload.show', ['upload' => $upload]) }}">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('uploads/' . $upload->filename) }}">
                                <div class="card-body">
                                    <h4 class="card-title text-center">{{ $upload->title }}</h4>
                                </div>
                            </div>
                        </a>
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
