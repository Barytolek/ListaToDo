<section class="p-4 my-container">
    <form id="sendId" action="{{url('/usunieto')}}" method="post">
        @csrf
    </form>
    <form id="changeState" action="{{url('/zmieniono')}}" method="post">
        @csrf
    </form>
    <button type="button" id="menu-btn" class="btn my-4 bg-primary text-light">MENU</button>
    <h1>Zadania:</h1>
    @foreach($data as $got)
        <div class="listItem m-auto p-2 mt-3 fs-4 position-relative">
            <div class="h2 p-2 d-inline-block">
                {{$got->nazwa_zadania}}
            </div>
            <div class="d-inline-block float-end">
                <button type="submit" form="sendId" class="btn-danger bg-danger" name="deleteButton" value="{{$got->id_zadania}}">Usuń</button>
                <button type="submit" class="btn-success bg-success" name="stan" value="{{$got->id_zadania}}" form="changeState">Gotowe/Niegotowe</button>
                <input type="hidden" class="stan" value="{{$got->czy_zakonczone}}">
            </div>
            <div class="p-2 justify-content-evenly">
                {{$got->opis_zadania}}
            </div>
            <div class="deadline">
                <span>Deadline: </span>{{$got->data_zakonczenia}}
            </div>
            <div class="data_dodania d-inline">
                <span>Dodano: </span>{{$got->data_dodania}}
            </div>
        </div>
        <script src="{{ asset('/js/borderColorChange.js') }}"></script>
    @endforeach
</section>
