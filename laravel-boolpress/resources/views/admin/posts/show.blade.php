<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Dettagli post</h1>

    <a href="{{ route("admin.posts.index") }}">Indietro</a>
    <hr>

    <div>
        <span>{{ $post->title }}</span>
        <span><a href="{{ route("admin.posts.edit", $post->id) }}">Modifica</a></span>
        <p>{{ $post->content }}</p>

        <hr>

        @php
            use Carbon\Carbon;
        @endphp

        <p>Data creazione post: {{ $post->created_at->format("d/m/Y H:i") }}</p>

        @if($post->updated_at->diffForHumans(date(0)) <= 12)
            <p>Ultima modifica post: {{ $post->updated_at->diffForHumans(date(0)) }}</p>
            @else <p>Ultima modifica post: {{ $post->updated_at->format("d/m/Y H:i") }}</p>
            
        @endif
</html>