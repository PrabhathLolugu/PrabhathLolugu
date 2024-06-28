<?php
define('TITLE', 'Request Submitted');
define('PAGE', 'SubmitRequestSuccess');
include('includes/header.php');

session_start(); // Start the session

$genid = $_SESSION['myid']; // Get the request ID from the session variable

// Fetch the request details from the database using the request ID
include('../dbConnection.php');
$sql = "SELECT * FROM submitrequest_tb WHERE request_id = '$genid'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $requestId = $row['request_id'];
    $requestDesc = $row['request_dsc'];
    $requestName = $row['request_name'];
    $requestMail = $row['request_mail'];
    $requestinfo = $row['request_info'];

    echo "<div class='col-sm-9 col-md-10'>
        <div class='alert alert-success mt-5' role='alert'>
            <h2>Request Submitted Successfully</h2>
            <p>Your Request ID is: $requestId</p>
            <p>Requester Name: $requestName</p>
            <p>Requester Email: $requestMail</p>
            <p>Request Info: $requestinfo</p>
            <p>Request Description: $requestDesc</p>
            

        </div>
        <button class='btn btn-primary mt-3' onclick='printPage()'>Print</button>
        <p class='mt-3'>Please click the 'Print' button or use the print option in your browser to print this page for future reference.</p>
    </div>";
} else {
    echo "<div class='col-sm-9 col-md-10'>
        <div class='alert alert-danger mt-5' role='alert'>
            <h2>Error Fetching Request Details</h2>
        </div>
    </div>";
}

include('includes/footer.php');
?>

<script>
    function printPage() {
        window.print();
    }
</script>
