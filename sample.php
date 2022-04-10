<?php
if(isset($_POST['submit']) =='Check' )
{ 
   $check=0;
   $num=$_POST['number'];
   for($i=2;$i<=($num/2);$i++)
     { 
       if($num%$i==0)
         {
          $check++;
          if($check==1)
          {
             break;
          }
         }
     }
}
?>
 <html>
   <head>
     <title>Prime Number</title>
   </head>
 <body>
  <table>
    <form name="frm" method="post" action="">
         <tr><td>Number:</td><td><input type="text" name="number" /></td></tr>
         <tr><td></td><td><input type="submit" name="submit" value="Check" /></td>
         <td>
          <center><span>
           <?php if(isset($_POST['sub']))
           {if($check==0)
               {echo "It is a Prime Number";
               }
           else
                {
                 echo "It is not a Prime Number";}
                }
           ?>
          </span>
          </center>
         </td>
         </tr>
    </form>
  </table>
</body>
</html>