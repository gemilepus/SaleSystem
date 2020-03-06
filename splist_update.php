<?php 
include("connMysqlObj.php");
if (!@mysqli_select_db($db_link, "SaleSystem")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="update")){	
	$sql_query = "UPDATE splist SET ";
	$sql_query .= "SP_Blno='".$_POST["SP_Blno"]."',";
	$sql_query .= "PD_No='".$_POST["PD_No"]."',";
	$sql_query .= "SP_Qty='".$_POST["SP_Qty"]."',";
	$sql_query .= "TR_Note='".$_POST["TR_Note"]."'";

	$sql_query .= "WHERE SP_Blno=".$_POST["SP_Blno"];	
	mysqli_query($db_link, $sql_query);
	//重新導向回到主畫面
	header("Location: splist.php");
}
$sql_db = "SELECT * FROM splist WHERE SP_Blno=".$_GET["id"];
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
<p align="center"><a href="splist.php">回主畫面</a></p>
<form action="" method="post" name="formFix" id="formFix">





<table class="sg-table sg-table--responsive sg-table--bordered  sg-table--striped  sg-table--highlight">

<thead>
		<tr>
			<th>出貨單號</th>
			<th>客戶編號</th>
			<th>產品編號</th>
			<th>數量</th>
			<th>結帳註記</th>
		
			
		</tr>
	</thead>
<tbody>


    <tr>
      
   
   <td><input type="text" name="SP_Blno" id="SP_Blno" value="<?php echo $row_result["SP_Blno"];?>"></td>
   
   <td><input type="text" name="CU_No" id="CU_No" value="<?php echo $row_result["CU_No"];?>"></td>
  
      <td><input type="text" name="PD_No" id="PD_No" value="<?php echo $row_result["PD_No"];?>"></td>
  
     <td><input type="text" name="SP_Qty" id="SP_Qty" value="<?php echo $row_result["SP_Qty"];?>"></td>
 
      <td><input type="text" name="TR_Note" id="TR_Note" value="<?php echo $row_result["TR_Note"];?>"></td>
  

  
	
    </tr>

  </table>	
  
  
  <tr>
      <td colspan="2" align="center">
      <input name="SP_Blno" type="hidden" value="<?php echo $row_result["SP_Blno"];?>">
      <input name="action" type="hidden" value="update">
      <input type="submit" name="button" id="button" value="更新資料">
      <input type="reset" name="button2" id="button2" value="重新填寫">
      </td>
    </tr>
	
	
  
</form>

<script src="./js/vital-ui-kit.js"></script>  <!-- script 一些功能加入用 EX: table all --> 
</body>
</html>