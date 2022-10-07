<?php
include "../config/koneksi.php";

?>
<?php

   if(function_exists($_GET['function'])) {
         $_GET['function']();
      }   
   function get_user()
   {
      global $koneksi1;      
      $query = mysqli_query($koneksi1,"SELECT * FROM user ");            
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
   
   function get_id_user()
   {
      global $koneksi1;
      if (!empty($_GET["id_user"])) {
         $id_user = $_GET["id_user"];      
      }            
      $query = mysqli_query($koneksi1,"SELECT * FROM user WHERE id_user = '$id_user'");      
      while($row = mysqli_fetch_object($query))
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
   function insert_id_user()
      {
         global $koneksi1;   
         $check = array('id_user' => '', 'nama_user' => '', 'username' => '', 'pass_user' => '', 'level' => '');
         $check_match = count(array_intersect_key($_POST, $check));
         if($check_match == count($check)){
         
               $result = mysqli_query($koneksi1, "INSERT INTO user SET
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
   function update_id_user()
      {
         global $koneksi1;
         if (!empty($_GET["id_user"])) {
         $id_user = $_GET["id_user"];      
      }   
         $check = array('id_user' => '','username' => '','nama_user' => '', 'pass_user' => '', 'level' => '');
         $check_match = count(array_intersect_key($_POST, $check));         
         if($check_match == count($check)){
         
              $result = mysqli_query($koneksi1, "UPDATE user SET               
               username = '$_POST[username]',
               nama_user = '$_POST[nama_user]',
               pass_user = '$_POST[pass_user]',
               level = '$_POST[level]' WHERE id_user = $id_user");
         
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
                     'data'=> $id_user
                  );
         }
         header('Content-Type: application/json');
         echo json_encode($response);
      }
   function delete_id_user()
   {
      global $koneksi1;
      $id_user = $_GET['id_user'];
      $query = "DELETE FROM user WHERE id_user=".$id_user;
      if(mysqli_query($koneksi1, $query))
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