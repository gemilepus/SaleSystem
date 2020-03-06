<?php
date_default_timezone_set("Asia/Shanghai");
echo "現在時間 " . date("h:i:sa");
?>


<?php
    $dbhost = '127.0.0.1';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'pet';
    $connection = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname);
    mysqli_query($connection,"SET NAMES 'utf8'");//設定語系
	$sql_query = "SELECT * FROM class";
   /* 執行SQL statement */
    $result = mysqli_query($connection,$sql_query); 

    /* while 迴圈撈取資料 */
	echo "<hr/>";
    while($row_result = mysqli_fetch_row($result)){
    //echo $row['codeA']."<br>";
        foreach($row_result as $item => $value){
			echo $item . "=" . $value . "<br>";
		}			
         echo "<hr/>";
	}
	
	$connection -> close();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />

<title>::1233211234567::</title>

<link rel="stylesheet" href="./css/vital-ui-kit.css">
<link rel="stylesheet" href="./css/styleguide.css">

</head>
<body>

<div class="sg-container">
      <div class="sg-row"> 
	
<button class="sg-btn sg-btn-primary"  onclick="history.back()" >上一頁</button> <button class="sg-btn sg-btn-primary" onclick="javascript:window.location.reload()" >重新整理</button> <!-- Onclick --> 




<button class="sg-btn sg-btn-primary"  onclick=<?php
date_default_timezone_set("Asia/Shanghai");
echo "現在時間 " . date("h:i:sa");

?> >上一頁</button> <button class="sg-btn sg-btn-primary" onclick="javascript:window.location.reload()" >重新整理</button> <!-- Onclick --> 


<table class="sg-table sg-table--striped sg-table--bordered sg-table--bordered__vertical">
	<caption>PHP table test</caption>
	<thead>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
		</tr>
	</thead>
<?php

    $dbhost = '127.0.0.1';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'pet';
    $connection = mysqli_connect('localhost', 'root', '', 'pet');
    mysqli_query($connection,"SET NAMES 'utf8'");//設定語系
	$sql_query = "SELECT * FROM class";
   /* 執行SQL statement */
    $result = mysqli_query($connection,$sql_query); 

    /* while 迴圈撈取資料 */
	
	echo "<hr/>";
	
	
	
    while($row_result = mysqli_fetch_row($result)){
    //echo $row['codeA']."<br>";
	    echo "<thead>";
	    echo "<tr>";
        foreach($row_result as $item => $value){
			echo "<th>";
			echo $item . "=" . $value ;
			echo "</th>";
		}			
         echo "</tr>";
		 echo "</thead>";
	}
	
	$connection -> close();
?>

	</tbody>
</table>


<table class="sg-table sg-table--striped sg-table--bordered sg-table--bordered__vertical">
	<caption>Caption</caption>
	<thead>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Jennifer  <?php date_default_timezone_set("Asia/Shanghai"); echo "現在時間" . date("h:i:sa");?>   </td>
			<td>30</td>
			<td>Female</td>
			<th> <button class="sg-btn sg-btn-primary" >修改 </button> <button class="sg-btn sg-btn-primary">刪除</button>  </th>
			
		</tr>
		<tr>
			<td>Oliver</td>
			<td>18</td>
			<td>Male</td>
			<th> <button class="sg-btn sg-btn-primary">修改</button> <button class="sg-btn sg-btn-primary">刪除</button>  </th>
		</tr>
		<tr>
			<td>Jordan</td>
			<td>53</td>
			<td>Male</td>
			<th> <button class="sg-btn sg-btn-primary">修改</button> <button class="sg-btn sg-btn-primary">刪除</button>  </th>
		</tr>
	</tbody>
</table>
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
<table class="sg-table sg-table--responsive sg-table--bordered  sg-table--striped  sg-table--highlight">
<caption>PHP table test</caption>
<thead>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Age</th>
		</tr>
	</thead>
<tbody>
<?php

    $dbhost = '127.0.0.1';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'pet';
    $connection = mysqli_connect('localhost', 'root', '', 'pet');
    mysqli_query($connection,"SET NAMES 'utf8'");//設定語系
	$sql_query = "SELECT * FROM class";
   /* 執行SQL statement */
    $result = mysqli_query($connection,$sql_query); 

    /* while 迴圈撈取資料 */
	
    while($row_result = mysqli_fetch_row($result)){
	    echo "<thead>";
	    echo "<tr>";
        foreach($row_result as $item => $value){
			echo "<td>";
			echo $item . "=" . $value ;
			echo "</td>";
		}			
		 echo "<td> <button class='sg-btn sg-btn-primary'>修改</button> <button class='sg-btn sg-btn-primary'>刪除</button>  </td>";
		 // echo "" == '' 
         echo "</tr>";
		 echo "</thead>";
	}
	
	$connection -> close();
?>

	</tbody>
</table>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<table class="sg-table sg-table--responsive sg-table--bordered  sg-table--striped  sg-table--highlight">
	<caption>Caption</caption>
	<thead>
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td> <form> <input type="text" value="文字方塊放入的文字" name="欄位名稱"></form> </td>
			<td>30</td>
			<td>Female</td>
		</tr>
		<tr>
			<td> <div class="sg-input-item"><input type="text" value="文字方塊放入的文字" placeholder="Full Name" class="sg-input"></div></td>
			<td>18</td>
			<td>Male</td>
		</tr>
		<tr>
			<td>Jordan</td>
			<td>53</td>
			<td>Male</td>
		</tr>
		<tr>
			<td>Neil</td>
			<td>24</td>
			<td>Male</td>
		</tr>
		<tr>
			<td>Grace</td>
			<td>18</td>
			<td>Female</td>
		</tr>
		<tr>
			<td>Evan</td>
			<td>27</td>
			<td>Male</td>
		</tr>
		<tr>
			<td>Woody</td>
			<td>20</td>
			<td>Male</td>
		</tr>
		<tr>
			<td>Jane</td>
			<td>18</td>
			<td>Female</td>
		</tr>
		<tr>
			<td>Robert</td>
			<td>21</td>
			<td>Male</td>
		</tr>
	</tbody>
</table>
		
		
		
		
		
		
		<div class="demo-hero-card sg-card sg-card--hero sg-shadow--blur__1dp">
	<div class="sg-card-header" style="background-image: url('./img/card-header-pic.png');">
		<h4>Header</h4>
	</div>
	<div class="sg-card-container sg-scroll--y">
		<div class="title">
			Title
		</div>
		<div class="sub-title">
			Subtitle
		</div>
		<p>
			Lorem ipsum dolor sit amet, sea oblique aliquam oportere ea, id dico interesset eam. Eu eum quem velit verterem, amet dicat quaeque ad est. Lorem ipsum dolor sit amet, sea oblique aliquam oportere ea, id dico interesset eam. Eu eum quem velit verterem,
			amet dicat quaeque ad est. Lorem ipsum dolor sit amet, sea oblique aliquam oportere ea, id dico interesset eam. Eu eum quem velit verterem, amet dicat quaeque ad est.
		</p>
	</div>
	<div class="sg-card-footer sg-cell-group sg-cell--fixed">
		<div class="sg-cell"><button class="sg-btn sg-btn-default sg-card-footer-btn--primary">Confirm</button></div>
		<div class="sg-cell"><button class="sg-btn sg-btn-default">Cancel</button></div>
	</div>
</div>
		
		
		
		
		
		
		
		
		
		
		<table class="sg-table sg-table--headfixed sg-table--highlight sg-table--bordered sg-table--bordered__th-bordered">
	<caption>Caption</caption>
	<thead>
		<tr>
			<th class="sg-table-th--headfixed">
				<input type="checkbox" class="sg-checkbox" name="checkbox-table-all" id="checkbox-table-all">
				<label class="demo-checkbox-inline sg-checkbox-label" for="checkbox-table-all"></label>
			</th>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Description</th>
			<th>others</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>
				<input type="checkbox" class="sg-checkbox" name="checkbox-table" id="checkbox-table-td-1">
				<label class="demo-checkbox-inline sg-checkbox-label" for="checkbox-table-td-1"></label>
			</td>
			<td>Jennifer</td>
			<td>30</td>
			<td>Female</td>
			<td>Cute</td>
			<td>none</td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" class="sg-checkbox" name="checkbox-table" id="checkbox-table-td-2">
				<label class="demo-checkbox-inline sg-checkbox-label" for="checkbox-table-td-2"></label>
			</td>
			<td>Oliver</td>
			<td>18</td>
			<td>Male</td>
			<td>Cute</td>
			<td>none</td>
		</tr>
		<tr>
			<td>
				<input type="checkbox" class="sg-checkbox" name="checkbox-table" id="checkbox-table-td-3">
				<label class="demo-checkbox-inline sg-checkbox-label" for="checkbox-table-td-3"></label>
			</td>
			<td>Jordan</td>
			<td>53</td>
			<td>Male</td>
			<td>Cute</td>
			<td>none</td>
		</tr>
	</tbody>
</table>
		
		
		
		
		
		<div class="demo-icon-card sg-card sg-card--icon sg-card--icon__left sg-shadow--blur__1dp">
	<div class="sg-card-header">
		<h4><i class="icon-lock" style="color:#EB5000;"></i></h4>
	</div>
	<div class="sg-card-container sg-scroll--y">
		<div class="title">
			Account locked out
		</div>
		<p>
			You have entered an incorrect password 5 times, cannot be log on to in 15 minutes
		</p>
	</div>
	<div class="sg-card-footer sg-cell-group sg-cell--fixed">
		<div class="sg-cell"><button class="sg-btn sg-btn-default sg-card-footer-btn--primary">Confirm</button></div>
	</div>
</div>
		
		
		
		<br><!-- 換行 --> 
		<br>
		
		
		
		
		<div class="demo-icon-card sg-card sg-card--icon sg-shadow--blur__1dp">
	<div class="sg-card-header">
		<h4><i class="icon-thumbs-up" style="color:#0e86fe;"></i></h4>
	</div>
	<div class="sg-card-container sg-scroll--y">
		<div class="title">
			Congrats!
		</div>
		<p>
			Let’s Get Started
		</p>
	</div>
	<div class="sg-card-footer sg-cell-group sg-cell--fixed">
		<div class="sg-cell"><button class="sg-btn sg-btn-default sg-card-footer-btn--primary">Confirm</button></div>
	</div>
</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	</div>
</div>




  <script src="./js/vital-ui-kit.js"></script>  <!-- script 一些功能加入用 EX: table all --> 

</body>
</html>