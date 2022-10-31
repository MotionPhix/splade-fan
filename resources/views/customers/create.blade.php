<x-splade-modal max-width="lg">

  <h2 class="font-semibold flex gap-5 text-xl text-gray-800 leading-tight">
    Create contact
  </h2>

  <div class="pt-5">

    <x-splade-form 
      class="flex gap-4 flex-col" 
      method="post" 
      action="{{ route('customers.store') }}">

      <x-splade-input 
        name="first_name" 
        type="text" label="First name" />

      <x-splade-input 
        name="last_name" 
        type="text" 
        label="Last name" />

      <section class="flex gap-2 w-full">
        <x-splade-input 
        name="phone" 
        type="text" 
        class="w-full"
        label="Phone number" />

        <x-splade-input 
          name="address" 
          type="email" 
          class="w-full"
          label="Email address" />
      </section>

      <x-splade-select 
        label="Company"
        name="company_id"
        :choices="['searchEnabled' => false ]">
        <option value="" disabled>
          Pick a company
        </option>

        @forelse ($companies as $company)
          <option value="{{ $company->id }}">
            {{ $company->name }}
          </option>
        @empty
          
        @endforelse
      </x-splade-select>

      <section>
        <x-splade-submit 
          type="submit">
          Create
        </x-splade-submit>
      </section>
    </x-splade-form>

  </div>

</x-splade-modal>
