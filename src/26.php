<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "githubschoolproject";

    // 创建连接
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // 检查连接
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }

    // 执行查询
    $sql = "SELECT * FROM users WHERE username = 'testuser'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "用户已存在，请更改用户名后再试！";
    } else {
        // 如果不存在，执行插入语句
        $sql = "INSERT INTO users (username, password) VALUES ('testuser', 'password')";
        $conn->query($sql);
        
        echo "操作成功！"; 
    }

    $conn->close();
?>
