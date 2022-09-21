@include('dashboard.partials.sesion-flash-status') 
    <div class="container">
        <section class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="text" name="name" class="input" placeholder="  Nombre" value="{{old('name', $restrictedmedicine->name)}}">      
                @error('name')
                    <small class="text-danger">
                        {{$message}}
                    </small>   
                @enderror 
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="text" name="cost" class="input" placeholder="  Costo" value="{{old('cost', $restrictedmedicine->cost)}}">      
                @error('cost')
                    <small class="text-danger">
                        {{$message}}
                    </small>   
                @enderror
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="text" name="existence" class="input" placeholder="  Existencia" value="{{old('existence', $restrictedmedicine->existence)}}">      
                @error('existence')
                    <small class="text-danger">
                        {{$message}}
                    </small>   
                @enderror 
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="text" name="laboratory" class="input" placeholder="  Laboratorio" value="{{old('laboratory', $restrictedmedicine->laboratory)}}">      
                @error('laboratory')
                    <small class="text-danger">
                        {{$message}}
                    </small>   
                @enderror  
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="text" name="active_principle" class="input" placeholder="  Principio Activo" value="{{old('active_principle', $restrictedmedicine->active_principle)}}">      
                @error('active_principle')
                    <small class="text-danger">
                        {{$message}}
                    </small>   
                @enderror  
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <input type="text" name="prescription_code" class="input" placeholder="  Código de Prescripción" value="{{old('prescription_code', $restrictedmedicine->prescription_code)}}">      
                @error('prescription_code')
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