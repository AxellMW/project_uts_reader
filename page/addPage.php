<?php
    include '../component/navbar.php'
?>
<!-- Content -->
    <div class="content mt-5" id="addPage" style="
    margin-bottom: 150px;">
      <!-- Body -->
        <div class="container">
            <form action="../process/createProcess.php" method="post" enctype="multipart/form-data">
<<<<<<< HEAD
               <div class="mb-3">
=======
                <div class="mb-3">
                    <label for="ilustrasi" class="form-label">Ilustrasi</label>
                    <input type="text" class="form-control" id="ilustrasi" name="ilustrasi">
                </div>
                <div class="mb-3">
>>>>>>> efd877c94bc47b018ab33d01af516dd3c4c536fd
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" class="form-control" id="genre" name="genre">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="mb-3">
                    <label for="story" class="form-label">Story</label>
                    <textarea class="form-control" id="story" name="story" rows="11"></textarea>
                </div>
                <div class="mb-3">
                    <input type="hidden" class="form-control" id="author" name="author" value=<?= $_SESSION['name']?>>
                </div>
                <div class="d-grip gap-2">
                    <button type="submit" class="btn btn-primary" name="add">Tambah</button>
                </div>
            </form>
        </div>
    </div>
<?php
    include '../component/footer.php'
?>