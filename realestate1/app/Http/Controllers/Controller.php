<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use DataTables,Auth;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function pf($value='')
    {
        if ($value) {
            echo "<pre>"; print_r($value); exit();
        }else{
            print_r("custom debugger is here"); exit();
        }
    }

    public function srt_slug($string, $table)
    {
        $string = strtolower($string);
        $slug = str_replace(' ', '-', $string);
        $old_slug = DB::table($table)->select('slug')->where(['slug'=>$slug])->count();
        if ($old_slug) {
            $slug = $slug.'-'.time();
        }
        return $slug;
    }

    /**
     * to encrypt a string = enc('string')
     * to decrypt a string = enc('string', true)
     * */
    public function enc($value, $is_enc=false)
    {
        $encrypt_method = "AES-256-CBC";
        $secret_key = '7aE3OKIZxusugQdpk3gwNi9x63MRAFLgkMJ4nyil88ZYMyjqTSE3FIo8L5KJghfi';
        $secret_iv = '7aE3OKIZxusugQdpk3gwNi9x63MRAFLgkMJ4nyil88ZYMyjqTSE3FIo8L5KJghfi';
        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        $string = $value;

        if ($is_enc) {
            return openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }else{
            $encryptToken = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            return base64_encode($encryptToken);
        }
    }

    /**
     * Method to use in blade file because,
     * blade file unable to access public method
     * to encrypt a string = enc('string')
     * to decrypt a string = enc('string', true)
     * */
    static function view_enc($value, $is_enc=false)
    {
        $encrypt_method = "AES-256-CBC";
        $secret_key = '7aE3OKIZxusugQdpk3gwNi9x63MRAFLgkMJ4nyil88ZYMyjqTSE3FIo8L5KJghfi';
        $secret_iv = '7aE3OKIZxusugQdpk3gwNi9x63MRAFLgkMJ4nyil88ZYMyjqTSE3FIo8L5KJghfi';
        $key = hash('sha256', $secret_key);
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        $string = $value;

        if ($is_enc) {
            return openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }else{
            $encryptToken = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            return base64_encode($encryptToken);
        }
    }

    public function generateThumbnail($sourcePath, $thumbnailPath, $thumbnailWidth, $thumbnailHeight,$checkExtention)
    {
        $extention = strtolower($checkExtention);

        // Open the source image
        switch ($extention) {
            case 'jpg':
                $image = imagecreatefromjpeg($sourcePath); // Assuming the source image is a JPEG
                break;

            case 'jpeg':
                $image = imagecreatefromjpeg($sourcePath); // Assuming the source image is a JPEG
                break;
            
            case 'png':
                $image = imagecreatefrompng($sourcePath); // Assuming the source image is a PNG
                break;

            default:
                return false;
                break;
        }

        // Get the original image dimensions
        $originalWidth = imagesx($image);
        $originalHeight = imagesy($image);

        // Calculate the aspect ratio
        $aspectRatio = $originalWidth / $originalHeight;

        // Calculate the thumbnail dimensions based on the aspect ratio
        if ($thumbnailWidth / $thumbnailHeight > $aspectRatio) {
            $thumbnailWidth = $thumbnailHeight * $aspectRatio;
        } else {
            $thumbnailHeight = $thumbnailWidth / $aspectRatio;
        }

        // Create a new image resource for the thumbnail
        $thumbnail = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);

        // Resize and crop the image to the thumbnail dimensions
        imagecopyresampled(
            $thumbnail,           // Destination image resource
            $image,               // Source image resource
            0, 0, 0, 0,           // Destination coordinates (x, y, start_x, start_y)
            $thumbnailWidth,      // Destination width
            $thumbnailHeight,     // Destination height
            $originalWidth,       // Source width
            $originalHeight       // Source height
        );

        // Save the thumbnail to the specified path
        switch ($extention) {
            case 'jpg':
                imagejpeg($thumbnail, $thumbnailPath, 75);
                break;

            case 'jpeg':
                imagejpeg($thumbnail, $thumbnailPath, 75);
                break;

            case 'png':
                imagepng($thumbnail, $thumbnailPath, 9);
                break;
            
            default:
                imagejpeg($thumbnail, $thumbnailPath, 75);
                break;
        }

        // Free up memory by destroying the image resources
        imagedestroy($image);
        imagedestroy($thumbnail);

        return $thumbnailPath;
    }


    /**
     * $path = '/upload/mainproductimg';
     * $imageStore = imageStore($file, $path);
     * */
    public function imageStore($image, $path='')
    {
        $allowedExtension = array('jpg', 'jpeg', 'png');
        if (!$image) { return false; }
        if ($path == '') { $path = public_path().'/upload'; }

        $fileName = $image->getClientOriginalName();
        $extention = $image->getClientOriginalExtension();

        $checkExtention = strtolower($extention);
        if(!in_array($checkExtention, $allowedExtension)) {
            return false;
        }

        $randomName = rand(1, 99).time() . '.' . $extention;
        $destinationPath = public_path().$path;
        $uploaded = $image->move($destinationPath,$randomName);

        if ($uploaded) {
            $old_file = public_path().$path.'/'.$randomName;
            $thumb_path = public_path().$path.'/thumbnail/'.$randomName;
            $uploaded_thumb = $this->generateThumbnail($old_file, $thumb_path, '200', '200',$checkExtention);

            if ($uploaded_thumb) {
                return $randomName;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function imageUnlink($path='')
    {
        if ($path == '') {
            return false;
        }

        if (File::exists($path)) {
            unlink($path);
        }

        $path_arr = explode('/', $path);
        $fileName = array_pop($path_arr);
        $main_path = implode('/', $path_arr);
        $thumb_path = $main_path.'/thumbnail/'.$fileName;

        if (File::exists($thumb_path)) {
            unlink($thumb_path);
        }
        return true;
    }

    public function sendMail($to, $from, $subject, $message)
    {
        $header = "From:".$from." \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        $retval = mail ($to,$subject,$message,$header);
        return $retval;
    }
}
