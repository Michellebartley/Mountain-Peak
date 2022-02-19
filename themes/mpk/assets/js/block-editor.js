wp.blocks.registerBlockStyle( 'core/quote', {
    name: 'mpk-quote',
    label: 'MPK Quote',
} );

wp.domReady( function () {
    wp.blocks.unregisterBlockStyle( 'core/quote', 'plain' );
    wp.blocks.unregisterBlockStyle( 'core/quote', 'large' );
} );