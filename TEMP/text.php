<?php
include("connMysqlObj.php");
if (!@mysqli_select_db($db_link, "SaleSystem")) die("資料庫選擇失敗！");
	//預設每頁筆數


?>
<html lang="zh-TW" >
    <head>
       <meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width/2,initial-scale=1,user-scalable=no" />

<title> 管理系統 </title>

<link rel="stylesheet" href="./css/vital-ui-kit.css">
<link rel="stylesheet" href="./css/styleguide.css">
    </head>
    <body>
<form action="" method="post">  
Search: <input type="text" id="term" name="term" /><br />  
<input type="submit" value="Submit" />  
</form>  
<?php
if (!empty($_REQUEST['term'])) {

	include("connMysqlObj.php");
    if (!@mysqli_select_db($db_link, "SaleSystem")) die("資料庫選擇失敗！");

	
	//預設每頁筆數
	$pageRow_records = 10;
	//預設頁數
	$num_pages = 1;
	//若已經有翻頁，將頁數更新
	if (isset($_GET['page'])) {
	  $num_pages = $_GET['page'];
	}
	//本頁開始記錄筆數 = (頁數-1)*每頁記錄筆數
	$startRow_records = ($num_pages -1) * $pageRow_records;
	//未加限制顯示筆數的SQL敘述句


	 //$sql_query = "SELECT * FROM cuinfo WHERE ";
	 //$sql_query .= "CU_No=".$_POST["term"];

	 
	 $sql_query = "SELECT * FROM "
	 $sql_query .= .$_GET["id"];
	 $sql_query .= "CU_No=".$_POST["term"];
	
	 
	 
	 
	 
	
	//加上限制顯示筆數的SQL敘述句，由本頁開始記錄筆數開始，每頁顯示預設筆數
	$sql_query_limit = $sql_query." LIMIT ".$startRow_records.", ".$pageRow_records;
	//以加上限制顯示筆數的SQL敘述句查詢資料到 $result 中
	$result = mysqli_query($db_link, $sql_query_limit);
	//以未加上限制顯示筆數的SQL敘述句查詢資料到 $all_result 中
	$all_result = mysqli_query($db_link, $sql_query);
	//計算總筆數
	$total_records = mysqli_num_rows($all_result);
	//計算總頁數=(總筆數/每頁筆數)後無條件進位。
	$total_pages = ceil($total_records/$pageRow_records);
	
	
	while($row_result=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row_result["CU_No"]."</td>";
		echo "<td>".$row_result["CU_Name"]."</td>";
		echo "<td>".$row_result["CU_Tel"]."</td>";
		echo "<td>".$row_result["CU_Mtel"]."</td>";
		echo "<td>".$row_result["CU_Email"]."</td>";
		echo "<td>".$row_result["CU_Staf"]."</td>";
		echo "<td>".$row_result["CU_Adrs"]."</td>";
	    echo "<td>".$row_result["CU_Txno"]."</td>";
		//echo "<div class='sg-btn-group'>";
		//echo "<td><button class='sg-btn sg-btn-default'>";
		echo "<td><a href='update.php?id=".$row_result["CU_No"]."'>修改</a> ";
		//echo "</button>";
		
		//echo "<button class='sg-btn sg-btn-default'>";
		echo "<a href='delete.php?id=".$row_result["CU_No"]."'>刪除</a>";
		//echo "</button></td>";
		//echo "</div>";
		echo "</tr>";
	}

}
?>
    </body>
</html>