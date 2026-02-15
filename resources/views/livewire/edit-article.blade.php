<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    {{-- @dd($article) --}}
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                @if (session('message'))
                    <div class="alert alert-success">{{session('message')}}</div>
                @endif
                <form class="shadow p-5 rounded-5 bg-secondary" wire:submit="updateArticle">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo dell'articolo</label>
                        <input wire:model.blur="title" type="text" class="form-control" id="title">
                        <div class="text-danger">@error ('title') {{$message}} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo dell'articolo</label>
                        <input wire:model="subtitle" type="text" class="form-control" id="subtitle">
                        <div>@error ('subtitle') {{$message}} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo</label>
                        <textarea wire:model="body" class="form-control" id="body"></textarea>
                        <div>@error ('body') {{$message}} @enderror</div>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Crea l'articolo</button>
                </form>
            </div>
        </div>
    </div>
</div>
