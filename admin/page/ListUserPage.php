<?php
    include '../component/navbar.php'
?>    
    <!-- Content -->
    <div class="content mt-5" id="listPage" >
      <!-- Body -->
        <div class="container">
            <table class="table-bordered" width="100%" >
                <tr class="text-center" >
                    <th width="10px">No</th>
                    <th width="200px">Ne</th>
                    <th>ID User</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Function</th>
                </tr>
                <!-- List Book -->
                <?php

                    $query = mysqli_query($con, "SELECT * FROM users") or die(mysqli_error($con));

                    if(mysqli_num_rows($query) == 0){
                        echo '<tr><td colspan="7">Tidak ada data!</td></tr>';
                    }
                    else{
                        $no = 1;
                        while($data = mysqli_fetch_assoc($query)){
                            echo '
                                <tr>
                                    <th scope="row">'.$no.'</th>
                                    <td>'.$data['name'].'</td>
                                    <td>'.$data['id'].'</td>
                                    <td>'.$data['email'].'</td>
                                    <td>'.$data['phone'].'</td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="../page/showUser.php?id='.$data['id'].'">Show</a>
                                        <a class="btn btn-danger btn-sm" href="../process/deleteUser.php?id='.$data['id'].'
                                        onClick="return confirm (\'Yakin?\')">Delete</a>
                                    </td>
                                </tr>';
                            $no++;
                        }
                    }
                ?>
            </table>
        </div>
    </div>
<?php
include '../component/footer.php'
?>