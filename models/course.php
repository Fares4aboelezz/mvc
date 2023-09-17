<?php

class courses{

    public function all(){
      require "db.php";
        $query="SELECT * FROM courses";
        $result=mysqli_query($con,$query);
        $ress=mysqli_fetch_assoc($result);
     return $ress;
    }
    public function store($data){
        require "db.php";
        $name=$data['name'];
        $description=$data['description'];
        $price=$data['price'];
        $discount=$data['discount'];
        $rate=$data['rate'];

$query="INSERT INTO courses (name,description,price,discount,rate)" ;
$query .="VALUES ('$name','$description','$price','$discount','$rate')";
$res=mysqli_query($con,$query);

}
public function update($data){
    require "db.php";
    $name=$data['name'];
    $description=$data['description'];
    $price=$data['price'];
    $discount=$data['discount'];
    $rate=$data['rate'];

    $query="UPDATE courses SET ";
    $query .=" name='$name' ";
    $query .="description='$description' ";
    $query .=" price='$price' ";
    $query .=" discount='$discount' ";
    $query .=" rate='$rate' ";

}
public function delete($id){
require "db.php";
$name=$data['name'];
$description=$data['description'];
$price=$data['price'];
$discount=$data['discount'];
$rate=$data['rate'];

$query ="DELETE FROM courses ";
$query .="WHERE id=$id";


}




}


