@include('layouts.css')
@include('layouts.navbar')
<title>Protfolio</title>
<body>
    <!---------------banner-------------->
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="promo-title">Rajesh Das</p>
                    <p>To establish myself as a dynamic and competent Engineer, equipped with latest tools, techniques and knowledge that will enable me to handle emerging technologies and prove myself as a valuable resource for the company.
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{asset('images/Logo.png')}}" class="img-fluid" style="height:300px;">
                </div>
            </div>
        </div>
        <img src="{{asset('images/wave1.png')}}" class="bottom-img">
    </section>
    <!----------------About--------------->
    <section class="about" class="about-mf sect-pt4 route">
    <div class="container text-center">
        <h1 class="title">ABOUT</h1>
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="{{asset('images/raj.jpg')}}" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Name: </span>Rajesh Das</p>
                      <p><span class="title-s">Profile: </span>Laravel Developer(Intern)</p>
                      <p><span class="title-s">Email: </span>rajeshdasbd24"gmail.com</p>
                      <p><span class="title-s">Phone: </span>+8801832406258</p>
                    </div>
                  </div>
                </div>
                <div class="skill-mf">
                  <h4 class="skill">Skill</h4>
                  <span>HTML</span> <span class="pull-right">75%</span>
                  <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                        </div>
                  <span>CSS3</span> <span class="pull-right">70%</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                    </div>
                  <span>PHP</span> <span class="pull-right">50%</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                    </div>
                  <span>JAVASCRIPT</span> <span class="pull-right">50%</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                    </div>
                  <span>Laravel</span> <span class="pull-right">50%</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-info progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                    </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                    <h5 class="about-us">About me</h5>
                  <p class="lead">
                    Hi!I am Rajesh Das. I am a web developer.I am basically from Cumilla, but currently staying in Dhaka.
                    I did my graduation in B.Sc. in CSE from daffodil International university, Dhaka, Bangladesh. 
                    I belong to a farmer family.My strength are i am self motivated,hard working and a disiplined person.
                    My short term goal is to get a job in a reputed company and my long term goal is to achive a good 
                    position where i can build my career and hepl the organization too.
                  </p>
                  <p class="lead">
                     My hobbies are listening to music, traveling, watching movie and cooding. Thats all about me. 
                     Thanks again for this opportunity.
                  </p>
                </div>
              </div>
            </div>
          </div>
  </section>
    <!-------------Services----------->
    <section class="services">
        <div class="container text-center">
            <h1 class="service"> SERVICES</h1>
              <div class="row">
                <div class="col-md-4">
                    <div class="service-box">
                    <img src="{{asset('images/designe.png')}}" class="image">
                        <div class="service-content">
                        <h2 class="s-title">Web Design</h2>
                        <p class="s-description text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                            provident vitae! Magni
                            tempora perferendis eum non provident.
                        </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="service-box">
                    <img src="{{asset('images/development.png')}}" class="image">
                        <div class="service-content">
                        <h2 class="s-title">Web Development</h2>
                        <p class="s-description text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                            provident vitae! Magni
                            tempora perferendis eum non provident.
                        </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="service-box">
                    <img src="{{asset('images/photography.png')}}" class="image">
                        <div class="service-content">
                        <h2 class="s-title">Photography</h2>
                        <p class="s-description text-center">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                            provident vitae! Magni
                            tempora perferendis eum non provident.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="service-box">
                <img src="{{asset('images/responsive.png')}}" class="image">
                    <div class="service-content">
                    <h2 class="s-title">Responsive Design</h2>
                    <p class="s-description text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                        provident vitae! Magni
                        tempora perferendis eum non provident.
                    </p>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="service-box">
                <img src="{{asset('images/graphics.png')}}" class="image">
                    <div class="service-content">
                    <h2 class="s-title">Graphic Design</h2>
                    <p class="s-description text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                        provident vitae! Magni
                        tempora perferendis eum non provident.
                    </p>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="service-box">
                <img src="{{asset('images/marketing.png')}}" class="image">
                    <div class="service-content">
                    <h2 class="s-title">Marketing Services</h2>
                    <p class="s-description text-center">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni adipisci eaque autem fugiat! Quia,
                        provident vitae! Magni
                        tempora perferendis eum non provident.
                    </p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!----------------Services Ended-------------->
    <!----------------Achivement---------------->
    <section class="achivement">
        <div class="container text-center">
            <h1 class="protfolio"> PROTFOLIO</h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="protfolio-box">
                        <img src="{{asset('images/protfolio1.png')}}" class="protfolio-image"/>
                            <div class="service-content">
                                <h2 class="s-title"><a href="#">Chartared Accountant</a></h2>
                                    <p class="s-description text-center">
                                        Lorem ipsum dolor sit amet
                                    </p>
                            </div>
                    </div>
                </div>
                    <div class="col-md-4">
                        <div class="protfolio-box">
                            <img src="{{asset('images/protfolio2.png')}}" class="protfolio-image">
                                <div class="service-content">
                                    <h2 class="s-title"><a href="#">Personal Profile</a></h2>
                                    <p class="s-description text-center">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="protfolio-box">
                            <img src="{{asset('images/protfolio3.jpg')}}" class="protfolio-image">
                                <div class="service-content">
                                    <h2 class="s-title"><a href="#">Student Enrolment</a></h2>
                                    <p class="s-description text-center">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </div>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="protfolio-box">
                        <img src="{{asset('images/protfolio1.png')}}" class="protfolio-image"/>
                            <div class="service-content">
                                <h2 class="s-title"><a href="#">Chartared Accountant</a></h2>
                                    <p class="s-description text-center">
                                        Lorem ipsum dolor sit amet
                                    </p>
                            </div>
                    </div>
                </div>
                    <div class="col-md-4">
                        <div class="protfolio-box">
                            <img src="{{asset('images/protfolio2.png')}}" class="protfolio-image">
                                <div class="service-content">
                                    <h2 class="s-title"><a href="#">Personal Profile</a></h2>
                                    <p class="s-description text-center">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="protfolio-box">
                            <img src="{{asset('images/protfolio3.jpg')}}" class="protfolio-image">
                                <div class="service-content">
                                    <h2 class="s-title"><a href="#">Student Enrolment</a></h2>
                                    <p class="s-description text-center">
                                        Lorem ipsum dolor sit amet
                                    </p>
                                </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
              <div class="row">
                <div class="col-md-6">
                    <h2 class="send-messege">
                      Send Message
                    </h2>
                  <div>
                      <form action="" method="" class="contactForm">
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"/>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"/>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"/>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                        <button type="button" class="btn-primary">Send messege</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h2 class="getintouch">
                      Get in Touch
                    </h2>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem
                      expedita aperiam aliquid at.
                      Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                      mollitia inventore?
                    </p>
                    <ul class="list-ico">
                      <li><i class='fas fa-location-arrow'></i> 3 Indira Road, Farmgate, Dhaka, Bangladesh</li>
                      <li><i class='fas fa-phone-square-alt'></i> +8801832406258</li>
                      <li><i class='fas fa-mail-bulk'></i> rajeshdasbd24@gmail.com</li>
                    </ul>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<!---------------Contact Ended-------------->
    <section class="footer">
        <img src="{{asset('images/wave2.png')}}" class="footer-img"></a>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-6 footer-box">
                    <p>&copy; Copyright 2022. All Rights Reserved By <strong>Rajeshdas</strong>. Develop By<br><a href="#">Rajesh Das</a></p>
                </div>
                <div class="col-md-6 footer-box">
                    <p>Find Me On Social Media</p>
                    <div class="social-icons">
                        <a href="#"><img src="{{asset('images/facebook-icon.png')}}"></a>
                        <a href="#"><img src="{{asset('images/instagram-icon.png')}}"></a>
                        <a href="#"><img src="{{asset('images/twitter-icon.png')}}"></a>
                        <a href="#"><img src="{{asset('images/linkedin-icon.png')}}"></a>
                        <a href="#"><img src="{{asset('images/snapchat-icon.png')}}"></a>
                        <a href="#"><img src="{{asset('images/whatsapp-icon.png')}}"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@extends('layouts.js')
