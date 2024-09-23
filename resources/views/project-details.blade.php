@extends('layouts.app')

@section('content')

<div class="w-100 h-100" style="height: 100%">
  <div class="text-white" style="height: 100%">
    <div class="p-8">

      <div class="flex flex-col flex-wrap justify-between" style="height: 100%">
        
        <div>
          <h1 class="text-2xl font-bold text-white pb-3"> {{ $project['name'] }}</h1>
          
          <div class=" text-sm font-light text-typewriter-effect" style="min-height: 100px;">
            {{ $project['description'] }}
          </div>

        </div>

        @php
          $num = 0.7;
        @endphp
        <div class="mt-4">
          @if ($project['images'] != null)
            <div class="grid md:grid-cols-3 sm:grid-cols-1 gap-4">
              @foreach ($project['images'] as $image)
                @if (file_exists(('storage/project_images/'.$image)))
                  <div class="project-image w-100 make-image-visible" onclick="makeVisible(this)" style="animation: grow-opacity-animation {{ $num }}s ease;">
                    @php
                      $num += 0.3;
                    @endphp

                    <img class="w-100" src="{{ asset('storage/project_images/'.$image) }}" alt="project image">

                    <div class="full-image-canvas" >
                      <div class="bg-cover-image" style="background-image: url('{{ asset('storage/project_images/'.$image) }}');"></div>
                    </div>

                  </div>
                @endif
              @endforeach
            </div>
          @endif
        </div>


        <div class="mt-12 block">
          @if ($project['link_to_view'] != null)
            <a class="me-2 p-2 px-6 rounded text-normal font-semibold bg-gray-800 make-block-in-phone
            hover:bg-{{ ['teal', 'cyan', 'blue', 'indigo', 'yellow', 'violet', 'lime', 'orange', 'rose'][mt_rand(0, 6)] }}-700" 
            href="{{ $project['link_to_view'] }}" target="_blank">See Actual Site</a>
          @endif

          @if ($project['link_to_repo'] != null)
            <a class="me-2 p-2 px-6 rounded text-normal font-semibold bg-gray-800 make-block-in-phone
            hover:bg-{{ ['teal', 'cyan', 'blue', 'indigo', 'yellow', 'violet', 'lime', 'orange', 'rose'][mt_rand(0, 6)] }}-700" 
            href="{{ $project['link_to_repo'] }}" target="_blank">Download Code</a>
          @endif

          <div class="mt-4">
            <a class="text-sm font-semibold hover:text-cyan-300" href="{{ route('project') }}">&lt;&lt; Back</a>
          </div>
        </div>

      </div>

    
    </div>
  </div>
</div>


<style>
  .project-image{
    width: 100%;
    height: 150px;
    overflow: hidden;
    cursor: pointer;
  }

  .project-image img{
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  a{
    transition: background-color 0.5s ease;
  }


  .full-image-canvas{
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    padding: 50px;
    display: none;
    opacity: 0;
    visibility: hidden;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.2);
    backdrop-filter: blur(2px);
    transition: opacity 0.5s, visibility 0.5s;
    z-index: 1010;
  }


  .full-image-canvas.visible {
    opacity: 1;
    visibility: visible;
    display: block;
  }


  .bg-cover-image{
    width: 100%;
    height: 100%;
    background: no-repeat center;
    background-size: contain;

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
    .make-block-in-phone{
      display: block;
      margin: 10px 0;
      text-align: center;
    }
  }

</style>



<script>
  
  function makeVisible(ele){

    ele.querySelector('.full-image-canvas').style.display = "flex";

    setTimeout(() => {
      ele.querySelector('.full-image-canvas').classList.add('visible');
    }, 100);

  }


  let elements = document.querySelectorAll('.full-image-canvas');
  elements.forEach(ele => {
    ele.addEventListener('click', function(event){

      ele.classList.remove('visible');
      setTimeout(() => {
          ele.style.display = 'none';
      }, 500);

      event.stopPropagation();
    })
  });


</script>

@endsection