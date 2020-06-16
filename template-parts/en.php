<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>English Page</title> 
    <style>
        .content{
            display:flex;
            width:100%;
            height:100%;
            align-items:center;
            justify-content:center;
        }
        span{
            margin-top:20%;
            height:40px;
            line-height:40px;
        }
        .lan_switch {
        position: absolute;
        color: #fff;
        background-color: #173196;
        z-index: 100;
        width: 60px;
        font-size: 14px;
        border-radius: 3px;
        cursor: pointer;
        height: 40px;
        line-height: 40px;
        text-align: center;
        text-decoration: none;
        font-family: Microsoft YaHei;
        margin-left:15px;
    }
    .lan_switch:hover{
        color:#fff;
    }
    </style>
</head>

<body class="content">
<span>This is a English Page<a class="lan_switch" href="?lan=zh">中文</a></span>
</body>

</html>
