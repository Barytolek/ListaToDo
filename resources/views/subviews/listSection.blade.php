<section class="p-4 my-container">
    <button type="button" id="menu-btn" class="btn my-4 bg-primary text-light">MENU</button>
    <h1>Zadania:</h1>
    @foreach($data as $got)
        <div class="listItem m-auto p-2 mt-3 fs-4 position-relative">
            <div class="h2 p-2">
                {{$got->nazwa_zadania}}
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
    @endforeach
</section>
