<?php
    echo (strcomp(strtolower($stringToCheck),
        strtolower(stringrev($stringToCheck)))) ? "Yes" : "No";
?>