<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <h1>Кабинет пользователя</h1>
            
            <h3>Привет, <?php echo $user['name'];?>!</h3>
            <ul>
                <li><a href="/cabinet/edit">Редактировать данные</a></li>

            </ul>
            <div>
                <form method="POST">
                <input type="text" name="key" id="key" placeholder="key">
                <input type="text" name="value" id="value" placeholder="value">
                <input type="submit" name="save">
            </form>
             </div>
             <div>
                 <?php
                 if(isset ($data)){
                   /*$arr = explode('\n', $data);
                   print_r($arr);
                   echo "<pre>";
                   print_r($data);
                   echo "</pre>";*/
                   foreach ($data as $one) {
                    if (!empty($one)) {

                        $arr = unserialize($one);
                        echo 'key: ';
                        echo $arr['key'];
                        echo ' value: ';
                        echo $arr['value'];
                        echo '<br/>';
                    }


               }
                 }
                  ?>
             </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>