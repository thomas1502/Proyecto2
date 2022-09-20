@include('dashboard.partials.sesion-flash-status') 
    <div class="container">
        <section class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="text" name="name" class="input" placeholder="  Nombre" value="{{old('name', $mix->name)}}">      
                @error('name')
                    <small class="text-danger">
                        {{$message}}
                    </small>   
                @enderror 
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="text" name="cost" class="input" placeholder="  Costo" value="{{old('cost', $mix->cost)}}">      
                @error('cost')
                    <small class="text-danger">
                        {{$message}}
                    </small>   
                @enderror
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="text" name="existence" class="input" placeholder="  Existencia" value="{{old('existence', $mix->existence)}}">      
                @error('existence')
                    <small class="text-danger">
                        {{$message}}
                    </small>   
                @enderror 
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="text" name="type" class="input" placeholder="  Tipo" value="{{old('type', $mix->type)}}">      
                @error('type')
                    <small class="text-danger">
                        {{$message}}
                    </small>   
                @enderror  
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <!-- <label for="">Contenido</label> -->
                <textarea name="description" class="txtArea" placeholder="Descripción">{{old('description', $mix->description)}}</textarea>   
                @error('description')
                    <small class="text-danger">
                        {{$message}}
                    </small>   
                @enderror 
            </div>      

            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="text" name="brand" class="input" placeholder=" Marca" value="{{old('brand', $mix->brand)}}">      
                @error('brand')
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