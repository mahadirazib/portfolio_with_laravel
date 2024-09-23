@extends('layouts.app')

@section('content')

<div class="w-100 h-100" style="height: 100%">
    <div class="text-white" style="height: 100%">
      <div class="p-8 pe-12 flex flex-col flex-wrap justify-between" style="height: 100%">

        <h1 class="text-2xl font-bold text-white pb-3">Work Experiences:</h1>

        <div class="w-100">

          <div class="flex flex-wrap justify-between w-100">

            @php
              $num = 1.5;
            @endphp
            @foreach ($experiences as $company => $val)
              <div class="opacity-animation" style="animation: grow-opacity-animation {{ $num }}s ease;">
                @php
                  $num -= 0.4;
                @endphp
                <div class="h-25 w-25 rounded bg-cyan-600 p-4">
                  <h2 class="text-md font-semibold"> <q> {{ $company }} </q> </h2>
                  <p class="text-sm"> &lpar;{{ $val['designation'] }}&rpar; </p>
                  <p class="text-xs font-light">
                    From {{ $val['from'] }} <br>
                    to {{ $val['to'] }}
                  </p>
                </div>
                <div class="triangle rounded bg-cyan-600"></div>
                <div class="circle bg-cyan-800 text-center">&lt;</div>
              </div>
            @endforeach

          </div>
          <div class="w-100 bg-teal-300 grow grow-horizontal"><hr></div>

        </div>

        <div class=" text-sm font-light text-typewriter-effect">
          I may not be an extra ordinary person but I have worked with many talented and extra ordinary developers and gained a portion of their knowledge. I may not have talent but I can work hard. I have completed my Bachelor's degree in Computer Science and Engineering with a great result.
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

</style>


<script>
// let elements = document.querySelectorAll('.opacity-animation');
// elements.forEach(element => {
//   element.setAttribute("animation-delay", "-3s");
// });
</script>


@endsection