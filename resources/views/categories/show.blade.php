@extends('layouts.app')

@section('title', $category->name . ' - EduFun')

@section('content')
<div class="container">
    
    <div class="row mb-4">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">{{ $category->name }}</li>
                </ol>
            </nav>
            <h2 class="mb-3">{{ $category->name }}</h2>
            <p class="lead text-muted">Explore articles in {{ $category->name }}</p>
        </div>
    </div>

    <div class="row g-4">
        @forelse($articles as $article)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ $article->image }}" class="card-img-top" alt="{{ $article->title }}">
                <div class="card-body">
                    <span class="badge bg-primary mb-2">{{ $category->name }}</span>
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text text-muted small">
                        {{ \Str::limit($article->excerpt, 100) }}
                    </p>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <small class="text-muted">
                            {{ $article->created_at->format('d M Y') }}
                        </small>
                        <small class="text-muted">
                            By {{ $article->writer->name }}
                        </small>
                    </div>
                    <a href="{{ route('articles.show', $article->slug) }}" class="btn btn-primary btn-sm">Read more...</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="alert alert-info text-center">
                No articles available in this category yet.
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection