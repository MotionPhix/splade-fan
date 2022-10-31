<x-splade-modal max-width="lg">

  <h2 class="font-semibold flex gap-5 text-xl text-gray-800 leading-tight">
    Create a project
  </h2>

  <div class="pt-5">

    <x-splade-form 
      class="flex gap-4 flex-col" 
      method="post" 
      action="{{ route('projects.store') }}">

      <x-splade-input 
        name="name" 
        type="text" 
        label="Project name"
        placeholder="e.g. Rollup banner designs" />

      <x-splade-input 
        name="has_deadline" 
        label="Expected on"
        placeholder="Pick a date"
        date />
        
      <x-splade-select 
        label="Project for"
        name="customer_id"
        choices>
        <option value="" disabled>
          Pick a contact person
        </option>

        @foreach ($customers as $contact)
          <option value="{{ $contact->id }}">
             {{ $contact->first_name }} {{ $contact->last_name }} |
              
             {{ $contact->company->name }}
          </option>
        @endforeach

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
