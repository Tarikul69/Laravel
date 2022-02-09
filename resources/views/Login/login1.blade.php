@extends('welcome')
@section('k4')
<center>
 
  <form method="post" action="">
          {{@csrf_field()}}
    <div class="">
      <br>
      <br>
      <h3>Login</h3>
      <input type="text" name="uname" value="{{old('uname')}}"   placeholder="Name"> <br>
      <span style="color: red;">@error('uname'){{$message}}@enderror</span>
      <br>
      <input type="text" name="password" value="{{old('password')}}"   placeholder="Password"><br>
       <span style="color: red;">@error('password'){{$message}} @enderror</span>
      <br>
      <br>
      <input  class="btn btn-primary" type="submit"  >
      <br>
      <br>
    </div>

  </form>
   
 
</center>
@endsection