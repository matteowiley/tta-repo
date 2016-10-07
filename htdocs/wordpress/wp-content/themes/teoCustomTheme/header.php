<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>
<script>
$( document ).ready(function() {
    jQuery(".Monteverde").detach().appendTo('.monteverde div');
    jQuery(".Jaco").detach().appendTo('.jaco .products-search');
    jQuery(".Antonio").detach().appendTo('.manuel-antonio .products-search');
    jQuery(".Hermosa").detach().appendTo('.playa-hermosa .products-search');
    jQuery(".Tortuga").detach().appendTo('.isla-tortuga .products-search');
    jQuery(".Jose").detach().appendTo('.san-jose .products-search');
    jQuery(".Tamarindo").detach().appendTo('.tamarindo .products-search');
    jQuery(".Fortuna").detach().appendTo('.la-fortuna-arenal-volcano .products-search');
    $('.products-search:empty').parent().remove();
    $( "#menuToggle" ).on( "click", function() {
        if($('#menu').hasClass('active')){
            $('#menu').removeClass('active');
            $('#menu').slideUp();
        }else{
            $('#menu').addClass('active');
            $('#menu').slideDown();
        }
    });
});
</script>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<nav id="large-nav" role="navigation">
	<div class="logo-container">
		<a href="/"><img src="/wp-content/uploads/2016/10/cropped-whitelogo.png"></a>
	</div>
	  <div id="menu-container">
	    <ul id="large-menu">
	      <a href="/adventure"><li>Adventure</li></a>
	      <a href="/lodging"><li>Lodging</li></a>
	      <a href="/transportation"><li>Transportation</li></a>
	      <a href="/group-travel/24/"><li>Group</li></a>
	      <a href="/about-tta/17/"><li>About</li></a>
	    </ul>
	  </div>
	</nav>
	<nav id="small-nav" role="navigation">
	<div class="logo-container">
		<a href="/"><img src="/wp-content/uploads/2016/10/cropped-whitelogo.png"></a>
	</div>
	  <div id="menuToggle">
	    <input type="checkbox" />
	    <span></span>
	    <span></span>
	    <span></span>
	    <ul id="menu">
	      <a href="/adventure"><li>Adventure</li></a>
	      <a href="/lodging"><li>Lodging</li></a>
	      <a href="/transportation"><li>Transportation</li></a>
	      <a href="/group-travel/24/"><li>Group</li></a>
	      <a href="/about-tta/17/"><li>About</li></a>
	    </ul>
	  </div>
	</nav>
	<div id="content" class="site-content">
