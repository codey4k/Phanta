<?php

$html = '
    <!DOCTYPE html>
    <html %s>
        <head>
            <title>%s</title>
            <meta charset=%s>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            %s
        </head>
        <body>
            <div class="fab"></div>
            <div class="wrap">
                <section class="menu" id="menu-bar">
                    <div class="menu__container"></div>
                </section>
';

printf(
    $html,
    get_language_attributes(),
    get_bloginfo("name"),
    get_bloginfo("charset"),
    wp_head()
);