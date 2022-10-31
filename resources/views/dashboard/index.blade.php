<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="overflow-hidden sm:rounded-lg">

        <section class="py-3">
          <div class="container px-4 mx-auto">
            <div class="mb-6">

              <div class="flex flex-wrap -mx-3 -mb-6">

                @foreach ($infographs as $byte)
                    
                  <x-data-card :statistic="$byte" />

                @endforeach

              </div>

            </div>

            <div class="flex flex-wrap -mx-3">
              <div class="w-full lg:w-1/3 px-3 mb-6 lg:mb-0">
                
                @include('dashboard.partials._companies')

              </div>

              <div class="w-full lg:w-2/3 px-3">
                <div class="h-full p-6 bg-gray-500 rounded-xl">
                  <h4 class="text-lg text-gray-100 font-semibold mb-6">Latest Projects</h4>
                  <div class="w-full mt-6 pb-4 overflow-x-auto">
                    <table class="w-full min-w-max">
                      <thead>
                        <tr class="text-left">
                          <th class="p-0">
                            <div class="py-3 px-6 rounded-l-xl bg-gray-600">
                              <span class="text-xs text-gray-300 font-semibold">ORDER REF</span>
                            </div>
                          </th>
                          <th class="p-0">
                            <div class="py-3 px-6 bg-gray-600">
                              <span class="text-xs text-gray-300 font-semibold">CUSTOMER</span>
                            </div>
                          </th>
                          <th class="p-0">
                            <div class="py-3 px-6 bg-gray-600">
                              <button class="inline-flex items-center text-xs text-gray-300 font-semibold">
                                <span class="mr-2">DATE</span>

                                <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M7.8598 8.52669L4.9998 11.3934L2.1398 8.52669C2.01426 8.40115 1.844 8.33063 1.66646 8.33063C1.48893 8.33063 1.31867 8.40115 1.19313 8.52669C1.0676 8.65222 0.99707 8.82249 0.99707 9.00002C0.99707 9.17756 1.0676 9.34782 1.19313 9.47335L4.52646 12.8067C4.58844 12.8692 4.66217 12.9188 4.74341 12.9526C4.82465 12.9865 4.91179 13.0039 4.9998 13.0039C5.08781 13.0039 5.17494 12.9865 5.25618 12.9526C5.33742 12.9188 5.41116 12.8692 5.47313 12.8067L8.80646 9.47335C8.86862 9.41119 8.91793 9.3374 8.95157 9.25619C8.98521 9.17497 9.00252 9.08793 9.00252 9.00002C9.00252 8.91211 8.98521 8.82507 8.95157 8.74385C8.91793 8.66264 8.86862 8.58885 8.80646 8.52669C8.7443 8.46453 8.67051 8.41522 8.5893 8.38158C8.50808 8.34794 8.42104 8.33063 8.33313 8.33063C8.24522 8.33063 8.15818 8.34794 8.07696 8.38158C7.99575 8.41522 7.92196 8.46453 7.8598 8.52669ZM2.1398 5.47335L4.9998 2.60669L7.8598 5.47335C7.92177 5.53584 7.99551 5.58544 8.07675 5.61928C8.15799 5.65313 8.24512 5.67055 8.33313 5.67055C8.42114 5.67055 8.50828 5.65313 8.58952 5.61928C8.67075 5.58544 8.74449 5.53584 8.80646 5.47335C8.86895 5.41138 8.91855 5.33764 8.95239 5.2564C8.98624 5.17517 9.00366 5.08803 9.00366 5.00002C9.00366 4.91201 8.98624 4.82488 8.95239 4.74364C8.91855 4.6624 8.86895 4.58866 8.80646 4.52669L5.47313 1.19335C5.41116 1.13087 5.33742 1.08127 5.25618 1.04743C5.17494 1.01358 5.08781 0.996155 4.9998 0.996155C4.91179 0.996155 4.82465 1.01358 4.74341 1.04743C4.66217 1.08127 4.58844 1.13087 4.52646 1.19335L1.19313 4.52669C1.0676 4.65222 0.99707 4.82249 0.99707 5.00002C0.99707 5.17756 1.0676 5.34782 1.19313 5.47335C1.31867 5.59889 1.48893 5.66941 1.66646 5.66941C1.844 5.66941 2.01426 5.59889 2.1398 5.47335Z" fill="currentColor"></path>
                                </svg>
                              </button>
                            </div>
                          </th>

                          <th class="p-0">
                            <div class="py-3 px-5 rounded-r-xl bg-gray-600">
                              <span class="text-xs text-gray-300 font-semibold">STATUS</span>
                            </div>
                          </th>
                        </tr>
                      </thead>

                      <tbody class="text-gray-200">
                        <tr>
                          <td class="p-0">
                            <div class="h-16 p-6">
                              <h5 class="text-sm font-medium text-gray-100">CDD1049</h5>
                            </div>
                          </td>

                          <td class="p-0">
                            <div class="h-16 p-6">
                              <div class="flex h-full items-center">
                                {{-- <img class="w-6 h-6 mr-3 rounded-full object-cover" src="{{ asset('storage/logos/user.svg') }}" alt=""> --}}

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>

                                <span class="text-sm font-medium text-gray-100">John Doe</span>
                              </div>
                            </div>
                          </td>

                          <td class="p-0">
                            <div class="h-16 p-6">
                              <span class="text-sm text-gray-100 font-medium">July 06, 2022</span>
                            </div>
                          </td>

                          <td class="p-0">
                            <div class="h-16 p-6">
                              <div class="flex h-full items-center">
                                <span class="inline-block w-2 h-2 mr-1 bg-yellow-500 rounded-full"></span>
                                <span class="text-sm font-medium text-gray-100">Pending</span>
                              </div>
                            </div>
                          </td>
                        </tr>

                        <tr>
                          <td class="p-0">
                            <div class="h-16 p-6 rounded-l-xl bg-gray-600">
                              <h5 class="text-sm font-medium text-gray-100">CDD1049</h5>
                            </div>
                          </td>
                          <td class="p-0">
                            <div class="h-16 p-6 bg-gray-600">
                              <div class="flex h-full items-center">
                                {{-- <img class="w-6 h-6 mr-3 rounded-full object-cover" src="{{ asset('storage/logos/user.svg') }}" alt=""> --}}

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>

                                <span class="text-sm font-medium text-gray-100">John Doe</span>
                              </div>
                            </div>
                          </td>

                          <td class="p-0">
                            <div class="h-16 p-6 bg-gray-600">
                              <h5 class="text-sm font-medium text-gray-100">July 06, 2022</h5>
                            </div>
                          </td>
                          <td class="p-0">
                            <div class="flex h-16 p-6 items-center rounded-r-xl bg-gray-600">
                              <span class="inline-block w-2 h-2 mr-1 bg-green-500 rounded-full"></span>
                              <span class="text-sm font-medium text-gray-100">Delivered</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="p-0">
                            <div class="h-16 p-6">
                              <h5 class="text-sm font-medium text-gray-100">CDD1049</h5>
                            </div>
                          </td>
                          <td class="p-0">
                            <div class="h-16 p-6">
                              <div class="flex h-full items-center">
                                {{-- <img class="w-6 h-6 mr-3 rounded-full object-cover" src="{{ asset('storage/logos/user.svg') }}" alt=""> --}}

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>

                                <span class="text-sm font-medium text-gray-100">John Doe</span>
                              </div>
                            </div>
                          </td>

                          <td class="p-0">
                            <div class="h-16 p-6">
                              <span class="text-sm text-gray-100 font-medium">July 06, 2022</span>
                            </div>
                          </td>
                          <td class="p-0">
                            <div class="h-16 p-6">
                              <div class="flex h-full items-center">
                                <span class="inline-block w-2 h-2 mr-1 bg-yellow-500 rounded-full"></span>
                                <span class="text-sm font-medium text-gray-100">Pending</span>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="p-0">
                            <div class="h-16 p-6 rounded-l-xl bg-gray-600">
                              <h5 class="text-sm font-medium text-gray-100">CDD1049</h5>
                            </div>
                          </td>
                          <td class="p-0">
                            <div class="h-16 p-6 bg-gray-600">
                              <div class="flex h-full items-center">
                                {{-- <img class="w-6 h-6 mr-3 rounded-full object-cover" src="{{ asset('storage/logos/user.svg') }}" alt=""> --}}

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                </svg>

                                <span class="text-sm font-medium text-gray-100">John Doe</span>
                              </div>
                            </div>
                          </td>
                          <td class="p-0">
                            <div class="h-16 p-6 bg-gray-600">
                              <h5 class="text-sm font-medium text-gray-100">July 06, 2022</h5>
                            </div>
                          </td>
                          <td class="p-0">
                            <div class="flex h-16 p-6 items-center rounded-r-xl bg-gray-600">
                              <span class="inline-block w-2 h-2 mr-1 bg-red-500 rounded-full"></span>
                              <span class="text-sm font-medium text-gray-100">Refunded</span>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="p-0">
                            <div class="h-16 p-6">
                              <h5 class="text-sm font-medium text-gray-100">CDD1049</h5>
                            </div>
                          </td>
                          <td class="p-0">
                            <div class="h-16 p-6">
                              <div class="flex h-full items-center">
                                <img class="w-6 h-6 mr-3 rounded-full object-cover" src="{{ asset('storage/logos/user.svg') }}" alt="">
                                <span class="text-sm font-medium text-gray-100">John Doe</span>
                              </div>
                            </div>
                          </td>
                          <td class="p-0">
                            <div class="h-16 p-6">
                              <span class="text-sm text-gray-100 font-medium">July 06, 2022</span>
                            </div>
                          </td>
                          <td class="p-0">
                            <div class="h-16 p-6">
                              <div class="flex h-full items-center">
                                <span class="inline-block w-2 h-2 mr-1 bg-yellow-500 rounded-full"></span>
                                <span class="text-sm font-medium text-gray-100">Pending</span>
                              </div>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="p-0">
                            <div class="h-16 p-6 rounded-l-xl bg-gray-600">
                              <h5 class="text-sm font-medium text-gray-100">CDD1049</h5>
                            </div>
                          </td>
                          <td class="p-0">
                            <div class="h-16 p-6 bg-gray-600">
                              <div class="flex h-full items-center">
                                <img class="w-6 h-6 mr-3 rounded-full object-cover" src="{{ asset('storage/logos/user.svg') }}" alt="">
                                <span class="text-sm font-medium text-gray-100">John Doe</span>
                              </div>
                            </div>
                          </td>
                          <td class="p-0">
                            <div class="h-16 p-6 bg-gray-600">
                              <h5 class="text-sm font-medium text-gray-100">July 06, 2022</h5>
                            </div>
                          </td>
                          <td class="p-0">
                            <div class="flex h-16 p-6 items-center rounded-r-xl bg-gray-600">
                              <span class="inline-block w-2 h-2 mr-1 bg-red-500 rounded-full"></span>
                              <span class="text-sm font-medium text-gray-100">Refunded</span>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>
  </div>
</x-app-layout>
