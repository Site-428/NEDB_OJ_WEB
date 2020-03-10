<!DOCTYPE html>
<html class="" lang="zh-CN">
<head prefix="og: http://ogp.me/ns#">
<meta charset="utf-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="object" property="og:type">
<meta content="NEDB.OJ" property="og:site_name">
<meta content="NEDB.OJ API" property="og:title">
<meta content="NEDB.OJ API是NEDB.OJ数据库资源的REST风格的应用程序编程接口。" property="og:description">
<meta content="../assets/images/coderdocs-logo.svg" property="og:image">
<meta content="64" property="og:image:width">
<meta content="64" property="og:image:height">
<meta content="http://home.bmeonline.cn/NEDB/NEDB.OJ/api" property="og:url">
<meta content="summary" property="twitter:card">
<meta content="NEDB.OJ API" property="twitter:title">
<meta content="NEDB.OJ API是NEDB.OJ数据库资源的REST风格的应用程序编程接口。" property="twitter:description">
<meta content="../assets/images/coderdocs-logo.svg" property="twitter:image">

<title>NEDB.OJ API</title>
<meta content="NEDB.OJ API是NEDB.OJ数据库资源的REST风格的应用程序编程接口。" name="description">
<link rel="stylesheet" media="all" href="../assets/application-8f6cf9c719bc716c7999f7d69239a02630242e446af5097f463be0cbf990cd90.css" />
<link rel="stylesheet" media="print" href="../assets/print-c8ff536271f8974b8a9a5f75c0ca25d2b8c1dceb4cff3c01d1603862a0bdcbfc.css" />



<script>
//<![CDATA[
window.gon={};gon.api_version="v4";gon.default_avatar_url="http://share.bmeonline.cn/assets/no_avatar-849f9c04a3a0d0cea2424ae97b27447dc64a7dbfae83c036c45b403392f0e8ba.png";gon.max_file_size=10240;gon.asset_host=null;gon.webpack_public_path="/assets/webpack/";gon.relative_url_root="";gon.shortcuts_path="/help/shortcuts";gon.user_color_scheme="white";gon.gitlab_url="http://share.bmeonline.cn";gon.revision="c02a23a79a";gon.gitlab_logo="../assets/gitlab_logo-7ae504fe4f68fdebb3c2034e36621930cd36ea87924c11ff65dbcb8ed50dca58.png";gon.sprite_icons="../assets/icons-5d6bba47cc3d399a160c22f8283b68e070717b97c9a35c0e3006d998b730b163.svg";gon.sprite_file_icons="../assets/file_icons-7262fc6897e02f1ceaf8de43dc33afa5e4f9a2067f4f68ef77dcc87946575e9e.svg";gon.emoji_sprites_css_path="../assets/emoji_sprites-289eccffb1183c188b630297431be837765d9ff4aed6130cf738586fb307c170.css";gon.test_env=false;gon.suggested_label_colors=["#0033CC","#428BCA","#44AD8E","#A8D695","#5CB85C","#69D100","#004E00","#34495E","#7F8C8D","#A295D6","#5843AD","#8E44AD","#FFECDB","#AD4363","#D10069","#CC0033","#FF0000","#D9534F","#D1D100","#F0AD4E","#AD8D43"];
//]]>
</script>
<script src="../assets/locale/zh_CN/app-4a2a64a1b064b368666b93eb20cc9bba70786ba1fc34f1622d9a1e5cb25a913f.js" defer="defer"></script>

<script src="../assets/webpack/runtime.bb95fb75.bundle.js" defer="defer"></script>
<script src="../assets/webpack/main.a2b813e0.chunk.js" defer="defer"></script>
<script src="../assets/webpack/commons~pages.groups~pages.groups.activity~pages.groups.boards~pages.groups.clusters.destroy~pages.g~ce9b7041.de774478.chunk.js" defer="defer"></script>
<script src="../assets/webpack/commons~pages.groups.milestones.edit~pages.groups.milestones.new~pages.projects.blame.show~pages.pro~bedd5722.f7bee860.chunk.js" defer="defer"></script>
<script src="../assets/webpack/pages.projects.wikis.e4bfbb7c.chunk.js" defer="defer"></script>

<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="f0KBajvTkMtVAukWbCUT2x0bcXVRdfUenEidElzJ3TANJz9AxRS+9Rpx+NiWcw274zFeUCBu1iOdGu9dJzD/0Q==" />
<meta content="origin-when-cross-origin" name="referrer">
<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
<meta content="#474D57" name="theme-color">
<link rel="apple-touch-icon" type="image/x-icon" href="http://share.bmeonline.cn/assets/touch-icon-iphone-5a9cee0e8a51212e70b90c87c12f382c428870c0ff67d1eb034d884b78d2dae7.png" />
<link rel="apple-touch-icon" type="image/x-icon" href="http://share.bmeonline.cn/assets/touch-icon-ipad-a6eec6aeb9da138e507593b464fdac213047e49d3093fc30e90d9a995df83ba3.png" sizes="76x76" />
<link rel="apple-touch-icon" type="image/x-icon" href="http://share.bmeonline.cn/assets/touch-icon-iphone-retina-72e2aadf86513a56e050e7f0f2355deaa19cc17ed97bbe5147847f2748e5a3e3.png" sizes="120x120" />
<link rel="apple-touch-icon" type="image/x-icon" href="http://share.bmeonline.cn/assets/touch-icon-ipad-retina-8ebe416f5313483d9c1bc772b5bbe03ecad52a54eba443e5215a22caed2a16a2.png" sizes="152x152" />
<link color="rgb(226, 67, 41)" href="http://share.bmeonline.cn/assets/logo-d36b5212042cebc89b96df4bf6ac24e43db316143e89926c0db839ff694d2de4.svg" rel="mask-icon">
<meta content="/assets/msapplication-tile-1196ec67452f618d39cdd85e2e3a542f76574c071051ae7effbfde01710eb17d.png" name="msapplication-TileImage">
<meta content="#30353E" name="msapplication-TileColor">



</head>
<body>
<div class="container"><br>
<?php
header("Content-type:text/html;charset=utf-8");
function std($data)
{
	$TAG=["EXAM","CLA","CODE","STAT","GRD","MSC","WSC","SEX","LOC","KNO","SPJ"];
	$IDs=["ID","MAJOR_ID","SCHOOL_ID"];	
	$dim=strtoupper($data[0]);	
	if(in_array($dim,$TAG))
	{
		return " $dim=1";
	}
	if($data[1]=="")
	{
		return "";
	}
	$ind=urldecode($data[1]);
	if(in_array($dim,$IDs))
	{
		return " $dim=$ind";
	}
	if($dim=="BEGIN")
	{
		return " $dim>=date('$ind')";
	}
	if($dim=="END")
	{
		return " $dim<=date('$ind')";
	}
	if($dim=="STU_NUM")
	{
		$max=(int)($ind*1.2);
		$min=(int)($ind*0.8);		
		return " $dim<$max AND $dim>$min";
	}
	$ind=preg_quote($ind);
	$ind=str_replace(" ",".*",$ind);
	return " $dim REGEXP '$ind'";
}
$arr=explode('/',substr($_SERVER["REQUEST_URI"],13));
$db=mysqli_connect('localhost','【用户】','【密码】','NEDB');
$db->query("set names utf8");
$q="";
if(!$db)
{
	die('ERROR'.mysqli_error());
}
for($i=0;$i<count($arr);$i++)
{
	$var=explode(':',$arr[$i]);
	if(std($var)=="")continue;	
	if($q=="")$q="SELECT * FROM OJ WHERE".std($var);
	else $q=$q." AND".std($var);
}
//echo $q;
if($q=="")
{
	echo '<div class="md wiki">
<h1 dir="auto">
<a id="user-content-nedboj-api" class="anchor" href="#nedboj-api" aria-hidden="true"></a>NEDB.OJ API</h1>
<p dir="auto">NEDB.OJ API是NEDB.OJ数据库资源的REST风格的应用程序编程接口。</p>
<h2 dir="auto">
<a id="user-content-url格式" class="anchor" href="#url%E6%A0%BC%E5%BC%8F" aria-hidden="true" rel="nofollow noreferrer noopener" target="_blank"></a>URL格式</h2>
<h3 dir="auto">
<a id="user-content-格式1" class="anchor" href="#%E6%A0%BC%E5%BC%8F1" aria-hidden="true" rel="nofollow noreferrer noopener" target="_blank"></a>格式1</h3>
<pre class="code highlight js-syntax-highlight html white" lang="html" v-pre="true"><code><span id="LC1" class="line" lang="html">http://home.bmeonline.cn/NEDB/NEDB.OJ/api/<span class="nt">&lt;</span><span class="err">类型</span><span class="na">1</span><span class="nt">&gt;</span>:<span class="nt">&lt;</span><span class="err">指标</span><span class="na">1</span><span class="nt">&gt;</span>/<span class="nt">&lt;</span><span class="err">类型</span><span class="na">2</span><span class="nt">&gt;</span>:<span class="nt">&lt;</span><span class="err">指标</span><span class="na">2</span><span class="nt">&gt;</span>/...</span>
<span id="LC2" class="line" lang="html"></span>
<span id="LC3" class="line" lang="html"><span class="nt">&lt;</span><span class="err">类型</span><span class="nt">&gt;</span> = ID | SCHOOL_ID | SCH_NAME | MAJOR_ID | MAJ_NAME | BEGIN | END | </span>
<span id="LC4" class="line" lang="html">        TERM | LAN | STU_NUM | OJ_TYPE | ACQ_URL | ANA_URL | APP_URL </span></code></pre>
<h4 dir="auto">
<a id="user-content-精确匹配" class="anchor" href="#%E7%B2%BE%E7%A1%AE%E5%8C%B9%E9%85%8D" aria-hidden="true" rel="nofollow noreferrer noopener" target="_blank"></a>精确匹配：</h4>
<p dir="auto"><code>ID</code> <code>SCHOOL_ID</code> <code>MAJOR_ID</code></p>
<h4 dir="auto">
<a id="user-content-范围" class="anchor" href="#%E8%8C%83%E5%9B%B4" aria-hidden="true" rel="nofollow noreferrer noopener" target="_blank"></a>范围：</h4>
<p dir="auto"><code>BEGIN(&gt;=)</code> <code>END(&lt;=)</code> <code>STU_NUM(±20%)</code></p>
<h4 dir="auto">
<a id="user-content-正则匹配" class="anchor" href="#%E6%AD%A3%E5%88%99%E5%8C%B9%E9%85%8D" aria-hidden="true" rel="nofollow noreferrer noopener" target="_blank"></a>正则匹配：</h4>
<p dir="auto"><code>SCH_NAME</code> <code>MAJ_NAME</code> <code>TERM</code> <code>LAN</code> <code>OJ_TYPE</code> <code>ACQ_URL</code> <code>ANA_URL</code>  <code>APP_URL</code><br>
注：此类对应指标中空格会被替换为\'.*\'进行正则匹配。</p>
<h2 dir="auto">
<a id="user-content-格式2" class="anchor" href="#%E6%A0%BC%E5%BC%8F2" aria-hidden="true" rel="nofollow noreferrer noopener" target="_blank"></a>格式2</h2>
<pre class="code highlight js-syntax-highlight html white" lang="html" v-pre="true"><code><span id="LC1" class="line" lang="html">http://home.bmeonline.cn/NEDB/NEDB.OJ/api/<span class="nt">&lt;</span><span class="err">标签</span><span class="na">1</span><span class="nt">&gt;</span>/<span class="nt">&lt;</span><span class="err">标签</span><span class="na">2</span><span class="nt">&gt;</span>/...</span>
<span id="LC2" class="line" lang="html"></span>
<span id="LC3" class="line" lang="html"><span class="nt">&lt;</span><span class="err">标签</span><span class="nt">&gt;</span> = EXAM | CLA | CODE | STAT | GRD | MSC | WSC | SEX | LOC | KNO | SPJ</span></code></pre>
<p dir="auto">标签仅支持与逻辑。</p>
<h2 dir="auto">
<a id="user-content-输出" class="anchor" href="#%E8%BE%93%E5%87%BA" aria-hidden="true" rel="nofollow noreferrer noopener" target="_blank"></a>输出</h2>
<p dir="auto">以JSON格式将结果打印于浏览器。</p>
<pre class="code highlight js-syntax-highlight json white" lang="json" v-pre="true"><code><span id="LC1" class="line" lang="json"><span class="p">{</span><span class="s2">"ID"</span><span class="p">:</span><span class="s2">"2"</span><span class="p">,</span><span class="s2">"URL"</span><span class="p">:</span><span class="s2">"http:</span><span class="se">\/\/</span><span class="s2">share.bmeonline.cn</span><span class="se">\/</span><span class="s2">nedb</span><span class="se">\/</span><span class="s2">oj-002"</span><span class="p">,</span><span class="s2">"SCHOOL_ID"</span><span class="p">:</span><span class="s2">"10286"</span><span class="p">,</span><span class="s2">"SCH_NAME"</span><span class="p">:</span><span class="s2">"东南大学"</span><span class="p">,</span><span class="s2">"MAJOR_ID"</span><span class="p">:</span><span class="s2">"082601"</span><span class="p">,</span><span class="s2">"MAJ_NAME"</span><span class="p">:</span><span class="s2">"生物医学工程类"</span><span class="p">,</span><span class="s2">"BEGIN"</span><span class="p">:</span><span class="s2">"2018-03-05"</span><span class="p">,</span><span class="s2">"END"</span><span class="p">:</span><span class="s2">"2018-06-27"</span><span class="p">,</span><span class="s2">"TERM"</span><span class="p">:</span><span class="s2">"1-2"</span><span class="p">,</span><span class="s2">"LAN"</span><span class="p">:</span><span class="s2">"C++"</span><span class="p">,</span><span class="s2">"STU_NUM"</span><span class="p">:</span><span class="s2">"94"</span><span class="p">,</span><span class="s2">"OJ_TYPE"</span><span class="p">:</span><span class="s2">"SPOJ"</span><span class="p">,</span><span class="s2">"ACQ_URL"</span><span class="p">:</span><span class="s2">"http:</span><span class="se">\/\/</span><span class="s2">oj.bmeonline.cn"</span><span class="p">,</span><span class="s2">"ANA_URL"</span><span class="p">:</span><span class="s2">"祝云篪,赵作翰,童澄达,夏小俊.基于在线评测系统的编程实战数据挖掘[J].电气电子教学学报,2020,42(01):94-98+141."</span><span class="p">,</span><span class="s2">"APP_URL"</span><span class="p">:</span><span class="s2">"http:</span><span class="se">\/\/</span><span class="s2">share.bmeonline.cn</span><span class="se">\/</span><span class="s2">admin-and-development</span><span class="se">\/</span><span class="s2">oj-p2s"</span><span class="p">,</span><span class="s2">"LOG"</span><span class="p">:</span><span class="s2">"http:</span><span class="se">\/\/</span><span class="s2">share.bmeonline.cn</span><span class="se">\/</span><span class="s2">nedb</span><span class="se">\/</span><span class="s2">oj-002</span><span class="se">\/</span><span class="s2">raw</span><span class="se">\/</span><span class="s2">master</span><span class="se">\/</span><span class="s2">Log.csv"</span><span class="p">,</span><span class="s2">"USER"</span><span class="p">:</span><span class="s2">"http:</span><span class="se">\/\/</span><span class="s2">share.bmeonline.cn</span><span class="se">\/</span><span class="s2">nedb</span><span class="se">\/</span><span class="s2">oj-002</span><span class="se">\/</span><span class="s2">raw</span><span class="se">\/</span><span class="s2">master</span><span class="se">\/</span><span class="s2">User.csv"</span><span class="p">,</span><span class="s2">"PROBLEM"</span><span class="p">:</span><span class="s2">"http:</span><span class="se">\/\/</span><span class="s2">share.bmeonline.cn</span><span class="se">\/</span><span class="s2">nedb</span><span class="se">\/</span><span class="s2">oj-002</span><span class="se">\/</span><span class="s2">raw</span><span class="se">\/</span><span class="s2">master</span><span class="se">\/</span><span class="s2">Problem.csv"</span><span class="p">,</span><span class="s2">"TEST"</span><span class="p">:</span><span class="s2">"http:</span><span class="se">\/\/</span><span class="s2">share.bmeonline.cn</span><span class="se">\/</span><span class="s2">nedb</span><span class="se">\/</span><span class="s2">oj-002</span><span class="se">\/</span><span class="s2">raw</span><span class="se">\/</span><span class="s2">master</span><span class="se">\/</span><span class="s2">Test.csv"</span><span class="p">,</span><span class="s2">"EXAM"</span><span class="p">:</span><span class="s2">"0"</span><span class="p">,</span><span class="s2">"CLA"</span><span class="p">:</span><span class="s2">"0"</span><span class="p">,</span><span class="s2">"CODE"</span><span class="p">:</span><span class="s2">"0"</span><span class="p">,</span><span class="s2">"STAT"</span><span class="p">:</span><span class="s2">"0"</span><span class="p">,</span><span class="s2">"GRD"</span><span class="p">:</span><span class="s2">"0"</span><span class="p">,</span><span class="s2">"MSC"</span><span class="p">:</span><span class="s2">"1"</span><span class="p">,</span><span class="s2">"WSC"</span><span class="p">:</span><span class="s2">"1"</span><span class="p">,</span><span class="s2">"SEX"</span><span class="p">:</span><span class="s2">"0"</span><span class="p">,</span><span class="s2">"LOC"</span><span class="p">:</span><span class="s2">"0"</span><span class="p">,</span><span class="s2">"KNO"</span><span class="p">:</span><span class="s2">"0"</span><span class="p">,</span><span class="s2">"SPJ"</span><span class="p">:</span><span class="s2">"0"</span><span class="p">}</span></span></code></pre>
</div><br>';
}
$result=mysqli_query($db,$q);
for($i=0;$i<mysqli_num_rows($result);$i++)
{
	$ans=mysqli_fetch_assoc($result);
	$ans[LOG]=$ans[URL]."/raw/master/Log.csv";
	$ans[PROBLEM]=$ans[URL]."/raw/master/Problem.csv";
	$ans[TEST]=$ans[URL]."/raw/master/Test.csv";
	$ans[USER]=$ans[URL]."/raw/master/User.csv";	
	echo json_encode($ans,JSON_UNESCAPED_UNICODE);
}
?>
</div> 
</body>
</html>
