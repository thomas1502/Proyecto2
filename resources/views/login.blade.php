<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Css/bootstrap.css">
    <link rel="stylesheet" href="/Css/style.css">
    <link rel="stylesheet" href="{{asset('css/>app.css')}}">    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    
    <title>Login</title>
</head>
<body>
    <header>
        <div class="titulo">LOGIN USUARIO</div>
    </header>

    <main>
        <br><br><br><br>
        <form method="post">       
            @csrf
            <div>
                <img src="Assets/Images/nurse.png" width="15%">
                <br><br><br>
            </div>
            <div class="container">
                <section class="row"> 
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <input name="name" type="text" placeholder="Usuario" class="input-login">
                    </div>
                </section>

                <section class="row"> 
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <input name="password" type="password" placeholder="Contraseña" class="input-login">
                    </div>
                </section>

                <section class="row"> 
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <button class="btn btn-login" type="submit">Login</button>
                    </div>
                </section>
            </div>            
        </form>
    </main>

    <footer>
        
    </footer>
</body>
</html>