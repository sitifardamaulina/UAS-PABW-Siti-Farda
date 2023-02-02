<!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header">
                                {{-- <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button> --}}
                            </form>
                            <form action="/logout" method="post">
                                @csrf
                            {{-- <div class="header-button"> --}}
                                {{-- <div class="noti-wrap"> --}}
                                    {{-- <div class="noti__item js-item-menu"> --}}
                                        
                                            <button type="submit" class="noti__item">
                                                <i class="zmdi zmdi-power"></i>
                                            </button>
                                    {{-- </div> --}}
                                {{-- </div> --}}
                            {{-- </div> --}}
                        </form>

                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->