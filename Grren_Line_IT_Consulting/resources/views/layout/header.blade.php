<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Software Development Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css"/>
  </head>
  <body style="overflow-x: hidden">

  <nav class="navbar navbar-expand-lg bg-dark  navbar-dark fixed-top p-3">
  <div class="container-fluid p-0">
    <a class="navbar-brand mx-5"  href="{{url('/')}}">LOGO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mx-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('/enterprise-software-development')}}">Enterprise Software Development</a></li>
            <li><a class="dropdown-item" href="{{url('/Mobile-App-Development-Services')}}">Mobile App Development</a></li>
            <li><a class="dropdown-item" href="{{url('/Dedicated-Development-Team')}}">Dedicate Development Team</a></li>
                
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mx-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Technologies
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('/Internet-Of-Thing')}}">Internet of Things (IoT) </a></li>
            <li><a class="dropdown-item" href="{{url('/BlockChain')}}">Blockchain (DLT)</a></li>
            <li><a class="dropdown-item" href="{{url('/Customer-Experiance')}}">Customer Experience (UX / UI)</a></li>

          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mx-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Industries
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('/Construction--Software-Development')}}">Construction </a></li>
            <li><a class="dropdown-item" href="{{url('/healthcare-it-solutions')}}">Healthcare</a></li>
            <li><a class="dropdown-item" href="{{url('dental-software-development')}}">Dental</a></li>

          </ul>
        </li>


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mx-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Company
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{url('/About')}}">About</a></li>
            <li><a class="dropdown-item" href="{{url('/Team')}}">Team</a></li>
            <li><a class="dropdown-item" href="">Careers</a></li>
            <li><a class="dropdown-item" href="{{url('/Contact-Us')}}">Contact</a></li>

          </ul>
        </li>


      </ul>
<button type="button" class="btn btn-primary" onclick="location.href=`{{url('/Contact-Us')}}`">GET IN TOUCH</button>
    </div>
  </div>
</nav>
     -->










     <!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

      <!--=============== CSS ===============-->
      <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->

      <title>Software Development Company</title>
   </head>
   <body>
      <!--=============== HEADER ===============-->
      <header class="header">
         <nav class="nav container">
            <div class="nav__data">
               <a href="/" class="nav__logo">
                  <i class="ri-planet-line"></i> Company
                  <!-- <img src="{{asset('assets/images/banner/logo.svg')}}" class="img-fluid" alt="...">  -->
               </a>
               
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line nav__burger"></i>
                  <i class="ri-close-line nav__close"></i>
               </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li><a href="/" class="nav__link">Home</a></li>

                  <!--=============== DROPDOWN 1 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        Services <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="{{url('/enterprise-software-development')}}" class="dropdown__link">
                              <i class="ri-pie-chart-line"></i> Enterprise Software Development
                           </a>                          
                        </li>

                        <li>
                           <a href="{{url('/Mobile-App-Development-Services')}}" class="dropdown__link">
                              <i class="ri-arrow-up-down-line"></i> Mobile App Development
                           </a>
                        </li>

                        <li>
                           <a href="{{url('/Dedicated-Development-Team')}}" class="dropdown__link">
                              <i class="ri-arrow-up-down-line"></i> Dedicate Development Team
                           </a>
                        </li>

                        <!--=============== DROPDOWN SUBMENU ===============-->
                        <li class="dropdown__subitem">
                           <div class="dropdown__link">
                              <i class="ri-bar-chart-line"></i> Corporate Branding <i class="ri-add-line dropdown__add"></i>
                           </div>

                           <ul class="dropdown__submenu">
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-file-list-line"></i> Logo Design
                                 </a>
                              </li>
      
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-cash-line"></i> Web Design
                                 </a>
                              </li>
      
                              <li>
                                 <a href="#" class="dropdown__sublink">
                                    <i class="ri-refund-2-line"></i> Brand Identity
                                 </a>
                              </li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  

                                    <!--=============== DROPDOWN 2 ===============-->
                                    <li class="dropdown__item">
                     <div class="nav__link">
                        Technologies <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="{{url('/Internet-Of-Thing')}}" class="dropdown__link">
                              <i class="ri-user-line"></i> Internet Of Thing(IOT)
                           </a>                          
                        </li>

                        <li>
                           <a href="{{url('/BlockChain')}}" class="dropdown__link">
                              <i class="ri-lock-line"></i> BlockChain(DLT)
                           </a>
                        </li>

                        <li>
                           <a href="{{url('/Customer-Experiance')}}" class="dropdown__link">
                              <i class="ri-message-3-line"></i> Customer Experiance (UI/UX)
                           </a>
                        </li>
                     </ul>
                  </li>

                                                      <!--=============== DROPDOWN 3 ===============-->
                                                      <li class="dropdown__item">
                     <div class="nav__link">
                        Industries <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="{{url('/Construction--Software-Development')}}" class="dropdown__link">
                              <i class="ri-user-line"></i> Construction
                           </a>                          
                        </li>

                        <li>
                           <a href="{{url('/healthcare-it-solutions')}}" class="dropdown__link">
                              <i class="ri-lock-line"></i> Healthcare
                           </a>
                        </li>

                        <li>
                           <a href="{{url('dental-software-development')}}" class="dropdown__link">
                              <i class="ri-message-3-line"></i> Dental
                           </a>
                        </li>
                     </ul>
                  </li>

                                                      <!--=============== DROPDOWN 4 ===============-->
                                                      <li class="dropdown__item">
                     <div class="nav__link">
                        Company <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="{{url('/About')}}" class="dropdown__link">
                              <i class="ri-user-line"></i> About
                           </a>                          
                        </li>

                        <li>
                           <a href="{{url('/Team')}}" class="dropdown__link">
                              <i class="ri-lock-line"></i> Team
                           </a>
                        </li>

                        <li>
                           <a href="{{url('/Contact-Us')}}" class="dropdown__link">
                              <i class="ri-message-3-line"></i> Contact
                           </a>
                        </li>
                     </ul>
                  </li>

               </ul>
            </div>
         </nav>
      </header>