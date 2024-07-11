<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>log_delete.php</title>
    </head>
    <body>
        <h1>log_delete_action.php</h1>
        <?php
            //board_delete_form.php 페이지에서 넘어온 글 번호값 저장 및 출력
            $sn = $_POST["sn"];
           //  $pw = $_POST["sn"];
            echo "sn : " . $sn . "<br>";
            // echo "board_pw : " . $board_pw . "<br>";
            //mysql 커넥션 객체 생성
            $conn = mysqli_connect("oldmansea.synology.me", "root", "Fyeo2014!@#","oldman");
            //커넥션 객체 생성 여부 확인
            if($conn) {
                echo "연결 성공<br>";
            } else {
                die("연결 실패 : " .mysqli_connect_error());
            }
            //board테이블에서 입력된 글 번호와, 글 비밀번호가 일치하는 행 삭제 쿼리
            $sql = "DELETE FROM helloworld WHERE sn='".$sn."'" ;
            //쿼리 실행 여부 확인
            if(mysqli_query($conn,$sql)) {
                echo "삭제 성공: ".$result; //과제 작성시 에러메시지 출력하게 만들기
            } else {
                echo "삭제 실패: ".mysqli_error($conn);
            }
        
            mysqli_close($conn);
            //헤더함수를 이용하여 리스트 페이지로 리다이렉션
            header("Location: http://oldmansea.synology.me/php/log_list.php");
        ?>
    </body
</html>

