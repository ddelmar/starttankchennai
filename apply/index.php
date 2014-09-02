<?php include('../includes/head.php'); ?>
<?php include('../includes/randomstring.php'); ?>

<div class="apply_left">
	<h1>Apply to join Start Tank</h1>
<p>Now accepting applications to Start Tank. All questions are required.</p>
<p></p>
<?php include('../includes/applicationform.php'); ?>
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
	

	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53f263d754f77624"></script>
	
    <ul id="social">
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		
    <li id="tw">
 	   <a href="http://twitter.com/st_chennai" target="_blank">
		   <img src="https://where-spotlight.s3.amazonaws.com/start-tank-chennai/social_tw.png">
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
<script type="text/javascript">
	$(document).ready(function(){
	$('#share_button').click(function(e){
	e.preventDefault();
	FB.ui(
	{
	method: 'feed',
name: 'Join Start Tank Chennai – PayPal’s Incubation Center.',
link: ' http://chennai.starttank.com/',
picture: 'http://media.indiatimes.in/media/content/2014/Jul/paypal_starttank_chennai2_1405062506_540x540.jpg',
caption: 'Join the Start tank Challenge.',
description: 'PayPal India, in partnership with The Indus Entrepreneurs (TiE) Chennai Chapter, launched Start Tank, the startup incubator, at PayPal’s Chennai development center.The initiative seeks to nurture and support the creation of a new generation of technology companies by offering them not just initial infrastructure and mentorship, direction and encouragement, but also a chance to work alongside some of the best minds in the field.',
message: 'Join the Challenge Apply',
	message: ''
	});
	});
	});
	</script>
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42859593-1', 'starttank.com');
  ga('send', 'pageview');

</script>
<!-----recaptcha-->
<!--
Note there is also a recaptcha script within the application form
-->

<style type="text/css">
#social {
	display: none;
}

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

.error-message, .required-message, .ss-required-asterisk
{
display:none;
}

.ss-choice-label{
		font-size: 81.25%;
}


</style>


<?php include('../includes/footer_analytics.php'); ?>

