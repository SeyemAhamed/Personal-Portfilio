@extends('frontend.master')

@section('content')

  <!-- About Section -->
  <section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>About</h2>
      <p>I'm a  Full Stack Web Developer.I can provide clean code and pixel perfect desing. I also make the webside more & more interactive with web animations.
        I can provide clean code and pixel perfect desing .I also make the website more & more interactive with web animations.A responsive desing makes your webside accessible to all users,regardless of their device.</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4 justify-content-center">
        <div class="col-lg-4">
          <img src="{{asset('frontend/assets/img/seyem2.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 content">
          <h2> Full Stack Web Developer  &amp; Designer.</h2>
          <p class="fst-italic py-3">
            I am a Full Stack Developer with a passion for modern technologies and I specialize in using PHP, JavaScript, and system architecture, I am adept at designing and implementing efficient solutions for complex projects.
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>15 June 2002</span></li>
                {{-- <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li> --}}
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+8801402313786</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Dhaka ,Bangladesh </span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>21</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>HSC</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>seyamjh@gmail.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
              </ul>
            </div>
          </div>
          <p class="py-3">
            I am also proficient in, providing end-to-end solutions for clients. 
          </p>
        </div>
      </div>

    </div>

  </section><!-- /About Section -->

  @endsection