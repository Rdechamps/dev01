$(document).ready(function(e){
	$("#contact_form").on("submit",function(e){
		e.preventDefault();
		var t=$(this);
		var n=$("#name").val();
		var r=$("#first_name").val();
		var i=$("#society").val();
		var s=$("#phone").val();
		var o=$("#mail").val();
		var u=$("#country").val();
		var p=$("#message").val();
		var a=new FormData;
		
		a.append("name",n);
		a.append("first_name",r);
		a.append("society",i);
		a.append("phone",s);
		a.append("mail",o);
		a.append("country",u);
		a.append("message",p);
		
		if(n===""||r===""||i===""||s===""||o===""||u===""||p==""){
			alert("Veuillez compléter tous les champs")
		}
		else
		{
			$.ajax({
				url:"controllers/mail.php",
				type:"POST",
				data:a,
				processData:false,
				contentType:false,
				cache:false,
				dataType:"json",
				success:function(e){
					if(e.reponse=="ok"){
						alert("That's good !")
					}
					else
					{
						alert(String(e.reponse));
					}
				}
			})
		}
	})
})