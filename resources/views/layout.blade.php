<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Import materialize.css-->
    <link rel="stylesheet" href="/css/materialize.min.css" media="screen" charset="utf-8">
    <link rel="stylesheet" href="/css/custom.css" media="screen" charset="utf-8">

    <!--    Import font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Fake favicon request to reduce payload-->
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header>
    <nav>
        <div class="nav-wrapper indigo darken-3">
            <a href="/" class="brand-logo">Movie database</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="register">Create an account</a></li>
                <li><a class="btn blue accent-3 lighten-1 waves-effect" href="login">Login</a></li>
            </ul>
        </div>
    </nav>
</header>
<main>
    @yield('content')
</main>
<footer class="page-footer indigo darken-3">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer
                    content.</p>
            </div>
            <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center white-text">
                Made by <a target="_blank" class="white-text" href="//www.reddit.com/u/skillaz1">Skillaz</a>
            </div>
        </div>
</footer>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="/js/materialize.min.js"></script>
</body>
</html>
