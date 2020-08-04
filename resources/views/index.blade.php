<!DOCTYPE html>
<html>
<head>
 	<title>ATC-EOES</title>
 	<link rel="Shortcut Icon" href="/images/logo.png" /> 
	<meta charset="utf-8">

	@include('layouts._quote')
	
<style type="text/css">
#back{
	
	-webkit-transition: background 1s ;
}
.inspector{
	background-color: #D1E9E9;
}
.proleader{
	background-color: #E6E6F2;
}
</style>
</head>

<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel1").slideToggle("slow");
    $("#panel2").slideToggle("slow"); 
    $("#back").toggleClass("proleader");
    //$("#back").css("background-color","#E6E6F2");
   });
});
function aa(){
	document.getElementById("back").style.background = "#E6E6F2";
}
</script>
<body>

<div id='index' style='height: 100%;width: 100%'>
<div id='back' class='inspector' v-bind:style="" style='position:relative;height: 100%;width: 100%'>
	<div id='flip' class="ui button"  style='position: absolute;'>切换</div>
	<div class='ui container' style='width:400px;height:400px;overflow:auto;position:absolute;margin:auto;top:0;left: 0;bottom: 0;right: 0'>
		
		<div id='panel1' class="ui active tab segment" style="margin: 0">
		<form  method="" class="ui form">
			<div class="field">
				<div class="ui left icon input" placeholder="E-mail address">
					<input  placeholder="检查员姓名" ></input>
					<i class="user icon"></i>
				</div>
			</div>
			<div class="field">
				<div class="ui left icon input" placeholder="Password">
					<input  type="password" placeholder="请输入密码"></input>
					<i class="lock icon"></i>
				</div>
			</div>
			<a class="ui teal fluid large button">登录</a>
		</form>
		</div>

		<div id='panel2' class="ui tab segment" style="margin: 0">
		<form  method="" class="ui form">
			<div class="field">
				<div class="ui left icon input" placeholder="E-mail address">
					<input  placeholder="项目负责人姓名" ></input>
					<i class="user icon"></i>
				</div>
			</div>
			<div class="field">
				<div class="ui left icon input" placeholder="Password">
					<input  type="password" placeholder="请输入密码"></input>
					<i class="lock icon"></i>
				</div>
			</div>
			<a class="ui fluid large button" style="background-color: #7373B9;color: white" >登录</a>
		</form>
		</div>
	</div>
</div>
</div>
</body>
<!-- Vue 组件 -->
<script type="text/javascript">
	Vue.component('change',{
		template:`

		`
	})

</script>


<!-- Vue.js -->
<script type="text/javascript">
	const index = new Vue({
		el: '#index',
		data:{

		},
		methods:{

		}
	})

</script>

<!-- Sementic UI的JQuery选择区 -->
<script type="text/javascript">
	$('.ui.checkbox').checkbox();
	$('.ui.green.button').popup(
		{on:'click'});
	$('.ui.red.button').popup(
		{on: 'click'});
	$('.ui .icon ').popup();
</script>

</html>