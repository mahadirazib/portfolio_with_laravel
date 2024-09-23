@extends('layouts.app')

@section('content')

<div class="w-100 h-100" style="height: 100%">
    <div class="text-white" style="height: 100%">
      <div class="p-8 flex md:flex-col sm:flex-row flex-wrap " style="height: 100%">

        <div class="mb-20">
          <h1 class="text-2xl font-bold text-white pb-3">Work Experiences:</h1>
          <div class=" text-sm font-light text-typewriter-effect" style="min-height: 100px">
            {{ $experience['description'] }}
          </div>
        </div>

        <div class="w-100 pb-10" style="width: 100%;">

          <div class="flex flex-wrap flex-col gap-4 sm:flex-row justify-between w-100">

            @php
              $num = 0.5;
            @endphp
            @foreach ($experience['experiences'] as $company => $val)
              @php
                $color = ['teal', 'cyan', 'blue', 'indigo', 'violet', 'lime', 'green'][mt_rand(0, 6)];
              @endphp
              <div class="opacity-animation grow " style="animation: grow-opacity-animation {{ $num }}s ease;">
                @php
                  $num += 0.1;
                @endphp
                <div class="h-25 rounded 
                bg-{{ $color }}-600 
                p-4">
                  <h2 class="text-md font-semibold"> <q> {{ $company }} </q> </h2>
                  <p class="text-sm"> &lpar;{{ $val['designation'] }}&rpar; </p>
                  <p class="text-xs font-light">
                    From {{ $val['from'] }} <br>
                    to {{ $val['to'] }}
                  </p>
                </div>
                <div class="triangle rounded bg-{{ $color }}-600 hide-on-phone"></div>
                <div class="circle bg-gray-500 text-center hide-on-phone">&lt;</div>
              </div>
            @endforeach

          </div>
          <div class="w-100 bg-teal-300 grow grow-horizontal hide-on-phone"><hr></div>

        </div>
      
      </div>

    </div>
</div>


<style>
  .triangle{
    width: 20px;
    height: 20px;
    transform: rotate(45deg) translateY(-80%);
  }

  .circle{
    width: 20px;
    height: 20px;
    border-radius: 50%;
    transform: translateY(50%) translateX(10px);
  }


  .grow-horizontal{
    animation: grow-horizontal-animation 1s ease;
  }


  .opacity-animation{
    transform-origin: bottom center;
  }


  @keyframes grow-horizontal-animation {
    0%   {
      width: 0%
    }
    100% {
      width: 100%
    }
  }


  @keyframes grow-opacity-animation {
    0%   {
      opacity: 0;
      transform: scale(50%);
    }
    100% {
      transform: scale(100%);
      opacity: 1;
    }
  }


  @media only screen and (max-width:670px){
    .hide-on-phone{
      display: none;
    }
  }

</style>


@endsection