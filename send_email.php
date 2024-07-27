<php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "marliansyap@gmail.com";
  $subject = "Pesan dari Formulir Kontak";
  $body = "Nama: $name\nEmail: $email\nPesan:\n$message";

  if(mail($to, $subject, $body)) {
    echo "Pesan berhasil terkirim!";
  } else {
    echo "Terjadi kesalahan, silakan coba lagi.";
  }
}
?>