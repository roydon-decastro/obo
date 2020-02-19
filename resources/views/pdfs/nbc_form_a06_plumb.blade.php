<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>{{ $title }}</title>
 <style>
.page-break {
    page-break-after: always;
}
.gitna {
    text-align: center;
}
.bulit {
    list-style-type: none;
}

.liit {
    font-size: 0.8em;
}



.th {
    font-size: .5em;
}


td {
    font-size: .7em;
}

.borderme { 
    border:1px solid;
    font-size: .7em;
    padding-left: 10px;

}


</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="gitna">
        <ul class="bulit">
            <li class="liit">Republic of the Philippines</li>
            <li class="liit">Province of Oriental Mindoro</li>
            <li class="liit">CITY OF CALAPAN</li>
            <li class="liit"> <strong> TANGGAPAN NG PINUNONG PANGGUSALI</strong></li>
            <li class="liit">Office of the Building Official</li>
            <li class="liit" style="color:white">a</li>
            <li class="liit" style="color:white">a</li>
            <li><h5></strong>PLUMBING PERMIT</strong></h5></li>
        </ul>
    </div>
    <table width="80%">
        <tr>
            <td  style="font-size: .5em; width:10%">APPLICATION NO.</td>
            <td  style="font-size: .5em; width:15%">{{ isset($application_id) ? $application_id  :  '' }}</td>
            <td  style="font-size: .5em; width:5%">MP NO.</td>
            <td  style="font-size: .5em; width:20%"></td>
            <td  style="font-size: .5em; width:15%">BUILDING PERMIT NO</td>
            <td  style="font-size: .5em; width:10%"></td>
        </tr>
    </table>

    <p style="position:relative; top:10px;" class="th"> <strong> BOX 1 (TO BE ACCOMPLISED BY THE OWNER/APPLICANT)</strong></p>
    <table width="100%" style="border-collapse: collapse; float:left;  border: 1px solid ">
        <tr >
            <td class="th" style="width: 20%; padding-left:5%">OWNER/APPLICANT</td>
            <td class="th" style="width: 20%">LAST NAME</td>
            <td class="th" style="width: 20%">FIRST NAME</td>
            <td class="th" style="width: 20%">M.I.</td>
            <td class="th" style="width: 15%; border-left: 1px solid; padding-left:5%">TIN</th>
            <td style="width: 5%;"></td>
        </tr>
        <tr style="">
            <td style="border-bottom: 1px solid; width: 20%"> </td>
            <td style="border-bottom: 1px solid; width: 20%">{{ isset($fname) ? ucwords($fname) : '' }}</td>
            <td style="border-bottom: 1px solid; width: 25%">{{ isset($lname) ? ucwords($lname) : '' }}</td>
            <td style="border-bottom: 1px solid; width: 15%">{{ isset($mi_name) ? ucwords($mi_name) : '' }}</td>
            <td style="border-bottom: 1px solid; width: 15%; border-left: 1px solid; padding-left:5%">{{ isset($tin) ? $tin : '' }}</td>
            <td style="width: 5%; border-bottom: 1px solid;"></td>
        </tr>
        <!--  -->
        <tr>
            <td  class="th"  style="width: 40%; padding-left:5%">FOR CONSTRUCTION OWNED </td>
            <td  class="th"  style="width: 30%; border-left: 1px solid; padding-left:5%">FORM OF OWNERSHIP</td>
            <td  class="th"  style="width: 10%"></td>
            <td  class="th"  style="width: 10%"></td>
            <td  class="th"  style="width: 5%;"></td>
            <td style="width: 5%;"></td>
        </tr>
        <tr>
            <td class="th"  style="border-bottom: 1px solid; width: 40%; padding-left:5%">BY AN ENTERPRISE </td>
            <td style="border-bottom: 1px solid; width: 30%; border-left: 1px solid; padding-left:5%">{{ isset($ownerform) ? ucwords($ownerform) : '' }}</td>
            <td style="border-bottom: 1px solid; width: 10%"></td>
            <td style="border-bottom: 1px solid; width: 10%"></td>
            <td style="border-bottom: 1px solid; width: 5%;"></td>
            <td style="width: 5%; border-bottom: 1px solid;"></td>
        </tr>
    </table>    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->

    <table width="100%" style="border-collapse: collapse; position:absolute; top:296px;  border-left: 1px solid;border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 10%; padding-left:5px">ADDRESS</td>
            <td class="th" style="width: 5%">NO.</td>
            <td class="th" style="width: 15%">STREET</td>
            <td class="th" style="width: 20%">BARANGAY</td>
            <td class="th" style="width: 20%; ">CITY/MUNICIPALITY</th>
            <td class="th"  style="width: 10%;">ZIP CODE</td>
            <td class="th"  style="width: 20%; border-left: 1px solid; padding-left:5%">TELEPHONE</td>
        </tr>
    </table>    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:309px;  border-left: 1px solid;border-right: 1px solid;border-bottom: 1px solid;  ">
        <tr >
            <td style="width: 10%; padding-left:5%"></td>
            <td style="width: 60%">{{ isset($address) ? ucwords($address) : '' }}</td>
            <td style="width: 10%;">{{ isset($zipcode) ? $zipcode : '' }}</td>
            <td style="width: 20%; border-left: 1px solid; padding-left:5%">{{ isset($telephone ) ? : '' }}</td>
        </tr>
    </table>    

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:327px;  border-left: 1px solid; border-right: 1px solid ">
        <tr>
            <td class="th" style="width: 20%; padding-left:5%">LOCATION OF CONSTRUCTION</td>
            <td class="th" style="width: 5%">LOT NO.</td>
            <td            style="width: 3%; border-bottom: 1px solid;">{{ isset($loc_lot) ? $loc_lot : '' }}</td>
            <td class="th" style="width: 5%;"></td>
            <td class="th" style="width: 5%">BLK. NO.</td>
            <td            style="width: 3%; border-bottom: 1px solid;">{{ isset($loc_blk) ? $loc_blk : '' }}</td>
            <td class="th" style="width: 5%;"></td>
            <td class="th" style="width: 5%">TCT. NO.</td>
            <td            style="width: 6%; border-bottom: 1px solid;">{{ isset($tct) ? $tct : '' }}</td>
            <td class="th" style="width: 2%;"></td>
            <td class="th" style="width: 8%">TAX DEC. NO.</td>
            <td            style="width: 6%; border-bottom: 1px solid;">{{ isset($taxdec) ? $taxdec : '' }}</td>
            <td class="th" style="width: 4%;"></td>

        </tr>
    
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:346px;  border-left: 1px solid; border-right: 1px solid; border-bottom: 1px solid ">
        <tr>
        <td class="th" style="width: 5%; padding-left:5px">STREET</td>
            <td            style="width: 10%; border-bottom: 1px solid;">{{ isset($loc_street) ? ucwords($loc_street) : '' }}</td>
            <td class="th" style="width: 1%;"></td>
            <td class="th" style="width: 5%">BARANGAY</td>
            <td            style="width: 15%; border-bottom: 1px solid;">{{ isset($barangay) ? $barangay : '' }}</td>
            <td class="th" style="width: 1%;"></td>
            <td class="th" style="width: 10%">CITY/MUNICIPALITY OF</td>
            <td            style="width: 10%; border-bottom: 1px solid;">Calapan</td>
            <td class="th" style="width: 2%;"></td>
        </tr>
    
    </table>

    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:366px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="padding-left:5px">SCOPE OF WORK</td>
        </tr>
    </table>
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:380px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px;">NEW CONTRUCTION</td>
            <td class="th" style="width: 30%; padding-left:5px">RENOVATION______________________</td>
            <td class="th" style="width: 40%; padding-left:5px">RAISING__________________________</td>
        </tr>
    </table>
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:394px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px">ERECTION       </td>
            <td class="th" style="width: 30%; padding-left:5px">CONVERSION______________________</td>
            <td class="th" style="width: 40%; padding-left:5px">DEMOLITIONI_______________________</td>
        </tr>
    </table>
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:408px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px">ADDITION       </td>
            <td class="th" style="width: 30%; padding-left:5px">REPAIR____________________________</td>
            <td class="th" style="width: 40%; padding-left:5px">ACCESSORY BUILDING/STRUCTURE______</td>
        </tr>
    </table>
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:422px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px">ALTERATION       </td>
            <td class="th" style="width: 30%; padding-left:5px">MOVING___________________________</td>
            <td class="th" style="width: 40%; padding-left:5px">OTHERS (Specify)______________________</td>
        </tr>
    </table>
    
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:436px;  border-left: 1px solid; border-right: 1px solid; border-bottom:1px solid">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px; color:white">A</td>
            <td class="th" style="width: 30%; padding-left:5px"></td>
            <td class="th" style="width: 40%; padding-left:5px"></td>
        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:458px;">
        <tr >
            <td class="th" style="width: 100%;"> <strong> BOX 2 (TO BE ACCOMPLISHED BY THE DESIGN PROFESSIONAL)</strong></td>
        </tr>
    </table>



    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:473px;  border-left: 1px solid; border-right: 1px solid; border-top:1px solid ">
        <tr >
            <td class="th" style="padding-left:5px">FIXTURES TO BE INSTALLED</td>
        </tr>
    </table>
    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:487px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 10%; padding-left:5px;">QTY</td>
            <td class="th" style="width: 10%;">NEW</td>
            <td class="th" style="width: 10%;">EXISTING</td>
            <td class="th" style="width: 20%;">KIND OF</td>
            <td class="th" style="width: 10%;">QTY</td>
            <td class="th" style="width: 10%;">NEW</td>
            <td class="th" style="width: 10%;">EXISTING</td>
            <td class="th" style="width: 20%;">KIND OF</td>
        </tr>
    </table>
    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:501px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 10%;"></td>
            <td class="th" style="width: 10%;">FIXTURES</td>
            <td class="th" style="width: 10%;">FIXTURES</td>
            <td class="th" style="width: 20%;">FIXTURES</td>
            <td class="th" style="width: 10%;"></td>
            <td class="th" style="width: 10%;">FIXTURES</td>
            <td class="th" style="width: 10%;">FIXTURES</td>
            <td class="th" style="width: 20%;">FIXTURES</td>
        </tr>
    </table>
    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:475px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 10%; padding-left:5px ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">WATER CLOSET</td>
            <td class="th" style="width: 10%; ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px"> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">BIDETTE</td>
        </tr>
    </table>

    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:489px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 10%; padding-left:5px ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">FLOOR DRAIN</td>
            <td class="th" style="width: 10%; ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px"> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">LAUNDRY TRAYS</td>
        </tr>
    </table>
    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:503px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 10%; padding-left:5px ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">LAVATORY</td>
            <td class="th" style="width: 10%; ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px"> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">DENTAL CUPSIDOR</td>
        </tr>
    </table>

    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:517px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 10%; padding-left:5px ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">KITCHEN SINK</td>
            <td class="th" style="width: 10%; ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px"> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">DRINKING FOUNTAIN</td>
        </tr>
    </table>  
    
        <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
        <table width="100%" style="border-collapse: collapse; position:absolute; top:531px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 10%; padding-left:5px ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">FAUCET</td>
            <td class="th" style="width: 10%; ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px"> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">BAR SINK</td>
        </tr>
    </table>  
    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:545px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 10%; padding-left:5px ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">SHOWER HEAD</td>
            <td class="th" style="width: 10%; ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px"> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">SODA FOUNTAIN SINK</td>
        </tr>
    </table>  

    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:559px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 10%; padding-left:5px ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">WATER METER</td>
            <td class="th" style="width: 10%; ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px"> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">LABORATORY SINK</td>
        </tr>
    </table>  

        <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
        <table width="100%" style="border-collapse: collapse; position:absolute; top:573px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 10%; padding-left:5px ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">GREASE TRAP</td>
            <td class="th" style="width: 10%; ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px"> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">STERILIZERS</td>
        </tr>
    </table>  
    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:587px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 10%; padding-left:5px ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">BATH TUB</td>
            <td class="th" style="width: 10%; ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px"> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">OTHERS (Specify)________</td>
        </tr>
    </table>  
    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:601px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 10%; padding-left:5px ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">SLOP SINK</td>
            <td class="th" style="width: 10%; ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px"> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; "></td>
        </tr>
    </table>  

    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:615px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 10%; padding-left:5px ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">URINAL</td>
            <td class="th" style="width: 10%; ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px"> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; "></td>
        </tr>
    </table>      

    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:629px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 10%; padding-left:5px ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">AIR-CONDITIONING UNIT</td>
            <td class="th" style="width: 10%; ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px"> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; "></td>
        </tr>
    </table>  
    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:643px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 10%; padding-left:5px ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">WATER TANK RESERVOIR</td>
            <td class="th" style="width: 10%; ">______</td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 10%; padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 2%;  padding-bottom:10px"> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; "></td>
        </tr>
    </table>  


    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:710px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 45%; padding-left:5px;">_____________________ TOTAL</td>

            <td class="th" style="width: 55%; padding-left:35px;">_____________________ TOTAL</td>
        </tr>
    </table>  



    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:684px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >

            <td class="th" style="width: 2%;  padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">WATER DISTRIBUTION SYSTEM</td>
            <td class="th" style="width: 5%; "></td>
            <td class="th" style="width: 2%;  padding-bottom:10px "> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">SEWAGE SYSTEM</td>
            <td class="th" style="width: 5%; "></td>
            <td class="th" style="width: 2%;  padding-bottom:10px"> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">SEPTIC TANK</td>
            <td class="th" style="width: 5%; "></td>
            <td class="th" style="width: 2%;  padding-bottom:10px"> <input type="checkbox"> </td>
            <td class="th" style="width: 18%; ">STORM DRAINAGE SYSTEM</td>            
        </tr>
    </table>  

    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:778px;  border-left: 1px solid; border-right: 1px solid; border-bottom:1px solid">
        <tr >
        <td class="th" style="width: 100%; padding-left:25px;">PREPARED BY ______________________________________________________________________________________________________________________________________</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:792px;">
        <tr >
            <td class="th" style="width: 50%;"> <strong>BOX 3</strong> </td>
            <td class="th" style="width: 50%;"> <strong>BOX 4</strong> </td>
        </tr>
    </table>  


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:806px; border-left:1px solid; border-right:1px solid; border-top:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid">DESIGN PROFESSIONALS, PLANS AND SPECIFICATIONS</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-left: 1px solid">SUPERVISOR/IN-CHARGE OF MECHANICAL WORKS</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:820px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; color:white">A</td>
        </tr>
    </table>

    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:834px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 30%; padding-left: 15px; border-left: 1px solid; "></td>
            <td class="th" style="width: 20%; padding-left: 15px; color:white ">a</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:848px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; color:white">A</td>
        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:862px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px;  border-bottom: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px;  border-bottom: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:876px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center">MASTER PLUMBER</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center;  font-size:.4em">MASTER PLUMBER</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:890px; border-left:1px solid; border-right:1px solid; border-bottom:1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center; font-size:.4em">(Signed & Sealed Over Printed Name)</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center">(Signed & Sealed Over Printed Name)</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
        </tr>
    </table>



    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:904px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid">Address</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-left: 1px solid">Address</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:918px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">PRC No.</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Validity</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">PRC No.</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Validity</td>

        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:932px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">PTR No.</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Date Issued</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">PTR No.</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Date Issued</td>

        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:946px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Issued at</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">TIN</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Issued at</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">TIN</td>

        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:960px;">
        <tr >
            <td class="th" style="width: 50%;"> <strong> BOX 5</strong></td>
            <td class="th" style="width: 50%;"> <strong> BOX 6</strong></td>
        </tr>
    </table>   

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:974px; border-left:1px solid; border-right:1px solid; border-top:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; ">BUILDING OWNER</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid">WITH MY CONSENT: LOT OWNER</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:988px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; color:white">A</td>
        </tr>
    </table>

    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1002px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 30%; padding-left: 15px; border-left: 1px solid; "></td>
            <td class="th" style="width: 20%; padding-left: 15px; border-left: 1px solid; color:white ">A</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1016px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; color:white">A</td>
        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1030px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px;  border-bottom: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px;  border-bottom: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1044px; border-left:1px solid; border-right:1px solid; border-bottom:1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center">(Signed & Sealed Over Printed Name)</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center;  font-size:.4em">(Signed & Sealed Over Printed Name)</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1058px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid">Address</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-left: 1px solid">Address</td>
        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1072px; border-left:1px solid; border-right:1px solid; border-bottom:1px solid">
        <tr>
            <td class="th" style="width: 15%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">CTC No.</td>
            <td class="th" style="width: 20%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Date Issued</td>
            <td class="th" style="width: 15%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Place Issued</td>
            <td class="th" style="width: 15%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">CTC No.</td>
            <td class="th" style="width: 20%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Date Issued</td>
            <td class="th" style="width: 15%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Place Issued</td>
        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1086px;">
        <tr >
            <td class="th" style="width: 100%; padding-left: 5px;">Original-Applicants Copy, Pink-Assessor's Copy, Yellow-NCSO Copy, Blue-Building Officials Copy, Green-Acid Copy</td>
        </tr>
    </table>


  <!-- ====================================================================================================================================== -->


  <div>
     <!-- 0 -->
  </div>

  <div class="page-break"></div>

  <input type="checkbox" style="position:absolute; top:-200px; left:25px;">
  <input type="checkbox" style="position:absolute; top:-200px; left:350px;">
  <input type="checkbox" style="position:absolute; top:-185px; left:25px;">
  <input type="checkbox" style="position:absolute; top:-185px; left:350px;">

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="90%" style="border-collapse: collapse; margin-top:10px;">
        <tr >
            <td class="th" style="width: 100%;"> <strong> BOX 7 (TO BE ACCOMPLISHED BY THE PROCESSING AND EVALUATION DIVISION)</strong></td>
        </tr>
    </table>

    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; border-top: 1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid">Received By:</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-left: 1px solid">Date</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;">
        <tr>
            <td class="th" style="width: 100%; text-align:center ">FIVE(5) SETS OF PLUMBING DOCUMENTS</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;">
        <tr>
            <td class="th" style="width: 30%; padding-left: 5px; color:white">INVISIBLE</td>
            <td class="th" style="width: 40%; padding-left: 5px;"></td>
            <td class="th" style="width: 30%; padding-left: 5px;"></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;">
        <tr>
            <td class="th" style="width: 30%; padding-left: 5px; color:white">INVISIBLE</td>
            <td class="th" style="width: 40%; padding-left: 5px;"></td>
            <td class="th" style="width: 30%; padding-left: 5px;"></td>
        </tr>
    </table>
        <!-- checkbox -->
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;">
        <tr>

            <td class="th" style="width: 5%; padding-left: 5px;  "></td>
            <td class="th" style="width: 45%; padding-left: 5px;">PLUMBING PLANS & SPECIFICATIONS</td>
            <td class="th" style="width: 50%; padding-left: 5px;  ">COST ESTIMATES</td>
        </tr>
    </table>



    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;">
        <tr>

            <td class="th" style="width: 5%; padding-left: 5px;  "></td>
            <td class="th" style="width: 45%; padding-left: 5px;">BILL OF MATERIALS</td>
            <td class="th" style="width: 50%; padding-left: 5px;  ">OTHERS (Specify) ____________________</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;">
        <tr>
            <td class="th" style="width: 30%; padding-left: 5px; color:white">INVISIBLE</td>
            <td class="th" style="width: 40%; padding-left: 5px;"></td>
            <td class="th" style="width: 30%; padding-left: 5px;"></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;">
        <tr>
            <td class="th" style="width: 30%; padding-left: 5px; color:white">INVISIBLE</td>
            <td class="th" style="width: 40%; padding-left: 5px;"></td>
            <td class="th" style="width: 30%; padding-left: 5px;"></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; border-bottom: 1px solid">
        <tr>
            <td class="th" style="width: 30%; padding-left: 5px; color:white">INVISIBLE</td>
            <td class="th" style="width: 40%; padding-left: 5px;"></td>
            <td class="th" style="width: 30%; padding-left: 5px;"></td>
        </tr>
    </table>
   <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="90%" style="border-collapse: collapse; margin-top:10px;">
        <tr >
            <td class="th" style="width: 100%;"> <strong> BOX 8</strong></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; border-top:1px solid; border-bottom: 1px solid;">
        <tr>
            <td class="th" style="width: 100%; text-align:center"> <strong> PROGRESS FLOW </strong></td>

        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 40%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-bottom:1px solid"></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid; ">IN</td>
            <td class="th" style="width: 10%; padding-left: 5px; border-bottom:1px solid"></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;">OUT</td>
            <td class="th" style="width: 20%; text-align:center ">PROCESSED BY</td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 40%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;"></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid; ">DATE</td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid; ">TIME</td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;">DATE</td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;">TIME</td>
            <td class="th" style="width: 20%; padding-left: 5px; "></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 40%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;">RECEIVING AND RECORDING</td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid; "></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid; "></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;"></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;"></td>
            <td class="th" style="width: 20%; padding-left: 5px; border-bottom: 1px solid"></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 40%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;">PLUMBING</td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid; "></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid; "></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;"></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;"></td>
            <td class="th" style="width: 20%; padding-left: 5px; border-bottom: 1px solid"></td>
        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 40%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;">OTHERS (Specify)</td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid; "></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid; "></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;"></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;"></td>
            <td class="th" style="width: 20%; padding-left: 5px; border-bottom: 1px solid "></td>
        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="90%" style="border-collapse: collapse; margin-top:10px;">
        <tr >
            <td class="th" style="width: 100%;"> <strong> BOX 9 (TO BE ACCOMPLISHED BY THE ELECTRICAL SECTION OF THE OFFICE OF THE BUILDING OFFICIAL</strong></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; border-top:1px solid; border-bottom:1px solid">
        <tr>
            <td class="th" style="width: 45%; padding-left: 5px;"></td>
            <td class="th" style="width: 10%; padding-left: 5px; ">ASSESSED FEES</td>
            <td class="th" style="width: 45%; padding-left: 5px; "></td>
        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 20%; border-bottom: 1px solid; text-align:center"></td>
            <td class="th" style="width: 15%; border-left:1px solid; border-bottom: 1px solid; text-align:center ">AMOUNT DUE</td>
            <td class="th" style="width: 15%; border-left:1px solid; border-bottom: 1px solid; text-align:center ">ASSESSED BY</td>
            <td class="th" style="width: 15%; border-left:1px solid; border-bottom: 1px solid; text-align:center ">OR NUMBER</td>
            <td class="th" style="width: 15%; border-left:1px solid; border-bottom: 1px solid; text-align:center ">DATE PAID</td>
            <td class="th" style="width: 20%; border-left:1px solid; border-bottom: 1px solid; text-align:center ">REVIEWED BY</td>
        </tr>
    </table>


    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 20%; border-bottom: 1px solid; ">PLUMBING</td>
            <td class="th" style="width: 15%; border-left:1px solid; border-bottom: 1px solid;  "></td>
            <td class="th" style="width: 15%; border-left:1px solid; border-bottom: 1px solid;  "></td>
            <td class="th" style="width: 15%; border-left:1px solid; border-bottom: 1px solid;  "></td>
            <td class="th" style="width: 15%; border-left:1px solid; border-bottom: 1px solid;  "></td>
            <td class="th" style="width: 20%; border-left:1px solid;  "></td>
        </tr>
    </table>


    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;">
        <tr>
            <td class="th" style="width: 20%; border-bottom: 1px solid; ">OTHERS (Specify)</td>
            <td class="th" style="width: 15%; border-left:1px solid; border-bottom: 1px solid;  "></td>
            <td class="th" style="width: 15%; border-left:1px solid; border-bottom: 1px solid;  "></td>
            <td class="th" style="width: 15%; border-left:1px solid; border-bottom: 1px solid;  "></td>
            <td class="th" style="width: 15%; border-left:1px solid; border-bottom: 1px solid;  "></td>
            <td class="th" style="width: 20%; border-left:1px solid;  "></td>
        </tr>
    </table>

    
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 20%; border-bottom: 1px solid; "></td>
            <td class="th" style="width: 15%; border-left:1px solid; border-bottom: 1px solid; ">.</td>
            <td class="th" style="width: 15%; border-left:1px solid; border-bottom: 1px solid;  "></td>
            <td class="th" style="width: 15%; border-left:1px solid; border-bottom: 1px solid;  "></td>
            <td class="th" style="width: 15%; border-left:1px solid; border-bottom: 1px solid;  "></td>
            <td class="th" style="width: 20%; border-left:1px solid; border-bottom: 1px solid; font-size:.3em; text-align:center">CHIEF PROCESSING & EVALUATION DIVISION</td>
        </tr>
    </table>




    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="90%" style="border-collapse: collapse; margin-top:10px;">
        <tr >
            <td class="th" style="width: 100%;"> <strong> BOX 10</strong></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;  border-top:1px solid">
        <tr>
            <td class="th" style="width: 30%; padding-left: 5px; color:white">INVISIBLE LRT-border</td>
            <td class="th" style="width: 40%; padding-left: 5px;"></td>
            <td class="th" style="width: 30%; padding-left: 5px;"></td>
        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>

            <td class="th" style="width: 100%; padding-left: 20px; border-right: 1px solid;  "> <strong> ACTION TAKEN:</strong></td>
        </tr>
    </table>

    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 30%; padding-left: 5px; color:white">INVISIBLE LR-border</td>
            <td class="th" style="width: 40%; padding-left: 5px;"></td>
            <td class="th" style="width: 30%; padding-left: 5px;"></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>

            <td class="th" style="width: 100%; padding-left: 20px; border-right: 1px solid;  "> <strong> PERMIT IS HEREBY ISSUED SUBJECT TO THE FOLLOWING:</strong></td>
        </tr>
    </table>

        
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;">
        <tr>
            <td class="th" style="width: 30%; padding-left: 5px; color:white">INVISIBLE LR-border</td>
            <td class="th" style="width: 40%; padding-left: 5px;"></td>
            <td class="th" style="width: 30%; padding-left: 5px;"></td>
        </tr>
    </table>

    
    <div style="border-left:1px solid; border-right:1px solid">
        <ol>
            <li class="th">That the proposed plumbing works shall be in acordance with the plumbing plans filed with this office and in conformity with the revised Plumbing Code of the Philippines, the Natioinal Building Code and its IRR.</li>
            <li class="th">That prior to any commencement of plumbing works, a duly accomplished prescribed "Notice of Construction" shall be submitted to the Office of the Building Official.</li>
            <li class="th">That upon completion of the plumbing works, the license supervisor/in-charge shall submit the entry to the logbook duly signed and sealed to the building official including as-built plans and other documents and shall also accomplished the Certificate of Completion stating that the plubing works of the building conform to the provision of the Revised Plumbing Code, the National Building Code and it's IRR.</li>
            <li class="th">That this permit is null and void unless accompanied by the building permit.</li>
        </ol>
        <p></p>
        <p style="margin-left:20px; font-size:.5em"> <strong> PERMIT ISSUED BY: </strong></p>
    </div>

        <!--------------------------------------------- TABLE  -------------------------------------------------------->
        <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; "></td>
            <td class="th" style="width: 50%; padding-left: 5px;  color:white">A</td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; "></td>
            <td class="th" style="width: 50%; padding-left: 5px;  color:white">A</td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; "></td>
            <td class="th" style="width: 50%; padding-left: 5px;  color:white">A</td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 25%; text-align:center; color:white; "></td>
            <td class="th" style="width: 50%; text-align:center; border-bottom:1px solid "><h2><b>ENGR. BENJAMIN L. ACEDERA</b></h2></td>
            <td class="th" style="width: 25%; text-align:center "></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 30%; text-align:center; color:white; "></td>
            <td class="th" style="width: 40%; text-align:center; "><h1><i>Building Official</i></h1></td>
            <td class="th" style="width: 30%; text-align:center "></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 30%; text-align:center; color:white; "></td>
            <td class="th" style="width: 40%; text-align:center; "><h3>(Signature Over Printed Name)</h3></td>
            <td class="th" style="width: 30%; text-align:center "></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 30%; text-align:center; color:white; "></td>
            <td class="th" style="width: 40%; text-align:center; "><h3>Date _________________</h3></td>
            <td class="th" style="width: 30%; text-align:center "></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 30%; padding-left: 5px; color:white">INVISIBLE LR-border</td>
            <td class="th" style="width: 40%; padding-left: 5px;"></td>
            <td class="th" style="width: 30%; padding-left: 5px;"></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 30%; padding-left: 5px; color:white">INVISIBLE LR-border</td>
            <td class="th" style="width: 40%; padding-left: 5px;"></td>
            <td class="th" style="width: 30%; padding-left: 5px;"></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 30%; padding-left: 5px; color:white">INVISIBLE LR-border</td>
            <td class="th" style="width: 40%; padding-left: 5px;"></td>
            <td class="th" style="width: 30%; padding-left: 5px;"></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; border-bottom:1px solid ">
        <tr>
            <td class="th" style="width: 30%; padding-left: 5px; color:white">INVISIBLE LRB-border</td>
            <td class="th" style="width: 40%; padding-left: 5px;"></td>
            <td class="th" style="width: 30%; padding-left: 5px;"></td>
        </tr>
    </table>









</body>
</body>
</html>