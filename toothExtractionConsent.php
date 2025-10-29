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
                                    style="max-height:100px;"></center>
                            <h1 class="h3 mb-4 text-center">INFORMED CONSENT FORM FOR TOOTH EXTRACTION</h1>
                            
                            <!-- Consent Card -->
                            <div class="text-justify" style="margin:50px;">



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
                                            onclick="submitToothExtractionConsentform();">
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