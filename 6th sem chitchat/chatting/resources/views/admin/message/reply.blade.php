@extends('layouts.admin.master')



@section('content')
<div class="col-md-7 order-md-last d-flex">
<form  method="post" action="{{route('admin.message.store')}}" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Your Name">
              </div>
              
              
              <div class="form-group">
                <textarea id="" cols="30" rows="7" class="form-control" name="message" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              
               {{ csrf_field() }}
               </div>
            </form>
  </div>
 @endsection