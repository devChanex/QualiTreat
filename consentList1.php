<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>QualiTreat Dental Clinic - Consent List</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="css/sortable.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include_once('bars/sidebar.php'); ?>


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <?php include_once('bars/topbar.php'); ?>


                <!-- Begin Page Content -->
                <div class="container-fluid" id="content-table">

                    <!-- Page Heading -->
                    <div class="card shadow mb-12">
                        <div class="card-header py-3 d-flex justify-content-between <?php echo $cards; ?>">
                            <h6 class="m-0 font-weight-bold">Consent List</h6>


                            <button class="btn btn-success btn-circle edit-btn" data-toggle="modal"
                                data-target="#pickConsentType">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="card-header py-3 d-flex justify-content-between">
                                <h6 class="m-0 font-weight-bold"></h6>
                                <div class="d-flex align-items-center gap-2 ms-auto">
                                    <strong>Search: </strong><input type="search" id="tableSearch"
                                        class="form-control form-control-sm" placeholder="" style="width: 300px;"
                                        oninput="search();">

                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered text-dark" id="sortableTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>

                                            <th onclick="sortTable(this)">Name <span class="sort-icon"></span></th>
                                            <th onclick="sortTable(this)">Doctor <span class="sort-icon"></span>
                                            </th>
                                            <th onclick="sortTable(this)">Date <span class="sort-icon"></span>
                                            </th>
                                            <!-- <th onclick="sortTable(this)">Gender <span class="sort-icon"></span>
                                            </th> -->
                                            <th onclick="sortTable(this)">Consent Type <span class="sort-icon"></span>
                                            </th>

                                            <th>Action</th>
                                            <!-- No onclick, since actions typically aren' t sortable -->



                                        </tr>
                                    </thead>

                                    <tbody id="resultResponseBody">



                                    </tbody>
                                </table>
                            </div>
                            <input type="hidden" id="currentPage" value="1">
                            <div id="pagination"></div>






                            <!-- END OF YOUR ADDITIONAL CODE SNIPPET -->
                        </div>

                    </div>
<!-- Modal: Pick Consent Type -->
<div class="modal fade" id="pickConsentType" tabindex="-1" role="dialog" aria-labelledby="pickConsentTypeLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="pickConsentTypeLabel">Select Consent Type</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <form id="consentForm">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="consent" id="consent1" value="Pediatric">
            <label class="form-check-label" for="consent1">
              Pedriatic Consent
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="consent" id="consent2" value="Tooth Extraction">
            <label class="form-check-label" for="consent2">
              Tooth Extraction Consent
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="consent" id="consent2" value="Orthodontic Waiver">
            <label class="form-check-label" for="consent3">
              Orthodontic Waiver
            </label>
          </div>
        </form>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="submitConsent()">Submit</button>
      </div>

    </div>
  </div>
</div>


                   

                             


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include_once('bars/footer.php'); ?>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/datatables-demo.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>
            <script src="js/custom-v2.js"></script>
            <script src="controllers/logOutConroller.js"></script>
            <script src="controllers/sessionController.js"></script>
            <script src="controllers/activityLogsController.js"></script>
            <script src="controllers/consentListController1.js"></script>
            <!-- <script src="controllers/deleteClientProfileController.js"></script> -->
            <script src="js/sortable.js"></script>



</body>

</html>