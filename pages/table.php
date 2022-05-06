<?php require_once("./head.php") ?>

        <div class="container">
            <div class="row mb-3">
                <div class="container">
                    <div class="row justify-content-center">
                        <label class="d-block">Escolha um dos símbolos</label>
                    </div>
                    <div class="row justify-content-center">
                        <form action="./table.php" method="post"></form>
                            <input name="simbolo" type="submit" value="X" class="btn btn-lg btn-dark mr-3"></input>
                            <input name="simbolo" type="submit" value="O" class="btn btn-lg btn-dark"></input>
                    </div>
                </div>
            </div>
            <?php if(isset($_POST['simbolo'])) {?>
            <div class="row">
                <div class="box">
                    <div class="row m-0 justify-content-center">
                        <div class="box-pill"></div>
                        <div class="box-pill"></div>
                        <div class="box-pill border-none"></div>
                    </div>
                    <div class="row m-0 justify-content-center">
                        <div class="box-pill"></div>
                        <div class="box-pill"></div>
                        <div class="box-pill border-none"></div>
                    </div>
                    <div class="row m-0 justify-content-center border-none">
                        <div class="box-pill"></div>
                        <div class="box-pill"></div>
                        <div class="box-pill border-none"></div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </body>
</html>