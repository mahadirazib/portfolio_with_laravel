@extends('layouts.app')

@section('content')

<div class="w-100 h-100" style="height: 100%">
  <div class="text-white" style="height: 100%">
    <div class="p-8">

      <div class="flex flex-col flex-wrap justify-between" style="height: 100%">
        
        <div>
          <h1 class="text-2xl font-bold text-white pb-3"> {{ $project['name'] }}</h1>
          
          <div class=" text-sm font-light text-typewriter-effect">
            {{ $project['description'] }}
          </div>

        </div>

        <div class="mt-4 bg-white">
          @if ($project['link_to_view'] != null)
            <iframe src="{{ $project['link_to_view'] }}" frameborder="0" style="width: 100%; min-height: 200px;"></iframe>
          @else
            <h2 class="text-normal text-black font-bold m-4">No Preview available</h2>
          @endif
        </div>

        <div class="mt-12">
          <a class="me-2 p-2 px-6 rounded text-normal font-semibold bg-gray-800 
          hover:bg-{{ ['teal', 'cyan', 'blue', 'indigo', 'yellow', 'violet', 'lime', 'orange', 'rose'][mt_rand(0, 6)] }}-700" 
          href="{{ $project['link_to_view'] }}" target="_blank">See Actual Site</a>
          <a class="me-2 p-2 px-6 rounded text-normal font-semibold bg-gray-800 
          hover:bg-{{ ['teal', 'cyan', 'blue', 'indigo', 'yellow', 'violet', 'lime', 'orange', 'rose'][mt_rand(0, 6)] }}-700" 
          href="{{ $project['link_to_repo'] }}" target="_blank">Download Code</a>
          <div class="mt-4">
            <a class="text-sm font-semibold hover:text-cyan-400" href="{{ route('project') }}">&lt;&lt; Back</a>
          </div>
        </div>

      </div>

    
    </div>
  </div>
</div>


<style>
  .project-details{
    /* height: 150px; */
  }

  a{
    transition: background-color 0.5s ease;
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


@endsection