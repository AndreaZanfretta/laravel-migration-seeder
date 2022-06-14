<h1 class="text-center">Agenzia Viaggi</h1>

<div class="container">
    <div class="row">
        @foreach ($packages as $package)
            <div class="col col-6 col-md-4 col-lg-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">{{$package->name}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$package->description}}</h6>
                      <p class="card-text">Destinazione: {{$package->destination}}</p>
                      <p class="card-text">Giorni: {{$package->days}}</p>
                      <p class="card-text">Prezzo: {{$package->price}} €</p>
                      <a href="#" class="card-link">Scopri di più</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
</div>