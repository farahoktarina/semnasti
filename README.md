# semnasti
# Database ada di file semnasti.sql
## base_url = /semnasti
## Admin register dahulu di base_url/register atau localhost/semnasti/register
# Alur system web semansti :
## peserta registrasi -> masuk ke table pesertas -> admin checklist lunas pada peserta yang sudah melakukan pembayaran -> data peserta masuk ke table lunas -> peserta konfirmasi pembayaran di halaman /confirm -> peserta mendapatkan qrcode -> data peserta yang melakukan konfirmasi tersebut masuk ke table konfirmasis -> saat di hari H acara admin melakukan scanning qrcode -> data peserta yang berada di qrcode akan ke scan dan masuk ke table hadirs
