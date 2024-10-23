
<!DOCTYPE html>
<html>
<head>
    <title>ÇTBMYO</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 0;
        }

        header {
            margin-top: 20px;
        }

        header, footer {
            background-color: lightcyan;
            text-align: center;
        }
        main {
            padding: 2em;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 1em;
        }
    </style>
</head>
<body>
<header>
    <h1>Çanakkale Teknik Bilimler Meslek Yüksekokulu</h1>
</header>
<nav>
    <ul>
        <li><a href="/">Ana Sayfa</a></li>
        <li><a href="/about">Hakkımızda</a></li>
        <li><a href="/contact">İletişim</a></li>
    </ul>
</nav>

<main>
    @yield('main')
</main>
<footer>
    Copyright &copy; 2024 | Çanakkale Teknik Bilimler MYO
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
