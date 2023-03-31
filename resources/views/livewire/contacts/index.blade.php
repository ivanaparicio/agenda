<div class="py-8 pb-14">

    <div class="max-w-3xl mx-auto">

        <div class="pb-4 flex justify-between">
            <x-text-input wire:model="search"  type="text" />
            <x-commons.button-primary name="Crear" wire:click='openCreate'/>
        </div>

        <table class="min-w-full leading-normal border" >
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Nombre
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Dirección
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        email
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Teléfonos
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $item)

                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            {{ $item->name }}
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            {{ $item->address }}
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            {{ $item->email }}
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            @foreach ($item->phones as $phone )
                                <span> {{ $phone->number }} </span>
                            @endforeach  
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>

        <div class="py-4 px-3">
            {{ $contacts->links() }}
        </div>

    </div>

    <livewire:contacts.create />

</div>

@push('js')
    <script>
        Livewire.on('success', msj => {
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: msj,
            })
        })
    </script>
@endpush
