<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>log_delete.php</title>
    </head>
    <body>
        <h1>log_delete_action.php</h1>
        <?php
            //board_delete_form.php ���������� �Ѿ�� �� ��ȣ�� ���� �� ���
            $sn = $_POST["sn"];
           //  $pw = $_POST["sn"];
            echo "sn : " . $sn . "<br>";
            // echo "board_pw : " . $board_pw . "<br>";
            //mysql Ŀ�ؼ� ��ü ����
            $conn = mysqli_connect("oldmansea.synology.me", "root", "Fyeo2014!@#","oldman");
            //Ŀ�ؼ� ��ü ���� ���� Ȯ��
            if($conn) {
                echo "���� ����<br>";
            } else {
                die("���� ���� : " .mysqli_connect_error());
            }
            //board���̺��� �Էµ� �� ��ȣ��, �� ��й�ȣ�� ��ġ�ϴ� �� ���� ����
            $sql = "DELETE FROM helloworld WHERE sn='".$sn."'" ;
            //���� ���� ���� Ȯ��
            if(mysqli_query($conn,$sql)) {
                echo "���� ����: ".$result; //���� �ۼ��� �����޽��� ����ϰ� �����
            } else {
                echo "���� ����: ".mysqli_error($conn);
            }
        
            mysqli_close($conn);
            //����Լ��� �̿��Ͽ� ����Ʈ �������� �����̷���
            header("Location: http://oldmansea.synology.me/php/log_list.php");
        ?>
    </body
</html>

