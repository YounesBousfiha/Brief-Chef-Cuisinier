<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>menuhome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="../assets/css/Projects-Grid-images.css">
</head>

<body>
    <div class="modal fade" id="reservation" tabindex="-1" aria-labelledby="ajouteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ajouteModalLabel">Fait une Reservation</h5>
                    <button type="button" id="btn-close" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modaSignupl-body px-3">
                    <form action="#" method="POST" id="reservationForm">
                        <div class="mb-3">
                            <label class="form-label">Number des Personne</label>
                            <input type="number" name="personnes" class="form-control" placeholder="Enter le number des personnes...">
                            <span id="personnesError"></span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Date</label>
                            <input type="date" name="date" class="form-control" placeholder="nom...">
                            <span id="dateError"></span>
                        </div>
                       <div class="mb-3">
                            <label class="form-label">Time</label>
                            <input type="time" name="time" class="form-control" min="09:00" max="11:59">
                            <span id="timeError"></span>
                        </div>
                        <div class="mb-3">
                            <button type="submit" id="submitReservation" class="btn btn-primary w-100">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="displayMenu" tabindex="-1" aria-labelledby="ajouteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ajouteModalLabel">Data Displayed</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modaSignupl-body px-3">
                    Data Displayed
                </div>
            </div>
        </div>
    </div>

    
    <nav class="navbar navbar-expand-md navbar-fixed-top navigation-clean-button navbar-light" style="background: #82471f;border-radius: 20;border-top-left-radius: 20;border-top-right-radius: 20;border-bottom-right-radius: 20;border-bottom-left-radius: 20;border-style: none;padding-top: 0;padding-bottom: 10px;">
        <div class="container"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div><a class="navbar-brand" href="#"><span><span style="color: rgb(249, 249, 249);">Michelin</span></span> </a></div>
            <div class="collapse navbar-collapse" id="navcol-1" style="color: rgb(255,255,255);">
                <ul class="navbar-nav nav-right">
                    <li class="nav-item"><a class="nav-link active" href="../index.html" style="color: rgba(224,217,217,0.9);">home </a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html" style="color: rgba(224,217,217,0.9);">about </a></li>
                    <li class="nav-item"><a class="nav-link" href="faq.html" style="color: rgba(224,217,217,0.9);">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html" style="color: rgba(224,217,217,0.9);">Reservation</a></li>
                </ul>
                <p class="ms-auto navbar-text actions" style="text-align: right;margin: 5px;"> <a class="btn btn-light action-button" role="button" href="signup.html" style="color: rgba(0,0,0,0.9);background: var(--bs-gray-200);border-radius: 10px;border-style: solid;border-color: rgba(0,0,0,0.9);font-size: 16px;padding: 5px 8px;">Login</a><a class="btn btn-light action-button" role="button" href="signup.html" style="color: rgba(0,0,0,0.9);background: var(--bs-gray-200);border-radius: 10px;border-style: solid;border-color: rgba(0,0,0,0.9);font-size: 16px;padding: 5px 8px;">Sign Up</a></p>
            </div>
        </div>
    </nav>
    <div class="container py-4 py-xl-5">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Menu de jour</h2>
                <p class="w-lg-50">Curae hendrerit donec commodo hendrerit egestas tempus, turpis facilisis nostra nunc. Vestibulum dui eget ultrices.</p>
            </div>
        </div>
        <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
            <div class="col">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                    <div class="py-4">
                        <h4>Menu de petit-dejuner</h4>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                    <div class="d-flex justify-content-around">
                        <button class="btn text-white w-25" type="button" data-bs-toggle="modal" data-bs-target="#reservation" style="font-size: 24;background: #51637e;">Select</button>
                        <button class="btn text-white w-25" type="button" data-bs-toggle="modal" data-bs-target="#displayMenu" style="font-size: 24;background: #51637e;">Display</button>

                    </div>
                </div>
            </div>
            <div class="col">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                    <div class="py-4">
                        <h4>Menu de petit-dejuner</h4>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                    <div class="d-flex justify-content-center"><button class="btn btn-primary w-50" type="button" style="font-size: 24;background: #51637e;">Select</button></div>
                </div>
            </div>
            <div class="col">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                    <div class="py-4">
                        <h4>Menu de petit-dejuner</h4>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                    <div class="d-flex justify-content-center"><button class="btn btn-primary w-50" type="button" style="font-size: 24;background: #51637e;">Select</button></div>
                </div>
            </div>
            <div class="col">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                    <div class="py-4">
                        <h4>Menu de petit-dejuner</h4>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                    <div class="d-flex justify-content-center"><button class="btn btn-primary w-50" type="button" style="font-size: 24;background: #51637e;">Select</button></div>
                </div>
            </div>
            <div class="col">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                    <div class="py-4">
                        <h4>Menu de petit-dejuner</h4>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                    <div class="d-flex justify-content-center"><button class="btn btn-primary w-50" type="button" style="font-size: 24;background: #51637e;">Select</button></div>
                </div>
            </div>
            <div class="col">
                <div><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png">
                    <div class="py-4">
                        <h4>Menu de petit-dejuner</h4>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                    </div>
                    <div class="d-flex justify-content-center"><button class="btn btn-primary w-50" type="button" style="font-size: 24;background: #51637e;">Select</button></div>
                </div>
            </div>
        </div>
    </div><footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://github.com/ahmedsharifkhan">Ahmed Sharif Khan Noor</a>
  </div>
  <!-- Copyright -->
</footer>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/app.js"></script>
</body>

</html>