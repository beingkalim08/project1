<?php
$random_code_post = '2';
$command = 'python Predicting_probablity_of_disease.py ' . $random_code_post;
$python = `$command`;
echo $python;
?>
<?php

                $option = '1';
                echo $option;


               $option1 = '5';
               echo $option1;
               exec('python Predicting_probablity_of_disease.py $option $option1', $output);
            echo $output;
               ?>