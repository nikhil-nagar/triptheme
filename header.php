<?php
/**
 * Header Template
 * 
 * @package triptheme
 */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>

</head>

<body>
    <header>
        <?php get_template_part('template-parts/header/nav'); ?>
    </header>