<?php
//檢查是否經過登入
if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
    header("Location: index.php");
}
if(isset($_POST["action"])&&($_POST["action"]=="add")){
    include("connMysqlObj.php");
    if (!@mysqli_select_db($db_link, "SaleSystem")) die("資料庫選擇失敗！");
    $sql_query = "INSERT INTO cuinfo (CU_No, CU_Name, CU_Tel, CU_MTel, CU_Email, CU_Staf, CU_Adrs, CU_Txno) VALUES (";
    $sql_query .= "'".$_POST["CU_No"]."',";
    $sql_query .= "'".$_POST["CU_Name"]."',";
    $sql_query .= "'".$_POST["CU_Tel"]."',";
    $sql_query .= "'".$_POST["CU_Mtel"]."',";
    $sql_query .= "'".$_POST["CU_Email"]."',";
    $sql_query .= "'".$_POST["CU_Staf"]."',";
    $sql_query .= "'".$_POST["CU_Adrs"]."',";
    $sql_query .= "'".$_POST["CU_Txno"]."')";
    mysqli_query($db_link, $sql_query);
    //重新導向回到主畫面
    header("Location: index2.php");
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
<p align="center"><a href="index2.php">回主畫面</a></p>
<form action="" method="post" name="formAdd" id="formAdd">
    <table class="sg-table sg-table--responsive sg-table--bordered  sg-table--striped  sg-table--highlight">

        <thead>
        <tr>
            <th>公司編號</th>
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
            <td><input type="text" name="CU_No" id="CU_No"></td>

            <td><input type="text" name="CU_Name" id="CU_Name"></td>

            <td><input type="text" name="CU_Tel" id="CU_Tel"></td>

            <td><input type="text" name="CU_Tel" id="CU_Mtel"></td>

            <td><input type="text" name="CU_Email" id="CU_Email"></td>

            <td><input type="text" name="CU_Staf" id="CU_Staf"></td>

            <td><input name="CU_Adrs" type="text" id="CU_Adrs"></td>

            <td><input name="CU_Txno" type="text" id="CU_Txno"></td>
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
<script src="./js/vital-ui-kit.js"></script>
</body>
</html>