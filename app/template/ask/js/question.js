$(document).ready(function(){
	$("input[name='cid']").val('');
	$("input[name='keyword']").focus(function(){
		$(".seek_menu").hide();
	},function(){ 
		searchli();
		$(".seek_menu").show(); 
	});
	$("input[name='keyword']").keyup(function(){
		searchli();
	});
	$(".menu_p1_nrtj span").click(function(){
		var aid=$(this).attr('aid');
		$(".review"+aid).hide();
	});
	$('body').click(function(evt) {
		if(evt.target.name!='keyword'){
			$(".seek_menu").hide();
		}
		if($(evt.target).parents(".quiz_chi").length==0) {
			$('.quiz_box').hide();
		}
	});
	$(".quiz_chi span").click(function(){ 
		$(".quiz_box").show();
	});
});
function logout(url){
	$.get(url,function(msg){
		if(msg==1 || msg.indexOf('script')){
			if(msg.indexOf('script')){
				$('#uclogin').html(msg);
			}
			layer.msg('���ѳɹ��˳���', 2, 9,function(){window.location.href =weburl;});
		}else{
			layer.msg('�˳�ʧ�ܣ�', 2, 8);
		}
	});
}
function searchli(){
	var keyword=$.trim($("input[name='keyword']").val());
	var html='';
	$(".seek_menu .option>a").attr("href",keyurl+"&keyword="+keyword);
	$(".seek_menu .option>a").html(keyword);
	if(keyword){ 
		$.post(searchurl,{keyword:keyword},function(data){
			if(data){
				var datas = Array();			
				datas = eval("("+data+")"); 
				$.each(datas,function(key,val){
					html +="<li><p><a href=\""+val.url+"\" target=\"_blank\">"+val.title+"</a></p><span>"+val.answer_num+"���ظ�</span></li>"; 
				});
			}
			$(".searchli").html(html); 
			
		});
	}else{
		$(".searchli").html(''); 
		$(".seek_menu>span").html(''); 
	}
}
function returnmessage(){
	var message = $(window.frames["supportiframe"].document).find("#layer_msg").val();  
	if(message != null){  
		var url=$(window.frames["supportiframe"].document).find("#layer_url").val();
		var layer_time=$(window.frames["supportiframe"].document).find("#layer_time").val(); 
		var layer_st=$(window.frames["supportiframe"].document).find("#layer_st").val(); 
		if(url=='1'){
			layer.msg(message, layer_time, Number(layer_st),function(){ location.reload();}); 
		}else if(url==''){
			layer.msg(message, layer_time, Number(layer_st)); 
		}else{
			layer.msg(message, layer_time, Number(layer_st),function(){location.href = url;});
		}
	}
} 
function clearForm(form) {
	$(':input', form).each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); 
		if (type == 'text' || type == 'password' || tag == 'textarea'){
			this.value = "";
		}else if (type == 'checkbox' || type == 'radio'){
			this.checked = false;
		}else if (tag == 'select'){
			this.selectedIndex = -1;
		}
	});
};
function get_order(url){
	location=url;
}
function get_comment(aid,show,url){ 
	$(".pl_menu").hide();
	var style=$(".review"+aid).css("display");
	var info=$(".review"+aid+" ul").html();
	if(style=="none"||show>0){ 
		if((info==''||info==null)||show>0){
			$.post(url,{aid:aid},function(data){
				var html='';  
				var datas = Array();			
				datas = eval("("+data+")");
				$.each(datas,function(key,val){
					html+="<li>"+
							"<div class=\"menu_p1_tx\"><img src=\""+val.pic+"\" onerror=\"showImgDelay(this,'"+val.errorpic+"',2);\"/></div>"+
							"<div class=\"menu_right\">"+
								"<div class=\"menu_rig_h2\">"+
									"<span class=\"menu_user\"><a href=\""+val.url+"\" target=\"_blank\">"+val.nickname+"</a>��</span>"+
									"<span class=\"menu_mes\">"+val.content+"</span>"+
								"</div>"+ 
								"<div class=\"menu_date\">"+
									"<span>"+val.date+"</span>"+
								"</div>"+
							"</div>"+ 
						"</div>"+
						"<div class=\"clear\"></div>"+
					"</li>"; 
					$(".review"+aid+" ul").html(html); 
				});	 
			});
		}
		$(".review"+aid).show();
	}else{
		$(".review"+aid).hide();
	} 
} 
function for_comment(aid,qid,url,comurl){
	var content=$.trim($("#comment_"+aid).val()); 
	if(content=="" || content=="undefined"){
		layer.msg('�������ݲ���Ϊ�գ�', 2, 2);return false; 
	}else{
		$.post(url,{aid:aid,qid:qid,content:content},function(msg){
			if(msg=='1'){
				$("#comment_"+aid).val("");
				var com_num=$("#com_num_"+aid).html();  
				com_num=parseInt(com_num)+parseInt(1);
				$("#com_num_"+aid).html(com_num); 
				get_comment(aid,'1',comurl);
			}else if(msg=='0'){
				layer.msg('����ʧ�ܣ�', 2, 8);return false; 
			}else if(msg=='no_login'){ 
				layer.msg('���ȵ�¼��', 2, 8);return false; 
			}else{
				layer.msg(msg, 2, 8);return false; 
			}
		});
	}
}
function support(aid,url){
	$.post(url,{aid:aid},function(msg){
		if(msg=='0'){
			layer.msg('�ύʧ�ܣ�', 2, 8);return false; 
		}else if(msg=='1'){
			var num=$("#support_num_"+aid).html(); 
			$("#support_num_"+aid).html(parseInt(num)+parseInt(1)); 
			layer.msg('ͶƱ�ɹ���', 2, 9);return false; 
		}else if(msg=='2'){
			layer.msg('�����ظ�ͶƱ��', 2, 3);return false; 
		}
	});
}  
function attention(id,type,url){
	$.post(url,{id:id,type:type},function(data){
   		var data=eval('('+data+')');  
		if(type==1){var msg='��ע����';}else{var msg='+  ��ע';} 
		if(data.st==8){
			layer.msg(data.msg, 2,Number(data.st));return false;	
		}else{ 
			$(".num"+id).html(data.url+"�˹�ע");
			$(".index_num"+id).html(data.url);
			if(data.tm==1){
				$(".q"+id+">a").attr("class","watch_qxgz");
				$(".q"+id+">a").html("ȡ����ע");
			}else{
				$(".q"+id+">a").attr("class","watch_gz");
				$(".q"+id+">a").html(msg);
			}	
		} 
	});
}
function attention_user(uid,type,url){
	$.post(url,{id:uid},function(msg){ 
		if(msg=='4'){
			layer.msg('���ܹ�ע�Լ���', 2, 8);return false; 
		}else if(msg=='3'){
			layer.msg('���ȵ�¼��', 2, 8);return false; 
		}else if(type=='remove'){
			$(".atn"+uid).remove();
		}else{ 
			var fans=$(".fans"+uid).attr('fans');
			if(msg=='1'){ 
				fans=parseInt(fans)+parseInt(1); 
				$(".user"+uid+">a").attr("class","watch_qxgz");
				$(".user"+uid+">a").html("ȡ����ע");
			}else if(msg=='2'){ 
				fans=parseInt(fans)-parseInt(1); 
				$(".user"+uid+">a").attr("class","watch_gz");
				$(".user"+uid+">a").html("��ע�û�");
			}
			$(".fans"+uid).attr('fans',fans);
			$(".fans"+uid+">span").html(fans);
		}
	});
}
function get_show(eid){
	$("#eid").val(eid); 
	$.layer({
		type : 1,
		title :'�ٱ��ʴ�',
		offset: [($(window).height() - 220)/2 + 'px', ''],
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['350px','170px'],
		page : {dom :"#TB_window"}
	}); 
}  
function checkform(){
	var content=$("#content").val();
	var cid=$("input[name='cid']").val();
	if(cid==''){layer.msg('��ѡ�����', 2, 2); return false;} 
}
function checkanswer(uid){
	if(uid==""){
		showlogin('');return false;
	}
	if($.trim($("#content").val())==""){
		layer.msg('���ݲ���Ϊ�գ�', 2, 8); return false;
	}
}
function getclass(id,name,url){
	$(".quiz_box_first li").removeClass('quiz_select_cur');
	$(".qc"+id).addClass('quiz_select_cur');
	$(this).parent().attr('class','quiz_select_cur');
 	$.post(url,{id:id},function(data){
 		var datas = Array();
		var html='';
		datas = eval("("+data+")"); 
		$.each(datas,function(key,val){
			html +="<li class=\"qc"+key+"\"><a href='javascript:void(0)' onclick=\"selectclass('"+key+"','"+val+"')\">"+val+"</a></li>"; 
		}); 
		$(".quiz_box_second .quiz_box_title").html(name+"���ࣺ");
		$(".quiz_box_second .quiz_select").html(html);
		$(".quiz_box_second").show();
	});
}
function selectclass(id,name){
	$(".quiz_box_second li").removeClass('quiz_select_cur');
	$(".qc"+id).addClass('quiz_select_cur');
	$(".quiz_chi>span").html(name);
	$(".quiz_box").hide();
	$("input[name='cid']").val(id); 
}
function reason(url){
	var reason=$("#reason").val(); 
	var eid=$("#eid").val(); 
	$.post(url,{reason:reason,eid:eid},function(data){ 
		layer.closeAll();
		if(data=='0'){
			layer.msg('�ٱ�ʧ�ܣ�', 2, 8);
		}else if(data=='1'){
			layer.msg('�ٱ��ɹ���', 2, 9);
		}else if(data=='2'){
			layer.msg('���Ѿٱ����ô���', 2, 3);
		}else if(data=='3'){
			layer.msg('�ô����ѱ����˾ٱ���', 2, 3);
		}else if(data=='no_login'){
			layer.msg('���ȵ�¼��', 2, 8);
		}
	});
}  
function showImgDelay(imgObj,imgSrc,maxErrorNum){ 
    if(maxErrorNum>0){
        imgObj.onerror=function(){
            showImgDelay(imgObj,imgSrc,maxErrorNum-1);
        };
        setTimeout(function(){
            imgObj.src=imgSrc;
        },500);
		maxErrorNum=parseInt(maxErrorNum)-parseInt(1);
    }
}
function onblurtext(id){
	var content = $("#reply_"+id).val();
	content=$.trim(content);
	if(content==""){
		$("#reply_"+id).val("");
		$("#comment_"+id).hide();
		$("#comment"+id).show();
	}
}
function clicktext(id){ 
	$("#comment_"+id).show();
	$("#comment"+id).hide();
	$("#reply_"+id).focus(); 	
}
function checkLength(num,id) {
	var con = $("#reply_"+id).val();
	var content = con.length;
	
	if (con.length > num) { 
		con = con.substring(0, num);
		$("#reply_"+id).val(con); 
	} 
	if(con.length=="0"){
		$("#colornum_"+id).html("0");
	}else{
		$("#colornum_"+id).html(con.length);
	} 
}
function submitreply(id,fid,url){
	var content = $("#reply_"+id).val();
	content=$.trim(content);
	if($.trim(content)==""){
		$("#reply_"+id).val("");
		layer.msg('������ظ����ݣ�', 2, 2);return false; 
	}
	$.post(url,{nid:id,reply:content,fid:fid},function(data){
		if(data==1){ 
			layer.msg('���ȵ�¼��', 2, 3);return false;
		}else{
			var data = eval("("+data+")");
			var content = "";
			content = '<div class="Personals_cont_dy_pl"><div class="Personals_cont_dy_pl_tx"><img src="'+data.pic+'" width="28" height="35" onerror=\"showImgDelay(this,\''+errorimg+'\',2);\"></div><div class="Personals_cont_dy_pl_user"><div class="Personals_cont_dy_pl_user_n"><a href="'+data.url+'" target="_blank">'+data.nickname+'</a>: '+data.reply+'</div><div class="Personals_cont_dy_pl_user_m">'+data.ctime+'</div></div></div>';
			$("#commentlist_"+id).append(content);
			$("#comment_"+id).hide();
			$("#reply_"+id).val("");
			$("#comment"+id).show();	
		}
	});
}
function get_allmsg(id){ 
	var display=$("div[name='hide_"+id+"']").css("display");
	if(display=='none'){
		$("div[name='hide_"+id+"']").show();
		$("#click_"+id).html("��������");
	}else{
		$("div[name='hide_"+id+"']").hide();
		$("#click_"+id).html("�鿴ȫ������");
	} 
} 
function formsg(uid){
	$("#statusbody").val('');
	$.layer({
		type : 1,
		title :'��������', 
		closeBtn : [0 , true],
		border : [10 , 0.3 , '#000', true],
		area : ['360px','200px'],
		page : {dom :"#formsg"}
	});
}