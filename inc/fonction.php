<?php
    include('connecxon.php');  
    
    function table_recettes()
    {
        $sql ="SELECT * FROM recettes";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($recettes = mysqli_fetch_assoc($requet))
        {
            $result[] = $recettes;
        }
        mysqli_free_result($requet);
        return $result;  
    }
    
    function table_depenses()
    {
        $sql ="SELECT * FROM depenses";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($depenses = mysqli_fetch_assoc($requet))
        {
            $result[] = $depenses;
        }
        mysqli_free_result($requet);
        return $result;  
    }

    function table_depenses1()
    {
        $sql ="SELECT * FROM depenses1";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($depenses = mysqli_fetch_assoc($requet))
        {
            $result[] = $depenses;
        }
        mysqli_free_result($requet);
        return $result;  
    }

    function table_recettes_href()
    {
        $sql ="SELECT * FROM recettes_href";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($recettes_href = mysqli_fetch_assoc($requet))
        {
            $result[] = $recettes_href;
        }
        mysqli_free_result($requet);
        return $result;  
    }

    function table_recettes_fiscales()
    {
        $sql ="SELECT * FROM tableau3";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($recettes_fiscales = mysqli_fetch_assoc($requet))
        {
            $result[] = $recettes_fiscales;
        }
        mysqli_free_result($requet);
        return $result;  
    }
    
    function totale_recettes_fiscales()
    {
        $sql ="SELECT * FROM tableau3";
        $requet = mysqli_query(dbconnect(),$sql);
        $avant = 0;
        $apres = 0;
        $result = array();
        while($recettes_fiscales = mysqli_fetch_assoc($requet))
        {
            $avant = $avant + $recettes_fiscales['avant'];
            $apres = $apres + $recettes_fiscales['apres'];
        }
        $result[0] = $avant;
        $result[1] = $apres;
        mysqli_free_result($requet);
        return $result;  
    }

    function table_recettes_douanieres()
    {
        $sql ="SELECT * FROM tableau4";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($recettes_fiscales = mysqli_fetch_assoc($requet))
        {
            $result[] = $recettes_fiscales;
        }
        mysqli_free_result($requet);
        return $result;  
    }
    
    function totale_recettes_douanieres()
    {
        $sql ="SELECT * FROM tableau4";
        $requet = mysqli_query(dbconnect(),$sql);
        $avant = 0;
        $apres = 0;
        $result = array();
        while($recettes_fiscales = mysqli_fetch_assoc($requet))
        {
            $avant = $avant + $recettes_fiscales['avant'];
            $apres = $apres + $recettes_fiscales['apres'];
        }
        $result[0] = $avant;
        $result[1] = $apres;
        mysqli_free_result($requet);
        return $result;  
    }

    function table_recettes_non_fiscales()
    {
        $sql ="SELECT * FROM tableau5";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($recettes_fiscales = mysqli_fetch_assoc($requet))
        {
            $result[] = $recettes_fiscales;
        }
        mysqli_free_result($requet);
        return $result;  
    }
    
    function totale_recettes_non_fiscales()
    {
        $sql ="SELECT * FROM tableau5";
        $requet = mysqli_query(dbconnect(),$sql);
        $avant = 0;
        $apres = 0;
        $result = array();
        while($recettes_fiscales = mysqli_fetch_assoc($requet))
        {
            $avant = $avant + $recettes_fiscales['avant'];
            $apres = $apres + $recettes_fiscales['apres'];
        }
        $result[0] = $avant;
        $result[1] = $apres;
        mysqli_free_result($requet);
        return $result;  
    }

    function table_recettes_don()
    {
        $sql ="SELECT * FROM tableau6";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($recettes_fiscales = mysqli_fetch_assoc($requet))
        {
            $result[] = $recettes_fiscales;
        }
        mysqli_free_result($requet);
        return $result;  
    }
    
    function totale_recettes_don()
    {
        $sql ="SELECT * FROM tableau6";
        $requet = mysqli_query(dbconnect(),$sql);
        $avant = 0;
        $apres = 0;
        $result = array();
        while($recettes_fiscales = mysqli_fetch_assoc($requet))
        {
            $avant = $avant + $recettes_fiscales['avant'];
            $apres = $apres + $recettes_fiscales['apres'];
        }
        $result[0] = $avant;
        $result[1] = $apres;
        mysqli_free_result($requet);
        return $result;  
    }
    
    function table_depenses_rubrique()
    {
        $sql ="SELECT * FROM tableau7";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($recettes_fiscales = mysqli_fetch_assoc($requet))
        {
            $result[] = $recettes_fiscales;
        }
        mysqli_free_result($requet);
        return $result;  
    }
    
    function totale_depenses_rubrique()
    {
        $sql ="SELECT * FROM tableau7";
        $requet = mysqli_query(dbconnect(),$sql);
        $avant = 0;
        $apres = 0;
        $result = array();
        while($recettes_fiscales = mysqli_fetch_assoc($requet))
        {
            $avant = $avant + $recettes_fiscales['avant'];
            $apres = $apres + $recettes_fiscales['apres'];
        }
        $result[0] = $avant;
        $result[1] = $apres;
        mysqli_free_result($requet);
        return $result;  
    }

    function table_tab8()
    {
        $sql ="SELECT * FROM tableau8 where id_tab8 = 1";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = mysqli_fetch_assoc($requet);
        return $result;  
    }
    
    function table_tout_tab8()
    {
        $sql ="SELECT * FROM tableau8";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($recettes_fiscales = mysqli_fetch_assoc($requet))
        {
            $result[] = $recettes_fiscales;
        }
        mysqli_free_result($requet);
        return $result;
    }
    function table_tab8b()
    {
        $sql ="SELECT * FROM tableau8b";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($recettes_fiscales = mysqli_fetch_assoc($requet))
        {
            $result[] = $recettes_fiscales;
        }
        mysqli_free_result($requet);
        return $result;  
    }
    
    function totale_tab8b()
    {
        $sql ="SELECT * FROM tableau8b";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = 0;
        while($totale = mysqli_fetch_assoc($requet))
        {
            $result = $result + $totale['prix'];
        }
        mysqli_free_result($requet);
        return $result;  
    }
            
    function table_tout_tab9()
    {
        $sql ="SELECT * FROM tableau9";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($tout_tab9 = mysqli_fetch_assoc($requet))
        {
            $result[] = $tout_tab9;
        }
        mysqli_free_result($requet);
        return $result;  
    }

    function totale_table_tab9()
    {
        $sql ="SELECT SUM(avant) AS avant ,SUM(apres) AS apres,SUM(ecart) AS ecart FROM tableau9";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($tableau9 = mysqli_fetch_assoc($requet))
        {
            $result = $tableau9;
        }
        mysqli_free_result($requet);
        return $result;  
    }
    
    function totale_tab9()
    {
        $sql ="SELECT * FROM depenses_tab9";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = mysqli_fetch_assoc($requet);
        return $result;  
    }
        
    function tableau10()
    {
        $sql ="SELECT * FROM tableau10";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($tableau10 = mysqli_fetch_assoc($requet))
        {
            $result[] = $tableau10;
        }
        mysqli_free_result($requet);
        return $result; 
    }

        
    function Situ_deficit()
    {
        $sql ="SELECT * FROM Situ_deficit";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($Situ_deficit = mysqli_fetch_assoc($requet))
        {
            $result[] = $Situ_deficit;
        }
        mysqli_free_result($requet);
        return $result; 
    }
            
    function financ_deficit()
    {
        $sql ="SELECT * FROM financ_deficit";
        $requet = mysqli_query(dbconnect(),$sql);
        $result = array();
        while($financ_deficit = mysqli_fetch_assoc($requet))
        {
            $result[] = $financ_deficit;
        }
        mysqli_free_result($requet);
        return $result; 
    }
?>