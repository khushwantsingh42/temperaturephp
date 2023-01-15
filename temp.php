<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link href="https://fonts.googleapis.com/css2?family=Mulish:wght@500&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;padding: 0; box-sizing: border-box;font-family: 'Mulish', sans-serif;
        }
        h1{
            text-align: center; line-height: 20vh;
        }
        .main-div{width: 100%; height: 80vh;display: flex; justify-content: space-around;
        align-items: center;}
        .left-side{background-color: #dfe6e9;}
        .left-side img{ width: 400px;height:auto ;border-radius: 10px;}
        .right-side{width:400px;height:400px;background-color:#88d3f3;border-radius: 10px;display: flex;justify-content: center;
        align-items: center;text-align: center; flex-direction: column;}
        .input1{width: 250px;
        height: 40px;
    padding: 5px;
outline: none;
border-radius: 1px solid grey;
border-radius: 5px;}
.selection{
    width: 100%;
    margin: 20px 0;
}
.btn{padding: 10px 16px;
border-radius: 5px;
outline: nono;
border: none;
background-color: #6c63ff;
color: white;
font-size: 0.9rem;}
p{ margin: 20px 0 0 0;}
    </style>
</head>

<body>
    <header>
        <h1>Tempreture Conversen</h1>
        <div class="main-div">
            <div class="left-side">
<img src="gh.gif" >

            </div>
            <div class="right-side">
                <form method="post">
                    <input type="text" name="num" placeholder="Enter number" class="input1" required>
                    <div class="selection">
                        <label>kelvin</label>
                        <input type="radio" name="unit" value="kelvin">
                        <label>celcious</label>
                        <input type="radio" name="unit" value="calcious">
                        <label>ferenite</label>
                        <input type="radio" name="unit" value="ferenhite">

                    </div>
                    <input type="submit" name="submi" class="btn" value="convert now">
                    <div>
                        <p>
                    <?php 
                    if(isset($_POST['submi'])){
                        $num=$_POST['num'];
                        $temp = $_POST['unit'];

                        if($temp == "calcious"){
                            $result = $num * 9 / 5 + 32;
                            $result1 =$num + 273.15;
                            echo "the celcious in farenhite is :" . $result." in kelvin :".$result1;
                        }
                        elseif($temp == "kelvin"){
                            $result = $num - 273.15;
                            $result1 =($num - 273.15) *9/5 + 32;
                            echo "the kelvin in celcious  is :" . $result." and in ferenhite :".$result1;
                        }
                        elseif($temp == "farenhite"){
                            $result = ($num - 32) * 5 / 9;
                            $result1 = ($num -32) * 5/9 + 273.15;
                            echo "the farenhite in celcious  is :" . $result." and in kelvin :".$result1;
                        }
                        else{
                            echo"now";
                        }
                    }
                    
                    ?>        
                    </p>
                    </div>
            </div>
        </div>
    </header>


</body>

</html>