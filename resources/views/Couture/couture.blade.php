@include('layouts.menu')

<main id="main" class="main">

  <div class="pagetitle col-lg-8">
    <a href="{{route('coutures')}}"><button type="button" class="btn btn-primary">AJOUTER</button></a>
    <h1 class="text-center">LISTES DES COUTURES</h1>
  </div><!-- End Page Title -->

  <section class="section dashboard mt-5">
    <div class="row">
      <table class="table table-striped table-bordered zero-configuration">
        <h2 class="text-center"></h2>

        <thead>
         <tr>
             <th>ID</th>
             <th>Date de dépot</th>
             <th>Date de récupération</th>
             <th>Le modèle</th>
             <th>Client</th>
         </tr>
        </thead>

        <tbody>
          @foreach($couture as $couture)
        <tr>
            <th>{{ $couture->id}}</th>
            <td>{{ $couture->date_depot}}</td>
            <td>{{ $couture->date_recuperation}}</td>
            <td>{{ $couture->modeles_id}}</td>
            <td>{{ $couture->clients_id}}</td>
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

@include('layouts.footer')