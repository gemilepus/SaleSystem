<?php 
if(isset($_POST["action"])&&($_POST["action"]=="add")){
	include("connMysqlObj.php");
	if (!@mysqli_select_db($db_link, "SaleSystem")) die("資料庫選擇失敗！");
	$sql_query = "INSERT INTO rcdtl (CS_Blno, CU_No, CS_Date, CS_Amt, RD_Amt, TR_Note) VALUES (";
	$sql_query .= "'".$_POST["CS_Blno"]."',";
	$sql_query .= "'".$_POST["CU_No"]."',";
	$sql_query .= "'".$_POST["CS_Date"]."',";
	$sql_query .= "'".$_POST["CS_Amt"]."',";
	$sql_query .= "'".$_POST["RD_Amt"]."',";
	$sql_query .= "'".$_POST["TR_Note"]."')";
	mysqli_query($db_link, $sql_query);
	//重新導向回到主畫面
	header("Location: rcdtl.php");
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
<p align="center"><a href="rcdtl.php">回主畫面</a></p>
<form action="" method="post" name="formAdd" id="formAdd">


  
  <table class="sg-table sg-table--responsive sg-table--bordered  sg-table--striped  sg-table--highlight">

<thead>
		<tr>
		    <th>收款單號</th>
			<th>客戶編號</th>
			<th>收款日期</th>
			<th>金額</th>
			<th>支票號碼</th>
			<th>轉擋註記</th>
		
		</tr>
	</thead>
<tbody>


    <tr>
      
   
  <td><input type="text" name="CS_Blno" id="CS_Blno"></td>

    <td><input type="text" name="CU_No" id="CU_No"></td>
  
     <td><input type="text" name="CS_Date" id="CS_Date"></td>
   
   <td><input type="text" name="CS_Amt" id="CS_Amt"></td>
    
   <td><input type="text" name="RD_Amt" id="RD_Amt"></td>
   
   
<td><input name="TR_Note" type="text" id="TR_Note"></td>
  

	
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