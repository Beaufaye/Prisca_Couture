<!DOCTYPE html>
<html lang="fr">

@include('layouts.head')

<body>

 @include('layouts.header')

  @include('layouts.nav')

  <main id="main" class="main">

    <div class="pagetitle col-lg-8">
      <div class="row">
        <div class="col-xxl-4 col-md-6">
          <h1>Acceuil</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Acceuil</li>
              </ol>
            </nav>
        </div>
        
        <div class="col-xxl-4 col-md-6">
            <h1 class="fw-bold">STATISTIQUES</h1>
        </div>
      </div>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">CLIENTS</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>4865</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">MODELES</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-scissors"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1375</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">PERSONNELS</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6>15</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End Sales Card -->

            
          </div>
        </div><!-- End Left side columns -->

       

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
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layouts.js')
</body>

</html>
