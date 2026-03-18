<?php
include_once("bars/properties.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $systemname; ?></title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS (with Popper.js) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php include_once("bars/toast.php"); ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">



                    <!-- Nav Tabs -->
                    <ul class="nav nav-tabs" id="myTabs" role="tablist" style="display:none;">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab"
                                aria-controls="tab1" aria-selected="false">Step 1</a>
                        </li>

                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content mt-4" id="myTabsContent">


                        <!--tab 3-->
                         
                        <div class="tab-pane fade show active" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                            <div class="col-lg-12 d-flex align-items-center" style="margin:50px;">
                           
                                <div>
           

                                </div>
                            </div>

                           
                             <!-- Page Heading -->
                            <center> <img src="img/<?php echo $headerlogo; ?>" alt="Logo"
                                    style="max-height:100px;">
                            <h1 class="h3 mb-4 text-center">INFORMED CONSENT FORM FOR ENDODONTIC TREATMENT (ROOT CANAL TREATMENT)</h1></center>
                            
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
                            <form class="mt-4">
                                <div class="form-row" style="margin:50px;">
                                    <div class="form-group col-md-6">
                                        <label for="dateSigned">Date</label>
                                        <input type="date" class="form-control" id="dateSigned">
                                        <label for="dateSigned">Patient's/Guardian's Name</label>
                                        <input list="patients" name="patient" id="patientName" class="form-control"
                                            onchange="getSelectedPatientId(this);">
                                        <datalist id="patients">

                                        </datalist>
                                        <input type="hidden" id="patientId" name="patientId">
                                        <label>Patient's/Guardian's Signature</label>
                                        <div class="border rounded p-3 signature-box"
                                            style="height: 80px; cursor: pointer;" id="patient-signature-box" onclick="openSignatureModal(function(sigData) {
                 setSignature('patient', sigData);
             })">
                                        </div>
                                        <input type="hidden" name="patient_signature" id="patient-signature-input">

                                    </div>
                                    <div class="form-group col-md-6">
                                        <br>
                                        <br><br>
                                        <label for="dentist">Dentist's Name</label>


                                        <input list="dentists" name="dentist" id="dentistName" class="form-control"
                                            onchange="setDentistSignature();" value="Dr. Ann Jeth D. Timbol" readonly>
                                        <datalist id="dentists">
                                            <?php
                                            include_once("bars/properties.php");
                                            foreach ($dentist as $d) {
                                                echo '<option value="' . htmlspecialchars($d) . '">';
                                            }
                                            ?>
                                        </datalist>
                                        <label>Dentist Signature</label>
                                        <div class="border rounded p-3 signature-box text-center"
                                            style="height: 80px; cursor: pointer;" id="dentist-signature-box" >

                                        </div>
                                        <input type="hidden" name="dentist_signature" id="dentist-signature-input" value="img/' . $dentistSignature . '" alt="Company Logo" style="height: 40px; display: inline-block; vertical-align: middle; margin-bottom: 0.3em;">
                                        
                                    </div>

                                </div>

                                <div class="form-row mt-3">
                                    <div class="form-group col-md-6">
                                    </div>
                                    <div class="form-group col-md-6">

                                    </div>
                                </div>


                            </form>



                            <div id="signature-modal">
                                <div class="modal-content">
                                    <h3>Draw your Signature</h3>
                                    <canvas id="signature-pad"></canvas><br>
                                    <button onclick="clearPad()">Clear</button>
                                    <button onclick="confirmSignature()">Done</button>
                                    <button onclick="closeSignatureModal()">Cancel</button>
                                </div>
                            </div>

                            <footer class="sticky-footer">
                                <div class="container my-auto">
                                    <div class="copyright text-center my-auto">

                                        <a href="consentList1.php" class="btn btn-danger btn-icon-split">
                                            <span class="icon text-white-50"><i class="fas fa-fw fa-times"></i></span>
                                            <span class="text">Close</span>
                                        </a>
                                        <a href="#" class="btn btn-success btn-icon-split"
                                            onclick="submitRootCanalConsentform();">
                                            <span class="icon text-white-50"><i class="fas fa-fw fa-save"></i></span>
                                            <span class="text">Submit</span>
                                        </a>

                                    </div>
                                </div>
                            </footer>


                            <!-- END OF YOUR ADDITIONAL CODE SNIPPET -->
                        </div>
                    </div>
                </div>

                <!-- Page Heading -->

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

            <script src="js/camera.js"></script>
            <script src="js/custom-v1.js"></script>
            <script src="js/signature.js"></script>


            <script>
                const dentistSignatures = <?php echo json_encode(array_combine($dentist, $dentistSignature)); ?>;
            </script>
            <script src="controllers/activityLogsController.js"></script>
            <script src="controllers/waiverController-v2.js"></script>



</body>

</html>