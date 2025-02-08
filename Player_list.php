<?php 
include('./database.php');

$existuser = false;
$newsuccess = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $dept = mysqli_real_escape_string($conn, $_POST['dept']);
    $rollno = mysqli_real_escape_string($conn, $_POST['rollno']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $sports = isset($_POST['sport']) ? implode(',', $_POST['sport']) : '';

    $checkQuery = "SELECT * FROM `player` WHERE `rollno`='$rollno' OR `email`='$email'";
    $result = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($result) > 0) {
        $existuser = true;
        ?>
<script>
    setTimeout(() => {
        window.location.href = './player.php';
    }, 1600);

</script>
<?php

    } else {
        $sql4 = "INSERT INTO `player` (`id`, `name`, `dept`, `rollno`, `email`, `year`, `gender`, `sport`) 
                 VALUES (NULL, '$name', '$dept', '$rollno', '$email', '$year', '$gender', '$sports')";
        if (mysqli_query($conn, $sql4)) {
            $newsuccess = true;
            ?>
<script>
    setTimeout(() => {
        window.location.href = './player.php';
    }, 1600);

</script>
<?php
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form-control {
            width: 100%;
            /* border: 2px solid; */
            margin: 15px 0px;
            display: flex;
            flex-direction: column;
        }

        p {
            font-size: 18px;
            margin: 2px;
        }

        input,
        select {
            padding: 4px 10px !important;
            background-color: transparent;
            border-bottom: 2px solid;
        }
    </style>
</head>

<body>
    <?php include('Header.html');?>
    <section
        class=" w-[100vw] flex flex-col items-center text-white  py-10 bg-[url('./images/disc.png')] bg-center bg-cover">
        <div class="bg-gray-400/50 w-[90%] p-5 mx-auto shadow-2xl shadow-gray-800 my-5">
            <h2 class="text-center text-2xl">PLAYERS LIST</h2>
            <button class="absolute right-[7%] top-[18%] rounded-2xl hover:text-blue-400 hover:scale-[1.2] duration-300 ease-in border py-2 px-4"><a href="./player.php">Add Player</a></button>
        </div>

        <div class="bg-gray-400/50 w-[90%] py-5 mx-auto shadow-2xl shadow-gray-800 my-5">
            <div class="flex border-b px-5 py-2 shadow-md shadow-gray-400 gap-5 md:gap-0 md:justify-evenly items-center overflow-scroll">
                <div class=" text-[14px] hover:scale-[1.2]  hover:text-blue-400/80 hover:cursor-pointer"><a class=""
                        href="./Player_list.php?sport=ATHLETICS">ATHLETICS</a></div>
                <div class=" text-[14px] hover:scale-[1.2]  hover:text-blue-400/80 hover:cursor-pointer"><a class=""
                        href="./Player_list.php?sport=BADMINTON">BADMINTON</a></div>
                <div class=" text-[14px] hover:scale-[1.2]  hover:text-blue-400/80 hover:cursor-pointer"><a class=""
                        href="./Player_list.php?sport=BASKETBALL">BASKETBALL</a></div>
                <div class=" text-[14px] hover:scale-[1.2]  hover:text-blue-400/80 hover:cursor-pointer"><a class=""
                        href="./Player_list.php?sport=CARROM">CARROM</a></div>
                <div class=" text-[14px] hover:scale-[1.2]  hover:text-blue-400/80 hover:cursor-pointer"><a class=""
                        href="./Player_list.php?sport=CHESS">CHESS</a></div>
                <div class=" text-[14px] hover:scale-[1.2]  hover:text-blue-400/80 hover:cursor-pointer"><a class=""
                        href="./Player_list.php?sport=CRICKET">CRICKET</a></div>
                <div class=" text-[14px] hover:scale-[1.2]  hover:text-blue-400/80 hover:cursor-pointer"><a class=""
                        href="./Player_list.php?sport=FOOTBALL">FOOTBALL</a></div>
                <div class=" text-[14px] hover:scale-[1.2]  hover:text-blue-400/80 hover:cursor-pointer"><a class=""
                        href="./Player_list.php?sport=HANDBALL">HANDBALL</a></div>
                <div class=" text-[14px] hover:scale-[1.2]  hover:text-blue-400/80 hover:cursor-pointer"><a class=""
                        href="./Player_list.php?sport=KABADDI">KABADDI</a></div>
                <div class=" text-[14px] hover:scale-[1.2]  hover:text-blue-400/80 hover:cursor-pointer"><a class=""
                        href="./Player_list.php?sport=KHO-KHO">KHO-KHO</a></div>
                <div class=" text-[14px] hover:scale-[1.2]  hover:text-blue-400/80 hover:cursor-pointer"><a class=""
                        href="./Player_list.php?sport=POWER-LIFTING">POWER-LIFTING</a></div>
                <div class=" text-[14px] hover:scale-[1.2]  hover:text-blue-400/80 hover:cursor-pointer"><a class=""
                        href="./Player_list.php?sport=TABLE-TENNIS">TABLE-TENNIS</a></div>
                <div class=" text-[14px] hover:scale-[1.2]  hover:text-blue-400/80 hover:cursor-pointer"><a class=""
                        href="./Player_list.php?sport=VOLLEYBALL">VOLLEYBALL</a></div>
            </div>
        </div>

        <div class="text-white text-2xl md:text-4xl uppercase text-center my-5"><?php echo $_GET['sport'] ?></div>
        <div class="w-[90vw]  mx-auto">
            <div class='  w-[100%]   overflow-scroll    bg-center'>
                <table class="w-[100%]  table-auto   bg-transparent  text-center ">
                    
                      <tr class="border-b bg-slate-500/40 text-white">
                        <th class="p-2">Sno</th>
                        <th class="p-2">Name</th>
                        <th class="p-2">Department</th>
                        <th class="p-2">Roll Number</th>
                        <th class="p-2">Phone Number</th>
                        <th class="p-2">Email</th>
                        <th class="p-2">Gender</th>
                        <th class="p-2">Year</th>
                      </tr>
                    
                     
                      <?php 
                     $game =  $_GET['sport'];
        
                    $sql2 = "SELECT * FROM `player`  where sport LIKE '%$game%'";
                    $x = 0;
                    $sch_res = mysqli_query($conn,$sql2);
        
                    if(mysqli_num_rows($sch_res)>0){
                    
                    while($data = mysqli_fetch_assoc($sch_res)){
                       
                          
                    ?>
                      <tr class="border-b bg-slate-300/50">
                        <td class="p-2"><?php echo ++$x;?></td>
                        <td class="p-2"><?php echo $data['name'];?></td>
                        <td class="p-2"><?php echo $data['dept'];?></td>
                        <td class="p-2"><?php echo $data['rollno'];?></td>
                        <td class="p-2"><?php echo $data['phone'];?></td>
                        <td class="p-2"><?php echo $data['email'];?></td>
                        <td class="p-2"><?php echo $data['gender'];?></td>
                        <td class="p-2"><?php echo $data['year'];?></td>
                        
                      </tr>
                      <?php
                    }
                }
                else{?>
                <tr class="border-b bg-slate-300/70">
                    <td colspan="8" class="p-2">No Record Found</td>
                </tr>
                    <?php
                 }
                      ?>
                  </table>
            </div>
        </div>
    </section>


    <?php include('footer.html');?>
</body>

</html>