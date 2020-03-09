<FORM method="POST" action="/customers/create"> @csrf
    @extends('layouts.myapp') 
@section('content') 
    <FORM method="POST" action="/customers/create"> 
        @csrf 
        Enter your first name:<input type="text" name="firstname"><br> 
        Enter your surname:<input type="text" name="surname"><br> 
        <input type="submit"> 
    </FORM> 
@endsection 
     Enter your first name:<input type="text" name="firstname"><br> 
     Enter your surname:<input type="text" name="surname"><br> 
     <input type="submit"> 
	 @extends('layouts.myapp') 
@section('content')
<FORM method="POST" action="/customers/create"> 
@csrf
    <div class="form-group">
        <label for="firstname">Enter your first name:</label>
        <input type="text" name="firstname" class="form-control"> 
    </div> 
    <div class="form-group">
        <label for="surname">Enter your surname:</label> 
        <input type="text" name="surname" class="form-control"> 
    </div> <input type="submit"> 
</FORM> 
@endsection
</FORM> 