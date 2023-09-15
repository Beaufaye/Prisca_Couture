@include('layouts.menu')

<main id="main" class="main">

<div class="pagetitle col-lg-8">
    <a href="{{route('depenseaj')}}"><button type="button" class="btn btn-primary">EFFECTUER UN PAIEMENT</button></a>
    <h1 class="text-center">DEPENSE</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">
      <table class="table table-striped table-bordered zero-configuration">
        <h2 class="text-center"></h2>

        <thead>
         <tr>
             <th>ID</th>
             <th>Montant</th>
             <th>Date dépense</th>
             <th>Personnel ayant éffectué la dépense</th>
            
             
         </tr>
        </thead>

        <tbody>
          @foreach($depense as $depense)
        <tr>
            <th>{{ $depense->id}}</th>
            <td>{{ $depense->montant}}</td>
            <td>{{ $depense->date_depense}}</td>
            <td>{{ $depense->personnels_id}}</td>
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