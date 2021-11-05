<?php
    include '../component/navbar.php';

    $id = $_GET["id"];
    $sql = mysqli_query($con,"SELECT * FROM novels WHERE id = $id");
    $data = mysqli_fetch_array($sql);
?>
    <div class="content" style="
    margin-bottom: 150px;"">
    <div class="profil">
      <div class="container">
        <h2>Profile</h2>
        <hr />
        <!-- Show Novel -->

        <h2><?= $data['judul']?></h2>
        <p><?= $data['author']?> : <?= $data['date']?><br></p>
        <p><?= $data['genre']?><br></p>
        <p><?= $data['description']?><br></p>
        <hr>
        <p><?= $data['story']?></p>
       
        <br><br>
      </div>
    </div>
    </div>
<?php
    include '../component/footer.php'
?>