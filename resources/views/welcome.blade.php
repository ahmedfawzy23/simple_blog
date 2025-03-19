@extends('layouts.app')

@section('title', 'Welcome to Post Manager')

@section('content')
    <div class="container text-center my-5">
        <!-- Header Section -->
        <h1 class="display-4 fw-bold">Welcome to our Blog</h1>
        <p class="lead text-muted">Your go-to platform for creating, managing, and sharing posts with ease.</p>

        <!-- Call-to-Action Buttons -->
        <div class="my-4">
            <a href="{{ route('posts.index') }}" class="btn btn-primary btn-lg me-3">View All Posts</a>
            <a href="{{ route('posts.create') }}" class="btn btn-outline-secondary btn-lg">Create a New Post</a>
        </div>



        <!-- Latest Posts Section -->
        <div class="my-5">
            <h2 class="fw-bold">Latest Posts</h2>
            <div class="row">
                @forelse($latestPosts as $post)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted">No posts available yet. Be the first to create one!</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
