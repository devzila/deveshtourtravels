<nav class="navbar navbar-expand-lg fixed-top py-3 backdrop" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container">
          <a class="navbar-brand d-flex align-items-center fw-bold fs-2" href="/"> 
            <img class="d-inline-block align-top img-fluid" src="assets/img/gallery/logo-icon.png" alt="" width="50" />
            <span class="text-primary fs-4 ps-2">DeveshTravels</span>
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
                      <a class="dropdown-item dropdown-toggle" href="#">Provide taxi services for the following. </a>
                      <ul class="dropdown-menu">
                         <li><a class="dropdown-item"  href="local_taxi.php">Local and Outstation</a></li>
                        <li><a class="dropdown-item"  href="conference_tour.php">Conference</a></li>
                        <li><a class="dropdown-item"  href="wedding_tour.php">Wedding</a></li>
                        <li><a class="dropdown-item"  href="ad_film_shooting.php"> Film & Ad Shooting</a></li>
                        <li><a class="dropdown-item"  href="outstation_rates.php">Local and Outstation charges</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a class="dropdown-item dropdown-toggle" href="#">North India Tourist Place</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item"  href="utarakhand_tour.php">  Uttrakhand (Hill station)</a></li>
                        <li><a class="dropdown-item"  href="himachal_tour.php"> Himachal Pradesh (Hill station)</a></li>
                        <li><a class="dropdown-item"  href="jammu_tour.php">Jammu & Kashmir (Hill station)</a></li>
                        <li><a class="dropdown-item"  href="ladakh_tour.php">  Ladakh ( Hill station)</a></li>
                        <li><a class="dropdown-item"  href="amritsar.php">   Amritsar Golden Temple & wagah border</a></li>
                        <li><a class="dropdown-item"  href="rajasthan_tour.php"> Rajasthan</a></li>
                        <li><a class="dropdown-item"  href="uttarpradesh_tour.php"> Uttar Pradesh</a></li>
                        <li><a class="dropdown-item"  href="madhaya_pradesh.php">  Madhya Pradesh</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-item dropdown-toggle" href="#">Noth India Pilgrimage Place</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item"  href="rishikesh.php"> Rishikesh</a></li>
                        <li><a class="dropdown-item"  href="haridwar.php"> Haridwar</a></li>
                        <li><a class="dropdown-item"  href="bhuvneshwar.php">  Patal Bhuvneshwar</a></li>
                        <li><a class="dropdown-item"  href="kailash.php">Aadi Kailash Om parvat</a></li>
                        <li><a class="dropdown-item"  href="mathura.php">  Mathura</a></li>
                        <li><a class="dropdown-item"  href="khatusyam.php"> Khatu Shyam</a></li>
                        <li><a class="dropdown-item"  href="balaji.php">Mehandipur Balaji</a></li>
                        <li><a class="dropdown-item"  href="salasar.php"> Salasar Balaji</a></li>
                        <li><a class="dropdown-item"  href="allahabad.php">   Allahabad </a></li>
                        <li><a class="dropdown-item"  href="varanasi.php">  Varanasi/Ayodhya</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-item dropdown-toggle" href="#">Tour packages</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item"  href="rishikesh_3_nights.php">  Uttrakhand Rishikesh(Hill station)</a></li>
                        <li><a class="dropdown-item"  href="chamba_3_nights.php">  Uttrakhand Chambha (Hill station)</a></li>
                        <li><a class="dropdown-item"  href="bhimtal_nainital_4_nights.php">  Uttrakhand Bhimtal Nainital (Hill station)</a></li>
                        <li><a class="dropdown-item"  href="gumkhal_2_nights.php">  Uttrakhand Gumkhal (Hill station)</a></li>
                        <li><a class="dropdown-item"  href="haridwar_2_nights.php">  Uttrakhand Haridwar(Hill station)</a></li>
                        <li><a class="dropdown-item"  href="jim_corbett_1_nights.php">  Uttrakhand Jim corbett(Hill station)</a></li>
                        <li><a class="dropdown-item"  href="khirsu_2_nights.php">  Uttrakhand Khirsu (Hill station)</a></li>
                        <li><a class="dropdown-item"  href="khirsu_4_nights.php">  Uttrakhand  Khirsu  4 nights(Hill station)</a></li>
                        <li><a class="dropdown-item"  href="khirsu_auli_4_nights.php">  Uttrakhand Khirsu auli(Hill station)</a></li>
                        <li><a class="dropdown-item"  href="kumaon_8_nights.php">  Uttrakhand  Kumaon (Hill station)</a></li>
                        <li><a class="dropdown-item"  href="mussoorie_3_nights.php">  Uttrakhand Mussoorie (Hill station)</a></li>
                        <li><a class="dropdown-item"  href="nainital_2_nights.php">  Uttrakhand Nainital 2 nights (Hill station)</a></li>
                        <li><a class="dropdown-item"  href="nainital_almora_7_nights.php">  Uttrakhand Nainital ALmora (Hill station)</a></li>
                        <li><a class="dropdown-item"  href="nainital_mukteshwar_5_nights.php">  Uttrakhand Nainital Mukteshwar (Hill station)</a></li>
                        
                        
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
