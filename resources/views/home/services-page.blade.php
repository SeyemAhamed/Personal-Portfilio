@extends('frontend.master')

@section('content')
  <!-- Services Section -->
  <section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Services</h2>
      <p>
        If you're looking for web development and design services, here’s a breakdown of the most common types of services that professionals or agencies offer:</p>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
          <div>
            <h4 class="title"><a href="{{url('/service/details')}}" class="stretched-link">Web Design</a></h4>
            <p class="description">Responsive Design: Ensuring the website looks good and works well on all devices (mobile, tablet, desktop).
              Branding & Identity: Designing logos, color schemes, fonts, and overall aesthetics to match your brand.</p>
          </div>
        </div>
        <!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
          <div>
            <h4 class="title"><a href="service-details.html" class="stretched-link">Web Development </a></h4>
            <p class="description">Frontend Development: Coding the user-facing part of the website using HTML, CSS, JavaScript, and frameworks like React, Angular, or Vue.js.
              Backend Development: Building server-side logic, databases, and APIs using languages like Node.js, Laravel, PHP, etc.
              Full Stack Development: Combining both frontend and backend development to deliver complete web applications.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
          <div>
            <h4 class="title"><a href="service-details.html" class="stretched-link">Additional</a></h4>
            <p class="description">Website Maintenance: Ongoing updates, security patches, performance monitoring, and backups.
              Performance Optimization: Improving load times, mobile responsiveness, and overall website speed.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
          <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
          <div>
            <h4 class="title"><a href="service-details.html" class="stretched-link">Technologies and Tools</a></h4>
            <p class="description">Frameworks: Bootstrap, Tailwind CSS (for design), Django, Ruby on Rails (for backend).Languages: HTML, CSS, JavaScript, Laravel, PHP, etc.</p>
            
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services Section -->
@endsection