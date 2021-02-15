<div class="item">
  <section class="graph-circle">
    <div class="circle-graph-container">
      <!-- <div class="circle-graph easyPieChart" data-percent="65">
        <p>65%</p>
          <canvas width="269" height="269" style="width: 150px; height: 150px;"></canvas>
      </div> -->
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
    <p>Progress Rate : <input type="text" value="<?=$sch_db?>" class="rateNum" name="sch_db_rate">%|| Last Update : <b><?=$db_date?></b></p>
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
    <p>Progress Rate : <input type="text" value="<?=$sch_api?>" class="rateNum" name="sch_api_rate">% || Last Update : <b><?=$api_date?></b></p>
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
    <p>Progress Rate : <input type="text" value="<?=$sch_ren?>" class="rateNum" name="sch_ren_rate">% || Last Update : <b><?=$ren_date?></b></p>
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
    <p>Progress Rate : <input type="text" value="<?=$sch_plan?>" class="rateNum" name="sch_plan_rate">% || Last Update : <b><?=$web_date?></b></p>
    <div class="pfBarBox">
      <span class="pfBar"></span>
    </div>
  </div>
</div>

