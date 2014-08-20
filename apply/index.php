<?php include('../includes/head.php'); ?>


<div class="apply_left">
	<h1>Apply to join Start Tank</h1>
<p>We will begin accepting applications to Start Tank shortly.</p>

<p></p>
<?php /* include('../includes/applicationform.php'); */ ?>
<?php /*
*************
SOCIAL
*************
*/?>

    
   <div id="fb-root"></div>
	
	<!-- USE 'Asynchronous Loading' version, for IE8 to work
	http://developers.facebook.com/docs/reference/javascript/FB.init/ -->
	
	<script>
	  window.fbAsyncInit = function() {
		FB.init({
		  appId  : '266142503590514',
		  status : true, // check login status
		  cookie : true, // enable cookies to allow the server to access the session
		  xfbml  : true  // parse XFBML
		});
	  };
	
	  (function() {
		var e = document.createElement('script');
		e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
		e.async = true;
		document.getElementById('fb-root').appendChild(e);
	  }());
	</script>
	
<div id="socialcontainer">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53f263d754f77624"></script>

	
    <ul id="social">
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		
    <li id="tw">
 	   <a href="http://twitter.com/starttankchennai" target="_blank">
		   <img src="https://where-spotlight.s3.amazonaws.com/start-tank-chennai/social_tw.png">
		</a>
	</li>
    <li id="in">
 	   <a href="http://linkedin.com/starttankchennai" target="_blank">
		   <img src="https://where-spotlight.s3.amazonaws.com/start-tank-chennai/social_in.png">
		</a>
	</li>
	<li id="addthis">
		<div class="addthis_sharing_toolbox"></div>
	</li>
</ul>
</div><!--/socialcontainer -->	
	
	
</div><!-- /apply_left -->

<div class="apply_right">
</div><!-- /apply_right -->
<div class="clr" style="margin:20px 0;"></div>

<style type="text/css">
#social li {
display: block;
list-style-type: none;
float: left;
width: 32px;
}

#social li#tw {
	margin: 0 2px 0 0;
}

#social li img {cursor: pointer; width:100%; height: auto;}

/* #socialcontainer {display:none;} */

.error-message
{
display:none;
}
.required-message
{
display:none;
}
.ss-choice-label{
		font-size: 81.25%;
}


</style>


<?php include('../includes/footer_analytics.php'); ?>

