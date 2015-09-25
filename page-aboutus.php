<?php 
  // Template Name: About us
?>

<?php get_header() ?>

<div class="page-aboutus">

<section class="aboutus-hero">
  <h1>ABOUT US</h1>
  
  <div class="tagline">
    Tools and resources for software engineers to <b>improve English-based communication and soft skills</b>.<br>
    Weekly live streaming talks with <b>special guests</b>.
  </div>
  
  
  <a class="next" href="#initiative">THE INITIATIVE</a>
</section>


<a name="initiative"></a>
<section class="aboutus-about">
  
  <div class="block">
  <p class="description">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img02.png" />
    
    <h2>The Dojo</h2>
    As a <a class="link" href="http://nearsoft.com" target="_blank">leading software company</a> in Mexico catering to Silicon Valley-based clients, English comprises a good chunk of our very bread and butter. To make sure our communication skills remain seamless and up to par with the highest standards, we have created The Dojo, which started out simply as an online conversational club.  Soon thereafter, shorter 30 –minute, 1-on-1 sessions were implemented as a comprehensive English for Special Purposes and Soft Skills training, coaching our developers in English language skills, business etiquette, team building, speaking, presenting, client interaction, and cross-cultural sensitivity.<br><br>
Now, The Dojo also features <a class="link" href="http://nearsoft.com/dojo/live" target="_blank">DojoLive</a>, a weekly online talk where engineers and other professionals gather to chat, practice English, learn about cultural awareness, hone their soft skills and learn industry insights from leaders and company executives in North America and other countries.
  </p>
  </div>
  
  
  <div class="block">
  <p class="description">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/img03.png" />
    
    <h2>Why the Dojo?</h2>
    According to <a class="link" href="https://en.wikipedia.org/wiki/Dojo" target="_blank">Wikipedia</a>, A dojo is a Japanese term which literally means "place of the way".<br><br>
In the Western World, the term dojo primarily refers to a training place, usually meant for Japanese martial arts. The term can also refer to a formal training place for any of the Japanese arts ending in "do", meaning "way".<br><br>
Inspired by this idea, and by the perfection-seeking performance of the martial artists, we have named this site The Dojo.
  </p>
  </div>
  
  
</section>



<script>
  // get the value of the bottom of the #main element by adding the offset of that element plus its height, set it as a variable
var mainbottom = $('.aboutus-hero').offset().top + $('.aboutus-hero').height();
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

</div><!-- aboutus wrapper -->