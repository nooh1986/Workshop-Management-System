<!-- Basic modal -->
<div class="modal" id="edit{{ $company->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">تعديل شركه</h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{ route('company.update' , 'test') }}" method="post">
                @csrf
                @method('PUT')
        
                <input type="hidden" name="id" value="{{ $company->id }}">

                <div class="modal-body">

                    <div class="col">
                        <label>اسم الشركة:</label>
                        <input type="text" name="name" class="form-control" value="{{ $company->name }}">
                    </div>
                    <br>
                    
                </div>

                <div class="modal-footer">
                    <button class="btn ripple btn-primary" type="submit">تعديل المعلومات</button>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">إغلاق</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- End Basic modal -->


