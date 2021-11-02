<!-- Basic modal -->
<div class="modal" id="delete{{ $absence->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">حذف غياب</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>

            <form action="{{ route('absence.destroy' , 'test') }}" method="post">
                @csrf
                @method('Delete')

                <div class="modal-body">

                    <input type="hidden" name="id" value="{{ $absence->id }}">

                    هل انت متاكد من عمليه الحذف؟
    
                </div>

                <div class="modal-footer">
                    <button class="btn ripple btn-danger" type="submit">حذف</button>
                    <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">إغلاق</button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- End Basic modal -->

