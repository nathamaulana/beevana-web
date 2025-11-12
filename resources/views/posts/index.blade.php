blade
@extends('layouts.app')


@section('content')
<div class="bg-white p-4 rounded shadow">
<h2 class="text-xl font-semibold mb-3">Posts</h2>
<table class="w-full table-auto">
<thead>
<tr>
<th class="text-left">Title</th>
<th class="text-left">Created</th>
<th></th>
</tr>
</thead>
<tbody>
@foreach($posts as $post)
<tr class="border-t">
<td><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></td>
<td>{{ $post->created_at->format('Y-m-d') }}</td>
<td class="text-right">
<a href="{{ route('posts.edit', $post) }}" class="mr-2">Edit</a>
<form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline">
@csrf
@method('DELETE')
<button type="submit" onclick="return confirm('Delete?')">Delete</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>


<div class="mt-4">
{{ $posts->links() }}
</div>
</div>
@endsection