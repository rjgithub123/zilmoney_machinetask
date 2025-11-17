<!DOCTYPE html>
<html>
<h1>Employee List</h1>
<a href="{{ route('employees.create') }}">Create</a>
<table>
<tr>
    <th>Name</th>
    <th>Willing To Work</th>
    <th>Languages</th>
</tr>
@if($employees)
@foreach ($employees as $emp)
    <tr>
    <td>{$emp->first_name}</td>
</tr>
@endforeach
@else
<tr>
    <h5>No Data Available</h5>
</tr>
@endif



</table>
</html>
