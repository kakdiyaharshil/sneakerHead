/**
 * External dependencies
 */
import { isFeaturePluginBuild } from '@woocommerce/block-settings';

export const supports = {
	...( isFeaturePluginBuild() && {
		color: {
			text: true,
			background: true,
			link: false,
			__experimentalSkipSerialization: true,
		},
		__experimentalBorder: {
			radius: true,
			__experimentalSkipSerialization: true,
		},
		spacing: {
			padding: true,
			__experimentalSkipSerialization: true,
		},
		typography: {
			fontSize: true,
			__experimentalFontWeight: true,
			__experimentalSkipSerialization: true,
		},
		__experimentalSelector:
			'.wp-block-button.wc-block-components-product-button .wc-block-components-product-button__button',
	} ),
};
