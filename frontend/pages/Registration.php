<?php
  include '../includes/header.php';

  ?>
    <div class="d-flex d-xl-flex align-items-center align-items-xl-center" style="width: 100%;height: 100%;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-12 col-xl-10">
                    <div class="card shadow-lg o-hidden border-0 my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-flex">
                                    <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;../assets/img/durvill_logo.jpg&quot;);"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h4 class="text-dark mb-4">SignUp</h4>
                                        </div>
                                        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="user">
                                            <div class="mb-3">
                                              <input class="form-control form-control-user" type="text"  placeholder="FirstName.." name="Prenom">
                                            </div>
                                            <div class="mb-3">
                                              <input class="form-control form-control-user" type="text"  placeholder="LastName.." name="Nom">
                                            </div>
                                            <div class="mb-3">
                                              <input class="form-control form-control-user" type="phone"  placeholder="Phone Number" name="Phone">
                                            </div>
                                            <div class="mb-3">
                                              <input class="form-control form-control-user" type="email"  aria-describedby="emailHelp" placeholder="Enter Email Address..." name="Email" style="margin-top: 10px;">
                                            </div>

                                            <div class="mb-3">
                                              <input class="form-control form-control-user" type="password"  placeholder="Password" name="Password">
                                            </div>
                                            <div class="mb-3">
                                              <input class="form-control form-control-user" type="password"  placeholder="Password Confirmation" name="PasswordConfirmation" style="margin-top: 10px;">
                                            </div>
                                            <div class="mb-3">
                                                <div class="custom-control custom-checkbox small"></div>
                                            </div>

                                            <button class="btn btn-primary d-block btn-user w-100" name="operation" value="signup" type="submit" style="background: #82471f;">SignUp</button>

                                        </form>
                                        <div class="text-center"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>