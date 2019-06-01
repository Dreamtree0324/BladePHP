<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Blog</title>
    <script src="/js/app.js"></script>
</head>
<body>
    <section id="main">
        <div class="container">
            <header>
                <div class="logo">
                    <h1>My Blog</h1>
                </div>

                <div class="icon-bar">
                    <span>아이콘</span>
                    <span>아이콘</span>
                </div>
            </header>
        </div>  
    </section>

    @yield('maincontent')

    <footer>
        <div class="container">
            이곳은 푸터입니다.
        </div>
    </footer>
</body>
</html>