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
      <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link( 'program' )?>">
      <i class="fa fa-home" aria-hidden="true"></i> All Programs </a> 
      <span class="metabox__main"><?php the_title();?></span>
      
    </p>
    </div>
    <div class="generic-content">
    <?php the_content();?>
    </div>

    <?php 

$ralatedProfessors = new WP_Query(array(
  'post_type' => 'professor',
  'posts_per_page' => -1,
  'orderby'  => 'title',
  'order' => 'ASC',
  'meta_query' => array(
    array(
        'key' => 'related_programs',
        'compare' => 'LIKE',
        'value' => '"' . get_the_ID() .'"'
     )

  )
  
));


if($ralatedProfessors->have_posts()){
  echo '<hr class="section-break">';
  echo '<h2 class="headline headline--medium">Upcoming ' . get_the_title() .' Event</h2>';

  while ($ralatedProfessors->have_posts()) {
    $ralatedProfessors->the_post(); ?>
  
 
  <li><a href="<?php the_permalink();?>"><?php the_title();?></a></li>
  <?php }
}
    wp_reset_postdata();//Resest query to globals
    
    //Display post type in front end
    $today = date('Ymd');
    $homePageEvents = new WP_Query(array(
      'post_type' => 'event',
      'posts_per_page' => -1,
      'meta_key' => 'event_date',
      'orderby'  => 'meta_value_num',
      'order' => 'ASC',
      'meta_query' => array(
        array(
          'key' => 'event_date',
          'compare' => '>=',
          'value' => $today,
          'type' =>'numaric'
        ),
        array(
            'key' => 'related_programs',
            'compare' => 'LIKE',
            'value' => '"' . get_the_ID() .'"'
         )

      )
      
    ));


    if($homePageEvents->have_posts()){
      echo '<hr class="section-break">';
      echo '<h2>Upcoming ' . get_the_title() .' Event</h2>';
  
      while ($homePageEvents->have_posts()) {
        $homePageEvents->the_post(); ?>
      <div class="event-summary">
        <a class="event-summary__date t-center" href="<?php the_permalink()?>">
          <span class="event-summary__month"><?php 
          $eventDate = new DateTime(get_field('event_date'));
          echo $eventDate->format('M')
          ?></span>
          <span class="event-summary__day"><?php 
          echo $eventDate->format('d')
          ?></span>  
        </a>
        <div class="event-summary__content">
          <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h5>
          <!--alternative method for excerpt display-<p><?php echo wp_trim_words(get_the_excerpt(), 18 );?> <a href="<?php the_permalink()?>" class="nu gray">Learn more</a></p>-->
          <p><?php if(has_excerpt()){
            echo get_the_excerpt();
          }else{
            echo wp_trim_words( get_the_content(), 18 );
          }
          ?> <a href="<?php the_permalink()?>" class="nu gray">Learn more</a></p>
  
        </div>
      </div>
     
      <?php }
    }
 
    //call function to reset data for custom query created above $homePagePosts
    wp_reset_postdata();
    ?>
    </div>
<?php
}
?>
</div>
<?php
get_footer(); ?>