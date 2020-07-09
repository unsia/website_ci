<?php
if(!function_exists('resize_crop_image')) {
    /**
     * resize crop image
     * @param $max_width
     * @param $max_height
     * @param $source_file
     * @param $dst_dir
     * @param int $quality
     * @return bool
     */
    function resize_crop_image($max_width, $max_height, $source_file, $dst_dir, $fileName, $quality = 80){
        $imgsize = getimagesize($source_file);
        $width = $imgsize[0];
        $height = $imgsize[1];
        $mime = $imgsize['mime'];

        switch($mime){
            case 'image/gif':
                $image_create = "imagecreatefromgif";
                $image = "imagegif";
                break;

            case 'image/png':
                $image_create = "imagecreatefrompng";
                $image = "imagepng";
                $quality = 7;
                break;

            case 'image/jpeg':
                $image_create = "imagecreatefromjpeg";
                $image = "imagejpeg";
                $quality = 80;
                break;

            default:
                return false;
                break;
        }

        $dst_img = imagecreatetruecolor($max_width, $max_height);
        $src_img = $image_create($source_file);

        $width_new = $height * $max_width / $max_height;
        $height_new = $width * $max_height / $max_width;
        //if the new width is greater than the actual width of the image, then the height is too large and the rest cut off, or vice versa
        if($width_new > $width){
            //cut point by height
            $h_point = (($height - $height_new) / 2);
            //copy image
            imagecopyresampled($dst_img, $src_img, 0, 0, 0, $h_point, $max_width, $max_height, $width, $height_new);
        }else{
            //cut point by width
            $w_point = (($width - $width_new) / 2);
            imagecopyresampled($dst_img, $src_img, 0, 0, $w_point, 0, $max_width, $max_height, $width_new, $height);
        }
        $disk = \Illuminate\Support\Facades\Storage::disk('public');
        $save = $disk->path($dst_dir . '/' . $max_width . 'x' . $max_height . '-' . $fileName);
        $image($dst_img, $save, $quality);
        $data = [
            'url' => url('storage/' . $dst_dir . '/' . $max_width . 'x' . $max_height . '-' . $fileName)
        ];
        return $data;
    }
}

if(!function_exists('upload_file')) {
    /**
     * upload file
     * @param $file
     * @param $fileName
     * @param $destinationPath
     * @return array|bool
     */
    function upload_file($file, $fileName, $destinationPath)
    {
        $disk = \Illuminate\Support\Facades\Storage::disk('public');

        if (! $disk->exists($destinationPath)) {
            $disk->makeDirectory($destinationPath, 0755, true);
        }
//        $disk->put($destinationPath . $fileName, file_get_contents($file), 'public');
        $saveFile = $disk->put($destinationPath . $fileName, fopen($file, 'r+'), 'public');

        $mime = str_replace('/', '-', $file->getMimeType());
        $data = false;
        if($saveFile) {
            $data = [
//                'url' => $disk->url($destinationPath . $fileName),
                'name' => $fileName,
                'mime_type' =>$mime,
                'path' => $disk->path($destinationPath . $fileName),
                'endpoint' => $destinationPath . $fileName,
                'url' => url('storage/' . $destinationPath . $fileName)
            ];
        }
        return $data;
    }
}