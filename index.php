<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/dop_win.css">
</head>
<body>
<header id="header"><div id="gray"><div id="login">
            <nav class="tabs_menu">
                <ul class="panel">
                        <li><a href="#tab1" class="active">Игра</a></li>
                        <li><a href="#tab2">Файлы</a></li>
                </ul>
            </nav>
</header>
<main>

    <div id="main">

        <div  class="tabs_box">
            <div class="tab" id="tab1">
                <button>Запустить</button>

            </div>
            <div class="tab" id="tab2">
                <p>Контент второй вкладки...</p>
            </div>
    </div>
</main>
</body>
</html>
<script src="assets/css/jquery-3.1.1.min.js"></script>
<script>
    $(document).ready(function(){
        $('.tabs_menu a').click(function(e) {
            e.preventDefault();
            $('.tabs_menu .active').removeClass('active');
            $(this).addClass('active');
            var tab = $(this).attr('href');
            $('.tab').not(tab).css({'display':'none'});
            $(tab).fadeIn(400);
        });
    });
</script>