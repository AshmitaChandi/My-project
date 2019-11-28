@extends('layouts.admin.master')



@section('content')
    

		<div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100" style="background-color: #007bff !important">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">Friends!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" style="color: white;"href="">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100" style="background-color: #ffc107 !important; text-align: white">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5" style="color: white;">Messages!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" style="color: white;"href="">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3" style="    margin-top: 37px;">
            <div class="card text-white bg-success o-hidden h-100" style="background-color:  #28a745 !important; ">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5" style="color: white;">Photos!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" style="color: white;" href="">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>


   @endsection
          