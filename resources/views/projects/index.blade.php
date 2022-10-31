<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold flex gap-5 text-xl text-gray-800 leading-tight">
      <span>{{ __('Projects') }}</span>

      {{-- <Link modal class="bg-lime-600 px-2 py-1.5 text-sm font-bold rounded text-white hover:bg-lime-900 transition m-0" href="{{ route('projects.create') }}">
      New project
      </Link> --}}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="overflow-hidden sm:rounded-lg">

        <section class="py-3 flex flex-wrap">

          @forelse ($projects as $project)

            <x-project-card :project="$project" />

          @empty
            
            <section class="flex flex-col mx-auto max-w-sm gap-4">

              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
              </svg>                          

              <h3 class="text-lg leading-6 font-medium text-gray-900">
                You don't have any projects, yet!
              </h3>

              <div>
                <Link modal href="{{ route('projects.create') }}" class="bg-indigo-700 text-white rounded px-2 py-1.5 font-bold">
                Create one
                </Link>
              </div>
            </section>
            
          @endforelse
        </section>

      </div>
    </div>
  </div>
</x-app-layout>
