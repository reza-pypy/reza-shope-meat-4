<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>گوشت شتر مرغ ممتاز</title>
    <link rel="stylesheet" href="bootstrap-grid.css">
    <style>
  
        
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('images/2232080.jpg');
            backdrop-filter:blur(15px);
            background-repeat: no-repeat;
            background-position: center; 
            background-size: cover;


        }
        header {
            background-color: #b22222;
            color: white;
            padding: 10px 0;
            text-align: center;
        }
        #l{float: left;
            width: 100px;
        }
           
        #r{width: 100px;
            height: auto;
            margin-top: auto;
            margin-bottom: auto;
            float: right;
        }
        nav {
            margin: 10px 0;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
        }
        .container {
            width: 80%;
            margin: auto;
        }
        h2{text-align: center;}
        .gallery {
          
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            
        }
        .gallery-item {direction: rtl;
            width: 30%;
            margin-bottom: 20px;
            transition:0.3s;
        }
        .gallery-item :hover{font-size: 20px;}

        .gallery-item img {
            width: 100%;
            border-radius: 8px;
        }
 
        footer {
            background-color: #b22222;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        #slider {
    width: 90%;
    height: 465px;
    position: relative;
    margin: 20px auto;
    box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
    overflow: hidden;
    border-radius: 8px;
}

#slider img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
}

.slide {
    display: none;
    position: absolute;
    width: 100%;
    height: 100%;
    transition: opacity 0.5s ease;
}

.slide.active {
    display: block;
}

.prev, .next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    color: white;
    font-size: 30px;
    font-weight: bold;
    padding: 16px;
    cursor: pointer;
    background-color: rgba(0, 0, 0, 0.3);
    border-radius: 50%;
    text-decoration: none;
    user-select: none;
    z-index: 10;
    background-color: brown;
}

.prev:hover, .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

.prev {
    left: 20px;
}

.next {
    right: 20px;
}
   
        
    </style>
</head>

<body>
    




<header>
 
    <img id="l" src="l.png" alt="" >
    <img id="r" src="r.png" alt="">
    <h1>قصابی آنلاین ما</h1>
    <nav class="container">
        <a href="index.php">خانه</a>
        <a class="col-12 col-lg" href="product.php">محصولات</a>
        <a class="col-12 col-lg" href="#">درباره ما</a>
        <a class="col-12 col-lg" href="#">تماس با ما</a>
<?php 
                    if (isset($_SESSION["login"])) { 
                        echo '<li><a href="logout.php" class="btn-special">خروج</a></li>';
                    } else {
                        echo '<li><a href="regis.php" class="btn-special">ثبت‌نام</a></li>';
                        echo '<li><a href="login.php" class="btn-special">ورود</a></li>';
                    }
                    ?>
    </nav>
</header>