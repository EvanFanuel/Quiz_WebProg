@extends('layouts.app')

@section('title', 'Categories - EduFun')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-12">
            <h2 class="mb-4">Our Categories</h2>
            <p class="lead">Explore our comprehensive collection of educational content across different technology fields.</p>
        </div>
    </div>

    <div class="row g-4">
        @foreach($categories as $category)
        <div class="col-md-6">
            <div class="card">
                <div class="card-body p-5 text-center">
                    <div class="mb-4">
                        @if($category->slug == 'interactive-multimedia')
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-collection-play text-primary" viewBox="0 0 16 16">
                            <path d="M2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1zm2.765 5.576A.5.5 0 0 0 6 7v5a.5.5 0 0 0 .765.424l4-2.5a.5.5 0 0 0 0-.848l-4-2.5z"/>
                            <path d="M1.5 14.5A1.5 1.5 0 0 1 0 13V6a1.5 1.5 0 0 1 1.5-1.5h13A1.5 1.5 0 0 1 16 6v7a1.5 1.5 0 0 1-1.5 1.5h-13zm13-1a.5.5 0 0 0 .5-.5V6a.5.5 0 0 0-.5-.5h-13A.5.5 0 0 0 1 6v7a.5.5 0 0 0 .5.5h13z"/>
                        </svg>
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-code-slash text-primary" viewBox="0 0 16 16">
                            <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
                        </svg>
                        @endif
                    </div>
                    <h3 class="card-title mb-3">{{ $category->name }}</h3>
                    <p class="text-muted mb-4">{{ $category->articles_count }} Articles Available</p>
                    <a href="{{ route('categories.show', $category->slug) }}" class="btn btn-primary">Explore Articles</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection