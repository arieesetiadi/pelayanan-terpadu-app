// Mekanisme form saksi
const tambahSaksi = document.getElementById("tambahSaksi");
const saksiContainer = document.getElementById("saksiContainer");

localStorage.setItem("countSaksi", 1);

tambahSaksi.addEventListener("click", function () {
    addSaksiForm();
});

function addSaksiForm() {
    addCountSaksi();

    const count = localStorage.countSaksi;

    const element = `
    <div id="saksi-${count}">
        <div>
            <span style="font-weight: bolder" class="my-1 mr-2 d-inline-block">Saksi - ${count}</span>
            <a id="hapusSaksi-${count}" href="#hapus"
                class="text-danger hapusSaksi mb-1 d-inline-block"
                onClick="deleteSaksiForm(${count})" title="Hapus Saksi ${count}">
                <i class="fa-solid fa-circle-minus"></i>
            </a>
        </div>
        <input name="namaSaksi-${count}" type="text" class="form-control"
            style="height: 40px" placeholder="Nama saksi">
        <div class="row">
            <div class="col-6">
                <input name="umurSaksi-${count}" type="number" class="form-control"
                    style="height: 40px" placeholder="Umur saksi">
            </div>
            <div class="col-6">
                <input name="pekerjaanSaksi-${count}" type="text" class="form-control"
                    style="height: 40px" placeholder="Pekerjaan saksi">
            </div>
        </div>
        <input name="alamatSaksi-${count}" type="text" class="form-control mb-2"
            style="height: 40px" placeholder="Alamat saksi">
    </div>`;

    saksiContainer.insertAdjacentHTML("beforeend", element);
}

function deleteSaksiForm(count) {
    const saksi = document.getElementById("saksi-" + count);
    saksi.remove();
    deleteCountSaksi();
}

function addCountSaksi() {
    const count = parseInt(localStorage.countSaksi) + 1;
    localStorage.countSaksi = count;
    console.log(localStorage.countSaksi);
}

function deleteCountSaksi() {
    let count = parseInt(localStorage.countSaksi);

    if (count > 1) {
        count -= 1;
        localStorage.countSaksi = count;
    }

    console.log(localStorage.countSaksi);
}

// Mekanisme form barang bukti
const tambahBukti = document.getElementById("tambahBukti");
const buktiContainer = document.getElementById("buktiContainer");

localStorage.setItem("countBukti", 1);

tambahBukti.addEventListener("click", function () {
    addBuktiForm();
});

function addBuktiForm() {
    addCountBukti();

    const count = localStorage.countBukti;

    const element = `
    <div id="bukti-${count}" class="row">
        <div class="col-12">
            <span style="font-weight: bolder"
                class="mb-1 mr-2 d-inline-block">Barang
                Bukti - ${count}</span>
            <a id="hapusBukti-${count}" href="#hapus" class="text-danger mb-2"
                title="Hapus barang bukti ${count}" onClick="deleteBuktiForm(${count})">
                <i class="fa-solid fa-circle-minus"></i>
            </a>
        </div>
        <div class="col-6">
            <input name="namaBukti-${count}" type="text" class="form-control"
                style="height: 40px" placeholder="Nama barang bukti">
        </div>
        <div class="col-6">
            <input name="gambarBukti-${count}" type="file" class="form-control-file"
                accept=".jpg,.jpeg,.png">
            <small style="font-size: 80%">Upload foto bukti - .jpg,
                .jpeg, .png</small>
        </div>
    </div>`;

    buktiContainer.insertAdjacentHTML("beforeend", element);
}

function deleteBuktiForm(count) {
    const bukti = document.getElementById("bukti-" + count);
    bukti.remove();
    deleteCountBukti();
}

function addCountBukti() {
    const count = parseInt(localStorage.countBukti) + 1;
    localStorage.countBukti = count;
    console.log(localStorage.countBukti);
}

function deleteCountBukti() {
    let count = parseInt(localStorage.countBukti);

    if (count > 1) {
        count -= 1;
        localStorage.countBukti = count;
    }
    console.log(localStorage.countBukti);
}
