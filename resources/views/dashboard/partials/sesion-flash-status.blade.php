@csrf <!-- Se genera código y se envía -->

@if(session('status'))
    <div class="alert alert-success"> <!-- Alert entra y sale -->
        {{session('status')}}
    </div>
@endif