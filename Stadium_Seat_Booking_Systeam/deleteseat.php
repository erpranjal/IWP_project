<!DOCTYPE html>
<html>
<head>
<a href="logout.php">Logout</a>
<style>
body {
    background-image:url(background-pattern-design-90.jpg);
}
</style>
	<title>Admin Login</title>
	<style type="text/css">
		#ho1
		{
			color: red;
			font-size: 70px;
		}
		#p1
		{
			font-size: 25px;
			color: red;
		}
		#s1
		{
			background-color: black;
			color: white;
			font-size: 20px;
		}
	</style>
</head>
<body bgcolor="gray">
<center><h1 id="ho1"></h1></center>
<br><br>
<script type="text/javascript">
function validate()
		{	
					var seatpattern=/^[0-9A-Z,]*$/;
					var wingpattern=/^[0-9]*$/;
					var match_idpattern=/^[0-9]*$/;
					var z=0;
					var x=0;
            		var msg="";
					var name=document.form1.m_id.value;
					
           			 if (name == "")
            		{
						msg=msg+"Please provide your match id\n";
             			document.form1.firstname.focus();
						x++;
				
           			 }
					else
						{
							if(!match_idpattern.test(name))
							msg=msg+"Only numbers are allowed in match id\n";
						}
		var name2=document.form1.s_id.value;
					
           			 if (name2 == "")
            		{
						msg=msg+"Please provide your firstname\n";
             			document.form1.firstname.focus();
						x++;
				
           			 }
					else
						{
							if(!wingpattern.test(name2))
							msg=msg+"Only characters and white spaces are allowed in firstname block\n";
					
						}
		
			var name3=document.form1.w_id.value;
					
           			 if (name3 == "")
            		{
						msg=msg+"Please provide your firstname\n";
             			document.form1.firstname.focus();
						x++;
				
           			 }
					else
						{
							if(!seatpattern.test(name3))
							msg=msg+"Only characters and white spaces are allowed in firstname block\n";
					
						}
			
			if(msg!="")
			{
				window.alert(msg);
				return false;	
			}
			else
			{
				
				return true;
				
			} 	           	
          
}
</script>



<form name="form1" method="POST" action="deletetic.php" onsubmit="return validate()">
  <div style="background:#8E5DBF  ;height:90px;width:390px;position:absolute;left:500px;top:200px;border-radius:16px">
<spam style="font-style:bold;font-size:25px;position:relative;left:90px;top:30px;color:white";><b>DELETE Tickets</b></spam>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
	<center><p id="p1">Enter Match id whose ticket has to be deleted</p></center>
	<center><input type="text" name="m_id"></center><br><br>
	<center><p id="p1">Enter seat id which has to be deleted</p></center>
	<center><input type="text" name="s_id"></center><br><br>
	<center><p id="p1">Enter the wing no of your seats</p></center>
	<center><input type="text" name="w_id"></center><br><br>
	<center><input type="submit" value="Delete Ticket" id="s1"></center>
</form>

</body>
</html>