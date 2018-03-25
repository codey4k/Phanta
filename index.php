<?php

get_header();

$header = '
    <header class="header">
        <div class="header__container">
            <img src="%s/images/hero.jpg" alt="header img" class="header__img" />
        </div>
    </header>
    <main class="main">
        
    </main>
';

printf($header, get_stylesheet_directory_uri());

get_footer();
