<x-splade-modal max-width="lg">

  <h2 class="font-semibold flex gap-5 text-xl text-gray-800 leading-tight">
    Create company
  </h2>

  <div class="pt-5">

    <x-splade-form 
      method="post" 
      class="flex gap-4 flex-col" 
      :action="route('companies.store')">

      <x-splade-input 
        type="text" 
        name="name" 
        label="Company name" />

      <x-splade-input 
        type="tel" 
        name="tel" 
        label="Company telephone" />

      <x-splade-input 
        type="email"
        name="email" 
        label="Company email" />

      <section>
        <x-splade-submit 
          type="submit">
          Create
        </x-splade-submit>
      </section>
    </x-splade-form>

  </div>

</x-splade-modal>
