<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- icon -->
    <link rel="stylesheet" href="https://github.com/feathericons/feather#feather" />
    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css" />
    <title>Home</title>
  </head>
  <body >

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" width="100px">
      <div class="container" type="disabled">
        <a class="navbar-brand" href="../page/loginPage.php">
          <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg
        ></a>
          <!-- if else login -->
          <i class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
              ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle></svg
            ></a>
            <ul class="dropdown-menu nav-item" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Sign in</a></li>
              <li><a class="dropdown-item" href="../page/registerpage.php">Register</a></li>
            </ul>
          </i>
        </div>
      </div>
    </nav>


    <!-- End of Nav -->
    <!-- Content -->
    <div class="content" id="loginPage" >
      <!-- Body -->
      <div class="container">
            <div class="container min-vh-100 d-flex align-items-center justify-content-center">
                <div class="card text-dark bg-light ma-5 shadow" style="min-width: 25rem;">
                    <div class="card-header fw-bold">Login</div>
                    <div class="card-body">
                        <form action="../process/loginProcess.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">email</label>
                                <input class="form-control" id="email" name="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="login">Login</button>
                            </div>
                        </form>
                            <p class="mt-2 mb-0">Belum punya akun ? <a href="./registerPage.php" class="textprimary">Klik Disini!</a></p>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <!-- Footer -->
    <div class="footer bg-dark text-light">
        <div class="container">
        <div class="row align-items-start">
          <div class="col text-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book">
                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg>
            <br>
            <label for="logo">NovelReader</label>
          </div>
          <div class="col">
            <ul>
                <li>About</li>
                <li>Home</li>
                <li>Agreement</li>
                <li>zzzzzzzzz</li>
            </ul>
          </div>
          <div class="col text-center">
            <p>©2021 NovelReader</p>
          </div>
        </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- my JS -->
    <script src="../script/script.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
