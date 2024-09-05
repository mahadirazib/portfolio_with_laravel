@extends('layouts.app')

@section('content')

<div class="w-100 h-100" style="height: 100%">
    <div class="grid grid-cols-5 text-white" style="height: 100%">

        <div class="col-span-3 p-8">

            <div class="flex flex-col flex-wrap justify-between" style="height: 100%">

                <div class="mt-10">
                    <div class="mb-3">
                        <div class="inline me-3">
                            <img class="inline hand-icon" src="{{ asset('storage/icons/hand.svg') }}" style="width: 40px;" alt="👋"> 
                        </div>
                        Hi There!
                    </div>
                    <h1 class="text-4xl font-bold text-white">I am Mahadi Razib</h1>
                    
                    <p class="text-sm font-light text-typewriter-effect">
                        I am a web designer and developer since 2020. I have some skills if not many, but I am confident about those skills. Please check out my portfolio to know my skills better.
                    </p>

                    <div class="mt-6">
                        <a class=" p-4 bg-slate-950 rounded-md text-sm" href="{{ route('project') }}">See My Projects ➥</a>
                    </div>
                </div>
    
                <div class="mb-10">

                    <span class="text-lg font-semibold text-white me-5">Follow Me On:</span>

                    <a href="" class="me-3">
                        <img class="inline" src="{{ asset('storage/icons/facebook.svg') }}" style="width: 30px;" alt="f">
                    </a>

                    <a href="" class="me-3">
                        <img class="inline" src="{{ asset('storage/icons/linkedin.svg') }}" style="width: 30px;" alt="in">
                    </a>

                    <a href="" class="me-3">
                        <img class="inline" src="{{ asset('storage/icons/whatsapp.svg') }}" style="width: 30px;" alt="📱">
                    </a>

                    <a href="" class="me-3">
                        <img class="inline" src="{{ asset('storage/icons/github.svg') }}" style="width: 30px;" alt="😎">
                    </a>

                    <a href="" class="me-3">
                        <img class="inline" src="{{ asset('storage/icons/phone.svg') }}" style="width: 30px;" alt="📱">
                    </a>

                </div>
            
            </div>


        </div>

        <div class="col-span-2 overflow-hidden p-6 w-100" style="height: 100%">
            <div class="flex w-100 h-100 flex-wrap items-center justify-items-center justify-center" style="height: 100%">
                <img class="w-100 image-hover" src="{{ asset('storage/images/my_image.jpg') }}" style="" alt="My Image">
                <div class="back-1 bg-cyan-600" style="border-radius: 50%"></div>
                <div class="back-2 bg-cyan-600" style="border-radius: 50%"></div>
            </div>
        </div>
        
    </div>
</div>


<style>

    .hand-icon{
        transform: rotate(0deg);
        transform-origin: bottom center;
        animation: hand-animation 5s ease infinite;
    }

    .back-1{
        position: absolute;
        width: 170px;
        height: 170px;
        z-index: 1;
        animation: live 2s linear infinite;
    }

    .back-2{
        position: absolute;
        width: 170px;
        height: 170px;
        z-index: 1;
        animation: live 2s linear infinite;
        animation-delay: -1s;
    }

    .image-hover{
        width: 170px;
        border-radius: 50%;
        z-index: 10;
        transition: transform 0.5s ease, border-radius 0.5s ease;
    }
    .image-hover:hover{
        border-radius: 5%;
        transform: scale(170%);
        box-shadow: 10px black;
    }


    @keyframes live {
        0%   {
            transform: scale(100%);
            opacity: 1;
        }
        100% {
            transform: scale(140%);
            opacity: 0;
        }
    }



    @keyframes hand-animation {
        0%   {
            transform: rotate(0deg);
        }
        5% {
            transform: rotate(-25deg);
        }
        15% {
            transform: rotate(25deg);
        }
        20% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(0deg);
        }
    }

</style>



@endsection