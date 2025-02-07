<?php

function replaceArrayKey($array, $oldKey, $newKey)
{
    if (array_key_exists($oldKey, $array)) {
        $keys = array_keys($array);
        $keys[array_search($oldKey, $keys)] = $newKey;
        $array = array_combine($keys, $array);
    }
    return $array;
}


function uploaFile($file, $upload_dir)
{

    if (isset($_FILES[$file]) && $_FILES[$file]['error'] == UPLOAD_ERR_OK) {
        $allowed_types = array('application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document');

        $file_name = $_FILES[$file]['name'];
        $file_type = $_FILES[$file]['type'];
        $file_tmp = $_FILES[$file]['tmp_name'];
        $file_size = $_FILES[$file]['size'];

        if (in_array($file_type, $allowed_types)) {
            if ($file_size <= 5242880) {
                // $upload_dir = 'uploads/';
                if (!is_dir($upload_dir)) {
                    mkdir($upload_dir, 0755, true);
                }
                $file_name = preg_replace("/[^a-zA-Z0-9\.\-_]/", "", $file_name); // Sanitize file name
                $file_path = $upload_dir . basename($file_name);
                if (move_uploaded_file($file_tmp, $file_path)) {
                    return $file_name;
                } else {
                    return "Failed to move the uploaded file.";
                }
            } else {
                return "File is too large. Maximum file size is 5MB.";
            }
        } else {
            return "Invalid file type. Only PDF and DOC files are allowed.";
        }
    } else {
        return "No file uploaded or there was an upload error.";
    }
}





function uploadPic($file_name, $target_dir)
{
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }


    if (($_FILES[$file_name]["name"]) != '') {
        $target_user_image = $target_dir . basename($_FILES[$file_name]["name"]);
        $uploadFileType_user_image = pathinfo($target_user_image, PATHINFO_EXTENSION);
        $newfilename_user_image = round(microtime(true)) . rand(1000, 9999) . '.' . $uploadFileType_user_image;

        if (basename($_FILES[$file_name]["name"]) != '') {
            if ($uploadFileType_user_image != "jpg" && $uploadFileType_user_image != "png" && $uploadFileType_user_image != "jpeg" && $uploadFileType_user_image != "gif" && $uploadFileType_user_image != "JPG" && $uploadFileType_user_image != "PNG" && $uploadFileType_user_image != "JPEG" && $uploadFileType_user_image != "GIF") {
                return '';
            } else {

                if (move_uploaded_file($_FILES[$file_name]["tmp_name"], $target_dir . $newfilename_user_image)) {

                    return  $newfilename_user_image;
                } else {

                    return '';
                }
            }
        }
    } else {

        return '';
    }
}


function getResizeImg($file, $target_dir, $width, $height)
{


    if (basename($_FILES[$file]["name"]) != '') {
        $pd_Main_img = reSize($_FILES[$file]['tmp_name'], $_FILES[$file]['name'], 1, $target_dir, $width, $height);
    }
    return $pd_Main_img;
}




// back ground functions image uploading 



function reSize($file, $var_file, $var_name, $folderPath, $targetWidth, $targetHeight)
{

    $sourceProperties = getimagesize($file);
    $fileNewName = time() . $var_name;

    $ext = pathinfo($var_file, PATHINFO_EXTENSION);

    $imageType = $sourceProperties[2];

    switch ($imageType) {


        case IMAGETYPE_PNG:
            $imageResourceId = imagecreatefrompng($file);
            $targetLayer = imageResize($imageResourceId, $sourceProperties[0], $sourceProperties[1], $targetWidth, $targetHeight);
            imagepng($targetLayer, $folderPath . $fileNewName . "." . $ext);
            break;


        case IMAGETYPE_GIF:
            $imageResourceId = imagecreatefromgif($file);
            $targetLayer = imageResize($imageResourceId, $sourceProperties[0], $sourceProperties[1], $targetWidth, $targetHeight);
            imagegif($targetLayer, $folderPath . $fileNewName . "." . $ext);
            break;


        case IMAGETYPE_JPEG:
            $imageResourceId = imagecreatefromjpeg($file);
            $targetLayer = imageResize($imageResourceId, $sourceProperties[0], $sourceProperties[1], $targetWidth, $targetHeight);
            imagejpeg($targetLayer, $folderPath . $fileNewName . "." . $ext);
            break;


        default:
            echo "Invalid Image type.";
            exit;
            break;
    }

    $file_save_as =  $fileNewName . "." . $ext;


    move_uploaded_file($file, $folderPath . $file_save_as);

    return $file_save_as;
}

function imageResize($imageResourceId, $width, $height, $targetWidth, $targetHeight)
{




    $targetLayer = imagecreatetruecolor($targetWidth, $targetHeight);
    imagecopyresampled($targetLayer, $imageResourceId, 0, 0, 0, 0, $targetWidth, $targetHeight, $width, $height);


    return $targetLayer;
}



// Date and time functions ----------------------------------------------------

function printTime($date)
{
    try {

        $dateObject = new DateTime($date);
        return $dateObject->format("H:i:s");
    } catch (Exception $e) {
        echo 'Error: ' . $e->getMessage();
    }
}

function printDate($date)
{
    $ndate = date_create($date);


    return date_format($ndate, "d-m-Y");
}

function printDateTime($date)
{
    $ndate = date_create($date);

    return date_format($ndate, 'd-m-Y H:i:s');
}

function setExpDate($today, $days = 100)
{
    return date('d-m-Y H:i:s', strtotime($today . ' + ' . $days . 'days'));
}


//----------------------------------------------------------------


function calculateAge($birthdate)
{
    // Create a DateTime object from the birthdate
    $birthDate = new DateTime($birthdate);
    // Get the current date
    $currentDate = new DateTime();
    // Calculate the difference between the current date and the birthdate
    $age = $currentDate->diff($birthDate);
    // Return the age in years
    return $age->y;
}


function redirect_page($is_update, $result, $id, $page)
{
    if (($is_update && $result['error'] === null && $result['status'] === 1) || (!$is_update && $result['code'] === 200)) {
        $info = $is_update ? implode(" ", $result['message']) : '';
        $redirect_url = $is_update 
            ? "../" . $page . "_list.php?error=" . base64_encode(1) . "&info=" . base64_encode($info)
            : "../" . $page . "_list.php?error=" . base64_encode(4);
    } else {
        $redirect_url = $is_update 
            ? "../" . $page . ".php?id=" . base64_encode($id) . "&error=" . base64_encode(3)
            : "../" . $page . ".php?id=" . base64_encode($id) . "&error=" . base64_encode(3);
    }

    return $redirect_url;
}

function redirect_page_single($is_update, $result, $id, $page)
{
    if (($is_update && $result['error'] === null && $result['status'] === 1) || (!$is_update && $result['code'] === 200)) {
        $info = $is_update ? implode(" ", $result['message']) : '';
        $redirect_url = $is_update 
            ? "../" . $page . ".php?error=" . base64_encode(1) . "&info=" . base64_encode($info)
            : "../" . $page . ".php?error=" . base64_encode(4);
    } else {
        $redirect_url = $is_update 
            ? "../" . $page . ".php?id=" . base64_encode($id) . "&error=" . base64_encode(3)
            : "../" . $page . ".php?id=" . base64_encode($id) . "&error=" . base64_encode(3);
    }

    return $redirect_url;
}



function uploadMedia($file_name, $target_dir, $allowed_types = ['jpg', 'jpeg', 'png', 'gif', 'mp4', 'avi', 'mov', 'mkv'])
{
    // Ensure the target directory exists
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    // Check if a file was uploaded
    if (!empty($_FILES[$file_name]["name"])) {
        $original_file_name = basename($_FILES[$file_name]["name"]);
        $file_extension = pathinfo($original_file_name, PATHINFO_EXTENSION);
        $new_file_name = round(microtime(true)) . rand(1000, 9999) . '.' . $file_extension;
        $target_file_path = $target_dir . $new_file_name;

        // Validate file type
        if (!in_array(strtolower($file_extension), $allowed_types)) {
            return '';
        }

        // Attempt to move the uploaded file to the target directory
        if (move_uploaded_file($_FILES[$file_name]["tmp_name"], $target_file_path)) {
            return $new_file_name;
        } else {
            return '';
        }
    }

    return '';
}

function renderImageInputs($form_config, $row) {
    foreach ($form_config['inputs'] as $name => $input) {
        // Check if the input is a file type with preview enabled
        if ($input['type'] === 'file' && isset($input['accept']) && strpos($input['accept'], 'image/') !== false) {
            $image_src = isset($row[$name]) && $row[$name] !== '' 
                ? "../" . htmlspecialchars($row[$name]) 
                : './assets/img/photo1.png';

            echo <<<HTML
            <div class="{$input['div_class']}">
                <label for="$name">{$input['label']}</label>
                <div class="mb-2" id="preview_$name">
                    <img src="$image_src" class="img-thumbnail" style="max-width: 150px;" />
                </div>
                <input type="file" name="$name" id="$name" class="form-control" accept="{$input['accept']}" />
            </div>
            HTML;
        }
    }
}

function renderInputs($form_config, $row) {
    if (empty($form_config['inputs'])) {
        return;
    }

    foreach ($form_config['inputs'] as $key => $input) {
        // Skip inputs if marked to skip
        if (!empty($input['skip'])) {
            continue;
        }

        // Start the input wrapper based on the type
        switch ($input['type']) {
            case 'text':
            case 'number':
            case 'datetime-local':
                $divClass = $input['div_class'] ?? 'col-lg-12 col-md-12 form-group';
                $label = isset($input['label']) ? '<label>' . htmlspecialchars($input['label']) . '</label>' : '';
                $value = htmlspecialchars($row[$key] ?? $input['value'] ?? '');
                $class = htmlspecialchars($input['class'] ?? 'form-control');
                $required = !empty($input['required']) ? 'required' : '';
                $pattern = !empty($input['pattern']) ? 'pattern="' . htmlspecialchars($input['pattern']) . '"' : '';
                echo <<<HTML
                <div class="$divClass">
                    $label
                    <input type="{$input['type']}" class="$class" id="$key" name="$key" value="$value" $required $pattern>
                </div>
                HTML;
                break;

            case 'hidden':
                $value = htmlspecialchars($row[$key] ?? $input['value'] ?? '');
                echo <<<HTML
                <input type="hidden" id="$key" name="$key" value="$value">
                HTML;
                break;

            case 'textarea':
                $divClass = $input['div_class'] ?? 'col-lg-12 col-md-12 form-group';
                $label = isset($input['label']) ? '<label>' . htmlspecialchars($input['label']) . '</label>' : '';
                $value = htmlspecialchars($row[$key] ?? $input['value'] ?? '');
                $class = htmlspecialchars($input['class'] ?? 'form-control');
                $required = !empty($input['required']) ? 'required' : '';
                $rows = $input['rows'] ?? '5';
                echo <<<HTML
                <div class="$divClass">
                    $label
                    <textarea class="$class" id="$key" name="$key" rows="$rows" $required>$value</textarea>
                </div>
                HTML;
                break;

            case 'switch':
                $divClass = $input['div_class'] ?? 'col-lg-12 col-md-12 form-group';
                $checked = !empty($input['checked']) ? 'checked' : '';
                $offColor = htmlspecialchars($input['color'][1] ?? 'primary');
                $onColor = htmlspecialchars($input['color'][0] ?? 'success');
                $offText = htmlspecialchars($input['label'][1] ?? 'OFF');
                $onText = htmlspecialchars($input['label'][0] ?? 'ON');
                echo <<<HTML
                <div class="$divClass">
                    <input type="checkbox" id="$key" name="$key" $checked data-bootstrap-switch
                        data-off-color="$offColor" data-on-color="$onColor"
                        data-off-text="$offText" data-on-text="$onText">
                </div>
                HTML;
                break;

            case 'multy-select':
                $divClass = $input['div_class'] ?? 'col-lg-12 col-md-12 form-group';
                $label = isset($input['label']) ? '<label>' . htmlspecialchars($input['label']) . '</label>' : '';
                $selectedColor = 'select2-' . ($input['selected-color'] ?? 'info');
                $dropdownColor = 'select2-' . ($input['dropdown-color'] ?? 'info');
                $placeholder = htmlspecialchars($input['placeholder'] ?? '');
                echo <<<HTML
                <div class="$divClass">
                    $label
                    <div class="$selectedColor">
                        <select id="$key" name="{$key}[]" class="select2 modal-class" multiple="multiple"
                            data-placeholder="$placeholder" data-dropdown-css-class="$dropdownColor" style="width: 100%;">
                HTML;
                foreach ($input['items'] as $item) {
                    $selected = (isset($row[$key]) && $row[$key] == $item['value']) ||
                                (!isset($row[$key]) && isset($input['value']) && $input['value'] == $item['value']) ? 'selected' : '';
                    echo '<option value="' . htmlspecialchars($item['value']) . '" ' . $selected . '>' . htmlspecialchars($item['label']) . '</option>';
                }
                echo <<<HTML
                        </select>
                    </div>
                </div>
                HTML;
                break;

            case 'checkbox':
                $divClass = $input['div_class'] ?? 'icheck-primary d-inline';
                $checked = !empty($input['checked']) ? 'checked' : '';
                $label = htmlspecialchars($input['label'] ?? '');
                echo <<<HTML
                <div class="form-group">
                    <div class="$divClass">
                        <input type="checkbox" id="$key" name="$key" $checked>
                        <label for="$key">$label</label>
                    </div>
                </div>
                HTML;
                break;

            default:
                if ($input['type'] === 'custom' && !empty($input['value'])) {
                    echo $input['value'];
                }
                break;
        }
    }
}


// Example usage:
// $uploaded_file = uploadMedia('video_file', 'uploads/videos/', ['mp4', 'avi', 'mov', 'mkv']);
// $uploaded_image = uploadMedia('image_file', 'uploads/images/', ['jpg', 'jpeg', 'png', 'gif']);




