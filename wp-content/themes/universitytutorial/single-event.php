<?php
get_header(); 


while(have_posts()){
    the_post(); ?>
      <div class="page-banner__bg-image" style="background-image:url(<?php echo get_theme_file_uri('images/ocean.jpg')?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title();?></h1>
      <div class="page-banner__intro">
        <p>Don't forget to replace me later</p>
      </div>
    </div>  
  </div>
   
    <div class="container container--narrow page-section">

    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link( 'event' )?>">
      <i class="fa fa-home" aria-hidden="true"></i> Event Home </a> 
      <span class="metabox__main"><?php the_title();?></span>
      
    </p>
    </div>
    <div class="generic-content">
    <?php the_content();?>
    </div>
  
   <!-- Loop through array post object-->
    <?php 
    $relatedprograms = get_field('related_program');
  if($relatedprograms){
    echo '<hr class="section-break"';
  echo '<h2 class="headline headline--medium"><strong>Related Program(s)</strong></h2>';
  echo '<ul class="link-list min-list">';
    foreach ($relatedprograms as $program) {?>
      
      <li><a href="<?php get_the_permalink($program )?>"><?php echo get_the_title($program);?></a></li>
    <?php }
 echo '</ul>';

    }
    ?>
    </div>
<?php
}
?>
</div>
<?php
get_footer(); ?>