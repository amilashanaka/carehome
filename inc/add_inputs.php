<?php
function input($key)
{
    global $form_config, $row;

    if (!isset($form_config['inputs'][$key])) {
        return '';
    }

    $input = $form_config['inputs'][$key];

    // Check if the input should be skipped
    if (isset($input['skip']) && $input['skip'] === true) {
        return '';
    }

    ob_start();

    switch ($input['type']) {
        case 'text':
        case 'email':
?>


            <div class="<?= isset($input['div_class']) ? $input['div_class'] : 'col-lg-12 col-md-12 form-group' ?>">
                <?php if (isset($input['label'])) echo ' <label class="' . (isset($input['label-class']) ? $input['label-class'] : "") . '">' . $input['label'] . '</label>'; ?>

                <?php if (isset($input['input-div-class'])) : ?>
                    <div class="<?= $input['input-div-class'] ?>">
                    <?php endif; ?>

                    <?php if (isset($input['button'])) : ?>
                        <div class="input-group">
                        <?php endif; ?>

                        <input type="<?= $input['type'] ?>" class="<?= isset($input['class']) ? $input['class'] : 'form-control' ?>" id="<?= isset($input['id']) ? $input['id'] : $key ?>" name="<?= $key ?>" <?php if (isset($input['required'])) echo 'required'; ?> <?php if (isset($input['pattern'])) echo 'pattern="' . $input['pattern'] . '"'; ?> value="<?= isset($row[$key]) ? $row[$key] : (isset($input['value']) ? $input['value'] : '') ?>" placeholder="<?= isset($input['placeholder']) ? $input['placeholder'] : '' ?>">

                        <?php if (isset($input['button'])) : ?>
                            <span class="input-group-append">
                                <button id="<?= $input['button']['id'] ?>" type="button" class="<?= $input['button']['class'] ?>"><?= $input['button']['text'] ?></button>
                            </span>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($input['input-div-class'])) : ?>
                    </div>
                <?php endif; ?>
            </div>

        <?php
            break;

        case 'text-button':
        ?>

            <div class="<?= isset($input['div_class']) ? $input['div_class'] : 'col-lg-12 col-md-12 input-group' ?>">
                <?php if (isset($input['label'])) echo ' <label class="' . (isset($input['label-class']) ? $input['label-class'] : "") . '">' . $input['label'] . '</label>'; ?>
                <?php if (isset($input['input-div-class'])) : ?>
                    <div class="<?= $input['input-div-class'] ?>">
                    <?php endif; ?>

                    <div class="input-group">
                        <input type="<?= $input['type'] ?>" class="<?= isset($input['class']) ? $input['class'] : 'form-control' ?>" id="<?= isset($input['id']) ? $input['id'] : $key ?>" name="<?= $key ?>" <?php if (isset($input['required'])) echo 'required'; ?> <?php if (isset($input['pattern'])) echo 'pattern="' . $input['pattern'] . '"'; ?> value="<?= isset($row[$key]) ? $row[$key] : (isset($input['value']) ? $input['value'] : '') ?>">
                        <span class="input-group-append">
                            <button id="email_button" type="button" class="btn btn-success">Verify</button>
                        </span>
                    </div>
                    <?php if (isset($input['input-div-class'])) : ?>
                    </div>
                <?php endif; ?>
            </div>

        <?php
            break;

        case 'password':
        ?>

            <div class="<?= isset($input['div_class']) ? $input['div_class'] : 'col-lg-12 col-md-12 form-group' ?>">
                <?php if (isset($input['label'])) : ?>
                    <label class="<?= isset($input['label-class']) ? $input['label-class'] : '' ?>"><?= $input['label'] ?></label>
                <?php endif; ?>

                <?php if (isset($input['input-div-class'])) : ?>
                    <div class="<?= $input['input-div-class'] ?>">
                    <?php endif; ?>

                    <div class="input-group mb-3 position-relative">
                        <input type="password" id="<?= isset($input['id']) ? $input['id'] : $key ?>" placeholder="<?= isset($input['placeholder']) ? $input['placeholder'] : '' ?>" name="<?= $key ?>" class="form-control rounded-right <?= isset($input['class']) ? $input['class'] : '' ?>" <?= isset($input['required']) ? 'required' : '' ?> value="<?= isset($input['value']) ? $input['value'] : '' ?>">
                        <button id="toggle-password-<?= $key ?>" type="button" class="position-absolute" aria-label="Show password as plain text. Warning: this will display your password on the screen.">
                            <i id="toggle-icon-<?= $key ?>" class="fa fa-eye"></i>
                        </button>
                    </div>

                    <?php if (isset($input['input-div-class'])) : ?>
                    </div>
                <?php endif; ?>
            </div>

        <?php
            break;

        case 'custom':
            if (isset($input['value']) && $input['value'] != '') {
                echo $input['value'];
            }
            break;

        case 'h':
        ?>
            <input type="hidden" id="<?= isset($input['id']) ? $input['id'] : $key ?>" name="<?= $key ?>" value="<?= isset($row[$key]) ? $row[$key] : (isset($input['value']) ? $input['value'] : '') ?>">
        <?php
            break;

        case 'number':
        ?>
            <div class="<?= isset($input['div_class']) ? $input['div_class'] : 'col-lg-12 col-md-12 form-group' ?>">
                <?php if (isset($input['label'])) echo ' <label class="' . (isset($input['label-class']) ? $input['label-class'] : "") . '">' . $input['label'] . '</label>'; ?>
                <?php if (isset($input['input-div-class'])) : ?>
                    <div class="<?= $input['input-div-class'] ?>">
                    <?php endif; ?>

                    <input type="number" <?php if (isset($input['minlength'])) echo 'minlength="' . $input['minlength'] . '"'; ?> class="<?= isset($input['class']) ? $input['class'] : 'form-control' ?>" id="<?= isset($input['id']) ? $input['id'] : $key ?>" name="<?= $key ?>" <?php if (isset($input['required'])) echo 'required'; ?> <?php if (isset($input['pattern'])) echo 'pattern="' . $input['pattern'] . '"'; ?> value="<?= isset($row[$key]) ? $row[$key] : (isset($input['value']) ? $input['value'] : '') ?>">
                    <?php if (isset($input['input-div-class'])) : ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php
            break;

        case 'switch':
        ?>
            <div class="<?= isset($input['div_class']) ? $input['div_class'] : 'col-lg-12 col-md-12 form-group' ?>">
                <input type="checkbox" id="<?= isset($input['id']) ? $input['id'] : $key ?>" name="<?= $key ?>" <?php if (isset($row[$key]) && $row[$key] == 1) echo 'checked'; ?> data-bootstrap-switch data-off-color="<?= isset($input['color'][1]) ? $input['color'][1] : 'primary' ?>" data-on-color="<?= isset($input['color'][0]) ? $input['color'][0] : 'success' ?> " data-off-text="<?= isset($input['label'][1]) ? $input['label'][1] : 'OFF' ?>" data-on-text="<?= isset($input['label'][0]) ? $input['label'][0] : 'ON' ?>">
            </div>
        <?php
            break;

        case 'combobox':
        ?>

            <div class="<?= isset($input['div_class']) ? $input['div_class'] : 'col-lg-12 col-md-12 form-group' ?>">
                <?php if (isset($input['label'])) echo ' <label class="' . (isset($input['label-class']) ? $input['label-class'] : "") . '">' . $input['label'] . '</label>'; ?>
                <?php if (isset($input['input-div-class'])) : ?>
                    <div class="<?= $input['input-div-class'] ?>">
                    <?php endif; ?>

                    <div class="<?= isset($input['selected-color']) ? 'select2-' . $input['selected-color'] : 'select2-info' ?>">
                        <select class="<?= isset($input['class']) ? $input['class'] : 'form-control' ?>" id="<?= isset($input['id']) ? $input['id'] : $key ?>" name="<?= $key ?>" <?php if (isset($input['required'])) echo 'required'; ?>>
                            <option value=""><?= isset($input['placeholder']) ? $input['placeholder'] : 'Choose an option' ?></option>
                            <?php foreach ($input['items'] as $item) { ?>
                                <option value="<?= $item['value'] ?>" <?php if (isset($row[$key]) && $row[$key] == $item['value']) echo 'selected';
                                                                        elseif (isset($input['value']) && $input['value'] == $item['value']) echo 'selected'; ?>><?= $item['label'] ?></option>
                            <?php } ?>
                        </select>
                    </div>



                    <?php if (isset($input['input-div-class'])) : ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php
            break;

        case 'multy-select':
        ?>
            <div class="<?= isset($input['div_class']) ? $input['div_class'] : 'col-lg-12 col-md-12 form-group' ?>">
                <?php if (isset($input['label'])) echo ' <label class="' . (isset($input['label-class']) ? $input['label-class'] : "") . '">' . $input['label'] . '</label>'; ?>
                <?php if (isset($input['input-div-class'])) : ?>
                    <div class="<?= $input['input-div-class'] ?>">
                    <?php endif; ?>

                    <div class="<?= isset($input['selected-color']) ? 'select2-' . $input['selected-color'] : 'select2-info' ?>">
                        <select id="<?= isset($input['id']) ? $input['id'] : $key ?>" name="<?= $key ?>[]" class="select2 modal-class" multiple="multiple" data-placeholder="<?= isset($input['placeholder']) ? $input['placeholder'] : '' ?>" data-dropdown-css-class="<?= isset($input['dropdown-color']) ? 'select2-' . $input['dropdown-color'] : 'select2-info' ?>" <?php if (isset($input['required'])) echo 'required'; ?> style="width: 100%;">
                            <?php foreach ($input['items'] as $item) { ?>
                                <option value="<?= $item['value'] ?>" <?php if (isset($row[$key]) && $row[$key] == $item['value']) echo 'selected';
                                                                        elseif (isset($input['value']) && $input['value'] == $item['value']) echo 'selected'; ?>><?= $item['label'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <?php if (isset($input['input-div-class'])) : ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php
            break;

        case 'image':
        ?>
            <div class="<?= isset($input['div_class']) ? $input['div_class'] : 'col-lg-12 col-md-12 form-group' ?>">
                <input type="file" class="<?= isset($input['class']) ? $input['class'] : '' ?>" id="<?= isset($input['id']) ? $input['id'] : $key ?>" name="<?= $key ?>" accept="image/*" <?php if (isset($input['required'])) echo 'required'; ?>>
            </div>
        <?php
            break;

        case 'checkbox':
        ?>

            <div class="<?= isset($input['div_class']) ? $input['div_class'] : 'col-lg-12 col-md-12' ?>">
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="<?= isset($input['class']) ? $input['class'] : 'custom-control-input' ?>" type="checkbox" id="<?= isset($input['id']) ? $input['id'] : $key ?>" name="<?= $key ?>" <?php if (isset($input['required'])) echo 'required'; ?> <?php if ((isset($row[$key]) && $row[$key] == 1) || (isset($input['checked']) && $input['checked'] === true)) echo 'checked'; ?>>
                        <label class="custom-control-label" for="<?= isset($input['id']) ? $input['id'] : $key ?>"><?= $input['label'] ?></label>
                    </div>
                </div>
            </div>
        
        <?php
            break;

        case 'country':
        ?>
            <div class="<?= isset($input['div_class']) ? $input['div_class'] : 'col-lg-12 col-md-12 form-group' ?>">
                <?php if (isset($input['label'])) echo ' <label class="' . (isset($input['label-class']) ? $input['label-class'] : "") . '">' . $input['label'] . '</label>'; ?>
                <?php if (isset($input['input-div-class'])) : ?>
                    <div class="<?= $input['input-div-class'] ?>">
                    <?php endif; ?>

                    <div class="niceCountryInputSelector <?= isset($input['class']) ? $input['class'] : 'form-control' ?>" data-selectedcountry="<?= isset($row[$key]) ? $row[$key] : (isset($input['value']) ? $input['value'] : 'GB') ?>" data-showspecial="false" data-showflags="true" data-i18nall="All selected" data-i18nnofilter="No selection" data-i18nfilter="Filter" data-onchangecallback="<?= isset($input['onChangeCallback']) ? $input['onChangeCallback'] : 'onChangeCallback' ?>"></div>
                    <input type="hidden" id="<?= isset($input['id']) ? $input['id'] : $key ?>" name="<?= $key ?>" value="<?= isset($row[$key]) ? $row[$key] : (isset($input['value']) ? $input['value'] : '') ?>">
                    <?php if (isset($input['input-div-class'])) : ?>
                    </div>
                <?php endif; ?>

            </div>
        <?php
            break;

        case 'textarea':
        ?>
            <div class="<?= isset($input['div_class']) ? $input['div_class'] : 'col-lg-12 col-md-12 form-group' ?>">
                <?php if (isset($input['label'])) echo ' <label class="' . (isset($input['label-class']) ? $input['label-class'] : "") . '">' . $input['label'] . '</label>'; ?>
                <?php if (isset($input['input-div-class'])) : ?>
                    <div class="<?= $input['input-div-class'] ?>">
                    <?php endif; ?>

                    <textarea class="<?= $input['class'] ?>" id="<?= isset($input['id']) ? $input['id'] : $key ?>" name="<?= $key ?>" <?php if (isset($input['required'])) echo 'required'; ?> <?php if (isset($input['pattern'])) echo 'pattern="' . $input['pattern'] . '"'; ?> rows="<?= isset($input['rows']) ? $input['rows'] : '5' ?>"><?= isset($row[$key]) ? $row[$key] : (isset($input['value']) ? $input['value'] : '') ?></textarea>
                    <?php if (isset($input['input-div-class'])) : ?>
                    </div>
                <?php endif; ?>

            </div>



        <?php
            break;

        case 'date':
        ?>


            <div class="<?= isset($input['div_class']) ? $input['div_class'] : 'col-lg-12 col-md-12 form-group' ?>">
                <?php if (isset($input['label'])) echo ' <label class="' . (isset($input['label-class']) ? $input['label-class'] : "") . '">' . $input['label'] . '</label>'; ?>

                <?php if (isset($input['input-div-class'])) : ?>
                    <div class="<?= $input['input-div-class'] ?>">
                    <?php endif; ?>
                    <?php if (isset($input['button'])) : ?>
                        <div class="input-group">
                        <?php endif; ?>

                        <input type="date" class="<?= isset($input['class']) ? $input['class'] : 'form-control' ?>" id="<?= isset($input['id']) ? $input['id'] : $key ?>" name="<?= $key ?>" <?php if (isset($input['required'])) echo 'required'; ?> <?php if (isset($input['pattern'])) echo 'pattern="' . $input['pattern'] . '"'; ?> value="<?= isset($row[$key]) ? date('Y-m-d', strtotime($row[$key])) : (isset($input['value']) ? $input['value'] : '') ?>">

                        <?php if (isset($input['button'])) : ?>
                            <span class="input-group-append">
                                <button id="<?= $input['button']['id'] ?>" type="button" class="<?= $input['button']['class'] ?>"><?= $input['button']['text'] ?></button>
                            </span>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($input['input-div-class'])) : ?>
                    </div>
                <?php endif; ?>
            </div>


        <?php
            break;

        case 'datetime':
        ?>
            <div class="<?= isset($input['div_class']) ? $input['div_class'] : 'col-lg-12 col-md-12 form-group' ?>">
                <?php if (isset($input['label'])) echo ' <label class="' . (isset($input['label-class']) ? $input['label-class'] : "") . '">' . $input['label'] . '</label>'; ?>
                <?php if (isset($input['input-div-class'])) : ?>
                    <div class="<?= $input['input-div-class'] ?>">
                    <?php endif; ?>

                    <input type="datetime-local" class="<?= isset($input['class']) ? $input['class'] : 'form-control' ?>" id="<?= isset($input['id']) ? $input['id'] : $key ?>" name="<?= $key ?>" <?php if (isset($input['required'])) echo 'required'; ?> <?php if (isset($input['pattern'])) echo 'pattern="' . $input['pattern'] . '"'; ?> value="<?= isset($row[$key]) ? date('Y-m-d\TH:i', strtotime($row[$key])) : (isset($input['value']) ? $input['value'] : '') ?>">
                    <?php if (isset($input['input-div-class'])) : ?>
                    </div>
                <?php endif; ?>
            </div>
<?php
            break;

        default:
            break;
    }

    $output = ob_get_clean();
    return $output;
}
