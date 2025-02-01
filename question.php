<?php
    $username = $_POST["username"];
    $age = $_POST["您的年龄是"];
    $gender = $_POST["性别"];
    $playtime = $_POST["您玩《Minecraft》多久了？"];
    $starttime = $_POST["您什么时候开始玩《Minecraft》？"];
    $platform = $_POST["你通常在哪个平台上玩？"];
    $platforms = array();
    $gamemode = $_POST["你最喜欢的游戏模式是？"];
    $follownews = $_POST["是否会关注《Minecraft》的新闻？"];
    $party = $_POST["是否参加过《Minecraft》的线下活动或聚会？"];
    $opinion = $_POST["你对《Minecraft》的看法？"];
    $questionnaire_suggestions = $_POST["你对本问卷的建议？"];
    
    for ($i = 1; $i <= 5; $i++) {
        if (isset($_POST["平台" . $i])) {
            $platforms[] = $_POST["平台" . $i];
        }
    }
    $platform = implode(", ", $platforms);

    $mysqli = new mysqli("localhost", "question", "051118", "question");
    if($mysqli->connect_errno){
        die("error" . $mysqli->connect_error);
    }
    
    if(isset($_POST["question"])){
        $sql = "INSERT INTO question (用户名, 年龄, 性别, 您玩《Minecraft》多久了？, 您什么时候开始玩《Minecraft》？, 你通常在哪个平台上玩？, 您在哪些平台上玩过《Minecraft》？, 你最喜欢的游戏模式是？, 是否会关注《Minecraft》的新闻？, 是否参加过《Minecraft》的线下活动或聚会？, 你对《Minecraft》的看法？, 你对本问卷的建议？) VALUES ('$username', '$age', '$gender', '$playtime', '$starttime', '$platform', '$platform', '$gamemode', '$follownews', '$party', '$opinion', '$questionnaire_suggestions')";
        if ($mysqli->query($sql) === TRUE) {
            echo "<script>window.location.href = 'questionnaire_end.html';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }
    }

    $mysqli->close();
?>