const empty_validation = (element, field) => {
    if (!element.val().trim()) {
        element.siblings('.invalid-feedback').text(`Harap isi kolom ${field}`);
        return false;
    } else return true;
}

const select_option_validation = (element, field) => {
    if (element.prop('selectedIndex') === 0) {
        element.siblings('.invalid-feedback').text(`Harap pilih ${field}`);
        return false;
    } else return true;
}

const phone_number_validation = (element, field) => {
    if (!element.val().trim()) {
        element.siblings('.invalid-feedback').text(`Harap isi kolom ${field}`);
        return false;
    } else if (!(element.val().trim()).match(/\+[0-9]|[0-9]/i)) {
        element.siblings('.invalid-feedback').text(`Kolom ${field} hanya bisa diisi dengan nomor telepon`);
        return false;
    } else return true;
}

const number_validation = element => {
    if (!element.val().trim()) {
        element.siblings('.invalid-feedback').text('Harap isi kolom NIP Karyawan');
        return false;
    } else if ((element.val().trim()).match(/[a-z]/i)) {
        element.siblings('.invalid-feedback').text('Kolom NIP Karyawan hanya bisa diisi dengan angka');
        return false;
    } else return true;
}