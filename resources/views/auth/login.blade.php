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
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="inputBox">
                        <span>Username</span>
                        <input id="username" name="username" type="text" name="">
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
</body>
</html>