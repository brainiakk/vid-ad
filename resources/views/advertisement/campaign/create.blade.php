@extends('advertisement.layout.app')
@section('title')
Create Campaign
@endsection
@section('content')
<form action="#" method="POST">
    @csrf
    <div class="row mb-2 pb-3">
        <div class="col-12">
            <a href="{{ url('advt-mgmt') }}"><button type="button" class="btn btn-info" data-toggle="modal"
                    data-target="#exampleModal"><i class="fas fa-arrow-left"></i> Back</button></a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <h5>Choose a campaign objective</h5>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label for="">Awareness</label>
                    <div class="form-group">
                        <input type="radio" name="awareness" value="brandAwareness" id="brandAwareness">
                        <label for="brandAwareness">Brand Awareness</label>
                    </div>
                    <div class="form-group">
                        <input type="radio" name="awareness" value="reach" id="reach">
                        <label for="reach">Reach</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="">Consideration</label>
                    <div class="form-group">
                        <input type="radio" name="consideration" id="traffic" value="traffic">
                        <label for="traffic">Traffic</label>
                    </div>
                    <div class="form-group">
                        <input type="radio" name="consideration" value="engagement" id="engagement">
                        <label for="engagement">Engagement</label>
                    </div>
                    <div class="form-group">
                        <input type="radio" name="consideration" value="appInstalls" id="appInstalls">
                        <label for="appInstalls">App Installs</label>
                    </div>
                    <div class="form-group">
                        <input type="radio" name="consideration" value="videoViews" id="videoViews">
                        <label for="videoViews">Video Views</label>
                    </div>
                    <div class="form-group">
                        <input type="radio" name="consideration" value="leadGeneration" id="leadGeneration">
                        <label for="leadGeneration">Lead Generation</label>
                    </div>
                    <div class="form-group">
                        <input type="radio" name="consideration" value="messages" id="messages">
                        <label for="messages">Messages</label>
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="">Conversion</label>
                    <div class="form-group">
                        <input type="radio" name="conversion" value="conversions" id="conversions">
                        <label for="conversions">Conversions</label>
                    </div>
                    <div class="form-group">
                        <input type="radio" name="conversion" value="catalogueSales" id="catalogueSales">
                        <label for="catalogueSales">Catalogue Sales</label>
                    </div>
                    <div class="form-group">
                        <input type="radio" name="conversion" value="storeTraffic" id="storeTraffic">
                        <label for="storeTraffic">Store Traffic</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h5>Choose a campaign objective</h5>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="adSetName">Ad set name</label>
                        <input type="text" class="form-control" name="adSetName" id="adSetName">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="page">Page</label>
                        <select name="page" id="page" class="form-control">
                            <option>---Select Page---</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="scheduleDate">Schedule Date</label>
                                <input type="date" class="form-control" name="scheduleDate" id="scheduleDate">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="scheduleTime">Schedule Time</label>
                                <input type="time" class="form-control" name="scheduleTime" id="scheduleTime">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <h5>Audience</h5>
            <br>
            <div class="form-group">
                <label for="customAudiences">Custom Audiences</label>
                <input type="text" class="form-control" name="customAudiences" id="customAudiences">
            </div>
            <div class="form-group">
                <label for="locations">Locations</label>
                <input type="text" class="form-control" name="locations" id="locations">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" class="form-control" name="age" id="age">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="1">Male</option>
                            <option value="0">Female</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-success btn-lg float-right">SAVE</button>
        </div>
    </div>
</form>
@endsection