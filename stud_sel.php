<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> <!-- ajax -->

</head>
<body><div style="margin-top:10%;">
<label for="srch">Search Student</label><input type="text" placeholder="Enter Name or Ref no:" id="srch"><input type="button" value="Search" onclick="crete_list()"><input type="button" value="refresh" onclick="rldk()">
<div class="bking_list" id="bking_listz"></div>
<input type="Button" value="Download Selected Lst" onclick="csv_dn()">
</div>
</body>
<script>
crete_list();
function csv_dn()
{
window.location="print_csv_sel_list.php";    
}
function edtfn()
{



}

function viewclick(vonj) { //when click the view details button
           tst_id = vonj.getAttribute("data-stid");
            filldivplz(tst_id);
            document.getElementById("idview").style.display = "block";

        }
function filldivplz(reff_no_tst) {
            //used for fillng the test view div elements
                 //  alert(reff_no_tst); 
            $.ajax({
                url: "stud_dn_ajax.php",
                method: "POST",
                dataType: "JSON",
                data: {
                    idr: 3,
                    reff_dta: reff_no_tst,
                },
                success: function(resobjri) {
                  //  alert(resobjri[0]); 
                    document.getElementById("name").innerHTML = resobjri[0];
                    document.getElementById("stdid").innerHTML = resobjri[1];
                    document.getElementById("emaildw").innerHTML = resobjri[2];
                    document.getElementById("ph").innerHTML = resobjri[3];
                    document.getElementById("fin").innerHTML = resobjri[4];
                    document.getElementById("min").innerHTML = resobjri[5];
                    document.getElementById("sin").innerHTML = resobjri[6]+ resobjri[7];
                    document.getElementById("rank").innerHTML = resobjri[8];
                    document.getElementById("mark").innerHTML = resobjri[9];


                }
            });
        }

function rldk()
{
    document.getElementById("srch").value="";
    crete_list();

}
function crete_list() { //used for the creation of the list of bookings
           val1 = document.getElementById("srch").value; //date
           $.ajax({
                url: 'stud_dn_ajax.php',
                type: 'POST',
                dataType: "JSON",
                data: {
                    idr: 4,                
                },
                success: function(res1) {
                    $('#bking_listz').empty();
                    notfnd = `<h3 align='center' style='color:#EC8282;'>oobs,no details found</h3> `;
                  if (res1[0] != "NULL") {
                       
                        for (i = 0; i < res1.length; i++) {
                            idName = "stid" + i;
                            idLoca = "fname" + i;
                            tnamek = "roll" + i;
                            btnid = "sel" + i;
                            txv = `
                            <div id='` + i+ `' style='width:100%;height:35px;margin-top:5px;background-color:#DAC7C7;border-radius:15px;' ><b id='` + idName + `' style='color:black;margin-left:115px;font-size:20px;'>STUDID</b>   <b style="color:red;margin-left:115px;"id='` + idLoca + `'>FULL NAME</b> <b style="margin-left:115px;margin-right:115px;">ROLL NO: <b id='` + tnamek + `'></b></b></div><br>
                          `;

                            $('#bking_listz').append(txv);
                        }
                        fillData(res1);
                    } else {
                        $('#bking_listz').append(notfnd);
                    }
              
               },
            
            });
        }


function sel(vonj){
    tst_id = vonj.getAttribute("data-std");
    idada= vonj.getAttribute("data-ammuid");
            updt(tst_id,idada);
            
}
function updt(ref,idt)
{//alert(ref);
    klms=document.getElementById(idt).value;
    $.ajax({
                url: 'stud_dn_ajax.php',
                type: 'POST',
                dataType: "JSON",
                data: {
                    idr: 2,
                    srh:ref,
                    selfn:klms,
                
                },
                success: function(res1) {
                    crete_list();
               },
            
            });
}

        function fillData(kzm) { //used to fill data on the each booking div

for (i = 0; i < kzm.length; i++) {
    nameId = "stid" + i;
    locaId = "fname" + i;
    tnamerh = "roll" + i;
    btnammu = "sel" + i;
  //  dtr = "dt" + i;
      document.getElementById(nameId).innerHTML = kzm[i].studid;
    document.getElementById(locaId).innerHTML = kzm[i].fullname;
    document.getElementById(tnamerh ).innerHTML = kzm[i].rollno;
    if(kzm[i].selected=="")
    {
        document.getElementById(btnammu).style.backgroundColor ="#6F8BBA" ;
        document.getElementById(btnammu).value ="Select" ; 

    }
    else
    {
        document.getElementById(btnammu).style.backgroundColor ="green" ; 
        document.getElementById(btnammu).value ="Selected" ; 

    }

}

}
function clossdiv() { //used for closing the div and refresh the list
            document.getElementById("idview").style.display = "none";
           // document.getElementById("divtst").style.display = "none";
            crete_list();
        }
    </script>
</html>