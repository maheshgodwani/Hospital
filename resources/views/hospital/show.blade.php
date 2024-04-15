@extends('template.layout')

@section('content')
    <h1>Patients Details</h1>
    <h3>Name :</h3>
    <h5>{{($hospital->name)}}</h5>
    <h3>Mobile :</h3>
    <h6>{{($hospital->mobile)}}</h6>
    <h3>Disease :</h3>
    <h6>{{($hospital->disease)}}</h6>
    <h3>Medicines :</h3>
    <h6>{{($hospital->medicines)}}</h6>

    @php
        $i = 1;
    @endphp
    <ul>
        @forelse($hospital->getVisits as $visit)
            <li>
                <label for="">Visits {{$i++}}</label>
                <p>{{ $visit->med_diseases }}</p>
            </li>
            @empty
                <li>No More visits found</li>
        @endforelse
    </ul>

    <form action="{{ route('visit.store') }}" method="post">
        @csrf
        <input type="hidden" name="patients_id" value='{{ $hospital->id }}'>
        <div class="form-group">
            <label>Textarea</label>
            <textarea name="med_diseases" type="text" id= "editor" class="form-control"  placeholder="Enter All Medicines"  rows="3"></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
@endsection