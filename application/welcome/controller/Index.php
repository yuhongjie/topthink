<?php
namespace app\welcome\controller;

class Index
{
	//主页
	public function home(){

		return view();
	}
	//关于
	public function about(){
		return view();
	}
	//帮助
	public function help(){
		return view();
	}

    // public function index()
    // {
    //     return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    // }

    // public function hello($name = 'ThinkPHP5')
    // {
    //     return 'hello,' . $name;
    // }
    // public function hello(){
    // 	return 'this is index/index/hello';
    // }
    // public function hello(){
    // 	return view();
    // }
    	// echo preg_replace_callback('~-([a-z][a-z])~',
    	// 					 	    function($match){
    	// 					 	    	echo dump($match);
    	// 					 	    	echo $match[0].$match[1].'\n';
    	// 					 	    	return strtoupper($match[1]);
    	// 					 	    }, 
    	// 					       'hello-world',1);

    // 	$text = "April fools day is 04/01/2002\n";
    // 	$text.= "Last christmas was 12/24/2001\n";
    // 	// 回调函数
    	
    // 	echo preg_replace_callback(
    // 	            "|(\d{2}/\d{2}/)(\d{4})|",
    // 	            function($matches)
			 //    	{
			 //    	  // 通常: $matches[0]是完成的匹配
			 //    	  // $matches[1]是第一个捕获子组的匹配
			 //    	  // 以此类推
			 //    	  return $matches[1].($matches[2]+1);
			 //    	},
    // 	            $text);
    // }
}
