{{--{{dd('')}}--}}
    <!DOCTYPE html>
    <html >

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" />

    <title> {{$title??''}} </title>
    <style>
        * { font-family: DejaVu Sans, sans-serif , arial , tahoma !important; }

        .report-main-container {
            -webkit-print-color-adjust: exact !important;
            background: rgb(2,0,36);
            background: linear-gradient(0deg, rgb(207, 162, 166) 0%, rgb(187, 212, 186) 46%);
            background-opacity:0.5;
            background-size: 100%;

        }
        table{
            width:100% !important;
            text-align:center !important;
        }
        .main-title{
            font-size: 46px;
            color: #be3838;
            font-weight:bolder;
            text-align:center;
        }

        table:nth-child(1) > tbody > tr > th > img,.person-image {
            width: 100px !important;
            height: 100px !important;
        }
        table > thead > tr > th,table > tbody > tr > td{
            border: 2px solid rgb(0, 0, 0) !important;
        }
        /*table:nth-child(2){*/

        /*    page-break-after: always;*/

        /*}*/

        .watermark-image{
            position: absolute !important;
            opacity: .3 !important;
            top:40% !important;
            left:25% !important;
        }

        body:before{
            background-repeat:repeat;
            background-image: url({{$small_watermark}});
            content: "";
            background-size: 50px !important;
            position: absolute;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
            opacity: 0.2;
        }

    </style>

</head>

<body  >
<div class="container-fluid report-main-container">
    <div class="container-fluid report-container">
        <div class="container report-body">
            <table>
                <tbody>
                <tr>
                    <th colspan="2"><img class="person-image" src="{{$left_image}}"> </th>
                    <th colspan="4" class="main-title">{{$main_title}} </th>
                    <th colspan="2"><img class="person-image" src="{{$right_image}}"> </th>
                </tr>
                </tbody>
            </table>
            <div class="watermark-image " >
                <img src="{{$center_watermark}}" width="400" height="400" alt="">
            </div>
            <table class="main-table">
                <thead>

                <tr class="second-table-header">

                    <th width="120px">رابط نمبر  </th>
                    <th width="290px">يتم  </th>
                    <th width="10px">خندان نمبر  </th>
                    <th width="20px">شناختي كاره </th>
                    <th width="20px">صنف </th>
                    <th width="50px"> عمر </th>
                    <th width="120px">تام </th>
                    <th width="50px">سيريل نمبر </th>
                </tr>
                </thead>

                <tbody>
                @for($i=306;$i < 321; $i++)
                    <tr>
                        <td class="p-2"> 0317 4050 123 0317 4050 123 0317 4050 123 </td>
                        <td> سال مكان نمبر 21 - كلي نمبر 24 - محله احامله رحيم يخشي بزاني روك كزهي شابوه ، لابور  </td>
                        <td> 276 </td>
                        <td> 33102-7346824-8 </td>
                        <td> عورت  </td>
                        <td> 22 </td>
                        <td> اسوة دور زوجه مزمل نذير </td>
                        <td>{{$i}}</td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
