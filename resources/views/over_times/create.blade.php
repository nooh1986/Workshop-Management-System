<!-- Basic modal -->
<div class="modal" id="create">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">إضافه إضافي</h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{ route('over-time.store') }}" method="post">
              @csrf

                <div class="modal-body">

                    <div class="col">
                        <label>اسم الموظف:</label>
                        <select name="employee_id" class="form-control">
                            <option value="" selected disabled>--- اختر ---</option>
                            @foreach ($employees as $name => $id)
                                <option value="{{ $id }}"> {{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>

                    <div class="col">
                        <label>السنه:</label>
                        <select name="year" class="form-control">
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                    </div>
                    <br>

                    <div class="col">
                        <label>الشهر:</label>
                        <select name="month" class="form-control">
                            <option value="" selected disabled>--- اختر ---</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <br>

                    
                    <div class="col">
                        <label>عدد الساعات:</label>
                        <input type="number" name="count" class="form-control">
                    </div>
                    <br>

                    <div class="col">
                      <label>التاريخ:</label>
                      <input type="date" name="date" class="form-control">
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


