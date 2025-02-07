<?php include_once './header.php';
include_once './controllers/index.php';
$form_config = $user_page_element;
$profile_image = './assets/img/profile.png';
if (isset($_GET['id'])) {
    $id = base64_decode($_GET['id']);
} else {
    $id = 0;
    $row = null;
}
if ($id > 0) {
    $row = $user->get_by_id($id)['data'];
    if ($row['img1']  && $row['img1'] != '') {
        $profile_image = $row['img1'];
        if (!file_exists($profile_image)) {
            $profile_image = './assets/img/profile.png';
        }
    }
}

if (isset($_GET['level'])) {
    $level = base64_decode($_GET['level']);
} else {
    $level = 1;
}

?>
<?php include_once './navbar.php'; ?>
<?php include_once './sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php
     $heading = "User";
    $page_title = "Profile";
    include_once './page_header.php';
    ?>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile fs-6">

                            <div class="text-center">
                                <?php if ($profile_image) { ?>
                                    <input type="file" class="filepond d-none" name="filepond" accept="image/png, image/jpeg, image/gif" />

                                    <div id="profile-image-container" class="filepond--image-preview-wrapper">
                                        <img id="profile-image-filepond" class="filepond--image-preview" src="<?php echo $profile_image; ?>" alt="Profile Image">
                                        <?php
                                        if ($id > 0) {
                                            echo '<button id="remove-profile-image" class="filepond--action-button filepond--action-button-remove-item" type="button">';
                                        }
                                        ?>

                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
                                            <path fill="currentColor" d="M242.72 256L349.72 149.72C356.36 143.07 356.36 132.93 349.72 126.28L325.72 102.28C319.07 95.64 308.93 95.64 302.28 102.28L195.72 208.72L89.72 102.28C83.07 95.64 72.93 95.64 66.28 102.28L42.28 126.28C35.64 132.93 35.64 143.07 42.28 149.72L149.72 256L42.28 362.28C35.64 368.93 35.64 379.07 42.28 385.72L66.28 409.72C72.93 416.36 83.07 416.36 89.72 409.72L195.72 303.28L302.28 409.72C308.93 416.36 319.07 416.36 325.72 409.72L349.72 385.72C356.36 379.07 356.36 368.93 349.72 362.28L242.72 256z"></path>
                                        </svg>
                                        </button>
                                    </div>
                                <?php  } else { ?>
                                    <input type="file" class="filepond " name="filepond" accept="image/png, image/jpeg, image/gif" />
                                <?php  } ?>
                            </div>

                            <h3 class="profile-username text-center"><?= ($row == null) ? "" : $row['f1']; ?></h3>
                            <p class="text-muted text-center"><?= ($row == null) ? "" : $row['f2']; ?> </p>
                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item"> <b>DOB</b> <a class="float-right"><?= ($row == null) ? "" : $row['f3']; ?></a> </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-md-9  fs-10">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <?php if ($id == 0) { ?>
                                    <li class="nav-item"><a class="nav-link active" href="#tab-1" data-toggle="tab"><?= $sys['user-tab-1'] ?></a></li>
                                <?php } else { ?>
                                    <li class="nav-item"><a class="nav-link active" href="#tab-1" data-toggle="tab"><?= $sys['user-tab-1'] ?></a></li>
                                    <li class="nav-item"><a class="nav-link " href="#tab-2" data-toggle="tab"><?= $sys['user-tab-2'] ?></a></li>
                                <?php } ?>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="active tab-pane" id="tab-1">
                                    <form action="<?= $form_config['form_action'] ?>" class="form-horizontal" method="post" enctype="multipart/form-data" name="update_members">
                                        <input type="hidden" name="register_by" value="<?php echo $_SESSION['login'] ?>">
                                        <input type="hidden" name="level" value="<?= $level ?>">
                                        <?php
                                        if ($id == 0) {
                                            echo '<input type="hidden" name="action" value="register">';

                                            for ($i = 1; $i <= 3; $i++) {
                                                echo input('f' . $i);
                                            }
                                        } else {
                                            echo ' <input type="hidden" name="action" value="update">';
                                            echo ' <input type="hidden" name="id" value="' . $id . '">';
                                            for ($i = 1; $i <= 6; $i++) {
                                                echo input('f' . $i);
                                            }
                                        }
                                        ?>


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
                                    <!-- The timeline -->
                                    <form action="<?= $form_config['form_action'] ?>" class="form-horizontal" method="post" enctype="multipart/form-data" name="more_details">
                                        <input type="hidden" name="update_by" value="<?= $user_act ?>">
                                        <input type="hidden" name="action" value="update">
                                        <input type="hidden" name="level" value="<?= $level ?>">
                                        <?php
                                        echo input('id');
                                        echo input('f7')

                                        ?>



                                        <div class="col-lg-12 col-md-12 form-group">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-3 form-group">
                                                    <button type="submit" class="btn btn-block btn-success">Update
                                                        Now</button>
                                                </div>
                                                <div class="col-lg-3 col-md-3 form-group">
                                                    <button type="reset" class="btn btn-block btn-warning">Reset</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->

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
<!-- /.content -->
</div>
<?php include_once './footer.php'; ?>

<script>
    const imagePath = '<?= $profile_image; ?>';
    const userId = '<?php echo $id; ?>';
    const hasImage = Boolean('<?php echo $profile_image ? 'true' : 'false'; ?>');

    let pond; // Declare pond variable globally

    function initializeFilePond() {
        FilePond.registerPlugin(
            FilePondPluginFileValidateType,
            FilePondPluginImageExifOrientation,
            FilePondPluginImagePreview,
            FilePondPluginImageCrop,
            FilePondPluginImageResize,
            FilePondPluginImageTransform
        );

        pond = FilePond.create(document.querySelector('.filepond'), {
            imagePreviewHeight: 170,
            imageCropAspectRatio: '1:1',
            imageResizeTargetWidth: 200,
            imageResizeTargetHeight: 200,
            stylePanelLayout: 'compact circle',
            styleLoadIndicatorPosition: 'center bottom',
            styleProgressIndicatorPosition: 'right bottom',
            styleButtonRemoveItemPosition: 'left bottom',
            styleButtonProcessItemPosition: 'right bottom'
        });

        setServerOptions(); // Set server options initially

        pond.on('processfile', (error, file) => {
            if (error) {
                console.error('Error processing file:', error);
                return;
            }
            const serverResponse = file.serverId;
            try {
                const response = JSON.parse(serverResponse);
                if (response.status === 'success') {
                    const imgPath = response.img_path;
                    document.getElementById('profile-image-big').src = imgPath;
                    const smallImg = document.getElementById('profile-image-small');
                    smallImg.src = imgPath;
                    console.log('File uploaded successfully');

                } else {
                    console.error('File upload error:', response.message);
                }
            } catch (e) {
                console.error('Failed to parse server response:', serverResponse);
            }
        });

        pond.on('addfile', (error, file) => {
            if (error) {
                console.error('Error adding file:', error);
                return;
            }
            setServerOptions(); // Set server configuration after adding a file
        });
    }

    function setServerOptions() {
        pond.setOptions({
            server: {
                process: {
                    url: './data/upload_profile_pic.php', // Adjust URL to match your server-side script location
                    method: 'POST',
                    withCredentials: false,
                    headers: {},
                    timeout: 7000,
                    onload: (response) => response,
                    onerror: (response) => response,
                    ondata: (formData) => {
                        formData.append('id', userId);
                        formData.append('target', 'users');
                        return formData;

                    }
                }
            }
        });
    }

    // Initialize FilePond
    initializeFilePond();

    document.getElementById('remove-profile-image').addEventListener('click', () => {
        // Show FilePond elements
        document.querySelector('.filepond').classList.remove('d-none');

        // Hide profile image container
        const profileImageContainer = document.getElementById('profile-image-container');
        profileImageContainer.style.display = 'none';

        // Optionally, reinitialize FilePond or perform additional actions
        initializeFilePond();
    });
</script>
</body>

</html>