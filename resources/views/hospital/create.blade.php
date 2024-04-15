@extends('template.layout')

@section('content')
    <h1>Add Patients Information Here....</h1>
<form action="{{route('hospital.store')}} " method="post">
    @csrf  
    <div class="form-group">
        <label>patient Name</label>
        <input name="name" type="text" class="form-control"  placeholder="Enter Patient Name ">
        @error('name')
        <small  class="form-text text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label >Mobile</label>
        <input name="mobile" type="number" class="form-control"  placeholder="Enter Patient Mobile Number">
        @error('mobile')
        <small id="emailHelp" class="form-text  text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label>Diesease</label>
        <textarea name="disease" type="text" class="form-control"  placeholder="Enter All Sorts of Disease"  rows="3"></textarea>
        @error('disease')
        <small id="emailHelp" class="form-text  text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        <label>Medicines</label>
        <textarea name="medicines" type="text" id= "editor" class="form-control"  placeholder="Enter All Medicines"  rows="3"></textarea>
        @error('medicines')
        <small id="emailHelp" class="form-text  text-danger">{{$message}}</small>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection