<?php
    if(isset($_POST['edit'])){
        include('../db.php');
        $id         = $_POST['id'];
        $name       = strtolower(stripslashes($_POST['name']));
        $password   = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $email      = $_POST['email'];
        $phone      = $_POST['phone'];
        
        $query = mysqli_query($con,"UPDATE users SET name='$name', password='$password', email='$email', phone='$phone'  WHERE id=$id")
            or die(mysqli_error($con));

        mysqli_query($con,$query);
        if($query){
            echo
                '<script>
                alert("Update data sukses! Silahkan login kembali!"); window.location = "../process/logoutProcess.php"
                </script>';
        }
        else{
            echo
                '<script>
                alert("Update data gagal");
                </script>';
        }
    }
    else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>  