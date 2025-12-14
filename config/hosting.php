<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Code Date
    |--------------------------------------------------------------------------
    |
    | This value determines the date when hosting should be suspended.
    | If the current date is greater than or equal to this date, the
    | application will be suspended. Format: Y-m-d (e.g., 2024-12-31)
    |
    */

    'code_date' => env('CODE_DATE', null),
];
