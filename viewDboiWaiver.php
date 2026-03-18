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
                            <h1 class="h3 mb-4 text-center">INFORMED CONSENT FORM FOR DENTAL CROWNS / BRIDGES / ONLAYS / INLAYS</h1></center>
                            
                            <!-- Consent Card -->
                            <div class="text-justify" style="margin:50px;">


                                <strong>REDUCTION OF THE TOOTH STRUCTURE</strong><br>
                                <p>In order to replace decayed or otherwise traumatized teeth, it is necessary to modify the existing tooth or teeth so that crowns (caps) and/or bridges may be 
                                    placed upon them. Tooth preparation will be done as conservatively as practical. In preparation of teeth, anesthetics are usually needed. At times there may 
                                    be swelling, jaw muscle tenderness or even a resultant numbness of the tongue, lips, teeth, jaws and/or facial tissues which is usually temporary, or very rarely, 
                                    permanent.</p>
                                
                                <strong>REDUCTION OF THE TOOTH STRUCTURE</strong><br>
                                <p>Often, after the preparation of teeth or the reception of either crowns or bridges, the teeth may exhibit sensitivity. It may be mild to severe. This sensitivity may
                                 last only for a short period of time or may last for much longer periods. If it is persistent, notify us inasmuch as this sensitivity may be from some other source.</p>

                                 <strong>ABUTMENT TEETH FOR CROWNED/ONLAYED OR BRIDGE MAY REQUIRE ROOT CANAL TREATMENT</strong><br>
                                <p>Teeth, after being treated, may develop a condition known as pulpitis. The tooth or teeth may have been traumatized from an accident, deep decay, extensive preparation, 
                                    or other causes. It is sometimes necessary to do root canal treatments in these teeth. If teeth remain too sensitive for long periods of time following crowning,
                                     root canal treatment may be necessary. Infrequently, the tooth (teeth) may abscess or otherwise not heal which may require root canal treatment, root surgery, or 
                                     possibly extraction. There will be additional fees associated with these treatments.</p>
                                
                                <strong>BREAKAGE</strong><br>
                                <p>Crowns/Onlays and bridges may possibly chip or break. Many factors could contribute to this situation such as chewing excessively hard materials, changes in biting forces,
                                     traumatic blows to the mouth, etc. Unobservable cracks may develop in crowns from these causes but the crowns/onlays/bridges may not actually break until chewing soft foods
                                    or possibly for no apparent reason. Breakage or chipping seldom occurs due to defective materials or construction unless it occurs soon after placement.</p>

                                <strong>UNCOMFORTABLE OR STRANGE FEELING</strong><br>
                                <p>This may occur because of the differences between natural teeth and the artificial replacements. Most patients usually become accustomed to this feeling in time.
                                    In limited situations, muscle soreness or tenderness of the jaw joints (TMJ) may persist for indeterminate periods of time following placement of the prosthesis.</p>

                                 <strong>LONGEVITY OF CROWNS/ONLAYS AND BRIDGES</strong><br>
                                <p>There are many variables that determine “how long” crowns and bridges can be expected to last. Among these are some of the factors mentioned in preceding paragraphs.
                                     Additionally, general health, good oral hygiene, regular dental checkups, diet, etc. can affect longevity. Because of this, no guarantees can be made or assumed to 
                                     be made As a patient it is your responsibility to consult the dentist if you have any problem. The patient must diligently follow any and all instructions, including 
                                     the scheduling and attending all appointments. If you don’t attend the cementation appointment the crown/onlay/bridge may not fit properly and an additional fee may be
                                      assessed.</p>
                                    
                                <strong>INFORMED CONSENT</strong><br>
                                <p>I have been given the opportunity to ask any questions regarding the nature and purpose of crown/onlay and/or bridge treatment and have received answers to my satisfaction.
                                    I voluntarily assume any and all possibly risks including those as listed above and including risk of substantial harm, if any, which may be associated with any phase of 
                                    this treatment in hopes of obtaining the desired results, which may or may not be achieved. No guarantees or promises have been made to me concerning the results. 
                                    The fee(s) for service have been explained to me and are satisfactory. By signing this document, I am freely giving my consent to allow and authorize my dentist to 
                                    render any treatment necessary and/or advisable to my dental conditions.</p>


<br>
                               <p> <i>I, the undersigned, understand that treatment of dental conditions requiring CROWNS/ONLAYS and/or FIXED BRIDGE WORK includes certain risks and possible unsuccessful
                                 results, with even the possibility of failure. I agree to assume those risks, possible unsuccessful results and/or failure associated with, but not limited to the above:</i></p>

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
            <script src="controllers/dboiController.js"></script>
            <script src="controllers/divPrinterController-v1.js"></script>

            <script src="js/custom-v2.js"></script>
</body>

</html>