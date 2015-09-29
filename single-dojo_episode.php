<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <section class="episode-content">
    <h1><?php the_title(); ?></h1>
    <h2><a href="<?php the_field('profile_url')?>" class="link" target="_blank"><?php the_field('tagline')?></a></h2>
    <div class="video-left">
      <div class="videoplayer">
        <?php the_field('embed_video_url')?>
      </div>
    </div>
    <div class="video-description">
      <p><?php the_field('profile_description')?></p>
    </div>
  </section>
  


<?php endwhile; ?><?php endif; ?>
<?php get_footer(); ?>
