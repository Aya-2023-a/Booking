@extends('dashboard') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Add Airplane</h5>
        </div>
        <div class="card-body">
            <form role="form" method="POST" action='{{ url("airplane-store")}}' enctype="multipart/form-data">
                 @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="floating-label" for="airline">Airline</label>
                            <select class="form-control" id="airline" name="airline_id">
                                <option>Select Airline</option>
                                @foreach ($airlines as $airline)
                                    <option value="{{$airline->id}}">{{$airline->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="floating-label" for="model">Airplane</label>
                            <input type="text" class="form-control" id="model" name="model" placeholder="Airplane model">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="floating-label" for="num">Number Of Seat</label>
                            <input type="text" class="form-control" id="num" name="number_of_seat" placeholder="Number of seat">
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
                <div class="col-md-6">
                    <button type="submit" class="btn  btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
    