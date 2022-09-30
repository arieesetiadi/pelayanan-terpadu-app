// Mekanisme form saksi
const tambahSaksi = document.getElementById('tambahSaksi');
const saksiContainer = document.getElementById('saksiContainer');

localStorage.setItem('countSaksi', 1);

tambahSaksi.addEventListener('click', function () {
    addSaksiForm();
})
hapusSaksi.addEventListener('click', function () {
    deleteSaksiForm();
})

function addSaksiForm() {
    addCountSaksi();

    const count = localStorage.countSaksi;

    const element = `
    <div id="saksi-${count}">
        <input name="namaSaksi-${count}" type="text" class="form-control"
            style="height: 40px" placeholder="Nama saksi">
        <div class="row">
            <div class="col-6">
                <input name="umurSaksi-${count}" type="number" class="form-control"
                    style="height: 40px" placeholder="Umur saksi">
            </div>
            <div class="col-6">
                <input name="pekerjaanSaksi-${count}" type="number" class="form-control"
                    style="height: 40px" placeholder="Pekerjaan saksi">
            </div>
        </div>
        <input name="alamatSaksi-${count}" type="number" class="form-control mb-2"
            style="height: 40px" placeholder="Alamat saksi">
        <a id="hapusSaksi-${count}" href="#hapus" style="font-size: 80%"
            class="text-danger mb-2 d-block hapusSaksi" onClick="deleteSaksiForm(${count})">
            <i class="fa-solid fa-circle-xmark"></i> Hapus Saksi
        </a>
    </div>`;

    saksiContainer.insertAdjacentHTML('beforeend', element);
}

function deleteSaksiForm(count) {
    const saksi = document.getElementById("saksi-" + count);
    saksi.remove();
}

function addCountSaksi() {
    const count = parseInt(localStorage.countSaksi) + 1;
    localStorage.countSaksi = count;
}

function deleteCountSaksi() {
    let count = parseInt(localStorage.countSaksi);

    if (count > 1) {
        count -= 1;
        localStorage.countSaksi = count;
    }
}

// Mekanisme form barang bukti
//  ....