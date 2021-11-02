<!-- Basic modal -->
<div class="modal" id="end{{ $cut->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">إنهاء قصه</h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{ route('end') }}" method="post">
                @csrf

                <div class="modal-body">

                    <input type="hidden" name="id" value="{{ $cut->id }}">

                    <div class="col">
                        <label>تاريخ الإنهاء :</label>
                        <input type="date" name="date_end" class="form-control">
                    </div>
                    <br>
                                       
                    <div class="col">
                        <label>عدد القصه:</label>
                        <input type="number" class="form-control" name="count" value="{{ $cut->count }}" readonly>
                    </div>
                    <br>

                    <div class="col">
                        <label>العدد المسلم:</label>
                        <input type="number" name="count_end" class="form-control">
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

