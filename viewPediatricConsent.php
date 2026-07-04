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
                            <h1 class="h3 mb-4 text-center">INFORMED CONSENT FOR PEDIATRIC BEHAVIOR MANAGEMENT TECHNIQUES</h1></center>
                            
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
            <script src="controllers/pediatricConsentController.js"></script>
            <script src="controllers/divPrinterController-v1.js"></script>

            <script src="js/custom-v2.js"></script>
</body>

</html>