<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="<?php echo base_url("product/image_upload/$item->id"); ?>" class="dropzone" data-plugin="dropzone" data-options="{ url: '<?php echo base_url("product/image_upload/$item->id"); ?>'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Yüklemek istediğiniz resimleri buyara sürükleyiniz</h3>
                        <p class="m-b-lg text-muted">(Yüklemek için dosyalarınızı sürükleyiniz yada buraya tıklayınız)</p>
                    </div>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>

<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            <b><?php echo $item->title; ?></b> kaydına ait Resimler
        </h4>
    </div><!-- END column -->
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">

                <?php if (empty($item_images)) { ?>
                    <div class="alert alert-info text-center">
                        <h4 class="alert-title">Kayıt Bulunamadı</h4>
                        <p>Burada herhangi bir resim bulunmamaktadır.</p>
                    </div>
                <?php } else { ?>

                    <table class="table table-bordered table-striped table-hover pictures_list">
                        <thead>
                        <th>#id</th>
                        <th>Görsel</th>
                        <th>Resim Adı</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                        </thead>
                        <tbody>
                        <?php foreach ($item_images as $image)  { ?>
                        <tr>
                            <td class="w100 text-center">#<?php echo $image->id; ?></td>
                            <td class="w100 text-center">
                                <img width="50" src="<?php echo base_url("uploads/{$viewFolder}/$image->img_url"); ?>" alt="<?php echo $image->img_url; ?>" class="img-responsive">
                            </td>
                            <td><?php echo $image->img_url; ?></td>
                            <td class="w100 text-center">
                                <input
                                    data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                    class="isActive"
                                    type="checkbox"
                                    data-switchery
                                    data-color="#10c469"
                                    <?php echo ($image->id) ? "checked" : ""; ?>
                                />
                            </td>
                            <td class="w100 text-center">
                                <button
                                    data-url="<?php echo base_url("product/delete/"); ?>"
                                    class="btn btn-danger btn-outline remove-btn btn-block">
                                    <i class="fa fa-trash"></i> Sil
                                </button>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                <?php } ?>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>

