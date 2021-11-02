<!-- Basic modal -->
<div class="modal" id="edit{{ $payment->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">تعديل دفعه </h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{ route('payment.update' , 'test') }}" method="post">
                @csrf
                @method('PUT')

                <div class="modal-body">

                    <input type="hidden" name="id" value="{{ $payment->id }}">

                    <div class="col">
                        <label>اسم الشركه:</label>
                        <select name="company_id" class="form-control">
                            @foreach ($companies as $company)
                                <option value="{{ $company->id }}" {{ $company->id == $payment->company_id ? 'selected':"" }}> {{ $company->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>

                                      
                    <div class="col">
                        <label>المبلغ:</label>
                        <input type="number" name="amount" class="form-control" value="{{ $payment->amount }}">
                    </div>
                    <br>

                    <div class="col">
                    <label>تاريخ الدفعه:</label>
                    <input type="date" name="date" class="form-control" value="{{ $payment->date }}">
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

