<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>404 - Halaman Tidak Ditemukan</title>

  <!-- Bootstrap core CSS -->

  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/fonts/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/icheck/flat/green.css') }}" rel="stylesheet">

  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
</head>


<body class="nav-md">

  <div class="container body">

    <div class="main_container">

      <!-- page content -->
      <div class="col-md-12">
        <div class="col-middle">
          <div class="text-center text-center">
            <h1 class="error-number">404</h1>
            <h2>Maaf!</h2>
            <p>Halaman yang anda maksud tidak ditemukan <a href="#">Laporkan?</a>
            </p>
            <div class="mid_center">
              <h3>Cari</h3>
              <form>
                <div class="col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari...">
                    <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

    </div>
    <!-- footer content -->
  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

  <!-- bootstrap progress js -->
  <script src="{{ asset('assets/js/progressbar/bootstrap-progressbar.min.js') }}"></script>
  <script src="{{ asset('assets/js/nicescroll/jquery.nicescroll.min.js') }}"></script>
  <!-- icheck -->
  <script src="{{ asset('assets/js/icheck/icheck.min.js') }}"></script>

  <script src="{{ asset('assets/js/custom.js') }}"></script>
  <!-- pace -->
  <script src="{{ asset('assets/js/pace/pace.min.js') }}"></script>
  <!-- /footer content -->
</body>

</html>
