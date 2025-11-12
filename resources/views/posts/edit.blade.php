blade
@extends('layouts.app')


@section('content')
<div class="bg-white p-4 rounded shadow">
<h2>Edit Post</h2>
<form action="{{ route('posts.update', $post) }}" method="POST">
@csrf
@method('PUT')
<div>
<label>Title</label>
<input type="text" name="title" value="{{ old('title', $post->title) }}">
</div>
<div>
<label>Body</label>
<textarea name="body">{{ old('body', $post->body) }}</textarea>
</div>
<button type="submit">Update</button>
</form>
</div>
@endsection