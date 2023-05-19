<?= \Config\Services::validation()->listErrors() ?>

<form action="<?= site_url('submit-file') ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="userfile" required>
    <br>
    <input type="submit" value="Submit">
</form>
