@extends('dashboard') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Edit Airplane's Seat</h5>
        </div>
        <div class="card-body">
            <form role="form" method="POST" action='{{ url("airplane_seat-update/{$airplane->id}")}}' enctype="multipart/form-data">
                 @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="floating-label" for="number_of_seat">Airplane Seat Number</label>
                            <input type="text" class="form-control" id="number_of_seat" name="number_of_seat" value="{{$airplane->number_of_seat}}" placeholder="Airplane Seat Number">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="floating-label" for="travel_class">Travel Class</label>
                            <select class="form-control" id="travel_class" name="travel_class_id">                           
                                <option value="{{$airline->id}}" @if($airplane->id == $airplane->airline_id) selected @endif>{{$airline->name}}</option>
                            </select>
                        </div>
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
                <div class="col-lg-6">
                    <button type="submit" class="btn  btn-primary">Edit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
    