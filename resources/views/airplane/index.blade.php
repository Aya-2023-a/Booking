@extends('dashboard') 
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Show Airplane</h5>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>AIRPLANE</th>
                                <th>AIRLINE</th>
                                <th>NUMBER OF SEATS</th>
                                <th>SHOW SEATS DETAILS</th>
                                <th>ADD SEATS DETAILS</th>
                                <th>EDIT</th>
                                <th>DIELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($airplanes as $key=>$airplane)
                            <tr>
                                <td>{{$key}}</td>
                                <td>{{$airplane->model}}</td>
                                <td>{{$airplane->airline->name}}</td>
                                <td>{{$airplane->number_of_seat}}</td>
                                <td>
                                    <a href='{{("airplane_seat-index/{$airplane->id}")}}' class="btn btn-outline-info btn-sm">Show seats details</a>
                                </td>
                                <td>
                                    <a href='{{("airplane_seat-add/{$airplane->id}")}}' class="btn btn-outline-info btn-sm">Add seats details</a>
                                </td>
                                <td>
                                    <a href='{{("airplane-edit/{$airplane->id}")}}' class="btn btn-outline-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form method="post" action='{{url("airplane-destroy/$airplane->id")}}'>
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                    </form>
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
    