<div id="jumboContainer">
    <img src="img/jumbotron.jpg" alt="Jumbotron">
</div>
<div id="cardsContainer">
    <div>
        <div>
            <strong class="fonSiz1_5rem">CURRENT SERIES</strong>
        </div>
        <div>
            @for ($i=0; $i<sizeof($comic_books); $i++)
                <div class="card">
                    <img src="{{ $comic_books[$i]['thumb'] }}" alt="">
                    <div class="marTop0_5rem">{{ strtoupper($comic_books[$i]["series"]) }}</div>
                </div>
            @endfor
        </div>
        <div>
            <strong>LOAD MORE</strong>
        </div>
    </div>
</div>
<div id="mainLastRow">
    <div>
        @for ($i=0; $i<sizeof($icon); $i++)
            <div>
                <img class="icon" src="{{ $icon[$i]['srcIcon'] }}" alt="">
                <div class="marLef1rem">{{ $icon[$i]["title"] }}</div>
            </div>
        @endfor
    </div>
</div>