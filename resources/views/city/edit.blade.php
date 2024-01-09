@extends('dashboard') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Edit City</h5>
        </div>
        <div class="card-body">
            <form role="form" method="POST" action='{{ url("city-update/{$city->id}")}}' enctype="multipart/form-data">
                 @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="inputCountry">Country</label>
                            <input list="countries" name="country_id" id="inputCountry" class="form-control" autocomplete="off" placeholder="Select Country">
                            <datalist id="countries">
                                @foreach ($countries as $country)
                                    <option  @if($country->id == $city->country_id) selected @endif value="{{ $country->id }}"  >{{ $country->name }}</option>
                                @endforeach
                            </datalist>
                            {{-- <select id="inputCountry" class="form-control" name="country_id">
                                @foreach ($countries as $key=>$country )
                                    <option value="{{$country->id}}" @if($country->id == $city->country_id) selected @endif>{{$country->name}}</option>
                                @endforeach
                            </select> --}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="floating-label" for="city">City</label>
                            <input type="text" class="form-control" id="city" name="name" value="{{$city->name}}" placeholder="City">
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
    