<?php

/**
 * Static test suite.
 */
class testWechatImport extends PHPUnit_Framework_TestSuite {


    public function __construct() {
        $this->setName( 'testWechatImport' );
    
    }

    public static function suite() {
        return new self();
    }
    
    public static function testCurl() {
        $curl = curl_init('https://api.shiqichuban.com/v1/app/version?platform=ios');
        curl_setopt($curl, CURLOPT_FAILONERROR, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($curl);
        echo $result;
        
    }

}

