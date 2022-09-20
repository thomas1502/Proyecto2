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

    <title>TABLA MEDICINAS</title>
</head>
<body>
    <header >
        @include('dashboard.client.nav-header-main')      
    </header>    

    <main>
        <br>
        <div class="container">
            <table class="table table-striped">
                <thead>
                    <tbody>
                        <tr>
                            <td>
                                ID
                            </td>
                            <td>
                                Nombre
                            </td>
                            <td>
                                Costo
                            </td>
                            <td>
                                Existencia
                            </td>
                            <td>
                                Laboratorio
                            </td>
                            <td>
                                Principio Activo
                            </td>
                            <td>
                                Creación
                            </td>
                            <td>
                                Actualizado
                            </td>
                        </tr>
                    </tbody>

                    @foreach($medicines as $medicine)
                        <tr>
                            <td>
                                {{$medicine->id}}
                            </td>
                            <td>
                                {{$medicine->name}}
                            </td>
                            <td>
                                {{$medicine->cost}}
                            </td>
                            <td>
                                {{$medicine->existence}}
                            </td>
                            <td>
                                {{$medicine->laboratory}}
                            </td>
                            <td>
                                {{$medicine->active_principle}}
                            </td>
                            <td>
                                {{$medicine->created_at->format('d-m-Y')}}
                            </td>
                            <td>
                                {{$medicine->updated_at->format('d-m-Y')}}
                            </td>
                        </tr>
                    @endforeach
                </thead>                
            </table>  
            {{$medicines->links()}}        
        </div>
    </main>
</body>
</html>