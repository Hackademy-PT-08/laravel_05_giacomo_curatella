<x-layout>
    <x-slot name="title">
        ProductsList - videogiochi.it
    </x-slot>
    <x-nav/>

    @foreach($games as $game)
        <section class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <x-cards
                    id="{{ $game['id'] }}"
                    img="{{ $game['img'] }}"
                    title="{{ $game['title'] }}"
                    desc="{{ $game['desc'] }}"
                    price="{{ $game['price'] }}"
                    date="{{ $game['date'] }}"
                    :carousel="$game['carousel']"
                    />
                </div>
            </div>
        </section>
    @endforeach

    <x-footer/>
</x-layout>