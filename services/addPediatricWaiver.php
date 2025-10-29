<?php
// Service for Registration

require_once('databaseService.php');

// --- Decode Dentist Signature ---
$dentistbase64 = $_POST['dentistSignature'];
$dentistbase64 = str_replace('data:image/png;base64,', '', $dentistbase64);
$dentistbase64 = str_replace(' ', '+', $dentistbase64);
$dentistSignature = base64_decode($dentistbase64);

// --- Decode Patient Signature ---
$patientbase64 = $_POST['patientSignature'];
$patientbase64 = str_replace('data:image/png;base64,', '', $patientbase64);
$patientbase64 = str_replace(' ', '+', $patientbase64);
$patientSignature = base64_decode($patientbase64);

// --- Other Fields ---
$dateSigned = urldecode($_POST['dateSigned']);
$dentistName = urldecode($_POST['dentistName']);
$patientName = urldecode($_POST['patientName']);
$clientId = urldecode($_POST['clientId']);
$consentType = "Pediatric Consent"; // define consent type

// Instantiate the Service class
$service = new ServiceClass();
$service->process($dentistSignature, $patientSignature, $dateSigned, $dentistName, $patientName, $clientId, $consentType);


// --- CLASS ---
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

    public function process($dentistSignature, $patientSignature, $dateSigned, $dentistName, $patientName, $clientId, $consentType)
    {
        try {
            // Check if consent already exists for this client
            $query = "SELECT clientId, consentType 
                      FROM orthowaiver 
                      WHERE clientId = :a AND consentType = :i";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':a', $clientId);
            $stmt->bindParam(':i', $consentType);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                echo "Patient already has a signed Pediatric Consent";
            } else {
                // ✅ FIXED INSERT (missing parenthesis)
                $query2 = "INSERT INTO orthowaiver 
                    (clientId, patient, dentist, date, signature, dentistSignature, consentType) 
                    VALUES (:g, :f, :e, :d, :b, :c, :h)";

                $stmt2 = $this->conn->prepare($query2);
                $stmt2->bindParam(':b', $patientSignature);
                $stmt2->bindParam(':c', $dentistSignature);
                $stmt2->bindParam(':d', $dateSigned);
                $stmt2->bindParam(':e', $dentistName);
                $stmt2->bindParam(':f', $patientName);
                $stmt2->bindParam(':g', $clientId);
                $stmt2->bindParam(':h', $consentType);

                if ($stmt2->execute()) {
                    echo "success";
                } else {
                    echo "Error inserting record";
                }
            }

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
