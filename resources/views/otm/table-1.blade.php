<button class="btn btn-info btn-block" data-toggle="modal" data-target="#table-1-more-modal">
    Batafsil
</button>

@push('after_styles')
    <style>
        .table td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
@endpush

@push('after_scripts')
    <!-- Modal -->
    <div class="modal fade" id="table-1-more-modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="text-center">
                        2021-yil Attestatsiyaga jalb qilingan OTM lar natijalari
                    </h4>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <table class="table table-sm table-bordered">
                        <tr>
                            <td rowspan="2">№</td>
                            <td rowspan="2">OTM nomi</td>
                            <td rowspan="2">Attestatsiya natijasi (oʻtdi/oʻtmadi/jarayonda)</td>
                            <td colspan="3">Jalb etilgan</td>
                            <td colspan="3">Oʻtmagan</td>
                        </tr>
                        <tr>
                            <td>bak</td>
                            <td>mag</td>
                            <td>ixtisos</td>
                            <td>bak</td>
                            <td>mag</td>
                            <td>ixtisos</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Nukus davlat pedagogika instituti</td>
                            <td>oʻtdi</td>
                            <td>22</td>
                            <td>14</td>
                            <td>6</td>
                            <td>3</td>
                            <td>5</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Qoraqalpoq davlat universiteti</td>
                            <td>oʻtdi</td>
                            <td>41</td>
                            <td>24</td>
                            <td>9</td>
                            <td>5</td>
                            <td>2</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Qoraqalpoq tabiiy fanlar ilmiy-tadqiqot instituti</td>
                            <td>oʻtdi</td>
                            <td>-</td>
                            <td>-</td>
                            <td>4</td>
                            <td>-</td>
                            <td>-</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Andijon davlat tibbiyot instituti</td>
                            <td>oʻtdi</td>
                            <td>5</td>
                            <td>24</td>
                            <td>17</td>
                            <td>1</td>
                            <td>3</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Andijon davlat universiteti</td>
                            <td>oʻtdi</td>
                            <td>25</td>
                            <td>18</td>
                            <td>16</td>
                            <td>6</td>
                            <td>3</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Buxoro muhandislik-texnologiya instituti</td>
                            <td>oʻtdi</td>
                            <td>18</td>
                            <td>9</td>
                            <td>-</td>
                            <td>4</td>
                            <td>0</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Toshkent toʻqimachilik va yengil sanoat instituti</td>
                            <td>oʻtdi</td>
                            <td>5</td>
                            <td>-</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Toshkent davlat oʻzbek tili va adabiyoti universiteti</td>
                            <td>oʻtdi</td>
                            <td>3</td>
                            <td>6</td>
                            <td>8</td>
                            <td>-</td>
                            <td>2</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Toshkent davlat yuridik universiteti</td>
                            <td>oʻtdi</td>
                            <td>-</td>
                            <td>2</td>
                            <td>5</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Epidemiologiya, mikrobiologiya va yuqumli kasalliklar ilmiy tekshirish instituti</td>
                            <td>oʻtdi</td>
                            <td>-</td>
                            <td>-</td>
                            <td>4</td>
                            <td>-</td>
                            <td>-</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Toshkent tibbiyot akademiyasi</td>
                            <td>oʻtdi</td>
                            <td>-</td>
                            <td>5</td>
                            <td>2</td>
                            <td>-</td>
                            <td>0</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Toshkent pediatriya tibbiyot instituti</td>
                            <td>oʻtdi</td>
                            <td>-</td>
                            <td>4</td>
                            <td>-</td>
                            <td>-</td>
                            <td>0</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Oʻzbekiston davlat sanʼat va madaniyat instituti</td>
                            <td>oʻtdi</td>
                            <td>18</td>
                            <td>15</td>
                            <td>4</td>
                            <td>4</td>
                            <td>0</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Oʻzbekiston davlat sanʼat va madaniyat instituti Nukus filiali</td>
                            <td>oʻtdi</td>
                            <td>5</td>
                            <td>-</td>
                            <td>-</td>
                            <td>1</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Toshkentdagi Singapur menejmentni rivojlantirish instituti</td>
                            <td>oʻtdi</td>
                            <td>12</td>
                            <td>5</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>154</td>
                            <td>126</td>
                            <td>75</td>
                            <td>25</td>
                            <td>15</td>
                            <td>18</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endpush
