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
<!-- scope of work checkbox -->
    <input type="checkbox" style="position:absolute; top:97px; left:10px;">
    <input type="checkbox" style="position:absolute; top:97px; left:207px;">
    <input type="checkbox" style="position:absolute; top:97px; left:423px;">

    <input type="checkbox" style="position:absolute; top:111px; left:10px;">
    <input type="checkbox" style="position:absolute; top:111px; left:207px;">
    <input type="checkbox" style="position:absolute; top:111px; left:423px;">

    <input type="checkbox" style="position:absolute; top:125px; left:10px;">
    <input type="checkbox" style="position:absolute; top:125px; left:207px;">
    <input type="checkbox" style="position:absolute; top:125px; left:423px;">
<!-- electrical engr checkbox -->
    <input type="checkbox" style="position:absolute; top:420px; left:25px;">
    <input type="checkbox" style="position:absolute; top:420px; left:277px;">
    <input type="checkbox" style="position:absolute; top:420px; left:518px;">

    
    <div class="gitna">
        <ul class="bulit">
            <li class="liit">Republic of the Philippines</li>
            <li class="liit">Province of Oriental Mindoro</li>
            <li class="liit">CITY OF CALAPAN</li>
            <li class="liit"> <strong> TANGGAPAN NG PINUNONG PANGGUSALI</strong></li>
            <li class="liit">Office of the Building Official</li>
            <li class="liit" style="color:white">a</li>
            <li class="liit" style="color:white">a</li>
            <li><h5></strong>ELECTRICAL PERMIT</strong></h5></li>
        </ul>
    </div>
    <table width="80%">
        <tr>
            <td  style="font-size: .5em; width:10%">APPLICATION NO.</td>
            <td  style="font-size: .5em; width:15%">{{ isset($application_id) ? $application_id  :  '' }}</td>
            <td  style="font-size: .5em; width:5%">E.P.NO.</td>
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
            <td style="border-bottom: 1px solid; width: 30%; border-left: 1px solid; padding-left:5%">{{ isset($ownerform ) ? ucwords($ownerform) : '' }}</td>
            <td style="border-bottom: 1px solid; width: 10%"></td>
            <td style="border-bottom: 1px solid; width: 10%"></td>
            <td style="border-bottom: 1px solid; width: 5%;"></td>
            <td style="width: 5%; border-bottom: 1px solid;"></td>
        </tr>
    </table>    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->

    <table width="100%" style="border-collapse: collapse; position:absolute; top:296px;  border-left: 1px solid;border-right: 1px solid;  ">
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
        <table width="100%" style="border-collapse: collapse; position:absolute; top:310px;  border-left: 1px solid;border-right: 1px solid;border-bottom: 1px solid;  ">
        <tr >
            <td style="width: 10%; padding-left:5%"></td>
            <td style="width: 60%">{{ isset($address) ? ucwords($address) : '' }}</td>
            <td style="width: 10%;">{{ isset($zipcode) ? $zipcode : '' }}</td>
            <td style="width: 20%; border-left: 1px solid; padding-left:5%">{{ isset($telephone ) ? : '' }}</td>
        </tr>
    </table>       

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:326px;  border-left: 1px solid; border-right: 1px solid ">
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
    <table width="100%" style="border-collapse: collapse; position:absolute; top:345px;  border-left: 1px solid; border-right: 1px solid; border-bottom: 1px solid ">
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
    <table width="100%" style="border-collapse: collapse; position:absolute; top:365px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="padding-left:5px">SCOPE OF WORK</td>
        </tr>
    </table>
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:379px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px;">NEW INSTALLATION</td>
            <td class="th" style="width: 30%; padding-left:5px">RECONNECTION OF SERVICE ENTRANCE</td>
            <td class="th" style="width: 40%; padding-left:5px">RELOCATION OF SERVICE ENTRANCE</td>
        </tr>
    </table>
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:393px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px">ANNUAL INSPECTION</td>
            <td class="th" style="width: 30%; padding-left:5px">SEPARATION OF SERVICE ENTRANCE</td>
            <td class="th" style="width: 40%; padding-left:5px">OHERS (Specify) __________________________</td>
        </tr>
    </table>
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:407px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px">TEMPORARY</td>
            <td class="th" style="width: 30%; padding-left:5px">UPGRADING OF SERVICE ENTRANCE</td>
            <td class="th" style="width: 40%; padding-left:5px">__________________________________________</td>
        </tr>
    </table>
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:421px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px; color:white">ALTERATION       </td>
            <td class="th" style="width: 30%; padding-left:5px"></td>
            <td class="th" style="width: 40%; padding-left:5px"></td>
        </tr>
    </table>
    
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:435px;  border-left: 1px solid; border-right: 1px solid; border-bottom:1px solid">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px; color:white">A</td>
            <td class="th" style="width: 30%; padding-left:5px"></td>
            <td class="th" style="width: 40%; padding-left:5px"></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:449px; border-left:1px solid; border-right:1px solid;  border-bottom: 1px solid;">
        <tr>
            <td class="th" style="width: 100%; text-align:center "> <strong> SUMMARY OF ELECTRICAL LOADS/CAPACITIES APPLIED FOR</strong></td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:463px; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 30%; padding-left: 5px; color:white">INVISIBLE LR-border</td>
            <td class="th" style="width: 40%; padding-left: 5px;"></td>
            <td class="th" style="width: 30%; padding-left: 5px;"></td>
        </tr>
    </table>
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:477px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
            <td class="th" style="width: 33%; text-align:center ">TOTAL CONNECT LOAD</td>
            <td class="th" style="width: 33%; text-align:center ">TOTAL TRANSFORMER CAPACITY</td>
            <td class="th" style="width: 34%; text-align:center ">TOTAL GENERATOR/UPS CAPACITY</td>
        </tr>
    </table>
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:491px; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 30%; padding-left: 5px; color:white">INVISIBLE LR-border</td>
            <td class="th" style="width: 40%; padding-left: 5px;"></td>
            <td class="th" style="width: 30%; padding-left: 5px;"></td>
        </tr>
    </table>

    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:505px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
            <td class="th" style="width: 33%; text-align:center ">__________KVA</td>
            <td class="th" style="width: 33%; text-align:center ">__________KVA</td>
            <td class="th" style="width: 34%; text-align:center ">__________KVA</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:519px; border-left:1px solid; border-right:1px solid; border-bottom:1px solid ">
        <tr>
            <td class="th" style="width: 30%; padding-left: 5px; color:white">INVISIBLE LRB-border</td>
            <td class="th" style="width: 40%; padding-left: 5px;"></td>
            <td class="th" style="width: 30%; padding-left: 5px;"></td>
        </tr>
    </table>



    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:533px;">
        <tr >
            <td class="th" style="width: 100%;"> <strong> BOX 2 (TO BE ACCOMPLISHED BY THE DESIGN PROFESSIONAL)</strong></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:547px; border-left:1px solid; border-right:1px solid; border-top:1px solid">
        <tr>
            <td class="th" style="width: 100%; padding-left: 5px; border-bottom: 1px solid">DESIGN PROFESSIONALS, PLANS AND SPECIFICATIONS</td>
        </tr>
    </table>



        <!--------------------------------------------- TABLE  -------------------------------------------------------->
        <table width="100%" style="border-collapse: collapse; position:absolute; top:561px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px;  border-left: 1px solid">Address</td>
        </tr>
    </table>

    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:575px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid;  border-right: 1px solid; ">.</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left:1px solid; border-right: 1px solid"></td>

        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:589px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid; ">.</td>
            <td class="th" style="width: 50%; padding-left: 5px;border-left:1px solid; border-right: 1px solid"></td>

        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:603px; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px;  ">.</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left:1px solid;"></td>

        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:617px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px;  ">.</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center">CIVIL/STRUCTURAL ENGINEER</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid; border-top:1px solid">PRC No.</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid; border-top:1px solid">Validity</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:631px; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center; font-size:.4em">(Signed & Sealed Over Printed Name)</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">PTR No.</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Date Issued</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:645px; border-left:1px solid; border-right:1px solid; border-bottom:1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center; font-size:.4em">Date_____________________</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Issued at</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">TIN</td>
        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:659px;">
        <tr >
            <td class="th" style="width: 100%;"> <strong> BOX 3</strong></td>
        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:673px; border-left:1px solid; border-right:1px solid; border-top:1px solid">
        <tr>
            <td class="th" style="width: 100%; padding-left: 5px; border-bottom: 1px solid">SUPERVISOR OF ELECTRICAL WORKS</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:687px; border-left:1px solid; border-right:1px solid;">
        <tr >
            <td class="th" style="width: 100%; color:white;">B</td>
        </tr>
    </table>
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:701px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
            <td class="th" style="width: 33%; text-align:center ">PROFESSIONAL ELECTRICAL ENGINEER</td>
            <td class="th" style="width: 33%; text-align:center ">LICENSE ELECTRICAL ENGINEER</td>
            <td class="th" style="width: 34%; text-align:center ">LICENSED MASTER ELECTRICIAN</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:715px; border-left:1px solid; border-right:1px solid;">
        <tr >
            <td class="th" style="width: 100%; color:white;">B</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:729px; border-left:1px solid; border-right:1px solid;">
        <tr >
            <td class="th" style="width: 100%; color:white;">B</td>
        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:743px; border-left:1px solid; border-right:1px solid;">
        <tr >
            <td class="th" style="width: 100%; text-align:center">_____________________________________________________________________________________________</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:757px; border-left:1px solid; border-right:1px solid;">
        <tr >
            <td class="th" style="width: 100%; text-align:center">(Signed and/or Sealed Over Printed Name)</td>
        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:771px; border-left:1px solid; border-right:1px solid; border-bottom:1px solid">
        <tr >
            <td class="th" style="width: 100%; text-align:center">Date</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:785px; border-left:1px solid; border-right:1px solid;">
        <tr>
            <td class="th" style="width: 100%; padding-left: 5px; border-bottom: 1px solid">Address</td>
        </tr>
    </table>

    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:799px; border-left:1px solid; border-right:1px solid;">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-right:1px solid">PRC No.</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid">Validity</td>
        </tr>
    </table>


    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:813px; border-left:1px solid; border-right:1px solid;">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-right:1px solid">PTR No.</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid">Date Issued</td>
        </tr>
    </table>

    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:827px; border-left:1px solid; border-right:1px solid;">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-right:1px solid">Issued At</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid">TIN</td>
        </tr>
    </table>



    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:841px;">
        <tr >
            <td class="th" style="width: 50%;"> <strong> BOX 4</strong></td>
            <td class="th" style="width: 50%;"> <strong>BOX 5</strong> </td>
        </tr>
    </table>

 <!--------------------------------------------- TABLE  -------------------------------------------------------->
 <table width="100%" style="border-collapse: collapse; position:absolute; top:855px; border-left:1px solid; border-right:1px solid; border-top:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid">BUILDING OWNER</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-left: 1px solid">WITH MY CONSENT: LOT OWNER</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:869px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; color:white">A</td>
        </tr>
    </table>

    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:883px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 30%; padding-left: 15px; border-left: 1px solid; "></td>
            <td class="th" style="width: 20%; padding-left: 15px; border-left: 1px solid; color:white ">A</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:897px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; color:white">A</td>
        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:911px; border-left:1px solid; border-right:1px solid">
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
    <table width="100%" style="border-collapse: collapse; position:absolute; top:925px; border-left:1px solid; border-right:1px solid; border-bottom:1px solid">
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
    <table width="100%" style="border-collapse: collapse; position:absolute; top:939px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid">Address</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-left: 1px solid">Address</td>
        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:953px; border-left:1px solid; border-right:1px solid; border-bottom:1px solid">
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
    <table width="100%" style="border-collapse: collapse; position:absolute; top:967px;">
        <tr >
            <td class="th" style="width: 100%; padding-left: 5px;">Original-Applicants Copy, Pink-Assessor's Copy, Yellow-NCSO Copy, Blue-Building Officials Copy, Green-Acid Copy</td>
        </tr>
    </table>









  <div>
     <!-- 0 -->
  </div>

  <div class="page-break"></div>
  <input type="checkbox" style="position:absolute; top:-200px; left:25px;">
  <input type="checkbox" style="position:absolute; top:-200px; left:315px;">
  <input type="checkbox" style="position:absolute; top:-185px; left:25px;">
  <input type="checkbox" style="position:absolute; top:-170px; left:25px;">
  <input type="checkbox" style="position:absolute; top:-155px; left:315px;">

  <p style="position:absolute;top:246px; left:600px; font-size:.3em">_________________________________________</p>
  <p style="position:absolute;top:252px; left:620px; font-size:.4em">ELECTRICAL ENGINEER</p>
  <p style="position:absolute;top:260px; left:610px; font-size:.3em">(Signed and Sealed Over Printed Name)</p>
  <p style="position:absolute;top:265px; left:620px; font-size:.3em">PRC Reg. No_____________</p>

  <!--------------------------------------------- TABLE  -------------------------------------------------------->
     <table width="90%" style="border-collapse: collapse; margin-top:10px;">
        <tr >
            <td class="th" style="width: 100%;"> <strong> BOX 6 (TO BE ACCOMPLISHED BY THE PROCESSING AND EVALUATION DIVISION)</strong></td>
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
            <td class="th" style="width: 100%; text-align:center "> <strong> FIVE(5) SETS OF CIVIL/STRUCTURAL DOCUMENTS</strong></td>
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
            <td class="th" style="width: 40%; padding-left: 5px;">ELECTRICAL PLANS & SPECIFICATIONS</td>
            <td class="th" style="width: 55%; padding-left: 5px;  ">EXPECTED DATE OF COMPLETION/INSTALLATION/CONSTRUCTION</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;">
        <tr>

            <td class="th" style="width: 5%; padding-left: 5px;  "></td>
            <td class="th" style="width: 40%; padding-left: 5px;">SPECIAL FIXTURES AND EQUIPMENT</td>
            <td class="th" style="width: 55%; padding-left: 5px;  ">______________________________________________________</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px;  "></td>
            <td class="th" style="width: 40%; padding-left: 5px;">PROPOSED STARTING DATE OF INSTALLATION/CONTRUCTION</td>
            <td class="th" style="width: 55%; padding-left: 5px;  ">______________________________________________________</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;">
        <tr>
        <td class="th" style="width: 5%; padding-left: 5px;  "></td>
            <td class="th" style="width: 40%; padding-left: 5px;">_____________________________________________________</td>
            <td class="th" style="width: 55%; padding-left: 5px;  ">Others (Specify)______________________________________</td>
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
            <td class="th" style="width: 100%;"> <strong> BOX 7</strong></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; border-top:1px solid; border-bottom: 1px solid;">
        <tr>
            <td class="th" style="width: 100%; padding-left: 5px; text-align:center "> <strong> PROGRESS FLOW</strong></td>
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
            <td class="th" style="width: 20%; border-bottom: 1px solid; text-align:center">PROCESSED BY</td>
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
            <td class="th" style="width: 40%; padding-left: 5px; border-right: 1px solid; ">ELECTRICAL</td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid;  "></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid;  "></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; "></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; "></td>
            <td class="th" style="width: 20%; padding-left: 5px;  font-size:.3em; text-align:center"></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 40%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;">.</td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid; "></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid; "></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;"></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;"></td>
            <td class="th" style="width: 20%; padding-left: 5px; font-size:.3em; text-align:center"></td>
        </tr>
    </table>

    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 40%; padding-left: 5px; border-right: 1px solid; ">OTHERS (Specify)</td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid;  "></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid;  "></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; "></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; "></td>
            <td class="th" style="width: 20%; padding-left: 5px;  font-size:.3em; text-align:center "></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 40%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;">.</td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid; "></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid; "></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;"></td>
            <td class="th" style="width: 10%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;"></td>
            <td class="th" style="width: 20%; padding-left: 5px; border-bottom: 1px solid; font-size:.3em; text-align:center ">Validity___________</td>
        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="90%" style="border-collapse: collapse; margin-top:10px;">
        <tr >
            <td class="th" style="width: 100%;"> <strong> BOX 8 (TO BE ACCOMPLISHED BY THE ELECTRICAL SECTION OF THE OFFICE OF THE BUILDING OFFICIAL</strong></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; border-top:1px solid; border-bottom:1px solid">
        <tr>
            <td class="th" style="width: 100%; text-align:center"> <strong> ASSESSED FEES</strong></td>
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
            <td class="th" style="width: 20%; padding-left:5px; ">ELECTRICAL</td>
            <td class="th" style="width: 15%; border-left:1px solid;   "></td>
            <td class="th" style="width: 15%; border-left:1px solid;   "></td>
            <td class="th" style="width: 15%; border-left:1px solid;   "></td>
            <td class="th" style="width: 15%; border-left:1px solid;   "></td>
            <td class="th" style="width: 20%; border-left:1px solid;  "></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; ">
        <tr>
            <td class="th" style="width: 20%; border-bottom: 1px solid; ">.</td>
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
            <td class="th" style="width: 20%; padding-left:5px; ">OTHERS (Specify)</td>
            <td class="th" style="width: 15%; border-left:1px solid;   "></td>
            <td class="th" style="width: 15%; border-left:1px solid;   "></td>
            <td class="th" style="width: 15%; border-left:1px solid;   "></td>
            <td class="th" style="width: 15%; border-left:1px solid;   "></td>
            <td class="th" style="width: 20%; border-left:1px solid;  "></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid;">
        <tr>
            <td class="th" style="width: 20%; border-bottom: 1px solid; ">.</td>
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
            <td class="th" style="width: 20%; border-left:1px solid; border-bottom: 1px solid; font-size:.3em; text-align:center"> <strong> CHIEF PROCESSING & EVALUATION DIVISION</strong></td>
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
            <td class="th" style="width: 100%; padding-left: 20px; border-right: 1px solid;  "><strong>ACTION TAKEN:</strong></td>
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
            <td class="th" style="width: 100%; padding-left: 20px; border-right: 1px solid;  "><strong>PERMIT IS HEREBY ISSUED SUBJECT TO THE FOLLOWING:</strong></td>
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
            <li class="th">That the proposed electrical works shall be in accordance with the electrical plans filed with this Office and in conformity with the provisions of the latest Philippine Electrical Code, the National Building Code and its IRR.</li>
            <li class="th">That prior to any electrical installation, the Owner/Permittee shall submit a duly accomplished prescribed Notice of Construction to the Office of the Building Official.</li>
            <li class="th">That for installed electrical capacity of 200 amperes and above at 230 volts nominal and above, a specialty electrical contractor duly licensed by the Philippine Contractors Accreditation Board (PCAB) shall be required.</li>
            <li class="th">That a duly licensed electrical practitioner shall be in-charge of the installation, and that upon completion of the elctrical works, he shall submit the entry of the logbook duly signed and sealed to the OBO including as-build plans and other documents. He shall also accomplish the Certificate of Completion stating that the electrical works conform to the provisions of the Philippine Lectrical Code, the National Building code and its IRR.</li>
            <li class="th">That this permit is null and void unless accompanied by the building permit except for projects involving purely electrical works in which case only the building permit number of the existing building/structure shall be required.</li>
            <li class="th">That a Certificate of Final Electrical Inspection (CFEI) shall be secured prior to the actual occupancy of the building.</li>
            <li class="th">That this permit shall be posted at the door or site of work.</li>
        </ol>
        <p></p>
        <p style="margin-left:20px; font-size:.5em"><strong>PERMIT ISSUED BY:</strong></p>
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