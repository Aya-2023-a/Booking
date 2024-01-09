@extends('dashboard') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Edit Country</h5>
        </div>
        <div class="card-body">
            <form role="form" method="POST" action='{{ url("country-update/{$country->id}")}}' enctype="multipart/form-data">
                 @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="floating-label" for="country">Country</label>
                            <input type="text" class="form-control" id="country" name="name" value="{{$country->name}}" aria-describedby="emailHelp" placeholder="Country">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="floating-label" for="code">Country Code</label>
                            <input type="text" class="form-control" id="code" name="country_code" value="{{$country->country_code}}" placeholder="Country Code">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn  btn-primary">Edit</button>
                    </div>
                    @if(session('success'))
                        <div class="form-group col-md-12" style="text-align: center; margin-top: 10px;">
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                <strong>{!! session('success')!!}</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            </div>
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection
    