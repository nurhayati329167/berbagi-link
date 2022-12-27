@include('layouts.css')
<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Buat Akun</h5>
                                </div>

                                @if($errors->any())
                                @foreach($errors->all() as $err)
                                <p class="alert alert-danger">{{ $err }}</p>
                                @endforeach
                                @endif

                                <form class="row g-3 needs-validation" action="{{ route('register.action') }}"
                                    method="POST">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                    @csrf
                                    <div class="col-12">
                                        <label for="name" class="form-label">Nama Lengkap</label>
                                        <input type="text" class="form-control" placeholder="Nama Anda" id="name"
                                            value="{{ old('name') }}" name="name">
                                        @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="username" required
                                            value="{{ old('username') }}">
                                        @error('username')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control" id="email" required
                                            value="{{ old('email') }}">
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="nomorhp" class="form-label">Nomor HP</label>
                                        <input type="text" name="nomorhp" class="form-control" id="nomorhp" required
                                            value="{{ old('nomorhp') }}">
                                        @error('nomorhp')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="form-label">Kata Sandi</label>
                                        <input type="password" name="password"
                                            class="form-control  @error('password') is-invalid @enderror" id="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Konfirmasi Kata Sandi</label>
                                        <input type="password" name="password-confirmation"
                                            class="@error('password') is-invalid @enderror form-control" id="password"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                        @error('password_confirmation')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Daftar</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Sudah punya akun? <a href="pages-login.html">Log
                                                in</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->