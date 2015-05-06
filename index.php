<?php include "includes/header.php"; ?>
        <div class="row" style="padding:2% 10%;">
            <?php foreach($servicesusers as $serv_user): ?>
                <div class="col-md-<?= $cols;?>">
                        <?php 
                            try {
                                $dataArray = explode(":",$serv_user);
                                $service = ucfirst($dataArray[0]);
                                if (!file_exists('classes/' . $service . '.php' )){
                                      throw new Exception ("Service \"" . $service . "\" not currently supported!");
                                }
                                $class = new $service($dataArray);
                                $class->getPlayer();
                            } catch (Exception $e) {
                                echo $e->getMessage();
                            }
                        ?>
                </div>
            <?php endforeach ?>
        </div>
<?php include "includes/footer.php"; ?>