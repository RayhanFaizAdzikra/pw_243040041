<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            display: flex;
            flex-direction: column;
            
        }
        .box{
           
            display: flex;
           
        }
        .box div{
            width: 100px;
            height: 100px;
            background-color: orange;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            border: 1px solid black;

        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
            <div>1</div>
        </div>
        <div class="box">
            <div>2</div>
            <div>2</div>
        </div>
        <div class="box">
            <div>3</div>
            <div>3</div>
            <div>3</div>
        </div>
    </div>
</body>
</html>