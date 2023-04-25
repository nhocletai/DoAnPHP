<?php 
        session_start();
        if(!isset($_SESSION['user'] )){
            
            header('location:login.php');
        }
    require "config.php";
        // Check if the delete form has been submitted
    if (isset($_POST['delete'])) {
        // Get the 'id' of the row to be deleted
        $id = $_POST['id'];

        // Show confirmation message and form to confirm delete
        echo "<form method='post' action=''>
                Bạn có chắc là muốn xoá dữ liệu này không ? Hành động này không thể khôi phục.<br>
                <input type='hidden' name='id' value='" . $id . "'>
                <div class='input-container'>
                    <input type='submit' name='confirm_delete' value='Có'>
                    <input type='submit' name='cancel_delete' value='Không'>
                </div>
                </form>";
    } elseif (isset($_POST['confirm_delete'])) {
        // If user confirmed delete, proceed with deletion
        $id = $_POST['id'];

        // Delete the row with the given 'id' from the database
        $sql = "DELETE FROM user WHERE id = " . $id; // Replace 'user' with the actual name of your database table
        if (mysqli_query($conn, $sql)) {
            echo "Xoá thành công!";
            // Redirect to admincp.php after 3 seconds
            header("Location: admincp.php"); // Replace 'admincp.php' with the actual name of your admin control panel page
            exit();
        } else {
            echo "Xoá thất bại !" . mysqli_error($conn);
        }

        // Close database connection
        mysqli_close($conn);
    } elseif (isset($_POST['cancel_delete'])) {
        // If user canceled delete, show message
        echo "<form method='post' action=''>
                Đã huỷ.<br>
                
                <div class='input-container'>
                    <a href='/index.php'>Trang chủ</a>
                    <a href='/admincp.php'>AdminCP</a>
                </div>
                </form>";
        
    }

?>

<style>
/* CSS for styling the confirmation form in dark theme */
form {
    max-width: 300px;
    margin: 0 auto;
    padding: 20px;
    background-color: #333;
    border: 1px solid #444;
    border-radius: 5px;
}

/* CSS for styling two input fields on par with each other */
.input-container {
    display: flex;
}

.input-container input[type="text"] {
    
    flex-grow: 1;
    margin-right: 10px;
    padding: 10px;
    border: none;
    border-radius: 3px;
}

input[type="submit"],a {
    display: block;
    margin: 10px 0 0 10px;
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    text-align: center;
    text-decoration: none;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}


/* Styles for text color in dark theme */
form, input[type="submit"] {
    color: #fff;
}

body {
    background-color: #24262b;
}

</style>