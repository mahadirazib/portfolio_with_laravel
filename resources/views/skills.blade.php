@extends('layouts.app')

@section('content')

<div class="w-100 h-100" style="height: 100%">
    <div class="text-white" style="height: 100%">
      <div class="p-8 pe-12 flex flex-col flex-wrap justify-between" style="height: 100%">

        <h1 class="text-2xl font-bold text-white pb-2">My Skills:</h1>

        <div class="grid grid-cols-2 gap-10">
          @foreach ($skills as $section => $skill)
            <div>
              <div class="mb-2">
                <h3 class="text-normal">{{ $section }}:</h3>
              </div>

              <div class="grid grid-cols-4 gap-1 mb-1">

                @foreach ($skill as $data => $percentage)
                  <div class="text-sm font-light">{{ $data }}</div>
                  <div class="col-span-3 h-2 grow self-center bg-gray-600 rounded overflow-hidden">
                      <div class="h-100" 
                      style="width: {{ $percentage }}; height: 100%;" >
                        <div class="grow-from-0 bg-{{ ['teal', 'cyan', 'blue', 'indigo', 'yellow', 'violet', 'lime', 'orange', 'rose'][mt_rand(0, 6)] }}-400" style="width: 100%; height: 100%"></div>
                      </div>
                  </div>
                @endforeach
              </div>

            </div>
          @endforeach


        </div>
      
      </div>

    </div>
</div>


<style>
  .grow-from-0{
    animation: grow-animation 1.5s cubic-bezier(0.84, 0.03, 0.15, 1.36);
  }



  @keyframes grow-animation {
        0%   {
          width: 0%
        }
        100% {
          width: 100%
        }
    }
</style>




@endsection