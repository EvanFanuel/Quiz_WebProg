@extends('layouts.app')

@section('title', $article->title . ' - EduFun')

@section('content')
<div class="container">
    
    <div class="row mb-4">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('categories.show', $article->category->slug) }}">{{ $article->category->name }}</a></li>
                    <li class="breadcrumb-item active">{{ $article->title }}</li>
                </ol>
            </nav>
        </div>
    </div>

   
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <article>
                
                <div class="mb-4">
                    <span class="badge bg-primary mb-2">{{ $article->category->name }}</span>
                    <h1 class="display-5 fw-bold mb-3">{{ $article->title }}</h1>
                    
                   
                    <div class="d-flex align-items-center mb-4">
                        <div class="me-3">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($article->writer->name) }}&size=50&background=007bff&color=fff" 
                                 class="rounded-circle" 
                                 alt="{{ $article->writer->name }}"
                                 width="50" 
                                 height="50">
                        </div>
                        <div>
                            <a href="{{ route('writers.show', $article->writer->id) }}" class="text-decoration-none">
                                <h6 class="mb-0">{{ $article->writer->name }}</h6>
                            </a>
                            <small class="text-muted">
                                {{ $article->created_at->format('d F Y') }} | {{ $article->views }} views
                            </small>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <img src="{{ $article->image }}" class="img-fluid rounded" alt="{{ $article->title }}">
                </div>

                <div class="article-content mb-5">
                    <div class="lead mb-4">
                        {{ $article->excerpt }}
                    </div>
                    
                    <div class="article-text" style="line-height: 1.8; font-size: 1.1rem;">
                        {!! nl2br(e($article->content)) !!}
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection