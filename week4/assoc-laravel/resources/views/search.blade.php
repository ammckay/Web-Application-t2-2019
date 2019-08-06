@extends('layout.master')

@section('title')
  Result
@endsection
  
@section('content') 

  Searched for: {{$name}} {{$year}} {{$state}}

<h2>Australian Prime Ministers</h2>
<h3>Results</h3>


<table class="bordered">
<thead>
<tr><th>No.</th><th>Name</th><th>From</th><th>To</th><th>Duration</th><th>Party</th><th>State</th></tr>
</thead>
<tbody>

@foreach($pms as $pm)
  @if (count($pm) == 0)
  <p>No results found.</p>
  @else
  <tr><td>{{$pm['index']}}</td><td>{{$pm['name']}}</td><td>{{$pm['from']}}</td><td>{{$pm['to']}}</td><td>{{$pm['duration']}}</td><td>{{$pm['party']}}</td><td>{{$pm['state']}}</td></tr>
  @endif
@endforeach

</tbody>
</table>


<p><a href="searchForm.blade.php">New search</a></p>

<hr>

@endsection