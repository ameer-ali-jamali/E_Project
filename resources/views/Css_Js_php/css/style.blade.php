<style>
    /*--------------------------------------------------------------
/* GENERAL STYLES
--------------------------------------------------------------*/
    /*--------------------------------------------------------------
/** 1. VARIABLES
--------------------------------------------------------------*/
    :root {
        /* widths for rows and containers
     */
        --header-height: 160px;
        --header-height-min: 80px;
    }

    /* on mobile devices below 600px
 */
    @media screen and (max-width: 600px) {
        :root {
            --header-height: 100px;
            --header-height-min: 80px;
        }
    }

    /* Theme Colors */
    :root {
        --accent-color: #C5A992;
        --secondary-color: #C5A992;
        --dark-color: #2f2f2f;
        --light-color: #F3F2EC;
        --body-text-color: #757575;
        --light-text-color: #afafaf;
        --dark-text-color: #2f2f2f;
    }

    /* Fonts */
    :root {
        --body-font: "Raleway", sans-serif;
        --heading-font: "Prata", Georgia, serif;
        --secondary-font: "Playfair Display", Georgia, serif;
    }


    /* 2.1 General Styles
/*----------------------------------------------*/
    *,
    *::before,
    *::after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    html {
        box-sizing: border-box;
    }

    body {
        font-family: var(--body-font);
        font-size: 16px;
        line-height: 2;
        color: var(--body-text-color);
        background-color: var(--light-color);
    }

    body.no-scroll {
        overflow: hidden;
    }

    a {
        color: var(--accent-color);
        transition: 0.3s color ease-out;
    }

    a:hover {
        color: #111;
    }

    ul,
    ol {
        margin-top: 0;
        margin-bottom: 10px;
        margin-left: 0;
    }

    ul ul,
    ol ul,
    ul ol,
    ol ol {
        margin-top: 5px;
        margin-bottom: 0;
    }

    ul li,
    ol li {
        margin-bottom: 5px;
        outline: 0;
    }

    ul li.active a {
        color: #daa556;
    }

    ul li:last-child,
    ol li:last-child {
        margin-bottom: 0;
    }

    dl {
        margin-top: 0;
        margin-bottom: 2rem;
    }

    dt,
    dd {
        line-height: 1.42857143;
    }

    dt {
        font-weight: bold;
    }

    dd {
        margin-left: 0;
    }

    button,
    input,
    select,
    textarea {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        outline: 0;
    }

    figure {
        margin: 0;
    }

    img {
        display: inline-block;
        border: 0;
        max-width: 100%;
        height: auto;
        vertical-align: middle;
    }

    ::selection {
        background: rgba(0, 0, 0, 0.8);
        color: #fff;
        text-shadow: none;
    }

    ::-moz-selection {
        background: rgba(0, 0, 0, 0.8);
        color: #fff;
        text-shadow: none;
    }

    /* image align */
    figure.align-right {
        margin: 30px 0 30px 30px;
    }

    /* Typography */
    /*----------------------------------------------*/

    h1,
    .h1,
    h2,
    .h2,
    h3,
    .h3,
    h4,
    .h4,
    h5,
    .h5,
    h6,
    .h6 {
        font-family: var(--heading-font);
        line-height: 1.2;
        color: var(--dark-color);
    }

    h1.light,
    .h1,
    h2.light,
    .h2,
    h3.light,
    .h3,
    h4.light,
    .h4,
    h5.light,
    .h5,
    h6.light,
    .h6 {
        color: #fff;
    }

    h1,
    h2,
    h3 {
        margin: 25px 0;
        text-transform: capitalize;
    }

    h5,
    h6 {
        letter-spacing: 1px;
    }

    h1,
    .h1 {
        font-size: 2.5em;
        line-height: 1.4;
    }

    h2,
    .h2 {
        font-size: 1.5em;
        line-height: 1.4;
    }

    h3,
    .h3 {
        font-size: 1.4em;
        line-height: 1.4;
    }

    h4,
    .h4 {
        font-size: 1.1em;
        line-height: 1.4;
    }

    h5,
    .h5 {
        font-size: .83em;
        line-height: 1.25;
    }

    h6,
    .h6 {
        font-size: .67em;
        line-height: 1.1;
    }

    h1 a,
    h2 a,
    h3 a,
    h4 a,
    h5 a,
    h6 a {
        font-weight: inherit;
        color: inherit;
        text-decoration: none;
    }

    p {
        margin: 0 0 20px 0;
    }

    p:empty {
        display: none;
    }

    small {
        font-size: 85%;
    }

    mark {
        background-color: #fcf8e3;
        padding: 0.28rem;
    }

    dfn,
    cite,
    em,
    i {
        font-style: italic;
    }

    code,
    kbd,
    var {
        font-size: 14px;
    }

    code {
        background-color: #f9f2f4;
    }

    abbr {
        border-bottom: 0.1px dotted #666;
        cursor: help;
    }

    ::placeholder {
        color: #999;
    }

    /*----------------------------------------------*/
    /* 2.1 Floating & Alignment */
    /*----------------------------------------------*/

    .align-left {
        float: left;
        text-align: left;
    }

    .align-right {
        float: right;
        text-align: right;
    }

    .align-center {
        display: block;
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }

    /**::after,*/
    .container::after,
    .row::after,
    .clearfix::after {
        display: block;
        clear: both;
        content: "";
    }

    /** Text Align
--------------------------------------------------------------*/

    .text-left {
        text-align: left;
    }

    .text-right {
        text-align: right;
    }

    .text-center {
        text-align: center;
    }

    .text-justify {
        text-align: justify;
    }

    .text-nowrap {
        white-space: nowrap;
    }

    .text-lead {
        font-size: 120%;
        line-height: 1.7em;
    }

    .text-lead strong {
        font-size: 115%;
        font-weight: 500;
    }

    .text-muted {
        color: #777;
    }

    .text-pri {
        color: #ff9697;
    }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0;
    }

    /*------------------------------------------------
/* 2.3 Forms
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    input[type="email"],
    input[type="number"],
    input[type="search"],
    input[type="text"],
    input[type="tel"],
    input[type="url"],
    input[type="password"],
    textarea,
    select {
        height: 38px;
        padding: 6px 10px;
        /* The 6px vertically centers text on FF, ignored by Webkit */
        background-color: #fff;
        border: 1px solid #D1D1D1;
        border-radius: 4px;
        box-shadow: none;
        box-sizing: border-box;
    }

    /* Removes awkward default styles on some inputs for iOS */
    input[type="email"],
    input[type="number"],
    input[type="search"],
    input[type="text"],
    input[type="tel"],
    input[type="url"],
    input[type="password"],
    textarea {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    textarea {
        min-height: 65px;
        padding-top: 6px;
        padding-bottom: 6px;
    }

    input[type="email"]:focus,
    input[type="number"]:focus,
    input[type="search"]:focus,
    input[type="text"]:focus,
    input[type="tel"]:focus,
    input[type="url"]:focus,
    input[type="password"]:focus,
    textarea:focus,
    select:focus {
        border: 1px solid #33C3F0;
        outline: 0;
    }

    label,
    legend {
        display: block;
        margin-bottom: .5rem;
        font-weight: 600;
    }

    fieldset {
        padding: 0;
        border-width: 0;
    }

    input[type="checkbox"],
    input[type="radio"] {
        display: inline;
    }

    label>.label-body {
        display: inline-block;
        margin-left: .5rem;
        font-weight: normal;
    }

    /*------------------------------------------------
/* 2.4 Lists
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    ul {
        list-style: circle inside;
    }

    ol {
        list-style: decimal inside;
    }

    ol,
    ul {
        padding-left: 0;
        margin-top: 0;
    }

    ul ul,
    ul ol,
    ol ol,
    ol ul {
        margin: 1.5rem 0 1.5rem 3rem;
        font-size: 90%;
    }

    li {
        margin-bottom: 1rem;
    }

    /*------------------------------------------------
/* 2.5 Code
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    code {
        padding: .2rem .5rem;
        margin: 0 .2rem;
        font-size: 90%;
        white-space: nowrap;
        background: #F1F1F1;
        border: 1px solid #E1E1E1;
        border-radius: 4px;
    }

    pre>code {
        display: block;
        padding: 1rem 1.5rem;
        white-space: pre;
    }

    /*------------------------------------------------
/* 2.6 Tables
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    th,
    td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #E1E1E1;
    }

    th:first-child,
    td:first-child {
        padding-left: 0;
    }

    th:last-child,
    td:last-child {
        padding-right: 0;
    }

    /*------------------------------------------------
/* 2.7 Spacing
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    button,
    .button {
        margin-bottom: 1rem;
    }

    input,
    textarea,
    select,
    fieldset {
        margin-bottom: 1.5rem;
    }

    pre,
    blockquote,
    dl,
    figure,
    table,
    p,
    ul,
    ol,
    form {
        margin-bottom: 2.5rem;
    }

    /*------------------------------------------------
/* 2.8 Utilities
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    .u-full-width {
        width: 100%;
        box-sizing: border-box;
    }

    .u-max-full-width {
        max-width: 100%;
        box-sizing: border-box;
    }

    .u-pull-right {
        float: right;
    }

    .u-pull-left {
        float: left;
    }

    .list-icon i {
        margin-right: 10px;
    }

    .list-unstyled {
        list-style: none;
    }

    .txt-fx .letter {
        opacity: 0;
    }

    /*------------------------------------------------
/* 2.9 Misc
–––––––––––––––––––––––––––––––––––––––––––––––––– */
    hr {
        margin-top: 3rem;
        margin-bottom: 3.5rem;
        border-width: 0;
        border-top: 1px solid #E1E1E1;
    }

    /*--------------------------------------------------------------
/** 2.10 Buttons
--------------------------------------------------------------*/
    a.btn,
    input[type="button"],
    input[type="submit"],
    input[type="reset"],
    input[type="file"],
    button {
        background-image: none;
        background: var(--accent-color);
        text-decoration: none !important;
        display: inline-block;
        position: relative;
        border: 1px solid transparent;
        border-radius: 0;
        padding: 0.75em 1.5em;
        margin-top: 15px;
        font-size: 15px;
        font-weight: bold;
        line-height: normal;
        text-align: center;
        text-transform: uppercase;
        color: #fff;
        z-index: 1;
        cursor: pointer;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-transition: all 0.3s ease-in;
        transition: all 0.3s ease-in;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .btn:hover,
    .btn:focus,
    input[type="button"]:focus,
    input[type="button"]:hover,
    input[type="submit"]:focus,
    input[type="submit"]:hover,
    input[type="reset"]:focus,
    input[type="reset"]:hover,
    input[type="file"]:focus,
    input[type="file"]:hover,
    button:focus,
    button:hover {
        text-decoration: none;
        outline: 0;
    }

    .light .btn:hover {
        color: #fff;
    }

    .btn:last-child {
        margin-right: 0;
    }

    .btn:active,
    .btn.btn-outline-light:active,
    .btn.btn-outline-dark:active,
    .btn.btn-outline-accent:active,
    input[type="button"]:active,
    input[type="submit"]:active,
    input[type="reset"]:active,
    input[type="file"]:active,
    button:active {
        outline: 0;
        background-image: none;
        -webkit-box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3);
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3);
    }

    .btn.disabled,
    .btn[disabled],
    fieldset[disabled] .btn {
        cursor: not-allowed;
        opacity: 0.65;
        box-shadow: none;
    }

    a.btn.disabled,
    fieldset[disabled] a.btn {
        pointer-events: none;
    }

    /* - Button Sizes
------------------------------------------------------------- */
    .btn.btn-small {
        padding: 0.325em 1.7em;
        font-size: 0.65em;
    }

    .btn.btn-medium {
        padding: 0.5em 1.75em;
        font-size: 0.75em;
    }

    .btn.btn-large {
        padding: 1em 2.5em;
    }

    .btn.btn-xlarge {
        padding: 1.5em 2.7em;
        font-size: 0.9em;
    }

    .btn.btn-image {
        background-color: transparent;
        padding: 0;
        max-height: 50px;
    }

    .btn.btn-image img {
        max-height: 50px;
    }

    /* - Button Shapes
------------------------------------------------------------- */
    .btn.btn-rounded,
    .btn.btn-rounded::after {
        border-radius: 4px;
    }

    .btn.btn-pill,
    .btn.btn-pill::after {
        border-radius: 2em;
    }

    /* button outline */
    .btn.btn-outline-dark,
    .btn.btn-outline-light,
    .btn.btn-outline-accent {
        border: 1px solid #fff;
        background: transparent;
        text-shadow: none;
        box-shadow: none;
    }

    .btn.btn-outline-dark:hover::after,
    .btn.btn-outline-light:hover::after {
        background-color: transparent;
    }

    .btn.btn-outline-dark {
        border-color: #121212;
        color: #121212;
    }

    .btn.btn-outline-dark:hover {
        background: rgba(0, 0, 0, .03);
        background: #121212;
        border-color: #121212;
        color: #fff;
    }

    .btn.btn-outline-accent {
        background: transparent;
        border-color: var(--accent-color);
        color: var(--accent-color);
    }

    .btn.btn-outline-accent:hover {
        border-color: var(--dark-color);
        color: var(--dark-color) !important;
    }

    .btn.btn-outline-light {
        background: transparent;
        border-color: var(--light-text-color);
        color: var(--light-text-color);
    }

    .btn.btn-outline-light:hover {
        border-color: var(--accent-color);
        color: var(--accent-color) !important;
    }

    .btn.btn-full {
        display: block;
        margin: .85em 0;
        width: 100%;
        text-align: center;
    }

    /* button with line */
    .btn-with-line {
        color: #fff;
        position: relative;
    }

    .btn-with-line:after {
        content: "";
        position: absolute;
        top: 8px;
        right: -66px;
        border-bottom: 2px solid #fff;
        width: 50%;
        z-index: 9;
        transition: 0.3s ease-out;
    }

    .btn-with-line:hover {
        color: #fff;
    }

    .btn-with-line:hover:after {
        width: 30%;
        right: -41px;
    }

    /* - Buttons Color Scheme
------------------------------------------------------------- */
    .btn.btn-common {
        background: var(--accent-color);
        color: #fff;
    }

    .btn.btn-common:hover {
        background: #151515;
        color: #fff;
    }

    .btn.btn-accent {
        color: #ffffff;
        background-color: var(--accent-color);
    }

    .btn.btn-accent:hover {
        color: #ffffff !important;
        background-color: #121212;
    }

    .btn.btn-gray,
    .btn.btn-grey {
        background: #9e9e9e;
        color: #fff;
    }

    .btn.btn-black {
        background: #121212;
        color: #fff;
    }

    .btn.btn-black:hover {
        background-color: #797979;
    }

    .btn.btn-white {
        background: #f8f8f8;
        text-shadow: none;
        color: #121212 !important;
    }

    .btn.btn-white:hover {
        background: var(--accent-color);
        text-shadow: none;
    }

    /* - Buttons Aligns
------------------------------------------------------------- */
    .btn-left {
        text-align: left;
        display: block;
    }

    .btn-center {
        text-align: center;
        display: block;
    }

    .btn-right {
        text-align: right;
        display: block;
    }


    /*====================================================================*/
    /* 5. CONTENT ELEMENTS */
    /*====================================================================*/

    /*--------------------------------------------------------------
/** 5.1 General Tabs
--------------------------------------------------------------*/
    .nav {
        display: flex;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }

    .nav-link {
        display: block;
        padding: 0.5rem 1rem;
        text-decoration: none;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .nav-link {
            transition: none;
        }
    }

    .nav-link:hover,
    .nav-link:focus {
        color: var(--accent-color);
    }

    .nav-link.disabled {
        color: #6c757d;
        pointer-events: none;
        cursor: default;
    }

    .nav-tabs {
        border-bottom: 1px solid #dee2e6;
    }

    .nav-tabs .nav-link {
        color: #999;
        padding: 10px 30px;
        margin-bottom: -1px;
        background: none;
        border: 1px solid transparent;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem;
    }

    .nav-tabs .nav-link:hover,
    .nav-tabs .nav-link:focus {
        border-color: #e9ecef #e9ecef #dee2e6;
        isolation: isolate;
    }

    .nav-tabs .nav-link.disabled {
        color: #6c757d;
        background-color: transparent;
        border-color: transparent;
    }

    .nav-tabs .nav-link.active,
    .nav-tabs .nav-item.show .nav-link {
        color: #495057;
        border-color: #dee2e6 #dee2e6 #fff;
    }

    .nav-tabs .dropdown-menu {
        margin-top: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .nav-pills .nav-link {
        background: none;
        border: 0;
        border-radius: 0.25rem;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #0d6efd;
    }

    .nav-fill>.nav-link,
    .nav-fill .nav-item {
        flex: 1 1 auto;
        text-align: center;
    }

    .nav-justified>.nav-link,
    .nav-justified .nav-item {
        flex-basis: 0;
        flex-grow: 1;
        text-align: center;
    }

    .nav-fill .nav-item .nav-link,
    .nav-justified .nav-item .nav-link {
        width: 100%;
    }

    .bootstrap-tabs .tab-content {
        padding: 20px 0;
    }

    .bootstrap-tabs .tab-content>.tab-pane {
        display: none;
    }

    .bootstrap-tabs .tab-content>.active {
        display: block;
    }

    /*--------------------------------------------------------------
/** 5.2 Accordions
--------------------------------------------------------------*/
    .fade {
        transition: opacity 0.15s linear;
    }

    @media (prefers-reduced-motion: reduce) {
        .fade {
            transition: none;
        }
    }

    .fade:not(.show) {
        opacity: 0;
    }

    .collapse:not(.show) {
        display: none;
    }

    .collapsing {
        height: 0;
        overflow: hidden;
        transition: height 0.35s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .collapsing {
            transition: none;
        }
    }

    .accordion-button {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%;
        padding: 1rem 1.25rem;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        background-color: #fff;
        border: 0;
        border-radius: 0;
        box-shadow: none;
        overflow-anchor: none;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, border-radius 0.15s ease;
    }

    @media (prefers-reduced-motion: reduce) {
        .accordion-button {
            transition: none;
        }
    }

    .accordion-button:not(.collapsed) {
        color: var(--accent-color);
        /*box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125);*/
    }

    .accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%230c63e4'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        transform: rotate(-180deg);
    }

    .accordion-button::after {
        flex-shrink: 0;
        width: 1.25rem;
        height: 1.25rem;
        margin-left: auto;
        content: "";
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-size: 1.25rem;
        transition: transform 0.2s ease-in-out;
    }

    @media (prefers-reduced-motion: reduce) {
        .accordion-button::after {
            transition: none;
        }
    }

    .accordion-button:hover {
        z-index: 2;
    }

    .accordion-button:focus {
        z-index: 3;
        outline: 0;
        box-shadow: none;
    }

    .accordion-header {
        margin-bottom: 0;
    }

    .accordion-item {
        background-color: #fff;
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
    }

    .accordion-body {
        padding: 1rem 1.25rem;
    }

    .accordion-flush .accordion-collapse {
        border-width: 0;
    }

    .accordion-flush .accordion-item {
        border-right: 0;
        border-left: 0;
        border-radius: 0;
    }

    .accordion-flush .accordion-item:first-child {
        border-top: 0;
    }

    .accordion-flush .accordion-item:last-child {
        border-bottom: 0;
    }

    .accordion-flush .accordion-item .accordion-button {
        border-radius: 0;
    }

    /*--------------------------------------------------------------
This is main CSS file that contains custom style rules used in this template
--------------------------------------------------------------*/


    /* - Section Padding
--------------------------------------------------------------*/
    .padding-xsmall {
        padding-top: 0.5em;
        padding-bottom: 0.5em;
    }

    .padding-small {
        padding-top: 2em;
        padding-bottom: 2em;
    }

    .padding-medium {
        padding-top: 4em;
        padding-bottom: 4em;
    }

    .padding-large {
        padding-top: 7em;
        padding-bottom: 7em;
    }

    .padding-xlarge {
        padding-top: 9.5em;
        padding-bottom: 9.5em;
    }

    .padding-2xlarge {
        padding-top: 15em;
        padding-bottom: 15em;
    }

    /* no padding */
    .no-padding-top {
        padding-top: 0 !important;
    }

    .no-padding-bottom {
        padding-bottom: 0 !important;
    }

    .no-gutter {
        padding: 0 !important;
    }

    /* no padding and margin */
    .no-padding {
        padding: 0;
    }

    .no-margin {
        margin: 0;
    }

    /* - Section margin
--------------------------------------------------------------*/
    .margin-small {
        margin-top: 3em;
        margin-bottom: 3em;
    }

    .margin-medium {
        margin-top: 4.5em;
        margin-bottom: 4.5em;
    }

    .margin-large {
        margin-top: 6em;
        margin-bottom: 6em;
    }

    .margin-xlarge {
        margin-top: 7.5em;
        margin-bottom: 7.5em;
    }

    @media only screen and (max-width: 768px) {

        .margin-small,
        .margin-medium,
        .margin-large,
        .margin-xlarge {
            margin-top: 1em;
            margin-bottom: 1em;
        }
    }

    /* - Button
------------------------------------------------------------- */

    button {
        font-size: 1em;
        font-weight: 600;
        border: none;
        height: 65px;
        cursor: pointer;
        text-transform: uppercase;
    }

    .btn-wrap {
        text-transform: capitalize;
    }

    .btn-wrap a {
        text-decoration: none;
        font-weight: 600;
    }

    .btn-wrap a:hover {
        color: #74642F;
    }

    .btn-normal {
        color: #fff;
    }

    .btn-accent {
        color: #111;
    }

    .btn-submit {
        background: #fff;
        color: #2f2f2f;
    }

    .btn-submit:hover {
        background-color: #c5a992;
        color: #fff;
    }

    .btn-accent-arrow {
        color: #111;
    }

    .btn-wrap i.icon {
        transition: 0.5s ease-out;
        font-size: 9px;
        padding-left: 10px;
    }

    .btn-wrap:hover i.icon {
        padding-left: 20px;
    }

    .btn-subscribe {
        width: 30%;
        color: #111;
        background: transparent;
        margin: 0;
        height: max-content;
    }

    .btn-subscribe span {
        transition: 0.5s ease-out;
        padding-right: 5px;
        opacity: 1;
    }

    .btn-subscribe:hover span {
        padding-right: 10px;
        opacity: 0.5;
    }

    /*--- Image hover Effect
-----------------------------------------------*/
    .image-hvr-effect {
        display: flex;
        overflow: hidden;
    }

    .image-hvr-effect img.post-image {
        transform: scale(1);
        will-change: transform;
        transition: transform 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        z-index: 0;
    }

    .image-hvr-effect:hover img.post-image {
        transform: scale(1.1);
    }


    /*--- Pattern Overlay
-----------------------------------------------*/
    .pattern-overlay {
        background-image: url(images/pattern1.png);
        background-repeat: no-repeat;
        background-position: top right;
    }

    .leaf-pattern-overlay {
        background-image: url(images/leaf.png);
        background-repeat: no-repeat;
        background-position: bottom left;
    }

    .corner-pattern-overlay {
        background-image: url(images/pattern2.png);
        background-repeat: no-repeat;
        background-position: top right;
    }

    /*--- Page Title
-----------------------------------------------*/
    .page-title {
        font-size: 4.5em;
        margin-top: 2em;
    }

    @media screen and (max-width: 768px) {
        .page-title {
            font-size: 2.5em;
            margin-top: 1em;
        }
    }

    /*--- Section Title
-----------------------------------------------*/
    .section-header {
        position: relative;
    }

    .section-title {
        font-size: 3em;
        font-weight: 500;
        line-height: 1;
        position: relative;
        margin-bottom: 75px;
    }

    .section-title.divider {
        width: 100%;
    }

    .section-title.divider:after {
        content: "";
        border-bottom: 3px solid #74642F;
        position: absolute;
        right: 0;
        bottom: -16px;
        left: 0;
        width: 50px;
    }

    .section-header .section-title:before,
    .section-header .section-title:after {
        content: "";
        border-bottom: 1px solid #E0E0E0;
        position: absolute;
        top: 30px;
        width: 25%;
        align-items: center;
    }

    .section-header .section-title:before {
        left: 3px;
    }

    .section-header .section-title:after {
        right: 3px;
    }

    .section-header .title span {
        font-size: 14px;
        color: #afafaf;
        text-transform: uppercase;
    }


    @media screen and (max-width: 1366px) {

        .section-header .section-title:before,
        .section-header .section-title:after {
            width: 30%;
        }
    }

    @media screen and (max-width: 999px) {

        .section-header .section-title:before,
        .section-header .section-title:after {
            width: 25%;
        }
    }

    @media screen and (max-width: 768px) {
        .section-title {
            font-size: 2em;
        }

        .section-header .section-title:before,
        .section-header .section-title:after {
            top: 60px;
            width: 100%;
        }
    }

    /* -- Image Dimension
--------------------------------------------------------------*/
    img.post-image {
        width: 100%;
        height: 328px;
        object-fit: cover;
    }

    /* -- Slick Slide
--------------------------------------------------------------*/
    .slick-dots {
        bottom: -100px;
    }

    .slick-dots li {
        width: 10px;
        height: 10px;
        background: #D7D5CC;
        color: #D7D5CC;
        border-radius: 50%;
    }

    .slick-dots .slick-active {
        color: #74642F;
        background: #74642F;
        border: 1px solid #D7D5CC;
        outline: 1px solid #D7d5cc;
    }

    /* -- Top Menu Part
--------------------------------------------------------------*/
    .top-content {
        padding: 20px 0;
        border-bottom: 1px solid #E0E0E0;
    }

    .social-links ul {
        list-style: none;
        display: flex;
        width: 15%;
    }

    .social-links a {
        color: var(--dark-text-color);
        text-decoration: none;
    }

    .top-content li {
        padding-right: 30px;
    }

    .top-content li:last-child {
        padding-right: 0;
    }

    .top-content a {
        color: #555;
        text-decoration: none;
    }

    .top-content .right-element {
        text-align: right;
    }

    .top-content .right-element .for-buy {
        margin-right: 40px;
    }

    /* - Search Form hover Effects
------------------------------------------------------------- */
    #header-wrap .action-menu {
        display: inline-block;
        align-items: baseline;
    }

    #header-wrap .action-menu span.opennav.openicon {
        cursor: pointer;
    }

    .action-menu .icon {
        font-size: 18px;
        font-weight: 800;
    }

    .action-menu .search-bar {
        overflow: hidden;
    }

    .action-menu .search-bar,
    .action-menu .open-icon-wrap {
        width: 40px;
        height: 40px;
        background: #efeee8;
        border-radius: 40px;
        margin-right: 25px;
        display: flex;
        justify-content: right;
        align-items: center;
        cursor: pointer;
        transition: 0.3s width cubic-bezier(0, 0.75, 0.49, 0.99);
    }

    #header-wrap .search-button {
        order: 1;
        padding-right: 10px;
        padding-left: 10px;
        text-decoration: none;
        color: var(--body-text-color);
    }

    #header-wrap.show .search-bar {
        width: 300px;
    }

    #header-wrap .search-bar form {
        margin: 0;
    }

    #header-wrap .search-box .search-input {
        width: 250px;
        border: 0;
        margin-bottom: 0;
        font-weight: 300;
        padding-left: 20px;
        background: #efeee8;
    }

    .action-menu .side-nav-bar .menu-btn a,
    .action-menu .searchbar a {
        color: #000;
        text-decoration: none;
        line-height: 2.2;
    }

    .action-menu .icon.icon-menu-btn:hover {
        color: #fff;
        text-decoration: none;
    }

    .action-menu .menu-btn a {
        color: #07051a;
        text-decoration: none;
    }

    .action-menu .icon.icon-menu-btn:hover {
        color: var(--accent-color);
        text-decoration: none;
    }

    @media screen and (max-width: 768px) {
        .action-menu .search-bar {
            margin-top: 20px;
            width: 100%;
        }
    }

    /* - Main Navigation
------------------------------------------------------------- */
    #header {
        padding: 40px 0;
    }

    #header .menu-list a {
        text-transform: uppercase;
        font-weight: 500;
        letter-spacing: 0.12em;
    }

    /*----- Billboard
--------------------------------------------------------------*/
    #billboard .main-slider {
        padding: 120px 0;
    }

    .main-slider .slider-item {
        display: flex;
        width: 100%;
        justify-content: center;
    }

    .main-slider .banner-content {
        width: 35%;
        margin-top: 90px;
        margin-right: 175px;
    }

    .banner-content h2.banner-title {
        font-size: 4.5em;
        font-weight: 500;
        color: #222;
    }

    .banner-content p {
        margin: 0 0 60px 0;
    }

    #billboard .slick-dots {
        left: 200px;
        bottom: 110px;
        width: 10%;
        text-align: inherit;
    }

    #billboard button.slick-arrow {
        background: transparent;
        border: 1px solid #E5E3DA;
        padding: initial;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        position: absolute;
        top: 270px;
        z-index: 5;
        cursor: pointer;
    }

    #billboard button.slick-arrow:hover {
        border: 1px solid #74642F;
        background-color: #E5E3DA;
    }

    #billboard button.prev.slick-arrow {
        left: 110px;
    }

    #billboard button.next.slick-arrow {
        right: 110px;
    }

    #billboard .slick-arrow i.icon {
        color: #8C8C8C;
    }

    @media screen and (max-width: 1366px) {
        #billboard button.prev.slick-arrow {
            left: 0;
        }

        #billboard button.next.slick-arrow {
            right: 0;
        }
    }

    @media screen and (max-width: 999px) {
        .banner-content h2.banner-title {
            font-size: 3.5em;
        }

        #billboard .main-slider {
            margin: 70px 0;
            padding: 0;
        }

        .main-slider .slider-item {
            flex-wrap: wrap;
            text-align: center;
            flex-direction: column-reverse;
        }

        .main-slider .banner-content {
            width: 100%;
            margin-top: 60px;
            margin-right: 0;
            margin-bottom: 80px;
        }

        #billboard .slick-dots {
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
        }
    }

    /*----- Cient-holder Section
--------------------------------------------------------------*/
    #client-holder {
        background: #EDEBE4;
        padding: 105px 0;
        margin-bottom: 180px;
    }

    #client-holder .logo-wrap {
        max-width: 1000px;
        margin: auto;
    }

    /*----- Featured Books Section
--------------------------------------------------------------*/
    #special-offer,
    #popular-books,
    #featured-books {
        margin-bottom: 180px;
    }

    #featured-books .product-list {
        border-bottom: 1px solid #E0E0E0;
        margin-bottom: 30px;
    }

    /*----- Best Selling Section Section
--------------------------------------------------------------*/
    #best-selling {
        background: #EDEBE4;
        padding: 140px 0;
        margin-bottom: 180px;
    }

    /*#best-selling .container {
    max-width: 1000px;
}*/
    #best-selling .products-thumb {
        /*width: 50%;*/
        margin-right: 60px;
        box-shadow: 2px 6px 34px 4px rgba(63, 63, 63, 0.08);
    }

    #best-selling .product-entry {
        /*width: 50%;*/
        margin-top: 80px;
    }

    #best-selling .product-entry h3.item-title {
        font-size: 1.8em;
        font-weight: 100;
        margin-top: 15px;
    }

    #best-selling .product-entry .item-price {
        font-size: 1.5em;
        color: #74642F;
        margin-bottom: 40px;
    }

    @media screen and (max-width: 768px) {
        #best-selling .products-thumb {
            margin: 0;
        }
    }

    /*----- Popular Books Section
--------------------------------------------------------------*/
    .tab-content {
        position: relative;
    }

    [data-tab-content] {
        opacity: 0;
        visibility: hidden;
        height: 0;
        overflow: hidden;
    }

    .active[data-tab-content] {
        opacity: 1;
        visibility: visible;
        height: auto;
    }

    .tabs {
        display: flex;
        flex-wrap: wrap;
        margin: 55px 0;
        justify-content: center;
        list-style: none;
    }

    .tabs .tab {
        font-weight: 600;
        color: #999;
        margin-right: 50px;
        cursor: pointer;
    }

    .tabs .tab.active,
    .tabs .tab:hover {
        color: #111;
        border-bottom: 2px solid #9A884C;
    }

    img.books-image {
        /*height: 290px;*/
        margin-right: 10px;
        margin-bottom: 20px;
        object-fit: cover;
    }

    /*----- Quotation Section
--------------------------------------------------------------*/
    #quotation .section-title.divider,
    #quotation .section-title.divider:after {
        margin: 0 auto;
    }

    #quotation blockquote {
        width: 40%;
        margin: 0 auto;
        margin-bottom: 180px;
    }

    #quotation q {
        display: block;
        font-size: 1.6em;
        padding: 40px 0;
    }

    #quotation .author-name {
        font-family: "Prata", Georgia, serif;
        font-size: 1.4em;
    }

    @media screen and (max-width: 768px) {
        #quotation blockquote {
            width: 80%;
        }
    }

    /*
@media screen and (max-width: 1320px) {
  #quotation blockquote {
      width: 60%;
  }
}
*/
    /*----- Special Offer Section
--------------------------------------------------------------*/
    #special-offer .section-header {
        background: #EDEBE4;
        padding: 140px 0 220px;
        margin-bottom: -141px;
        z-index: -1;
    }

    #special-offer .section-title {
        width: 70%;
        margin: 0 auto;
    }

    span.prev-price {
        color: #999;
        font-size: 0.8em;
        padding-right: 10px;
        text-decoration: line-through;
    }


    /*----- Subscribe Section
--------------------------------------------------------------*/
    #subscribe {
        background: #EDEBE4;
        padding: 140px 0;
        margin-bottom: 180px;
    }

    #subscribe .subscribe-content {
        margin-left: 15px;
    }

    #subscribe .subscribe-content input[type="text"] {
        background: none;
        border: none;
        width: 252px;
    }

    #subscribe form#form {
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #6F6F6F;
    }

    ::-webkit-input-placeholder {
        color: #7A7A7A;
        /* WebKit browsers */
    }

    :-ms-input-placeholder {
        color: #7A7A7A;
        /* Internet Explorer 10+ */
    }


    @media screen and (max-width: 1200px) {
        #subscribe form#form {
            width: 90%;
        }

        #subscribe .subscribe-content input[type="text"] {
            width: 100%;
        }

        #subscribe .btn-subscribe {
            width: 30%;
        }
    }

    @media screen and (max-width: 980px) {

        /*#subscribe .grid {
      flex-wrap: wrap;
      justify-content: center;
  }*/
        #subscribe .section-title {
            width: 100%;
            margin: 0 auto 50px;
        }

        #subscribe p {
            width: 100%;
            text-align: left;
            margin: 30px auto;
        }

        #subscribe form#form,
        #subscribe .subscribe-content {
            width: 100%;
        }

        #subscribe form#form {
            margin: 0 auto;
        }

        #subscribe .subscribe-content {
            margin-left: 0;
        }

        #subscribe {
            margin-bottom: 90px;
        }

    }

    /*
@media screen and (max-width: 780px) {
  #subscribe form#form {
      width: 90%;
  }
  #subscribe .subscribe-content {
      width: 90%;
  }
}*/


    /*----- Latest Blog Section
--------------------------------------------------------------*/
    #latest-blog {
        margin-bottom: 180px;
    }

    #latest-blog article.column {
        margin-bottom: 60px;
    }

    #latest-blog figure {
        margin-bottom: 30px;
    }

    #latest-blog .meta-date {
        font-family: "Prata", Georgia, serif;
        color: #74642F;
        padding-bottom: 20px;
    }

    #latest-blog h3 {
        font-size: 1.7em;
        font-weight: 500;
        margin-top: 0;
    }

    #latest-blog .links-element {
        display: flex;
        justify-content: space-between;
        border-top: 1px solid #C8C8C8;
        padding-top: 20px;
    }

    #latest-blog .categories {
        text-transform: uppercase;
    }

    .social-links li {
        padding-right: 20px;
    }

    @media screen and (max-width: 999px) {
        #latest-blog h3 {
            font-size: 1.4em;
        }
    }

    @media screen and (max-width: 767px) {
        #latest-blog .grid {
            flex-wrap: wrap;
        }

        #latest-blog article.column {
            width: 100%;
        }
    }

    /*----- Contact Section
--------------------------------------------------------------*/
    #download-app {
        background: #EDEBE4;
        padding: 140px 0;
        margin-bottom: 180px;
        overflow: hidden;
        z-index: 0;
    }

    /*#download-app .container {
    max-width: 1040px;
}*/
    /*#download-app figure {
    width: 40%;
    z-index: 0;
}*/
    #download-app .app-info {
        padding-top: 100px;
        margin-left: 50px;
    }

    #download-app .app-info p {
        margin-bottom: 50px;
    }

    @media screen and (max-width: 820px) {
        #download-app .grid {
            flex-wrap: wrap;
        }

        #download-app figure {
            margin: 0 auto;
        }

        #download-app .app-info {
            width: 90%;
            margin: 0 auto;
            padding-top: 80px;
        }
    }

    /*----- Footer Section
--------------------------------------------------------------*/
    footer#footer {
        padding-bottom: 80px;
        margin-top: 100px;
        margin-bottom: 60px;
        border-bottom: 1px solid #E0E0E0;
    }

    #footer .footer-item {
        margin-right: 100px;
    }

    #footer .footer-item img.footer-logo {
        margin-bottom: 40px;
    }

    #footer .footer-item p {
        width: 80%;
    }

    #footer .footer-menu {
        margin-right: 40px;
        margin-bottom: 40px;
    }

    #footer .footer-menu ul {
        list-style: none;
    }

    #footer .footer-menu ul a {
        color: var(--dark-text-color);
        text-decoration: none;
    }

    #footer .footer-menu:last-child {
        margin-right: 0;
    }

    .footer-menu h5 {
        font-size: 1.5em;
        font-weight: 500;
        margin-top: 0;
        margin-bottom: 40px;
        text-transform: capitalize;
    }

    @media screen and (max-width: 768px) {
        #footer .footer-item {
            margin-right: 0;
        }
    }

    /* Shop page */
    .products-grid {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .product-style {
        position: relative;
        margin: 0 15px 25px;
    }

    .product-style figcaption p {
        margin-bottom: 20px;
    }

    .products-grid .product-style {
        width: 25%;
    }

    .products-grid.col-5 .product-style {
        width: 20%;
    }

    .products-grid.col-4 .product-style {
        width: 25%;
    }

    .products-grid.col-3 .product-style {
        width: 33.33%;
    }

    .product-style img.product-item {
        background: #EFEEE8;
        border: 1px solid #EAE8DF;
        padding: 15%;
        cursor: pointer;
        width: 100%;
    }

    .product-style button.add-to-cart {
        background: #000;
        color: #fff;
        width: 70%;
        text-transform: uppercase;
        text-align: center;
        line-height: 3;
        position: absolute;
        bottom: 300px;
        left: 40px;
        z-index: 9;
        opacity: 0;
        transition: 0.5s ease-out;
    }

    .product-style:hover button.add-to-cart {
        bottom: 380px;
        opacity: 1;
    }

    .product-style figcaption {
        margin-top: 30px;
        margin-bottom: 30px;
        text-align: center;
    }

    .product-style figcaption>h3 {
        font-size: 1.4em;
        font-weight: 500;
        color: #74642F;
        margin: 0;
    }

    .product-style .item-price {
        color: #74642F;
        font-size: 1.3em;
    }

    @media screen and (max-width: 768px) {
        .products-grid .product-style {
            width: 45%;
        }

        .product-style img.product-item {
            /*height: 550px;*/
            object-fit: contain;
            margin: 0 auto;
        }

        .products-grid.col-3 .product-style,
        .products-grid.col-4 .product-style,
        .products-grid.col-5 .product-style {
            width: 100%;
        }
    }

    @media screen and (max-width: 575px) {
        .products-grid .product-style {
            width: 100%;
        }
    }
</style>
