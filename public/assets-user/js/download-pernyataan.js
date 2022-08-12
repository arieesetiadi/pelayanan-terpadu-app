// === Download surat pernyataan keaslian ===
$(function () {
    assignDefaultValue();

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
    $('#btnDownloadPernyataan').addClass('disabled');
    $('textarea[name=suratHilang]').on('change', function () {
        $('#btnDownloadPernyataan').removeClass('disabled');
    })

    function assignDefaultValue() {
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
            $("textarea[name=alamat]").val()
        );
        $("input[name=pernyataanTelepon]").val($("input[name=telepon]").val());
    }
});
