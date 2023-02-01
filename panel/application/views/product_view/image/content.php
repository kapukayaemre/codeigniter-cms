<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Ürünün Fotoğraflarını Ekle
        </h4>
    </div>
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
                <table class="table table-bordered table-hover" >
                    <thead>
                        <th>#id</th>
                        <th>Görsel</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1</td>
                            <td><img width="50" src="https://img.freepik.com/premium-vector/elegant-furniture-logo-with-lamp_23-2148477392.jpg?w=2000" alt=""></td>
                            <td>
                                <input
                                        data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                    <?php echo (true) ? 'checked' : ''; ?>
                                /></td>
                            <td>
                                <button
                                        data-url="<?php echo base_url("product/delete/"); ?>"
                                        class="btn btn-sm btn-danger remove-btn">
                                        <i class="fa fa-trash"></i> <b>Sil</b>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>#1</td>
                            <td><img width="50" src="https://img.freepik.com/premium-vector/elegant-furniture-logo-with-lamp_23-2148477392.jpg?w=2000" alt=""></td>
                            <td>
                                <input
                                        data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                    <?php echo (true) ? 'checked' : ''; ?>
                                /></td>
                            <td>
                                <button
                                        data-url="<?php echo base_url("product/delete/"); ?>"
                                        class="btn btn-sm btn-danger remove-btn">
                                    <i class="fa fa-trash"></i> <b>Sil</b>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>#1</td>
                            <td><img width="50" src="https://img.freepik.com/premium-vector/elegant-furniture-logo-with-lamp_23-2148477392.jpg?w=2000" alt=""></td>
                            <td>
                                <input
                                        data-url="<?php echo base_url("product/isActiveSetter/"); ?>"
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                    <?php echo (true) ? 'checked' : ''; ?>
                                /></td>
                            <td>
                                <button
                                        data-url="<?php echo base_url("product/delete/"); ?>"
                                        class="btn btn-sm btn-danger remove-btn">
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