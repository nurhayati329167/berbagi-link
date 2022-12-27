<html>

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.css')
</head>

<body>
    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login</h5>
                                    </div>
                                    @if(session('erro'))
                                    <div class="alert alert-danger">
                                        <b>Opps!</b> {{session('error')}}
                                    </div>
                                    @endif

                                    <form class="row g-3 needs-validation" action="{{ route('login.action') }}"
                                        method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        @csrf
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="text" name="email" class="form-control" id="email" required>

                                        </div>

                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="password" />
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Masuk</button>
                                        </div>
                                        <!-- <div class="col-12">
                                            <p class="small mb-0">Belum punya akun? <a
                                                    href="{{ route('register')}}">Daftar</a></p>
                                        </div> -->
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>
    <!-- End #main -->
    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>
</body>

</html>