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
                            <h1 class="h3 mb-4 text-center">INFORMED CONSENT FOR PEDIATRIC BEHAVIOR MANAGEMENT TECHNIQUES</h1>
                            
                            <!-- Consent Card -->
                            <div class="text-justify" style="margin:50px;">



                                <p>One of our most important parental policies is to "inform before we perform." We wish to obtain your consent for any specific 
                                    dental procedures or techniques which might be of concern to patient or parent. Informed consent indicates your awareness of 
                                    sufficient information to allow you to make an informed personal choice concerning your child’s dental treatment after considering 
                                    the risks, benefits and alternatives.</p>

                                <p>There are several behaviour management techniques that are used by dentists to gain the cooperation of child patients to eliminate 
                                    disruptive behaviour or prevent patients from causing injury to themselves due to uncontrollable movements. The behaviour management 
                                    techniques used in this office are as follows:</p>

                                <p><strong>1.	Tell-Show-Do: </strong>The dentist or assistant explains to the child what is to be done using simple terminology and 
                                repetition and then shows the child what is done by demonstrating with instruments on a model, the dentist’s finger or the child’s finger.
                                 The procedure is then performed in the child’s mouth as described. Praise is used to reinforce cooperative behaviour.</p>

                                <p><strong>2.	Positive Reinforcement: </strong>
                                This technique rewards the child who displays and behaviour which is desirable. Rewards include compliments, praise, pat on the back, hug 
                                or a prize. It is left to the dentist’s discretion if the child is rewarded with a prize at the end of their visit, in order to reinforce 
                                that uncooperative behaviour is not tolerated in this office. A visit to the dental office does not guarantee a reward in the form of a prize.</p>

                                <p><strong>3.	Voice Control: </strong> The attention of a disruptive child is gained by changing the tone or increasing the volume of 
                                the dentist’s voice. Parents are reminded that if voice control is used on their child, the dentist or assistant is not angry with their child,
                                 but is using a technique to gain their child’s attention.</p>

                                <p><strong>4.	Mouth Props: </strong> A rubber or a plastic device is placed in the child’s mouth to prevent closing and possible injury when 
                                a child refuses or has a difficulty maintaining an open mouth.</p>

                                <p><strong>5.	Physical Restraint: </strong>Holding a child to restrain movements may be necessary for brief periods of time to allow 
                                uncooperative child to receive care in the office safely. We may utilize any or a combination of the following: dental auxiliary, or parent
                                 / guardian.</p>

                                <p><strong>6.	Papoose Board and Pedi-wrap: </strong> These are restraining devices for limiting the disruptive movements of a child in order 
                                to prevent injury and to enable the dentist to provide the indicated treatment. The child is wrapped in one of these devices, which is placed on
                                 a reclined dental chair.</p>

                                <p><strong>7.	Sedation: </strong> : Various drugs are used to relax a child who does not respond to other behavioural management techniques
                                 or who is unable to comprehend or cooperate for dental procedures due to his/her age or mental maturity. Your child will not be sedated without 
                                 informing you thoroughly and obtaining your consent for such procedure.</p>

                                <p><strong>8.	Parent/Guardian in the Treatment Room:</strong> Parents/Guardians are permitted to be with their child during the first cleaning
                                 or exam appointment. However, at each subsequent appointment, we ask that the parent/guardian retreat to the lobby area until their child’s 
                                 treatment has been completed. Our intentions are to establish a rapport with your child, to give them our full attention, to gain their 
                                 confidence and help them overcome apprehension. Also, the dentist may be performing an invasive procedure, such as a filling, and minimal 
                                 movement, conversation and distraction in and around the operative area are crucial for focus and optimal care of our patients. There may be 
                                 circumstances that require a parent/guardian to be present. This will be done on a case-by-case basis. We thank you for your cooperation and 
                                 support.</p>

                                <p>I, the undersigned, hereby authorize Dr. Ann Jeth D. Timbol to utilize the behaviour management techniques listed on this form, if needed, to 
                                    assist in providing necessary dental treatment for my child. I hereby acknowledge that I have read and understand this consent form, and that
                                     I have been given the opportunity to ask any questions I might have about the behaviour management techniques.</p>
                             

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
                                            onclick="submitPediatricConsentform();">
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