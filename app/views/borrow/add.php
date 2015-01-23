<?php
include(base_path()."/app/views/header.php");
?>
<script language="javascript">
    $(document).ready(function (){
        console.log("test jqueyr");
    })
</script>
<div class="nav">

    <h2> 添加借阅</h2>
    <?php echo Form::open(array("action"=>"BorrowController@add"));?>
    <table class="table table-hover">
        <tr>
            <td>书名</td>
            <td><input type="book_name" id="book_name"></td>
        </tr>
        <tr>
            <td>借阅人名称</td>
            <td><input type="book_name" id="book_name"></td>
        </tr>
        <tr>
            <td>借阅时间</td>
            <td><input type="book_name" id="book_name"></td>
        </tr>

        <tr>
            <td>结束时间</td>
            <td><input type="book_name" id="book_name"></td>
        </tr>
        <tr>
            <td>状态</td>
            <td colspan="2"><?php  echo Form::select('status', array('1' => '已借阅', '2' => '已还'));?></td>
        </tr>
        <tr>
            <td>
                <button   class="btn btn-primary">提交借阅</button>
            </td>
        </tr>
    </table>

    <?php echo Form::close();?>
</div>
</body>
</html>