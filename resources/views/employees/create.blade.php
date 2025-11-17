<!DOCTYPE html>

<html>
<head>
    <title>Create Employee</title>
</head>
<form method="POST" action="{{ route('employees.store') }}">
@csrf
    <div class="row">
        <div class="col-md-4">
            <label>First Name</label><input type="text" name="first_name"/>
        </div>
        <div class="col-md-4">
               <label>Last Name</label><input type="text" name="last_name"/>
        </div>

         <div class="col-md-4">
                <label>Willing to Work?</label>
    <input type="radio" name="willing_to_work" value="0"/>
     <input type="radio" name="willing_to_work" value="1"/>
        </div>

         <div class="col-md-4">
                <label>Languages Known</label>

    @foreach($languages as $language)
    <input type="checkbox" name="languages[]" value="{{ $language->id }}"/> {{ $language->language_name }}
    @endforeach
        </div>

    </div>
    <button type="submit">Create Employee</button>
</form>

</html>