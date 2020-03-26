<div class="row">
    <div class="col col-lg-8">
        <div class="jumbotron">
            <h1 class="display-4">Website sosial media sederhana</h1>
            <p class="lead">Subtitle</p>
            <hr class="my-4">
            <p>Content</p>
        </div>
    </div>
    <div class="col col-lg-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title"><?= $title ?></h5>
                <form action="">
                    <div class="form-row">
                        <div class="form-group col">
                            <input id="my-input" class="form-control" type="text" name="" placeholder="Nama Depan">
                        </div>
                        <div class="form-group col">
                            <input id="my-input" class="form-control" type="text" name="" placeholder="Nama Belakang">
                        </div>
                    </div>
                    <div class="form-group">
                        <input id="my-input" class="form-control" type="date" name="" placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <input id="my-input" class="form-control" type="text" name="" placeholder="Asal">
                    </div>
                    <div class="form-group">
                        <input id="my-input" class="form-control" type="text" name="" placeholder="Email">
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <input id="my-input" class="form-control" type="password" name="" placeholder="Password">
                        </div>
                        <div class="form-group col">
                            <input id="my-input" class="form-control" type="password" name="" placeholder="Ulangi password">
                        </div>
                    </div>
                    <hr>
                    <button type="button" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> Daftar</button>
                </form>
                <small class="grey-text">Sudah memiliki akun ? <a href="<?= base_url('app/login') ?>">login sekarang</a></small>
            </div>
            <div class="card-footer py-4">
                <p class="text-center grey-text">atau</p>
                <a name="" id="" class="btn btn-primary btn-block indigo border-0 btn-sm" href="#" role="button"><i class="fab fa-facebook" aria-hidden="true"></i> login dengan facebook</a>
                <a name="" id="" class="btn btn-primary btn-block red darken-1 border-0 btn-sm" href="#" role="button"><i class="fab fa-google" aria-hidden="true"></i> login dengan Google</a>
            </div>
        </div>
    </div>
</div>