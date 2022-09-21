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

    <title>TABLA MEDICINAS RESTRINGIDAS</title>
</head>
<body>
    <header >
        @include('dashboard.restrictedmedicine.nav-header-main')
        <div class="btn-index">
            <a class="btn btn-success" href="{{route('restrictedmedicine.create')}}">Crear</a>
        </div>        
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
                                Código Prescripción
                            </td>
                            <td>
                                Creación
                            </td>
                            <td>
                                Actualizado
                            </td>
                            <td>
                                Acciones
                            </td>
                        </tr>
                    </tbody>

                    @foreach($restrictedm as $restricted)
                        <tr>
                            <td>
                                {{$restricted->id}}
                            </td>
                            <td>
                                {{$restricted->name}}
                            </td>
                            <td>
                                {{$restricted->cost}}
                            </td>
                            <td>
                                {{$restricted->existence}}
                            </td>
                            <td>
                                {{$restricted->laboratory}}
                            </td>
                            <td>
                                {{$restricted->active_principle}}
                            </td>
                            <td>
                                {{$restricted->prescription_code}}
                            </td>
                            <td>
                                {{$restricted->created_at->format('d-m-Y')}}
                            </td>
                            <td>
                                {{$restricted->updated_at->format('d-m-Y')}}
                            </td>
                            <td>
                                <a href="{{route('restrictedmedicine.show', $restricted->id)}}" class="btn btn-primary">Ver</a>
                                <a href="{{route('restrictedmedicine.edit', $restricted->id)}}" class="btn btn-primary">Editar</a>
                                <form method="POST" action="{{ route('restrictedmedicine.destroy', $restricted->id) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger" type="submit">Borrar</button>
                                </form>   
                            </td>
                        </tr>
                    @endforeach
                </thead>                
            </table>  
            {{$restrictedm->links()}}        
        </div>
    </main>
</body>
</html>