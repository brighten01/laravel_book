<?php
include(base_path()."/app/views/header.php");
?>
 <div class="nav">
     <h2>编辑图书</h2>
     <?php echo Form::open(array("url"=>"/book/edit/".$id,"action"=>"BookController@edit","method"=>"post"));?>
     <table class="table table-hover">
        <tr>
            <td>书名</td>
            <td><input type="text" name="book_name"  value="<?php echo $bookinfo["book_name"]?>"> </td>
        </tr>
         <tr>
             <td>出版日期</td>
             <td><input type="text" name="history_time"  value="<?php echo $bookinfo["history_time"]?>"> </td>
         </tr>
         <tr>
             <td>作者</td>
             <td><input type="text" value="<?php echo $bookinfo["author"]?>"  name="author"> </td>
         </tr>
         <tr>
             <td>出版社</td>
             <td><input type="text" value="<?php echo $bookinfo["press"]?>"  name="press"> </td>
         </tr>
         <tr>
             <td>类别</td>
             <td><input type="text" value="<?php echo $bookinfo["type"]?>"  name="type"> </td>
         </tr>
         <tr>
             <td>藏处</td>
             <td><input type="text" value="<?php echo $bookinfo["source"]?>"  name="source"> </td>
         </tr>
         <tr>

             <td colspan="3">
                    <input type="hidden" value="1" name="issubmit"">
                 <button class="btn btn-primary">修改书籍</button>
             </td>
         </tr>
     </table>
     <?php echo Form::close();?>
 </div>
</body>
</html>