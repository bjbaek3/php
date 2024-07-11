</<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>log_detail.php</title>
        <link rel="stylesheet" href="/css/bootstrap.css">
        <style>
            table {
                table-layout: fixed;
                word-wrap: break-word;
            }
        </style>
    </head>
    <body>
        <h1 class="display-4">log_detail.php</h1>
        <?php
            //mysql 커넥션 객체 생성
            $conn = mysqli_connect("oldmansea.synology.me", "root", "Fyeo2014!@#","oldman");
            //커넥션 객체 생성 여부 확인
            if($conn) {
                echo "연결 성공<br>";
            } else {
                die("연결 실패 : " .mysqli_error());
            }
            //board_list.php 에서 넘어온 글 번호 저장 및 출력
            $sn = $_GET["sn"];
            echo $sn."번째 글 내용<br>";
            //board 테이블에서 board_no값이 일치하는 board_no, board_title, board_content, board_user, board_date 필드 값 조회 쿼리
            $sql = "SELECT sn, yyyymmdd, msg FROM helloworld WHERE sn = '".$sn."'";
            $result = mysqli_query($conn,$sql);
            //조회 성공 여부 확인
            if($result) {
                echo "조회 성공";
            } else {
                echo "결과 없음: ".mysqli_error($conn);
            }
        ?>
        <table class="table table-bordered" style="width:50%">
            <?php
                //result 변수에 담긴 값을 row 변수에 저장하여 테이블에 출력
                if($row = mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td style="width:15%">일련번호</td>
                <td style="width:35%">
                    <?php
                        echo $row["sn"];
                    ?>
                </td>
            </tr>
            <tr>
                <td style="width:10%">일자</td>
                <td style="width:15%">
                    <?php
                        echo $row["yyyymmdd"];
                    ?>
                </td>
                <td style="width:5%">메세지</td>
                <td style="width:3%">
                        <?php
                            echo $row["msg"];
                        ?>
                </td>
                <!-- 
                <td  style="width:5%">작성 일자</td>
                <td  style="width:3%">
                    <?php
                    //    echo $row["board_date"];
                    ?>
                </td>
                -->

            </tr>
            <tr>
                <td colspan="6">
                    <?php
                        echo $row["msg"];
                    ?>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
        <br>
        &nbsp;&nbsp;&nbsp;
        <a class="btn btn-primary" href="/php/log_list.php"> 리스트로 돌아가기</a>
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>