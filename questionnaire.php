<!DOCTYPE html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minecraft问卷</title>
    <link rel="icon" type="image/x-icon" href="images/icon/link.png">
    <style>
        @font-face {
        font-family: "minecraft_font";
        src: url(font/minecraft_font.ttf);
        }
        body {
            background:url(images/background/background0.jpg);
            background-repeat:no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
            font-family: "minecraft_font";
            word-wrap: break-word;
        }
        div[id="home"] {
            width: 65%;
            flex-wrap: 1;
            border: 50px solid transparent;
            border-image: url(images/background/book.png) 100 fill;
            background-repeat: no-repeat;
            background-size: contain;
            image-rendering: pixelated;
            margin: 50px auto;
            padding: 0 0 100px 0;
        }
        div[id="title"] {
            text-align: center;
        }
        h1[id="title"] {
            position: relative;
            top: 10px;
        }
        h1[id="subtitle"] {
            position: relative;
            top: 10px;
            font-size: 20px;
        }
        hr[id="1"] {
            background-color: black;
            width: 100%;
            height: 3px;
            border: none;
        }
        hr[id="2"] {
            background-color: black;
            width: 100%;
            height: 2px;
            border: none;
        }
        hr[id="3"] {
            background-color: black;
            width: 100%;
            height: 1px;
            border: none;
        }
        div[id="content"] {
            position: relative;
            width: 80%;
            top: 50px;
            margin: 0 auto;
            background-size: cover;
            background-repeat: no-repeat;
            border: 50px solid transparent;
            border-image: url(images/background/background.png) 60 fill;
            color: white;
        }
        select {
            font-size: 20px;
        }
        span {
            font-size: 20px;
        }
        #background{
            background-color:rgba(255, 255, 255, 0.4);
        }
        button{
            width: 300px;
            height: 40px;
            background-size: 100% 100%;
            background-image: url(images/icon/button.png);
            border-color: rgba(255, 255, 255, 0.5);
            border-radius: 5px;
            margin: 0 20px;
            color: black;
            font-size: 20px;
            color:rgb(255, 255, 255, 0.8);
            margin: 0 9px;
            font-family: minecraft_font;
        }
        button:hover{
            background-image: url(images/icon/button_highlighted.png);
            background-size: 100% 100%;
        }
        a{
            text-decoration: none;
            color:rgb(255, 255, 255, 0.8);
        }
        #back{
            width: 300px;
            height: 30px;
            background-image: url(images/icon/button.png);
            background-size: 100% 100%;
            border-color: rgba(255, 255, 255, 0.5);
            border-radius: 5px;
            margin: 0 20px;
            background-repeat: no-repeat;
            align-items: center;
            display: flex;
            justify-content: center;
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            position: relative;
            margin: 0 auto;
            top:20px
        }
        #back:hover{
            background-image: url(images/icon/button_highlighted.png);
            background-size: 100% 100%;
        }
        a{
            transition: transform 0.3s ease;
        }
        a:hover{
            transform: scale(1.1);
        }
        textarea{
            width: 99.3%;
        }
    </style>
</head>
<body>
    <div id="home">
        <div id="title">
            <h1 id="title" id="top">Minecraft Questionnaire</h1>
            <h1 id="subtitle">Minecraft 问卷</h1>
            <a href="homepage.html" id="back">返回Minecraft Wiki首页</a>
            <br>
            <br>
            <marquee behavior="scroll" direction="left" scrollamount="5">
                本站并未完全搭建好处于测试阶段，部分功能不可用，敬请谅解！
            </marquee>
        </div>
        <div id="content">
            <h1 style="text-align:center;">您好，
<?php 
    echo "<span style='color: rgba(255, 255, 255, 0.5);font-size: 30px;'>".$_GET["username"]."</span>";
?>
    欢迎您的到来！</h1>
            <h1 style="text-align: center;">Minecraft问卷</h1>
            <br>
            <hr id="1">
            <form action="question.php" method="post">
                <input type="hidden" name="username" value="<?php echo htmlspecialchars($_GET['username']); ?>">
                <span>您的年龄是：</span><select name="您的年龄是" id="background">
                    <option value="未出生">未出生</option>
                    <option value="1岁">1岁</option>
                    <option value="2岁">2岁</option>
                    <option value="3岁">3岁</option>
                    <option value="4岁">4岁</option>
                    <option value="5岁">5岁</option>
                    <option value="6岁">6岁</option>
                    <option value="7岁">7岁</option>
                    <option value="8岁">8岁</option>
                    <option value="9岁">9岁</option>
                    <option value="10岁">10岁</option>
                    <option value="11岁">11岁</option>
                    <option value="12岁">12岁</option>
                    <option value="13岁">13岁</option>
                    <option value="14岁">14岁</option>
                    <option value="15岁">15岁</option>
                    <option value="16岁">16岁</option>
                    <option value="17岁">17岁</option>
                    <option value="18岁">18岁</option>
                    <option value="19岁">19岁</option>
                    <option value="20岁">20岁</option>
                    <option value="21岁">21岁</option>
                    <option value="22岁">22岁</option>
                    <option value="23岁">23岁</option>
                    <option value="24岁">24岁</option>
                    <option value="25岁">25岁</option>
                    <option value="26岁">26岁</option>
                    <option value="27岁">27岁</option>
                    <option value="28岁">28岁</option>
                    <option value="29岁">29岁</option>
                    <option value="30岁">30岁</option>
                    <option value="31岁">31岁</option>
                    <option value="32岁">32岁</option>
                    <option value="33岁">33岁</option>
                    <option value="34岁">34岁</option>
                    <option value="35岁">35岁</option>
                    <option value="36岁">36岁</option>
                    <option value="37岁">37岁</option>
                    <option value="38岁">38岁</option>
                    <option value="39岁">39岁</option>
                    <option value="40岁">40岁</option>
                    <option value="41岁">41岁</option>
                    <option value="42岁">42岁</option>
                    <option value="43岁">43岁</option>
                    <option value="44岁">44岁</option>
                    <option value="45岁">45岁</option>
                    <option value="46岁">46岁</option>
                    <option value="47岁">47岁</option>
                    <option value="48岁">48岁</option>
                    <option value="49岁">49岁</option>
                    <option value="50岁">50岁</option>
                    <option value="51岁">51岁</option>
                    <option value="52岁">52岁</option>
                    <option value="53岁">53岁</option>
                    <option value="54岁">54岁</option>
                    <option value="55岁">55岁</option>
                    <option value="56岁">56岁</option>
                    <option value="57岁">57岁</option>
                    <option value="58岁">58岁</option>
                    <option value="59岁">59岁</option>
                    <option value="60岁">60岁</option>
                    <option value="61岁">61岁</option>
                    <option value="62岁">62岁</option>
                    <option value="63岁">63岁</option>
                    <option value="64岁">64岁</option>
                    <option value="65岁">65岁</option>
                    <option value="66岁">66岁</option>
                    <option value="67岁">67岁</option>
                    <option value="68岁">68岁</option>
                    <option value="69岁">69岁</option>
                    <option value="70岁">70岁</option>
                    <option value="71岁">71岁</option>
                    <option value="72岁">72岁</option>
                    <option value="73岁">73岁</option>
                    <option value="74岁">74岁</option>
                    <option value="75岁">75岁</option>
                    <option value="76岁">76岁</option>
                    <option value="77岁">77岁</option>
                    <option value="78岁">78岁</option>
                    <option value="79岁">79岁</option>
                    <option value="80岁">80岁</option>
                    <option value="81岁">81岁</option>
                    <option value="82岁">82岁</option>
                    <option value="83岁">83岁</option>
                    <option value="84岁">84岁</option>
                    <option value="85岁">85岁</option>
                    <option value="86岁">86岁</option>
                    <option value="87岁">87岁</option>
                    <option value="88岁">88岁</option>
                    <option value="89岁">89岁</option>
                    <option value="90岁">90岁</option>
                    <option value="91岁">91岁</option>
                    <option value="92岁">92岁</option>
                    <option value="93岁">93岁</option>
                    <option value="94岁">94岁</option>
                    <option value="95岁">95岁</option>
                    <option value="96岁">96岁</option>
                    <option value="97岁">97岁</option>
                    <option value="98岁">98岁</option>
                    <option value="99岁">99岁</option>
                    <option value="100岁">100岁</option>
                    <option value="100岁以上">100岁以上</option>
                </select>
                <br><br>
                <span>您的性别是：</span>
                <input type="radio" name="性别" value="男" id="male"><label for="male"><span>男</span></label>
                <input type="radio" name="性别" value="女" id="female"><label for="female"><span>女</span></label>
                <br><br>
                <span>您玩《Minecraft》多久了？</span>
                <select name="您玩《Minecraft》多久了？" id="background">
                    <option value="未选择">请选择</option>
                    <option value="不到1个月">不到1个月</option>
                    <option value="1-6个月">1-6个月</option>
                    <option value="6个月-1年">6个月-1年</option>
                    <option value="1-2年">1-2年</option>
                    <option value="2年-5年">2年-5年</option>
                    <option value="5年以上">5年以上</option>
                    <option value="15年">15年</option>
                </select>
                <br><br>
                <span>您什么时候开始玩《Minecraft》？</span>
                <input type="date" name="您什么时候开始玩《Minecraft》？" id="background" value="<?php echo date('Y-m-d'); ?>"> <span>（默认今天）</span>
                <br><br>
                <span>你通常在哪个平台上玩？</span>
                <select name="你通常在哪个平台上玩？" id="background">
                    <option value="未选择">请选择</option>
                    <option value="Windows">Windows</option>
                    <option value="Mac OS">Mac OS</option>
                    <option value="游戏主机（Xbox、PS、Switch等）">游戏主机（Xbox、PS、Switch等）</option>
                    <option value="Android">Android</option>
                    <option value="iOS">iOS</option>
                </select>
                <br><br>
                <span>您在哪些平台上玩过《Minecraft》？</span>
                <br><br><input type="checkbox" name="平台1" value="Windows" id="Windows"><label for="Windows"> Windows</label>
                <br><input type="checkbox" name="平台2" value="Mac OS" id="Mac OS"><label for="Mac OS"> Mac OS</label>
                <br><input type="checkbox" name="平台3" value="游戏主机" id="游戏主机"><label for="游戏主机"> 游戏主机（Xbox、PS、Switch等）</label>
                <br><input type="checkbox" name="平台4" value="Android" id="Android"><label for="Android"> Android</label>
                <br><input type="checkbox" name="平台5" value="iOS" id="iOS"><label for="iOS"> iOS</label>
                <br><br>
                <span>你最喜欢的游戏模式是？</span>
                <select name="你最喜欢的游戏模式是？" id="background">
                    <option value="未选择">请选择</option>
                    <option value="生存模式">生存模式</option>
                    <option value="创造模式">创造模式</option>
                    <option value="冒险模式">冒险模式</option>
                    <option value="多人模式">多人模式（如服务器）</option>
                </select>
                <br><br>
                <span>你是否会关注《Minecraft》的新闻？</span>
                <br><br><input type="radio" name="是否会关注《Minecraft》的新闻？" value="每次更新都详细了解并第一时间体验" id="11"><label for="11"><span>每次更新都详细了解并第一时间体验</span></label>
                <br><input type="radio" name="是否会关注《Minecraft》的新闻？" value="偶尔看看更新了什么" id="22"><label for="22"><span>偶尔看看更新了什么</span></label>
                <br><input type="radio" name="是否会关注《Minecraft》的新闻？" value="只在感兴趣的情况下关注" id="33"><label for="33"><span>只在感兴趣的情况下关注</span></label>
                <br><input type="radio" name="是否会关注《Minecraft》的新闻？" value="从不关注更新" id="44"><label for="44"><span>从不关注更新</span></label>
                <br><br>
                <span>你是否参加过《Minecraft》的线下活动或聚会(如MCPark、MINECON)？</span>
                <br>
                <br><input type="radio" name="是否参加过《Minecraft》的线下活动或聚会？" value="参加过" id="55"><label for="55"><span>参加过</span></label>
                <br><input type="radio" name="是否参加过《Minecraft》的线下活动或聚会？" value="没有参加过" id="66"><label for="66"><span>没有参加过</span></label>
                <br>
                <hr id="2">
                <br>
                <h1 style="text-align: center;">你对《Minecraft》的看法？</h1>
                <br>
                <textarea name="你对《Minecraft》的看法？" rows="10" cols="139" id="background"></textarea>
                <br>
                <hr id="3">
                <br>
                <h1 style="text-align: center;">你对本问卷的建议？</h1>
                <br>
                    <textarea name="你对本问卷的建议？" rows="10" cols="139" id="background"></textarea>
                <br>
                <br>
                <span>您可以上传您的Minecraft照片，与其他玩家一起分享您的Minecraft快乐！</span>
                <br>
                <br>
                <input type="file" name="fileUpload">
                <br>
                <br>
                <br>
                <br>
                <br>
                <button type="submit" name="question">提交问卷</button><button type="reset">重置问卷</button>
                <br>
                <br>
                <br>
                <br>
                <br>
            </form>
            <a href="homepage.html"><button>返回首页</button></a>
        </div>
    </div>
    <audio src="audio/Aaron Cherof.mp3" autoplay></audio>
</body>
</html>