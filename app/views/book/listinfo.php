<?php
include(base_path()."/app/views/header.php");
?>
 <div class="nav">
     <h2>图书列表</h2>
     <table class="table table-hover">
         <thead>
          <tr>
              <th>书名</th>
              <th>出版日期</th>
              <th>作者</th>
              <th>出版社</th>
              <th>类别</th>
              <th>藏处</th>
              <th>操作</th>
          </tr>

         </thead>
     <tbody>
     <?php
         if(!empty($data)){
             foreach($data as  $key=>$value){
                 ?>
                 <tr>
                     <td><?php echo $value["book_name"] ;?></td>
                     <td><?php echo $value["history_time"] ;?></td>
                     <td><?php echo $value["author"] ;?></td>
                     <td><?php echo $value["press"] ;?></td>
                     <td><?php echo $value["type"] ;?></td>
                     <td><?php echo $value["source"] ;?></td>
                     <td>
                         <a href="/book/edit/<?php echo $value["book_id"]?>" class="btn btn-primary">修改</a>
                         <a href="/book/del/<?php echo $value["book_id"]?>" class="btn btn-primary">删除</a>

                     </td>
                 </tr>
     <?php

             }
         }
    ?>
     </tbody>
     </table>
 </div>
</body>
</html>