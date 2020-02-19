<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <title>{{ $title}}</title>
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
    <input type="checkbox" style="position:absolute; top:68px; left:10px;">
    <input type="checkbox" style="position:absolute; top:68px; left:165px;">
    <input type="checkbox" style="position:absolute; top:68px; left:337px;">

    <input type="checkbox" style="position:absolute; top:83px; left:10px;">
    <input type="checkbox" style="position:absolute; top:83px; left:165px;">
    <input type="checkbox" style="position:absolute; top:83px; left:337px;">

    <input type="checkbox" style="position:absolute; top:97px; left:10px;">
    <input type="checkbox" style="position:absolute; top:97px; left:165px;">
    <input type="checkbox" style="position:absolute; top:97px; left:337px;">

    <input type="checkbox" style="position:absolute; top:111px; left:10px;">
    <input type="checkbox" style="position:absolute; top:111px; left:165px;">

    <!-- Use or Character of Occupancy CHECKBOX -->
    <input type="checkbox" style="position:absolute; top:152px; left:10px;">
    <input type="checkbox" style="position:absolute; top:152px; left:222px;">
    <input type="checkbox" style="position:absolute; top:152px; left:397px;">
    
    <input type="checkbox" style="position:absolute; top:167px; left:10px;">
    <input type="checkbox" style="position:absolute; top:167px; left:222px;">

    <input type="checkbox" style="position:absolute; top:182px; left:10px;">
    <input type="checkbox" style="position:absolute; top:182px; left:222px;">

    <input type="checkbox" style="position:absolute; top:197px; left:10px;">
    <input type="checkbox" style="position:absolute; top:197px; left:222px;">

    <input type="checkbox" style="position:absolute; top:212px; left:10px;">
    <input type="checkbox" style="position:absolute; top:212px; left:222px;">












    <div class="gitna">
        <ul class="bulit">
            <li class="liit">Republic of the Philippines</li>
            <li class="liit">Province of Oriental Mindoro</li>
            <li class="liit">CITY OF CALAPAN</li>
            <li class="liit"> <strong> TANGGAPAN NG PINUNONG PANGGUSALI</strong></li>
            <li class="liit">Office of the Building Official</li>
            <li><h5></b>{{ $heading }}</b></h5></li>
        </ul>
    </div>
    <table width="80%">
        <tr>
            <td  style="width:20%">APPLICATION NO.</td>
            <td  style="width:50%">{{ isset($application_id) ? $application_id  :  '' }}</td>
            <td  style="width:30%">AREA NO.</td>
        </tr>
    </table>

    <p style="position:relative; top:10px;" class="th">BOX 1 (TO BE ACCOMPLISED IN PRINT BY THE APPLICANT)</p>
    <table width="80%" style="border-collapse: collapse; float:left;  border: 1px solid ">
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
            <td style="border-bottom: 1px solid; width: 15%">{{ isset($mi_name) ? ucfirst($mi_name) : '' }}</td>
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
    <table width="80%" style="border-collapse: collapse; position:absolute; top:263px;  border-left: 1px solid;border-right: 1px solid; ">
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
    <table width="80%" style="border-collapse: collapse; position:absolute; top:276px;  border-left: 1px solid;border-right: 1px solid;border-bottom: 1px solid;  ">
        <tr >
            <td style="width: 10%; padding-left:5%"></td>
            <td style="width: 60%">{{ isset($address) ? ucwords($address) : '' }}</td>
            <td style="width: 10%;">{{ isset($zipcode) ? $zipcode : '' }}</td>
            <td style="width: 20%; border-left: 1px solid; padding-left:5%">{{ isset($telephone ) ? : '' }}</td>
        </tr>
    </table>    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:296px;  border-left: 1px solid; border-right: 1px solid ">
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
    <table width="80%" style="border-collapse: collapse; position:absolute; top:315px;  border-left: 1px solid; border-right: 1px solid; border-bottom: 1px solid ">
        <tr>
            <td class="th" style="width: 5%; padding-left:5px">STREET</td>
            <td            style="width: 10%; border-bottom: 1px solid;">{{ isset($loc_street) ? ucfirst($loc_street) : '' }}</td>
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
    <table width="80%" style="border-collapse: collapse; position:absolute; top:335px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="padding-left:5px">SCOPE OF WORK</td>
        </tr>
    </table>
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:349px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px;">NEW CONTRUCTION</td>
            <td class="th" style="width: 30%; padding-left:5px">RENOVATION______________________</td>
            <td class="th" style="width: 40%; padding-left:5px">DEMOLITION__________________________</td>
        </tr>
    </table>
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:363px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px">ERECTION       </td>
            <td class="th" style="width: 30%; padding-left:5px">CONVERSION______________________</td>
            <td class="th" style="width: 40%; padding-left:5px">ACCESSORY BUILDING/STRUCTURE_____</td>
        </tr>
    </table>
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:377px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px">ADDITION       </td>
            <td class="th" style="width: 30%; padding-left:5px">REPAIR____________________________</td>
            <td class="th" style="width: 40%; padding-left:5px">OTHERS (Specify)______________________</td>
        </tr>
    </table>
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:391px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px">ALTERATION       </td>
            <td class="th" style="width: 30%; padding-left:5px">MOVING___________________________</td>
            <td class="th" style="width: 40%; padding-left:5px">______________________________________</td>
        </tr>
    </table>
    
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:405px;  border-left: 1px solid; border-right: 1px solid; border-bottom:1px solid">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px; color:white">A</td>
            <td class="th" style="width: 30%; padding-left:5px"></td>
            <td class="th" style="width: 40%; padding-left:5px"></td>
        </tr>
    </table>


    <!--------------------------------------------- USE OR CHARACTER OF OCCUPANCY TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:419px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="padding-left:5px">USE OR CHARACTER OF OCCUPANCY</td>
        </tr>
    </table>
    <!--------------------------------------------- USE OR CHARACTER OF OCCUPANCY TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:433px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 40%; padding-left:25px;">GROUP A: RESIDENTIAL, DWELLINGS</td>
            <td class="th" style="width: 30%; padding-left:5px">GROUP F: INDUSTRIAL</td>
            <td class="th" style="width: 30%; padding-left:5px">OTHERS(Specify)________</td>
        </tr>
    </table>
    <!--------------------------------------------- USE OR CHARACTER OF OCCUPANCY TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:447px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 40%; padding-left:25px">GROUP B: RESIDENTIAL HOTEL, APARTMENT</td>
            <td class="th" style="width: 60%; padding-left:5px">GROUP G: INDUSTRIAL STORAGE AND HAZARDOUS</td>
         
        </tr>
    </table>
    <!--------------------------------------------- USE OR CHARACTER OF OCCUPANCY TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:461px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 40%; padding-left:25px">GROUP C: EDUCATIONAL, RECREATIONAL</td>
            <td class="th" style="width: 60%; padding-left:5px">GROUP H: RECREATIONAL ASSEMBLY OCCUPANT LOAD LESS THAN 1000</td>
        </tr>
    </table>
    <!--------------------------------------------- USE OR CHARACTER OF OCCUPANCY TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:475px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
            <td class="th" style="width: 40%; padding-left:25px">GROUP D: INSTITUTIONAL</td>
            <td class="th" style="width: 60%; padding-left:5px">GROUP I: RECREATIONAL ASSEMBLYY OCCUPANT LOAD 1000 OR MORE</td>
        </tr>
    </table>
    
    <!--------------------------------------------- USE OR CHARACTER OF OCCUPANCY TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:489px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 40%; padding-left:25px">GROUP E: BUSIINESS AND MERCANTILE</td>
            <td class="th" style="width: 60%; padding-left:5px">GROUP J: AGRICULTURAL ACCESSORY</td>
        </tr>
    </table>

    
    <!--------------------------------------------- USE OR CHARACTER OF OCCUPANCY TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:503px;  border-left: 1px solid; border-right: 1px solid; border-bottom:1px solid; padding-bottom: 20px">
        <tr >
            <td class="th" style="width: 40%; padding-left:25px; color:white;">A</td>
            <td class="th" style="width: 60%; padding-left:5px"></td>
        </tr>
    </table>



    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:517px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 20%; padding-left:25px">NUMBER OF STOREY(S)</td>
            <td style="width:25%; border-bottom: 1px solid ">{{ isset($storeys) ? $storeys : '' }}</td>
            <td class="th" style="width: 25%; padding-left:5px">PROPOSED DATE OF CONSTRUCTION</td>
            <td style="width:20%; border-bottom: 1px solid ">{{ isset($start) ? $start : '' }}</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:531px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 25%; padding-left:25px">TOTAL FLOOR AREA (in sqm)</td>
            <td style="width:20%; border-bottom: 1px solid ">{{ isset($floorarea) ? $floorarea : '' }}</td>
            <td class="th" style="width: 25%; padding-left:5px">EXPECTED DATE OF COMPLETION</td>
            <td style="width:20%; border-bottom: 1px solid ">{{ isset($end) ? $end : '' }}</td>

        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:545px;  border-left: 1px solid; border-right: 1px solid;  ">
        <tr >
            <td class="th" style="width: 25%; padding-left:25px">TOTAL ESTIMATED COST Php</td>
            <td style="width:25%; border-bottom: 1px solid ">{{ isset($cost) ? $cost : '' }}</td>
            <td style="width:50% "></td>
        </tr>
    </table>

    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:559px;  border-left: 1px solid; border-right: 1px solid; border-bottom:1px solid">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px; color:white">A</td>
            <td class="th" style="width: 30%; padding-left:5px"></td>
            <td class="th" style="width: 40%; padding-left:5px"></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="80%" style="border-collapse: collapse; position:absolute; top:575px;">
        <tr >
            <td class="th" style="width: 100%;">BOX 2</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:590px; border:1px solid">
        <tr>
            <td class="th" style="width: 100%; padding-left: 5px">FULL-TIME INSPECTOR AND SUPERVISOR OF CONSTRUCTION WORKS(REPRESENTING THE OWNER)</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:605px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid">Address</td>
        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:619px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; color:white">A</td>
        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:633px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px;  border-bottom: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; "></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:647px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center">ARCHITECT OR CIVIL ENGINEER</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left: 1px solid; border-bottom: 1px solid"></td>
            <td class="th" style="width: 25%; padding-left: 5px;  border-bottom: 1px solid"></td>
        </tr>
    </table>

    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:661px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center; font-size:.4em">(Signed & Sealed Over Printed Name)</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left: 1px solid; border-bottom: 1px solid">PRC NO.</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left: 1px solid; border-bottom: 1px solid">Validity</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:675px; border-left:1px solid; border-right:1px solid;">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center; font-size:.4em">Date __________________</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left: 1px solid; border-bottom: 1px solid">PTR NO.</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left: 1px solid; border-bottom: 1px solid">Date Issue</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:689px; border-left:1px solid; border-right:1px solid; border-bottom: 1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center; font-size:.4em"></td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left: 1px solid; border-bottom: 1px solid">Issued At</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left: 1px solid; border-bottom: 1px solid">TIN</td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:707px;">
        <tr >
            <td class="th" style="width: 50%;">BOX 3</td>
            <td class="th" style="width: 50%;">BOX 4</td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:725px; border-left:1px solid; border-right:1px solid; border-top:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px">APPLICANT</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid">WITH MY CONSENT: LOT OWNER</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:740px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; color:white">A</td>
        </tr>
    </table>

    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:754px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; color:white">A</td>
        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:768px; border-left:1px solid; border-right:1px solid">
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
    <table width="100%" style="border-collapse: collapse; position:absolute; top:782px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center">(Signature Over Printed Name)</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center">(Signature Over Printed Name)</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:796px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center">Date __________________</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center">Date __________________</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:810px; border-left:1px solid; border-right:1px solid; border-bottom: 1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center; font-size:.4em"></td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center; font-size:.4em"></td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>

        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:825px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid">Address</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-left: 1px solid">Address</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:840px; border-left:1px solid; border-right:1px solid">
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
    <table width="100%" style="border-collapse: collapse; position:absolute; top:858px;">
        <tr >
            <td class="th" style="width: 100%;">BOX 5</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:875px; border-left:1px solid; border-right:1px solid; border-top: 1px solid">
        <tr >
            <td class="th" style="width: 35%; padding-left: 5px;">REPUBLIC OF THE PHILIPPINES                              </td>
            <td class="th" style="width: 15%; padding-left: 5px;">)</td>
            <td class="th" style="width: 50%; padding-left: 5px;"></td>
        </tr>
    </table>

    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:890px; border-left:1px solid; border-right:1px solid">
        <tr >
            <td class="th" style="width: 100%; padding-left: 5px;">CITY/MUNICIPALITY ________________________________________ ) S.S.</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:904px; border-left:1px solid; border-right:1px solid">
        <tr >   
            <td class="th" style="width: 10%; padding-left: 5px;"></td>
            <td class="th" style="width: 90%; padding-left: 5px;">BEFORE ME, at the City/Municipality of __________________________________________ on __________________________ personally appeard the following:</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:918px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; "></td>
            <td class="th" style="width: 50%; color:white">A</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:932px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; "></td>
            <td class="th" style="width: 50%; padding-left: 5px;  color:white">A</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:946px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 10%; padding-left: 5px; "></td>
            <td class="th" style="width: 25%; border-bottom: 1px solid"></td>
            <td class="th" style="width: 5%; color:white  ">A</td>
            <td class="th" style="width: 10%; border-bottom: 1px solid"></td>
            <td class="th" style="width: 5%;  "></td>
            <td class="th" style="width: 10%; border-bottom: 1px solid"></td>
            <td class="th" style="width: 5%;  "></td>
            <td class="th" style="width: 15%; border-bottom: 1px solid"></td>
            <td class="th" style="width: 5%;  "></td>
            <td class="th" style="width: 10%; padding-left: 5px; "></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:960px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 10%; padding-left: 5px; "></td>
            <td class="th" style="width: 25%;  text-align:center">APPLICANT</td>
            <td class="th" style="width: 5%; color:white  ">A</td>
            <td class="th" style="width: 10%;  text-align:center">C.T.C No.</td>
            <td class="th" style="width: 5%;  "></td>
            <td class="th" style="width: 10%;  text-align:center">Date Issued</td>
            <td class="th" style="width: 5%;  "></td>
            <td class="th" style="width: 15%;  text-align:center">Place Issued</td>
            <td class="th" style="width: 5%;  "></td>
            <td class="th" style="width: 10%; padding-left: 5px; "></td>
        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:974px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; "></td>
            <td class="th" style="width: 50%; color:white">A</td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:987px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; "></td>
            <td class="th" style="width: 50%; color:white">A</td>
        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1001px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 10%; padding-left: 5px; "></td>
            <td class="th" style="width: 25%; border-bottom: 1px solid"></td>
            <td class="th" style="width: 5%; color:white  ">A</td>
            <td class="th" style="width: 10%; border-bottom: 1px solid"></td>
            <td class="th" style="width: 5%;  "></td>
            <td class="th" style="width: 10%; border-bottom: 1px solid"></td>
            <td class="th" style="width: 5%;  "></td>
            <td class="th" style="width: 15%; border-bottom: 1px solid"></td>
            <td class="th" style="width: 5%;  "></td>
            <td class="th" style="width: 10%; padding-left: 5px; "></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1015px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 10%; padding-left: 5px; "></td>
            <td class="th" style="width: 25%;  text-align:center">LICENSED ARCHITECT OR CIVIL ENGINEER</td>
            <td class="th" style="width: 5%; color:white  ">A</td>
            <td class="th" style="width: 10%;  text-align:center">C.T.C No.</td>
            <td class="th" style="width: 5%;  "></td>
            <td class="th" style="width: 10%;  text-align:center">Date Issued</td>
            <td class="th" style="width: 5%;  "></td>
            <td class="th" style="width: 15%;  text-align:center">Place Issued</td>
            <td class="th" style="width: 5%;  "></td>
            <td class="th" style="width: 10%; padding-left: 5px; "></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1029px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 10%; padding-left: 5px; "></td>
            <td class="th" style="width: 25%;  text-align:center; font-size:.4em">(Full-time Inspector and Supervisor of Construction Works)</td>
            <td class="th" style="width: 5%; color:white  ">A</td>
            <td class="th" style="width: 10%;  text-align:center"></td>
            <td class="th" style="width: 5%;  "></td>
            <td class="th" style="width: 10%;  text-align:center"></td>
            <td class="th" style="width: 5%;  "></td>
            <td class="th" style="width: 15%;  text-align:center"></td>
            <td class="th" style="width: 5%;  "></td>
            <td class="th" style="width: 10%; padding-left: 5px; "></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1043px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; "></td>
            <td class="th" style="width: 50%; color:white">A</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1057px; border-left:1px solid; border-right:1px solid">
        <tr >
            <td class="th" style="width: 100%; padding-left: 5px;">whose signatures appear hereinabove, known to the same persons who executed this standard prescribed form and acknowledged to me that the same is their free and voluntary act and deed</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1071px; border-left:1px solid; border-right:1px solid">
        <tr >   
            <td class="th" style="width: 10%; padding-left: 5px;"></td>
            <td class="th" style="width: 90%; padding-left: 5px;">WITNESS MY HAND AND SEAL on the date and place above written.</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1085px; border-left:1px solid; border-right:1px solid">
        <tr >   
            <td class="th" style="width: 25%; padding-left: 5px;">Doc. No._________________</td>
            <td class="th" style="width: 45%;"></td>
            <td class="th" style="width: 25%; border-bottom:1px solid"></td>
            <td class="th" style="width: 5%;"></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1099px; border-left:1px solid; border-right:1px solid">
        <tr >   
            <td class="th" style="width: 25%; padding-left: 5px;">Page No._________________</td>
            <td class="th" style="width: 45%;"></td>
            <td class="th" style="width: 25%; text-align:center ">NOTARY PUBLIC(Until December_____)</td>
            <td class="th" style="width: 5%;"></td>
        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1113px; border-left:1px solid; border-right:1px solid">
        <tr >   
            <td class="th" style="width: 25%; padding-left: 5px;">Book No._________________</td>
            <td class="th" style="width: 45%;"></td>
            <td class="th" style="width: 25%; "></td>
            <td class="th" style="width: 5%;"></td>
        </tr>
    </table>

    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1127px; border-left:1px solid; border-right:1px solid">
        <tr >   
            <td class="th" style="width: 25%; padding-left: 5px;">Series Of_________________</td>
            <td class="th" style="width: 45%;"></td>
            <td class="th" style="width: 25%; "></td>
            <td class="th" style="width: 5%;"></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1141px; border-left:1px solid; border-right:1px solid; border-bottom: 1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; "></td>
            <td class="th" style="width: 50%; padding-left: 5px;  color:white">A</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:1160px;">
        <tr >
            <td class="th" style="width: 100%; padding-left: 5px;">Original-Applicants Copy, Pink-Assessor's Copy, Yellow-NCSO Copy, Blue-Building Officials Copy, Green-Acid Copy</td>
        </tr>
    </table>
















    <!--------------------------------------------- BLOCKS TABLE  -------------------------------------------------------->
    <!--------------------------------------------- BLOCKS TABLE  -------------------------------------------------------->
    <!--------------------------------------------- BLOCKS TABLE  -------------------------------------------------------->
    <!--------------------------------------------- BLOCKS TABLE  -------------------------------------------------------->
    <table width="18%" style="border-collapse: collapse; position:absolute; left:590px; top:195px; ">
        <tr >
            <td style="border: 1px solid; width: 15 %; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
        </tr>
        <tr >
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
        </tr>
        <tr >
            <td style="border: 1px solid; width: 15%; height:24px;  background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px;  background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px;  background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px;  background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px;  background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px;  background-color:black"></td>
        </tr>
        <tr >
            <td style="border: 1px solid; width: 15%; height:24px;  background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
        </tr>
        <tr >
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
        </tr>
        <tr >
            <td style="border: 1px solid; width: 15%; height:24px;  background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
        </tr>
        <tr >
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
        </tr>
        <tr >
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
        </tr>
        <tr >
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
        </tr>
        <tr >
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
        </tr>
        <tr >
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
        </tr>
        <tr >
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
        </tr>
        <tr >
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
        </tr>
        <tr >
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px; background-color:black"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
            <td style="border: 1px solid; width: 15%; height:24px;"></td>
        </tr>
    </table>    



  <div>
     <!-- 0 -->
  </div>

  <div class="page-break"></div>

    <input type="checkbox" style="position:absolute; top:-233px;  left:10px;">
    <input type="checkbox" style="position:absolute; top:-213px; left:10px;">
    <input type="checkbox" style="position:absolute; top:-193px; left:10px;">
    <input type="checkbox" style="position:absolute; top:-173px; left:10px;">
    <input type="checkbox" style="position:absolute; top:-153px; left:10px;">
    <input type="checkbox" style="position:absolute; top:-133px; left:10px;">
    <input type="checkbox" style="position:absolute; top:-113px; left:10px;">
    <input type="checkbox" style="position:absolute; top:-93px; left:10px;">
    <input type="checkbox" style="position:absolute; top:-73px; left:10px;">
    <input type="checkbox" style="position:absolute; top:-53px; left:10px;">
    <input type="checkbox" style="position:absolute; top:-33px; left:10px;">
    <input type="checkbox" style="position:absolute; top:-13px; left:10px;">
    <input type="checkbox" style="position:absolute; top:7px; left:10px;">
    <input type="checkbox" style="position:absolute; top:27px; left:10px;">
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
            <td class="borderme" style="padding-left:32px">FILING FEE</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" style="padding-left:32px">PROCESSING FEE</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" style="padding-left:32px">LOCATIONAL/ZONING OF LAND USE</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" style="padding-left:32px">LINE AND GRADE (Geodetic)</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" style="padding-left:32px">FENCING</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" style="padding-left:32px">ARCHITECTURAL</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" style="padding-left:32px">CIVIL/STRUCTURAL</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" style="padding-left:32px">ELECTRICAL</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" style="padding-left:32px">MECHANICAL</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" style="padding-left:32px">SANITARY</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" style="padding-left:32px">PLUMBING</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" style="padding-left:32px">ELECTRONICS</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" style="padding-left:32px">INTERIOR</td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
            <td class="borderme" ></td>
        </tr>
        <tr >
            <td class="borderme" style="padding-left:32px">ONE HALF(1/2) OF FIRE SERVICE FUND (FSF)</td>
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
                    <li style="font-size:.5em">All such changes, modifications and alterations shall likewise be submittted to the Building Official and the subsequent amendatory permit therefore issued before any work on said changes, modifications and alterations shall be started. The as-build plans and specificatioins maybe just an orderly and comprehensive compilation of all documents which include the originally submitted plans and specifications of all amendments thereto as actually built or they may be an entirely new set of plans and specifications accurately describing and/or reflecting therein the building as actually built. </li>
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