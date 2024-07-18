<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">
    <title>Webency - Design Agency</title>



</head>
<body>
  <div class="container navbar-section">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Logo on the left -->
            <a class="navbar-brand" href="#">
                <img src="{{asset('frontend/images/download.svg')}}" alt="Logo" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#Offers">Our Offers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#goals">Goals</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#Mission">Mission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#Testimonial">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 p-0">
        <div class="home-banner">
          <div class="overlay"></div>
          <div class="container">
            <div class="banner-content">
              <span>Employee</span><br>
              <span>Management</span>
              <p>
                Pagerland offers a great, smooth looking and ultra-fast landing page templates built on Gatsby and React.
              </p>
              <div class="banner-btn-group pt-3">
                <a type="button" class="btn btn-primary banner-btn1">know about us</a>
                <a type="button" class="btn btn-outline-primary banner-btn2">Learn More</a>

              </div>

            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<div class="about-section" id="Offers">
  <div class="container">
    <div class="row">
      <h2>What we do</h2>
      <h1>Our offer</h1>
      <div class="container p-5">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="{{asset('frontend/images/download (1).svg')}}" class="card-img-top mt-5" style="height: 60px;" alt="...">
              <div class="card-body">
                <h5 class="card-title">Consulting</h5>
                <p class="card-text">Proin sed pharetra ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>

              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{asset('frontend/images/download (2).svg')}}" style="height: 60px;" class="card-img-top mt-5" alt="...">
              <div class="card-body">
                <h5 class="card-title">Auditing</h5>
                <p class="card-text">Proin sed pharetra ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="{{asset('frontend/images/download.svg')}}" style="height: 60px;" class="card-img-top mt-5" alt="...">
              <div class="card-body">
                <h5 class="card-title">Strategy</h5>
                <p class="card-text">Proin sed pharetra ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
<div class="goals-section" id="goals" >
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img class="goals-img" src="{{asset('frontend/images/our-goals.png')}}" alt="">
      </div>
      <div class="col-md-6">
        <h2>We stay focus on targets</h2>
        <h1>Our goals</h1>
        <p>
          Proin sed pharetra ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam commodo eu justo in posuere. Sed elementum, ipsum eu faucibus porta, odio mauris posuere quam, eu cursus tellus est et lacus. Aenean maximus velit ac malesuada ultricies. Vestibulum magna leo, convallis non elit ac, hendrerit sollicitudin tellus.
        </p>
        <div class="banner-btn-group pt-3">
          <a type="button" class="btn btn-outline-primary banner-btn2">Learn More</a>
        </div>


      </div>
    </div>
  </div>

</div>
<div class="mission-section" id="Mission">
  <div class="container">
    <div class="row">

      <div class="col-md-6">
        <h2>Wha we’re dedicated to</h2>
        <h1>Our mission</h1>
        <p>
          Proin sed pharetra ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam commodo eu justo in posuere. Sed elementum, ipsum eu faucibus porta, odio mauris posuere quam, eu cursus tellus est et lacus. Aenean maximus velit ac malesuada ultricies. Vestibulum magna leo, convallis non elit ac, hendrerit sollicitudin tellus.
        </p>
        <div class="banner-btn-group pt-3">
          <a type="button" class="btn btn-outline-primary banner-btn2">Learn More</a>
        </div>


      </div>
      <div class="col-md-6">
        <img class="goals-img" src="{{asset('frontend/images/our-mission.png')}}" alt="">
      </div>
    </div>
  </div>

</div>
<div class="support-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2> World class support</h2>
        <h1>We’re here to help!</h1>
        <p>Simply go to our support website and open a ticket to get fast and professional help directly from them Envato Elite authors.</p>
        <div class="banner-btn-group pt-3">
          <a type="button" class="btn btn-primary banner-btn1">Open Support Ticket</a>

        </div>

      </div>
    </div>
  </div>
</div>

<div class="team-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Our biggest value are people</h2>
        <h1>Meet our <br>
           great team</h1>
        <p>
          Proin sed pharetra ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam commodo eu justo in posuere. Sed elementum, ipsum eu faucibus porta, odio mauris posuere quam, eu cursus tellus est et lacus. Aenean maximus velit ac malesuada ultricies. Vestibulum magna leo, convallis non elit ac, hendrerit sollicitudin tellus.
        </p>
        <div class="banner-btn-group pt-3">
          <a type="button" class="btn btn-outline-primary banner-btn2">Learn More</a>
        </div>


      </div>
      <div class="col-md-6">
        <img class="goals-img" src="{{asset('frontend/images/team.png')}}" alt="">
      </div>
    </div>
  </div>

</div>
<div class="team-img-section">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <img src="{{asset('frontend/images/avatar-1.jpg')}}" class="card-img-top mx-auto d-block" alt="...">
          <div class="card-body">
            <h5 class="card-title">Timothy Wilson</h5>
            <p class="card-text">Co-Founder, CEO</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="{{asset('frontend/images/avatar-2.jpg')}}" class="card-img-top mx-auto d-block" alt="...">
          <div class="card-body">
            <h5 class="card-title">Timothy Wilson</h5>
            <p class="card-text">Co-Founder, CEO</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="{{asset('frontend/images/avatar-3.jpg')}}" class="card-img-top mx-auto d-block" alt="...">
          <div class="card-body">
            <h5 class="card-title">Timothy Wilson</h5>
            <p class="card-text">Co-Founder, CEO</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <img src="{{asset('frontend/images/avatar-4.jpg')}}" class="card-img-top mx-auto d-block" alt="...">
          <div class="card-body">
            <h5 class="card-title">Timothy Wilson</h5>
            <p class="card-text">Co-Founder, CEO</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="testimonial-section" id="Testimonial">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2> Our customer reviews</h2>
        <h1>Testimonials</h1>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner m-5">
            <div class="carousel-item active">

               <p>
                "Praesent nec commodo arcu. Vivamus convallis pretium malesuada. Aenean feugiat maximus suscipit. Fusce maximus aliquam ipsum, at hendrerit augue aliquet ac. Maecenas scelerisque, massa a fringilla imperdiet, velit purus gravida dolor, et blandit lorem nulla non eros."
               </p>
               <h3>_____Orsola Jeroch, Bigger Company CTO</h3>
            </div>
            <div class="carousel-item">
              <p>
                "Praesent nec commodo arcu. Vivamus convallis pretium malesuada. Aenean feugiat maximus suscipit. Fusce maximus aliquam ipsum, at hendrerit augue aliquet ac. Maecenas scelerisque, massa a fringilla imperdiet, velit purus gravida dolor, et blandit lorem nulla non eros."
               </p>
               <h3>_____Orsola Jeroch, Bigger Company CTO</h3>
            </div>
            <div class="carousel-item">
              <p>
                "Praesent nec commodo arcu. Vivamus convallis pretium malesuada. Aenean feugiat maximus suscipit. Fusce maximus aliquam ipsum, at hendrerit augue aliquet ac. Maecenas scelerisque, massa a fringilla imperdiet, velit purus gravida dolor, et blandit lorem nulla non eros."
               </p>
               <h3>_____Orsola Jeroch, Bigger Company CTO</h3>
            </div>
          </div>
          <button class="carousel-control-prev pt-5" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next pt-5" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="quote-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Interested in our services?</h2>
        <h1>Get a free quote!</h1>
        <p>Ut at cursus justo, non luctus lacus. Proin cursus felis at dolor auctor molestie. Aenean fringilla dolor quis felis laoreet.</p>
        <div class="banner-btn-group pt-3">
          <a type="button" class="btn btn-primary banner-btn1">Get A Quote</a>
          <a type="button" class="btn btn-outline-primary banner-btn2">Contact us</a>

        </div>

      </div>
    </div>
  </div>
</div>
<div class="contact-section" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Drop us a line or visit us</h2>
        <h1>Contact</h1>
        <p>Ut at cursus justo, non luctus lacus. Proin cursus felis at dolor auctor molestie. Aenean fringilla dolor quis felis laoreet.</p>
        <div class="container w-50">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Phone</label>
                <input type="phone" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Message</label>
                <textarea class="form-control" name="" id=""></textarea>
              </div>

              <div class="banner-btn-group pt-3">

                <a type="button" class="btn btn-outline-primary banner-btn2 w-100">Submit</a>

              </div>
            </form>
        </div>

      </div>
    </div>
  </div>
</div>
<div class="footer-section">
  <div class="container">
    <span> &copy 2024 Department of CSE, Premier University</span>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
