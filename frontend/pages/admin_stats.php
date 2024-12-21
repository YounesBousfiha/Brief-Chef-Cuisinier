<?php
  include '../includes/header.php';
?>
  <div class="container">
    <div class="row">
          <?php
                include '../includes/sidebar.php';
            ?>
      <div class="col">
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6">
            <h3 class="text-dark mb-4" style="margin-top: 24px;">Your Statistiques</h3>
          </div>
        </div>


        <div class="container mt-5" style="margin-bottom: 390px;">
          <h1 class="text-center mb-4">Tableau de Bord</h1>
          
          <!-- Row for stats -->
          <div class="row text-center">
              <!-- Nombre de demandes en attente -->
              <div class="col-md-3">
                  <div class="card bg-warning text-white mb-4">
                      <div class="card-body">
                          <h5 class="card-title">Demandes en attente</h5>
                          <h2 id="pending-requests">12</h2>
                      </div>
                  </div>
              </div>
              
              <!-- Nombre de demandes approuvées pour la journée -->
              <div class="col-md-3">
                  <div class="card bg-success text-white mb-4">
                      <div class="card-body">
                          <h5 class="card-title">Demandes approuvées (Aujourd'hui)</h5>
                          <h2 id="approved-today">8</h2>
                      </div>
                  </div>
              </div>
              
              <!-- Nombre de demandes approuvées pour le jour suivant -->
              <div class="col-md-3">
                  <div class="card bg-info text-white mb-4">
                      <div class="card-body">
                          <h5 class="card-title">Demandes approuvées (Demain)</h5>
                          <h2 id="approved-tomorrow">5</h2>
                      </div>
                  </div>
              </div>
              
              <!-- Nombre de clients inscrits -->
              <div class="col-md-3">
                  <div class="card bg-primary text-white mb-4">
                      <div class="card-body">
                          <h5 class="card-title">Clients Inscrits</h5>
                          <h2 id="registered-clients">120</h2>
                      </div>
                  </div>
              </div>
          </div>
      
      </div>
      
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


        <footer class="bg-dark text-center text-white">
          <!-- Grid container -->
          <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
              <!-- Facebook -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                  class="fab fa-facebook-f"></i></a>

              <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                  class="fab fa-twitter"></i></a>

              <!-- Google -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                  class="fab fa-google"></i></a>

              <!-- Instagram -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                  class="fab fa-instagram"></i></a>

              <!-- Linkedin -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                  class="fab fa-linkedin-in"></i></a>

              <!-- Github -->
              <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                  class="fab fa-github"></i></a>
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
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/Sidebar-Menu-sidebar.js"></script>
</body>

</html>