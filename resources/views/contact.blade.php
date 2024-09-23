@extends('layouts.app')

@section('content')

<div class="w-100 h-100" style="height: 100%">
    <div class="text-white" style="height: 100%">
      <div class="p-8 flex flex-col flex-wrap" style="height: 100%">

        <h1 class="text-2xl font-bold text-white pb-4">Contact Me:</h1>
        
        <div class="max-w-screen-md w-100">
          {{-- <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Me:</h2> --}}
          <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6 mt-2 w-100">
            @csrf
            <div class="grow-from-0 ">
                <label for="email" class="block mb-1 text-sm font-medium text-gray-300">Your email</label>
                <input type="email" id="email" class="w-full p-1 placeholder:text-slate-700" name="email" placeholder="mahadirzb@gmail.com" required>
            </div>
            <div class="grow-from-0 ">
                <label for="subject" class="block mb-1 text-sm font-medium text-gray-300">Subject</label>
                <input type="text" id="subject" class="w-full p-1 placeholder:text-slate-700" name="subject" placeholder="Subject of the message" required>
            </div>
            <div class="grow-from-0 sm:col-span-2">
                <label for="message" class="block mb-1 text-sm font-medium text-gray-300">Your message</label>
                <textarea id="message" rows="6" class="w-full p-1 placeholder:text-slate-700" name="message" placeholder="Leave a comment..."></textarea>
            </div>
            <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-cyan-700 sm:w-fit hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Send message</button>
          </form>
      </div>
      
      </div>

    </div>
</div>

<style>
  input[type="text"], input[type="email"], textarea {
    background-color: transparent;
    border: none;
    border-bottom: 1px solid;
  }

  textarea {
    border: 1px solid;
    height: 120px;
  }

  input[type="text"]:active, input[type="email"]:active, textarea:active {
    background-color: transparent;
    border: 1px solid;
  }
  button{
    transition: background-color 0.5s ease;
  }






  .grow-from-0{
    animation: grow-animation 1.5s cubic-bezier(0.84, 0.03, 0.15, 1.36);
  }


  @keyframes grow-animation {
    0%   {
      width: 50%;
      opacity: 0;
    }
    100% {
      width: 100%;
      opacity: 1;
    }
  }

</style>
@endsection