<?php include_once './header.php';


$form_config = [

    'headding' => 'Admin User',
    'title' => 'List',
    'tab1' => 'Profile',
    'tab2' => 'Reset Password',
    'tab3' => 'My Clients',
    'tab4' => 'Documents',
    'tab5' => 'Medication',
    'f1' => 'Role',
    'f2' => 'User Name',
    'f3' => 'Password',
    'f4' => 'Staff Id',
    'f5' => 'pin',
    'f6' => 'Name',
    'f7' => 'Gender',
    'f8' => 'Mobile number',
    'f9' => 'e-mail',
    'f10' => 'Address',
    'f11' => 'National Insurance number',

];


$profile_image = './assets/img/profile.png';

if (isset($_GET['id'])) {
    $id = base64_decode($_GET['id']);
} else {
    $id = 0;
}


if ($id > 0) {
    $row = $admin->getAdminById($id)['admin'];

    $role = $row['f1'];




    if ($row['img1']  && $row['img1'] != '') {
        $profile_image = $row['img1'];

        if (!file_exists($profile_image)) {
            $profile_image = './assets/img/profile.png';
        }
    }
} else {
    $id = 0;
    $row = null;


    if (isset($_GET['role'])) {
        $role = base64_decode($_GET['role']);
    } else {
        $role;
    }
}



?>

<?php include_once './navbar.php'; ?>
<?php include_once './sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php

    $heading = $sys['Admin User'];
    $page_title = $sys['List'];

    include_once './page_header.php';

    ?>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <?php if ($id > 0) { ?>
                                    <input type="file" class="filepond" name="filepond" accept="image/png, image/jpeg, image/gif" />
                                <?php } else { ?>

                                    <input type="file" class="filepond" name="filepond" accept="image/png, image/jpeg, image/gif" disabled />

                                <?php } ?>
                            </div>

                            <h3 class="profile-username text-center"><?= ($row == !null) ?  $row['f6'] : " "; ?></h3>
                            <p class="text-muted text-center"><?= ($row == !null) ? $row['f6'] : ""; ?></p>
                            <ul class="list-group list-group-unbordered mb-3 ">


                                <?php if ($role < 3) { ?>
                                    <li class="list-group-item ">
                                        <b>My Team</b> <a class="float-right">10</a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>My Clients</b> <a class="float-right"><?= ($row == !null) ? $row['f5'] : ""; ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Registerd</b> <a class="float-right">20</a>
                                    </li>
                                <?php } ?>

                                <?php if ($role == 3) { ?>
                                    <li class="list-group-item ">
                                        <b>Staff Id</b> <a class="float-right"><?= ($row == !null) ? $row['f4'] : ""; ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>My Pin</b> <a class="float-right"><?= ($row == !null) ? $row['f5'] : ""; ?></a>
                                    </li>

                                <?php } ?>



                            </ul>


                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->


                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <?php if ($id == 0) { ?>
                                    <li class="nav-item"><a class="nav-link active" href="#tab-1" data-toggle="tab"><?= $form_config['tab1'] ?></a></li>

                                <?php } else if ($user_act == $row['id'] || $user_act == 1) { ?>
                                    <li class="nav-item"><a class="nav-link active" href="#tab-1" data-toggle="tab"><?= $form_config['tab1'] ?></a></li>
                                    <li class="nav-item"><a class="nav-link " href="#tab-2" data-toggle="tab"><?= $form_config['tab2'] ?></a></li>


                                <?php } else { ?>

                                    <li class="nav-item"><a class="nav-link active" href="#tab-1" data-toggle="tab"><?= $form_config['tab1'] ?></a></li>
                                <?php } ?>

                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="tab-1">

                                    <form action="data/register_admin.php" class="form-horizontal" method="post" enctype="multipart/form-data" name="update_members">

                                        <input type="hidden" name="register_by" value="<?= $user_act ?>">
                                        <input type="hidden" name="f1" value="<?= $role ?>">
                                        <?php
                                        if ($id == 0) {

                                            echo '<input type="hidden" name="action" value="register">';
                                        } else {

                                            echo ' <input type="hidden" name="action" value="update">';
                                            echo ' <input type="hidden" name="id" value="' . $id . '">';
                                        }
                                        ?>

                                        <?php if ($id > 0) { ?>

                                            <div class="form-group row">
                                                <label for="f6" class="col-sm-2 col-form-label"><?= $form_config['f6'] ?></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="f6" placeholder="<?= $form_config['f6'] ?>" value="<?= ($row == !null) ? $row['f6'] : ""; ?>" required>


                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="<?= $form_config['f8'] ?>" class="col-sm-2 col-form-label"><?= $form_config['f8'] ?></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" placeholder="<?= $form_config['f8'] ?>" name="f8" value="<?= ($row == !null) ? $row['f8'] : ""; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="<?= $form_config['f9'] ?>" class="col-sm-2 col-form-label"><?= $form_config['f9'] ?></label>
                                                <div class="col-sm-10">
                                                    <input type="email" class="form-control" placeholder="<?= $form_config['f9'] ?>" name="f9" value="<?= ($row == !null) ? $row['f9'] : ""; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="<?= $form_config['f10'] ?>" class="col-sm-2 col-form-label"><?= $form_config['f10'] ?></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="f10" placeholder="<?= $form_config['f10'] ?>" value="<?= ($row == !null) ? $row['f10'] : ""; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="inputExperience" class="col-sm-2 col-form-label"><?= $form_config['f11'] ?></label>
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" id="f11" name="f11" placeholder="<?= $form_config['f11'] ?>" value="<?php echo $row['f11']; ?>">
                                                </div>
                                            </div>

                                        <?php } ?>

                                        <?php if ($role == 2 && $id == 0) { ?>

                                            <div class="form-group row">
                                                <label for="<?= $form_config['f2'] ?>" class="col-sm-2 col-form-label"><?= $form_config['f2'] ?></label>
                                                <div class="col-sm-10">
                                                    <input type="text" onkeyup="usernameval()" class="form-control" id="admin-f2" name="f2" placeholder="<?= $form_config['f2'] ?>" value="<?= ($row != null) ? $row['f2'] : ""; ?>" required>
                                                    <p id="u_error" style=" color: red; display:none;">Username can only contain letters and numbers</p>
                                                    <p id="u_ok" style=" color: green; display:none;">Username accepted</p>
                                                    <p id="u_emp" style=" color: red; display:none;">Username cannot be empty!</p>

                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="a_password" class="col-sm-2 col-form-label"><?= $sys['admin-f3'] ?></label>
                                                <div class="col-sm-10">
                                                    <input type="password" minlength="8" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" onkeyup="pwordval()" id="f3" name="f3" placeholder="<?= $sys['admin-f3'] ?>" required>
                                                    <p id="less" style=" color: red; display:none;">Password length must be more than 8 characters</p>
                                                    <p id="more" style=" color: green; display:none;">Password length accepted</p>
                                                    <p id="empty" style=" color: red; display:none;">Password cannot be empty!</p>
                                                </div>
                                            </div>

                                        <?php } ?>


                                        <?php if ($role == 3 && $id == 0) { ?>

                                            <div class="form-group row">
                                                <label for="f4" class="col-sm-2 col-form-label"><?= $sys['admin-f4'] ?></label>
                                                <div class="col-sm-10">
                                                    <input type="text" onkeyup="usernameval()" class="form-control" name="f4" placeholder="<?= $sys['admin-f4'] ?>" value="<?= ($row != null) ? $row['f4'] : ""; ?>" required>
                                                    <p id="u_error" style=" color: red; display:none;"><?= $sys['admin-f4'] ?> can only contain letters and numbers</p>
                                                    <p id="u_ok" style=" color: green; display:none;"><?= $sys['admin-f4'] ?> accepted</p>
                                                    <p id="u_emp" style=" color: red; display:none;"><?= $sys['admin-f4'] ?> cannot be empty!</p>


                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="f5" class="col-sm-2 col-form-label"><?= $sys['admin-f5'] ?></label>
                                                <div class="col-sm-10">
                                                    <input type="number" minlength="4" title="Only Numbers" class="form-control" name="f5" placeholder="<?= $sys['admin-f5'] ?>" required>
                                                    <p id="less" style=" color: red; display:none;">Password length must be more than 8 characters</p>
                                                    <p id="more" style=" color: green; display:none;">Password length accepted</p>
                                                    <p id="empty" style=" color: red; display:none;">Password cannot be empty!</p>
                                                </div>
                                            </div>

                                        <?php } ?>



                                        <div class="col-lg-12 col-md-12 form-group">
                                            <div class="row">

                                                <?php if ($id == 0) { ?>

                                                    <div class="col-lg-3 col-md-3 form-group">
                                                        <button type="submit" name="add_new_Submit" class="btn btn-block btn-danger">Add New</button>
                                                    </div>


                                                <?php } else { ?>

                                                    <div class="col-lg-3 col-md-3 form-group">
                                                        <button type="submit" class="btn btn-block btn-success">Update Now</button>
                                                    </div>

                                                <?php } ?>
                                                <div class="col-lg-3 col-md-3 form-group">
                                                    <button type="reset" class="btn btn-block btn-warning">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                                <div class="tab-pane" id="tab-2">

                                    <form action="data/register_admin.php" method="post" enctype="multipart/form-data">

                                        <input type="hidden" name="update_by" value="<?= $user_act ?>">
                                        <input type="hidden" name="f1" value="<?= $role ?>">
                                        <input type="hidden" name="action" value="reset_pwd">
                                        <input type="hidden" name="id" value="<?= $id; ?>">

                                        <?php if (($role == 1 || $role == 2)  && $id > 0) { ?>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="pwd" placeholder="*****" name="pwd">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Confirm Password</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="pwd_conf" placeholder="*****" name="pwd_conf">
                                                </div>
                                            </div>
                                        <?php } ?>

                                        <?php if ($role == 3 && $id >= 0) { ?>

                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Pin</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="pwd" placeholder="*****" name="pwd">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="inputName2" class="col-sm-2 col-form-label">Confirm Pin</label>
                                                <div class="col-sm-10">
                                                    <input type="password" class="form-control" id="pwd_conf" placeholder="*****" name="pwd_conf">
                                                </div>
                                            </div>
                                        <?php } ?>



                                        <div class="col-lg-12 col-md-12 form-group">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 form-group">
                                                    <button type="submit" class="btn btn-block btn-success">Reset</button>
                                                </div>
                                                <div class="col-lg-3 col-md-3 form-group">
                                                    <button type="reset" class="btn btn-block btn-warning">Clear</button>
                                                </div>
                                            </div>
                                        </div>


                                    </form>


                                </div>


                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>

                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
</div>

<?php include_once './footer.php'; ?>

<script>
    const imagePath = '<?= $profile_image ?>';
    const userId = '<?= $id  ?>'; // Ensure this is correctly set in PHP
    const hasImage = Boolean(imagePath); // Set hasImage based on whether imagePath is provided

    // Register the FilePond plugins
    FilePond.registerPlugin(
        FilePondPluginFileValidateType,
        FilePondPluginImageExifOrientation,
        FilePondPluginImagePreview,
        FilePondPluginImageCrop,
        FilePondPluginImageResize,
        FilePondPluginImageTransform
    );

    // Create FilePond instance
    const pond = FilePond.create(
        document.querySelector('.filepond'), {
            imagePreviewHeight: 170,
            imageCropAspectRatio: '1:1',
            imageResizeTargetWidth: 200,
            imageResizeTargetHeight: 200,
            stylePanelLayout: 'compact circle',
            styleLoadIndicatorPosition: 'center bottom',
            styleProgressIndicatorPosition: 'right bottom',
            styleButtonRemoveItemPosition: 'left bottom',
            styleButtonProcessItemPosition: 'right bottom',
            files: hasImage ? [{
                source: imagePath,
                options: {
                    type: 'image'
                }
            }] : []
        }
    );

    // Configure server options dynamically
    const setServerOptions = () => {
        pond.setOptions({
            server: {
                process: {
                    url: './data/upload_profile_pic.php',
                    method: 'POST',
                    withCredentials: false,
                    headers: {},
                    timeout: 7000,
                    onload: (response) => response, // This is where file.serverId is set
                    onerror: (response) => response,
                    ondata: (formData) => {
                        // Append additional data to the formData
                        formData.append('id', userId);
                        formData.append('target', 'admins');
                        return formData;
                    }
                }
            }
        });
    };

    // Catch the response from the server after a file has been processed
    pond.on('processfile', (error, file) => {
        if (error) {
            console.error('Error processing file:', error);
            return;
        }
        const serverResponse = file.serverId;
        try {
            const response = JSON.parse(serverResponse);
            if (response.status === 'success') {
                console.log('File uploaded successfully');
                // You can use response.filePath to do something with the uploaded file path
            } else {
                console.error('File upload error:', response.message);
            }
        } catch (e) {
            console.error('Failed to parse server response:', serverResponse);
        }
    });

    // Handle the addfile event to ensure new files are processed
    pond.on('addfile', (error, file) => {
        if (error) {
            console.error('Error adding file:', error);
            return;
        }

        // If a new file is added, set the server configuration
        setServerOptions();
    });

    // Initialize server options if no initial image is provided
    if (!hasImage) {
        setServerOptions();
    }
</script>
</body>

</html>