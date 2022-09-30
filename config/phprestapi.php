<?php
require_once "../config/koneksi.php";
   if(function_exists($_GET['function'])) {
         $_GET['function']();
      }   
   function get_user()
   {
      global $connect;      
      $query = $connect->query("SELECT * FROM user");            
      while($row=mysqli_fetch_object($query))
      {
         $data[] =$row;
      }
      $response=array(
                     'status' => 1,
                     'message' =>'Success',
                     'data' => $data
                  );
      header('Content-Type: application/json');
      echo json_encode($response);
   }   
   
   function get_user_id()
   {
      global $connect;
      if (!empty($_GET["id_user"])) {
         $id = $_GET["id_user"];      
      }            
      $query ="SELECT * FROM user WHERE id_user= $id";      
      $result = $connect->query($query);
      while($row = mysqli_fetch_object($result))
      {
         $data[] = $row;
      }            
      if($data)
      {
      $response = array(
                     'status' => 1,
                     'message' =>'Success',
                     'data' => $data
                  );               
      }else {
         $response=array(
                     'status' => 0,
                     'message' =>'No Data Found'
                  );
      }
      
      header('Content-Type: application/json');
      echo json_encode($response);
       
   }
   function insert_user()
      {
         global $connect;   
         $check = array('id_user' => '', 'nama_user' => '', 'username' => '', 'pass_user' => '', 'level' => '');
         $check_match = count(array_intersect_key($_POST, $check));
         if($check_match == count($check)){
         
               $result = mysqli_query($connect, "INSERT INTO user SET
               id_user = '$_POST[id_user]',
               nama_user = '$_POST[nama_user]',
               username = '$_POST[username]',
               pass_user = '$_POST[pass_user]',
               level = '$_POST[level]'");
               
               if($result)
               {
                  $response=array(
                     'status' => 1,
                     'message' =>'Insert Success'
                  );
               }
               else
               {
                  $response=array(
                     'status' => 0,
                     'message' =>'Insert Failed.'
                  );
               }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Wrong Parameter'
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
   function update_user()
      {
         global $connect;
         if (!empty($_GET["id"])) {
         $id = $_GET["id"];      
      }   
         $check = array('id_user' => '', 'nama_user' => '', 'username' => '', 'pass_user' => '', 'level' => '');
         $check_match = count(array_intersect_key($_POST, $check));         
         if($check_match == count($check)){
         
              $result = mysqli_query($connect, "UPDATE user SET               
               nama_user = '$_POST[nama_user]',
               username = '$_POST[username]',
               pass_user = '$_POST[pass_user]',
               level = '$_POST[level]' WHERE id_user = $id");
         
            if($result)
            {
               $response=array(
                  'status' => 1,
                  'message' =>'Update Success'                  
               );
            }
            else
            {
               $response=array(
                  'status' => 0,
                  'message' =>'Update Failed'                  
               );
            }
         }else{
            $response=array(
                     'status' => 0,
                     'message' =>'Wrong Parameter',
                     'data'=> $id
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
   function delete_user()
   {
      global $connect;
      $id = $_GET['id'];
      $query = "DELETE FROM user WHERE id_user=".$id;
      if(mysqli_query($connect, $query))
      {
         $response=array(
            'status' => 1,
            'message' =>'Delete Success'
         );
      }
      else
      {
         $response=array(
            'status' => 0,
            'message' =>'Delete Fail.'
         );
      }
      header('Content-Type: application/json');
      echo json_encode($response);
   }
 ?>