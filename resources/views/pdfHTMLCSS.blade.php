    <!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$data['title']??''}} </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" />
{{--    <link rel="stylesheet" href="{{asset('css/pdf.css')}}">--}}



    {{--    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">--}}

    <style >
        *{
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;

        }
        /** {*/
        /*    !*font-family: "Times New Roman";*!*/
        /*    font-family: DejaVu Sans, sans-serif , arial , tahoma !important;*/

        /*    font-weight: bolder !important;*/
        /*}*/
            /*font-family: DejaVu Sans, sans-serif , arial , tahoma !important; */
        /*}*/

        /*@import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;500;900&family=Poppins:wght@300;400;500;600;700;800&family=Roboto:wght@300;400;500;700;900&family=Saira:wght@300;400;500;600;700;800;900&display=swap');*/

        /*.report-main-container {*/
        /*    -webkit-print-color-adjust: exact !important;*/
        /*    background: rgb(2,0,36);*/
        /*    background: linear-gradient(0deg, rgb(207, 162, 166) 0%, rgb(187, 212, 186) 46%);*/
        /*    background-opacity:0.5;*/
        /*    background-size: 100%;*/

        /*}*/
        table{
            width:100% !important;
            text-align:center !important;
        }
        table:nth-child(1){
            /*page-break-after: always !important;*/
        }
        .main-title{
            font-size: 46px;
            color: #be3838;
            font-weight:bolder;
            text-align:center;
        }
        table:nth-child(1) > tbody > tr > th >img{
            width: 100px !important;
            height: 100px !important;
        }
        table > thead > tr > th,table > tbody > tr > td{
            border: 2px solid rgb(0, 0, 0) !important;
        }

        .watermark-image{
            /*position: absolute !important;*/
            opacity: .3 !important;
            top:40% !important;
            left:35% !important;
            position:absolute;
            z-index:-1;
            display:block;
            /*top: 50%;*/
            /*left: 50%;*/
            margin-top: -50px;
            margin-left: -50px;
        }
        body {
            min-height: 300vh;
            position: relative;
            margin: 0;
        }
        body:before {
            content: "";
            position: absolute;
            z-index: 9999;
            inset: 0;
            background:
                url('data:image/svg+xml;utf8,<svg style="transform:rotate(0deg)" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 60 120"><text x="0" y="25" fill="gray"> NA-120 WaterMark </text></svg>')
                0 0/100% 100vh;
        }
{{--                background-repeat:no-repeat;--}}
{{--background-image: url({{$data['small_watermark']}});--}}
{{--    background-size: 400px !important;--}}
{{--            background-position: center;--}}

}
        @media  print
        {
            body {
                min-height: 300vh;
                position: relative;
                margin: 0;
            }
            body:before {
                content: "";
                position: absolute;
                z-index: 9999;
                inset: 0;
                background:
                    url('data:image/svg+xml;utf8,<svg style="transform:rotate(0deg)" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 60 120"><text x="0" y="25" fill="gray"> NA-120 WaterMark </text></svg>')
                    0 0/100% 100vh;
            }
            @page  { margin: 4px; }
            @page{
        }

    </style>

</head>

{{--<body  onload="window.print()">--}}
<body  >
<div class="container-fluid report-main-container">
    <div class="container-fluid report-container">
        <div class="container report-body">
            <table>
                <thead>
                <tr>
                    <th colspan="2"><img class="person-image" src="{{$data['left_image']??''}}"> </th>
                    <th colspan="4" class="main-title">{{$data['main_title']??''}}</th>
                    <th colspan="2"><img class="person-image" src="{{$data['right_image']??''}}"> </th>
                </tr>
                </thead>
            </table>
{{--            <div class="watermark-image " >--}}
{{--                <img src="{{$data['center_watermark']}}" width="400" height="400" alt="">--}}
{{--            </div>--}}
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
                    <th width="50px">سيريل نمبر</th>
                </tr>
                </thead>
                <tbody>
                @for($i=306;$i < 341; $i++)
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
