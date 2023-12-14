
<?php

$conn = mysqli_connect('localhost', 'root', '', 'dry12');



$query1 = "SELECT * FROM `order_12`";
$result = mysqli_query($conn, $query1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     . table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    /* Style for table headers */
    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f2f2f2;
    }

    /* Style for alternate row colors */
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
</style>
<body>
    

    <table border="3">
        <tr>
            <th>Date</th>
            <th>Product Name</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Quantity</th>
            <th>Full Name</th>
            <th>Email</th>
            <!-- <th>delete</th> -->
        </tr>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            
            <tr>
                <td>
                    <?php echo $row['date']; ?>
                </td>
                <td>
                    <?php echo $row['product_name']; ?>
                </td>
                <td>
                    <?php echo $row['address']; ?>
                </td>
                <td>
                    <?php echo $row['phone_number']; ?>
                </td>
                <td>
                    <?php echo $row['quantity']; ?>
                </td>
                <td>
                    <?php echo $row['full_name']; ?>
                </td>
                <td>
                    <?php echo $row['email']; ?>
                </td>
                <!-- <td>
                    <a href="order.php/?id=?
                        <button>delete</button>
                    </a>
                </td> -->
            </tr>
            <?php
        }?>

    </table>
</body>
</html>