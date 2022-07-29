<div class="totopshow">
    <a href="#" class="back-to-top"><img alt="Back to Top" src="{{ asset('home/assets/images/gototop0.png') }}" /></a>
</div>
<header id="ttr_header">
    <div id="ttr_header_inner">
        <div class="headerforeground01">
        </div>
        <div class="ttr_headershape01">
            <div class="html_content">
                <p><span style="font-size:0.857em;color:rgba(243,243,243,1);">(99) 99230-9702</span></p>
            </div>
        </div>
        <div class="ttr_headershape02">
            <div class="html_content">
                <p><span style="font-size:0.857em;color:rgba(243,243,243,1);">
                        @foreach ($endereco as $item)
                            {{ $item->text }}
                        @endforeach
                    </span></p>
            </div>
        </div>
    </div>
</header>
