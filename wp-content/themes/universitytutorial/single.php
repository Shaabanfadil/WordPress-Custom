<?php
get_header(); 


while(have_posts()){
    the_post(); ?>
    <div class="container container--narrow page-section">
    <h3><?php the_title(); ?></h3>
    <p><?php the_content() ?></p>
</div>
<?php
}
?>
</div>
<?php
get_footer(); ?>