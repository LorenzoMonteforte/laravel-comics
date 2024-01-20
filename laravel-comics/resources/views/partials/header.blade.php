<div id="headerFirstRow">
    <div>
        <div>DC POWER VISA
            <i id="R" class="fa-regular fa-registered fonSiz06rem"></i>
        </div>
        <div class="marLef3rem">ADDITIONAL DC SITES
            <i class="fa-solid fa-caret-down"></i>
        </div>
    </div>
</div>
<div id="headerSecondRow">
    <div>
        <div>
            <img id="logo" src="img/dc-logo.png" alt="DC Logo">
        </div>
        <div>
            <nav>
                <ul>
                    @for ($i=0; $i<sizeof($navbar); $i++)
                        @if ($navbar[$i] == "SHOP")
                            <li>
                                <strong>
                                    {{ $navbar[$i] }}
                                    <i class="fa-solid fa-caret-down colBlu"></i>
                                </strong>
                            </li>
                        @else    
                            <li>
                                <strong>{{ $navbar[$i] }}</strong>
                            </li>
                        @endif
                    @endfor
                </ul>
            </nav>
        </div>
        <div>
            <input id="search" type="text" placeholder="Search">
            <button id="searchBtn">
                <i id="searchIcon" class="fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
    </div>
</div>