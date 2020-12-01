<?php 
    $title = 'Карточка клиента';
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?> 
<div class="forma">
     <h1>Карточка клиента</h1>
     <?php 
     
         if(isset($_GET['id'])){
             $id = $_GET['id'];
             
         $sql_client = "SELECT * FROM `clients` WHERE `id` = {$id}";
             $result_client = mysqli_query($link, $sql_client);
             $data = mysqli_fetch_assoc($result_client);
             
             echo "<h1>Карточка клиента: {$data['fio']}</h1>
                 <div class='client'>
                 <div class='client-fio'>{$data['fio']}</div>
                 <div class='client-email'>{$data['email']}</div>
                 <div class='client-phone'>{$data['phone']}</div>
                 <div class='client-method'>Способ связи: {$data['method']}</div>
                 <div class='client-messege'>Коментарии: {$data['messege']}</div>
                 <div class='client-creat_darte'>Дата создания заявки: {$data['creat_darte']}</div>
             </div>";

             
             
         }else{
             echo 'Не передан id клиента';
         }
        
     ?>
</div>
<?php include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');?>
