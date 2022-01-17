<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    <main>
        <h1>show</h1>
        <p>{{ $comic['title'] }}</p>
        <p>{{ $comic['description'] }}</p>
        <a href="{{ route('comics.index') }}">Torna alla home</a>
        <a href="{{ route('comics.edit') }}">Modifica</a>
        
        <form 
            action="{{ route('comic.destroy', ['id' => $comic->id]) }}"
            method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Cancella">            
        </form>

    </main>
</body>
</html>