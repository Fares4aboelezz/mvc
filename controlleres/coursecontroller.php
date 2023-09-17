<?php 
include "../models/course.php";
class CourseController{

    public function list(){
        $course1 = new courses();
     $coursess= $course1->all();
        require "../views/course/list_courses.php";
    }
    public function insert(){
        require "../views/course/insert_courses.php";
    }
    public function store($data){
        $course1 = new courses();
        $coursess= $course1->store($data);
           require "../views/course/list_courses.php";
    }
    public function edit($id){
        require "../views/course/update_courses.php";
    }
    public function update($data){
        $course1 = new courses();
        $coursess= $course1->update($data);
           require "../views/course/list_courses.php";
    }
    public function delete($id){
        $course1=new courses();
        $coursess=$course1->delete($id);
        require "../views/course/delete_courses.php";
    }
        
    }
    $userController = new CourseController();
    echo "<pre>";
    print ("localhost".$_SERVER['REQUEST_URI']);
    echo "</pre>";
    if($_SERVER['REQUEST_URI'] == 'localhost/training/controlleres/coursecontroller.php'){
        $userController->list();  
      }
      elseif($_SERVER['REQUEST_URI'] == 'localhost/training/controlleres/insert_courses.php'){
        $userController->insert();  
      }
      elseif($_SERVER['REQUEST_URI'] == 'localhost/training/controlleres/update_courses.php'){
        $userController->edit($id);  
      }
      elseif($_SERVER['REQUEST_URI'] == 'localhost/training/controlleres/delete_courses.php'){
        $userController->delete($id);  
      }
      die();


   
