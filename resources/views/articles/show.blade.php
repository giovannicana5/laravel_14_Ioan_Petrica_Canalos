<x-layout>
    <header class="header">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <h1 class="text-center fw-bold text-black">Articoli disponibili</h1>
                </div>
            </div>
        </div>
    </header>
    <livewire:card-article :article=$article />
</x-layout>