@include('layouts.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <h1 class="text-center">AJOUT D'UNE COUTURE</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    
    <div class="row">
      <form action="{{route('coutureT')}}" method="POST" class="form-group">
        @csrf
       
        
            <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">Date de dépot</label>
                <div class="col-sm-10">
                    <input type="date" name="date_depot" class="form-control" required>
                </div>
              </div>

              <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">Date de récupération</label>
                <div class="col-sm-10">
                  <input type="date" name="date_recuperation" class="form-control" required>
                </div>
              </div>

              <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">Modèles</label>
                <div class="col-sm-10">
                    <select name="modeles_id" class="form-select" required>
                        <option>Selectionner le modèle</option>;
                                    @foreach ($modeles as $mod)
                                    <option value="{{$mod->id}}">{{$mod->nom_modele}}</option>
                                @endforeach
                        
                     </select>
                </div>
                </div>

              <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">Client</label>
                <div class="col-sm-10">
                    <select name="clients_id" class="form-select" required>
                        <option>Selectionner le client</option>;
                                    @foreach ($clients as $mod)
                                    <option value="{{$mod->id}}">{{$mod->nom_prenom}}</option>
                                @endforeach
                        
                     </select>
                </div>
                </div>

          <button type="submit" class="btn btn-primary">ENREGISTRER</button>
          <a href="{{route('couture')}}"><button type="button" class="btn btn-dark">VOIR LA LISTE DES COUTURES</button></a>
      </form>



    </div>
  </section>

</main><!-- End #main -->

<br>
<br>
<br>
<br>
<br>
@include('layouts.footer')