@extends('layout.admin-template')

@section('content')
    <h3>Detail Dokumen Persyaratan</h3>

    <div>
        {{-- Link Download Proposal Kegiatan --}}
        <a target="_blank" href="{{ asset('assets-user/upload/' . $sikDocument['proposalKegiatan']) }}"
            class="d-block btn my-1 text-start">
            <i class="bi bi-arrow-down-circle-fill"></i>
            Download Proposal Kegiatan
        </a>

        {{-- Link Download Izin Tempat --}}
        <a target="_blank" href="{{ asset('assets-user/upload/' . $sikDocument['izinTempat']) }}"
            class="d-block btn my-1 text-start">
            <i class="bi bi-arrow-down-circle-fill"></i>
            Download Izin Tempat
        </a>

        {{-- Link Download Izin Instansi --}}
        <a target="_blank" href="{{ asset('assets-user/upload/' . $sikDocument['izinInstansi']) }}"
            class="d-block btn my-1 text-start">
            <i class="bi bi-arrow-down-circle-fill"></i>
            Download Izin Instansi
        </a>

        {{-- Link Download Fotokopi Paspor --}}
        @if ($sikDocument['fotokopiPaspor'])
            <a target="_blank" href="{{ asset('assets-user/upload/' . $sikDocument['fotokopiPaspor']) }}"
                class="d-block btn my-1 text-start">
                <i class="bi bi-arrow-down-circle-fill"></i>
                Download Fotokopi Paspor
            </a>
        @endif

        {{-- Link Download Rekomendasi Polsek --}}
        <a target="_blank" href="{{ asset('assets-user/upload/' . $sikDocument['rekomendasiPolsek']) }}"
            class="d-block btn my-1 text-start">
            <i class="bi bi-arrow-down-circle-fill"></i>
            Download Rekomendasi Polsek
        </a>

        @if ($sik->status === null)
            <hr>
            {{-- Tombol Setuju --}}
            <a href="/admin/sik/setuju/{{ $sik->id }}" type="button" class="btn btn-success">Setuju</a>

            {{-- Tombol Tolak --}}
            <button type="button" class="btn btn-danger mx-3" data-bs-target="#tolak-modal-{{ $sik->id }}"
                data-bs-toggle="modal" data-bs-dismiss="modal">Tolak</button>

            {{-- Pop up Penolakan --}}
            <div class="modal fade" id="tolak-modal-{{ $sik->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Alasan Penolakan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <form action="/admin/sik/tolak" method="POST">
                            <div class="modal-body" style="height: 250px">
                                @csrf
                                <div class="mb-3">
                                    <input type="hidden" name="id" value="{{ $sik->id }}">
                                    <label for="alasanPenolakan" class="form-label">Masukkan alasan pada kolom
                                        di bawah ini :</label>
                                    <textarea name="alasanPenolakan" class="form-control" id="alasanPenolakan" rows="6"></textarea>
                                </div>
                            </div>

                            <div class="modal-footer">
                                {{-- Tombol Kirim --}}
                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
