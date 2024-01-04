<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Post</title>
</head>
<body>
   <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
    <form method="POST" action="/posts/{{ $post->id }}">
        @method('PUT')
        @csrf
        
        <div class="mb-4">
            <label class="font-bold text-gray-800" for="title">Title: </label>
            <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title" value="{{ $post->title }}">
        </div>

        <div class="mb-4">
            <label class="font-bold text-gray-800" for="content">Content</label>
            <textarea class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content" name="content"> {{ $post->content }}
            </textarea>
        </div>

        <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
        Update 
        </button>

        <a href="/posts" class="bg-gray-500 hover:bg-gray-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
        Cancel 
        </a>

        <form action="/posts/{{ $post->id }}">
            @csrf
            
            @method('DELETE')

            <a href="/posts" class="bg-red-500 ml-4 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-blue-500 rounded">
            Delete
            </a>
        </form>
       
    </form>
   </div>
</body>
</html>