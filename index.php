<?php get_header() ?>

<section id="main" class="main">
  <video autoplay  poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" loop>
    <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
  <source src="<?php echo get_stylesheet_directory_uri(); ?>/video/sequence01.webm" type="video/webm">
  <source src="<?php echo get_stylesheet_directory_uri(); ?>/video/sequence01.mp4" type="video/mp4">
  </video>
  
  <div class="darker"></div>
  	
	<div class="main-centered">
		<h1>LEARN, PRACTICE & HAVE FUN</h1>
	</div><!-- main-centered -->
	
	<a class="next" href="#about-us">LEARN MORE</a>
</section>


<a name="about-us" class="anchor"></a>
<section id="about">
	<h2>WHY THE DOJO?</h2>
	<div class="about-centered">
  	
  	<div class="about-picture"></div>
  	<div class="about-description">
			<p>
      According to Wikipedia, A dojo is a Japanese term which literally means "place of the way".
In the Western World, the term dojo primarily refers to a training place, usually meant for Japanese martial arts.<br><br>
      Inspired by this idea, and by the perfection-seeking performance of the martial artists, we have named this site The Dojo, a community-building online meeting place and training venue for software engineers to practice and hone their English-based communication and soft skills in a professional context. Just like a martial artists would do at a dojo.
			</p>
			
			<a class="button" href="<?php echo home_url(); ?>/about-us">About us</a>
  	</div>

	</div><!-- about-centered -->
</section>



	
<section id="programs">
  	<h2>OUR PROGRAMS</h2>
		
		<div class="card-container">
  		
  		<div class="program-card">
  		  <h2>In-company and online customized communication enhancement</h2>
  		  <p>
    		  Personalized Communication Training for Software Engineers have specific needs in English based communication and soft skills training? 
<br><br>Send us your info, we’ll get right back to you.
  		  </p>
  		  <a class="button" href="#register">Register now!</a>
		  </div>
		  
		  
		  <div class="program-card">
  		  <h2>The 1-on-1 Dojitos</h2>
  		  <p>
    		  <i>"... I already speak English! Why should I even bother and why is important?"</i>
    		  In the ever-growing and evolving software development industry, communication skills are increasingly becoming more stringent. We believe that clients deserve the best, and that includes our own communication capabilities.
    		  <i>How well honed are yours?</i>
    		  </p>
		  </div>
		  
		</div>
		
</section>	
	
	
	
	
	
	
	
<a name="register"></a>
<section id="register">
  <h2>Save your spot, register now!</h2>
  	<div class="register-centered">
  		<div class="register form">
  		<form name="htmlform" method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/send.php">
    		
  		<p class="error"></p>
        <p><input type="text" name="name" placeholder="Your name"></p>
        <p><input type="text" name="email" placeholder="E-mail"></p>
        <p><input type="text" name="url" placeholder="company url"></p>
        <p class="center"><input type="submit" value="Send request" class="button"></p>
      <p class="center small">All information is kept private</p>
			</form>

		</div>
	</div>
</section>
  

  
<script>
  // get the value of the bottom of the #main element by adding the offset of that element plus its height, set it as a variable
var mainbottom = $('.main').offset().top + $('.main').height();
// on scroll, 
$(window).on('scroll',function(){

    // we round here to reduce a little workload
    var stop = Math.round($(window).scrollTop());

    if (stop > mainbottom) {
        $('.nav').addClass('past-main');
    } else {
        $('.nav').removeClass('past-main');
    }
});
</script>  
  

<?php get_footer() ?>
