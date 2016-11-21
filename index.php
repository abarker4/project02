
<!doctype html> 
<html lang="en">

<?php include "inc/head.inc" ?>

<body>
	<div class="container">

		<header>
			<h1><a href="index.php">People in Computing</a></h1> 
		</header>

		<?php include "inc/nav.inc" ?>

				<div class="_index">
				<h2>Computer Science Contributors</h2>

				<div class="carousel">
		    		<a class="carousel-item tbl_popup_open" href="#one!"><img src="images/ss1.jpg" alt="">Tim Berners-Lee</a>
		   			<a class="carousel-item fm_popup_open" href="#two!"><img src="images/ss2.gif" alt="">Ferranti Mark 1</a>
		    		<a class="carousel-item gh_popup_open" href="#three!"><img src="images/ss3.jpg" alt="">Grace Hopper</a>
		    		<a class="carousel-item uni_popup_open" href="#four!"><img src="images/ss4.jpg" alt="">UNIVAC I</a>
		   			<a class="carousel-item mh_popup_open" href="#five!"><img src="images/ss5.jpg" alt="">Magaret Hamilton</a>
		    		<a class="carousel-item afs_popup_open" href="#six!"><img src="images/ss6.jpg" alt="">Apollo flight software</a>
				</div> <!-- carousel-->
				<!-- Add content to the popup -->
				
				<div id="tbl_popup">

				    Tim Berners-Lee. He's done things. Here's a picture of him.

				    <!-- Add an optional button to close the popup -->
				    <!-- <button class="tbl_popup_close">Close</button> -->

				</div><!-- tbl_popup -->
				<div id="fm_popup">

				    Ferranti Mark 1. He's done things. Here's a picture of him.

				</div><!-- tbl_popup -->
				<div id="gh_popup">

				    Grace Hopper. He's done things. Here's a picture of him.

				</div><!-- tbl_popup -->
				<div id="uni_popup">

				    UNIVAC. He's done things. Here's a picture of him.

				 </div><!-- tbl_popup -->
				<div id="mh_popup">

				    Margaret Hamilton. He's done things. Here's a picture of him.

				</div><!-- tbl_popup -->
				<div id="afs_popup">

				    Apollo flight software. He's done things. Here's a picture of him.

				</div><!-- tbl_popup -->

				<p>While computer science is quite young in comparison to other areas of study it is of great importance in this day and age. This field of study has had many advancements in the past century throughout its many subdivisions. Tim Berners-Lee, Grace Hpper, and Margaret Hamilton have each made important contributions in their respective areas.</p>

		</div> <!-- index-->
		        	
		<div class="row">

		    <div class="col s12 m4 s4">
		  
		        <div class="row">
		      
			   		<div class="card">

			   		<div class="card-image waves-effect waves-block waves-light">
			   			<img class="activator" src="images/tim.jpg" alt="Tim Berners-Lee">
			   		</div><!-- card-image-->
			    	

				    <div class="card-content">
					    <span class="card-title activator grey-text text-darken-4">Tim Berners-Lee<i class="material-icons right">more_vert</i></span>
					    <p><a href="tim-berners-lee.php">More Informaton</a></p>
				    </div><!--.card-content-->

			        <div class="card-reveal">
				        <span class="card-title grey-text text-darken-4">Tim Berners-Lee<i class="material-icons right">close</i></span>
				    	<p>Inventor of the World Wide Web. This invention allowed the internet to be more easily available which has accelerated the flow of information acroos the globe.</p>
			        </div><!--.card-reveal-->

			        </div><!--.card-->
		   
				</div><!--.row-->

		    </div><!--.col s4-->
			<!--NOTE: do not close the first row div here, it's after all the cards  -->

		    <div class="col s12 m4 s4">

			    <div class="row">
			   
				    <div class="card">

						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="images/hopper.jpg" alt="Grace Hopper">
						</div><!-- card image-->
					

						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">Grace Hopper<i class="material-icons right">more_vert</i></span>
							<p><a href="grace-hopper.php">More Informaton</a></p>
						</div><!--.card-content-->

					    <div class="card-reveal">
						    <span class="card-title grey-text text-darken-4">Grace Hopper<i class="material-icons right">close</i></span>
							<p>Rear Admiral Grace M. Hopper, nicknamed "Amazing Grace", served in the United States Navy. She was an American computer scientist who's greatest accomplishment was building the first compiler, known as the A compiler for a computer programming language.</p>
					    </div><!--.card-reveal-->
				    </div><!--.card-->
			          
			    </div><!--.row-->

		    </div><!--.col s4-->

		    <div class="col s12 m4 s4">

		        <div class="row">
		       
			        <div class="card">

				   		<div class="card-image waves-effect waves-block waves-light">
				   			<img class="activator" src="images/hamilton.jpg" alt="Margaret Hamilton">
				   		</div><!-- card image-->
			    	

					    <div class="card-content">
						    <span class="card-title activator grey-text text-darken-4">Margaret Hamilton<i class="material-icons right">more_vert</i></span>
						    <p><a href="margaret-hamilton.php">More Informaton</a></p>
					    </div><!--.card-content-->

				        <div class="card-reveal">
					        <span class="card-title grey-text text-darken-4">Margaret Hamilton<i class="material-icons right">close</i></span>
					    	<p>Director of the Software Engineering Division of the MIT Instrumentation Laboratory, which developed on-board flight software for the Apollo space program.</p>
				        </div><!--.card-reveal-->
			        </div><!--.card-->
		     
		       </div><!--.row-->

		   </div><!--.col s4-->
		   
		</div><!--bigger .row-->


		<?php include "inc/footer.inc" ?>
             
	</div><!--.container-->

	<script src="js/materialize.min.js"></script>

	<script type="text/javascript">
	$( document ).ready(function(){
		//$(".button-collapse").sideNav();//mobile screen menu init
		$('.carousel').carousel(); //carousel init
		//carousel popups
		$('#tbl_popup').popup();
		$('#fm_popup').popup();
		$('#gh_popup').popup();
		$('#uni_popup').popup();
		$('#mh_popup').popup();
		$('#afs_popup').popup();

	});
	</script>
	<script>$(".button-collapse").sideNav();</script>

</body>
</html>