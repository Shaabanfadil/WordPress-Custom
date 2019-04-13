<?php get_header();?>

<div class="page-banner__bg-image" style="background-image:url(<?php echo get_theme_file_uri('images/ocean.jpg')?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title();?></h1>
      <div class="page-banner__intro">
        <p>Don't forget to replace me later</p>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">

  <!--Start the Loop -->
  <?php 
  	while ( have_posts() ) {
      the_post();?>
      <div class="post-item">
        <h2>
          <a href="<?php  the_permalink()?>"><?php the_title();?></a>
        </h2>
        <div class="metabox">
          <P>Posted By: <?php the_author();?> on <?php the_date();?> in <?php ?></P>
        </div>
        <div class="generic-contet>">
        <?php the_excerpt();?>
        <p><a href="<?php the_permalink();?>">continue reading &raquo;</a></p>
        </div>
       
      </div>
    <?php }
  ?>	

			
			


	
  </div>    
<?php get_footer(); ?>