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

    <p style="position:relative; top:10px;" class="th">BOX 1 (TO BE ACCOMPLISED BY THE OWNER/APPLICANT)</p>
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
            <td style="border-bottom: 1px solid; width: 20%">{{ isset($fname) ? $fname : '' }}</td>
            <td style="border-bottom: 1px solid; width: 25%">{{ isset($lname) ? $lname : '' }}</td>
            <td style="border-bottom: 1px solid; width: 15%">{{ isset($mi_name) ? $mi_name : '' }}</td>
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
            <td style="border-bottom: 1px solid; width: 30%; border-left: 1px solid; padding-left:5%">{{ isset($ownerform ) ? $ownerform : '' }}</td>
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
            <td style="width: 60%">{{ isset($address) ? $address : '' }}</td>
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
            <td            style="width: 10%; border-bottom: 1px solid;">{{ isset($loc_street) ? $loc_street : '' }}</td>
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
            <td class="th" style="width: 100%;">BOX 2 (TO BE ACCOMPLISHED BY THE DESIGN PROFESSIONAL)</td>
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
    <table width="100%" style="border-collapse: collapse; position:absolute; top:529px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >

        </tr>
    </table>
    
    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:543px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
        </tr>
    </table>

    
    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:557px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
        </tr>
    </table>

    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:571px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >

        </tr>
    </table>

    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:585px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px; color:white">A</td>
            <td class="th" style="width: 30%; padding-left:5px"></td>
            <td class="th" style="width: 40%; padding-left:5px"></td>
        </tr>
    </table>

    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:599px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
        <td class="th" style="width: 100%; padding-left:25px;">PREPARED BY ______________________________________________________________________________________________________________________________________</td>
        </tr>
    </table>

    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:613px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px; color:white">A</td>
            <td class="th" style="width: 30%; padding-left:5px"></td>
            <td class="th" style="width: 40%; padding-left:5px"></td>
        </tr>
    </table>


    
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:627px;  border-left: 1px solid; border-right: 1px solid; border-bottom: 1px solid">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px; color:white">A</td>
            <td class="th" style="width: 30%; padding-left:5px"></td>
            <td class="th" style="width: 40%; padding-left:5px"></td>
        </tr>
    </table>



    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:641px;">
        <tr >
            <td class="th" style="width: 50%;">BOX 3</td>
            <td class="th" style="width: 50%;">BOX 4</td>
        </tr>
    </table>   

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:655px; border-left:1px solid; border-right:1px solid; border-top:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid">DESIGN PROFESSIONALS, PLANS AND SPECIFICATIONS</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-left: 1px solid">SUPERVISOR/IN-CHARGE OF MECHANICAL WORKS</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:669px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; color:white">A</td>
        </tr>
    </table>

    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:683px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 30%; padding-left: 15px; border-left: 1px solid; ">PROFESSIONAL MECHANICAL ENGINEER</td>
            <td class="th" style="width: 20%; padding-left: 15px; ">MECHANICAL ENGINEER</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:697px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; color:white">A</td>
        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:711px; border-left:1px solid; border-right:1px solid">
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
    <table width="100%" style="border-collapse: collapse; position:absolute; top:725px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center">PROFESSIONAL MECHANICAL ENGINEER</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center;  font-size:.4em">(Signed & Sealed Over Printed Name)</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:739px; border-left:1px solid; border-right:1px solid; border-bottom:1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center; font-size:.4em">(Signed & Sealed Over Printed Name)</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center"></td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
        </tr>
    </table>



    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:753px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid">Address</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-left: 1px solid">Address</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:767px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">PRC No.</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Validity</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">PRC No.</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Validity</td>

        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:781px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">PTR No.</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Date Issued</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">PTR No.</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Date Issued</td>

        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:795px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Issued at</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">TIN</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Issued at</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">TIN</td>

        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:809px;">
        <tr >
            <td class="th" style="width: 50%;">BOX 5</td>
            <td class="th" style="width: 50%;">BOX 6</td>
        </tr>
    </table>   

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:823px; border-left:1px solid; border-right:1px solid; border-top:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid">BUILDING OWNER</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-left: 1px solid">WITH MY CONSENT: LOT OWNER</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:837px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; color:white">A</td>
        </tr>
    </table>

    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:851px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 30%; padding-left: 15px; border-left: 1px solid; "></td>
            <td class="th" style="width: 20%; padding-left: 15px; border-left: 1px solid; color:white ">A</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:865px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; color:white">A</td>
        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:879px; border-left:1px solid; border-right:1px solid">
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
    <table width="100%" style="border-collapse: collapse; position:absolute; top:893px; border-left:1px solid; border-right:1px solid; border-bottom:1px solid">
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
    <table width="100%" style="border-collapse: collapse; position:absolute; top:907px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid">Address</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-left: 1px solid">Address</td>
        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:921px; border-left:1px solid; border-right:1px solid; border-bottom:1px solid">
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
    <table width="100%" style="border-collapse: collapse; position:absolute; top:935px;">
        <tr >
            <td class="th" style="width: 100%; padding-left: 5px;">Original-Applicants Copy, Pink-Assessor's Copy, Yellow-NCSO Copy, Blue-Building Officials Copy, Green-Acid Copy</td>
        </tr>
    </table>


























    


















  <div>
     <!-- 0 -->
  </div>

  <div class="page-break"></div>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="90%" style="border-collapse: collapse; margin-bottom:10px;">
        <tr >
            <td class="th" style="width: 100%;">BOX 6 (TO BE ACCOMPLISHED BY THE PROCESSING AND EVALUATION DIVISION)</td>
        </tr>
    </table>
    <table width="100%" style="border-collapse: collapse; border: 1px solid">
        <tr>
            <th class="th borderme" style="text-align:center;">ASSESSED FEES</th>
            <th class="th borderme" style="text-align:center;">ASSESSED BY</th> 
            <th class="th borderme" style="text-align:center;">AMOUNT DUE</th>
            <th class="th borderme" style="text-align:center;">DATE PAID</th>
            <th class="th borderme" style="text-align:center;">O.R. NUMBER</th>
        </tr>
        <tr >
            <td class="borderme" >FILING FEE</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" >PROCESSING FEE</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" >LOCATIONAL/ZONING OF LAND USE</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" >LINE AND GRADE (Geodetic)</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" >FENCING</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" >ARCHITECTURAL</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" >CIVIL/STRUCTURAL</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" >ELECTRICAL</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" >MECHANICAL</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" >SANITARY</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" >PLUMBING</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" >ELECTRONICS</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" >INTERIOR</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" >ONE HALF(1/2) OF FIRE SERVICE FUND (FSF)</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="th borderme" style="text-align:right; padding-right:20px;">TOTAL</td>
            <td class="borderme"></td>
            <td class="borderme"></td>
            <td class="borderme"></td>
            <td class="borderme"></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; margin-top:10px; margin-bottom:10px;">
        <tr >
            <td class="th" style="width: 100%;">BOX 7 (TO BE ACCOMPLISHED BY THE BUILDING OFFICIAL)</td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;  border-top:1px solid ">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; "></td>
            <td class="th" style="width: 50%; padding-left: 5px;  color:white">A</td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    
    <table width="100%" style="border-collapse: collapse; border-right:1px solid; border-left:1px solid; ">
        <tr >
            <td class="th" style="width: 100%; text-align:center"> <h1> Building Permit</h1></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-right:1px solid; border-left:1px solid">
        <tr >
            <td class="th" style="width: 3%"> </td>
            <td class="th" style="width: 27%"> BUILDING PERMIT NO.</td>
            <td class="th" style="width: 40%;"> </td>
            <td class="th" style="width: 25%;"> OFFICIAL RECEIPT NO.</td>
            <td class="th" style="width: 5%;"></td>
        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-right:1px solid; border-left:1px solid">
        <tr >
            <td class="th" style="width: 3%;"></td>
            <td class="th" style="width: 27%; border-bottom:1px solid"></td>
            <td class="th" style="width: 40%; color:white;">a </td>
            <td class="th" style="width: 25%; border-bottom:1px solid"> </td>
            <td class="th" style="width: 5%;"></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
        <table width="100%" style="border-collapse: collapse; border-right:1px solid; border-left:1px solid">
        <tr >
            <td class="th" style="width: 3%"> </td>
            <td class="th" style="width: 27%"> DATE ISSUE</td>
            <td class="th" style="width: 40%;"> </td>
            <td class="th" style="width: 25%;"> DATE PAID</td>
            <td class="th" style="width: 5%;"></td>
        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-right:1px solid; border-left:1px solid">
        <tr >
            <td class="th" style="width: 3%;"></td>
            <td class="th" style="width: 27%; border-bottom:1px solid"></td>
            <td class="th" style="width: 40%; color:white;">a </td>
            <td class="th" style="width: 25%; border-bottom:1px solid"> </td>
            <td class="th" style="width: 5%;"></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-right:1px solid; border-left:1px solid">
        <tr >
            <td class="th" style="width: 3%"> </td>
            <td class="th" style="width: 27%; text-align:center"> MM-DD-YY</td>
            <td class="th" style="width: 40%;"> </td>
            <td class="th" style="width: 25%; text-align:center"> MM-DD-YY</td>
            <td class="th" style="width: 5%;"></td>
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
    <table width="100%" style="border-collapse: collapse; border-right:1px solid; border-left:1px solid">
        <tr >
            <td class="th" style="width: 8%;"> </td>
            <td class="th" style="width: 92%;">Permit is issued to ________________________________________________ for the proposed ______________________________________________________________ under</td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 25%; "></td>
            <td class="th" style="width: 20%; font-size:.4em ">(Owner/Applicant)</td>
            <td class="th" style="width: 25%; "></td>
            <td class="th" style="width: 20%; font-size:.4em">(Type of Project)</td>
            <td class="th" style="width: 10%; "></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-right:1px solid; border-left:1px solid">
        <tr >
            <td class="th" style="width: 100%; padding-left:20px">________________________ of group _________________, located at lot no. ____________ block no. ___________ OCT/TCT No. ____________, Barangay ____________________________</td>
        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-right:1px solid; border-left:1px solid">
        <tr >
            <td class="th" style="width: 100%; padding-left:20px">City/Municipality of ________________________ subject to the following:</td>
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

    <div style="border-left:1px solid; border-right:1px solid">
        <ol>
            <li class="th">That under Article 1723 of the Civil Code of the Philippines, the engineer or architect who drew up the plans and specifications for a building/structure is liable by damages if whitin(15) years from the completion of the building/structure, the same should collapse due to defect in the plans and specifications or defect in the ground. The engineer or architect who supervises the construction shall be solidarily liable with the contractor shold the edifice collapse due to defect in the construction or the use of inferior materials.</li>
            <li class="th">This permit shall be accompanied by the various applicable ancillary and accessory permits, plans and specifications signed and sealed by the corresponding design professionals who shall be responsible for the comprehensive and correctness of the plans in compliance with the code and its IRR and to all applicable referral codes and professional regulatory laws.</li>
            <li class="th">That the proposed construction/erection/addition/alterationi/renovation/conversion/repair/moving/demotion, etc. shall be in conformity with the provisions of the National Building Code and its IRR</li>
            
                <ol type="a">
                    <li style="font-size:.5em">That prior to commencement of the proposed projects and construction an actual relocation survey shall be conducted by a duly Licensed Geodetic Engineer.</li>
                    <li style="font-size:.5em">That before commencing the excavation the person making or causing the excavation to be made shall notify in writing the owner of the adjoining property not less than ten(10) days before such excavation is to be made and show how the adjoining property should be protected.</li>
                    <li style="font-size:.5em">That no person shall use or occupy a street, alley or public sidewalk for the performance of work covered by a building permit.</li>
                    <li style="font-size:.5em">That no person shall perform any work on any building or structure adjacent to apublic way in general use for pedestrian travel, unless the pedestrians are protected.</li>
                    <li style="font-size:.5em">That the supervising architect/civil engineer shall keep at the jobsite at all times a logbook of daily construction activities wherein the actual dailyy progress of construction including tests conducted, weather condition and other pertinent data are to be recorded, same shall be made available for scrutiny and comments by the OBO representative durinig the conduct of his/her inspection pursuant to Secion 207 of the National Building Code.</li>
                    <li style="font-size:.5em">That upon completion of the construction the said licensed supervisinig architect/civil engineer shall submit to the Building Official duly signed and sealed logbook, as -build plans and other pertinent documents and shall also prepare and submit a Certificate of Completion of the project stating that the construction of the building/structure conform to the provision of the code, its IRR as well as the plans and specifications.</li>
                    <li style="font-size:.5em">All such changes, modifications and alterations shall likewise be submittted to the Building Official and the subsequent amendatory permit therefore issued before any work on said changes, modifications and alterations shall be started. The as-build plans and specificatioins maybe just an orderly and comprehensive compilation of all documents which include the originally submitted plans and specifications of all amendments thereto as actually built or they may be an entirely new set of plans and specifications accurately describing and/or reflecting therein the building as actually built. <li>
                </ol>
            <li class="th">That no building/structure shall be use until the building official has issued a certificate of occupancy therefor as provided in the code. However a partial certificte of occupancy may be issued for the use/occupancy of a portion or portions of a building/structure prior to the completion of the entire building/structure.</li>
            <li class="th">That this permit shall not serve as an exemption from securing written clearances from various goverment authorities exercising regulatory functions affecting buildinig/structure.</li>
            <li class="th">When the construction is undertaken by contract, the work shall be done by a duly licensed and registered contractor pursuant to the provisions of the Contractor's License law (RA 4566).</li>
            <li class="th">The owner/permittee shall submit a duly accomplished prescribed "Notice of Constructioin" to the office of the Building Official prior to any construction activity.</li>
            <li class="th">The ownr/permittee shall put a Building permit sign which complies with the prescribed dimensions and information, which shall remain posted on the construction site for the duration of the construction.</li>
        
        </ol>
        <p style="margin-left:30px; font-size:.5em">PERMIT ISSUED BY:</p>
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
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;">
        <tr>
            <td style="width: 100%;text-align:center; font-size:.7em "> NOTE: THIS PERMIT MAY BE CANCELLED OR REVOKED PURSUANT TO SECTIONS 305 AND 306 OF THE NATIONAL BUILDING CODE</td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;  border-bottom:1px solid ">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; "></td>
            <td class="th" style="width: 50%; padding-left: 5px;  color:white">A</td>
        </tr>
    </table>
</body>
</body>
</html>