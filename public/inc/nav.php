<nav class="navbar navbar-expand-lg fixed-top py-3 backdrop" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
          <a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="/"> 
            <img class="d-inline-block align-top img-fluid" src="assets/img/gallery/logo-icon.png" alt="" width="50" />
            <span class="text-primary fs-4 ps-2">DeveshTourTravels</span>
          </a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
              <li class="nav-item"><a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ' text-600' ;?>" aria-current="page" href="24x7.php">24x7</a></li>
              <li class="nav-item"><a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'taj_mahal.php' ? 'active' : ' text-600' ;?>"  href="taj_mahal.php">The Taj</a></li>
              <li class="nav-item"><a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'char_dham.php' ? 'active' : ' text-600' ;?>" href="char_dham.php">Char Dham</a></li>
              <li class="nav-item"><a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'amarnath_yatra.php' ? 'active' : ' text-600' ;?>" href="amarnath_yatra.php">Amarnath</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link text-600 dropdown-toggle" data-bs-toggle="dropdown" href="tour_packages.php" role="button" aria-expanded="false">Packages</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="amarnath_yatra.php">Amarnath yatra package</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="char_dham.php">Uttarakhand package</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="taj_mahal.php">Taj mahal package</a></li>
                  <li><a class="dropdown-item" href="#">Himachal package</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link  <?php echo basename($_SERVER['PHP_SELF']) == 'contact_us.php' ? 'active' : ' text-600' ;?>" href="contact_us.php">Contact Us </a></li>
            </ul>
            <form class="ps-lg-5">
              <button class="btn btn-lg btn-outline-primary order-0" type="submit">+91 9711113179</button>
            </form>
          </div>
        </div>
      </nav>