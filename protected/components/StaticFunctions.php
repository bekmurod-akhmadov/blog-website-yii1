<?php




class StaticFunctions
{
    public static function NewsGetCount(){
        return News::model()->count();
    }

    public static function CategoryGetCount(){
        return Category::model()->count();
    }

    public static function MenuGetCount(){
       return Menu::model()->count();
    }

    public static function SocialGetCount(){
        return Social::model()->count();
    }

    public static function saveImage($image , $id , $tablename){
        $dir = "assets/uploads/$tablename/$id/";

        if (!is_dir($dir)){
            mkdir($dir , true , 0777);
        }

        $basename = pathinfo($image->name , PATHINFO_FILENAME);
        $extension = pathinfo($image->name , PATHINFO_EXTENSION);
        $file = "image_" . md5($basename . rand(1 , 100000)) . "." . $extension;
        $image->saveAs($dir . $file);
        return $file;
    }

    public static function deleteImage($image , $id , $tablename){

       $dir = "assets/uploads/$tablename/$id/$image";
       if (is_file($dir)){
           unlink($dir);
           return true;
       }else{
           return false;
       }
    }

    public static function getImage($id , $image , $tablename){
        $dir = "assets/uploads/$tablename/$id/$image";
        if (is_file($dir)){
            return "/assets/uploads/$tablename/$id/$image";
//            return $dir
        }else{
            return  "/assets/uploads/no_image.jpg";
        }
    }

    public static function getOfPartText($text , $limit){

        $length = strlen($text);
        if($length > $limit) {
            $last = strrpos($text,' ',-1*($length - $limit));
            $text = substr($text,0,$last).' ...';
        }
        return $text;
    }

    public static function generateSlug($title) {
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $title), '-'));
        $slug = preg_replace('/-+/', '-', $slug);
        return $slug;
    }


}