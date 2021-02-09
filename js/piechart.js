$(function() {

  let pieSize = 250;
  let liWidth = $(window).width();
  let clear;
  
  if(liWidth > 400){
    pieSize = 250;
  } else {
    pieSize = 180;
  }

  console.log(pieSize);

  $('.circle-graph').easyPieChart({
    scaleColor: false,
    lineWidth: 30,
    lineCap: 'round',
    barColor: '#12595b',
    trackColor: '#edf7f0' ,
    size: pieSize,
    animate: 1200
  });

  $(window).resize(function(){
    let liWidth = $(window).width();
    //resize 할때마다 window의 넓이를 읽도록 함
    if(liWidth > 400){
      pieSize = 250;
    } else {
      pieSize = 180;
    }

    clearTimeout(clear);
    // 한 타임씩 지워준다. 

    clear = setTimeout(function(){
      // 브라우저 과부하 방지 - resize가 너무 많을 때 사용
      $('.circle-graph').removeData('easyPieChart').find('canvas').remove();
      $('.circle-graph').easyPieChart({
        scaleColor: false,
        lineWidth: 30,
        lineCap: 'round',
        barColor: '#12595b',
        trackColor: '#edf7f0' ,
        size: pieSize,
        animate: 1200
      });
    }, 150);
  });

});