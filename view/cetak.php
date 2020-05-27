<!DOCTYPE html>
<html>
<body>
<table border="1">
<?php
    $count = 1;
    if (!isset($result)) {
      echo json_encode('status request gagal');
    }else{
      for($n=0;$n<count($result);$n++){
          echo "<tr><td>".$count++."</td>";
          echo "<td>".$result[$n]->nama."</td>";
          echo "<td>".$result[$n]->desc."</td>";
      }
    }
?>
</table>
</body>
</html>
