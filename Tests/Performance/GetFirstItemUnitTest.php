<?php

class TeamCS_Tests_Performance_GetFirstItemUnitTest extends AbstractSniffUnitTest
{
    public function getErrorList()
    {
        return [];
    }

    public function getWarningList()
    {
        return array(
            '8'  => 1,
            '10' => 1,
        );
    }
}
