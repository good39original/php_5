<!DOCTYPE html>
<html>
  <head>
    <title>Chapter5</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <h1>Chapter5</h1>
    <p>
      <?php 
        function add($data1, $data2) {
          $sum = $data1 + $data2;
          return $sum;
        }
        print add(10, 20);

        echo "<br>";

        function score_check($num1, $num2, $num3) {
          $sum = $num1 + $num2 + $num3;
          return $sum;
        }

        $num1 = 30;
        $num2 = 20;
        $num3 = 30;

        if(score_check($num1, $num2, $num3) >= 80) {
          print 'Success !!';
        }elseif(score_check($num1, $num2, $num3) >= 50 &&
                score_check($num1, $num2, $num3) < 80){
                  print 'Challenge !!';
                } else {
                  print 'Failure !!';
                }

          echo "<br>";

          function countup($num) {
            for($i = 0; $i < 10; $i++){
              $num += 1;
            }
          }

          $num = 9;
          countup($num);
          print $num;

          echo "<br>";

          
      ?>
    </p>
  </body>
</html>