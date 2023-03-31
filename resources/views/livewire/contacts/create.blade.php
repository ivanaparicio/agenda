<div>
    @if($open)
        <div  class="fixed bg-black bg-opacity-60 inset-0 pt-10 pb-14">
            <div class="max-w-2xl mx-auto bg-white rounded-2xl overflow-hidden">

                <div class="px-8 py-10 space-y-5">
                    
                    <x-commons.input label="Nombre" class="w-full" wire:model.defer='name' />
                    <x-commons.error name="name" />
                    
                    <x-commons.input label="Email" class="w-full" wire:model.defer='email'/>
                    <x-commons.error name="email" />
                    
                    <x-commons.input label="Dirección" class="w-full" wire:model.defer='address'/>
                    <x-commons.error name="address" />

                </div>
                
                <div class="py-2 px-4 text-right bg-slate-100 space-x-4">
                    <x-commons.button-secondary name="Cerrar" wire:click='closeModal' />
                    <x-commons.button-primary name="Guardar" wire:click='store' />
                </div>
            </div>
        </div>
    @endif
</div>
