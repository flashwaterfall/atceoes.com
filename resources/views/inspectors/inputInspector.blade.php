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
	<!-- 头部导航条 -->
	<bar
		v-bind:login="login"
	></bar>

	
	
</div>
</body>

<!-- VUE.js组件区 -->
<script type="text/javascript" src="/components/component.js"></script>

<!-- VUE.js区域 -->
<script type="text/javascript">
	const inputInspector = new Vue({
		el:'#app',
		data:{
			login:{name:'检查员'},
		}
	})
</script>
</html>