<?php
  $update_num = $_GET['num'];
  $update_tit = nl2br($_POST['updateTit']);
  $update_con = nl2br($_POST['updateCon']);

  $update_tit = addslashes($update_tit);
  $update_con = addslashes($update_con);

  
  include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/db_conn.php";
  $sql = "UPDATE sch_txt SET sch_txt_tit = '$update_tit', sch_txt_con = '$update_con' WHERE sch_txt_num = '$update_num'";
  mysqli_query($db_conn, $sql);

  echo "
    <script>
      alert ('스케줄 수정이 완료되었습니다.');
      location.href='/myschedule/pages/sch_view.php?key=view_all';
    </script>
  ";
?>