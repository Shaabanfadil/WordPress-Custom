<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package smak
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Website Tutorial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
    
    
     <style>
.demo {
  max-width: 960px;
  margin: 150px auto;
}

.demo > div {
  float: left;
  margin: 20px;
}
</style>
<script language="javascript">
		var divs = ["Menu1", "Menu2", "Menu3", "Menu4"];
var visibleDivId = null;
function toggleVisibility(divId) {
  if(visibleDivId === divId) {
    //visibleDivId = null;
  } else {
    visibleDivId = divId;
  }
  hideNonVisibleDivs();
}
function hideNonVisibleDivs() {
  var i, divId, div;
  for(i = 0; i < divs.length; i++) {
    divId = divs[i];
    div = document.getElementById(divId);
    if(visibleDivId === divId) {
      div.style.display = "block";
    } else {
      div.style.display = "none";
    }
  }
}
	</script>

	<?php wp_head();?>
</head>
<body>
<header id="header_area">
	<div class="container">
    	<nav class="navbar navbar-inverse">
   
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false"> 
      <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> 
      <span class="icon-bar"></span> 
      <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#"><img src="img/logo.png"  alt=""/></a> 
      </div>
    
    
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    
        
        
        <div class="collapse navbar-collapse" id="myNavbar">
      <?php
            wp_nav_menu( array(
                'menu_id'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,              
                'menu_class'        => 'nav navbar-nav navbar-right',
				'contianer_id'   		=> 'myNavbar'
                )
            );
        ?>
    </div>
       
       
        <!--
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#">Home </a> </li>
		  <li><a href="#">About Us </a> </li>
		  <li><a href="#">Services </a> </li>
		  <li><a href="#">Testemonials </a> </li>
		  <li><a href="#">Contact </a> </li>
      </ul>
    </div>
    -->
    <!-- /.navbar-collapse --> 
	  		</nav>
			  </div><!-- /.container-fluid --> 

    </header>
          <!-- END HEADER -->

            <section class="header-section">
				<div class="container text-center">
					<div id="branding_Bg">
						<h1>Branding have a different <span>diffenition</span></h1>
						<button type="button" class="btn btn-success">Buy This Theme</button>
					</div>
				</div>
              <!--END container-->
              </section><!--END header-section-->
