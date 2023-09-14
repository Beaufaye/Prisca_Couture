@include('layouts.menu')

<main id="main" class="main">
<div class="pagetitle col-lg-8">
    <h1 class="text-center">AJOUT D'UN PERSONNEL</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        
    @endif
    <div class="row">
      <form action="{{route('personnelT')}}" method="POST" class="form-group" enctype="multipart/form-data">
        @csrf
       

        <div class="mb-3 row">
            <label for="nom_prenom" class="col-sm-2 col-form-label">Insérer la Photo du Personnel</label>
            <div class="col-sm-10">
            <input class="form-control" name="photo" type="file" required>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="nom_prenom" class="col-sm-2 col-form-label">Poste</label>
            <div class="col-sm-10">
              <input type="text" name="poste" class="form-control" required>
            </div>
          </div>

        <div class="mb-3 row">
            <label for="nom_prenom" class="col-sm-2 col-form-label">Nom du Personnel</label>
            <div class="col-sm-10">
              <input type="text" name="nom" class="form-control" required>
            </div>
          </div>

          <button type="submit" class="btn btn-primary">ENREGISTRER</button>
          <a href="{{route('personnels')}}"><button type="button" class="btn btn-dark">VOIR LA LISTE DES MODELES</button></a>
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

