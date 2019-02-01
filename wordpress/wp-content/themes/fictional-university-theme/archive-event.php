<?php get_header(); 
pageBanner(array(
  'title' => 'All Events',
  'subtitle' => 'See What Is Going On In Our World'
));
?>

<div class="container container--narrow page-section">
<?php 
  while(have_posts()){
    the_post();
    get_template_part('template-parts/content-event');
 } 
  echo paginate_links();
?>

<hr class="section-break">

<p>Looking for a recap of Past Events? <a href="<?php echo site_url('/past-events')?>">Check them out here!</a>

</div>




<?php get_footer(); ?>