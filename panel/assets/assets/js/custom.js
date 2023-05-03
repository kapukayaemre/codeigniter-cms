$(document).ready(function () {

    /* Tablodaki Elemanların Sürükleme İle Sırasının Değiştirilmesi */
    $(".sortable").sortable();

    /* Sıralama Değiştikten Sonra Veriyi Tabloya Yollamak İçin Yazılan Metot*/
    $(".sortable").on("sortupdate", function(event, ui){

        let $data = $(this).sortable("serialize");
        let $data_url = $(this).data("url");

        $.post($data_url, {data : $data}, function(response){})

    })

    /* Silmeden Önce SweetAlert2 Uyarısı */
    $(".remove-btn").click(function () {

        let $data_url = $(this).data("url");

        Swal.fire({
            title: 'Emin misiniz?',
            text: "Bu İşlemi Geri Alamayacaksınız!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet, Sil',
            cancelButtonText: 'Hayır'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = $data_url;
                Swal.fire({
                    title: 'İşlem Başarılı!',
                    text: 'Silmek İstediğiniz Seçenek Silindi',
                    icon: 'success',
                    timer: 5000,
                })
            }
        })
    });

    /* Statüs Değiştirmek İçin Yazılan Metot */
    $(".isActive").change(function () {
        let $data = $(this).prop("checked");
        var $data_url = $(this).data("url");

        if (typeof $data !== "undefined" && typeof $data_url !== "undefined") {
            $.post($data_url, {data: $data}, function (response) {
                Swal.fire({
                    title: 'İşlem Başarılı!',
                    text: 'Statü Durumu Güncellendi',
                    icon: 'success',
                    timer: 5000,
                })
            })
        }
    });

    let uploadSection = Dropzone.forElement("#dropzone");
    uploadSection.on("complete", function (){
        alert();
    });


});