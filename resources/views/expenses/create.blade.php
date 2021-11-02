<!-- Basic modal -->
<div class="modal" id="create">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">إضافه مصروف</h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>

          <form action="{{ route('expense.store') }}" method="post">
            @csrf

              <div class="modal-body">

                  <div class="col">
                      <label>التاريخ:</label>
                      <input type="date" name="date" class="form-control">
                  </div>
                  <br>

                  <div class="col">
                    <label>المبلغ:</label>
                    <input type="number" name="amount" step="0.01" class="form-control">
                  </div>
                  <br>

                  <div class="col">
                    <label>إلى:</label>
                    <textarea class="form-control" name="to" rows="3"></textarea>
                </div>
                <br>
                  
              </div>

              <div class="modal-footer">
                  <button class="btn ripple btn-primary" type="submit">حفظ المعلومات</button>
                  <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">إغلاق</button>
              </div>

          </form>
      </div>
  </div>
</div>
<!-- End Basic modal -->



