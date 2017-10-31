<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
    <title>Retaurant</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-theme.min.css')}}">
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body style="background: url({{asset('img/background/1.jpg')}})">
<div class="row" style="padding-top: 150px;">
    <div class="col-md-4 col-md-offset-4" style="border: 1px solid #b6a338;color: #dca7a7;padding: 50px">
       @if(count($errors)>0)
           @foreach($errors->all() as $err)
            <div class="alert alert-warning text-center" role="alert">{{$err}}</div>
            @endforeach
        @endif
        @if(Session::has('thongbao'))
               <div class="alert alert-warning text-center" role="alert"> {{Session::get('thongbao')}}</div>
           @endif
        <form class="form-horizontal" action ={{route('signin')}} method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <h3 class="text-center" style="font-family: 'Adobe Arabic';font-size: 40px">SIGN IN</h3>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputEmail3">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="exampleInputPassword3">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-default" style="margin-top:15px;font-family: 'Arial Black'">SIGN IN</button>
            <a href="http://localhost:8000/trangchu" style="float: right;font-family: 'Arial Black';font-size: 16px;color:#dca7a7;margin-top:20px;text-decoration: none">BACK<span class=" glyphicon glyphicon-chevron-right"></span> </a>
            <div class="text-center"><a href="http://localhost:8000/signup" style="font-size: 16px;font-family: 'Arial Black';color:#dca7a7;margin-top:20px;text-decoration: none">SIGN UP</a>
            </div>
        </form>
    </div>
</div>
    {{--<div class="container">--}}
    {{--<div class="row" style="margin-top: 200px">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Login</div>--}}
                {{--<div class="panel-body">--}}
                    {{--<form class="form-horizontal" role="form" method="POST" action="{{ route('signin') }}">--}}
                        {{--{{ csrf_field() }}--}}
                        {{--@if(count($errors)>0)--}}
                            {{--@foreach($errors->all() as $err)--}}
                                {{--<div class="alert alert-warning text-center" role="alert">{{$err}}</div>--}}
                            {{--@endforeach--}}
                        {{--@endif--}}
                        {{--@if(Session::has('thongbao'))--}}
                            {{--<div class="alert alert-warning text-center" role="alert"> {{Session::get('thongbao')}}</div>--}}
                        {{--@endif--}}
                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                            {{--<label for="email" class="col-md-4 control-label">E-Mail</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>--}}

                                {{--@if ($errors->has('email'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                            {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                            {{--<div class="col-md-6">--}}
                                {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                {{--@if ($errors->has('password'))--}}
                                    {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                {{--@endif--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-6 col-md-offset-4">--}}
                                {{--<div class="checkbox">--}}
                                    {{--<label>--}}
                                        {{--<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me--}}
                                    {{--</label>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="form-group">--}}
                            {{--<div class="col-md-8 col-md-offset-4">--}}
                                {{--<button type="submit" class="btn btn-primary">--}}
                                    {{--Login--}}
                                {{--</button>--}}

                                {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
                                    {{--Forgot Your Password?--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
</body>
</html>