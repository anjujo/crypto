
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Web</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/owl.theme.default.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <!-- Main css -->
  <link href="{{asset('assets/css/intlTelInput.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
  <link rel="preconnect" href="{{asset('assets/https://fonts.googleapis.com')}}">
  <link rel="preconnect" href="{{asset('assets/https://fonts.gstatic.com')}}" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
    rel="stylesheet">
</head>

<body>
 @include('layouts.includes.frontend.header')

 @yield('content')

 @include('layouts.includes.frontend.footer')

  <div class="modal fade information-model" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content bg-green">
        <div class="modal-header dark-green-color">
          <h5 class="modal-title text-white" id="exampleModalLabel">Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="text-white">For all suppliers, We are ready to offer best deal in the market.
            If you had any problems or questions we working 24/7 to answer all our client's requests.For all who want become reseller just contact me directly.          
            </p>
          <div class="other-info w-100 d-flex flex-column">
            <span class="teligram-group text-white w-100 my-1"><label>Telegram group :</label><a href="#" class="text-white">CLICK</a></span>
            <span class="jabber text-white w-100 my-1 mb-3"><label>Jabber :</label><a class="text-white" href="#">tripeaks@validtop.cc</a></span>
          </div>
          <span class="text-white">Good Luck.</span>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('assets/js/popper.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/intlTelInput.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script>
  var input = document.querySelector("#phone");
  window.intlTelInput(input, {
    // allowDropdown: false,
    // autoHideDialCode: false,
    // autoPlaceholder: "off",
    // dropdownContainer: document.body,
    // excludeCountries: ["us"],
    // formatOnDisplay: false,
    // geoIpLookup: function(callback) {
    //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    //     var countryCode = (resp && resp.country) ? resp.country : "";
    //     callback(countryCode);
    //   });
    // },
    // hiddenInput: "full_number",
    // initialCountry: "auto",
    // localizedCountries: { 'de': 'Deutschland' },
    // nationalMode: false,
    // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    // placeholderNumberType: "MOBILE",
    // preferredCountries: ['cn', 'jp'],
    // separateDialCode: true,
    utilsScript: "js/utils.js",
  });
</script>
@yield('scripts')

</html>