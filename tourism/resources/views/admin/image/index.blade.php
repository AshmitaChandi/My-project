@extends('layouts.admin.master')



@section('content')


                    <div class="card">
                        <div class="card-header">
                        <h2>Images</h2>
                        <a href="{{route('admin.image.add')}}" class="btn btn-primary pull-right cat" style="margin-left: 797px;">Add Images</a>
                        </div>
                        </div>
                        <div class="row">
                            @foreach($image as $item)
                          <div class="col-xl-3 col-sm-6 mb-3">
                                                                       @if($item->image != NULL)
                                            <img src="{{ asset('uploads/image_images/'. $item->image) }}" style="height:100%; width: 100%;">
                                            @endif
                            </div>
                            @endforeach
                          </div>
          <!-- <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5">11 New Tasks!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">123 New Orders!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-life-ring"></i>
                </div>
                <div class="mr-5">13 New Tickets!</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div> -->
<!--                         @foreach($image as $item)
                                    <tr>
                                        <td>{{ $loop->iteration}}</td>
                                        <td>{{ $item->name}}</td>
                                        <td>
                                            @if($item->image != NULL)
                                            <img src="{{ asset('uploads/image_images/'. $item->image) }}" style="height:100%; width: 100%;">
                                            @endif
                                        </td>
                                        <!-- <td>{{ $item->is_active}}</td> -->
                                        <!-- <td>
                                            <a href="{{route('admin.image.delete)"></a>
                                        </td>
                                        
                                    </tr> -->
                                    <!-- @endforeach -->
                                    </div>
                    </div>
                    


@endsection