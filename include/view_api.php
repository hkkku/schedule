
  <div class="cateTabs">
    <a href="/myschedule/pages/sch_view.php?key=view_all" >All</a>
    <a href="/myschedule/pages/sch_view.php?key=view_db"><i class="fa fa-database"></i></a>
    <a href="/myschedule/pages/sch_view.php?key=view_api" class="active"><i class="fa fa-cloud-download-alt"></i></a>
    <a href="/myschedule/pages/sch_view.php?key=view_renewal"><i class="fa fa-copy"></i></a>
    <a href="/myschedule/pages/sch_view.php?key=view_web"><i class="fa fa-edit"></i></a>
  </div>

  <ul class="boardTable">
    <li class="boardTitle">
      <span class="boNum">번호</span>
      <span class="boCate">카테고리</span>
      <span class="boTit">제목</span>
      <span class="boReg">작성일자</span>
    </li>

    <?php
      include $_SERVER['DOCUMENT_ROOT']."/myschedule/include/db_conn.php";
      $sql = "select * from sch_txt where sch_txt_cate = 'APIProject' order by sch_txt_num desc";

      $board_result = mysqli_query($db_conn, $sql);
      while($board_row = mysqli_fetch_array($board_result)){
        $bo_num = $board_row['sch_txt_num'];
        $bo_cate = $board_row['sch_txt_cate'];
        $bo_tit = $board_row['sch_txt_tit'];
        $bo_reg = $board_row['sch_txt_reg'];
    ?>

      <li class="boardList">
        <span class="boNum"><?=$bo_num?></span>
        <span class="boCate"><?=$bo_cate?></span>
        <span class="boTit"><a href="/myschedule/pages/detail_view.php?num=<?=$bo_num?>"><?=$bo_tit?></a></span>
        <span class="boReg"><?=$bo_reg?></span>
      </li>

    <?php
      }
    ?>
  </ul>
  <div class="loadMore">
    <button type="button"><i class="fa fa-chevron-circle-down"></i></button>
  </div>    
  </div>

  <!-- edit button & section -->
