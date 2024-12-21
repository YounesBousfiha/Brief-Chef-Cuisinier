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
                        <h3 class="text-dark mb-4" style="margin-top: 24px;">Your Reservations</h3>
                    </div>
                </div>
                <div class="card" id="TableSorterCard">
                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <div class="table-responsive">
                                <table class="table table-striped table tablesorter" id="ipi-table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th class="text-center">Nom</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Phone</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center filter-false sorter-false">Menu</th>
                                            <th class="text-center filter-false sorter-false">Number des Pesonnes</th>
                                            <th class="text-center filter-false sorter-false">Date</th>
                                            <th class="text-center filter-false sorter-false">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        <tr>
                                            <td>Gordon Ramsey</td>
                                            <td>Test@gmail.com</td>
                                            <td>+2126392222</td>
                                            <td>Pending</td>
                                            <td>Menu-Midi</td>
                                            <td>4</td>
                                            <td>02-02-2024</td>
                                            <td class="text-center align-middle" style="max-height: 60px;height: 60px;"><a class="btn btnMaterial btn-flat primary semicircle" role="button" href="#"><i class="far fa-eye"></i></a><a class="btn btnMaterial btn-flat success semicircle" role="button" href="#"><i class="fas fa-pen"></i></a><a class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" role="button" style="margin-left: 5px;" data-bs-toggle="modal" data-bs-target="#delete-modal" href="#"><i class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td>Michielle-Pierre</td>
                                            <td>Test@gmail.com</td>
                                            <td>+2126392222</td>
                                            <td>Approved</td>
                                            <td>Menu-Dinner</td>
                                            <td>5</td>
                                            <td>02-02-2024</td>
                                            <td class="text-center align-middle" style="max-height: 60px;height: 60px;"><a class="btn btnMaterial btn-flat primary semicircle" role="button" href="#"><i class="far fa-eye"></i></a><a class="btn btnMaterial btn-flat success semicircle" role="button" href="#"><i class="fas fa-pen"></i></a><a class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" role="button" style="margin-left: 5px;" data-bs-toggle="modal" data-bs-target="#delete-modal" href="#"><i class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
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
            </div>
        </div>
    </div>
    <div class="sidebar"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/Sidebar-Menu-sidebar.js"></script>
</body>

</html>