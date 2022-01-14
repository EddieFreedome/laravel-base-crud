<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <main>
        <h1>Home</h1>

        @foreach($comics as $comic)
            <h2>{{$comic['title']}}</h2>
        @endforeach
        <a href="comics/create">Aggiungi nuovo comic</a>
    </main>
</body>
</html>