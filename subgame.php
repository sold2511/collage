<?php
session_start();
$_SESSION['sport'] = $_GET['sport'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body >
    <?php include('./Header.html') ?>
    <div class="flex items-center">
   <div class="px-5  my-5 mx-auto  ">
        <h2 class=" text-center text-4xl font-bolder my-5">Events</h2>
        <p  class=" text-center text-xl text-gray-500/60 ">Explore the various sports and events happening at the Khelo MBM.</p>
        <div class="my-8 flex flex-col md:flex-row gap-8 flex-wrap  ">
            <?php
                if( $_GET['sport']=='Athletics'){
                ?>
                <a href="./win.php?gen=Boy&sport=100m" class="border-2 w-[90%] shadow-xl md:w-[23.11%] h-[25vh] md:h-[17vw] overflow-hidden rounded-xl">
                <div class="w-[100%] h-[80%] border-b-2">
                    <img src="./images/athletics.jpg" class="w-[100%] h-[100%]" alt="">
                </div>
                <div class="w-[100%] h-[20%] px-5">
                    <div class="text-xl uppercase font-bolder tracking-wider">100 M</div>
                    <div class="text-sm text-purple-600 tracking-wider">Boys</div>
                </div>
                
            </a>
            <a href="./win.php?gen=Girl&sport=100m".<?php echo $_GET['sport'] ?> class="border-2 w-[90%] shadow-xl md:w-[23.11%] h-[25vh] md:h-[17vw] overflow-hidden rounded-xl">
                <div class="w-[100%] h-[80%] border-b-2">
                    <img src="./images/athletics.jpg" class="w-[100%] h-[100%]" alt="">
                </div>
                <div class="w-[100%] h-[20%] px-5">
                    <div class="text-xl uppercase font-bolder tracking-wider">100 M</div>
                    <div class="text-sm text-purple-600 tracking-wider">Girls</div>
                </div>
                
            </a>
            <a href="./win.php?gen=Boy&sport=200m" class="border-2 w-[90%] shadow-xl md:w-[23.11%] h-[25vh] md:h-[17vw] overflow-hidden rounded-xl">
                <div class="w-[100%] h-[80%] border-b-2">
                    <img src="./images/athletics.jpg" class="w-[100%] h-[100%]" alt="">
                </div>
                <div class="w-[100%] h-[20%] px-5">
                    <div class="text-xl uppercase font-bolder tracking-wider">200m</div>
                    <div class="text-sm text-purple-600 tracking-wider">Boys</div>
                </div>
                
            </a>
            <a href="./win.php?gen=Girl&sport=200m".<?php echo $_GET['sport'] ?> class="border-2 w-[90%] shadow-xl md:w-[23.11%] h-[25vh] md:h-[17vw] overflow-hidden rounded-xl">
                <div class="w-[100%] h-[80%] border-b-2">
                    <img src="./images/athletics.jpg" class="w-[100%] h-[100%]" alt="">
                </div>
                <div class="w-[100%] h-[20%] px-5">
                    <div class="text-xl uppercase font-bolder tracking-wider">200 M</div>
                    <div class="text-sm text-purple-600 tracking-wider">Girls</div>
                </div>
                
            </a>
            <a href="./win.php?gen=Boy&sport=DISCUS" class="border-2 w-[90%] shadow-xl md:w-[23.11%] h-[25vh] md:h-[17vw] overflow-hidden rounded-xl">
                <div class="w-[100%] h-[80%] border-b-2">
                    <img src="./images/athletics.jpg" class="w-[100%] h-[100%]" alt="">
                </div>
                <div class="w-[100%] h-[20%] px-5">
                    <div class="text-xl uppercase font-bolder tracking-wider">DISCUS THROW</div>
                    <div class="text-sm text-purple-600 tracking-wider">Boys</div>
                </div>
                
            </a>
            <a href="./win.php?gen=Girl&sport=DISCUS".<?php echo $_GET['sport'] ?> class="border-2 w-[90%] shadow-xl md:w-[23.11%] h-[25vh] md:h-[17vw] overflow-hidden rounded-xl">
                <div class="w-[100%] h-[80%] border-b-2">
                    <img src="./images/athletics.jpg" class="w-[100%] h-[100%]" alt="">
                </div>
                <div class="w-[100%] h-[20%] px-5">
                    <div class="text-xl uppercase font-bolder tracking-wider">DISCUS THROW</div>
                    <div class="text-sm text-purple-600 tracking-wider">Girls</div>
                </div>
                
            </a>
            <a href="./win.php?gen=Boy&sport=JAVELIN" class="border-2 w-[90%] shadow-xl md:w-[23.11%] h-[25vh] md:h-[17vw] overflow-hidden rounded-xl">
                <div class="w-[100%] h-[80%] border-b-2">
                    <img src="./images/athletics.jpg" class="w-[100%] h-[100%]" alt="">
                </div>
                <div class="w-[100%] h-[20%] px-5">
                    <div class="text-xl uppercase font-bolder tracking-wider">JAVELIN THROW</div>
                    <div class="text-sm text-purple-600 tracking-wider">Boys</div>
                </div>
                
            </a>
            <a href="./win.php?gen=Girl&sport=JAVELIN".<?php echo $_GET['sport'] ?> class="border-2 w-[90%] shadow-xl md:w-[23.11%] h-[25vh] md:h-[17vw] overflow-hidden rounded-xl">
                <div class="w-[100%] h-[80%] border-b-2">
                    <img src="./images/athletics.jpg" class="w-[100%] h-[100%]" alt="">
                </div>
                <div class="w-[100%] h-[20%] px-5">
                    <div class="text-xl uppercase font-bolder tracking-wider">JAVELIN THROW</div>
                    <div class="text-sm text-purple-600 tracking-wider">Girls</div>
                </div>
                
            </a>
            <a href="./win.php?gen=Boy&sport=LONGJUMP" class="border-2 w-[90%] shadow-xl md:w-[23.11%] h-[25vh] md:h-[17vw] overflow-hidden rounded-xl">
                <div class="w-[100%] h-[80%] border-b-2">
                    <img src="./images/athletics.jpg" class="w-[100%] h-[100%]" alt="">
                </div>
                <div class="w-[100%] h-[20%] px-5">
                    <div class="text-xl uppercase font-bolder tracking-wider">LONG JUMP</div>
                    <div class="text-sm text-purple-600 tracking-wider">Boys</div>
                </div>
                
            </a>
            <a href="./win.php?gen=Girl&sport=LONGJUMP".<?php echo $_GET['sport'] ?> class="border-2 w-[90%] shadow-xl md:w-[23.11%] h-[25vh] md:h-[17vw] overflow-hidden rounded-xl">
                <div class="w-[100%] h-[80%] border-b-2">
                    <img src="./images/athletics.jpg" class="w-[100%] h-[100%]" alt="">
                </div>
                <div class="w-[100%] h-[20%] px-5">
                    <div class="text-xl uppercase font-bolder tracking-wider">LONG JUMP</div>
                    <div class="text-sm text-purple-600 tracking-wider">Girls</div>
                </div>
                
            </a>
            <a href="./win.php?gen=Boy" class="border-2 w-[90%] shadow-xl md:w-[23.11%] h-[25vh] md:h-[17vw] overflow-hidden rounded-xl">
                <div class="w-[100%] h-[80%] border-b-2">
                    <img src="./images/athletics.jpg" class="w-[100%] h-[100%]" alt="">
                </div>
                <div class="w-[100%] h-[20%] px-5">
                    <div class="text-xl uppercase font-bolder tracking-wider">SHOT PUT</div>
                    <div class="text-sm text-purple-600 tracking-wider">Boys</div>
                </div>
                
            </a>
            <a href="./win.php?gen=Girl&sport=SHOTPUT".<?php echo $_GET['sport'] ?> class="border-2 w-[90%] shadow-xl md:w-[23.11%] h-[25vh] md:h-[17vw] overflow-hidden rounded-xl">
                <div class="w-[100%] h-[80%] border-b-2">
                    <img src="./images/athletics.jpg" class="w-[100%] h-[100%]" alt="">
                </div>
                <div class="w-[100%] h-[20%] px-5">
                    <div class="text-xl uppercase font-bolder tracking-wider">SHOT PUT</div>
                    <div class="text-sm text-purple-600 tracking-wider">Girls</div>
                </div>
                
            </a>


                <?php
                }
                else{
                    $sport = $_GET['sport'];
            ?>
            <a href="./win.php?gen=Boy&sport=<?php echo $sport;?>" class="border-2 w-[90%] shadow-xl md:w-[40.11%] h-[25vh] md:h-[17vw] overflow-hidden rounded-xl">
                <div class="w-[100%] h-[80%] border-b-2">
                    <img src="./images/athletics.jpg" class="w-[100%] h-[100%]" alt="">
                </div>
                <div class="w-[100%] h-[20%] px-5">
                    <div class="text-xl uppercase font-bolder tracking-wider"><?php echo $sport ?></div>
                    <div class="text-sm text-purple-600 tracking-wider">Boys</div>
                </div>
                
            </a>
            <a href="./win.php?gen=Girl&sport=<?php echo $sport;?>" class="border-2 w-[90%] shadow-xl md:w-[40.11%] h-[25vh] md:h-[17vw] overflow-hidden rounded-xl">
                <div class="w-[100%] h-[80%] border-b-2">
                    <img src="./images/athletics.jpg" class="w-[100%] h-[100%]" alt="">
                </div>
                <div class="w-[100%] h-[20%] px-5">
                    <div class="text-xl uppercase font-bolder tracking-wider"><?php echo $sport ?></div>
                    <div class="text-sm text-purple-600 tracking-wider">Girls</div>
                </div>
                
            </a>
            <?php } ?>
        </div>
        </div>
   </div>
   <?php include('./footer.html') ?>
</body>
</html>