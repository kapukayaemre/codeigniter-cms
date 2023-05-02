<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Ürün Listesi
            <a href="" class="btn btn-outline btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a>
        </h4>
        <div class="widget p-lg">

            <?php if (empty($items)) { ?>
                <div class="alert alert-info text-center">
                    <h4 class="alert-title">Kayıt Bulunamadı</h4>
                    <p>Burada herhangi bir veri bulunmamaktadır. Eklemek için lütfen <a href="#"><strong>tıklayınız.</strong></a></p>
                </div>
            <?php } else { ?>
            <div class="widget-body">
                <div class="table-responsive">
                    <table id="default-datatable" data-plugin="DataTable" class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <th>#id</th>
                            <th>URL</th>
                            <th>Başlık</th>
                            <th>Açıklama</th>
                            <th>Durumu</th>
                            <th>İşlem</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($items as $item) { ?>
                            <tr>
                                <td>#<?php echo $item->id; ?></td>
                                <td><?php echo $item->url; ?></td>
                                <td><?php echo $item->title?></td>
                                <td><?php echo $item->description ?></td>
                                <td>
                                        <input
                                            type="checkbox"
                                            data-switchery
                                            data-color="#10c469"
                                            <?php echo ($item->isActive) ? "checked" : "" ?>
                                        />
                                </td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-outline"><i class="fa fa-trash"></i> Sil</a>
                                    <a href="#" class="btn btn-info btn-outline"><i class="fa fa-pencil-square"></i> Düzenle</a>
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