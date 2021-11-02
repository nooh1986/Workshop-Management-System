<!-- Basic modal -->
<div class="modal" id="edit{{ $overtime->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">تعديل إضافي </h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{ route('over-time.update' , 'test') }}" method="post">
                @csrf
                @method('PUT')

                <div class="modal-body">

                    <input type="hidden" name="id" value="{{ $overtime->id }}">

                    <div class="col">
                        <label>اسم الموظف:</label>
                        <select name="employee_id" class="form-control">
                            @foreach ($employees as $name => $id)
                                <option value="{{ $id }}" {{ $id == $overtime->employee_id ? 'selected':"" }}> {{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>

                    <div class="col">
                        <label>السنه:</label>
                        <select name="year" class="form-control">
                            <option value="2021" {{ 2021 == $overtime->year ? 'selected':"" }}>2021</option>
                            <option value="2022" {{ 2022 == $overtime->year ? 'selected':"" }}>2022</option>
                            <option value="2023" {{ 2023 == $overtime->year ? 'selected':"" }}>2023</option>
                            <option value="2024" {{ 2024 == $overtime->year ? 'selected':"" }}>2024</option>
                        </select>
                    </div>
                    <br>

                    <div class="col">
                        <label>الشهر:</label>
                        <select name="month" class="form-control">
                            <option value="1" {{ 1 == $overtime->year ? 'selected':"" }}>1</option>
                            <option value="2" {{ 2 == $overtime->year ? 'selected':"" }}>2</option>
                            <option value="3" {{ 3 == $overtime->year ? 'selected':"" }}>3</option>
                            <option value="4" {{ 4 == $overtime->year ? 'selected':"" }}>4</option>
                            <option value="5" {{ 5 == $overtime->year ? 'selected':"" }}>5</option>
                            <option value="6" {{ 6 == $overtime->year ? 'selected':"" }}>6</option>
                            <option value="7" {{ 7 == $overtime->year ? 'selected':"" }}>7</option>
                            <option value="8" {{ 8 == $overtime->year ? 'selected':"" }}>8</option>
                            <option value="9" {{ 9 == $overtime->year ? 'selected':"" }}>9</option>
                            <option value="10" {{ 10 == $overtime->year ? 'selected':"" }}>10</option>
                            <option value="11" {{ 11 == $overtime->year ? 'selected':"" }}>11</option>
                            <option value="12" {{ 12 == $overtime->year ? 'selected':"" }}>12</option>
                        </select>
                    </div>
                    <br>

                    
                    <div class="col">
                        <label>عدد الساعات:</label>
                        <input type="number" name="count" class="form-control" value="{{ $overtime->count }}">
                    </div>
                    <br>

                    <div class="col">
                      <label>التاريخ:</label>
                      <input type="date" name="date" class="form-control" value="{{ $overtime->date }}">
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

