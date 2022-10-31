<div class="md:w-1/3">

  <div class="bg-white border rounded p-4 m-2 flex flex-col h-full">

      <div class="font-bold text-gray-700 text-xl">
        {{ $project->name }}
      </div>
      
      <p class="text-gray-600 text-xs font-bold mb-6">
        Project deadline 
        @if ($project->is_past())
          was
        @else
          is in
        @endif
        {{ $project->deadline() }}
      </p>
      
      <ul class="my-2 space-y-2 text-left text-gray-400 dark:text-gray-300">

        @forelse ($project->tasks as $task)
            
          <li 
            class="flex items-center gap-3 border-t pt-1 group">
            <svg 
              class="flex-shrink-0 w-5 h-5 text-indigo-500 dark:text-indigo-400"
              fill="currentColor" 
              viewBox="0 0 20 20" 
              xmlns="http://www.w3.org/2000/svg">
              <path 
                fill-rule="evenodd" 
                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" 
                clip-rule="evenodd" />
            </svg>

            <span
              @class(['font-bold line-through' => $task->status === 'Done'])>
              {{ $task->name }}
            </span>

            <span class="flex-1" />

            <Link
              modal
              href="{{
                route('projects.tasks.edit', [$project, $task])
              }}"
              class="hidden group-hover:inline-flex transition hover:text-gray-500">
            
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
              </svg>   
            
            </Link>         

            <x-splade-form 
              :action="route('projects.tasks.destroy', [$project, $task])"
              class="hidden group-hover:inline-flex transition hover:text-gray-500"
              method="delete">
              
              <button type="submit">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>

              </button>

            </x-splade-form>            

          </li>

        @empty
          <Link modal href="{{ route('projects.tasks.create', $project) }}" class="text-lg text-gray-400 transition hover:text-gray-500">
            Add a task
        </Link>
        @endforelse

      </ul>

      <span class="flex-1" />

      <div class="flex items-center border-t pt-2 mt-2">
          
          @if ($project->customer->company->logo)

            <img 
              class="w-10 h-10 rounded-full object-cover" 
              src="{{ asset('storage/logod/' . $project->cutomer->company->logo->path) }}" alt="Avatar">

          @else

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>
          
          @endif

          <div class="ml-3">
            <p class="text-gray-700 text-sm block leading-none">
              {{ $project->customer->first_name }} 
              {{ $project->customer->last_name }}
            </p>
            
            <small class="text-xs text-gray-600 font-bold">
              {{ $project->customer->company->name }}
            </small>
          </div>

          <span class="flex-1" />

         <Link modal href="{{ route('projects.tasks.create', $project) }}" class="text-xs text-gray-400 transition hover:text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
         </Link>

         <div class="relative text-gray-400 flex items-center gap-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122" />
            </svg>
            
            <span class="absolute -top-1 -right-1 rounded-full bg-indigo-600 text-white font-bold text-xs w-4 h-4 text-center">
              {{ $project->tasks->count() }}
            </span>
         </div>

      </div>

  </div>

</div>
