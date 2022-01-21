<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Olio EVO Oleum Mazzola</title>
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >

    <div class="oleum-banner" style="background: url(<?php echo header_image(); ?>) no-repeat center center; background-size:cover;">
      <header class="header">
        <a href="<?php echo home_url(); ?>"><img src="wp-content\themes\giardinatheme\img\OleumLogo.png" class="logo" alt="logo Oleum Mazzola"></a>

        <section class="banner">
           <label for="menu-control" class="hamburger">
            <i class="hamburger__icon"></i>
            <i class="hamburger__icon"></i>
            <i class="hamburger__icon"></i>
          </label>

          <input type="checkbox" id="menu-control" class="menu-control">
          <aside class="sidebar">
            <nav class="sidebar__menu">
              <ul class="pt-5"><?php wp_nav_menu();?></ul>
            </nav>
            <label for="menu-control" class="sidebar__close"></label>
          </aside>
        </section>
      </header>

      <div class="opening-text">
        <section class="text">
          <h5>Sicily</h5>
          <h1>Organic Extravirgin Olive Oil</h1>
          <div class="btn btn-main">
            <a href="#free-sample">TASTE IT FOR FREE!</a>
          </div>
        </section>

      </div>

    <!--<?php if(is_home()){ ?><h1><?php bloginfo("name"); ?></h1><?php } ?>
    <?php if(is_page()){ ?><h1><?php the_title(); ?></h1><?php }?>-->
    </div>
