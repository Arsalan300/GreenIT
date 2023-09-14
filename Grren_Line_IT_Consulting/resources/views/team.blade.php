@include('layout.header')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 teamBg">
            <div class="overlay3 ">
                <h1>LEADERSHIP<h1>
                <h5>GREEN LINE IT CONSULTING Executive Leadership and Senior Management bring decades of industry experience, a global perspective and a passion for achieving results.</h5>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
                <h1 class="my-5 text-center">EXECUTIVE TEAM<h1>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-2">
          <!-- <img  src="{{asset('assets/images/team/3.png')}}" style="border-radius:50%; height:35vh; width:100%" class="img-fluid my-2"/>  -->
          <span class="py-5 mx-1">Muhammad Arsalan Qadry</span>
          <p class=" p-5">DeVops Engineer</p></div>
        <div class="col-sm-2">
          <!-- <img  src="{{asset('assets/images/team/2.png')}}" style="border-radius:50%; height:35vh; width:100%"  class="img-fluid my-2"/> -->
          <span class="py-5 mx-5">Muhammad Taha </span>
          <p class="p-5">Software Engineer</p></div>
        <div class="col-sm-2">
          <!-- <img  src="{{asset('assets/images/team/3.png')}}" style="border-radius:50%; height:35vh; width:100%"  class="img-fluid my-2"/> -->
          <span class="py-5 mx-5">Muhammad Uzair</span>
          <p class=" p-5">Digital Engineer</p></div>
        <div class="col-sm-2">
          <!-- <img  src="{{asset('assets/images/team/2.png')}}" style="border-radius:50%; height:35vh; width:100%"  class="img-fluid my-2"/> -->
          <span class="py-5 mx-5">Muhammad Raza</span>
          <p class="p-5">Software Engineer</p></div>
        <div class="col-sm-2"></div>
    </div>

</div>


<div class="container-fluid my-5">
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