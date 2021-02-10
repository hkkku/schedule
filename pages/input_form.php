<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Board</title>

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
      <div class="center">
        <form action="/myschedule/php/update_rate.php" method="GET" name="updateRate">
          <div class="inputContainer">
            
            <!-- total & each project progress bar -->
            <?php include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/grid_up.php";?>

            <div class="item"></div>
            <!-- edit button & section -->
            <div class="item btns">
              <button type="submit">진행률 수정</button>
              <button type="button">진행 상황 작성</button>
              <button type="button">진행 상황 확인</button>
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
