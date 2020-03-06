<?php
	header("Content-Type: text/html; charset=utf-8");
    include("connMysqlObj.php");
	$seldb = @mysqli_select_db($db_link, "SaleSystem");
	if (!$seldb) die("資料庫選擇失敗！");
	
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
	$sql_query = "SELECT * FROM rcdtl";
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
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-TW" class="sg-layout-body">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width/2,initial-scale=1,user-scalable=no" />

<title> 管理系統 </title>

<link rel="stylesheet" href="./css/vital-ui-kit.css">
<link rel="stylesheet" href="./css/styleguide.css">

</head>
<body><div class="sg-ap-wrapper">
<div class="sg-ap-box">
<div class="sg-ap-header"></div>

<div class="sg-container">
  <div class="sg-row"> 
	
	    <br><!-- 換行 --> 
		<br>
		<br><!-- 換行 --> 
		<br>
	
<button class="sg-btn sg-btn-primary"  onclick="history.back()" >上一頁</button> <button class="sg-btn sg-btn-primary" onclick="javascript:window.location.reload()" >重新整理</button> <!-- Onclick -->
		
        <br><!-- 換行 --> 
		<br>		
		


	<div class="sg-btn-group">
		<button class="sg-btn sg-btn-default"><a href="index2.php">客戶資料表</a></button>
		<button class="sg-btn sg-btn-default"><a href="spbill.php">銷貨單號表</a></button> 
		<button class="sg-btn sg-btn-default"><a href="splist.php">銷貨表</a></button>
		<button class="sg-btn sg-btn-default"><a href="rcdtl.php">收款表</a></button>
		<button class="sg-btn sg-btn-default"><a href="cuquout.php">商品報價表</a></button>
		<button class="sg-btn sg-btn-default"><a href="rcpay.php">應收帳款表</a></button>
	</div>
	
	<br><!-- 換行 --> 
    <br>	
	<button class="sg-btn sg-btn-flat-default"><a href="rcdtl_add.php">新增資料</a></button>	
		

<table class="sg-table sg-table--responsive sg-table--bordered  sg-table--striped  sg-table--highlight">
<caption>收款表</caption>
<thead>
		<tr>
			<th>收款單號</th>
			<th>客戶編號</th>
			<th>收款日期</th>
			<th>金額</th>
			<th>支票號碼</th>
			<th>轉擋註記</th>
		    <th>更新時間</th>
		</tr>
	</thead>
<tbody>
<?php
    //$dbhost = '127.0.0.1';
    //$dbuser = 'root';
   // $dbpass = '';
   // $dbname = 'SaleSystem';
   // $connection = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname);
   // mysqli_query($connection,"SET NAMES 'utf8'");//設定語系
	//$sql_query = "SELECT * FROM cuinfo";
    /* 執行SQL statement */
    //$result = mysqli_query($connection,$sql_query); 
    /* while 迴圈撈取資料 */
	
	/*while($row_result=mysqli_fetch_assoc($result)){
    //while($row_result = mysqli_fetch_row($result)){
	    echo "<thead>";
	    echo "<tr>";
        foreach($row_result as $item => $value){
			echo "<td>";
			echo $value ;
			echo "</td>";
		}			

		 echo "<td> <button class='sg-btn sg-btn-primary'><a href='update.php?id=".$row_result["CU_No"]."'>修改</a> </button> <button class='sg-btn sg-btn-primary'><a href='delete.php?id=".$row_result["CU_No"]."'>刪除</a> </button>  </td>";
		 
		 // echo "" == '' 
         echo "</tr>";
		 echo "</thead>";
	}*/
	
	//$connection -> close();
	
	
	while($row_result=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>".$row_result["CS_Blno"]."</td>";
		echo "<td>".$row_result["CU_No"]."</td>";
		echo "<td>".$row_result["CS_Date"]."</td>";
		echo "<td>".$row_result["CS_Amt"]."</td>";
		echo "<td>".$row_result["RD_Amt"]."</td>";
		echo "<td>".$row_result["TR_Note"]."</td>";
		echo "<td>".$row_result["UP_Time"]."</td>";
	
		//echo "<div class='sg-btn-group'>";
		//echo "<td><button class='sg-btn sg-btn-default'>";
		echo "<td><a href='rcdtl_update.php?id=".$row_result["CS_Blno"]."'>修改</a> ";
		//echo "</button>";
		
		//echo "<button class='sg-btn sg-btn-default'>";
		echo "<a href='rcdtl_delete.php?id=".$row_result["CS_Blno"]."'>刪除</a>";
		//echo "</button></td>";
		//echo "</div>";
		echo "</tr>";
	}
	
?>

	
		
		
		
<!-- 頁數顯示  TABLE --> 	
</table>

<br><!-- 換行 --> <span class="sg-input-label">  共</span>
<button class="sg-btn sg-btn-default sg-btn-square">
<?php 

echo $total_records;

?>
</button>	
<span class="sg-input-label"> 筆</span>


	<br><!-- 換行 --> 
    <br>	




<table border="0" align="center">
  <tr>
    <?php if ($num_pages > 1) { // 若不是第一頁則顯示 ?>
    <td><a href="rcdtl.php?page=1">第一頁</a></td>
    <td><a href="rcdtl.php?page=<?php echo $num_pages-1;?>">上一頁</a></td>
    <?php } ?>
    <?php if ($num_pages < $total_pages) { // 若不是最後一頁則顯示 ?>
    <td><a href="rcdtl.php?page=<?php echo $num_pages+1;?>">下一頁</a></td>
    <td><a href="rcdtl.php?page=<?php echo $total_pages;?>">最後頁</a></td>
    <?php } ?>
  </tr>
</table>
<table border="0" align="center">
  <tr>
  	<td>
  	
	  <div class="demo-btn-paragraph">
  	  <?php
  	  for($i=1;$i<=$total_pages;$i++){
  	  	  if($i==$num_pages){
			  echo "<button class='sg-btn sg-btn-default sg-btn-circle'>";
			  
  	  	  	  echo $i." ";
			  
			  echo "</button>";
  	  	  }else{
			  echo "<button class='sg-btn sg-btn-default sg-btn-circle'>";
			  
  	  	      echo "<a href=\"rcdtl.php?page={$i}\" style=\"text-decoration:none;color:red;\">{$i}</a> ";
			      // "<a href=\"http://www.wibibi.com\" target=\"_blank\" style=\"text-decoration:none;color:red;\">Wibibi 網頁設計教學百科</a>";
			  echo "</button>"; 
  	  	  }
  	  }
	  
	 // print "<font size=\"1\">這是大小為 1 的文字</font><br>";
	  
	  
  	  ?>
	  </div>
  	</td>
  </tr>
</table>		
		
		
   </div>
 </div>			
		

 </div>
</div>
  <script src="./js/vital-ui-kit.js"></script>  <!-- script 一些功能加入用 EX: table all --> 
</body>
</html>