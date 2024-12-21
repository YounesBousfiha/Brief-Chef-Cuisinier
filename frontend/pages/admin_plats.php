<?php
    include '../includes/header.php';
    include '../includes/platFunctions.php';

    $plats = getPlats($conn);
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if($_POST['operation'] == 'addPlat') {
            $user = ValidateUser($conn);

            $created_by = $user['ID'];

            $dishname = $_POST['dishname'];
            $description = $_POST['description'];

            $isAdded = ajouterPlat($conn, $dishname, $description, $created_by);

            if($isAdded) {
                header("Refresh:0");
            }
            
        } elseif ($_POST['operation'] == 'delete_plat') {
            $plat_id = $_POST['plat_id'];

            $isDeleted = deletePlat($conn, $plat_id);

            if($isDeleted) {
                header("Refresh:0");
            }
        }
    }
?>
    <div class="modal fade" id="ajoutePlat" tabindex="-1" aria-labelledby="ajouteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ajouteModalLabel">Fait une Reservation</h5>
                    <button type="button" id="btn-close" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modaSignupl-body px-3">
                    <form action="#" method="POST" enctype="multipart/form-data" id="platForm">
                        <input type="hidden" name="operation" value="addPlat">
                        <div class="mb-3">
                            <label class="form-label">Dish Name</label>
                            <input type="text" name="dishname" class="form-control" placeholder="Dish name...">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Dish Description</label>
                            <textarea type="text" name="description" class="form-control" placeholder=""></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
                include '../includes/sidebar.php';
            ?>
            <div class="col">
                <div class="row">
                    <div class="col-12 col-sm-6 col-md-6 col-xxl-12">
                        <h3 class="text-dark mb-4" style="margin-top: 24px;">Your Plats</h3>
                        <div class="d-flex justify-content-center">
                            <button class="btn text-white w-25" data-bs-toggle="modal" data-bs-target="#ajoutePlat" style="background: #768499;margin-bottom: 20px;">Ajoute un Plat</button>
                        </div>
                    </div>
                </div>
                <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3 mb-5">
                    <?php 
                        foreach($plats as $plat) {
                            echo renderPlats($plat);
                        }
                    ?>
                </div>

                <footer class="bg-dark text-center text-white">
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/Sidebar-Menu-sidebar.js"></script>
    <script>
        document.getElementById('platForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            let isValid = true;
            const dishname = document.querySelector('input[name="dishname"]');
            const description = document.querySelector('textarea[name="description"]');
            const dishimage = document.querySelector('input[name="dishimage"]');

            if (!dishname.value.trim()) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Dish name is required',
                });
                isValid = false;
            }

            if (!description.value.trim()) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Description is required',
                });
                isValid = false;
            }

            if (isValid) {
                this.submit();
            }
        });
    </script>
</body>

</html>