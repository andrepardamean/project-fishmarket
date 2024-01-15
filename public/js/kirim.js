  $(document).ready(function() {
    $('.send_form').click(function() {
      // Tangkap data formulir
      var formData = $('#contact').serialize();

      // Kirim data formulir ke server menggunakan AJAX
      $.ajax({
        type: 'POST',
        url: '{{ route("simpan-pemesanan") }}',
        data: formData,
        success: function(response) {
          // Handle response dari server
          // Misalnya, Anda dapat menanggapi dengan menampilkan pesan sukses atau melakukan redirect
          alert('Pesanan berhasil dikirim!');
          window.location.href = '{{ route("user.keranjang") }}';
        },
        error: function(error) {
          // Handle error jika terjadi
          alert('Terjadi kesalahan saat mengirim pesanan. Silakan coba lagi.');
        }
      });
    });
  });

