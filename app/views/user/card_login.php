<?php
include(base_path()."/app/views/header.php");
?>
 <?php  echo Form::open(array("action"=>"UserController@card_login","method"=>"post"));?>


<div class="container">

    <h2>
        借阅人登录
    </h2>
    <table class="table table-hover" width="50%">
        <tr>
            <td>卡号</td>
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
    <?php echo Form::close();?>
</div>

</body>
</html>