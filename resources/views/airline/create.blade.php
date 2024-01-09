@extends('dashboard') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Add Airline</h5>
        </div>
        <div class="card-body">
            <form role="form" method="POST" action='{{ url("airline-store")}}' enctype="multipart/form-data">
                 @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="floating-label" for="airline">Airline</label>
                            <input type="text" class="form-control" id="airline" name="name" aria-describedby="emailHelp" placeholder="Airline Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="floating-label" for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Airline Code">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="floating-label" for="website">Website</label>
                            <input type="text" class="form-control" id="website" name="website" aria-describedby="emailHelp" placeholder="Website">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="floating-label" for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn  btn-primary">Add</button>
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
    