<!Doctype html>
<html>
<head>
<title>TheCoffeePlace: Order online</title>
<style>
a:link, a:visited {
  background-color: white;
  color: #000000;
  padding: 15px 25px;
  text-align: center;
  text-decoration:none;
  display: inline;
}
li{
	display: inline;
	text-decoration: none;
}
a:hover, a:active {
  background-color:pink ;
}
body{
	background-color: #FFE5CC;
	text-align: center;
	font-family: comic sans ms;
}
</style>
</head>
<body>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ24J25wHnfIOrrKJ-VyiOB-rqZoIcLVXQic4Q5Rd1DfBeFUJ4bzA" height="75" width="75">
<font size="8" color="#A0522D"> The coffee place </font><br>
<font size="6">
<p> <font face = "impact">
Order now!
</font></p>
   <table align=center cellspacing="15">
   <form action="http://localhost/cafe_web/Order_placed.php" method = "post">
   <tr>
   <td>Email_Id: </td> 
   <td colspan=2 align="left"><input size=20 type="email" name="Email" placeholder="example@something.com" required></td>
   </tr>
   
   <tr>
   <td>Phone No.: </td> 
   <td colspan=2 align="left"><input size=20 type="text" name="Phone" placeholder="8888888888" pattern="[0-9]{10}" required></td>
   </tr>
   
   <tr>
   <td>Address: </td>
	<td colspan=2 align="left"><input size=20 type="text" name="Address" required></td>
   
   </tr>   
   <tr>
   <td>Order: </td><td><input type="text" name="Order1"><br></td>
   <td>Quantity: </td><td><input name="Quantity" pattern="[0-9]" required></td>
   </tr>
   
   <td><input type="Submit" value="Place order"><input type="reset" value="reset"><br></td>
   </tr>
   </form>
   </table>
<ul>
<li><a href="home.html"><font color="#000000"> Home </font></a></li>
<li><a href="Aboutus.html"><font color="#000000"> About us </font></a></li>
<li><a href="menu.html"><font color="#000000"> Menu </font></a></li>
<li><a href="feedback.html"><font color="#000000"> Contact us </font></a></li>
</ul>
</font>
</body>
</html>
