<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buttermilk Pancakes Recipe</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .recipe {
            padding: 20px;
            border-bottom: 2px solid #e9ecef;
            margin-bottom: 20px;
        }
        .recipe img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 10px;
        }
        .recipe h2 {
            font-size: 28px;
            margin-bottom: 10px;
            color: #343a40;
        }
        .recipe p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
            color: #6c757d;
        }
        .recipe ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        .recipe ul li {
            margin-bottom: 5px;
            color: #6c757d;
        }
        .recipe ol {
            margin-top: 10px;
            margin-bottom: 15px;
            padding-left: 20px;
            color: #343a40;
        }
        .recipe ol li {
            margin-bottom: 10px;
            line-height: 1.6;
        }
        .btn {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 8px 16px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
        // Include the file containing the function
        include 'pancakesrecipe.php';
        // Call the function from the included file
        echo getButtermilkPancakesRecipe();
    ?>
        
        <a href="<?=ROOT?>/home" class="btn">Back to Recipes</a>
    </div>
</body>
</html>
