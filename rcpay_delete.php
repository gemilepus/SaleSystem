<?php
include("connMysqlObj.php");
if (!@mysqli_select_db($db_link, "SaleSystem")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="delete")){
    $sql_query = "DELETE FROM rcpay WHERE CU_No=".$_POST["CU_No"];
    mysqli_query($db_link, $sql_query);
    //重新導向回到主畫面
    header("Location: rcpay.php");
}
$sql_db = "SELECT * FROM rcpay WHERE CU_No=".$_GET["id"];
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
<p align="center"><a href="rcpay.php">回主畫面</a></p>
<form action="" method="post" name="formDel" id="formDel">
    <table class="sg-table sg-table--responsive sg-table--bordered  sg-table--striped  sg-table--highlight">

        <thead>
        <tr>
            <th>客戶編號</th>
            <th>前期結欠</th>
            <th>本期出貨</th>
            <th>本期收款</th>
            <th>累計應收</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><input type="text" name="CU_No" id="CU_No" value="<?php echo $row_result["CU_No"];?>"></td>

            <td><input type="text" name="PR_Upamt" id="PR_Upamt" value="<?php echo $row_result["PR_Upamt"];?>"></td>

            <td><input type="text" name="CR_Spamt" id="CR_Spamt" value="<?php echo $row_result["CR_Spamt"];?>"></td>

            <td><input type="text" name="CR_Csamt" id="CR_Csamt" value="<?php echo $row_result["CR_Csamt"];?>"></td>

            <td><input type="text" name="CR_Upamt" id="CR_Upamt" value="<?php echo $row_result["CR_Upamt"];?>"></td>
        </tr>
    </table>

    <tr>
        <td colspan="2" align="center">
            <input name="CU_No" type="hidden" value="<?php echo $row_result["CU_No"];?>">
            <input name="action" type="hidden" value="delete">
            <input type="submit" name="button" id="button" value="確定刪除嗎？">
        </td>
    </tr>

</form>
<script src="./js/vital-ui-kit.js"></script>
</body>
</html>