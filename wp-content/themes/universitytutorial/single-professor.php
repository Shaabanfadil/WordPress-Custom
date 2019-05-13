<?php
get_header(); 


while(have_posts()){
    the_post(); 
   //call pageBanner function from function.php
   pageBanner();
   ?>
    <div class="container container--narrow page-section">

 
    <div class="generic-content">
     <div class="row group">
       <div class="one-third">
       <?php the_post_thumbnail() ?>
    
     </div>
    <div class="two-third">
    <?php the_content();?>
    </div>
    </div>
    </div>
  
   <!-- Loop through array post type field object-->
    <?php 
    $relatedprograms = get_field('related_programs');
  if($relatedprograms){
    echo '<hr class="section-break"';
  echo '<h2 class="headline headline--medium"><strong>Subjects(s) Taught</strong></h2>';
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