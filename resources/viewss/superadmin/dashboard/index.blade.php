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
          <h4 class="mb-0"> Dashboard</h4>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
          <li class="breadcrumb-item"><a href="/" class="default-color">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>
  </div>
@can('moderator')
  <div class="container">
    <div class="row">
    <div class="col-md-3">
      <div class="card-counter primary">
        <i class="fa fa-eye"></i>
        <span class="count-numbers">{{  $impressions }}</span>
        <span class="count-name">Impressions </span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter success">
        <i class="fa fa-bullhorn"></i>
        <span class="count-numbers">{{  $campaigns }}</span>
        <span class="count-name">Campaigns</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter danger">
        <i class="fa fa-hourglass-half"></i>
        <span class="count-numbers">{{ $pending_campaigns }}</span>
        <span class="count-name">Pending Campaigns</span>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card-counter info">
        <i class="fa fa-credit-card"></i>
        <span class="count-numbers">${{ round($spent, 2) }}</span>
        <span class="count-name">Total Income</span>
      </div>
    </div>
  </div>
@else
<div class="container">
  <div class="row">
  <div class="col-md-3">
    <div class="card-counter primary">
      <i class="fa fa-eye"></i>
      <span class="count-numbers">{{ $impressions }}</span>
      <span class="count-name">Impressions</span>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card-counter success">
      <i class="fa fa-bullhorn"></i>
      <span class="count-numbers">{{  $campaigns }}</span>
      <span class="count-name">Campaigns</span>
    </div>
  </div>

  <div class="col-md-3">
    <div class="card-counter danger">
      <i class="fa fa-hourglass-half"></i>
      <span class="count-numbers">{{ $pending_campaigns }}</span>
      <span class="count-name">Pending Campaigns</span>
    </div>
  </div>


  <div class="col-md-3">
    <div class="card-counter info">
      <i class="fa fa-credit-card"></i>
      <span class="count-numbers">${{ round($spent, 2) }}</span>
      <span class="count-name">Total Spent</span>
    </div>
  </div>
</div>
@endcan
</div>
</div>
</div>
@endsection