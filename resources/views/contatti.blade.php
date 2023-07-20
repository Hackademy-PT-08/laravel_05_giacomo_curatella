<x-layout>
    <x-slot name="title">
        Contatti - videogiochi.it
    </x-slot>
    <x-nav/>
    @if (session('emailNotSent'))
        <div class="alert alert-danger">
            {{ session('emailNotSent') }}
        </div>
    @endif
    <section class="container py-5">
        <div class="row py-5 justify-content-center">
            <div class="col-8 py-5">
                <p class="text-center display-3 mb-5">Sezione contatti</p>
                <form method="POST"  class="d-flex flex-column">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome e Cognome</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="mail" class="form-label">Email address</label>
                        <input type="email" name="mail" class="form-control" id="mail">
                    </div>
                    <div class="mb-3">
                        <label for="user_message" class="form-label">Scrivi quì il tuo messaggio</label>
                        <textarea name="user_message" id="user_message" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary align-self-center">Invia</button>
                </form>
            </div>
        </div>
    </section>
    <x-footer/>
</x-layout>