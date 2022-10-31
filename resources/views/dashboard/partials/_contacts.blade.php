<div class="h-full py-6 px-4 sm:px-6 bg-indigo-700 rounded-xl">
  
  <h4 class="text-lg text-gray-100 font-semibold mb-6">
    Latest Companies
  </h4>

  @forelse ($companies as $company)

    <Link 
      class="flex p-4 items-center justify-between hover:bg-gray-600 rounded-xl transition duration-150 text-gray-300" 
      href="{{ route('companies.show', $company) }}">
      <div class="flex items-center pr-2">
        <div class="flex w-10 h-10 mr-3 items-center justify-center bg-gray-400 bg-opacity-20 text-white rounded-xl">
          
          @if ($company->logo)          

            <img src="{{ asset('storage/logos/' . $company->logo->path) }}">

          @else

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>

          @endif        
          
        </div>

        <div>
          <h5 class="text-sm text-gray-100 leading-5 font-medium mb-1">
            {{ $company->name }}
          </h5>

          <p class="text-xs text-gray-400 font-semibold">
            Updated {{ $company->updated_at }}
          </p>
        </div>
      </div>

      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
      </svg>
    </Link>
    
  @empty
    
  @endforelse

</div>
