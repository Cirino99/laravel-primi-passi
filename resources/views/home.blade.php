<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <nav>
        <ul>
            <li>
                {{-- {{}} = <?php ?> --}}
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('about') }}">About</a>
            </li>
            <li>
                <a href="{{ route('store') }}">Store</a>
            </li>
        </ul>
    </nav>
    <h1>Hello Word</h1>
</body>
</html>