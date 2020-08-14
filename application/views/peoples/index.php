<div class="container">
    <div class="row mt-3">
        <div class="col-md-10">
            <h3>List Of People</h3>
            <div class="row mt-3">
                <div class="col-md">
                    <form action="<?= base_url('peoples'); ?>" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Searc Keyword .." name="keyword" autocomplete="off" autofocus>
                            <div class="input-group-append">
                                <input type="submit" class="btn btn-primary" name="search" value="Search">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <small id="emailHelp" class="form-text text-muted">Ditemukan <?= $total_rows; ?> orang hasil pencarian</small>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($peoples)) : ?>
                        <tr>
                            <td colspan="4">
                                <div class="alert alert-danger" role="alert">
                                    Data tidak ditemukan!
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                    <?php
                    foreach ($peoples as $ppl) : ?>
                        <tr>
                            <th><?= ++$start; ?></th>
                            <td><?= $ppl['name']; ?></td>
                            <td><?= $ppl['email']; ?></td>
                            <td>
                                <a href="" class="badge badge-warning">detail</a>
                                <a href="" class="badge badge-success">ubah</a>
                                <a href="" class="badge badge-danger">hapus</a>
                            </td>
                        </tr>
                    <?php
                    endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>