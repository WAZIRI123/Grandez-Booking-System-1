@props(['title'])

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>

    <style>
        [x-cloak] {
            display: none !important;
        }
        @stack('custom-style')
    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>{{ $title }}</title>
        <!-- Scripts -->
           <script src="https://cdn-tailwindcss.vercel.app/?plugins=forms"></script>
         <!-- Alpine Plugins -->
<script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
 
<!-- Alpine Core -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        <!-- Scripts -->
       <script>
      tailwind.config = {
              content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
        theme: {
        extend: {

            colors: {
                "primary": "#1f4b8e",
                "primary-dark": "#102a52",
                "secondary": "#182430",
                "secondary-dark": "#060C11",
            }
        },
        },

  
      }
      
    </script>
       <style>
           /*
! tailwindcss v3.0.23 | MIT License | https://tailwindcss.com
*/


/*
1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
*/

@tailwind base;
@tailwind components;
@tailwind utilities;
*,
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

[x-cloak] {
    display: none !important;
}

::before,
::after {
    box-sizing: border-box;
    /* 1 */
    border-width: 0;
    /* 2 */
    border-style: solid;
    /* 2 */
    border-color: #e5e7eb;
    /* 2 */
}

::before,
::after {
    --tw-content: '';
}


/*
1. Use a consistent sensible line-height in all browsers.
2. Prevent adjustments of font size after orientation changes in iOS.
3. Use a more readable tab size.
4. Use the user's configured `sans` font-family by default.
*/

html {
    line-height: 1.5;
    /* 1 */
    -webkit-text-size-adjust: 100%;
    /* 2 */
    -moz-tab-size: 4;
    /* 3 */
    -o-tab-size: 4;
    tab-size: 4;
    /* 3 */
    font-family: Quicksand, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    /* 4 */
}


/*
1. Remove the margin in all browsers.
2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
*/

body {
    margin: 0;
    /* 1 */
    line-height: inherit;
    /* 2 */
}


/*
1. Add the correct height in Firefox.
2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
3. Ensure horizontal rules are visible by default.
*/

hr {
    height: 0;
    /* 1 */
    color: inherit;
    /* 2 */
    border-top-width: 1px;
    /* 3 */
}


/*
Add the correct text decoration in Chrome, Edge, and Safari.
*/

abbr:where([title]) {
    -webkit-text-decoration: underline dotted;
    text-decoration: underline dotted;
}


/*
Remove the default font size and weight for headings.
*/

h1,
h2,
h3,
h4,
h5,
h6 {
    font-size: inherit;
    font-weight: inherit;
}


/*
Reset links to optimize for opt-in styling instead of opt-out.
*/

a {
    color: inherit;
    text-decoration: inherit;
}


/*
Add the correct font weight in Edge and Safari.
*/

b,
strong {
    font-weight: bolder;
}


/*
1. Use the user's configured `mono` font family by default.
2. Correct the odd `em` font sizing in all browsers.
*/

code,
kbd,
samp,
pre {
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    /* 1 */
    font-size: 1em;
    /* 2 */
}


/*
Add the correct font size in all browsers.
*/

small {
    font-size: 80%;
}


/*
Prevent `sub` and `sup` elements from affecting the line height in all browsers.
*/

sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}

sub {
    bottom: -0.25em;
}

sup {
    top: -0.5em;
}


/*
1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
3. Remove gaps between table borders by default.
*/

table {
    text-indent: 0;
    /* 1 */
    border-color: inherit;
    /* 2 */
    border-collapse: collapse;
    /* 3 */
}


/*
1. Change the font styles in all browsers.
2. Remove the margin in Firefox and Safari.
3. Remove default padding in all browsers.
*/

button,
input,
optgroup,
select,
textarea {
    font-family: inherit;
    /* 1 */
    font-size: 100%;
    /* 1 */
    line-height: inherit;
    /* 1 */
    color: inherit;
    /* 1 */
    margin: 0;
    /* 2 */
    padding: 0;
    /* 3 */
}


/*
Remove the inheritance of text transform in Edge and Firefox.
*/

button,
select {
    text-transform: none;
}


/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Remove default button styles.
*/

button,
[type='button'],
[type='reset'],
[type='submit'] {
    -webkit-appearance: button;
    /* 1 */
    background-color: transparent;
    /* 2 */
    background-image: none;
    /* 2 */
}


/*
Use the modern Firefox focus style for all focusable elements.
*/

:-moz-focusring {
    outline: auto;
}


/*
Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
*/

:-moz-ui-invalid {
    box-shadow: none;
}


/*
Add the correct vertical alignment in Chrome and Firefox.
*/

progress {
    vertical-align: baseline;
}


/*
Correct the cursor style of increment and decrement buttons in Safari.
*/

::-webkit-inner-spin-button,
::-webkit-outer-spin-button {
    height: auto;
}


/*
1. Correct the odd appearance in Chrome and Safari.
2. Correct the outline style in Safari.
*/

[type='search'] {
    -webkit-appearance: textfield;
    /* 1 */
    outline-offset: -2px;
    /* 2 */
}


/*
Remove the inner padding in Chrome and Safari on macOS.
*/

::-webkit-search-decoration {
    -webkit-appearance: none;
}


/*
1. Correct the inability to style clickable types in iOS and Safari.
2. Change font properties to `inherit` in Safari.
*/

::-webkit-file-upload-button {
    -webkit-appearance: button;
    /* 1 */
    font: inherit;
    /* 2 */
}


/*
Add the correct display in Chrome and Safari.
*/

summary {
    display: list-item;
}


/*
Removes the default spacing and border for appropriate elements.
*/

blockquote,
dl,
dd,
h1,
h2,
h3,
h4,
h5,
h6,
hr,
figure,
p,
pre {
    margin: 0;
}

fieldset {
    margin: 0;
    padding: 0;
}

legend {
    padding: 0;
}

ol,
ul,
menu {
    list-style: none;
    margin: 0;
    padding: 0;
}


/*
Prevent resizing textareas horizontally by default.
*/

textarea {
    resize: vertical;
}


/*
1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
2. Set the default placeholder color to the user's configured gray 400 color.
*/

input::-moz-placeholder,
textarea::-moz-placeholder {
    opacity: 1;
    /* 1 */
    color: #9ca3af;
    /* 2 */
}

input:-ms-input-placeholder,
textarea:-ms-input-placeholder {
    opacity: 1;
    /* 1 */
    color: #9ca3af;
    /* 2 */
}

input::placeholder,
textarea::placeholder {
    opacity: 1;
    /* 1 */
    color: #9ca3af;
    /* 2 */
}


/*
Set the default cursor for buttons.
*/

button,
[role="button"] {
    cursor: pointer;
}


/*
Make sure disabled buttons don't get the pointer cursor.
*/

:disabled {
    cursor: default;
}


/*
1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
   This can trigger a poorly considered lint error in some tools but is included by design.
*/

img,
svg,
video,
canvas,
audio,
iframe,
embed,
object {
    display: block;
    /* 1 */
    vertical-align: middle;
    /* 2 */
}


/*
Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
*/

img,
video {
    max-width: 100%;
    height: auto;
}


/*
Ensure the default browser behavior of the `hidden` attribute.
*/

[hidden] {
    display: none;
}

[type='text'],
[type='email'],
[type='url'],
[type='password'],
[type='number'],
[type='date'],
[type='datetime-local'],
[type='month'],
[type='search'],
[type='tel'],
[type='time'],
[type='week'],
[multiple],
textarea,
select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: #fff;
    border-color: #6b7280;
    border-width: 1px;
    border-radius: 0px;
    padding-top: 0.5rem;
    padding-right: 0.75rem;
    padding-bottom: 0.5rem;
    padding-left: 0.75rem;
    font-size: 1rem;
    line-height: 1.5rem;
    --tw-shadow: 0 0 #0000;
}

[type='text']:focus,
[type='email']:focus,
[type='url']:focus,
[type='password']:focus,
[type='number']:focus,
[type='date']:focus,
[type='datetime-local']:focus,
[type='month']:focus,
[type='search']:focus,
[type='tel']:focus,
[type='time']:focus,
[type='week']:focus,
[multiple]:focus,
textarea:focus,
select:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
    --tw-ring-inset: var(--tw-empty, /*!*/
    /*!*/
    );
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: #2563eb;
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
    border-color: #2563eb;
}

input::-moz-placeholder,
textarea::-moz-placeholder {
    color: #6b7280;
    opacity: 1;
}

input:-ms-input-placeholder,
textarea:-ms-input-placeholder {
    color: #6b7280;
    opacity: 1;
}

input::placeholder,
textarea::placeholder {
    color: #6b7280;
    opacity: 1;
}

::-webkit-datetime-edit-fields-wrapper {
    padding: 0;
}

::-webkit-date-and-time-value {
    min-height: 1.5em;
}

select {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
    background-position: right 0.5rem center;
    background-repeat: no-repeat;
    background-size: 1.5em 1.5em;
    padding-right: 2.5rem;
    -webkit-print-color-adjust: exact;
    color-adjust: exact;
}

[multiple] {
    background-image: initial;
    background-position: initial;
    background-repeat: unset;
    background-size: initial;
    padding-right: 0.75rem;
    -webkit-print-color-adjust: unset;
    color-adjust: unset;
}

[type='checkbox'],
[type='radio'] {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    padding: 0;
    -webkit-print-color-adjust: exact;
    color-adjust: exact;
    display: inline-block;
    vertical-align: middle;
    background-origin: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    flex-shrink: 0;
    height: 1rem;
    width: 1rem;
    color: #2563eb;
    background-color: #fff;
    border-color: #6b7280;
    border-width: 1px;
    --tw-shadow: 0 0 #0000;
}

[type='checkbox'] {
    border-radius: 0px;
}

[type='radio'] {
    border-radius: 100%;
}

[type='checkbox']:focus,
[type='radio']:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
    --tw-ring-inset: var(--tw-empty, /*!*/
    /*!*/
    );
    --tw-ring-offset-width: 2px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: #2563eb;
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);
}

[type='checkbox']:checked,
[type='radio']:checked {
    border-color: transparent;
    background-color: currentColor;
    background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat;
}

[type='checkbox']:checked {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");
}

[type='radio']:checked {
    background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
}

[type='checkbox']:checked:hover,
[type='checkbox']:checked:focus,
[type='radio']:checked:hover,
[type='radio']:checked:focus {
    border-color: transparent;
    background-color: currentColor;
}

[type='checkbox']:indeterminate {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");
    border-color: transparent;
    background-color: currentColor;
    background-size: 100% 100%;
    background-position: center;
    background-repeat: no-repeat;
}

[type='checkbox']:indeterminate:hover,
[type='checkbox']:indeterminate:focus {
    border-color: transparent;
    background-color: currentColor;
}

[type='file'] {
    background: unset;
    border-color: inherit;
    border-width: 0;
    border-radius: 0;
    padding: 0;
    font-size: unset;
    line-height: inherit;
}

[type='file']:focus {
    outline: 1px auto -webkit-focus-ring-color;
}

html {
    scroll-behavior: smooth;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: 'poppins';
}

*,
 ::before,
 ::after {
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    --tw-pan-x: ;
    --tw-pan-y: ;
    --tw-pinch-zoom: ;
    --tw-scroll-snap-strictness: proximity;
    --tw-ordinal: ;
    --tw-slashed-zero: ;
    --tw-numeric-figure: ;
    --tw-numeric-spacing: ;
    --tw-numeric-fraction: ;
    --tw-ring-inset: ;
    --tw-ring-offset-width: 0px;
    --tw-ring-offset-color: #fff;
    --tw-ring-color: rgb(59 130 246 / 0.5);
    --tw-ring-offset-shadow: 0 0 #0000;
    --tw-ring-shadow: 0 0 #0000;
    --tw-shadow: 0 0 #0000;
    --tw-shadow-colored: 0 0 #0000;
    --tw-blur: ;
    --tw-brightness: ;
    --tw-contrast: ;
    --tw-grayscale: ;
    --tw-hue-rotate: ;
    --tw-invert: ;
    --tw-saturate: ;
    --tw-sepia: ;
    --tw-drop-shadow: ;
    --tw-backdrop-blur: ;
    --tw-backdrop-brightness: ;
    --tw-backdrop-contrast: ;
    --tw-backdrop-grayscale: ;
    --tw-backdrop-hue-rotate: ;
    --tw-backdrop-invert: ;
    --tw-backdrop-opacity: ;
    --tw-backdrop-saturate: ;
    --tw-backdrop-sepia: ;
}

.container {
    width: 100%;
}

@media (min-width: 640px) {
    .container {
        max-width: 640px;
    }
}

@media (min-width: 768px) {
    .container {
        max-width: 768px;
    }
}

@media (min-width: 1024px) {
    .container {
        max-width: 1024px;
    }
}

@media (min-width: 1280px) {
    .container {
        max-width: 1280px;
    }
}

@media (min-width: 1536px) {
    .container {
        max-width: 1536px;
    }
}

.prose {
    color: var(--tw-prose-body);
    max-width: 65ch;
}

.prose :where([class~="lead"]):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-lead);
    font-size: 1.25em;
    line-height: 1.6;
    margin-top: 1.2em;
    margin-bottom: 1.2em;
}

.prose :where(a):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-links);
    text-decoration: underline;
    font-weight: 500;
}

.prose :where(strong):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-bold);
    font-weight: 600;
}

.prose :where(ol):not(:where([class~="not-prose"] *)) {
    list-style-type: decimal;
    padding-left: 1.625em;
}

.prose :where(ol[type="A"]):not(:where([class~="not-prose"] *)) {
    list-style-type: upper-alpha;
}

.prose :where(ol[type="a"]):not(:where([class~="not-prose"] *)) {
    list-style-type: lower-alpha;
}

.prose :where(ol[type="A" s]):not(:where([class~="not-prose"] *)) {
    list-style-type: upper-alpha;
}

.prose :where(ol[type="a" s]):not(:where([class~="not-prose"] *)) {
    list-style-type: lower-alpha;
}

.prose :where(ol[type="I"]):not(:where([class~="not-prose"] *)) {
    list-style-type: upper-roman;
}

.prose :where(ol[type="i"]):not(:where([class~="not-prose"] *)) {
    list-style-type: lower-roman;
}

.prose :where(ol[type="I" s]):not(:where([class~="not-prose"] *)) {
    list-style-type: upper-roman;
}

.prose :where(ol[type="i" s]):not(:where([class~="not-prose"] *)) {
    list-style-type: lower-roman;
}

.prose :where(ol[type="1"]):not(:where([class~="not-prose"] *)) {
    list-style-type: decimal;
}

.prose :where(ul):not(:where([class~="not-prose"] *)) {
    list-style-type: disc;
    padding-left: 1.625em;
}

.prose :where(ol>li):not(:where([class~="not-prose"] *))::marker {
    font-weight: 400;
    color: var(--tw-prose-counters);
}

.prose :where(ul>li):not(:where([class~="not-prose"] *))::marker {
    color: var(--tw-prose-bullets);
}

.prose :where(hr):not(:where([class~="not-prose"] *)) {
    border-color: var(--tw-prose-hr);
    border-top-width: 1px;
    margin-top: 3em;
    margin-bottom: 3em;
}

.prose :where(blockquote):not(:where([class~="not-prose"] *)) {
    font-weight: 500;
    font-style: italic;
    color: var(--tw-prose-quotes);
    border-left-width: 0.25rem;
    border-left-color: var(--tw-prose-quote-borders);
    quotes: "\201C""\201D""\2018""\2019";
    margin-top: 1.6em;
    margin-bottom: 1.6em;
    padding-left: 1em;
}

.prose :where(blockquote p:first-of-type):not(:where([class~="not-prose"] *))::before {
    content: open-quote;
}

.prose :where(blockquote p:last-of-type):not(:where([class~="not-prose"] *))::after {
    content: close-quote;
}

.prose :where(h1):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-headings);
    font-weight: 800;
    font-size: 2.25em;
    margin-top: 0;
    margin-bottom: 0.8888889em;
    line-height: 1.1111111;
}

.prose :where(h1 strong):not(:where([class~="not-prose"] *)) {
    font-weight: 900;
}

.prose :where(h2):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-headings);
    font-weight: 700;
    font-size: 1.5em;
    margin-top: 2em;
    margin-bottom: 1em;
    line-height: 1.3333333;
}

.prose :where(h2 strong):not(:where([class~="not-prose"] *)) {
    font-weight: 800;
}

.prose :where(h3):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-headings);
    font-weight: 600;
    font-size: 1.25em;
    margin-top: 1.6em;
    margin-bottom: 0.6em;
    line-height: 1.6;
}

.prose :where(h3 strong):not(:where([class~="not-prose"] *)) {
    font-weight: 700;
}

.prose :where(h4):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-headings);
    font-weight: 600;
    margin-top: 1.5em;
    margin-bottom: 0.5em;
    line-height: 1.5;
}

.prose :where(h4 strong):not(:where([class~="not-prose"] *)) {
    font-weight: 700;
}

.prose :where(figure>*):not(:where([class~="not-prose"] *)) {
    margin-top: 0;
    margin-bottom: 0;
}

.prose :where(figcaption):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-captions);
    font-size: 0.875em;
    line-height: 1.4285714;
    margin-top: 0.8571429em;
}

.prose :where(code):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-code);
    font-weight: 600;
    font-size: 0.875em;
}

.prose :where(code):not(:where([class~="not-prose"] *))::before {
    content: "`";
}

.prose :where(code):not(:where([class~="not-prose"] *))::after {
    content: "`";
}

.prose :where(a code):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-links);
}

.prose :where(pre):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-pre-code);
    background-color: var(--tw-prose-pre-bg);
    overflow-x: auto;
    font-weight: 400;
    font-size: 0.875em;
    line-height: 1.7142857;
    margin-top: 1.7142857em;
    margin-bottom: 1.7142857em;
    border-radius: 0.375rem;
    padding-top: 0.8571429em;
    padding-right: 1.1428571em;
    padding-bottom: 0.8571429em;
    padding-left: 1.1428571em;
}

.prose :where(pre code):not(:where([class~="not-prose"] *)) {
    background-color: transparent;
    border-width: 0;
    border-radius: 0;
    padding: 0;
    font-weight: inherit;
    color: inherit;
    font-size: inherit;
    font-family: inherit;
    line-height: inherit;
}

.prose :where(pre code):not(:where([class~="not-prose"] *))::before {
    content: none;
}

.prose :where(pre code):not(:where([class~="not-prose"] *))::after {
    content: none;
}

.prose :where(table):not(:where([class~="not-prose"] *)) {
    width: 100%;
    table-layout: auto;
    text-align: left;
    margin-top: 2em;
    margin-bottom: 2em;
    font-size: 0.875em;
    line-height: 1.7142857;
}

.prose :where(thead):not(:where([class~="not-prose"] *)) {
    border-bottom-width: 1px;
    border-bottom-color: var(--tw-prose-th-borders);
}

.prose :where(thead th):not(:where([class~="not-prose"] *)) {
    color: var(--tw-prose-headings);
    font-weight: 600;
    vertical-align: bottom;
    padding-right: 0.5714286em;
    padding-bottom: 0.5714286em;
    padding-left: 0.5714286em;
}

.prose :where(tbody tr):not(:where([class~="not-prose"] *)) {
    border-bottom-width: 1px;
    border-bottom-color: var(--tw-prose-td-borders);
}

.prose :where(tbody tr:last-child):not(:where([class~="not-prose"] *)) {
    border-bottom-width: 0;
}

.prose :where(tbody td):not(:where([class~="not-prose"] *)) {
    vertical-align: baseline;
    padding-top: 0.5714286em;
    padding-right: 0.5714286em;
    padding-bottom: 0.5714286em;
    padding-left: 0.5714286em;
}

.prose {
    --tw-prose-body: #374151;
    --tw-prose-headings: #111827;
    --tw-prose-lead: #4b5563;
    --tw-prose-links: #111827;
    --tw-prose-bold: #111827;
    --tw-prose-counters: #6b7280;
    --tw-prose-bullets: #d1d5db;
    --tw-prose-hr: #e5e7eb;
    --tw-prose-quotes: #111827;
    --tw-prose-quote-borders: #e5e7eb;
    --tw-prose-captions: #6b7280;
    --tw-prose-code: #111827;
    --tw-prose-pre-code: #e5e7eb;
    --tw-prose-pre-bg: #1f2937;
    --tw-prose-th-borders: #d1d5db;
    --tw-prose-td-borders: #e5e7eb;
    --tw-prose-invert-body: #d1d5db;
    --tw-prose-invert-headings: #fff;
    --tw-prose-invert-lead: #9ca3af;
    --tw-prose-invert-links: #fff;
    --tw-prose-invert-bold: #fff;
    --tw-prose-invert-counters: #9ca3af;
    --tw-prose-invert-bullets: #4b5563;
    --tw-prose-invert-hr: #374151;
    --tw-prose-invert-quotes: #f3f4f6;
    --tw-prose-invert-quote-borders: #374151;
    --tw-prose-invert-captions: #9ca3af;
    --tw-prose-invert-code: #fff;
    --tw-prose-invert-pre-code: #d1d5db;
    --tw-prose-invert-pre-bg: rgb(0 0 0 / 50%);
    --tw-prose-invert-th-borders: #4b5563;
    --tw-prose-invert-td-borders: #374151;
    font-size: 1rem;
    line-height: 1.75;
}

.prose :where(p):not(:where([class~="not-prose"] *)) {
    margin-top: 1.25em;
    margin-bottom: 1.25em;
}

.prose :where(img):not(:where([class~="not-prose"] *)) {
    margin-top: 2em;
    margin-bottom: 2em;
}

.prose :where(video):not(:where([class~="not-prose"] *)) {
    margin-top: 2em;
    margin-bottom: 2em;
}

.prose :where(figure):not(:where([class~="not-prose"] *)) {
    margin-top: 2em;
    margin-bottom: 2em;
}

.prose :where(h2 code):not(:where([class~="not-prose"] *)) {
    font-size: 0.875em;
}

.prose :where(h3 code):not(:where([class~="not-prose"] *)) {
    font-size: 0.9em;
}

.prose :where(li):not(:where([class~="not-prose"] *)) {
    margin-top: 0.5em;
    margin-bottom: 0.5em;
}

.prose :where(ol>li):not(:where([class~="not-prose"] *)) {
    padding-left: 0.375em;
}

.prose :where(ul>li):not(:where([class~="not-prose"] *)) {
    padding-left: 0.375em;
}

.prose> :where(ul>li p):not(:where([class~="not-prose"] *)) {
    margin-top: 0.75em;
    margin-bottom: 0.75em;
}

.prose> :where(ul>li>*:first-child):not(:where([class~="not-prose"] *)) {
    margin-top: 1.25em;
}

.prose> :where(ul>li>*:last-child):not(:where([class~="not-prose"] *)) {
    margin-bottom: 1.25em;
}

.prose> :where(ol>li>*:first-child):not(:where([class~="not-prose"] *)) {
    margin-top: 1.25em;
}

.prose> :where(ol>li>*:last-child):not(:where([class~="not-prose"] *)) {
    margin-bottom: 1.25em;
}

.prose :where(ul ul,
ul ol,
ol ul,
ol ol):not(:where([class~="not-prose"] *)) {
    margin-top: 0.75em;
    margin-bottom: 0.75em;
}

.prose :where(hr+*):not(:where([class~="not-prose"] *)) {
    margin-top: 0;
}

.prose :where(h2+*):not(:where([class~="not-prose"] *)) {
    margin-top: 0;
}

.prose :where(h3+*):not(:where([class~="not-prose"] *)) {
    margin-top: 0;
}

.prose :where(h4+*):not(:where([class~="not-prose"] *)) {
    margin-top: 0;
}

.prose :where(thead th:first-child):not(:where([class~="not-prose"] *)) {
    padding-left: 0;
}

.prose :where(thead th:last-child):not(:where([class~="not-prose"] *)) {
    padding-right: 0;
}

.prose :where(tbody td:first-child):not(:where([class~="not-prose"] *)) {
    padding-left: 0;
}

.prose :where(tbody td:last-child):not(:where([class~="not-prose"] *)) {
    padding-right: 0;
}

.prose> :where(:first-child):not(:where([class~="not-prose"] *)) {
    margin-top: 0;
}

.prose> :where(:last-child):not(:where([class~="not-prose"] *)) {
    margin-bottom: 0;
}

.prose-sm {
    font-size: 0.875rem;
    line-height: 1.7142857;
}

.prose-sm :where(p):not(:where([class~="not-prose"] *)) {
    margin-top: 1.1428571em;
    margin-bottom: 1.1428571em;
}

.prose-sm :where([class~="lead"]):not(:where([class~="not-prose"] *)) {
    font-size: 1.2857143em;
    line-height: 1.5555556;
    margin-top: 0.8888889em;
    margin-bottom: 0.8888889em;
}

.prose-sm :where(blockquote):not(:where([class~="not-prose"] *)) {
    margin-top: 1.3333333em;
    margin-bottom: 1.3333333em;
    padding-left: 1.1111111em;
}

.prose-sm :where(h1):not(:where([class~="not-prose"] *)) {
    font-size: 2.1428571em;
    margin-top: 0;
    margin-bottom: 0.8em;
    line-height: 1.2;
}

.prose-sm :where(h2):not(:where([class~="not-prose"] *)) {
    font-size: 1.4285714em;
    margin-top: 1.6em;
    margin-bottom: 0.8em;
    line-height: 1.4;
}

.prose-sm :where(h3):not(:where([class~="not-prose"] *)) {
    font-size: 1.2857143em;
    margin-top: 1.5555556em;
    margin-bottom: 0.4444444em;
    line-height: 1.5555556;
}

.prose-sm :where(h4):not(:where([class~="not-prose"] *)) {
    margin-top: 1.4285714em;
    margin-bottom: 0.5714286em;
    line-height: 1.4285714;
}

.prose-sm :where(img):not(:where([class~="not-prose"] *)) {
    margin-top: 1.7142857em;
    margin-bottom: 1.7142857em;
}

.prose-sm :where(video):not(:where([class~="not-prose"] *)) {
    margin-top: 1.7142857em;
    margin-bottom: 1.7142857em;
}

.prose-sm :where(figure):not(:where([class~="not-prose"] *)) {
    margin-top: 1.7142857em;
    margin-bottom: 1.7142857em;
}

.prose-sm :where(figure>*):not(:where([class~="not-prose"] *)) {
    margin-top: 0;
    margin-bottom: 0;
}

.prose-sm :where(figcaption):not(:where([class~="not-prose"] *)) {
    font-size: 0.8571429em;
    line-height: 1.3333333;
    margin-top: 0.6666667em;
}

.prose-sm :where(code):not(:where([class~="not-prose"] *)) {
    font-size: 0.8571429em;
}

.prose-sm :where(h2 code):not(:where([class~="not-prose"] *)) {
    font-size: 0.9em;
}

.prose-sm :where(h3 code):not(:where([class~="not-prose"] *)) {
    font-size: 0.8888889em;
}

.prose-sm :where(pre):not(:where([class~="not-prose"] *)) {
    font-size: 0.8571429em;
    line-height: 1.6666667;
    margin-top: 1.6666667em;
    margin-bottom: 1.6666667em;
    border-radius: 0.25rem;
    padding-top: 0.6666667em;
    padding-right: 1em;
    padding-bottom: 0.6666667em;
    padding-left: 1em;
}

.prose-sm :where(ol):not(:where([class~="not-prose"] *)) {
    padding-left: 1.5714286em;
}

.prose-sm :where(ul):not(:where([class~="not-prose"] *)) {
    padding-left: 1.5714286em;
}

.prose-sm :where(li):not(:where([class~="not-prose"] *)) {
    margin-top: 0.2857143em;
    margin-bottom: 0.2857143em;
}

.prose-sm :where(ol>li):not(:where([class~="not-prose"] *)) {
    padding-left: 0.4285714em;
}

.prose-sm :where(ul>li):not(:where([class~="not-prose"] *)) {
    padding-left: 0.4285714em;
}

.prose-sm> :where(ul>li p):not(:where([class~="not-prose"] *)) {
    margin-top: 0.5714286em;
    margin-bottom: 0.5714286em;
}

.prose-sm> :where(ul>li>*:first-child):not(:where([class~="not-prose"] *)) {
    margin-top: 1.1428571em;
}

.prose-sm> :where(ul>li>*:last-child):not(:where([class~="not-prose"] *)) {
    margin-bottom: 1.1428571em;
}

.prose-sm> :where(ol>li>*:first-child):not(:where([class~="not-prose"] *)) {
    margin-top: 1.1428571em;
}

.prose-sm> :where(ol>li>*:last-child):not(:where([class~="not-prose"] *)) {
    margin-bottom: 1.1428571em;
}

.prose-sm :where(ul ul,
ul ol,
ol ul,
ol ol):not(:where([class~="not-prose"] *)) {
    margin-top: 0.5714286em;
    margin-bottom: 0.5714286em;
}

.prose-sm :where(hr):not(:where([class~="not-prose"] *)) {
    margin-top: 2.8571429em;
    margin-bottom: 2.8571429em;
}

.prose-sm :where(hr+*):not(:where([class~="not-prose"] *)) {
    margin-top: 0;
}

.prose-sm :where(h2+*):not(:where([class~="not-prose"] *)) {
    margin-top: 0;
}

.prose-sm :where(h3+*):not(:where([class~="not-prose"] *)) {
    margin-top: 0;
}

.prose-sm :where(h4+*):not(:where([class~="not-prose"] *)) {
    margin-top: 0;
}

.prose-sm :where(table):not(:where([class~="not-prose"] *)) {
    font-size: 0.8571429em;
    line-height: 1.5;
}

.prose-sm :where(thead th):not(:where([class~="not-prose"] *)) {
    padding-right: 1em;
    padding-bottom: 0.6666667em;
    padding-left: 1em;
}

.prose-sm :where(thead th:first-child):not(:where([class~="not-prose"] *)) {
    padding-left: 0;
}

.prose-sm :where(thead th:last-child):not(:where([class~="not-prose"] *)) {
    padding-right: 0;
}

.prose-sm :where(tbody td):not(:where([class~="not-prose"] *)) {
    padding-top: 0.6666667em;
    padding-right: 1em;
    padding-bottom: 0.6666667em;
    padding-left: 1em;
}

.prose-sm :where(tbody td:first-child):not(:where([class~="not-prose"] *)) {
    padding-left: 0;
}

.prose-sm :where(tbody td:last-child):not(:where([class~="not-prose"] *)) {
    padding-right: 0;
}

.prose-sm> :where(:first-child):not(:where([class~="not-prose"] *)) {
    margin-top: 0;
}

.prose-sm> :where(:last-child):not(:where([class~="not-prose"] *)) {
    margin-bottom: 0;
}


/* Button */

.btn {
    display: inline-block;
    cursor: pointer;
    border-top-right-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
    border-width: 1px;
    --tw-border-opacity: 1;
    border-color: rgb(31 41 55 / var(--tw-border-opacity));
    --tw-bg-opacity: 1;
    background-color: rgb(31 41 55 / var(--tw-bg-opacity));
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
    padding-left: 2rem;
    padding-right: 2rem;
    text-align: center;
    font-weight: 600;
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    --tw-ring-color: transparent;
    --tw-ring-offset-width: 2px;
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 300ms;
}

.btn:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(75 85 99 / var(--tw-bg-opacity));
}

.btn:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(31 41 55 / var(--tw-bg-opacity));
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(31 41 55 / var(--tw-ring-opacity));
}

.btn-sm {
    font-size: 0.875rem;
    line-height: 1.25rem;
}

.btn-outline {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity));
    --tw-text-opacity: 1;
    color: rgb(31 41 55 / var(--tw-text-opacity));
}

.btn-outline:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}

.btn-outline:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(31 41 55 / var(--tw-bg-opacity));
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
}

.btn-icon {
    display: grid;
    height: 2.5rem;
    width: 2.5rem;
    place-items: center;
    border-top-right-radius: 0.75rem;
    border-bottom-left-radius: 0.75rem;
    padding: 0px;
    font-size: 0.875rem;
    line-height: 1.25rem;
}


/* End Button */


/* Input */

.select,
.input,
.textarea {
    border-top-right-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 300ms;
}

.select:focus,
.input:focus,
.textarea:focus {
    --tw-border-opacity: 1;
    border-color: rgb(31 41 55 / var(--tw-border-opacity));
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000);
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(31 41 55 / var(--tw-ring-opacity));
    --tw-ring-offset-width: 2px;
}

.checkbox {
    border-top-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 300ms;
}

.checkbox:checked {
    --tw-text-opacity: 1;
    color: rgb(31 41 55 / var(--tw-text-opacity));
}

.checkbox:focus {
    --tw-border-opacity: 1;
    border-color: rgb(31 41 55 / var(--tw-border-opacity));
    --tw-text-opacity: 1;
    color: rgb(31 41 55 / var(--tw-text-opacity));
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(31 41 55 / var(--tw-ring-opacity));
}

.form-control {
    display: grid;
    gap: 0.25rem;
}

.form-control .label {
    font-weight: 700;
    --tw-text-opacity: 1;
    color: rgb(31 41 55 / var(--tw-text-opacity));
}

.form-control .invalid {
    font-size: 0.875rem;
    line-height: 1.25rem;
    font-weight: 500;
    font-style: italic;
    --tw-text-opacity: 1;
    color: rgb(220 38 38 / var(--tw-text-opacity));
}


/* End Input */


/* Table */

.thead {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.th {
    white-space: nowrap;
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
    text-align: left;
    font-size: 0.75rem;
    line-height: 1rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    --tw-text-opacity: 1;
    color: rgb(31 41 55 / var(--tw-text-opacity));
}

@media (min-width: 640px) {
    .th {
        font-size: 0.875rem;
        line-height: 1.25rem;
    }
}

.td {
    white-space: nowrap;
    padding-top: 1rem;
    padding-bottom: 1rem;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
    font-size: 0.875rem;
    line-height: 1.25rem;
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity));
}

@media (min-width: 640px) {
    .td {
        font-size: 1rem;
        line-height: 1.5rem;
    }
}


/* End Table */

.sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
}

.fixed {
    position: fixed;
}

.absolute {
    position: absolute;
}

.relative {
    position: relative;
}

.inset-0 {
    top: 0px;
    right: 0px;
    bottom: 0px;
    left: 0px;
}

.inset-x-0 {
    left: 0px;
    right: 0px;
}

.inset-y-0 {
    top: 0px;
    bottom: 0px;
}

.top-4 {
    top: 1rem;
}

.left-4 {
    left: 1rem;
}

.top-0 {
    top: 0px;
}

.right-0 {
    right: 0px;
}

.top-\[120\%\] {
    top: 120%;
}

.left-0 {
    left: 0px;
}

.top-full {
    top: 100%;
}

.z-0 {
    z-index: 0;
}

.z-50 {
    z-index: 50;
}

.z-10 {
    z-index: 10;
}

.z-40 {
    z-index: 40;
}

.z-30 {
    z-index: 30;
}

.order-2 {
    order: 2;
}

.order-1 {
    order: 1;
}

.col-span-1 {
    grid-column: span 1 / span 1;
}

.mx-auto {
    margin-left: auto;
    margin-right: auto;
}

.my-20 {
    margin-top: 5rem;
    margin-bottom: 5rem;
}

.ml-3 {
    margin-left: 0.75rem;
}

.-ml-px {
    margin-left: -1px;
}

.ml-1 {
    margin-left: 0.25rem;
}

.mt-2 {
    margin-top: 0.5rem;
}

.mr-2 {
    margin-right: 0.5rem;
}

.ml-2 {
    margin-left: 0.5rem;
}

.mt-4 {
    margin-top: 1rem;
}

.ml-4 {
    margin-left: 1rem;
}

.mt-8 {
    margin-top: 2rem;
}

.ml-12 {
    margin-left: 3rem;
}

.-mt-px {
    margin-top: -1px;
}

.mt-6 {
    margin-top: 1.5rem;
}

.mt-3 {
    margin-top: 0.75rem;
}

.mt-20 {
    margin-top: 5rem;
}

.mb-10 {
    margin-bottom: 2.5rem;
}

.mb-4 {
    margin-bottom: 1rem;
}

.mt-1 {
    margin-top: 0.25rem;
}

.mt-32 {
    margin-top: 8rem;
}

.mt-10 {
    margin-top: 2.5rem;
}

.mb-20 {
    margin-bottom: 5rem;
}

.mt-28 {
    margin-top: 7rem;
}

.mt-14 {
    margin-top: 3.5rem;
}

.-mr-2 {
    margin-right: -0.5rem;
}

.block {
    display: block;
}

.inline-block {
    display: inline-block;
}

.flex {
    display: flex;
}

.inline-flex {
    display: inline-flex;
}

.table {
    display: table;
}

.grid {
    display: grid;
}

.hidden {
    display: none;
}

.aspect-\[16\/9\] {
    aspect-ratio: 16 / 9;
}

.aspect-\[5\/4\] {
    aspect-ratio: 5 / 4;
}

.aspect-\[8\/6\] {
    aspect-ratio: 8 / 6;
}

.aspect-\[1\/1\] {
    aspect-ratio: 1 / 1;
}

.h-5 {
    height: 1.25rem;
}

.h-8 {
    height: 2rem;
}

.h-16 {
    height: 4rem;
}

.h-14 {
    height: 3.5rem;
}

.h-full {
    height: 100%;
}

.h-10 {
    height: 2.5rem;
}

.h-20 {
    height: 5rem;
}

.h-4 {
    height: 1rem;
}

.h-6 {
    height: 1.5rem;
}

.max-h-\[40vh\] {
    max-height: 40vh;
}

.max-h-\[4rem\] {
    max-height: 4rem;
}

.max-h-screen {
    max-height: 100vh;
}

.min-h-screen {
    min-height: 100vh;
}

.min-h-\[4rem\] {
    min-height: 4rem;
}

.w-5 {
    width: 1.25rem;
}

.w-full {
    width: 100%;
}

.w-8 {
    width: 2rem;
}

.w-auto {
    width: auto;
}

.w-14 {
    width: 3.5rem;
}

.w-\[300px\] {
    width: 300px;
}

.w-10 {
    width: 2.5rem;
}

.w-20 {
    width: 5rem;
}

.w-48 {
    width: 12rem;
}

.w-4 {
    width: 1rem;
}

.w-6 {
    width: 1.5rem;
}

.min-w-\[4rem\] {
    min-width: 4rem;
}

.min-w-\[1\.5rem\] {
    min-width: 1.5rem;
}

.min-w-full {
    min-width: 100%;
}

.max-w-md {
    max-width: 28rem;
}

.max-w-xl {
    max-width: 36rem;
}

.max-w-6xl {
    max-width: 72rem;
}

.max-w-7xl {
    max-width: 80rem;
}

.max-w-none {
    max-width: none;
}

.max-w-full {
    max-width: 100%;
}

.max-w-\[4rem\] {
    max-width: 4rem;
}

.max-w-max {
    max-width: -webkit-max-content;
    max-width: -moz-max-content;
    max-width: max-content;
}

.max-w-2xl {
    max-width: 42rem;
}

.flex-1 {
    flex: 1 1 0%;
}

.shrink-0 {
    flex-shrink: 0;
}

.origin-top-left {
    transform-origin: top left;
}

.origin-top {
    transform-origin: top;
}

.origin-top-right {
    transform-origin: top right;
}

.translate-x-4 {
    --tw-translate-x: 1rem;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.translate-x-5 {
    --tw-translate-x: 1.25rem;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.-translate-y-5 {
    --tw-translate-y: -1.25rem;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.scale-95 {
    --tw-scale-x: .95;
    --tw-scale-y: .95;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.scale-100 {
    --tw-scale-x: 1;
    --tw-scale-y: 1;
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.transform {
    transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}

.cursor-default {
    cursor: default;
}

.cursor-pointer {
    cursor: pointer;
}

.resize-none {
    resize: none;
}

.scroll-mt-20 {
    scroll-margin-top: 5rem;
}

.list-inside {
    list-style-position: inside;
}

.list-disc {
    list-style-type: disc;
}

.grid-cols-1 {
    grid-template-columns: repeat(1, minmax(0, 1fr));
}

.grid-cols-2 {
    grid-template-columns: repeat(2, minmax(0, 1fr));
}

.flex-col {
    flex-direction: column;
}

.flex-wrap {
    flex-wrap: wrap;
}

.place-items-center {
    place-items: center;
}

.items-start {
    align-items: flex-start;
}

.items-center {
    align-items: center;
}

.justify-end {
    justify-content: flex-end;
}

.justify-center {
    justify-content: center;
}

.justify-between {
    justify-content: space-between;
}

.justify-items-center {
    justify-items: center;
}

.gap-4 {
    gap: 1rem;
}

.gap-2 {
    gap: 0.5rem;
}

.gap-1 {
    gap: 0.25rem;
}

.gap-10 {
    gap: 2.5rem;
}

.gap-6 {
    gap: 1.5rem;
}

.gap-8 {
    gap: 2rem;
}

.gap-x-4 {
    -moz-column-gap: 1rem;
    column-gap: 1rem;
}

.gap-y-2 {
    row-gap: 0.5rem;
}

.gap-x-10 {
    -moz-column-gap: 2.5rem;
    column-gap: 2.5rem;
}

.gap-y-4 {
    row-gap: 1rem;
}

.space-y-8> :not([hidden])~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(2rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(2rem * var(--tw-space-y-reverse));
}

.space-y-4> :not([hidden])~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1rem * var(--tw-space-y-reverse));
}

.space-x-2> :not([hidden])~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(0.5rem * var(--tw-space-x-reverse));
    margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-x-4> :not([hidden])~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(1rem * var(--tw-space-x-reverse));
    margin-left: calc(1rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-y-6> :not([hidden])~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1.5rem * var(--tw-space-y-reverse));
}

.space-y-2> :not([hidden])~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(0.5rem * var(--tw-space-y-reverse));
}

.space-y-1> :not([hidden])~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(0.25rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(0.25rem * var(--tw-space-y-reverse));
}

.space-x-1> :not([hidden])~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(0.25rem * var(--tw-space-x-reverse));
    margin-left: calc(0.25rem * calc(1 - var(--tw-space-x-reverse)));
}

.space-y-10> :not([hidden])~ :not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(2.5rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(2.5rem * var(--tw-space-y-reverse));
}

.space-x-8> :not([hidden])~ :not([hidden]) {
    --tw-space-x-reverse: 0;
    margin-right: calc(2rem * var(--tw-space-x-reverse));
    margin-left: calc(2rem * calc(1 - var(--tw-space-x-reverse)));
}

.overflow-hidden {
    overflow: hidden;
}

.overflow-x-auto {
    overflow-x: auto;
}

.overflow-y-auto {
    overflow-y: auto;
}

.overflow-x-hidden {
    overflow-x: hidden;
}

.break-words {
    overflow-wrap: break-word;
}

.break-all {
    word-break: break-all;
}

.rounded-md {
    border-radius: 0.375rem;
}

.rounded-xl {
    border-radius: 0.75rem;
}

.rounded-lg {
    border-radius: 0.5rem;
}

.rounded {
    border-radius: 0.25rem;
}

.rounded-l-md {
    border-top-left-radius: 0.375rem;
    border-bottom-left-radius: 0.375rem;
}

.rounded-r-md {
    border-top-right-radius: 0.375rem;
    border-bottom-right-radius: 0.375rem;
}

.rounded-tr-xl {
    border-top-right-radius: 0.75rem;
}

.rounded-bl-xl {
    border-bottom-left-radius: 0.75rem;
}

.rounded-tr-2xl {
    border-top-right-radius: 1rem;
}

.rounded-bl-2xl {
    border-bottom-left-radius: 1rem;
}

.rounded-tr-3xl {
    border-top-right-radius: 1.5rem;
}

.rounded-bl-3xl {
    border-bottom-left-radius: 1.5rem;
}

.rounded-tr-lg {
    border-top-right-radius: 0.5rem;
}

.rounded-bl-lg {
    border-bottom-left-radius: 0.5rem;
}

.rounded-tl-2xl {
    border-top-left-radius: 1rem;
}

.rounded-br-2xl {
    border-bottom-right-radius: 1rem;
}

.border {
    border-width: 1px;
}

.border-2 {
    border-width: 2px;
}

.border-t {
    border-top-width: 1px;
}

.border-r {
    border-right-width: 1px;
}

.border-b {
    border-bottom-width: 1px;
}

.border-l-4 {
    border-left-width: 4px;
}

.border-gray-300 {
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-border-opacity));
}

.border-gray-200 {
    --tw-border-opacity: 1;
    border-color: rgb(229 231 235 / var(--tw-border-opacity));
}

.border-gray-400 {
    --tw-border-opacity: 1;
    border-color: rgb(156 163 175 / var(--tw-border-opacity));
}

.border-gray-800 {
    --tw-border-opacity: 1;
    border-color: rgb(31 41 55 / var(--tw-border-opacity));
}

.border-transparent {
    border-color: transparent;
}

.border-gray-100 {
    --tw-border-opacity: 1;
    border-color: rgb(243 244 246 / var(--tw-border-opacity));
}

.border-indigo-400 {
    --tw-border-opacity: 1;
    border-color: rgb(129 140 248 / var(--tw-border-opacity));
}

.bg-white {
    --tw-bg-opacity: 1;
    background-color: rgb(255 255 255 / var(--tw-bg-opacity));
}

.bg-black\/50 {
    background-color: rgb(0 0 0 / 0.5);
}

.bg-gray-100 {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}

.bg-gray-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}

.bg-gray-800 {
    --tw-bg-opacity: 1;
    background-color: rgb(31 41 55 / var(--tw-bg-opacity));
}

.bg-gray-200 {
    --tw-bg-opacity: 1;
    background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}

.bg-white\/30 {
    background-color: rgb(255 255 255 / 0.3);
}

.bg-transparent {
    background-color: transparent;
}

.bg-indigo-50 {
    --tw-bg-opacity: 1;
    background-color: rgb(238 242 255 / var(--tw-bg-opacity));
}

.fill-current {
    fill: currentColor;
}

.object-cover {
    -o-object-fit: cover;
    object-fit: cover;
}

.p-4 {
    padding: 1rem;
}

.p-10 {
    padding: 2.5rem;
}

.p-6 {
    padding: 1.5rem;
}

.p-2 {
    padding: 0.5rem;
}

.px-4 {
    padding-left: 1rem;
    padding-right: 1rem;
}

.py-2 {
    padding-top: 0.5rem;
    padding-bottom: 0.5rem;
}

.px-2 {
    padding-left: 0.5rem;
    padding-right: 0.5rem;
}

.py-4 {
    padding-top: 1rem;
    padding-bottom: 1rem;
}

.px-6 {
    padding-left: 1.5rem;
    padding-right: 1.5rem;
}

.py-12 {
    padding-top: 3rem;
    padding-bottom: 3rem;
}

.px-8 {
    padding-left: 2rem;
    padding-right: 2rem;
}

.py-8 {
    padding-top: 2rem;
    padding-bottom: 2rem;
}

.px-10 {
    padding-left: 2.5rem;
    padding-right: 2.5rem;
}

.py-1 {
    padding-top: 0.25rem;
    padding-bottom: 0.25rem;
}

.pt-8 {
    padding-top: 2rem;
}

.pt-6 {
    padding-top: 1.5rem;
}

.pt-10 {
    padding-top: 2.5rem;
}

.pt-20 {
    padding-top: 5rem;
}

.pb-4 {
    padding-bottom: 1rem;
}

.pl-3 {
    padding-left: 0.75rem;
}

.pr-4 {
    padding-right: 1rem;
}

.pt-2 {
    padding-top: 0.5rem;
}

.pb-3 {
    padding-bottom: 0.75rem;
}

.pt-4 {
    padding-top: 1rem;
}

.pb-1 {
    padding-bottom: 0.25rem;
}

.text-left {
    text-align: left;
}

.text-center {
    text-align: center;
}

.font-\[\'poppins\'\] {
 font-family: 'poppins';

}
.font-sans {
    font-family: Quicksand, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}
.font-\[\'Quicksand\'\] {
 font-family: 'Quicksand';

}
.font-\[\'quicsand\'\] {
 font-family: 'quicsand';

}
.font-\[\'quicksand\'\] {
 font-family: 'quicksand';

}
.text-sm {
    font-size: 0.875rem;
    line-height: 1.25rem;
}
.text-3xl {
    font-size: 1.875rem;
    line-height: 2.25rem;
}
.text-8xl {
    font-size: 6rem;
    line-height: 1;
}
.text-lg {
    font-size: 1.125rem;
    line-height: 1.75rem;
}
.text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
}
.text-2xl {
    font-size: 1.5rem;
    line-height: 2rem;
}
.text-4xl {
    font-size: 2.25rem;
    line-height: 2.5rem;
}
.text-xs {
    font-size: 0.75rem;
    line-height: 1rem;
}
.text-base {
    font-size: 1rem;
    line-height: 1.5rem;
}
.font-medium {
    font-weight: 500;
}
.font-black {
    font-weight: 900;
}
.font-bold {
    font-weight: 700;
}
.font-semibold {
    font-weight: 600;
}
.uppercase {
    text-transform: uppercase;
}
.capitalize {
    text-transform: capitalize;
}
.italic {
    font-style: italic;
}
.leading-5 {
    line-height: 1.25rem;
}
.leading-7 {
    line-height: 1.75rem;
}
.leading-tight {
    line-height: 1.25;
}
.tracking-wide {
    letter-spacing: 0.025em;
}
.tracking-wider {
    letter-spacing: 0.05em;
}
.tracking-widest {
    letter-spacing: 0.1em;
}
.text-gray-500 {
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity));
}
.text-gray-700 {
    --tw-text-opacity: 1;
    color: rgb(55 65 81 / var(--tw-text-opacity));
}
.text-gray-800 {
    --tw-text-opacity: 1;
    color: rgb(31 41 55 / var(--tw-text-opacity));
}
.text-orange-600 {
    --tw-text-opacity: 1;
    color: rgb(234 88 12 / var(--tw-text-opacity));
}
.text-red-600 {
    --tw-text-opacity: 1;
    color: rgb(220 38 38 / var(--tw-text-opacity));
}
.text-gray-600 {
    --tw-text-opacity: 1;
    color: rgb(75 85 99 / var(--tw-text-opacity));
}
.text-green-600 {
    --tw-text-opacity: 1;
    color: rgb(22 163 74 / var(--tw-text-opacity));
}
.text-gray-200 {
    --tw-text-opacity: 1;
    color: rgb(229 231 235 / var(--tw-text-opacity));
}
.text-gray-300 {
    --tw-text-opacity: 1;
    color: rgb(209 213 219 / var(--tw-text-opacity));
}
.text-gray-400 {
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity));
}
.text-gray-900 {
    --tw-text-opacity: 1;
    color: rgb(17 24 39 / var(--tw-text-opacity));
}
.text-white {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
}
.text-red-500 {
    --tw-text-opacity: 1;
    color: rgb(239 68 68 / var(--tw-text-opacity));
}
.text-gray-100 {
    --tw-text-opacity: 1;
    color: rgb(243 244 246 / var(--tw-text-opacity));
}
.text-blue-600 {
    --tw-text-opacity: 1;
    color: rgb(37 99 235 / var(--tw-text-opacity));
}
.text-orange-500 {
    --tw-text-opacity: 1;
    color: rgb(249 115 22 / var(--tw-text-opacity));
}
.text-indigo-600 {
    --tw-text-opacity: 1;
    color: rgb(79 70 229 / var(--tw-text-opacity));
}
.text-indigo-700 {
    --tw-text-opacity: 1;
    color: rgb(67 56 202 / var(--tw-text-opacity));
}
.underline {
    -webkit-text-decoration-line: underline;
    text-decoration-line: underline;
}
.antialiased {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.opacity-0 {
    opacity: 0;
}
.opacity-100 {
    opacity: 1;
}
.shadow-sm {
    --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / 0.05);
    --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow,
    0 0 #0000),
    var(--tw-ring-shadow,
    0 0 #0000),
    var(--tw-shadow);
}
.shadow {
    --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1),
    0 1px 2px -1px rgb(0 0 0 / 0.1);
    --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color),
    0 1px 2px -1px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow,
    0 0 #0000),
    var(--tw-ring-shadow,
    0 0 #0000),
    var(--tw-shadow);
}
.shadow-md {
    --tw-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1),
    0 2px 4px -2px rgb(0 0 0 / 0.1);
    --tw-shadow-colored: 0 4px 6px -1px var(--tw-shadow-color),
    0 2px 4px -2px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow,
    0 0 #0000),
    var(--tw-ring-shadow,
    0 0 #0000),
    var(--tw-shadow);
}
.shadow-2xl {
    --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
    --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow,
    0 0 #0000),
    var(--tw-ring-shadow,
    0 0 #0000),
    var(--tw-shadow);
}
.shadow-lg {
    --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1),
    0 4px 6px -4px rgb(0 0 0 / 0.1);
    --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color),
    0 4px 6px -4px var(--tw-shadow-color);
    box-shadow: var(--tw-ring-offset-shadow,
    0 0 #0000),
    var(--tw-ring-shadow,
    0 0 #0000),
    var(--tw-shadow);
}
.shadow-gray-600\/20 {
    --tw-shadow-color: rgb(75 85 99 / 0.2);
    --tw-shadow: var(--tw-shadow-colored);
}
.ring {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px+var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),
    var(--tw-ring-shadow),
    var(--tw-shadow,
    0 0 #0000);
}
.ring-1 {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px+var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),
    var(--tw-ring-shadow),
    var(--tw-shadow,
    0 0 #0000);
}
.ring-gray-300 {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity));
}
.ring-transparent {
    --tw-ring-color: transparent;
}
.ring-black {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity));
}
.ring-opacity-5 {
    --tw-ring-opacity: 0.05;
}
.ring-offset-2 {
    --tw-ring-offset-width: 2px;
}
.ring-offset-gray-100 {
    --tw-ring-offset-color: #f3f4f6;
}
.blur-sm {
    --tw-blur: blur(4px);
    filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
}
.backdrop-blur-sm {
    --tw-backdrop-blur: blur(4px);
    -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
}
.transition {
    transition-property: color,
    background-color,
    border-color,
    fill,
    stroke,
    opacity,
    box-shadow,
    transform,
    filter,
    -webkit-text-decoration-color,
    -webkit-backdrop-filter;
    transition-property: color,
    background-color,
    border-color,
    text-decoration-color,
    fill,
    stroke,
    opacity,
    box-shadow,
    transform,
    filter,
    backdrop-filter;
    transition-property: color,
    background-color,
    border-color,
    text-decoration-color,
    fill,
    stroke,
    opacity,
    box-shadow,
    transform,
    filter,
    backdrop-filter,
    -webkit-text-decoration-color,
    -webkit-backdrop-filter;
    transition-timing-function: cubic-bezier(0.4,
    0,
    0.2,
    1);
    transition-duration: 150ms;
}
.transition-all {
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4,
    0,
    0.2,
    1);
    transition-duration: 150ms;
}
.duration-150 {
    transition-duration: 150ms;
}
.duration-300 {
    transition-duration: 300ms;
}
.duration-200 {
    transition-duration: 200ms;
}
.duration-75 {
    transition-duration: 75ms;
}
.ease-in-out {
    transition-timing-function: cubic-bezier(0.4,
    0,
    0.2,
    1);
}
.ease-out {
    transition-timing-function: cubic-bezier(0,
    0,
    0.2,
    1);
}
.ease-in {
    transition-timing-function: cubic-bezier(0.4,
    0,
    1,
    1);
}
.line-clamp-2 {
    overflow: hidden;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}
.after\:block::after {
    content: var(--tw-content);
    display: block;
}
.after\:h-1::after {
    content: var(--tw-content);
    height: 0.25rem;
}
.after\:h-0\.5::after {
    content: var(--tw-content);
    height: 0.125rem;
}
.after\:h-0::after {
    content: var(--tw-content);
    height: 0px;
}
.after\:w-10::after {
    content: var(--tw-content);
    width: 2.5rem;
}
.after\:w-4\/5::after {
    content: var(--tw-content);
    width: 80%;
}
.after\:w-0::after {
    content: var(--tw-content);
    width: 0px;
}
.after\:rounded-full::after {
    content: var(--tw-content);
    border-radius: 9999px;
}
.after\:bg-gray-800::after {
    content: var(--tw-content);
    --tw-bg-opacity: 1;
    background-color: rgb(31 41 55 / var(--tw-bg-opacity));
}
.after\:transition-all::after {
    content: var(--tw-content);
    transition-property: all;
    transition-timing-function: cubic-bezier(0.4,
    0,
    0.2,
    1);
    transition-duration: 150ms;
}
.after\:duration-300::after {
    content: var(--tw-content);
    transition-duration: 300ms;
}
.after\:content-\[\'\'\]::after {
 --tw-content: '';
content: var(--tw-content);

}
.hover\:scale-110:hover {
    --tw-scale-x: 1.1;
    --tw-scale-y: 1.1;
    transform: translate(var(--tw-translate-x),
    var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.hover\:border-gray-300:hover {
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-border-opacity));
}
.hover\:bg-gray-100:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}
.hover\:bg-gray-600:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(75 85 99 / var(--tw-bg-opacity));
}
.hover\:bg-gray-200:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(229 231 235 / var(--tw-bg-opacity));
}
.hover\:bg-gray-700:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(55 65 81 / var(--tw-bg-opacity));
}
.hover\:bg-gray-50:hover {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}
.hover\:text-gray-500:hover {
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity));
}
.hover\:text-gray-400:hover {
    --tw-text-opacity: 1;
    color: rgb(156 163 175 / var(--tw-text-opacity));
}
.hover\:text-gray-900:hover {
    --tw-text-opacity: 1;
    color: rgb(17 24 39 / var(--tw-text-opacity));
}
.hover\:text-gray-800:hover {
    --tw-text-opacity: 1;
    color: rgb(31 41 55 / var(--tw-text-opacity));
}
.hover\:text-gray-700:hover {
    --tw-text-opacity: 1;
    color: rgb(55 65 81 / var(--tw-text-opacity));
}
.hover\:underline:hover {
    -webkit-text-decoration-line: underline;
    text-decoration-line: underline;
}
.hover\:after\:w-4\/5:hover::after {
    content: var(--tw-content);
    width: 80%;
}
.focus\:z-10:focus {
    z-index: 10;
}
.focus\:border-blue-300:focus {
    --tw-border-opacity: 1;
    border-color: rgb(147 197 253 / var(--tw-border-opacity));
}
.focus\:border-indigo-300:focus {
    --tw-border-opacity: 1;
    border-color: rgb(165 180 252 / var(--tw-border-opacity));
}
.focus\:border-gray-900:focus {
    --tw-border-opacity: 1;
    border-color: rgb(17 24 39 / var(--tw-border-opacity));
}
.focus\:border-indigo-700:focus {
    --tw-border-opacity: 1;
    border-color: rgb(67 56 202 / var(--tw-border-opacity));
}
.focus\:border-gray-300:focus {
    --tw-border-opacity: 1;
    border-color: rgb(209 213 219 / var(--tw-border-opacity));
}
.focus\:bg-gray-800:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(31 41 55 / var(--tw-bg-opacity));
}
.focus\:bg-gray-100:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}
.focus\:bg-indigo-100:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(224 231 255 / var(--tw-bg-opacity));
}
.focus\:bg-gray-50:focus {
    --tw-bg-opacity: 1;
    background-color: rgb(249 250 251 / var(--tw-bg-opacity));
}
.focus\:text-white:focus {
    --tw-text-opacity: 1;
    color: rgb(255 255 255 / var(--tw-text-opacity));
}
.focus\:text-indigo-800:focus {
    --tw-text-opacity: 1;
    color: rgb(55 48 163 / var(--tw-text-opacity));
}
.focus\:text-gray-800:focus {
    --tw-text-opacity: 1;
    color: rgb(31 41 55 / var(--tw-text-opacity));
}
.focus\:text-gray-700:focus {
    --tw-text-opacity: 1;
    color: rgb(55 65 81 / var(--tw-text-opacity));
}
.focus\:text-gray-500:focus {
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity));
}
.focus\:outline-none:focus {
    outline: 2px solid transparent;
    outline-offset: 2px;
}
.focus\:ring:focus {
    --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
    --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px+var(--tw-ring-offset-width)) var(--tw-ring-color);
    box-shadow: var(--tw-ring-offset-shadow),
    var(--tw-ring-shadow),
    var(--tw-shadow,
    0 0 #0000);
}
.focus\:ring-indigo-200:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(199 210 254 / var(--tw-ring-opacity));
}
.focus\:ring-gray-800:focus {
    --tw-ring-opacity: 1;
    --tw-ring-color: rgb(31 41 55 / var(--tw-ring-opacity));
}
.focus\:ring-opacity-50:focus {
    --tw-ring-opacity: 0.5;
}
.active\:bg-gray-100:active {
    --tw-bg-opacity: 1;
    background-color: rgb(243 244 246 / var(--tw-bg-opacity));
}
.active\:bg-gray-900:active {
    --tw-bg-opacity: 1;
    background-color: rgb(17 24 39 / var(--tw-bg-opacity));
}
.active\:text-gray-700:active {
    --tw-text-opacity: 1;
    color: rgb(55 65 81 / var(--tw-text-opacity));
}
.active\:text-gray-500:active {
    --tw-text-opacity: 1;
    color: rgb(107 114 128 / var(--tw-text-opacity));
}
.disabled\:opacity-25:disabled {
    opacity: 0.25;
}
.group:hover .group-hover\:translate-x-0 {
    --tw-translate-x: 0px;
    transform: translate(var(--tw-translate-x),
    var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.group:hover .group-hover\:translate-x-2 {
    --tw-translate-x: 0.5rem;
    transform: translate(var(--tw-translate-x),
    var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
}
.group:hover .group-hover\:text-gray-600 {
    --tw-text-opacity: 1;
    color: rgb(75 85 99 / var(--tw-text-opacity));
}
.group:hover .group-hover\:underline {
    -webkit-text-decoration-line: underline;
    text-decoration-line: underline;
}
.group:hover .group-hover\:opacity-100 {
    opacity: 1;
}
.prose-headings\:font-\[\'poppins\'\] :is(:where(h1, h2, h3, h4, th):not(:where([class~="not-prose"] *))) {
 font-family: 'poppins';

}
.prose-img\:w-full :is(:where(img):not(:where([class~="not-prose"] *))) {
    width: 100%;
}
.prose-img\:rounded-tr-xl :is(:where(img):not(:where([class~="not-prose"] *))) {
    border-top-right-radius: 0.75rem;
}
.prose-img\:rounded-bl-xl :is(:where(img):not(:where([class~="not-prose"] *))) {
    border-bottom-left-radius: 0.75rem;
}
@media (prefers-color-scheme: dark) {
    .dark\:border-gray-700 {
        --tw-border-opacity: 1;
        border-color: rgb(55 65 81 / var(--tw-border-opacity));
    }
    .dark\:bg-gray-900 {
        --tw-bg-opacity: 1;
        background-color: rgb(17 24 39 / var(--tw-bg-opacity));
    }
    .dark\:bg-gray-800 {
        --tw-bg-opacity: 1;
        background-color: rgb(31 41 55 / var(--tw-bg-opacity));
    }
    .dark\:text-gray-500 {
        --tw-text-opacity: 1;
        color: rgb(107 114 128 / var(--tw-text-opacity));
    }
    .dark\:text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
    }
    .dark\:text-gray-400 {
        --tw-text-opacity: 1;
        color: rgb(156 163 175 / var(--tw-text-opacity));
    }
}
@media (min-width: 640px) {
    .sm\:prose-base {
        font-size: 1rem;
        line-height: 1.75;
    }
    .sm\:prose-base :where(p):not(:where([class~="not-prose"] *)) {
        margin-top: 1.25em;
        margin-bottom: 1.25em;
    }
    .sm\:prose-base :where([class~="lead"]):not(:where([class~="not-prose"] *)) {
        font-size: 1.25em;
        line-height: 1.6;
        margin-top: 1.2em;
        margin-bottom: 1.2em;
    }
    .sm\:prose-base :where(blockquote):not(:where([class~="not-prose"] *)) {
        margin-top: 1.6em;
        margin-bottom: 1.6em;
        padding-left: 1em;
    }
    .sm\:prose-base :where(h1):not(:where([class~="not-prose"] *)) {
        font-size: 2.25em;
        margin-top: 0;
        margin-bottom: 0.8888889em;
        line-height: 1.1111111;
    }
    .sm\:prose-base :where(h2):not(:where([class~="not-prose"] *)) {
        font-size: 1.5em;
        margin-top: 2em;
        margin-bottom: 1em;
        line-height: 1.3333333;
    }
    .sm\:prose-base :where(h3):not(:where([class~="not-prose"] *)) {
        font-size: 1.25em;
        margin-top: 1.6em;
        margin-bottom: 0.6em;
        line-height: 1.6;
    }
    .sm\:prose-base :where(h4):not(:where([class~="not-prose"] *)) {
        margin-top: 1.5em;
        margin-bottom: 0.5em;
        line-height: 1.5;
    }
    .sm\:prose-base :where(img):not(:where([class~="not-prose"] *)) {
        margin-top: 2em;
        margin-bottom: 2em;
    }
    .sm\:prose-base :where(video):not(:where([class~="not-prose"] *)) {
        margin-top: 2em;
        margin-bottom: 2em;
    }
    .sm\:prose-base :where(figure):not(:where([class~="not-prose"] *)) {
        margin-top: 2em;
        margin-bottom: 2em;
    }
    .sm\:prose-base :where(figure>*):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
        margin-bottom: 0;
    }
    .sm\:prose-base :where(figcaption):not(:where([class~="not-prose"] *)) {
        font-size: 0.875em;
        line-height: 1.4285714;
        margin-top: 0.8571429em;
    }
    .sm\:prose-base :where(code):not(:where([class~="not-prose"] *)) {
        font-size: 0.875em;
    }
    .sm\:prose-base :where(h2 code):not(:where([class~="not-prose"] *)) {
        font-size: 0.875em;
    }
    .sm\:prose-base :where(h3 code):not(:where([class~="not-prose"] *)) {
        font-size: 0.9em;
    }
    .sm\:prose-base :where(pre):not(:where([class~="not-prose"] *)) {
        font-size: 0.875em;
        line-height: 1.7142857;
        margin-top: 1.7142857em;
        margin-bottom: 1.7142857em;
        border-radius: 0.375rem;
        padding-top: 0.8571429em;
        padding-right: 1.1428571em;
        padding-bottom: 0.8571429em;
        padding-left: 1.1428571em;
    }
    .sm\:prose-base :where(ol):not(:where([class~="not-prose"] *)) {
        padding-left: 1.625em;
    }
    .sm\:prose-base :where(ul):not(:where([class~="not-prose"] *)) {
        padding-left: 1.625em;
    }
    .sm\:prose-base :where(li):not(:where([class~="not-prose"] *)) {
        margin-top: 0.5em;
        margin-bottom: 0.5em;
    }
    .sm\:prose-base :where(ol>li):not(:where([class~="not-prose"] *)) {
        padding-left: 0.375em;
    }
    .sm\:prose-base :where(ul>li):not(:where([class~="not-prose"] *)) {
        padding-left: 0.375em;
    }
    .sm\:prose-base> :where(ul>li p):not(:where([class~="not-prose"] *)) {
        margin-top: 0.75em;
        margin-bottom: 0.75em;
    }
    .sm\:prose-base> :where(ul>li>*:first-child):not(:where([class~="not-prose"] *)) {
        margin-top: 1.25em;
    }
    .sm\:prose-base> :where(ul>li>*:last-child):not(:where([class~="not-prose"] *)) {
        margin-bottom: 1.25em;
    }
    .sm\:prose-base> :where(ol>li>*:first-child):not(:where([class~="not-prose"] *)) {
        margin-top: 1.25em;
    }
    .sm\:prose-base> :where(ol>li>*:last-child):not(:where([class~="not-prose"] *)) {
        margin-bottom: 1.25em;
    }
    .sm\:prose-base :where(ul ul,
    ul ol,
    ol ul,
    ol ol):not(:where([class~="not-prose"] *)) {
        margin-top: 0.75em;
        margin-bottom: 0.75em;
    }
    .sm\:prose-base :where(hr):not(:where([class~="not-prose"] *)) {
        margin-top: 3em;
        margin-bottom: 3em;
    }
    .sm\:prose-base :where(hr+*):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
    }
    .sm\:prose-base :where(h2+*):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
    }
    .sm\:prose-base :where(h3+*):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
    }
    .sm\:prose-base :where(h4+*):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
    }
    .sm\:prose-base :where(table):not(:where([class~="not-prose"] *)) {
        font-size: 0.875em;
        line-height: 1.7142857;
    }
    .sm\:prose-base :where(thead th):not(:where([class~="not-prose"] *)) {
        padding-right: 0.5714286em;
        padding-bottom: 0.5714286em;
        padding-left: 0.5714286em;
    }
    .sm\:prose-base :where(thead th:first-child):not(:where([class~="not-prose"] *)) {
        padding-left: 0;
    }
    .sm\:prose-base :where(thead th:last-child):not(:where([class~="not-prose"] *)) {
        padding-right: 0;
    }
    .sm\:prose-base :where(tbody td):not(:where([class~="not-prose"] *)) {
        padding-top: 0.5714286em;
        padding-right: 0.5714286em;
        padding-bottom: 0.5714286em;
        padding-left: 0.5714286em;
    }
    .sm\:prose-base :where(tbody td:first-child):not(:where([class~="not-prose"] *)) {
        padding-left: 0;
    }
    .sm\:prose-base :where(tbody td:last-child):not(:where([class~="not-prose"] *)) {
        padding-right: 0;
    }
    .sm\:prose-base> :where(:first-child):not(:where([class~="not-prose"] *)) {
        margin-top: 0;
    }
    .sm\:prose-base> :where(:last-child):not(:where([class~="not-prose"] *)) {
        margin-bottom: 0;
    }
    .sm\:col-span-2 {
        grid-column: span 2 / span 2;
    }
    .sm\:-my-px {
        margin-top: -1px;
        margin-bottom: -1px;
    }
    .sm\:ml-0 {
        margin-left: 0px;
    }
    .sm\:ml-10 {
        margin-left: 2.5rem;
    }
    .sm\:ml-6 {
        margin-left: 1.5rem;
    }
    .sm\:block {
        display: block;
    }
    .sm\:flex {
        display: flex;
    }
    .sm\:hidden {
        display: none;
    }
    .sm\:h-20 {
        height: 5rem;
    }
    .sm\:w-1\/2 {
        width: 50%;
    }
    .sm\:max-w-md {
        max-width: 28rem;
    }
    .sm\:flex-1 {
        flex: 1 1 0%;
    }
    .sm\:columns-2 {
        -moz-columns: 2;
        columns: 2;
    }
    .sm\:grid-cols-2 {
        grid-template-columns: repeat(2,
        minmax(0,
        1fr));
    }
    .sm\:grid-cols-3 {
        grid-template-columns: repeat(3,
        minmax(0,
        1fr));
    }
    .sm\:flex-row {
        flex-direction: row;
    }
    .sm\:items-end {
        align-items: flex-end;
    }
    .sm\:items-center {
        align-items: center;
    }
    .sm\:justify-start {
        justify-content: flex-start;
    }
    .sm\:justify-center {
        justify-content: center;
    }
    .sm\:justify-between {
        justify-content: space-between;
    }
    .sm\:space-x-2> :not([hidden])~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(0.5rem * var(--tw-space-x-reverse));
        margin-left: calc(0.5rem * calc(1 - var(--tw-space-x-reverse)));
    }
    .sm\:space-y-0> :not([hidden])~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(0px * var(--tw-space-y-reverse));
    }
    .sm\:rounded-lg {
        border-radius: 0.5rem;
    }
    .sm\:px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }
    .sm\:pt-0 {
        padding-top: 0px;
    }
    .sm\:text-left {
        text-align: left;
    }
    .sm\:text-right {
        text-align: right;
    }
    .sm\:text-base {
        font-size: 1rem;
        line-height: 1.5rem;
    }
    .sm\:text-6xl {
        font-size: 3.75rem;
        line-height: 1;
    }
    .sm\:text-5xl {
        font-size: 3rem;
        line-height: 1;
    }
}
@media (min-width: 768px) {
    .md\:pointer-events-auto {
        pointer-events: auto;
    }
    .md\:static {
        position: static;
    }
    .md\:relative {
        position: relative;
    }
    .md\:inset-x-auto {
        left: auto;
        right: auto;
    }
    .md\:top-auto {
        top: auto;
    }
    .md\:left-auto {
        left: auto;
    }
    .md\:col-span-3 {
        grid-column: span 3 / span 3;
    }
    .md\:block {
        display: block;
    }
    .md\:hidden {
        display: none;
    }
    .md\:h-full {
        height: 100%;
    }
    .md\:max-h-\[none\] {
        max-height: none;
    }
    .md\:min-w-\[34rem\] {
        min-width: 34rem;
    }
    .md\:min-w-\[20rem\] {
        min-width: 20rem;
    }
    .md\:max-w-\[20rem\] {
        max-width: 20rem;
    }
    .md\:translate-x-0 {
        --tw-translate-x: 0px;
        transform: translate(var(--tw-translate-x),
        var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }
    .md\:columns-3 {
        -moz-columns: 3;
        columns: 3;
    }
    .md\:grid-cols-3 {
        grid-template-columns: repeat(3,
        minmax(0,
        1fr));
    }
    .md\:grid-cols-5 {
        grid-template-columns: repeat(5,
        minmax(0,
        1fr));
    }
    .md\:grid-cols-2 {
        grid-template-columns: repeat(2,
        minmax(0,
        1fr));
    }
    .md\:flex-row {
        flex-direction: row;
    }
    .md\:items-center {
        align-items: center;
    }
    .md\:gap-20 {
        gap: 5rem;
    }
    .md\:gap-10 {
        gap: 2.5rem;
    }
    .md\:space-x-10> :not([hidden])~ :not([hidden]) {
        --tw-space-x-reverse: 0;
        margin-right: calc(2.5rem * var(--tw-space-x-reverse));
        margin-left: calc(2.5rem * calc(1 - var(--tw-space-x-reverse)));
    }
    .md\:space-y-0> :not([hidden])~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(0px * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(0px * var(--tw-space-y-reverse));
    }
    .md\:rounded-none {
        border-radius: 0px;
    }
    .md\:border-t-0 {
        border-top-width: 0px;
    }
    .md\:border-l {
        border-left-width: 1px;
    }
    .md\:p-0 {
        padding: 0px;
    }
    .md\:px-0 {
        padding-left: 0px;
        padding-right: 0px;
    }
    .md\:opacity-100 {
        opacity: 1;
    }
    .md\:shadow-none {
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        box-shadow: var(--tw-ring-offset-shadow,
        0 0 #0000),
        var(--tw-ring-shadow,
        0 0 #0000),
        var(--tw-shadow);
    }
}
@media (min-width: 1024px) {
    .lg\:static {
        position: static;
    }
    .lg\:order-1 {
        order: 1;
    }
    .lg\:order-2 {
        order: 2;
    }
    .lg\:col-span-8 {
        grid-column: span 8 / span 8;
    }
    .lg\:col-span-4 {
        grid-column: span 4 / span 4;
    }
    .lg\:my-40 {
        margin-top: 10rem;
        margin-bottom: 10rem;
    }
    .lg\:mt-0 {
        margin-top: 0px;
    }
    .lg\:mb-0 {
        margin-bottom: 0px;
    }
    .lg\:hidden {
        display: none;
    }
    .lg\:min-h-screen {
        min-height: 100vh;
    }
    .lg\:w-\[400px\] {
        width: 400px;
    }
    .lg\:min-w-\[24rem\] {
        min-width: 24rem;
    }
    .lg\:max-w-\[24rem\] {
        max-width: 24rem;
    }
    .lg\:grid-cols-2 {
        grid-template-columns: repeat(2,
        minmax(0,
        1fr));
    }
    .lg\:grid-cols-3 {
        grid-template-columns: repeat(3,
        minmax(0,
        1fr));
    }
    .lg\:grid-cols-12 {
        grid-template-columns: repeat(12,
        minmax(0,
        1fr));
    }
    .lg\:grid-cols-1 {
        grid-template-columns: repeat(1,
        minmax(0,
        1fr));
    }
    .lg\:gap-20 {
        gap: 5rem;
    }
    .lg\:space-y-20> :not([hidden])~ :not([hidden]) {
        --tw-space-y-reverse: 0;
        margin-top: calc(5rem * calc(1 - var(--tw-space-y-reverse)));
        margin-bottom: calc(5rem * var(--tw-space-y-reverse));
    }
    .lg\:px-8 {
        padding-left: 2rem;
        padding-right: 2rem;
    }
    .lg\:px-14 {
        padding-left: 3.5rem;
        padding-right: 3.5rem;
    }
    .lg\:text-6xl {
        font-size: 3.75rem;
        line-height: 1;
    }
    .lg\:text-4xl {
        font-size: 2.25rem;
        line-height: 2.5rem;
    }
}
       </style>
    <livewire:styles />
</head>

<body>
    <div class="relative overflow-x-hidden min-h-screen flex flex-col justify-between">
        <div class="relative pt-24 md:pt-32">
        <x-nav/>
       {{ $slot }}
        </div>
<footer class="py-8 border-t border-gray-200">
  <div class="container px-4 md:px-10 mx-auto grid md:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-10 place-items-center items-start">
    <div class="space-y-2">
      <div class="map-section">
        <span class="uppercase tracking-widest text-gray-800 font-bold font-['poppins']">Map</span>
        <div class="aspect-w-16 aspect-h-9">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.529133368038!2d39.20946919689723!3d-6.193693555954718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185cda657cac76bb%3A0xea7c784828bdee5!2sNyerere%20Rd%2C%20Zanzibar%2C%20Tanzania!5e0!3m2!1sen!2sus!4v1677671146328!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>

    <div class="space-y-2">
      <div class="Contact-us">
                  <span class="uppercase tracking-widest text-gray-800 font-bold font-['poppins']">Contact Us</span>
                    <div class="flex flex-col space-y-2">
                        <a class="text-sm text-gray-600 hover:underline" href="#">+255719 280 165</a>
                        <a class="text-sm text-gray-600 hover:underline" href="#package">info@grandezzazanzibar.com</a>
                    </div>
      </div>
    </div>
    

                <div class="space-y-3">
                    <div class="uppercase dark:text-gray-50">Social media</div>
                    <div class="flex justify-start space-x-3">
                        <a rel="noopener noreferrer" href="https://www.facebook.com/grandezzazanzibar" title="Facebook" class="flex items-center p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 32 32" class="w-5 h-5 fill-current">
                                <path d="M32 16c0-8.839-7.167-16-16-16-8.839 0-16 7.161-16 16 0 7.984 5.849 14.604 13.5 15.803v-11.177h-4.063v-4.625h4.063v-3.527c0-4.009 2.385-6.223 6.041-6.223 1.751 0 3.584 0.312 3.584 0.312v3.937h-2.021c-1.984 0-2.604 1.235-2.604 2.5v3h4.437l-0.713 4.625h-3.724v11.177c7.645-1.199 13.5-7.819 13.5-15.803z"></path>
                            </svg>
                        </a>
                        <a rel="noopener noreferrer" href="https://twitter.com/grandezzatours" title="Twitter" class="flex items-center p-1">
                            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 fill-current">
                                <path d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z"></path>
                            </svg>
                        </a>
                        <a rel="noopener noreferrer" href="https://www.instagram.com/grandezzatours/?hl=en%2Fgrandezz" title="Instagram" class="flex items-center p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="w-5 h-5 fill-current">
                                <path d="M16 0c-4.349 0-4.891 0.021-6.593 0.093-1.709 0.084-2.865 0.349-3.885 0.745-1.052 0.412-1.948 0.959-2.833 1.849-0.891 0.885-1.443 1.781-1.849 2.833-0.396 1.020-0.661 2.176-0.745 3.885-0.077 1.703-0.093 2.244-0.093 6.593s0.021 4.891 0.093 6.593c0.084 1.704 0.349 2.865 0.745 3.885 0.412 1.052 0.959 1.948 1.849 2.833 0.885 0.891 1.781 1.443 2.833 1.849 1.020 0.391 2.181 0.661 3.885 0.745 1.703 0.077 2.244 0.093 6.593 0.093s4.891-0.021 6.593-0.093c1.704-0.084 2.865-0.355 3.885-0.745 1.052-0.412 1.948-0.959 2.833-1.849 0.891-0.885 1.443-1.776 1.849-2.833 0.391-1.020 0.661-2.181 0.745-3.885 0.077-1.703 0.093-2.244 0.093-6.593s-0.021-4.891-0.093-6.593c-0.084-1.704-0.355-2.871-0.745-3.885-0.412-1.052-0.959-1.948-1.849-2.833-0.885-0.891-1.776-1.443-2.833-1.849-1.020-0.396-2.181-0.661-3.885-0.745-1.703-0.077-2.244-0.093-6.593-0.093zM16 2.88c4.271 0 4.781 0.021 6.469 0.093 1.557 0.073 2.405 0.333 2.968 0.553 0.751 0.291 1.276 0.635 1.844 1.197 0.557 0.557 0.901 1.088 1.192 1.839 0.22 0.563 0.48 1.411 0.553 2.968 0.072 1.688 0.093 2.199 0.093 6.469s-0.021 4.781-0.099 6.469c-0.084 1.557-0.344 2.405-0.563 2.968-0.303 0.751-0.641 1.276-1.199 1.844-0.563 0.557-1.099 0.901-1.844 1.192-0.556 0.22-1.416 0.48-2.979 0.553-1.697 0.072-2.197 0.093-6.479 0.093s-4.781-0.021-6.48-0.099c-1.557-0.084-2.416-0.344-2.979-0.563-0.76-0.303-1.281-0.641-1.839-1.199-0.563-0.563-0.921-1.099-1.197-1.844-0.224-0.556-0.48-1.416-0.563-2.979-0.057-1.677-0.084-2.197-0.084-6.459 0-4.26 0.027-4.781 0.084-6.479 0.083-1.563 0.339-2.421 0.563-2.979 0.276-0.761 0.635-1.281 1.197-1.844 0.557-0.557 1.079-0.917 1.839-1.199 0.563-0.219 1.401-0.479 2.964-0.557 1.697-0.061 2.197-0.083 6.473-0.083zM16 7.787c-4.541 0-8.213 3.677-8.213 8.213 0 4.541 3.677 8.213 8.213 8.213 4.541 0 8.213-3.677 8.213-8.213 0-4.541-3.677-8.213-8.213-8.213zM16 21.333c-2.948 0-5.333-2.385-5.333-5.333s2.385-5.333 5.333-5.333c2.948 0 5.333 2.385 5.333 5.333s-2.385 5.333-5.333 5.333zM26.464 7.459c0 1.063-0.865 1.921-1.923 1.921-1.063 0-1.921-0.859-1.921-1.921 0-1.057 0.864-1.917 1.921-1.917s1.923 0.86 1.923 1.917z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="py-6 text-sm text-center dark:text-gray-400">©  {{ date('Y') }} Grandezza . All rights reserved.</div>
        </footer>
        <div class="elfsight-app-0de37a9f-4330-44ef-9ad9-4fa544e93df3"></div>
    </div>
    <livewire:scripts />
    {{ $js ?? '' }}
</body>

</html>