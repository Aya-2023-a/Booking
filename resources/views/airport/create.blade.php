@extends('dashboard') 
@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Add AirPort</h5>
        </div>
        <div class="card-body">
            <form role="form" method="POST" action='{{ url("airport-store")}}' enctype="multipart/form-data">
                 @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group @error('name') input-was-validated @enderror">
                            <label class="floating-label" for="name">Airport</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Airport Name" value="{{ old('name') }}">
                            @error('name')
                            <div>{{ $errors->first('name') }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group @error('airport_code') input-was-validated @enderror">
                            <label class="floating-label" for="code">Airport Code</label>
                            <input type="text" class="form-control" id="code" name="airport_code" placeholder="Airport Code" value="{{ old('airport_code') }}">
                            @error('airport_code')
                            <div>{{ $errors->first('airport_code') }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group col-md-6 @error('country_id') input-was-validated @enderror">
                        <label for="inputCountry">Country</label>
                        <input list="countries" name="country_name" id="inputCountry" class="form-control" value="{{ old('country_name') }}" autocomplete="off" placeholder="Select Country">
                            <datalist id="countries">
                                @foreach ($countries as $country)
                                    <option value="{{ $country->name }}" data-country-id="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </datalist>
                            @error('country_id')
                            <div>{{ $errors->first('country_id') }}</div>
                            @enderror
                    </div>
                     <!-- Input Hidden for Country ID -->
                     <input type="hidden" name="country_id" id="countryIdInput" value="{{ old('country_id') }}">
                       
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <select id="inputCity" class="form-control" name="city_id">
                            <option selected="">Select City</option>
                            @foreach ($cities as $key=>$city )
                                <option @if(old('city_id')== $city->id) selected @endif value="{{$city->city_id}}">{{$city->name}}</option>
                            @endforeach
                        </select>    
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn  btn-primary">Add</button>
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