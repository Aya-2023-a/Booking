@extends('dashboard') 
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Show Direction</h5>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>From Airport</th>
                                <th>To Airport</th>
                                <th>EDIT</th>
                                <th>DIELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($directions as $key=>$direction)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$direction->originAirport->name}}</td>
                                <td>{{$direction->destinationAirport->name}}</td>
                                <td>
                                    <a href='{{("direction-edit/{$direction->id}")}}' class="btn btn-outline-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form method="post" action='{{url("direction-destroy/$direction->id")}}'>
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
    