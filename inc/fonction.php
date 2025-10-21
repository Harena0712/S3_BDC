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
?>