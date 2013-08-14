<?php get_template_part( 'templates/core/head'); ?>

<div id="page-contain">
  <div class="hero hero-home" style="background: url('<?php echo bloginfo('template_directory'); ?>/assets/images/hero-demo.jpg') transparent no-repeat center center;">
    <h2 class="hero-title">We are a people passionate for sharing <br /> Jesus and His purposes in the earth.</h2>
  </div>


  <div class="row breadcrumbs">
      / <?php if(function_exists('bcn_display'))
      {
          bcn_display();
      }?>
  </div>


  <?php
  // basic loop
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <div class="row">
    <article class="post col-full">
      <h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
      <small><?php the_time('F jS, Y') ?> - by: <?php the_author() ?></small>
      <p><?php the_excerpt(); ?></p>
    </article>
  </div>

  <?php endwhile; else: ?>
  <div class="row">
    <p class="post"><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  </div>
  <?php endif; ?>
</div><!-- end page-contain -->

<?php get_template_part( 'templates/core/footer' ); ?>