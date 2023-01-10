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
                         style="height: 400px">
                        <center>
                            {{-- Foto Profile --}}
                            @if (auth()->user()->jenis_kelamin == 'Laki-laki')
                                <img src="{{ asset('assets-admin/img/avatars/man.png') }}"
                                     width="40%"
                                     alt="Profile Man"
                                     class="my-3">
                            @else
                                <img src="{{ asset('assets-admin/img/avatars/woman.png') }}"
                                     width="40%"
                                     alt="Profile Woman"
                                     class="my-3">
                            @endif

                            <h6>{{ auth()->user()->nama }}</h6>
                            <span class="d-block">{{ auth()->user()->email }}</span>
                            <span class="d-block">{{ auth()->user()->telepon }}</span>

                            <hr>

                            <span>{{ auth()->user()->alamat }}</span>
                        </center>
                    </div>
                </div>
            </div>

            <div class="col-6">
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
                                   value="{{ auth()->user()->id }}">
                            <div class="mb-2">
                                <label for="nama"
                                       class="form-label">Nama :</label>
                                <input name="nama"
                                       type="text"
                                       class="form-control"
                                       id="nama"
                                       value="{{ auth()->user()->nama }}">
                            </div>
                            <div class="mb-2">
                                <label for="email"
                                       class="form-label">Email :</label>
                                <input name="email"
                                       type="email"
                                       class="form-control"
                                       id="email"
                                       value="{{ auth()->user()->email }}">
                            </div>
                            <div class="mb-2">
                                <label for="telepon"
                                       class="form-label">Nomor Telepon :</label>
                                <input name="telepon"
                                       type="text"
                                       class="form-control"
                                       id="telepon"
                                       value="{{ auth()->user()->telepon }}">
                            </div>
                            <div class="mb-2">
                                <label for="alamat"
                                       class="form-label">Alamat :</label>
                                <input name="alamat"
                                       type="text"
                                       class="form-control"
                                       id="alamat"
                                       value="{{ auth()->user()->alamat }}">
                            </div>
                            <div class="my-3">
                                <button type="submit"
                                        class="btn btn-block btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
