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

    <title>Miscelánea</title>
</head>
<body>
    <header>        
        @include('dashboard.partials.nav-header-main')
        <div class="titulo">DETALLE PRODUCTO</div>
    </header>

    <main>
        <form action="{{route('mix.store')}}" method="post">
            @csrf

            <div class="container">
                <section class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <input type="text" name="name" class="input" placeholder="  Nombre" value="{{$mixx->name}}" readonly>      
                        @error('name')
                            <small class="text-danger">
                                {{$message}}
                            </small>   
                        @enderror 
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <input type="text" name="cost" class="input" placeholder="  Costo" value="{{$mixx->cost}}" readonly>      
                        @error('cost')
                            <small class="text-danger">
                                {{$message}}
                            </small>   
                        @enderror
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <input type="text" name="existence" class="input" placeholder="  Existencia" value="{{$mixx->existence}}" readonly>      
                        @error('existence')
                            <small class="text-danger">
                                {{$message}}
                            </small>   
                        @enderror 
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <input type="text" name="type" class="input" placeholder="  Tipo" value="{{$mixx->type}}" readonly>      
                        @error('type')
                            <small class="text-danger">
                                {{$message}}
                            </small>   
                        @enderror  
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <!-- <label for="">Contenido</label> -->
                        <textarea name="description" class="txtArea" placeholder="Descripción" readonly>{{$mixx->description}}</textarea>   
                        @error('description')
                            <small class="text-danger">
                                {{$message}}
                            </small>   
                        @enderror 
                    </div>      

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <input type="text" name="brand" class="input" placeholder=" Marca" value="{{$mixx->brand}}" readonly>      
                        @error('brand')
                            <small class="text-danger">
                                {{$message}}
                            </small>   
                        @enderror  
                    </div>
                </section>
            </div>
        </form>
    </main>
</body>
</html>