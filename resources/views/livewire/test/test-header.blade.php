<div>
    {{-- Stop trying to control. --}}
    <nav class="navbar navbar-expand-sm bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('test_1') }}">page 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('test_2') }}">page 2</a>
                    </li>
                    <li class="nav-item" style="justify-self: flex-end">
                        <button class="btn btn-info">
                            @livewire('test.test-counter')
                        </button>
                    </li>
                    <li class="nav-item" style="justify-self: flex-end">
                        &nbsp; &nbsp;
                        <button onclick="Livewire.emitTo('test.test-counter','resets')" class="btn btn-outline-danger">
                            reset
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>
