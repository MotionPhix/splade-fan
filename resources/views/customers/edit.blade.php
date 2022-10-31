<x-splade-modal max-width="lg">

  <h2 class="font-semibold flex gap-5 text-xl text-gray-800 leading-tight">
    Editing {{ $customer->first_name }}
  </h2>

  <div class="pt-5">

    <x-splade-form
      method="put" 
      class="flex gap-4 flex-col" 
      action="{{ route('customers.update', $customer) }}" 
      :default="[
        'first_name' => $customer->first_name,
        'last_name' => $customer->last_name,
        'address' => $customer->email->address,
        'company_id' => $customer->company_id,
        'phone' => $customer->phone->mobile
      ]">

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
          type="tel" 
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
        >
        <option value="" disabled>
          Pick a company
        </option>

        @forelse ($companies as $company)

          <option value="{{ $company->id }}">
            {{ $company->name }}
          </option>

        @empty
          
          No companies!

          <Link 
            modal 
            href="{{ route('companies.create') }}" 
            class="bg-lime-500 text-white rounded px-2 py-1.5 font-bold">
            Create company
          </Link>

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
