<!-- <?php
    session_start();
    
    ?> -->
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
    
    <body>
        <?php include('Header.html'); ?>
        <div class="w-[100vw] py-10  bg-[url('./images/badminton1.jpg')] bg-cover  bg-slate-100/30  bg-center ">
        <div class="bg-gray-400/50 w-[80%] p-5 mx-auto shadow-2xl shadow-gray-800 my-5">
            <div class="text-white text-2xl md:text-4xl uppercase text-center ">Final Score Points</div>
        </div>
            <div class="w-[80vw]  mx-auto">
                <div class='  w-[100%]   overflow-scroll    bg-center'>
                    <table class="w-[100%]  table-auto   bg-transparent  text-center ">
                        
                          <tr class="border-b bg-slate-700/30 text-white">
                            <th class="p-2">SNo</th>
                            <th class="p-2">DEPARTMENT</th>
                            <th class="p-2">POINTS</th>
                            <th class="p-2">POSITION</th>
                          </tr>
                         
                        <tr class="border-b bg-slate-100/30 text-white">
                        <td class="p-2">1</td>
                        <td class="p-2">ARCHITECTURE</td>
                        <td class="p-2">-</td>
                        <td class="p-2">-</td>
                        </tr>
                        <tr class="border-b bg-slate-100/30 text-white">
                        <td class="p-2">2</td>
                        <td class="p-2">BCT+STRUCTURAL</td>
                        <td class="p-2">-</td>
                        <td class="p-2">-</td>
                        </tr>
                        <tr class="border-b bg-slate-100/30 text-white">
                        <td class="p-2">3</td>
                        <td class="p-2">CHEMICAL</td>
                        <td class="p-2">-</td>
                        <td class="p-2">-</td>
                        </tr>
                        <tr class="border-b bg-slate-100/30 text-white">
                        <td class="p-2">4</td>
                        <td class="p-2">CIVIL</td>
                        <td class="p-2">-</td>
                        <td class="p-2">-</td>
                        </tr>
                        <tr class="border-b bg-slate-100/30 text-white">
                        <td class="p-2">5</td>
                        <td class="p-2">CSE</td>
                        <td class="p-2">-</td>
                        <td class="p-2">-</td>
                        </tr>
                        <tr class="border-b bg-slate-100/30 text-white">
                        <td class="p-2">6</td>
                        <td class="p-2">ECB</td>
                        <td class="p-2">-</td>
                        <td class="p-2">-</td>
                        </tr>
                        <tr class="border-b bg-slate-100/30 text-white">
                        <td class="p-2">7</td>
                        <td class="p-2">ECC</td>
                        <td class="p-2">-</td>
                        <td class="p-2">-</td>
                        </tr>
                        <tr class="border-b bg-slate-100/30 text-white">
                        <td class="p-2">8</td>
                        <td class="p-2">ECE</td>
                        <td class="p-2">-</td>
                        <td class="p-2">-</td>
                        </tr>
                        <tr class="border-b bg-slate-100/30 text-white">
                        <td class="p-2">9</td>
                        <td class="p-2">EEE</td>
                        <td class="p-2">-</td>
                        <td class="p-2">-</td>
                        </tr>
                        <tr class="border-b bg-slate-100/30 text-white">
                        <td class="p-2">10</td>
                        <td class="p-2">ELECTRICAL</td>
                        <td class="p-2">-</td>
                        <td class="p-2">-</td>
                        </tr>
                        <tr class="border-b bg-slate-100/30 text-white">
                        <td class="p-2">11</td>
                        <td class="p-2">MECHANICAL</td>
                        <td class="p-2">-</td>
                        <td class="p-2">-</td>
                        </tr>
                        <tr class="border-b bg-slate-100/30 text-white">
                        <td class="p-2">12</td>
                        <td class="p-2">MININIG</td>
                        <td class="p-2">-</td>
                        <td class="p-2">-</td>
                        </tr>
                        <tr class="border-b bg-slate-100/30 text-white">
                        <td class="p-2">13</td>
                        <td class="p-2">P&I</td>
                        <td class="p-2">-</td>
                        <td class="p-2">-</td>
                        </tr>
                        <tr class="border-b bg-slate-100/30 text-white">
                        <td class="p-2">14</td>
                        <td class="p-2">PETROLEUM</td>
                        <td class="p-2">-</td>
                        <td class="p-2">-</td>
                        </tr>
                        <tr class="border-b bg-slate-100/30 text-white">
                        <td class="p-2">15</td>
                        <td class="p-2">1 YR CIVIL</td>
                        <td class="p-2">-</td>
                        <td class="p-2">-</td>
                        </tr>
                        <tr class="border-b bg-slate-100/30 text-white">
                        <td class="p-2">16</td>
                        <td class="p-2">1 YR MECH</td>
                        <td class="p-2">-</td>
                        <td class="p-2">-</td>
                        </tr>
                         
                          
                      </table>
                </div>
            </div>
        </div>
        <?php include('footer.html'); ?>
    </body>
    
    </html>