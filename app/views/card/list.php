<?php
    include(base_path() . "/app/views/header.php");
?>
<table class="table table-responsive">
    <thead>
    <tr>
        <th>卡号</th>
        <th>地址</th>
        <th>姓名</th>
        <th>电话</th>
        <th>身份证号</th>
        <th>创建时间</th>
        <th>过期时间</th>
        <th>操作</th>
    </tr>

    </thead>
    <tbody>
    <?php
    if (!empty($data)) {
        foreach ($data as $key => $value) {
            ?>
            <tr>
                <td><?php echo $value["card_number"];?></td>
                <td><?php echo $value["address"];?></td>
                <td><?php echo $value["real_name"];?></td>
                <td><?php echo $value["mobile"];?></td>
                <td><?php echo $value["id_card"];?></td>
                <td><?php echo  date("Y-m-d H:i:s" ,$value["create_time"]);?></td>
                <td><?php echo  date("Y-m-d H:i:s" ,$value["expire_time"]);?></td>
                <td>
                    <a class="btn btn-primary" href="/card/edit/<?php echo $value["id"];?>">修改</a>
                    <a  class="btn btn-primary" href="/card/del/<?php echo $value["id"];?>">删除</a>
                </td>
            </tr>
        <?php
        }
    }
    ?>
    <?php ?>
    </tbody>
</table>
</body>
</html>