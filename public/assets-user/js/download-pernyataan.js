$(function () {
    // === Download surat pernyataan keaslian SKTLK ===
    assignDefaultValueSKTLK();
    // Assign namaLengkap ke dokumen
    $("input[name=namaLengkap]").on("input", function () {
        namaLengkap = $(this).val();
        $("input[name=pernyataanNamaLengkap]").val(namaLengkap);
    });

    // Assign tempatLahir ke dokumen
    $("input[name=tempatLahir]").on("input", function () {
        tempatLahir = $(this).val();
        $("input[name=pernyataanTempatLahir]").val(tempatLahir);
    });

    // Assign tanggalLahir ke dokumen
    $("input[name=tanggalLahir]").on("input", function () {
        tanggalLahir = $(this).val();
        $("input[name=pernyataanTanggalLahir]").val(tanggalLahir);
    });

    // Assign alamat ke dokumen
    $("textarea[name=alamat]").on("input", function () {
        alamat = $(this).val();
        $("textarea[name=pernyataanAlamat]").val(alamat);
    });

    // Assign telepon ke dokumen
    $("input[name=telepon]").on("input", function () {
        telepon = $(this).val();
        $("input[name=pernyataanTelepon]").val(telepon);
    });

    // Download button
    $("#btnDownloadPernyataan").addClass("disabled");
    $("textarea[name=suratHilang]").on("change", function () {
        $("#btnDownloadPernyataan").removeClass("disabled");
    });

    function assignDefaultValueSKTLK() {
        $("input[name=pernyataanNamaLengkap]").val(
            $("input[name=namaLengkap]").val()
        );
        $("input[name=pernyataanTempatLahir]").val(
            $("input[name=tempatLahir]").val()
        );
        $("input[name=pernyataanTanggalLahir]").val(
            $("input[name=tanggalLahir]").val()
        );
        $("textarea[name=pernyataanAlamat]").val(
            $("input[name=alamat]").val()
        );
        $("input[name=pernyataanTelepon]").val($("input[name=telepon]").val());
    }

    // Download dokumen keaslian SIK
    $("#btnDownloadPernyataanSIK").addClass("disabled");
    $("button[name=kirim]").addClass("disabled");

    if ($("input[name=fotoPelapor]").val() != "") {
        $("#btnDownloadPernyataanSIK").removeClass("disabled");
    }
    $("input[name=fotoPelapor]").on("change", function () {
        $("#btnDownloadPernyataanSIK").removeClass("disabled");
    });
    $("input[name=pernyataanKeaslian]").on("change", function () {
        $("button[name=kirim]").removeClass("disabled");
    });
    $("button[name=simpanSementara]").on("click", function () {
        $("input[name=pernyataanKeaslian]").prop("required", false);
    });

    // Assign namaOrganisasi ke dokumen
    $("input[name=namaOrganisasi]").on("input", function () {
        namaOrganisasi = $(this).val();
        $("input[name=SIKNamaOrganisasi]").val(namaOrganisasi);
    });

    // Assign namaPenanggungJawab ke dokumen
    $("input[name=namaPenanggungJawab]").on("input", function () {
        namaPenanggungJawab = $(this).val();
        $("input[name=SIKNamaPenanggungJawab]").val(namaPenanggungJawab);
    });

    // Assign alamat ke dokumen
    $("textarea[name=alamat]").on("input", function () {
        alamat = $(this).val();
        $("textarea[name=SIKAlamat]").val(alamat);
    });

    // Assign telepon ke dokumen
    $("input[name=telepon]").on("input", function () {
        telepon = $(this).val();
        $("input[name=SIKTelepon]").val(telepon);
    });
});
