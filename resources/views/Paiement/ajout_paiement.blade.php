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
      <form action="{{route('paiementT')}}" method="POST" class="form-group">
        @csrf
       
        <div class="mb-3 row">
          <div class="mb-3 row">
            <label for="sexe" class="col-sm-2 col-form-label">Client</label>
            <div class="col-sm-10">
                <select name="niveau" class="form-select" required>
                    <option value="">Choisissez client</option>
            <?php
                foreach ($paiement as $key) {
                 
            ?>
            <option value="<?php echo $key->valeur ?>"></option>;
             <?php
              }
              ?>
                 </select>  
              </div>
          </div>
          <button type="submit" class="btn btn-primary">ENREGISTRER</button>
          <a href="{{route('clients')}}"><button type="button" class="btn btn-dark">VOIR LA LISTE DES CLIENTS</button></a>
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