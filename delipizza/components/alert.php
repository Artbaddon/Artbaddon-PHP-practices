<?php
if(isset($success_msg)){
    foreach($success_msg as $success_msg){
        echo'<script>alert("'.$success_msg.'","","success");</script>';
    }
    
}
if(isset($warning_msg)){
    foreach($warning_msg as $warning_msg){
        echo'<script>alert("'.$warning_msg.'","","warning");</script>';
    }
    
}
if(isset($info_msg)){
    foreach($info_msg as $info_msg){
        echo'<script>alert("'.$info_msg.'","","info");</script>';
    }
   
}
if(isset($error_msg)){
    foreach($error_msg as $error_msg){
        echo'<script>alert("'.$error_msg.'","","error");</script>';
    }
}
