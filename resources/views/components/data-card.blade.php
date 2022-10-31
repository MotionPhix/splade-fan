<div class="w-full md:w-1/2 lg:w-1/4 px-3 mb-6">

  <div class="max-w-sm mx-auto py-8 px-6 bg-indigo-700 rounded-xl">

    <div class="max-w-xs mx-auto text-center text-indigo-50">

      <div class="flex mx-auto w-12 h-12 mb-4 items-center justify-center bg-green-500 bg-opacity-20 rounded-xl">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
        </svg>

      </div>

      <span class="text-xs font-semibold">
        {{ $statistic['title'] }}
      </span>

      <h4 class="text-2xl leading-8 text-indigo-300 font-semibold mb-4">
        {{ $statistic['increment'] }}
      </h4>

      <div class="flex flex-wrap items-center justify-center -m-1">
        
        <div class="w-auto p-1">
          <span 
            class="inline-block py-1 px-2 text-xs text-green-500 font-medium bg-teal-900 rounded-full">
            {{ $statistic['growth_percent'] }}%
          </span>
        </div>

        <div class="w-auto p-1">

          <span class="text-xs text-gray-300 font-medium">
            Since {{ $statistic['created_at'] }}
          </span>

        </div>

      </div>

    </div>

  </div>

</div>
