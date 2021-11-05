<?php
    include '../component/navbar.php';
    $id = $_GET['id'];
    $query = mysqli_query($con, "SELECT * FROM novels WHERE id = $id");
    $data = mysqli_fetch_array($query);
?>
<!-- Content -->
    <div class="content mt-5" id="addPage" style="margin-bottom:200px;">
      <!-- Body -->
        <div class="container">
            <form action="../process/editProcess.php" method="post">
            <input type="hidden" name="id" value="<?= $data['id'];?>">
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $data['judul']?>">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date" value="<?= $data['date']?>">
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" class="form-control" id="genre" name="genre" value="<?= $data['genre']?>">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="description" name="description" value="<?= $data['description']?>">
                </div>
                <div class="mb-3">
                    <label for="story" class="form-label">Story</label>
                    <textarea class="form-control" id="story" name="story" rows="11"><?= $data['story'] ?></textarea>
                </div>
                <div class="mb-3">
                    <input type="hidden" class="form-control" id="author" name="author" value="<?= $_SESSION['name']?>">
                </div>
                <div class="d-grip gap-2">
                    <button type="submit" class="btn btn-primary" name="edit">Edit</button>
                </div>
            </form>
        </div>
    </div>
    </div>
<?php
    include '../component/footer.php'
?>