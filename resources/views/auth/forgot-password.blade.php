
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DnvMaster | Восстановление</title>
        <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}">
        <link href="{{ asset('backend/css/app.min.css') }}" rel="stylesheet" id="app-style">
        <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet">
    </head>
    <body class="bg-white">
        <div class="account-page">
            <div class="container-fluid p-0">
                <div class="row align-items-center g-0">
                    <div class="col-xl-5">
                        <div class="row">
                            <div class="col-md-7 mx-auto">
                                <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                                    <div class="mb-4 p-0">
                                        <p>Забыли пароль? Не проблема. Просто сообщите нам свой адрес электронной почты, и мы вышлем вам ссылку для сброса пароля, по которой вы сможете выбрать новый.</p>
                                    </div>
                                    <div class="pt-0">
                                        <form action="{{ route('password.email') }}" method="post" class="my-4">
                                            @csrf
                                            <div class="form-group mb-3">
                                                <label for="emailaddress" class="form-label">Електронная почта</label>
                                                <input class="form-control" type="email" name="email" id="emailaddress" required placeholder="Введите свой Е-мэйл">
                                            </div>
                                            <div class="form-group mb-0 row">
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button class="btn btn-primary" type="submit"> Отправить </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="account-page-bg p-md-5 p-4">
                            <div class="text-center">
                                <div class="auth-image">
                                    <img src="{{ asset('backend/images/authentication.svg') }}" class="mx-auto img-fluid"  alt="images">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('backend/libs/jquery/jquery.min.js') }}"></script>
        <script src="/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('backend/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('backend/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('backend/libs/feather-icons/feather.min.js') }}"></script>
        <script src="{{ asset('backend/js/app.js') }}"></script>
    </body>
</html>