<?php
include_once './header.php';

// Form Configuration
$form_config = [
    'heading' => 'FAQ',
    'form_action' => 'data/register_faq.php',
    'inputs' => [
        'id' => ['type' => 'hidden', 'value' => ''],
        'f1' => ['label' => 'Question1', 'type' => 'textarea', 'class' => 'form-control', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f2' => ['label' => 'Answer1', 'type' => 'textarea', 'class' => 'form-control summernote', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f3' => ['label' => 'Question2', 'type' => 'textarea', 'class' => 'form-control', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f4' => ['label' => 'Answer2', 'type' => 'textarea', 'class' => 'form-control summernote', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f5' => ['label' => 'Question3', 'type' => 'textarea', 'class' => 'form-control', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f6' => ['label' => 'Answer3', 'type' => 'textarea', 'class' => 'form-control summernote', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f7' => ['label' => 'Question4', 'type' => 'textarea', 'class' => 'form-control', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f8' => ['label' => 'Answer4', 'type' => 'textarea', 'class' => 'form-control summernote', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f9' => ['label' => 'Question5', 'type' => 'textarea', 'class' => 'form-control', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f10' => ['label' => 'Answer5', 'type' => 'textarea', 'class' => 'form-control summernote', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f11' => ['label' => 'Question6', 'type' => 'textarea', 'class' => 'form-control', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f12' => ['label' => 'Answer6', 'type' => 'textarea', 'class' => 'form-control summernote', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f13' => ['label' => 'Question7', 'type' => 'textarea', 'class' => 'form-control', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f14' => ['label' => 'Answer7', 'type' => 'textarea', 'class' => 'form-control summernote', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f15' => ['label' => 'Question8', 'type' => 'textarea', 'class' => 'form-control', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f16' => ['label' => 'Answer8', 'type' => 'textarea', 'class' => 'form-control summernote', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f17' => ['label' => 'Question9', 'type' => 'textarea', 'class' => 'form-control', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f18' => ['label' => 'Answer9', 'type' => 'textarea', 'class' => 'form-control summernote', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f19' => ['label' => 'Question10', 'type' => 'textarea', 'class' => 'form-control', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f20' => ['label' => 'Answer10', 'type' => 'textarea', 'class' => 'form-control summernote', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f21' => ['label' => 'Question11', 'type' => 'textarea', 'class' => 'form-control', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f22' => ['label' => 'Answer11', 'type' => 'textarea', 'class' => 'form-control summernote', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f23' => ['label' => 'Question12', 'type' => 'textarea', 'class' => 'form-control', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f24' => ['label' => 'Answer12', 'type' => 'textarea', 'class' => 'form-control summernote', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f25' => ['label' => 'Question13', 'type' => 'textarea', 'class' => 'form-control', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f26' => ['label' => 'Answer13', 'type' => 'textarea', 'class' => 'form-control summernote', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f27' => ['label' => 'Question14', 'type' => 'textarea', 'class' => 'form-control', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f28' => ['label' => 'Answer14', 'type' => 'textarea', 'class' => 'form-control summernote', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f29' => ['label' => 'Question15', 'type' => 'textarea', 'class' => 'form-control', 'div_class' => 'col-lg-12 col-md-12 form-group'],
        'f30' => ['label' => 'Answer15', 'type' => 'textarea', 'class' => 'form-control summernote', 'div_class' => 'col-lg-12 col-md-12 form-group'],

        
    ],
];

// Fetch work data if an ID is provided
$id = 1;
$row = ($id > 0 && isset($faq)) ? $faq->get_by_id($id)['data'] : null;



include_once './navbar.php';
include_once './sidebar.php';
?>
<!-- Content Wrapper -->
<div class="content-wrapper">
    <!-- Page Header -->
    <?php
    $heading = $form_config['heading'];
    $page_title = $id > 0 ? "Update $heading" : "New $heading";
    include_once './page_header.php';
    ?>
    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?= htmlspecialchars($form_config['form_action']) ?>" method="post"
                                enctype="multipart/form-data">
                                <div class="row">
                                    <?php renderImageInputs($form_config, $row); ?>
                                </div>

                                <?php renderInputs($form_config, $row); ?>

                                <hr>
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 form-group">
                                        <button type="submit"
                                            class="btn btn-block btn-outline-<?= $id > 0 ? 'success' : 'secondary' ?>">
                                            <?= $id > 0 ? 'Update Now' : 'Add New' ?>
                                        </button>
                                    </div>
                                    <div class="col-lg-2 col-md-2 form-group">
                                        <button type="reset" class="btn btn-block btn-outline-warning">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div><!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include_once './footer.php'; ?>

<script>
    const formConfig = <?= json_encode($form_config); ?>;
    previewImage(formConfig);
</script>
</body>

</html>