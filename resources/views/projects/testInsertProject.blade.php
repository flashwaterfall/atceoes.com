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

<!--头部 包含导航-->
<header class="ui red segment" id="header" >
<div class="container " >
	<div id="header" class="ui  menu">
		<div class="item" style="padding:10px">
			<img class="ui mini image " src="images/logo.png">
		</div>
		<a class="item">检查项目</a>
		<a class="item">检查条目总库</a>
		<a class="item">规章标准总库</a>
		<div class="right menu">
			<a class="item ">登陆者</a>
			<a class="item ">帮助</a>
		</div>
	</div>
</div>
</header>

<!--主体部分 -->
<main class="container" id="main" >

<!--项目信息部分 -->
<article >
	<div class="ui unstackable segment">
		<form class="ui form" method="POST" action="" >
			{{ csrf_field() }}
			<div class="field">
				<label for="projectName">项目名称</label>
				<input type="text" name="projectName" placeholder="项目名称">
			</div>
			<div class="field">
				<label for="projectLeader">项目负责人</label>
				<input type="text" name="projectLeader" placeholder="项目负责人">
			</div>
			<div class="field">
				<label for="projectAbstract">项目概要</label>
				<textarea type="text" name="projectAbstract" placeholder="项目概要"></textarea>
			</div>
			<div class="field">
				<label for="projectMember">项目团队</label>
				<select class="ui fluid search dropdown" multiple="">
					<option value>选择队员</option>
					<option value="AAA">AAA</option>
					<option value="BBB">BBB</option>
					<option value="CCC">CCC</option>
					<option value="DDD">DDD</option>
					<option value="EEE">EEE</option>
					<option value="FFF">FFF</option>
					<option value="GGG">GGG</option>
					<option value="HHH">HHH</option>
				</select>
			</div>
			<div class="field">
				<label for="projectDepartment">受检单位</label>
				<input type="text" name="projectDepartment" placeholder="填写受检单位">
			</div>
			<div class="field">
				<label for="projectType">检查类型</label>
				<input type="text" name="projectType" placeholder="检查类型">
			</div>
			<div class="field">
				<div class="ui form">
				<div class="two fields">
					<div class="field">
						<label>开始日期</label>
						<div class="ui calendar" id="rangestart">
							<div class="ui input left icon">
								<i class="calendar icon"></i>
								<input type="text" placeholder="Start">
							</div>
						</div>
					</div>
					<div class="field">
						<label>结束日期</label>
						<div class="ui calendar" id="rangeend">
							<div class="ui input left icon">
								<i class="calendar icon"></i>
								<input type="text" placeholder="End">
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>			
			<button class="ui button" type="submit">提交</button>
		</form>
	</div>
</article>
</main>
</body>
<script type="text/javascript">
$('.ui .dropdown').dropdown();
$('#rangestart').calendar({
  type: 'date',
  endCalendar: $('#rangeend')
});
$('#rangeend').calendar({
  type: 'date',
  startCalendar: $('#rangestart')
});
</script>>
</html>