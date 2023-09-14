@include('layout.header')

<div id="vidContainer" class="vidContainer">  
    <video id="vid" autoplay muted loop muted src="{{asset('assets/images/about/1.mp4')}}"></video>
</div>
<div id="vOverlay" class="vOverlay1">
    <div class="container">
         <div class="row" style="margin-left: 5%;">
         <!-- <div class="col-sm-12"> -->
            <h1 class="text-light" >ABOUT GREEN LINE IT CONSULTING</h1>
            <h5>We are a digital transformation consultancy and engineering company that delivers cutting edge solutions for global organisations and technology startups. Since 2007 we have been helping companies and established brands reimagine their business through digitalisation.</h5>            
        <!-- </div> -->
    </div>
    </div>
</div>


<div class="container-fluid location1">
<div class="row p-3">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 text-center">
        <h1>MISSION & VISION</h1>
        <h5 class="my-3">Our mission is to help enterprises accelerate adoption of new technologies, untangle complex issues that always emerge during digital evolution, and orchestrate ongoing innovation. Whether it is a consumer-oriented app or a transformative enterprise-class solution, the company leads the process from ideation and concept to delivery, and provides ongoing support through its IS360 framework.</h5>
    </div>
    <div class="col-sm-2"></div>
</div>
</div>

<div class="container-fluid">
<div class="row p-3">
    <div class="col-sm-1"></div>
    <div class="col-sm-10 text-center">
        <h2 class="my-5">OUR CLIENTS</h2>
        <h5 class="my-3" style="color:#555;">For over 10 years, Intellectsoft has been helping Fortune 500 companies and established brands build solid software foundations for their businesses.</h5>
        @include('icons')
    </div>
    <div class="col-sm-1"></div>
</div>
</div>

<div class="container-fluid my-5 aboutImg">
<div class="row">
<div class="col-sm-12">
<img src="{{asset('assets/images/about/3.png')}}" />
</div>
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
<div class="row aboutBg my-5">
<div class="col-sm-4"></div>
<div class="col-sm-4 aboutContent">
    <p>At Intellectsoft we help business build an intelligently designed digital future. Tell us about your idea, and we’ll offer the most fitting technological solution.</p>
    <button type="button" class="btn btn-primary my-5 btn-lg" onclick="location.href=`{{url('/Contact-Us')}}`">Talk To Us</button>
</div>
<div class="col-sm-4"></div>
</div>
<div class="row p-4 my-5 text-center">
<div class="col-sm-4">
    <b>OUR TEAM</b>
    <p class="my-3">Meet the leadership and talents propelling Intellectsoft’s progress.</p>
</div>
<div class="col-sm-4">
    <b>OUR CLIENTS</b>
    <p class="my-3">See how we helped our clients succeed in Digital Transformation.</p>
</div>
<div class="col-sm-4">
    <b>OUR CAREERS</b>
    <p class="my-3">Explore current career opportunities in our offices around the world.</p>
</div>
</div>
</div>









@include('layout.footer')