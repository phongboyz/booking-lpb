<div>
    <div class="row">
        <div class="col-lg-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ຈັດການຂໍ້ມູນ</a></li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນເມືອງ</li>
                    </ol>
                </div>
                <h4 class="page-title">ຂໍ້ມູນເມືອງ</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                @if ($editId)
                <div class="card-header bg-warning py-3 text-white">
                    <h5 class="card-title mb-0 text-white"><i class="mdi mdi-pencil-remove-outline"></i> ແກ້ໄຂຂໍ້ມູນ
                    </h5>
                </div>
                @else
                <div class="card-header bg-info py-3 text-white">
                    <h5 class="card-title mb-0 text-white"><i class="mdi mdi-plus"></i> ເພີ່ມຂໍ້ມູນ </h5>
                </div>
                @endif
                <div id="cardCollpase1" class="collapse show">
                    <div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group" wire:ignore>
                                        <p>ອັບໂຫຼດຮູບພາບ</p>
                                        <input type="file" class="filestyle" wire:model="img">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <p>ຊື່ເມືອງ</p>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            wire:model="name" placeholder="ຊື່ເມືອງ" wire:keydown.enter="store" require>
                                        @error('name') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <p>ລາຍລະອຽດ</p>
                                        <input type="text" class="form-control" wire:model="detail"
                                            placeholder="ລາຍລະອຽດ" wire:keydown.enter="store" require>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">

                            @if ($editId)
                            <button class="btn btn-warning" wire:click="store">ອັບເດດ</button>
                            @else
                            <button class="btn btn-success" wire:click="store">ບັນທຶກ</button>
                            @endif

                            <a href="{{route('districts')}}" class="btn btn-danger">ລ້າງຂໍ້ມູນ</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card-box">

                <div class="row">
                    <div class="col-lg-3">
                        <table width="100%">
                            <tr>
                                <td style="vertical-align: center;" class="text-right">ສະແດງ &emsp;</td>
                                <td>
                                    <select wire:model="dataQ" wire:click="dataQS" name="Q" id="Q" class="form-control">
                                        <option value="0">0</option>
                                        <option value="15">15</option>/
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                        <option value="999999999">ທັງໝົດ</option>
                                    </select>
                                    <!-- <input type="number" wire:model="dataQ" name="dataQ" id="dataQ" class="form-control col-12"> -->
                                </td>
                                <td style="vertical-align: center;"><span>&emsp; ລາຍການ</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="search" id="search" wire:model="search" class="form-control"
                            placeholder="ຄົ້ນຫາ">
                    </div>
                    <div class="col-lg-1 ">
                        <button type="button" class="btn btn-primary" wire:click="searchData">
                            <i class="mdi mdi-file-search-outline"></i>
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-rep-plugin">
                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                <br>
                                <table border="2" width="100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th> ລຳດັບ </th>
                                            <th> ຮູບພາບ </th>
                                            <th> ຊື່ເມືອງ </th>
                                            <th> ປຸ່ມກົດ </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($data as $key => $item)
                                        <tr class="text-center">
                                            <td>{{$no++}}</td>
                                            <td>
                                                @if($item->img)
                                                <a href="{{asset($item->img)}}" target="_bank">
                                                    <img class="media-object rounded-circle" alt="64x64"
                                                        src="{{asset($item->img)}}" style="height: 64px;"> </a>
                                                @else
                                                <a href="{{asset('backend/assets/images/users/avatar-1.jpg')}}"
                                                    target="_bank">
                                                    <img class="media-object rounded-circle" alt="64x64"
                                                        src="{{asset('backend/assets/images/users/avatar-1.jpg')}}"
                                                        style="height: 64px;"> </a>
                                                @endif
                                            </td>
                                            <td>{{$item->name}}</td>
                                            <td>
                                                <div class="btn-group btn-group-justified text-white mb-2">
                                                    <a class="btn btn-warning waves-effect waves-light"
                                                        wire:click="edit({{$item->id}})"><i
                                                            class="mdi mdi-pencil-remove-outline"></i></a>
                                                    <a class="btn btn-danger waves-effect waves-light"
                                                        wire:click="delete({{$item->id}})"><i
                                                            class="mdi mdi-window-close"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr class="text-center">
                                            <td colspan="8" style="color: #787878;">ບໍ່ມີຂໍ້ມູນເມືອງ</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <span><br> ລວມເມືອງທັງໝົດ <span class="text-danger">{{$count}}</span> ລາຍການ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="custom-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title mt-0 text-white">ລົບຂໍ້ມູນ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3><b>ທ່ານຕ້ອງການລົບຂໍ້ມູນນີ້ ຫຼື ບໍ່ ?</b></h3>
                    <p>ລາຍລະອຽດ: <span class="text-danger">{{$delName}}</span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">ປິດ</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light"
                        wire:click="destroy">ລົບຂໍ້ມູນ</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</div>

@push('scripts')

<link href="{{asset('backend/assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css">
<script src="{{asset('backend/assets/libs/select2/select2.min.js')}}"></script>

<script>
window.addEventListener('show-del', event => {
    $('#custom-modal').modal('show');
})
window.addEventListener('show-del', event => {
    $('#custom-modal').modal('hide');
})

Livewire.on('refresh_p', postId => {
    $(document).ready(function() {
        $('#pro_id').select2();
        $('#pro_id').on('change', function(e) {
            var data = $('#pro_id').select2("val");
            @this.set('pro_id', data);
        });
    });
})

$(document).ready(function() {
    $('#pro_id').select2();
    $('#pro_id').on('change', function(e) {
        var data = $('#pro_id').select2("val");
        @this.set('pro_id', data);
    });
});
</script>
@endpush