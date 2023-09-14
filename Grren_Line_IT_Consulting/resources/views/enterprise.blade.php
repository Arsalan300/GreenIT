@include('layout.header')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bgImg">
          <div class="overlay1">
            <h1>ENTERPRISE SOFTWARE DEVELOPMENT</h1>
             <p>Leverage our 13-year expertise in enterprise software development, API integration, modernising legacy systems, and consolidating app portfolios. We help large organizations become a lasting success in the global arena by re-engineering solutions of different complexity.</p>
             <button type="button" class="btn btn-success my-5 btn-lg" onclick="location.href=`{{url('/Contact-Us')}}`">Talk To Us</button>

        </div>
        </div>
    </div>
</div>




<div class="container-fluid section text-center">

<div class="row">
    <div class="col-sm-12 my-5 text-center"><h1>ENTERPRISE SOFTWARE DEVELOPMENT <br /> SERVICES</h1></div>
</div>


    <div class="row" id="services">
      <div class="col-sm-1"></div>
        <div class="col-sm-3 section1">
         <i class="fa-solid fa-laptop-mobile"></i>
            <h4 class="my-3">Custom Enterprise Software Development</h4>
              <p>Support your business infrastructure with scalable software that improves key facets of your enterprise. Get access to our industry-specific knowledge to design, build, and scale your new enterprise software solution..</p>
        </div>
          <div class="col-sm-3 section1">
            <h4>Enterprise Mobility Services</h4>
            <p>Our end-to-end enterprise mobility solutions allow organizations to safely and efficiently manage the extensive use of mobile devices that can support a large number of users in their business environment.</p>
          </div>
          <div class="col-sm-3 section1">
            <h4>Digital Transformation Services</h4>
            <p>Intellectsoft is your reliable digital transformation partner. Leverage our expertise in using digital technologies to create new or modify existing business processes to meet changing market requirements.</p>
          </div>
        <div class="col-sm-1"></div>
    </div>

    <div class="row my-4">
    <div class="col-sm-1"></div>
        <div class="col-sm-3 section1">
        <i class="fa-solid fa-laptop-mobile"></i>
        <h4 class="my-3">Data Management </h4>
        <p>Stay ahead with effective data management strategy, predictive analytics, and intelligent automation using our in-depth knowledge of emerging technologies such as Big Data, Data Science, Cognitive Computing, Blockchain and more.</p>
        </div>
        <div class="col-sm-3 section1">
            <h4>Software Integration</h4>
            <p>Improve your software infrastructure with well-built microservices, reliable API, and data integration. Launch your business strategy with our comprehensive enterprise application development, or use our enterprise app integration solutions.</p>
        </div>
        <div class="col-sm-3 section1">
            <h4>Legacy Application Modernization</h4>
            <p>Outdated software comes with much bigger risks and can be expensive to maintain. Hire our top minds to perform an in-depth feature and technical analysis of your legacy solution and improve it with the latest tools and technologies.</p>
        </div>
        <div class="col-sm-1"></div>
    </div>

</div>


<div class="container-fluid enterpriseMain">
  <div class="row">
    <div class="col-sm-12 ">
      <h1 class="my-5">EMERGING TECHNOLOGIES FOR ENTERPRISE</h1>
      <h4 class="">Intellectsoft has grown into an international contestant in enterprise software engineering with <br /> wide-ranging expertise in all the areas needed for reliable software development.</h4>
    </div>
  </div>
  <div class="row my-5 enterpriseImg ">
    <div class="col-sm-2">
      <img src="{{asset('assets/images/enterprise/2.png')}}" class="img-fluid my-2" />
      <p class="my-3">Artifical Intelligence</p>
    </div>
    <div class="col-sm-2">
            <img src="{{asset('assets/images/enterprise/3.png')}}" class="img-fluid my-2" />
            <p class="my-3">Internet Of Thing</p>
    </div>
    <div class="col-sm-2">
            <img src="{{asset('assets/images/enterprise/4.png')}}" class="img-fluid my-2" />
            <p class="my-3">Block Chain</p>
    </div>
    <div class="col-sm-2">
            <img src="{{asset('assets/images/enterprise/5.png')}}" class="img-fluid my-2" />
            <p class="my-3">Cloud Computing</p>
    </div>
    <div class="col-sm-2">
            <img src="{{asset('assets/images/enterprise/6.png')}}" class="img-fluid my-2" />
            <p class="my-3">Big Data</p>
    </div>
    <div class="col-sm-2">
            <img src="{{asset('assets/images/enterprise/7.png')}}" class="img-fluid my-2" />
            <p class="my-3">Augmented Reality</p>
    </div>
  </div>
</div>


<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h1 class="my-5 text-center">SOFTWARE DEVELOPMENT LIFECYCLE</h1>
      <p class="text-center">We employ best practices and development methodologies for building effective enterprise software development process and solutions in a structured and systematic way.</p>
    </div>
  </div>
  <div class="row my-5">
    <div class="col-sm-6">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Planning
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>We collect all the relevant information from the customer to develop custom software development solutions as per their expectation.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Designing
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>The system and documents are prepared as per the requirement specifications. This helps us define overall system architecture and technology stack.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Defining
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Once the requirement analysis phase is completed, the next step is to define and document software needs.</p>
      </div>
    </div>
  </div>
<!-- </div> -->

<!-- <div class="accordion" id="accordionExample"> -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseOne">
        Building
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Developers start to build the entire system by writing code using the chosen programming language, techniques, and methodologies.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
        Testing
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p>Evaluating the quality of software with the aim of finding and fixing defects.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
        Deployment
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>The final software is released and checked for deployment issues, if any.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingSeven">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseThree">
        Maintenance
      </button>
    </h2>
    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>According to the service level agreement, we ensure that needs continue to be met and that the system continues to perform as per the specification mentioned in the first phase.</p>
      </div>
    </div>
  </div>
</div>


    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-5 sdlcImg">
    <img src="{{asset('assets/images/enterprise/1.png')}}" class="img-fluid my-2" />
    </div>
  </div>
</div>


<div class="container-fluid enterpriseBgImg">
  <div class="row">
    <div class="col-sm-6">
      <h3>ENHANCE YOUR BUSINESS EFFICIENCY <br /> WITH Green LIne IT Consulting.co INNOVATION-LED SOLUTIONS.</h3>
    </div>
    <div class="col-sm-6">
      <button type="button" class="btn btn-success btn-lg" onclick="location.href=`{{url('/Contact-Us')}}`">Talk To Us</button>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 enterpriseMain">
      <h1 class="text-center my-5">TOOLS & TECHNOLOGIES WE USE</h1>
      <h4 class="text-center my-5">Intellectsoft has grown into an international contestant in enterprise application development <br /> services with wide-ranging expertise in all areas needed for reliable software development.</h4>
    </div>
  </div>
</div>

@include('technologies')


<div class="container-fluid my-5">
    <div class="row">
      <div class="col-sm-12 contactImage">
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
  <div class="col-sm-12 text-center">
    <h2 class="my-5">FAQ</h2>
      <h5>Do you have additional questions?</h5>
  </div>
  </div>
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
    <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      What Is an Enterprise App Development Company?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Our company helps different types of businesses to use software solutions effectively to automate and enhance the level of productivity. We have been on the market for over 13 years and know the subtleties that can help you grow. The usage of the latest technologies benefits enterprises in numerous ways. Our team tailors the existing ones according to your needs and aims. We help enterprises to optimize and automate inner-company processes, enhance communication within the company’s system between employees and customers, and ensure seamless enterprise mobile applications development. Automation is a key notion in today’s fast-developing world, and the quicker enterprises react to the changes — the better. When it comes to digitalization and personalized customer experience, we are ready to offer our services as we are a team of professional and experienced developers who can come up with excellent solutions for your enterprise. Well-developed and structured software is an essence of modern business, and you have to keep up with the trends in order to compete and survive.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      What Is the Enterprise Application Development Process?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
          <p>The process of enterprise app development is divided into three stages. The kick-off stage is the first one in which you present your requirements. We go through them, thoroughly analyze, and build up a team. We choose the experts who can quickly and effectively complete the project within stated time frames. Then, the team works on the requirements, prepares technical documentation, and creates a basic design of the app. Customers are 100% involved in the process of development, so we take into account your opinion and build the application that suits your expectations. The second stage is when the actual app is developed. Our team uses Scrum methodology, so you get updates every two weeks. Next, the app goes through User Acceptance Testing, and if they show great results, the enterprise mobile application development is over. The third stage involves constant monitoring of the application after implementation. There is a team of experts who fixes bugs, if any, and provides general customer support.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      What Enterprise Software Solution Do You Offer?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>Our company has vast experience in the development of software for enterprises and ranks among the leaders within the field. It takes a professional team, on-hands experience, the latest tools, and technologies, as well as the ability to think outside the box to reach this level of proficiency. Intellectsoft’s team members provide our customers with reliable and up-to-date solutions that can support enterprise operations in numerous ways. We help software development enterprise to automate operations and enhance their performance level. Experts analyze your requirements and come up with the best solutions that solve certain issues. We not only create custom software but also integrate it into the system of the enterprise and improve its infrastructure. Outdated software decreases the overall level of enterprise productivity. Our team provides in-depth technical analyses and offers improvements that should be made to keep the enterprise competitive.</p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
      How Do Enterprise Software Developers Work for a Company?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <p>The company hires and works with highly professional and qualified employees. We are proud to have one of the best teams of developers who have vast experience in mobile app development for enterprises. Our enterprise software developers are skilled experts in the field and are ready to tackle projects of any level of complexity to deliver cutting-edge enterprise software solutions. Our company has been in the field of enterprise software development for over a decade. Back then, the app industry only started to emerge, and our developers have gone through all the stages of its development. They know all the subtleties involved in the process; they are capable of coming up with the best solutions for your enterprise and are ready to acquire and adjust to the fast-emerging changes. Our team of experts knows the bases on which the enterprise app market is built, has the best tech tools to develop high-quality products, and can foresee the upcoming trends, so your software stays relevant throughout the years.</p>
      </div>
    </div>
  </div>
</div>
    </div>
    <div class="col-sm-2"></div>
  </div>
  </div>



@include('layout.footer')