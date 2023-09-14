@include('layouts.menu')

<main id="main" class="main">
<div class="pagetitle col-lg-8">
    <h1 class="text-center">AJOUT D'UN MODELE</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        
    @endif
    <div class="row">
      <form action="{{route('modeleT')}}" method="POST" class="form-group" enctype="multipart/form-data">
        @csrf
       
        <div class="mb-3 row">
            <label for="nom_prenom" class="col-sm-2 col-form-label">Nom du Modèle</label>
            <div class="col-sm-10">
              <input type="text" name="nom_modele" class="form-control" required>
            </div>
          </div>
          
          <div class="mb-3 row">
            <label for="nom_prenom" class="col-sm-2 col-form-label">Choisissez une image</label>
            <div class="col-sm-10">
            <input class="form-control" name="image" type="file" required>
            </div>
          </div>
          
          <button type="submit" class="btn btn-primary">ENREGISTRER</button>
          <a href="{{route('modeles')}}"><button type="button" class="btn btn-dark">VOIR LA LISTE DES MODELES</button></a>
        </form>

  
</div>
          

    </div>
  </section>



</main><!-- End #main -->





















<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>






@include('layouts.footer')

