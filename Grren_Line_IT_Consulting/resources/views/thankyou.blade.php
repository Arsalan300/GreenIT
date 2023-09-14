@include('layout.header')


<div class="thank">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img src="{{asset('assets/images/logo.png')}}" alt="">
                <h2 class="mt-5">Thankyou for connection Green Line IT Consulting.com, we have recieved your message and will reach out to you shortly.</h2>
                <p></p>
                <button type="button" onclick="location.href=`{{url('/')}}`" class="btn btn-outline-success btn-lg">Back</button>
            </div>
        </div>
    </div>
</div>



@include('layout.footer')