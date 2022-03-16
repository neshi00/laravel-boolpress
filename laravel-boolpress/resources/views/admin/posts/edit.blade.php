<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{ route("admin.posts.update", $post->id) }}" method="post">

        @csrf
        @method("put")

        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" 
                placeholder="Inserisci il titolo" 
                value="{{ old('title', $post->title) }}">
        </div>

        <div>
            <label for="content">Contenuto</label>
            <textarea name="content" 
                cols="30" 
                rows="10"
                placeholder="Inizia a scrivere qualcosa...">
                {{ old("content", $post->content) }}
            </textarea>
        </div>

        <input type="submit" value="salva post">
    
    
    
    
    
    
    </form>
    
</body>
</html>