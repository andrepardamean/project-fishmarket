$(document).ready(function () {
    $(document).on("click", ".send_form", function () {
        // Inputan Formulir
        var input_nama = $("#nama").val(); // Ubah dari .val() ke .val() untuk elemen <a>
        var input_phone = $("#phone").val(); // Ubah dari .val() ke .val() untuk elemen <a>
        var input_email = $("#email").val(); // Ubah dari .val() ke .val() untuk elemen <a>
        var input_alamat = $("#alamat").val(); // Ubah dari .val() ke .val() untuk elemen <a>
        var input_product = $("#pesanan").val(); // Ubah dari .val() ke .text() untuk elemen <a>
        var input_Jumlahpesanan = $("#Jumlahpesanan").val();
        var input_tanggal_pemesanan = $("#tanggal_pemesanan").val();
        var input_total = $("#totalAmount").text();
        var input_description = $("#description").val();

        // Pengaturan Whatsapp
        var walink = "https://web.whatsapp.com/send";
        var phone = "62895418128121";
        var text =
            "Halo, saya ingin memesan:\n" +
            "*Pesanan:* " +
            input_product +
            "\n*Jumlah Pesanan:* " +
            input_Jumlahpesanan +
            " kg" +
            "\n*Nama:* " +
            input_nama +
            "\n*Nomor HP / WhatsApp:* " +
            input_phone +
            "\n*Email:* " +
            input_email +
            "\n*Alamat:* " +
            input_alamat +
            "\n*Tanggal Pembelian:* " +
            input_tanggal_pemesanan +
            "\n*Total Pembelian:* " +
            input_total +
            "\n*Catatan:* " +
            input_description;

        // Smartphone Support
        if (
            /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
                navigator.userAgent
            )
        ) {
            var walink = "whatsapp://send";
        }

        if (
            !input_product ||
            !input_Jumlahpesanan ||
            !input_nama ||
            !input_phone ||
            !input_email ||
            !input_alamat
        ) {
            // Mengatur ulang nilai-nilai formulir setelah mengirim
            // $("#orderForm")[0].reset(); // Tidak perlu reset formulir karena kita tidak mengambil elemen form

            // Tampilkan pesan kesalahan jika informasi yang dibutuhkan tidak diisi
            $("#text-info").html(
                '<div class="alert alert-danger">' +
                    "Harap lengkapi semua informasi pada formulir." +
                    "</div>"
            );
        } else {
            // Membuat dan membuka URL WhatsApp
            var checkout_whatsapp =
                walink +
                "?phone=" +
                phone +
                "&text=" +
                encodeURIComponent(text);
            window.open(checkout_whatsapp, "_blank");

            // Menampilkan pesan sukses
            $("#text-info").html(
                '<div class="alert alert-success">' +
                    "Pesanan Anda berhasil terkirim." +
                    "</div>"
            );
        }
    });
});
