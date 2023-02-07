<div class="p-5 border border-danger" wire:key="{{ rand(10000,99999) }}">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    page search button <br>
    @livewire('test.test-search')
    <br>

    <table class="table table-bordered">
        @foreach ($products as $item)
            <tr>
                <td>
                    <a href="{{ route('show',$item->id) }}">
                        {{$item->id}}-{{$item->product_name}}
                    </a>
                </td>
                <td>
                    <button onclick="Livewire.emitTo('test.test-counter', 'increment',{{$item->id}})">increment</button>
                    &nbsp;
                    <button onclick="Livewire.emit('load_modal',{{$item->id}})">show</button>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $products->links() !!}
</div>

