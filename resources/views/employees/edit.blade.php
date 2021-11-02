<!-- Basic modal -->
<div class="modal" id="edit{{ $employee->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">تعديل معلومات موظف</h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{ route('employee.update' , 'test') }}" method="post">
                @csrf
                @method('PUT')

                <div class="modal-body">

                    <input type="hidden" name="id" value="{{ $employee->id }}">

                    <div class="col">
                        <label>اسم الموظف:</label>
                        <input type="text" name="name" class="form-control" value="{{ $employee->name }}">
                    </div>
                    <br>

                    <div class="col">
                      <label>الراتب:</label>
                      <input type="number" name="salary" class="form-control" value="{{ $employee->salary }}">
                    </div>
                    <br>

                    <div class="col">
                        <label>الحاله:</label>
                        <select name="status" class="form-control">
                            <option value="1" {{$employee->status == 1 ? 'selected':"" }}>مفعل</option>
                            <option value="0" {{$employee->status == 0 ? 'selected':"" }}>غير مفعل</option>
                        </select>
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

