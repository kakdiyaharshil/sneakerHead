(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[12,15],{114:function(e,t,n){"use strict";n.d(t,"a",(function(){return a})),n(101);var c=n(49);const a=()=>c.m>1},135:function(e,t,n){"use strict";n.d(t,"c",(function(){return o})),n.d(t,"d",(function(){return i})),n.d(t,"b",(function(){return u})),n.d(t,"a",(function(){return d}));var c=n(69),a=n(114),r=n(62),l=n(64);const s=e=>Object(r.a)(e)?JSON.parse(e)||{}:Object(l.a)(e)?e:{},o=e=>{if(!Object(a.a)()||"function"!=typeof c.__experimentalGetSpacingClassesAndStyles)return{style:{}};const t=Object(l.a)(e)?e:{},n=s(t.style);return Object(c.__experimentalGetSpacingClassesAndStyles)({...t,style:n})},i=e=>{const t=Object(l.a)(e)?e:{},n=s(t.style),c=Object(l.a)(n.typography)?n.typography:{};return{style:{fontSize:t.fontSize?`var(--wp--preset--font-size--${t.fontSize})`:c.fontSize,lineHeight:c.lineHeight,fontWeight:c.fontWeight,textTransform:c.textTransform,fontFamily:t.fontFamily}}},u=e=>{if(!Object(a.a)())return{className:"",style:{}};const t=Object(l.a)(e)?e:{},n=s(t.style);return Object(c.__experimentalUseColorProps)({...t,style:n})},d=e=>{if(!Object(a.a)())return{className:"",style:{}};const t=Object(l.a)(e)?e:{},n=s(t.style);return Object(c.__experimentalUseBorderProps)({...t,style:n})}},22:function(e,t,n){"use strict";var c=n(0),a=n(4),r=n.n(a);t.a=e=>{let t,{label:n,screenReaderLabel:a,wrapperElement:l,wrapperProps:s={}}=e;const o=null!=n,i=null!=a;return!o&&i?(t=l||"span",s={...s,className:r()(s.className,"screen-reader-text")},Object(c.createElement)(t,s,a)):(t=l||c.Fragment,o&&i&&n!==a?Object(c.createElement)(t,s,Object(c.createElement)("span",{"aria-hidden":"true"},n),Object(c.createElement)("span",{className:"screen-reader-text"},a)):Object(c.createElement)(t,s,n))}},286:function(e,t){},307:function(e,t,n){"use strict";n.r(t);var c=n(0),a=(n(8),n(1)),r=n(4),l=n.n(r),s=n(22),o=n(48),i=n(118),u=(n(286),n(135));t.default=Object(i.withProductDataContext)(e=>{const{className:t,align:n}=e,{parentClassName:r}=Object(o.useInnerBlockLayoutContext)(),{product:i}=Object(o.useProductDataContext)(),d=Object(u.a)(e),b=Object(u.b)(e),m=Object(u.d)(e),p=Object(u.c)(e);if(!i.id||!i.on_sale)return null;const O="string"==typeof n?"wc-block-components-product-sale-badge--align-"+n:"";return Object(c.createElement)("div",{className:l()("wc-block-components-product-sale-badge",t,O,{[r+"__product-onsale"]:r},b.className,d.className),style:{...b.style,...d.style,...m.style,...p.style}},Object(c.createElement)(s.a,{label:Object(a.__)("Sale","woo-gutenberg-products-block"),screenReaderLabel:Object(a.__)("Product on sale","woo-gutenberg-products-block")}))})},328:function(e,t){},416:function(e,t,n){"use strict";n.r(t);var c=n(118),a=n(10),r=n.n(a),l=n(0),s=(n(8),n(1)),o=n(4),i=n.n(o),u=n(2),d=n(48),b=n(31),m=n(307),p=(n(328),n(135));const O=()=>Object(l.createElement)("img",{src:u.PLACEHOLDER_IMG_SRC,alt:"",width:500,height:500}),f=e=>{let{image:t,onLoad:n,loaded:c,showFullSize:a,fallbackAlt:s}=e;const{thumbnail:o,src:i,srcset:u,sizes:d,alt:b}=t||{},m={alt:b||s,onLoad:n,hidden:!c,src:o,...a&&{src:i,srcSet:u,sizes:d}};return Object(l.createElement)(l.Fragment,null,m.src&&Object(l.createElement)("img",r()({"data-testid":"product-image"},m)),!c&&Object(l.createElement)(O,null))};var g=Object(c.withProductDataContext)(e=>{const{className:t,imageSizing:n="full-size",showProductLink:c=!0,showSaleBadge:a,saleBadgeAlign:r="right"}=e,{parentClassName:o}=Object(d.useInnerBlockLayoutContext)(),{product:u}=Object(d.useProductDataContext)(),[g,j]=Object(l.useState)(!1),{dispatchStoreEvent:y}=Object(b.a)(),w=Object(p.d)(e),h=Object(p.a)(e);if(!u.id)return Object(l.createElement)("div",{className:i()(t,"wc-block-components-product-image","wc-block-components-product-image--placeholder",{[o+"__product-image"]:o})},Object(l.createElement)(O,null));const _=!!u.images.length,k=_?u.images[0]:null,E=c?"a":l.Fragment,S=Object(s.sprintf)(
/* translators: %s is referring to the product name */
Object(s.__)("Link to %s","woo-gutenberg-products-block"),u.name),N={href:u.permalink,rel:"nofollow",...!_&&{"aria-label":S},onClick:()=>{y("product-view-link",{product:u})}};return Object(l.createElement)("div",{className:i()(t,"wc-block-components-product-image",{[o+"__product-image"]:o},h.className),style:{...w.style,...h.style}},Object(l.createElement)(E,c&&N,!!a&&Object(l.createElement)(m.default,{align:r,product:u}),Object(l.createElement)(f,{fallbackAlt:u.name,image:k,onLoad:()=>j(!0),loaded:g,showFullSize:"cropped"!==n})))});t.default=Object(c.withFilteredAttributes)({showProductLink:{type:"boolean",default:!0},showSaleBadge:{type:"boolean",default:!0},saleBadgeAlign:{type:"string",default:"right"},imageSizing:{type:"string",default:"full-size"},productId:{type:"number",default:0}})(g)},64:function(e,t,n){"use strict";n.d(t,"a",(function(){return c})),n.d(t,"b",(function(){return a}));const c=e=>!(e=>null===e)(e)&&e instanceof Object&&e.constructor===Object;function a(e,t){return c(e)&&t in e}}}]);