<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newClubModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
              </svg>
</button>

<div class="modal fade" id="newClubModal" tabindex="-1" aria-labelledby="newClubModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newClubModalLabel">Add New Club</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="cName" class="form-label">Club Name</label>
            <input type="text" class="form-control" id="cName" name="cName">
          </div>
          <div class="mb-3">
            <label for="cCity" class="form-label">Club City</label>
            <input type="text" class="form-control" id="cCity" name="cCity">
          </div>
          <div class="mb-3">
            <label for="cCountry" class="form-label">Club Country</label>
            <input type="text" class="form-control" id="cName" name="cCountry">
          </div>
            <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
