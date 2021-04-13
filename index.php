 <?php
 
$answer_file=dirname(__FILE__) . "/answer.json";
$json=file_get_contents($answer_file);
$json_answer = json_decode($json, true);

?>
<html lang="zh-cn" class="overflow-hidden">
<head>
    <meta charset="utf-8">
	<title>易班题库</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="yibanmobile" content='{"isshare": 0}'>
<meta content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" name="viewport">
<meta content="" name="description">
<meta name="MobileOptimized" content="320">
<link rel="stylesheet" href="common.min.css">
<link rel="stylesheet" href="style.min.css"></head>
<body class="bg-light overflow-hidden">
    <input type="hidden" name="showAnswers" id="showAnswers" value="1">
    <input type="hidden" name="getFinishNum" id="getFinishNum" value="0">
    <form action="/t/student/submitsj" method="POST" id="cesj" name="cesj">
    <div class="p-top padding-0">
        <section id="pTool" class="p-tool">
            <a class="tool-hand" href="#"><i class="iconfont icon-handpaper"></i><b>交卷</b></a>
            <span class="tool-left"><i class="iconfont icon-subject"></i><b><em id="currentNumber">1</em>/<span>60</span></b></span>
            <span class="tool-time"><i class="iconfont icon-clock"></i><b id="timer" data-answertime="90">00:00</b></span>
        </section>
        <a id="testBack" href="#"><i class="iconfont icon-arrow-l"></i></a>
    </div>
    <div id="questions" class="question-wrap swiper swiper-ks" data-id="22965998" data-shitishu="60" data-pagesize="60" data-courseid="18292" data-coursename="反电信诈骗知识测试">
        <div class="item-wrap">
             
             <?php
 foreach ($json_answer as $k => $value) {
    $num=$k+1;
    $type=$value['type'];//3-判断题 4-选择题，可能单选，可能多选
    
    $answer=$value['answer'];
    $title=$value['title'];
    $options=$value['options'];
    if( $type == 3){
        $question_list='';
        if($answer == 1){
            $answer="<h3>正确答案：对</h3>";
        }
        if($answer == 2){
            $answer="<h3>正确答案：错</h3>";
        }
        $leixin="判断";
        $question_list='<li><div><i><i></i></i><input type="radio"  value="1"><span>A.对</span></div></li>
                <li><div><i><i></i></i><input type="radio"  value="2"><span>B.错</span></div></li>';
                
    }else{
        $question_list='';
        $leixin="不定项";
        
        $list_answer = explode(",",$answer);
        $arr='';
        $arr_list='';
        for ($i = 0; $i < count($list_answer) ; $i++) {
            
             $arr =$list_answer[$i];
             if($arr == 1){
                 $ans='A';
             }
             if($arr == 2){
                 $ans='B';
             }
             if($arr == 3){
                 $ans='C';
             }
             if($arr == 4){
                 $ans='D';
             }
             if($arr == 5){
                 $ans='E';
             }
             $arr_list=$arr_list.",".$ans;
        }
        
        $answer="<h3>正确答案:$arr_list</h3>";
        $option_item='';
        foreach ($options as $k2 => $v2) {
            
            if($k2 == 0){
                $option_item="A";
            }elseif($k2 == 1){
                $option_item="B";
            }
            elseif($k2 == 2){
                $option_item="C";
            }
            elseif($k2 == 3){
                $option_item="D";
            }
            elseif($k2 == 4){
                $option_item="E";
            }
             $question_list=$question_list.'<li><div><i><i></i></i><input type="radio"  value="1"><span>'.$option_item.".".$v2.'</span></div></li>';
        }
        

    }
    echo     ' <div data-id="" data-num="'.$num.'" class="item single">
                <div class="item-in">
                    <h2 class="question-tit"><i>'.$leixin.'</i><span>'.$title.'</span></h2>
                    <ul class="question-list">
                        '.$question_list.$answer.'
                    </ul>
                    <span class="bg"></span>
                </div>
            </div>';
     
 }
            
             ?>
                                    <!-- 判断 -->

            <!-- 判断END -->
                                    <!-- 判断 -->

            <!-- 判断END -->
                                    <!-- 判断 -->
   
            <!-- 判断END -->
                                    <!-- 判断 -->

            <!-- 判断END -->
                                    <!-- 判断 -->

            <!-- 判断END -->
                                    <!-- 判断 -->

            <!-- 判断END -->
                                    <!-- 判断 -->

            <!-- 判断END -->
                                    <!-- 判断 -->

            <!-- 判断END -->
                    </div>
        <input type="hidden" name="courseid" id="courseid" value="18292">
        <input type="hidden" name="usetime" id="usetime" />
            </div>
    </form>
    <section id="answer" class="answer close">
        <div class="answer-top">
            <i class="iconfont icon-arrow-u-fat"></i>
        </div>
        <div id="answerScroll" class="answer-main" data-questions-num="60">
            <div class="answer-list">
                <div class="answer-item">
                                                            <a href="javascript:;">1</a>
                                        <a href="javascript:;">2</a>
                                        <a href="javascript:;">3</a>
                                        <a href="javascript:;">4</a>
                                        <a href="javascript:;">5</a>
                                        <a href="javascript:;">6</a>
                                        <a href="javascript:;">7</a>
                                        <a href="javascript:;">8</a>
                                        <a href="javascript:;">9</a>
                                        <a href="javascript:;">10</a>
                                        <a href="javascript:;">11</a>
                                        <a href="javascript:;">12</a>
                                        <a href="javascript:;">13</a>
                                        <a href="javascript:;">14</a>
                                        <a href="javascript:;">15</a>
                                        <a href="javascript:;">16</a>
                                        <a href="javascript:;">17</a>
                                        <a href="javascript:;">18</a>
                                        <a href="javascript:;">19</a>
                                        <a href="javascript:;">20</a>
                                        <a href="javascript:;">21</a>
                                        <a href="javascript:;">22</a>
                                        <a href="javascript:;">23</a>
                                        <a href="javascript:;">24</a>
                                        <a href="javascript:;">25</a>
                                        <a href="javascript:;">26</a>
                                        <a href="javascript:;">27</a>
                                        <a href="javascript:;">28</a>
                                        <a href="javascript:;">29</a>
                                        <a href="javascript:;">30</a>
                                        <a href="javascript:;">31</a>
                                        <a href="javascript:;">32</a>
                                        <a href="javascript:;">33</a>
                                        <a href="javascript:;">34</a>
                                        <a href="javascript:;">35</a>
                                        <a href="javascript:;">36</a>
                                        <a href="javascript:;">37</a>
                                        <a href="javascript:;">38</a>
                                        <a href="javascript:;">39</a>
                                        <a href="javascript:;">40</a>
                                        <a href="javascript:;">41</a>
                                        <a href="javascript:;">42</a>
                                        <a href="javascript:;">43</a>
                                        <a href="javascript:;">44</a>
                                        <a href="javascript:;">45</a>
                                        <a href="javascript:;">46</a>
                                        <a href="javascript:;">47</a>
                                        <a href="javascript:;">48</a>
                                        <a href="javascript:;">49</a>
                                        <a href="javascript:;">50</a>
                                        <a href="javascript:;">51</a>
                                        <a href="javascript:;">52</a>
                                        <a href="javascript:;">53</a>
                                        <a href="javascript:;">54</a>
                                        <a href="javascript:;">55</a>
                                        <a href="javascript:;">56</a>
                                        <a href="javascript:;">57</a>
                                        <a href="javascript:;">58</a>
                                        <a href="javascript:;">59</a>
                                        <a href="javascript:;">60</a>
                                                        </div>
            </div>
        </div>
    </section>
    
    <div class="mask"></div>
    <div id="successModal" class="modal modal-success">
        <!-- <a href="#" data-modal-close class="modal-close"></a> -->
        <div class="modal-main">
            <h3 class="modal-tit">反电信诈骗知识测试</h3>
            <div class="modal-con">
                <ul class="result-list clearfix">
                    <li class="special"><b>分数</b><strong class="result-score"></strong></li>
                    <li class="special"><b>用时</b><strong class="result-usertime"></strong></li>
                    <li class="testtime"><i class="iconfont icon-clock"></i><b>考试时间</b><strong>90分钟</strong></li>
                    <!-- <li class="noborderbottom"><i class="iconfont icon-total"></i><b>总分数</b><strong>100分</strong></li> -->
                    <li class="noborderbottom"><i class="iconfont icon-questions"></i><b>试题总数</b><strong>60题</strong></li>
                    <li class="noborderbottom"><i class="iconfont icon-passline"></i><b>合格分数</b><strong class="result-passscore"></strong></li>
                </ul>
                                <div class="btn-wrap" style="word-break: break-all; line-height: 150%">
                    <form action="/t/student/showsj" method="POST" >
                        <input type="hidden" name="tikuname" value="反电信诈骗知识测试">
                        <input type="hidden" name="courseid" value="18292">
                        <input type="hidden" id="key" name="key" value="1618284818">
                        <input type="hidden" name="classid" value="">
                        <input type="hidden"  name="coursename" value="反电信诈骗知识测试">
                        <button id="examAgain" class="btn btn-block btn-lg btn-blue btn-examagain" type="button">重新考试</button>
                    </form>
                </div>
                                <span class="result-mark"></span>
            </div>
        </div>
    </div>
    <div id="failModal" class="modal modal-fail">
        <!-- <a href="#" data-modal-close class="modal-close"></a> -->
        <div class="modal-main">
            <h3 class="modal-tit">反电信诈骗知识测试</h3>
            <div class="modal-con">
                <ul class="result-list clearfix">
                    <li class="special"><b>分数</b><strong class="result-score"></strong></li>
                    <li class="special"><b>用时</b><strong class="result-usertime"></strong></li>
                    <li class="testtime"><i class="iconfont icon-clock"></i><b>考试时间</b><strong>90分钟</strong></li>
                    <!-- <li class="noborderbottom"><i class="iconfont icon-total"></i><b>总分数</b><strong>10  


                       0分</strong></li> -->
                    <li ><i class="iconfont icon-questions"></i><b>试题总数</b><strong>60题</strong></li>
                    <li ><i class="iconfont icon-passline"></i><b>合格分数</b><strong class="result-passscore"></strong></li>
                </ul>
                                <div class="btn-wrap" style="word-break: break-all; line-height: 150%">
                    <form action="/t/student/showsj" method="POST" >
                        <input type="hidden" name="tikuname" value="反电信诈骗知识测试">
                        <input type="hidden" name="courseid" value="18292">
                        <input type="hidden" id="key" name="key" value="1618284818">
                        <input type="hidden" name="classid" value="">
                        <input type="hidden"  name="coursename" value="反电信诈骗知识测试">
                        <button id="examAgain" class="btn btn-block btn-lg btn-blue btn-examagain" type="button">重新考试</button>
                    </form>
                </div>
                                <span class="result-mark"></span>
            </div>
        </div>
    </div>

    <script src="http://www.yiban.cn/t/public/mobile/js/lib/lib.min.js"></script>
<!-- <script src="/t/public/mobile/js/lib/zepto.js"></script>
<script src="/t/public/mobile/js/lib/iscroll.js"></script>
<script src="/t/public/mobile/js/lib/swiper.js"></script>
<script src="/t/public/mobile/js/lib/fastclick.js"></script> -->
<script src="http://www.yiban.cn/t/public/mobile/js/common.min.js"></script>    <script src="http://www.yiban.cn/t/public/mobile/js/subject.min.js"></script>
</body>
</html>
