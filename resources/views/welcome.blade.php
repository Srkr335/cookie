<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Cookie </title>
</head>
<body>
    <h1>Laravel Cookie </h1>
    <p>Click the button to set a cookie.</p>
    <form action="{{ route('setCookie') }}" method="get">
        @csrf
        <button type="submit">Set Cookie</button>
    </form>
</body>
</html>
