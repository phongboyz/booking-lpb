<div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ລາຍງານ</a></li>
                        <li class="breadcrumb-item active">ລາຍງານຂໍ້ມູນຫ້ອງ</li>
                    </ol>
                </div>
                <h4 class="page-title">ລາຍງານຂໍ້ມູນຫ້ອງ</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-lg-12">
                        <button class="btn btn-info phetsarath-font" id="print" wire:click="print"><i
                                class="mdi mdi-printer-check"></i>
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
                                            style="color: black;"><u>ລາຍງານຂໍ້ມູນຫ້ອງ</u></b></h4>
                                    </p>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-12">
                                    <table border="1" width="100%">
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
                                                    ຫວ່າງ
                                                    @else
                                                    ບໍ່ຫວ່າງ
                                                    @endif
                                                </td>
                                            </tr>
                                            @empty
                                            <tr class="text-center">
                                                <td colspan="5" style="color: #787878;">ບໍ່ມີຂໍ້ມູນຫ້ອງພັກ</td>
                                            </tr>
                                            @endforelse
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