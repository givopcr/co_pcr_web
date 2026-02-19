@extends('layouts.corebiz')

@section('title', 'CoreBiz - Home')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="hero-content">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <div class="content">
                <h1>Transforming Ideas Into Strategic Business Solutions</h1>
                <p>We partner with forward-thinking companies to accelerate growth, optimize operations, and unlock their full potential through innovative consulting approaches and data-driven insights.</p>
                <div class="cta-group">
                  <a href="#about" class="btn-primary">Start Your Journey</a>
                  <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="btn-secondary glightbox">
                    <i class="bi bi-play-circle"></i>
                    <span>Watch Our Story</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
              <div class="hero-image">
                <img src="{{ asset('assets/img/about/about-8.webp') }}" alt="Corporate Business" class="img-fluid">
                <div class="floating-card" data-aos="fade-up" data-aos-delay="300">
                  <div class="card-content">
                    <div class="metric">
                      <span class="number">150+</span>
                      <span class="label">Successful Projects</span>
                    </div>
                    <div class="metric">
                      <span class="number">98%</span>
                      <span class="label">Client Satisfaction</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="hero-features">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-item">
                  <div class="icon">
                    <i class="bi bi-graph-up"></i>
                  </div>
                  <h4>Strategic Growth</h4>
                  <p>Accelerate your business expansion with proven methodologies</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-item">
                  <div class="icon">
                    <i class="bi bi-lightbulb"></i>
                  </div>
                  <h4>Innovation Focus</h4>
                  <p>Transform challenges into opportunities through creative solutions</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-item">
                  <div class="icon">
                    <i class="bi bi-people"></i>
                  </div>
                  <h4>Expert Team</h4>
                  <p>Industry veterans dedicated to your success and growth</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="feature-item">
                  <div class="icon">
                    <i class="bi bi-award"></i>
                  </div>
                  <h4>Proven Results</h4>
                  <p>Track record of delivering measurable business outcomes</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section light-background">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-brush"></i>
              </div>
              <h3>Creative Design</h3>
              <p>Nulla facilisi morbi tempus iaculis urna id volutpat lacus laoreet non curabitur gravida arcu.</p>
              <a href="service-details.html" class="service-link">
                <span>Explore Service</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-globe"></i>
              </div>
              <h3>Web Development</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
              <a href="service-details.html" class="service-link">
                <span>Explore Service</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-graph-up-arrow"></i>
              </div>
              <h3>Digital Marketing</h3>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
              <a href="service-details.html" class="service-link">
                <span>Explore Service</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-headset"></i>
              </div>
              <h3>Consulting</h3>
              <p>Excepteur sint occaecat cupidatat non proident sunt in culpa qui officia deserunt mollit anim.</p>
              <a href="service-details.html" class="service-link">
                <span>Explore Service</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>Find Out More About Us</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="content">
              <h2>Building Excellence Through Innovation and Integrity</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

              <div class="description">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>

              <div class="stats-row">
                <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                  <div class="stat-number">
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>+
                  </div>
                  <div class="stat-label">Years of Excellence</div>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                  <div class="stat-number">
                    <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>+
                  </div>
                  <div class="stat-label">Satisfied Clients</div>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="500">
                  <div class="stat-number">
                    <span data-purecounter-start="0" data-purecounter-end="1200" data-purecounter-duration="1" class="purecounter"></span>+
                  </div>
                  <div class="stat-label">Projects Completed</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="image-container">
              <img src="{{ asset('assets/img/about/about-square-8.webp') }}" alt="About Us" class="img-fluid">
              <div class="image-overlay">
                <div class="overlay-content">
                  <i class="bi bi-award"></i>
                  <div class="overlay-text">
                    <h4>Award Winning</h4>
                    <p>Excellence in Service</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Check Our Services</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-laptop"></i>
              </div>
              <h3>Web Development</h3>
              <p>Crafting responsive, modern websites that deliver exceptional user experiences and drive business growth.</p>
              <a href="service-details.html" class="service-link">
                <span>Learn More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-brush"></i>
              </div>
              <h3>Brand Design</h3>
              <p>Creating compelling visual identities that communicate your brand's essence and resonate with your audience.</p>
              <a href="service-details.html" class="service-link">
                <span>Learn More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-graph-up-arrow"></i>
              </div>
              <h3>Digital Marketing</h3>
              <p>Strategic marketing solutions that amplify your reach and convert prospects into loyal customers.</p>
              <a href="service-details.html" class="service-link">
                <span>Learn More</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Services Section -->

    <!-- Team Section -->
    <section id="team" class="team section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Our Hardworking Team</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member-card">
              <div class="member-image-wrapper">
                <img src="{{ asset('assets/img/person/person-f-1.webp') }}" class="img-fluid" alt="Team Member">
              </div>
              <div class="member-content">
                <h4 class="member-name">Sarah Chen</h4>
                <span class="member-role">Chief Executive Officer</span>
                <p class="member-bio">Praesentium nihil ut laudantium cumque. Ut et consequatur ab ut totam architecto. Expedita sunt eum</p>
                <div class="member-socials">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member-card">
              <div class="member-image-wrapper">
                <img src="{{ asset('assets/img/person/person-m-2.webp') }}" class="img-fluid" alt="Team Member">
              </div>
              <div class="member-content">
                <h4 class="member-name">David Lee</h4>
                <span class="member-role">Product Manager</span>
                <p class="member-bio">Voluptas qui enim omnis est atque. Enim sunt quo et amet corporis et. Autem eaque optio.</p>
                <div class="member-socials">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-github"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member-card">
              <div class="member-image-wrapper">
                <img src="{{ asset('assets/img/person/person-f-3.webp') }}" class="img-fluid" alt="Team Member">
              </div>
              <div class="member-content">
                <h4 class="member-name">Laura Rodriguez</h4>
                <span class="member-role">Marketing Director</span>
                <p class="member-bio">Qui ut autem quo error molestiae. Voluptatem quia eligendi voluptatibus beatae vitae et quis. Quis voluptatem.</p>
                <div class="member-socials">
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="member-card">
              <div class="member-image-wrapper">
                <img src="{{ asset('assets/img/person/person-m-4.webp') }}" class="img-fluid" alt="Team Member">
              </div>
              <div class="member-content">
                <h4 class="member-name">Michael Brown</h4>
                <span class="member-role">Lead Engineer</span>
                <p class="member-bio">Rerum et sint voluptatem enim aut. Quisquam et alias ut qui voluptatum. Autem voluptas exercitationem.</p>
                <div class="member-socials">
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                  <a href="#"><i class="bi bi-github"></i></a>
                  <a href="#"><i class="bi bi-stack-overflow"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Need Help? Contact Us</p>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-stretch">
          <div class="col-lg-7 order-lg-1 order-2" data-aos="fade-right" data-aos-delay="200">
            <div class="contact-form-container">
              <div class="form-intro">
                <h2>Let's Start a Conversation</h2>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur sint occaecat cupidatat.</p>
              </div>

              <form action="forms/contact.php" method="post" class="php-email-form contact-form">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="text" name="name" class="form-input" id="userName" placeholder="Your Name" required="">
                      <label for="userName" class="field-label">Name</label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="email" class="form-input" name="email" id="userEmail" placeholder="Your Email" required="">
                      <label for="userEmail" class="field-label">Email</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="tel" class="form-input" name="phone" id="userPhone" placeholder="Your Phone">
                      <label for="userPhone" class="field-label">Phone</label>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-field">
                      <input type="text" class="form-input" name="subject" id="messageSubject" placeholder="Subject" required="">
                      <label for="messageSubject" class="field-label">Subject</label>
                    </div>
                  </div>
                </div>

                <div class="form-field message-field">
                  <textarea class="form-input message-input" name="message" id="userMessage" rows="5" placeholder="Tell us about your project" required=""></textarea>
                  <label for="userMessage" class="field-label">Message</label>
                </div>

                <button type="submit" class="send-button">
                  Send Message
                  <span class="button-arrow">→</span>
                </button>
              </form>
            </div>
          </div>

          <div class="col-lg-5 order-lg-2 order-1" data-aos="fade-left" data-aos-delay="300">
            <div class="contact-sidebar">
              <div class="contact-header">
                <h3>Get in Touch</h3>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam quis nostrud.</p>
              </div>

              <div class="contact-methods">
                <div class="contact-method" data-aos="fade-in" data-aos-delay="350">
                  <div class="contact-icon">
                    <i class="bi bi-geo-alt"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Address</span>
                    <p>892 Park Avenue, Manhattan<br>New York, NY 10075</p>
                  </div>
                </div>

                <div class="contact-method" data-aos="fade-in" data-aos-delay="400">
                  <div class="contact-icon">
                    <i class="bi bi-envelope"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Email</span>
                    <p>hello@businessdemo.com</p>
                  </div>
                </div>

                <div class="contact-method" data-aos="fade-in" data-aos-delay="450">
                  <div class="contact-icon">
                    <i class="bi bi-telephone"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Phone</span>
                    <p>+1 (555) 789-2468</p>
                  </div>
                </div>

                <div class="contact-method" data-aos="fade-in" data-aos-delay="500">
                  <div class="contact-icon">
                    <i class="bi bi-clock"></i>
                  </div>
                  <div class="contact-details">
                    <span class="method-label">Hours</span>
                    <p>Monday - Friday: 9AM - 6PM<br>Saturday: 10AM - 4PM</p>
                  </div>
                </div>
              </div>

              <div class="connect-section" data-aos="fade-up" data-aos-delay="550">
                <span class="connect-label">Connect with us</span>
                <div class="social-links">
                  <a href="#" class="social-link">
                    <i class="bi bi-linkedin"></i>
                  </a>
                  <a href="#" class="social-link">
                    <i class="bi bi-twitter-x"></i>
                  </a>
                  <a href="#" class="social-link">
                    <i class="bi bi-instagram"></i>
                  </a>
                  <a href="#" class="social-link">
                    <i class="bi bi-facebook"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->
@endsection