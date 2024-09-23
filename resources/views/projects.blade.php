@extends('layouts.app')

@section('content')

<div class="w-100 h-100" style="height: 100%">
    <div class="text-white" style="height: 100%">
      <div class="p-8">

      <h1 class="text-2xl font-bold text-white pb-3">Projects:</h1>
      
      <div class="w-100">

        @foreach ($projects as $section => $data)

          <h2 class="text-md font-bold mt-6 mb-2">{{ $section }}:</h2>
          
          <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-6">
            @php
              $num = 0.5;
            @endphp

            @foreach ($data as $link => $project)
              <div class="project-details rounded border border-t-0 border-l-0 
              border-{{ ['teal', 'cyan', 'blue', 'indigo', 'yellow', 'violet', 'lime', 'orange', 'rose'][mt_rand(0, 6)] }}-600 
              p-4 pb-6"
              style="animation: grow-opacity-animation {{ $num }}s ease;"
              > 
              @php
                $num += 0.2;
              @endphp

                <h3 class="text-normal"> {{ Str::limit($project['name'], 20) }} </h3>
                <p class="text-xs font-light mb-3"> {{ Str::limit($project['description'], 100) }} </p>
                @if ($project['link_to_view'] != null)
                  <a class="me-2 p-2 rounded text-xs font-bold bg-gray-800 
                  hover:bg-{{ ['teal', 'cyan', 'blue', 'indigo', 'yellow', 'violet', 'lime', 'orange', 'rose'][mt_rand(0, 6)] }}-700" 
                  href="{{ $project['link_to_view'] }}" target="_blank">See Live</a>                  
                @endif

                @if ($project['link_to_repo'] != null)
                  <a class="me-2 p-2 rounded text-xs font-bold bg-gray-800 
                  hover:bg-{{ ['teal', 'cyan', 'blue', 'indigo', 'yellow', 'violet', 'lime', 'orange', 'rose'][mt_rand(0, 6)] }}-700" 
                  href="{{ $project['link_to_repo'] }}" target="_blank">Code</a>
                @endif
                <a class="me-2 p-2 rounded text-xs font-bold bg-gray-800 
                hover:bg-{{ ['teal', 'cyan', 'blue', 'indigo', 'yellow', 'violet', 'lime', 'orange', 'rose'][mt_rand(0, 6)] }}-700" 
                href="{{ route( 'project.view', $link) }}">See Details</a>
              </div>
            @endforeach
          </div>
          
        @endforeach

      </div>

      
    </div>

    </div>
</div>


<style>
  .project-details{
    /* height: 150px; */
    background-color: rgba(0, 0, 0, 0.2)
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