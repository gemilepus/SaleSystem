<?php 
include("connMysqlObj.php");
if (!@mysqli_select_db($db_link, "SaleSystem")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="update")){	
	$sql_query = "UPDATE cuquout SET ";
	$sql_query .= "PD_No='".$_POST["PD_No"]."',";
	$sql_query .= "PD_Name='".$_POST["PD_Name"]."',";
	$sql_query .= "PD_Pr='".$_POST["PD_Pr"]."',";
	$sql_query .= "PD_Note='".$_POST["PD_Note"]."'";

	$sql_query .= "WHERE PD_No=".$_POST["PD_No"];	
	mysqli_query($db_link, $sql_query);
	//重新導向回到主畫面
	header("Location: cuquout.php");
}
$sql_db = "SELECT * FROM cuquout WHERE PD_No=".$_GET["id"];
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
<p align="center"><a href="cuquout.php">回主畫面</a></p>
<form action="" method="post" name="formFix" id="formFix">





<table class="sg-table sg-table--responsive sg-table--bordered  sg-table--striped  sg-table--highlight">

<thead>
		<tr>
			<th>產品編號</th>
			<th>產品名稱</th>
			<th>單價</th>
			<th>備註</th>
			
		</tr>
	</thead>
<tbody>


    <tr>
      
   
   <td><input type="text" name="PD_No" id="PD_No" value="<?php echo $row_result["PD_No"];?>"></td>
  
      <td><input type="text" name="PD_Name" id="PD_Name" value="<?php echo $row_result["PD_Name"];?>"></td>
  
     <td><input type="text" name="PD_Pr" id="PD_Pr" value="<?php echo $row_result["PD_Pr"];?>"></td>

   
     <td><input name="PD_Note" type="text" id="PD_Note" value="<?php echo $row_result["PD_Note"];?>"></td>
    

	
    </tr>

  </table>	
  
  
  <tr>
      <td colspan="2" align="center">
      <input name="PD_No" type="hidden" value="<?php echo $row_result["PD_No"];?>">
      <input name="action" type="hidden" value="update">
      <input type="submit" name="button" id="button" value="更新資料">
      <input type="reset" name="button2" id="button2" value="重新填寫">
      </td>
    </tr>
	
	
  
</form>

<script src="./js/vital-ui-kit.js"></script>  <!-- script 一些功能加入用 EX: table all --> 
</body>
</html>