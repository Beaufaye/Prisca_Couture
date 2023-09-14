@include('layouts.menu')

<main id="main" class="main">
  <div class="pagetitle col-lg-8">
    <a href="{{route('ajout_personnel')}}"><button type="button" class="btn btn-primary">AJOUTER</button></a>
    <h1 class="text-center">LISTES DU PERSONNEL</h1>
  </div>

  <section class="section dashboard">
    <div class="col-lg-12">
     <div class="row">
        @foreach ($personnel as $mod)
          <div class="card col-xxl-3 col-md-4" style="">
              <img src="{{asset('storage'). '/' .$mod->photo}}" class="" alt="...">
              <div class="card-body">
                <h4 class="text-center">{{ $mod->poste }}</h4>
              </div>
              <div class="card-body">
                <h4 class="text-center">{{ $mod->nom }}</h4>
              </div>
            </div>
        @endforeach
      </div>
    </div> 
    </section>
</main><!-- End #main -->