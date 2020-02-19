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

    <!-- Scope of Work CHECKBOX -->
    <input type="checkbox" style="position:absolute; top:97px; left:10px;">
    <input type="checkbox" style="position:absolute; top:97px; left:207px;">
    <input type="checkbox" style="position:absolute; top:97px; left:423px;">

    <input type="checkbox" style="position:absolute; top:111px; left:10px;">
    <input type="checkbox" style="position:absolute; top:111px; left:207px;">
    <input type="checkbox" style="position:absolute; top:111px; left:423px;">

    <input type="checkbox" style="position:absolute; top:125px; left:10px;">
    <input type="checkbox" style="position:absolute; top:125px; left:207px;">
    <input type="checkbox" style="position:absolute; top:125px; left:423px;">

    <input type="checkbox" style="position:absolute; top:139px; left:10px;">
    <input type="checkbox" style="position:absolute; top:139px; left:207px;">
    <input type="checkbox" style="position:absolute; top:139px; left:423px;">

    <!-- NATURE OF CIVIL/STRUCTURAL WORK CHECKBOX -->
    <input type="checkbox" style="position:absolute; top:207px; left:10px;">
    <input type="checkbox" style="position:absolute; top:207px; left:280px;">
    <input type="checkbox" style="position:absolute; top:207px; left:495px;">

    <input type="checkbox" style="position:absolute; top:221px; left:10px;">
    <input type="checkbox" style="position:absolute; top:221px; left:280px;">
    <input type="checkbox" style="position:absolute; top:221px; left:495px;">


    <input type="checkbox" style="position:absolute; top:235px; left:10px;">
    <input type="checkbox" style="position:absolute; top:235px; left:280px;">
    <input type="checkbox" style="position:absolute; top:235px; left:495px;">


    <input type="checkbox" style="position:absolute; top:249px; left:10px;">
    <input type="checkbox" style="position:absolute; top:249px; left:280px;">
    <input type="checkbox" style="position:absolute; top:249px; left:495px;">


    <input type="checkbox" style="position:absolute; top:263px; left:10px;">
    <input type="checkbox" style="position:absolute; top:263px; left:280px;">
    <input type="checkbox" style="position:absolute; top:263px; left:495px;">

    <input type="checkbox" style="position:absolute; top:277px; left:10px;">
    <input type="checkbox" style="position:absolute; top:277px; left:280px;">

    <input type="checkbox" style="position:absolute; top:291px; left:10px;">
    <input type="checkbox" style="position:absolute; top:291px; left:280px;">
    <input type="checkbox" style="position:absolute; top:291px; left:495px;">

    <input type="checkbox" style="position:absolute; top:402px; left:364px;">
    <input type="checkbox" style="position:absolute; top:402px; left:580px;">

    <div class="gitna">
        <ul class="bulit">
            <li class="liit">Republic of the Philippines</li>
            <li class="liit">Province of Oriental Mindoro</li>
            <li class="liit">CITY OF CALAPAN</li>
            <li class="liit"> <strong> TANGGAPAN NG PINUNONG PANGGUSALI</strong></li>
            <li class="liit">Office of the Building Official</li>
            <li class="liit" style="color:white">a</li>
            <li class="liit" style="color:white">a</li>
            <li><h5></strong>MECHANICAL PERMIT</strong></h5></li>
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
            <td class="th" style="padding-left:5px"> <strong> SCOPE OF WORK</strong></td>
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
            <td class="th" style="padding-left:5px"> <strong> INSTALLATION AND OPERATION OF:</strong></td>
        </tr>
    </table>
    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:487px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 40%; padding-left:25px;">BOILER</td>
            <td class="th" style="width: 30%; padding-left:5px">CENTRAL AIRCONDITIONING</td>
            <td class="th" style="width: 30%; padding-left:5px">DUMBWAITER</td>
        </tr>
    </table>
    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:501px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 40%; padding-left:25px;">PRESSURE VESSEL</td>
            <td class="th" style="width: 30%; padding-left:5px">MECHANICAL VENTILLATION</td>
            <td class="th" style="width: 30%; padding-left:5px">PUMPS</td>         
        </tr>
    </table>
    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:515px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 40%; padding-left:25px;">INTERNAL COMBUSTION ENGINE</td>
            <td class="th" style="width: 30%; padding-left:5px">ESCALATOR</td>
            <td class="th" style="width: 30%; padding-left:5px">COMPRESS AIR, VACUUM, INSTITUTIONAL</td>
        </tr>
    </table>
    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:529px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
            <td class="th" style="width: 40%; padding-left:25px;">REFRIGERATION AND ICE MAKING</td>
            <td class="th" style="width: 30%; padding-left:5px">MOVING SIDEWALK</td>
            <td class="th" style="width: 30%; padding-left:5px">and/or INDUSTRIAL GAS</td>
        </tr>
    </table>
    
    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:543px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 40%; padding-left:25px;">WINDOW TYPE AIRCONDITIONING</td>
            <td class="th" style="width: 30%; padding-left:5px">FREIGHT ELEVATOR</td>
            <td class="th" style="width: 30%; padding-left:5px">PNEUMATIC TUBES, CONVEYORS</td>
        </tr>
    </table>

    
    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:557px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
        <td class="th" style="width: 40%; padding-left:25px;">PACKAGE/SPLIT TYPE CONDITIONING</td>
            <td class="th" style="width: 30%; padding-left:5px">PASSENGER ELEVATOR</td>
            <td class="th" style="width: 30%; padding-left:5px">and/or MONORAILS</td>
        </tr>
    </table>

    <!--------------------------------------------- INSTALLATION AND OPERATION OF TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:571px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
        <td class="th" style="width: 40%; padding-left:25px;">OTHER(Specify)_________________________________</td>
            <td class="th" style="width: 30%; padding-left:5px">CABLE CAR</td>
            <td class="th" style="width: 30%; padding-left:5px">FUNICULAR</td>
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
            <td class="th" style="width: 50%;"> <strong> BOX 3</strong></td>
            <td class="th" style="width: 50%;"> <strong> BOX 4</strong></td>
        </tr>
    </table>   

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:655px; border-left:1px solid; border-right:1px solid; border-top:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid"> <strong> DESIGN PROFESSIONALS, PLANS AND SPECIFICATIONS</strong></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-left: 1px solid"> <strong> SUPERVISOR/IN-CHARGE OF MECHANICAL WORKS</strong></td>
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
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center"> <strong> PROFESSIONAL MECHANICAL ENGINEER</strong></td>
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
            <td class="th" style="width: 50%;"> <strong> BOX 5</strong></td>
            <td class="th" style="width: 50%;"> <strong> BOX 6</strong></td>
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
            <td class="th" style="width: 40%; padding-left: 5px;"></td>
            <td class="th" style="width: 30%; padding-left: 5px; "> <strong> FIVE(5) SETS OF MECHANICAL DOCUMENTS</strong></td>
            <td class="th" style="width: 30%; padding-left: 5px; "></td>
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
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;">
        <tr>

            <td class="th" style="width: 5%; padding-left: 5px;  "></td>
            <td class="th" style="width: 45%; padding-left: 5px;">MECHANICAL PLANS & SPECIFICATOINS</td>
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
            <td class="th" style="width: 20%; padding-left: 5px; ">PROCESSED BY</td>
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
            <td class="th" style="width: 40%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;">MECHANICAL</td>
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
            <td class="th" style="width: 100%;"> <strong> BOX 9</strong></td>
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
            <li class="th">That the proposed mechanical works shall be in accordance with the mechanical plans filed with this office and in conformity with the latest Philippine Mechanical Code, the National Building Code and its IRR.</li>
            <li class="th">That prior to any mechanical installation, a duly accomplished presribed "Notice of Construction" shall be submitted to the Office of the Building Official.</li>
            <li class="th">That upon completion of the mechanical works, the licensed supervisor/in-charge shall submit the entry to the logbook duly signed and sealed to the building official including as-built plans and other documents and shall also accomplished the certificate of completion stating that the mechanical works conforms to the provision of the Philippine Mechanical Code, the National Building Code and its IRR.</li>
            <li class="th">That this permit is null and void unless accompanied by the building permit.</li>
            <li class="th">That a Certificate of Operation shall be issued for the continuous use of mechanical installations.</li>   
        </ol>
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
            <td class="th" style="width: 100%; padding-left: 20px;"> <strong> PERMIT ISSUED BY: </strong></td>
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