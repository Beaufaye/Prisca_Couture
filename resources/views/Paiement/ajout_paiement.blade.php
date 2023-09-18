@include('layouts.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <h1 class="text-center">PAIEMENT</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    
    <div class="row">
      <form action="{{route('paiementT')}}" method="POST" class="form-group" enctype="multipart/form-data">
        @csrf
       
            <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">Objet</label>
                <div class="col-sm-10">
                    <select name="objet" class="form-select" required>
                        <option value="Avance">Avance</option>
                        <option value="Paiement Total">Paiement Total</option>
                        <option value="Reste">Reste</option>
                     </select>
                </div>
              </div>
              <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">Montant</label>
                <div class="col-sm-10">
                  <input type="number" name="montant" class="form-control" required>
                </div>
              </div>
             
              <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">Reste à payer</label>
                <div class="col-sm-10">
                  <input type="number" name="reste" class="form-control" required>
                </div>
              </div>
              
              <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">Date de Paiement</label>
                <div class="col-sm-10">
                  <input type="date" name="date_paiement" class="form-control" required>
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
          <a href="{{route('paiement')}}"><button type="button" class="btn btn-dark">VOIR LES PAIEMENTS</button></a>
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