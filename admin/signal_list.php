<?php
include_once './header.php';
include_once './controllers/index.php';

if ($signals->get_all()['error'] == null) {
    $list = $signals->get_all()['data'];
} else {
    $list = null;
}

?>

<?php include_once './navbar.php'; ?>

<?php include_once './sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <?php
     $heading = 'Signals';
    $page_title = 'List';

    include_once './page_header.php';
    ?>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <?php if ($_SESSION['role'] < 3) { ?>
                        <div class="card-header">
                            <h3 class="card-title">
                                <div class="row">
                                    <div class="col6">
                                        <button type="button" class="btn btn-app" onclick="location.href = 'signals'"><i class="fas fa-file"></i>Add New <?= $sys['SM4']  ?></button>
                                    </div>
                                </div>
                            </h3>
                        </div>
                    <?php } ?>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th><?= $sys['sig-f1'] ?></th>
                                    <th><?= $sys['sig-f2'] ?></th>
                                    <th><?= $sys['sig-f3'] ?></th>
                                    <th><?= $sys['sig-f4'] ?></th>


                                    <th style="width:3%; text-align: center;"><?= $sys['Action'] ?></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th><?= $sys['sig-f1'] ?></th>
                                    <th><?= $sys['sig-f2'] ?></th>
                                    <th><?= $sys['sig-f3'] ?></th>   
                                    <th><?= $sys['sig-f4'] ?></th>
                               


                                    <th style="width:3%; text-align: center;"><?= $sys['Action'] ?></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $i = 1;
                                if ($list != null) {
                                    foreach ($list as $row) {
                                ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><a href="signals?id=<?= base64_encode($row['id']); ?>"><?= $row['f1'] ?></a></td>

                                            <td><?= $row['f2'] ?></td>
                                            <td><?= $row['f3'] ?></td>
                                            <td><?= $row['f4'] ?></td>

                                            <td> <?php if ($row['status'] == '1') { ?><button type="button" id="btnm<?php echo $row['id']; ?>" class="btn btn-block btn-outline-danger btn-flat" onclick="delete_record('<?php echo $row['id']; ?>', 'signals', 'id', 'signal_list');"><i class="fa fa-times" aria-hidden="true"></i></button> <?php } else { ?> <button type="button" id="btnm<?php echo $row['id']; ?>" class="btn btn-block btn-outline-success btn-flat" onclick="activate_record('<?php echo $row['id']; ?>', 'signals', 'id', 'signal_list');"><i class="fa fa-check "></i></button> <?php } ?> </td>

                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->


</div>
<?php include_once './footer.php'; ?>

</body>

</html>