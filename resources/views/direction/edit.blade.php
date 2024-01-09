@extends('dashboard') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Edit Direction From Airport To Airport</h5>
        </div>
        <div class="card-body">
            <form role="form" method="POST" action='{{ url("direction-update/{$direction->id}")}}' enctype="multipart/form-data">
                 @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="floating-label" for="from">From Airport</label>
                            <select class="form-control" id="from" name="origin_airport_code">
                                <option>Select Airport</option>
                                @foreach ($airports as $airport) 
                                    <option @if($airport->airport_code == $direction->origin_airport_code) selected @endif value="{{$airport->airport_code}}">{{$airport->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="floating-label" for="to">To AirPort</label>
                            <select class="form-control" id="to" name="destination_airport_code">
                                <option>Select Airport</option>
                                @foreach ($airports as $airport) 
                                <option @if($airport->airport_code == $direction->destination_airport_code) selected @endif value="{{$airport->airport_code}}">{{$airport->name}}</option>
                            @endforeach
                            </select>
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
    