@extends('layout.default')

@section('content')
<div class="row top_tiles">
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
        <div class="icon"><i class="fa fa-check-square-o"></i></div>
        <div class="count">{{ $totalStd }}</div>
        <h3>Total Students</h3>
        <p>Lorem ipsum psdea itgum rixt.</p>
    </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
        <div class="icon"><i class="fa fa-sort-amount-asc"></i></div>
        <div class="count">{{ $c }}</div>
        <h3>Total courses</h3>
        <p>Lorem ipsum psdea itgum rixt.</p>
    </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
        <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
        <div class="count">{{ $eight }}</div>
        <h3>Students in class 8</h3>
        <p>Lorem ipsum psdea itgum rixt.</p>
    </div>
    </div>
    
</div>
<div class="row top_tiles">
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
        <div class="icon"><i class="fa fa-check-square-o"></i></div>
        <div class="count">{{ $nine }}</div>
        <h3>Students in class 9</h3>
        <p>Lorem ipsum psdea itgum rixt.</p>
    </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
        <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
        <div class="count">{{ $ten }}</div>
        <h3>students in class 10</h3>
        <p>Lorem ipsum psdea itgum rixt.</p>
    </div>
    </div>
    
</div>
  

@endsection