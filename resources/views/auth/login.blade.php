<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <section>
        <div class="imgBox">
            <img src="/img/login/4.jpeg" alt="" >
        </div>
        <div class="contentBox">
            <div class="formBox">
                <h2>Login</h2>
                @if ($errors->has('name'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('name') }}</strong>
    </span>
@endif
                <form method="POST" action="{{route('postlogin')}}">
                    @csrf
                    <div class="inputBox">
                        <span>Username</span>
                        <input id="username" name="name" type="text" name="">
                    </div>
                    <div class="inputBox">
                        <span>Password</span>
                        <input id="password" name="password" type="password" name="">
                    </div>
                    <div class="remember">
                        <label><input type="checkbox" name="">Remember me</label>
                    </div>
                    <div class="inputBox">
                      <a  href="{{route('beranda')}}"> 
                         <input type="submit" value="Sign In" name="">
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('Template.script')
    @include('sweetalert::alert')
</body>
</html>