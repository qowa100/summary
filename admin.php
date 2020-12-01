<?php 
    $title = 'Список заявок';
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');
    $template = [
         'client'=>[],
         'is_search' => false
    ];

    if(isset($_POST['search'])){
        $template['is_search'] = true;
        $search = $_POST['search'];
        

        $sql_client = "SELECT * FROM `clients` 
        WHERE `fio` like '%{$search}%' OR `email` like '%{$search}%' OR phone like '%{$search}%' 
        ORDER BY `creat_darte` DESC";
        $result_client = mysqli_query($link, $sql_client);
      
        
        while($data = mysqli_fetch_assoc($result_client)){
            $template['client'][] = $data;
        }
    }
    
?> 

<div class="text open">
    <h1>Список заявок</h1>
    <form method="POST">
        <input class="search-id" type="text" name="search" placeholder="ФИО, Email, Phone">
        <button class="click-id" type="submit">Искать</button>
    </form>
    <?php if($template['is_search']): ?>
        <?php if(!empty($template['client'])): ?>
            <?php foreach($template['client'] as $client): ?>
                <div class="client">
                    <a href="/client.php?id=<?=$client['id']?>"><?=$client['id']?></a>
                    <div class="client-fio"><?=$client['fio']?></div>
                </div>
            <?php endforeach; ?>
            <?php else: ?>
                <p class="text-p">Поиск не дал результатов</p>
            <?php endif; ?>  
    <?php else: ?> 
        <p class="text-p">Введите поисковый запрос</p>
    <?php endif; ?>
</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');?>
