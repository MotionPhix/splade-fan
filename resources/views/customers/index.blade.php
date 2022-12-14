<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Contacts') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="overflow-hidden sm:rounded-lg">

        <section class="py-3">

          @php
            $client_list = new $customers;
          @endphp

          @if($client_list->for()->isNotEmpty())
          <x-splade-table :for="$customers" as="$customer">

            <x-splade-cell contact>

              <p class="font-bold"> 
                {{ $customer->first_name . ' ' . $customer->last_name }}
              </p>
              
            </x-splade-cell>

            <x-splade-cell actions>
              <span class="flex gap-2 items-center">
                <Link slideover href="{{ route('customers.edit', $customer) }}" class="hover:text-green-500 transition inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                </svg>
                </Link>

                <x-splade-form method="delete" confirm="Delete {{ $customer->first_name }}" action="{{ route('customers.destroy', $customer) }}" confirm-text="There are no soft-deletes; that means when you choose `Yes, please!` you will not be able to recover your data." confirm-button="Yes, please!" cancel-button="No, thanks." class="inline-block">
                  <x-splade-submit class="px-2 py-1.5 bg-rose-400 hover:bg-rose-600 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                  </x-splade-submit>
                </x-splade-form>
              </span>
            </x-splade-cell>

          </x-splade-table>

          @else

            <section class="flex flex-col mx-auto max-w-sm gap-4">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-16 h-16">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
              </svg>

              <h3 class="text-lg leading-6 font-medium text-gray-900">
                You don't have any customers, yet!
              </h3>

              <div>
                <Link modal href="{{ route('customers.create') }}" class="bg-lime-500 text-white rounded px-2 py-1.5 font-bold">
                Create one
                </Link>
              </div>
            </section>
            
          @endif

        </section>

      </div>
    </div>
  </div>
</x-app-layout>
