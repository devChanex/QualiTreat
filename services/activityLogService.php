<?php
//Service for Registration

require_once('databaseService.php');

$service = new ServiceClass();
$result = $service->process($_POST);
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
    public function process($data)
    {
        session_start();
        $task = $data['task'];
        $payload = $data['payload'];
        $status = $data['status'];
        $dateLogged = date('Y-m-d H:i:s');
        $user = $_SESSION["username"];
        //:a,:b parameter
        try {
            $clientId = 0;
            $query = "insert into activitylogs (task, payload, dateLogged, user, status) values (:a,:b,:c,:d,:e)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':a', $task);
            $stmt->bindParam(':b', $payload);
            $stmt->bindParam(':c', $dateLogged);
            $stmt->bindParam(':d', $user);
            $stmt->bindParam(':e', $status);
            $stmt->execute();

            return "success";
        } catch (Exception $e) {
            return "Error:" . $e->getMessage();
        }



    }
    //UNTIL THIS CODE

}
//UNTIL HERE COPY



?>