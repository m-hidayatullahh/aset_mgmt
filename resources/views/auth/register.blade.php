@extends('layouts.auth', ['title' => 'Register - Asset Management PPL'])

@section('content')

<div class="col-md-8">
    <div class="card border-0 shadow rounded">
        <div class="card-body">
            <h4 class="font-weight-bold text-center">FORM REGISTER</h4>
            <hr>
            <form action="{{ route('register.post') }}" method="POST">
                @csrf

                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="font-weight-bold text-uppercase">Nama Lengkap</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Lengkap">
                            @error('name')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-uppercase">Username</label>
                            <input type="text" name="username" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror" placeholder="Masukkan Username anda">
                            @error('username')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-uppercase">Email address</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Alamat Email">
                            @error('email')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-uppercase">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password">
                            @error('password')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>    
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="font-weight-bold text-uppercase">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Masukkan Konfirmasi Password">
                        </div>
                    </div>

                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">REGISTER</button>
                </div>
            </form>
        </div>
    </div>
    <div class="login mt-3 text-center">
        <p>Sudah punya akun ? Login <a href="/login">Disini</a></p>
    </div>
</div>

@endsection