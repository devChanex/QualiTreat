<?php
require_once('databaseService.php');
$service = new ServiceClass();
$clientId = urldecode($_POST['clientId']);
$consentType = urldecode($_POST['consentType']); // <-- Get the consent type from frontend

$result = $service->process($clientId, $consentType);

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

    public function process($clientId, $consentType)
    {
        // ✅ Select based on both clientId and consentType
        $query = "SELECT Distinct * FROM orthowaiver WHERE clientId = :a AND consentType = :b LIMIT 1";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':a', $clientId);
        $stmt->bindParam(':b', $consentType);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                // Format date
                $formattedDate = date("Y/m/d", strtotime($row["date"]));

                echo '
                <div style="flex: 0 0 50%; padding-right: 15px; box-sizing: border-box;">
                    <label for="dateSigned">Date: ' . $formattedDate . '</label><br>
                    <label for="patientName">Patient\'s/Guardian\'s Name: <br>' . htmlspecialchars($row["patient"]) . '</label><br>
                    <label>Patient\'s/Guardian\'s Signature</label>
                    <div id="patient-signature-box" class="signature-box"
                        style="border: 1px solid #ccc; border-radius: 4px; padding: 15px; height: 80px; cursor: pointer;">
                ';

                // Patient Signature
                if (!empty($row['signature'])) {
                    $imageData = base64_encode($row['signature']);
                    $patientSignature = "data:image/png;base64,{$imageData}";
                } else {
                    $patientSignature = "img/no-signature.png";
                }

                echo '
                        <img alt="signature" style="width: 100%; height: 100%; object-fit: contain;" src="' . $patientSignature . '">
                    </div>
                </div>

                <div style="flex: 0 0 50%; padding-left: 15px; box-sizing: border-box;">
                    <br><br>
                    <label for="dentistName">Dentist\'s Name: ' . htmlspecialchars($row["dentist"]) . '</label><br>
                    <label>Dentist Signature</label>
                    <div id="dentist-signature-box" class="signature-box"
                        style="border: 1px solid #ccc; border-radius: 4px; padding: 15px; height: 80px; cursor: pointer; text-align: center;">
                ';

                  // Dentist Signature
              $imageData = base64_encode($row['dentistSignature']);
                $imageType = "png"; // Or "png" depending on what your DB stores
                $dentistSignature = 'img/e-signature.png';

                echo '
                        <img alt="dentist signature" style="width: 100%; height: 100%; object-fit: contain;" src="' . $dentistSignature . '">
                    </div>
                </div>
                ';
            }
        }
    }
}
?>
