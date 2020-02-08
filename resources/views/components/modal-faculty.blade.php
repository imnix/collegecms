<div class="modal fade" id="modal-faculty">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Add New Faculty</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="/faculty/add">
        @csrf
        <div class="modal-body">
          <div class="form-group">
            <label>Faculty Name</label>
            <input type="text" name="faculty" class="form-control">
          </div>
        </div>
        <div class="modal-footer justify-content-end">
          <input type="submit" value="save changes" class="btn btn-primary">
        </div>
      </div>
    </form>
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>