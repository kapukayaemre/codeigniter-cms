<div class="row">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <form action="../api/dropzone" class="dropzone" data-plugin="dropzone" data-options="{ url: '../api/dropzone'}">
                    <div class="dz-message">
                        <h3 class="m-h-lg">Drop files here or click to upload.</h3>
                        <p class="m-b-lg text-muted">(This is just a demo dropzone. Selected files are not actually uploaded.)</p>
                    </div>
                </form>
            </div><!-- .widget-body -->
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Ürün Fotoğrafları
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <table class="table table-bordered table-striped table-hover pictures_list">
                    <thead>
                        <th>#id</th>
                        <th>Görsel</th>
                        <th>Resim Adı</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w100 text-center">#1</td>
                            <td class="w100 text-center">
                                <img width="50" src="https://i.pinimg.com/736x/34/bb/71/34bb718d4b1a9420d571aa3f1a8de9ad.jpg" alt="" class="img-responsive">
                            </td>
                            <td>deneme-urunu.jpg</td>
                            <td class="w100 text-center">
                                <input
                                    data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                    class="isActive"
                                    type="checkbox"
                                    data-switchery
                                    data-color="#10c469"
                                    <?php echo (true) ? "checked" : "" ?>
                                />
                            </td>
                            <td class="w100 text-center">
                                <button
                                    data-url="<?php echo base_url("product/delete"); ?>"
                                    class="btn btn-danger btn-outline remove-btn btn-block">
                                    <i class="fa fa-trash"></i> Sil
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td class="w100 text-center">#1</td>
                            <td class="w100 text-center">
                                <img width="50" src="https://i.pinimg.com/736x/34/bb/71/34bb718d4b1a9420d571aa3f1a8de9ad.jpg" alt="" class="img-responsive">
                            </td>
                            <td>deneme-urunu.jpg</td>
                            <td class="w100 text-center">
                                <input
                                    data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                    class="isActive"
                                    type="checkbox"
                                    data-switchery
                                    data-color="#10c469"
                                    <?php echo (true) ? "checked" : "" ?>
                                />
                            </td>
                            <td class="w100 text-center">
                                <button
                                    data-url="<?php echo base_url("product/delete"); ?>"
                                    class="btn btn-danger btn-outline remove-btn btn-block">
                                    <i class="fa fa-trash"></i> Sil
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td class="w100 text-center">#1</td>
                            <td class="w100 text-center">
                                <img width="50" src="https://i.pinimg.com/736x/34/bb/71/34bb718d4b1a9420d571aa3f1a8de9ad.jpg" alt="" class="img-responsive">
                            </td>
                            <td>deneme-urunu.jpg</td>
                            <td class="w100 text-center">
                                <input
                                    data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                    class="isActive"
                                    type="checkbox"
                                    data-switchery
                                    data-color="#10c469"
                                    <?php echo (true) ? "checked" : "" ?>
                                />
                            </td>
                            <td class="w100 text-center">
                                <button
                                    data-url="<?php echo base_url("product/delete"); ?>"
                                    class="btn btn-danger btn-outline remove-btn btn-block">
                                    <i class="fa fa-trash"></i> Sil
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td class="w100 text-center">#1</td>
                            <td class="w100 text-center">
                                <img width="50" src="https://i.pinimg.com/736x/34/bb/71/34bb718d4b1a9420d571aa3f1a8de9ad.jpg" alt="" class="img-responsive">
                            </td>
                            <td>deneme-urunu.jpg</td>
                            <td class="w100 text-center">
                                <input
                                    data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                    class="isActive"
                                    type="checkbox"
                                    data-switchery
                                    data-color="#10c469"
                                    <?php echo (true) ? "checked" : "" ?>
                                />
                            </td>
                            <td class="w100 text-center">
                                <button
                                    data-url="<?php echo base_url("product/delete"); ?>"
                                    class="btn btn-danger btn-outline remove-btn btn-block">
                                    <i class="fa fa-trash"></i> Sil
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td class="w100 text-center">#1</td>
                            <td class="w100 text-center">
                                <img width="50" src="https://i.pinimg.com/736x/34/bb/71/34bb718d4b1a9420d571aa3f1a8de9ad.jpg" alt="" class="img-responsive">
                            </td>
                            <td>deneme-urunu.jpg</td>
                            <td class="w100 text-center">
                                <input
                                    data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                    class="isActive"
                                    type="checkbox"
                                    data-switchery
                                    data-color="#10c469"
                                    <?php echo (true) ? "checked" : "" ?>
                                />
                            </td>
                            <td class="w100 text-center">
                                <button
                                    data-url="<?php echo base_url("product/delete"); ?>"
                                    class="btn btn-danger btn-outline remove-btn btn-block">
                                    <i class="fa fa-trash"></i> Sil
                                </button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div><!-- .widget-body -->
        </div>
    </div>
</div>