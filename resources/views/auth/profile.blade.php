@extends('layout')
@section('judul')
Profile
@endsection
@section('konten')
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel">
			<div class="x_title">
       <h2>User Profile <small>Detail</small></h2>
       <ul class="nav navbar-right panel_toolbox">
         <li><a href="#"><i class="fa fa-chevron-up"></i></a>
         </li>
       </li>
     </ul>
     <div class="clearfix"></div>
   </div>
   <div class="x_content">

    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

     <div class="profile_img">

      <!-- end of image cropping -->
      @if(Session::has('success'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">x</span></button>
        <label class="fa fa-warning"></label> {{ Session::pull('success') }}
      </div>
      @endif
      <div id="crop-avatar">
       <!-- Current avatar -->
       <div class="avatar-view" title="Ganti foto profil">
        <img src="{{ Auth::user()->foto }}" alt="Foto Profile">
      </div>

      <!-- Cropping modal -->
      <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg">
         <div class="modal-content">
          <form class="avatar-form" action="{{ url('changeFoto/'.Auth::user()->id) }}" enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
            <div class="modal-header">
              <button class="close" data-dismiss="modal" type="button">&times;</button>
              <h4 class="modal-title" id="avatar-modal-label">Ganti Foto</h4>
            </div>
            <div class="modal-body">
              <div class="avatar-body">

               <!-- Upload image and data -->
               <div class="avatar-upload">
                <input value="PUT" name="_method" type="hidden">
                <label for="avatarInput">Via Computer</label>
                <input class="avatar-input" id="avatarInput" name="foto" type="file">
              </div>

              <!-- Crop and preview -->
              <div class="row">
                <div class="col-md-9">
                 <div class="avatar-wrapper"></div>
               </div>
               <div class="col-md-3">
                 <div class="avatar-preview preview-lg"></div>
                 <div class="avatar-preview preview-md"></div>
                 <div class="avatar-preview preview-sm"></div>
               </div>
             </div>

             <div class="row avatar-btns">
              <div class="col-md-9">
               <div class="btn-group">
                <button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">Rotate Left</button>
                <button class="btn btn-primary" data-method="rotate" data-option="-15" type="button">-15deg</button>
                <button class="btn btn-primary" data-method="rotate" data-option="-30" type="button">-30deg</button>
                <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button">-45deg</button>
              </div>
              <div class="btn-group">
                <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">Rotate Right</button>
                <button class="btn btn-primary" data-method="rotate" data-option="15" type="button">15deg</button>
                <button class="btn btn-primary" data-method="rotate" data-option="30" type="button">30deg</button>
                <button class="btn btn-primary" data-method="rotate" data-option="45" type="button">45deg</button>
              </div>
            </div>
            <div class="col-md-3">
             <button class="btn btn-primary btn-block avatar-save" type="submit">Done</button>
           </div>
         </div>
       </div>
     </div>
                                <!-- <div class="modal-footer">
                                                  <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                                </div> -->
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                        <!-- /.modal -->

                                        <!-- Loading state -->
                                        <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                                      </div>
                                      <!-- end of image cropping -->

                                    </div>
                                    <h3><u>{{Auth::user()->nama_lengkap}}</u></h3>

                                    <ul class="list-unstyled user_data">
                                    <!--  <li><i class="fa fa-map-marker user-profile-icon"></i> San Francisco, California, USA
                                  </li> -->

                                  <li>
                                   <i class="fa fa-briefcase user-profile-icon"></i> {{Auth::user()->divisi}}
                                 </li>
                              </ul>

                              <a href="{{ url('user/'.Auth::user()->id.'/edit') }}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                              <br />

                              <!-- start skills -->
                                 <!--  <h4>Skills</h4>
                                  <ul class="list-unstyled user_data">
                                   <li>
                                    <p>Web Applications</p>
                                    <div class="progress progress_sm">
                                     <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                                   </div>
                                 </li>
                                 <li>
                                  <p>Website Design</p>
                                  <div class="progress progress_sm">
                                   <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                                 </div>
                               </li>
                               <li>
                                <p>Automation & Testing</p>
                                <div class="progress progress_sm">
                                 <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                               </div>
                             </li>
                             <li>
                              <p>UI / UX</p>
                              <div class="progress progress_sm">
                               <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                             </div>
                           </li>
                         </ul> -->
                         <!-- end of skills -->

                       </div>
                       <div class="col-md-9 col-sm-9 col-xs-12">

                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                          <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                           <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Agenda Undangan</a>
                           </li>
                           <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Agenda Umum</a>
                           </li>
                         </ul>
                         <div id="myTabContent" class="tab-content">
                           <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            <!-- start Agenda Undangan -->
                            @foreach($data as $d)
                            <ul class="messages">
                             <li>
                              <label class="fa fa-tags"></label>
                              <div class="message_date">
                               <h3 class="date text-info"></h3>
                               <p class="month"></p>
                             </div>
                             <div class="message_wrapper">
                               <h4 class="heading">{{ $d->belongsToUndangan->asal_surat }} </h4>
                               <blockquote class="message">{{ $d->belongsToUndangan->perihal }}.</blockquote>
                               <br />
                               <p class="url">
                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                <a href="{{ url('distribusiUndangan') }}"><i class="fa fa-paperclip"></i> Lihat Detail </a>
                              </p>
                            </div>
                          </li>
                        </ul>
                        @endforeach
                        <!-- end Agenda Undangan -->

                      </div>
                      <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                        <!-- start Agenda Umum -->
                        @foreach($umum as $u)
                        <ul class="messages">
                         <li>
                          <label class="fa fa-tags"></label>
                          <div class="message_date">
                           <h3 class="date text-info"></h3>
                           <p class="month"></p>
                         </div>
                         <div class="message_wrapper">
                           <h4 class="heading">{{ $u->belongsToUmum->asal_surat }} </h4>
                           <blockquote class="message">{{ $u->belongsToUmum->perihal }}.</blockquote>
                           <br />
                           <p class="url">
                            <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                            <a href="{{ url('distribusiUndangan') }}"><i class="fa fa-paperclip"></i> Lihat Detail </a>
                          </p>
                        </div>
                      </li>
                    </ul>
                    @endforeach
                    <!-- end Agenda Umum -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection