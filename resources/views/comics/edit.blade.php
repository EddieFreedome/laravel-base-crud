<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT</title>
</head>
<body>
    <main>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('put')
            <div>
                <label for="">Titolo</label>
                <input type="text" name="title">
            </div>
            <div>
                <label for="">Descrizione</label>
                <input type="text" name="description">
            </div>
            <input type="submit" value="Invio">
        </form>
    </main>
</body>
</html>