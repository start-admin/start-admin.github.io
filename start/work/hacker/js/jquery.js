$('#login-button').click(function (event) {

	var userName=document.getElementById("userName").value;  

    var pwd=document.getElementById("pwd").value;

    if(userName=="渗透安全" &&  pwd=="MDFJDdkdsk1232564dsk"){

		event.preventDefault();

		$('form').fadeOut(500);

		$('.wrapper').addClass('form-success');

		alert("恭喜你成功了，返回主页，进行其他练习吧！")

		setTimeout(function(){location.href="https://start1.free.nf";},2000);

	}

	else{

		alert("欸嘿，提示一下， 密码不在数据库中，你懂的。");

	}

});

