<?php
global $link;
include("dbFunctions.php");

$message = "";

$bookWeight = $_POST['bookWeight'];
$bookAmount = $_POST['bookAmount'];
$shippingTime = $_POST['shippingTime'];
$shippingMethod = $_POST['shippingMethod'];
$extraAddition = "";

if (isset($_POST['extra'])) {
    $extraArray = $_POST['extra'];
    for ($i = 0; $i < count($extraArray); $i++) {
        $extraAddition .= $extraArray[$i].", ";
    }
}

//WRITE THE INSERT SQL STATEMENT, AND EXECUTE IT. 
$query = "INSERT INTO books
    (book_weight,
    num_books,
    ship_time,
    ship_method,
    extra_additions)
    VALUES('$bookWeight',
           '$bookAmount',
           '$shippingTime',
           '$shippingMethod',
           '$extraAddition'
           )
           ";
$status = mysqli_query($link, $query);

//END
if ($status) {
    $message = "Record inserted successfully.";
} else {
    $message = "Record not inserted.";
}

mysqli_close($link);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Shipping Cost Calculator</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <div class="container">
        <?php echo $message; ?>
        </div>
    </body>
</html>