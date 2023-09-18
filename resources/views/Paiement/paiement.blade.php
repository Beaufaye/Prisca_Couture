@include('layouts.menu')

<main id="main" class="main">

<div class="pagetitle col-lg-8">
    <a href="{{route('paiements')}}"><button type="button" class="btn btn-primary">ENREGISTRER UN PAIEMENT</button></a>
    <h1 class="text-center">PAIEMENTS</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <table class="table table-striped table-bordered zero-configuration">
        <h2 class="text-center"></h2>

        <thead>
         <tr>
             <th>ID</th>
             <th>Objet</th>
             <th>Montant</th>
             <th>Reste</th>
             <th>Date paiement</th>
             <th>Client</th>
             
         </tr>
        </thead>

        <tbody>
          @foreach($paiement as $paiement)
        <tr>
            <th>{{ $paiement->id}}</th>
            <td>{{ $paiement->objet}}</td>
            <td>{{ $paiement->montant}}</td>
            <td>{{ $paiement->reste}}</td>
            <td>{{ $paiement->date_paiement}}</td>
            <td>{{ $paiement->client->nom_prenom}}</td>
        </tr>
        @endforeach
      </tbody>
     </table>
     
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