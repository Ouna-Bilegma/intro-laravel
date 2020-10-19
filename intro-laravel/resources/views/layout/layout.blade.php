<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href=https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="styles/navigation.css">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/footer.css">


    <title>Home</title>
</head>

<body>
    <nav>
        <ul>
            <li><img src="sushi.svg" alt="sashimi"></li>
            <li class="logo-name">SUSHI HOUSE</li>
            <li id="right" class="{{Request::path() === '/' ? 'current_page_item' : ''}}"><a href="/"
                    accesskey="1">HOME</a></li>
            <li class="{{ Request::path() === 'reviews' ? 'current_page_item' : '' }}"><a href="/reviews"
                    accesskey="2">REVIEWS</a></li>
        </ul>
    </nav>

    @yield ('header')


    <main>
        @yield ('meals')
        @yield ('content')
        @yield ('reviews')
    </main>

    <footer>
        <p class="footer">Becode 2020</p>
    </footer>
</body>

</html>