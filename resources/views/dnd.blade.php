<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drag n drop</title>
    @vite('resources/css/app.css')
</head>
<body class="container sm:w-[1440px] sm:h-[1024px] m-auto gap-5">
    <div class="container h-fit sm:w-[1280px] sm:h-[960px] px-3 pt-[32px] flex flex-col space-y-[20px]">
        <div class="w-[50px] h-[50px]">
            <a href="#back">
                <img src="pictures/back button.png" alt="">
                </a>
        </div>
        <div class="container flex-row w-full sm:h-[426px] space-y-[10px] sm:space-x-[20px] flex sm:flex-row">
        <!-- soal -->
        <div class="container bg-gray-300 p-10 shadow-card rounded-xl flex-col flex w-full h-fit gap-10">
            <div class="text-lg flex sm:text-xl sm:m-[10px] w-full justify-between ">
                <h1 class="text-2xl sm:text-4xl">Lorem ipsum dolor sit amet</h1>
                <div id="drop1" class="bg-white outline-2 m-[10px] flex border-black border-2 w-[200px] h-[40px]"
                ondrop="drop(event)" ondragover="allowDrop(event)">
            </div>
        </div>
            <div class="text-lg flex sm:text-xl sm:m-[10px] w-full justify-between ">
                <h1 class="text-2xl sm:text-4xl">Lorem ipsum dolor sit amet</h1>
                <div id="drop1" class="bg-white outline-2 m-[10px] flex border-black border-2 w-[200px] h-[40px]"
                ondrop="drop(event)" ondragover="allowDrop(event)">
            </div>
        </div>
        <div class="text-lg flex sm:text-xl sm:m-[10px] w-full justify-between ">
                <h1 class="text-2xl sm:text-4xl">Lorem ipsum dolor sit amet</h1>
                <div id="drop1" class="bg-white outline-2 m-[10px] flex border-black border-2 w-[200px] h-[40px]"
                ondrop="drop(event)" ondragover="allowDrop(event)">
            </div>
        </div>
    </div>
</div>
        <!-- area jawaban -->
    <div class="container justify-center  mx-auto sm:w-[400px] h-fit flex flex-wrap gap-5">
        <div id="drag1" ondragover="allowDrop(event)"
        draggable="true" ondragstart="drag(event)" id="drag1" 
        class="bg-slate-200 w-fit h-fit px-4 py-1 shadow-card">
        1
    </div>
        <div id="drag2" ondrop="drop(event)" ondragover="allowDrop(event)"
        draggable="true" ondragstart="drag(event)" id="drag1" 
        class="bg-slate-200 w-fit h-fit px-4 py-1 shadow-card">
        2
    </div>
        <div id="drag3" ondrop="drop(event)" ondragover="allowDrop(event)"
        draggable="true" ondragstart="drag(event)" id="drag1" 
        class="bg-slate-200 w-fit h-fit px-4 py-1 shadow-card">
        3
    </div>
        <div id="drag4" ondrop="drop(event)" ondragover="allowDrop(event)"
        draggable="true" ondragstart="drag(event)" id="drag1" 
        class="bg-slate-200 w-fit h-fit px-4 py-1 shadow-card">
        4
    </div>
        <div id="drag5" ondrop="drop(event)" ondragover="allowDrop(event)"
        draggable="true" ondragstart="drag(event)" id="drag1" 
        class="bg-slate-200 w-fit h-fit px-4 py-1 shadow-card">
        5
    </div>
        <div id="drag6" ondrop="drop(event)" ondragover="allowDrop(event)"
        draggable="true" ondragstart="drag(event)" id="drag1" 
        class="bg-slate-200 w-fit h-fit px-4 py-1 shadow-card">
        6
    </div>
        <!-- dnd 1 js -->
        <script>
        function allowDrop(ev) {
        ev.preventDefault();
        }

        function drag(ev) {
        ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
        }
        </script>
    </div>
    <br>
        <!-- next/prev button -->
        <div class="container justify-end w-full sm:w-[1280px] sm:h-[104px] flex flex-col">
            <div class="flex flex-row justify-end rounded-md px-[120px] py-[20px]">
                <form id="yourFormId">
            <button class="justify-end rounded-sm self-center flex flex-row shadow-card px-3 py-1" id="otra">Reset</button>
            </form>
            </div>
        <div class="container justify-end self-end w-full sm:w-[1280px] sm:h-[104px] flex flex-row">
                <a class="hover:brightness-110 hover:scale-105 justify-center mx-[20px] w-[60px] h-[60px] sm:w-[80px] sm:h-[80px]" href="#prev">
                <img src="pictures/prev.png" alt="">
                </a>
            <a class="hover:brightness-110 hover:scale-105 justify-center w-[60px] h-[60px] sm:w-[80px] sm:h-[80px]" href="#next">
                <img src="pictures/next.png" alt="">
                </a>
            </div>
        </div>
    </div>
    
</body>
</html>