<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container mr-auto ml-auto">
            <div class="block align-items-center justify-content-center">
                <div class="d-flex align-items-center">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active" id="v-pills-login-tab" data-bs-toggle="pill" data-bs-target="#v-pills-login" type="button" role="tab" aria-controls="v-pills-login" aria-selected="true">Login</button>
                        <button class="nav-link" id="v-pills-signup-tab" data-bs-toggle="pill" data-bs-target="#v-pills-signup" type="button" role="tab" aria-controls="v-pills-signup" aria-selected="false">Signup</button>
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-login" role="tabpanel" aria-labelledby="v-pills-login-tab">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <a href="/dashboard" class="btn btn-primary">Login</a>
                                <!--button type="submit" class="btn btn-primary" href="/dashboard">Submit</button-->
                            </form>
                        </div>
                        <div class="tab-pane fade align-items-center" id="v-pills-signup" role="tabpanel" aria-labelledby="v-pills-signup-tab">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>                                
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <button type="submit" class="btn btn-primary">Request</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
