<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
	@if(Auth::user()->divisi == 'Agendaris')
	<div class="panel">
		<a class="panel-heading collapsed" role="tab" id="Distribusi" data-toggle="collapse" data-parent="#accordion" href="#dst" aria-expanded="false" aria-controls="collapseTwo">
			<h4 class="panel-title">Distribusi Surat</h4>
		</a>
		<div id="dst" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Distribusi">
			<div class="panel-body">
				<p><strong>Distribusi Surat</strong>
				</p>
				<p>Berikut langkah-langkah untuk pendistribusian surat.</p>
				<ol type="1" start="1">
					<li>
						Pilih Menu <strong>Distribusi</strong>, kemudian klik <strong>Distribusi Surat Undangan</strong> atau <strong>Distribusi Surat Umum</strong>.
					</li>
					<li>Kemudian akan dialihkan ke halaman tabel distribusi, untuk menambahkan distribusi klik <img src="{{ asset('help/Distribusi/Tambah.png') }}".</li>
					<li>Pada form tambah distribusi tidak perlu menginputkan semua data, cukup klik  input <strong>surat dari </strong> dan akan muncul daftar surat yang sudah di disposisi oleh ketua <img src="{{ asset('help/Distribusi/surat_dari.png') }}"</li>
					<li>Setelah memilih surat maka secara otomatis inputan pada form yang lain sudah terisi.</li>
					<li>Kemudian pada form bagian kanan terdapat nama-nama staff bagian, tinggal klik <img src="{{ asset('help/Distribusi/select.png') }}">. jika tombol sudah berubah warna seperti <img src="{{ asset('help/Distribusi/select_green.png') }}"> maka tandanya staff bagian sudah terseleksi.</li>
					<li>Klik tombol <img src="{{ asset('help/Distribusi/distribusi.png') }}"> untuk melakukan pendistribusian.</li>
				</ol><br/><br/><br/>
				<a href="#" data-toggle="modal" data-target="#ModalDistribusi"><strong><u>Tonton Video Tutorial</u></strong></a>
				<div class="modal fade" id="ModalDistribusi" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog modal-lg">
						<div class="modal-content">

							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
								</button>
								<h4 class="modal-title" id="myModalLabel">Tutorial Distribusi Surat</h4>
							</div>
							<div class="modal-body">
								<video width="100%" height="100%" controls>
									<source src="{{ asset('help/Distribusi/distribusi.mp4') }}" type="video/mp4">
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