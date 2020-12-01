<?php 
      $title = 'Наша главная цель - рассказать о Москве так, чтобы это было интересно всем!';
      include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
?>

<div class="forma">
<?php
    
     echo "<h1 class= forma-h1>Спасибо за вашу заявку</h1>";
     
     
     $sql_client = "INSERT INTO `clients` (`id`, `fio`, `email`, `phone`, `method`, `messege`, `creat_darte`)
     VALUE (NULL, '{$_POST['fio']}', '{$_POST['email']}', '{$_POST['phone']}', '{$_POST['method']}', '{$_POST['message']}', NOW())";

     $result_client = mysqli_query($link, $sql_client);

     if($result_client){
          echo "<h3 class='forma-yes'> 'Успех' </h3>";
     }else{
          echo "<h3 class='forma-no'> 'Неудача' </h3>";
     }
     if( $_POST['method'] == 'phone' ){
         echo "<h3 class='forma-p'>Уважаемый, {$_POST['fio']}, менеджер вам позвонит по номеру {$_POST['phone']}!</h3>";
     }elseif( $_POST['method'] == 'email' ){
         echo "<h3 class='forma-p'>Уважаемый, {$_POST['fio']}, менеджер вам напишет на {$_POST['email']}!</h3>";
     }elseif( $_POST['method'] == 'whatsapp' ){
         echo "<h3 class='forma-p'>Уважаемый, {$_POST['fio']}, менеджер вам напишет в whatsapp!</h3>";
     }elseif( $_POST['method'] == 'telegram' ){
         echo "<h3 class='forma-p'>Уважаемый, {$_POST['fio']}, менеджер вам напишет в telegram!</h3>";       
     }
     
?>
</div>

<?php include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');?>