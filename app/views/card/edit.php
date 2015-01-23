<?php
include(base_path()."/app/views/header.php");
?>
<script language="javascript">
    $(document).ready(function (){
        console.log("test jqueyr");
    })
</script>
<div class="nav">

    <h2>修改借书卡</h2>
    <?php echo Form::open(array("url"=>"/card/edit/$id"));?>
    <table class="table table-hover">
        <tr>
            <td>卡号</td>
            <td><input type="book_name" id="card_number" name="card_number"></td>
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
            <td><input type="book_name" id="expire_time" name="expire_time"></td>
        </tr>
        <tr>
            <td>
                <button   class="btn btn-primary">增加卡号</button>
            </td>
        </tr>
    </table>

    <?php echo Form::close();?>
</div>
</body>
</html>