<?php

  $del_num = $_GET['num'];
  include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/db_conn.php";

  $sql = "DELETE from sch_txt WHERE sch_txt_num = $del_num";
  mysqli_query($db_conn, $sql);

  echo "
    <script>
      alert ('스케줄 삭제가 완료되었습니다.');
      location.href='/myschedule/pages/sch_view.php?key=view_all';
    </script>
  
  "
?>