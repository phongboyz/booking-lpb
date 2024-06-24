<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ການບໍລິການ</a></li>
                        <li class="breadcrumb-item active">ລາຍການສັ່ງຈອງຫ້ອງພັກ</li>
                    </ol>
                </div>
                <h4 class="page-title">ລາຍການສັ່ງຈອງຫ້ອງພັກ</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">

                <div class="row">
                    <div class="col-3">
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
                    <div class="col-4">

                    </div>

                    <div class="col-2">
                        <!-- <input type="date" name="date" id="date" wire:model="dateS" class="form-control"> -->
                    </div>
                    <div class="col-2">
                        <input type="text" name="search" id="search" wire:model="search" wire:keydown.enter="searchData"
                            class="form-control" placeholder="ຄົ້ນຫາ">
                    </div>
                    <div class="col-lg-1 ">
                        <button type="button" class="btn btn-primary" wire:click="searchData">
                            <i class="mdi mdi-file-search-outline"></i>
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="table-rep-plugin">
                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                <br>
                                <table border="2" width="100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="font-size: 12px">ລຳດັບ</th>
                                            <th style="font-size: 12px">ລະຫັດ</th>
                                            <th style="font-size: 12px">ໂຮງແຮມ</th>
                                            <th style="font-size: 12px">ວັນທີ check in</th>
                                            <th style="font-size: 12px">ວັນທີ check out</th>
                                            <th style="font-size: 12px">ຊື່ຜູ້ຈອງ</th>
                                            <th style="font-size: 12px">ເບີໂທ</th>
                                            <th style="font-size: 12px">ຈຳນວນເງິນ</th>
                                            <th style="font-size: 12px">ລາຍລະອຽດ</th>
                                            <th style="font-size: 12px">ສະຖານະ</th>
                                            <th style="font-size: 12px">ປຸ່ມກົດ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($data as $item)
                                        <tr>
                                            <td class="text-center" style="font-size: 12px">{{$no++}}</td>
                                            <td class="text-center" style="font-size: 12px">{{$item->code}}</td>
                                            <td class="text-center" style="font-size: 12px">{{$item->hotelname->name}}</td>
                                            <td class="text-center" style="font-size: 12px">
                                                {{date('d/m/Y',strtotime($item->checkin))}}
                                            </td>
                                            <td class="text-center" style="font-size: 12px">
                                                {{date('d/m/Y',strtotime($item->checkout))}}
                                            </td>
                                            <td class="text-center" style="font-size: 12px">{{$item->name}}</td>
                                            <td class="text-center" style="font-size: 12px">{{$item->phone}}</td>
                                            <td class="text-center" style="font-size: 12px">
                                                {{number_format($item->total)}}</td>
                                            <td class="text-center" style="font-size: 12px">
                                                <button class="btn btn-info  phetsarath-font" wire:click="showDetail({{$item->code}})">
                                                    <i class="mdi mdi-eye"></i>
                                                </button>
                                            </td>
                                            <td class="text-center" style="font-size: 12px">
                                                @if ($item->status == 1)
                                                <span class="text-primary">ລໍຖ້າອະນຸມັດ</span>
                                                @elseif ($item->status == 2)
                                                <span class="text-info">ອະນຸມັດສຳເລັດ</span>
                                                @elseif ($item->status == 3)
                                                <span class="text-info">ອະນຸມັດສຳເລັດ</span>
                                                @elseif ($item->status == 0)
                                                <span class="text-danger">ຍົກເລີກ</span>
                                                @endif
                                            </td>
                                            <td class="text-center" style="font-size: 12px">
                                                @if($item->status == 1)
                                                <button class="btn btn-teal  phetsarath-font" wire:click="confirm({{$item->id}})">
                                                    <i class="mdi mdi-file-document-box-check"></i> ອະນຸມັດ
                                                </button>
                                                <button class="btn btn-danger  phetsarath-font" wire:click="reject({{$item->id}})">
                                                    <i class="mdi mdi-sort-variant-remove"></i> ບໍ່ອະນຸມັດ
                                                </button>
                                                @endif
                                                @if ($item->status == 2)
                                                <button class="btn btn-info  phetsarath-font" wire:click="open({{$item->id}})">
                                                    <i class="mdi mdi-arrow-right-bold-box"></i> check-in
                                                </button>
                                                @endif
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="13" class="text-center" style="font-size: 12px">
                                                ບໍ່ມີຂໍ້ມູນລາຍການ</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <span><br> ລວມທັງໝົດ <span class="text-danger">{{$count}}</span> ລາຍການ</span>
                    </div>
                </div>
            </div>
        </div>
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
                    <div class="row p-3">
                        <div class="col-lg-12">
                        <table border="2" width="100%">
                                    <thead>
                                        <tr class="text-center">
                                            <th style="font-size: 12px">ລາຍລະອຽດຫ້ອງ</th>
                                            <th style="font-size: 12px">ລາຄາ</th>
                                            <th style="font-size: 12px">ຈຳນວນວັນ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($details as $item)
                                        <tr>
                                            <td class="text-center" style="font-size: 12px">{{$item->room}}</td>
                                            <td class="text-center" style="font-size: 12px">{{number_format($item->price * 2)}}</td>
                                            <td class="text-center" style="font-size: 12px">
                                                2
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="13" class="text-center" style="font-size: 12px">
                                                ບໍ່ມີຂໍ້ມູນລາຍການ</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-lg-12">
                            <a href="{{asset($pic)}}">
                                <img src="{{asset($pic)}}" target="_bank" alt="qr" width="100%">
                            </a>    
                        </div>
                    </div>
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