@include('layouts.menu')

<main id="main" class="main">
    <a href="{{route('modele')}}"><button type="button" class="btn btn-primary">AJOUTER</button></a>
    <h1 class="text-center">LISTES DES MODELES</h1>
    <section class="section dashboard">
      <div class="col-lg-12">
       <div class="row">
          @foreach ($modeles as $mod)
            <div class="card col-xxl-3 col-md-4" style="">
                <img src="{{asset('storage'). '/' .$mod->image}}" class="" alt="...">
                <div class="card-body">
                  <h4 class="text-center">{{ $mod->nom_modele }}</h4>
                </div>
              </div>
          @endforeach
        </div>
      </div> 
      </section>

</main><!-- End #main -->




