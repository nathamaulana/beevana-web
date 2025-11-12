blade
@extends('layouts.app')


@section('content')
<div class="bg-white p-4 rounded shadow">
<h2>{{ $post->title }}</h2>
<p>{{ $post->body }}</p>
<a href="{{ route('posts.index') }}">Back</a>
</div>
@endsection