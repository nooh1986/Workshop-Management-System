<!-- Basic modal -->
<div class="modal" id="edit{{ $absence->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">تعديل غياب </h6>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{ route('absence.update' , 'test') }}" method="post">
                @csrf
                @method('PUT')

                <div class="modal-body">

                    <input type="hidden" name="id" value="{{ $absence->id }}">

                    <div class="col">
                        <label>اسم الموظف:</label>
                        <select name="employee_id" class="form-control">
                            @foreach ($employees as $name => $id)
                                <option value="{{ $id }}" {{ $id == $absence->employee_id ? 'selected':"" }}> {{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>

                    <div class="col">
                        <label>السنه:</label>
                        <select name="year" class="form-control">
                            <option value="2021" {{ 2021 == $absence->year ? 'selected':"" }}>2021</option>
                            <option value="2022" {{ 2022 == $absence->year ? 'selected':"" }}>2022</option>
                            <option value="2023" {{ 2023 == $absence->year ? 'selected':"" }}>2023</option>
                            <option value="2024" {{ 2024 == $absence->year ? 'selected':"" }}>2024</option>
                        </select>
                    </div>
                    
                    <div class="col">
                        <label>الشهر:</label>
                        <select name="month" class="form-control">
                            <option value="1" {{ 1 == $absence->year ? 'selected':"" }}>1</option>
                            <option value="2" {{ 2 == $absence->year ? 'selected':"" }}>2</option>
                            <option value="3" {{ 3 == $absence->year ? 'selected':"" }}>3</option>
                            <option value="4" {{ 4 == $absence->year ? 'selected':"" }}>4</option>
                            <option value="5" {{ 5 == $absence->year ? 'selected':"" }}>5</option>
                            <option value="6" {{ 6 == $absence->year ? 'selected':"" }}>6</option>
                            <option value="7" {{ 7 == $absence->year ? 'selected':"" }}>7</option>
                            <option value="8" {{ 8 == $absence->year ? 'selected':"" }}>8</option>
                            <option value="9" {{ 9 == $absence->year ? 'selected':"" }}>9</option>
                            <option value="10" {{ 10 == $absence->year ? 'selected':"" }}>10</option>
                            <option value="11" {{ 11 == $absence->year ? 'selected':"" }}>11</option>
                            <option value="12" {{ 12 == $absence->year ? 'selected':"" }}>12</option>
                        </select>
                    </div>
                    <br>

                    
                    <div class="col">
                        <label>العدد:</label>
                        <input type="number" name="count" class="form-control" value="{{ $absence->count }}">
                    </div>
                    

                    <div class="col">
                        <label>نوع الغياب:</label>
                        <select name="type" class="form-control">
                            <option value="1" {{ 1 == $absence->type ? 'selected':"" }}>يومي</option>
                            <option value="0" {{ 0 == $absence->type ? 'selected':"" }}>ساعي</option>
                        </select>
                    </div>
                    <br>

                    <div class="col">
                      <label>التاريخ:</label>
                      <input type="date" name="date" class="form-control" value="{{ $absence->date }}">
                    </div>
                    
                    
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

