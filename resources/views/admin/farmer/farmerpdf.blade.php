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
                        पंजीयन क्रमांक __________
                    </td>
                    <td>
                        दिनांक ..../..../......
                    </td>
                </tr>
                <tr>
                    <td>
                        किसान का नाम :- ..............
                    </td>
                    
                    <td>
                        <div class="photo-box">
                        फ़ोटो
                          
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        आधार नं. :- ..........
                    </td>
                </tr>
                <tr>
                    समग्र परिवार आई डी :- __________
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
                        महिला ....
                    </td>
                    <td>
                        पुरुष ....
                    </td>
                </tr>
                <tr>
                    <td>
                        ग्राम :- ..........
                    </td>
                    <td>
                        पोस्ट :- ..........
                    </td>
                    <td>
                        तहसील :- .........
                    </td>
                </tr>
                <tr>
                    <td>
                        जिला :- ..........
                    </td>
                    <td>
                        राज्य :- .........
                    </td>
                    <td>
                        पिन कोड :- ........
                    </td>
                </tr>
                <tr>
                    <td>
                        <div>
                         कार्य का चयन करें :<br>
                                    <input type="checkbox" id="gehu" name="work[]" value="gehu">
                                    <label for="gehu" class="d-inline-block mr-3">गेहू कटाई</label>
                                    <input type="checkbox" id="soyabin" name="work[]" value="soyabin">
                                    <label for="soyabin" class="d-inline-block mr-3">सोयाबीन कटाई</label>
                                    <input type="checkbox" id="pyaj" name="work[]" value="pyaj">
                                    <label for="pyaj" class="d-inline-block mr-3">प्याज</label>
                                    <input type="checkbox" id="lahsun" name="work[]" value="lahsun">
                                    <label for="lahsun" class="d-inline-block mr-3">लहसुन</label>
                                    <input type="checkbox" id="bagbani" name="work[]" value="bagbani">
                                    <label for="bagbani" class="d-inline-block mr-3">बागबानी</label>
                                    <input type="checkbox" id="sichai" name="work[]" value="sichai">
                                    <label for="sichai" class="d-inline-block mr-3">सिंचाई</label>
                                    <input type="checkbox" id="tractor" name="work[]" value="tractor">
                                    <label for="tractor" class="d-inline-block mr-3">ट्रैक्टर ड्राइवर</label>
                                    <input type="text" id="any" name="ex_work" placeholder="अन्य कार्य" class="any-work">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody>
                <tr>
                    <td>
                        कार्य का नाम :- ...........
                    </td>
                </tr>
                <tr>
                    <td>
                        मजदूरों की संख्या :- ............
                    </td>
                </tr>
                <tr>
                    <td>
                        जमीन (बीघा में) :- ...........
                    </td>
                </tr>
                <tr>
                    <td>
                        कार्य अवधि :- ..........
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
                <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
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
                    <td>बैंक का नाम :-  </td>
                    <td>आई एफ एस सी कोड :- </td>
                </tr>
                <tr>
                    <td>अकाउंट नंबर :-</td>
                    <td>शाखा :-</td>
                </tr>
                <tr>
                    <td colspan="2">पता :-</td>
                </tr>
                <tr>
                    <td colspan="2">पिन कार्ड नंबर :-</td>
                </tr>
                <tr>
                    <td colspan="2">खाताधारक नाम :-</td>
                </tr>
            </tbody>

        </table>
    </div>
    <button id="printBtn" onclick="window.print()">Print PDF</button>
</body>
</html>