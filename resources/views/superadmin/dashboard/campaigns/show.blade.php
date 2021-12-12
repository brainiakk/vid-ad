@extends('layouts.dashboard')

@section('content')

   <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0">Campaign Details</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
              <li class="breadcrumb-item"><a href="{{ url('campaigns') }}" class="default-color">Campaigns</a></li>
              <li class="breadcrumb-item active">Campaign Details</li>
            </ol>
          </div>
        </div>
    </div>
    <!-- main body --> 
    <div class="row">   
      <div class="col-xl-12 mb-30">     
        <div class="card card-statistics h-100"> 
          <div class="card-body">
             <div class="row">
                 <div class="col-12 col-md-5">
                    @if($campaign->ad_format == 'Image')
                      <img src="{{ $campaign->ad_media }}" class="w-100 rounded">
                    @else
                      <video class="w-100 rounded" controls="">
                        <source src="{{ $campaign->ad_media }}" type="video/mp4">
                      </video>
                    @endif

                    <div class="row" style="margin-top: 100px">
                      <div class="col-md-6 text-center h1">Views</div>
                      <div class="col-md-6 text-center h1">{{ $campaign->views }}</div>
                    </div>
                 </div>
                  <div class="col-12 col-md-7">
                       <table class="table table-borderless">
                            <tbody>
                              <tr>
                                  <th>Campaign Name</th>
                                <td>{{ $campaign->name }}</td>
                              </tr>
                              <tr>
                                  <th>Campaign Objective</th>
                                <td>{{ $campaign->objective }}</td>
                              </tr> 
                             <tr>
                                  <th>Budget Type</th>
                                <td>{{ $campaign->budget_type }}</td>
                              </tr> 
                             <tr>
                                  <th>Budget</th>
                                <td>{{ $campaign->budget . ' USD' }}</td>
                              </tr>
                              <tr>
                                  <th>Location</th>
                                <td>{{ $campaign->location }}</td>
                              </tr>
                              <tr>
                                  <th>Gender</th>
                                <td>{{ $campaign->gender }}</td>
                              </tr>
                              <tr>
                                  <th>Age</th>
                                <td>{{ $campaign->age }}</td>
                              </tr>
                              <tr>
                                  <th>Scheduled On</th>
                                <td>{{ $campaign->schedule }}</td>
                              </tr>
                              <tr>
                                  <th>Start Time</th>
                                <td>{{ $campaign->start }}</td>
                              </tr>
                              <tr>
                                  <th>End Time</th>
                                <td>{{ $campaign->end }}</td>
                              </tr>
                              <tr>
                                  <th>Bid Strategy</th>
                                <td>{{ $campaign->bid_strategy }}</td>
                              </tr>
                              <tr>
                                  <th>Bid (USD/Conversion)</th>
                                <td>{{ $campaign->bid ?? 'N/A' }}</td>
                              </tr>
                              <tr>
                                  <th>Ad Name</th>
                                <td>{{ $campaign->ad_name }}</td>
                              </tr>
                              <tr>
                                  <th>Ad Placement</th>
                                <td>{{ $campaign->placement }}</td>
                              </tr>
                              <tr>
                                  <th>Ad Format</th>
                                <td>{{ $campaign->ad_format }}</td>
                              </tr>
                            </tbody>
                          </table>
                      </div>
                    </div>
              </div>
        </div>   
      </div>
  </div>

@endsection