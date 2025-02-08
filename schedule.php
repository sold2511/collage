
<?php include('./database.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khelo MBM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <style>
        .sche {
            border-radius: 15px;
            position: relative;

            clip-path: polygon(0 25px, 25px 0, calc(100% - 25px) 0, 100% 25px, 100% calc(100% - 25px), calc(100% - 25px) 100%, 25px 100%, 0 calc(100% - 25px), 0 25px) !important;
        }

        .game {
            clip-path: polygon(0 0, 100% 0, calc(100% - 20px) 100%, 20px 100%, 0 0);
            border-radius: 0 0 15px 15px;

            left: 50%;
            top: 0%;
            width: max-content;
            translate: -50%;
            padding: 7px 25px 5px;
        }
    </style>
</head>

<body>


<?php include('./Header.html') 






?>


    <div class="flex border-b px-5 py-2 shadow-md shadow-gray-400 gap-5 md:gap-0 md:justify-evenly items-center overflow-scroll">
        <div class=" text-[14px] hover:scale-[1.3]  hover:text-blue-500 hover:cursor-pointer"><a class="head" href="./schedule.php?sport=ATHLETICS">ATHLETICS</a></div>
        <div class=" text-[14px] hover:scale-[1.3]  hover:text-blue-500 hover:cursor-pointer"><a class="head" href="./schedule.php?sport=BADMINTON">BADMINTON</a></div>
        <div class=" text-[14px] hover:scale-[1.3]  hover:text-blue-500 hover:cursor-pointer"><a class="head" href="./schedule.php?sport=BASKETBALL">BASKETBALL</a></div>
        <div class=" text-[14px] hover:scale-[1.3]  hover:text-blue-500 hover:cursor-pointer"><a class="head" href="./schedule.php?sport=CARROM">CARROM</a></div>
        <div class=" text-[14px] hover:scale-[1.3]  hover:text-blue-500 hover:cursor-pointer"><a class="head" href="./schedule.php?sport=CHESS">CHESS</a></div>
        <div class=" text-[14px] hover:scale-[1.3]  hover:text-blue-500 hover:cursor-pointer"><a class="head" href="./schedule.php?sport=CRICKET">CRICKET</a></div>
        <div class=" text-[14px] hover:scale-[1.3]  hover:text-blue-500 hover:cursor-pointer"><a class="head" href="./schedule.php?sport=FOOTBALL">FOOTBALL</a></div>
        <div class=" text-[14px] hover:scale-[1.3]  hover:text-blue-500 hover:cursor-pointer"><a class="head" href="./schedule.php?sport=HANDBALL">HANDBALL</a></div>
        <div class=" text-[14px] hover:scale-[1.3]  hover:text-blue-500 hover:cursor-pointer"><a class="head" href="./schedule.php?sport=KABADDI">KABADDI</a></div>
        <div class=" text-[14px] hover:scale-[1.3]  hover:text-blue-500 hover:cursor-pointer"><a class="head" href="./schedule.php?sport=KHO-KHO">KHO-KHO</a></div>
        <div class=" text-[14px] hover:scale-[1.3]  hover:text-blue-500 hover:cursor-pointer"><a class="head" href="./schedule.php?sport=POWER-LIFTING">POWER-LIFTING</a></div>
        <div class=" text-[14px] hover:scale-[1.3]  hover:text-blue-500 hover:cursor-pointer"><a class="head" href="./schedule.php?sport=TABLE-TENNIS">TABLE-TENNIS</a></div>
        <div class=" text-[14px] hover:scale-[1.3]  hover:text-blue-500 hover:cursor-pointer"><a class="head" href="./schedule.php?sport=VOLLEYBALL">VOLLEYBALL</a></div>
    </div>
    <!-- <div class="w-[50px] absolute left-[50%] top-[33%] translate-x-[-50%]"><img src="./images/foot.png" class="w-[100%] h-[100%]" alt=""></div>
    <div class="w-[50px] absolute left-[50%] top-[56%] translate-x-[-50%]"><img src="./images/foot.png" class="w-[100%] h-[100%]" alt=""></div>
    <div class="w-[50px] absolute left-[50%] top-[79%] translate-x-[-50%]"><img src="./images/foot.png" class="w-[100%] h-[100%]" alt=""></div> -->



    <section class="my-5">
        <div class="flex flex-wrap gap-8 justify-center w-[100vw] text-white   ">
            
        <?php 
        $game =  $_GET['sport'];
        
        $sql2 = "SELECT *, DATE_FORMAT(date, '%d-%m') AS date , TIME_FORMAT(time, '%h:%i') AS time FROM `schedule`  where game='$game'";
       
        $sch_res = mysqli_query($conn,$sql2);
        
                 if(mysqli_num_rows($sch_res)>0){
                    
                    while($data = mysqli_fetch_assoc($sch_res)){
                          
                          
            ?>
            <div class=" w-[95%] md:w-[45%] h-[150px] hover:scale-[1.06] bg-cyan-400 sche  p-1 ">
                <div class="sche w-[100%] h-[100%] bg-white ">
                    <div class="bg-cyan-400 game absolute border-b text-[13px] md:text-[16px] "><?php echo $_GET['sport']?></div>
                    <div class="w-[100%] h-[100%]  bg-slate-400/80 justify-between  flex">
                        <div class="w-[30%] h-[100%] text-center  py-1.5">
                            <div class="w-[80%] mx-auto md:w-[100%]  h-[70%] my-2">
                                <img src="./logo1.svg" class="w-[100%] h-[100%] " alt="">
                            </div>
                            <h3 class="text-[16px] hidden md:block"><?php echo $data['team1']; ?></h3>
                            <h3 class="text-[13px] md:text-[16px] md:hidden"><?php
                                preg_match_all('/[a-zA-Z]/', $data['team1'], $matches);
                                $ta = count($matches[0]); 
                                if($ta>10){
                                $firstFiveAlphabets = array_slice($matches[0], 0, 7);
                                $result = implode('', $firstFiveAlphabets);
                                echo $result;
                                }else{
                                     echo $data['team1'] ;
                                }
                             ?></h3>
                        </div>
                        <div class="w-[40%] h-[100%] text-center  border-x border-t">
                            <div class="h-[30%]"></div>
                            <div class="my-4 text-2xl">V/S</div>
                            <div class="flex justify-evenly items-center">
                                <div class="text-[13px] md:text-[16px]"><?php echo $data['date'] ?></div>
                                <div class="bg-cyan-400 md:px-2 p-0 md:py-1 text-[13px] md:text-[16px]">Court No 1</div>
                                <div class="text-[13px] md:text-[16px]"><?php echo $data['time'] ?></div>
                            </div>
                        </div>
                        <div class="w-[30%] h-[100%] text-center py-1.5">
                            <div class="w-[80%] mx-auto  md:w-[100%] h-[70%] my-2">
                                <img src="./logo1.svg" class="w-[100%] h-[100%] " alt="">
                            </div>
                            <h3 class="text-[16px] hidden md:block"><?php echo $data['team2']; ?></h3>
                            <h3 class="text-[13px] md:text-[16px] md:hidden "><?php
                             preg_match_all('/[a-zA-Z]/', $data['team2'], $matches);
                             $ta = count($matches[0]); 
                             if($ta>10){
                             $firstFiveAlphabets = array_slice($matches[0], 0, 7);
                             $result = implode('', $firstFiveAlphabets);
                             echo $result;
                             }else{
                                  echo $data['team2'] ;
                             }
                             ?></h3>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                    }
                }
                else{?>
                   <div class="border text-black py-2 px-4 head rounded shadow-2xl my-5"><?php echo "NO RECORD FOUND";?></div><?php
                }
            ?>
            
           
        </div>
    </section>
    <section  class="bg-gray-200 leanding-normal tracking-wide pt-6">

        <h1 class="mx-5 lg:mx-12 head  text-gray-700 text-2xl lg:text-4xl  text-center ">
            PARTICITAPING TEAMS
        </h1>
    
        <div class="container1 mx-auto w-full overflow-hidden relative">
            <div class="w-full h-full absolute">
                <div class="w-1/4 h-full absolute z-50 left-0" style="background: linear-gradient(to right, #edf2f7 0%, rgba(255, 255, 255, 0) 100%);"></div>
                <div class="w-1/4 h-full absolute z-50 right-0" style="background: linear-gradient(to left, #edf2f7 0%, rgba(255, 255, 255, 0) 100%);"></div>
            </div>
    
            <div class="carousel-items flex items-center justify-center" style="width: fit-content; animation: carouselAnim 30s infinite alternate linear;">
    
                <div class="carousel-focus  flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-3xl shadow-lg" style="width: 270px;">
                    <img class="h-[150px] w-[150px] rounded-full shadow-2xl" src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img">
                    <p class="mt-3 text-gray-600 text-2xl text-center">Architecture</p>
                </div>
    
                <div class="carousel-focus  flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-3xl shadow-lg" style="width: 270px;">
                    <img class="h-[150px] w-[150px] rounded-full shadow-2xl" src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img">
                    <p class="mt-3 text-gray-600 text-2xl text-center">BCT+STRUCTURAL</p>
                </div>
    
                <div class="carousel-focus  flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-3xl shadow-lg" style="width: 270px;">
                    <img class="h-[150px] w-[150px] rounded-full shadow-2xl" src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img">
                    <p class="mt-3 text-gray-600 text-2xl text-center">CHEMICAL</p>
                </div>
    
                <div class="carousel-focus  flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-3xl shadow-lg" style="width: 270px;">
                    <img class="h-[150px] w-[150px] rounded-full shadow-2xl" src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img">
                    <p class="mt-3 text-gray-600 text-2xl text-center">CIVIL</p>
                </div>
    
                <div class="carousel-focus  flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-3xl shadow-lg" style="width: 270px;">
                    <img class="h-[150px] w-[150px] rounded-full shadow-2xl" src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img">
                    <p class="mt-3 text-gray-600 text-2xl text-center">CSE</p>
                </div>
                
                <div class="carousel-focus  flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-3xl shadow-lg" style="width: 270px;">
                    <img class="h-[150px] w-[150px] rounded-full shadow-2xl" src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img">
                    <p class="mt-3 text-gray-600 text-2xl text-center">ECC</p>
                </div>
    
                <div class="carousel-focus  flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-3xl shadow-lg" style="width: 270px;">
                    <img class="h-[150px] w-[150px] rounded-full shadow-2xl" src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img">
                    <p class="mt-3 text-gray-600 text-2xl text-center">ECE</p>
                </div>
    
                <div class="carousel-focus  flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-3xl shadow-lg" style="width: 270px;">
                    <img class="h-[150px] w-[150px] rounded-full shadow-2xl" src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img">
                    <p class="mt-3 text-gray-600 text-2xl text-center">EEE</p>
                </div>
                <div class="carousel-focus  flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-3xl shadow-lg" style="width: 270px;">
                    <img class="h-[150px] w-[150px] rounded-full shadow-2xl" src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img">
                    <p class="mt-3 text-gray-600 text-2xl text-center">ELECTRICAL</p>
                </div>
                <div class="carousel-focus  flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-3xl shadow-lg" style="width: 270px;">
                    <img class="h-[150px] w-[150px] rounded-full shadow-2xl" src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img">
                    <p class="mt-3 text-gray-600 text-2xl text-center">MECHANICAL</p>
                </div>
                <div class="carousel-focus  flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-3xl shadow-lg" style="width: 270px;">
                    <img class="h-[150px] w-[150px] rounded-full shadow-2xl" src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img">
                    <p class="mt-3 text-gray-600 text-2xl text-center">MINING</p>
                </div>
                <div class="carousel-focus  flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-3xl shadow-lg" style="width: 270px;">
                    <img class="h-[150px] w-[150px] rounded-full shadow-2xl" src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img">
                    <p class="mt-3 text-gray-600 text-2xl text-center">P&I</p>
                </div>
                <div class="carousel-focus  flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-3xl shadow-lg" style="width: 270px;">
                    <img class="h-[150px] w-[150px] rounded-full shadow-2xl" src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img">
                    <p class="mt-3 text-gray-600 text-2xl text-center">PETROLEUM</p>
                </div>
                <div class="carousel-focus  flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-3xl shadow-lg" style="width: 270px;">
                    <img class="h-[150px] w-[150px] rounded-full shadow-2xl" src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img">
                    <p class="mt-3 text-gray-600 text-2xl text-center">1st CIVIL</p>
                </div>
                <div class="carousel-focus  flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-3xl shadow-lg" style="width: 270px;">
                    <img class="h-[150px] w-[150px] rounded-full shadow-2xl" src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img">
                    <p class="mt-3 text-gray-600 text-2xl text-center">1st MECHANICAL</p>
                </div>
                <div class="carousel-focus  flex items-center flex-col relative bg-white mx-5 my-10 px-4 py-3 rounded-3xl shadow-lg" style="width: 270px;">
                    <img class="h-[150px] w-[150px] rounded-full shadow-2xl" src="https://pbs.twimg.com/profile_images/830533062807191552/TbkWKnnv_400x400.jpg" alt="Img">
                    <p class="mt-3 text-gray-600 text-2xl text-center">BARMER</p>
                </div>
            </div>
    
        </div>
        
   
</section>
    <?php include('footer.html')?>
</body>

<script>
    function fun1(e){
        var sel = e.value;
        window.location.href="./schedule.php?sport="+sel;
    }
</script>
</html>