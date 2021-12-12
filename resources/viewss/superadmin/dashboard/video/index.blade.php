@extends('superadmin.layouts.dashboard')

@section('content')

<div class="page-title">
  <div class="row">
    <div class="col-sm-6">
        <h4 class="mb-0"> Video Platform</h4>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
        <li class="breadcrumb-item"><a href="/" class="default-color">Home</a></li>
        <li class="breadcrumb-item active">Video Platform</li>
      </ol>
    </div>
  </div>
</div>
<div class="row">   
    <div class="col-xl-12 mb-30">     
      <div class="card card-statistics h-100"> 
        <div class="card-body">
         <div class="d-block d-md-flex justify-content-between align-items-center">
            <video controls="" width="100%" id="video">
              <source src="{{ asset('assets/videos/sample.mp4') }}" type="video/mp4">
            </video>
        </div>
      </div>   
    </div>
</div>
  
@endsection

@section('scripts')
  <script type="text/javascript">
    
    $(document).ready(function () {

      let video = $('#video');
      let ad = 'tbp';
      
      video.on('play', function() {

        if (ad == 'tbp') {
          $.ajax({
              url: 'play-ad',
              type: 'GET',

              success: function (src) {
                if (src) {
                  video[0].src = src;
                  video[0].load();
                  video.removeAttr('controls');
                  video[0].play();
                  ad = 'played';
                }
              }
          });
        }
      });

      video[0].onended = function () {
        
        if (ad == 'played') {
          video[0].src = 'assets/videos/sample.mp4';
          video[0].load();
          video.attr('controls', '');
          video[0].play();
        }
      };
    });

  </script>
@endsection