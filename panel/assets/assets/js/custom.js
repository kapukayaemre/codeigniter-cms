$(document).ready(function () {

    /*? Tablodaki Elemanların Sürükleme İle Sırasının Değiştirilmesi */
    $(".sortable").sortable();

    /*? Sıralama Değiştikten Sonra Veriyi Tabloya Yollamak İçin Yazılan Metot*/
    $(".sortable").on("sortupdate", function (event, ui) {

        let $data = $(this).sortable("serialize");
        let $data_url = $(this).data("url");

        $.post($data_url, {data: $data}, function (response) {
        })

    })

    /*? Silmeden Önce SweetAlert2 Uyarısı */
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

    /*? Statüs Değiştirmek İçin Yazılan Metot */
    $(".content-container, .image_list_container").on('change', '.isActive', function () {
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

    /*? Kapak Fotoğrafı Statüs Değiştirmek İçin Yazılan Metot */
    $(".image_list_container").on('change', '.isCover', function () {
        let $data = $(this).prop("checked");
        var $data_url = $(this).data("url");

        if (typeof $data !== "undefined" && typeof $data_url !== "undefined") {
            $.post($data_url, {data: $data}, function (response) {
                Swal.fire({
                    title: 'İşlem Başarılı!',
                    text: 'Kapak Fotoğrafı Güncellendi',
                    icon: 'success',
                    timer: 5000,
                })

                $(".image_list_container").html(response);

                //? Toggle Button Görüntüsünü Initialize Etmek İçin Gerek Metot
                $('[data-switchery]').each(function () {
                    var $this = $(this),
                        color = $this.attr('data-color') || '#188ae2',
                        jackColor = $this.attr('data-jackColor') || '#ffffff',
                        size = $this.attr('data-size') || 'default'

                    new Switchery(this, {
                        color: color,
                        size: size,
                        jackColor: jackColor
                    });
                });
            })
        }
    });

    /*? Yeni Resim Yüklendiğinde Sayfayı Refresh Etmeden Image Listin Yenilenmesi İçin Gerekli Metot */
    let uploadSection = Dropzone.forElement("#dropzone");
    uploadSection.on("complete", function (file) {

        let $data_url = $("#dropzone").data("url");
        $.post($data_url, {}, function (response) {
            $(".image_list_container").html(response);

            //? Toggle Button Görüntüsünü Initialize Etmek İçin Gerek Metot
            $('[data-switchery]').each(function () {
                var $this = $(this),
                    color = $this.attr('data-color') || '#188ae2',
                    jackColor = $this.attr('data-jackColor') || '#ffffff',
                    size = $this.attr('data-size') || 'default'

                new Switchery(this, {
                    color: color,
                    size: size,
                    jackColor: jackColor
                });
            });
        });
    });


});