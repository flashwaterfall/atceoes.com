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
<body >
<div id="app">
	<!-- 头部导航条 -->
	<bar
		v-bind:login="login"
	></bar>

	<!--主体部分 -->
	<main class="container" id="main" >
		<!--项目信息部分 -->
		<div class="ui unstackable segment">
			<div class="ui cards" style="margin:auto">
				<item
					v-for="item in itemAll"
					v-bind:item="item"
				></item>
			</div>
		</div>
		<!-- 项目信息部分 -->
	</main>
	<!--主体部分 -->

	<!-- Modal区域 -->
	<edit-modal></edit-modal>
	<del-modal></del-modal>
	<!-- Modal区域 -->

</div>
</body>

<!-- VUE.js组件区 -->
<script type="text/javascript" src="/components/component.js"></script>

<!-- VUE.js区域 -->
<script type="text/javascript">
	const items = new Vue({
		el: '#app',
		data:{
			itemAll:[
				{
					header:"值班工作记录要求",
					meta:"值班",
					start:'值班人员应做好值班工作记录，记录内容应至少包括:',
					factors:['岗位人员值班与交接班情况；','设备维护执行情况；','设备故障、维修情况；','运行环境状况；','应急处置情况；','相关业务和运行信息通告；','岗位间业务协作和协同事项；','存在的风险隐患、遗留问题和安全运行建议；'],
					checkform:'确实运行单位是否制定适用于其各个运行岗位的通报协调机制；',basis:'民用航空通信导航监视运行保障与维护维修规程 第三条 '
				},
				{
					header:"导航设备部署要求",
					meta:"导航",
					start:'值班人员应做好值班工作记录，记录内容应至少包括:',
					factors:['岗位人员值班与交接班情况；','设备维护执行情况；','设备故障、维修情况；','运行环境状况；','应急处置情况；','相关业务和运行信息通告；','岗位间业务协作和协同事项；','存在的风险隐患、遗留问题和安全运行建议；'],
					checkform:'确实运行单位是否制定适用于其各个运行岗位的通报协调机制；',basis:'民用航空通信导航监视运行保障与维护维修规程 第三条 '
				},
				{
					header:"导航设备部署要求",
					meta:"导航",
					start:'值班人员应做好值班工作记录，记录内容应至少包括:',
					factors:['岗位人员值班与交接班情况；','设备维护执行情况；','设备故障、维修情况；','运行环境状况；','应急处置情况；','相关业务和运行信息通告；','岗位间业务协作和协同事项；','存在的风险隐患、遗留问题和安全运行建议；'],
					checkform:'确实运行单位是否制定适用于其各个运行岗位的通报协调机制；',basis:'民用航空通信导航监视运行保障与维护维修规程 第三条 '
				},
				{
					header:"导航设备部署要求",
					meta:"导航",
					start:'值班人员应做好值班工作记录，记录内容应至少包括:',
					factors:['岗位人员值班与交接班情况；','设备维护执行情况；','设备故障、维修情况；','运行环境状况；','应急处置情况；','相关业务和运行信息通告；','岗位间业务协作和协同事项；','存在的风险隐患、遗留问题和安全运行建议；'],
					checkform:'确实运行单位是否制定适用于其各个运行岗位的通报协调机制；',basis:'民用航空通信导航监视运行保障与维护维修规程 第三条 '
				}

			],
			login:{name:'检查员'},
		},
		methods:{},
		beforeCreate:function(){
			console.log('beforecreate');
		},
		created:function(){
			console.log('created');
		//this.submit();
		},
		beforeMount:function(){
			console.log('beforeMount');
		},
		mounted:function(){
			console.log('mounted');
		//this.submit();
		},
		beforeUpdate:function(){
			console.log('beforeUpdate');
		},
		updated:function(){
			console.log('update');
		},
	})
</script>

<!-- Sementic UI的JQuery选择区 -->

</html>