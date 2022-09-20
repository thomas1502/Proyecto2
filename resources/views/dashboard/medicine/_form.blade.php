@include('dashboard.partials.sesion-flash-status') 
    <div class="container">
        <section class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="text" name="name" class="input" placeholder="  Nombre" value="{{old('name', $medicine->name)}}">      
                @error('name')
                    <small class="text-danger">
                        {{$message}}
                    </small>   
                @enderror 
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="text" name="cost" class="input" placeholder="  Costo" value="{{old('cost', $medicine->cost)}}">      
                @error('cost')
                    <small class="text-danger">
                        {{$message}}
                    </small>   
                @enderror
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="text" name="existence" class="input" placeholder="  Existencia" value="{{old('existence', $medicine->existence)}}">      
                @error('existence')
                    <small class="text-danger">
                        {{$message}}
                    </small>   
                @enderror 
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="text" name="laboratory" class="input" placeholder="  Laboratorio" value="{{old('laboratory', $medicine->laboratory)}}">      
                @error('laboratory')
                    <small class="text-danger">
                        {{$message}}
                    </small>   
                @enderror  
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="text" name="active_principle" class="input" placeholder="  Principio Activo" value="{{old('active_principle', $medicine->active_principle)}}">      
                @error('active_principle')
                    <small class="text-danger">
                        {{$message}}
                    </small>   
                @enderror  
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="button btn-form">Enviar</button>  
            </div> 
        </section>
    </div>