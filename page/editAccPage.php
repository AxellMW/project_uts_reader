<?php
    include '../component/navbar.php'
?>
<div class="bg bg-light text-dark">
        <div class="container min-vh-100 mt-5 d-flex align-items-center justify-content-center">
            <div class="card text-dark bg-light ma-5 shadow " style="min-width: 25rem;">
                <div class="card-header fw-bold">Edit Data</div>
                    <div class="card-body">
                        <form action="../process/editAccProcess.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input class="form-control" id="name" name="name" aria-describedby="emailHelp" value="<?= $_SESSION['name'] ?>">
                            </div>
                            <div class="mb-3">
                                <input type="hidden" class="form-control" id="id" name="id" value="<?= $_SESSION['id'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="mb-3">
                                <input type="hidden" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= $_SESSION['email'] ?>" >
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">phone</label>
                                <input class="form-control" id="phone" name="phone" aria-describedby="emailHelp" value="<?= $_SESSION['phone'] ?>">
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary" name="edit">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php
    include '../component/footer.php'
?>