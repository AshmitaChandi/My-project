@extends('layouts.admin.master')

@section('content')

    <div class="card">

        <form method="post" action="{{ route('admin.package.add.submit') }}" class="form-horizontal" role="form" enctype="multipart/form-data">
            <div class="card-header">
                <h2>Packages</h2>
                <small>Add a package.</small>
            </div>

            <div class="card-body card-padding">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10" style="margin-left: 147px;">
                        <div class="fg-line">
                            <input name="name" type="text" class="form-control input-sm" id="inputEmail3" placeholder="Name">
                        </div>
                    </div>

                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Package</label>
                    <div class="col-sm-10" style="margin-left: 147px;">
                        <div class="fg-line">
                            <input name="image" type="file" class="form-control1 input-sm" id="inputEmail3">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10" style="margin-left: 147px;" >
                        <button type="submit" class="btn btn-primary btn-sm-sub" style="    margin-bottom: -49px;
                            margin-left: -50px;">Submit</button>
                    </div>
                </div>
            </div>
            {{ csrf_field() }}
        </form>
    </div>


@endsection