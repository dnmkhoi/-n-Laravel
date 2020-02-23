<div class="bg0 m-t-23 p-b-140">
    <div class="container">
        <div class="flex-w flex-sb-m p-b-52">
            <input class="icon-search" type="text" id="desktop" onkeyup="searchDesktop()" placeholder="Tìm kiếm">

            <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                    Tất cả
                </button>

                @foreach($danhsachloai as $loai)
                <button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".loai-{{ $loai->l_ma }}">
                    {{ $loai->l_ten }}
                </button>
                @endforeach
            </div>

            <div class="flex-w flex-c-m m-tb-10">
            </div>

            <!-- Search product -->
            <div class="dis-none panel-search w-full p-t-10 p-b-15">
                <div class="bor8 dis-flex p-l-15">
                    <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                        <i class="zmdi zmdi-search"></i>
                    </button>

                    <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
                </div>
            </div>

            <!-- Filter -->
            <div class="dis-none panel-filter w-full p-t-10">
            </div>
        </div>

        <div class="row isotope-grid show-products">
            @foreach($data as $index=>$sp)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item loai-{{ $sp->l_ma }} desktop-div">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" alt="IMG-PRODUCT" class="img_sanpham">

                        <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal" data-sp-ma="{{ $sp->sp_ma }}">
                            Xem nhanh
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <ul id="myUL">
                            <li>
                            <a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{ $sp->sp_ten }}
                            </a>
                            </li>
                            </ul>
                            <span class="stext-105 cl3">
                                {{ $sp->sp_giaBan }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Modal quick view -->
                @include('frontend.widgets.product-quick-view-desktop', ['sp' => $sp, 'hinhanhlienquan' => $danhsachhinhanhlienquan])
            </div>
            @endforeach       
        </div>
    </div>
</div>
<style>
    .img_sanpham{
        height: 150px;
    }
</style>
<script>
        function searchDesktop() {
          var input = document.getElementById("desktop");
          var filter = input.value.toLowerCase();
          var nodes = document.getElementsByClassName('desktop-div');
        
          for (i = 0; i < nodes.length; i++) {
            $('.desktop-div').css('top','');
            $('.desktop-div').css('left','');
            $('.desktop-div').css('position','');
            if (nodes[i].innerText.toLowerCase().includes(filter)) {  
              nodes[i].style.display = "block";
            } else { 
              nodes[i].style.display = "none";
            }
          }
        }
        </script>