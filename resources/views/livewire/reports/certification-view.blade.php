 <div class='certification'>  
            <div>
                <div class="cert-header">
                    <img style='width:100px;'   src="{{ asset('images/mdrrmo.webp') }}" alt="">
                    <div class='text-center titles' style="line-height:2px !important">
                        <p>Republic of the Philippines  <br>
                         Province of Oriental Mindoro <br>
                        MUNICIPALITY OF BONGABONG</p>
                    </div>
                    <img  style='width:100px !important;'   src="{{ asset('images/bagong-pilipinas.png') }}" alt="">
                </div>
                <p class='text-center mt--10' style='margin-top:-5px; word-spacing:5px; letter-spacing:0px;border-bottom:2px solid #000;padding-bottom:5px;'><strong>MUNICIPAL DISASTER RISK REDUCTION AND MANAGEMENT OFFICE</strong></p>

                <h3 style="padding: 30px 0;" class='text-center cert-title'>CERTICATION</h3>
            </div>
            <div style='max-width:8.22in; margin:0 auto;'>
                <p><strong>To whom it may concern,</strong></p>
                <p>{{ $content->body1 ?? 'This is to certify that' }}</p>
                <table class='table-cert'>
                    <tr>
                        <td>Name</td>
                        <td>: <strong>{{ Str::upper($ben->first_name .' '. substr($ben->middle_name,0,1). '. '. $ben->last_name .' '. $ben->ext_name) }}</strong></td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>: {{ $ben->address }}</td>
                    </tr>
                    <tr>
                        <td>Sex</td>
                        <td>: {{ $ben->sex == 'm'? "Male" : 'Female' }}</td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td>: {{ \Carbon\Carbon::parse($ben->birthdate)->format('F d, Y') }}</td>
                    </tr>
                    <tr>
                        <td>Representative</td>
                        <td>: {{ $ben->representative }}</td>
                    </tr>
                </table>
                <p style='margin-top:15px;'>This certification is issued on for {{ $content->purpose ?? ' ' }} Done this <span style='text-decoration:underline'>{{ \Carbon\Carbon::parse(now())->format('j')  }}<sup>{{ substr(\Carbon\Carbon::parse(now())->format('jS'),-2,2) }}</sup> </span> day of {{ \Carbon\Carbon::parse(now())->format('F, Y') }} in Bongabong, Oriental Mindoro</p>

                <div style='text-align:center; margin-top:60px;'>
                    <div>
                        <span style='font-weight:bold; border-bottom:1px solid #000'> &nbsp;&nbsp; MICHAEL L. FANOGA &nbsp;&nbsp;</span>                       
                        <br>
                        <span>LDRRMO III</span>
                    </div>                  
                    <div class="qrcode" style="margin:50px;">
                        {!! $qrcode !!}
                    </div>
                </div>
            </div>
       @push('script')
            <script>
                window.print() 
            </script>
       @endpush
 </div>