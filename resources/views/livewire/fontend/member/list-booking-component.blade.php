<div>



    <!-- =======================
Contact form and vector START -->
    <section class="pt-0 pt-lg-5">
        <div class="container">

            <!-- Guest list START -->
            <div class="card shadow mt-5">
                <div class="card-header text-center">
                    <h1 class="h3 mb-3 mb-sm-0" style="font-family: 'Phetsarath OT'">ປະຫວັດລາຍການຈອງ</h1>
                </div>
                <!-- Card body START -->
                <div class="card-body">
                    <table width="100%" border="1">
                        <thead>
                            <tr class="text-center">
                                <th class="p-2" style="border: 1px groove #000">
                                    ລຳດັບ
                                </th>
                                <th class="p-2" style="border: 1px groove #000">
                                    ລະຫັດ
                                </th>
                                <th class="p-2" style="border: 1px groove #000">
                                    ວັນທີຈອງ
                                </th>
                                <th class="p-2" style="border: 1px groove #000">
                                    ຊື່ຜູ້ຈອງ
                                </th>
                                <th class="p-2" style="border: 1px groove #000">
                                    ທີ່ພັກ - ຫ້ອງ
                                </th>
                                <th class="p-2" style="border: 1px groove #000">
                                    ລາຄາ
                                </th>
                                <th class="p-2" style="border: 1px groove #000">
                                    ສະຖານະ
                                </th>
                            </tr>
                        </thead>
                        <tbody border="1" style="border: 1px groove #000">
                            @php $no = 1; @endphp
                            @forelse ($data as $item)
                                <tr class="text-center">
                                    <td class="p-2" style="border: 1px groove #000">{{$no++}}</td>
                                    <td style="border: 1px groove #000">{{$item->code}}</td>
                                    <td style="border: 1px groove #000">{{date('d/m/Y',strtotime($item->checkin))}} - {{date('d/m/Y',strtotime($item->checkout))}}</td>
                                    <td style="border: 1px groove #000">{{$item->name}}</td>
                                    <td style="border: 1px groove #000">{{$item->bookingname->hotelname->name}} - {{$item->roomname->name}}</td>
                                    <td style="border: 1px groove #000">{{number_format($item->price)}}</td>
                                    <td style="border: 1px groove #000">@if($item->status == 1) ລໍຖ້າອະນຸມັດ @elseif($item->status == 2) <div class="badge bg-success bg-opacity-10 text-success">ຈອງສຳເລັດ</div> @else <div class="badge bg-orange bg-opacity-10 text-orange">ການຈອງຖືກຍົກເລີກ</div> @endif</td>
                                </tr>
                            @empty
                            <tr class="text-center p-2" >
                                <td colspan="7" class="p-2" style="border: 1px groove #000">ບໍ່ມີລາຍການຈອງ</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
Contact form and vector END -->

</div>