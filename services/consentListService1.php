<?php
require_once('databaseService.php');
$service = new ServiceClass();
$search = urldecode($_POST['search']);
$searchParam = '%' . $search . '%';
$page = isset($_POST['page']) ? (int) $_POST['page'] : 1;
$itemPerPage = isset($_POST['item']) ? (int) $_POST['item'] : 10;
$result = $service->process($searchParam, $page, $itemPerPage);

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
    //DO NOT INCLUDE THIS CODE
    public function process($search, $page, $itemPerPage)
    {

        $offset = ($page - 1) * $itemPerPage;  // Calculate the offset for pagination

        $searchFields = ['dentist', 'date', "concat(b.lname,', ',b.fname, ' ', b.mdname)"];
        $dynamics = '';

        if (!empty($search)) {
            $orConditions = [];
            foreach ($searchFields as $field) {
                $orConditions[] = "$field LIKE :search";
            }
            $dynamics = 'AND (' . implode(' OR ', $orConditions) . ')';
        }
        $dynamics .= ' ORDER BY a.date DESC LIMIT :limit OFFSET :offset';
        $query = "select b.*,concat(b.lname,', ',b.fname, ' ', b.mdname) as fullname,a.orthoid,a.dentist,a.date,a.consentType,a.clientId from orthowaiver a inner join clientprofile b on a.clientid=b.clientid  $dynamics ";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':search', $search, PDO::PARAM_STR);
        $stmt->bindParam(':limit', $itemPerPage, PDO::PARAM_INT);  // Ensure itemPerPage is treated as an integer
        $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);  // 
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                echo '
                <tr>
                <td>' . ucwords(strtolower($row["fullname"])) . '</td>
                <td>' . $row["dentist"] . '</td>
                 <td>' . date("Y/m/d", strtotime($row["date"])) . '</td>
              <td>' . $row["consentType"] . '</td>
                <td align="center">
                
                ';
       $query2 = "SELECT clientId, consentType 
           FROM orthowaiver 
           WHERE clientId = :a 
           AND consentType = :b 
           LIMIT 1 ";
$stmt2 = $this->conn->prepare($query2);
$stmt2->bindParam(':a', $row["clientid"]);
$stmt2->bindParam(':b', $row["consentType"]);
$stmt2->execute();

if ($stmt2->rowCount() > 0) {
    while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)) {
        if ($row2["consentType"] === "Ortho Waiver") {
            echo '<a href="viewOrthoWaiver.php?clientId=' . $row2["clientId"] . '" class="btn bg-purple btn-circle" title="View Orthodontics Waiver"><i class="fas fa-sign"></i></a>';
        } elseif ($row2["consentType"] === "Pediatric Consent") {
            echo '<a href="viewPediatricConsent.php?clientId=' . $row2["clientId"] . '" class="btn bg-purple btn-circle" title="View Pediatric Consent"><i class="fas fa-child"></i></a>';
        } elseif ($row2["consentType"] === "Tooth Extraction Consent") {
            echo '<a href="viewToothExtractionConsent.php?clientId=' . $row2["clientId"] . '" class="btn bg-purple btn-circle" title="View Tooth Extraction Consent"><i class="fas fa-tooth"></i></a>';
        } else {
            echo '<a href="#" class="btn bg-secondary btn-circle" title="Unknown Consent Type"><i class="fas fa-question"></i></a>';
        }
    }
}

            }
        }
    }

}







?>