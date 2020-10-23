<?php
     echo 'GCD';
?>
        <form action= ""method="post">
            Enter 1st number:
<br>
        <input type="text" name="num1" value=""><br>
            Enter 2nd number:
<br>
        <input type="text" name="num2" value=""><br>
        <input type="submit" name="getgcd" value="Answer">
</form>
<?php
            if(isset($_POST['getgcd']))
            {
                  $num1= $_POST['num1'];
                  $num2= $_POST['num2'];
                  function getgcd($num1, $num2)
             {
                    if($num2 == 0)
                    return $num1;
                    if($num2!= 0)
                    return getgcd($num2, $num1%$num2);
              }
                  $gcd= getgcd($num1,$num2) ;
                  $gcd= getgcd($num1, $num2);
                  echo "The GCD of $num1 and $num2 is: ", $gcd;
              }
?>
