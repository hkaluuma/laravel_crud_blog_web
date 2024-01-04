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
   <h3 class="text-4xl font-bold mb-4"> Adding Post: </h3>
    <form method="POST" action="/posts">
        @csrf
        
        <div class="mb-4">
            <label class="font-bold text-gray-800" for="title">Title: </label>
            <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title">
        </div>

        <div class="mb-4">
            <label class="font-bold text-gray-800" for="content">Content</label>
            <textarea class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content" name="content">
            </textarea>
        </div>

        <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
        Create 
        </button>
        <a href="/posts" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
        Cancel 
        </a>
       
    </form>
   </div>
</body>
</html>