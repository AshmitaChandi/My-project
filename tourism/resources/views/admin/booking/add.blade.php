@extends('layouts.admin.master')

@section('content')

    <div class="card">

        <form method="post" action="{{ route('admin.booking.add.submit') }}" class="form-horizontal" role="form" enctype="multipart/form-data">
            <div class="card-header">
                <h2>Booking Details</h2>
            </div>

            <div class="card-body card-padding">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <div class="fg-line">
                            <input name="name" type="text" class="form-control input-sm" id="inputEmail3" placeholder="Name">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Category_id</label>
                    <div class="col-sm-10">
                        <div class="fg-line">
                            <input name="name" type="text" class="form-control input-sm" id="inputEmail3" placeholder="Category_id">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Phone_no</label>
                    <div class="col-sm-10">
                        <div class="fg-line">
                            <input name="name" type="text" class="form-control input-sm" id="inputEmail3" placeholder="Phone_no">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-10">
                        <div class="fg-line">
                            <input name="image" type="file" class="form-control1 input-sm" id="inputEmail3">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary btn-sm-sub" style="    margin-bottom: -49px;
                            margin-left: -50px;">Book</button>
                    </div>
                </div>
            </div>
            {{ csrf_field() }}
        </form>
    </div>


@endsection