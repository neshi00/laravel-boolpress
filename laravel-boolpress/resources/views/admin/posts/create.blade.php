<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route("admin.posts.store") }}" method="post" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" placeholder="scrivi il titolo">
        </div>

        <div>
            <label>Immagine di copertina</label>
            <input type="file" name="coverImg">
        </div>

        <div>
            <label>Contenuto</label>
            <textarea name="content" placeholder="inizia a scrivere"></textarea>
        </div>

        <div>
            <label>Tag</label>
        </div>

        @foreach ($tags as $tag)
        <span>
            <input type="checkbox" 
                value="{{ $tag->id }}"
                id="tag_{{ $tag->id }}"
                name="tags[]">
            <label id="tag_{{ $tag->id }}">{{ $tag->name }}</label>
        </span>
        @endforeach

        <div>
            <input type="submit" value="invia">
        </div>
    
    
    
    
    
    
    </form>
    


</body>
</html>