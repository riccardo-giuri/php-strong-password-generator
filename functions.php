<?php
function CheckWarnings($warningArray) {
        $returnCheck = false;

        foreach($warningArray as $warning) {
            if($warning['condition']) {
                $returnCheck = true;
            }
        };

        return $returnCheck;
    }

    function GeneratePassword($lenght, $warnings) {
        $retrunGenerated = "";

        if(!$warnings) {   

            for ($i=0; $i < $lenght; $i++) { 
                $retrunGenerated .= chr(rand(33, 122));
            }

            return $retrunGenerated;
        }  
    }
?>