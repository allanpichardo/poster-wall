<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title('-', true, 'right') ?></title>
        <?php wp_head() ?>
    </head>
    <body>
        <?php wp_body_open() ?>
        <div class="poster-wall">
            <header class="header">
                <nav aria-label="Login Menu">
                    <ul class="login-menu">
                        <li><a href="#">posterwall</a></li>
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Login</a></li>
                    </ul>
                </nav>
            </header>
