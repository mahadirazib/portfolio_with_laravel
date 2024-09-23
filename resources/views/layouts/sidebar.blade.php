<!-- Sidebar -->
<div class="px-2 pt-8 pb-8 h-full w-full z-50">
    <div class="mx-auto lg:px-6">
        <div class="flex flex-col">
            <div class="flex-1 grow text-white">
                <a href="{{ route('index') }}" class="block w-full p-3 rounded hover:bg-blue-950
                @if (request()->routeIs('index'))
                    bg-slate-900
                @endif
                ">
                    Introduction
                </a>
            </div>
            <div class="flex-1 grow text-white">
                <a href="{{ route('project') }}" class="block w-full p-3 rounded hover:bg-lime-950 active:bg-blue-950
                @if (request()->routeIs('project') || request()->routeIs('project.view'))
                    bg-slate-900
                @endif
                ">
                    Projects
                </a>
            </div>
            <div class="flex-1 grow text-white">
                <a href="{{ route('experience') }}" class="block w-full p-3 rounded hover:bg-cyan-950 active:bg-blue-950
                @if (request()->routeIs('experience'))
                    bg-slate-900
                @endif
                ">
                    Experiences
                </a>
            </div>
            <div class="flex-1 grow text-white">
                <a href="{{ route('skill') }}" class="block w-full p-3 rounded hover:bg-teal-950 active:bg-blue-950
                @if (request()->routeIs('skill'))
                    bg-slate-900
                @endif
                ">
                    Skills
                </a>
            </div>
            <div class="flex-1 grow text-white">
                <a href="{{ route('contact') }}" class="block w-full p-3 rounded hover:bg-indigo-950
                @if (request()->routeIs('contact'))
                    bg-slate-900
                @endif
                ">
                    Contact
                </a>
            </div>

            <div class="flex-1 grow text-white mt-16">
                <a href="{{ route('download.cv') }}" class="block w-full p-3 rounded hover:bg-rose-950
                @if (request()->routeIs('download.cv'))
                    bg-slate-900
                @endif
                ">
                    Download CV
                </a>
            </div>
        </div>
    </div>
</div>
