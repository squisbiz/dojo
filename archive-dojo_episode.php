<?php get_header(); ?>

<div class="episodesindex">

<div class="cont-h1">
  <h1>Case Studies</h1>
</div>

<ul>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

  <li>
  
	<a href="<?php the_permalink(); ?>" class="post-thumb" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  	<div class="thumb" style="background: url(<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'full', true); echo $thumb_url[0]; ?>) no-repeat center center; background-size: cover;"></div>
	</a>
	
	
  <div class="excerpt">
		<h2><?php the_title(); ?></h2>
		<h4><a href="<?php the_field('profile_url')?>" class="link"><?php the_field('tagline')?></a></h4>
		<p><?php the_field('profile_description')?><a href="<?php the_permalink(); ?>" class="button small-button">See Episode...</a></p>
	</div> 
  	
  </li>
<?php endwhile; endif; ?>
  
</ul>
</div><!-- episodesindex -->

<?php get_footer(); ?>
