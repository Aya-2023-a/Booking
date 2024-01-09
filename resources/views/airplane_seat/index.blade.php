@extends('dashboard') 
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Airplane's Seats</h5>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>NUMBER OF SEATS</th>
                                <th>TRAVEL CLASS</th>
                                <th>EDIT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($seats as $key=>$seat)
                            <tr>
                                <td>{{$seat->airplane->number_of_seat}}</td>
                                <td>{{$seat->travelClasses->name}}</td>
                                    <a href='{{("airplane_seat-edit/{$seat->id}")}}' class="btn btn-outline-primary btn-sm">Edit</a>
                                </td>
                            </tr>
                            @endforeach
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
        </div>
    </div>
@endsection
    