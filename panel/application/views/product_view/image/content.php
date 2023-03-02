<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("product/image_upload/$item->id"); ?>" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?php echo base_url("product/image_upload/$item->id"); ?>'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Yüklemek İstediğiniz Resimleri Buraya Sürükleyiniz...</h3>
                        <p class="m-b-lg text-muted">(Yüklemek İçin Resimlerinizi Sürükleyiniz ya da Tıklayınız)</p>
                    </div>
                </form>
            </div><!-- .widget-body -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <b><?php echo $item->title ?></b> kaydına ait fotoğraflar...
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">

                <?php if(empty($item_images)) { ?>
                    <div class="alert alert-info text-center">
                        <h5 class="alert-title">Kayıt Bulunamadı</h5>
                        <p>Burada herhangi bir resim bulunmamaktadır.</p>
                    </div>
                <?php } else { ?>
                    <table class="table table-bordered table-hover pictures_list" >
                        <thead>
                            <th class="text-center">#id</th>
                            <th class="text-center">Görsel</th>
                            <th class="text-center">Resim Adı</th>
                            <th class="text-center">Durumu</th>
                            <th class="text-center">İşlem</th>
                        </thead>
                        <tbody>
                        <?php foreach ($item_images as $image) { ?>
                            <tr>
                                <td class="w100 text-center"><?php echo $image->id; ?></td>
                                <td class="w100 text-center"><img width="40" src="<?php echo base_url("uploads/{$viewFolder}/$image->img_url"); ?>" alt="<?php echo $image->img_url; ?>"></td>
                                <td><?php echo $image->img_url; ?></td>
                                <td class="w100 text-center">
                                    <input
                                            data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                            class="isActive"
                                            type="checkbox"
                                            data-switchery
                                            data-color="#10c469"
                                        <?php echo ($image->id) ? 'checked' : ''; ?>
                                    /></td>
                                <td class="w100 text-center">
                                    <button
                                            data-url="<?php echo base_url("product/delete/"); ?>"
                                            class="btn btn-sm btn-danger btn-block remove-btn">
                                            <i class="fa fa-trash"></i> <b>Sil</b>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                <?php } ?>
            </div><!-- .widget-body -->
        </div>
    </div>
</div>
