<!DOCTYPE html>
<html>
<head>
 	<title>ATC-EOES</title>
 	<link rel="Shortcut Icon" href="/images/logo.png" /> 
	<meta charset="utf-8">

	<!-- 基础引用合集 -->
	@include('layouts._quote')		

	<!-- 独立渲染-->
	<link rel="stylesheet" type="text/css" href="/css/Tech.css">
	
	<!-- 独立引用-->

</head>
<body>
<div id='app'>
	<!--头部 包含导航-->
	<bar
		v-bind:login="login"
	></bar>

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
</div>
</body>
<!-- VUE.js组件区 -->
<script type="text/javascript" src="/components/component.js"></script>

<!-- VUE.js区域 -->
<script type="text/javascript">
	const inputProject = new Vue({
		el: '#app',
		data:{
			login:{name:'检查员'},
		},
		methods:{},
	})
</script>

<!-- semantic 选择区 -->
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
</script>

</html>