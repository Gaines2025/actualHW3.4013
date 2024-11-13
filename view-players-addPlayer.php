<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newPlayerModal">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
              </svg>
</button>

<div class="modal fade" id="newPlayerModal" tabindex="-1" aria-labelledby="newPlayerModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newPlayerModalLabel">Add New Player</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          <div class="mb-3">
            <label for="pName" class="form-label">Player Name</label>
            <input type="text" class="form-control" id="pName" name="pName">
          </div>
          <div class="mb-3">
            <label for="pLeague" class="form-label">Player League</label>
            <input type="text" class="form-control" id="pLeague" name="pLeague">
          </div>
          <div class="mb-3">
            <label for="pCountry" class="form-label">Player Country</label>
            <input type="text" class="form-control" id="pName" name="pCountry">
          </div>
          <div class="mb-3">
            <label for="pAge" class="form-label">Player Age</label>
            <input type="text" class="form-control" id="pAge" name="pAge">
          </div>
            <input type="hidden" name="actionType" value="Add">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
