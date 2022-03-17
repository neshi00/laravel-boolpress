<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>lista post</h1>

    <a href="{{ route("admin.posts.create") }}">Aggiungi post</a>

    @foreach ($posts as $post)
    <div>
        
        {{ $post->title }}
        
        <span><a href="{{ route("admin.posts.show", $post->id) }}">Dettagli</a></span>
    
    </div>  
    
    
    @endforeach
    
</body>
</html>