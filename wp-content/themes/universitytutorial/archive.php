<?php get_header();
//call pageBanner function from function.php
pageBanner(array(
  'title' => get_the_archive_title(),
  'subtitle' => get_the_archive_description(),
));
?>

  <div class="container container--narrow page-section">

  <!--Start the Loop -->
  <?php 
  	while ( have_posts() ) {
      the_post();?>
      <div class="post-item">
        <h2 class="headline headline--medium headline--post-title">
          <a href="<?php  the_permalink()?>"><?php the_title();?></a>
        </h2>
        <div class="metabox">
          <P>Posted By: <?php the_author_posts_link();?> on <?php the_time('n.j.y');?> in <?php echo get_the_category_list(', ');?></P>
        </div>
        <div class="generic-contet>">
        <?php the_excerpt();?>
        <p><a class="btn btn--blue" href="<?php the_permalink();?>">continue reading &raquo;</a></p>
        </div>
      

      </div>
       <!--Add pagination -->
      
    <?php }
     echo paginate_links();
  ?>	

			
			


	
  </div>    
<?php get_footer(); ?>