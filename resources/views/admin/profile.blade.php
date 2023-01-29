@extends('layout.admin-template')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mt-2">Profile</h5>
                    </div>
                    <div class="card-body"
                         style="min-height: 400px">
                        <center>
                            {{-- Foto Profile --}}
                            <img src="{{ asset('assets-admin/img/avatars/man.png') }}"
                                 width="40%"
                                 alt="Profile Man"
                                 class="my-3">

                            <h6>{{ session('pegawai')->NAMA_PEGAWAI }}</h6>
                            <span class="d-block">{{ session('pegawai')->EMAIL_PEGAWAI }}</span>
                            <span class="d-block">{{ session('pegawai')->TELEPON_PEGAWAI }}</span>

                            <hr>

                            <span>{{ session('pegawai')->ALAMAT_PEGAWAI }}</span>
                        </center>
                    </div>
                </div>
            </div>

            {{-- Update Profile Pegawai --}}
            {{-- <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mt-2">Ubah</h5>
                    </div>
                    <div class="card-body"
                         style="height: 400px">
                        <form action="/profile/update"
                              method="POST">
                            @csrf
                            <input type="hidden"
                                   name="id"
                                   value="{{ session('pegawai')->id }}">
                            <div class="mb-2">
                                <label for="nama"
                                       class="form-label">Nama :</label>
                                <input name="nama"
                                       type="text"
                                       class="form-control"
                                       id="nama"
                                       value="{{ session('pegawai')->nama }}">
                            </div>
                            <div class="mb-2">
                                <label for="email"
                                       class="form-label">Email :</label>
                                <input name="email"
                                       type="email"
                                       class="form-control"
                                       id="email"
                                       value="{{ session('pegawai')->email }}">
                            </div>
                            <div class="mb-2">
                                <label for="telepon"
                                       class="form-label">Nomor Telepon :</label>
                                <input name="telepon"
                                       type="text"
                                       class="form-control"
                                       id="telepon"
                                       value="{{ session('pegawai')->telepon }}">
                            </div>
                            <div class="mb-2">
                                <label for="alamat"
                                       class="form-label">Alamat :</label>
                                <input name="alamat"
                                       type="text"
                                       class="form-control"
                                       id="alamat"
                                       value="{{ session('pegawai')->alamat }}">
                            </div>
                            <div class="my-3">
                                <button type="submit"
                                        class="btn btn-block btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection
