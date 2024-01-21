<div id="footerFirstRow">
    <div>
        <div>
            <div>
                <div class="column">
                    <ul class="footerList">
                        @for ($i=0; $i<sizeof($link_footer[0]); $i++)
                            @if ($i == 0)
                                <li>
                                    <strong class="colWhi">{{ $link_footer[0][$i] }}</strong>
                                </li>
                            @else
                                <li class="colGre">{{ $link_footer[0][$i] }}</li>
                            @endif
                        @endfor
                    </ul>
                    <ul class="footerList marTop1rem">
                        @for ($i=0; $i<sizeof($link_footer[1]); $i++)
                            @if ($i == 0)
                                <li>
                                    <strong class="colWhi">{{ $link_footer[1][$i] }}</strong>
                                </li>
                            @else
                                <li class="colGre">{{ $link_footer[1][$i] }}</li>
                            @endif
                        @endfor
                    </ul>
                </div>
                <div class="column">
                    <ul class="footerList">
                        @for ($i=0; $i<sizeof($link_footer[2]); $i++)
                            @if ($i == 0)
                                <li>
                                    <strong class="colWhi">{{ $link_footer[2][$i] }}</strong>
                                </li>
                            @else
                                <li class="colGre">{{ $link_footer[2][$i] }}</li>
                            @endif
                        @endfor
                    </ul>
                </div>
                <div class="column">
                    <ul class="footerList">
                        @for ($i=0; $i<sizeof($link_footer[3]); $i++)
                            @if ($i == 0)
                                <li>
                                    <strong class="colWhi">{{ $link_footer[3][$i] }}</strong>
                                </li>
                            @else
                                <li class="colGre">{{ $link_footer[3][$i] }}</li>
                            @endif
                        @endfor
                    </ul>
                </div>
            </div>
            <div class="marTop1rem colGre">
                All Site Content TM and
                <i class="fa-regular fa-copyright"></i>
                2020 DC Entertainment, unless otherwise <span class="colBlu">noted here</span>. All rights reserved. <span class="colBlu">Cookies Settings</span>
            </div>
        </div>
        <div id="logoContainer"></div>
    </div>
</div>
<div id="footerSecondRow">
    <div>
        <div>
            <div id="signUpBtn">
                <strong class="colWhi">SIGN-UP NOW!</strong>
            </div>
        </div>
        <div id="socialContainer">
            <div>
                <strong class="colBlu">FOLLOW US</strong>
            </div>
            @for ($i=0; $i<sizeof($follow_us); $i++)
                <img class="marLef1rem" src="{{ $follow_us[$i] }}" alt="">
            @endfor
        </div>
    </div>
</div>