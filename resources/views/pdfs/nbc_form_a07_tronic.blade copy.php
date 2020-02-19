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


    <input type="checkbox" style="position:absolute; top:111px; left:10px;">
    <input type="checkbox" style="position:absolute; top:111px; left:207px;">
    <input type="checkbox" style="position:absolute; top:111px; left:423px;">

  
    <div class="gitna">
        <ul class="bulit">
            <li class="liit">Republic of the Philippines</li>
            <li class="liit">Province of Oriental Mindoro</li>
            <li class="liit">CITY OF CALAPAN</li>
            <li class="liit"> <strong> TANGGAPAN NG PINUNONG PANGGUSALI</strong></li>
            <li class="liit">Office of the Building Official</li>
            <li class="liit" style="color:white">a</li>
            <li class="liit" style="color:white">a</li>
            <li><h5></strong>ELECTRONICS PERMIT</strong></h5></li>
        </ul>
    </div>
    <table width="80%">
        <tr>
            <td  style="font-size: .5em; width:10%">APPLICATION NO.</td>
            <td  style="font-size: .5em; width:15%">{{ isset($application_id) ? $application_id  :  '' }}</td>
            <td  style="font-size: .5em; width:5%">C/SP NO.</td>
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

    <table width="100%" style="border-collapse: collapse; position:absolute; top:296px;  border-left: 1px solid;border-right: 1px solid  ">
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
        <tr>
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
            <td class="th" style="width: 30%; padding-left:25px; color:white">.</td>
            <td class="th" style="width: 30%; padding-left:5px"></td>
            <td class="th" style="width: 40%; padding-left:5px"></td>
        </tr>
    </table>
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:394px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px">NEW INSTALLATION</td>
            <td class="th" style="width: 30%; padding-left:5px">ANNUAL INSPECTIONI</td>
            <td class="th" style="width: 40%; padding-left:5px">OTHERS (Specify)_________________</td>
        </tr>
    </table>
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:408px;  border-left: 1px solid; border-right: 1px solid; border-bottom:1px solid">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px; color:white">A</td>
            <td class="th" style="width: 30%; padding-left:5px"></td>
            <td class="th" style="width: 40%; padding-left:5px"></td>
        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:422px;">
        <tr >
            <td class="th" style="width: 100%;">BOX 2 (TO BE ACCOMPLISHED BY THE DESIGN PROFESSIONAL)</td>
        </tr>
    </table>



    <!--------------------------------------------- NATURE OF CIVIL WORKS TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:436px;  border-left: 1px solid; border-right: 1px solid; border-top:1px solid ">
        <tr >
            <td class="th" style="padding-left:5px">NATURE OF INSTALLATION WORKS/EQUIPMENT SYSTEM:</td>
        </tr>
    </table>
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:450px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
            <td class="th" style="width: 100%; padding-left:25px; color:white">A</td>
        </tr>
    </table>
    <!--------------------------------------------- NATURE OF CIVIL WORKS TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:464px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 28%; padding-left:20px;">TELECOMMUNICATION SYSTEM</td>
            <td class="th" style="width: 28%; ">ELECTRONICS FIRE ALARM SYSTEM</td>
            <td class="th" style="width: 44%; ">ELECTRONICS COMPUTERIZED PROCESS</td>
        </tr>
    </table>
    <!--------------------------------------------- NATURE OF CIVIL WORKS TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:478px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 28%; ;"></td>
            <td class="th" style="width: 28%; "></td>
            <td class="th" style="width: 44%; ">CONTROLS AUTOMATION SYSTEM</td>
        </tr>
    </table>

    <!--------------------------------------------- NATURE OF CIVIL WORKS TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:492px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 28%; padding-left:20px;">BROADCASTING SYSTEM</td>
            <td class="th" style="width: 28%;">SOUND COMMUNICATION SYSTEM</td>
            <td class="th" style="width: 44%;">BUILDING AUTOMATION MANAGEMENT</td>         
        </tr>
    </table>

    
    <!--------------------------------------------- NATURE OF CIVIL WORKS TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:506px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 28%; padding-left:20px;"></td>
            <td class="th" style="width: 28%;"></td>
            <td class="th" style="width: 44%;">AND CONTROL SYSTEM</td>         
        </tr>
    </table>

    <!--------------------------------------------- NATURE OF CIVIL WORKS TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:492px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 20%; padding-left:5px;">TELEVISION SYSTEM</td>
            <td class="th" style="width: 30%; padding-left:5px">CENTRALIZED CLOCK SYSTEM</td>
            <td class="th" style="width: 50%; padding-left:5px">BUILDING WIRING UTILIZING COPPER CABLE, FIBER OPTIC CABLE OR </td>
        </tr>
    </table>
    <!--------------------------------------------- NATURE OF CIVIL WORKS TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:506px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
            <td class="th" style="width: 20%; padding-left:5px;">SECURITY AND ALARM SYSTEM</td>
            <td class="th" style="width: 30%; padding-left:5px">ELECTRONICS CONTROL AND CONVEYOR SYSTEM</td>
            <td class="th" style="width: 50%; padding-left:5px">OTHER MEDIAL ELECTRONIC SYSTEM</td>
        </tr>
    </table>
    
    <!--------------------------------------------- NATURE OF CIVIL WORKS TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:520px;  border-left: 1px solid; border-right: 1px solid; ">
        <tr >
            <td class="th" style="width: 100%; padding-left:5px;">AND OTHER ELECTRONICS AND IT SYSTEMS, EQUIPMENT, APPARATUS, DEVICE AND/OR COMPONENTS (Specify) _____________</td>
        </tr>
    </table>

    
    <!--------------------------------------------- NATURE OF CIVIL WORKS TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:534px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
        <td class="th" style="width: 40%; padding-left:25px;"></td>
            <td class="th" style="width: 30%; padding-left:5px"></td>
            <td class="th" style="width: 30%; padding-left:5px; color:white">a</td>
        </tr>
    </table>

    <!--------------------------------------------- NATURE OF CIVIL WORKS TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:548px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
        <td class="th" style="width: 40%; padding-left:25px;"></td>
            <td class="th" style="width: 30%; padding-left:5px"></td>
            <td class="th" style="width: 30%; padding-left:5px; color:white">a</td>
        </tr>
    </table>

    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:562px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px; color:white">A</td>
            <td class="th" style="width: 30%; padding-left:5px"></td>
            <td class="th" style="width: 40%; padding-left:5px"></td>
        </tr>
    </table>

    <!--------------------------------------------- NATURE OF CIVIL WORKS TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:576px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
        <td class="th" style="width: 100%; padding-left:25px;">PREPARED BY ______________________________________________________________________________________________________________________________________</td>
        </tr>
    </table>

    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:590px;  border-left: 1px solid; border-right: 1px solid;">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px; color:white">A</td>
            <td class="th" style="width: 30%; padding-left:5px"></td>
            <td class="th" style="width: 40%; padding-left:5px"></td>
        </tr>
    </table>


    
    <!--------------------------------------------- SCOPE OF WORK TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:604px;  border-left: 1px solid; border-right: 1px solid; border-bottom: 1px solid">
        <tr >
            <td class="th" style="width: 30%; padding-left:25px; color:white">A</td>
            <td class="th" style="width: 30%; padding-left:5px"></td>
            <td class="th" style="width: 40%; padding-left:5px"></td>
        </tr>
    </table>



    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:618px;">
        <tr >
            <td class="th" style="width: 50%;">BOX 3</td>
            <td class="th" style="width: 50%;">BOX 4</td>
        </tr>
    </table>   

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:632px; border-left:1px solid; border-right:1px solid; border-top:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid">DESIGN PROFESSIONALS, PLANS AND SPECIFICATIONS</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-left: 1px solid">SUPERVISOR/IN-CHARGE OF ELECTRONIC  WORKS</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:646px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; color:white">A</td>
        </tr>
    </table>

    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:660px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 30%; padding-left: 15px; border-left: 1px solid; "></td>
            <td class="th" style="width: 20%; padding-left: 15px; color:white ">a</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:674px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; color:white">A</td>
        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:688px; border-left:1px solid; border-right:1px solid">
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
    <table width="100%" style="border-collapse: collapse; position:absolute; top:702px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center">PROFESSIONAL ELECTRONICS ENGINEEER</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center;  font-size:.4em">PROFESSIONAL ELECTRONICS ENGINEEER</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:716px; border-left:1px solid; border-right:1px solid; border-bottom:1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center; font-size:.4em">(Signed & Sealed Over Printed Name)</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center; font-size:.4em">(Signed & Sealed Over Printed Name)</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
        </tr>
    </table>



    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:730px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid">Address</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-left: 1px solid">Address</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:744px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">PRC No.</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Validity</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">PRC No.</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Validity</td>

        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:758px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">PTR No.</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Date Issued</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">PTR No.</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Date Issued</td>

        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:772px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Issued at</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">TIN</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">Issued at</td>
            <td class="th" style="width: 25%; padding-left: 5px; border-left:1px solid; border-bottom: 1px solid">TIN</td>

        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:786px;">
        <tr >
            <td class="th" style="width: 50%;">BOX 5</td>
            <td class="th" style="width: 50%;">BOX 6</td>
        </tr>
    </table>   

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:800px; border-left:1px solid; border-right:1px solid; border-top:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; ">BUILDING OWNER</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid">WITH MY CONSENT: LOT OWNER</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:814px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; color:white">A</td>
        </tr>
    </table>

    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:828px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 30%; padding-left: 15px; border-left: 1px solid; "></td>
            <td class="th" style="width: 20%; padding-left: 15px; border-left: 1px solid; color:white ">A</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:842px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-right: 1px solid"></td>
            <td class="th" style="width: 50%; padding-left: 5px; border-left: 1px solid; color:white">A</td>
        </tr>
    </table>
    
    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:856px; border-left:1px solid; border-right:1px solid">
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
    <table width="100%" style="border-collapse: collapse; position:absolute; top:870px; border-left:1px solid; border-right:1px solid;">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center; font-size:.4em">(Signature Over Printed Name)</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center; font-size:.4em;  font-size:.4em">(Signature Over Printed Name)</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:884px; border-left:1px solid; border-right:1px solid; border-bottom:1px solid">
        <tr>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center; font-size:.3em">Date __________________________</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
            <td class="th" style="width: 5%; padding-left: 5px; color:white ">A</td>
            <td class="th" style="width: 40%; padding-left: 5px; text-align:center;  font-size:.3em">Date __________________________</td>
            <td class="th" style="width: 5%; padding-left: 5px;  border-right: 1px solid"></td>
        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:898px; border-left:1px solid; border-right:1px solid">
        <tr>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid">Address</td>
            <td class="th" style="width: 50%; padding-left: 5px; border-bottom: 1px solid; border-left: 1px solid">Address</td>
        </tr>
    </table>


    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; position:absolute; top:912px; border-left:1px solid; border-right:1px solid; border-bottom:1px solid">
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
    <table width="100%" style="border-collapse: collapse; position:absolute; top:926px;">
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
            <td class="th" style="width: 100%;">BOX 7 (TO BE ACCOMPLISHED BY THE PROCESSING AND EVALUATION DIVISION)</td>
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
            <td class="th" style="width: 30%; padding-left: 5px; ">FIVE(5) SETS OF ELECTRONICS DOCUMENTS</td>
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
            <td class="th" style="width: 45%; padding-left: 5px;">ELECTRONICS PLANS & SPECIFICATOINS</td>
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
            <td class="th" style="width: 100%;">BOX 8</td>
        </tr>
    </table>

    <!--------------------------------------------- TABLE  -------------------------------------------------------->
    <table width="100%" style="border-collapse: collapse; border-left:1px solid; border-right:1px solid; border-top:1px solid; border-bottom: 1px solid;">
        <tr>
            <td class="th" style="width: 100%; padding-left: 5px; text-align:center ">PROGRESS FLOW</td>
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
            <td class="th" style="width: 40%; padding-left: 5px; border-right: 1px solid; border-bottom: 1px solid;">ELECTRONICS</td>
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
            <td class="th" style="width: 100%;">BOX 9</td>
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
            <li class="th">That the proposed electronics works shall be in accordance with the electronic plans filed with this office and in conformity with the latest Electronics Code of the Philippines, the National Building Code and its IRR.</li>
            <li class="th">That prior to any electronics installation, a duly accomplished prescribed "Notice of Construction" shall be submitted to the Office of the Building Official.</li>
            <li class="th">That upon completion of the electronic works, the licensed supervisor/in-charge shall submit the entry to the logbook duly signed and sealed to the building official including as-built plans and other documents and shall also accomplished the certificate of completion stating that the electronic works conforms to the provision of the Electronic Code of the Philippines, the National Building Code and its IRR.</li>
            <li class="th">That this permit is null and void unless accompanied by the building permit.</li>
        </ol>
        <p></p>
        <p style="padding-left:20px; font-size:.5em"> <strong> PERMIT ISSUED BY:</strong></p>
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