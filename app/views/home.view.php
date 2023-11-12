<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">
        <div class="profile">
            <img src="<?= ROOT ?>public/assets/images/profile-photo.jpg" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html"><?= ucwords(APPINFO->myName) ?></a></h1>
            <div class="social-links mt-3 text-center">
                <a href="https://web.facebook.com/profile.php?id=100078219175669" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.linkedin.com/in/francis-kioko-947b63228/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <h1><?= ucwords(APPINFO->myName) ?></h1>
        <p>I'm <span class="typed" data-typed-items="<?= APPINFO->typed ?>"></span></p>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">
            <div class="section-title">
                <h2>About</h2>
                <p>
                    Professionally, I am an Administrator having achieved this trough degree certification from Kirinyaga
                    University, practiced administration roles in a couple of organizations including Kitui Teachers Sacco, Hencan Enterprises Ltd, Frajosan IT Consultancies, Richard & Son’s engineering company among others. I also worked as a Credit Officer at BIMAS Kenya. As well, I am a competent software Engineer, having done many software including schools, SACCOS and IT Company’s software, as well as worked with IEBC during both the Voter Verification and the General Elections as an ICT Officer.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="<?= ROOT ?>public/assets/images/profile-photo.jpg" class="img-fluid rounded" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>UI/UX Designer &amp; Full stack Web Developer.</h3>
                    <p class="fst-italic">
                        Having completed a couple of software engineering certifications and being into practice in the field of web design and develoment as a both front-end and backend developer for the last 5 years, i am confident to introduce myself as a full-stack developer
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>9<sup>Th</sup> May 1997</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.frajosantech.co.ke</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+254 796 594 366</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Nairobi, Kenya</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?= 2023 - 1997 ?></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>frajosan97@gmail.com</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container">
            <div class="section-title">
                <h2>Facts</h2>
                <p>My motive being to be one of the best full-stack developers in the world and be in front-line in enhancing technological innovation world wide, below are the facts from my efforts</p>
            </div>
            <div class="row no-gutters">
                <?php foreach ($data['facts'] as $key => $value) { ?>
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="<?= $value['icon'] ?>"></i>
                            <span data-purecounter-start="0" data-purecounter-end="<?= $value['count'] ?>" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong><?= ucwords($key) ?></strong></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Skills</h2>
            </div>
            <div class="row skills-content">
                <div class="col-lg-8" data-aos="fade-up">
                    <?php foreach ($data['skills'] as $key => $value) { ?>
                        <h3 class="resume-title"><?= ucwords($key) ?></h3>
                        <div class="resume-item">
                            <?php if (!(is_array($value))) { ?>
                                <p><?= ucfirst($value) ?></p>
                            <?php } else { ?>
                                <ul>
                                    <?php foreach ($value as $listValue) { ?>
                                        <li><?= $listValue ?></li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <?php foreach ($data['skillsMeasure'] as $key => $value) { ?>
                        <div class="progress">
                            <span class="skill"><?= $key ?> <i class="val"><?= $value ?>%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?= $value ?>" aria-valuemin="0" aria-valuemax="<?= $value ?>"></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">
            <div class="section-title">
                <h2>Resume</h2>
                <!-- <p></p> -->
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Sumary</h3>
                    <div class="resume-item pb-0">
                        <h4><?= ucwords(APPINFO->myName) ?></h4>
                        <p><em>Innovative and deadline-driven Web developer with 4+ years of experience developing user-centered websites from initial concept to final, polished deliverable.</em></p>
                        <ul>
                            <li>222 - Nairobi, Kenya</li>
                            <li>+254 796 594 366</li>
                            <li>frajosan97@gmail.com</li>
                        </ul>
                    </div>
                    <h3 class="resume-title">Education</h3>
                    <?php foreach ($data['education'] as $key => $value) { ?>
                        <div class="resume-item">
                            <h4><?= $key ?></h4>
                            <h5><?= $value['period'] ?></h5>
                            <p><em><?= ucfirst($value['school']) ?></em></p>
                            <?php if (!(is_array($value['achievement']))) { ?>
                                <p><?= ucfirst($value['achievement']) ?></p>
                            <?php } else { ?>
                                <ul>
                                    <?php foreach ($value['achievement'] as $listValue) { ?>
                                        <li><?= $listValue ?></li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Professional Experience</h3>
                    <?php foreach ($data['experience'] as $key => $value) { ?>
                        <div class="resume-item">
                            <h4><?= $key ?></h4>
                            <h5><?= $value['period'] ?></h5>
                            <p><em><?= ucfirst($value['organization']) ?></em></p>
                            <?php if (!(is_array($value['duties']))) { ?>
                                <p><?= ucfirst($value['duties']) ?></p>
                            <?php } else { ?>
                                <ul>
                                    <?php foreach ($value['duties'] as $listValue) { ?>
                                        <li><?= $listValue ?></li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Portfolio</h2>
                <p></p>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-web">Web</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                <?php foreach ($data['portfolio'] as $key => $value) { ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-<?= $value['filter'] ?>">
                        <div class="portfolio-wrap">
                            <img src="<?= ROOT ?>public/assets/images/portfolio/<?= $value['image'] ?>" class="img-fluid" alt="">
                            <div class="portfolio-links">
                                <a href="<?= ROOT ?>public/assets/images/portfolio/<?= $value['image'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?= $key ?>"><i class="bx bx-plus"></i></a>
                                <a href="<?= $value['link'] ?>" target="_blank" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <h2>Services</h2>
                <p></p>
            </div>
            <div class="row">
                <?php foreach ($data['services'] as $key => $value) { ?>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"><i class="<?= $value['icon'] ?>"></i></div>
                        <h4 class="title"><a href=""><?= ucwords($key) ?></a></h4>
                        <p class="description"><?= ucfirst($value['desc']) ?></p>
                    </div>
                <?php } ?>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Testimonials</h2>
                <p></p>
            </div>
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <?php foreach ($data['testimonies'] as $key => $value) { ?>
                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    <?= $value['testimony'] ?>
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="<?= ROOT ?>public/assets/images/testimonials/<?= $value['photo'] ?>" class="testimonial-img" alt="">
                                <h3><?= ucwords($key) ?></h3>
                                <h4><?= ucwords($value['title']) ?></h4>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact</h2>
                <p>Message for support / service anytime</p>
            </div>
            <div class="row" data-aos="fade-in">
                <div class="col-md-12 d-flex align-items-stretch">
                    <form action="<?= ROOT ?>home/message" class="php-email-form contactForm">
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>Francis Kioko</span></strong>
        </div>
    </div>
</footer><!-- End  Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>