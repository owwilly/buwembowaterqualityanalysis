<?php
define("BASE",'/views/assets/');
define("DATABASEPATH", "views/assets/data/");  
?>
<!doctype html>
<html lang="en">
<?php include 'parts/head.php'; ?>
<body >
    <div class="wrapper">
    <?php include "parts/header.php"; ?>
    
    <?php include "parts/navbar.php"; ?>

    <div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                  Overview
                </div>
                <h2 class="page-title" style="color:red;">
                  Dashboard
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-deck row-cards">
            <h3 style="color:red;">Different Visualizations Per deistrict</h3>

            <div class="col-lg-6">
                <div class="card">
                  <div class="card-header border-0">
                    <h4 class="card-title"> Water Quality Statistical Data </h4>  

                    </div>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="card">
                  <div class="card-header border-0">
                    <input type="hidden" id="district" value="<?= $slug?>" >                
                    <div id="selectionPane" >
                        <label for="origin"><strong>Source Name Statistics:</strong></label>
                        <select id="selectOrigin" style="width: 100%;">
                            <option value="allOrigin" selected><?= $slug?> District Water Quality Data</option>
                        </select>
                    </div>

                  </div>
                </div>
              </div>

              <div class="col-lg-12">
                <div class="card">

                  <div class="card-table table-responsive">
                    <div id="mainWrapper">


                      <div id="graphs">
                        <div id="histogram"></div>
                        <div id="histogram_label">
                            <p>
                                <label>Change number of bins</label>
                                <input type="number" min="1" max="100" step="10" value="10" id="nBin">
                            </p>
                        </div>
                        <br>
                        <div id="bubbleChart"></div>
                        <br>
                        <div id="connectedScatter"></div>

                      </div>

                    </div>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <?php include "parts/footer.php"; ?>
    </div>
    </div>

    <!-- Load d3.js -->
    <script src="https://d3js.org/d3.v4.js"></script>
    <script src="https://d3js.org/d3-scale-chromatic.v1.min.js"></script>

    <!-- Libs JS -->
    <script src="<?= BASE ?>dist/libs/apexcharts/dist/apexcharts.min.js"></script>
    <!-- Tabler Core -->
    <script src="<?= BASE ?>dist/js/tabler.min.js"></script>
    <script src="<?= BASE ?>dist/js/demo.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.js" integrity="sha512-JjYSgzqo9K0IeYGEslMRYE8aO9tq7Ky3EQNmEVkAe6Cp14AwlJMLMnb0fpgEkr3YxJ8ghQiriOvZwIdRZieGIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?= BASE ?>app.js?v=<?= microtime() ?>"></script>
    </body>
</html>