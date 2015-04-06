<!-- Create header for display in editor -->
%[if edit]% <h1 class="headIf">IF : </h1> %[endif]%

<!-- Create collapsable div for organization in editor -->
%[if edit]% <div class="col"> %[endif]%

<!-- Start PHP -->
<?php
    
    // Start if statement and put corresponding ID from UI inside (...)
    if (%id=phpCode_If%) {
        ?>
            <!-- Drop in a stack -->
            %slice%
        <?php
        // Start else if statement and put corresponding statement from UI inside
    } else if (%id=phpCode_Else_1%) {
        
        // Check if the user enabled the use of this element
        %[if %("%id=else1Bool%" == "true")%]%
            ?>
                <!-- Put in a header for this ELSE IF -->
                %[if edit]%<h1>ELSE IF : </h1>%[endif]%
                
                <!-- Drop in a stack -->
                %slice%
            <?php
        %[endif]%
    } else if (%id=phpCode_Else_2%) {
        %[if %(%("%id=else1Bool%" == "true")% && %("%id=else2Bool%" == "true")%)%]%
            ?>
                %[if edit]%<h1>ELSE IF : </h1>%[endif]%
                %slice%
            <?php
        %[endif]%
    } else if (%id=phpCode_Else_3%) {
        %[if %(%("%id=else2Bool%" == "true")% && %("%id=else3Bool%" == "true")%)%]%
            ?>
                %[if edit]%<h1>ELSE IF : </h1>%[endif]%
                %slice%
            <?php
        %[endif]%
    } else if (%id=phpCode_Else_4%) {
        %[if %(%("%id=else3Bool%" == "true")% && %("%id=else4Bool%" == "true")%)%]%
            ?>
                %[if edit]%<h1>ELSE IF : </h1>%[endif]%
                %slice%
            <?php
        %[endif]%
    } else if (%id=phpCode_Else_5%) {
        %[if %(%("%id=else4Bool%" == "true")% && %("%id=else5Bool%" == "true")%)%]%
            ?>
                %[if edit]%<h1>ELSE IF : </h1>%[endif]%
                %slice%
            <?php
        %[endif]%
    }
?>
<!-- End PHP -->

<!-- Close collapsable div for organization in editor -->
%[if edit]% </div> %[endif]%

<!-- See --><a>https://yourhead.tenderapp.com/kb/stacks-api/</a><!-- for more information about developing stacks for RapidWeaver -->