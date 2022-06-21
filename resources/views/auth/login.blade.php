@extends('layouts.loginlayout')
@section('content')
<section class="login">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-xs-12 login-wrapper">
          <div class="login-box">
            <div class="header px-4 py-2 dark-green-color">
              <h4 class="text-secondary text-center">Login</h4>
            </div>
            <div class="login-content">
              <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-3">
                  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Username">
                </div>
                <div class="mb-3">
                  <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Enter password">
                </div>
                <button class="btn btn-primary btn-big">Login</button>
              </form>
            </div>
            <div class="ragister-web-content">
              <div class="other-links">
                <a href="sniffedcc.me">sniffedcc.cc</a> | <a href="sniffedcc.cc">sniffedcc.cc</a>
              </div>
              <button class="btn btn-secondary btn-big register" data-bs-toggle="modal" data-bs-target="#exampleModal">Registration</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="modal fade auto-ragister-model" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-green">
      <div class="modal-header dark-green-color">
        <h5 class="modal-title text-white" id="exampleModalLabel">Auto Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="commen-ui user">
          <label>USERNAME:</label>
          <span id="username">10kshduh89</span>
        </div>
        <div class="commen-ui password">
          <label>PASSWORD:</label>
          <span id="password"></span>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-secondary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection()
@section('scripts')
<script>
$('.register').on('click',function(){
const='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ';
var username=generateString(8); 
$('#username').html(username);
});

</script>
@endsection()

