<h1 class="text-center my-5">WHO WE ARE</h1>

<div class="container-fluid">
     <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
        <p class="text-center">We are a digital transformation consultancy and software development company that provides cutting edge engineering solutions, helping Fortune 500 companies and enterprise clients untangle complex issues that always emerge during their digital evolution journey. Since 2007 we have been a visionary and a reliable software engineering partner for world-class brands.</p>
        </div>
        <div class="col-sm-3"></div>
     </div>
</div>

@include('icons')


    <div class="container-fluid section text-center">

    <div class="row">
        <div class="col-sm-12 my-5 text-center"><h1>WHAT WE OFFER</h1></div>
    </div>

        <div class="row my-5">
                <div class="col-sm-4"><h1><a href="{{url('#services')}}">SERVICES</a></h1> <hr /></div>
                <div class="col-sm-4"><h1><a href="{{url('#technology')}}">TECHNOLOGIES</h1> <hr /> </a></div>
                <div class="col-sm-4"><h1><a href="{{url('#industries')}}">INDUSTRIES</h1> <hr /></a></div>
        </div>
        <div class="row" id="services">
          <div class="col-sm-1"></div>
            <div class="col-sm-3 section1">
             <i class="fa-solid fa-laptop-mobile"></i>
                <h4 class="my-3">Enterprise Software Development</h4>
                  <p>Leverage our 13-year expertise in enterprise software development, API integration, modernising legacy systems, and consolidating app portfolios. We help large organizations become a lasting success in the global arena by re-engineering solutions of different complexity.</p>
            </div>
              <div class="col-sm-3 section1">
                <h4>Mobile App Development</h4>
                <p>We help global brands design and build superior digital products, enabling seamless user experiences across all modern platforms and devices.</p>
              </div>
              <div class="col-sm-3 section1">
                <h4>Dedicated Development Team</h4>
                <p>Scale your delivery capacity with intelligent dedicated developers. Our clients succeed by leveraging Intellectsoft's process of building, motivating, and managing software development teams.</p>
              </div>
            <div class="col-sm-1"></div>
        </div>

        <div class="row my-4">
        <div class="col-sm-1"></div>
            <div class="col-sm-3 section1">
            <i class="fa-solid fa-laptop-mobile"></i>
            <h4 class="my-3">IT Consulting </h4>
            <p>Use the expertise and deep tech background of the best minds at Intellectsoft to create a comprehensive IT strategy for a digital and technological transformation of your organization that goes in line with your business objectives. Our strategic IT consulting will help you automate and digitalise operations, optimise the software portfolio, and implement the latest technologies.</p>
            </div>
            <div class="col-sm-3 section1">
                <h4>UI/UX Design</h4>
                <p>Want to build your product with a team that establishes a clear design process, meets deadlines, and delivers a spot-on end result? Turn to Intellectsoft’s UI and UX services. Our design team is a small design studio within a large software company that will help you build an engaging product easily and quickly.</p>
            </div>
            <div class="col-sm-3 section1">
                <h4>QA & Testing</h4>
                <p>Our QA services will help you establish concrete control over your product’s life cycle, monitor every development stage, and give you accurate product quality information. For over a decade, our QA experts have been using the latest practices and technologies to ensure efficient performance and high-quality project implementation for the world’s largest enterprises, aiding in delivering solid software on time.</p>
            </div>
            <div class="col-sm-1"></div>
        </div>

    </div>



  <div class="container-fluid my-5">
    <div class="row">
        <div class="col-sm-12">
          <h1 class="text-center my-5">AWARDS & RECOGNITION</h1>
        </div>
    </div>
      <div class="row award my-5">
          <div class="col-sm-1 my-2"><img src="{{asset('assets/images/icon/20.png')}}" class="img-fluid my-2" /></div>
          <div class="col-sm-1 my-2"><img src="{{asset('assets/images/icon/21.png')}}" class="img-fluid my-2" /></div>
          <div class="col-sm-1 my-2"><img src="{{asset('assets/images/icon/22.png')}}" class="img-fluid my-2" /></div>
          <div class="col-sm-1 my-2"><img src="{{asset('assets/images/icon/23.png')}}" class="img-fluid my-2" /></div>
          <div class="col-sm-1 my-2"><img src="{{asset('assets/images/icon/24.png')}}" class="img-fluid my-2" /></div>
          <div class="col-sm-1 my-2"><img src="{{asset('assets/images/icon/25.png')}}" class="img-fluid my-2" /></div>
          <div class="col-sm-1 my-2"><img src="{{asset('assets/images/icon/26.png')}}" class="img-fluid my-2" /></div>
          <div class="col-sm-1 my-2"><img src="{{asset('assets/images/icon/27.png')}}" class="img-fluid my-2" /></div>
          <div class="col-sm-1 my-2"><img src="{{asset('assets/images/icon/28.png')}}" class="img-fluid my-2" /></div>
          <div class="col-sm-1 my-2"><img src="{{asset('assets/images/icon/29.png')}}" class="img-fluid my-2" /></div>
          <div class="col-sm-1 my-2"><img src="{{asset('assets/images/icon/30.png')}}" class="img-fluid my-2" /></div>
          <div class="col-sm-1 my-2"><img src="{{asset('assets/images/icon/31.png')}}" class="img-fluid my-2" /></div>
      </div>

  </div>

  <div class="container-fluid">
    <div class="row contactImage">
      <div class="col-sm-12 ">
        <img src="{{asset('assets/images/banner/banner4.png')}}" class="d-block w-100 img-fluid" alt="..."> 
      </div>
    </div>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-4 home_contact">
        <div class="mb-3">
  <h1 class="m-5 text-center">Contact Me</h1>
  <input type="text" class="form-control my-3" id="exampleFormControlInput1" placeholder="First Name">
  <input type="text" class="form-control my-3" id="exampleFormControlInput1" placeholder="Last Name">
  <input type="email" class="form-control my-3" id="exampleFormControlInput1" placeholder="Email Address">
  <input type="number" class="form-control my-3" id="exampleFormControlInput1" placeholder="Phone Number">
  <input type="text" class="form-control my-3" id="exampleFormControlInput1" placeholder="Company">
</div>
<div class="mb-3">  
  <textarea class="form-control my-3" id="exampleFormControlTextarea1" placeholder="How we can help you?*" rows="3"></textarea>
  <p>By sending this form I confirm that I have read and accept Intellectsoft</p>
  <button type="button" class="btn btn-success">Send</button>

</div>
        </div>
        <div class="col-sm-4 home_contact_1">
            <h2 class="my-5">What Happens Next?</h2>
            <p class="my-3">Our sales manager reaches you out within a few days after analyzing your business requirements</p><br/>
            <p class="my-3">Meanwhile, we sign an NDA to ensure the highest privacy level</p><br/>
            <p>Our pre-sale manager presents project estimates and approximate timeline</p><br/>

        </div>
        <div class="col-sm-2"></div>
      </div>
  </div>


  <div class="container-fluid">
  <div class="row">
  <div class="col-sm-12">
    <h1 class="text-center my-5">OUR OFFICES</h1>
    <p class="text-center my-5">Intellectsoft operates in multiple offices and development centers across the globe. Reach out to us for software development services in your region.</p>
  </div>
  </div>
  </div>


  <div class="container d-flex align-items-center justify-content-center flex-wrap">
        <div class="box">
            <div class="body">
                <div class="imgContainer">
                    <img src="{{asset('assets/images/banner/slide1.png')}}" class="d-block w-100 img-fluid" alt="">
                </div>
                <div class="content d-flex flex-column align-items-center justify-content-center">
                    <div>
                        <h3 class="text-white fs-5">USA San Fransisco</h3>
                        <p class="fs-6 text-white">+1 (650) 233-6196 <br /> info@intellectsoft.net <br />2 Embarcadero Center 8th Floor, San Francisco, CA 94111</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="body">
                <div class="imgContainer">
                    <img src="{{asset('assets/images/banner/slide2.png')}}" class="d-block w-100 img-fluid" alt="">
                </div>
                <div class="content d-flex flex-column align-items-center justify-content-center">
                    <div>
                        <h3 class="text-white fs-5">USA NEW YORK</h3>
                        <p class="fs-6 text-white">+1 (650) 233-6196 <br /> info@intellectsoft.net <br />500 Fashion Ave Fl 8A, New York, NY 10018</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="body">
                <div class="imgContainer">
                    <img src="{{asset('assets/images/banner/slide3.png')}}" class="d-block w-100 img-fluid" alt="">
                </div>
                <div class="content d-flex flex-column align-items-center justify-content-center">
                    <div>
                        <h3 class="text-white fs-5">UNITED KINGDOM LONDON</h3>
                        <p class="fs-6 text-white">+44 20 3887 0078 <br /> info@intellectsoft.net <br />1 Poultry London, EC2R 8EJ, UK</p>
                    </div>
                </div>
            </div>
        </div>
    </div>