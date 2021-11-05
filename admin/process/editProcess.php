<?php
    if(isset($_POST['edit'])){
        include('../../db.php');
        $id = $_POST['id'];
        $judul = $_POST['judul'];
        $date = $_POST['date'];
        $genre = $_POST['genre'];
        $description = $_POST['description'];
        $story = htmlspecialchars($_POST['story']);
        $author = $_POST['author'];
        
        $query = mysqli_query($con,"UPDATE novels SET judul='$judul', date='$date', genre='$genre', description='$description', story='$story', author='$author'  WHERE id=$id")
            or die(mysqli_error($con));

        mysqli_query($con,$query);
        
         if($query){
            echo
                '<script>
                alert("Update data sukses!"); window.location = "../page/ListNovelPage.php"
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