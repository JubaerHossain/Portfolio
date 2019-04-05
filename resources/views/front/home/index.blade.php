@extends('front.layout')
@section('content')
   <section id="hom" style="background: #676767; background-size: cover;" class="intro-section pb-2">
      <div class="container text-center"><!--
        <div data-animate="fadeInDown" class="logo"><img src="img/logo-big.png" alt="logo" width="130"></div> -->
        <h2 data-animate="fadeInDown" class="h2">Hello, I'm <strong style="color: #ff247f">Jubaer Hossain</strong>.</h2>
        <h2 data-animate="slideInUp" class="h2">I'm full-stack web developer</h2>
      </div>
    </section>
    <!-- About-->
    <section id="about" class="about-section">
      <div class="container">
        <header class="text-center">
          <h2 data-animate="fadeInDown" class="title">About me</h2>
        </header>
        <div class="row">
          <div data-animate="fadeInUp" class="col-lg-6">
            <p>I'm a professional web designer & developer. Working as a professional web & WordPress developer since last 2 years. I've completed over 100+ custom WordPress projects in the different marketplaces. I've experienced in responsive design which is useful for supporting your site on any device. So what are you waiting for? Just let me know about your project & get that! SERVICES: 1.HTML5 2.CSS3 3.JavaScript 2.Mysql 3.PHP 4.Jquery 5.Wordpress 6.Wordpress Customization and Mobile responsiveness 7. Laravel Why Choose: 100% support 100% project completion rate</p>
          </div>
          <div data-animate="fadeInUp" class="col-lg-6">
            <div class="skill-item">
              <div class="progress-title">PHP</div>
              <div class="progress">
                <div role="progressbar" style="width: 95%" aria-valuenow="0" aria-valuemin="60" aria-valuemax="100" class="progress-bar progress-bar-skill1"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="progress-title">Javascript</div>
              <div class="progress">
                <div role="progressbar" style="width: 92%" aria-valuenow="70" aria-valuemin="60" aria-valuemax="100" class="progress-bar progress-bar-skill2"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="progress-title">Node js</div>
              <div class="progress">
                <div role="progressbar" style="width: 88%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill3"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="progress-title">Angular js </div>
              <div class="progress">
                <div role="progressbar" style="width: 87%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill4"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="progress-title">Laravel</div>
              <div class="progress">
                <div role="progressbar" style="width: 97%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill5"></div>
              </div>
            </div>
          </div>
          <div data-animate="fadeInUp" class="col-sm-6 mx-auto mt-5"><img src="{{ asset('/front') }}/img/me.jpg" alt="This is me - IT worker" class="image rounded-circle img-fluid"></div>
        </div>
      </div>
    </section>

    <section id="work">
      <div class="container">
        <div class="col-sm-12">
          <div class="mb-5 text-center">
            <h2 data-animate="fadeInUp" class="title">My work</h2>
            <p data-animate="fadeInUp" class="lead">I have worked on different type  of projects so I have picked only the latest for you.</p>
          </div>
          <ul id="filter" data-animate="fadeInUp">
            <li class="active"><a href="#" data-filter="all">All</a></li>
            <li><a href="#" data-filter="webdesign">Web Design</a></li>
            <li><a href="#" data-filter="development">Web Development</a></li>
          </ul>
          <div id="detail">
            <div class="row">
              <div class="col-lg-10 mx-auto"><span class="close">×</span>
                <div id="detail-slider" class="owl-carousel owl-theme"></div>
                <div class="text-center">
                  <h1 id="detail-title" class="title"></h1>
                </div>
                <div id="detail-content"></div>
              </div>
            </div>
          </div>
          <!-- Reference detail-->
          <div id="references-masonry" data-animate="fadeInUp">
            <div class="row">
                  <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="{{ asset('/front') }}/img/portfolio-1.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4">Project name</h3>
                            <p>Short project description goes here...</p>
                          </div>
                        </div></a>
                      <div data-images="{{ asset('/front') }}/img/portfolio-1.jpg" class="sr-only reference-description">
                          <p>Description here</p>
                      </div>
                    </div>
                  </div>
                  <div data-category="development" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="{{ asset('/front') }}/img/portfolio-2.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4">Project name 2</h3>
                            <p>Short project description goes here...</p>
                          </div>
                        </div></a>
                      <div data-images="img/portfolio-2.jpg" class="sr-only reference-description">
                      </div>
                    </div>
                  </div>
                  <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="{{ asset('/front') }}/img/portfolio-3.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4">Project name 3</h3>
                            <p>Short project description goes here...</p>
                          </div>
                        </div></a>
                      <div data-images="img/portfolio-3.jpg" class="sr-only reference-description">
                      </div>
                    </div>
                  </div>
                  <div data-category="development" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="{{ asset('/front') }}/img/portfolio-4.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4">Project name 4</h3>
                            <p>Short project description goes here...</p>
                          </div>
                        </div></a>
                      <div data-images="img/portfolio-4.jpg" class="sr-only reference-description">
                      </div>
                    </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <section id="contact" data-animate="bounceIn" class="contact-section contact">
      <div class="container">
        <header class="text-center">
          <h2 class="title">Contact me</h2>
        </header>
          @if (Session::get('success'))
              <div class="alert alert-success"><br>
                  <ul>

                      <li>{{ Session::get('success') }}</li>

                  </ul>

              </div>
          @endif
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form id="contact-form" method="post" action="{{route('contact-store')}}">
                {{ csrf_field() }}
              <div class="messages"></div>
              <div class="controls">
                <div class="row">
                  <div class="col-md-6 {{ $errors->has('firstname') ? ' has-error' : '' }}">
                    <input type="text" value="{{old('firstname')}}" name="firstname" placeholder="First name *" required="required" class="form-control">
                  </div>
                  <div class="col-md-6 {{ $errors->has('lastname') ? ' has-error' : '' }}">
                    <input type="text" value="{{old('lastname')}}" name="lastname" placeholder="Last Name *" required="required" class="form-control">
                  </div>
                  <div class="col-md-6 {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="text" value="{{old('email')}}" name="email" placeholder="Your email *" required="required" class="form-control">
                  </div>
                  <div class="col-md-6 {{ $errors->has('phone') ? ' has-error' : '' }}">
                    <input type="text" value="{{old('phone')}}" name="phone" placeholder="Your phone" class="form-control">
                  </div>
                  <div class="col-md-12 {{ $errors->has('message') ? ' has-error' : '' }}">
                    <textarea name="message"  placeholder="Message for me *" rows="4" required="required" class="form-control"></textarea>
                  </div>
                  <div class="col-md-12 text-center">
                    <button type="submit" class="btn btn-outline-primary">Send message</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

@endsection
