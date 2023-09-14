<nav class="navbar navbar-expand-lg fixed-top py-3 backdrop" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
          <a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="/"> 
            <img class="d-inline-block align-top img-fluid" src="assets/img/gallery/logo-icon.png" alt="" width="50" />
            <span class="text-primary fs-4 ps-2">DeveshTourTravels</span>
          </a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0">
              <li class="nav-item"><a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ' text-600' ;?>" aria-current="page" href="index.php">24x7</a></li>
              <li class="nav-item"><a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'taj_mahal.php' ? 'active' : ' text-600' ;?>"  href="taj_mahal.php">Taj Mahal Trip</a></li>
              <li class="nav-item"><a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'char_dham.php' ? 'active' : ' text-600' ;?>" href="char_dham.php">Char Dham Yatra</a></li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="services.php" id="services" data-flip="false"
                      data-toggle="dropdown" aria-expanded="false">Services</a>
                  <ul class="dropdown-menu" aria-labelledby="services">
                    <li class="dropdown">
                      <a class="dropdown-item dropdown-toggle" href="#">Taxi Services</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="himachal_tour.php">Himachal Tour</a></li>
                        <li><a class="dropdown-item" href="local_taxi.php">Local Taxi</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a class="dropdown-item dropdown-toggle" href="#">North India Tour</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="mathura.php">Mathura Tour</a></li>
                        <li><a class="dropdown-item" href="rajasthan_tour.php">Rajasthan Tour</a></li>
                      </ul>
                    </li>

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