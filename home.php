<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>

<body>
    <?php 
    include('header.html');
    ?>
    
    <section class="w-[100vw] h-[90vh] bg-[url('./images/home-bg.jpeg')] lg:bg-[url('./images/back1.png')] bg-no-repeat bg-cover bg-center">
        <div class="w-[100%] h-[100%] flex items-center text-center ">
            <div class="w-[50%]  text-5xl text-white  mx-auto">
                <h1 id="typewriter" class="lg:text-4xl text-xl font-bold head"></h1>


            </div>
    </section>




    <section id="about" class="py-8 bg-gray-200">
        <div class="flex w-[100vw] justify-evenly my-5 items-center">
            <div class="border-2 w-[25%] lg:w-[35%] h-0"></div>
            <h1 class="lg:text-4xl text-2xl text-center head">About US</h1>
            <div class="border-2 w-[25%] lg:w-[35%] h-0"></div>
        </div>
        
        <div class=" lg:flex w-[90vw] bg-[url('./images/2637671.png')] bg-cover lg:bg-none bg-center bg-no-repeat mx-auto items-center">
            <div class="w-[45%] hidden lg:block"><img src="./images/2637671.png" alt=""></div>
            <div class="w-[100%]  lg:w-[55%] flex flex-col gap-9 tracking-wide p-5 ">
                <div class=" lg:flex gap-5 items-center text-center">
                    <div class="lg:w-[20%] ">
                        <h1 class="font-bold head text-xl lg:text-2xl">OUR MISSION</h1>
                    </div>
                    <div class="lg:w-[80%]  text-justify">
                        <p>At Khelombm Sports, we are dedicated to uniting sports enthusiasts by providing comprehensive coverage, insightful analysis, and engaging content across a wide range of sports disciplines.</p>
                    </div>
                </div>
                <div class=" lg:flex gap-5 items-center text-center">
                    <div class="lg:w-[80%] hidden lg:block text-justify">
                        <p>We aim to inspire and empower individuals through the world of sports, fostering a community where passion meets performance.</p>
                    </div>
                    <div class="lg:w-[20%]  ">
                        <h1 class="font-bold head text-xl lg:text-2xl">OUR VISION</h1>
                    </div>
                    <div class="lg:w-[80%] lg:hidden  text-justify">
                        <p>We aim to inspire and empower individuals through the world of sports, fostering a community where passion meets performance.</p>
                    </div>
                </div>
                <div class=" lg:flex gap-5 items-center text-center">
                    <div class="lg:w-[20%] ">
                        <h1 class="font-bold head text-xl lg:text-2xl">JOIN US</h1>
                    </div>
                    <div class="lg:w-[80%]  text-justify">
                        <p>Whether you're a casual fan or a dedicated athlete, Khelombm Sports is here to support your journey and fuel your passion for sports. <br>

                            Connect with us on social media or reach out through our contact page to become part of our vibrant community.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="gallery" id="gallery">
        <div class="flex justify-evenly  my-5 items-center">
            <div class="border-2 w-[25%] lg:w-[35%] h-0"></div>
            <h1 class="lg:text-4xl text-2xl text-center head">GALLERY</h1>
            <div class="border-2 w-[25%] lg:w-[35%] h-0"></div>
        </div>
        <section name="slider" class="gallery mt-4">
            <div class="slider">
                <div id="rgbKineticSlider" class="rgbKineticSlider">
                    <nav>
                        <a href="#"
                            class="main-nav prev  absolute h-[30px] w-[30px] py-[2.5px] text-center z-10  top-[38vh]"
                            data-nav="prev">
                            < </a>
                        <a href="#"
                            class="main-nav next  absolute h-[30px] w-[30px] py-[2.5px] text-center z-10 top-[38vh]"
                            data-nav="next">></a>
                    </nav>
                </div>
            </div>
        </section>
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
<section>
    <div class="w-[90vw] gap-5 mx-auto justify-center flex h-[50vh] my-10">
        <div class="border-2 pb-4 overflow-hidden w-[30%] rounded-3xl">
            <div class="border-b-2 py-5 text-center text-2xl">Notice board</div>
            <div class="pt-4 text-center">
                <marquee direction="down" scrollamount="4" class="text-center text-red-400">
                    <p>Hello 1st Notification</p>
                    <p>Hello 1st Notification</p>
                    <p>Hello 1st Notification</p>
                    <p>Hello 1st Notification</p>
                    <p>Hello 1st Notification</p>
                    <p>Hello 1st Notification</p>
                    <p>Hello 1st Notification</p>
                    <p>Hello 1st Notification</p>
                    <p>Hello 1st Notification</p>
                    <p>Hello 1st Notification</p>
                    <p>Hello 1st Notification</p>
                    <p>Hello 1st Notification</p>
                    <p>Hello 1st Notification</p>
                    <p>Hello 1st Notification</p>
                </marquee>
            </div>
        </div>
        <div class="border-2 w-[30%] overflow-hidden rounded-3xl">
            <div class="border-b-2 py-5 text-center text-2xl"><i class="fa-brands fa-x-twitter"></i></div>
            <div class="h-[82%]"><img src="https://pbs.twimg.com/media/Fdr2J54UUAcP56A?format=jpg&name=medium" class="h-[100%] w-[100%]" alt=""></div>
        </div>
        <div class="border-2 w-[30%] overflow-hidden rounded-3xl">
            <div class="border-b-2 py-5 text-center text-2xl"><i class="fa-brands fa-instagram"></i></div>
            <div class="h-[82%]"><img src="./images/main_info.jpeg" class="h-[100%] w-[100%]" alt=""></div>
        </div>
    </div>
</section>

    <?php include('./footer.html');?>
</body>
<script src="https://cdn.jsdelivr.net/gh/hmongouachon/rgbKineticSlider/js/libs/TweenMax.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/hmongouachon/rgbKineticSlider/js/rgbKineticSlider.js"></script>
<script src="https://cdn.jsdelivr.net/gh/hmongouachon/rgbKineticSlider/js/libs/imagesLoaded.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/hmongouachon/rgbKineticSlider/js/libs/pixi.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/hmongouachon/rgbKineticSlider/js/libs/pixi-filters.min.js"></script>
<script src="script.js"></script>
<script>

    // home welcome section
    const words = ["Winning is not everything , but the only thing", "Money was never a big motivation for me, except as a way to keep score. The real excitement is playing the game.", "The rewards are going to come, but my happiness is just loving the sport and having fun performing."];
    let i = 0;
    let j = 0;
    let currentWord = "";
    let isDeleting = false;

    function type() {
        currentWord = words[i];
        if (isDeleting) {
            document.getElementById("typewriter").textContent = currentWord.substring(0, j - 1);
            j--;
            if (j == 0) {
                isDeleting = false;
                i++;
                if (i == words.length) {
                    i = 0;
                }
            }
        } else {
            document.getElementById("typewriter").textContent = currentWord.substring(0, j + 1);
            j++;
            if (j == currentWord.length) {
                isDeleting = true;
            }
        }
        setTimeout(type, 100);
    }

    type();
</script>

</html>