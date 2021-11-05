<?php
    include '../component/navbar.php'
?>
    <div class="profil">
      <div class="container">
        <h2>Profile</h2>
        <hr />
        <!-- Show Acc -->
   
        <table>
          <tr>
            <th>Name</th>
            <td>: </td>
            <td><?= $_SESSION['name']?></td>
          </tr>
          <tr>
            <th>ID User</th>
            <td>: </td>
            <td><?= $_SESSION['id']?></td>
          </tr>
          <tr>
            <th>E-mail</th>
            <td>: </td>
            <td><?= $_SESSION['email']?></td>
          </tr>
          <tr>
            <th>Phone Number</th>
            <td>: </td>
            <td><?= $_SESSION['phone']?></td>
          </tr>
        </table>
        <br><br>
        <tr>
<<<<<<< HEAD
            <td><a href="../page/editAccPage.php"><button class="btn btn-primary">Edit Data</button></a></td>
=======
            <td><a href="http:./editAccPage.php"><button class="btn btn-primary">Edit Data</button></a></td>
            <td><a href="http:../process/editAccProcess.php?id=<?= $_SESSION['id']?>"><button class="btn btn-danger">Delete Account</button></a></td>
>>>>>>> efd877c94bc47b018ab33d01af516dd3c4c536fd
        </tr>
      </div>
    </div>
<?php
    include '../component/footer.php'
?>