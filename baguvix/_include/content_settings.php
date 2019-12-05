<?php $sql_settings = mysqli_query($con, "SELECT * FROM setting");
while ($settings = mysqli_fetch_array($sql_settings)) {
    $toogle_maintainance = $settings['toogle_maintainance'];
    $text_maintainance = $settings['text_maintainance'];
}; ?>
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Toogle Maintainance</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <form action="" method="post">
                                    <?php
                                    if ($toogle_maintainance == 0) { ?>
                                        <button type="submit" id="submitButton" name="set_toogle" class="btn btn-secondary">
                                            <i class="fas fa-toggle-off fa-2x"></i>
                                        </button>
                                    <?php } else if ($toogle_maintainance == 1) { ?>
                                        <button type="submit" id="submitButton" name="set_toogle" class="btn btn-primary">
                                            <i class="fas fa-toggle-on fa-2x"></i>
                                        </button>
                                    <?php }; ?>
                                </form>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Is Maintenis?</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                                if ($toogle_maintainance == 0) { ?>
                                    <h3>NO!</h3>
                                <?php } else if ($toogle_maintainance == 1) { ?>
                                    <h3>YES!</h3>
                                <?php }; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Text Maintainance</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?= $text_maintainance ?> </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
<br>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Settings</h6>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <label>Text Maintainance</label>
            <div class="form-row">
                <div class="col">
                    <textarea rows="2" name="maintainance" class="form-control" placeholder="Masukkan text MAINTAINANCE" required></textarea>
                </div>
                <div class="col">
                    <input type="submit" name="set_maintainance" class="btn btn-primary" value="Set Text Maintainance">
                </div>
            </div>
        </form>
    </div>
    <div class="card-body">
        <form action="" method="post">
            <label>Add Categories</label>
            <div class="form-row">
                <div class="col-1">
                    <input type="number" name="id" class="form-control" placeholder="ID" required>
                </div>
                <div class="col">
                    <input type="text" name="kategori" class="form-control" placeholder="Masukkan KATEGORI" required></inp>
                </div>
                <div class="col">
                    <input type="submit" name="add_categories" class="btn btn-primary" value="Add Category">
                </div>
            </div>
        </form>
    </div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Categories</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="10%">Id. </th>
                        <th width="20%">Id. Admin</th>
                        <th width="50%">Categories </th>
                        <th width="20%">Edit </th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th width="10%">Id. </th>
                        <th width="20%">User Admin</th>
                        <th width="50%">Categories </th>
                        <th width="20%">Edit </th>
                    </tr>
                </tfoot>
                <tbody>

                    <?php
                    $sql_mhs = mysqli_query($con, "SELECT * FROM kategori") or die(mysqli_error($con, ""));
                    if (mysqli_num_rows($sql_mhs) > 0) {
                        while ($data = mysqli_fetch_array($sql_mhs)) { ?>
                            <tr>
                                <td><?= $data['id'] ?></td>
                                <td><?= $data['user_admin'] ?></td>
                                <td><?= $data['kategori'] ?></td>
                                <td class="text-center">
                                    <a href="#" onclick="del<?= $data['id'] ?>()" class="btn btn-danger">Delete</a>
                                    <script>
                                        function del<?= $data['id'] ?>() {
                                            var txt;
                                            if (confirm("Anda yakin ingin mendelete data ini?")) {
                                                window.location = "<?= base_url() ?>/_auth/delete_peraturan.php?id=<?= $data['id'] ?>";
                                                txt = "You pressed OK!";
                                            }
                                        }
                                    </script>
                                </td>
                            </tr>
                    <?php };
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



<!-- /.container-fluid -->

<?php
if (isset($_POST['set_maintainance'])) {
    $maintainance = $_POST['maintainance'];

    $sql_set = mysqli_query($con, "UPDATE setting SET text_maintainance='$maintainance' WHERE id =1") or die(mysqli_error($con, ""));
    echo "<script>window.location='" . base_url() . "/settings.php';</script>";
}
if (isset($_POST['add_categories'])) {
    $id = $_POST['id'];
    $kategori = $_POST['kategori'];
    $admin = $_SESSION['admin'];

    $sql_set = mysqli_query($con, "INSERT INTO kategori VALUES ('$id', '$admin', '$kategori')") or die(mysqli_error($con, ""));
    echo "<script>window.location='" . base_url() . "/settings.php';</script>";
}
if (isset($_POST['set_toogle_quiz'])) {
    if ($toogle_maintainance == 0) {
        $sql_set = mysqli_query($con, "UPDATE setting set toogle_maintainance=true WHERE toogle_maintainance=false") or die(mysqli_error($con, ""));
    } else if ($toogle_maintainance == 1) {
        $sql_set = mysqli_query($con, "UPDATE setting set toogle_maintainance=false WHERE toogle_maintainance=true") or die(mysqli_error($con, ""));
    }
    echo "<script>window.location='" . base_url() . "/settings.php';</script>";
} ?>