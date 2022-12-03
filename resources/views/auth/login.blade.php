<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Halaman Login</title>

  <!-- Bootstrap core CSS -->
  <link rel="shortcut icon" href="{{ asset('assets/images/logo_pu.jpg') }}">
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

  <link href="{{ asset('assets/fonts/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/icheck/flat/green.css') }}" rel="stylesheet">


  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form action="{{ url('login') }}"  method="POST">
            @csrf
            <h1>Halaman Login</h1>
            @if(Session::has('fail'))
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
              <label class="fa fa-warning"></label> {{ Session::pull('fail') }}
            </div>
            @endif
            <div>
              <input type="text" class="form-control" placeholder="Username" required="" name="username" autofocus />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" required="" name="password" />
            </div>
            <div>
             <input type="checkbox" name="remember" /> remeber me
           </div>
           <div>
            <button type="submit" class="btn btn-default submit">
              Masuk
            </button>
            <a href="#" class="reset_pass" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalHelp">
              Lupa Password?
            </a>
          </div>
          <div class="clearfix"></div>
          <div class="separator">
            <div>
              <h1><img src="{{ asset('assets/images/NTB.png') }}" style="height: 26px;"></i> BPKAD Prov.NTB</h1>

              <p>©2017 - {{ date('Y') }} SI-SURAT. Created By Eky Galih Gunanda</p>
            </div>
          </div>
        </form>
        <!-- form -->
      </section>
      <!-- content -->
    </div>
    <div class="modal fade" id="ModalHelp" role="dialog" style="display: none;">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">

          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel2"><label class="fa fa-warning"></label> Lupa Password?</h4>
          </div>
          <div class="modal-body">
            <p>Jika mengalami masalah lupa password, harap menghubungi bagian <strong><u>administrator</u></strong> untuk melakukan pembaharuan password, dengan membawa syarat dan ketentuan yang berlaku.<br/><br/><br/>Terima Kasih</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>
    <div id="register" class="animate form">
      <section class="login_content">
        <form action="{{ url('user') }}" method="POST">
          @csrf
          <h1>Buat Akun</h1>
          <div>
            <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required="" />
          </div>
          <div>
            <select name="divisi" class="form-control" required="" />
            <option>Divisi</option>
            <option value="Keuangan">Keuangan</option>
            <option value="Kearsipan">Kearsipan</option>
            <option value="Agendaris">Agendaris</option>
          </select><br/>
        </div>
        <div>
          <input type="text" name="username" class="form-control" placeholder="Username" required="" />
        </div>
        <div>
          <input type="password" name="password" class="form-control" placeholder="Password" required="" />
        </div>
        <div>
          <button type="submit" class="btn btn-default btn-sm">
            <i class="fa fa-sign-in"></i> Daftar 
          </button>
        </div>
        <div class="clearfix"></div>
        <div class="separator">

          <p class="change_link">Sudah ada akun ?
            <a href="#tologin" class="to_register"> Masuk </a>
          </p>
          <div class="clearfix"></div>
          <br />
          <div>
            <h1><i class="fa fa-home" style="font-size: 26px;"></i> BWS NT 1!</h1>

            <p>©2017 Surat Masuk &amp; Surat Keluar. Denda Afriliani! STMIK Bumigora Mataram. Privacy and Terms</p>
          </div>
        </div>
      </form>
      <!-- form -->
    </section>
    <!-- content -->
  </div>
</div>
</div>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

</body>

</html>
