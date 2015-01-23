<?php
include(base_path() . "/app/views/header.php");
?>
<link rel="stylesheet" type="text/css" href="/css/datepicker.css">
<script language="javascript" src="/js/bootstrap-datepicker.js"></script>
<script language="javascript">
    $(document).ready(function () {
        $('#expire_time').datepicker({
            format: 'yyyy-mm-dd'
        });
    });
</script>
<div class="nav">

    <h2>添加借书卡</h2>
    <?php echo Form::open(array("url" => "/card/add")); ?>
    <table class="table table-hover">
        <tr>
            <td>卡号</td>
            <td><input type="text" id="card_number" name="card_number"></td>
        </tr>
        <tr>
            <td>地址</td>
            <td><input type="text" id="address" name="address"></td>
        </tr>
        <tr>
            <td>姓名</td>
            <td><input type="book_name" id="real_name" name="real_name"></td>
        </tr>

        <tr>
            <td>过期时间</td>
            <td>
                <input type="text" id="expire_time" readonly="" name="expire_time">
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" value="1" name="issubmit">
                <button id="addcard" class="btn btn-primary">增加卡号</button>
            </td>
        </tr>
    </table>
    <?php echo Form::close(); ?>
</div>
</body>
</html>