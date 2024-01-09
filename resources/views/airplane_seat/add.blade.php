@extends('dashboard') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Add airplane's seats details for airplane: {{$airplane->model}} from airline: {{$airplane->airline->name}} where number of seat is {{$airplane->number_of_seat}} </h5>
        </div>
        <div class="card-body">
            <form role="form" method="POST" action='{{ url("airplane_seat-store")}}' enctype="multipart/form-data">
                 @csrf
                <div class="row">
                    {{-- <div class="col-lg-6">
                        <div class="form-group">
                            <label class="floating-label" for="airline">Airplane's Seat From</label>
                            <select class="form-control" id="airline" name="number_of_seat">
                                <option>Select Airplane's Seat First Number</option>
                                {{ $num = $airplane->number_of_seat }}
                                <option value="">{{$num}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="floating-label" for="airline">Airplane's Seat To</label>
                            <select class="form-control" id="airline" name="number_of_seat">
                                <option>Select Airplane's Seat Last Number</option>
                                {{ $num = $airplane->number_of_seat }}
                                <option value="">{{$num}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="floating-label" for="airline">Travel Class</label>
                            <select class="form-control" id="airline" name="airline_id">
                                <option>Select Travel Class</option>
                                <option>Business Class</option>
                                <option>First class</option>                                
                            </select>
                        </div>
                    </div>
                     --}}
                    
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>SEAT</th>
                                        <th>TRAVEL CLASS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i = 1; $i < '{{$airplane->number_of_seat}}'; $i++)                                   
                                    <tr>
                                        <td>{{$i}}</td>
                                        <td>
                                            <select class="form-control" name="travel_class_id">                           
                                                <option value=""></option>
                                            </select>
                                        </td>
                                    </tr>
                                    @endfor
                                    @if(session('success'))
                                        <div class="form-group col-md-12" style="text-align: center; margin-top: 10px;">
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                <strong>{!! session('success')!!}</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                            </div>
                                        </div>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn  btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
    