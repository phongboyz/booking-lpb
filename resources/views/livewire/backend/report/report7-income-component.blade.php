<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ລາຍງານ</a></li>
                        <li class="breadcrumb-item active">ລາຍງານລາຍຮັບ</li>
                    </ol>
                </div>
                <h4 class="page-title">ລາຍງານລາຍຮັບ</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12">
                        <button class="btn btn-info phetsarath-font" id="print" wire:click="print"><i class="mdi mdi-printer-check"></i>
                            Print
                        </button>
                    </div>
                </div>
                <div class="right_content">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <span>ສາທາລະນະລັດ ປະຊາທິປະໄຕ ປະຊາຊົນລາວ</span><br>
                                    <span>ສັນຕິພາບ ເອກະລາດ ປະຊາທິປະໄຕ ເອກະພາບ ວັດທະນາຖາວອນ</span><br>
                                    -----------&&&-----------
                                </div>
                                <div class="col-12 text-center py-4">
                                    <h4><b class="phetsarath-font text-black"
                                            style="color: black;"><u>ລາຍງານລາຍຮັບ</u></b></h4>
                                    </p>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-12">
                                    <table border="1" width="100%">
                                        <thead>
                                            <tr class="text-center">
                                                <th style="font-size: 12px">ລຳດັບ</th>
                                                <th style="font-size: 12px">ລະຫັດ</th>
                                                <th style="font-size: 12px">ໂຮງແຮມ</th>
                                                <th style="font-size: 12px">ວັນທີ check in</th>
                                                <th style="font-size: 12px">ວັນທີ check out</th>
                                                <th style="font-size: 12px">ຊື່ຜູ້ເຂົ້າພັກ</th>
                                                <th style="font-size: 12px">ເບີໂທ</th>
                                                <th style="font-size: 12px">ຈຳນວນເງິນ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no = 1; @endphp
                                            @forelse ($data as $item)
                                            <tr>
                                                <td class="text-center" style="font-size: 12px">{{$no++}}</td>
                                                <td class="text-center" style="font-size: 12px">{{$item->code}}</td>
                                                <td class="text-center" style="font-size: 12px">
                                                    {{$item->hotelname->name}}</td>
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
                                            </tr>
                                            @empty
                                            <tr>
                                                <td colspan="8" class="text-center" style="font-size: 12px">
                                                    ບໍ່ມີຂໍ້ມູນລາຍການ</td>
                                            </tr>
                                            @endforelse
                                            <tr class="text-center">
                                                <td colspan="7" class="text-right"><b>ລວມ :</b></td>
                                                <td>{{number_format($sum)}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
Livewire.on('refresh_print', postId => {
    $(document).ready(function() {
        printDiv();
        function printDiv() {
            var css = '@page { size: a4; }',
                head = document.head || document.getElementsByTagName('head')[0],
                style = document.createElement('style');
            style.type = 'text/css';
            style.media = 'print';
            if (style.styleSheet) {
                style.styleSheet.cssText = css;
            } else {
                style.appendChild(document.createTextNode(css));
            }
            head.appendChild(style);
            var printContents = $(".right_content").html();
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
        location.reload();
    });
});
</script>
@endpush