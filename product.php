<?php
include("include/header.php");


//$link=mysqli_connect("localhost","root","","shop_db");

//if(mysqli_connect_errno())
	//exit("شرح خطا بدین گونه است:" .mysqli_connect_error());

//$query="SELECT * FROM product";
//$result= mysqli_query($link,$query);

?>
<script type="text/javascript">

function dcheck()
{
	
			alert("وارد کردن تمامی فیلدها الزامی است.");
	



}
function mocheck()
{
	
			alert("وارد کردن تمامی فیلدها الزامی است.");
	



}

</script>


<table style=" width:100%;" border="1px">
<tr>
<?php


//$counter=0;
//while($row=mysqli_fetch_array($result))
// $counter++;
?>



<td  colspan="2" style="border-style:dotted dashed; vertical-align:top; width:33%;" align="center">
<b>
	معرفی محصولات
</b>

</td>

</tr>
<tr>
<td width="49%" align="center">
	<img src="img/img1.jfif" width="50%" height="80%" onmouseover="mocheck()" ondblclick="dcheck()"/>
	</br>
<p >	محصول 1</p>

</td>

<td width="49%" align="center">

	<img src="img/img2.jfif" width="50%" height="80%" />
	<p >	محصول 2</p>
</td>
</tr>
<tr>
<td width="49%" align="center">

<img src="img/img3.jfif" width="50%" height="80%" />
<p >	محصول 3</p>
</td>

<td width="49%" align="center">

<img src="img/img4.jpg" width="50%" height="80%" />
<p >	محصول 4</p>
</td>
</tr>

</table>

<?php
 include("include/footer.php");
 ?>