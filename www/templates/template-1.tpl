<!DOCTYPE html>
<html>
<head>
	<title>{$title}</title>
    <link rel="stylesheet" type="text/css" href="/thao.min.css">
    <link rel="stylesheet" type="text/css" href="/thao.css">
    <meta charset= "utf-8">
</head>
<body>
   	
       	
   		
		<div class= "span1" class = "column1-5"><ul class="stylized center pills">
    <li class="active first"><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li class="parent last"><a href="#">Social Networks<i class="sub"></i></a>
        <ul class="submenu">
            <li class="active"><a href="#">Google+</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">LinkedIn</a></li>
        </ul>
    </li>
</ul>
</div>
        <div class = "span2" class = "column1-2" style ="float: left">
            <div class="nav-wrapper">
    <input type="checkbox" id="nav-checkbox" class="nav-checkbox">
    <div class="nav collapse rounded fixed-top">
        <ul class="center stylized pills transparent" id="mainnav">
            <li class="capitalize first"><a href="#">Thao Framework</a></li>
            <li class="capitalize"><a href="#">Get started</a></li>
            <li class="capitalize active"><a href="#">Components</a></li>
        </ul>
        <label for="nav-checkbox" class="nav-handle"></label>
    </div>
</div></div>
		<div class= "span2" class = "column3-5">{$content}</div>
		<div class = "span3" class = "column1-5" >Footer</div>
</body>
</html>