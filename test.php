<?php

function getImgSrc($string) {
        //Log::info("input img: $string");
        $src_array = array();
        preg_match_all('%<img.*?src=["\'](.*?)["\'].*?/?>%i', $string, $src_array);
        $src_array = $src_array[1];
        if (count($src_array) != 0) {
            return $src_array;
        }
        return null;
}

	//$content = '{"id":"239486","book_id":"7027","title":"2016\u5e7405\u670813\u65e5\u8bb0\u4e8b","page":"6","content_key":"books\/book_id_7027\/content_id_239486_1464793307","order":"0","article_id":"30027","book_author_id":"7083","length":"556","ctime":"2016-05-13 15:54:29","deleted_at":null,"created_at":"-0001-11-30 00:00:00","updated_at":"2016-06-01 23:01:47","content":"<img src="https:\/\/www.uchuban.com\/v1\/private\/image\/55823\"\/><div><img src="https:\/\/www.uchuban.com\/v1\/private\/image\/55829\"\/>^_^<br\/><\/div><div><br\/><\/div><div>\u3002<img src="https:\/\/www.uchuban.com\/v1\/private\/image\/55825\"\/><\/div><div><br\/><\/div><div><img src=\"https:\/\/www.uchuban.com\/v1\/private\/image\/55826\"\/><br\/><\/div><div><img src=\"https:\/\/www.uchuban.com\/v1\/private\/image\/55824\"\/><br\/><\/div><div><img src=\"https:\/\/www.uchuban.com\/v1\/private\/image\/55827\"\/><br\/><\/div><div><img src=\"https:\/\/www.uchuban.com\/v1\/private\/image\/55828\"\/><br\/><\/div><div><br\/><\/div>"}  ';
	//$content = "<div> <img src=\"https://www.uchuban.com/v1/private/image/55828\"/> </div> <img src=\"https://www.uchuban.com/v1/private/image/55830\"/> ";
	//$content = str_replace('src=\\dd', 'src=', $content);
	//echo $content;
	//var_dump(getImgSrc($content));
	
	function test1($string) {
		 //return substr($string, strlen($string) - 4);
		 //return $string;
		 //return strlen($string);
		 //if (substr($string, strlen($string) - strlen(' 著'))
		 //return substr($string, 0, strlen($string) - strlen(' 著'));
		if( substr($string, strlen($string) - strlen(' 著')) === ' 著' ) {
			return substr($string, 0, strlen($string) - strlen(' 著'));
		} else {
			return $string;
		}
	}
	
	//echo test1('adkaslfan你好 著 哈哈卡死短发dad 著');
	//echo test1('adkaslfan你好 著 哈哈卡死短发著');

    function async_req() {
        echo 'hello world';
        fastcgi_finish_request();

        file_put_contents('d:\\log.txt', '这是客户端响应结束后，服务器段脚本继续执行后生成');
    }

    //async_req();
    
    function utime()
{
  return (float) (sprintf('%d.%06d', gettimeofday(true)));
}

    
    $type = 1;
        switch ($type) {
            // email或者mobile登录
            case 1:
                $result = 1;
                break;
            //微信登录
            case 2:
                $result = 2;
                break;
            default:
                $result = 0;
        }
        
        function test($type) {
            echo $type;
        }
        
        //echo $result;
        //var_dump(is_array(null));
        //test();
        
class MyObject {

    public function __construct() {
        echo "this is a object";
    }
    
    public function myprint($message) {
        echo $message;
    }   
}

$arr[] = '1';
$arr[] = '2';
$arr[] = '3';

echo 'arr'.$arr['0'];

    
    


?>
