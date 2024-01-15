$(document).ready(function () {
  $(document).on("click", ".send", function () {
    /* Inputan Formulir */
    var input_nama = $("#nama").val(),
      input_phone = $("#phone").val(),
      input_email = $("#email").val(),
      input_alamat = $("#alamat").val(),
      input_product = $("#product").val(),
      input_Jumlahpesanan = $("#Jumlahpesanan").val(),
      input_description = $("#description").val();

    /* Pengaturan Whatsapp */
    var walink = "https://web.whatsapp.com/send",
      phone = "082288957205",
      text =
        "Halo saya ingin memesan " +
        input_product +
        " sebanyak " +
        input_Jumlahpesanan +
        " kg.%0A%0A" +
        "*Nama* : " +
        input_nama +
        "%0A" +
        "*Nomor Hp / Whatsapp* : " +
        input_phone +
        "%0A" +
        "*Email* : " +
        input_email +
        "%0A" +
        "*Alamat* : " +
        input_alamat +
        "%0A" +
        "*Catatan* : " +
        input_description +
        "%0A";

    /* Smartphone Support */
    if (
      /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
      )
    ) {
      var walink = "whatsapp://send";
    }

    if (input_nama != "" && input_phone != "" && input_product != "") {
      /* Whatsapp URL */
      var checkout_whatsapp = walink + "?phone=" + phone + "&text=" + text;

      /* Whatsapp Window Open */
      window.open(checkout_whatsapp, "_blank");
      $("#text-info").html(
        '<div class="alert alert-success">' +
          "Pesanan Anda berhasil terkirim." +
          "</div>"
      );
    } else {
      $("#text-info").html(
        '<div class="alert alert-danger">' +
          "Isilah formulir terlebih dahulu." +
          "</div>"
      );
    }
  });
});
