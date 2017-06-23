<?php 
header("Content-type: text/html; charset=utf-8");

define('THUMB_BASE_URL', $_POST['thumb_base_url']);

test();
sleep(1);
header('Location: '.$_SERVER['HTTP_REFERER']);


function test()
{
    $con = mysqli_connect("localhost","root","root");
    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      }

    //设置编码，防止中文乱码
    mysqli_query($con,"set names utf-8");

    mysqli_select_db($con,'wordpress');


    foreach ($_FILES as $key => $value) {
        if ($value['name']) {
            echo "文章ID：".$key."<br>";
            $result=lm_upload_img($value);
            if ($result) {
                echo $result[0]."<br>";
                $info=lm_insert_thumb($con,$key,$result[0]);
            }
            echo "<hr>";
        }
    }
}





function lm_insert_thumb($con,$post_id,$url){
    $sql='UPDATE wp_posts SET post_thumb="'.$url.'" WHERE ID='.$post_id.';';
    //echo $sql;
    if ($result=mysqli_query($con,$sql))
      {
      //echo "insert ok<hr>";
      echo "上传成功<hr>";
      }
    else
      {
      echo "Error creating(insert): " . mysqli_error($con);
      }
      return $result;
}



    function lm_upload_img($value='')
    {
        // 允许上传的图片后缀
        $allowedExts = array("jpg");
        $temp = explode(".", $value["name"]);
        $extension = end($temp);     // 获取文件后缀名
        if ((($value["type"] == "image/gif")
        || ($value["type"] == "image/jpeg")
        || ($value["type"] == "image/jpg"))
        && 
        ($value["size"] < (1024*60))   // 小于 60K
        && in_array($extension, $allowedExts))
        {
            if ($value["error"] > 0)
            {
                echo "错误：: " . $value["error"] . "<br>";
            }
            else
            {
                // echo "上传文件名: " . $value["name"] . "<br>";
                // echo "文件类型: " . $value["type"] . "<br>";
                // echo "文件大小: " . ($value["size"] / 1024) . " kB<br>";
                //echo "文件临时存储的位置: " . $value["tmp_name"] . "<br>";
                // 判断当期目录下的 upload 目录是否存在该文件
                // 如果没有 upload 目录，你需要创建它，upload 目录权限为 777
                if (file_exists("upload/" . $value["name"]))
                {
                 echo "文件大小: " . ($value["size"] / 1024) . " kB<br>";
                    $filesize=filesize("upload/" . $value["name"]);
                    if ($filesize>(60*1024)) {
                        echo $value["name"] . " 文件已经存在---- 插件地址\upload\\" . $value["name"]."请重新命名图片<br>";
                        echo "文件过大，文件大小".$filesize;
                        return false;
                    }else{
                        echo $value["name"] . " 文件已经存在---- 插件地址\upload\\" . $value["name"].",已用已存在的图片作为缩略图，或更换图片名称重新上传";
                        $path=THUMB_BASE_URL."upload/" . $value["name"];
                        return array($path,$value["name"]);
                    }
                    
                }
                else
                {
                    // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
                    move_uploaded_file($value["tmp_name"], "upload/" . $value["name"]);
                    echo "文件存储在: " .THUMB_BASE_URL."upload/" . $value["name"];
                    $path=THUMB_BASE_URL."upload/" . $value["name"];
                    return array($path,$value["name"]);
                }
            }
        }
        else
        {
            echo "上传文件名: " . $value["name"] . "<br>";
            echo "文件类型: " . $value["type"] . "<br>";
            echo "文件大小: " . ($value["size"] / 1024) . " kB<br>";
            echo $value["name"]."非法的文件格式,jpg格式 小于60K";return false;

        }
        
    }


















