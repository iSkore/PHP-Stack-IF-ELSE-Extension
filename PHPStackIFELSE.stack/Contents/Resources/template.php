%[if edit]% <h1 class="headIf">IF : </h1> %[endif]%
%[if edit]% <div class="col"> %[endif]%
<?php
    if (%id=phpCode_If%) {
        ?>
            %slice%
        <?php
    } else if (%id=phpCode_Else_1%) {
        %[if %("%id=else1Bool%" == "true")%]%
            ?>
                %[if edit]%<h1>ELSE IF : </h1>%[endif]%
                %slice%
            <?php
        %[endif]%
    } else if (%id=phpCode_Else_2%) {
        %[if %("%id=else2Bool%" == "true")%]%
            ?>
                %[if edit]%<h1>ELSE IF : </h1>%[endif]%
                %slice%
            <?php
        %[endif]%
    } else if (%id=phpCode_Else_3%) {
        %[if %("%id=else3Bool%" == "true")%]%
            ?>
                %[if edit]%<h1>ELSE IF : </h1>%[endif]%
                %slice%
            <?php
        %[endif]%
    } else if (%id=phpCode_Else_4%) {
        %[if %("%id=else4Bool%" == "true")%]%
            ?>
                %[if edit]%<h1>ELSE IF : </h1>%[endif]%
                %slice%
            <?php
        %[endif]%
    } else if (%id=phpCode_Else_5%) {
        %[if %("%id=else5Bool%" == "true")%]%
            ?>
                %[if edit]%<h1>ELSE IF : </h1>%[endif]%
                %slice%
            <?php
        %[endif]%
    }
?>
%[if edit]% </div> %[endif]%