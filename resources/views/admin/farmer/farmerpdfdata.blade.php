<!DOCTYPE html>
<html lang="">
<head>
  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <style type="text/css">
 @media print {
    #printBtn {
        display: none;
    }
}


body {
    font-family: 'Noto Sans', sans-serif;
}
</style>
</head>

<body>
    <div class="container">
        <table width="100%" >
            <tbody>
                <tr>
                    <td colspan="2">
                        <h2>किसान पंजीयन</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        पंजीयन क्रमांक: {{$labour->farmer_id}}
                    </td>
                    <td>
                        दिनांक: {{$labour->date}}
                    </td>
                </tr>
                <tr>
                    <td>
                        किसान का नाम: {{$labour->farmer_name}}
                    </td>
                    
                    <td>
                        <div class="photo-box">
                       <img src="{{url('/')}}/image/image/<?php echo $labour->image; ?>" width="80px" height="80px"/>
                          
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        आधार नं.: {{$labour->aadhar_no}}
                    </td>
                </tr>
                <tr>
                    समग्र परिवार आई डी : {{$labour->samagr}}
                </tr>
            </tbody>
        </table>
        <table width="100%">
            <tbody>
                <tr>
                    <td>
                        लिंग :-
                    </td>
                    <td>
                    {{$labour->gender}}
                    </td>
                  
                </tr>
                <tr>
                    <td>
                        ग्राम : {{$labour->village}}
                    </td>
                    <td>
                        पोस्ट : {{$labour->posto}}
                    </td>
                    <td>
                        तहसील : {{$labour->tehsil}}
                    </td>
                </tr>
                <tr>
                    <td>
                        जिला : {{$labour->district}}
                    </td>
                    <td>
                        राज्य : {{$labour->state}}
                    </td>
                    <td>
                        पिन कोड : {{$labour->pincode}}
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                            <b>कार्य -</b> 
                            <?php if($labour->work != null) {
																											foreach($labour->work as $w) { ?>
                            <span> <?php echo $w; ?></span>
                            <?php } 
                            } ?>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <td>
                        मजदूरों की संख्या : {{$labour->labour_no}}
                    </td>
                </tr>
                <tr>
                    <td>
                        जमीन (बीघा में) :{{$labour->land}}
                    </td>
                </tr>
                <tr>
                    <td>
                        कार्य अवधि :{{$labour->work_time}}
                    </td>
                </tr>
            </tbody>
        </table>

        <table width="100%" border="1px">
            <div>
                शैक्षणिक योग्यता
            </div>
            <thead>
                <tr>
                    <th> क्रमांक</th>
                    <th>कक्षा</th>
                    <th>उत्तीर्ण वर्ष</th>
                    <th> प्राप्तांक </th>
                    <th> पूर्णांक </th>
                    <th>प्रतिशत</th>
                </tr>
                <?php if($labour->class != null) {
										$count = 1;		
        	foreach ($labour->class as $c) {
        

		?>	
                 <td><?php echo $count; ?></td>
         <td><input type="text" name="class[]" id="" value="<?php echo $c['class']; ?>"></td>
         <td><input type="text" name="year[]" id="" value="<?php echo $c['year']; ?>"></td>
         <td><input type="text" name="marks[]" id="" value="<?php echo $c['marks']; ?>"></td>
         <td><input type="text" name="max[]" id="" value="<?php echo $c['max']; ?>"></td>
         <td><input type="text" name="percentage[]" id="" value="<?php echo $c['percentage']; ?>"></td>
         
        </tr>
        <?php	
    $count++;																											}
																												} ?>	
               
            </thead>
        </table>
        <table width="100%" border="1px">
            <thead>
                <tr>
                    <th colspan="2">बैंकिंग जानकारी </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>बैंक का नाम :{{$labour->bank_name}}  </td>
                    <td>आई एफ एस सी कोड :{{$labour->ifsc}}</td>
                </tr>
                <tr>
                    <td>अकाउंट नंबर :{{$labour->acc_no}}</td>
                    <td>शाखा :{{$labour->branch}}</td>
                </tr>
                <tr>
                    <td colspan="2">पता :{{$labour->bank_add}}</td>
                </tr>
                <tr>
                    <td colspan="2">पिन कार्ड नंबर :{{$labour->pan}}</td>
                </tr>
                <tr>
                    <td colspan="2">खाताधारक नाम :{{$labour->acc_holder}}</td>
                </tr>
            </tbody>

        </table>
    </div>
    <button id="printBtn" onclick="window.print()">Print PDF</button>
</body>
</html>