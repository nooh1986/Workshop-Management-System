<!-- Basic modal -->
<div class="modal" id="edit{{ $payment->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">تعديل دفعه </h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{ route('employee-payment.update' , 'test') }}" method="post">
                @csrf
                @method('PUT')

                <div class="modal-body">

                    <input type="hidden" name="id" value="{{ $payment->id }}">

                    <div class="col">
                        <label>اسم الموظف:</label>
                        <select name="employee_id" class="form-control">
                            @foreach ($employees as $name => $id)
                                <option value="{{ $id }}" {{ $id == $payment->employee_id ? 'selected':"" }}> {{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>

                    <div class="col">
                        <label>السنه:</label>
                        <select name="year" class="form-control">
                            <option value="2021" {{ 2021 == $payment->year ? 'selected':"" }}>2021</option>
                            <option value="2022" {{ 2022 == $payment->year ? 'selected':"" }}>2022</option>
                            <option value="2023" {{ 2023 == $payment->year ? 'selected':"" }}>2023</option>
                            <option value="2024" {{ 2024 == $payment->year ? 'selected':"" }}>2024</option>
                        </select>
                    </div>
                    <br>

                    <div class="col">
                        <label>الشهر:</label>
                        <select name="month" class="form-control">
                            <option value="1" {{ 1 == $payment->month ? 'selected':"" }}>1</option>
                            <option value="2" {{ 2 == $payment->month ? 'selected':"" }}>2</option>
                            <option value="3" {{ 3 == $payment->month ? 'selected':"" }}>3</option>
                            <option value="4" {{ 4 == $payment->month ? 'selected':"" }}>4</option>
                            <option value="5" {{ 5 == $payment->month ? 'selected':"" }}>5</option>
                            <option value="6" {{ 6 == $payment->month ? 'selected':"" }}>6</option>
                            <option value="7" {{ 7 == $payment->month ? 'selected':"" }}>7</option>
                            <option value="8" {{ 8 == $payment->month ? 'selected':"" }}>8</option>
                            <option value="9" {{ 9 == $payment->month ? 'selected':"" }}>9</option>
                            <option value="10" {{ 10 == $payment->month ? 'selected':"" }}>10</option>
                            <option value="11" {{ 11 == $payment->month ? 'selected':"" }}>11</option>
                            <option value="12" {{ 12 == $payment->month ? 'selected':"" }}>12</option>
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

