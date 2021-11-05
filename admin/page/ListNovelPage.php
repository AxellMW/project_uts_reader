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
                    <th>Judul Novel</th>
                    <th>Tanggal</th>
                    <th>Genre</th>
                    <th>Deskripsi</th>
                    <th>Function</th>
                </tr>
                <!-- List Book -->
                <?php

                    $query = mysqli_query($con, "SELECT * FROM novels") or die(mysqli_error($con));

                    if(mysqli_num_rows($query) == 0){
                        echo '<tr><td colspan="7">Tidak ada data!</td></tr>';
                    }
                    else{
                        $no = 1;
                        while($data = mysqli_fetch_assoc($query)){
                            echo '
                                <tr>
                                    <th scope="row">'.$no.'</th>
                                    <td>'.$data['judul'].'</td>
                                    <td>'.$data['date'].'</td>
                                    <td>'.$data['genre'].'</td>
                                    <td>'.$data['description'].'</td>
                                    <td>
                                        <a class="btn btn-info btn-sm" href="../page/showNovels.php?id='.$data['id'].'">Show</a>
                                        <a class="btn btn-primary btn-sm" href="../page/editPage.php?id='.$data['id'].'">Edit</a>
                                        <a class="btn btn-danger btn-sm" href="../process/deleteNovelUser.php?id='.$data['id'].'
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