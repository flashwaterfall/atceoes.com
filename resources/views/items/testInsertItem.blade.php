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
	<link rel="stylesheet" type="text/css" href="/CSS/Tech.css">

</head>
<body>
<div id="app">
<bar
	v-bind:login="login"
></bar>
<main class="container" id="main" >
	<div class="ui unstackable segment">
	<form class="ui form" method="POST" action="/insertItem2" >
		{{ csrf_field() }}
		<div class="field">
			<label for="itemType">条目类型</label>
			<input type="text" name="itemType" placeholder="条目类型">
		</div>
		<div class="field">
			<label for="itemModule">检查条目分类</label>
			<input type="text" name="itemModule" placeholder="检查条目分类">
		</div>
		<div class="field">
			<label for="itemEquip">设备分类</label>
			<input type="text" name="itemEquip" placeholder="设备分类">
		</div>
		<div class="field">
			<label for="itemBasis">检查依据</label>
			<input type="text" name="itemBasis" placeholder="检查依据">
		</div>
		<div class="field">
			<label for="itemHeader">检查条目标题</label>
			<input type="text" name="itemHeader" placeholder="检查条目标题">
		</div>
		<div class="field">
			<label for="itemContent">检查内容</label>
			<input type="text" name="itemContent" placeholder="检查内容">
		</div>
		<div class="field">
			<label for="itemRecord">应有的记录</label>
			<input type="text" name="itemRecord" placeholder="应有的记录">
		</div>
		<div class="field">
			<label for="itemCheck">检查方式</label>
			<input type="text" name="itemCheck" placeholder="检查方式">
		</div>
		<div class="field">
			<label for="itemPoint">设定分数</label>
			<input type="text" name="itemPoint" placeholder="设定分数">
		</div>
		<div class="field">
			<label for="itemState">设定条目状态</label>
			<select class="ui fluid search dropdown" name='itemState' >
				<option value>状态</option>
				<option value=0>不可用</option>
				<option value=1>可用</option>
			</select>
		</div>
		<button class="ui button" type="submit">提交</button>
	</form>
	</div>
</main>
</div>
</body>
<!-- Vue组件-->
<script type="text/javascript">
	Vue.component('del-modal',{
		props:[''],
		template:`
			<div class="ui mini modal del">
			    <div class="header">确定删除该检查条目？</div>
				  
				<div class="actions">
				    <div class="ui black deny button">
					  取消
					</div>
					<div class="ui positive right labeled icon button">
					  删除
					  <i class="checkmark icon"></i>
					</div>
				</div>
			</div>
		`
	})
	Vue.component('bar',{
		props:['login'],
		template:`
			<header class="ui red segment" id="header" >
				<div class="container " >
					<div id="header" class="ui  menu">
						<div class="item" style="padding:10px">
							<img class="ui mini image " src="/images/logo.png">
						</div>
						<a  class="item">检查项目</a>
						<a class=" active item">检查条目总库</a>
						<a class="item">规章标准总库</a>
						<div class="right menu">
							<a class="item ">@{{login.name}}</a>
							<a class="item ">退出</a>
						</div>
					</div>
				</div>
			</header>
		`
	})
</script>
<!-- Vue组件-->

<!-- VUE.js区域 -->
<script type="text/javascript">
	const items = new Vue({
		el: '#app',
		data:{
			login:{name:'于泳'},
		},
		methods:{},
	})
</script>
<!-- VUE.js区域 -->

<!-- Sementic UI的JQuery选择区 -->
<script type="text/javascript">
	$('.ui .dropdown').dropdown();
</script>
<!-- Sementic UI的JQuery选择区 -->
</html>