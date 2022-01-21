<?php get_header ();?>

<main class="main-content">
    <section>
      <?php while(have_posts()){the_post();?>
      <div class="content">
        <!--<a href="#"><h4><?php bloginfo('get_the_title'); ?></h4></a>-->
        <p><?php the_content(); ?></p>
      </div>

        <?php }wp_reset_query(); ?>
    </section>

    <div class="pagination">
      <?php echo paginate_links();?>
    </div>

</main>
<?php get_footer ();?>
