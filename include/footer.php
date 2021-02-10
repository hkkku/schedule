<footer>
  <p>Designed by hkkku : hhk7045@gmail.com</p>
</footer>

<script>
  const pathname = window.location.pathname;
  const changeTit = document.querySelector('#title');
  const rateNum = document.querySelectorAll('.rateNum');

  
  for (let i = 0; i < rateNum.length; i++){
   rateNum[i].readOnly = true;

  }

  if(pathname.includes('input_form')){
    changeTit.innerHTML = "Schedule Input";
  } 

</script>
