<x-layout-auth>
    @slot('title', 'Login')

    <main class="authentication-content mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-4 mx-auto">
                    <div class="card shadow rounded-5 overflow-hidden">
                        <div class="card-body p-4 p-sm-5">
                            @if (session()->has('alert'))
                                <x-alert>
                                    @slot('type', session('alert')['type'])
                                    @slot('msg', session('alert')['msg'])
                                </x-alert>
                            @endif
                            <h5 class="card-title text-center">Sign In</h5>
                            <p class="card-text mb-3 text-center">Hi, Welcome to @Naufal.ID</p>
                            <form class="form-body" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="ms-auto position-relative">
                                            <div class="position-absolute top-50 translate-middle-y search-icon px-3">
                                                <i class="bi bi-person-fill"></i>
                                            </div>
                                            <input type="text"
                                                class="form-control radius-30 ps-5 {{ $errors->has('username') ? 'is-invalid' : '' }}"
                                                id="username" name="username" placeholder="Username" required>
                                        </div>
                                        <p class="text-danger">
                                            @error('username')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="col-12">
                                        <div class="ms-auto position-relative">
                                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                                                    class="bi bi-lock-fill"></i></div>
                                            <input type="password" name="password" class="form-control radius-30 ps-5"
                                                id="password" placeholder="Enter Password" required>

                                        </div>

                                    </div>

                                    <div class="col-12 mt-3">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary radius-30">Sign In</button>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <div class="d-grid">
                                            <a href="{{ route('register') }}" style="text-decoration: none;" class="btn btn-primary radius-30">Register</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-layout-auth>
