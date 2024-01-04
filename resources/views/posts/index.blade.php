<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home Page</title>
</head>
<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">

    <h1 class="text-4xl font-bold mb-4"> Hillary's blog</h1>

    <a href="/posts/create" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-1 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
        Add post 
    </a>
    @foreach($posts as $post)
        <article class="mb-2">
            <a href="/posts/{{ $post->id }}/edit" class="text-xl font-bold text-blue-500">{{ $post->title }} </a>
            <p class="text-md text-gray-600">{{ $post->content }}</p>
            <hr class="mt-2">
        </article> 
    @endforeach
    </div>
</body>
</html>