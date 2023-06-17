<?php
/*
Template Name: Continence Learning Landing Page Template
*/

get_header();
?>

<!-- Landing page content here -->

<!-- Hero Section -->
<section class="hero">
      <div class="container">
        <h1 class="mb-3">
          Flexible learning from Australia's peak body for bladder and bowel
          health
        </h1>
        <h2 class="mb-4">
          Continence learning delivers a unique range of flexible, online
          learning bringing you the best evidence-based knowledge and
          information in continence management and care developed by experts in
          the field.
        </h2>
        <button class="rounded">Learning options</button>
      </div>
    </section>
    <!-- End of Hero Section -->
    <!-- Essentials of Continence Section -->
    <section class="continenceEssentials__container">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 col-lg-8">
            <div class="continenceEssentials__texts">
              <h1 class="mb-4">
                Now launched, the <b>Essentials of Continence.</b>
              </h1>
              <h2>
                A great start for health workers looking to improve their
                knowledge of continence.
                <a href="" class="underline-hover">Find out more</a>
              </h2>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div>
              <img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/essentials-of-continence-image.webp"
                alt="Image of an elderly woman inside of a hospital"
                width="634"
                height="356"
                loading="lazy"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Essentials of Continence Section -->
    <!-- Industry Section -->
    <section class="industry">
      <div class="container">
        <h1 class="mb-5">
          To find the learning options for you, <b>choose your industry</b>
        </h1>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="industry__card__container mb-4 text-center">
            <?php 
              $industryImage1 = get_field('industry_1', 8);
              $imageSrc = empty($industryImage1) ? get_stylesheet_directory_uri() . '/images/pediatric-industry-image.webp' : $industryImage1['url'];
              $altText = empty($industryImage1) ? '' : $industryImage1['alt'];
              $width = empty($industryImage1) ? '450' : '';
              $height = empty($industryImage1) ? '253' : '';
              echo '<img src="' . $imageSrc . '" alt="' . $altText . '" loading="lazy" width="' . $width . '" height="' . $height . '" />';
            ?>
              <div class="industry__card__title__container p-lg-3">
                <p class="mb-0"><?php echo get_field('industry_1_text'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="industry__card__container mb-4 text-center">
            <?php 
              $industryImage2 = get_field('industry_2', 8);
              $imageSrc = empty($industryImage2) ? get_stylesheet_directory_uri() . '/images/aged-care-industry-image.webp' : $industryImage2['url'];
              $altText = empty($industryImage2) ? '' : $industryImage2['alt'];
              $width = empty($industryImage2) ? '450' : '';
              $height = empty($industryImage2) ? '253' : '';
              echo '<img src="' . $imageSrc . '" alt="' . $altText . '" loading="lazy" width="' . $width . '" height="' . $height . '" />';
            ?>
              <div class="industry__card__title__container p-lg-3">
                <p class="mb-0"><?php echo get_field('industry_2_text'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="industry__card__container mb-4 text-center">
            <?php 
              $industryImage3 = get_field('industry_3', 8);
              $imageSrc = empty($industryImage3) ? get_stylesheet_directory_uri() . '/images/fitness-industry-image.webp' : $industryImage3['url'];
              $altText = empty($industryImage3) ? '' : $industryImage3['alt'];
              $width = empty($industryImage3) ? '449' : '';
              $height = empty($industryImage3) ? '252' : '';
              echo '<img src="' . $imageSrc . '" alt="' . $altText . '" loading="lazy" width="' . $width . '" height="' . $height . '" />';
            ?>
              <div class="industry__card__title__container p-lg-3">
                <p class="mb-0"><?php echo get_field('industry_3_text'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="industry__card__container mb-4 text-center">
            <?php 
              $industryImage4 = get_field('industry_4', 8);
              $imageSrc = empty($industryImage4) ? get_stylesheet_directory_uri() . '/images/education-industry-image.webp' : $industryImage4['url'];
              $altText = empty($industryImage4) ? '' : $industryImage4['alt'];
              $width = empty($industryImage4) ? '451' : '';
              $height = empty($industryImage4) ? '253' : '';
              echo '<img src="' . $imageSrc . '" alt="' . $altText . '" loading="lazy" width="' . $width . '" height="' . $height . '" />';
            ?>
              <div class="industry__card__title__container p-lg-3">
                <p class="mb-0"><?php echo get_field('industry_4_text'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="industry__card__container mb-4 text-center">
            <?php 
              $industryImage5 = get_field('industry_5', 8);
              $imageSrc = empty($industryImage5) ? get_stylesheet_directory_uri() . '/images/disability-industry-image.webp' : $industryImage5['url'];
              $altText = empty($industryImage5) ? '' : $industryImage5['alt'];
              $width = empty($industryImage5) ? '450' : '';
              $height = empty($industryImage5) ? '253' : '';
              echo '<img src="' . $imageSrc . '" alt="' . $altText . '" loading="lazy" width="' . $width . '" height="' . $height . '" />';
            ?>
              <div class="industry__card__title__container p-lg-3">
                <p class="mb-0"><?php echo get_field('industry_5_text'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="industry__card__container mb-4 text-center">
            <?php 
              $industryImage6 = get_field('industry_6', 8);
              $imageSrc = empty($industryImage6) ? get_stylesheet_directory_uri() . '/images/primary-care-industry-image.webp' : $industryImage6['url'];
              $altText = empty($industryImage6) ? '' : $industryImage6['alt'];
              $width = empty($industryImage6) ? '450' : '';
              $height = empty($industryImage6) ? '253' : '';
              echo '<img src="' . $imageSrc . '" alt="' . $altText . '" loading="lazy" width="' . $width . '" height="' . $height . '" />';
            ?>
              <div class="industry__card__title__container p-lg-3">
                <p class="mb-0"><?php echo get_field('industry_6_text'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Industry Section -->
    <!-- Choose Continence Section -->
    <section class="chooseContinence">
      <div class="container-fluid container-lg testimonial__slider__container">
      <?php
      $testimonials = get_field('testimonial_message');
      if ($testimonials) {
          $testimonial_messages = explode("\n", $testimonials); // Assuming each testimonial is separated by a line break
          ?>
          <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                  <?php
                  $active = true;
                  foreach ($testimonial_messages as $index => $testimonial_message) {
                      $testimonial_parts = explode('|', $testimonial_message); // Assuming the format is "Testimonial Message | Testimonial Author | Company Name"
                      $message = isset($testimonial_parts[0]) ? trim($testimonial_parts[0]) : '';
                      $author = isset($testimonial_parts[1]) ? trim($testimonial_parts[1]) : '';
                      $company = isset($testimonial_parts[2]) ? trim($testimonial_parts[2]) : '';
                      ?>
                      <div class="carousel-item <?php echo $active ? 'active' : ''; ?>">
                        <div class="row">
                          <div class="col-lg-8">
                            <p class="testimonial__message"><?php echo $message; ?></p>
                          </div>
                          <div class="col-lg-4 d-flex align-items-center justify-content-lg-center">
                            <div class="testimonial__name__container">
                            <p class="mb-0"><b><?php echo $author; ?></b></p>
                            <p><?php echo $company; ?></p>
                        </div>
                          </div>
                        </div>
                      </div>
                      <?php
                      $active = false;
                  }
                  ?>
              </div>
              <button
                  class="carousel-control-prev"
                  type="button"
                  data-bs-target="#testimonialCarousel"
                  data-bs-slide="prev"
                >
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button
                  class="carousel-control-next"
                  type="button"
                  data-bs-target="#testimonialCarousel"
                  data-bs-slide="next"
                >
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
          </div>
          <?php
      }
      ?>
    </div>
      <div class="container">
        <div class="mb-3 mb-lg-5">
          <h1 class="chooseContinence__title">
            <b>Why</b> choose Continence Learning?
          </h1>
        </div>
        <div class="row">
          <div class="col-md-6 mb-lg-5">
            <div class="chooseContinence__reason__container">
              <h1 class="mb-3">Learning from Peak Body</h1>
              <p>
                As an initiative of the Continence Foundation of Australia, our
                learning materials are developed by education and clinical
                specialists. They deliver up to date knowledge reflecting our
                expertise in all areas of incontinence. With few existing
                education opportunities in the market, Continence Learning
                offers a unique opportunity to see, hear and read materials
                delivered by key industry professionals.
              </p>
            </div>
          </div>
          <div class="col-md-6 mb-lg-5">
            <div class="chooseContinence__reason__container">
              <h1 class="mb-3">Developed with you in mind</h1>
              <p>
                Continence Learning is designed to provide learning
                opportunities to a variety of prospective students, those with a
                range of knowledge, training and experience. Whether it is a
                webinar or course material, it has been purpose-built to meet
                sector learning needs, and reflects best practice and thinking.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="chooseContinence__reason__container">
              <h1 class="mb-3">Flexibility</h1>
              <p>
                Studying online is the perfect way to learn for busy people who
                are juggling work, personal lives and study. Choose when, where
                and how you study, starting and finishing each component at a
                time that suits you.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End of Choose Continence Section-->

<!-- More sections and content -->

<?php get_footer(); ?>
