<?php
    if(isset($_GET['id'])){
    include ('../db.php');

    $id = $_GET['id'];
    $query = mysqli_query($con, "DELETE FROM users WHERE id=$id") or die(mysqli_error($con));


        if($query){
            echo
                '<script>
                alert("Delete Success! Login Kembali!"); window.location = "../process/logoutProcess.php"
                </script>';
        }else{
            echo
                '<script>
                alert("Delete Failed"); window.location = "../page/showAccount.php"
                </script>';
            }
        }else {
            echo
                'hallooooooooooooo';
        }
?>