<?php

/**
 * ****************************************************************************
 *  - TDMSpot By TDM   - TEAM DEV MODULE FOR XOOPS
 *  - Licence PRO Copyright (c)  (http://www.)
 *
 * Cette licence, contient des limitations
 *
 * 1. Vous devez poss�der une permission d'ex�cuter le logiciel, pour n'importe quel usage.
 * 2. Vous ne devez pas l' �tudier ni l'adapter � vos besoins,
 * 3. Vous ne devez le redistribuer ni en faire des copies,
 * 4. Vous n'avez pas la libert� de l'am�liorer ni de rendre publiques les modifications
 *
 * @license     TDMFR GNU public license
 * @author      TDMFR ; TEAM DEV MODULE
 *
 * ****************************************************************************
 */
class SystemBreadcrumb
{
    /* Variables */
    public $_bread = array();
    public $_tips;

    public function __construct()
    {
    }

    /**
     * Add Tips
     * @param $value
     */
    public function addTips($value)
    {
        $this->_tips = $value;
    }

    /**
     * Render System BreadCrumb
     *
     */
    public function render()
    {
        global $xoopsModuleConfig;

        $out = '<style type="text/css">
    <!--
.tips{
    color:#000000;
    border:1px solid #00cc00;
    padding:8px 8px 8px 35px;
    background:#f8fff8 url("../assets/images/decos/idea.png") no-repeat 5px 4px;
}
    //-->
    </style>';

        if ($this->_tips) {
            $out .= '<div class="tips">' . $this->_tips . '</div><br />';
        }
        echo $out;
    }
}
