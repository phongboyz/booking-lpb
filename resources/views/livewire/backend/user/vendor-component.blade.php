<div>
    <!-- start page title -->
    <div class="row">
        <div class="col-lg-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ຂໍ້ມູນໃຊ້ງານລະບົບ</a></li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນຄູ່ຮ່ວມກິດຈະການ</li>
                    </ol>
                </div>
                <h4 class="page-title">ຂໍ້ມູນຄູ່ຮ່ວມກິດຈະການ</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-white py-3 text-white">
                    <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false"
                        aria-controls="cardCollpase2">
                        <button class="btn btn-primary">
                            <h5 class="card-title mb-0 text-white"><i class="mdi mdi-plus"></i> ເພີ່ມຂໍ້ມູນ </h5>
                        </button>
                    </a>
                </div>
                <div id="cardCollpase1" class="collapse {{$form}}">
                    <div wire:ignore.self>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <p>ຊື່ເຂົ້າໃຊ້ລະບົບ</p>
                                        <input type="text" class="form-control @error('username') is-invalid @enderror"
                                            wire:model="username" placeholder="ຊື່ເຂົ້າໃຊ້ລະບົບ" require>
                                        @error('username') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <p>ຊື່ເຕັມ</p>
                                        <input type="text" class="form-control @error('fname') is-invalid @enderror"
                                            wire:model="fname" placeholder="ຊື່ເຕັມ" require>
                                        @error('fname') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <p>ນາມສະກຸນ</p>
                                        <input type="text" class="form-control @error('lname') is-invalid @enderror"
                                            wire:model="lname" placeholder="ນາມສະກຸນ" require>
                                        @error('lname') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <p>ເບີໂທລະສັບ</p>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            wire:model="phone" placeholder="ເບີໂທລະສັບ">
                                        @error('phone') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <p>ລະຫັດຜ່ານ</p>
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            wire:model="password" placeholder="ລະຫັດຜ່ານ">
                                        @error('password') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <p>ຢືນຢັນລະຫັດຜ່ານ</p>
                                        <input type="password"
                                            class="form-control @error('confirm_password') is-invalid @enderror"
                                            wire:model="confirm_password" placeholder="ຢືນຢັນລະຫັດຜ່ານ">
                                        @error('confirm_password') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group" wire:ignore>
                                        <p>ອັບໂຫຼດຮູບພາບ</p>
                                        <input type="file" class="filestyle" wire:model="profile" wire:click="uploads">
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

                            @if (empty($addId))
                            <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false"
                                aria-controls="cardCollpase2">
                                <button class="btn btn-danger">ປິດ</button>
                            </a>
                            @else
                            <button class="btn btn-danger" wire:click="hide">ປິດ</button>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
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
                                    <!-- <input type="number" wire:model="dataQ" name="dataQ" id="dataQ" class="form-control col-lg-12"> -->
                                </td>
                                <td style="vertical-align: center;"><span>&emsp; ລາຍການ</span></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-4">

                    </div>

                    <div class="col-lg-1">
                        <!-- <input type="date" name="date" id="date" wire:model="dateS" class="form-control"> -->
                    </div>
                    <div class="col-lg-2">
                        <input type="text" name="search" id="search" wire:model="search" class="form-control"
                            placeholder="ຄົ້ນຫາ">
                    </div>
                    <div class="col-lg-2 ">
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
                                            <th> ໂປຣຟາຍ </th>
                                            <th> ຊື່ເຂົ້າໃຊ້ລະບົບ </th>
                                            <th> ລະຫັດຜ່ານ </th>
                                            <th> ເບີໂທຕິດຕໍ່ </th>
                                            <th> ສິດນຳໃຊ້ </th>
                                            <th> ສະຖານະ </th>
                                            <th> ປຸ່ມກົດ </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $no = 1; @endphp
                                        @forelse ($users as $key => $item)
                                        <tr class="text-center">
                                            <td>{{$no++}}</td>
                                            <td>
                                                @if($item->profile)
                                                <a href="{{asset($item->profile)}}" target="_bank">
                                                    <img class="media-object rounded-circle" alt="64x64"
                                                        src="{{asset($item->profile)}}" style="height: 64px;"> </a>
                                                @else
                                                <a href="{{asset('backend/assets/images/users/avatar-1.jpg')}}"
                                                    target="_bank">
                                                    <img class="media-object rounded-circle" alt="64x64"
                                                        src="{{asset('backend/assets/images/users/avatar-1.jpg')}}"
                                                        style="height: 64px;"> </a>
                                                @endif
                                            </td>
                                            <td>{{$item->username}}</td>
                                            <td>*****</td>
                                            <td>{{$item->phone}}</td>
                                            <td>{{$item->rolename->name}}</td>
                                            <td>
                                                @if ($item->active == 1)
                                                    <span class="badge badge-success" wire:click="changeActive({{$item->id}})"><a href="javascript:void(0)" class="text-white">ໃຊ້ງານ</a></span>
                                                @else
                                                    <span class="badge badge-danger text-white" wire:click="changeUnActive({{$item->id}})"><a href="javascript:void(0)" class="text-white">ຢູດໃຊ້ງານ</a></span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="btn-group btn-group-justified text-white mb-2">
                                                    <a class="btn btn-warning waves-effect waves-light"
                                                        wire:click="edit({{$item->id}})"><i
                                                            class="mdi mdi-pencil-remove-outline"></i></a>
                                                    @if($item->id != 1)
                                                    <a class="btn btn-danger waves-effect waves-light"
                                                        wire:click="delete({{$item->id}})"><i
                                                            class="mdi mdi-window-close"></i></a>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr class="text-center">
                                            <td colspan="8" style="color: #787878;">ບໍ່ມີຂໍ້ມູນຄູ່ຮ່ວມກິດຈະການ</td>
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
                        <span><br> ລວມຜູ້ໃຊ້ທັງໝົດ <span class="text-danger">{{$count}}</span> ຄົນ</span>
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
<script>
window.addEventListener('show-del', event => {
    $('#custom-modal').modal('show');
})
window.addEventListener('show-del', event => {
    $('#custom-modal').modal('hide');
})
</script>
@endpush