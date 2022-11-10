<div class="container">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah
    </button>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Item</th>
                <th scope="col">Description</th>
                <th scope="col">Released</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['mhs'] as $value) : ?>
                <tr>
                    <th scope="row"><?= $data['no']++ ?></th>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['description'] ?></td>
                    <td><?= $value['released'] ?></td>
                    <td><img src="/storage/img/<?= $value['image'] ?>" alt="" width="100"  height="100"></td>
                    <td>
                        <a href="<?= REDIRECT; ?>/items/delete/<?= $value['id'] ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= REDIRECT; ?>/items/store" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <input type="text" aria-label="First name" class="form-control" name="name">
                        </div>
                        <div class="col">
                            <input type="text" aria-label="First name" class="form-control" name="description">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="date" aria-label="First name" class="form-control" name="released">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="file" aria-label="First name" class="form-control" name="file">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="submit">Save</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>