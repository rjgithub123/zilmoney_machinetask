<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>

    <form method="POST" action="{{ route('employees.update',$employee->id) }}">
        @csrf
        @method('PUT')
<div class="row">
<div class="col-md-4">
    <input type="text" name="first_name" value="{{$employee->first_name}}">
</div>

<div class="col-md-4">
    <input type="text" name="last_name" value="{{$employee->last_name}}">
</div>

<div class="col-md-4">
    <label>Willing to Work?</label>
    <label>
        <input type="radio" value="1" {{ $employee->willing_to_work? 'checked':'' }} />Yes
    </label>
    <label> <input type="radio" value="0" {{ $employee->willing_to_work?'':'checked' }}>No</label>
</div>

<div class="col-md-4">

    @foreach($languages as $lang)
        <input type="checkbox"
        name="languages[]" 
        value="{{ $lang->id }}" 
        {{ $employee->languages->contains($lang->id)?'checked':''}}>
        {{ $lang->language_name }}
    @endforeach

</div>

<button type="submit"  >Submit</button>

</div>
    </form>
</head>
</html>