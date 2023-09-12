@include('layouts.menu')

<main id="main" class="main">

<div class="pagetitle col-lg-8">
    <a href="{{route('ajouter_client')}}"><button type="button" class="btn btn-primary">AJOUTER</button></a>
    <h1 class="text-center">PAIEMENTS</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <table class="table table-striped table-bordered zero-configuration">
        <h2 class="text-center"></h2>

        <thead>
         <tr>
             <th>ID</th>
             <th>Nom et prenom</th>
             <th>Objet</th>
             <th>Montant</th>
             <th>Acompte</th>
             <th>Reste</th>
             <th>Mode de paiement</th>
             <th>Date paiement</th>
             
         </tr>
        </thead>

        <tbody>
        
        <tr>
            <th></th>
            <td></td>
            <td></td>
            <td></td>
            <td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        
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