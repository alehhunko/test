<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>

<body>
    {{-- <img src="{{ asset('/img/header.jpg') }}" class="img-fluid"> --}}
    <div class="bg-image" style="background-image:url('{{ Vite::asset('/resources/img/main.png') }}'); -webkit-background-size: 100% 100%;
        -moz-background-size: 100% 100%; -o-background-size: 100% 100%; background-size: 100% 100%; height: 800px;">
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">
                    <h2>Logo</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse d-flex justify-content-center">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item mx-3"><a class="nav-link" style="color: white" href="#!">Пункт меню 1</a>
                        </li>
                        <li class="nav-item mx-3"><a class="nav-link" style="color: white" href="#!">Пункт меню 2</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" style="color: white" href="#!">Пункт меню 3</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-danger rounded-5" type="submit">Обратный
                    звонок</button>
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-5">
                <div class="row gx-5">
                    <div class="col-lg-6">
                        <div class="my-5">
                            <h1 class="display-4 fw-bolder text-white mb-2">ВСЕ ВИДЫ РАБОТ. </h1>
                            <p class="text-white-50 mb-6" style="font-size: xx-large">ПРЕМИАЛЬНОЕ КАЧЕСТВО ПО
                                </br>ДОСТУПНЫМ ЦЕНАМ.</p>
                            <div style="width: 400px; margin-top: 100px;">
                                <!-- Phone number input-->
                                <div class="mb-3" s>
                                    <input class="form-control rounded-5" id="phone" type="tel"
                                        data-sb-validations="required" placeholder="+7 (___) ___-__-__" />
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                        required.
                                    </div>
                                </div>
                                <!-- Submit Button-->
                                <div class="mb-3">
                                    <button type="button" class="form-control btn btn-danger rounded-5"
                                        type="submit">Обратный
                                        звонок</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- Pricing section-->
    <section class="bg-white pt-5 border-bottom">
        <div class="container px-5 my-5">
            <div class="text-left mb-5">
                <h1 class="fw-bolder">МОДЕЛИ В НАЛИЧИИ</h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <!-- Model car-->
                <div class="card py-4" style="width: 19rem;">
                    <h5 class="card-title "><strong>Model WHT</strong></h5>
                    <div class="d-flex justify-content-between mb-2">
                        <div>
                            <i class="bi bi-truck" style="color:red"></i>
                            <strong style="font-size: x-small">10 А/М В НАЛИЧИИ</strong>
                        </div>
                        <div>
                            <i class="bi bi-stopwatch" style="color:red"></i>
                            <strong style="font-size: x-small">ЛИЗИНГ А/М</strong>
                        </div>
                    </div>
                    <img class="card-img-top" src="{{ Vite::asset('/resources/img/car.png') }}" alt="Card image cap">
                    <p class="card-text mt-2" style="font-size: small">2.7 дизель, Common rail, 150 л.с., МКПП, Задний
                        привод</p>
                    <div class="d-flex flex-column">
                        <button type="button" class="btn btn-danger rounded-5 mb-2" type="submit">Получить спец.
                            цену</button>
                        <button type="button" class="btn btn-outline-dark rounded-5 mb-2" type="submit">Спец.
                            условия по лизингу</button>
                        <button type="button" class="btn btn-outline-dark rounded-5" type="submit">Подобрать
                            автомобиль</button>
                    </div>

                </div>
            </div>
        </div>
        <!-- Contact section-->
        <section class="bg-white pt-5">
            <div class="container pt-5 bg-light" style="width: 1300px; border-radius: 50px 50px 0px 0px;">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Есть вопросы?</h1>
                    <p class="lead mb-0">Мы перезвоним вам и ответим на любой вопрос</p>
                </div>
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <!-- Name input-->
                    <div class="row">
                        <div class="col form-floating mb-3">
                            <input class="form-control rounded-5" id="name" type="text" placeholder="Enter your name..."
                                data-sb-validations="required" />
                            <label for="name" class="ms-3">Ваше имя</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.
                            </div>
                        </div>
                        <!-- Phone number input-->
                        <div class="col form-floating mb-3">
                            <input class="form-control rounded-5" id="phone" type="tel" placeholder="(123) 456-7890"
                                data-sb-validations="required" />
                            <label for="phone" class="ms-3">+7 (___) ___-__-__</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                required.
                            </div>
                        </div>
                        <!-- Submit Button-->
                        <div class="col d-grid mb-3">
                            <button type="button" class="btn btn-danger rounded-5" type="submit">Обратный
                                звонок</button>
                        </div>
                        <div class="row">
                            <p class="text-center my-5 text-secondary">Нажимая кнопку я подтверждаю свое ознакомление с
                                порядком обработки персональных данных со
                                стороны КОМПАНИИ и даю свободное и осознанное согласие на их обработку, на получение
                                информации
                                по каналам связи, в том числе в рекламных целях. <a href="">Подробно тут</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </section>
    <!-- Map section-->
    <section class="bg-image">
        <img style="filter: grayscale(100%); background-size: cover; height: 800px;"
            src="{{ Vite::asset('/resources/img/map.png') }}" class="img-fluid">
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-light">
        <div class="container px-5">
            <p class="m-0 text-center text-black">Политика АО «КОМПАНИЯ» в области обработки и обеспечения безопасности
                персональных <br />данных <br />ИНН: 99999999999 ОГРН: 9999999999999 <br />ООО «КОМПАНИЯ»</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>