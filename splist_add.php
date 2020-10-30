<?php
if(isset($_POST["action"])&&($_POST["action"]=="add")){
    include("connMysqlObj.php");
    if (!@mysqli_select_db($db_link, "SaleSystem")) die("資料庫選擇失敗！");
    $sql_query = "INSERT INTO splist (SP_Blno, CU_No,PD_No, SP_Qty, TR_Note) VALUES (";
    $sql_query .= "'".$_POST["SP_Blno"]."',";
    $sql_query .= "'".$_POST["CU_No"]."',";
    $sql_query .= "'".$_POST["PD_No"]."',";
    $sql_query .= "'".$_POST["SP_Qty"]."',";
    $sql_query .= "'".$_POST["TR_Note"]."')";

    mysqli_query($db_link, $sql_query);
    //重新導向回到主畫面
    header("Location: splist.php");
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
<p align="center"><a href="splist.php">回主畫面</a></p>
<form action="" method="post" name="formAdd" id="formAdd">

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
            <td><input type="text" name="SP_Blno" id="SP_Blno"></td>

            <td><input type="text" name="CU_No" id="CU_No"></td>

            <td><input type="text" name="PD_No" id="PD_No"></td>

            <td><input type="text" name="SP_Qty" id="SP_Qty"></td>

            <td><input type="text" name="TR_Note" id="TR_Note"></td>
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