<?php 




	header("Content-Type: text/html; charset=utf-8");
    include("connMysqlObj.php");
	$seldb = @mysqli_select_db($db_link, "SaleSystem");
	if (!$seldb) die("資料庫選擇失敗！");
	
	
	
$sql_query = "UPDATE 
cuquout INNER JOIN splist INNER JOIN rcpay ON splist.CU_No = rcpay.CU_No
SET rcpay.CR_Spamt =  rcpay.CR_Spamt+splist.SP_Qty*cuquout.PD_Pr, 
rcpay.CR_Upamt = rcpay.CR_Upamt+splist.SP_Qty*cuquout.PD_Pr, 
splist.TR_Note = 'T' WHERE splist.TR_Note != 'T'
";

// $sql_query = "UPDATE 
// cuquout INNER JOIN splist INNER JOIN rcpay ON splist.CU_No = rcpay.CU_No
// SET rcpay.CR_Spamt =  rcpay.CR_Spamt+Splist.SP_Qty*cuquout.PD_Pr, 
// rcpay.CR_Upamt = rcpay.CR_Upamt+Splist.SP_Qty*cuquout.PD_Pr, 
// Splist.TR_Note = 'T' WHERE (((Splist.TR_Note) Is Null))
// ";


	mysqli_query($db_link, $sql_query);
	//重新導向回到主畫面
	header("Location: index2.php");


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width/2,initial-scale=1,user-scalable=no" />

<title> 系統 </title>

<link rel="stylesheet" href="./css/vital-ui-kit.css">
<link rel="stylesheet" href="./css/styleguide.css">

</head>
<body>


		

<caption>   Loading.......................................</caption>


	
		
		





		
		
		
			
		

 </div>
</div>
  <script src="./js/vital-ui-kit.js"></script>  <!-- script 一些功能加入用 EX: table all --> 
</body>
</html>