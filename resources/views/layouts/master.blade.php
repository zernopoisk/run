<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>@yield('title') · ЗерноПоиск</title>
        
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="{{ asset('assets/css/zernopoisk.css') }}" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <header class="blog-header py-2">
                <div class="row flex-nowrap justify-content-between align-items-center">
                    <div class="col-4 pt-1">
                        <a class="blog-header-logo text-muted" href="/" title="Главная · ЗерноПоиск">
                            ЗерноПоиск
                        </a>
                    </div>
                    <div class="col-8 d-flex justify-content-end align-items-center">
                        <nav class="nav d-flex justify-content-between">
                            <a class="p-2 px-4 text-muted" href="/login">Вход в кабинет</a>
                            <a class="btn btn-sm btn-danger" href="/offer/add">+ Подать объявление</a>
                        </nav>
                    </div>
                </div>
            </header>
            <div class="nav-scroller py-1 mb-2">
                <nav class="nav d-flex justify-content-between">
                    <a class="p-2 text-dark" href="/prodam/yachmen">Ячмень</a>
                    <a class="p-2 text-dark" href="/prodam/pshenitsa">Пшеница</a>
                    <a class="p-2 text-dark" href="/prodam/kukuruza">Кукуруза</a>
                    <a class="p-2 text-dark" href="/prodam/grechikha">Гречиха</a>
                    <a class="p-2 text-dark" href="/prodam/rozh">Рожь</a>
                    <a class="p-2 text-dark" href="/prodam/oves">Овес</a>
                    <a class="p-2 text-dark" href="/prodam/proso">Просо</a>
                    <a class="p-2 text-dark" href="/prodam/podsolnechnik">Подсолнечник</a>
                    <a class="p-2 text-dark" href="/prodam/raps">Рапс</a>
                    <a class="p-2 text-dark" href="/prodam/soya">Соя</a>
                    <a class="p-2 text-dark" href="/prodam/gorok">Горох</a>
                </nav>
            </div>
        </div><!-- /.container-->
        <div class="jumbotron">
            <div class="text-center">
                <h1 class="display-4">ЗерноПоиск</h1>
                <p class="lead my-3">Актуальные объявления о продаже зерна в Украине от производителей и посредников.</p>
                <p class="lead my-3">
                    <a class="btn btn-lg btn-danger" href="/offer/add">+ Подать объявление</a>
                </p>
            </div>
        </div>
        <main role="main" class="container">
            
            <div id="prodam-yachmen" class="my-3">
                <h4 class="mb-3">Продам Ячмень</h4>

                <div class="row offer-item paid shadow-sm p-3 mb-2 rounded">
                    <div class="col-1 text-center">
                        <span class="amount font-weight-bolder">{{ rand(10, 9999) }}</span>т.
                    </div>
                    <div class="col-2">Хмельницкая обл.<br>Волочиский р-н.<br>с.Чухели</div>
                    <div class="col-2 text-center">
                    <span class="price-uah">{{ rand(1236, 5999) }}&#8372</span>
                        <span class="text-muted">|</span>
                        <span class="price-usd">{{ rand(111, 599) }}&#36;</span><br>
                        <span class="badge badge-danger">с НДС</span> нал/безнал.<br>
                        <span>по ф/отгрузки</span>
                    </div>
                    <div class="col-3 text-center">
                        <span>посредник</span><br>
                        <span>ТОВ &laquo;АгроТерра&raquo;</span><br>
                        <span class="font-weight-bold">+380 (97) {{ rand(100, 999) }}-56-06</span>
                    </div>
                    <div class="col-2 text-center">
                        <span class="badge badge-light">EXW</span>
                        <span class="badge badge-light">CPT</span>
                    </div>
                    <div class="col-2 text-center">
                        Cегодня<br>
                        {{ rand(13, 23) }}:{{10, 59}}
                    </div>
                </div>

                <div class="row offer-item paid shadow-sm p-3 mb-2 rounded">
                    <div class="col-1 text-center">
                        <span class="amount font-weight-bolder">{{ rand(10, 9999) }}</span>т.<br>
                        <small class="text-muted">фураж.</small>
                    </div>
                    <div class="col-2">Харьковская обл.<br>Октябрский р-н.<br>с.Гавриши</div>
                    <div class="col-2 text-center">
                        <span class="price-contract font-weight-bolder">договорная</span>
                        наличные (Ф1)<br>
                    </div>
                    <div class="col-3 text-center">
                        <span>производитель</span><br>
                        <span>Кондратенко Александр</span><br>
                        <span class="font-weight-bold">+380 (67) {{ rand(100, 999) }}-01-80</span>
                    </div>
                    <div class="col-2 text-center">
                        &nbsp;
                    </div>
                    <div class="col-2 text-center">
                        Вчера<br>
                        {{ rand(13, 23) }}:{{10, 59}}
                    </div>
                </div>

                <div class="row offer-item shadow-sm p-3 mb-2 rounded">
                    <div class="col-1 text-center">
                        <span class="amount font-weight-bolder">{{ rand(10, 9999) }}</span>т.
                    </div>
                    <div class="col-2">Киевская обл.<br>Бородянський р-н.<br>г.Бородянка</div>
                    <div class="col-2 text-center">
                    <span class="price-uah">{{ rand(1236, 5999) }}&#8372</span>
                        <span class="text-muted">|</span>
                        <span class="price-usd">{{ rand(111, 599) }}&#36;</span><br>
                        безнал. (Ф2)<br>
                    </div>
                    <div class="col-3 text-center">
                        <span>производитель</span><br>
                        <span>Марина</span><br>
                        <span class="font-weight-bold">+380 (97) {{ rand(100, 999) }}-{{ rand(10,99) }}-{{ rand(10,99) }}</span>
                    </div>
                    <div class="col-2 text-center">
                        <span class="badge badge-light">самовывоз</span>
                    </div>
                    <div class="col-2 text-center">
                        Cегодня<br>
                        {{ rand(13, 23) }}:{{10, 59}}
                    </div>
                </div>
                
            </div>
            

        </main><!-- /.container -->
    </body>
</html>