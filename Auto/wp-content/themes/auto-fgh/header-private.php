
<!-- header для страницы "Политика безопасности" -->

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php the_field('title_page'); ?></title>

<?php wp_head(); ?>


</head>

<body>

<header class="header header-private">
  <div class="container">
    <div class="header__top">
      <?php the_custom_logo(); ?>

      <a class="phone" href="tel:<?php the_field('phone-number',5); ?>">
        <?php the_field('phone',5); ?>
      </a>
    </div>

  </div>
</header>
