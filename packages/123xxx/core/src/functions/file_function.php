<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 10/28/18
 * Time: 12:30 PM
 */
function check_extension($filename, $allowList)
{
    $sExtension = $filename;
    $allowArray = explode(",", $allowList);
    $allowPass = 0;
    for ($i = 0; $i < count($allowArray); $i++) {
        if ($sExtension == $allowArray[$i]) $allowPass = 1;
    }
    return $allowPass;
}

function check_upload_extension($filename, $allow_list)
{
    $sExtension = get_extension($filename);
    $allow_arr = explode(",", $allow_list);
    $pass = 0;
    for ($i = 0; $i < count($allow_arr); $i++) {
        if ($sExtension == $allow_arr[$i]) $pass = 1;
    }
    return $pass;
}

function get_extension($filename)
{
    $sExtension = substr($filename, (strrpos($filename, ".") + 1));
    $sExtension = strtolower($sExtension);
    return $sExtension;
}

function show_image_map($markers, $center = "", $zoom = '14', $size = '480x450')
{
    global $path_maps;
    $path_root = $_SERVER["DOCUMENT_ROOT"];
    if ($center == "") $center = $markers;
    $filename = md5($markers) . ".gif";
    if (file_exists($path_root . $path_maps . $filename)) {
        return $path_maps . $filename;
    } else {
        $url_download = 'http://www.google.com/staticmap?center=' . $center . '&markers=' . $markers . ',red&zoom=' . $zoom . '&size=' . $size;
        download_file($url_download, $path_root . $path_maps . $filename);
        return $path_maps . $filename;
    }
}

function download_file($url_download, $save_as)
{
    set_time_limit(0);
    ini_set('display_errors', true);//Just in case we get some errors, let us know....
    $fp = fopen($save_as, 'w');//This is the file where we save the information
    $ch = curl_init($url_download);//Here is the file we are downloading
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_FILE, $fp);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_exec($ch);
    curl_close($ch);
    fclose($fp);
}

function square_crop($src_image, $dest_image, $thumb_size = 64, $jpg_quality = 90)
{

    // Get dimensions of existing image
    if (file_exists($src_image)) {
        $image = getimagesize($src_image);
    }
    //debug( $image );
    // Check for valid dimensions
    if ($image[0] <= 0 || $image[1] <= 0) return false;

    // Determine format from MIME-Type
    $image['format'] = strtolower(preg_replace('/^.*?\//', '', $image['mime']));

    // Import image
    switch ($image['format']) {
        case 'jpg':
        case 'jpeg':
            $image_data = imagecreatefromjpeg($src_image);
            break;
        case 'png':
            $image_data = imagecreatefrompng($src_image);
            break;
        case 'gif':
            $image_data = imagecreatefromgif($src_image);
            break;
        default:
            // Unsupported format
            return false;
            break;
    }

    // Verify import
    if ($image_data == false) return false;

    // Calculate measurements
    //if( $image[0] & $image[1] ) {
    if ($image[0] < $image[1]) {
        // For landscape images
        $x_offset = ($image[0] - $image[1]) / 2;
        $y_offset = 0;
        $square_size = $image[0] - ($x_offset * 2);
    } else {
        // For portrait and square images
        $x_offset = 0;
        $y_offset = ($image[1] - $image[0]) / 2;
        $square_size = $image[1] - ($y_offset * 2);
    }

    // Resize and crop
    $canvas = imagecreatetruecolor($thumb_size, $thumb_size);
    if (imagecopyresampled(
        $canvas,
        $image_data,
        0,
        0,
        $x_offset,
        $y_offset,
        $thumb_size,
        $thumb_size,
        $square_size,
        $square_size
    )) {

        // Create thumbnail
        switch (strtolower(preg_replace('/^.*\./', '', $dest_image))) {
            case 'jpg':
            case 'jpeg':
                return imagejpeg($canvas, $dest_image, $jpg_quality);
                break;
            case 'png':
                return imagepng($canvas, $dest_image);
                break;
            case 'gif':
                return imagegif($canvas, $dest_image);
                break;
            default:
                // Unsupported format
                return false;
                break;
        }

    } else {
        return false;
    }

}

function check_width_height($img_path, $width, $height)
{
    if (file_exists($img_path)) {
        $file_info = getimagesize($img_path);
        if ($file_info && $file_info[0] == (int)$width && $file_info[1] == (int)$height) {
            return true;
        }
    }
    return false;
}