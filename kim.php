<?php
/**
 * KimPHP CLI
 * @version 1.0
 * 
 * @author Juan
 */
if (php_sapi_name() === 'cli') { 
    echo "+".str_repeat("-",100)."+\n";
    echo " KimPHP version 1.0\n";
    echo "+".str_repeat("-",100)."+\n";
    echo "Pwede kabang lumabas?  Type 'yes' or  'no' to continue: ";
    $handle = fopen ("php://stdin","r");
    $line = fgets($handle);
    fclose($handle);
    if(!in_array(trim($line), array('yes','no'))) exit("Ay bobo wag kanang lumabas yes or no lang ang sagot, pero sinagot mo '".trim($line)."'\n");
    if(trim($line) == 'yes'){
        echo "Pwede naman pala, sige labas na!\n";
        exit;
    }else{
        echo "Nag comply kaba?  Type 'yes' or  'no' to continue: ";
        $handle = fopen ("php://stdin","r");
        $line = fgets($handle);
        fclose($handle);
        if(!in_array(trim($line), array('yes','no'))) exit("Ay bobo wag kanang lumabas yes or no lang ang sagot, pero sinagot mo '".trim($line)."'\n");
        if(trim($line) == 'yes'){
            echo "Pwede naman pala, sige labas na!\n";
            exit;
        }else{
            echo "May ginawa ka bang pinagbabawal?  Type 'yes' or  'no' to continue: ";
            $handle = fopen ("php://stdin","r");
            $line = fgets($handle);
            fclose($handle);
            if(!in_array(trim($line), array('yes','no'))) exit("Ay bobo wag kanang lumabas yes or no lang ang sagot, pero sinagot mo '".trim($line)."'\n");
            if(trim($line) == 'yes'){
                echo "Sinubmit mo ba?  Type 'yes' or  'no' to continue: ";
                $handle = fopen ("php://stdin","r");
                $line = fgets($handle);
                fclose($handle);
                if(!in_array(trim($line), array('yes','no'))) exit("Ay bobo wag kanang lumabas yes or no lang ang sagot, pero sinagot mo '".trim($line)."'\n");
                if(trim($line) == 'yes'){
                    echo "Ay pwede naman pala lumabas ah!\n";
                    exit;
                }else{
                    echo "Ayy di ka pwede lumabas!\n";
                    exit;
                }
            }else{
                echo "Pwede naman pala, sige labas na!\n";
                exit;
            }
        }
    }
    
}else{
    exit("Wag kanang lumabas ayaw mo sundin ang patakaran!\n");  
}

?>