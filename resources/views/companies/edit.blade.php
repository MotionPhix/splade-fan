<x-splade-modal max-width="lg">

  <h2 class="font-semibold flex gap-5 text-xl text-gray-800 leading-tight">
    Editing {{ $customer->first_name }}
  </h2>

  <div class="pt-5">

    <x-splade-form class="flex gap-4 flex-col" method="put" action="{{ route('customers.update', $customer) }}" :default="$customer">

      <x-splade-input name="first_name" label="First name" />

      <x-splade-input name="last_name" label="Last name" />

      <section>
        <x-splade-submit 
          type="submit">
          Update
        </x-splade-submit>
      </section>
    </x-splade-form>

  </div>

</x-splade-modal>
