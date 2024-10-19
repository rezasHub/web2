<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<select> 
	<option><a href="ganoon.html">قانون</a></option>
			<option><a href="ganon.html">مقررات</a></option>
			<option><a href="khed.html">خدمات</a></option>
	
	</select>
	
	
	<select>
				<?php
$con = mysqli_connect('localhost','root' , '' , 'shop');
if(mysqli_connect_errno()) {
    echo mysqli_connect_error();
}

$query = "SELECT * FROM `products`";
	
        if($result = mysqli_query($con , $query)) {
            while ($obj = mysqli_fetch_object($result)) {
                echo
                    '<option>' .
                       $obj->name  . $obj->description . $obj->price .'<a href="test.php?id='.$obj->id.'">add to cart</a>' .
                    '</option>';
            }
        }
    ?>
		</select>
	<br> <br>
	<?php
if(isset($_GET['id'])){
    $id = $_GET['id'];
    if(isset($_SESSION['products'][$id])) {
        $_SESSION['products'][$id] +=1;
    }
    else {
        $_SESSION['products'][$id] = 1;
    }

}
$con = mysqli_connect('localhost','root' , '' , 'shop');
if(mysqli_connect_errno()) {
    echo mysqli_connect_error();
}
    if (isset($_SESSION['products'])){
        foreach ($_SESSION['products'] as $id2 => $key) {
            $query = "SELECT * FROM products WHERE id=$id2";
            $result = mysqli_query($con , $query);
            $obj = mysqli_fetch_object($result);
            echo '<tr>' .
                '<td>'.$obj->name.'</td>' .
                '<td>'.$obj->description.'</td>' .
                '<td>'.$obj->price.'</td>' .
                '<td>'.$key.'</td>' .
                '<td><a href="test.php?deleteId='.$obj->id.'">Delete</a></td>' .
                '</tr>';
        }
    }
if(isset($_GET['deleteId'])) {
    unset($_SESSION['products'][$_GET['deleteId']]);
}

if(isset($_GET['emptyCart'])) {
    unset($_SESSION['products']);
}

    ?>
</body>
</html>