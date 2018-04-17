<?php
/**
 * Template Name: Custom Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <div class="se-pre-con" style="background-image: url(<?php the_field('background_loader'); ?>);"></div>
  <div class="intro" id="intro">
    <div class="introbg" id="ib2" style="background-image: url(<?php the_field('mobile_img'); ?>);">
    </div>
    <div class="logo">
      <div class="transparent-logo">
        <img src="<?php the_field('t_logo'); ?>">
        <div id="typed">
          <h2><span class="typed"></span></h2>
        </div>
      </div>
    </div>
    <a href="#st-about"><i class="arrow bounce"></i></a>
  </div>
  <section id="st-about">
    <div class="bg-wrap">
      <div class="bg about" style="background-image: url(<?php the_field('about_img'); ?>);">
        <div class="imgh1">
          <div class="container">
            <h1>About</h1>
          </div>
        </div>
        <div class="text">
          <div class="container">
            <div data-aos="fade-left" data-aos-duration="2000"><?php the_field('about');?></div>
            <a href="#st-work" class="large">See Our Work</a><a href="#st-contact" class="large">Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="st-work">
    <div class="bg-wrap">
      <div class="bg work">
        <div class="imgh1">
          <div class="container">  
            <h1>Clients</h1>
          </div>
        </div>
        <div class="text">
          <div class="container">
            <h2>We're proud of the work we do.</h2>
            <?php the_field('work_intro');?>
            <div class="work-items">
            <?php while(the_repeater_field('work')):?>
              <?php $img = get_sub_field('work_img');?>
              <?php $logo = get_sub_field('logo');?>
              <div class="work-img" style="background:url(<?php echo $img['sizes']['large'];?>);">
                <div class="olay">
                  <a href="<?php the_sub_field('url');?>"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
                </div>
              </div>
            <?php endwhile;?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="st-contact">
    <div class="bg-wrap">
        <div class="bg contact">
          <div class="imgh1">
            <div class="container">
              <h1>Contact</h1>
            </div>
          </div>
          <div class="text">
            <div class="container">
              <h2>Let's talk</h2>
              <div class="social-media">
                <a target="_blank" href="https://www.facebook.com/boxfishmedia/"><i class="fab fa-facebook-f"></i></a><a target="_blank" href="https://www.instagram.com/boxfish.media/"><i class="fab fa-instagram"></i></a>
              </div>
              <?php the_field('contact');?>
            </div>
            <a href="#intro"><i class="arrow"></i></a>
          </div>
        </div>
    </div>
  </section>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
