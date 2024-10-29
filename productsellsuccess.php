<?php
define('TITLE', 'Sell Product Success');
define('PAGE', 'assets');
include('includes/header.php');
include('../dbConnection.php');

session_start();
if (!isset($_SESSION['is_adminlogin'])) {
  echo "<script> location.href='login.php'; </script>";
  exit;
}

if (isset($_SESSION['myid'])) {
  $genid = $_SESSION['myid'];

  $sql = "SELECT * FROM customer_tb WHERE custid = $genid";
  $result = $conn->query($sql);
  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $custname = $row['custname'];
    $cpname = $row['cpname'];
    $cpquantity = $row['cpquantity'];
    $cptotal = $row['cptotal'];
    $cpdate = $row['cpdate'];
  }
}

?>

<div class="col-sm-6 mt-5 mx-3">
  <h3 class="text-center">Customer Bill</h3>
  <table class="table table-bordered">
    <tbody>
      <tr>
        <td>Customer ID</td>
        <td><?php if (isset($genid)) {
              echo $genid;
            } ?></td>
      </tr>
      <tr>
        <td>Customer Name</td>
        <td><?php if (isset($custname)) {
              echo $custname;
            } ?></td>
      </tr>
      <tr>
        <td>Product Name</td>
        <td><?php if (isset($cpname)) {
              echo $cpname;
            } ?></td>
      </tr>
      <tr>
        <td>Quantity</td>
        <td><?php if (isset($cpquantity)) {
              echo $cpquantity;
            } ?></td>
      </tr>
      <tr>
        <td>Total Price</td>
        <td><?php if (isset($cptotal)) {
              echo $cptotal;
            } ?></td>
      </tr>
      <tr>
        <td>Date</td>
        <td><?php if (isset($cpdate)) {
              echo $cpdate;
            } ?></td>
      </tr>
      <tr>
        <td>Customer Signature</td>
        <td> </td>
      </tr>
      <tr>
        <td>Employee Signature</td>
        <td> </td>
      </tr>
      <tr>
        <td>
          <form class="d-print-none">
            <input class="btn btn-danger" type="submit" value="Print" onClick="window.print()">
          </form>
        </td>
        <td>
          <a href="assets.php" class="btn btn-secondary d-print-none">Close</a>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<?php include('includes/footer.php'); ?>
