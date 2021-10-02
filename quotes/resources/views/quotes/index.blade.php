<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Breaking Bad Quotes</title>
</head>
<body>
    <h1>Breaking Bad Quotes: </h1>
    @foreach ($quotes as $quote)
        <p>{{$quote}}</p>
    @endforeach
    
</body>
</html>