<?php
  include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/db_conn.php";

  $sch_txt_cate = $_POST['projectCate'];
  // 개행 문자 처리 오류 방지
  $sch_txt_tit = nl2br($_POST['projectTit']);
  $sch_txt_con = nl2br($_POST['projectCon']);
  // 특수문자 처리 오류 방지
  $sch_txt_tit = addslashes($sch_txt_tit);
  $sch_txt_con = addslashes($sch_txt_con);

  $sch_txt_reg = date("Y-m-d");


  $sql = "INSERT INTO sch_txt (sch_txt_cate, sch_txt_tit, sch_txt_con, sch_txt_reg) VALUES ('$sch_txt_cate', '$sch_txt_tit', '$sch_txt_con', '$sch_txt_reg')";

  mysqli_query($db_conn, $sql);

  echo "
  <script>
    alert('작성이 완료되었습니다.');
    location.href = '/myschedule/pages/input_form.php';
  </script>
  "

?>