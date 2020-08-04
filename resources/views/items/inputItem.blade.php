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
<div id="app">

<!-- 导航区域 -->
	<bar
		v-bind:login="login"
	></bar>

<main class="container" id="main" >
	<div class="ui unstackable segment">
	<form class="ui form" method="POST" action="/item/insert2" >
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

<!-- VUE.js组件区 -->
<script type="text/javascript" src="/components/component.js"></script>

<!-- VUE.js区域 -->
<script type="text/javascript">
	const inputItem = new Vue({
		el: '#app',
		data:{
			login:{name:'检查员'},
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