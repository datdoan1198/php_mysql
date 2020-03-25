<?php
     session_start(); // Đăng ký phiên làm việc với SESSION

     $info = array();
     $info['ID'] = "001";
     $info['NAME'] = "Zent Group";
     $info['EMAIL'] = "zentgroup@gmail.com";
     

     $_SESSION['info'] = $info;   // lưu toàn bộ mảng info và session có tên info
          echo "<pre>";
          print_r($_SESSION);
          echo "</pre>";
?>