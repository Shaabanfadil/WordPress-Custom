<?php
get_header(); 


while(have_posts()){
    the_post(); 
    pageBanner();
    ?>
 
    <div class="container container--narrow page-section">

    <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link( 'event' )?>">
      <i class="fa fa-home" aria-hidden="true"></i> Map </a> 
      <span class="metabox__main"><?php the_title();?></span>
      
    </p>
    </div>
    <div class="generic-content">
    <?php the_content();?>
    </div>
  
   <!-- Loop through array post type field object-->
    <?php 
    $relatedmap = get_field('map_location');
  if($relatedmap){
    echo '<hr class="section-break"';
  echo '<h2 class="headline headline--medium"><strong>map(s)</strong></h2>';
  echo '<ul class="link-list min-list">';
    foreach ($relatedmap as $map) {?>
      
      <li><a href="<?php get_the_permalink($map )?>"><?php echo get_the_title($map);?></a></li>
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