<div>
    <div class="max-w-2xl mx-auto bg-white min-h-screen pt-10 flex flex-col items-center space-y-4">
    
        <div>
            <x-input-label value="Nombre" />
            <x-text-input  type="text" wire:model="name" />
            @error('name')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-input-label value="Teléfono" />
            <x-text-input  type="text" wire:model="phone" />
            @error('phone')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <x-input-label value="Email" />
            <x-text-input  type="text" wire:model="email" />
            @error('email')
                <span class="text-red-600 text-sm">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <button wire:click='store' class="px-4 py-2 text-white bg-blue-600 rounded">
                Agregar
            </button>
        </div>

    </div>
</div>
