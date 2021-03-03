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
    {*file                  trql.quitus.invoices.class.php *}
    {*purpose               Invoices Module of TRQL Quitus *}
    {*author                {PYB}, {MAT} *}
    {*company               {COMPANY} *}
    {*cdate                 03-03-21 02:14 *}
    {*mdate                 auto *}
    {*license               {RIGHTS} *}
    {*UTF-8                 Quel bel été *}

    -------------------------------------------------------------------------------------
    Changes History:
    -------------------------------------------------------------------------------------

    {*chist
        {*mdate 03-03-21 02:14 *}
        {*author {PYB} *}
        {*v 8.0.0000 *}
        {*desc              1)  Original creation
        *}
    *}

    *}}} */
/****************************************************************************************/
namespace trql\quitus\module;

use \trql\vaesoli\Vaesoli       as V;
use \trql\quitus\module\Module  as Module;

if ( ! defined( 'VAESOLI_CLASS_VERSION' ) )
    require_once( 'trql.vaesoli.class.php' );

if ( ! defined( 'TRQL_QUITUS_MODULE_CLASS_VERSION' ) )
    require_once( 'trql.quitus.module.class.php' );

defined( 'TRQL_QUITUS_MODULE_INVOICES_CLASS_VERSION' ) or define( 'TRQL_QUITUS_MODULE_INVOICES_CLASS_VERSION','0.1' );

/* ==================================================================================== */
/** {{*class Invoices=

    {*desc

        TRQL Quitus "Invoices" module

    *}

    *}}

 */
/* ==================================================================================== */
class Invoices extends Module
/*-------------------------*/
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
    }   /* End of Invoices.__construct() ============================================== */
    /* ================================================================================ */


    /* ================================================================================ */
    /** {{*browse()=

        Browses the individual records of the module (e.g. "Browsing" invoices)

        {*params
        *}

        {*return
            (self)      The current instance of the class
        *}

        {*warning
            TDD-oriented implementation: nothing done yet
        *}

        *}}
    */
    /* ================================================================================ */
    public function browse() : string
    /*-----------------------------*/
    {
        $szRetVal = 'browse';

        return ( $szRetVal );
    }   /* End of Invoices.browse() =================================================== */
    /* ================================================================================ */


    /* ================================================================================ */
    /** {{*form()=

        Provides the form that shoudl be used to handle a single item of the module
        (e.g. an invoice in the "Invoices" module, a product in the "Products" module,
        etc.)

        {*params
        *}

        {*return
            (string)        The HTMLM code of the form
        *}

        *}}
    */
    /* ================================================================================ */
    public function form() : string
    /*---------------------------*/
    {
        $szRetVal = 'form';

        return ( $szRetVal );
    }   /* End of Invoices.form() ===================================================== */
    /* ================================================================================ */


    /* ================================================================================ */
    /** {{*open()=

        Opens the data of the module

        {*params
        *}

        {*return
            (bool)      [c]true[/c] if the opening of the data was successful; [c]false[/c]
                        otherwise
        *}

        {*warning
            TDD-oriented implementation: nothing done yet
        *}

        *}}
    */
    /* ================================================================================ */
    public function open() : bool
    /*-------------------------*/
    {
        $bRetVal = false;

        return ( $bRetVal );
    }   /* End of Invoices.open() ===================================================== */
    /* ================================================================================ */


    /* ================================================================================ */
    /** {{*save()=

        Saves data of the module

        {*params
        *}

        {*return
            (bool)      [c]true[/c] if data saved successfully; [c]false[/c]
                        otherwise
        *}

        *}}
    */
    /* ================================================================================ */
    public function save() : bool
    /*-------------------------*/
    {
        $bRetVal = false;

        return ( $bRetVal );
    }   /* End of Invoices.save() ===================================================== */
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
    }   /* End of Invoices.__destruct() =============================================== */
    /* ================================================================================ */
}   /* End of class Module ============================================================ */
/* ==================================================================================== */
?>