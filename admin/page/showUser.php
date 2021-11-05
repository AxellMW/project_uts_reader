<?php
    include '../component/navbar.php';

    $id = $_GET["id"];
    $sql = mysqli_query($con,"SELECT * FROM users WHERE id = $id");
    $data = mysqli_fetch_array($sql);
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
            <td><?= $data['name']?></td>
          </tr>
          <tr>
            <th>ID User</th>
            <td>: </td>
            <td><?= $data['id']?></td>
          </tr>
          <tr>
            <th>E-mail</th>
            <td>: </td>
            <td><?= $data['email']?></td>
          </tr>
          <tr>
            <th>Phone Number</th>
            <td>: </td>
            <td><?= $data['phone']?></td>
          </tr>
        </table>
        <br><br>
        <tr>
            <td><a href="../process/deleteUser.php?id='.$data['id'].'"><button class="btn btn-danger">Delete Account</button></a></td>
        </tr>
      </div>
    </div>
<?php
    include '../component/footer.php'
?>