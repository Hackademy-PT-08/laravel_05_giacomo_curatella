<x-layout>
    <x-slot name="title">
        Home - videogiochi.it
    </x-slot>
    <x-nav/>
    @if (session('emailSent'))
        <div class="alert alert-success">
            {{ session('emailSent') }}
        </div>
    @endif
    <section class="container py-5">
        <div class="row py-5">
            <div class="col-12 py-5">
                <h1 class="text-center py-5">I milgiori videogiochi al miglior prezzo</h1>
                <p class="h3 py-5 text-center">accedi al nostro <a href="{{ route('products') }}" class="text-danger">Catalogo</a></p>
            </div>
        </div>
    </section>
    <x-footer/>
</x-layout>