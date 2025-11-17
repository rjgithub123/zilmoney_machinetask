<!DOCTYPE html>
<html>
<h1>Employee List</h1>
<a href="{{ route('employees.create') }}">Create</a>
<table class="table">
<tr>
    <th>Name</th>
    <th>Willing To Work</th>
    <th>Languages</th>
    <th>Action</th>
</tr>
@if($employees)
@foreach ($employees as $emp)
    <tr>
    <td>{{$emp->name}}</td>
    <td>{{ $emp->willing_to_work ? 'Yes' : 'No' }}</td>
    <td>
        @foreach($emp->languages as $lang)
            {{ $lang->language_name }}{{ !$loop->last ? ', ' : '' }}
        @endforeach
    </td>
    <td>
        <a href="{{ route('employees.edit',$emp->id) }}">Edit</a>
        <form action="{{ route('employees.destroy',$emp->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </td>
</tr>
@endforeach
@else
<tr>
    <h5>No Data Available</h5>
</tr>
@endif



</table>
</html>
