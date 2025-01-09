<!DOCTYPE html>
<html lang="en">

<head>
    @include('website.partials.head')
</head>

<body class="index-page">

    @include('website.partials.header')
    <main class="main">

        <!-- Hero Section -->
        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content" data-aos="fade-up" data-aos-delay="200">
                            <div class="company-badge mb-4">
                                <i class="bi bi-gear-fill me-2"></i>
                                Empowering your career success
                            </div>

                            <h1 class="mb-4">
                                Accelerate Your Career with<br>
                                <span class="accent-text">SV Infotech</span>
                            </h1>

                            <p class="mb-4 mb-md-5">
                                SV Infotech specializes in bridging the gap between education and industry by providing
                                hands-on industrial training in the most in-demand technologies.
                            </p>

                            <div class="hero-buttons">
                                <a href="#about" class="btn btn-primary me-0 me-sm-2 mx-1">Get Started</a>
                                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                                    class="btn btn-link mt-2 mt-sm-0 glightbox">
                                    <i class="bi bi-play-circle me-1"></i>
                                    Watch Our Story
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-image" data-aos="zoom-out" data-aos-delay="300">
                            <img src="web/assets/img/illustration-1.webp" alt="Hero Image" class="img-fluid">

                            <div class="customers-badge">
                                <div class="customer-avatars">
                                    <img src="web/assets/img/avatar-1.webp" alt="Customer 1" class="avatar">
                                    <img src="web/assets/img/avatar-2.webp" alt="Customer 2" class="avatar">
                                    <img src="web/assets/img/avatar-3.webp" alt="Customer 3" class="avatar">
                                    <img src="web/assets/img/avatar-4.webp" alt="Customer 4" class="avatar">
                                    <img src="web/assets/img/avatar-5.webp" alt="Customer 5" class="avatar">
                                    <span class="avatar more">12+</span>
                                </div>
                                <p class="mb-0 mt-2">12,000+ students successfully trained for careers in tech</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row stats-row gy-4 mt-5" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-trophy"></i>
                            </div>
                            <div class="stat-content">
                                <h4>3x Industry Awards</h4>
                                <p class="mb-0">Recognized for excellence in training and technology</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-briefcase"></i>
                            </div>
                            <div class="stat-content">
                                <h4>6,500+ Careers Launched</h4>
                                <p class="mb-0">Training programs tailored for real-world success</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-graph-up"></i>
                            </div>
                            <div class="stat-content">
                                <h4>80,000+ Hours of Training</h4>
                                <p class="mb-0">Industry-led, hands-on learning experiences</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="stat-item">
                            <div class="stat-icon">
                                <i class="bi bi-award"></i>
                            </div>
                            <div class="stat-content">
                                <h4>6x Career Transformations</h4>
                                <p class="mb-0">Empowering individuals to thrive in the tech industry</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section><!-- /Hero Section -->


        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 align-items-center justify-content-between">

                    <div class="col-xl-5" data-aos="fade-up" data-aos-delay="200">
                        <span class="about-meta">MORE ABOUT US</span>
                        <h2 class="about-title">Empowering Future Tech Professionals</h2>
                        <p class="about-description">At SV Infotech, we are committed to shaping the careers of aspiring
                            developers and innovators. Our industrial training programs are designed to provide hands-on
                            experience in the latest technologies, ensuring that our students are industry-ready.</p>

                        <div class="row feature-list-wrapper">
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li><i class="bi bi-check-circle-fill"></i> Comprehensive training modules</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Real-world projects and case studies
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Flexible learning options</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li><i class="bi bi-check-circle-fill"></i> Expert mentors with industry experience
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> Cutting-edge technology stack</li>
                                    <li><i class="bi bi-check-circle-fill"></i> Career guidance and job support</li>
                                </ul>
                            </div>
                        </div>

                        <div class="info-wrapper">
                            <div class="row gy-4">
                                <div class="col-lg-5">
                                    <div class="profile d-flex align-items-center gap-3">
                                        <img src="web/assets/img/testimonials/vs.jpg" alt="CEO Profile"
                                            class="profile-image">
                                        <div>
                                            <h4 class="profile-name">Vineet Singh</h4>
                                            <p class="profile-position">CEO &amp; Founder</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="contact-info d-flex align-items-center gap-2">
                                        <i class="bi bi-telephone-fill"></i>
                                        <div>
                                            <p class="contact-label">Call us anytime</p>
                                            <p class="contact-number">+91 914 0092 133</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="image-wrapper">
                            <div class="images position-relative" data-aos="zoom-out" data-aos-delay="400">
                                <img src="web/assets/img/about-5.webp" alt="Learning Session"
                                    class="img-fluid main-image rounded-4">
                                <img src="web/assets/img/about-2.webp" alt="Tech Workshop"
                                    class="img-fluid small-image rounded-4">
                            </div>
                            <div class="experience-badge floating">
                                <h3>10+ <span>Years</span></h3>
                                <p>Of expertise in industrial training</p>
                            </div>
                        </div>
                    </div>


                </div>

        </section><!-- /About Section -->

        <!-- Features Section -->
        <!-- Features Section -->
        <section id="features" class="features section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Key Features</h2>
                <p>Explore the features that make SV Infotech the leading choice for industrial training in the latest
                    technologies.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="d-flex justify-content-center">

                    <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                        <li class="nav-item">
                            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                                <h4>Hands-On Training</h4>
                            </a>
                        </li><!-- End tab nav item -->

                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                                <h4>Industry Collaboration</h4>
                            </a><!-- End tab nav item -->
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                                <h4>Expert Instructors</h4>
                            </a>
                        </li><!-- End tab nav item -->

                    </ul>

                </div>

                <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                    <div class="tab-pane fade active show" id="features-tab-1">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Hands-On Learning</h3>
                                <p class="fst-italic">
                                    Our programs emphasize practical experience to ensure that you are job-ready, with
                                    real-world applications and projects.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> <span>Engage in live projects and
                                            workshops.</span></li>
                                    <li><i class="bi bi-check2-all"></i> <span>Learn with industry-standard tools and
                                            platforms.</span></li>
                                    <li><i class="bi bi-check2-all"></i> <span>Simulate real-world challenges to
                                            prepare for career success.</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="web/assets/img/features-illustration-1.webp" alt="Hands-On Training"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane fade" id="features-tab-2">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Industry Collaboration</h3>
                                <p class="fst-italic">
                                    We work with top industry players to ensure that our students gain insights into the
                                    current demands and trends.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> <span>Collaborations with leading tech
                                            companies.</span></li>
                                    <li><i class="bi bi-check2-all"></i> <span>Internship opportunities with industry
                                            partners.</span></li>
                                    <li><i class="bi bi-check2-all"></i> <span>Stay ahead with industry-relevant
                                            curriculum.</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="web/assets/img/features-illustration-2.webp" alt="Industry Collaboration"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane fade" id="features-tab-3">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Expert Instructors</h3>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> <span>Learn from industry veterans with years
                                            of experience.</span></li>
                                    <li><i class="bi bi-check2-all"></i> <span>Gain insights into real-world challenges
                                            from experts.</span></li>
                                    <li><i class="bi bi-check2-all"></i> <span>Our instructors provide personalized
                                            guidance for your career growth.</span></li>
                                </ul>
                                <p class="fst-italic">
                                    Our instructors come from diverse backgrounds and industries, ensuring you receive
                                    the best learning experience.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="web/assets/img/features-illustration-3.webp" alt="Expert Instructors"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                </div>

            </div>

        </section><!-- /Features Section -->


        <!-- Features Cards Section -->
        <section id="features-cards" class="features-cards section">

            <div class="container">

                <div class="row gy-4">

                    <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="feature-box orange">
                            <i class="bi bi-award"></i>
                            <h4>Corporis voluptates</h4>
                            <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                        </div>
                    </div><!-- End Feature Borx-->

                    <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="feature-box blue">
                            <i class="bi bi-patch-check"></i>
                            <h4>Explicabo consectetur</h4>
                            <p>Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab aut inventore</p>
                        </div>
                    </div><!-- End Feature Borx-->

                    <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="feature-box green">
                            <i class="bi bi-sunrise"></i>
                            <h4>Ullamco laboris</h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                        </div>
                    </div><!-- End Feature Borx-->

                    <div class="col-xl-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="feature-box red">
                            <i class="bi bi-shield-check"></i>
                            <h4>Labore consequatur</h4>
                            <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                        </div>
                    </div><!-- End Feature Borx-->

                </div>

            </div>

        </section><!-- /Features Cards Section -->

        <!-- Features 2 Section -->
        <section id="features-2" class="features-2 section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row align-items-center">

                    <div class="col-lg-4">

                        <!-- Feature 1: Use On Any Device -->
                        <div class="feature-item text-end mb-5" data-aos="fade-right" data-aos-delay="200">
                            <div class="d-flex align-items-center justify-content-end gap-4">
                                <div class="feature-content">
                                    <h3>Accessible on Any Device</h3>
                                    <p>Our platform is designed to work seamlessly on any device, ensuring you have
                                        access to training materials wherever you are.</p>
                                </div>
                                <div class="feature-icon flex-shrink-0">
                                    <i class="bi bi-display"></i>
                                </div>
                            </div>
                        </div><!-- End .feature-item -->

                        <!-- Feature 2: Feather Icons -->
                        <div class="feature-item text-end mb-5" data-aos="fade-right" data-aos-delay="300">
                            <div class="d-flex align-items-center justify-content-end gap-4">
                                <div class="feature-content">
                                    <h3>Interactive Learning with Icons</h3>
                                    <p>We use modern design elements like Feather icons to enhance your learning
                                        experience, making the platform more intuitive and engaging.</p>
                                </div>
                                <div class="feature-icon flex-shrink-0">
                                    <i class="bi bi-feather"></i>
                                </div>
                            </div>
                        </div><!-- End .feature-item -->

                        <!-- Feature 3: Retina Ready -->
                        <div class="feature-item text-end" data-aos="fade-right" data-aos-delay="400">
                            <div class="d-flex align-items-center justify-content-end gap-4">
                                <div class="feature-content">
                                    <h3>Retina-Ready Display</h3>
                                    <p>Experience clear, high-quality visuals with our retina-ready display on all
                                        devices, ensuring crisp graphics for all training content.</p>
                                </div>
                                <div class="feature-icon flex-shrink-0">
                                    <i class="bi bi-eye"></i>
                                </div>
                            </div>
                        </div><!-- End .feature-item -->

                    </div>

                    <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <!-- Phone Mockup -->
                        <div class="phone-mockup text-center">
                            <img src="web/assets/img/phone-app-screen.webp" alt="Phone Mockup" class="img-fluid">
                        </div><!-- End Phone Mockup -->
                    </div><!-- End Phone Mockup -->

                    <div class="col-lg-4">

                        <!-- Feature 4: W3C Valid Code -->
                        <div class="feature-item mb-5" data-aos="fade-left" data-aos-delay="200">
                            <div class="d-flex align-items-center gap-4">
                                <div class="feature-icon flex-shrink-0">
                                    <i class="bi bi-code-square"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>W3C Valid Code</h3>
                                    <p>We ensure all our code is W3C compliant, providing a clean, standards-based
                                        foundation for web development.</p>
                                </div>
                            </div>
                        </div><!-- End .feature-item -->

                        <!-- Feature 5: Fully Responsive -->
                        <div class="feature-item mb-5" data-aos="fade-left" data-aos-delay="300">
                            <div class="d-flex align-items-center gap-4">
                                <div class="feature-icon flex-shrink-0">
                                    <i class="bi bi-phone"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Fully Responsive Design</h3>
                                    <p>Our platforms are fully responsive, adapting to all screen sizes for a seamless
                                        experience on mobile, tablet, and desktop devices.</p>
                                </div>
                            </div>
                        </div><!-- End .feature-item -->

                        <!-- Feature 6: Browser Compatibility -->
                        <div class="feature-item" data-aos="fade-left" data-aos-delay="400">
                            <div class="d-flex align-items-center gap-4">
                                <div class="feature-icon flex-shrink-0">
                                    <i class="bi bi-browser-chrome"></i>
                                </div>
                                <div class="feature-content">
                                    <h3>Cross-Browser Compatibility</h3>
                                    <p>Our platform is compatible with all major browsers, ensuring that you have a
                                        consistent experience across different environments.</p>
                                </div>
                            </div>
                        </div><!-- End .feature-item -->

                    </div>
                </div>

            </div>

        </section><!-- /Features 2 Section -->


        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row content justify-content-center align-items-center position-relative">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="display-4 mb-4">Join Our Training Programs Today!</h2>
                        <p class="mb-4">Whether you're looking to enhance your web development, app development, or
                            software development skills, we have the perfect course for you. Take the first step toward
                            advancing your career.</p>
                        <a href="#" class="btn btn-cta">Get Started</a>
                    </div>

                    <!-- Abstract Background Elements -->
                    <div class="shape shape-1">
                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M47.1,-57.1C59.9,-45.6,68.5,-28.9,71.4,-10.9C74.2,7.1,71.3,26.3,61.5,41.1C51.7,55.9,35,66.2,16.9,69.2C-1.3,72.2,-21,67.8,-36.9,57.9C-52.8,48,-64.9,32.6,-69.1,15.1C-73.3,-2.4,-69.5,-22,-59.4,-37.1C-49.3,-52.2,-32.8,-62.9,-15.7,-64.9C1.5,-67,34.3,-68.5,47.1,-57.1Z"
                                transform="translate(100 100)"></path>
                        </svg>
                    </div>

                    <div class="shape shape-2">
                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M41.3,-49.1C54.4,-39.3,66.6,-27.2,71.1,-12.1C75.6,3,72.4,20.9,63.3,34.4C54.2,47.9,39.2,56.9,23.2,62.3C7.1,67.7,-10,69.4,-24.8,64.1C-39.7,58.8,-52.3,46.5,-60.1,31.5C-67.9,16.4,-70.9,-1.4,-66.3,-16.6C-61.8,-31.8,-49.7,-44.3,-36.3,-54C-22.9,-63.7,-8.2,-70.6,3.6,-75.1C15.4,-79.6,28.2,-58.9,41.3,-49.1Z"
                                transform="translate(100 100)"></path>
                        </svg>
                    </div>

                    <!-- Dot Pattern Groups -->
                    <div class="dots dots-1">
                        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <pattern id="dot-pattern" x="0" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                            </pattern>
                            <rect width="100" height="100" fill="url(#dot-pattern)"></rect>
                        </svg>
                    </div>

                    <div class="dots dots-2">
                        <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <pattern id="dot-pattern-2" x="0" y="0" width="20" height="20"
                                patternUnits="userSpaceOnUse">
                                <circle cx="2" cy="2" r="2" fill="currentColor"></circle>
                            </pattern>
                            <rect width="100" height="100" fill="url(#dot-pattern-2)"></rect>
                        </svg>
                    </div>

                    <div class="shape shape-3">
                        <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M43.3,-57.1C57.4,-46.5,71.1,-32.6,75.3,-16.2C79.5,0.2,74.2,19.1,65.1,35.3C56,51.5,43.1,65,27.4,71.7C11.7,78.4,-6.8,78.3,-23.9,72.4C-41,66.5,-56.7,54.8,-65.4,39.2C-74.1,23.6,-75.8,4,-71.7,-13.2C-67.6,-30.4,-57.7,-45.2,-44.3,-56.1C-30.9,-67,-15.5,-74,0.7,-74.9C16.8,-75.8,33.7,-70.7,43.3,-57.1Z"
                                transform="translate(100 100)"></path>
                        </svg>
                    </div>
                </div>

            </div>

        </section><!-- /Call To Action Section -->


        <!-- Clients Section -->
        <section id="clients" class="clients section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "spaceBetween": 40
                },
                "480": {
                  "slidesPerView": 3,
                  "spaceBetween": 60
                },
                "640": {
                  "slidesPerView": 4,
                  "spaceBetween": 80
                },
                "992": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="web/assets/img/clients/client-1.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="web/assets/img/clients/client-2.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="web/assets/img/clients/client-3.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="web/assets/img/clients/client-4.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="web/assets/img/clients/client-5.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="web/assets/img/clients/client-6.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="web/assets/img/clients/client-7.png" class="img-fluid"
                                alt=""></div>
                        <div class="swiper-slide"><img src="web/assets/img/clients/client-8.png" class="img-fluid"
                                alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Clients Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Experts</h2>
                <p>Meet the passionate minds driving innovation at SV Infotech.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row g-5">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="testimonial-item">
                            <img src="web/assets/img/testimonials/hs.jpg" class="testimonial-img" alt="Himanshu Singh">
                            <h3>Himanshu Singh</h3>
                            <h4>IT Expert</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>SV Infotech's extensive training sessions helped me become an IT expert, solving
                                    complex problems efficiently.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="testimonial-item">
                            <img src="web/assets/img/testimonials/vs.jpg" class="testimonial-img" alt="Vineet Singh">
                            <h3>Vineet Singh</h3>
                            <h4>Director</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>Leading SV Infotech has been a journey of creating opportunities for aspiring
                                    developers and professionals.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="testimonial-item">
                            <img src="web/assets/img/testimonials/mp.jpg" class="testimonial-img" alt="Mrinal Pandey">
                            <h3>Mrinal Pandey</h3>
                            <h4>AI & Data Science Expert</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>SV Infotech equipped me with cutting-edge skills in AI and Data Science to stay
                                    ahead in my field.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="testimonial-item">
                            <img src="web/assets/img/testimonials/rk.jpg" class="testimonial-img" alt="R.K Pandey">
                            <h3>R.K Pandey</h3>
                            <h4>Cybersecurity & Neural Network Expert</h4>
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                <span>With SV Infotech's robust training, I mastered cybersecurity and neural networks
                                    to tackle modern challenges.</span>
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                </div>

            </div>

        </section><!-- /Testimonials Section -->


        <!-- Stats Section -->
        <section id="stats" class="stats section">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Clients</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1453"
                                data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Workers</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->

        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Services</h2>
                <p>We provide high-quality training in various technology fields to enhance your skills and career
                    prospects.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4">

                    <!-- Web Development Training -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-laptop"></i>
                            </div>
                            <div>
                                <h3>Web Development Training</h3>
                                <p>Master modern web technologies such as HTML, CSS, JavaScript, and frameworks like
                                    React and Laravel to build cutting-edge websites and applications.</p>
                                <a href="service-details.html" class="read-more">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <!-- App Development Training -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-phone"></i>
                            </div>
                            <div>
                                <h3>App Development Training</h3>
                                <p>Learn how to create Android and iOS applications with Kotlin, Swift, and other
                                    powerful tools, enabling you to build cross-platform solutions.</p>
                                <a href="service-details.html" class="read-more">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <!-- Software Development Training -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-gear"></i>
                            </div>
                            <div>
                                <h3>Software Development Training</h3>
                                <p>Get hands-on experience in building scalable and maintainable software applications
                                    with popular programming languages like Java, Python, and PHP.</p>
                                <a href="service-details.html" class="read-more">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                    <!-- IT Industry Training -->
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-card d-flex">
                            <div class="icon flex-shrink-0">
                                <i class="bi bi-person-circle"></i>
                            </div>
                            <div>
                                <h3>IT Industry Training</h3>
                                <p>Gain industry-ready skills by learning from real-world projects and use cases,
                                    enhancing your professional expertise in the competitive IT industry.</p>
                                <a href="service-details.html" class="read-more">Read More <i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div><!-- End Service Card -->

                </div>

            </div>

        </section><!-- /Services Section -->


        <!-- Pricing Section -->
        <section id="pricing" class="pricing section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Our Pricing Plans</h2>
                <p>Choose the perfect plan that suits your training needs in web development, app development, and
                    software development.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4 justify-content-center">

                    <!-- Web Development Plan -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="pricing-card">
                            <h3>Web Development Plan</h3>
                            <div class="price">

                            </div>
                            <p class="description">Get started with the basics of web development, covering HTML, CSS,
                                and JavaScript. Perfect for beginners.</p>

                            <h4>Features Included:</h4>
                            <ul class="features-list">
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    HTML, CSS, and JavaScript Fundamentals
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Responsive Web Design Techniques
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Introduction to Web Development Tools
                                </li>
                            </ul>

                            <a href="#" class="btn btn-primary">
                                Buy Now
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- End Web Development Plan -->

                    <!-- App Development Plan -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="pricing-card popular">
                            <div class="popular-badge">App Development</div>
                            <h3>App Development Plan</h3>
                            <div class="price">

                            </div>
                            <p class="description">Develop Android and iOS apps with cross-platform tools and native
                                development for mobile devices.</p>

                            <h4>Features Included:</h4>
                            <ul class="features-list">
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Android & iOS App Development
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Cross-platform App Development Tools
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Building Real-World Mobile Apps
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Testing & Debugging for Mobile Apps
                                </li>
                            </ul>

                            <a href="#" class="btn btn-light">
                                Buy Now
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- End App Development Plan -->

                    <!-- Software Development Plan -->
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="pricing-card">
                            <h3>Software Development Plan</h3>
                            <div class="price">

                            </div>
                            <p class="description">Dive deep into building scalable and efficient software applications
                                using modern technologies like Java, Python, and PHP.</p>

                            <h4>Features Included:</h4>
                            <ul class="features-list">
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Advanced Programming Concepts
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Software Design and Architecture
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Testing, Debugging, and Deployment
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Building Real-World Software Projects
                                </li>
                                <li>
                                    <i class="bi bi-check-circle-fill"></i>
                                    Industry Best Practices
                                </li>
                            </ul>

                            <a href="#" class="btn btn-primary">
                                Buy Now
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div><!-- End Software Development Plan -->

                </div>

            </div>

        </section><!-- /Pricing Section -->


        <!-- FAQ Section -->
<section class="faq-9 faq section light-background" id="faq">

    <div class="container">
        <div class="row">

            <div class="col-lg-5" data-aos="fade-up">
                <h2 class="faq-title">Have a question? Check out the FAQ</h2>
                <p class="faq-description">Find answers to common questions about our training programs in Web Development, App Development, and Software Development.</p>
                <div class="faq-arrow d-none d-lg-block" data-aos="fade-up" data-aos-delay="200">
                    <svg class="faq-arrow" width="200" height="211" viewBox="0 0 200 211"
                        fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M198.804 194.488C189.279 189.596 179.529 185.52 169.407 182.07L169.384 182.049C169.227 181.994 169.07 181.939 168.912 181.884C166.669 181.139 165.906 184.546 167.669 185.615C174.053 189.473 182.761 191.837 189.146 195.695C156.603 195.912 119.781 196.591 91.266 179.049C62.5221 161.368 48.1094 130.695 56.934 98.891C84.5539 98.7247 112.556 84.0176 129.508 62.667C136.396 53.9724 146.193 35.1448 129.773 30.2717C114.292 25.6624 93.7109 41.8875 83.1971 51.3147C70.1109 63.039 59.63 78.433 54.2039 95.0087C52.1221 94.9842 50.0776 94.8683 48.0703 94.6608C30.1803 92.8027 11.2197 83.6338 5.44902 65.1074C-1.88449 41.5699 14.4994 19.0183 27.9202 1.56641C28.6411 0.625793 27.2862 -0.561638 26.5419 0.358501C13.4588 16.4098 -0.221091 34.5242 0.896608 56.5659C1.8218 74.6941 14.221 87.9401 30.4121 94.2058C37.7076 97.0203 45.3454 98.5003 53.0334 98.8449C47.8679 117.532 49.2961 137.487 60.7729 155.283C87.7615 197.081 139.616 201.147 184.786 201.155L174.332 206.827C172.119 208.033 174.345 211.287 176.537 210.105C182.06 207.125 187.582 204.122 193.084 201.144C193.346 201.147 195.161 199.887 195.423 199.868C197.08 198.548 193.084 201.144 195.528 199.81C196.688 199.192 197.846 198.552 199.006 197.935C200.397 197.167 200.007 195.087 198.804 194.488ZM60.8213 88.0427C67.6894 72.648 78.8538 59.1566 92.1207 49.0388C98.8475 43.9065 106.334 39.2953 114.188 36.1439C117.295 34.8947 120.798 33.6609 124.168 33.635C134.365 33.5511 136.354 42.9911 132.638 51.031C120.47 77.4222 86.8639 93.9837 58.0983 94.9666C58.8971 92.6666 59.783 90.3603 60.8213 88.0427Z"
                            fill="currentColor"></path>
                    </svg>
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="300">
                <div class="faq-container">

                    <div class="faq-item faq-active">
                        <h3>What is included in your Web Development training program?</h3>
                        <div class="faq-content">
                            <p>Our Web Development program covers HTML, CSS, JavaScript, responsive design, and the latest web development frameworks to ensure you can build modern, responsive websites.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>What mobile app platforms do you cover in the App Development program?</h3>
                        <div class="faq-content">
                            <p>Our App Development program includes both Android and iOS platforms, with an emphasis on cross-platform development tools like React Native and Flutter.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>What is the difference between the Web Development and Software Development programs?</h3>
                        <div class="faq-content">
                            <p>The Web Development program focuses on front-end and back-end web technologies, while the Software Development program dives deeper into languages like Java, Python, and C++ for creating desktop and enterprise applications.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Do you offer job placement assistance after completing the training?</h3>
                        <div class="faq-content">
                            <p>Yes! We provide career support, including job placement assistance, resume building, and interview preparation, to help you land your first job in the industry.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>How long is each training program?</h3>
                        <div class="faq-content">
                            <p>Each training program typically lasts 3-6 months, depending on the course and your pace. You can choose between part-time and full-time schedules.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                    <div class="faq-item">
                        <h3>Can I access the course materials after the program is over?</h3>
                        <div class="faq-content">
                            <p>Yes, you will have lifelong access to the course materials, including any updates and additional resources we provide after completion.</p>
                        </div>
                        <i class="faq-toggle bi bi-chevron-right"></i>
                    </div><!-- End Faq item-->

                </div>
            </div>

        </div>
    </div>
</section><!-- /FAQ Section -->

        <!-- Call To Action 2 Section -->
<section id="call-to-action-2" class="call-to-action-2 section dark-background">

    <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
            <div class="col-xl-10">
                <div class="text-center">
                    <h3>Start Your Career in Tech Today</h3>
                    <p>Ready to jumpstart your career in web development, app development, or software development? Join our industry-leading training programs and gain hands-on experience that prepares you for the workforce.</p>
                    <a class="cta-btn" href="#">Enroll Now</a>
                </div>
            </div>
        </div>
    </div>

</section><!-- /Call To Action 2 Section -->


        <!-- Contact Section -->
        <section id="contact" class="contact section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact Us</h2>
                <p>Reach out to us for more information about our IT training programs and services.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row g-4 g-lg-5">
                    <div class="col-lg-5">
                        <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                            <h3>Contact Info</h3>
                            <p>We are happy to assist you with any questions about our training courses or services.</p>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="content">
                                    <h4>Our Location</h4>
                                    <p>11/42, Krishna Nagar</p>
                                    <p>Kanpur, Uttar Pradesh 208007</p>
                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="content">
                                    <h4>Phone Number</h4>
                                    <p>+91 914 0092 133</p>
                                </div>
                            </div>

                            <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-envelope"></i>
                                </div>
                                <div class="content">
                                    <h4>Email Address</h4>
                                    <p>info@svinfotech.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                            <h3>Get In Touch</h3>
                            <p>Have any questions about our programs or want to know more? We'd love to hear from you.</p>

                            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                                <div class="row gy-4">

                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                                    </div>

                                    <div class="col-md-6">
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                                    </div>

                                    <div class="col-12">
                                        <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                    </div>

                                    <div class="col-12">
                                        <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                    </div>

                                    <div class="col-12 text-center">
                                        <div class="loading">Loading</div>
                                        <div class="error-message"></div>
                                        <div class="sent-message">Your message has been sent. Thank you!</div>

                                        <button type="submit" class="btn">Send Message</button>
                                    </div>

                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>

        </section><!-- /Contact Section -->


    </main>

   @include('website.partials.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    @include('website.partials.js')
</body>

</html>
