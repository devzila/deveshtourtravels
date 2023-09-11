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
                <a class="nav-link text-600 dropdown-toggle" data-bs-toggle="dropdown" href="tour_packages.php" role="button" aria-expanded="false">Services</a>
                <ul class="dropdown-menu">
                  <a class="dropdown-item" href="#">
                    Provide taxi services for the following. &raquo;
                  </a>
                  <ul class="dropdown-menu dropdown-submenu"> 
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="local_taxi.php">Local and Outstation</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="conference_tour.php">Conference</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="wedding_tour.php">Wedding</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="ad_film_shooting.php"> Film & Ad Shooting</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="outstation_rates.php">Local and Outstation charges</a></li>
                  </ul>
                  <a class="dropdown-item" href="#">
                    North India Tourist Place  &raquo;
                  </a>
                  <ul class="dropdown-menu dropdown-submenu">
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="utarakhand_tour.php">  Uttrakhand (Hill station)</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="himachal_tour.php"> Himachal Pradesh (Hill station)</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="jammu_tour.php">Jammu & Kashmir (Hill station)</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="ladakh_tour.php">  Ladakh ( Hill station)</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="amritsar.php">   Amritsar Golden Temple & wagah border</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="rajasthan_tour.php"> Rajasthan</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="uttarpradesh_tour.php"> Uttar Pradesh</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="madhaya_pradesh.php">  Madhya Pradesh</a></li>
                 </ul>
                  <a class="dropdown-item" href="#">
                    Noth India Pilgrimage Place  &raquo;
                  </a>
                  <ul class="dropdown-menu dropdown-submenu">
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="rishikesh.php"> Rishikesh</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="haridwar.php"> Haridwar</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="bhuvneshwar.php">  Patal Bhuvneshwar</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="kailash.php">Aadi Kailash Om parvat</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="mathura.php">  Mathura</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="khatusyam.php"> Khatu Shyam</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="balaji.php">Mehandipur Balaji</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="salasar.php"> Salasar Balaji</a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="allahabad.php">   Allahabad </a></li>
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="varanasi.php">  Varanasi/Ayodhya</a></li>
                  </ul>
                  <a class="dropdown-item" href="#">
                    North East Hill station  &raquo;
                  </a>
                  <ul class="dropdown-menu dropdown-submenu" >
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="varanasi.php"> goa</a></li>
                 </ul>
                  <a class="dropdown-item" href="#">
                    Tour packages &raquo;
                  </a>
                  <ul class="dropdown-menu dropdown-submenu" >
                  <li><a class="dropdown-item" class="nav-link active" aria-current="page" href="tour_packages.php"> Tour Packages</a></li>
                 </ul>
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