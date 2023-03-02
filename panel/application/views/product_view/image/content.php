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
            Ürünün Fotoğrafları
        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-body">
                <table class="table table-bordered table-hover pictures_list" >
                    <thead>
                        <th class="text-center">#id</th>
                        <th class="text-center">Görsel</th>
                        <th class="text-center">Resim Adı</th>
                        <th class="text-center">Durumu</th>
                        <th class="text-center">İşlem</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="w100 text-center">#1</td>
                            <td class="w100 text-center"><img width="40" src="https://img.freepik.com/premium-vector/elegant-furniture-logo-with-lamp_23-2148477392.jpg?w=2000" alt=""></td>
                            <td>deneme-urun.jpg</td>
                            <td class="w100 text-center">
                                <input
                                        data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                    <?php echo (true) ? 'checked' : ''; ?>
                                /></td>
                            <td class="w100 text-center">
                                <button
                                        data-url="<?php echo base_url("product/delete/"); ?>"
                                        class="btn btn-sm btn-danger btn-block remove-btn">
                                        <i class="fa fa-trash"></i> <b>Sil</b>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="w100 text-center">#1</td>
                            <td class="w100 text-center"><img width="40" src="https://img.freepik.com/premium-vector/elegant-furniture-logo-with-lamp_23-2148477392.jpg?w=2000" alt=""></td>
                            <td>deneme-urun.jpg</td>
                            <td class="w100 text-center">
                                <input
                                        data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                    <?php echo (true) ? 'checked' : ''; ?>
                                /></td>
                            <td class="w100 text-center">
                                <button
                                        data-url="<?php echo base_url("product/delete/"); ?>"
                                        class="btn btn-sm btn-danger btn-block remove-btn">
                                        <i class="fa fa-trash"></i> <b>Sil</b>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="w100 text-center">#1</td>
                            <td class="w100 text-center"><img width="40" src="https://img.freepik.com/premium-vector/elegant-furniture-logo-with-lamp_23-2148477392.jpg?w=2000" alt=""></td>
                            <td>deneme-urun.jpg</td>
                            <td class="w100 text-center">
                                <input
                                        data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                    <?php echo (true) ? 'checked' : ''; ?>
                                /></td>
                            <td class="w100 text-center">
                                <button
                                        data-url="<?php echo base_url("product/delete/"); ?>"
                                        class="btn btn-sm btn-danger btn-block remove-btn">
                                        <i class="fa fa-trash"></i> <b>Sil</b>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="w100 text-center">#1</td>
                            <td class="w100 text-center"><img width="40" src="https://img.freepik.com/premium-vector/elegant-furniture-logo-with-lamp_23-2148477392.jpg?w=2000" alt=""></td>
                            <td>deneme-urun.jpg</td>
                            <td class="w100 text-center">
                                <input
                                        data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                    <?php echo (true) ? 'checked' : ''; ?>
                                /></td>
                            <td class="w100 text-center">
                                <button
                                        data-url="<?php echo base_url("product/delete/"); ?>"
                                        class="btn btn-sm btn-danger btn-block remove-btn">
                                        <i class="fa fa-trash"></i> <b>Sil</b>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="w100 text-center">#1</td>
                            <td class="w100 text-center"><img width="40" src="https://img.freepik.com/premium-vector/elegant-furniture-logo-with-lamp_23-2148477392.jpg?w=2000" alt=""></td>
                            <td>deneme-urun.jpg</td>
                            <td class="w100 text-center">
                                <input
                                        data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                    <?php echo (true) ? 'checked' : ''; ?>
                                /></td>
                            <td class="w100 text-center">
                                <button
                                        data-url="<?php echo base_url("product/delete/"); ?>"
                                        class="btn btn-sm btn-danger btn-block remove-btn">
                                        <i class="fa fa-trash"></i> <b>Sil</b>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- .widget-body -->
        </div>
    </div>
</div>