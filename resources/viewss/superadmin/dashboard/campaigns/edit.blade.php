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
                    <h4 class="mb-0"> Edit Campaign </h4>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="{{ route('campaigns.index') }}" class="default-color">Campaigns</a></li>
                    <li class="breadcrumb-item active">Edit Campaign </li>
                  </ol>
                </div>
              </div>
          </div>
          <!-- main body --> 
          <div class="row">   
            <div class="col-xl-12 mb-30">     
              <div class="card card-statistics h-100"> 
                <div class="card-body">
                <form action="@can('moderator') {{ route('moderator.campaigns.update', $campaign->id) }} @else {{ route('campaigns.update', $campaign->id) }} @endif" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="_method" value="PATCH">
                  @if ($errors->any())
                      <div class="form-group col-12 alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif

                    <div class="row">
                        <div class="col-12 col-md-6">
                              <div class="form-group">
                              <label for="name">Name</label>
                              <input class="form-control" id="name" name="name" value="{{ $campaign->name }}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="form-group">
                              <label for="objective">Objective</label>
                              <select class="form-control" id="objective" name="objective">
                                <option>Reach</option>
                                <option>Traffic</option>
                                <option>Conversions</option>
                              </select>
                            </div>
                        </div>
                          <div class="col-12 col-md-6">
                          <div class="form-group">
                              <label for="location">Location</label>
                              <select class="form-control" id="location" name="location">
                                <option>All</option>
                                <option>USA</option>
                                <option>Europe</option>
                                <option>Canada</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="form-group">
                              <label for="gender">Gender</label>
                              <select class="form-control" id="gender" name="gender">
                                <option>All</option>
                                <option>Male</option>
                                <option>Female</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="form-group">
                              <label for="age">Age</label>
                              <select class="form-control" id="age" name="age">
                                <option>All</option>
                                <option>13-17</option>
                                <option>18-24</option>
                                <option>25-34</option>
                                <option>35-44</option>
                                <option>45-54</option>
                                <option>55+</option>
                              </select>
                            </div>
                        </div>
                          <div class="col-12 col-md-6">
                          <div class="form-group">
                              <label for="budget-type">Budget Type</label>
                              <select class="form-control" id="budget-type" name="budget_type">
                                <option>Lifetime</option>
                                <option>Daily</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                              <div class="form-group">
                              <label for="budget">Budget (USD)</label>
                              <input type="number" class="form-control" id="budget" name="budget" value="{{ $campaign->budget }}">
                            </div>
                        </div>
                          <div class="col-12 col-md-6">
                          <div class="form-group">
                              <label for="bid-strategy">Bid Strategy</label>
                              <select class="form-control" id="bid-strategy" name="bid_strategy">
                                <option>Bid Cap</option>
                                <option>Lowest Cost</option>
                              </select>
                            </div>
                        </div>
                          <div class="col-12 col-md-6">
                          <div class="form-group">
                              <label for="bid">Bid (USD/Conversion)</label>
                              <input type="number" class="form-control" id="bid" name="bid" value="{{ $campaign->bid }}">
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                          <div class="form-group">
                              <label for="schedule">Campaign Starts </label>
                              <input type="date" class="form-control" id="schedule" name="schedule" value="{{ $campaign->schedule }}" required/>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                          <div class="form-group">
                              <label for="schedule_ends">Campaign Ends </label>
                              <input type="date" class="form-control" id="schedule_ends" name="schedule_ends" value="{{ $campaign->schedule_ends }}"/>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                          <div class="form-group">
                              <label for="start">Start Time</label>
                              <input type="time" class="form-control" id="start" name="start" value="{{ $campaign->start }}">
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                          <div class="form-group">
                              <label for="end">End Time</label>
                              <input type="time" class="form-control" id="end" name="end" value="{{ $campaign->end }}">
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                              <div class="form-group">
                              <label for="ad-name">Ad Name</label>
                              <input class="form-control" id="ad-name" name="ad_name" value="{{ $campaign->ad_name }}">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="form-group">
                              <label for="placement">Ad Placement</label>
                              <select class="form-control" id="placement" name="placement">
                                <option>Automatic</option>
                                <option>Top</option>
                                <option>Bottom</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                          <div class="form-group">
                              <label for="ad-format">Ad Format</label>
                              <select class="form-control" id="ad-format" name="ad_format">
                                <option>Image</option>
                                <option>Video</option>
                              </select>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                              <div class="form-group">
                              <label for="ad-media">Ad Media</label>
                              <input type="file" class="form-control" id="ad-media" name="ad_media" value="{{ $campaign->ad_media }}">
                            </div>
                        </div>
                        <div class="text-center mx-auto">
                            <button class="btn btn-primary px-5 py-3 mt-4">Save</button>
                        </div>
                    </div>
                </form>
                </div>
              </div>   
            </div>
        </div>
        </div>
    </div>
@endsection

@section('scripts')

<script type="text/javascript">

    var campaign = {
        objective: '{{ $campaign->objective }}',
        placement: '{{ $campaign->placement }}',
        location: '{{ $campaign->location }}',
        gender: '{{ $campaign->gender }}',
        age: '{{ $campaign->age }}',
        budget_type: '{{ $campaign->budget_type }}',
        bid_strategy: '{{ $campaign->bid_strategy }}',
        ad_format: '{{ $campaign->ad_format }}'
    };
    
    $(document).ready(function () {

        $('select').each(function(){

            let select = $(this);
            let value = campaign[select.attr('name')];

            select.find('option').each(function(el){

                let option = $(this);

                if (option.text() == value) {
                    option.attr('selected', '');
                }
            });
        });
    });

</script>

@endsection