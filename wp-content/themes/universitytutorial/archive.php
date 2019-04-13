<?php get_header();?>

<div class="page-banner__bg-image" style="background-image:url(<?php echo get_theme_file_uri('images/ocean.jpg')?>);"></div>
    <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php if(is_category()){
        single_cat_title();}else{
        if(is_author()){
          echo "Post by: "; the_author();
        }
        }?></h1>
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