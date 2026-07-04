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

    <title>QualiTreat Dental Clinic</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">


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
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card shadow mb-12">
                        <div class="card-header <?php echo $cards; ?>">
                            View Orthodontics Waiver
<a href="consentList1.php"><button class="btn btn-secondary btn-sm btn-circle float-right"
                                         title="Back to List">
                                    
                                        <i class="fas fa-times-circle"></i></button></a>
                            <button id="divPrinter" class="btn btn-success btn-sm btn-circle float-right"
                                onclick="printDiv('bodyResult')" title="Print E-SOA"><i
                                    class="fas fa-print"></i></button>
                        </div>
                        <div class="card-body" id="bodyResult">

                            <input type="hidden" value="<?php echo $_GET['clientId']; ?>" id="clientId">
                                                     

                           


                             <!-- Page Heading -->
                            <center> <img src="img/<?php echo $headerlogo; ?>" alt="Logo"
                                    style="max-height:100px;">
                            <h1 class="h3 mb-4 text-center">INFORMED CONSENT FORM FOR ENDODONTIC TREATMENT <br>(ROOT CANAL TREATMENT)</h1></center>
                            
                            <!-- Consent Card -->
                            <div class="text-justify" style="margin:30px;">



                                <p>I have been made aware of my condition requiring endodontic (root canal) therapy of Tooth no. _____ in the expert opinion of my dentist/s.</p>

                                <p>II understand that root canal treatment is a procedure to retain a natural tooth, which may otherwise require extraction. Although root canal
                                     therapy has a high degree of clinical success, there can be no guarantee of success because of the nature of the procedure and the various biological 
                                     factors involved.</p>

                                <p>I understand that an alternative treatment might be (but not limited to) extraction of the involved tooth or teeth.</p>
                                <p>I understand that the consequences of doing nothing will lead to worsening of the condition, further infection, cystic
                                     formation, swelling, pain, loss of tooth, and/or other systemic disease and infection problems.</p>


                                <p><strong>Some complications of root canal therapy may be, but are not limited to:</strong>
                                </p>

                                <p>•	Failure of the procedure necessitating re-treatment, root surgery, or extraction</p>

                                <p>•	Post-operative pain, swelling, bruising, and/or restricted jaw opening that may persist for several days or longer</p>

                                <p>•	Breakage of an instrument inside the canal during treatment, which may be left as is, or may require surgery for removal</p>

                                <p>•	Perforation of the canal with instruments, which may require additional surgical treatment or result in the loss of the tooth</p>

                                <p><strong>•	Retained Root Tips:</strong> Roots may break and remain in the bone, requiring additional surgery or referral to a specialist.</p>

                                <p>•	Successful completion of the root canal procedure does not prevent future decay or fracture. An endodontically treated tooth will become 
                                    more brittle and may discolor. In most cases a full crown is recommended after treatment to lessen the chance of fracture.</p>
<br>
                               <p> <i>By providing my signature, I certify that I understand the recommended treatment, the risks of such treatment, any alternatives and the risks of these alternatives
                                including the consequences of doing nothing. I have had a chance to have all of my questions answered.</i></p>

                            </div>


                            <!-- Signature Area -->
                            <form>
                                <div style="display: flex; flex-wrap: wrap; margin-left: 50px;" id="waiverDetails">

                                </div>





                            </form>








                            <!-- END OF YOUR ADDITIONAL CODE SNIPPET -->
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

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>
            <script src="controllers/logOutConroller.js"></script>
            <script src="controllers/sessionController.js"></script>
            <script src="controllers/rootCanalTreatmentConsentController.js"></script>
            <script src="controllers/divPrinterController-v1.js"></script>

            <script src="js/custom-v2.js"></script>
</body>

</html>