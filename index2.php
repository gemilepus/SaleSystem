<?php
require_once("connMysql.php");
session_start();
//檢查是否經過登入
if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]=="")){
    header("Location: index2.php");
}
//執行登出動作
if(isset($_GET["logout"]) && ($_GET["logout"]=="true")){
    unset($_SESSION["loginMember"]);
    unset($_SESSION["memberLevel"]);
    header("Location: index.php");
}
//繫結登入會員資料
$query_RecMember = "SELECT * FROM memberdata WHERE m_username = '{$_SESSION["loginMember"]}'";
$RecMember = $db_link->query($query_RecMember);
$row_RecMember=$RecMember->fetch_assoc();
?>

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
$sql_query = "SELECT * FROM cuinfo";
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
<body>
<div class="sg-ap-wrapper">
    <div class="sg-ap-box">
        <div class="sg-ap-header"></div>
        <br>
        <br>
        <br>
        <br>
        <table width="300" height="80" align="right">
            　<tr>
                <td align="center"></td>
            </tr>
            <td align="center"><button class="sg-btn sg-btn-alarm"><a href="?logout=true"  style="color:red";>登出</a></button></td>
            <tr>
            </tr>
        </table>
        <br>
        <br>
        <button class="sg-btn sg-btn-primary"  onclick="history.back()" >上一頁</button> <button class="sg-btn sg-btn-primary" onclick="javascript:window.location.reload()" >重新整理</button>
        <br>
        <br>
        <div class="sg-btn-group">
            <button class="sg-btn sg-btn-default"><a href="index2.php">客戶資料表</a></button>
            <button class="sg-btn sg-btn-default"><a href="spbill.php">銷貨表</a></button>
            <button class="sg-btn sg-btn-default"><a href="splist.php">訂單表</a></button>
            <button class="sg-btn sg-btn-default"><a href="rcdtl.php">收款表</a></button>
            <button class="sg-btn sg-btn-default"><a href="cuquout.php">商品報價表</a></button>
            <button class="sg-btn sg-btn-default"><a href="rcpay.php">應收帳款表</a></button>
        </div>
        <br>
        <br>
        <br>
        <br>
        <button class="sg-btn sg-btn-flat-default"><a href="Function01.php">每日出貨完 Function</a></button>
        <button class="sg-btn sg-btn-flat-default"><a href="Function02.php">每日收款完 Function</a></button>
        <button class="sg-btn sg-btn-flat-default"><a href="Function03.php">月底結帳 Function</a></button>
        <br>
        <br>
        <button class="sg-btn sg-btn-flat-default"><a href="add.php">新增資料</a></button>
        <br>
        <br>
        <br>
        <ul class="demo-button-menu sg-button-menu">
            <li class="sg-menu--list">
                <a href="#" class="sg-menu--item">搜尋</a>
                <ul class="sg-sub-menu">
                    <li>
                        <a href="select.php?id=CU_No" class="sg-sub-menu-item">客戶編號</a>
                    </li>
                    <li>
                        <a href="select.php?id=CU_Staf" class="sg-sub-menu-item">負責人</a>
                    </li>
                    <li>
                        <a href="select.php?id=CU_Tel" class="sg-sub-menu-item">電話</a>
                    </li>
                </ul>
            </li>
        </ul>

        <br>
        <br>
        <table class="sg-table sg-table--responsive sg-table--bordered  sg-table--striped  sg-table--highlight">
            <caption>客戶資料表</caption>
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
            <?php
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
                echo "<td><a href='update.php?id=".$row_result["CU_No"]."'>修改</a> ";
                echo "<a href='delete.php?id=".$row_result["CU_No"]."'>刪除</a>";
                echo "</tr>";
            }
            ?>
        </table>
        <br>
        <span class="sg-input-label">  共</span>
        <button class="sg-btn sg-btn-default sg-btn-square">
            <?php
            echo $total_records;
            ?>
        </button>
        <span class="sg-input-label"> 筆</span>
        <br>
        <br>
        <table border="0" align="center">
            <tr>
                <?php if ($num_pages > 1) {?>
                    <td><a href="index2.php?page=1">第一頁</a></td>
                    <td><a href="index2.php?page=<?php echo $num_pages-1;?>">上一頁</a></td>
                <?php } ?>
                <?php if ($num_pages < $total_pages) {?>
                    <td><a href="index2.php?page=<?php echo $num_pages+1;?>">下一頁</a></td>
                    <td><a href="index2.php?page=<?php echo $total_pages;?>">最後頁</a></td>
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
                                echo "<a href=\"index2.php?page={$i}\" style=\"text-decoration:none;color:red;\">{$i}</a> ";
                                echo "</button>";
                            }
                        }
                        ?>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</div>
<script src="./js/vital-ui-kit.js"></script>
</body>
</html>