<?php
include(base_path()."/app/views/header.php");
?>
<script language="javascript">
    $(document).ready(function (){
        //信息验证
        $("#addbook").click(function (){
            if($("#book_name").val()==""){
                alert("请添加书名");
                return false;
            }
            if($("#create_time").val()==""){
                alert("请输入出版时间");
                return false;
            }
            if($("#author").val()==""){
                alert("请添加作者");
                return false;
            }
            if($("#press").val()==""){
                alert("请输入出版社");
                return false;
            }
            $("#book_form").submit();
        });

    });
</script>
 <div class="nav">
     <h2>添加图书</h2>
     <?php echo   Form::open(array("action"=>"BookController@add","method"=>"post","id"=>"book_form")); ?>
     <table class="table table-bordered">
        <tr>
            <td><?php echo Form::label('book_name', '书名');?></td>
            <td><input type="text" value=""  id="book_name" name="book_name"> </td>
        </tr>
         <tr>
             <td>出版日期</td>
             <td><input type="text" value="" id="histroy_time" name="histroy_time"> </td>
         </tr>
         <tr>
             <td>作者</td>
             <td><input type="text" value="" id="author"  name="author"> </td>
         </tr>
         <tr>
             <td>出版社</td>
             <td><input type="text" value="" id="press" name="press"> </td>
         </tr>
         <tr>
             <td>类别</td>
             <td><input type="text" value="" id="type" name="type"> </td>
         </tr>
         <tr>
             <td>藏处</td>
             <td><input type="text" value="" id="source" name="source"> </td>
         </tr>
         <tr>

             <td colspan="3">
                 <input type="hidden" value="1" name="issubmit">
                 <button id="addbook" class="btn btn-primary">添加书籍</button> </td>
         </tr>
     </table>
     <?php echo  Form::close();?>
 </div>
</body>
</html>