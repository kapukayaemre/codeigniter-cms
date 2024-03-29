<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Marka Listesi
            <a href="<?php echo base_url("brands/new_form"); ?>" class="btn btn-outline btn-primary btn-sm pull-right"><i
                    class="fa fa-plus"></i> Yeni Ekle</a>
        </h4>
        <div class="widget p-lg">

            <?php if (empty($items)) { ?>
                <div class="alert alert-info text-center">
                    <h4 class="alert-title">Kayıt Bulunamadı</h4>
                    <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a
                            href="<?php echo base_url("brands/new_form"); ?>"><strong>tıklayınız.</strong></a></p>
                </div>
            <?php } else { ?>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="default-datatable" data-plugin="DataTable"
                               class="table table-hover table-bordered table-striped content-container">
                            <thead>
                            <tr>
                                <th></th>
                                <th class="w50">#id</th>
                                <th>Başlık</th>
                                <th>Görsel</th>
                                <th>Durumu</th>
                                <th style="width: 100px">İşlem</th>
                            </tr>
                            </thead>
                            <tbody class="sortable" data-url="<?php echo base_url("brands/rankSetter"); ?>">
                            <?php foreach ($items as $item) { ?>
                                <tr id="ord-<?php echo $item->id; ?>">
                                    <td class="order"><i class="fa fa-reorder"></i></td>
                                    <td class="w50">#<?php echo $item->id; ?></td>
                                    <td><?php echo $item->title; ?></td>
                                    <td class="text-center" style="width: 75px">
                                        <img width="100" src="<?php echo base_url("uploads/$viewFolder/$item->img_url"); ?>" alt="" class="img-rounded">
                                    </td>
                                    <td class="w50">
                                        <input
                                            data-url="<?php echo base_url("brands/isActiveSetter/$item->id"); ?>"
                                            class="isActive"
                                            type="checkbox"
                                            data-switchery
                                            data-color="#10c469"
                                            <?php echo ($item->isActive) ? "checked" : "" ?>
                                        />
                                    </td>
                                    <td style="width: 200px" class="text-center">
                                        <button
                                            data-url="<?php echo base_url("brands/delete/$item->id"); ?>"
                                            class="btn btn-danger btn-outline remove-btn">
                                            <i class="fa fa-trash"></i> Sil
                                        </button>
                                        <a href="<?php echo base_url("brands/update_form/$item->id"); ?>"
                                           class="btn btn-info btn-outline"><i class="fa fa-pencil-square"></i> Düzenle</a>
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