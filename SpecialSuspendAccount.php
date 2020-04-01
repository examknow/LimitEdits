<?php
/**
 * Necessary description of @file, @authors and license
 * @FILLME!
 * Always good to remind that important part
 */
 
// Avoid illegal processing, doesn't cost much, but unnecessary on a correct installation
if ( !defined( 'MEDIAWIKI' ) ) { 
	die( -1 ); 
}  

// Our SpecialPage
class SpecialMyForm extends SpecialPage {
    public function __construct() {
        // The first argument must be the name of your special page
        // A second argument "right" can be added to restrict access to the SpecialPage
        parent::__construct( 'SuspendAccount' );
    }

    /**
     * Special page entry point
     * @param string|null $par
     */
    public function execute( $par ) {
        $this->setHeaders();
         $formDescriptor = [
        'simpletextfield' => [
        'required' => true,
        'label-message' => 'suspendaccount-username',
        'class' => 'HTMLTextField',
        'validation-callback' => [ $this, 'validateSimpleTextField' ],
        'filter-callback' => [ $this, 'filterSimpleTextField' ],
        ]
    ];
        $formDescriptor = [
        'simpletextfield' => [
        'required' => true,
        'label-message' => 'suspendaccount-reason',
        'class' => 'HTMLTextField',
        'validation-callback' => [ $this, 'validateSimpleTextField' ],
        'filter-callback' => [ $this, 'filterSimpleTextField' ],
        ]
    ];
    }

    protected function getGroupName() {
        return 'other';
    }
}

// NO PHP Closing bracket "? >". This is pure code.
