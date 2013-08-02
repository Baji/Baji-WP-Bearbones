<?php get_template_part( 'templates/head'); ?>


<?php
// basic loop
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="content">
  <article class="post">
    <h1 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
    <small><?php the_time('F jS, Y') ?> - by: <?php the_author() ?></small>
    <p><?php the_excerpt(); ?></p>
  </article>
</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_template_part( 'templates/footer' ); ?>