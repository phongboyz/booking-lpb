<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ຈັດການຂໍ້ມູນ</a></li>
                        <li class="breadcrumb-item active">ຂໍ້ມູນຫ້ອງພັກ</li>
                    </ol>
                </div>
                <h4 class="page-title">ຂໍ້ມູນຫ້ອງພັກ</h4>
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
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <p>ໂຮງແຮມ</p>
                                        <select class="form-control" name="hotel_id" id="hotel_id" wire:model="hotel_id"
                                            wire:click="hotelSelected">
                                            <option value="">ເລືອກໂຮງແຮມ</option>
                                            @foreach ($hotels as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('hotel_id') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <p>ຕຶກ</p>
                                        <select class="form-control" name="buil_id" id="buil_id" wire:model="buil_id">
                                            <option value="">ເລືອກຕຶກ</option>
                                            @foreach ($buildings as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('buil_id') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <p>ປະເພດຫ້ອງ</p>
                                        <select class="form-control" name="cate" id="cate" wire:model="cate">
                                            <option value="">ເລືອກປະເພດຫ້ອງ</option>
                                            <option value="air">ປະເພດຫ້ອງແອ</option>
                                            <option value="fan">ປະເພດຫ້ອງພັດລົມ</option>
                                        </select>
                                        @error('cate') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <p>ປະເພດຕຽງ</p>
                                        <select class="form-control" name="type" id="type" wire:model="type">
                                            <option value="">ເລືອກປະເພດຕຽງ</option>
                                            <option value="one">ປະເພດຕຽງດ່ຽວ</option>
                                            <option value="two">ປະເພດຕຽງຄູ່</option>
                                        </select>
                                        @error('type') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <p>ຊື່ / ເບີຫ້ອງ</p>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            wire:model="name" placeholder="ຊື່ / ເບີຫ້ອງ" require>
                                        @error('name') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <p>ລາຄາ</p>
                                        <input type="text" class="form-control @error('price') is-invalid @enderror"
                                            wire:model="price" placeholder="ລາຄາ" require>
                                        @error('price') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group" wire:ignore>
                                        <p>ອັບໂຫຼດຮູບພາບ</p>
                                        <input type="file" class="filestyle" wire:model="img" wire:click="uploads">
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
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg-3">
                            <table width="100%">
                                <tr>
                                    <td style="vertical-align: center;" class="text-right">ສະແດງ &emsp;</td>
                                    <td>
                                        <select wire:model="dataQ" wire:click="dataQS" name="Q" id="Q"
                                            class="form-control">
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
                                                <th> ໂຮງແຮມ </th>
                                                <th> ຕຶກ </th>
                                                <th> ປະເພດຫ້ອງ </th>
                                                <th> ປະເພດຕຽງ </th>
                                                <th> ຊື່ / ເບີຫ້ອງ </th>
                                                <th> ລາຄາ </th>
                                                <th> ສະຖານະ </th>
                                                <th> ປຸ່ມກົດ </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @forelse ($data as $key => $item)
                                            <tr class="text-center">
                                                <td>{{$no++}}</td>
                                                <td>{{$item->hotelname->name}}</td>
                                                <td>{{$item->builname->name}}</td>
                                                <td>
                                                    @if ($item->cate == 'air')
                                                    ປະເພດຫ້ອງແອ
                                                    @else
                                                    ປະເພດຫ້ອງພັດລົມ
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item->type == 'one')
                                                    ປະເພດຕຽງດ່ຽວ
                                                    @else
                                                    ປະເພດຕຽງຄູ່
                                                    @endif
                                                </td>
                                                <td>{{$item->name}}</td>
                                                <td>{{number_format($item->price)}}</td>
                                                <td>
                                                    @if ($item->status == 1)
                                                    <span class="badge badge-info">ຫວ່າງ</span>
                                                    @else
                                                    <span class="badge badge-danger">ບໍ່ຫວ່າງ</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item->active == 1)
                                                    <span class="badge badge-success"
                                                        wire:click="changeActive({{$item->id}})"><a
                                                            href="javascript:void(0)"
                                                            class="text-white">ໃຊ້ງານ</a></span>
                                                    @else
                                                    <span class="badge badge-danger text-white"
                                                        wire:click="changeUnActive({{$item->id}})"><a
                                                            href="javascript:void(0)"
                                                            class="text-white">ຢູດໃຊ້ງານ</a></span>
                                                    @endif
                                                </td>
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
                                                <td colspan="7" style="color: #787878;">ບໍ່ມີຂໍ້ມູນຫ້ອງພັກ</td>
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
                            <span><br> ລວມທັງໝົດ <span class="text-danger">{{$count}}</span> ລາຍການ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>