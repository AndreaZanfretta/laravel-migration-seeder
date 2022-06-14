<div class="container my-5 w-50">
    <h1 class="text-center">{{$package->name}}</h1>
    <p>{{$package->description}}</p>
    <div class="row justify-content-center">
        <div class="col text-center"><span>Destinazione :{{$package->destination}}</span></div>
        <div class="col text-center"><span>Giorni :{{$package->days}}</span></div>
        <div class="col text-center"><span>Prezzo :{{$package->price}}</span></div>
    </div>
    <div class="row justify-content-center">
        <button type="button" class="btn btn-primary btn-lg w-25">Prenota ORA!</button>
    </div>
</div>