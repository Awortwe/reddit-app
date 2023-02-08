@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $community->name }}</div>

                <div class="card-body">
                    <a class="btn btn-primary"
                    href="{{ route('communities.posts.create', $community) }}">
                        Add Post</a>
                    <br><br>
                    @forelse ($posts as $post)
                        <a style="text-decoration: none"
                        href="{{ route('communities.posts.show', [$community, $post]) }}"><h2>{{ $post->title }}</h2></a>
                        <p>{{ Illuminate\Support\Str::words($post->post_text, 10) }}</p>
                        <hr>
                    @empty
                        No posts found
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
