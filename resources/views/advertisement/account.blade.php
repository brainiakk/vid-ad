@extends('advertisement.layout.app')
@section('title')
Create Campaign
@endsection
@section('content')
<form action="#" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <h5>Business Information</h5>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="businessName">Business Name</label>
                        <input type="text" class="form-control" name="businessName" id="businessName">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="companyWebsite">Company Website</label>
                        <input type="text" class="form-control" name="companyWebsite" id="companyWebsite">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="streetAddress">Street Address</label>
                <input type="text" class="form-control" name="streetAddress" id="streetAddress">
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" class="form-control" name="state" id="state">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="postalCode">Postal Code</label>
                        <input type="text" class="form-control" name="postalCode" id="postalCode">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="businessVerification">Business Verification</label>
                <input type="text" class="form-control" name="businessVerification" id="businessVerification">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <button class="btn btn-success btn-lg float-right">SAVE</button>
        </div>
    </div>
</form>
@endsection