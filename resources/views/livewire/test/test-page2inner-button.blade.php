<div class="p-5 border border-danger">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    page 1 inner button <br>
    <table class="table table-bordered">
        @foreach ($products as $key => $item)
            <tr>
                <td>{{$key+1}} - {{$item['product']->id}} - {{$item['product']->product_name}}</td>
                <td>
                    <button wire:click="remove_from_cart({{$item['product']->id}})">remove</button>
                </td>
            </tr>
        @endforeach
    </table>
</div>
