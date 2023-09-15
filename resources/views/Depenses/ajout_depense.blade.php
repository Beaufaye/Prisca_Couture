@include('layouts.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <h1 class="text-center">DEPENSE</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">

    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    
    <div class="row">
      <form action="{{route('depense')}}" method="POST" class="form-group">
        @csrf
       
            
              <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">Montant</label>
                <div class="col-sm-10">
                  <input type="number" name="montant" class="form-control" required>
                </div>
              </div>
             
              
              <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">Date de Dépense</label>
                <div class="col-sm-10">
                  <input type="date" name="date_depense" class="form-control" required>
                </div>
              </div>
              <div class="mb-3 row">
                <label  class="col-sm-2 col-form-label">Personnel</label>
                <div class="col-sm-10">
                    <select name="personnels_id" class="form-select" required>
                        <option>Selectionner le personnel</option>;
                                    @foreach ($personnels as $mod)
                                    <option value="{{$mod->id}}">{{$mod->nom}}</option>
                                @endforeach
                        
                     </select>
                </div>
                </div>
          
          <button type="submit" class="btn btn-primary">ENREGISTRER</button>
          <a href="{{route('depensel')}}"><button type="button" class="btn btn-dark">VOIR LES DEPENSES</button></a>
      </form>



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