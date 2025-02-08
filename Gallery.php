<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khelo MBM</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="w-[100vw] h-[100vh] bg-gray-700/80 hidden sticky top-0 z-[100] pt-[5%] " id="imgholder">
        <i class="fa-solid fa-xmark text-3xl text-white absolute right-[5%] top-[5%] " onclick="fadeout()"></i>
        <img src="" id="imgzoom"  class="w-[80%] h-[90%] mx-auto  alt="helllo">
    </div>
    <?php include('./Header.html') ?>
    
   <div class="flex flex-col  w-[100vw] ">
    <div class=" flex justify-evenly items-center w-[100%] mb-[50px]">
        <div class="w-[35%] h-0 border"></div>
        <div class="text-6xl">Gallery</div>
        <div class="w-[35%] h-0 border"></div>
    </div>
    
    <div class="grid grid-col-1  md:grid-cols-2 lg:grid-cols-3 gap-5 w-[70%] mb-5  m-auto text-center">
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/1.heic"  class="w-[100%] h-[100%] " alt=""></div>
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/2.webp"  class="w-[100%] h-[100%] " alt=""></div>
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/3.heic"  class="w-[100%] h-[100%] " alt=""></div>
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/4.heic"  class="w-[100%] h-[100%] " alt=""></div>
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/5.webp"  class="w-[100%] h-[100%] " alt=""></div>
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/6.heic"  class="w-[100%] h-[100%] " alt=""></div>
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/7.heic"  class="w-[100%] h-[100%] " alt=""></div>
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/8.heic"  class="w-[100%] h-[100%] " alt=""></div>
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/9.heic"  class="w-[100%] h-[100%] " alt=""></div>
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/10.heic" class="w-[100%] h-[100%] "  alt=""></div>
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/11.heic" class="w-[100%] h-[100%] "  alt=""></div>
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/12.webp" class="w-[100%] h-[100%] "  alt=""></div>
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/13.heic" class="w-[100%] h-[100%] "  alt=""></div>
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/14.heic" class="w-[100%] h-[100%] "  alt=""></div>
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/15.webp" class="w-[100%] h-[100%] "  alt=""></div>
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/16.webp" class="w-[100%] h-[100%] "  alt=""></div>
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/17.heic" class="w-[100%] h-[100%] "  alt=""></div>
        <div class="border rounded-xl overflow-hidden h-[230px] bg-red-300 rounded-2xl" ><img onclick="fun1(this)" src="./images/pics/18.heic" class="w-[100%] h-[100%] "  alt=""></div>
    </div>
   </div>
   <?php include('./footer.html') ?>
</body>
<script>
    const fadeout = ()=>{
        document.getElementById('imgholder').classList.toggle('hidden')
    }
    const fun1 =(e)=>{
        document.getElementById('imgholder').classList.toggle('hidden')
        console.log(e.src);
        document.getElementById('imgzoom').src = e.src
    }
</script>
</html>