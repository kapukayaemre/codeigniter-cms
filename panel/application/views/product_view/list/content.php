<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Ürün Listesi
            <a href="<?php echo base_url("product/new_form"); ?>" class="btn btn-outline btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a>
        </h4>
        <div class="widget p-lg">

            <?php if (empty($items)) { ?>
                <div class="alert alert-info text-center">
                    <h4 class="alert-title">Kayıt Bulunamadı</h4>
                    <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a href="<?php echo base_url("product/new_form"); ?>"><strong>tıklayınız.</strong></a></p>
                </div>
            <?php } else { ?>
            <div class="widget-body">
                <div class="table-responsive">
                    <table id="default-datatable" data-plugin="DataTable" class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th><i class="fa fa-reorder"></i></th>
                            <th>#id</th>
                            <th>Başlık</th>
                            <th>URL</th>
                            <th>Açıklama</th>
                            <th>Durumu</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody class="sortable" data-url="<?php echo base_url("product/rankSetter"); ?>">
                        <?php foreach ($items as $item) { ?>
                            <tr id="ord-<?php echo $item->id; ?>">
                                <td><i class="fa fa-reorder"></i></td>
                                <td>#<?php echo $item->id; ?></td>
                                <td><?php echo $item->title?></td>
                                <td><?php echo $item->url; ?></td>
                                <td><?php echo $item->description ?></td>
                                <td>
                                        <input
                                            data-url="<?php echo base_url("product/isActiveSetter/$item->id"); ?>"
                                            class="isActive"
                                            type="checkbox"
                                            data-switchery
                                            data-color="#10c469"
                                            <?php echo ($item->isActive) ? "checked" : "" ?>
                                        />
                                </td>
                                <td>
                                    <button
                                        data-url="<?php echo base_url("product/delete/$item->id"); ?>"
                                        class="btn btn-danger btn-outline remove-btn">
                                        <i class="fa fa-trash"></i> Sil
                                    </button>
                                    <a href="<?php echo base_url("product/update_form/$item->id"); ?>" class="btn btn-info btn-outline"><i class="fa fa-pencil-square"></i> Düzenle</a>
                                    <a href="<?php echo base_url("product/image_form/$item->id"); ?>" class="btn btn-dark btn-outline"><i class="fa fa-image"></i> Resimler</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php } ?>
        </div><!-- .widget -->
    </div>
</div>