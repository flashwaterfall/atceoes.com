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
	<div class="ui unstackable  segment">
		<div class="ui left very close rail" >
			<div class="ui segment">
				<p>进行中项目</p>
				<p>未开始项目</p>
				<p>已完成项目</p>
				<p>已过期项目</p>
				
			</div>
		</div>
		<div  class="ui divided items "  style="margin:0">
			<a  v-on:click="submit" class="ui button">新增项目</a>
			<project-test
				v-for="(content,index) in projects"
				v-bind:content="content"
				v-bind:tasks="tasks"
				v-bind:index="index"
				v-bind:steps="steps"
				v-on:submit="submit"
			></project-test>
		</div>
	</div>
</main>
</div>


<!-- VUE.js组件区 -->
<script type="text/javascript" src="/components/component.js"></script>

<script>
Vue.component('project-test', {
  props:['content','tasks','index','steps'],
  template: `<div class="ui segment item" >
				<i class="red large trash alternate outline icon " data-content="删除" style="position:absolute;right:-5px;top:5px;"></i>
				<div class="image" style="text-align:center"><img  title="点击新增图片" v-bind:src="content.imgSrc"></div>
				
				<div class="content" style="padding-left:10px">
					<p class="header" style="padding-left:5px;padding-bottom:2px">
						@{{content.header}}
						<i class=" blue edit icon " data-content="修改项目信息" style="padding-top:2px"></i>
					</p>
					
					<div class="meta">
						<span class="cinema">@{{content.meta}}</span>
					</div>
					<divider style="margin-top:8px;margin-bottom:0px;margin-left:5px;margin-right:55px"></divider>
					
					<projectStep
						v-bind:content="content"
						v-bind:steps="steps"
						v-bind:index="index"
					></projectStep>
				
			</div>`,
	
})

Vue.component('step', {
	props:['index','id','value'],
	template:
	`<a :id="index+'step'+id" class="active  step flip3" v-on:click="onandoff($event)" style="padding:10px;">
		<div class="content">
			<div class="title" v-html="value.title"></div>
			<div class="description" v-html="value.description"></div>
		</div>
	</a>`,
	methods:{
		onandoff:function(e){
			var str=e.currentTarget.id;
			var key=str.charAt(str.length-1);
			$("#"+this.index+"panel"+this.id).slideToggle("500");
			for (var i=0;i<7;i++){
				if(i!=key){
					$("#"+this.index+"panel"+i).slideUp("500");
					//console.log(i);
				};
			}; 
		},
	},
})
Vue.component('projectStep', {
	data: function () {
		return {
			step: {
				backgroud:{title:"项目背景",description:"填写该检查项目启动<br>的原由、意义目标。"},
				team:{title:"<i class=\"teal sitemap icon \"></i>召集成员",description:"根据项目要求和规模，<br>召集检查组成员。"},
				plan:{title:"制定计划",description:"针对受检单位情况，制定<br>检查重点，分配检查任务。"},
				execute:{title:"执行任务",description:"针对检查任务制订<br>检查单，执行检查任务。"},
				summary:{title:"内部总结",description:"检查组内部复核检查<br>结果，编写项目总评。"},
				inform:{title:"通报结果",description:"向受检单位正式<br>通报检查结果。"},
				end:{title:"项目结束",description:"保存资料。提供检<br>查分析报告下载。"}
			},
			panels:[
			''
			],
				
			
		}
	},
	
	props:['content','index'],
	template:
	`<div style="margin:15px 0px 0px 0px;padding:0px">
		<div class="ui mini fluid steps" >
			<step
				v-for="(value,name,id) in step"
				v-bind:index="index"
				v-bind:value="value"
				v-bind:id="id"
			></step>
		</div>
		
		<div :id="index+'panel0'" class="ui  tab secondary  segment " style="padding:20px;border:0px;margin:0px" >
			<i class="blue edit icon " data-content="修改" style="position:absolute;right:0px;top:5px;"></i>
			<div class="ui three column divided grid" style="padding:15px">
			  <div class="column" style="padding-top:0px;overflow: auto;height:300px">
				<p>联合督查组成员分专业，分别深入各一线运行岗位开展督查工作。
					重点围绕、管制业务、设备运行、空域管理及规划、网络信息安全、保密工作、法律事务管理、安保消防反恐等方面工作开展督查。
					督查组成员不辞辛劳，通过听取汇报、现场问询、检查记录、实地检查等方式对分局各项工作开展情况进行了细致地督导检查。
					同时，对天津空管分局各项工作的好做法、好措施给予了充分肯定，对不足之处提出了意见建议。
					</p>
			  </div>
			  <div class="column" style="padding-top:0px;overflow: auto;height:300px">联合督查组成员分专业，分别深入各一线运行岗位开展督查工作。
					重点围绕、管制业务、设备运行、空域管理及规划、网络信息安全、保密工作、法律事务管理、安保消防反恐等方面工作开展督查。
					督查组成员不辞辛劳，通过听取汇报、现场问询、检查记录、实地检查等方式对分局各项工作开展情况进行了细致地督导检查。
					同时，对天津空管分局各项工作的好做法、好措施给予了充分肯定，对不足之处提出了意见建议。</div>
			  <div class="column" style="padding-top:0px;overflow: auto;height:300px" >
				<div class="ui middle aligned selection divided list" style="margin:0px">
					<checkPoint-test></checkPoint-test>
					<checkPoint-test></checkPoint-test>
					<checkPoint-test></checkPoint-test>
					<checkPoint-test></checkPoint-test>
				</div>
			  </div>
			</div>
		</div>
		<div :id="index+'panel1'" class="ui tab secondary  segment panel2" style="padding:20px;border:0px;margin:0px" >
			<i class="large blue plus square outline icon " data-content="添加" style="position:absolute;left:-2.5px;top:-0.5px;"></i>
			<div class="ui middle aligned selection divided list" style="margin:0px">
				<checkPoint-test></checkPoint-test>
				<checkPoint-test></checkPoint-test>
			</div>
		</div>
		<div :id="index+'panel2'" class="ui tab secondary  segment panel3" style="padding:20px;border:0px;margin:0px" >
			<i class="large blue plus square outline icon " data-content="添加" style="position:absolute;left:-2.5px;top:-0.5px;"></i>
			<div class="ui relaxed middle aligned selection divided list" style="margin:0px">
				<task-test
					v-for="task in content.task"
					v-bind:task="task"
				></task-test>
				<p v-if="$.isEmptyObject(content.task)" style="padding:10px">该项目未有检查项，请点击左侧按钮添加。</p>
			</div>
		</div>
	</div>`,
})
Vue.component('panel', {
	props:['index','id','innerPanel'],
	template:
	`<div id="index+'step'+id" class="ui secondary raised segment " style="padding:20px;border:0px;margin:0px" v-html="innerPanel">
		
	</div>`
})
Vue.component('task-test', {
  props:['task'],
  template:
  `<div class="item" style="cursor:default">
		<img class="ui avatar image" v-bind:src="task.imgSrc">
		<div class="content">
			<div class="header">检查办公室</div>
			<div class="description">
				<div class="ui breadcrumb">
					<a class="section">@{{task.name}}</a>
					<div class="divider"> / </div>
					<div class=" section">@{{task.date}}</div>
					<div class="divider"> / </div>
					<div class="section">@{{task.status}}</div>
					<div class="divider"> / </div>
				</div> 
			</div>
		</div> 
		<i class=" red close icon right floated" data-content="删除" style="margin-left:5px"></i>
		<i class=" blue edit icon right floated" data-content="复写" style="padding-top:0px"></i>
	</div>`
})

Vue.component('checkPoint-test', {
	props:['checkPoint'],
	template:`<div class="middle aligned item " style="cursor:default;">
				<i class=" black map pin left floated icon" ></i>
				<i class=" red close icon right floated" data-content="删除" style="margin-left:5px"></i>
				<i class=" teal cogs icon right floated" data-content="编辑"></i>
				<div class="content" >
					<a class="header">Krolewskie Jadlo</a>
					<div class="description">检查办公室检查办公室检查办公室检查办公室检查办公室检查办公室检查办公室检查办公室
					检查办公室检查办公室检查办公室检查办公室检查办公室检查办公室检查办公室检查办公室检查办公室检查办公室检查办公室检查办公室
					</div>
				</div>	
			</div>`
})

Vue.component('divider', {
	template:'<div class="ui divider" >'
})
</script>
<script>
var project=new Vue({
	el: '#app',
	data: {
		projects: [
			{imgSrc:"images/wireframe/image.png",header:"My Neighbor Totoro",meta:"IFC Cinema",taskNum:5,
				task:[
				{imgSrc:"./images/avatar/small/helen.jpg",name:"于泳",date:"2020-03-05 至 2020-03-05",status:"检查任务已完成"},
				{imgSrc:"./images/avatar/small/christian.jpg",name:"赵鑫",date:"2020-03-05 至 2020-03-05",status:"检查任务已完成"},
				{imgSrc:"./images/avatar/small/daniel.jpg",name:"狄正平",date:"2020-03-05 至 2020-03-05",status:"检查任务已完成"},
				{imgSrc:"./images/avatar/small/daniel.jpg",name:"狄正平",date:"2020-03-05 至 2020-03-05",status:"检查任务已完成"},
				]
			},
			{imgSrc:"images/wireframe/image.png",header:"My Neighbor Totoro",meta:"IFC Cinema",taskNum:5,
				task:[
				{imgSrc:"./images/avatar/small/helen.jpg",name:"于泳",date:"2020-03-05 至 2020-03-05",status:"检查任务已完成"}
				]
			},
			{imgSrc:"images/wireframe/image.png",header:"My Neighbor Totoro",meta:"IFC Cinema",taskNum:5,
				task:[{imgSrc:"./images/avatar/small/daniel.jpg",name:"狄正平",date:"2020-03-05 至 2020-03-05",status:"检查任务已完成"}]
			},
			
			{imgSrc:"images/wireframe/image.png",header:"My Neighbor Totoro",meta:"IFC Cinema",taskNum:5,
				task:null
			},
			{imgSrc:"images/wireframe/image.png",header:"My Neighbor Totoro",meta:"IFC Cinema",taskNum:5,
				task:[{imgSrc:"./images/avatar/small/daniel.jpg",name:"狄正平",date:"2020-03-05 至 2020-03-05",status:"检查任务已完成"}]
			},
		],
		tasks:[
			{imgSrc:"./images/avatar/small/helen.jpg",name:"于泳",date:"2020-03-05 至 2020-03-05",status:"检查任务已完成"},
			{imgSrc:"./images/avatar/small/christian.jpg",name:"赵鑫",date:"2020-03-05 至 2020-03-05",status:"检查任务已完成"},
			{imgSrc:"./images/avatar/small/daniel.jpg",name:"狄正平",date:"2020-03-05 至 2020-03-05",status:"检查任务已完成"},
			{imgSrc:"./images/avatar/small/daniel.jpg",name:"狄正平",date:"2020-03-05 至 2020-03-05",status:"检查任务已完成"},
		],
		projectTask:['123'],
		steps: {
			backgroud:{title:"项目背景",description:"填写该检查项目启动<br>的原由、意义目标。"},
			team:{title:"召集成员",description:"根据项目要求和规模，<br>召集检查组成员。"},
			plan:{title:"制定计划",description:"针对受检单位情况，制定<br>检查重点，分配检查任务。"},
			execute:{title:"执行任务",description:"针对检查任务制订<br>检查单，执行检查任务。"},
			summary:{title:"内部总结",description:"检查组内部复核检查<br>结果，编写项目总评。"},
			inform:{title:"通报结果",description:"向受检单位正式<br>通报检查结果。"},
			end:{title:"项目结束",description:"保存资料。提供检<br>查分析报告下载。"}
		},
		login:{name:'检查员'},
	},
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
	
	methods:{
		submit:function(){	
			var that=this;	
			axios.post('test.php', {
					
			})
			.then(function (response) {
				//console.log(response.data);
				//console.log(response.data);
				that.projectTask=response.data;
				console.log(that.projectTask);
				
			})
			.catch(function (error) {
				//console.log(error);
			});
		},
		submit2:function(){			
			axios.get('https://autumnfish.cn/api/joke')
			.then(function (response) {
				console.log(response.data);
			})
			.catch(function (error) {
				console.log(error);
			});
		},
		print:function(arr){
			console.log(arr);
		}
	}
})



</script>
</body>
<script>
$('.ui.accordion').accordion();
$('.ui .button ').popup();
$('.ui .icon ').popup();
//$('.menu .item').tab();

</script>
</html>