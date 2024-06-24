<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ການບໍລິການ</a></li>
                        <li class="breadcrumb-item active">ເປີດຫ້ອງພັກ</li>
                    </ol>
                </div>
                <h4 class="page-title">ເປີດຫ້ອງພັກ</h4>
            </div>
        </div>
    </div>

    <div class="row">

        @foreach ($data as $item)
        <div class="col-lg-2">
            <div class="text-center card-box">
                <div class="member-card">
                    @if($item->status == 1)
                    <span style="font-size: 50px;"><i class="h-1 mdi mdi-home-analytics text-success"></i></span>
                    @else
                    <span style="font-size: 50px;"><i class="h-1 mdi mdi-home-analytics text-danger"></i></span>
                    @endif

                    <div class="mt-3">
                        <h4 class="font-18 mb-1">ເບີຫ້ອງ :{{$item->name}}</h4>
                        <p class="text-muted">
                            @if ($item->cate == 'air')
                            ປະເພດຫ້ອງແອ
                            @else
                            ປະເພດຫ້ອງພັດລົມ
                            @endif
                            <span> | </span> <span> <a href="#" class="text-info">
                                    @if ($item->type == 'one')
                                    ປະເພດຕຽງດ່ຽວ
                                    @else
                                    ປະເພດຕຽງຄູ່
                                    @endif
                                </a> </span>
                        </p>
                    </div>
                    <ul class="social-links list-inline mt-4 mb-2">
                        <li class="list-inline-item">
                            @if($item->status == 1)
                            <button class="btn btn-sm btn-success">
                                Check in
                            </button>
                            @else
                            <button class="btn btn-sm btn-danger" wire:click="close({{$item->id}})">
                                Check out
                            </button>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endforeach

    </div>



    <div id="detail-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title mt-0 text-white">ລາຍລະອຽດ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">ປິດ</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>

@push('scripts')
<script>
window.addEventListener('show-del', event => {
    $('#detail-modal').modal('show');
})
window.addEventListener('show-del', event => {
    $('#detail-modal').modal('hide');
})
</script>
@endpush