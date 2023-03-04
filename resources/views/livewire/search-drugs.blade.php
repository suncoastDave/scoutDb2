<div>
    <input type="text"
           wire:model="search"
           placeholder="Search drugs"
    ><br>

        @foreach($drugs as $drug)
            <a href="prescription.cards/coupon/?ndc={{$drug->ndc11 }}&quantity={{ $drug->quantity }}&radius=5&zip=12084">
                {{ $drug->fullName }}</a>
            <br>
        @endforeach


    {{ $drugs->links() }}</div>
