<!-- Basic modal -->
<div class="modal" id="create">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">إضافه شركه</h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{ route('company.store') }}" method="post">
                @csrf

                <div class="modal-body">

                    <div class="col">
                        <label>اسم الشركة:</label>
                        <input type="text" name="name" class="form-control">
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


