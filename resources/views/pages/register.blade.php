<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <br>
                <br>
                <h3 class="text-center">Sign Up</h3>
                {{-- @if($errors->any())
                @foreach($errors->all() as $err)
                    <li>{{$err}}</li>
                @endforeach
                @endif --}}
                <form action="{{route('register')}}" method="POST" >
                    @csrf
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email
                        </label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="email" value="{{old('email')}}" 
                                placeholder="email@example.com">
                            @if($errors->has('email'))
                            <div class="text-danger">
                                {{$errors->first('email')}}
                            </div>
                            @endif
                        </div>

                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"
                                placeholder="username"
                                 value="{{old('username')}}" name="username">
                            
                            @if($errors->has('username'))
                            <div class="text-danger">
                                @foreach($errors->get('username') as $err)
                                <li>{{$err}}</li>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Birthdate</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control"
                                placeholder="Birthdate" name="birthdate">
                            @if($errors->has('birthdate'))
                            <div class="text-danger">
                                @foreach($errors->get('birthdate') as $err)
                                <li>{{$err}}</li>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                            @if($errors->has('password'))
                            <div class="text-danger">
                                {{$errors->first('password')}}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                            @if($errors->has('password_confirmation'))
                            <div class="text-danger">
                                {{$errors->first('password_confirmation')}}
                            </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <input style="width:100%" type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>

</html>