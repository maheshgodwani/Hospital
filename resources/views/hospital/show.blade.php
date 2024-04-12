@extends('template.layout')

@section('content')
    <h1>Patients Details</h1>
    <h3>Name :</h3>
    <h5>{{($hospital->name)}}</h5>
    <h3>Disease :</h3>
    <h6>{{($hospital->disease)}}</h6>
    <h3>Medicines :</h3>
    <h6>{{($hospital->medicines)}}</h6>
@endsection