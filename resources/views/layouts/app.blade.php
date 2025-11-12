blade
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Laravel Starter</title>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-900">
<div class="container mx-auto p-6">
<header class="mb-6">
<h1 class="text-2xl font-bold">Laravel Starter</h1>
<nav class="mt-2">
<a href="{{ route('posts.index') }}" class="mr-4">Posts</a>
<a href="{{ route('posts.create') }}">Create</a>
</nav>
</header>


@if(session('success'))
<div class="bg-green-100 border border-green-300 p-3 mb-4">{{ session('success') }}</div>
@endif


@yield('content')
</div>
</body>
</html>