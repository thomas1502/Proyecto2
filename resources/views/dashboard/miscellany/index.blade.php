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

    <title>TABLA MISCELÁNEA</title>
</head>
<body>
    <header >
        @include('dashboard.partials.nav-header-main')
        <a class="btn btn-primary" href="{{route('miscellaneous.create')}}">Crear</a>
    </header>    

    <main>
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
                                Tipo
                            </td>
                            <td>
                                Descripción
                            </td>
                            <td>
                                Marca
                            </td>
                            <td>
                                Actualizado
                            </td>
                            <td>
                                Acciones
                            </td>
                        </tr>
                    </tbody>

                    @foreach($miscellaneous as $miscellany)
                        <tr>
                            <td>
                                {{$miscellany->id}}
                            </td>
                            <td>
                                {{$miscellany->name}}
                            </td>
                            <td>
                                {{$miscellany->cost}}
                            </td>
                            <td>
                                {{$miscellany->existence}}
                            </td>
                            <td>
                                {{$miscellany->type}}
                            </td>
                            <td>
                                {{$miscellany->description}}
                            </td>
                            <td>
                                {{$miscellany->brand}}
                            </td>
                            <td>
                                {{$miscellany->created_at->format('d-m-Y')}}
                            </td>
                            <td>
                                {{$miscellany->updated_at->format('d-m-Y')}}
                            </td>
                            <td>
                                <a href="{{route('miscellaneous.show', $miscellany->id)}}" class="btn btn-primary">Ver</a>
                            </td>
                        </tr>
                    @endforeach
                </thead>                
            </table>  
            {{$miscellaneous->links()}}        
        </div>
    </main>
</body>
</html>