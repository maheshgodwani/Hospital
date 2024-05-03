@extends('template.layout')

@section('content')
<h1>Index Page......</h1>

@guest
    <h4>Welcome guest</h4>
@endguest

@auth
    <h4>Welcome {{ Auth::user()->name }}</h4>
@endauth

<table class="table table-success table-hover table-striped table-bordered">
    <thead>
        <tr scope="col">
            <th>ID</th>
            <th>Patients Name</th>
            @auth
            <th>Edit</th>
            <th>Delete</th>
            @endauth
        </tr>
    </thead>
    <tbody>
        @forelse($patients as $patient)
            <tr>
                <td>{{($patient->id)}}</td>
                <td><a href="{{ route('hospital.show', $patient->slug) }}">{{($patient->name)}}</a></td>
                @auth
                <td>
                    <a href="{{ route('hospital.edit', $patient->slug) }}" class="btn btn-warning">Edit</a> 
                </td>
                <td>
                    <form action="{{ route('hospital.destroy', $patient->slug) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Trace">
                    </form>
                </td>
                @endauth
            </tr>
            @empty
            <tr><td>NO Data Available.</td></tr>
        @endforelse
    </tbody>
</table>
{{ $patients->links() }}
@endsection