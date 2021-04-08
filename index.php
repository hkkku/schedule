<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keyword" content="php, 스케줄, 반응형">
    <meta name="description" content="php 및 데이터베이스를 활용해 가중치 평균 계산법으로 스케줄 진척도를 확인할 수 있는 웹사이트 입니다.">
    <title>Schedule Edit</title>

    <!--  Awesome Font link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <!-- reset css link -->
    <link rel="stylesheet" href="/myschedule/css/reset.css" />
    <!-- main css link -->
    <link rel="stylesheet" href="/myschedule/css/style.css" />
    <link rel="stylesheet" href="/myschedule/css/media.css" />
  </head>
  <body>
    <!-- all contents in wrap class -->
    <div class="wrap">
      <!-- header section -->
      <?php include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/header.php";?>

      <?php
        include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/db_conn.php";
        $sql = "select * from schedule_progress";

        $sch_result = mysqli_query($db_conn, $sql);
        $sch_row = mysqli_fetch_array($sch_result);

        $sch_db = $sch_row['sch_db'];
        $sch_api = $sch_row['sch_api'];
        $sch_ren = $sch_row['sch_ren'];
        $sch_plan = $sch_row['sch_plan'];
      ?>

      <!-- container section -->
      <div class="center gridWrap">
        <form action="/myschedule/php/update_rate.php" method="GET" name="updateRate">
          <div class="container">
            
            <!-- total & each project progress bar -->
            <?php 
            include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/latest_date.php";
            include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/grid_up.php";
            ?>
            <!-- edit button & section -->
            <div class="item btns">
              <button type="submit">진행률 수정</button>
              <button type="button" onclick="javascript : location.href = '/myschedule/pages/input_form.php'">진행 상황 작성</button>
              <button type="button" onclick="javascript : location.href='/myschedule/pages/sch_view.php?key=view_all'">진행 상황 확인</button>
            </div>
          </div>
          <!-- container end -->
        </form>
        <!-- updateRate form end -->
      </div>
      <!-- center end -->
      <?php include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/footer.php";?>
    </div>
    <!-- wrap end -->
   <!-- script files load  -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
   <script src="/myschedule/js/piechart.js"></script>
   <script src="/myschedule/js/custom.js"></script>
   <script src="/myschedule/js/total_avg.js"></script>
  </body>
</html>
