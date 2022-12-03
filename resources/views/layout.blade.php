<!DOCTYPE html>
<html>
<head>
	<title>SI-SURAT | @yield('judul')</title>
	<link rel="shortcut icon" href="{{ asset('assets/images/NTB.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select/select2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/sweetalert2/sweetalert2.min.css') }}">
	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	@yield('css')
</head>
<body class="nav-md">
	<div class="container body">
		<div class="main_container">

			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">

					<div class="navbar nav_title" style="border: 0;">
						<a href="{{ url('welcome') }}" class="site_title"><img src="{{ asset('assets/images/NTB.png') }}" height="28px" width="35px" class="img-rounded" alt="Logo"> 
							<span>SI-SURAT</span></a>
						</div>
						<div class="clearfix"></div>
						<!-- menu prile quick info -->
						<div class="profile">
							<div class="profile_pic">
								<img src="{{ asset(Auth::user()->foto) }}" alt="Profile user" class="img-circle profile_img">
							</div>
							<div class="profile_info">
								<span>Selamat datang,</span>
								<h2><strong><u>{{ Auth::user()->nama_lengkap }}</u></strong></h2>
								<br/>
								<br/>
							</div>
						</div>
						<!-- /menu prile quick info -->
						<!-- sidebar menu -->
						<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

							<div class="menu_section">
								<h4><font color="#2a3f54">Online</font></h4>
								<ul class="nav side-menu">
									<li><a href="{{ url('/welcome') }}"><i class="fa fa-home"></i> Beranda </span></a>
									</li>
									@if(Auth::user()->divisi == 'KETUA')
									<li>
										<a>
											<i class="fa fa-envelope"></i> Disposisi<span class="fa fa-chevron-down"></span></a>
											<ul class="nav child_menu" style="display: none">
												<li><a href="{{ url('suratUndangan') }}">Disposisi SM Undangan</a>
												</li>
												<li><a href="{{ url('suratmasuk') }}">Disposisi SM Umum</a>
												</li>
											</ul>
										</li>
										@endif
										@if(Auth::user()->divisi == 'Agendaris')
										<li>
											<a>
												<i class="fa fa-envelope"></i> Disposisi<span class="fa fa-chevron-down"></span></a>
												<ul class="nav child_menu" style="display: none">
													<li><a href="{{ url('disposisiUndangan') }}">Disposisi SM Undangan</a>
													</li>
													<li><a href="{{ url('disposisiSmUmum') }}">Disposisi SM Umum</a>
													</li>
												</ul>
											</li>
										</li>
										<li>
											<a>
												<i class="fa fa-book"></i> Surat Masuk<span class="fa fa-chevron-down"></span></a>
												<ul class="nav child_menu" style="display: none">
													<li><a href="{{ url('suratUndangan') }}">Surat Masuk Undangan</a>
													</li>
													<li><a href="{{ url('suratmasuk') }}">Surat Masuk</a>
													</li>
												</ul>
											</li>
											<li>
												<a>
													<i class="fa fa-book"></i> Surat Keluar<span class="fa fa-chevron-down"></span></a>
													<ul class="nav child_menu" style="display: none">
														<li>
															<a href="{{ url('skbws') }}">Surat Keluar</a>
														</li>
														<li>
															<a href="{{ url('sksppd') }}">Surat Keluar SPPD</a>
														</li>
														<li>
															<a href="{{ url('sksppdttl') }}">Surat Keluar SPPD Tatalaksana</a>
														</li>
														<li>
															<a href="{{ url('sksatker') }}">Surat Keluar SATKER</a>

														</li>
														<li>
															<a href="{{ url('sksppkttl') }}">Surat Keluar PPK Tatalaksana</a>
														</li>
													</ul>
												</li>
												@endif
												@if(Auth::user()->divisi != 'KETUA' && Auth::user()->divisi != 'Administrator')
												<li>
													<a><i class="fa fa-share"></i> Distribusi <span class="fa fa-chevron-down"></span></a>
													<ul class="nav child_menu" style="display: none">
														<li>
															<a href="{{ url('distribusiUndangan') }}">Distribusi Surat Undangan</a>
														</li>
														<li>
															<a href="{{ url('distribusi') }}">Distribusi Surat Umum</a>
														</li>
													</ul>
												</li>
												@endif
												@if(Auth::user()->divisi != 'Agendaris' && Auth::user()->divisi != 'KETUA' && Auth::user()->divisi != 'Administrator')
												<li>
													<a href="{{ url('/filesk') }}">
														<i class="fa fa-upload"></i> Upload Surat
													</a>
												</li>
												@elseif(Auth::user()->divisi == 'Agendaris')
												<li>
													<a href="{{ url('/filesk') }}">
														<i class="fa fa-files-o"></i> File Surat
													</a>
												</li>
												@endif
												@if(Auth::user()->jenis_user == 'admin')
												<li>
													<a href="{{ route('divisi-admin') }}">
														<i class="fa fa-building"></i> Bidang
													</a>
												</li>
												@elseif (Auth::user()->jenis_user == 'agendaris')
												<li>
													<a href="{{ route('divisi-agendaris') }}">
														<i class="fa fa-building"></i> Bidang
													</a>
												</li>
												@endif
												@if(Auth::user()->divisi == 'Agendaris' OR Auth::user()->divisi == 'Arsip')
												<li><a><i class="fa fa-bar-chart-o"></i> Laporan <span class="fa fa-chevron-down"></span></a>
													<ul class="nav child_menu" style="display: none">
														<li>
															<a href="{{ url('cetakUndangan') }}">Surat Masuk Undangan</a>
														</li>
														<li>
															<a href="{{ url('cetakSuratMasuk') }}">Surat Masuk Umum</a>
														</li>
														<li>
															<a href="{{ url('cetakSkbws') }}">
																Surat Keluar
															</a>
														</li>
														<li>
															<a href="{{ url('cetakSksppd') }}">
																SPPD
															</a>
														</li>
														<li>
															<a href="{{ url('cetakSksppdttl') }}">
																SPPD Tata Laksana
															</a>
														</li>
														<li>
															<a href="{{ url('cetakSksatker') }}">
																SATKER
															</a>
														</li>
														<li>
															<a href="{{ url('cetakSksppkttl') }}">
																PPK Tatalaksana
															</a>
														</li>
													</ul>
												</li>
												@endif
												{{-- <li>
													<a href="" data-toggle="modal" data-target=".bs-example-modal-sm">
														<i class="fa fa-envelope"></i> Sms
													</a>
												</li> --}}
												<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
													<div class="modal-dialog modal-sm">
														<div class="modal-content">

															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
																</button>
																<h4 class="modal-title" id="myModalLabel2">Kirim Pesan</h4>
															</div>
															<div class="modal-body">
																<form action="{{ url('sms') }}" method="post">
																	{{ csrf_field() }}
																	<label>No Tujuan</label>
																	<input type="text" name="DestinationNumber" class="form-control"><br/>
																	<label>Pesan</label>
																	<textarea class="form-control" name="TextDecoded"></textarea>
																	<input type="hidden" name="CreatorID" value="{{ Auth::user()->divisi }}">
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-remove"></i> Batal</button>
																	<button type="submit" class="btn btn-success btn-sm"><i class="fa fa-send"></i> Kirim</button>
																</div>
															</form>

														</div>
													</div>
												</div>
											</div>
											<div class="menu_section">
												<ul class="nav side-menu">
													<div class="menu_section">
														<ul class="nav side-menu">
															<li><a><i class="fa fa-briefcase"></i> Fitur <span class="fa fa-chevron-down"></span></a>
																<ul class="nav child_menu" style="display: none">
																	<li>
																		<a href="{{ url('bantuan') }}"><i class="fa fa-question-circle fa-fw"></i> Bantuan</a>
																	</li>
																	@if(Auth::user()->divisi == 'Administrator')
																	<li>
																		<a href="{{ url('user') }}">
																			<i class="fa fa-group fa-fw"></i> Users
																		</a>
																	</li>
																	@endif
																</ul>
															</li>
															<!-- <li>
																<a>
																	<i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span>
																</a>
																<ul class="nav child_menu" style="display: none">
																	<li>
																		<a href="plain_page.html">Kalender Undangan</a>
																	</li>
																</ul>
															</li> -->
														</ul>
													</ul>
												</div>

											</div>
											<!-- /sidebar menu -->

											<!-- /menu footer buttons -->
											<div class="sidebar-footer hidden-small">
												<a data-toggle="tooltip" href="{{ url('profil') }}" data-placement="top" title="Profile">
													<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
												</a>
												<a data-toggle="tooltip" data-placement="top" title="FullScreen">
													<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
												</a>
												<a href="{{ url('bantuan') }}" data-toggle="tooltip" data-placement="top" title="Bantuan">
													<span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
												</a>
												<a data-toggle="tooltip" href="{{ url('logout') }}" data-placement="top" title="Logout">
													<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
												</a>
											</div>
											<!-- /menu footer buttons -->
										</div>
									</div>

									<!-- top navigation -->
									<div class="top_nav">

										<div class="nav_menu">
											<nav class="" role="navigation">
												<div class="nav toggle">
													<a id="menu_toggle"><i class="fa fa-bars"></i></a>
												</div>

												<ul class="nav navbar-nav navbar-right">
													<li class="">
														<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
															<img src="{{ asset(Auth::user()->foto) }}" alt="">{{ Auth::user()->username }}
															<span class=" fa fa-angle-down"></span>
														</a>
														<ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
															<li><a href="{{ url('profile') }}">  Profile</a>
															</li>
															<li>
																<a href="{{ url('help') }}">Help</a>
															</li>
															<li><a href="{{ url('logout') }}"><i class="fa fa-sign-out pull-right"></i> Keluar</a>
															</li>
														</ul>
													</li>
													@if(Auth::user()->divisi == 'Agendaris')
													<li data-toggle="tooltip" data-placement="bottom" title="Notif File Surat" role="presentation" class="dropdown">
														<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-envelope-o"></i>
															<span class="badge bg-green" id="notif-count-filesk"></span>
														</a>
														<ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
															<!-- menampilkan data dari model -->

														</li>
													</ul>
													<li data-toggle="tooltip" data-placement="bottom" title="Notif Surat Umum" role="presentation" class="dropdown">
														<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-bell-o"></i>
															<span class="badge bg-red" id="notif-count-smumum-agendaris"></span>
														</a>
														<ul id="menu5" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
															<!-- menampilkan data dari model -->
														</li>
													</ul>
													<li data-toggle="tooltip" data-placement="bottom" title="Notif Surat Undangan" role="presentation" class="dropdown">
														<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-bell-o"></i>
															<span class="badge bg-red" id="notif-count-smund-agendaris"></span>
														</a>
														<ul id="menu6" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
															<!-- menampilkan data dari model -->
														</li>
													</ul>
													@endif
													<!-- NOTIFIKASI FILE SURAT UNTUK DIVISI LAIIN -->
													@if(Auth::user()->divisi != 'Agendaris' && Auth::user()->divisi != 'KETUA' && Auth::user()->divisi != 'Administrator')
													<li data-toggle="tooltip" data-placement="left" title="Notif File Surat Client" role="presentation" class="dropdown">
														<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-envelope-o"></i>
															<span class="badge bg-green" id="notif-count-filesk-client"></span>
														</a>
														<ul id="menu4" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
															<!-- menampilkan data dari model -->

														</li>
													</ul>
													<li data-toggle="tooltip" data-placement="left" title="Notif File Distribusi Umum" role="presentation" class="dropdown">
														<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-share-alt"></i>
															<span class="badge bg-blue" id="notif-count-dist"></span>
														</a>
														<ul id="menu7" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
															<!-- menampilkan data dari model -->

														</li>
													</ul>
													<li data-toggle="tooltip" data-placement="left" title="Notif File Distribusi Undangan" role="presentation" class="dropdown">
														<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-share-alt"></i>
															<span class="badge bg-blue" id="notif-count-dist-und"></span>
														</a>
														<ul id="menu8" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
															<!-- menampilkan data dari model -->

														</li>
													</ul>
													@endif
													<!-- END NOTIFIKASI FILE SURAT UNTUK DIVISI LAIIN -->
													<!-- NOTIFIKASI SURAT MASUK UMUM DAN SURAT UNDANGAN -->
													@if(Auth::user()->divisi == 'KETUA')
													<li data-toggle="tooltip" data-placement="bottom" title="Notif Surat Umum" role="presentation" class="dropdown">
														<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-envelope-o"></i>
															<span class="badge bg-green" id="notif-count-smumum"></span>
														</a>
														<ul id="menu2" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
															<!-- menampilkan data dari model -->
														</li>
													</ul>
													<li data-toggle="tooltip" data-placement="bottom" title="Notif Surat Undangan" role="presentation" class="dropdown">
														<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
															<i class="fa fa-envelope-o"></i>
															<span class="badge bg-green" id="notif-count-smund"></span>
														</a>
														<ul id="menu3" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
															<!-- menampilkan data dari model -->
														</li>
													</ul>
													@endif
												</li>
											</li>
										</ul>
									</nav>
								</div>

							</div>
							<!-- /top navigation -->
							<!-- page content -->
							<div class="right_col" role="main">
								<div class="">

									@yield('konten')
								</div>

								<!-- footer content -->
								<footer>
									<div class="copyright-info">
										<p class="pull-right">Created &copy; Eky Galih Gunanda    
										</p>
									</div>
									<div class="clearfix"></div>
								</footer>
								<!-- /footer content -->
							</div>
							<!-- /page content -->
						</div>
					</div>
					<div id="custom_notifications" class="custom-notifications dsp_none">
						<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
						</ul>
						<div class="clearfix"></div>
						<div id="notif-group" class="tabbed_notifications"></div>
					</div>

					<!-- <Java Scriptnya> -->
					<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
					<script src="{{ asset('assets/js/nicescroll/jquery.nicescroll.min.js') }}"></script>

					<!-- bootstrap progress js -->
					<!-- <script src="{{ asset('assets/js/progressbar/bootstrap-progressbar.min.js') }}"></script> -->
					<!-- icheck -->
					<!-- <script src="{{ asset('assets/js/icheck/icheck.min.js') }}"></script> -->
					<!-- daterangepicker -->
					<script type="text/javascript" src="{{ asset('assets/js/moment/moment.min.js') }}"></script>
					<script type="text/javascript" src="{{ asset('assets/js/datepicker/daterangepicker.js') }}"></script>
					<!-- chart js -->
					<!-- <script src="{{ asset('assets/js/chartjs/chart.min.js') }}"></script> -->
					<!-- sparkline -->
					<script src="{{ asset('assets/js/sparkline/jquery.sparkline.min.js') }}"></script>

					<script src="{{ asset('assets/js/custom.js') }}"></script>

					<!-- flot js -->
					<!--[if lte IE 8]><script type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
					<!-- <script type="text/javascript" src="{{ asset('assets/js/flot/jquery.flot.js') }}"></script> -->
							<!-- <script type="text/javascript" src="{{ asset('assets/js/flot/jquery.flot.pie.js') }}"></script>
							<script type="text/javascript" src="{{ asset('assets/js/flot/jquery.flot.orderBars.js') }}"></script>
							<script type="text/javascript" src="{{ asset('assets/js/flot/jquery.flot.time.min.js') }}"></script>
							<script type="text/javascript" src="{{ asset('assets/js/flot/date.js') }}"></script>
							<script type="text/javascript" src="{{ asset('assets/js/flot/jquery.flot.spline.js') }}"></script>
							<script type="text/javascript" src="{{ asset('assets/js/flot/jquery.flot.stack.js') }}"></script>
							<script type="text/javascript" src="{{ asset('assets/js/flot/curvedLines.js') }}"></script>
							<script type="text/javascript" src="{{ asset('assets/js/flot/jquery.flot.resize.js') }}"></script> -->

							<!-- data tables -->
							<script src="{{ asset('assets/js/datatables/jquery.dataTables.min.js') }}"></script>
							<script src="{{ asset('assets/js/datatables/dataTables.bootstrap.js') }}"></script>
							<script src="{{ asset('assets/js/datatables/dataTables.buttons.min.js') }}"></script>
							<!-- <script src="{{ asset('assets/js/datatables/buttons.bootstrap.min.js') }}"></script>
							<script src="{{ asset('assets/js/datatables/jszip.min.js') }}"></script>
							<script src="{{ asset('assets/js/datatables/pdfmake.min.js') }}"></script>
							<script src="{{ asset('assets/js/datatables/vfs_fonts.js') }}"></script>
							<script src="{{ asset('assets/js/datatables/buttons.html5.min.js') }}"></script>
							<script src="{{ asset('assets/js/datatables/buttons.print.min.js') }}"></script>
							<script src="{{ asset('assets/js/datatables/dataTables.fixedHeader.min.js') }}"></script>
							<script src="{{ asset('assets/js/datatables/dataTables.keyTable.min.js') }}"></script>
							<script src="{{ asset('assets/js/datatables/dataTables.scroller.min.js') }}"></script> -->
							<script src="{{ asset('assets/js/datatables/dataTables.responsive.min.js') }}"></script>
							<script src="{{ asset('assets/js/datatables/responsive.bootstrap.min.js') }}"></script>
							<script src="{{ asset('assets/js/cropping/cropper.min.js') }}"></script>

							<script src="{{ asset('assets/js/cropping/main.js') }}"></script>

							<!-- pace -->
							<script src="{{ asset('assets/js/pace/pace.min.js') }}"></script>

							<!-- Validator -->
							<script src="{{ asset('assets/js/validator/validator.js') }}"></script>

							<!-- Select Plugins -->
							<script type="text/javascript" src="{{ asset('assets/js/select/select2.full.js') }}"></script>
							<script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script>
							@include('sweet-alert-notification')
							<!-- Script get data tanpa refresh halaman -->
							@yield('script_skbws')
							<script>
    // initialize the validator function
    validator.message['date'] = 'format tanggal salah';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
    .on('blur', 'input[required], input.optional, select.required', validator.checkField)
    .on('change', 'select.required', validator.checkField)
    .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required')
    .on('keyup blur', 'input', function() {
    	validator.checkField.apply($(this).siblings().last()[0]);
    });

    // bind the validation to the form submit event
    //$('#send').click('submit');//.prop('disabled', true);

    $('form').submit(function(e) {
    	e.preventDefault();
    	var submit = true;
      // evaluate the form using generic validaing
      if (!validator.checkAll($(this))) {
      	submit = false;
      }

      if (submit)
      	this.submit();
      return false;
  });

    // /* FOR DEMO ONLY */
    // $('#vfields').change(function() {
    // 	$('form').toggleClass('mode2');
    // }).prop('checked', false);

    // $('#alerts').change(function() {
    // 	validator.defaults.alerts = (this.checked) ? false : true;
    // 	if (this.checked)
    // 		$('form .alert').remove();
    // }).prop('checked', false);
</script>
<!-- end validator -->

<!-- fungsi DataTables -->
<script>
	var handleDataTableButtons = function() {
		"use strict";
		0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
			dom: "Bfrtip",
			buttons: [{
				extend: "copy",
				className: "btn-sm"
			}, {
				extend: "csv",
				className: "btn-sm"
			}, {
				extend: "excel",
				className: "btn-sm"
			}, {
				extend: "pdf",
				className: "btn-sm"
			}, {
				extend: "print",
				className: "btn-sm"
			}],
			responsive: !0
		})
	},
	TableManageButtons = function() {
		"use strict";
		return {
			init: function() {
				handleDataTableButtons()
			}
		}
	}();
</script>
<script type="text/javascript">
	$(document).ready(function() {
		///////////////////////
		// GET NOTIFE FILESK AGENDARIS //
		///////////////////////
		function getNofitFilesk(){
			// console.log('getting notif');
			$.ajax({url: "/get_notif_filesk", success: function(result){
				$('#menu1').empty();
				// console.log(result);
				for ( var i = 0; i < result.length; i++ ) {
					$('#menu1').append(
						'<li>'+
						'<a href="filesk">'+
						'<span>'+
						'<span>From : '+result[i].staff_bagian+'</span>'+
						'<span class="time"></span>'+
						'</span>'+
						'<span class="message">Perihal : '+
						result[i].perihal+
						'</span>'+
						'</a>'+
						'</li>'
						);
					// $('#menu1').append('<li><a href='+result[i].id+'><span class="image"></span></a></li>');
				}
				$('#menu1').append(
					'<li>'+
					'<div class="text-center">'+
					'<a href="{{ url("filesk") }}">'+
					'<strong>Lihat Semua</strong>'+
					'<i class="fa fa-angle-right"></i>'+
					'</a>'+
					'</div>'+
					'</li>'
					);
				var notifCountFilesk = result.length;
				$('#notif-count-filesk').html(notifCountFilesk);
			}});
		}
		getNofitFilesk();
		setInterval(getNofitFilesk, 3000);
		///////////////////////////
		// END GET NOTIFE FILESK AGENDARIS //
		///////////////////////////

		//////////////////////////
		// GET NOTIF DISTRIBUSI //
		//////////////////////////
		function getNofitDist(){
			// console.log('getting notif');
			$.ajax({url: "/get_notif_dist", success: function(distUmum){
				$('#menu7').empty();
				// console.log(distUmum);
				for ( var i = 0; i < distUmum.length; i++ ) {
					$('#menu7').append(
						'<li>'+
						'<a href="distribusi">'+
						'<span>'+
						'<span>Agenda umum baru <i class="fa fa-check"></i></span>'+
						'<span class="time"><label class="label label-warning">'+distUmum[i].created_at+'</label></span>'+
						'</a>'+
						'</li>'
						);
					// $('#menu7').append('<li><a href='+result[i].id+'><span class="image"></span></a></li>');
				}
				$('#menu7').append(
					'<li>'+
					'<div class="text-center">'+
					'<a href="{{ url("distribusi") }}">'+
					'<strong>Lihat Semua</strong>'+
					'<i class="fa fa-angle-right"></i>'+
					'</a>'+
					'</div>'+
					'</li>'
					);
				var notifCountDist = distUmum.length;
				$('#notif-count-dist').html(notifCountDist);
			}});
		}
		getNofitDist();
		setInterval(getNofitDist, 3000);
		//////////////////////////////
		// END GET NOTIF DISTRIBUSI //
		//////////////////////////////

		//////////////////////////
		// GET NOTIF DISTRIBUSI UNDANGAN //
		//////////////////////////
		function getNofitDistUnd(){
			// console.log('getting notif');
			$.ajax({url: "/get_notif_dist_und", success: function(distUnd){
				$('#menu8').empty();
				// console.log(distUmum);
				for ( var i = 0; i < distUnd.length; i++ ) {
					$('#menu8').append(
						'<li>'+
						'<a href="distribusiUndangan">'+
						'<span>'+
						'<span>Agenda undangan baru <i class="fa fa-check"></i></span>'+
						'<span class="time"><label class="label label-warning">'+distUnd[i].created_at+'</label></span>'+
						'</a>'+
						'</li>'
						);
					// $('#menu8').append('<li><a href='+result[i].id+'><span class="image"></span></a></li>');
				}
				$('#menu8').append(
					'<li>'+
					'<div class="text-center">'+
					'<a href="{{ url("distribusiUndangan") }}">'+
					'<strong>Lihat Semua</strong>'+
					'<i class="fa fa-angle-right"></i>'+
					'</a>'+
					'</div>'+
					'</li>'
					);
				var notifCountDistUnd = distUnd.length;
				$('#notif-count-dist-und').html(notifCountDistUnd);
			}});
		}
		getNofitDistUnd();
		setInterval(getNofitDistUnd, 3000);
		//////////////////////////////
		// END GET NOTIF DISTRIBUSI UNDANGAN //
		//////////////////////////////

		//////////////////////
		// GET NOTIF FILESK //
		//////////////////////
		function getNofitFileskClient(){
			// console.log('getting notif');
			$.ajax({url: "/get_notif_filesk_client", success: function(result){
				$('#menu4').empty();
				// console.log(result);
				for ( var i = 0; i < result.length; i++ ) {
					$('#menu4').append(
						'<li>'+
						'<a href="filesk">'+
						'<span>'+
						'<span>Status : <u>Done <i class="fa fa-check"></i></u></span>'+
						'<span class="time"></span>'+
						'</span>'+
						'<span class="message">Perihal : '+
						result[i].perihal+
						'</span>'+
						'</a>'+
						'</li>'
						);
					// $('#menu1').append('<li><a href='+result[i].id+'><span class="image"></span></a></li>');
				}
				$('#menu4').append(
					'<li>'+
					'<div class="text-center">'+
					'<a href="{{ url("filesk") }}">'+
					'<strong>Lihat Semua</strong>'+
					'<i class="fa fa-angle-right"></i>'+
					'</a>'+
					'</div>'+
					'</li>'
					);
				var notifCountFileskClient = result.length;
				$('#notif-count-filesk-client').html(notifCountFileskClient);
			}});
		}
		getNofitFileskClient();
		setInterval(getNofitFileskClient, 3000);
		//////////////////////////
		// END GET NOTIF FILESK //
		//////////////////////////

		////////////////////////
		// NOTIF COUNT SMUMUM //
		////////////////////////
		function getNofitSmumum(){
			// console.log('getting notif');
			$.ajax({url: "/get_notif_smumum", success: function(smumum){
				$('#menu2').empty();
				// console.log(smumum);
				for ( var i = 0; i < smumum.length; i++ ) {
					$('#menu2').append(
						'<li>'+
						'<a href="suratmasuk/'+smumum[i].id+'/edit">'+
						'<span>'+
						'<span>From : '+smumum[i].asal_surat+'</span>'+
						'<span class="time"></span>'+
						'</span>'+
						'<span class="message">Perihal : '+
						smumum[i].perihal+
						'</span>'+
						'</a>'+
						'</li>'
						);
					// $('#menu2').append('<li><a href='+smumum[i].id+'><span class="image"></span></a></li>');
				}
				$('#menu2').append(
					'<li>'+
					'<div class="text-center">'+
					'<a href="{{ url("suratmasuk") }}">'+
					'<strong>Lihat Semua</strong>'+
					'<i class="fa fa-angle-right"></i>'+
					'</a>'+
					'</div>'+
					'</li>'
					);
				var notifCountSmumum = smumum.length;
				$('#notif-count-smumum').html(notifCountSmumum);
			}});
		}
		getNofitSmumum();
		setInterval(getNofitSmumum, 3000);
		///////////////////////////
		// END GET NOTIFE SMUMUM //
		///////////////////////////

		////////////////////////
		// NOTIF COUNT SMUMUM AGENDARIS //
		////////////////////////
		function getNofitSmumumAgendaris(){
			// console.log('getting notif');
			$.ajax({url: "/get_notif_smumum_agendaris", success: function(smumum){
				$('#menu5').empty();
				// console.log(smumum);
				for ( var i = 0; i < smumum.length; i++ ) {
					$('#menu5').append(
						'<li>'+
						'<a href="suratmasuk">'+
						'<span>'+
						'<span>From : '+smumum[i].asal_surat+'</span>'+
						'<span class="time"></span>'+
						'</span>'+
						'<span class="message">Perihal : '+
						smumum[i].perihal+
						'</span>'+
						'</a>'+
						'</li>'
						);
					// $('#menu2').append('<li><a href='+smumum[i].id+'><span class="image"></span></a></li>');
				}
				$('#menu5').append(
					'<li>'+
					'<div class="text-center">'+
					'<a href="{{ url("suratmasuk") }}">'+
					'<strong>Lihat Semua</strong>'+
					'<i class="fa fa-angle-right"></i>'+
					'</a>'+
					'</div>'+
					'</li>'
					);
				var notifCountSmumumAgendaris = smumum.length;
				$('#notif-count-smumum-agendaris').html(notifCountSmumumAgendaris);
			}});
		}
		getNofitSmumumAgendaris();
		setInterval(getNofitSmumumAgendaris, 3000);
		///////////////////////////
		// END GET NOTIFE SMUMUM AGENDARIS //
		///////////////////////////

		////////////////////////
		// NOTIF COUNT SMUND //
		////////////////////////
		function getNofitSmund(){
			// console.log('getting notif');
			$.ajax({url: "/get_notif_smund", success: function(smund){
				$('#menu3').empty();
				// console.log(smund);
				for ( var i = 0; i < smund.length; i++ ) {
					$('#menu3').append(
						'<li>'+
						'<a href="suratUndangan/'+smund[i].id+'/edit">'+
						'<span>'+
						'<span>From : '+smund[i].asal_surat+'</span>'+
						'<span class="time"></span>'+
						'</span>'+
						'<span class="message">Perihal : '+
						smund[i].perihal+
						'</span>'+
						'</a>'+
						'</li>'
						);
					// $('#menu3').append('<li><a href='+smund[i].id+'><span class="image"></span></a></li>');
				}
				$('#menu3').append(
					'<li>'+
					'<div class="text-center">'+
					'<a href="{{ url("suratUndangan") }}">'+
					'<strong>Lihat Semua</strong>'+
					'<i class="fa fa-angle-right"></i>'+
					'</a>'+
					'</div>'+
					'</li>'
					);
				var notifCountSmund = smund.length;
				$('#notif-count-smund').html(notifCountSmund);
			}});
		}
		getNofitSmund();
		setInterval(getNofitSmund, 3000);
		///////////////////////////
		// END GET NOTIFE SMUND //
		///////////////////////////

		////////////////////////
		// NOTIF COUNT SMUND AGENDARIS//
		////////////////////////
		function getNofitSmundAgendaris(){
			// console.log('getting notif');
			$.ajax({url: "/get_notif_smund_agendaris", success: function(smund){
				$('#menu6').empty();
				// console.log(smund);
				for ( var i = 0; i < smund.length; i++ ) {
					$('#menu6').append(
						'<li>'+
						'<a href="suratUndangan">'+
						'<span>'+
						'<span>From : '+smund[i].asal_surat+'</span>'+
						'<span class="time"></span>'+
						'</span>'+
						'<span class="message">Perihal : '+
						smund[i].perihal+
						'</span>'+
						'</a>'+
						'</li>'
						);
					// $('#menu3').append('<li><a href='+smund[i].id+'><span class="image"></span></a></li>');
				}
				$('#menu6').append(
					'<li>'+
					'<div class="text-center">'+
					'<a href="{{ url("suratUndangan") }}">'+
					'<strong>Lihat Semua</strong>'+
					'<i class="fa fa-angle-right"></i>'+
					'</a>'+
					'</div>'+
					'</li>'
					);
				var notifCountSmundAgendaris = smund.length;
				$('#notif-count-smund-agendaris').html(notifCountSmundAgendaris);
			}});
		}
		getNofitSmundAgendaris();
		setInterval(getNofitSmundAgendaris, 3000);
		///////////////////////////
		// END GET NOTIFE SMUND AGENDARIS //
		///////////////////////////

		$('#datatable').dataTable();
		// $('#datatable-keytable').DataTable({
		// 	keys: true
		// });
		$('#datatable-responsive').DataTable();
		// $('#datatable-scroller').DataTable({
		// 	ajax: "js/datatables/json/scroller-demo.json",
		// 	deferRender: true,
		// 	scrollY: 380,
		// 	scrollCollapse: true,
		// 	scroller: true
		// });
		// var table = $('#datatable-fixed-header').DataTable({
		// 	fixedHeader: true
		// });
	});
TableManageButtons.init();
</script>
</body>
</html>