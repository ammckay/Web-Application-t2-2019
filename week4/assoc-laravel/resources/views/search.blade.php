<!-- display results -->
<!DOCTYPE html>
<!-- Results page of associative array search example. -->
<html>
<head>
    <title>Associative array search results page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/wp.css">
</head>

<body>
<h2>Australian Prime Ministers</h2>
<h3>Results</h3>

<?php 
if (count($pms) == 0) {
?>
<p>No results found.</p>
<?php
} else {
?>


<table class="bordered">
<thead>
<tr><th>No.</th><th>Name</th><th>From</th><th>To</th><th>Duration</th><th>Party</th><th>State</th></tr>
</thead>
<tbody>

@foreach($pms as $pm)
  <tr><td>{{$pm['index']}}</td><td>{{$pm['name']}}</td><td>{{$pm['from']}}</td><td>{{$pm['to']}}</td><td>{{$pm['duration']}}</td><td>{{$pm['party']}}</td><td>{{$pm['state']}}</td></tr>

@endforeach

</tbody>
</table>
<?php
}
?>

<p><a href="index.html">New search</a></p>

<hr>
<p>
  Sources:
  <a href="show.php?file=results.php">results.php</a>
  <a href="show.php?file=includes/defs.php">includes/defs.php</a>
  <a href="show.php?file=includes/pms.php">includes/pms.php</a>
</p>

</body>
</html>