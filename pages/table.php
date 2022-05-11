<?php require_once("./head.php") ?>
    <div class="container">
    <?php //if(isset($_POST['simbolo'])) {
    //     echo '
    //     <div class="row">
    //         <div class="box">
    //             <div class="row m-0 justify-content-center">
    //                 <div class="box-pill"></div>
    //                 <div class="box-pill"></div>
    //                 <div class="box-pill border-none"></div>
    //             </div>
    //             <div class="row m-0 justify-content-center">
    //                 <div class="box-pill"></div>
    //                 <div class="box-pill"></div>
    //                 <div class="box-pill border-none"></div>
    //             </div>
    //             <div class="row m-0 justify-content-center border-none">
    //                 <div class="box-pill"></div>
    //                 <div class="box-pill"></div>
    //                 <div class="box-pill border-none"></div>
    //             </div>
    //         </div>
    //     </div>
    //     ';
    // } else{
    // }  
    ?>
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <label class="d-block">Escolha um dos símbolos</label>
            </div>
            <div class="row justify-content-center">
                <form id="escolhaSimbolos" action="./start.php" method="get">
                    <input type="button" value="X" class="btn btn-lg btn-dark mr-3"></input>
                    <input type="button" value="O" class="btn btn-lg btn-dark"></input>
                </form>
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
    </div>
<?php require_once("./foot.php") ?>