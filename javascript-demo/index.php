<?php

    $fruits = array("apple", "peach", "watermelon");
    $price_list = [
        'apple' => 1.2,
        'peach' => 1.7,
        'watermelon' => 5.99,
    ];
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        div { display:block; },
        
    </style>

    <link rel="stylesheet" type="text/css" href="./custom.css">
</head>
<body id="body">
    <button onclick="change_body()">Change Body</button>
    <h1 id="title" style="color:blue;">Fruit Shop</h1>
    
    <h2 id="desc" style="color:black;">This is the menu of the fruit on sale.</h2>
    <button id="desc_color_button" onclick="desccolorchange()">Change Desc color</button>
    <div>
        <table>
            <tr>
                <th><?php echo $fruits[0]; ?></th>
                <th><?php echo $fruits[1]; ?></th>
                <th><?php echo $fruits[2]; ?></th>
            </tr>
            <tr>
                <td><?php echo $price_list[$fruits[0]]; ?></td>
                <td><?php echo $price_list[$fruits[1]]; ?></td>
                <td><?php echo $price_list[$fruits[2]]; ?></td>
            </tr>
        </table>
    </div>
    <p>Use the form below to place your order.</p>
    <br>
    <div>
        <form action="./purchase.php" method="POST" onsubmit="save_input()">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <select name="fruit_ordered" id="fruit_ordered">
                <option value="<?php echo $fruits[0]; ?>"><?php echo $fruits[0]; ?></option>
                <option value="<?php echo $fruits[1]; ?>"><?php echo $fruits[1]; ?></option>
                <option value="<?php echo $fruits[2]; ?>"><?php echo $fruits[2]; ?></option>
            </select>
            <label for="quantity">Quantity (between 1 and 5):</label>
            <input type="number" id="quantity" name="quantity" min="1" max="5">
            <input type="submit" value="Submit">
        </form>
        
    </div>
    <script>
        function change_body(){
            body = document.getElementById("body");
            body.innerHTML="HACKKKK";
        }
        function desccolorchange(){
            title = document.getElementById("desc");
            if (title.style.color == "black"){
                title.style.color = "cyan";
            }else if (title.style.color == "cyan"){
                title.style.color = "black";
            }
        }
        function colorchange(){
            title = document.getElementById("title");
            if (title.style.color == "blue"){
                title.style.color = "red";
            }else if (title.style.color == "red"){
                title.style.color = "blue";
            }
            console.log("run")
        }
        window.setInterval(colorchange, 1000);
        
        function save_input(){
            cart_qty = document.getElementById("quantity").value;
            cart_name = document.getElementById("fname").value;
            cart_fruit = document.getElementById("fruit_ordered").value;
            localStorage.setItem("qty", cart_qty);
            localStorage.setItem("fname", cart_name);
            localStorage.setItem("fruit", cart_fruit);
            localStorage.getItem("lastname");
        }


    </script>
</body>
</html>