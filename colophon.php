<!doctype html> 
<html lang="en">

<?php include "inc/head.inc" ?>

<body>
<div class="container">

<header>
	<h1><a href="index.php">People in Computing</a></h1> 
</header>

<?php include "inc/nav.inc" ?>

	<div class="_colophon">
	<h2>Details on the Creation of This Website</h2>

		<h3>The Team's Roles and Other Information</h3>
		</div>

            <div class="card blue darken-1">
			<div class="card-content white-text">
			<span class="card-title"><h4>The Architect: Kim Sitthisack</h4></span>
				<p>Set up the initial repository and selected the framework that was used (instructed the Framework Wrangler on how to use it). This person decided how the pages would be split up into PHP includes and when in the process that happened.</p>
            </div><!--.card-content-->
            </div><!--.card-->

            <div class="card blue">
            <div class="card-content white-text">
			<span class="card-title"><h4>The Framework Wrangler: Ling Li</h4></span>
				<p>Working with the architect the framework was installed and was helped with regards on how to use it. Mostly responsible for the pages and how they were coded. Took direction from the content master and designer on what went where on which pages and how the layout was supposed to go.</p>
            </div><!--.card-content-->
		    </div><!--.card-->


            <div class="card blue lighten-1">
            <div class="card-content white-text">
			<span class="card-title"><h4>The Content Master and Designer: Darene Vela</h4></span>
				<p>Responsible for gathering all the content and structuring it, writing HTML. This person was responsible for the appearance, which includes usability of the website.</p>
            </div><!--.card-content-->
		    </div><!--.card-->


            <div class="card blue lighten-2">
            <div class="card-content white-text">
			<span class="card-title"><h4>The CSS Artist: Zipei Yang</h4></span>
				<p>This person expanded the framework beyond what it does out-of-the-box in order to give the website a custom look and feel. This was done working with the architect and the content manager and designer. Their own CSS was created in order to override the styles that came with the framework.</p>
            </div><!--.card-content-->
		    </div><!--.card-->


            <div class="card blue lighten-1">
            <div class="card-content white-text">
			<span class="card-title"><h4>The JavaScript Coder: Sophie Wu</h4></span>
				<p>This person was responsible for implementing all JavaScript functionality on the website which may have included features from the framework and/or features of the required homepage slideshow. Apart from this, also any other website "behaviors".</p>
		    </div><!--.card-content-->
		    </div><!--.card-->


            <div class="card blue">
            <div class="card-content white-text">

		    <span class="card-title"><h3>Technology Used</h3></span>

		   <ul>	
		   	<li>Framework: Materialize</li>
		  	<li>Github</li>
		  	<li>PHP</li>
			<li>JavaScript</li>
			<li>Google Icon Font</li>
		   </ul>   
		
			</div><!--.card-content-->
			</div><!--.card-->


        <div class="card blue darken-1">
            <div class="card-content white-text">
		<span class="card-title"><h3>Content Sources</h3></span>

			<ul>
				<li>
					<a href="https://en.wikipedia.org/wiki/Tim_Berners-Lee">Tim Berners-Lee</a>
				</li>
				<li>
					<a href="https://en.wikipedia.org/wiki/Grace_Hopper">Grace Hopper</a>
				</li>
				<li>
					<a href="https://en.wikipedia.org/wiki/Margaret_Hamilton_(scientist)">Margaret Hamilton</a>
				</li>
			</ul>
            </div><!--.card-content-->
			</div><!--.card-->


<?php include "inc/footer.inc" ?>
            
</div><!--.container-->
<script src="js/materialize.min.js"></script>

<script type="text/javascript" language="javascript">
$( document ).ready(function(){
	//$(".button-collapse").sideNav();//mobile screen menu init
	$('.carousel').carousel(); //carousel init
});
</script>
<script>$(".button-collapse").sideNav();</script>

</body>
</html>
