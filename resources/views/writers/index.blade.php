@extends('layouts.app')

@section('title', 'Our Writers - EduFun')

@section('content')
<div class="container">
 
    <div class="row mb-5">
        <div class="col-12 text-center">
            <h2 class="display-4 fw-bold mb-3">Our Expert Writers</h2>
            <p class="lead text-muted">Meet our talented team of educators and industry professionals</p>
        </div>
    </div>

    <div class="row g-4 justify-content-center">
        @foreach($writers as $writer)
        <div class="col-md-4">
            <div class="card text-center h-100">
                <div class="card-body p-4">
                    <div class="mb-4">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode($writer->name) }}&size=150&background=007bff&color=fff" 
                             class="rounded-circle mb-3" 
                             alt="{{ $writer->name }}"
                             width="150" 
                             height="150">
                    </div>
                    <h4 class="card-title mb-2">{{ $writer->name }}</h4>
                    <p class="text-muted mb-3">{{ $writer->specialization }}</p>
                    <p class="text-muted small mb-4">
                        <strong>{{ $writer->articles_count }}</strong> Articles Published
                    </p>
                    <a href="{{ route('writers.show', $writer->id) }}" class="btn btn-primary">View Articles</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection