<?php 
include("connMysqlObj.php");
if (!@mysqli_select_db($db_link, "SaleSystem")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="update")){	
	$sql_query = "UPDATE rcpay SET ";
	$sql_query .= "CU_No='".$_POST["CU_No"]."',";
	$sql_query .= "PR_Upamt='".$_POST["PR_Upamt"]."',";
	$sql_query .= "CR_Spamt='".$_POST["CR_Spamt"]."',";
	$sql_query .= "CR_Csamt='".$_POST["CR_Csamt"]."',";
	$sql_query .= "CR_Upamt='".$_POST["CR_Upamt"]."'";

	$sql_query .= "WHERE CU_No=".$_POST["CU_No"];	
	mysqli_query($db_link, $sql_query);
	//重新導向回到主畫面
	header("Location: rcpay.php");
}
$sql_db = "SELECT * FROM rcpay WHERE CU_No=".$_GET["id"];
$result = mysqli_query($db_link, $sql_db);
$row_result=mysqli_fetch_assoc($result);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>資料管理系統</title>

<link rel="stylesheet" href="./css/vital-ui-kit.css">
<link rel="stylesheet" href="./css/styleguide.css">

</head>
<body>


<h1 align="center">資料管理系統 - 修改資料</h1>
<p align="center"><a href="rcpay.php">回主畫面</a></p>
<form action="" method="post" name="formFix" id="formFix">





<table class="sg-table sg-table--responsive sg-table--bordered  sg-table--striped  sg-table--highlight">

<thead>
		<tr>
			<th>客戶編號</th>
			<th>前期結欠</th>
			<th>本期出貨</th>
			<th>本期收款</th>
			<th>累計應收</th>
			
			
		</tr>
	</thead>
<tbody>


    <tr>
      
   
   <td><input type="text" name="CU_No" id="CU_No" value="<?php echo $row_result["CU_No"];?>"></td>
  
      <td><input type="text" name="PR_Upamt" id="PR_Upamt" value="<?php echo $row_result["PR_Upamt"];?>"></td>
  
     <td><input type="text" name="CR_Spamt" id="CR_Spamt" value="<?php echo $row_result["CR_Spamt"];?>"></td>
 
      <td><input type="text" name="CR_Csamt" id="CR_Csamt" value="<?php echo $row_result["CR_Csamt"];?>"></td>
  
      <td><input type="text" name="CR_Upamt" id="CR_Upamt" value="<?php echo $row_result["CR_Upamt"];?>"></td>
   
    

	
    </tr>

  </table>	
  
  
  <tr>
      <td colspan="2" align="center">
      <input name="CU_No" type="hidden" value="<?php echo $row_result["CU_No"];?>">
      <input name="action" type="hidden" value="update">
      <input type="submit" name="button" id="button" value="更新資料">
      <input type="reset" name="button2" id="button2" value="重新填寫">
      </td>
    </tr>
	
	
  
</form>

<script src="./js/vital-ui-kit.js"></script>  <!-- script 一些功能加入用 EX: table all --> 
</body>
</html>