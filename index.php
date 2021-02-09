<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Schedule</title>

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
      <header>
        <div class="center headerWrap">
          <span class="hollow"></span>
          <h1>Schedule Dashboard</h1>
          <div class="mIcon">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </header>

      <!-- container section -->
      <div class="center">
        <div class="container">
          <div class="item">
            <section class="graph-circle">
              <div class="circle-graph-container">
                <div class="circle-graph easyPieChart" data-percent="65">
                  <p>65%</p>
                  <!-- <canvas width="269" height="269" style="width: 150px; height: 150px;"></canvas> -->
                </div>
              </div>
              <p class="totalTit">Total Process</p>
            </section>
          </div>
          <div class="item subPfBar">
            <div class="pfImg">
              <i class="fa fa-database"></i>
            </div>
            <div class="pfContents">
              <h3>Database Project</h3>
              <p>Progress Rate : <b class="rateNum">90</b>% || Last Update : <b>2021-02-09</b></p>
              <div class="pfBarBox">
                <span class="pfBar"></span>
              </div>
            </div>
          </div>
          <div class="item subPfBar">
            <div class="pfImg">
              <i class="fa fa-cloud-download-alt"></i>
            </div>
            <div class="pfContents">
              <h3>API Project</h3>
              <p>Progress Rate : <b class="rateNum">100</b>% || Last Update : <b>2021-02-09</b></p>
              <div class="pfBarBox">
                <span class="pfBar"></span>
              </div>
            </div>
          </div>
          <div class="item subPfBar">
            <div class="pfImg">
              <i class="fa fa-copy"></i>
            </div>
            <div class="pfContents">
              <h3>Renewal Project</h3>
              <p>Progress Rate : <b class="rateNum">30</b>% || Last Update : <b>2021-02-09</b></p>
              <div class="pfBarBox">
                <span class="pfBar"></span>
              </div>
            </div>
          </div>
          <div class="item subPfBar">
            <div class="pfImg">
              <i class="fa fa-edit"></i>
            </div>
            <div class="pfContents">
              <h3>Web Planning Project</h3>
              <p>Progress Rate : <b class="rateNum">10</b>% || Last Update : <b>2021-02-09</b></p>
              <div class="pfBarBox">
                <span class="pfBar"></span>
              </div>
            </div>
          </div>
          <div class="item"></div>
        </div>
      </div>
    </div>
   <!-- script files load  -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
   <script src="/myschedule/js/piechart.js"></script>
   <script src="/myschedule/js/custom.js"></script>
  </body>
</html>
