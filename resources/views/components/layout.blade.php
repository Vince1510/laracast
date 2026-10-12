@props([
    'title' => 'laracast'
])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        .max-w-400 {
            max-width: 400px;
            margin: 0 auto;
        }

        .card {
            background-color: blue;
            padding: 10px;
            border-radius: 10px;
            text-align: center;
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>
    <main>

        {{ $slot }}
    </main>

</body>

</html>