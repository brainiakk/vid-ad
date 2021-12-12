@extends('superadmin.layouts.dashboard')

@section('content')

  <div class="page-title">
      <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0">Campaigns</h4>
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
                    <th>Status</th>
                    <th>Start Date</th>
                    <th>End Date</th>
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
                    <td><span class="badge @if($campaign->status == "Active") badge-success @elseif($campaign->status == "Pending") badge-warning @else badge-danger @endif">{{ $campaign->status }}</span> 
                      @if($campaign->status == "Rejected") <a href="#" data-toggle="tooltip" data-placement="bottom" title="{{ $campaign->reject_reason }}"  class="text-danger"><i class="fa fa-question-circle"></i> </a>@endif
                    </td>
                    <td>{{ $campaign->schedule->format('dS M, Y') }}</td>
                    <td>{{ $campaign->schedule_ends->format('dS M, Y') }}</td>
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
                          @can('moderator')
                          
                          @if ($campaign->status == 'Active')
                              <a class="dropdown-item" href="{{ route('moderator.campaigns.deactivate', $campaign->id) }}">Deactivate</a>
                          @else
                              <a class="dropdown-item" href="{{ route('moderator.campaigns.activate', $campaign->id) }}">Activate</a>
                          @endif
                          @if ($campaign->status != 'Rejected')
                          <!-- Modal -->
                            @push('reject-ad')
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Reason for rejection</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <form action="{{ route('moderator.campaigns.reject', $campaign->id) }}" id="reject-form{{$campaign->id}}" method="POST">
                                      @csrf
                                    <textarea class="form-control" name="reason" placeholder="Reason for campaign rejection" cols="30" rows="10"></textarea>
                                    </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger" onclick="document.getElementById('reject-form{{$campaign->id}}').submit();">Reject Ad</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endpush
                          @endif
                          <a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter" href="#">Reject</a>
                          @endcan
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
                <p class="text-center">No campaigns found</p>
              @endif
            </div>
          </div>
        </div>   
      </div>
  </div>

@endsection