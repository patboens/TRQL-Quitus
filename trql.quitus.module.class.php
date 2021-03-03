<?php
/****************************************************************************************/
/*
    {PYB} is a shortcut for Patrick Boens
    {MAT} is a shortcut for Mathieu Goffin

    {COMPANY} is a shortcut to "Lato Sensu Management"

    {RIGHTS} is a shortcut used by trql.documentor.class.php. In general the material
    presented here is available under the conditions of
    https://creativecommons.org/licenses/by-sa/4.0/

    Other shortcuts exist. They exist to make it simple to change the formulation
    of parts that can vary over time.

    It does not change the undisputed truth that ALL code has been created by
    Patrick Boens, the author, who owns ALL the intellectual property of what
    he created.

*/

/** {{{*fheader
    {*file                  trql.quitus.module.class.php *}
    {*purpose               Abstract TRQL Quitus Module (e.g. "Invoices", "OutOrders",
                            "InOrders", "Customers", "Suppliers", "Products/Services" *}
    {*author                {PYB}, {MAT} *}
    {*company               {COMPANY} *}
    {*cdate                 02-03-21 18:46 *}
    {*mdate                 auto *}
    {*license               {RIGHTS} *}
    {*UTF-8                 Quel bel été *}

    -------------------------------------------------------------------------------------
    Changes History:
    -------------------------------------------------------------------------------------

    {*chist
        {*mdate 02-03-21 18:46 *}
        {*author {PYB} *}
        {*v 8.0.0000 *}
        {*desc              1)  Original creation
        *}
    *}

    {*chist
        {*mdate 02-03-21 20:20 *}
        {*author {PYB} *}
        {*v 8.0.0000 *}
        {*desc              1)  Adding an interface
                            2)  Making the "Module" class abstract
        *}
    *}

    *}}} */
/****************************************************************************************/
namespace trql\quitus\module;

use \trql\vaesoli\Vaesoli                       as V;
use \trql\softwaresourcecode\SoftwareSourceCode as SoftwareSourceCode;

$szCodeFolder = 'd:/websites/snippet-center';

if ( ! defined( 'VAESOLI_CLASS_VERSION' ) )
    require_once( $szCodeFolder . '/trql.vaesoli.class.php' );

if ( ! defined( 'SOFTWARESOURCECODE_CLASS_VERSION' ) )
    require_once( $szCodeFolder . '/trql.softwaresourcecode.class.php' );

defined( 'TRQL_QUITUS_MODULE_CLASS_VERSION' ) or define( 'TRQL_QUITUS_MODULE_CLASS_VERSION','0.1' );

/* ==================================================================================== */
/** {{*interface iModule=

    {*desc

        Set of methodds that each Quitus module must implement

    *}

    *}}
 */
/* ==================================================================================== */
interface iModule
/*-------------*/
{
    public function browse();
    public function form();
    public function open();
    public function save();
}   /* End of interface iModule ======================================================= */
/* ==================================================================================== */


/* ==================================================================================== */
/** {{*class Module=

    {*desc

        TRQL Quitus module.

    *}

    *}}

 */
/* ==================================================================================== */
abstract class Module extends SoftwareSourceCode implements iModule
/*---------------------------------------------------------------*/
{
    protected   $self = array( 'file'   => __FILE__     ,           /* {*property   $self                           (array)                         Fixed 'class' information. *} */
                               'class'  => __CLASS__    ,
                               'name'   => null         ,
                               'birth'  => null         ,
                               'home'   => null         ,
                               'family' => null         ,
                               'UIKey'  => null         ,
                             );

    /* === [Properties NOT defined in schema.org] ===================================== */
    public      $wikidataId                     = null;             /* {*property   $wikidataId                     (string)                        Wikidata ID. No equivalent. *} */
    public      $dataEnvironment                = null;             /* {*property   $dataEnvironment                (DataEnvironment)               Data environment (where data will be saved) *} */

    // BeforeOpenTables() ... le dataEnvironment doit être un objet
    // See http://www.yaldex.com/fox_pro_tutorial/html/19f2a679-bbf3-4343-9ad8-fd20824e8198.htm
    // et http://www.yaldex.com/fox_pro_tutorial/html/fc4f59a0-a4ee-4735-b39a-f8f7da25b2ad.htm
    // http://www.yaldex.com/fox_pro_tutorial/html/79dea3ce-196e-4fa1-a873-80eb97b4e875.htm
    // http://www.yaldex.com/fox_pro_tutorial/html/3be87404-da32-4c4c-bf92-c91be759f11d.htm

    // Et il faut que la classe LSCursor fonctionne !!!

    /* ================================================================================ */
    /** {{*__construct( [$szHome] )=

        Class constructor

        {*params
            $szHome     (string)        Home of the class. Optional.
        *}

        {*return
            (self)      The current instance of the class
        *}

        *}}
    */
    /* ================================================================================ */
    public function __construct( $szHome = null )
    /*-----------------------------------------*/
    {
        parent::__construct();
        $this->updateSelf( __CLASS__,'/q/common/trql.quitus.classes.home/' . basename( __FILE__,'.php' ) );

        return ( $this );
    }   /* End of Module.__construct() ================================================ */
    /* ================================================================================ */


    /* ================================================================================ */
    /** {{*__destruct()=

        Class destructor

        {*params
        *}

        {*return
            (void)      No return
        *}

        *}}
    */
    /* ================================================================================ */
    public function __destruct()
    /*------------------------*/
    {
        $this->backup();
        $this->autodoc();
        $this->UIKey();
        $this->WikiData();
        $this->necroSignaling();
    }   /* End of Module.__destruct() ================================================= */
    /* ================================================================================ */
}   /* End of class Module ============================================================ */
/* ==================================================================================== */
?>