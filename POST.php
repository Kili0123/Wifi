if(count($_POST)>0){
          
                $w ="";
                $countPOST = 0;

                if(strlen($_POST["VN"])> 0){
                    $arr[] = "tbl_mitarbeiter.Vorname=".$_POST["VN"];
                    $w = "WHERE(".$arr[0].")";
                    $countPOST++;
                }
                if(strlen($_POST["NN"])>0){
                    $arr[] = "tbl_mitarbeiter.Nachname=".$_POST["VN"];
                    $w = "WHERE(".$arr[0].")";
                    $countPOST++;
                }
                if(strlen($_POST["Kunde"])){
                    $arr[] = "tbl_kunden.Vorname=".$_POST["Kunde"];
                    $w = "WHERE(".$arr[0].")";
                    $countPOST++;
                }

                if(intval($countPOST) > 1){
                $w = "WHERE(".implode(" AND ", $arr).")";
                }
                ta($w);
                ta(intval($countPOST));
            }
