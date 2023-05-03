$(document).ready(function () {

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

});