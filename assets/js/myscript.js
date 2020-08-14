var flashData = $(".flash-data").data("flashdata");
const tipeData = $(".flash-data").data("tipe");
flashData = flashData.replace(/%20/g, " ");
if (flashData) {
	Swal.fire({
		title: "Data Mahasiswa " + tipeData,
		text: "Data Mahasiswa '" + flashData + "' berhasil " + tipeData,
		icon: "success",
	});
}

//tombol hapus
$(".tombol-hapus").on("click", function (e) {
	e.preventDefault();
	const nama = $(this).data("nama");
	const href = $(this).attr("href");
	Swal.fire({
		title: "Apakah anda yakin?",
		text: "Data Mahasiswa '" + nama + "' akan dihapus!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		confirmButtonText: "Ya, hapus!",
	}).then((result) => {
		if (result.value) {
			document.location.href = href;
		}
	});
});
