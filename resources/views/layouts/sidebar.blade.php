<!--Sidebar-->
<div
    class="bg-slate-950 px-2 pt-8 pb-8 w-100 h-100" style="height: 100%">
    <div class=" mx-auto lg:px-6">
        <div class="flex flex-col">
            <div class="flex-1 grow text-white">
                <a href="{{ route('index') }}" class="block w-100 p-3 rounded hover:bg-blue-950
                @if (request()->routeIs('index'))
                    bg-slate-900
                @endif
                ">
                    Introduction
                </a>
            </div>
            <div class="flex-1 grow text-white">
                <a href="{{ route('project') }}" class="block w-100 p-3 rounded hover:bg-lime-950 active:bg-blue-950
                @if (request()->routeIs('project') || request()->routeIs('project.view'))
                    bg-slate-900
                @endif
                ">
                    Projects
                </a>
            </div>
            <div class="flex-1 grow text-white">
                <a href="{{ route('experience') }}" class="block w-100 p-3 rounded hover:bg-cyan-950 active:bg-blue-950
                @if (request()->routeIs('experience'))
                    bg-slate-900
                @endif
                ">
                    Experiences
                </a>
            </div>
            <div class="flex-1 grow text-white">
                <a href="{{ route('skill') }}" class="block w-100 p-3 rounded hover:bg-teal-950 active:bg-blue-950
                @if (request()->routeIs('skill'))
                    bg-slate-900
                @endif
                ">
                    Skills
                </a>
            </div>
            <div class="flex-1 grow text-white">
                <a href="#" class="block w-100 p-3 rounded hover:bg-indigo-950">
                    Contact
                </a>
            </div>
        </div>
    </div>
</div>
