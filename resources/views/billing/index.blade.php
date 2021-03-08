<x-app-layout>

    <div class="pb-12">

        @livewire('subscriptions')

        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            @livewire('payment-method-create')

            <div class="my-8">
                @livewire('payment-method-list')
            </div>


            @livewire('invoices')
        </div>

    </div>

</x-app-layout>