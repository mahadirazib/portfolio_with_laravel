@extends('layouts.app')

@section('content')

<div class="w-100 h-100" style="height: 100%">
    <div class="text-white w-100" style="height: 100%">
      <div class="p-8 w-100 flex flex-wrap items-center justify-items-center justify-center" style="height: 100%">

        <div class="text-center">
          <h1 class="text-2xl font-bold text-white pb-2 text-typewriter-effect">Thanks for your message.</h1>
          <p style="animation: grow-opacity-animation 0.5s ease;">I will reach out to you if necessary.</p>
        </div>
      
      </div>

    </div>
</div>


<style>
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