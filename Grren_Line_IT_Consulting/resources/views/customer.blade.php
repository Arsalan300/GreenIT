@include('layout.header')

<div id="vidContainer" class="vidContainer">  
    <video id="vid" autoplay muted loop muted src="{{asset('assets/images/customer/1.mp4')}}"></video>
</div>
<div id="vOverlay" class="vOverlay">
    <div class="container">
         <div class="row" style="margin-left: 5%;">
         <!-- <div class="col-sm-12"> -->
            <h1 class="text-light" >GREEN LINE IT CONSULTING <br>CUSTOMER EXPERIENCE</h1>
            <button class="cbtn" onclick="location.href=`{{url('/Contact-Us')}}`">CONTACT OUR TEAM</button>            
        <!-- </div> -->
    </div>
    </div>
</div>

<div class="container-fluid customerImg">
<div class="row">
<div class="col-sm-12">
<img src="{{asset('assets/images/customer/2.png')}}" class="img-fluid" />
</div>
</div>
</div>



<div class="container-fluid">
<div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-5">
        <h1 class="m-5">Our Expertise</h1>
        <p class="p-1">Full-cycle CX and digital journey development</p>
        <p class="p-1">Industry-specific AR & VR solutions</p>
        <p class="p-1">UI & UX design of digital products and interfaces</p>
        <p class="p-1">UI & UX material design systems</p>
        <p class="p-1">Full-cycle iOS and Android development</p>
        <p class="p-1">ERP & workflow management solutions</p>
        <p class="p-1">Machine learning algorithms development, chatbots</p>
        <p class="p-1">Enterprise cloud solutions</p>
        <p class="p-1">Embedded software development/IoT solutions</p>
    </div>
<div class="col-sm-5">
<img src="{{asset('assets/images/customer/3.png')}}" class="img-fluid roundImg" />
</div>
<div class="col-sm-1"></div>
</div>
</div>




<div class="container-fluid my-5">
<div class="row">
<div class="col-sm-4 customerImg1">
<img src="{{asset('assets/images/customer/4.png')}}" class="img-fluid" />
</div>
<div class="col-sm-4 customerContent">
    <span>INDUSTRY</span>
    <h4>EuroAccident</h4>
    <p>Sweden’s leading insurance company transfers its entire customer experience to a single application that empowers clients, cut costs, and helps gather big data.</p>
</div>
<div class="col-sm-4 customerImg2">
<img src="{{asset('assets/images/customer/5.png')}}" class="img-fluid" />
</div>
</div>
</div>


<div class="container-fluid customerBgImg">
<div class="row">
<div class="col-sm-12">
    <h1>Tell our Experts About <br /> Your Project</h1>
    <button class="cbtn" onclick="location.href=`{{url('/Contact-Us')}}`">CONTACT OUR TEAM</button>       
</div>
</div>
</div>


<div class="container-fluid my-4 location">
<div class="row">
    <div class="col-sm-2"></div>
<div class="col-sm-2 locationCountItem">
    <span class="count">76%</span>
    <p> > with over 5 years of IT experience</p>
</div>
<div class="col-sm-2 locationCountItem">
    <span class="count">14%</span>
    <p> > > total attrition rate</p>
</div>
<div class="col-sm-2 locationCountItem">
    <span class="count">81%</span>
    <p> >  Master’s degree or higher</p>
</div>
<div class="col-sm-2 locationCountItem">
    <span class="count">12%</span>
    <p> > target attrition for 2020</p>
</div>

<div class="col-sm-2"></div>
</div>
<div class="row">
    <div class="col-sm-5"></div>
    <div class="col-sm-2">
    <button type="button" class="btn btn-primary my-5" onclick="location.href=`{{url('/Contact-Us')}}`">GOT A PROJECT FOR US?</button>
    </div>
    <div class="col-sm-5"></div>
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
  













@include('layout.footer')