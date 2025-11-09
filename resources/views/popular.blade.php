@extends('layouts.app')

@section('title', 'Popular Articles - EduFun')

@section('content')
<div class="container">
   
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="mb-3">Popular Articles</h2>
            <p class="lead text-muted">Most viewed articles by our community</p>
        </div>
    </div>

    <div class="row g-4">
        @forelse($articles as $article)
        <div class="col-md-4">
            <div class="card">
                <div class="position-relative">
                    <img src="{{ $article->image }}" class="card-img-top" alt="{{ $article->title }}">
                    <span class="position-absolute top-0 end-0 m-2 badge bg-danger">
                        🔥 {{ $article->views }} views
                    </span>
                </div>
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
                No popular articles available yet.
            </div>
        </div>
        @endforelse
    </div>

    @if($articles->hasPages())
    <div class="row mt-5">
        <div class="col-12">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    {{-- Previous Button --}}
                    @if ($articles->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">Previous</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $articles->previousPageUrl() }}">Previous</a>
                        </li>
                    @endif

                    {{-- Page Numbers --}}
                    @foreach ($articles->getUrlRange(1, $articles->lastPage()) as $page => $url)
                        @if ($page == $articles->currentPage())
                            <li class="page-item active">
                                <span class="page-link">{{ $page }}</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach

                    {{-- Next Button --}}
                    @if ($articles->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $articles->nextPageUrl() }}">Next</a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link">Next</span>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
    @endif
</div>
@endsection