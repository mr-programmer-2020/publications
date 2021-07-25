<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>A Basic HTML5 Template</title>
    <meta name="description" content="A simple HTML5 Template for new projects.">
    <meta name="author" content="SitePoint">

    <meta property="og:title" content="A Basic HTML5 Template">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
    <meta property="og:description" content="A simple HTML5 Template for new projects.">
    <meta property="og:image" content="image.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

<div class="container" id="app">
    <div class="container">

        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="{{route('front.search-by-authors')}}" class="nav-link ">Поиск по автору</a></li>
                <li class="nav-item"><a href="{{route('front.search-by-titles')}}" class="nav-link active">Поиск по названию</a></li>
                <li class="nav-item"><a href="{{route('front.list-of-publications')}}" class="nav-link ">Публикации</a></li>
            </ul>
        </header>

    </div>
    <search-by-title></search-by-title>
</div>

<script src="js/app.js"></script>
</body>
</html>

