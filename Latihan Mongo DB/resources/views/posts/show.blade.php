@extends('layouts.default', [
    'title' => 'Detail Product'
])

@section('content')
<div class="level">
    <div class="level-left">
        <h1 class="title is-4">Detail Product</h1>
    </div>
    <div class="level-right buttons">
        <a href="{{ route('posts.edit', $post->id) }}" class="button is-light">Edit</a>
        <a href="{{ route('posts.index') }}" class="button is-light">Back</a>
    </div>
</div>

<hr>

<div class="field">
    <label class="label">Title</label>
    <pre>{{ $post->title }}</pre>
</div>

<div class="field">
    <label class="label">Description</label>
    <pre>{{ $post->description }}</pre>
</div>

<div class="field">
    <label class="label">Stock</label>
    <pre>{{ $post->stock }}</pre>
</div>

<div class="field">
    <label class="label">CreatedAt</label>
    <pre>{{ $post->created_at->format('d F Y') }}</pre>
</div>

<div class="field">
    <label class="label">UpdatedAt</label>
    <pre>{{ $post->updated_at->format('d F Y') }}</pre>
</div>
@endsection
