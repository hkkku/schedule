<?php
  include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/db_conn.php";
  
  $sch_num = 1;
  $sch_db = $_REQUEST['sch_db_rate'];
  $sch_api = $_REQUEST['sch_api_rate'];
  $sch_ren = $_REQUEST['sch_ren_rate'];
  $sch_plan = $_REQUEST['sch_plan_rate'];

  $sql = "update schedule_progress set sch_db = $sch_db, sch_api = $sch_api, sch_ren = $sch_ren, sch_plan = $sch_plan where sch_num = $sch_num";

  mysqli_query($db_conn, $sql);

  $sql = "select * from schedule_progress where sch_num = $sch_num";

  $sch_result = mysqli_query($db_conn, $sql);

  $arr = array();
  while($sch_row = mysqli_fetch_array($sch_result)){
    array_push($arr, array(
      'db_rate' => $sch_row['sch_db'],
      'api_rate' => $sch_row['sch_api'],
      'ren_rate' => $sch_row['sch_ren'],
      'plan_rate' => $sch_row['sch_plan']
    ));
  }

  file_put_contents($_SERVER['DOCUMENT_ROOT'].'/myschedule/data/sch_rate.json', json_encode($arr, JSON_PRETTY_PRINT));

  echo "
    <script>
      alert('수정이 완료되었습니다.');
      location.href = '/myschedule/index.php';
    </script>
  "
?>