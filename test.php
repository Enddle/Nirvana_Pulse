<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>涅槃·脉搏</title>
    <link href="http://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <script src="http://cdn.bootcss.com/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- <script src="a.js"></script> -->
    <link href="css/index.css" rel="stylesheet" />

    <!-- <meta http-equiv="refresh" content="2"> -->
</head>
<body>

    <div id="anim">
        <div id="gradient"></div>
        <div class="mask">
            <div id="pulse_left">
                <div id="pm0"></div>
                <div id="pm1"></div>
            </div>
            <div id="pulse">
                <div id="p0"></div>
                <div id="p1"></div>
                <div id="p2"></div>
                <div id="p3"></div>
                <div id="p4"></div>
                <div id="p5"></div>
                <div id="p6"></div>
            </div>
            <div id="pulse_right">
                <div id="pm0"></div>
                <div id="pm1"></div>
            </div>
        </div>
        <div id="point">
    </div>

</body>
<style>
#anim {
    overflow: hidden;
}
#gradient {
    width: 300px;
    height: 185px;
    background: linear-gradient(to right, #222, #2364b9);
    position:relative;
    /*float: left;*/
}
.mask {
    overflow-x: hidden;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 0;
    margin: 0;
}
#pulse_left {
    width: 60%;
    float: left;
}
#pulse_right {
    margin-right: -170px;
    width: 40%;
    float: left;
}
#pm0 {
    height: 100px;
    background: #222;
}
#pm1 {
    height: 82px;
    margin-top: 3px;
    background: #222;
}
#pulse {
    float: left;
}
#p0 {
    width: 0;
    border-top: 100px solid #222;
    border-left: 40px solid #222;
    border-right: 35px solid transparent;
}
#p1 {
    width: 71px;
    margin-left: 99px;
    margin-top: -100px;
    border-top: 100px solid #222;
    border-left: 35px solid transparent;
}
#p2 {
    width: 0;
    margin-left: 75px;
    margin-top: -100px;
    border-top: 160px solid #222;
    border-left: 35px solid transparent;
    border-right: 35px solid transparent;
}
#p3 {
    width: 50px;
    height: 82px;
    margin-top: -57px;
    background: #222;
}
#p4 {
    width: 0;
    margin-left: 14px;
    margin-top: -170px;
    border-bottom: 170px solid #222;
    border-left: 60px solid transparent;
    border-right: 38px solid transparent;
}
#p5 {
    width: 0;
    margin-left: 108px;
    margin-top: -92px;
    border-bottom: 92px solid #222;
    border-left: 20px solid transparent;
    border-right: 30px solid transparent;
}
#p6 {
    width: 40px;
    margin-left: 130px;
    height: 82px;
    margin-top: -82px;
    background: #222;
}
/*#point {
    position: relative;
    width: 20px;
    height: 20px;
    z-index: 10;
    background: radial-gradient(red 10%, transparent 50%);
    animation: point 4s infinite;
    -webkit-animation: point 4s infinite;
}

@keyframes point {
    0%   {left:0; top:-92px;}
    60%  {left:70%; top:-92px;}
    100% {left:100%; top:-92px;}
}

@-webkit-keyframes point {
    0%   {left:-300px; top:0px;}
    100% {left:100%; top:0px;}
}*/

#gradient {
    animation: gradient 4s infinite;
    -webkit-animation: gradient 4s infinite;	/* Safari 和 Chrome */
    /*-moz-animation: myfirst 5s;
    -o-animation: myfirst 5s;*/
}

@keyframes gradient /* Safari 和 Chrome */ {
    0%   {left:-300px; top:0px;}
    100% {left:100%; top:0px;}
}

@-webkit-keyframes gradient /* Safari 和 Chrome */ {
    0%   {left:-300px; top:0px;}
    100% {left:100%; top:0px;}
}

/*@-o-keyframes myfirst */
/*@-moz-keyframes myfirst */
</style>
</html>
