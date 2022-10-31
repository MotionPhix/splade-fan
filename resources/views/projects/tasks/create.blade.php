<x-splade-modal max-width="lg">

  <h2 class="font-semibold flex gap-5 text-xl text-gray-800 leading-tight">
    Create a task
  </h2>

  <div class="pt-5">

    <x-splade-form 
      class="flex gap-4 flex-col" 
      method="post" 
      action="{{ route('projects.tasks.store', $project) }}">

      <x-splade-input 
        name="name" 
        type="text" 
        label="Task"
        placeholder="e.g. Design a 6x6 billboard" />
        
      <x-splade-select 
        label="Task status"
        name="status"
        choices>
        <option value="" disabled>
          Pick a status
        </option>

        @foreach ($statuses as $status)
          <option value="{{ $status }}">
             {{ $status }}
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
