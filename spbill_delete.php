<?php
include("connMysqlObj.php");
if (!@mysqli_select_db($db_link, "SaleSystem")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="delete")){
    $sql_query = "DELETE FROM spbill WHERE SP_Blno=".$_POST["SP_Blno"];
    mysqli_query($db_link, $sql_query);
    //重新導向回到主畫面
    header("Location: spbill.php");
}
$sql_db = "SELECT * FROM spbill WHERE SP_Blno=".$_GET["id"];
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
<p align="center"><a href="spbill.php">回主畫面</a></p>
<form action="" method="post" name="formDel" id="formDel">
    <table class="sg-table sg-table--responsive sg-table--bordered  sg-table--striped  sg-table--highlight">

        <table class="sg-table sg-table--responsive sg-table--bordered  sg-table--striped  sg-table--highlight">

            <thead>
            <tr>
                <th>出貨單號</th>
                <th>客戶編號</th>
                <th>出貨日期</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="text" name="SP_Blno" id="SP_Blno" value="<?php echo $row_result["SP_Blno"];?>"></td>

                <td><input type="text" name="CU_No" id="CU_No" value="<?php echo $row_result["CU_No"];?>"></td>

                <td><input type="text" name="CS_Date" id="SP_Date" value="<?php echo $row_result["SP_Date"];?>"></td>
            </tr>

        </table>

        <tr>
            <td colspan="2" align="center">
                <input name="CS_Blno" type="hidden" value="<?php echo $row_result["SP_Blno"];?>">
                <input name="action" type="hidden" value="delete">
                <input type="submit" name="button" id="button" value="確定刪除嗎？">
            </td>
        </tr>

</form>
<script src="./js/vital-ui-kit.js"></script>
</body>
</html>