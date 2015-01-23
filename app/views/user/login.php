<?php
include(base_path()."/app/views/header.php");
?>
<h2>
    用户登录
</h2>
 <?php  echo Form::open(array("action"=>"UserController@login","method"=>"post","class"=>"form-horizaltal"));?>
<div class="nav">
    <table class="table table-hover" width="50">
        <tr>
            <td>用户名</td>
            <td><input type="text" value=""></td>
        </tr>
        <tr>
            <td>密码</td>
            <td><?php echo Form::password("name");?></td>
        </tr>
        <tr>

            <td colspan="3"><button class="btn btn-primary">登录</button> </td>
        </tr>
    </table>
</div>
<?php echo Form::close();?>
</body>
</html>