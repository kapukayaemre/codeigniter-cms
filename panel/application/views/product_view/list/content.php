<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Ürün Listesi
            <a href="<?php echo base_url('product/new_form'); ?>" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> <b>Yeni Ekle</b></a>
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget p-lg">

            <?php if(empty($items)) { ?>
            <div class="alert alert-info text-center">
                <h5 class="alert-title">Kayıt Bulunamadı</h5>
                <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url('product/new_form'); ?>"><strong>tıklayınız.</strong></a></p>
            </div>
            <?php } else { ?>

                <table class="table table-hover table-striped">
                    <thead>
                        <th>#id</th>
                        <th>Başlık</th>
                        <th>url</th>
                        <th>Açıklama</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody class="sortable" data-url="<?php echo base_url("product/rankSetter"); ?>">
                <!-- Veritabanındaki Her Biri Veri Çekildi -->
                    <?php foreach ($items as $item)  {  ?>
                        <tr id="ord-<?php echo $item->id; ?>">
                            <td><?php echo $item->id; ?></td>
                            <td><?php echo $item->title; ?></td>
                            <td><?php echo $item->url; ?></td>
                            <td><?php echo $item->description; ?></td>
                            <td>
                                <input
                                        data-url="<?php echo base_url("product/isActiveSetter/$item->id"); ?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                        <?php echo ($item->isActive) ? 'checked' : ''; ?>
                                />
                            </td>
                            <td>
                                <button
                                data-url="<?php echo base_url("product/delete/$item->id"); ?>"
                                class="btn btn-sm btn-danger remove-btn">
                                <i class="fa fa-trash"></i> <b>Sil</b>
                                </button>
                                <a href="<?php echo base_url("product/update_form/$item->id"); ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil-square-o"></i> <b>Düzenle</b> </a>
                                <a href="<?php echo base_url("product/image_form/$item->id"); ?>" class="btn btn-sm btn-success"><i class="fa fa-image"></i> <b>Resimler</b> </a>
                            </td>
                        </tr>
                    <?php } ?>

                    </tbody>
                <?php  }  ?>
            </table>
        </div><!-- .widget -->
    </div>
</div>