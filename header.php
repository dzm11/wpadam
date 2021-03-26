<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('-', true, 'right'); ?> Adam Kopacki</title>
    <?php wp_head(); ?>
</head>
<body>
    <div class="container">
        <header>
            <nav class="nav flex flex-jc-se flex-ai-c">
                <div class="nav-icon burger hide-for-desktop">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="mobile hide-for-desktop">
                    <div class="menu">
                        <div class="menu__items">
                            <a href="opowiadam.php">opowiADAM</a>
                            <a href="omnie.php">O mnie</a>
                            <a href="media.php">Media</a>
                            <a href="guruna.php">Guruna</a>
                            <a href="kontakt.php">Kontakt</a>
                        </div>
                        <div class="menu__social">
                            <div class="row">
                                <a href="#"><img src="http://stronaadama.local/wp-content/uploads/2021/03/fb.svg" alt=""></a>
                                <a href="#"><img src="http://stronaadama.local/wp-content/uploads/2021/03/ig.svg" alt=""></a>
                                <a href="#"><img src="http://stronaadama.local/wp-content/uploads/2021/03/yt.svg" alt=""></a>
                            </div>
                            <div class="row">
                                <a href="#"><img src="http://stronaadama.local/wp-content/uploads/2021/03/lc.svg" alt=""></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="nav__left nav__links hide-for-mobile">
                    <a href="opowiadam.php">opowiADAM</a>
                    <a href="omnie.php">O mnie</a>
                    <a href="media.php">Media</a>
                    <a href="guruna.php">Guruna</a>
                    <a href="kontakt.php">Kontakt</a>
                </div>
                <div class="nav__logo hide-for-mobile">
                    <a href="index.php">Adam Kopacki</a>
                </div>
                <div class="nav__right nav__links hide-for-mobile">
                    <a href="#">lubimyczytac.pl</a>
                    <a href="#">Instagram</a>
                    <a href="#">Facebook</a>
                    <a href="#">Youtube</a>
                </div>
            </nav>
        </header>
