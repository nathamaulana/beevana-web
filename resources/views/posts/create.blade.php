blade
@extends('layouts.app')


@section('content')
<div class="bg-white p-4 rounded shadow">
<h2>Create Post</h2>
<form action="{{ route('posts.store') }}" method="POST">
@csrf
<div>
<label>Title</label>
<input type="text" name="title" value="{{ old('title') }}">
</div>
<div>
<label>Body</label>
<textarea name="body">{{ old('body') }}</textarea>
</div>
<button type="submit">Save</button>
</form>
</div>
@endsection