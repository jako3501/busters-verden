<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>

</head>

<body>
    <header>
        <?php
        if (has_nav_menu('custom-menu')) {
            wp_nav_menu(
                array(
                    'theme_location' => 'custom-menu',
                    'container' => 'nav',
                    'container_class' => 'navbar'
                )
            );
        }
        ?>
    </header>