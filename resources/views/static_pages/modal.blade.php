<!DOCTYPE html>
<html>
<head>
 	<title>ATC-EOES</title>
 	<link rel="Shortcut Icon" href="/images/logo.png" /> 
	<meta charset="utf-8">

	<!-- JQuery -->
	<script src="/js/jquery-3.5.1.js"></script>

	<!-- Sementic UI-->
	<link rel="stylesheet" href="/semantic/semantic.min.css">	<!--同一文件夹下必须包含/themes文件夹，因为图标在这里边-->
	<script src="/semantic/semantic.min.js"></script>	<!--semantic.min.js引用必须在jQuery之后-->

	<!-- VUE.JS-->
	<script src="/vue/vue.min.js"></script>

	<!-- axios -->
	<script src="/axios/axios.min.js"></script>

	<!-- sementic UI calendar -->
	<script type="text/javascript" src="/semantic/calendar.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/semantic/calendar.min.css">
	<!-- 独立渲染-->
	<link rel="stylesheet" type="text/css" href="/css/Tech.css">

</head>
<body>
<i class=" red close icon right floated" v-on:click="showmodal" data-content="删除" style="position:absolute;right:0px;top:5px;cursor:pointer;"></i>
	<div class="ui active modal">
		<i class="close icon"></i>
		<div class="header">
			Profile Picture
		</div>
		<div class="image content">
		<div class="ui medium image">
		  <img src="/images/avatar/large/chris.jpg">
		</div>
		<div class="description">
		  <div class="ui header">We've auto-chosen a profile image for you.</div>
		  <p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
		  <p>Is it okay to use this photo?</p>
		</div>
		</div>
		<div class="actions">
		<div class="ui black deny button">
		  Nope
		</div>
		<div class="ui positive right labeled icon button">
		  Yep, that's me
		  <i class="checkmark icon"></i>
		</div>
		</div>
	</div>
</body>

<!-- Sementic UI的JQuery选择区 -->
<script type="text/javascript">

	$('.ui.modal').modal('show');

</script>
</html>