<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="/css/bootstrap.css">
    </head>
    <body>
        <h1 class="display-4">log_delete_form.php</h1>
        <?php
            //board_list.php 페이지에서 넘어온 글 번호값 저장 및 출력
            $sn = $_GET["sn"];
            echo $sn."번째 글 삭제 페이지<br>";
        ?>
        <!-- board_delete_action.php 페이지로 post방식을 이용하여 값 전송 -->
        <form action="/php/log_delete_action.php" method="post">
            <table class="table table-bordered" style="width:10%">
                <tr>
                    <td>글 번호를 다시 입력하세요.</td>
                </tr>
                <tr>
                    <td>
                        <!-- <input type="text" name="sn">  -->
                        <input type="hidden" name="sn" value="<?php echo $sn ?>">
                    </td>
                </tr>
                <tr>
                    <td><button class="btn btn-primary" type="submit">글 삭제 버튼</td>
                </tr>
            </table>
        </form>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>