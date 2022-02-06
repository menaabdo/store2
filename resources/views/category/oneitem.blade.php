
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Categories Table</h2>
<h2>All products From {{$cat[0]->name}}</h2>
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>description</th>
    
  </tr>
  @foreach ($items as $item)
  <tr>
   
    <td>{{ $item->id }}</td>
    <td>{{ $item-> name }}</td>
    <td>{{ $item-> des }}</td>
    <!-- <td><a href="/edit/{{$item -> id}}">update</a></td>
   <td>{{ $item-> name }}</td>
     
    <td><a href="/delete/{{ $item -> id }}">Delete </a></td>
  </tr> -->
  @endforeach

</table>

</body>
</html>