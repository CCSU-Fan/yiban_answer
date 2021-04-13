<?php
//本程序是爬取易班知识竞答答案，并保存到本地
//理论上有paperID,就可爬取
function post($url_shuake, $post_shuake, $headers){ 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url_shuake); 
    curl_setopt($ch, CURLOPT_HEADER, 0); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, true); // 从证书中检查SSL加密算法是否存在
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_POST, 1);//post方式提交 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_shuake);//要提交的信息 
    $rs = curl_exec($ch);
    curl_close($ch); 
    return $rs; 
} 
//Cookie 自行填入COOKIE
$Cookie="";
$answer_file=dirname(__FILE__) . "/answer.json";
$headers = array(
    "Host: www.yiban.cn",
    "Origin: http://www.yiban.cn",
    "X-Requested-With: XMLHttpRequest",
    "User-Agent: Mozilla/5.0 (Linux; Android 5.1.1; VOG-AL10 Build/HUAWEIVOG-AL10; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/74.0.3729.136 Mobile Safari/537.36 yiban_android",
    "Content-Type: application/x-www-form-urlencoded",
    "Referer: http://www.yiban.cn/t/student/showsj",
    "Cookie: $Cookie",
);
$array=array();
//因为只有60道题，6个page就可以了。
for ($i = 1; $i < 7; $i++) {
    //id是在考试页面showsj 试卷paperID
    $post="id=22965998&page=$i";
    $showMobileKSAjax = post("http://www.yiban.cn/t/student/showMobileKSAjax ", $post , $headers);
    $json_MobileKSAjax = json_decode($showMobileKSAjax, true);
    $coursename=$json_MobileKSAjax['data']['coursename'];
    $courseid=$json_MobileKSAjax['data']['courseid'];
    $notice=$json_MobileKSAjax['data']['notice'];
    
    $shitilist=$json_MobileKSAjax['data']['shitilist'];
    
    $array=array_merge( (array)$array ,(array)$shitilist);
    
    
}


file_put_contents($answer_file, '');//创建
$fp = fopen("$answer_file","w");  //写入
fwrite($fp, json_encode($array, JSON_UNESCAPED_UNICODE)); 
fclose($fp);


exit(json_encode($array, JSON_UNESCAPED_UNICODE));



