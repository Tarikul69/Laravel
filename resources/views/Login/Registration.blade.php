@extends('welcome')
@section('k4')
<center>
    <form style="text-align: left;" action=" add " method="POST">

    @csrf
    <div class="container col-3">
        <br>
        <h2>Registration</h2>
         Name: <input type="text" name="uname" value="{{old('uname')}}"placeholder="Name"><br>
         <span style="color:red">@error('uname'){{$message}} @enderror</span>
         <br>
         Email:<input type="email" name="email" value="{{old('email')}}"placeholder="Email"><br>
         <span style="color:red">@error('email'){{$message}} @enderror</span>
         <br>
         Phone: <input type="text" name="phone" value="{{old('phone')}}"placeholder="Phone number"><br>
         <span style="color:red">@error('phone'){{$message}} @enderror</span>
         <br>
         Password: <input type="password" name="pass" value="{{old('pass')}}"placeholder="Password"><br>
         <span style="color:red">@error('pass'){{$message}} @enderror</span>

         <br>
        <input class="btn btn-primary col-3" type="submit">
    </div>
    </form>
</center>
@endsection