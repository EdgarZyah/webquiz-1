<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="container bg-white sm:bg-wtite sm:w-[1440px] sm:h-[1024px] m-auto">
    <div class="my-auto self-center text-2xl text-center sm:hidden block">
       <p class="m-auto text-white text-center pt-72 pb-5">Please rotate your phone</p>
    <img src="{{ URL('pictures/rotate.gif') }}" class="m-auto w-[200px] h-[200px]" alt=""></div>
    <form action="{{route('showesayvalid',[$quiz, $student,$esay])}}" method="POST"">
        @csrf
    <div class="hidden sm:block container h-fit sm:w-[1280px] sm:h-[960px] px-3 pt-[32px] flex-col space-y-[20px]">
        <div class="w-[50px] h-[50px]">
            <a href="#back">
                <img src="pictures/back button.png" alt="">
            </a>
        </div>
        <!-- soal -->
        <div class="container flex-col sm:w-[1280px] sm:h-[426px] space-y-[10px] sm:space-x-[20px] flex sm:flex-row">
            @if ($esays->media != null)
            @if(pathinfo($esays->media, PATHINFO_EXTENSION) == 'mp3'|| pathinfo($esays->media, PATHINFO_EXTENSION) ==
            'wav'|| pathinfo($esays->media, PATHINFO_EXTENSION) == 'ogg')
            <audio id="video" class="rounded-[10px] h-fit w-[340px] sm:w-[400px] sm:h-[400px] sm:m-[10px]" controls>
                <source src="{{ asset('storage/'.$esays->media) }}" type="audio/ogg">
            </audio>
            @elseif(pathinfo($esays->media, PATHINFO_EXTENSION) == 'mp4'|| pathinfo($esays->media, PATHINFO_EXTENSION)
            ==
            'mov'|| pathinfo($esays->media, PATHINFO_EXTENSION) == 'mpg')
            <video id="video" class="rounded-[10px] h-fit w-[340px] sm:w-[400px] sm:h-[400px] sm:m-[10px]" controls>
                <source id="video" src="{{asset('storage/'.$esays->media) }}" type="video/mp4">
                Your browser does not support HTML video.
            </video>
            @elseif(pathinfo($esays->media, PATHINFO_EXTENSION) == 'jpg'|| pathinfo($esays->media, PATHINFO_EXTENSION)
            ==
            'png' || pathinfo($esays->media, PATHINFO_EXTENSION) == 'jpeg')
            <img class="rounded-[10px] h-fit w-[340px] sm:w-[400px] sm:h-[400px] sm:m-[10px]"
                src="{{asset('storage/'.$esays->media) }}" alt="asd" type="image">
            @endif
            @endif
            <h1 class="container bg-gray-300 p-5 rounded-xl text-2xl flex sm:text-4xl h-[400px] sm:m-[10px] sm:w-full ">{{$esays->question}}
            </h1>
        </div>
        <!-- button jawaban -->
        <div class="container sm:w-[1280px] sm:h-[320px] flex flex-col space-y-[20px]">
            <textarea name="answer" class="bg-gray-100 h-full w-full rounded-[10px] form-control block px-1 py-5 text-2xl font-normal text-gray-700
        bg-clip-padding border border-solid outline outline-gray-400 transition ease-in-outm-0
        focus:text-gray-700 focus:bg-white focus:outline-green-111 focus:outline-4" id="exampleFormControlTextarea1"
                rows="4" placeholder="Masukkan Jawaban Disini">
    </textarea>
        </div>
        <!-- next/prev button -->
        <div class="container justify-end w-full sm:w-[1280px] sm:h-[104px] flex flex-row">
            <button href="#" class="inline-block px-5 py-1 hover:scale-105 font-inter text-2xl text-center text-white 
                    bg-green-111 rounded-md focus:shadow-card" type="submit">
                            Submit</button>
            </button>
        </div>
        </div>
    </form>
</body>

</html>