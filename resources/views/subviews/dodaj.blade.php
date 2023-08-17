<section class="p-4 my-container">
    <link rel="stylesheet" type="text/css" href="css/subviewBox.css">
    <button type="button" id="menu-btn" class="btn my-4 bg-primary text-light">MENU</button>

    <div class="dataBox p-2">
        <h1>Dodaj:</h1>
        <form method="post" action="{{url('/dodano')}}">
            @csrf
        <div class="formLine" ><label for="title">Tytuł:</label><input type="text" id="title" name="title"></div>
        <div class="formLine" ><label for="description">Opis:</label><textarea id="description" name="description" rows="5" cols="50" maxlength="250" class="flex-fill">Write Here the description of your record!!!</textarea></div>
        <div class="formLine" >
            <label for="deadline">Deadline:</label><input type="date" name="deadline">
            <input type="submit" value="Dodaj" class="submitButton">
        </form>
        </div>

    </div>
</section>
