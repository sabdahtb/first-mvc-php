<div class="container mt-5">
  <h3>Welcome Clovers</h3>
  <div class="row mt-4">
    <div class="col-md-6">

      <button type="button" class="btn btn-primary addBtn" data-bs-toggle="modal" data-bs-target="#formModal">
        Add Clover
      </button>

      <div class="row mt-3">
        <div class="col-md-6">
          <?php Flasher::flash() ?>
        </div>
      </div>

      <ul class="list-group mt-3">
        <?php foreach ($data['clover'] as $clo) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <span><?= $clo["nama"] ?></span>
            <div>
              <a href="<?= BASEURL ?>/Home/detail/<?= $clo["id"] ?>" class="text-decoration-none">
                <span class="badge bg-primary">Detail</span>
              </a>
              <button type="button" class="btn badge bg-warning editBtn text-decoration-none" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $clo["id"] ?>">
                Edit
              </button>
              <a href="<?= BASEURL ?>/Home/delete/<?= $clo["id"] ?>" class="text-decoration-none" onclick="return confirm('Sure want to delete ?')">
                <span class="badge bg-danger">Delete</span>
              </a>
            </div>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Add Clover</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ?>/Home/add" method="post">
          <input type="hidden" name="id" id="id">
          <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Age</label>
            <input type="number" class="form-control" id="umur" name="umur" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Cancel
        </button>
        <button type="submit" class="btn btn-primary submitBtn">Add</button>
        </form>
      </div>
    </div>
  </div>
</div>