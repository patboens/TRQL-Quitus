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
    {*file                  trql.module.class.php *}
    {*purpose               TRQL Quitus Module (e.g. "Invoices", "OutOrders", "InOrders"
                            "Customers", "Suppliers", "Products/Services" *}
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


    *}}} */
/****************************************************************************************/
namespace trql\quitus\module;

use \trql\vaesoli\Vaesoli   as V;

if ( ! defined( 'VAESOLI_CLASS_VERSION' ) )
    require_once( 'trql.vaesoli.class.php' );

if ( ! defined( 'SOFTWARESOURCECODE_CLASS_VERSION' ) )
    require_once( 'trql.softwaresourcecode.class.php' );

defined( 'MODULE_CLASS_VERSION' ) or define( 'MODULE_CLASS_VERSION','0.1' );

/* ==================================================================================== */
/** {{*class Module=

    {*desc

        TRQL Quitus module.

    *}

 */
/* ==================================================================================== */
class Module extends SoftwareSourceCode
/*-----------------------------------*/
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
    public      $wikidataId                     = null;             /* {*property   $wikidataId                     (string)                        Wikidata ID. NO SEARCH*} */


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