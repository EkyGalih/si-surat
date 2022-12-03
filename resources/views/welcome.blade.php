@extends('layout')
@section('judul')
SISURAT - BPKAD NTB
@endsection
@section('konten')
<div class="page-title">
  <div class="title_left">
    <h3><label class="fa fa-cube"></label> Shortcut</h3>
  </div>
  <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
    </div>
  </div>
</div>
</div>
<hr/>
<div class="row top_tiles">
  @if(Auth::user()->divisi == 'Agendaris')
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-sign-in"></i>
      </div>
      <div class="count">
        <?php $countU = App\Models\Undangan::count(); ?>
        <div class="count">{{ $countU }}</div>
      </div>

      <h5>Surat Masuk Undangan</h5>
      <p><a href="{{ url('suratUndangan') }}"> Detail</a></p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-sign-in"></i>
      </div>
      <div class="count">
        <?php $countS = App\Models\SuratMasuk::count(); ?>
        <div class="count">{{ $countS }}</div>
      </div>

      <h5>Surat Masuk Umum</h5>
      <p><a href="{{ url('surat') }}"> Detail</a></p>
    </div>
  </div>
  @endif
  @if(Auth::user()->divisi == 'Administrator')
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-bank"></i>
      </div>
      <?php $divisi = App\Models\Divisi::count(); ?>
      <div class="count">{{ $divisi }}</div>

      <h5>Divisi Kantor</h5>
      <p><a href="{{ url('divisi') }}">Detail</a></p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-users"></i>
      </div>
      <div class="count">
        <?php $divisi = App\Models\User::count(); ?>
        <div class="count">{{ $divisi }}</div>
      </div>

      <h5>User</h5>
      <p><a href="{{ url('user') }}">Detail</a></p>
    </div>
  </div>
  @elseif(Auth::user()->divisi == 'KETUA BWS NT I')
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-legal"></i>
      </div>
      <div class="count">
        <?php $und = App\Models\SuratMasuk::where('status_smumum', 'read')->count() ?>
        <div class="count">{{ $und }}</div>
      </div>

      <h5>Disposisi Surat Masuk</h5>
      <p><a href="{{ url('suratmasuk') }}">Detail</a></p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-legal"></i>
      </div>
      <div class="count">
        <?php $sm = App\Models\Undangan::where('status_smund', 'read')->count() ?>
        <div class="count">{{ $sm }}</div>
      </div>

      <h5>Disposisi Surat Undangan</h5>
      <p><a href="{{ url('suratUndangan') }}">Detail</a></p>
    </div>
  </div>
  @else
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-file"></i>
      </div>
      <?php $count = App\Models\Filesk::where('status', 'unread')->count(); ?>
      <div class="count">{{ $count }}</div>

      <h5>File Surat Keluar</h5>
      <p><a href="{{ url('filesk') }}"> Detail</a></p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-sign-out"></i>
      </div>
      <div class="count">
        <?php $skbws = App\Models\Skbws::count(); ?>
        <div class="count">{{ $skbws }}</div>
      </div>

      <h5>Surat Keluar BWS</h5>
      <p><a href="{{ url('skbws') }}"> Detail</a></p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-sign-out"></i>
      </div>
      <div class="count">
        <?php $sksatker = App\Models\Sksatker::count(); ?>
        <div class="count">{{ $sksatker }}</div>
      </div>

      <h5>Surat Keluar Satuan Kerja</h5>
      <p><a href="{{ url('sksatker') }}"> Detail</a></p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-sign-out"></i>
      </div>
      <div class="count">
        <?php $skppd = App\Models\Sksppd::count(); ?>
        <div class="count">{{ $skppd }}</div>
      </div>

      <h5>Surat Keluar SPPD</h5>
      <p><a href="{{ url('sksppd') }}"> Detail</a></p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-sign-out"></i>
      </div>
      <div class="count">
        <?php $skppdttl = App\Models\Sksppdttl::count(); ?>
        <div class="count">{{ $skppdttl }}</div>
      </div>

      <h5>Surat Keluar SPPD TL</h5>
      <p><a href="{{ url('sksppdttl') }}"> Detail</a></p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-sign-out"></i>
      </div>
      <div class="count">
        <?php $skppdkttl = App\Models\Sksppkttl::count(); ?>
        <div class="count">{{ $skppdkttl }}</div>
      </div>

      <h5>Surat Keluar PPK TL</h5>
      <p><a href="{{ url('sksppkttl') }}"> Detail</a></p>
    </div>
  </div>
  @endif
  @if(Auth::user()->divisi == 'Agendaris')
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-share"></i>
      </div>
      <div class="count">
        <?php $count = App\Models\Distribusi::where('smund_id', '!=', NULL)->get()->count(); ?>
        <div class="count">{{ $count }}</div>
      </div>

      <h5>Distribusi Undangan</h5>
      <p><a href="{{ url('distribusiUndangan') }}">Detail</a></p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-share"></i>
      </div>
      <div class="count">
        <?php $count = App\Models\Distribusi::where('smumum_id', '!=', NULL)->get()->count(); ?>
        <div class="count">{{ $count }}</div>
      </div>

      <h5>Distribusi Surat Umum</h5>
      <p><a href="{{ url('distribusi') }}">Detail</a></p>
    </div>
  </div>
  @endif
  @endsection