function forgetpw(){
	var aucode = $.trim($("#authcode").val());
	var username =  $.trim($("#username").val());
	if(username==""){
		layer.msg('����д��ע��ʱ���û������ֻ��Ż����䣡', 2,8);return false;    
	}
	if(aucode==""){
		layer.msg('��֤�벻��Ϊ�գ�', 2,8);return false; 
	}
	$.post(weburl+"/index.php?m=forgetpw&c=checkuser",{aucode:aucode,username:username},function(data){
		var data=eval('('+data+')');
		var status=data.type; 
		var msg=data.msg; 
		if(status==1){
			$("#step1").hide();
			$("#step2").show();
			$("#nav2").attr("class","flowcur");
			$("#username_halt").html(data.username);
			if(data.email!=""){
				$("#email_halt").html(data.email);
			}else{
				$("#checkemail").hide();
			}
			if(data.moblie!=""){
				$("#moblie_halt").html(data.moblie);
			}else{
				$("#checkmoblie").hide();
			}
			$("input[name=uid]").val(data.uid);
		}else if(status==2){
			layer.msg("�û��������ڣ�",2,8);return false;
		}else{
			layer.msg(msg,2,status);return false;
		}
	});
	return true;
}
function send_str(){
	 var username = $("#username").val();
	 var uid=$("input[name=uid]").val();
	 var sendtype=$("input[name=sendtype]:checked").val();
	 if(sendtype!="email" && sendtype!="moblie"){
		 layer.msg("��ѡ���һ����뷽ʽ��",2,8);return false;
	 }
	 if($.trim(username)=="") {
		layer.msg('����д��ע��ʱ���û�����', 2, 8);return false;
	 }else{
		$.post(weburl+"/index.php?m=forgetpw&c=send",{username:username,uid:uid,sendtype:sendtype},function(data){
			var data=eval('('+data+')');
			layer.msg(data.msg, 2,Number(data.type),function(){if(data.type=='1'){
				$(".password_cont").hide();
				$("#step3_"+sendtype).show();
				$("#step3_email_halt").html(data.email);
				$("#step3_moblie_halt").html(data.moblie);
				window.time=90;				
				window.timer=setInterval(function(){if(window.time<=0){clearInterval(window.timer);window.time=90;$('.step3_'+sendtype+'_timer').html('<a href="javascript:send_str();" class="input_btn ">�����ѻ�ȡ</a>');}else{window.time=window.time-1;$('.step3_'+sendtype+'_timer').html('<a href="javascript:;" class="input_btn ">'+window.time+' ������»�ȡ</a>');}},1000);				
			}});
			return false;
		});
	 }
}
function checksendcode(){
	 var username = $("#username").val();
	 var uid=$("input[name=uid]").val();
	 var sendtype=$("input[name=sendtype]:checked").val();
	 var code=$("input[name=code_"+sendtype+"]").val();
	 if($.trim(username)=="") {
		layer.msg('����д��ע��ʱ���û������ֻ��Ż����䣡', 2, 8);return false;
	 }else{
		$.post(weburl+"/index.php?m=forgetpw&c=checksendcode",{username:username,uid:uid,sendtype:sendtype,code:code},function(data){
			var data=eval('('+data+')');
			layer.msg(data.msg, 2,Number(data.type),function(){if(data.type=='1'){
				$(".password_cont").hide();
				$("#step4").show();
				$('.flowsteps li:eq(2)').addClass('flowcur');
			}});
			return false;
		});
	 }
}
function editpw(){
	 var username = $("#username").val();
	 var uid=$("input[name=uid]").val();
	 var sendtype=$("input[name=sendtype]:checked").val();
	 var code=$("input[name=code_"+sendtype+"]").val();
	 var password=$.trim($("input[name=password]").val());
	 var passwordconfirm=$.trim($("input[name=passwordconfirm]").val());
	 if($.trim(username)=="") {
		layer.msg('����д��ע��ʱ���û������ֻ��Ż����䣡', 2, 8);return false;
	 }else if(password!=passwordconfirm){
		layer.msg('�����������벻һ�£�', 2, 8);return false;
	 }else if(password.length<6){
		layer.msg('���볤�ȱ�����ڵ���6��', 2, 8);return false;
	 }else{
		$.post(weburl+"/index.php?m=forgetpw&c=editpw",{username:username,uid:uid,sendtype:sendtype,code:code,password:password,passwordconfirm:passwordconfirm},function(data){
			var data=eval('('+data+')');
			layer.msg(data.msg, 2,Number(data.type),function(){if(data.type=='1'){
				$(".password_cont").hide();
				$('.flowsteps li:eq(3)').addClass('flowcur');
				$("#step5").show();
			}});
			return false;
		});
	 }
}