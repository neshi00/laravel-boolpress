<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route("admin.posts.store") }}" method="post">
        @csrf

        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" placeholder="scrivi il titolo">
        </div>

        <div>
            <label>Contenuto</label>
            <textarea name="content" placeholder="inizia a scrivere"></textarea>
        </div>

        <input type="submit" value="invia">
    
    
    
    
    
    
    </form>
    


</body>
</html>