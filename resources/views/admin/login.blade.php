<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Linktree Login</title>
    <link rel="stylesheet" href="{{url('assets/css/admin.login.css')}}" />
    <link rel="icon" href="https://website.linktr.ee/favicon-32x32.png?v=0f096d2d5e3af7be669a0cba46df3a54">
</head>
<body>
    <div class="LoginArea">
        <h1>Login</h1>

        @if ($error)
            <div class="error">{{$error}}</div>
        @endif

        <form method="POST">
            @csrf

            <input type="email" name="email" placeholder="Digite seu e-mail" />

            <input type="password" name="password" placeholder="Digite seu senha" />

            <input type="submit" value="Entrar"  />

            Ainda não tem cadastro? <a href="{{url('admin/register')}}">Cadastre-se</a>
        </form>
    </div>
</body>
</html>