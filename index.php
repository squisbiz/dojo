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
			
			<a class="button" href="#">ABOUT US</a>
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
		<div class="register-centered">
  		<h1>Save your spot, register now!</h1>
  		<div class="register form">
  		<form name="htmlform" method="post" action="send.php">
    		
    		<p class="error"></p>
          <p><input type="text" name="name" placeholder="Your name"></p>
          <p><input type="text" name="email" placeholder="E-mail"></p>
          <p><input type="text" name="url" placeholder="company url"></p>
          <p class="center"><input type="submit" value="Send request" class="smallbutton"></p>
        <p class="center small">All information is kept private</p>
				</form>

			</div>
		</div>
	</section>
  
  
  
  
  
  
  
 <!--
 <div id="live">
    <h1>Watch previous episodes</h1>
    <div class="container">
      <div class="prev-episode">
        <a target="_blank" href="https://www.youtube.com/watch?v=RFvrVrtitR0"><img src="img/img04.png"/></a>
        <h2><a href="https://www.linkedin.com/in/robert-graham">Robert Graham</a></h2>
        <span>Business Hacker at Poll Everywhere</span>
      </div>
      <div class="prev-episode">
        <a target="_blank" href="https://www.youtube.com/watch?v=x1ZEI8mH47g"><img src="img/img05.png" /></a>
        <h2><a href="https://www.linkedin.com/in/kevindaum">Kevin Daum</a></h2>
        <span>Columnist at Inc.com Author of the Amazon #1 Best Sellers Video Marketing For Dummies</span>
      </div>
      <div class="prev-episode">
        <a target="_blank" href="https://www.youtube.com/watch?v=g2zXoFWUzXg"><img src="img/img06.png" /></a>
        <h2><a href="https://www.linkedin.com/in/jorgeolson">Jorge S. Olson</a></h2>
        <span>Business Hacker at Poll Everywhere</span>
      </div>
    </div>
  </div>
-->
  

  <div id="social">
    <h2>Follow us on the internet</h2>
    <div class="social-center">
      <a class="sociallink fb" target="_blank"></a>
      <a class="sociallink tw" target="_blank"></a>
      <a class="sociallink li" target="_blank" href="https://www.linkedin.com/grp/home?gid=6571818"></a>
      <a class="sociallink gp" target="_blank" href="https://plus.google.com/u/1/109277262538626079632/about?cfem=1"></a>
      <a class="sociallink yt" target="_blank" href="https://www.youtube.com/channel/UCa_uwhMRbNhoV4tPxE_AlfQ"></a>
    </div>
  </div>
  
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
