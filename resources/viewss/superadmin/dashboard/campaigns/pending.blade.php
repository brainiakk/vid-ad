@extends('layouts.dashboard')
@section('css-files')
    <link rel="stylesheet" href="{{asset('new/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('new/css/style.default.css')}}">
@endsection
@section('content')
    <div class="col-sm-9 adminContent">
        <div class="page-content">
          <div class="page-title">
              <div class="row">
                  <div class="col-sm-6">
                      <h4 class="mb-0">Pending Campaigns</h4>
                  </div>
                  <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                      <li class="breadcrumb-item"><a href="/" class="default-color">Home</a></li>
                      <li class="breadcrumb-item active">Campaigns</li>
                    </ol>
                  </div>
                </div>
            </div>
            <div class="row">   
              <div class="col-xl-12 mb-30">     
                <div class="card card-statistics h-100"> 
                  <div class="card-body">
                  <div class="d-block d-md-flex justify-content-between align-items-center">
                      <div class="d-block">
                      <a class="btn btn-primary" href="{{ route('campaigns.create') }}"><i class="ti-plus mr-1"></i>Create New </a>
                      </div>
                    </div>
                    <div class="table-responsive mt-15">
                      @if($campaigns->count())
                      <table class="table center-aligned-table mb-0">
                        <thead>
                          <tr class="text-dark">
                            <th>Name</th>
                            <th>Objective</th>
                            <th>Budget Type</th>
                            <th>Budget</th>
                            <th>Location</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Schedule</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Bid Strategy</th>
                            <th>Bid</th>
                            <th>Ad Name</th>
                            <th>Ad Placement</th>
                            <th>Ad Format</th>
                            <th>Ad Media</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($campaigns as $campaign)
                          <tr>
                            <td>{{ $campaign->name }}</td>
                            <td>{{ $campaign->objective }}</td>
                            <td>{{ $campaign->budget_type }}</td>
                            <td>{{ $campaign->budget . ' USD' }}</td>
                            <td>{{ $campaign->location }}</td>
                            <td>{{ $campaign->gender }}</td>
                            <td>{{ $campaign->age }}</td>
                            <td>{{ $campaign->schedule }}</td>
                            <td>{{ $campaign->start }}</td>
                            <td>{{ $campaign->end }}</td>
                            <td>{{ $campaign->bid_strategy }}</td>
                            <td>{{ $campaign->bid ?? 'N/A' }}</td>
                            <td>{{ $campaign->ad_name }}</td>
                            <td>{{ $campaign->placement }}</td>
                            <td>{{ $campaign->ad_format }}</td>
                            @if($campaign->ad_format == 'Image')
                              <td><img src="{{ $campaign->ad_media }}" width="60"></td>
                            @else
                              <td><video width="100%"><source src="{{ $campaign->ad_media }}" type="video/mp4"></video></td>
                            @endif
                            <td>
                              <div class="dropdown">
                                <button class="btn " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="ti-menu-alt"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    @if ($campaign->status == 'Active')
                                        <a class="dropdown-item" href="{{ route('campaigns.deactivate', $campaign->id) }}">Deactivate</a>
                                    @else
                                        <a class="dropdown-item" href="{{ route('campaigns.activate', $campaign->id) }}">Activate</a>
                                    @endif
                                  <a class="dropdown-item" href="{{ route('campaigns.edit', $campaign->id) }}">Edit</a>
                                  <a class="dropdown-item" href="{{ route('campaigns.show', $campaign->id) }}">Show</a>
                                  <a class="dropdown-item logout-btn" href="#">Delete </a>
                                  <form action="{{ route('campaigns.destroy', $campaign->id) }}" method="POST">
                                      @csrf
                                      <input type="hidden" name="_method" value="DELETE">
                                  </form>
                                </div>
                              </div>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                      @else
                        <p class="text-center">No pending campaigns found</p>
                      @endif
                    </div>
                  </div>
                </div>   
              </div>
          </div>
        </div>
    </div>
@endsection