<?php
    $method = $_REQUEST['method'];
    if (!$method && function_exists(strtolower($method))) {
    	$method();
    	die();
	}
    
//     function test() {
//     	echo 'you are in test';
//     }

    function get_img_src() {
    	$string = ' <p><img src="https://www.shiqi1.com/v1/private/image/245176"/><img src="https://www.shiqi1.com/v1/private/image/245177"/></p><p>大叔大婶</p>';
    	$src_array = [];
    	preg_match_all('%<img.*?src=["\'](.*?)["\'].*?>%i', $string , $src_array);
    	$src_array = $src_array[1];
    	
    	var_dump($src_array);
    }
    
    function encrypt() {
    	$password = 'kefu12015';
    	echo password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
    }
    //encrypt();
    
    $curl = curl_init('https://api.shiqichuban.com/v1/app/version?platform=ios');
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($curl);
        echo $result;
    
//     $t = strtotime('2016-06-29 19:57:31');
//     $t_now = time();
//     echo $t.'</br>';
//     echo $t_now.'</br>';
    
//     $t1 = (int)($t / 86400);
//     $t2 = (int)($t_now / 86400);
//     echo $t1.'</br>';
//     echo $t2.'</br>';
    