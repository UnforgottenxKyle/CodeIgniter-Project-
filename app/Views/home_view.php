<?= $this->extend('base\base_layout'); ?>

<?= $this->section('content'); ?>
<main class="container m-5">
    <div class="row p-5 gap-2">
        <div class="col-4 p-3">
            <form action="/" method="post">
                <input type="hidden" name="id" value="<?= isset($id)?$id:"" ;?>">
                <label for="fn" class="form-label">First name</label>
                <input type="text" name="first_name" id="fn" value="<?= isset($fname)?$fname:"" ;?>" class="form-control">

                <label for="ln" class="form-label">Last name</label>
                <input type="text" name="last_name" id="ln" value="<?= isset($lname)?$lname:"" ;?>" class="form-control">
                <div class="d-grid mt-3 mb-3">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </form>
        </div>
        <div class="col p-3">
            <table class="table table-striped table-hover table-bordered">
                <tr>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>ACTION</th>
                </tr>
                <?php foreach ($rows as $item) : ?>
                    <tr>
                        <td><?= $item['first_name']; ?></td>
                        <td><?= $item['last_name']; ?></td>
                        <td>
                            <a href="/home/update/<?= $item['id'] ;?>">EDIT</a> |
                            <a href="/home/delete/<?= $item['id'] ;?>">DELETE</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</main>
<?= $this->endSection(); ?>