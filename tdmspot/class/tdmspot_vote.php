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

defined('XOOPS_ROOT_PATH') || exit("XOOPS root path not defined");

class TDMSpot_vote extends XoopsObject
{
    // constructor
    public function __construct()
    {
        $this->XoopsObject();
        $this->initVar("vote_id", XOBJ_DTYPE_INT, null, false, 10);
        $this->initVar("vote_file", XOBJ_DTYPE_INT, null, false, 10);
        $this->initVar("vote_album", XOBJ_DTYPE_INT, null, false, 10);
        $this->initVar("vote_artiste", XOBJ_DTYPE_INT, null, false, 10);
        $this->initVar("vote_ip", XOBJ_DTYPE_TXTBOX, null, false);
    }

//    public function TDMSpot_vote()
//    {
//        $this->__construct();
//    }
}

class TDMSpottdmspot_voteHandler extends XoopsPersistableObjectHandler
{
    public function __construct(&$db)
    {
        parent::__construct($db, "tdmspot_vote", 'TDMSpot_vote', 'vote_id', 'vote_ip');
    }
}
