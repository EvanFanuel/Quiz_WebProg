@extends('layouts.app')

@section('title', 'Home - EduFun')

@section('content')
<div class="container">
    <!-- Hero Section -->
    <div class="row mb-5">
        <div class="col-12">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1200&h=400&fit=crop" class="card-img-top" style="height: 400px; object-fit: cover;" alt="Hero Image">
                <div class="card-body">
                    <h2 class="card-title">Welcome to EduFun!</h2>
                    <p class="card-text">Discover the latest articles in Interactive Multimedia and Software Engineering. Learn from experts and enhance your knowledge.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Latest Articles Section -->
    <div class="row mb-4">
        <div class="col-12">
            <h3 class="mb-4">Latest Articles</h3>
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
                            <i class="bi bi-calendar"></i> {{ $article->created_at->format('d M Y') }}
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
                No articles available yet.
            </div>
        </div>
        @endforelse
    </div>
</div>
@endsection