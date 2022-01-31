 <!-- Main Sidebar -->
 <aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
     <div class="main-navbar">
         <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
             <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
                 <div class="d-table m-auto">
                     <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="<?= BASE_URL ?>images/bptp-logo.png" alt="Shards Dashboard">
                     <span class="d-none d-md-inline ml-1">BPTP KALSEL</span>
                 </div>
             </a>
             <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
                 <i class="material-icons">&#xE5C4;</i>
             </a>
         </nav>
     </div>
     <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
         <div class="input-group input-group-seamless ml-3">
             <div class="input-group-prepend">
                 <div class="input-group-text">
                     <i class="fas fa-search"></i>
                 </div>
             </div>
             <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search">
         </div>
     </form>
     <div class="nav-wrapper">
         <ul class="nav flex-column">
             <li class="nav-item">
                 <a class="nav-link <?= isset($_GET['page']) ? "" : "active" ?>" href="index.php">
                     <i style="font-size: 16px;" class="fas fa-home"></i>
                     <span>Beranda</span>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] == 'guest_book') ? "active" : "") : "" ?>" href="<?= BASE_URL ?>app/?page=guest_book">
                     <i style="font-size: 16px;" class="far fa-address-book"></i>
                     <span>Buku Tamu</span>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] == 'guest_data') ? "active" : "") : "" ?>" href="<?= BASE_URL ?>app/?page=guest_data">
                     <i style="font-size: 16px;" class="fas fa-users"></i>
                     <span>Data Tamu</span>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link <?= isset($_GET['page']) ? (($_GET['page'] == 'employee_data' || $_GET['page'] == 'employee_form') ? "active" : "") : "" ?>" href="<?= BASE_URL ?>app/?page=employee_data">
                     <i style="font-size: 16px;" class="fas fa-users"></i>
                     <span>Data Pegawai</span>
                 </a>
             </li>
         </ul>
     </div>
 </aside>
 <!-- End Main Sidebar -->