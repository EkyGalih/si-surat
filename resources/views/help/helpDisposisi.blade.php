<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
	@if(Auth::user()->divisi == 'Agendaris')
	<div class="panel">
		<a class="panel-heading collapsed" role="tab" id="DsUndangan" data-toggle="collapse" data-parent="#accordion" href="#undangan" aria-expanded="false" aria-controls="collapseTwo">
			<h4 class="panel-title">Disposisi Surat Masuk</h4>
		</a>
		<div id="undangan" class="panel-collapse collapse" role="tabpanel" aria-labelledby="DsUndangan">
			<div class="panel-body">
				<p><strong>Input Surat disposisi</strong>
				</p>
				<p>Berikut langkah-langkah menginputkan surat untuk disposisi undangan.</p>
				<ol type="1" start="1">
					<li>
						Pilih Menu <strong>Disposisi</strong>, kemudian klik <strong>Disposisi SM Undangan</strong> atau <strong>Disposisi SM Umum</strong>.
					</li>
					<li>Masukkan data disposisi undangan pada form yang sudah disediakan.</li>
					<li>Klik button <img src="{{ asset('help/SuratMasuk/undangan/buat/simpan.jpg') }}"> untuk menyimpan data inputan.</li>
					<li>Selanjutnya akan dialihkan ke halaman data-data surat disposisi yang sebelumnya dimasukkan.</li>
					<li>Jika surat sudah terdisposisi, maka pemberitahuan dapat dilihat melalui icon <strong>BEL</strong> pada menu bagian atas. jika icon <img src="{{ asset('help/SuratMasuk/undangan/buat/notif.jpg') }}"> atau angka sebelumnya bertambah, maka surat sudah didisposisi dan siap didistribusikan, jika <img src="{{ asset('help/SuratMasuk/undangan/buat/notif2.jpg') }}"> maka tidak ada surat yang dapat diproses atau sudah selesai diproses dan didistribusikan.</li>
					<li>Pada tabel data-data disposisi surat masuk undangan, ada tiga status yang terdapat di sana, yaitu :
						<ul>
							<li><img src="{{ asset('help/SuratMasuk/undangan/buat/status_proggress.jpg') }}"> menandakan surat sudah terkirim ke ketua dan dalam proses disposisi.</li>
							<li><img src="{{ asset('help/SuratMasuk/undangan/buat/status_unread.jpg') }}"> menandakan surat sudah didisposisi oleh ketua dan siap didistribusikan sesuai instruksi ketua.</li>
							<li><img src="{{ asset('help/SuratMasuk/undangan/buat/status_read.jpg') }}"> menandakan surat sudah selesai diproses dan sudah di distribusikan ke setiaf staff bagian terkait.</li>
						</ul>
					</li>
				</ol><br/><br/><br/>
				<a href="#" data-toggle="modal" data-target="#ModalDisposisi"><strong><u>Tonton Video Tutorial</u></strong></a>
				<div class="modal fade" id="ModalDisposisi" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">

							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
								</button>
								<h4 class="modal-title" id="myModalLabel">Tutorial Disposisi Surat</h4>
							</div>
							<div class="modal-body">
								<video width="100%" height="100%" controls>
									<source src="{{ asset('help/Disposisi/disposisi_surat_agendaris.mp4') }}" type="video/mp4"> Tonton Video
									</video>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endif
		@if(Auth::user()->divisi == 'KETUA BWS NT I')
		<div class="panel">
			<a class="panel-heading collapsed" role="tab" id="DsUmum" data-toggle="collapse" data-parent="#accordion" href="#umum" aria-expanded="false" aria-controls="collapseThree">
				<h4 class="panel-title">Disposisi Surat Masuk</h4>
			</a>
			<div id="umum" class="panel-collapse collapse" role="tabpanel" aria-labelledby="DsUmum">
				<div class="panel-body">
					<p><strong>Disposisi Surat Masuk</strong>
					</p>
					<p>Berikut Langkah-langkah untuk pendisposisian surat masuk BWS NT I</p>
					<ol type="1" start="1">
						<li>Pilih menu <img src="{{ asset('help/disposisi/pilih_menu.png') }}" alt="Menu Disposisi"></li>
						<li>Kemudian klik kategori surat yang akan di disposisi <img src="{{ asset('help/disposisi/select_menu.png') }}" alt="List Menu Disposisi"></li>
						<li>Akan dialihkan ke halaman yang terdapat tabel untuk menampung semua daftar surat yang sudah dimasukkan oleh staff <strong>Agendaris</strong></li>
						<li>
							Pada tabel daftar surat, terdapat kolom <strong>#Status Disposisi</strong> dimana nantinya terdapat 3 label yang akan berubah-ubah, yaitu :
							<ol>
								<li><img src="{{ asset('help/disposisi/label_proggress.png') }}" alt="label_proggress"> menunjukkan surat belum terdisposisi oleh <strong>KETUA BWS NT I</strong>.</li>
								<li><img src="{{ asset('help/disposisi/label_delivered.png') }}" alt="label_delivered"> menunjukkan surat sudah terdisposisi dan dikirimkan ke bagian agendaris untuk proses ditsribusi.</li>
								<li><img src="{{ asset('help/disposisi/label_done.png') }}" alt="label_done"> menunjukkan surat sudah selesai dikerjakan.</li>
							</ol>
						</li>
						<li>Pada kolom <strong>#Disposisi</strong> juga terdapat 2 tombol, yaitu :
							<ul>
								<li><img src="{{ asset('help/disposisi/tombol_disposisi.png') }}" alt="tombol disposisi"> Jika tombol seperti ini muncul, maka surat belum diproses oleh <strong>KETUA BWS NT I</strong></li>	
								<li><img src="{{ asset('help/disposisi/tombol_disposisi_dis.png') }}" alt="tombol disposisi disabel"> Jika tombol seperti ini muncul, maka surat sudah di proses <strong>KETUA BWS NT I</strong> atau surat sudah selesai diproses oleh staff <strong>Agendaris</strong></li>	
							</ul>
						</li>
					</ol><br/><br/>
					<a href="#" data-toggle="modal" data-target="#ModalDisposisi2"><strong><u>Tonton Video Tutorial</u></strong></a>
					<div class="modal fade" id="ModalDisposisi2" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">

								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">Tutorial Disposisi Surat</h4>
								</div>
								<div class="modal-body">
									<video width="100%" height="100%" controls>
										<source src="{{ asset('help/Disposisi/disposisi_surat_ketua.mp4') }}" type="video/mp4"> Tonton Video
										</video>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif
		</div>