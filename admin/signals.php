<?php
 include_once './header.php';
include_once './controllers/index.php';

$form_config = $signals_page_element;
if (isset($_GET['id'])) {
    $id = base64_decode($_GET['id']);
    $row = $signals->get_by_id($id)['data'];
} else {
    $id = 0;
    $row = null;
}


?>

<?php include_once './navbar.php'; ?>

<?php include_once './sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php

     $heading =  $form_config['heading'];

    $page_title = 'Details';
    if ($id == 0) {
        $page_title =  'New' . " " .  $heading;
    } else {

        $page_title =  'Update' . " " .  $heading;
    }
    include_once './page_header.php';
    ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">


                        <div class="card-body">
                            <div>
                                <form action="<?= $form_config['form_action'] ?>" class="templatemo-login-form" method="post" enctype="multipart/form-data" name="update_vehicles">


                                    <?php include_once '../inc/input_generate.php'; ?>

                                    <hr>



                                    <div class="row form-group">
                                        <div class="col-lg-2 col-md-2 form-group">


                                            <?php
                                            if ($id > 0) {


                                                echo '<button type="submit" class="btn btn-block btn-outline-success">Update Now</button>';
                                            } else {


                                                echo '<button type="submit" class="btn btn-block btn-outline-secondary">ADD New</button>';
                                            }
                                            ?>



                                        </div>
                                        <div class="col-lg-2 col-md-2 form-group">
                                            <button type="reset" class="btn btn-block btn-outline-warning">Reset</button>
                                        </div>


                                    </div>

                                </form>
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>






                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php include_once './footer.php'; ?>


<script>
    $('#browse_image').on('click', function(e) {

        $('#img_file').click();
    });
    $('#img_file').on('change', function(e) {
        var fileInput = this;
        if (fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#img').attr('src', e.target.result);
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    });
</script>


<script>
    $('#browse_icon').on('click', function(e) {



        $('#icon_file').click();
    });
    $('#icon_file').on('change', function(e) {
        var fileInput = this;
        if (fileInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#icon').attr('src', e.target.result);
            };
            reader.readAsDataURL(fileInput.files[0]);
        }
    });
</script>



</body>

</html>