<?php
  //database project latest date sql
  $db_date_sql = "select * from sch_txt where sch_txt_cate = 'DBProject' order by sch_txt_num desc limit 1";
  $db_date_result = mysqli_query($db_conn, $db_date_sql);
  $db_date_row = mysqli_fetch_array($db_date_result);

  if(!$db_date_row){
    $db_date = "No Data";
  } else {
    $db_date = $db_date_row['sch_txt_reg'];
  }

  //api project latest date sql
  $api_date_sql = "select * from sch_txt where sch_txt_cate = 'APIProject' order by sch_txt_num desc limit 1";
  $api_date_result = mysqli_query($db_conn, $api_date_sql);
  $api_date_row = mysqli_fetch_array($api_date_result);

  if(!$api_date_row){
    $api_date = "No Data";
  } else {
    $api_date = $api_date_row['sch_txt_reg'];
  }
  
  //renewal project latest date sql
  $ren_date_sql = "select * from sch_txt where sch_txt_cate = 'RenewalProject' order by sch_txt_num desc limit 1";
  $ren_date_result = mysqli_query($db_conn, $ren_date_sql);
  $ren_date_row = mysqli_fetch_array($ren_date_result);

  if(!$ren_date_row){
    $ren_date = "No Data";
  } else {
    $ren_date = $ren_date_row['sch_txt_reg'];
  }

  
  //web planning project latest date sql
  $web_date_sql = "select * from sch_txt where sch_txt_cate = 'WebProject' order by sch_txt_num desc limit 1";
  $web_date_result = mysqli_query($db_conn, $web_date_sql);
  $web_date_row = mysqli_fetch_array($web_date_result);

  if(!$web_date_row){
    $web_date = "No Data";
  } else {
    $web_date = $web_date_row['sch_txt_reg'];
  }
  
?>        