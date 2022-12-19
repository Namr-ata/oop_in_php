<html>
  <head>
    <title> chess board using PHP </title>
    <style>
      table{
        border: 1px solid black;
        border-spacing:0;
      }
      td{padding:20px;border: 1px solid black;
      }
      .color{
        background:black;
      }
    </style>
  </head>
  <body>
    
     <table>
    <?php 


   for($row=1;$row<=8;$row++){
       
         echo "<tr> ";
          for($col=1;$col <=8; $col++){
            if(($row + $col)%2==0){
              echo "<td class='color'> </td>";
            }else{
              echo "<td> </td>";
              
            }
          }
         echo "</tr>";
       }      
  
      ?> 
   </table>
  </body>
</html>