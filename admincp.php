<?php 
    session_start();
    if(!isset($_SESSION['user'] )){
        
        header('location:login.php');
    }
    require "config.php";

    
    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the keyword from the form
        $keyword = $_POST['keyword'];

        // Query the database to retrieve data based on the keyword
        $sql = "SELECT * FROM user WHERE username LIKE '%$keyword%' OR email LIKE '%$keyword%' OR role LIKE '%$keyword%'  OR sdt LIKE '%$keyword%'  OR cccd LIKE '%$keyword%'  OR gioitinh LIKE '%$keyword%'  OR thanhpho LIKE '%$keyword%'  OR quan LIKE '%$keyword%'  OR phuong LIKE '%$keyword%'  OR sonha LIKE '%$keyword%'"; // Update this query to match your table structure and search criteria
        $result = mysqli_query($conn, $sql);
        echo "<div class = 'block'></div>";
        echo "<h1>Thông tin người dùng</h1>";
        echo "
        <form action='' method='post' class='search-form'>
            <label for='searchInput' class='label'>Nhập từ khóa: </label>
            <input type='text' id='searchInput' name='keyword' class='input' placeholder='Nhập từ khóa tìm kiếm...'>
            <button type='submitsearch' class='button'>Tìm kiếm</button>
        </form>";
        // Create the table headers
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Username</th>";
        echo "<th>Email</th>";
        echo "<th>Password</th>";
        echo "<th>Role</th>";
        echo "<th>SDT</th>";
        echo "<th>CCCD/CMND</th>";
        echo "<th>Giới tính</th>";
        echo "<th>Thành phố/Tỉnh</th>";
        echo "<th>Quận/Huyện</th>";
        echo "<th>Phường/Xã</th>";
        echo "<th>Số nhà/Đường</th>";
        echo "<th>Edit</th>";
        echo "<th>Delete</th>";
        echo "</tr>";

        // Loop through the retrieved data and create table rows
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['role'] . "</td>";
            echo "<td>" . $row['sdt'] . "</td>";
            echo "<td>" . $row['cccd'] . "</td>";
            echo "<td>" . $row['gioitinh'] . "</td>";
            echo "<td>" . $row['thanhpho'] . "</td>";
            echo "<td>" . $row['quan'] . "</td>";
            echo "<td>" . $row['phuong'] . "</td>";
            echo "<td>" . $row['sonha'] . "</td>";
            echo "<td>";
            echo "<form method='post' action='repair.php'>"; 
            echo "<input type='hidden' name='id' value='" . $row['id'] . "'>"; 
            echo "<button type='submit' name='repair' class='cart-repair'><ion-icon name='construct-outline' class='cart-repair'></ion-icon></button>";
            echo "</form>";
            echo "</td>";
            echo "<td>";
            echo "<form method='post' action='delete.php'>"; 
            echo "<input type='hidden' name='id' value='" . $row['id'] . "'>"; 
            echo "<button type='submit' name='delete' class='cart-delete'><ion-icon name='trash-outline'></ion-icon></button>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }

        // Close the table
        echo "</table>";

        // Close the database connection
        mysqli_close($conn);
    }
    else {

    // Query the database to retrieve data
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn, $sql);
        echo "<div class = 'block'></div>";
        echo "<h1>Thông tin người dùng</h1>";
        echo "
        <form action='' method='post' class='search-form'>
            <label for='searchInput' class='label'>Nhập từ khóa: </label>
            <input type='text' id='searchInput' name='keyword' class='input' placeholder='Nhập từ khóa tìm kiếm...'>
            <button type='submitsearch' class='button'>Tìm kiếm</button>
        </form>";
        // Create the table headers
        echo "<table>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Username</th>";
                echo "<th>Email</th>";
                echo "<th>Password</th>";
                echo "<th>Role</th>";
                echo "<th>SDT</th>";
                echo "<th>CCCD/CMND</th>";
                echo "<th>Giới tính</th>";
                echo "<th>Thành phố/Tỉnh</th>";
                echo "<th>Quận/Huyện</th>"; 
                echo "<th>Phường/Xã</th>";
                echo "<th>Số nhà/Đường</th>";
                echo "<th>Sửa</th>";
                echo "<th>Xoá</th>";
            echo "</tr>";

            // Loop through the retrieved data and create table rows
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['role'] . "</td>";
            echo "<td>" . $row['sdt'] . "</td>";
            echo "<td>" . $row['cccd'] . "</td>";
            echo "<td>" . $row['gioitinh'] . "</td>";
            echo "<td>" . $row['thanhpho'] . "</td>";
            echo "<td>" . $row['quan'] . "</td>";
            echo "<td>" . $row['phuong'] . "</td>";
            echo "<td>" . $row['sonha'] . "</td>";
            echo "<td>";
            echo "<form method='post' action='repair.php'>"; 
            echo "<input type='hidden' name='id' value='" . $row['id'] . "'>"; 
            echo "<button type='submit' name='repair' class='cart-repair'><ion-icon name='construct-outline' class='cart-repair'></ion-icon></button>";
            echo "</form>";
            echo "</td>";
            echo "<td>";
            echo "<form method='post' action='delete.php'>"; 
            echo "<input type='hidden' name='id' value='" . $row['id'] . "'>"; 
            echo "<button type='submit' name='delete' class='cart-delete'><ion-icon name='trash-outline'></ion-icon></button>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
                }

        // Close the table
        echo "</table>";

        // Close the database connection
        mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Images/icon(24x24).png">
    <link rel="stylesheet" href="/css/admincp.css">
    <title>Admin CP</title>
</head>
<body>
    
    <?php
        require "header.php";
    ?>
    
    
</body>
</html>