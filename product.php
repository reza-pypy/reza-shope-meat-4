<?php
session_start();
include("header.php");

// تنظیمات اتصال به پایگاه داده
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "c-meat";

// اتصال به دیتابیس
$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("اتصال ناموفق: " . $conn->connect_error);
}

// بازیابی اطلاعات تصاویر از جدول
$sql = "SELECT `id`, `filename`, `description`, `title`, `price` FROM `images` WHERE 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='container mt-4'>";
    echo "<div class='row'>";
    
    while ($row = $result->fetch_assoc()) {
 
        
        echo "<div class='producttwo col-md-4 mb-4'>";
        echo "<div class='product card'>";

        echo "<img src='" . $row["filename"] . "' alt='" . $row["description"] . "' class='pic card-img-top' style='max-height: 200px; object-fit: cover; border-radius:25px; width: 100%; backdrop-filter:blur(15px);'>";
        echo "<div class='card-body'>";
        echo "<h1 id='des' class='card-text'>" . $row["title"] . "</h1>";
        echo "<p id='price' class='price card-text'><h3>:قیمت محصول</h3>" . $row["price"] ."<h3>تومان</h3></p>";
        echo "<p  class='card-text'>" . $row["description"] . "</p>";
        
        
        

        // نمایش پنل مدیریت فقط برای مدیر
        if (isset($_SESSION["role"]) && $_SESSION["role"] === 'admin') {
            echo '<div class="text-center">';
            echo '<button class="btn btn-warning btn-sm mb-2" onclick="toggleActionButtons(this)">
                     <i class="fas fa-edit"></i> مدیریت
                  </button>';
            echo '<div class="action-buttons mt-2">';
            
            
            // فرم ویرایش
            echo '<form action="edit.php" method="post" enctype="multipart/form-data" class="mb-2">';
            echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
            echo '<input type="text" name="description" placeholder="توضیح جدید" class="form-control mb-2" required>';
            echo '<input type="text" name="title" placeholder="تایتل" class="form-control mb-2" required>';
            echo '<input type="text" name="price" placeholder="قیمت" class="form-control mb-2" required>';
            echo '<input type="file" name="image" class="form-control mb-2" required>';
            echo '<button type="submit" class="btn btn-primary btn-block">ویرایش</button>';
            echo '</form>';
            
            // فرم حذف
            echo '<form action="delete.php" method="post">';
            echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
            echo '<button type="submit" class="btn btn-danger btn-block">حذف</button>';
            echo '</form>';
            
            // فرم افزودن محصول جدید
            echo '<form action="add.php" method="post" enctype="multipart/form-data" class="mt-3">';
            echo '<input type="text" name="description" placeholder="توضیحات" class="form-control mb-2" required>';
            echo '<input type="text" name="title" placeholder="تایتل" class="form-control mb-2" required>';
            echo '<input type="text" name="price" placeholder="قیمت" class="form-control mb-2" required>';
            echo '<input type="file" name="image" class="form-control mb-2" required>';
            echo '<button type="submit" class="btn btn-success btn-block">افزودن محصول</button>';
            echo '</form>';


            echo '</div>'; // پایان action-buttons
            echo '</div>'; // پایان text-center
        }

        echo "</div>"; // پایان card-body
        echo "</div>"; // پایان card
        echo "</div>"; // پایان col-md-4
    }

    echo "</div>"; // پایان row
    echo "</div>"; // پایان container
} else {
    echo "<div class='alert alert-warning text-center'>هیچ تصویری یافت نشد.</div>";
}

$conn->close();
?>

<!-- استایل‌های بهینه‌شده -->
<style>
    .action-buttons {
        display: none; /* پنل مدیریت ابتدا مخفی باشد */
        margin-top: 10px;
        padding: 15px;
        background: #f8f9fa;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    .btn-block {
        width: 100%;
    }
    #des{
        text-align:center;
        justify-content: center; 
    }
    .card-text{direction: rtl;
        
    }
    #price{text-align:left;}
    .producttwo{
        border-style: inset;
        background-color: ;
        backdrop-filter:blur(15px);
         }
    .product {
border-style: inset;
justify-content: center; 
border-radius:5%;
background-color:white;    

}
.price{
   
    image-resolution: center ;
}

</style>

<!-- جاوااسکریپت برای نمایش دکمه‌های مدیریتی -->
<script>
    function toggleActionButtons(button) {
        var parent = button.closest('.card-body'); // پیدا کردن دکمه مدیریت در کارت محصول
        var actionButtons = parent.querySelector('.action-buttons'); 
        if (actionButtons.style.display === "none" || actionButtons.style.display === "") {
            actionButtons.style.display = "block"; // نمایش دکمه‌های مدیریتی
        } else {
            actionButtons.style.display = "none"; // مخفی‌سازی
        }
    }
</script>

