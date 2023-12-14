<?php 
include('includes/header.php');
include('includes/navbar.php');
include('includes/sidebar.php');
?>

      <!-- main -->
      <main class="main-content-wrapper">
        <div class="container">
          <div class="row mb-8">
            <div class="col-md-12">
              <!-- pageheader -->
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h2>Vendors</h2>
                    <!-- breacrumb -->
                    <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                      <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Vendors</li>
                    </ol>
                  </nav>
                </div>
                <div>
                  <!-- button -->
                  <a href="vendor-grid.php" class="btn btn-primary btn-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                      class="bi bi-grid" viewBox="0 0 16 16">
                      <path
                        d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
                    </svg>
                  </a>
                  <a href="vendor-list.php" class="btn btn-light  btn-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                      class="bi bi-list-task" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                        d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z" />
                      <path
                        d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z" />
                      <path fill-rule="evenodd"
                        d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z" />
                    </svg>
                  </a>
                </div>

              </div>
            </div>
          </div>
          <!-- row -->
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 g-lg-6">
            <!-- col -->
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img -->
                    <img src="../assets/images/stores-logo/stores-logo-1.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">
                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">E-Grocery Super Market</a></h2>
                    <div class="mb-2">Seller ID: #009</div>
                    <div>heathercarpenter@dayrep.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$200.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$200.00</h5>
                    </div>

                  </div>


                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img --><img src="../assets/images/stores-logo/stores-logo-2.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">

                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">DealShare Mart</a></h2>
                    <div class="mb-2">Seller ID: #008</div>
                    <div>werve1962@superrito.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$350.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$150.00</h5>
                    </div>



                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img --><img src="../assets/images/stores-logo/stores-logo-3.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">

                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">DMart</a></h2>
                    <div class="mb-2">Seller ID: #007</div>
                    <div>trablinever@armyspy.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$120.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$45.00</h5>
                    </div>

                  </div>


                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img --><img src="../assets/images/stores-logo/stores-logo-4.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">

                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">Blinkit Store</a></h2>
                    <div class="mb-2">Seller ID: #006</div>
                    <div>steened@rhyta.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$1200.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$400.00</h5>
                    </div>



                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img --><img src="../assets/images/stores-logo/stores-logo-5.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">

                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">StoreFront Super Market</a></h2>
                    <div class="mb-2">Seller ID: #005</div>
                    <div>mansper@einrot.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$230.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$50.00</h5>
                    </div>

                  </div>


                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img --><img src="../assets/images/stores-logo/stores-logo-6.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">

                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">BigBasket</a></h2>
                    <div class="mb-2">Seller ID: #004</div>
                    <div>lizin@armyspy.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$560.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$120.00</h5>
                    </div>

                  </div>


                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img --><img src="../assets/images/stores-logo/stores-logo-7.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">

                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">Swiggy Instamart</a></h2>
                    <div class="mb-2">Seller ID: #003</div>
                    <div>tured@jourrapide.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$780.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$360.00</h5>
                    </div>

                  </div>


                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img --><img src="../assets/images/stores-logo/stores-logo-8.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">

                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">Online Grocery Mart</a></h2>
                    <div class="mb-2">Seller ID: #002</div>
                    <div>liturname@einrot.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$460.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$175.00</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <!-- card -->
              <div class="card border-0 text-center card-lg">
                <div class="card-body p-6">
                  <div>
                    <!-- img --><img src="../assets/images/stores-logo/stores-logo-9.svg" alt=""
                      class="rounded-circle icon-shape icon-xxl mb-6">
                    <!-- content -->
                    <h2 class="mb-2 h5"><a href="#!" class="text-inherit">Spencers</a></h2>
                    <div class="mb-2">Seller ID: #001</div>
                    <div>fark1952@rhyta.com</div>
                  </div>
                  <!-- meta content -->
                  <div class="row justify-content-center mt-8">
                    <div class="col">
                      <div>Gross Sale</div>
                      <h5 class="mb-0 mt-1">$630.00</h5>
                    </div>
                    <div class="col">
                      <div>Earning</div>
                      <h5 class="mb-0 mt-1">$190.00</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
    </main>

  </div>


 <?php 
include('includes/footer.php');
?>