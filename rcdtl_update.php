<?php
include("connMysqlObj.php");
if (!@mysqli_select_db($db_link, "SaleSystem")) die("資料庫選擇失敗！");
if(isset($_POST["action"])&&($_POST["action"]=="update")){
    $sql_query = "UPDATE rcdtl SET ";
    $sql_query .= "CS_Blno='".$_POST["CS_Blno"]."',";
    $sql_query .= "CU_No='".$_POST["CU_No"]."',";
    $sql_query .= "CS_Date='".$_POST["CS_Date"]."',";
    $sql_query .= "CS_Amt='".$_POST["CS_Amt"]."',";
    $sql_query .= "RD_Amt='".$_POST["RD_Amt"]."',";
    $sql_query .= "TR_Note='".$_POST["TR_Note"]."'";

    $sql_query .= "WHERE CS_Blno=".$_POST["CS_Blno"];
    mysqli_query($db_link, $sql_query);
    //重新導向回到主畫面
    header("Location: rcdtl.php");
}
$sql_db = "SELECT * FROM rcdtl WHERE CS_Blno=".$_GET["id"];
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
<p align="center"><a href="rcdtl.php">回主畫面</a></p>
<form action="" method="post" name="formFix" id="formFix">
    <table class="sg-table sg-table--responsive sg-table--bordered  sg-table--striped  sg-table--highlight">

        <thead>
        <tr>
            <th>收款單號</th>
            <th>客戶編號</th>
            <th>收款日期</th>
            <th>金額</th>
            <th>支票號碼</th>
            <th>轉擋註記</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td><input type="text" name="CS_Blno" id="CS_Blno" value="<?php echo $row_result["CS_Blno"];?>"></td>

            <td><input type="text" name="CU_No" id="CU_No" value="<?php echo $row_result["CU_No"];?>"></td>

            <td><input type="text" name="CS_Date" id="CS_Date" value="<?php echo $row_result["CS_Date"];?>"></td>

            <td><input type="text" name="CS_Amt" id="CS_Amt" value="<?php echo $row_result["CS_Amt"];?>"></td>

            <td><input type="text" name="RD_Amt" id="RD_Amt" value="<?php echo $row_result["RD_Amt"];?>"></td>

            <td><input name="TR_Note" type="text" id="TR_Note" value="<?php echo $row_result["TR_Note"];?>"></td>
        </tr>
    </table>

    <tr>
        <td colspan="2" align="center">
            <input name="CS_Blno" type="hidden" value="<?php echo $row_result["CS_Blno"];?>">
            <input name="action" type="hidden" value="update">
            <input type="submit" name="button" id="button" value="更新資料">
            <input type="reset" name="button2" id="button2" value="重新填寫">
        </td>
    </tr>

</form>
<script src="./js/vital-ui-kit.js"></script>
</body>
</html>