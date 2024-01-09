@extends('dashboard') 
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Show City</h5>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>COUNTRY</th>
                                <th>CITY</th>
                                <th>EDIT</th>
                                <th>DIELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cities as $key=>$city)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$city->country->name}}</td>
                                <td>{{$city->name}}</td>
                                <td>
                                    <a href='{{url("city-edit/{$city->id}")}}' class="btn btn-outline-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <form method="post" action='{{url("city-destroy/$city->id")}}'>
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
    