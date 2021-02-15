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
      <div class="center gridWrap">
        <div class="inputContainer">
          <!-- total & each project progress bar -->
          <?php 
          include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/latest_date.php";
          include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/grid_up.php";
          ?>

          <div class="item inputBox">
            <form action="/myschedule/php/schedule_input.php" method="POST" name="schInputForm">
              <select name="projectCate" id="" class="projectCate">
                <option value="DBProject">Database Project</option>
                <option value="APIProject">API Project</option>
                <option value="RenewalProject">Renewal Project</option>
                <option value="WebProject">Web planning Project</option>
              </select>
              <input type="text" name="projectTit" class="projectTit" placeholder="일정을 입력해 주세요.">
              <textarea name="projectCon" id="" class="projectCon" placeholder="진행 상황을 작성해 주세요."></textarea>
            </form>
            
            <div class="item btns">
              <button type="button" onclick="schInput()" class="schInput">진행 상황 작성</button>
              <button type="button">진행 상황 확인</button>
            </div>

          </div>
          <!-- edit button & section -->
          
        </div>
          <!-- container end -->
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
   <script>
    function schInput(){
      if(!document.schInputForm.projectTit.value){
        alert('일정을 입력해 주세요.');
        document.schInputForm.projectTit.focus();
        return;
      }
      if(!document.schInputForm.projectCon.value){
        alert('진행 상황을 입력해 주세요.');
        document.schInputForm.projectCon.focus();
        return;
      }
      document.schInputForm.submit();
    }
  </script>

  </body>
</html>
