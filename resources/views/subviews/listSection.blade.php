<section class="p-4 my-container">
    <button type="button" id="menu-btn" class="btn my-4 bg-primary text-light">MENU</button>
    <div>
        <h1>Zadania:</h1>
        <span>Wyszukaj: </span>
        <input type="text" id="wyszukiwarka">
    </div>

    @foreach($data as $got)
        <div class="listItem m-auto p-2 mt-3 fs-4 position-relative" id="{{$got->nazwa_zadania}}">
            <div class="h2 p-2">
                {{$got->nazwa_zadania}}
            </div>
            <div class="p-2 justify-content-evenly">
                {{$got->opis_zadania}}
            </div>
            <div class="deadline d-inline-block">
                <span>Deadline: </span><div class="date d-inline-block">{{$got->data_zakonczenia}}</div>
            </div>
            <div class="data_dodania d-inline">
                <span>Dodano: </span>{{$got->data_dodania}}
            </div>
        </div>
    @endforeach
    <script src="{{ asset('/js/wyszukiwarka.js') }}"></script>
    <script src="{{ asset('/js/borderColorChange.js') }}"></script>
</section>
