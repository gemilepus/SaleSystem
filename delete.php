<?php
include("connMysqlObj.php");
if (!@mysqli_select_db($db_link, "SaleSystem")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="delete")){
    $sql_query = "DELETE FROM `cuinfo` WHERE `CU_No`=".$_POST["CU_No"];
    mysqli_query($db_link, $sql_query);
    //重新導向回到主畫面
    header("Location: index2.php");
}
$sql_db = "SELECT * FROM `cuinfo` WHERE CU_No=".$_GET["id"];
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
<h1 align="center">資料管理系統 - 刪除資料</h1>
<p align="center"><a href="index2.php">回主畫面</a></p>
<form action="" method="post" name="formDel" id="formDel">
    <table class="sg-table sg-table--responsive sg-table--bordered  sg-table--striped  sg-table--highlight">
        <caption>客戶資料表</caption>
        <thead>
        <tr>
            <th>公司名稱</th>
            <th>電話</th>
            <th>行動電話</th>
            <th>E-mail</th>
            <th>負責人</th>
            <th>地址</th>
            <th>統一編號</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td><input type="text" name="CU_Name" id="CU_Name" value="<?php echo $row_result["CU_Name"];?>"></td>
            <td><input type="text" name="CU_Tel" id="CU_Tel" value="<?php echo $row_result["CU_Tel"];?>"></td>
            <td><input type="text" name="CU_Mtel" id="CU_Mtel" value="<?php echo $row_result["CU_Mtel"];?>"></td>
            <td><input type="text" name="CU_Email" id="CU_Email" value="<?php echo $row_result["CU_Email"];?>"></td>
            <td><input type="text" name="CU_Staf" id="CU_Staf" value="<?php echo $row_result["CU_Staf"];?>"></td>
            <td><input name="CU_Adrs" type="text" id="CU_Adrs" value="<?php echo $row_result["CU_Adrs"];?>"></td>
            <td><input name="CU_Txno" type="text" id="CU_Txno" value="<?php echo $row_result["CU_Txno"];?>"></td>
        </tr>

    </table>

    <tr>
        <td colspan="2" align="center">
            <input name="CU_No" type="hidden" value="<?php echo $row_result["CU_No"];?>">
            <input name="action" type="hidden" value="delete">
            <input type="submit" name="button" id="button" value="確定刪除這筆資料嗎？">
        </td>
    </tr>

</form>
<script src="./js/vital-ui-kit.js"></script>
</body>
</html>