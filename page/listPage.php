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
                                    <td><a href="../page/showNovels.php?id='.$data['id'].'">'.$data['judul'].'</a></td>
                                    <td>'.$data['date'].'</td>
                                    <td>'.$data['genre'].'</td>
                                    <td>'.$data['description'].'</td>
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