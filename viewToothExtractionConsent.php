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
                            <h1 class="h3 mb-4 text-center">INFORMED CONSENT FORM FOR TOOTH EXTRACTION</h1></center>
                            
                            <!-- Consent Card -->
                            <div class="text-justify" style="margin:30px;">



                                <p>I, the undersigned, hereby give consent to Dr. Ann Jeth D. Timbol to perform Tooth Extraction (“Treatment”)
                                     on me or my dependent. I understand that unforeseen conditions may arise during the procedure that could necessitate
                                      additional or alternative treatments, and I authorize such procedures as deemed necessary by my dentist.</p>

                                <p>I acknowledge that the nature, purpose, and expected outcomes of the recommended Treatment have been explained to me. 
                                    I understand that no guarantees or promises have been made regarding the final results.</p>

                                <p><strong>Alternatives to Treatment</strong><br>I have been informed about alternatives to the recommended Treatment. I understand 
                                the potential consequences of choosing not to proceed, including pain, infection, and worsening of dental or overall health.</p>

                                <p><strong>Potential Risks and Complications Related to Tooth Extraction</strong><br>
                                I understand that tooth extraction procedures carry certain risks and complications, which may include, but are not limited to:</p>

                                <p><strong>•	Post-Operative Bleeding and Infection:</strong> Bleeding, oozing, or bone infection following the procedure.</p>

                                <p><strong>•	Bruising and Swelling:</strong> Temporary bruising or swelling, and in some cases, restricted mouth opening for days or weeks.</p>

                                <p><strong>•	Bone Loss or Fracture: </strong> Removal of bone during extraction or a jaw fracture in rare cases.</p>

                                <p><strong>•	Damage to Adjacent Teeth or Restorations:</strong> Nearby teeth or dental work may be affected during the procedure.</p>

                                <p><strong>•	Retained Root Tips:</strong> Roots may break and remain in the bone, requiring additional surgery or referral to a specialist.</p>

                                <p><strong>•	Delayed Healing or Dry Socket:</strong> A dry socket is a condition after a tooth extraction where there is loss of blood clot that 
                                is supposed to fill the socket from which the tooth was extracted. As occurrence of this leaves the nerves exposed and thus, is very painful. This may 
                                develop after 3-4 days post-surgery and you must notify us of this occurrence.</p>

                                <p><strong>•	Sinus Involvement: </strong> Potential sinus complications with upper teeth extractions, possibly requiring further treatment.</p>
                                <p><strong>•	Nerve Injury:  </strong> Temporary or permanent numbness or tingling in the lips, chin, tongue, or surrounding areas due to nerve involvement.</p>
                                <p><strong>•	Anesthesia Effects: </strong> Swelling, muscle tenderness, or numbness from anesthesia, typically temporary but rarely permanent.</p>
                                <p><strong>•	Medication or Radiation-Related Bone Healing Issues: </strong>If taking bisphosphonates or having undergone head/neck radiation therapy, 
                                there may be a higher risk of poor bone healing or bone death.</p>
                                
                                <p><strong>Acknowledgment and Consent</strong><br>I confirm that:</p>
                                <p>•	I have had the opportunity to ask questions and have received satisfactory answers.</p>
                                <p>•	I have been provided sufficient information to make an informed decision about my dental care.</p>
                                <p>•	I understand the risks, benefits, and alternatives related to the recommended Treatment.</p>
<br>
                               <p> <i>By signing below, I consent to the performance of the Treatment as described above.</i></p>

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
            <script src="controllers/toothExtractionConsentController.js"></script>
            <script src="controllers/divPrinterController-v1.js"></script>

            <script src="js/custom-v2.js"></script>
</body>

</html>