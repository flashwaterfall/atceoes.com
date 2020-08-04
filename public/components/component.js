//item删除modal
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
// item编辑modal
Vue.component('edit-modal',{
	props:[''],
	template:`
	<div class="ui modal longer edit" >
		<div class="header">
			编辑检查意见
		</div>
		<div class="scrolling content" >
			<div class="ui placeholder segment">
				<div class="ui two column  grid">
					<div class="column">
						<p>1</p>
						<p>2</p>
						<p>3</p>
						<p>5</p>
					</div>
					<div class="column" >
						<form class="ui form" method="POST" action="" >
							<div class="field">
								<textarea style="width:90%;" type="text" name="itemOpinion" placeholder="请将修改意见填写在此处"></textarea>
							</div>
						</form>
					</div>
				</div>
				<div class="ui vertical divider">and </div>
			</div>
			
		</div>
		<div class="actions">
			<div class="ui black deny button">
			  取消
			</div>
			<div class="ui positive right labeled icon button">
			  确认提交
			  <i class="checkmark icon"></i>
			</div>
		</div>
	</div>
	`
})

// 分割线
Vue.component('divider',{
	template:`
			<div class='ui divider'></div>
	`
})

// 导航条
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
						<a class="item ">{{login.name}}</a>
						<a class="item ">退出</a>
					</div>
				</div>
			</div>
		</header>
	`
})

// item主体
Vue.component('item', {
 	props:['item'],
 	methods: {
	  editItem: function () {
	  	$('.ui.edit.modal')
	  	.modal({inverted: true})
	  	.modal('setting', 'closable', false)
	  	.modal('show');	  	
	  },
	  delItem: function () {
	  	$('.ui.del.modal')
	  	.modal({inverted: true})
	  	.modal('show');
	  },
	},
 	template:`
 		<div class="ui card" style="width:350px;">
 			<i class=" red close icon right floated" v-on:click="delItem" data-content="删除" style="position:absolute;right:0px;top:5px;cursor:pointer;"></i>
 			<i class=" teal cogs icon right floated" v-on:click="editItem" data-content="编辑" style="cursor:pointer;position:absolute;right:18px;top:5px;"></i>
 			<div class="content">
 				<div class="header">{{item.header}}</div>
 				<div class="meta">{{item.meta}}</div>
 				<div class="ui divider"></div>
 				<div class="description" >
 					<p><strong>{{item.start}}</strong>
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

// item中factor
Vue.component('factor',{
	props:['factorContent'],
	template:`
		<div>
			<div class="ui checkbox"><input type="checkbox" tabindex="0" class="hidden"><label>{{factorContent}}</label></div>
		</div>
		`
})

$('.ui.checkbox').checkbox();
$('.ui.green.button').popup(
	{on:'click'});
$('.ui.red.button').popup(
	{on: 'click'});
$('.ui .icon ').popup();