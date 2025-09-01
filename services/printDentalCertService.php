<?php
//Service for Registration

require_once('databaseService.php');
$soaid = urldecode($_POST['soaid']);
$service = new ServiceClass();
$result = $service->printSoa($soaid);
echo $result;
//USE THIS AS YOUR BASIS
class ServiceClass
{

    private $conn;
    public function __construct()
    {
        $database = new Database();
        $db = $database->dbConnection();
        $this->conn = $db;
    }

    public function runQuery($sql)
    {
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }
    public function printSoa($soaid)
    {
        try {

            include_once('../bars/properties.php');

            $query = "select * from dentalcertificate where certid=:a";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':a', $soaid);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '
          <div style="width: 8.27in; height: 11.69in; padding: 0in; font-family: \'Times New Roman\', serif; font-size: 12pt; line-height: 1.6; text-align: justify; box-sizing: border-box; position: relative;">

    <!-- Centered Logo and Clinic Name -->
    <div style="text-align: center; margin-bottom: 0.5em;">
        <img src="img/' . $headerlogo2 . '" alt="Company Logo" style="height: 150px; display: inline-block; vertical-align: middle; margin-bottom: 0.4em;">
        
    </div>

    <!-- Centered Address and Contact Info -->
    <div style="text-align: center; margin-bottom: 1em;">
        <div>' . $formheaderaddress . '</div>
        <div>' . $businessContact . '</div>
    </div>

    <hr style="margin: 1em 0;">

    <!-- Certificate Title -->
    <h2 style="text-align: center; font-size: 18pt; margin-top: 0; margin-bottom: 1.5em;">
        Dental Certificate
    </h2>

    <!-- Certificate Content -->
    <p style="text-indent: 2em; margin: 0 0 1em 0;">
        This is to certify that <strong>' . $row["name"] . '</strong>,  ' . $row["age"] . ', ' . $row["gender"] . ', residing at ' . $row["address"] . ', was seen and examined at our office on ';
                    $date = new DateTime($row["date"]);
                    echo $date->format('F j, Y, l');
                    echo
                        ' for a ' . $row["treatment"] . '.
    </p>

    <p style="text-indent: 2em; margin: 0 0 1em 0;">
        Upon examination, ' . $row["diagnosis"] . '.
    </p>

    <p style="text-indent: 2em; margin: 0 0 3em 0;">
        This certification is being issued upon the request for whatever legal purpose it may serve.
    </p>

    <!-- Footer Just Below Last Paragraph -->
    <div style="text-align: right; margin-top: 2em;">
           <img src="img/' . $dentistSignature . '" alt="Company Logo" style="height: 40px; display: inline-block; vertical-align: middle; margin-bottom: 0.3em;">
        <p style="margin: 0;">' . $dentist . '</p>
        <p style="margin: 0;">Attending Dentist</p>
        <p style="margin: 0;">License No. ' . $licensenum . '</p>
    </div>

</div>
                
                
                
                
                
                ';
                }
            }
        } catch (Exception $e) {
            return "Error:" . $e->getMessage();
        }
    }
    //UNTIL THIS CODE

}
//UNTIL HERE COPY
