<section>
    <div class="container">
        <h1 class="mt-3 mb-3" align="center">Vigenere Cipher - Text Decryption</h1>
        <br>
        <form action="<?= base_url('home/decryptpage'); ?>" method="POST">
            <div class="form-group row">
                <label for="code" class="col-sm-2 col-form-label">Ciphertext</label>
                <div class="col-sm-10">
                    <textarea type="text" class="form-control <?= (form_error('code')) ? 'is-invalid' : ''; ?>" rows="5" id="code" name="code"><?= set_value('code'); ?></textarea>
                    <div class="invalid-feedback">
                        <?= form_error('code'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="pswd" class="col-sm-2 col-form-label">Key</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control <?= (form_error('pswd')) ? 'is-invalid' : ''; ?>" id="pswd" name="pswd" value="<?= set_value('pswd'); ?>">
                    <div class="invalid-feedback">
                        <?= form_error('pswd'); ?>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 ml-auto">
                    <button type="submit" class="btn btn-primary">Decode</button>
                </div>
            </div>
        </form>
        <div class="form-group row">
            <label for="hasil" class="col-sm-2 col-form-label">Plaintext</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" rows="5" id="hasil" name="hasil" readonly><?= $hasil; ?></textarea>
            </div>
        </div>
    </div>
</section>
<br>