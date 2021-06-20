<?php 
require('function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<form class="calc" id="calc"  action="/"  method="POST">
    <input class="field" type="text" name="result"/>
    <div class="container">
        <div class="number block">
            <input type="hidden" name="currentoperation" id="currentoperation" value=""/>
            <input type="hidden" name="mode" id="mode" value=""/>
            <input type="hidden" name="result" id="result"/>
            <input type="button" name="num1" value="1" class="btn-num" />
            <input type="button" name="num2" value="2" class="btn-num" />
            <input type="button" name="num3" value="3" class="btn-num" />
            <input type="button" name="num4" value="4" class="btn-num" />
            <input type="button" name="num5" value="5" class="btn-num" />
            <input type="button" name="num6" value="6" class="btn-num" />
            <input type="button" name="num7" value="7" class="btn-num" />
            <input type="button" name="num8" value="8" class="btn-num" />
            <input type="button" name="num9" value="9" class="btn-num" />
            <input type="button" name="num0" value="0" class="btn-num" />
        </div>
        <div class="operation block">
            <input type="button" name="plus" value="+" class="act" />
            <input type="button" name="minus" value="-" class="act" />
            <input type="button" name="umnozh" value="*" class="act" />
            <input type="button" name="delen" value="/" class="act" />
            <input type="button" name="kvadrat" value="x2" class="act"/>
            <input type="button" name="invere" value="1/x" class="act"/>
            <input type="button" name="koren" value="sqrt" class="act"/>
            <input type="button" name="percent" value="percent" class="act"/>
            <input type="button" name="reset" value="reset" id="reset">
            <input type="submit" value="&#61;" class="equals"/>
        </div>
    </div> 
</form>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="/main.js"></script>
</body>
</html>