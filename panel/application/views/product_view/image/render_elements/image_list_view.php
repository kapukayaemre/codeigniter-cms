<?php if (empty($item_images)) { ?>
    <div class="alert alert-info text-center">
        <h4 class="alert-title">Kayıt Bulunamadı</h4>
        <p>Burada herhangi bir resim bulunmamaktadır.</p>
    </div>
<?php } else { ?>

    <table class="table table-bordered table-striped table-hover pictures_list">
        <thead>
        <th class="order"><i class="fa fa-reorder"></i></th>
        <th>#id</th>
        <th>Görsel</th>
        <th>Resim Adı</th>
        <th>Durumu</th>
        <th>Kapak</th>
        <th>İşlem</th>
        </thead>
        <tbody class="sortable" data-url="<?php echo base_url("product/imageRankSetter"); ?>">
        <?php foreach ($item_images as $image)  { ?>
            <tr id="ord-<?php echo $image->id; ?>">
                <td class="order"><i class="fa fa-reorder"></i></td>
                <td class="w100">#<?php echo $image->id; ?></td>
                <td class="w100">
                    <img width="50" src="<?php echo base_url("uploads/{$viewFolder}/$image->img_url"); ?>" alt="<?php echo $image->img_url; ?>" class="img-responsive">
                </td>
                <td><?php echo $image->img_url; ?></td>
                <td class="w100">
                    <input
                        data-url="<?php echo base_url("product/imageIsActiveSetter/$image->id"); ?>"
                        class="isActive"
                        type="checkbox"
                        data-switchery
                        data-color="#10c469"
                        <?php echo ($image->isActive) ? "checked" : ""; ?>
                    />
                </td>
                <td class="w100">
                    <input
                        data-url="<?php echo base_url("product/isCoverSetter/$image->id/$image->product_id"); ?>"
                        class="isCover"
                        type="checkbox"
                        data-switchery
                        data-color="#35b8e0"
                        <?php echo ($image->isCover) ? "checked" : ""; ?>
                    />
                </td>
                <td class="w100">
                    <button
                        data-url="<?php echo base_url("product/imageDelete/$image->id/$image->product_id"); ?>"
                        class="btn btn-danger btn-outline remove-btn btn-block">
                        <i class="fa fa-trash"></i> Sil
                    </button>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>