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
	<script type="text/javascript" src="/js/project.js"></script>


</head>
<body>

<header class="ui red segment" id="header" >
<div class="container " >
	<div id="header" class="ui  menu">
		<div class="item" style="padding:10px">
			<img class="ui mini image " src="/images/logo.png">
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
<article id="app">
	<div class="ui unstackable segment">
		<div class="ui cards" style="margin:auto">
			
			<item></item>
			<itemtest
				v-for="item in itemAll"
				v-bind:header="item.header"
				v-bind:meta="item.meta"
				v-bind:start="item.start"
				v-bind:factors="item.factors"
				v-bind:checkform="item.checkform"
				v-bind:basis="item.basis"
				v-bind:itemX="item"
			></itemtest>
			
		</div>
	</div>
	<!-- <blog-post
				v-for="post in itemAll"
				v-bind:title="post.header"
				v-bind:meta="post.factors"
			></blog-post> -->
</article>

</main>
</body>

<!-- VUE.js组件区 -->
<script type="text/javascript">
	
	Vue.component('blog-post', {
	  props: ['title','meta'],
	  template: '<div><h3>@{{ title }}+@{{meta}}</h3></div>'
	})

	Vue.component('itemtest', {
	 	props:['itemContent','header','meta','start','factors','checkform','basis','itemX'],
	 	template:`
	 		<div class="ui card" style="width:350px;">
	 			<i class=" red close icon right floated" data-content="删除" style="position:absolute;right:0px;top:5px;"></i>
	 			<i class=" teal cogs icon right floated" data-content="编辑" style="position:absolute;right:18px;top:5px;"></i>
	 			<div class="content">
	 				<div  class="header">@{{header}}</div>
	 				<div  class="meta">@{{meta}}</div>
	 				<div class="ui divider"></div>
	 				<div class="description" >
	 					<p><strong  >@{{start}}</strong></br>
	 					<div style="height:200px;overflow: auto;">
	 						<factor	
								v-for="factor in factors" 
	 							v-bind:factorContent="factor"
	 							 >
	 						</factor>
	 						<p>@{{itemX.meta}}</p>
	 					</div>
	 				</div>

	 			</div>
	 			<div class="extra content">
	 				<div  class="ui two buttons">
	 					<div class="ui basic green button"  data-title="检查方式" :data-content='checkform'>检查方式</div>
	 					<div class="ui basic red button" data-title="检查依据" :data-content='basis'>检查依据</div>
	 				</div>
	 			</div>
	 		</div>
	 		`
	 })	
	Vue.component('item', {
		data: function () {
			return {
				item:{header:"值班工作记录要求",meta:"值班",start:'值班人员应做好值班工作记录，记录内容应至少包括:',factors:['岗位人员值班与交接班情况；','设备维护执行情况；','设备故障、维修情况；','运行环境状况；','应急处置情况；','相关业务和运行信息通告；','岗位间业务协作和协同事项；','存在的风险隐患、遗留问题和安全运行建议；'],checkform:'确实运行单位是否制定适用于其各个运行岗位的通报协调机制；',basis:'民用航空通信导航监视运行保障与维护维修规程 第三条 '}
			}
		},
		props:['itemContent'],
		template:`
			<div class="ui card" style="width:350px;">
				<i class=" red close icon right floated" data-content="删除" style="position:absolute;right:0px;top:5px;"></i>
				<i class=" teal cogs icon right floated" data-content="编辑" style="position:absolute;right:18px;top:5px;"></i>
				<div class="content">
					<div  class="header">@{{item.header}}</div>
					<div  class="meta">@{{item.meta}}</div>
					<div class="ui divider"></div>
					<div class="description" >
						<p><strong  >@{{item.start}}</strong></br>
						<div style="height:200px;overflow: auto;">
							<factor	
								v-for="factor in item.factors" 
								v-bind:factorContent="factor"
								 >
							</factor>
						</div>
					</div>
				</div>
				<div class="extra content">
					<div  class="ui two buttons">
						<div class="ui basic green button"  data-title="检查方式" :data-content='item.checkform'>检查方式</div>
						<div class="ui basic red button" data-title="检查依据" :data-content='item.basis'>检查依据</div>
					</div>
				</div>
			</div>
			`
	})	
	Vue.component('factor',{
		props:['factorContent'],
		data:function(){
			return {
				
			}
		},
		template:`
			<div>
				<div class="ui checkbox"><input type="checkbox" tabindex="0" class="hidden"><label>@{{factorContent}}</label></div>
			</div>
			`
	})

</script>

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
				}
			],
			posts:[
				      { id: 1, title: 'My journey with Vue' },
				      { id: 2, title: 'Blogging with Vue' },
				      { id: 3, title: 'Why Vue is so fun' },
				    ]
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
<script type="text/javascript">
$('.ui.checkbox')
  .checkbox();
$('.ui.green.button')
  .popup({
    on: 'click'
  });
$('.ui.red.button')
  .popup({
    on: 'click'
  });
$('.ui .icon ').popup();
</script>
</html>