<?php

echo '<link rel="stylesheet" type="text/css" href="css/SnowingEffect.css">';
// YYY
include('template-parts/header.php'); ?>

  <!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    	<li data-target="#myCarousel" data-slide-to="1"></li>
    	<li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    	<div class="item active">
    		<img src="/images/ps4_long.jpg" alt="First slide">
    		<div class="container">
    			<div class="carousel-caption">
    				<h1>PS4</h1>
    				<p>The Sony Playstation 4 is a quint essential Christmas present to get your kids if you haven't done so already. They'll probably want Metal Gear Solid 5 and the new Fallout.</p>
    				<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
    			</div>
    		</div>
    	</div>
    	<div class="item">
    		<img src="data:image/gif;base64,R0lGODlhAQABAIAAAGZmZgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
    		<div class="container">
    			<div class="carousel-caption">
    				<h1>Slide 2 Heading</h1>
    				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    				<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
    			</div>
    		</div>
    	</div>
    	<div class="item">
    		<img src="data:image/gif;base64,R0lGODlhAQABAIAAAFVVVQAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
    		<div class="container">
    			<div class="carousel-caption">
    				<h1>Slide 3 Heading</h1>
    				<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    				<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
    			</div>
    		</div>
    	</div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div><!-- /.carousel -->



<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
    	<div class="col-lg-4">
    		<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
    		<h2>Heading</h2>
    		<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
    		<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    	</div><!-- /.col-lg-4 -->
    	<div class="col-lg-4">
    		<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
    		<h2>Heading</h2>
    		<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
    		<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    	</div><!-- /.col-lg-4 -->
    	<div class="col-lg-4">
    		<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
    		<h2>Heading</h2>
    		<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
    		<p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    	</div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

       <hr class="featurette-divider">

    <div class="row featurette">
    	<div class="col-md-7">
    		<h2 class="featurette-heading">This is a very Christmasy image. <span class="text-muted">It'll blow your mind.</span></h2>
    		<p class="lead">Look it's an image of... the corner of a fireplace.  But this is the first google image search result for "Christmas" for an image of this size.  At least there's a reindeer in there.</p>
    	</div>
    	<div class="col-md-5">
    		<img class="featurette-image img-responsive" src="images/image1.jpg alt="Generic placeholder image">
    	</div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    	<div class="col-md-5">
    		<img class="featurette-image img-responsive" src="images/image2.jpg" alt="Generic placeholder image">
    	</div>
    	<div class="col-md-7">
    		<h2 class="featurette-heading">This is the next most Christmasy image on Google <span class="text-muted">See for yourself.</span></h2>
    		<p class="lead">If you reckognise these guys you may want to keep it yo yourself</p>
    	</div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    	<div class="col-md-7">
    		<h2 class="featurette-heading">And lastly, this one.</h2>
    		<p class="lead">A very seasonal tree.</p>
    	</div>
    	<div class="col-md-5">
    		<img class="featurette-image img-responsive" src="images/image3.jpg" alt="Generic placeholder image">
    	</div>
    </div>

    <hr class="featurette-divider">
                                
    <div class="row featurette">
    	<div class="col-md-7">  
    		<h2 class="featurette-heading">Sweden's Donald Duck Christmas Eve</h2>
    		<p class="lead">In Sweden, on Christmas Eve, about half of the population settles down in front of the TV to watch a Donald Duck special called Kalle Anka which, along with its characters and cartoons, are ingrained in Swedish pop culture as a Christmas tradition.</p>
    	</div>
    	<div class="col-md-5">
    		<img class="featurette-image img-responsive" src="images/kalle-anke.jpg" alt="Kalle Anke">
    	</div>
    </div>

    <!-- /END THE FEATURETTES -->


    <!-- FOOTER -->
    <footer>
    	<p class="pull-right"><a href="#">Back to top</a></p>
    	<p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

</div><!-- /.container -->

<?php include('template-parts/footer.php'); ?>
