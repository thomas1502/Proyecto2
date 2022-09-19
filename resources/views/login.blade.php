<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header>

    </header>

    <main>
        <form method="post">       
            @csrf  
            <input name="email" type="text" placeholder="Correo">
            <input name="password" type="password" placeholder="Contraseña">
            <button class="btn btn/success" type="submit">Login</button>
        </form>
    </main>

    <footer>
        
    </footer>
</body>
</html>