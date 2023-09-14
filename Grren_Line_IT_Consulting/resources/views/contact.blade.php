@include('layout.header')



<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h1>Let’s get connected with us anytime anywhere</h1>
                <p>See how your business can benefit with Creatix9 on Your team.</p>
            </div>
        </div>
    </div>
</div>

<div class="contact-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Interested in working together? <br>
                    Fill out the below form
                    </h1>
            </div>
        </div> <br>
        <div class="row">
            <div class="col-md-8">
                <section>
                              <form action="{{url('send-message')}}" method="POST">
                                @csrf
                                <div class="row">
                                  <div class="col-md-6 mb-4">
                  
                                    <div class="form-outline">
                                      <input type="text" id="firstName" placeholder="Enter Your Full Name" name="fullname" class="form-control form-control-lg" />
                                    </div>
                  
                                  </div>
                                  <div class="col-md-6 mb-4">
                  
                                    <div class="form-outline">
                                      <input type="text" id="lastName" placeholder="Enter Your Email Address" name="email" class="form-control form-control-lg" />
                                    </div>
                  
                                  </div>
                                </div>
                  
                                <div class="row">
                                  <div class="col-md-6 mb-4 d-flex align-items-center">
                  
                                    <div class="form-outline datepicker w-100">
                                      <input type="text" class="form-control form-control-lg" name="company"  placeholder="Enter Your Company (Optional)" id="birthdayDate" />
                                    </div>
                  
                                  </div>
                                  <div class="col-md-6 mb-5">

                                    <br>
                                    <select name="service" id="services" class="form-control form-control-lg">
                                      <option class="form-control" value="MOBILE APPLICATION">MOBILE APPLICATION</option>
                                      <option class="form-control" value="SOFTWARE DEVELOPMENT">SOFTWARE DEVELOPMENT</option>
                                      <option class="form-control" value="WEB & CMS DEVELOPMENT">WEB & CMS DEVELOPMENT</option>
                                      <option class="form-control" value="CORPORATE BRANDING">CORPORATE BRANDING</option>
                                      <option class="form-control" value="VIDEO ANIMINATION">VIDEO ANIMINATION</option>
                                      <option class="form-control" value="DIGITAL MARKETING">DIGITAL MARKETING</option>
                                      <option class="form-control" value="Enterprise Software Development">Enterprise Software Development</option>
                                      <option class="form-control" value="Dedicated Development Team">Dedicated Development Team</option>
                                      <option class="form-control" value="Internet Of Thing(IOT)">Internet Of Thing(IOT)</option>
                                      <option class="form-control" value="Block Chain (DLT)">Block Chain (DLT)</option>
                                      <option class="form-control" value="Customer Experience (UI/UX)">Customer Experience (UI/UX)</option>
                                    </select>                  
                                  </div>
                                </div>
                  
                                <div class="row">
                                  <div class="col-md-6 mb-4 pb-2">
                  
                                    <div class="form-outline">
                                      <input type="number" placeholder="Enter Your Phone Number" name="phone" id="phone" class="form-control form-control-lg" />
                                    </div>
                  
                                    <div class="form-outline mt-5">
                                        <input type="text" placeholder="Enter Your State (Optional)" id="emailAddress" name="state" class="form-control form-control-lg" />
                                      </div>
                                  </div>
                                  <div class="col-md-6 mb-4 pb-2">
                  
                                    <div class="form-outline">
                                      <select id="country" name="country" class="form-control form-control-lg">
                                        @include('countryoptions.dd')
                                      </select>
                                    </div>
                                    <div class="form-outline mt-5">
                                        <input type="text" id="phoneNumber" placeholder="Select City (Optional)" name="city" class="form-control form-control-lg" />
                                      </div>
                  
                                  </div>
                                </div>
                                
                            <div class="row">
                                <p>Share Your Project Details*</p>
                                <textarea name="detail" id="" cols="30" rows="10"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                  </section>
            </div>
            <div class="col-md-4 text-center">
              <h1>Get in Touch with
                  us anytime</h1>
  
              <img class="mt-5" src="{{asset('assets/images/Phone-1.png')}}" alt="">
                <h4>Phone Number</h4>
                <a href="tel:+1(773)556-8945">+1(773)556-8945</a><br>
                <a href="tel:+92 316-2418947">+92 316-2418947</a>
                <br>


                <img class="mt-3" src="{{asset('assets/images/message-1.png')}}" alt="">
                <h1>Email Address</h1>
                <a href="{{url('')}}">tsyed6804@gmail.com</a>
                <br>

                <img class="mt-3" src="{{asset('assets/images/Location-1.png')}}" alt="">
                <h1>USA Headquarter</h1>
                <p>1345 Foxworthy Ave San Jose, CA 951185DT</p>

            </div>
        </div>
    </div>
</div>


<div class="section-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5">
                <h1 class="mb-3"><span class="colorr"><i>Loved</i></span> and trusted by the industry leaders</h1>
                <p>All around the world</p>
            </div>
            <div class="col-md-6 text-center">
                <div class="row">
                    <div class="col-md-4"><img src="{{asset('assets/images/nova1.png')}}" alt="nova"></div>
                    <div class="col-md-4"><img src="{{asset('assets/images/remax1.png')}}" alt="nova"></div>
                    <div class="col-md-4"><img src="{{asset('assets/images/hilton1.png')}}" alt="nova"></div>
                </div>
                <hr>
                <div class="row mt-3">
                    <div class="col-md-4"><img src="{{asset('assets/images/partners_img6_.png')}}" alt="nova"></div>
                    <div class="col-md-4"><img src="{{asset('assets/images/partners_img5_-3.png')}}" alt="nova"></div>
                    <div class="col-md-4"><img src="{{asset('assets/images/plant1.png')}}" alt="nova"></div>
                </div>
            </div>
        </div>
    </div>    
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d380513.7160180089!2d-88.01215000586734!3d41.83339249957158!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C%20IL%2C%20USA!5e0!3m2!1sen!2s!4v1664281336911!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>













@include('layout.footer')