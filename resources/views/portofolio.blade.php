<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="naomi" content="" />
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

  <style>
    .card:hover {
      transform: translateY(-6px);
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    ul.timeline {
      list-style-type: none;
      position: relative;
    }

    ul.timeline:before {
      content: ' ';
      background: #d4d9df;
      display: inline-block;
      position: absolute;
      left: 4px;
      width: 2px;
      height: 100%;
      z-index: 400;
    }

    ul.timeline>li {
      margin: 20px 0;
      padding-left: 20px;
    }

    ul.timeline>li:before {
      content: ' ';
      background: white;
      display: inline-block;
      position: absolute;
      border-radius: 50%;
      border: 3px solid #a43f49;
      left: -5px;
      width: 20px;
      height: 20px;
      z-index: 400;
    }

    .icon-large {
      font-size: 36px;
    }

    #download-cv-button {
      color: #fff;
      border: 1px solid;
      background-color: transparent;
      transition: background-color 0.3s, color 0.3s;
    }

    #download-cv-button:hover {
      background-color: #fff;
      color: #a43f49;
    }

    .service-icon i {
    color: #fff;
    font-size: 36px;
    transition: color 0.3s;
}

.service-icon:hover i {
    color: #a43f49;
}

  </style>

  <title>Portfolio</title>
  <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/templatemo-style.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/css/lightbox.css') }}" />

</head>

<body>
  <div id="page-wraper">
    <div class="responsive-nav">
      <i class="fa fa-bars" id="menu-toggle"></i>
      <div id="menu" class="menu">
        <i class="fa fa-times" id="menu-close"></i>
        <div class="container">
          <div class="image">
          <a href="#"><img src="{{ asset('assets/images/omi.jpg') }}" alt="" /></a>
          </div>
          <div class="author-content">
            <h4>Naomi Deva</h4>
            <span>Informatics Student</span>
          </div>
          <nav class="main-nav" role="navigation">
            <ul class="main-menu">
              <li><a href="#section1">About Me</a></li>
              <li><a href="#section2">What I Do</a></li>
              <li><a href="#section3">Resume</a></li>
              <li><a href="#section4">Portfolio</a></li>
              <li><a href="#section5">Contact Me</a></li>
            </ul>
          </nav>
          <div class="social-network">
            <div class="social-network">
              <ul class="soial-icons">
                <li>
                  <a href="https://www.linkedin.com/in/naomi-sihombing-1220ba293?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="https://instagram.com/naomy_deva?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a href="https://github.com/naomydeva"><i class="fa fa-github"></i></a>
                </li>
              </ul>
              <a href="https://drive.google.com/file/d/1CR75yaDPZUMsAal_zJe68y6BJgkbG2vu/view?usp=sharing" class="btn btn-transparent mt-4" id="download-cv-button">Download CV</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="section about-me" data-section="section1">
      <div class="container">
          <div class="section-heading">
              <h2 style="font-size: 50px;">About Me</h2>
              <div class="line-dec"></div>
          </div>
          <div class="row">
              <div class="col-md-6">
                  <div class="gambar">
                      <img src="assets/images/omi.jpg" alt="" style="max-width: 100%; height: auto;">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="right-text">
                      <div class="main-text">
                          <p style="font-size: 23px;">
                              <p style="font-size: 23px;">I am an informatics student who is passionate  about the world of technology.</p>
                              <p style="font-size: 23px;">I am pursuing a bachelor's degree in computer science at Del Institute of Technology.</p>
                              <p style="font-size: 23px;">My education in this field has given me an understanding of programming, software development,</p>
                              <p style="font-size: 23px;">and networking technologies.</p>
                              <p style="font-size: 23px;">I have also learned various programming languages such as Java, C, Python, HTML, CSS, and JavaScript.</p>
                          </p>
                      </div>
                      <div class="explain mt-5">
                          <p><span style="color: white; font-size: 23px;">Birthday : </span> <span style="color: #a43f49; font-size: 23px;">April 18, 2023</span></p>
                          <p><span style="color: white; font-size: 23px;">Age : </span> <span style="color: #a43f49; font-size: 23px;">20</span></p>
                          <p><span style="color: white; font-size: 23px;">Address : </span> <span style="color: #a43f49; font-size: 23px;">Tarutung, North Sumatra, Indonesia</span></p>
                          <p><span style="color: white; font-size: 23px;">Email : </span> <span style="color: #a43f49; font-size: 23px;">Tarutung, North Sumatra, Indonesia</span></p>
                          <p><span style="color: white; font-size: 23px;">Phone : </span> <span style="color: #a43f49; font-size: 23px;">+62 822 689 733 74</span></p>
                          <p><span style="color: white; font-size: 23px;">Study : </span> <span style="color: #a43f49; font-size: 23px;">Institute Technology Del</span></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

    <section class="section my-services" data-section="section2">
      <div class="container">
        <div class="section-heading">
          <h2 style="font-size: 50px;">What I Do</h2>
          <div class="line-dec"></div>
          <div class="row">
            <div class="col-md-6">
              <div class="service-item">
                <div class="first-service-icon service-icon"></div>
                <h4>Document Writer</h4>
                <p>
                  I create documents that are clear and concise representations of ideas. 
                  I ensure complex information is presented
                  in a way that is easy to understand.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="second-service-icon service-icon"></div>
                <h4>System Analysis</h4>
                <p>
                  Designing various types of models, such as Use Case Diagram, ERD, CDM, PDM,
                  Class Diagram, and Activity Diagram. to understand, plan,
                  and develop software systems more effectively and efficiently.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="third-service-icon service-icon"></div>
                <h4>Data Analyst</h4>
                <p>
                  responsible for collecting, analyzing, and
                  interpreting data 
                  to support decision-making on projects.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="service-item">
                <div class="fourth-service-icon service-icon"></div>
                <h4>Designer</h4>
                <p>
                  Create design elements, such as graphic design, user interface (UI),
                  and user experience (UX), in order to have an
                  attractive and easy-to-use appearance.
                </p>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section class="section my-work">
      <div class="container">
        <div class="section-heading">
          <h2 style="font-size: 50px;">Fun Fact</h2>
          <div class="line-dec"></div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="service-item">
              <div class="service-icon" style="font-size: 36px;">
                <i class="fas fa-book"></i>
              </div>
              <h4>A love for books</h4>
              <p>
                Behind the computer screens and complex codes, there is a side of me that has always been inspired by a love for literacy.
                Fun fact I have a habit of reading more than 50 books a year, with a variety of genres that I enjoy.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-item">
              <div class="service-icon" style="font-size: 36px;">
                <i class="fas fa-cat"></i>
              </div>
              <h4>Love of Cats</h4>
              <p>
                I am a devoted cat lover. Fun fact At home, I have two cats, they are not just pets, but also loyal friends who 
                are always by my side. and I spend more money on my cats than on my personal needs.
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-item">
              <div class="service-icon" style="font-size: 36px;">
                <i class="fas fa-heart"></i>
              </div>
              <h4>Outside Music Lovers</h4>
              <p>
                Fun fact I have achieved a personal record by listening to music for more than 24 hours straight to celebrate my 
                love for music and soak in every note, lyric, and emotion that my favorite songs have to offer
              </p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="service-item">
              <div class="service-icon" style="font-size: 36px;">
                <i class="fas fa-music"></i>
              </div>
              <h4>Active Podcast Listener</h4>
              <p>
                I stay up-to-date with the latest information in fields ranging from technology to psychology to history.
                This helps me to keep learning and expanding my horizons, and ensures that I'm always ready for new challenges.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section about-me" data-section="section3">
      <div class="container">
        <div class="section-heading">
          <h2 style="font-size: 50px;">Resume</h2>
          <div class="line-dec"></div>
        </div>
        <div class="left-image-post">
          <div class="row">
            <div class="col-md-6">
              <h4>Education</h4>
              <ul class="timeline">
                <li>
                  <a target="_blank" href="https://www.totoprayogo.com/#"><b style="color: #a43f49";>IT Del informatics student</b> </a>
                  <a href="#" class="float-right" style="color: #a43f49";>2021 - Present</a>
                  <p>a fifth-semester Informatics student at Del Institute of Technology, who has gained an understanding of 
                    programming, algorithms, data structures, as well as networking technologies.</p>
                </li>
                <li>
                  <a href="#"><b style="color: #a43f49";>Santa Maria Private High School</b></a>
                  <a href="#" class="float-right" style="color: #a43f49";>2018 - 2021</a>
                  <p>at the senior high school level I not only learn about academic subjects, but also hone my social, leadership and collaboration skills.
                    In addition, I am involved in various extracurricular activities that help me explore my interests and talents, as well as build character.</p>
                </li>
                <li>
                  <a href="#"><b style="color: #a43f49";>Junior High School 1 Tarutung</b></a>
                  <a href="#" class="float-right" style="color: #a43f49";>2011 - 2016</a>
                  <p>As a Junior High School student, here, I interact with peers and teachers who support my personal and academic development.
                     I learn to understand the structure of the curriculum, face exams, and pursue academic success.</p>
                </li>
                <li>
                  <a href="#"><b style="color: #a43f49";>Elementary School No.173131</b></a>
                  <a href="#" class="float-right" style="color: #a43f49";>2011 - 2016</a>
                  <p>The world of elementary school was the beginning of my educational journey, where I began
                    to build the basics of understanding about math, science, language, and social studies.</p>
                </li>
                <li>
                  <a href="#"><b style="color: #a43f49";>Kindergarten GKPI Tarutung</b></a>
                  <a href="#" class="float-right" style="color: #a43f49";>2008 - 2010</a>
                  <p>As a kindergarten student, I was an eager and curious little girl. Kindergarten was the beginning of my 
                    educational adventure. Here, I learned through playing, singing and creating with bright colors.</p>
                </li>
              </ul>
            </div>

            <div class="col-md-6">
              <h4>Experience</h4>
              <ul class="timeline">
                <li>
                  <a target="_blank" href="https://www.totoprayogo.com/#"><b style="color: #a43f49";>Portfolio Project</b></a>
                  <a href="#" class="float-right" style="color: #a43f49";>2023</a>
                  <p>My personal experience in the web-based programming course on the topic of 'Personal Portfolio' was an 
                    inspiring journey. This course gave me the opportunity to develop my web programming skills using HTML, 
                    CSS, and JavaScript, and utilize the Bootstrap framework to build a personal online portfolio.</p>
                </li>
                <li>
                  <a href="#"><b style="color: #a43f49";>PBO Project Writer Document</b></a>
                  <a href="#" class="float-right" style="color: #a43f49";>2022</a>
                  <p>The group experience in the object-oriented programming course on the topic of 'Package Systems' 
                    was a journey full of challenges, learning, and collaboration. As part of the document writer team, I 
                    had an important role in documenting and explaining the complex package system.</p>
                </li>
                <li>
                  <a href="#"><b style="color: #a43f49";>Database Course Project</b></a>
                  <a href="#" class="float-right" style="color: #a43f49";>2022</a>
                  <p>My experience in the Database course with the topic 'Canteen System' was one of the most rewarding group trips. In this project, 
                    I acted as part of the document team and was responsible for creating all the necessary diagrams, including BPMN 
                    (Business Process Model and Notation), Use Case, Class Diagram, Physical Data Model (PDM), and Conceptual Data Model (CDM).</p>
                </li>
              </ul>
            </div>
          </div>

          <div class="container">
            <div class="row mt-4">
              <div class="col-md-6">
                <h2><span style="color: white;">Coding</span> <span style="color: #a43f49;">Skills</span></h2>
                <strong style="color: white;">Java</strong>
                <div class="progress">
                  <div class="progress-bar bg-danger" style="width: 40%">40%</div>
                </div>
                <strong style="color: white;">C</strong>
                <div class="progress">
                  <div class="progress-bar bg-danger" style="width: 50%">50%</div>
                </div>
                <strong style="color: white;">Python</strong>
                <div class="progress">
                  <div class="progress-bar bg-danger" style="width: 40%">40%</div>
                </div>
                <strong style="color: white;">HTML/CSS</strong>
                <div class="progress">
                  <div class="progress-bar bg-danger" style="width: 60%">60%</div>
                </div>
              </div>
              <div class="col-md-6">
                <h2><span style="color: white;">Design</span> <span style="color: #a43f49;">Skills</span></h2>
                <strong style="color: white;">Figma</strong>
                <div class="progress">
                  <div class="progress-bar bg-danger" style="width: 75%">75%</div>
                </div>
                <strong style="color: white;">Photoshop</strong>
                <div class="progress">
                  <div class="progress-bar bg-danger" style="width: 70%">70%</div>
                </div>
                <strong style="color: white;">Graphic Design</strong>
                <div class="progress">
                  <div class="progress-bar bg-danger" style="width: 50%">50%</div>
                </div>
                <strong style="color: white;">Programming</strong>
                <div class="progress">
                  <div class="progress-bar bg-danger" style="width: 40%">40%</div>
                </div>
              </div>
            </div>
          </div>
    </section>

    <section class="section about-me" data-section="section4">
      <div class="container">
        <div class="section-heading">
          <h2 style="font-size: 50px;">Portfolio</h2>
          <div class="line-dec"></div>
        </div>
        <div class="row">
          <div class="isotope-wrapper">
            <form class="isotope-toolbar">
              <label><input type="radio" data-type="*" checked="" name="isotope-filter" />
                <span>all</span></label>
              <label><input type="radio" data-type="design" name="isotope-filter" />
                <span>design</span></label>
              <label><input type="radio" data-type="website" name="isotope-filter" />
                <span>website</span></label>
              <!-- <label><input type="radio" data-type="animals" name="isotope-filter" />
                <span>animals</span></label> -->
            </form>
            <div class="isotope-box">
              <div class="isotope-item" data-type="website">
                <figure class="snip1321">
                <img src="{{ asset('assets/images/tambah paket.png') }}" alt="sq-sample26" />
                  <figcaption>
                  <a href="{{ asset('assets/images/tambah paket.png') }}" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                    <h4>Tambah Paket Website</h4>
                    <span>Tambah Paket Image</span>
                  </figcaption>
                </figure>
              </div>

              <div class="isotope-item" data-type="design">
                <figure class="snip1321">
                <img src="{{ asset('assets/images/login.png') }}" alt="sq-sample26" style="height: 294px;" />
                  <figcaption>
                  <a href="{{ asset('assets/images/login.png') }}" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                    <h4>Login Design</h4>
                    <span>Login Design Image</span>
                  </figcaption>
                </figure>
              </div>

              <div class="isotope-item" data-type="design">
                <figure class="snip1321">
                <img src="{{ asset('assets/images/register.png') }}" alt="sq-sample26" style="height: 294px;"/>
                  <figcaption>
                  <a href="{{ asset('assets/images/register.png') }}" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                    <h4>Register Design</h4>
                    <span>Register Design Image</span>
                  </figcaption>
                </figure>
              </div>

              <div class="isotope-item" data-type="design">
                <figure class="snip1321">
                <img src="{{ asset('assets/images/ubah status.png') }}" alt="sq-sample26" />
                  <figcaption>
                  <a href="{{ asset('assets/images/ubah status.png') }}" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                    <h4>Ubah Status Design</h4>
                    <span>Ubah Status Design Image</span>
                  </figcaption>
                </figure>
              </div>

              <div class="isotope-item" data-type="website">
                <figure class="snip1321">
                <img src="{{ asset('assets/images/beranda.png') }}" alt="sq-sample26" style="height: 294px;"/>
                  <figcaption>
                  <a href="{{ asset('assets/images/beranda.png') }}" data-lightbox="image-1" data-title="Caption"><i class="fa fa-search"></i></a>
                    <h4>Beranda Website</h4>
                    <span>Beranda Website Image</span>
                  </figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>

  <section class="section contact-me" data-section="section5">
    <div class="container">
      <div class="section-heading">
        <h2 style="font-size: 50px;">Contact Me</h2>
        <div class="line-dec"></div>
      </div>
      <div id="success-alert" class="alert alert-success" role="alert" style="display: none;">
        Form submitted successfully!
      </div>
      <div class="row">
        <div class="right-content">
          <div class="container">
            <form id="contact" action="" method="post">
              <div class="row">
                <div class="col-md-6">
                  <fieldset>
                    <div id="name-error" class="text-danger" style="display: none;">Please fill in your name.</div>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." />
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <div id="email-error" class="text-danger" style="display: none;">Please fill in your email.</div>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your email..." />
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <div id="subject-error" class="text-danger" style="display: none;">Please fill in the subject.</div>
                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." />
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <div id="message-error" class="text-danger" style="display: none;">Please fill in your message.
                    </div>
                    <textarea name="message" rows="6" class="form-control" id="message"
                      placeholder="Your message..."></textarea>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button">
                      Send Message
                    </button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  </div>

  <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('assets/js/lightbox.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <script>
  document.getElementById("contact").addEventListener("submit", function (e) {
      e.preventDefault(); 

      var name = document.getElementById("name").value;
      var email = document.getElementById("email").value;
      var subject = document.getElementById("subject").value;
      var message = document.getElementById("message").value;

      if (name === "") {
        showErrorAlert("name-error", "Please fill in your name.");
      } else {
        hideErrorAlert("name-error");
      }

      if (email === "") {
        showErrorAlert("email-error", "Please fill in your email.");
      } else if (!validateEmail(email)) {
        showErrorAlert("email-error", "Please enter a valid email address.");
      } else {
        hideErrorAlert("email-error");
      }

      if (subject === "") {
        showErrorAlert("subject-error", "Please fill in the subject.");
      } else {
        hideErrorAlert("subject-error");
      }

      if (message === "") {
        showErrorAlert("message-error", "Please fill in your message.");
      } else {
        hideErrorAlert("message-error");
      }

      if (name !== "" && email !== "" && subject !== "" && message !== "") {
        showSuccessAlert();
        // Lakukan tindakan tambahan, seperti mengirimkan data form
      }
    });

    function showSuccessAlert() {
      var alertDiv = document.getElementById("success-alert");
      alertDiv.style.display = "block";

      // Anda dapat menambahkan tindakan tambahan di sini, seperti mengirimkan data form

      // Sembunyikan otomatis alert setelah beberapa detik (misalnya, 3 detik)
      setTimeout(function () {
        alertDiv.style.display = "none";
      }, 3000);
    }

    function showErrorAlert(errorId, errorMessage) {
      var errorDiv = document.getElementById(errorId);
      errorDiv.style.display = "block";
      errorDiv.textContent = errorMessage;
    }

    function hideErrorAlert(errorId) {
      var errorDiv = document.getElementById(errorId);
      errorDiv.style.display = "none";
    }

    function validateEmail(email) {
      // Validasi alamat email menggunakan ekspresi reguler
      var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
      return emailRegex.test(email);
    }

    
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function () {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function (e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function () {
        checkSection();
      });
  </script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-MzjFf/J6A0RDhzP5zj82uqz8SxeyNzfoI4tpz8WQQhxFPOxy3Sl5S+8T00M2fWtaX" crossorigin="anonymous"></script>
</body>

</html>