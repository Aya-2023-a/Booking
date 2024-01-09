@extends('dashboard') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Edit AirPort</h5>
        </div>
        <div class="card-body">
            <form role="form" method="POST" action='{{ url("airport-update/{$airport->id}")}}' enctype="multipart/form-data">
                 @csrf
                 {{method_field('PATCH')}}
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group @error('name') input-was-validated @enderror">
                            <label class="floating-label" for="name">Airport</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$airport->name}}" aria-describedby="emailHelp" placeholder="Airport Name">
                            @error('name')
                            <div>{{ $errors->first('name') }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group @error('airport_code') input-was-validated @enderror">
                            <label class="floating-label" for="code">Airport Code</label>
                            <input type="text" class="form-control" id="code" name="airport_code" value="{{$airport->airport_code}}" placeholder="Airport Code">
                            @error('airport_code')
                            <div>{{ $errors->first('airport_code') }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-6 @error('country_id') input-was-validated @enderror">
                        <label for="inputCountry">Country</label>
                        <input list="countries" name="country_name" id="inputCountry" class="form-control" value="{{ $airport->city->country->name }}" autocomplete="off" placeholder="Select Country">
                            <datalist id="countries">
                                @foreach ($countries as $country)
                                    <option value="{{ $country->name }}"   data-country-id="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </datalist>
                            @error('country_id')
                            <div>{{ $errors->first('country_id') }}</div>
                            @enderror
                    </div>
                    <!-- Input Hidden for Country ID -->
                    <input type="hidden" name="country_id" id="countryIdInput" value="{{ $airport->city->country_id }}">
                    
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <select id="inputCity" class="form-control" name="city_id">
                            <option selected="">select City</option>
                            @foreach ($cities as $key=>$city )
                                <option value="{{$city->id}}" @if($city->id == $airport->city_id) selected @endif>{{$city->name}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn  btn-primary">Edit</button>
                    </div>
                    @if(session()->has('success'))
                        <div class="row">
                            <div class="alert alert-success  fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>
                                <strong>{{session()->get('success')}}</strong>
                            </div>
                        </div>
                    @endif        
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('#inputCountry').on('change', function(){
                var countryId;
                var selectedOption = $('datalist#countries option[value="' + $(this).val() + '"]');
                if (selectedOption.length > 0) {
                    countryId = selectedOption.data('country-id');
                    $('#countryIdInput').val(countryId);
                }
                if(countryId){
                    $.ajax({
                        url: '/getCities/'+countryId, // استبدل هذا بالمسار الصحيح لطرح الطلب إلى الخادم
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            if(data.length > 0){ // تحقق من وجود بيانات
                                $('#inputCity').empty();
                                $.each(data, function(key, value){
                                    $('#inputCity').append('<option value="'+value.id+'">'+value.name+'</option>');
                                });
                            }
                            else{
                                $('#inputCity').empty();
                                $('#inputCity').append('<option value="">No cities</option>');
                            }
                        }
                    });
                } else {
                    $('#inputCity').empty();
                }
            });
        });
    </script>
@endsection