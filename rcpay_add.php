<?php 
if(isset($_POST["action"])&&($_POST["action"]=="add")){
	include("connMysqlObj.php");
	if (!@mysqli_select_db($db_link, "SaleSystem")) die("資料庫選擇失敗！");
	$sql_query = "INSERT INTO rcpay (CU_No, PR_Upamt, CR_Spamt, CR_Csamt, CR_Upamt) VALUES (";
	$sql_query .= "'".$_POST["CU_No"]."',";
	$sql_query .= "'".$_POST["PR_Upamt"]."',";
	$sql_query .= "'".$_POST["CR_Spamt"]."',";
	$sql_query .= "'".$_POST["CR_Csamt"]."',";
	$sql_query .= "'".$_POST["CR_Upamt"]."')";

	mysqli_query($db_link, $sql_query);
	//重新導向回到主畫面
	header("Location: rcpay.php");
}	
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>資料管理系統</title>
<link rel="stylesheet" href="./css/vital-ui-kit.css">
<link rel="stylesheet" href="./css/styleguide.css">

</head>
<body>
<h1 align="center">資料管理系統 - 新增資料</h1>
<p align="center"><a href="rcpay.php">回主畫面</a></p>
<form action="" method="post" name="formAdd" id="formAdd">


  
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
      
   
  <td><input type="text" name="CU_No" id="CU_No"></td>

    <td><input type="text" name="PR_Upamt" id="PR_Upamt" value="0"></td>
  
     <td><input type="text" name="CR_Spamt" id="CR_Spamt" value="0"></td>
   
   <td><input type="text" name="CR_Csamt" id="CR_Csamt" value="0"></td>
    
   <td><input type="text" name="CR_Upamt" id="CR_Upamt" value="0"></td>
   
   
  

	
    </tr>

  </table>	
  
      <tr>
      <td colspan="2" align="center">
      <input name="action" type="hidden" value="add">
      <input type="submit" name="button" id="button" value="新增資料">
      <input type="reset" name="button2" id="button2" value="重新填寫">
      </td>
    </tr>
  
</form>
<script src="./js/vital-ui-kit.js"></script>  <!-- script 一些功能加入用 EX: table all --> 
</body>
</html>