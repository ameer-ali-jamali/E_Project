<style>

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&family=Raleway:wght@400;600&display=swap);

@font-face {
    font-family: LifeHack;
    src: url(../../fonts/ots/lifehack-italic-bold.otf)
}

@font-face {
    font-family: BioRhyme;
    src: url(../../fonts/ots/BioRhyme-Regular.ttf)
}

@font-face {
    font-family: BioRhyme;
    src: url(../../fonts/ots/BioRhyme-Bold.ttf);
    font-weight: 700
}

@font-face {
    font-family: BioRhyme;
    src: url(../../fonts/ots/BioRhyme-Light.ttf);
    font-weight: 300
}

@font-face {
    font-family: BioRhyme;
    src: url(../../fonts/ots/BioRhyme-ExtraLight.ttf);
    font-weight: 200
}

@font-face {
    font-family: BioRhyme;
    src: url(../../fonts/ots/BioRhyme-ExtraBold.ttf);
    font-weight: 800
}

@media print,
screen and (min-width:40em) {

    .reveal,
    .reveal.large,
    .reveal.small,
    .reveal.tiny {
        right: auto;
        left: auto;
        margin: 0 auto
    }
}

/*! normalize.css v8.0.0 | MIT License | github.com/necolas/normalize.css */
html {
    line-height: 1.15;
    -webkit-text-size-adjust: 100%
}

body {
    margin: 0
}

h1 {
    font-size: 2em;
    margin: .67em 0
}

hr {
    box-sizing: content-box;
    height: 0;
    overflow: visible
}

pre {
    font-family: monospace, monospace;
    font-size: 1em
}

a {
    background-color: transparent
}

abbr[title] {
    border-bottom: none;
    text-decoration: underline;
    text-decoration: underline dotted
}

b,
strong {
    font-weight: bolder
}

code,
kbd,
samp {
    font-family: monospace, monospace;
    font-size: 1em
}

small {
    font-size: 80%
}

sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline
}

sub {
    bottom: -.25em
}

sup {
    top: -.5em
}

img {
    border-style: none
}

button,
input,
optgroup,
select,
textarea {
    font-family: inherit;
    font-size: 100%;
    line-height: 1.15;
    margin: 0
}

button,
input {
    overflow: visible
}

button,
select {
    text-transform: none
}

[type=button],
[type=reset],
[type=submit],
button {
    -webkit-appearance: button
}

[type=button]::-moz-focus-inner,
[type=reset]::-moz-focus-inner,
[type=submit]::-moz-focus-inner,
button::-moz-focus-inner {
    border-style: none;
    padding: 0
}

[type=button]:-moz-focusring,
[type=reset]:-moz-focusring,
[type=submit]:-moz-focusring,
button:-moz-focusring {
    outline: 1px dotted ButtonText
}

fieldset {
    padding: .35em .75em .625em
}

legend {
    box-sizing: border-box;
    color: inherit;
    display: table;
    max-width: 100%;
    padding: 0;
    white-space: normal
}

progress {
    vertical-align: baseline
}

textarea {
    overflow: auto
}

[type=checkbox],
[type=radio] {
    box-sizing: border-box;
    padding: 0
}

[type=number]::-webkit-inner-spin-button,
[type=number]::-webkit-outer-spin-button {
    height: auto
}

[type=search] {
    -webkit-appearance: textfield;
    outline-offset: -2px
}

[type=search]::-webkit-search-decoration {
    -webkit-appearance: none
}

::-webkit-file-upload-button {
    -webkit-appearance: button;
    font: inherit
}

details {
    display: block
}

summary {
    display: list-item
}

template {
    display: none
}

[hidden] {
    display: none
}

.foundation-mq {
    font-family: "small=0em&medium=40em&large=64em&xlarge=75em&xxlarge=90em"
}

html {
    box-sizing: border-box;
    font-size: 100%
}

*,
::after,
::before {
    box-sizing: inherit
}

body {
    margin: 0;
    padding: 0;
    background: #fefefe;
    font-family: BioRhyme, Arvo, serif;
    font-weight: 400;
    line-height: 1.5;
    color: #0a0a0a;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale
}

img {
    display: inline-block;
    vertical-align: middle;
    max-width: 100%;
    height: auto;
    -ms-interpolation-mode: bicubic
}

textarea {
    height: auto;
    min-height: 50px;
    border-radius: 0
}

select {
    box-sizing: border-box;
    width: 100%;
    border-radius: 0
}

.map_canvas embed,
.map_canvas img,
.map_canvas object,
.mqa-display embed,
.mqa-display img,
.mqa-display object {
    max-width: none !important
}

button {
    padding: 0;
    appearance: none;
    border: 0;
    border-radius: 0;
    background: 0 0;
    line-height: 1;
    cursor: auto
}

[data-whatinput=mouse] button {
    outline: 0
}

pre {
    overflow: auto
}

button,
input,
optgroup,
select,
textarea {
    font-family: inherit
}

.is-visible {
    display: block !important
}

.is-hidden {
    display: none !important
}

html.is-reveal-open {
    position: fixed;
    width: 100%;
    overflow-y: hidden
}

html.is-reveal-open.zf-has-scroll {
    overflow-y: scroll
}

html.is-reveal-open body {
    overflow-y: hidden
}

.reveal-overlay {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1005;
    display: none;
    background-color: rgba(10, 10, 10, .45);
    overflow-y: auto
}

.reveal {
    z-index: 1006;
    backface-visibility: hidden;
    display: none;
    padding: 1rem;
    border: 1px solid #cdcdcd;
    border-radius: 0;
    background-color: #fefefe;
    position: relative;
    top: 100px;
    margin-right: auto;
    margin-left: auto;
    overflow-y: auto
}

[data-whatinput=mouse] .reveal {
    outline: 0
}

@media print,
screen and (min-width:40em) {
    .reveal {
        min-height: 0
    }
}

.reveal .column {
    min-width: 0
}

.reveal>:last-child {
    margin-bottom: 0
}

@media print,
screen and (min-width:40em) {
    .reveal {
        width: 600px;
        max-width: 66.875rem
    }
}

.reveal.collapse {
    padding: 0
}

@media print,
screen and (min-width:40em) {
    .reveal.tiny {
        width: 30%;
        max-width: 66.875rem
    }
}

@media print,
screen and (min-width:40em) {
    .reveal.small {
        width: 50%;
        max-width: 66.875rem
    }
}

@media print,
screen and (min-width:40em) {
    .reveal.large {
        width: 90%;
        max-width: 66.875rem
    }
}

.reveal.full {
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    max-width: none;
    height: 100%;
    min-height: 100%;
    margin-left: 0;
    border: 0;
    border-radius: 0
}

@media print,
screen and (max-width:39.99875em) {
    .reveal {
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        max-width: none;
        height: 100%;
        min-height: 100%;
        margin-left: 0;
        border: 0;
        border-radius: 0
    }
}

.reveal.without-overlay {
    position: fixed
}

html {
    overflow: scroll;
    -webkit-overflow-scrolling: auto
}

html.wf-loading:not(.no-js) {
    opacity: 0
}

html body {
    overflow: scroll;
    -webkit-overflow-scrolling: auto;
    font-family: Raleway, sans-serif;
    margin: 0;
    padding: 0
}

main>header {
    display: flex;
    flex-flow: row wrap;
    padding-right: .625rem;
    padding-left: .625rem;
    max-width: 66.875rem;
    margin-left: auto;
    margin-right: auto;
    padding-top: 2.5rem
}

@media print,
screen and (min-width:40em) {
    main>header {
        padding-right: .9375rem;
        padding-left: .9375rem
    }
}

main>header h1 {
    flex: 0 0 auto;
    min-height: 0;
    min-width: 0;
    width: calc(100% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem
}

main>header+section {
    margin: 1.25rem auto
}

main>section {
    margin: 2.5rem auto
}

main>section .content {
    flex: 0 0 auto;
    min-height: 0;
    min-width: 0;
    width: calc(100% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem
}

main>section:not(.full) {
    display: flex;
    flex-flow: row wrap;
    padding-right: .625rem;
    padding-left: .625rem;
    max-width: 66.875rem;
    margin-left: auto;
    margin-right: auto
}

@media print,
screen and (min-width:40em) {
    main>section:not(.full) {
        padding-right: .9375rem;
        padding-left: .9375rem
    }
}

@media print,
screen and (max-width:39.99875em) {
    main>section:not(.full).cover {
        width: 100%;
        margin: 0;
        padding: 0
    }
}

main>section.full {
    background: #f6f7f7
}

.container {
    padding-right: .625rem;
    padding-left: .625rem;
    max-width: 66.875rem;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    flex-flow: row wrap
}

@media print,
screen and (min-width:40em) {
    .container {
        padding-right: .9375rem;
        padding-left: .9375rem
    }
}

.bookshelf-add-link,
.bookshelf-remove-link {
    font-size: 12px
}

.posts-navigation {
    flex: 0 0 auto;
    min-height: 0;
    min-width: 0;
    width: calc(100% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    display: flex;
    justify-content: center;
    padding: 1.5625rem 0
}

.posts-navigation .page-numbers {
    margin-right: 10px
}

a {
    opacity: 1;
    transition: opacity .35s ease-out
}

a:hover {
    opacity: .6
}

blockquote,
dd,
div,
dl,
dt,
form,
h1,
h2,
h3,
h4,
h5,
h6,
li,
ol,
p,
pre,
td,
th,
ul {
    margin: 0;
    padding: 0
}

p {
    margin-bottom: 1rem;
    font-size: inherit;
    line-height: 1.6;
    text-rendering: optimizeLegibility
}

em,
i {
    font-style: italic;
    line-height: inherit
}

b,
strong {
    font-weight: 700;
    line-height: inherit
}

small {
    font-size: 80%;
    line-height: inherit
}

.h1,
.h2,
.h3,
.h4,
.h5,
.h6,
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: Raleway, sans-serif;
    font-style: normal;
    font-weight: 400;
    color: inherit;
    text-rendering: optimizeLegibility
}

.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small {
    line-height: 0;
    color: #cdcdcd
}

.h1,
h1 {
    font-size: 1.5rem;
    line-height: 1.4;
    margin-top: 0;
    margin-bottom: .5rem
}

.h2,
h2 {
    font-size: 1.25rem;
    line-height: 1.4;
    margin-top: 0;
    margin-bottom: .5rem
}

.h3,
h3 {
    font-size: 1.1875rem;
    line-height: 1.4;
    margin-top: 0;
    margin-bottom: .5rem
}

.h4,
h4 {
    font-size: 1.125rem;
    line-height: 1.4;
    margin-top: 0;
    margin-bottom: .5rem
}

.h5,
h5 {
    font-size: 1.0625rem;
    line-height: 1.4;
    margin-top: 0;
    margin-bottom: .5rem
}

.h6,
h6 {
    font-size: 1rem;
    line-height: 1.4;
    margin-top: 0;
    margin-bottom: .5rem
}

@media print,
screen and (min-width:40em) {

    .h1,
    h1 {
        font-size: 3rem
    }

    .h2,
    h2 {
        font-size: 2.5rem
    }

    .h3,
    h3 {
        font-size: 1.9375rem
    }

    .h4,
    h4 {
        font-size: 1.5625rem
    }

    .h5,
    h5 {
        font-size: 1.25rem
    }

    .h6,
    h6 {
        font-size: 1rem
    }
}

a {
    line-height: inherit;
    color: #05bde5;
    text-decoration: none;
    cursor: pointer
}

a:focus,
a:hover {
    color: #04a3c5
}

a img {
    border: 0
}

hr {
    clear: both;
    max-width: 66.875rem;
    height: 0;
    margin: 1.25rem auto;
    border-top: 0;
    border-right: 0;
    border-bottom: 1px solid #cdcdcd;
    border-left: 0
}

dl,
ol,
ul {
    margin-bottom: 1rem;
    list-style-position: outside;
    line-height: 1.6
}

li {
    font-size: inherit
}

ul {
    margin-left: 1.25rem;
    list-style-type: disc
}

ol {
    margin-left: 1.25rem
}

ol ol,
ol ul,
ul ol,
ul ul {
    margin-left: 1.25rem;
    margin-bottom: 0
}

dl {
    margin-bottom: 1rem
}

dl dt {
    margin-bottom: .3rem;
    font-weight: 700
}

blockquote {
    margin: 0 0 1rem;
    padding: .5625rem 1.25rem 0 1.1875rem;
    border-left: 1px solid #cdcdcd
}

blockquote,
blockquote p {
    line-height: 1.6;
    color: #8a8a8a
}

abbr,
abbr[title] {
    border-bottom: 1px dotted #0a0a0a;
    cursor: help;
    text-decoration: none
}

figure {
    margin: 0
}

kbd {
    margin: 0;
    padding: .125rem .25rem 0;
    background-color: #e6e6e6;
    font-family: Consolas, "Liberation Mono", Courier, monospace;
    color: #0a0a0a
}

.subheader {
    margin-top: .2rem;
    margin-bottom: .5rem;
    font-weight: 400;
    line-height: 1.4;
    color: #8a8a8a
}

.lead {
    font-size: 125%;
    line-height: 1.6
}

.stat {
    font-size: 2.5rem;
    line-height: 1
}

p+.stat {
    margin-top: -1rem
}

ol.no-bullet,
ul.no-bullet {
    margin-left: 0;
    list-style: none
}

.cite-block,
cite {
    display: block;
    color: #8a8a8a;
    font-size: .8125rem
}

.cite-block:before,
cite:before {
    content: "— "
}

.code-inline,
code {
    border: 1px solid #cdcdcd;
    background-color: #e6e6e6;
    font-family: Consolas, "Liberation Mono", Courier, monospace;
    font-weight: 400;
    color: #0a0a0a;
    display: inline;
    max-width: 100%;
    word-wrap: break-word;
    padding: .125rem .3125rem .0625rem
}

.code-block {
    border: 1px solid #cdcdcd;
    background-color: #e6e6e6;
    font-family: Consolas, "Liberation Mono", Courier, monospace;
    font-weight: 400;
    color: #0a0a0a;
    display: block;
    overflow: auto;
    white-space: pre;
    padding: 1rem;
    margin-bottom: 1.5rem
}

.text-left {
    text-align: left
}

.text-right {
    text-align: right
}

.text-center {
    text-align: center
}

.text-justify {
    text-align: justify
}

@media print,
screen and (min-width:40em) {
    .medium-text-left {
        text-align: left
    }

    .medium-text-right {
        text-align: right
    }

    .medium-text-center {
        text-align: center
    }

    .medium-text-justify {
        text-align: justify
    }
}

@media print,
screen and (min-width:64em) {
    .large-text-left {
        text-align: left
    }

    .large-text-right {
        text-align: right
    }

    .large-text-center {
        text-align: center
    }

    .large-text-justify {
        text-align: justify
    }
}

.show-for-print {
    display: none !important
}

@media print {
    * {
        background: 0 0 !important;
        color: #000 !important;
        color-adjust: economy;
        box-shadow: none !important;
        text-shadow: none !important
    }

    .show-for-print {
        display: block !important
    }

    .hide-for-print {
        display: none !important
    }

    table.show-for-print {
        display: table !important
    }

    thead.show-for-print {
        display: table-header-group !important
    }

    tbody.show-for-print {
        display: table-row-group !important
    }

    tr.show-for-print {
        display: table-row !important
    }

    td.show-for-print {
        display: table-cell !important
    }

    th.show-for-print {
        display: table-cell !important
    }

    a,
    a:visited {
        text-decoration: underline
    }

    a[href]:after {
        content: " (" attr(href) ")"
    }

    .ir a:after,
    a[href^='#']:after,
    a[href^='javascript:']:after {
        content: ''
    }

    abbr[title]:after {
        content: " (" attr(title) ")"
    }

    blockquote,
    pre {
        border: 1px solid #8a8a8a;
        page-break-inside: avoid
    }

    thead {
        display: table-header-group
    }

    img,
    tr {
        page-break-inside: avoid
    }

    img {
        max-width: 100% !important
    }

    @page {
        margin: .5cm
    }

    h2,
    h3,
    p {
        orphans: 3;
        widows: 3
    }

    h2,
    h3 {
        page-break-after: avoid
    }

    .print-break-inside {
        page-break-inside: auto
    }
}

[type=color],
[type=date],
[type=datetime-local],
[type=datetime],
[type=email],
[type=month],
[type=number],
[type=password],
[type=search],
[type=tel],
[type=text],
[type=time],
[type=url],
[type=week],
textarea {
    display: block;
    box-sizing: border-box;
    width: 100%;
    height: 2.4375rem;
    margin: 0 0 1rem;
    padding: .5rem;
    border: 1px solid #cdcdcd;
    border-radius: 0;
    background-color: #fefefe;
    box-shadow: inset 0 1px 2px rgba(10, 10, 10, .1);
    font-family: inherit;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #0a0a0a;
    transition: box-shadow .5s, border-color .25s ease-in-out;
    appearance: none
}

[type=color]:focus,
[type=date]:focus,
[type=datetime-local]:focus,
[type=datetime]:focus,
[type=email]:focus,
[type=month]:focus,
[type=number]:focus,
[type=password]:focus,
[type=search]:focus,
[type=tel]:focus,
[type=text]:focus,
[type=time]:focus,
[type=url]:focus,
[type=week]:focus,
textarea:focus {
    outline: 0;
    border: 1px solid #8a8a8a;
    background-color: #fefefe;
    box-shadow: 0 0 5px #cdcdcd;
    transition: box-shadow .5s, border-color .25s ease-in-out
}

textarea {
    max-width: 100%
}

textarea[rows] {
    height: auto
}

input:disabled,
input[readonly],
textarea:disabled,
textarea[readonly] {
    background-color: #e6e6e6;
    cursor: not-allowed
}

[type=button],
[type=submit] {
    appearance: none;
    border-radius: 0
}

input[type=search] {
    box-sizing: border-box
}

::placeholder {
    color: #cdcdcd
}

[type=checkbox],
[type=file],
[type=radio] {
    margin: 0 0 1rem
}

[type=checkbox]+label,
[type=radio]+label {
    display: inline-block;
    vertical-align: baseline;
    margin-left: .5rem;
    margin-right: 1rem;
    margin-bottom: 0
}

[type=checkbox]+label[for],
[type=radio]+label[for] {
    cursor: pointer
}

label>[type=checkbox],
label>[type=radio] {
    margin-right: .5rem
}

[type=file] {
    width: 100%
}

label {
    display: block;
    margin: 0;
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.8;
    color: #0a0a0a
}

label.middle {
    margin: 0 0 1rem;
    padding: .5625rem 0
}

.help-text {
    margin-top: -.5rem;
    font-size: .8125rem;
    font-style: italic;
    color: #0a0a0a
}

.input-group {
    display: flex;
    width: 100%;
    margin-bottom: 1rem;
    align-items: stretch
}

.input-group>:first-child,
.input-group>:first-child.input-group-button>* {
    border-radius: 0
}

.input-group>:last-child,
.input-group>:last-child.input-group-button>* {
    border-radius: 0
}

.input-group-button,
.input-group-button a,
.input-group-button button,
.input-group-button input,
.input-group-button label,
.input-group-field,
.input-group-label {
    margin: 0;
    white-space: nowrap
}

.input-group-label {
    padding: 0 1rem;
    border: 1px solid #cdcdcd;
    background: #e6e6e6;
    color: #0a0a0a;
    text-align: center;
    white-space: nowrap;
    display: flex;
    flex: 0 0 auto;
    align-items: center
}

.input-group-label:first-child {
    border-right: 0
}

.input-group-label:last-child {
    border-left: 0
}

.input-group-field {
    border-radius: 0;
    flex: 1 1 0px;
    min-width: 0
}

.input-group-button {
    padding-top: 0;
    padding-bottom: 0;
    text-align: center;
    display: flex;
    flex: 0 0 auto
}

.input-group-button a,
.input-group-button button,
.input-group-button input,
.input-group-button label {
    align-self: stretch;
    height: auto;
    padding-top: 0;
    padding-bottom: 0;
    font-size: 1rem
}

fieldset {
    margin: 0;
    padding: 0;
    border: 0
}

legend {
    max-width: 100%;
    margin-bottom: .5rem
}

.fieldset {
    margin: 1.125rem 0;
    padding: 1.25rem;
    border: 1px solid #cdcdcd
}

.fieldset legend {
    margin: 0;
    margin-left: -.1875rem;
    padding: 0 .1875rem
}

select {
    height: 2.4375rem;
    margin: 0 0 1rem;
    padding: .5rem;
    appearance: none;
    border: 1px solid #cdcdcd;
    border-radius: 0;
    background-color: #fefefe;
    font-family: inherit;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #0a0a0a;
    background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' version='1.1' width='32' height='24' viewBox='0 0 32 24'><polygon points='0,0 32,0 16,24' style='fill: rgb%28138, 138, 138%29'></polygon></svg>");
    background-origin: content-box;
    background-position: right -1rem center;
    background-repeat: no-repeat;
    background-size: 9px 6px;
    padding-right: 1.5rem;
    transition: box-shadow .5s, border-color .25s ease-in-out
}

@media screen and (min-width:0\0) {
    select {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAYCAYAAACbU/80AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAIpJREFUeNrEkckNgDAMBBfRkEt0ObRBBdsGXUDgmQfK4XhH2m8czQAAy27R3tsw4Qfe2x8uOO6oYLb6GlOor3GF+swURAOmUJ+RwtEJs9WvTGEYxBXqI1MQAZhCfUQKRzDMVj+TwrAIV6jvSUEkYAr1LSkcyTBb/V+KYfX7xAeusq3sLDtGH3kEGACPWIflNZfhRQAAAABJRU5ErkJggg==)
    }
}

select:focus {
    outline: 0;
    border: 1px solid #8a8a8a;
    background-color: #fefefe;
    box-shadow: 0 0 5px #cdcdcd;
    transition: box-shadow .5s, border-color .25s ease-in-out
}

select:disabled {
    background-color: #e6e6e6;
    cursor: not-allowed
}

select::-ms-expand {
    display: none
}

select[multiple] {
    height: auto;
    background-image: none
}

select:not([multiple]) {
    padding-top: 0;
    padding-bottom: 0
}

.is-invalid-input:not(:focus) {
    border-color: #cc4b37;
    background-color: #f9ecea
}

.is-invalid-input:not(:focus)::placeholder {
    color: #cc4b37
}

.is-invalid-label {
    color: #cc4b37
}

.form-error {
    display: none;
    margin-top: -.5rem;
    margin-bottom: 1rem;
    font-size: .75rem;
    font-weight: 700;
    color: #cc4b37
}

.form-error.is-visible {
    display: block
}

.button {
    display: inline-block;
    vertical-align: middle;
    margin: 0 0 1rem 0;
    padding: .85em 1em;
    border: 1px solid transparent;
    border-radius: 0;
    transition: background-color .25s ease-out, color .25s ease-out;
    font-family: inherit;
    font-size: .9rem;
    -webkit-appearance: none;
    line-height: 1;
    text-align: center;
    cursor: pointer
}

[data-whatinput=mouse] .button {
    outline: 0
}

.button.tiny {
    font-size: .6rem
}

.button.small {
    font-size: .75rem
}

.button.large {
    font-size: 1.25rem
}

.button.expanded {
    display: block;
    width: 100%;
    margin-right: 0;
    margin-left: 0
}

.button,
.button.disabled,
.button.disabled:focus,
.button.disabled:hover,
.button[disabled],
.button[disabled]:focus,
.button[disabled]:hover {
    background-color: #1779ba;
    color: #fefefe
}

.button:focus,
.button:hover {
    background-color: #14679e;
    color: #fefefe
}

.button.primary,
.button.primary.disabled,
.button.primary.disabled:focus,
.button.primary.disabled:hover,
.button.primary[disabled],
.button.primary[disabled]:focus,
.button.primary[disabled]:hover {
    background-color: #1779ba;
    color: #fefefe
}

.button.primary:focus,
.button.primary:hover {
    background-color: #126195;
    color: #fefefe
}

.button.secondary,
.button.secondary.disabled,
.button.secondary.disabled:focus,
.button.secondary.disabled:hover,
.button.secondary[disabled],
.button.secondary[disabled]:focus,
.button.secondary[disabled]:hover {
    background-color: #767676;
    color: #fefefe
}

.button.secondary:focus,
.button.secondary:hover {
    background-color: #5e5e5e;
    color: #fefefe
}

.button.success,
.button.success.disabled,
.button.success.disabled:focus,
.button.success.disabled:hover,
.button.success[disabled],
.button.success[disabled]:focus,
.button.success[disabled]:hover {
    background-color: #3adb76;
    color: #0a0a0a
}

.button.success:focus,
.button.success:hover {
    background-color: #22bb5b;
    color: #0a0a0a
}

.button.warning,
.button.warning.disabled,
.button.warning.disabled:focus,
.button.warning.disabled:hover,
.button.warning[disabled],
.button.warning[disabled]:focus,
.button.warning[disabled]:hover {
    background-color: #ffae00;
    color: #0a0a0a
}

.button.warning:focus,
.button.warning:hover {
    background-color: #cc8b00;
    color: #0a0a0a
}

.button.alert,
.button.alert.disabled,
.button.alert.disabled:focus,
.button.alert.disabled:hover,
.button.alert[disabled],
.button.alert[disabled]:focus,
.button.alert[disabled]:hover {
    background-color: #cc4b37;
    color: #fefefe
}

.button.alert:focus,
.button.alert:hover {
    background-color: #a53b2a;
    color: #fefefe
}

.button.hollow,
.button.hollow.disabled,
.button.hollow.disabled:focus,
.button.hollow.disabled:hover,
.button.hollow:focus,
.button.hollow:hover,
.button.hollow[disabled],
.button.hollow[disabled]:focus,
.button.hollow[disabled]:hover {
    background-color: transparent
}

.button.hollow,
.button.hollow.disabled,
.button.hollow.disabled:focus,
.button.hollow.disabled:hover,
.button.hollow[disabled],
.button.hollow[disabled]:focus,
.button.hollow[disabled]:hover {
    border: 1px solid #1779ba;
    color: #1779ba
}

.button.hollow:focus,
.button.hollow:hover {
    border-color: #0c3d5d;
    color: #0c3d5d
}

.button.hollow.primary,
.button.hollow.primary.disabled,
.button.hollow.primary.disabled:focus,
.button.hollow.primary.disabled:hover,
.button.hollow.primary[disabled],
.button.hollow.primary[disabled]:focus,
.button.hollow.primary[disabled]:hover {
    border: 1px solid #1779ba;
    color: #1779ba
}

.button.hollow.primary:focus,
.button.hollow.primary:hover {
    border-color: #0c3d5d;
    color: #0c3d5d
}

.button.hollow.secondary,
.button.hollow.secondary.disabled,
.button.hollow.secondary.disabled:focus,
.button.hollow.secondary.disabled:hover,
.button.hollow.secondary[disabled],
.button.hollow.secondary[disabled]:focus,
.button.hollow.secondary[disabled]:hover {
    border: 1px solid #767676;
    color: #767676
}

.button.hollow.secondary:focus,
.button.hollow.secondary:hover {
    border-color: #3b3b3b;
    color: #3b3b3b
}

.button.hollow.success,
.button.hollow.success.disabled,
.button.hollow.success.disabled:focus,
.button.hollow.success.disabled:hover,
.button.hollow.success[disabled],
.button.hollow.success[disabled]:focus,
.button.hollow.success[disabled]:hover {
    border: 1px solid #3adb76;
    color: #3adb76
}

.button.hollow.success:focus,
.button.hollow.success:hover {
    border-color: #157539;
    color: #157539
}

.button.hollow.warning,
.button.hollow.warning.disabled,
.button.hollow.warning.disabled:focus,
.button.hollow.warning.disabled:hover,
.button.hollow.warning[disabled],
.button.hollow.warning[disabled]:focus,
.button.hollow.warning[disabled]:hover {
    border: 1px solid #ffae00;
    color: #ffae00
}

.button.hollow.warning:focus,
.button.hollow.warning:hover {
    border-color: #805700;
    color: #805700
}

.button.hollow.alert,
.button.hollow.alert.disabled,
.button.hollow.alert.disabled:focus,
.button.hollow.alert.disabled:hover,
.button.hollow.alert[disabled],
.button.hollow.alert[disabled]:focus,
.button.hollow.alert[disabled]:hover {
    border: 1px solid #cc4b37;
    color: #cc4b37
}

.button.hollow.alert:focus,
.button.hollow.alert:hover {
    border-color: #67251a;
    color: #67251a
}

.button.clear,
.button.clear.disabled,
.button.clear.disabled:focus,
.button.clear.disabled:hover,
.button.clear:focus,
.button.clear:hover,
.button.clear[disabled],
.button.clear[disabled]:focus,
.button.clear[disabled]:hover {
    border-color: transparent;
    background-color: transparent
}

.button.clear,
.button.clear.disabled,
.button.clear.disabled:focus,
.button.clear.disabled:hover,
.button.clear[disabled],
.button.clear[disabled]:focus,
.button.clear[disabled]:hover {
    color: #1779ba
}

.button.clear:focus,
.button.clear:hover {
    color: #0c3d5d
}

.button.clear.primary,
.button.clear.primary.disabled,
.button.clear.primary.disabled:focus,
.button.clear.primary.disabled:hover,
.button.clear.primary[disabled],
.button.clear.primary[disabled]:focus,
.button.clear.primary[disabled]:hover {
    color: #1779ba
}

.button.clear.primary:focus,
.button.clear.primary:hover {
    color: #0c3d5d
}

.button.clear.secondary,
.button.clear.secondary.disabled,
.button.clear.secondary.disabled:focus,
.button.clear.secondary.disabled:hover,
.button.clear.secondary[disabled],
.button.clear.secondary[disabled]:focus,
.button.clear.secondary[disabled]:hover {
    color: #767676
}

.button.clear.secondary:focus,
.button.clear.secondary:hover {
    color: #3b3b3b
}

.button.clear.success,
.button.clear.success.disabled,
.button.clear.success.disabled:focus,
.button.clear.success.disabled:hover,
.button.clear.success[disabled],
.button.clear.success[disabled]:focus,
.button.clear.success[disabled]:hover {
    color: #3adb76
}

.button.clear.success:focus,
.button.clear.success:hover {
    color: #157539
}

.button.clear.warning,
.button.clear.warning.disabled,
.button.clear.warning.disabled:focus,
.button.clear.warning.disabled:hover,
.button.clear.warning[disabled],
.button.clear.warning[disabled]:focus,
.button.clear.warning[disabled]:hover {
    color: #ffae00
}

.button.clear.warning:focus,
.button.clear.warning:hover {
    color: #805700
}

.button.clear.alert,
.button.clear.alert.disabled,
.button.clear.alert.disabled:focus,
.button.clear.alert.disabled:hover,
.button.clear.alert[disabled],
.button.clear.alert[disabled]:focus,
.button.clear.alert[disabled]:hover {
    color: #cc4b37
}

.button.clear.alert:focus,
.button.clear.alert:hover {
    color: #67251a
}

.button.disabled,
.button[disabled] {
    opacity: .25;
    cursor: not-allowed
}

.button.dropdown::after {
    display: block;
    width: 0;
    height: 0;
    border: inset .4em;
    content: '';
    border-bottom-width: 0;
    border-top-style: solid;
    border-color: #fefefe transparent transparent;
    position: relative;
    top: .4em;
    display: inline-block;
    float: right;
    margin-left: 1em
}

.button.dropdown.clear::after,
.button.dropdown.hollow::after {
    border-top-color: #1779ba
}

.button.dropdown.clear.primary::after,
.button.dropdown.hollow.primary::after {
    border-top-color: #1779ba
}

.button.dropdown.clear.secondary::after,
.button.dropdown.hollow.secondary::after {
    border-top-color: #767676
}

.button.dropdown.clear.success::after,
.button.dropdown.hollow.success::after {
    border-top-color: #3adb76
}

.button.dropdown.clear.warning::after,
.button.dropdown.hollow.warning::after {
    border-top-color: #ffae00
}

.button.dropdown.clear.alert::after,
.button.dropdown.hollow.alert::after {
    border-top-color: #cc4b37
}

.button.arrow-only::after {
    top: -.1em;
    float: none;
    margin-left: 0
}

a.button:focus,
a.button:hover {
    text-decoration: none
}

.flex-video,
.responsive-embed {
    position: relative;
    height: 0;
    margin-bottom: 1rem;
    padding-bottom: 75%;
    overflow: hidden
}

.flex-video embed,
.flex-video iframe,
.flex-video object,
.flex-video video,
.responsive-embed embed,
.responsive-embed iframe,
.responsive-embed object,
.responsive-embed video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%
}

.flex-video.widescreen,
.responsive-embed.widescreen {
    padding-bottom: 56.25%
}

table {
    border-collapse: collapse;
    width: 100%;
    margin-bottom: 1rem;
    border-radius: 0
}

tbody,
tfoot,
thead {
    border: 1px solid #f1f1f1;
    background-color: #fefefe
}

caption {
    padding: .5rem .625rem .625rem;
    font-weight: 700
}

thead {
    background: #f8f8f8;
    color: #0a0a0a
}

tfoot {
    background: #f1f1f1;
    color: #0a0a0a
}

tfoot tr,
thead tr {
    background: 0 0
}

tfoot td,
tfoot th,
thead td,
thead th {
    padding: .5rem .625rem .625rem;
    font-weight: 700;
    text-align: left
}

tbody td,
tbody th {
    padding: .5rem .625rem .625rem
}

tbody tr:nth-child(even) {
    border-bottom: 0;
    background-color: #f1f1f1
}

table.unstriped tbody {
    background-color: #fefefe
}

table.unstriped tbody tr {
    border-bottom: 0;
    border-bottom: 1px solid #f1f1f1;
    background-color: #fefefe
}

@media print,
screen and (max-width:63.99875em) {
    table.stack thead {
        display: none
    }

    table.stack tfoot {
        display: none
    }

    table.stack td,
    table.stack th,
    table.stack tr {
        display: block
    }

    table.stack td {
        border-top: 0
    }
}

table.scroll {
    display: block;
    width: 100%;
    overflow-x: auto
}

table.hover thead tr:hover {
    background-color: #f3f3f3
}

table.hover tfoot tr:hover {
    background-color: #ececec
}

table.hover tbody tr:hover {
    background-color: #f9f9f9
}

table.hover:not(.unstriped) tr:nth-of-type(even):hover {
    background-color: #ececec
}

.table-scroll {
    overflow-x: auto
}

.has-tip {
    position: relative;
    display: inline-block;
    border-bottom: dotted 1px #8a8a8a;
    font-weight: 700;
    cursor: help
}

.tooltip {
    position: absolute;
    top: calc(100% + .6495rem);
    z-index: 1200;
    max-width: 10rem;
    padding: .75rem;
    border-radius: 0;
    background-color: #0a0a0a;
    font-size: 80%;
    color: #fefefe
}

.tooltip::before {
    position: absolute
}

.tooltip.bottom::before {
    display: block;
    width: 0;
    height: 0;
    border: inset .75rem;
    content: '';
    border-top-width: 0;
    border-bottom-style: solid;
    border-color: transparent transparent #0a0a0a;
    bottom: 100%
}

.tooltip.bottom.align-center::before {
    left: 50%;
    transform: translateX(-50%)
}

.tooltip.top::before {
    display: block;
    width: 0;
    height: 0;
    border: inset .75rem;
    content: '';
    border-bottom-width: 0;
    border-top-style: solid;
    border-color: #0a0a0a transparent transparent;
    top: 100%;
    bottom: auto
}

.tooltip.top.align-center::before {
    left: 50%;
    transform: translateX(-50%)
}

.tooltip.left::before {
    display: block;
    width: 0;
    height: 0;
    border: inset .75rem;
    content: '';
    border-right-width: 0;
    border-left-style: solid;
    border-color: transparent transparent transparent #0a0a0a;
    left: 100%
}

.tooltip.left.align-center::before {
    bottom: auto;
    top: 50%;
    transform: translateY(-50%)
}

.tooltip.right::before {
    display: block;
    width: 0;
    height: 0;
    border: inset .75rem;
    content: '';
    border-left-width: 0;
    border-right-style: solid;
    border-color: transparent #0a0a0a transparent transparent;
    right: 100%;
    left: auto
}

.tooltip.right.align-center::before {
    bottom: auto;
    top: 50%;
    transform: translateY(-50%)
}

.tooltip.align-top::before {
    bottom: auto;
    top: 10%
}

.tooltip.align-bottom::before {
    bottom: 10%;
    top: auto
}

.tooltip.align-left::before {
    left: 10%;
    right: auto
}

.tooltip.align-right::before {
    left: auto;
    right: 10%
}

.dropdown.menu>li.opens-left>.is-dropdown-submenu {
    top: 100%;
    right: 0;
    left: auto
}

.dropdown.menu>li.opens-right>.is-dropdown-submenu {
    top: 100%;
    right: auto;
    left: 0
}

.dropdown.menu>li.is-dropdown-submenu-parent>a {
    position: relative;
    padding-right: 1.5rem
}

.dropdown.menu>li.is-dropdown-submenu-parent>a::after {
    display: block;
    width: 0;
    height: 0;
    border: inset 6px;
    content: '';
    border-bottom-width: 0;
    border-top-style: solid;
    border-color: #05bde5 transparent transparent;
    right: 5px;
    left: auto;
    margin-top: -3px
}

[data-whatinput=mouse] .dropdown.menu a {
    outline: 0
}

.dropdown.menu>li>a {
    background: #fefefe;
    padding: .7rem 1rem
}

.dropdown.menu>li.is-active>a {
    background: 0 0;
    color: #1779ba
}

.no-js .dropdown.menu ul {
    display: none
}

.dropdown.menu .nested.is-dropdown-submenu {
    margin-right: 0;
    margin-left: 0
}

.dropdown.menu.vertical>li .is-dropdown-submenu {
    top: 0
}

.dropdown.menu.vertical>li.opens-left>.is-dropdown-submenu {
    top: 0;
    right: 100%;
    left: auto
}

.dropdown.menu.vertical>li.opens-right>.is-dropdown-submenu {
    right: auto;
    left: 100%
}

.dropdown.menu.vertical>li>a::after {
    right: 14px
}

.dropdown.menu.vertical>li.opens-left>a::after {
    display: block;
    width: 0;
    height: 0;
    border: inset 6px;
    content: '';
    border-left-width: 0;
    border-right-style: solid;
    border-color: transparent #05bde5 transparent transparent;
    right: auto;
    left: 5px
}

.dropdown.menu.vertical>li.opens-right>a::after {
    display: block;
    width: 0;
    height: 0;
    border: inset 6px;
    content: '';
    border-right-width: 0;
    border-left-style: solid;
    border-color: transparent transparent transparent #05bde5
}

@media print,
screen and (min-width:40em) {
    .dropdown.menu.medium-horizontal>li.opens-left>.is-dropdown-submenu {
        top: 100%;
        right: 0;
        left: auto
    }

    .dropdown.menu.medium-horizontal>li.opens-right>.is-dropdown-submenu {
        top: 100%;
        right: auto;
        left: 0
    }

    .dropdown.menu.medium-horizontal>li.is-dropdown-submenu-parent>a {
        position: relative;
        padding-right: 1.5rem
    }

    .dropdown.menu.medium-horizontal>li.is-dropdown-submenu-parent>a::after {
        display: block;
        width: 0;
        height: 0;
        border: inset 6px;
        content: '';
        border-bottom-width: 0;
        border-top-style: solid;
        border-color: #05bde5 transparent transparent;
        right: 5px;
        left: auto;
        margin-top: -3px
    }

    .dropdown.menu.medium-vertical>li .is-dropdown-submenu {
        top: 0
    }

    .dropdown.menu.medium-vertical>li.opens-left>.is-dropdown-submenu {
        top: 0;
        right: 100%;
        left: auto
    }

    .dropdown.menu.medium-vertical>li.opens-right>.is-dropdown-submenu {
        right: auto;
        left: 100%
    }

    .dropdown.menu.medium-vertical>li>a::after {
        right: 14px
    }

    .dropdown.menu.medium-vertical>li.opens-left>a::after {
        display: block;
        width: 0;
        height: 0;
        border: inset 6px;
        content: '';
        border-left-width: 0;
        border-right-style: solid;
        border-color: transparent #05bde5 transparent transparent;
        right: auto;
        left: 5px
    }

    .dropdown.menu.medium-vertical>li.opens-right>a::after {
        display: block;
        width: 0;
        height: 0;
        border: inset 6px;
        content: '';
        border-right-width: 0;
        border-left-style: solid;
        border-color: transparent transparent transparent #05bde5
    }
}

@media print,
screen and (min-width:64em) {
    .dropdown.menu.large-horizontal>li.opens-left>.is-dropdown-submenu {
        top: 100%;
        right: 0;
        left: auto
    }

    .dropdown.menu.large-horizontal>li.opens-right>.is-dropdown-submenu {
        top: 100%;
        right: auto;
        left: 0
    }

    .dropdown.menu.large-horizontal>li.is-dropdown-submenu-parent>a {
        position: relative;
        padding-right: 1.5rem
    }

    .dropdown.menu.large-horizontal>li.is-dropdown-submenu-parent>a::after {
        display: block;
        width: 0;
        height: 0;
        border: inset 6px;
        content: '';
        border-bottom-width: 0;
        border-top-style: solid;
        border-color: #05bde5 transparent transparent;
        right: 5px;
        left: auto;
        margin-top: -3px
    }

    .dropdown.menu.large-vertical>li .is-dropdown-submenu {
        top: 0
    }

    .dropdown.menu.large-vertical>li.opens-left>.is-dropdown-submenu {
        top: 0;
        right: 100%;
        left: auto
    }

    .dropdown.menu.large-vertical>li.opens-right>.is-dropdown-submenu {
        right: auto;
        left: 100%
    }

    .dropdown.menu.large-vertical>li>a::after {
        right: 14px
    }

    .dropdown.menu.large-vertical>li.opens-left>a::after {
        display: block;
        width: 0;
        height: 0;
        border: inset 6px;
        content: '';
        border-left-width: 0;
        border-right-style: solid;
        border-color: transparent #05bde5 transparent transparent;
        right: auto;
        left: 5px
    }

    .dropdown.menu.large-vertical>li.opens-right>a::after {
        display: block;
        width: 0;
        height: 0;
        border: inset 6px;
        content: '';
        border-right-width: 0;
        border-left-style: solid;
        border-color: transparent transparent transparent #05bde5
    }
}

.dropdown.menu.align-right .is-dropdown-submenu.first-sub {
    top: 100%;
    right: 0;
    left: auto
}

.is-dropdown-menu.vertical {
    width: 100px
}

.is-dropdown-menu.vertical.align-right {
    float: right
}

.is-dropdown-submenu-parent {
    position: relative
}

.is-dropdown-submenu-parent a::after {
    position: absolute;
    top: 50%;
    right: 5px;
    left: auto;
    margin-top: -6px
}

.is-dropdown-submenu-parent.opens-inner>.is-dropdown-submenu {
    top: 100%;
    left: auto
}

.is-dropdown-submenu-parent.opens-left>.is-dropdown-submenu {
    right: 100%;
    left: auto
}

.is-dropdown-submenu-parent.opens-right>.is-dropdown-submenu {
    right: auto;
    left: 100%
}

.is-dropdown-submenu {
    position: absolute;
    top: 0;
    left: 100%;
    z-index: 1;
    display: none;
    min-width: 200px;
    border: 1px solid #cdcdcd;
    background: #fefefe
}

.dropdown .is-dropdown-submenu a {
    padding: .7rem 1rem
}

.is-dropdown-submenu .is-dropdown-submenu-parent>a::after {
    right: 14px
}

.is-dropdown-submenu .is-dropdown-submenu-parent.opens-left>a::after {
    display: block;
    width: 0;
    height: 0;
    border: inset 6px;
    content: '';
    border-left-width: 0;
    border-right-style: solid;
    border-color: transparent #05bde5 transparent transparent;
    right: auto;
    left: 5px
}

.is-dropdown-submenu .is-dropdown-submenu-parent.opens-right>a::after {
    display: block;
    width: 0;
    height: 0;
    border: inset 6px;
    content: '';
    border-right-width: 0;
    border-left-style: solid;
    border-color: transparent transparent transparent #05bde5
}

.is-dropdown-submenu .is-dropdown-submenu {
    margin-top: -1px
}

.is-dropdown-submenu>li {
    width: 100%
}

.is-dropdown-submenu.js-dropdown-active {
    display: block
}

.alignnone {
    margin: .625rem 0
}

.aligncenter,
div.aligncenter {
    display: block;
    margin: .625rem auto
}

.alignright {
    float: right;
    margin: .375rem 0 1.25rem 1.25rem
}

.alignleft {
    float: left;
    margin: .375rem 1.25rem 1.25rem 0
}

a img.alignright {
    float: right;
    margin: .375rem 0 1.25rem 1.25rem
}

a img.alignnone {
    margin: .625rem 0
}

a img.alignleft {
    float: left;
    margin: .375rem 1.25rem 1.25rem 0
}

a img.aligncenter {
    display: block;
    margin-left: auto;
    margin-right: auto
}

.wp-caption {
    background: #fefefe;
    border-radius: 0;
    border: 1px solid #cdcdcd;
    max-width: 100%;
    padding: .625rem;
    text-align: center
}

.wp-caption::after,
.wp-caption::before {
    display: table;
    content: ' ';
    flex-basis: 0;
    order: 1
}

.wp-caption::after {
    clear: both
}

.wp-caption img {
    border: 0 none;
    height: auto;
    margin: 0;
    max-width: 100%;
    padding: 0 0 .625rem;
    width: auto
}

.wp-caption .wp-caption-text {
    font-size: 80%;
    margin: 0;
    padding: 0
}

p+.wp-caption {
    display: block;
    clear: both
}

.screen-reader-text {
    clip: rect(1px, 1px, 1px, 1px);
    position: absolute !important;
    height: 1px;
    width: 1px;
    overflow: hidden
}

.screen-reader-text:focus {
    background-color: #f1f1f1;
    border-radius: 3px;
    box-shadow: 0 0 2px 2px rgba(0, 0, 0, .6);
    clip: auto !important;
    color: #21759b;
    display: block;
    font-size: 14px;
    font-size: .875rem;
    font-weight: 700;
    height: auto;
    left: 5px;
    line-height: normal;
    padding: 15px 23px 14px;
    text-decoration: none;
    top: 5px;
    width: auto;
    z-index: 100000
}

.gallery-columns-1 {
    max-width: 66.875rem;
    margin-right: auto;
    margin-left: auto
}

.gallery-columns-1::after,
.gallery-columns-1::before {
    display: table;
    content: ' ';
    flex-basis: 0;
    order: 1
}

.gallery-columns-1::after {
    clear: both
}

.gallery-columns-1>figure.gallery-item {
    float: left;
    width: 100%
}

.gallery-columns-1>figure.gallery-item:nth-of-type(1n) {
    clear: none
}

.gallery-columns-1>figure.gallery-item:nth-of-type(1n+1) {
    clear: both
}

.gallery-columns-1>figure.gallery-item:last-child {
    float: left
}

.gallery-columns-1 figure.gallery-item {
    margin: 0;
    padding: 0 1.25rem 1.25rem
}

.gallery-columns-1 figure.gallery-item .gallery-caption {
    display: none
}

.gallery-columns-2 {
    max-width: 66.875rem;
    margin-right: auto;
    margin-left: auto
}

.gallery-columns-2::after,
.gallery-columns-2::before {
    display: table;
    content: ' ';
    flex-basis: 0;
    order: 1
}

.gallery-columns-2::after {
    clear: both
}

.gallery-columns-2>figure.gallery-item {
    float: left;
    width: 50%
}

.gallery-columns-2>figure.gallery-item:nth-of-type(1n) {
    clear: none
}

.gallery-columns-2>figure.gallery-item:nth-of-type(2n+1) {
    clear: both
}

.gallery-columns-2>figure.gallery-item:last-child {
    float: left
}

.gallery-columns-2 figure.gallery-item {
    margin: 0;
    padding: 0 1.25rem 1.25rem
}

.gallery-columns-2 figure.gallery-item .gallery-caption {
    display: none
}

.gallery-columns-3 {
    max-width: 66.875rem;
    margin-right: auto;
    margin-left: auto
}

.gallery-columns-3::after,
.gallery-columns-3::before {
    display: table;
    content: ' ';
    flex-basis: 0;
    order: 1
}

.gallery-columns-3::after {
    clear: both
}

.gallery-columns-3>figure.gallery-item {
    float: left;
    width: 33.33333%
}

.gallery-columns-3>figure.gallery-item:nth-of-type(1n) {
    clear: none
}

.gallery-columns-3>figure.gallery-item:nth-of-type(3n+1) {
    clear: both
}

.gallery-columns-3>figure.gallery-item:last-child {
    float: left
}

.gallery-columns-3 figure.gallery-item {
    margin: 0;
    padding: 0 1.25rem 1.25rem
}

.gallery-columns-3 figure.gallery-item .gallery-caption {
    display: none
}

.gallery-columns-4 {
    max-width: 66.875rem;
    margin-right: auto;
    margin-left: auto
}

.gallery-columns-4::after,
.gallery-columns-4::before {
    display: table;
    content: ' ';
    flex-basis: 0;
    order: 1
}

.gallery-columns-4::after {
    clear: both
}

.gallery-columns-4>figure.gallery-item {
    float: left;
    width: 25%
}

.gallery-columns-4>figure.gallery-item:nth-of-type(1n) {
    clear: none
}

.gallery-columns-4>figure.gallery-item:nth-of-type(4n+1) {
    clear: both
}

.gallery-columns-4>figure.gallery-item:last-child {
    float: left
}

.gallery-columns-4 figure.gallery-item {
    margin: 0;
    padding: 0 1.25rem 1.25rem
}

.gallery-columns-4 figure.gallery-item .gallery-caption {
    display: none
}

.gallery-columns-5 {
    max-width: 66.875rem;
    margin-right: auto;
    margin-left: auto
}

.gallery-columns-5::after,
.gallery-columns-5::before {
    display: table;
    content: ' ';
    flex-basis: 0;
    order: 1
}

.gallery-columns-5::after {
    clear: both
}

.gallery-columns-5>figure.gallery-item {
    float: left;
    width: 20%
}

.gallery-columns-5>figure.gallery-item:nth-of-type(1n) {
    clear: none
}

.gallery-columns-5>figure.gallery-item:nth-of-type(5n+1) {
    clear: both
}

.gallery-columns-5>figure.gallery-item:last-child {
    float: left
}

.gallery-columns-5 figure.gallery-item {
    margin: 0;
    padding: 0 1.25rem 1.25rem
}

.gallery-columns-5 figure.gallery-item .gallery-caption {
    display: none
}

.gallery-columns-6 {
    max-width: 66.875rem;
    margin-right: auto;
    margin-left: auto
}

.gallery-columns-6::after,
.gallery-columns-6::before {
    display: table;
    content: ' ';
    flex-basis: 0;
    order: 1
}

.gallery-columns-6::after {
    clear: both
}

.gallery-columns-6>figure.gallery-item {
    float: left;
    width: 16.66667%
}

.gallery-columns-6>figure.gallery-item:nth-of-type(1n) {
    clear: none
}

.gallery-columns-6>figure.gallery-item:nth-of-type(6n+1) {
    clear: both
}

.gallery-columns-6>figure.gallery-item:last-child {
    float: left
}

.gallery-columns-6 figure.gallery-item {
    margin: 0;
    padding: 0 1.25rem 1.25rem
}

.gallery-columns-6 figure.gallery-item .gallery-caption {
    display: none
}

.gallery-columns-7 {
    max-width: 66.875rem;
    margin-right: auto;
    margin-left: auto
}

.gallery-columns-7::after,
.gallery-columns-7::before {
    display: table;
    content: ' ';
    flex-basis: 0;
    order: 1
}

.gallery-columns-7::after {
    clear: both
}

.gallery-columns-7>figure.gallery-item {
    float: left;
    width: 14.28571%
}

.gallery-columns-7>figure.gallery-item:nth-of-type(1n) {
    clear: none
}

.gallery-columns-7>figure.gallery-item:nth-of-type(7n+1) {
    clear: both
}

.gallery-columns-7>figure.gallery-item:last-child {
    float: left
}

.gallery-columns-7 figure.gallery-item {
    margin: 0;
    padding: 0 1.25rem 1.25rem
}

.gallery-columns-7 figure.gallery-item .gallery-caption {
    display: none
}

.gallery-columns-8 {
    max-width: 66.875rem;
    margin-right: auto;
    margin-left: auto
}

.gallery-columns-8::after,
.gallery-columns-8::before {
    display: table;
    content: ' ';
    flex-basis: 0;
    order: 1
}

.gallery-columns-8::after {
    clear: both
}

.gallery-columns-8>figure.gallery-item {
    float: left;
    width: 12.5%
}

.gallery-columns-8>figure.gallery-item:nth-of-type(1n) {
    clear: none
}

.gallery-columns-8>figure.gallery-item:nth-of-type(8n+1) {
    clear: both
}

.gallery-columns-8>figure.gallery-item:last-child {
    float: left
}

.gallery-columns-8 figure.gallery-item {
    margin: 0;
    padding: 0 1.25rem 1.25rem
}

.gallery-columns-8 figure.gallery-item .gallery-caption {
    display: none
}

.gallery-columns-9 {
    max-width: 66.875rem;
    margin-right: auto;
    margin-left: auto
}

.gallery-columns-9::after,
.gallery-columns-9::before {
    display: table;
    content: ' ';
    flex-basis: 0;
    order: 1
}

.gallery-columns-9::after {
    clear: both
}

.gallery-columns-9>figure.gallery-item {
    float: left;
    width: 11.11111%
}

.gallery-columns-9>figure.gallery-item:nth-of-type(1n) {
    clear: none
}

.gallery-columns-9>figure.gallery-item:nth-of-type(9n+1) {
    clear: both
}

.gallery-columns-9>figure.gallery-item:last-child {
    float: left
}

.gallery-columns-9 figure.gallery-item {
    margin: 0;
    padding: 0 1.25rem 1.25rem
}

.gallery-columns-9 figure.gallery-item .gallery-caption {
    display: none
}

.gallery-columns-10 {
    max-width: 66.875rem;
    margin-right: auto;
    margin-left: auto
}

.gallery-columns-10::after,
.gallery-columns-10::before {
    display: table;
    content: ' ';
    flex-basis: 0;
    order: 1
}

.gallery-columns-10::after {
    clear: both
}

.gallery-columns-10>figure.gallery-item {
    float: left;
    width: 10%
}

.gallery-columns-10>figure.gallery-item:nth-of-type(1n) {
    clear: none
}

.gallery-columns-10>figure.gallery-item:nth-of-type(10n+1) {
    clear: both
}

.gallery-columns-10>figure.gallery-item:last-child {
    float: left
}

.gallery-columns-10 figure.gallery-item {
    margin: 0;
    padding: 0 1.25rem 1.25rem
}

.gallery-columns-10 figure.gallery-item .gallery-caption {
    display: none
}

.gallery-columns-11 {
    max-width: 66.875rem;
    margin-right: auto;
    margin-left: auto
}

.gallery-columns-11::after,
.gallery-columns-11::before {
    display: table;
    content: ' ';
    flex-basis: 0;
    order: 1
}

.gallery-columns-11::after {
    clear: both
}

.gallery-columns-11>figure.gallery-item {
    float: left;
    width: 9.09091%
}

.gallery-columns-11>figure.gallery-item:nth-of-type(1n) {
    clear: none
}

.gallery-columns-11>figure.gallery-item:nth-of-type(11n+1) {
    clear: both
}

.gallery-columns-11>figure.gallery-item:last-child {
    float: left
}

.gallery-columns-11 figure.gallery-item {
    margin: 0;
    padding: 0 1.25rem 1.25rem
}

.gallery-columns-11 figure.gallery-item .gallery-caption {
    display: none
}

.gallery-columns-12 {
    max-width: 66.875rem;
    margin-right: auto;
    margin-left: auto
}

.gallery-columns-12::after,
.gallery-columns-12::before {
    display: table;
    content: ' ';
    flex-basis: 0;
    order: 1
}

.gallery-columns-12::after {
    clear: both
}

.gallery-columns-12>figure.gallery-item {
    float: left;
    width: 8.33333%
}

.gallery-columns-12>figure.gallery-item:nth-of-type(1n) {
    clear: none
}

.gallery-columns-12>figure.gallery-item:nth-of-type(12n+1) {
    clear: both
}

.gallery-columns-12>figure.gallery-item:last-child {
    float: left
}

.gallery-columns-12 figure.gallery-item {
    margin: 0;
    padding: 0 1.25rem 1.25rem
}

.gallery-columns-12 figure.gallery-item .gallery-caption {
    display: none
}

.widget .gform_wrapper {
    position: relative
}

.widget .gform_wrapper form.newsletter-signup-widget .gform_body ul.gform_fields li.gfield {
    padding-right: 0
}

.widget .gform_wrapper form.newsletter-signup-widget .gform_body ul.gform_fields li.gfield .gfield_label {
    display: none
}

.widget .gform_wrapper form.newsletter-signup-widget .gform_body ul.gform_fields li.gfield input {
    padding-right: 35px;
    border-radius: 5px;
    width: 100%;
    z-index: 10
}

@media print,
screen and (max-width:39.99875em) {
    .widget .gform_wrapper form.newsletter-signup-widget .gform_body ul.gform_fields li.gfield input {
        height: auto
    }
}

.widget .gform_wrapper form.newsletter-signup-widget .gform_footer {
    padding: 0;
    margin: 0
}

.widget .gform_wrapper form.newsletter-signup-widget .gform_footer .gform_button {
    position: absolute;
    z-index: 1000;
    width: 25px;
    height: 25px;
    display: block;
    border: none;
    bottom: 3px;
    right: 10px;
    background: transparent url(../img/submit.png) no-repeat center center;
    padding: 0;
    border-radius: 0;
    text-indent: -9999px;
    margin: 0
}

@media print,
screen and (max-width:39.99875em) {
    .widget .gform_wrapper form.newsletter-signup-widget .gform_footer .gform_button {
        bottom: 6px
    }
}

.tml form select[name=user_optin] {
    width: 25%
}

.tml form input[type=submit] {
    color: #fefefe;
    background-color: #05bde5;
    border: 1px solid #05bde5;
    border-radius: 3px;
    font-size: 1rem;
    padding: 6px 15px;
    transition: color .35s ease-out, background-color .35s ease-out
}

.tml form input[type=submit]:hover {
    color: #05bde5;
    background-color: #fefefe
}

.tml-profile {
    max-width: 100%
}

.tml-profile #pass1,
.tml-profile .wp-pwd,
.tml-profile input {
    width: 60%
}

body>header {
    border-bottom: 1px solid #cdcdcd
}

body>header>.container {
    align-items: center;
    padding-top: 40px;
    padding-bottom: 10px
}

body>header>.container .mobile-menu-button-container {
    flex: 0 0 auto;
    width: calc(16.66667% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    text-align: left
}

body>header>.container .mobile-menu-button-container #hamburger-menu {
    z-index: 1111;
    position: relative;
    overflow: hidden;
    background: 0 0;
    margin: 0;
    top: 2px;
    right: 0;
    padding: 0;
    width: 28px;
    height: 30px;
    font-size: 0;
    text-indent: -9999px;
    box-shadow: none;
    border-radius: 0;
    border: none;
    cursor: pointer;
    transition: background .3s, top 250ms ease-out
}

body>header>.container .mobile-menu-button-container #hamburger-menu span {
    display: block;
    position: absolute;
    top: 12px;
    left: 0;
    right: 0;
    height: 3px;
    background: #2a338a;
    transition: background 0s .3s
}

body>header>.container .mobile-menu-button-container #hamburger-menu span:after,
body>header>.container .mobile-menu-button-container #hamburger-menu span:before {
    position: absolute;
    display: block;
    left: 0;
    width: 100%;
    height: 3px;
    background-color: #2a338a;
    content: "";
    transition-duration: .3s, .3s;
    transition-delay: .3s, 0s
}

body>header>.container .mobile-menu-button-container #hamburger-menu span:before {
    top: -6px;
    transition-property: top, transform
}

body>header>.container .mobile-menu-button-container #hamburger-menu span:after {
    bottom: -6px;
    transition-property: bottom, transform
}

@media print,
screen and (min-width:64em) {
    body>header>.container .mobile-menu-button-container {
        display: none
    }
}

body>header>.container .social {
    flex: 0 0 auto;
    width: calc(25% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    display: flex;
    justify-content: flex-start;
    align-items: center
}

body>header>.container .social a {
    background: transparent no-repeat center center/cover;
    display: block;
    height: 31px;
    width: 31px;
    text-indent: -9999px;
    margin-right: 18px
}

body>header>.container .social a.facebook {
    background-image: url(../../img/facebook.svg)
}

body>header>.container .social a.twitter {
    background-image: url(../../img/twitter.svg)
}

body>header>.container .social a.instagram {
    background-image: url(../../img/instagram.svg)
}

@media print,
screen and (max-width:39.99875em) {
    body>header>.container .social {
        display: none
    }
}

body>header>.container #logo {
    flex: 0 0 auto;
    width: calc(50% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    align-items: center;
    text-align: center
}

body>header>.container #logo a {
    font-size: 2.8125rem;
    color: #05bde5;
    font-family: BioRhyme, Arvo, serif;
    font-weight: 700;
    transition: opacity .35s ease-out
}

body>header>.container #logo a .script {
    color: #2a338a;
    font-family: LifeHack, Arvo, serif;
    font-weight: 400
}

body>header>.container #logo a:hover {
    opacity: .8
}

@media print,
screen and (max-width:39.99875em) {
    body>header>.container #logo {
        flex: 0 0 auto;
        width: calc(66.66667% - 1.25rem);
        margin-left: .625rem;
        margin-right: .625rem
    }

    body>header>.container #logo a {
        font-size: 1.5rem
    }
}

body>header>.container .mobile-search-button-container {
    flex: 0 0 auto;
    width: calc(16.66667% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem
}

body>header>.container .mobile-search-button-container button {
    display: block;
    width: 24px;
    height: 24px;
    background: transparent url(../../img/search.svg) no-repeat center center/contain;
    cursor: pointer;
    border: none;
    text-indent: -9999px
}

@media print,
screen and (min-width:40em) {
    body>header>.container .mobile-search-button-container {
        display: none
    }
}

body>header>.container #search-form {
    flex: 0 0 auto;
    width: calc(25% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem
}

body>header>.container #search-form form {
    position: relative
}

body>header>.container #search-form form .search-field {
    margin: 0;
    border-radius: 10px;
    border: 2px solid #e6e6e6;
    box-shadow: none
}

body>header>.container #search-form form .search-submit {
    position: absolute;
    top: 50%;
    right: 10px;
    display: block;
    width: 24px;
    height: 24px;
    background: transparent url(../../img/search.svg) no-repeat center center/contain;
    cursor: pointer;
    border: none;
    text-indent: -9999px;
    transform: translateY(-50%)
}

@media print,
screen and (max-width:39.99875em) {
    body>header>.container #search-form {
        position: absolute;
        top: 58px;
        left: -1000px;
        width: 100%;
        height: 100%;
        background: #f9f9f9;
        z-index: 1000;
        opacity: 0;
        transition: left .35s ease-out, opacity .35s ease-out
    }

    body>header>.container #search-form form {
        width: 90%;
        margin: 25px auto
    }

    body>header>.container #search-form form .search-field {
        background: 0 0;
        padding: .5rem .5rem 1rem 3.125rem;
        font-size: 24px;
        border: none;
        border-bottom: 2px solid #2a338a;
        border-radius: 0
    }

    body>header>.container #search-form form .search-submit {
        top: 25%;
        right: auto;
        left: 0;
        width: 32px;
        height: 32px
    }

    body>header>.container #search-form.open {
        left: -10px;
        opacity: 1
    }
}

body>header>.container nav {
    flex: 0 0 auto;
    min-height: 0;
    min-width: 0;
    width: calc(100% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    margin-top: 15px
}

body>header>.container nav>ul {
    display: flex;
    max-width: 840px;
    justify-content: space-evenly;
    margin: 0 auto;
    list-style: none
}

body>header>.container nav>ul li {
    list-style: none
}

body>header>.container nav>ul li a {
    color: #2a338a;
    font-size: .875rem;
    text-transform: uppercase
}

body>header>.container nav>ul.dropdown>li.is-dropdown-submenu-parent>a::after {
    top: 31px;
    right: 12px;
    content: '^';
    height: 3px;
    width: 3px;
    color: #05bde5;
    font-size: 1rem;
    border: none;
    transform: rotate(-180deg)
}

body>header>.container nav>ul ul.is-dropdown-submenu {
    top: calc(100% + 10px) !important;
    left: -20px !important;
    background: #e6e6e6
}

body>header>.container nav>ul ul.is-dropdown-submenu li a {
    display: block;
    width: calc(100% - 30px);
    margin: 0 15px;
    padding: .7rem 1rem .7rem 0;
    border-bottom: 1px solid #fefefe
}

body>header>.container nav>ul ul.is-dropdown-submenu li:last-child a {
    border-bottom: none
}

body>header>.container nav .social {
    display: none
}

@media print,
screen and (max-width:39.99875em) {
    body>header>.container nav {
        position: absolute;
        top: 43px;
        left: -1000px;
        width: 100vw;
        background: #f9f9f9;
        padding-bottom: 100px;
        opacity: 0;
        transition: left .35s ease-out, opacity .35s ease-out;
        z-index: 10000
    }

    body>header>.container nav>ul {
        display: block;
        height: calc(100vh - 175px);
        overflow: scroll
    }

    body>header>.container nav>ul li {
        padding: .625rem 0
    }

    body>header>.container nav>ul li a {
        background: 0 0 !important;
        font-size: 1.25rem
    }

    body>header>.container nav>ul.dropdown>li.is-dropdown-submenu-parent>a::after {
        content: '+';
        top: 0;
        right: 15px;
        color: #05bde5;
        font-size: 2rem;
        border: none
    }

    body>header>.container nav>ul.dropdown>li.is-dropdown-submenu-parent.is-active>a::after {
        content: '-';
        top: -2px
    }

    body>header>.container nav>ul.dropdown>li.is-dropdown-submenu-parent.is-active ul.is-dropdown-submenu {
        position: relative;
        width: 100%;
        border: none
    }

    body>header>.container nav>ul.dropdown>li.is-dropdown-submenu-parent.is-active ul.is-dropdown-submenu li a {
        width: calc(100% - 80px);
        margin: 0 40px
    }

    body>header>.container nav .social {
        position: absolute;
        top: calc(100vh - 150px);
        left: 15px;
        display: flex;
        justify-content: flex-start;
        width: 100%;
        margin: 0
    }

    body>header>.container nav.open {
        left: -10px;
        opacity: 1
    }
}

@media print,
screen and (max-width:39.99875em) {
    body>header>.container {
        padding-top: 10px
    }
}

body.open {
    position: fixed;
    top: 0
}

@media print,
screen and (max-width:39.99875em) {
    body.admin-bar>header .container nav {
        top: 89px
    }
}

body.admin-bar.open {
    padding-top: 46px
}

body>footer {
    background: #2a338a;
    color: #fefefe;
    font-size: .75rem;
    font-weight: 500
}

body>footer .container {
    align-items: center;
    padding: .9375rem 0
}

body>footer .container p {
    flex: 0 0 auto;
    width: calc(33.33333% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    margin: 0
}

body>footer .container nav {
    flex: 0 0 auto;
    width: calc(66.66667% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem
}

body>footer .container nav ul {
    display: flex;
    justify-content: flex-end;
    margin: 0;
    list-style: none
}

body>footer .container nav ul a {
    margin-right: 40px;
    color: #fefefe;
    text-decoration: underline
}

@media print,
screen and (max-width:39.99875em) {
    body>footer .container p {
        flex: 0 0 auto;
        min-height: 0;
        min-width: 0;
        width: calc(100% - 1.25rem);
        margin-left: .625rem;
        margin-right: .625rem;
        text-align: center;
        margin-bottom: .9375rem
    }

    body>footer .container nav {
        flex: 0 0 auto;
        min-height: 0;
        min-width: 0;
        width: calc(100% - 1.25rem);
        margin-left: .625rem;
        margin-right: .625rem
    }

    body>footer .container nav ul {
        justify-content: space-between
    }

    body>footer .container nav ul a {
        margin: 0
    }
}

.trending {
    padding: .625rem 0 1.875rem
}

.trending header {
    flex: 0 0 auto;
    min-height: 0;
    min-width: 0;
    width: calc(100% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem
}

.trending header h2 {
    position: relative;
    font-size: 1.5625rem;
    font-family: LifeHack, Arvo, serif;
    color: #05bde5;
    text-align: center
}

.trending header h2 span {
    position: relative;
    display: inline-block;
    background: #f6f7f7;
    padding: 0 5px;
    z-index: 10
}

.trending header h2:after {
    position: absolute;
    top: 50%;
    content: '';
    display: block;
    height: 1px;
    width: 100%;
    background: #cdcdcd;
    transform: translateY(-50%);
    z-index: 1
}

article.cover {
    flex: 0 0 auto;
    min-height: 0;
    min-width: 0;
    width: calc(100% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    position: relative;
    min-height: 270px
}

article.cover figure img {
    width: 100%
}

@media print,
screen and (max-width:39.99875em) {
    article.cover figure {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0
    }

    article.cover figure img {
        position: absolute;
        width: 100%;
        height: calc(100% + 40px);
        object-fit: cover
    }
}

article.cover section {
    position: absolute;
    top: 25px;
    bottom: 25px;
    right: 25px;
    height: calc(100% - 50px);
    width: 100%;
    max-width: 845px;
    background: rgba(255, 255, 255, .9);
    border-radius: 25px;
    padding: 1.5625rem 0 1.5625rem 1.5625rem
}

article.cover section .category {
    font-size: .75rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 2px
}

article.cover section .post-title {
    margin: .3125rem 0;
    font-size: 2.625rem;
    font-weight: 300;
    line-height: 48px
}

article.cover section .post-title a {
    color: #2a338a
}

@media print,
screen and (max-width:39.99875em) {
    article.cover section .post-title {
        font-size: 1.875rem;
        line-height: 36px
    }
}

article.cover section .by-line,
article.cover section .date {
    color: #999;
    font-size: .875rem;
    font-weight: 500
}

@media print,
screen and (max-width:39.99875em) {

    article.cover section .by-line,
    article.cover section .date {
        font-size: .75rem
    }
}

article.cover section .by-line .author {
    text-transform: uppercase
}

article.cover section .by-line .author a {
    color: #999
}

@media print,
screen and (max-width:39.99875em) {
    article.cover section {
        position: relative;
        width: calc(100% - 20px);
        height: auto;
        top: 20px;
        left: 10px;
        padding: 1.5625rem 0 1.5625rem 1.5625rem
    }
}

@media print,
screen and (max-width:39.99875em) {
    article.cover {
        width: 100%;
        margin: 0;
        padding: 0
    }
}

article.trending {
    flex: 0 0 auto;
    width: calc(25% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    position: relative
}

article.trending figure {
    text-align: center;
    margin-bottom: 1.875rem
}

article.trending figure img {
    width: 100%;
    max-width: 130px;
    border-radius: 50%
}

article.trending section {
    width: 100%;
    text-align: center
}

article.trending section .category {
    font-size: .75rem;
    font-weight: 500;
    text-transform: uppercase
}

article.trending section .post-title {
    margin: .625rem 0;
    font-size: 1.125rem
}

article.trending section .post-title a {
    color: #2a338a
}

@media print,
screen and (max-width:39.99875em) {
    article.trending section .post-title {
        font-size: 1rem;
        line-height: 22px
    }
}

article.trending section .by-line,
article.trending section .date {
    color: #999;
    font-size: .875rem;
    font-weight: 500
}

@media print,
screen and (max-width:39.99875em) {

    article.trending section .by-line,
    article.trending section .date {
        font-size: .75rem;
        line-height: 14px
    }
}

article.trending section .by-line .author {
    text-transform: uppercase
}

article.trending section .by-line .author a {
    color: #999
}

@media print,
screen and (max-width:39.99875em) {
    article.trending {
        flex: 0 0 auto;
        width: calc(50% - 1.25rem);
        margin-left: .625rem;
        margin-right: .625rem
    }
}

article.list {
    flex: 0 0 auto;
    width: calc(50% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    display: flex;
    flex-flow: row wrap;
    position: relative;
    align-items: center;
    padding: 1.125rem 0
}

article.list figure {
    flex: 0 0 auto;
    width: calc(50% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    max-width: 233px
}

article.list figure img {
    width: 100%
}

@media print,
screen and (max-width:39.99875em) {
    article.list figure {
        height: 100%
    }

    article.list figure img {
        width: auto;
        height: 100%;
        object-fit: cover
    }
}

article.list section {
    flex: 0 0 auto;
    min-height: 0;
    min-width: 0;
    width: calc(100% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem
}

article.list section .category {
    font-size: .75rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px
}

@media print,
screen and (max-width:39.99875em) {
    article.list section .category {
        font-size: .5rem
    }
}

article.list section .post-title {
    margin: .625rem 0;
    font-size: 1.375rem;
    line-height: 25px
}

article.list section .post-title a {
    color: #2a338a
}

@media print,
screen and (max-width:39.99875em) {
    article.list section .post-title {
        margin: .3125rem 0 .625rem 0;
        font-size: 1rem;
        line-height: 22px
    }
}

article.list section .by-line,
article.list section .date {
    color: #999;
    font-size: .875rem;
    font-weight: 500
}

@media print,
screen and (max-width:39.99875em) {

    article.list section .by-line,
    article.list section .date {
        font-size: .625rem;
        line-height: 14px
    }
}

article.list section .by-line .author {
    text-transform: uppercase
}

article.list section .by-line .author a {
    color: #999
}

article.list figure+section {
    flex: 0 0 auto;
    width: calc(50% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem
}

article.list::before {
    content: '';
    position: absolute;
    right: 0;
    bottom: 0;
    width: calc(100% - 10px);
    height: 1px;
    background: #cdcdcd
}

article.list:nth-of-type(odd)::before {
    left: 10px;
    right: auto;
    width: calc(100% - 20px)
}

article.list:nth-of-type(odd)::after {
    content: '';
    position: absolute;
    right: -10px;
    height: 100%;
    width: 1px;
    background: #cdcdcd
}

article.list.book figure {
    flex: 0 0 auto;
    width: calc(25% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem
}

article.list.book figure+section {
    flex: 0 0 auto;
    width: calc(75% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem
}

@media print,
screen and (max-width:39.99875em) {
    article.list {
        flex: 0 0 auto;
        min-height: 0;
        min-width: 0;
        width: calc(100% - 1.25rem);
        margin-left: .625rem;
        margin-right: .625rem;
        margin: 0;
        border-bottom: 1px solid #cdcdcd
    }

    article.list::after,
    article.list::before {
        display: none
    }

    article.list figure {
        flex: 0 0 auto;
        width: calc(58.33333% - 1.25rem);
        margin-left: .625rem;
        margin-right: .625rem;
        width: calc(58.33333% - .625rem);
        margin-left: 0
    }

    article.list figure img {
        height: auto
    }

    article.list figure+section {
        flex: 0 0 auto;
        width: calc(41.66667% - 1.25rem);
        margin-left: .625rem;
        margin-right: .625rem;
        width: calc(41.66666% - .625rem);
        margin-right: 0
    }
}

.newsletter-cta {
    flex: 0 0 auto;
    min-height: 0;
    min-width: 0;
    width: calc(100% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    background: #daf5fb
}

.newsletter-cta form {
    display: flex;
    flex-flow: row wrap
}

.newsletter-cta form section {
    position: relative;
    padding: 1.25rem 0
}

.newsletter-cta form section .form-header {
    margin-bottom: 2.5rem;
    color: #2a338a
}

.newsletter-cta form section .form-header .cta-heading {
    font-family: BioRhyme, Arvo, serif;
    font-size: 1.875rem;
    font-weight: 900
}

.newsletter-cta form section .form-header .cta-subheading {
    font-size: 1.25rem;
    font-weight: 700
}

.newsletter-cta form section .options input {
    position: relative;
    top: 2px;
    left: 2px;
    height: 20px;
    width: 20px
}

.newsletter-cta form section .options label {
    color: #2a338a;
    font-size: 1.125rem
}

.newsletter-cta form section .newsletter-legal-copy,
.newsletter-cta form section .newsletter-offer {
    color: #818184;
    font-size: .75rem
}

.newsletter-cta form section .newsletter-legal-copy a,
.newsletter-cta form section .newsletter-offer a {
    color: #818184
}

.newsletter-cta form section .input-group input {
    border-color: #2a338a;
    border-radius: 10px 0 0 10px
}

.newsletter-cta form section .input-group input::placeholder {
    color: #818184
}

.newsletter-cta form section .input-group .input-group-button .form-button {
    background: #2a338a;
    color: #fefefe;
    font-weight: 700;
    letter-spacing: 1px;
    border-color: #2a338a;
    border-radius: 0 10px 10px 0;
    text-transform: uppercase
}

.newsletter-cta form section #recaptcha {
    margin-bottom: 10px
}

.newsletter-cta form section:first-of-type {
    flex: 0 0 auto;
    width: calc(66.66667% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    padding-left: 2.5rem
}

.newsletter-cta form section:last-of-type {
    flex: 0 0 auto;
    width: calc(33.33333% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding-right: 2.5rem
}

@media print,
screen and (max-width:39.99875em) {

    .newsletter-cta form section:first-of-type,
    .newsletter-cta form section:last-of-type {
        flex: 0 0 auto;
        min-height: 0;
        min-width: 0;
        width: calc(100% - 1.25rem);
        margin-left: .625rem;
        margin-right: .625rem;
        padding: 1.25rem
    }
}

@media print,
screen and (max-width:39.99875em) {
    .newsletter-cta {
        width: calc(100% + 1.5rem);
        margin-right: -.625rem;
        margin-left: -.625rem;
        padding: 0
    }
}

.content .newsletter-cta {
    margin: 1.5625rem 0
}

body.archive>main {
    padding-right: .625rem;
    padding-left: .625rem;
    max-width: 66.875rem;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    flex-flow: row wrap
}

@media print,
screen and (min-width:40em) {
    body.archive>main {
        padding-right: .9375rem;
        padding-left: .9375rem
    }
}

body.archive>main>header {
    flex: 0 0 auto;
    min-height: 0;
    min-width: 0;
    width: calc(100% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    padding-top: 1.5625rem;
    padding-left: .625rem
}

body.archive>main>header h1 {
    font-family: BioRhyme, Arvo, serif
}

body.search>main {
    padding-right: .625rem;
    padding-left: .625rem;
    max-width: 66.875rem;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    flex-flow: row wrap
}

@media print,
screen and (min-width:40em) {
    body.search>main {
        padding-right: .9375rem;
        padding-left: .9375rem
    }
}

body.search>main>header {
    flex: 0 0 auto;
    min-height: 0;
    min-width: 0;
    width: calc(100% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    padding-top: 1.5625rem;
    padding-left: .625rem
}

body.search>main>header h1 {
    font-family: BioRhyme, Arvo, serif
}

body.single .single-post {
    display: flex;
    flex-flow: column wrap;
    padding-top: 2.5rem
}

body.single .single-post>header {
    padding-right: .625rem;
    padding-left: .625rem;
    max-width: 66.875rem;
    margin-left: auto;
    margin-right: auto;
    flex: 0 0 auto;
    min-height: 0;
    min-width: 0;
    width: calc(100% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    margin: 0 auto
}

@media print,
screen and (min-width:40em) {
    body.single .single-post>header {
        padding-right: .9375rem;
        padding-left: .9375rem
    }
}

body.single .single-post>header section {
    margin-top: 1.5625rem
}

body.single .single-post>header section .category {
    font-size: .625rem;
    font-weight: 500;
    text-transform: uppercase;
    letter-spacing: 1px
}

body.single .single-post>header section h1 {
    color: #2a338a;
    font-size: 2.125rem;
    line-height: 40px
}

body.single .single-post>header section .author-share-container {
    display: flex;
    justify-content: space-between;
    align-items: center
}


body.single .single-post>header section .author-info {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-wrap: wrap
}

body.single .single-post>header section .author-info figure {
    flex-basis: 34px;
    margin-right: 10px
}

body.single .single-post>header section .author-info figure img {
    border-radius: 50%
}

body.single .single-post>header section .author-info .meta {
    flex-basis: calc(100% - 44px);
    color: #818184
}

body.single .single-post>header section .author-info .meta .date {
    font-size: .875rem
}

body.single .single-post>header section .author-info .meta .by-line {
    font-size: 1.125rem;
    text-transform: uppercase
}

body.single .single-post>header section .author-info.promoted-book {
    position: relative;
    align-items: flex-start
}

body.single .single-post>header section .author-info.promoted-book figure {
    position: absolute;
    left: 0;
    top: 0;
    width: 100px
}

body.single .single-post>header section .author-info.promoted-book figure img {
    border-radius: 0
}

body.single .single-post>header section .author-info.promoted-book .meta {
    margin-left: 6.875rem;
    flex-basis: calc(100% - 110px)
}

body.single .single-post>header section .author-info.promoted-book .meta .by-line {
    text-transform: none
}

body.single .single-post>header section .author-info.promoted-book .meta .by-line a {
    text-decoration: underline
}

body.single .single-post>header section .author-info.promoted-book .meta .by-line .author {
    text-transform: uppercase
}

body.single .single-post>header section .author-info.promoted-book .meta .by-line .author a {
    text-decoration: none
}

@media print,
screen and (min-width:40em) {
    body.single .single-post>header section {
        padding-right: .625rem;
        padding-left: .625rem;
        max-width: 850px;
        margin-left: auto;
        margin-right: auto
    }
}

@media print,
screen and (min-width:40em) and (min-width:40em) {
    body.single .single-post>header section {
        padding-right: .9375rem;
        padding-left: .9375rem
    }
}

body.single .single-post>section {
    flex: 0 0 auto;
    min-height: 0;
    min-width: 0;
    width: calc(100% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    margin-top: 1.5625rem;
    font-size: 1.125rem;
    line-height: 24px
}

body.single .single-post>section .post-content {
    margin-bottom: 2.5rem;
    padding-bottom: 1.25rem;
    border-bottom: 1px solid #cdcdcd
}

body.single .single-post>section .custom-content {
    padding-top: .9375rem;
    padding-bottom: .9375rem;
    border-top: 1px solid #cdcdcd
}

@media print,
screen and (min-width:40em) {
    body.single .single-post>section {
        padding-right: .625rem;
        padding-left: .625rem;
        max-width: 850px;
        margin-left: auto;
        margin-right: auto
    }
}

@media print,
screen and (min-width:40em) and (min-width:40em) {
    body.single .single-post>section {
        padding-right: .9375rem;
        padding-left: .9375rem
    }
}

body.single .single-post>footer {
    flex: 0 0 auto;
    min-height: 0;
    min-width: 0;
    width: calc(100% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem
}

body.single .single-post>footer .trending {
    background: #f9f9f9
}

body.single .single-post>footer .posts {
    padding-right: .625rem;
    padding-left: .625rem;
    max-width: 66.875rem;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    flex-flow: row wrap
}

@media print,
screen and (min-width:40em) {
    body.single .single-post>footer .posts {
        padding-right: .9375rem;
        padding-left: .9375rem
    }
}

body.single .single-post>footer .posts article.list:first-child::after {
    content: '';
    position: absolute;
    left: 10px;
    top: 0;
    width: calc(100% - 20px);
    height: 1px;
    background: #cdcdcd
}

body.single .single-post>footer .posts article.list:nth-child(2)::after {
    content: '';
    position: absolute;
    left: 10px;
    top: 0;
    width: calc(100% - 10px);
    height: 1px;
    background: #cdcdcd
}

body.single .single-post>footer .posts article.list:nth-child(3)::after {
    height: 200%;
    bottom: 0
}

@media print,
screen and (max-width:39.99875em) {
    body.single .single-post>footer {
        width: 100%;
        margin: 0
    }

    body.single .single-post>footer .posts article {
        width: 100%;
        margin: 0
    }
}

body.single .single-post.has-promoted-book>section .post-content::before {
    display: block;
    content: '';
    width: 110px;
    height: 85px;
    float: left
}

@media print,
screen and (max-width:39.99875em) {
    body.single .single-post.has-promoted-book>section .post-content::before {
        width: 120px;
        height: 50px
    }
}

.book-info {
    padding-bottom: 1.25rem;
    margin-bottom: 1.25rem;
    border-bottom: 1px solid #cdcdcd;
    max-width: 100%
}

.book-info.has-cover .retail-buttons {
    margin-left: 165px;
    width: 83%
}

.book-info .book-cover {
    float: left;
    width: 150px;
    margin-right: 15px;
    margin-bottom: 15px;
    text-align: center
}

.book-info .book-cover img {
    border: 1px solid #d7d7d7
}

.book-info .book-title {
    margin-bottom: 5px;
    color: #2a338a;
    font-size: 1.75rem;
    line-height: 30px
}

.book-info .book-author {
    color: #0a0a0a;
    font-size: 1.75rem;
    line-height: 30px
}

.book-info .book-description {
    margin-top: 25px;
    margin-left: 165px;
    line-height: 1.6
}

.book-info .book-description iframe[allowfullscreen] {
    max-width: 100%
}

.book-info .retail-buttons {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-wrap: wrap;
    width: 100%;
    margin-top: 15px
}

.book-info .retail-buttons a {
    display: flex;
    align-items: center;
    flex-basis: 95px;
    margin: 10px 6px 10px 0;
    background: #fefefe;
    padding: 5px 10px;
    border: 1px solid #999;
    height: 41px
}

.book-info .retail-buttons a img {
    width: 100%
}

.book-info:last-child {
    border-bottom: none
}

@media print,
screen and (max-width:39.99875em) {
    .book-info {
        display: flex;
        flex-direction: column
    }

    .book-info .book-cover {
        float: none;
        order: 2
    }

    .book-info>a {
        margin-bottom: 1.25rem;
        order: 1
    }

    .book-info .book-description {
        margin-top: 0;
        margin-left: 0;
        order: 3
    }

    .book-info .retail-buttons {
        margin-top: 0;
        order: 4
    }

    .book-info.has-cover .retail-buttons {
        margin-left: 0;
        width: 100%
    }
}

.book-modal button i {
    font-size: 2rem
}

.book-modal .book-title {
    font-family: BioRhyme, Arvo, serif;
    font-weight: 700
}

.book-modal .book-title .title {
    font-size: 1.75rem;
    color: #05bde5
}

.book-modal .book-title .author {
    font-size: 1.25rem;
    color: #999
}

.book-modal .book-description {
    line-height: 1.6;
    margin: 10px 0
}

.book-modal .retail-buttons {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    flex-wrap: wrap;
    width: 100%;
    margin-top: 15px
}

.book-modal .retail-buttons a {
    display: flex;
    align-items: center;
    flex-basis: 95px;
    margin: 10px 6px 10px 0;
    background: #fefefe;
    padding: 5px 10px;
    border: 1px solid #999;
    height: 41px
}

.book-modal .retail-buttons a img {
    width: 100%
}

.book-modal .post-mentions {
    margin-top: 15px
}

.book-modal .post-mentions .mentions {
    font-size: .8rem;
    font-weight: 700;
    font-family: BioRhyme, Arvo, serif;
    margin-bottom: 0
}

.book-modal .post-mentions .post-mention {
    margin-top: 10px
}

.book-modal .post-mentions .post-mention a h2 {
    color: #05bde5;
    font-size: 1.75rem;
    font-weight: 700
}

.book-modal .post-mentions .post-mention .meta {
    font-size: .8rem
}

.book-modal .next-book {
    font-size: 1.25rem;
    margin-right: 15px
}

.book-modal .close {
    color: #999;
    font-size: 1.25rem;
    cursor: pointer
}

body.your-shelf>main {
    padding-right: .625rem;
    padding-left: .625rem;
    max-width: 66.875rem;
    margin-left: auto;
    margin-right: auto;
    display: flex;
    flex-flow: row wrap
}

@media print,
screen and (min-width:40em) {
    body.your-shelf>main {
        padding-right: .9375rem;
        padding-left: .9375rem
    }
}

body.your-shelf>main>header {
    flex: 0 0 auto;
    min-height: 0;
    min-width: 0;
    width: calc(100% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    padding: 1.5625rem 0
}

body.your-shelf>main>header h1 {
    font-family: BioRhyme, Arvo, serif
}

body.your-shelf>main .shelf {
    flex: 0 0 auto;
    min-height: 0;
    min-width: 0;
    width: calc(100% - 1.25rem);
    margin-left: .625rem;
    margin-right: .625rem;
    margin-top: 0;
    padding: 0
}

#login-add-to-shelf {
    position: relative;
    background-color: #2a338a;
    color: #fefefe
}

#login-add-to-shelf button.close-button {
    position: absolute;
    top: 5px;
    right: 15px;
    font-size: 2.5rem;
    color: #fefefe
}

#login-add-to-shelf p.lead {
    margin-top: 15px
}

#login-add-to-shelf p.lead a {
    color: #fefefe;
    text-decoration: underline;
    transition: .35s opacity ease-out
}

#login-add-to-shelf p.lead a:hover {
    opacity: .6
}

.books {
    display: flex;
    flex-wrap: wrap;
    width: 100%
}

.books .book {
    width: 145px;
    margin-right: 25px
}

.books .book .book-cover {
    width: 100%
}

.books .book .book-title .title {
    font-size: 1.25rem
}

.books .book .book-title .author {
    font-size: 1rem
}

.filters {
    margin-bottom: 25px
}

.filters .filters-toggle {
    color: #fefefe;
    background-color: #2a338a;
    border: 1px solid #2a338a;
    border-radius: 3px;
    font-size: 1rem;
    padding: 6px 15px;
    transition: color .35s ease-out, background-color .35s ease-out
}

.filters .filters-toggle:hover {
    color: #2a338a;
    background-color: #fefefe
}

.filters .tag {
    padding: 1px 15px;
    border: 1px solid #000;
    display: inline-block;
    margin: 10px 7px;
    height: 30px
}

.filters #clear-filters {
    margin-left: 6px
}

.share-button {
    display: flex;
    align-items: center;
    max-height: 32px;
    background: #f4f2f2;
    padding: 5px 15px;
    color: #2a338a;
    font-size: 15px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    border: 2px solid #b7b7b7;
    border-radius: 5px;
    cursor: pointer;
    transition: opacity .35s ease-out
}

.share-button .share-icon {
    content: '';
    display: inline-block;
    background: transparent url(../../img/share-alt-solid.svg) no-repeat center center/contain;
    margin-right: 10px;
    height: 18px;
    width: 18px
}

.share-button:hover {
    opacity: .6
}

#share {
    padding: 15px 25px
}

#share .close-button {
    position: absolute;
    right: 15px;
    top: 0;
    font-size: 3rem
}

#share .title {
    display: block;
    margin-top: 15px;
    margin-bottom: 25px;
    font-size: 30px
}




/*

Modifications

*/


.container-width {
    width: 90% !important;
}

.author-share-container{
    display: flex !important;
    justify-content: space-between !important;
}
.margin-top{
    margin-top: 17px !important;
}
.font-larger{
    font-size: larger;
}
.heading-font{
    color: #2a338a !important;
    font-size: 2.125rem !important;
    line-height: 40px !important;
}
.object-fit{
    object-fit: cover;
    width: 100%;
}
.img-hover:hover{
    transition-duration: 2s;
    transform: scale3d(1.8, 1.8, 1.8);
}
</style>