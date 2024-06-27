<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">ຂໍ້ມູນໃຊ້ງານລະບົບ</a></li> -->
                        <li class="breadcrumb-item active">ຂໍ້ມູນໂຮງແຮມ</li>
                    </ol>
                </div>
                <h4 class="page-title">ຂໍ້ມູນໂຮງແຮມ</h4>
            </div>
        </div>
    </div>

    @if(auth()->user()->rolename->name == 'vendor')
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
                                        <p>ສາຂາ</p>
                                        <select class="form-control" name="dis_id" id="dis_id" wire:model="dis_id">
                                            <option value="">ເລືອກສາຂາ</option>
                                            @foreach ($districts as $item)
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('dis_id') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <p>ຊື່ໂຮງແຮມ</p>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            wire:model="name" placeholder="ຊື່ໂຮງແຮມ" require>
                                        @error('name') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <p>ເບີໂທ</p>
                                        <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                            wire:model="phone" placeholder="ເບີໂທ" require>
                                        @error('phone') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <p>ທີ່ຢູ່</p>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror"
                                            wire:model="address" placeholder="ທີ່ຢູ່" require>
                                        @error('address') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <p>ລາຄາເລີ່ມຕົ້ນ</p>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror"
                                            wire:model="price" placeholder="ລາຄາເລີ່ມຕົ້ນ" require>
                                        @error('price') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <p>ໂປຣໂມຊັ່ນ 1</p>
                                        <input type="text"
                                            class="form-control @error('promotion1') is-invalid @enderror"
                                            wire:model="promotion1" placeholder="ໂປຣໂມຊັ່ນ 1" require>
                                        @error('promotion1') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <p>ໂປຣໂມຊັ່ນ 2</p>
                                        <input type="text"
                                            class="form-control @error('promotion2') is-invalid @enderror"
                                            wire:model="promotion2" placeholder="ໂປຣໂມຊັ່ນ 2" require>
                                        @error('promotion2') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <p>ໂປຣໂມຊັ່ນ 3</p>
                                        <input type="text"
                                            class="form-control @error('promotion3') is-invalid @enderror"
                                            wire:model="promotion3" placeholder="ໂປຣໂມຊັ່ນ 3" require>
                                        @error('promotion3') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <p>ລາຍລະອຽດເພີ່ມເຕີມ</p>
                                        <input type="text" class="form-control @error('detail') is-invalid @enderror"
                                            wire:model="detail" placeholder="ລາຍລະອຽດເພີ່ມເຕີມ" require>
                                        @error('detail') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group" wire:ignore>
                                        <p>ອັບໂຫຼດຮູບພາບ 1</p>
                                        <input type="file" class="filestyle" wire:model="img1" wire:click="uploads">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group" wire:ignore>
                                        <p>ອັບໂຫຼດຮູບພາບ 2</p>
                                        <input type="file" class="filestyle" wire:model="img2" wire:click="uploads">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group" wire:ignore>
                                        <p>ອັບໂຫຼດຮູບພາບ 3</p>
                                        <input type="file" class="filestyle" wire:model="img3" wire:click="uploads">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group" wire:ignore>
                                        <p>ອັບໂຫຼດຮູບພາບ 4</p>
                                        <input type="file" class="filestyle" wire:model="img4" wire:click="uploads">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group" wire:ignore>
                                        <p>ອັບໂຫຼດຮູບພາບ 5</p>
                                        <input type="file" class="filestyle" wire:model="img5" wire:click="uploads">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group" wire:ignore>
                                        <p>ອັບໂຫຼດຮູບພາບ 6</p>
                                        <input type="file" class="filestyle" wire:model="img6" wire:click="uploads">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group" wire:ignore>
                                        <p>ອັບໂຫຼດຮູບພາບ 7</p>
                                        <input type="file" class="filestyle" wire:model="img7" wire:click="uploads">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group" wire:ignore>
                                        <p>ອັບໂຫຼດຮູບພາບ 8</p>
                                        <input type="file" class="filestyle" wire:model="img8" wire:click="uploads">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <p>ລິ້ງທີ່ຢູ່</p>
                                        <input type="text"
                                            class="form-control @error('location') is-invalid @enderror"
                                            wire:model="location" placeholder="ລິ້ງທີ່ຢູ່" require>
                                        @error('location') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
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
    @endif

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
                                                <th> ຊື່ໂຮງແຮມ </th>
                                                <th> ເບີໂທ </th>
                                                <th> ລາຄາເລີ່ມຕົ້ນ </th>
                                                <th> ທີ່ຢູ່ </th>
                                                <th> ລາຍລະອຽດ </th>
                                                <th> ສະຖານະ </th>
                                                @if(auth()->user()->rolename->name == 'vendor')<th> ປຸ່ມກົດ </th>@endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @forelse ($data as $key => $item)
                                            <tr class="text-center">
                                                <td>{{$no++}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->phone}}</td>
                                                <td>{{number_format($item->price)}}</td>
                                                <td>{{$item->address}}</td>
                                                <td>{{$item->detail}}</td>
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
                                                @if(auth()->user()->rolename->name == 'vendor')
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
                                                @endif
                                            </tr>
                                            @empty
                                            <tr class="text-center">
                                                <td colspan="7" style="color: #787878;">ບໍ່ມີຂໍ້ມູນໂຮງແຮມ</td>
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