<?php
    if(isset($_POST['add'])){
        include('../db.php');
        
        $judul = $_POST['judul'];
        $date = $_POST['date'];
        $genre = $_POST['genre'];
        $description = $_POST['description'];
        $story = htmlspecialchars($_POST['story']);
        $author = $_POST['author'];
        
        $query = mysqli_query($con,
            "INSERT INTO novels( judul, date, genre, description, story, author)
                VALUES
            ('$judul', '$date', '$genre', '$description', '$story', '$author')")
                or die(mysqli_error($con));

        if($query){
            echo
                '<script>
                alert("Sukses Menambah Novel"); window.location = "../page/mybook.php"
                </script>';
        }
        else{
            echo
                '<script>
                alert("Tambah data gagal");
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