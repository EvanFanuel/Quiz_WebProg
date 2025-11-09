@extends('layouts.app')

@section('title', $writer->name . ' - EduFun')

@section('content')
<div class="container">
    
    <div class="row mb-5">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('writers.index') }}">Writers</a></li>
                    <li class="breadcrumb-item active">{{ $writer->name }}</li>
                </ol>
            </nav>
        </div>
        <div class="col-12 text-center">
            <img src="https://ui-avatars.com/api/?name={{ urlencode($writer->name) }}&size=150&background=007bff&color=fff" 
                 class="rounded-circle mb-3" 
                 alt="{{ $writer->name }}"
                 width="150" 
                 height="150">
            <h2 class="mb-2">{{ $writer->name }}</h2>
            <p class="text-muted lead">{{ $writer->specialization }}</p>
            <p class="text-muted"><strong>{{ $articles->count() }}</strong> Articles Published</p>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-12">
            <h3 class="mb-4">Articles by {{ $writer->name }}</h3>
        </div>
    </div>

    <div class="row g-4">
        @forelse($articles as $article)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ $article->image }}" class="card-img-top" alt="{{ $article->title }}">
                <div class="card-body">
                    <span class="badge bg-primary mb-2">{{ $article->category->name }}</span>
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text text-muted small">
                        {{ \Str::limit($article->excerpt, 100) }}
                    </p>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">
                            {{ $article->created_at->format('d M Y') }}
                        </small>
                        <small class="text-muted">
                            {{ $article->views }} views
                        </small>
                    </div>
                    <a href="{{ route('articles.show', $article->slug) }}" class="btn btn-primary btn-sm">Read more...</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-info text-center">
                This writer hasn't published any articles yet.
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection