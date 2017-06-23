<?php 
    header("Content-type: text/html; charset=utf-8");
    if($_POST){
        $news_id=array();
        //$_POST是一个数组，每一条示例{"author":"root","title":"\u4e16\u754c\uff0c\u60a8\u597d\uff01","content":"\u6b22\u8fce\u4f7f\u7528WordPress\u3002\u8fd9\u662f\u60a8\u7684\u7b2c\u4e00\u7bc7\u6587\u7ae0\u3002\u7f16\u8f91\u6216\u5220\u9664\u5b83\uff0c\u7136\u540e\u5f00\u59cb\u5199\u4f5c\u5427\uff01","thumb":"http:\/\/192.168.152.1\/wordpress\/wp-content\/plugins\/cloudox_news\/upload\/0.jpg"}
        //
        foreach ($_POST as $key => $value) {
            if ($key=='action') {
                if ($value=='media_preview') {$action='media_preview';}
                if ($value=='sendall') {$action='sendall';}
                if ($value=='sendall') {$action='sendall';}
            }
            if ($key==$_POST['first']) {
                if (count($news_id)>0) {
                    $news_id[]=$news_id[0];
                }
                $news_id[0]=$key;
            }else{
                if ($key!='first'&&$key!='action'&&is_int($key)) {$news_id[]=$key;}            
            }
            
        }
        $news_id=implode(",", $news_id);
        //var_dump($news_id);echo "<hr>";var_dump($_POST);echo "<hr>";var_dump($action);
    }else{
        echo "没有post数据";    exit;
    }

sendToCocc($news_id,$action);
// header('Location: '.$_SERVER['HTTP_REFERER']);   


    function sendToCocc($news_id,$action){

    
        $con = mysqli_connect("localhost","root","root");
        if (!$con)
          {
          die('Could not connect: ' . mysqli_error());
          }

        //设置编码，防止中文乱码
        mysqli_query($con,"set names utf-8");

        mysqli_select_db($con,'wordpress');

        $time=time();

          $sql='SELECT * FROM wp_posts WHERE (post_status="publish" AND post_type="post");';

          $sqlsend='SELECT users.display_name AS author,posts.post_title AS title,posts.post_content AS content,posts.post_thumb AS thumb FROM wp_posts AS posts,wp_users AS users WHERE (posts.ID in ('.$news_id.') AND posts.post_author=users.ID);';


        // echo "<hr>".$sql."<hr>";
        // echo "<hr>".$sqlsend."<hr>";
        if ($result=mysqli_query($con,$sqlsend))
          {
          echo "Database ok<hr>";
          }
        else
          {
          echo "Error creating(insert) database: " . mysqli_error($con);
          }
          //var_dump($result);echo "<hr>";
          $array=array();

        while ($row=mysqli_fetch_assoc($result)) {

        	$row['thumb']=test9($row['thumb']);

        	$row['content']=test8($row['content']);
          $array[]=json_encode($row);
        }
        $con->close();

        //$action有$_POST['action']确定
        //$action='media_preview';
        $data=$array;
        $url='http://localhost/wxx/index.php/Home/Index/'.$action;

    ///////发送请求/////////////////////
        var_dump(lm_curl_post($data,$url));
        //$result=lm_curl_post($data,$url);
        
    ///////发送请求/////////////////////

    }

//////////////////////////////
    function lm_curl_post($data,$url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $tmpInfo = curl_exec($ch);
        if (curl_errno($ch)) {
          return curl_error($ch);
        }
        curl_close($ch);
        return $tmpInfo;
    }




    function test9($thumb)//如没有缩略图，用文章中第一张做缩略图
    {
/*        $pattern='/(<img)(.*?)(src=")(.*?)(localhost)(.*?)"/m';
        $matches=preg_match_all($pattern, $content,$pert_arr);//$pert_arr[4]
        if (isset($pert_arr[4][0])) {
            $thumb=$pert_arr[4][0].$pert_arr[5][0].$pert_arr[6][0];
        }else{
            $thumb='http://192.168.152.1/wordpress/wp-content/uploads/2017/05/KWLQOQZ53IMM_WHDZ2P4H9-150x150.png';
        }
*/   
        if ($thumb) {
            $web='192.168.152.1';//limingliming.xyz
            $thumb=str_replace('localhost',$web,$thumb);
            return $thumb;
        }else{
            $thumb='http://192.168.152.1/wordpress/wp-content/uploads/2017/05/KWLQOQZ53IMM_WHDZ2P4H9-150x150.png';
        }     
        

    }
    

    function test8($content)//自动上传处理图文中的图片test7和test27调用，临时、永久图文消息中图片获取URL，接口一样
    {
    
        $content=$content;
        $web='192.168.152.1';//limingliming.xyz
        $pattern='/(<img)(.*?)(src=")(.*?)(localhost)(.*?)"/m';
        $matches=preg_match_all($pattern, $content,$pert_arr);//$pert_arr[4]也是个数组,指正则匹配到所有的目标中，每个目标的第四个括号(.*?)部分。

        //正则匹配图文消息中的图片src，得到一个src数组，foreach(上传图文消息中的图片得到url,再正则匹配图文消息中的图片src一次，用URL替换）

        foreach ($pert_arr[5] as $key => $value) {
            $content=str_replace($value,$web,$content);
        }

        return $content;

    }





