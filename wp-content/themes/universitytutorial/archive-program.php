<?php get_header();
 //call pageBanner function from function.php
 pageBanner(array(
   'title' => 'All Programs',
   'subtitle' => 'There is something for everyone. Have a look around',
   'photo' => ''
 ));
?>



  <div class="container container--narrow page-section">

  <!--Start the Loop -->
  <?php 

  
  	while ( have_posts() ) {
      the_post();?>
      <ul class="link-list min-list">
<li><a href="<?php the_permalink(); ?>"><?php the_title();?></a></li>

       <!--Add pagination -->
      
    <?php }
     echo paginate_links();
  ?>	
  </ul>
   
	
			
          

	
  </div>    
<?php get_footer(); ?>