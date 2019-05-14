<?php get_header();
 //call pageBanner function from function.php
 pageBanner(array(
   'title' => 'All Campsuses',
   'subtitle' => 'We have several located campuses',
   'photo' => ''
 ));
?>



  <div class="container container--narrow page-section">

  <!--Start the Loop -->
  <?php 

  
  	while ( have_posts() ) {
      the_post();
      
    $mapLocation = get_field('map_location');
      
      ?>
      <div class="acf-map">
          <!--
<li><a href="<?php the_permalink(); ?>"><?php the_title(); 
       // $mapLocation = get_field('map_location');
       // echo $mapLocation['lng'];?></a></li>

       --> 
      

       <div class="marker" dat-lat="<?php echo $mapLocation['lat'];?>" dat-lng="<?php $mapLocation['lng'];?>"></div>
    <?php }
     echo paginate_links();
  ?>	
        </div>
   
	
			
          

	
  </div>    
<?php get_footer(); ?>