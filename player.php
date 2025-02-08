<?php 
include('./database.php');

$existuser = false;
$newsuccess = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $dept = mysqli_real_escape_string($conn, $_POST['dept']);
    $phone = mysqli_real_escape_string($conn, $_POST['number']);
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
        $sql4 = "INSERT INTO `player` (`id`, `name`, `dept`, `rollno`,`phone`, `email`, `year`, `gender`, `sport`) 
                 VALUES (NULL, '$name', '$dept', '$rollno','$phone', '$email', '$year', '$gender', '$sports')";
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
        class="md:hidden  w-[100vw] flex flex-col items-center text-white  py-10 bg-[url('./images/basketball.png')] bg-center bg-cover">
        <div class="bg-gray-400/50 w-[90%] p-5 mx-auto shadow-2xl shadow-gray-800 my-5">
            <h2 class="text-center text-2xl">PLAYERS FORM</h2>
        </div>
        <?php
         if($newsuccess == true){
            ?>
        <div
            style="color:white; border:2px solid; width: fit-content; margin: auto; padding: 8px 15px; border-radius: 20px; ">
            Welcome,
            <?php echo $name ?>,
            Player's Data Inserted Successfully
        </div>
        <?php
         }
         if( $existuser== true){
            ?>
        <div
            style="color:red; border:2px solid; width: fit-content; margin: auto; padding: 8px 15px; border-radius: 20px; ">
            Player Alredy Exist!!!</div>
        <?php
         }
        ?>
        <div class="bg-gray-400/50 w-[90%] p-5 mx-auto shadow-2xl shadow-gray-800 my-5">
            <form action="" method="post" role="form">
                <div class="form-control">
                    <p>Name:</p>
                    <input type="text" class="" required name="name" placeholder="name">
                </div>
                <div class="form-control">
                    <p>Department:</p>
                    <select name="dept" required class="" id="department">
                        <option value="-">-</option>
                        <option value="ARCHITECTURE">ARCHITECTURE</option>
                        <option value="BCT+STRUCTURAL">BCT+STRUCTURAL</option>
                        <option value="CHEMICAL">CHEMICAL</option>
                        <option value="CIVIL">CIVIL</option>
                        <option value="CSE">CSE</option>
                        <option value="ECC">ECC</option>
                        <option value="ECE">ECE</option>
                        <option value="EEE">EEE</option>
                        <option value="ELECTRICAL">ELECTRICAL</option>
                        <option value="MECHANICAL">MECHANICAL</option>
                        <option value="MINING">MINING</option>
                        <option value="P&I">P&I</option>
                        <option value="PETROLEUM">PETROLEUM</option>
                        <option value="1 YR CIVIL">1 YR CIVIL</option>
                        <option value="1 YR MECH">1 YR MECH</option>
                        <option value="ECB">ECB</option>
                    </select>
                </div>
                <div class="form-control">
                    <p>Roll Number:</p>
                    <input type="text" name="rollno" required class="" placeholder="Roll Number">
                </div>
                <div class="form-control">
                    <p>Phone Number</p>
                    <input type="number" name="number" required class="" placeholder="Phone Number">
                </div>
                <div class="form-control">
                    <p>Email:</p>
                    <input type="email" name="email" required class="" placeholder="Email">
                </div>
                <div class="form-control">
                    <p>Year</p>
                    <div class="flex gap-5">

                        <div class="flex gap-1 hover:cursor-pointer"><input type="radio" checked id="1st" name="year"
                                value="1st"><label for="1st">1st</label></div>
                        <div class="flex gap-1 hover:cursor-pointer"><input type="radio" id="2nd" name="year"
                                value="2nd"><label for="2nd">2nd</label></div>
                        <div class="flex gap-1 hover:cursor-pointer"><input type="radio" id="3rd" name="year"
                                value="3rd"><label for="3rd">3rd</label></div>
                        <div class="flex gap-1 hover:cursor-pointer"><input type="radio" id="4th" name="year"
                                value="4th"><label for="4th">4th</label></div>

                    </div>
                </div>
                <div class="form-control">
                    <p>Gender:</p>
                    <div class="flex gap-5">
                        <div class="flex gap-1 hover:cursor-pointer"><input type="radio" checked id="boy" name="gender"
                                value="BOY"> <label for="boy">BOY</label></div>
                        <div class="flex gap-1 hover:cursor-pointer"><input type="radio" id="girl" name="gender"
                                value="GIRL"> <label for="girl">GIRL</label></div>
                    </div>
                </div>
                <input type="hidden" name="sub" value="1">
                <div class="form-control">
                    <p>Sport:</p>
                    <div class="grid  md:grid-cols-4 gap-4">
                        <label><input type="checkbox" name="sport[]" checked value="CRICKET"> CRICKET</label>
                        <label><input type="checkbox" name="sport[]" value="BASKETBALL"> BASKETBALL</label>
                        <label><input type="checkbox" name="sport[]" value="VOLLEYBALL"> VOLLEYBALL</label>
                        <label><input type="checkbox" name="sport[]" value="HANDBALL"> HANDBALL</label>
                        <label><input type="checkbox" name="sport[]" value="FOOTBALL"> FOOTBALL</label>
                        <label><input type="checkbox" name="sport[]" value="KHO-KHO"> KHO-KHO</label>
                        <label><input type="checkbox" name="sport[]" value="TABLE-TENNIS"> TABLE-TENNIS</label>
                        <label><input type="checkbox" name="sport[]" value="CHESS"> CHESS</label>
                        <label><input type="checkbox" name="sport[]" value="CARROM"> CARROM</label>
                        <label><input type="checkbox" name="sport[]" value="KABADDI"> KABADDI</label>
                        <label><input type="checkbox" name="sport[]" value="BADMINTON"> BADMINTON</label>
                        <label><input type="checkbox" name="sport[]" value="POWERLIFTING"> POWERLIFTING</label>
                        <label><input type="checkbox" name="sport[]" value="ATHLETICS"> ATHLETICS</label>
                    </div>

                </div>

                <input type="submit" value="Submit"
                    class="hover:scale-[1.2] hover:cursor-pointer transistion duration-[2s] ease-in-out ">
            </form>
        </div>
    </section>
    <section
        class="hidden md:block  w-[100vw] flex flex-col items-center text-white  py-10 bg-[url('./images/basketball.png')] bg-center bg-cover">
        <div class="bg-gray-400/50 w-[90%] p-5 mx-auto shadow-2xl shadow-gray-800 my-5">
            <h2 class="text-center text-2xl">PLAYERS FORM</h2>
            <button class="absolute right-[7%] top-[18%] rounded-2xl hover:text-blue-400 hover:scale-[1.2] duration-300 ease-in border py-2 px-4"><a href="./Player_list.php">Player List</a></button>

        </div>
        <?php
         if($newsuccess == true){
            ?>
        <div
            style="color:white; border:2px solid; width: fit-content; margin: auto; padding: 8px 15px; border-radius: 20px; ">
            Welcome,
            <?php echo $name ?>,
            Player's Data Inserted Successfully
        </div>
        <?php
         }
         if( $existuser== true){
            ?>
        <div
            style="color:red; border:2px solid; width: fit-content; margin: auto; padding: 8px 15px; border-radius: 20px; ">
            Player Alredy Exist!!!</div>
        <?php
         }
        ?>
        <div class=" bg-gray-400/50 w-[90%] p-5 mx-auto shadow-2xl shadow-gray-800 my-5">
            <form action="" method="post" role="form">
               <div class="flex w-[100%] justify-between">
                <div class="w-[45%]">
                    <div class="form-control">
                        <p>Name:</p>
                        <input type="text" class="" required name="name" placeholder="name">
                    </div>
                    <div class="form-control">
                        <p>Department:</p>
                        <select name="dept" required class="" id="department">
                            <option value="-">-</option>
                            <option value="ARCHITECTURE">ARCHITECTURE</option>
                            <option value="BCT+STRUCTURAL">BCT+STRUCTURAL</option>
                            <option value="CHEMICAL">CHEMICAL</option>
                            <option value="CIVIL">CIVIL</option>
                            <option value="CSE">CSE</option>
                            <option value="ECC">ECC</option>
                            <option value="ECE">ECE</option>
                            <option value="EEE">EEE</option>
                            <option value="ELECTRICAL">ELECTRICAL</option>
                            <option value="MECHANICAL">MECHANICAL</option>
                            <option value="MINING">MINING</option>
                            <option value="P&I">P&I</option>
                            <option value="PETROLEUM">PETROLEUM</option>
                            <option value="1 YR CIVIL">1 YR CIVIL</option>
                            <option value="1 YR MECH">1 YR MECH</option>
                            <option value="ECB">ECB</option>
                        </select>
                    </div>
                    <div class="form-control">
                        <p>Phone Number</p>
                        <input type="number" name="number" required class="" placeholder="Phone Number">
                    </div>
                    <div class="form-control">
                        <p>Year</p>
                        <div class="flex gap-5">
    
                            <div class="flex gap-1 hover:cursor-pointer"><input type="radio" checked id="1st" name="year"
                                    value="1st"><label for="1st">1st</label></div>
                            <div class="flex gap-1 hover:cursor-pointer"><input type="radio" id="2nd" name="year"
                                    value="2nd"><label for="2nd">2nd</label></div>
                            <div class="flex gap-1 hover:cursor-pointer"><input type="radio" id="3rd" name="year"
                                    value="3rd"><label for="3rd">3rd</label></div>
                            <div class="flex gap-1 hover:cursor-pointer"><input type="radio" id="4th" name="year"
                                    value="4th"><label for="4th">4th</label></div>
    
                        </div>
                    </div>
                </div>
                <div class="w-[45%]">
                    <div class="form-control">
                        <p>Roll Number:</p>
                        <input type="text" name="rollno" required class="" placeholder="Roll Number">
                    </div>
                    <div class="form-control">
                        <p>Email:</p>
                        <input type="email" name="email" required class="" placeholder="Email">
                    </div>
                    <div class="form-control">
                        <p>Gender:</p>
                        <div class="flex gap-5">
                            <div class="flex gap-1 hover:cursor-pointer"><input type="radio" checked id="boy" name="gender"
                                    value="BOY"> <label for="boy">BOY</label></div>
                            <div class="flex gap-1 hover:cursor-pointer"><input type="radio" id="girl" name="gender"
                                    value="GIRL"> <label for="girl">GIRL</label></div>
                        </div>
                    </div>
                </div>
               </div>
                
               
               
                
                <input type="hidden" name="sub" value="1">
                <div class="form-control">
                    <p>Sport:</p>
                    <div class="grid  md:grid-cols-4 gap-4">
                        <label><input type="checkbox" name="sport[]" checked value="CRICKET"> CRICKET</label>
                        <label><input type="checkbox" name="sport[]" value="BASKETBALL"> BASKETBALL</label>
                        <label><input type="checkbox" name="sport[]" value="VOLLEYBALL"> VOLLEYBALL</label>
                        <label><input type="checkbox" name="sport[]" value="HANDBALL"> HANDBALL</label>
                        <label><input type="checkbox" name="sport[]" value="FOOTBALL"> FOOTBALL</label>
                        <label><input type="checkbox" name="sport[]" value="KHO-KHO"> KHO-KHO</label>
                        <label><input type="checkbox" name="sport[]" value="TABLE-TENNIS"> TABLE-TENNIS</label>
                        <label><input type="checkbox" name="sport[]" value="CHESS"> CHESS</label>
                        <label><input type="checkbox" name="sport[]" value="CARROM"> CARROM</label>
                        <label><input type="checkbox" name="sport[]" value="KABADDI"> KABADDI</label>
                        <label><input type="checkbox" name="sport[]" value="BADMINTON"> BADMINTON</label>
                        <label><input type="checkbox" name="sport[]" value="POWERLIFTING"> POWERLIFTING</label>
                        <label><input type="checkbox" name="sport[]" value="ATHLETICS"> ATHLETICS</label>
                    </div>

                </div>

                <input type="submit" value="Submit"
                    class="hover:scale-[1.2] hover:cursor-pointer transistion duration-[2s] ease-in-out ">
            </form>
        </div>
    </section>
    
    <?php include('footer.html');?>
</body>

</html>