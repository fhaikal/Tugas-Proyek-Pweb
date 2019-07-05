function cari() {
var kata=document.formcari.keyword.value;
var hasil="http://www.google.com/search?q=buku"+kata ;
window.open(hasil, '_blank');
hasil.focus();
}