<?php

include './admin/conn.php';

$sql = "SELECT `view` FROM `setting` where `value`='teams_display'";
$result = $conn->query($sql);
$team_view = mysqli_fetch_assoc($result);

 ?>
<!DOCTYPE html>
<html>
<!-- Mirrored from www.azstudio.agency/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jul 2024 14:51:49 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <!--metatextblock-->
    <title>Nezdeck | Software company and creative agency</title>
    <meta name="description"
        content="Nezdeck is a premier software company delivering innovative tech solutions, custom software development, and IT consulting to empower businesses and drive success." />
    <meta property="og:url" content="index.html" />
    <meta property="og:title" content="Nezdeck | Software company and creative agency" />
    <meta property="og:description"
        content="Nezdeck is a premier software company delivering innovative tech solutions, custom software development, and IT consulting to empower businesses and drive success." />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="./static.tildacdn.net/tild3131-3836-4635-a461-356237623338/photo.jpg" />
    <link rel="canonical" href="index.html"><!--/metatextblock-->
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="dns-prefetch" href="https://ws.tildacdn.com/">
    <link rel="dns-prefetch" href="https://static.tildacdn.net/">
    <link rel="shortcut icon" href="images/fav.jpg"
        type="image/x-icon" />
    <link rel="apple-touch-icon" href="./static.tildacdn.net/tild3733-6430-4531-b234-656161383936/photo.png">
    <link rel="apple-touch-icon" sizes="76x76"
        href="./static.tildacdn.net/tild3733-6430-4531-b234-656161383936/photo.png">
    <link rel="apple-touch-icon" sizes="152x152"
        href="./static.tildacdn.net/tild3733-6430-4531-b234-656161383936/photo.png">
    <link rel="apple-touch-startup-image" href="./static.tildacdn.net/tild3733-6430-4531-b234-656161383936/photo.png">
    <!-- Assets -->
    <script src="./neo.tildacdn.com/js/tilda-fallback-1.0.min.js" async charset="utf-8"></script>
    <link rel="stylesheet" href="./static.tildacdn.net/css/tilda-grid-3.0.min.css" type="text/css" media="all"
        onerror="this.loaderr='y';" />
    <link rel="stylesheet"
        href="./static.tildacdn.net/ws/project6225424/tilda-blocks-page33953413.min646c.css?t=1720781544"
        type="text/css" media="all" onerror="this.loaderr='y';" />
    <link rel="stylesheet" href="./static.tildacdn.net/css/tilda-animation-2.0.min.css" type="text/css" media="all"
        onerror="this.loaderr='y';" />
    <link rel="stylesheet" href="./static.tildacdn.net/css/highlight.min.css" type="text/css" media="all"
        onerror="this.loaderr='y';" />
    <link rel="stylesheet" href="./static.tildacdn.net/css/tilda-popup-1.1.min.css" type="text/css" media="print"
        onload="this.media='all';" onerror="this.loaderr='y';" /><noscript>
        <link rel="stylesheet" href="./static.tildacdn.net/css/tilda-popup-1.1.min.css" type="text/css" media="all" />
    </noscript>
    <link rel="stylesheet" href="./static.tildacdn.net/css/tilda-slds-1.4.min.css" type="text/css" media="print"
        onload="this.media='all';" onerror="this.loaderr='y';" /><noscript>
        <link rel="stylesheet" href="./static.tildacdn.net/css/tilda-slds-1.4.min.css" type="text/css" media="all" />
    </noscript>
    <link rel="stylesheet" href="./static.tildacdn.net/css/tilda-catalog-1.1.min.css" type="text/css" media="print"
        onload="this.media='all';" onerror="this.loaderr='y';" /><noscript>
        <link rel="stylesheet" href="./static.tildacdn.net/css/tilda-catalog-1.1.min.css" type="text/css"
            media="all" />
    </noscript>
    <link rel="stylesheet" href="./static.tildacdn.net/css/tilda-forms-1.0.min.css" type="text/css" media="all"
        onerror="this.loaderr='y';" />
    <link rel="stylesheet" href="./static.tildacdn.net/css/tilda-feed-1.0.min.css" type="text/css" media="print"
        onload="this.media='all';" onerror="this.loaderr='y';" /><noscript>
        <link rel="stylesheet" href="./static.tildacdn.net/css/tilda-feed-1.0.min.css" type="text/css" media="all" />
    </noscript>
    <link rel="stylesheet" href="./static.tildacdn.net/css/tilda-menusub-1.0.min.css" type="text/css" media="print"
        onload="this.media='all';" onerror="this.loaderr='y';" /><noscript>
        <link rel="stylesheet" href="./static.tildacdn.net/css/tilda-menusub-1.0.min.css" type="text/css"
            media="all" />
    </noscript>
    <link rel="stylesheet" href="./static.tildacdn.net/css/tilda-zoom-2.0.min.css" type="text/css" media="print"
        onload="this.media='all';" onerror="this.loaderr='y';" /><noscript>
        <link rel="stylesheet" href="./static.tildacdn.net/css/tilda-zoom-2.0.min.css" type="text/css" media="all" />
    </noscript>
    <!-- <link rel="stylesheet" type="text/css" href="custom646c.css?t=1720781544"> -->
    <script nomodule src="./static.tildacdn.net/js/tilda-polyfill-1.0.min.js" charset="utf-8"></script>
    <script
        type="text/javascript">function t_onReady(func) {
                if (document.readyState != 'loading') {
                    func();
                } else {
                    document.addEventListener('DOMContentLoaded', func);
                }
            }
            function t_onFuncLoad(funcName, okFunc, time) {
                if (typeof window[funcName] === 'function') {
                    okFunc();
                } else {
                    setTimeout(function () {
                        t_onFuncLoad(funcName, okFunc, time);
                    }, (time || 100));
                }
            } function t_throttle(fn, threshhold, scope) { return function () { fn.apply(scope || this, arguments); }; } function t396_initialScale(t) { t = document.getElementById("rec" + t); if (t) { t = t.querySelector(".t396__artboard"); if (t) { var e, r = document.documentElement.clientWidth, a = []; if (l = t.getAttribute("data-artboard-screens")) for (var l = l.split(","), i = 0; i < l.length; i++)a[i] = parseInt(l[i], 10); else a = [320, 480, 640, 960, 1200]; for (i = 0; i < a.length; i++) { var o = a[i]; o <= r && (e = o) } var n = "edit" === window.allrecords.getAttribute("data-tilda-mode"), d = "center" === t396_getFieldValue(t, "valign", e, a), u = "grid" === t396_getFieldValue(t, "upscale", e, a), c = t396_getFieldValue(t, "height_vh", e, a), g = t396_getFieldValue(t, "height", e, a), s = !!window.opr && !!window.opr.addons || !!window.opera || -1 !== navigator.userAgent.indexOf("OPR/index.html"); if (!n && d && !u && !c && g && !s) { for (var _ = parseFloat((r / e).toFixed(3)), f = [t, t.querySelector(".t396__carrier"), t.querySelector(".t396__filter")], i = 0; i < f.length; i++)f[i].style.height = Math.floor(parseInt(g, 10) * _) + "px"; t396_scaleInitial__getElementsToScale(t).forEach(function (t) { t.style.zoom = _ }) } } } } function t396_scaleInitial__getElementsToScale(t) { t = Array.prototype.slice.call(t.querySelectorAll(".t396__elem")); if (!t.length) return []; var e = []; return (t = t.filter(function (t) { t = t.closest('.t396__group[data-group-type-value="physical"]'); return !t || (-1 === e.indexOf(t) && e.push(t), !1) })).concat(e) } function t396_getFieldValue(t, e, r, a) { var l = a[a.length - 1], i = r === l ? t.getAttribute("data-artboard-" + e) : t.getAttribute("data-artboard-" + e + "-res-" + r); if (!i) for (var o = 0; o < a.length; o++) { var n = a[o]; if (!(n <= r) && (i = n === l ? t.getAttribute("data-artboard-" + e) : t.getAttribute("data-artboard-" + e + "-res-" + n))) break } return i }</script>
    <script src="./static.tildacdn.net/js/jquery-1.10.2.min.js" charset="utf-8" onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-scripts-3.0.min.js" charset="utf-8" defer
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/ws/project6225424/tilda-blocks-page33953413.min646c.js?t=1720781544"
        charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-lazyload-1.0.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-animation-2.0.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-zero-1.1.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-submenublocks-1.0.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/highlight.min.js" charset="utf-8" onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/hammer.min.js" charset="utf-8" async onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-slds-1.4.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-products-1.0.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-catalog-1.1.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-text-clamp.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-feed-1.0.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-popup-1.0.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-forms-1.0.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-menusub-1.0.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-menu-1.0.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-zero-forms-1.0.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-animation-sbs-1.0.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-zoom-2.0.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-zero-scale-1.0.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-zero-fixed-1.0.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-skiplink-1.0.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script src="./static.tildacdn.net/js/tilda-events-1.0.min.js" charset="utf-8" async
        onerror="this.loaderr='y';"></script>
    <script type="text/javascript">window.dataLayer = window.dataLayer || [];</script>
    <script type="text/javascript">(function () {
            if ((/bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i.test(navigator.userAgent)) === false && typeof (sessionStorage) != 'undefined' && sessionStorage.getItem('visited') !== 'y' && document.visibilityState) {
                var style = document.createElement('style');
                style.type = 'text/css';
                style.innerHTML = '@media screen and (min-width: 980px) {.t-records {opacity: 0;}.t-records_animated {-webkit-transition: opacity ease-in-out .2s;-moz-transition: opacity ease-in-out .2s;-o-transition: opacity ease-in-out .2s;transition: opacity ease-in-out .2s;}.t-records.t-records_visible {opacity: 1;}}';
                document.getElementsByTagName('head')[0].appendChild(style);
                function t_setvisRecs() {
                    var alr = document.querySelectorAll('.t-records');
                    Array.prototype.forEach.call(alr, function (el) {
                        el.classList.add("t-records_animated");
                    });
                    setTimeout(function () {
                        Array.prototype.forEach.call(alr, function (el) {
                            el.classList.add("t-records_visible");
                        });
                        sessionStorage.setItem("visited", "y");
                    }, 400);
                }
                document.addEventListener('DOMContentLoaded', t_setvisRecs);
            }
        })();</script>
</head>

<body class="t-body" style="margin:0;"><!--allrecords-->
    <div id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="6225424"
        data-tilda-page-id="33953413" data-tilda-page-alias="expo"
        data-tilda-formskey="94726ef7d7f0519bc3e1e761a6225424" data-tilda-lazy="yes" data-tilda-root-zone="one">
        <!--header-->
        <header id="t-header" class="t-records" data-hook="blocks-collection-content-node"
            data-tilda-project-id="6225424" data-tilda-page-id="31477859" data-tilda-page-alias="menu"
            data-tilda-formskey="94726ef7d7f0519bc3e1e761a6225424" data-tilda-lazy="yes" data-tilda-root-zone="one">
            <div id="rec669688132" class="r t-rec" style=" " data-animationappear="off" data-record-type="360">
                <!-- T360 -->
                <style>
                    .t-records {
                        opacity: 0;
                    }

                    .t-records_animated {
                        -webkit-transition: opacity ease-in-out 1.2s;
                        -moz-transition: opacity ease-in-out 1.2s;
                        -o-transition: opacity ease-in-out 1.2s;
                        transition: opacity ease-in-out 1.2s;
                    }

                    .t-records.t-records_visible,
                    .t-records .t-records {
                        opacity: 1;
                    }
                </style>
                <script>t_onReady(function () {
                        var allRecords = document.querySelector('.t-records');
                        window.addEventListener('pageshow', function (event) {
                            if (event.persisted) {
                                allRecords.classList.add('t-records_visible');
                            }
                        });
                        var rec = document.querySelector('#rec669688132');
                        if (!rec) return;
                        rec.setAttribute('data-animationappear', 'off');
                        rec.style.opacity = '1';
                        allRecords.classList.add('t-records_animated');
                        setTimeout(function () {
                            allRecords.classList.add('t-records_visible');
                        }, 200);
                    });</script>
                <script>t_onReady(function () {
                        var selects = 'button:not(.t-submit):not(.t835__btn_next):not(.t835__btn_prev):not(.t835__btn_result):not(.t862__btn_next):not(.t862__btn_prev):not(.t862__btn_result):not(.t854__news-btn):not(.t862__btn_next),' +
                            'a:not([href*="#"]):not(.carousel-control):not(.t-carousel__control):not(.t807__btn_reply):not([href^="#price"]):not([href^="javascript"]):not([href^="mailto"]):not([href^="tel"]):not([href^="link_sub"]):not(.js-feed-btn-show-more):not(.t367__opener):not([href^="https://www.dropbox.com/"])';
                        var elements = document.querySelectorAll(selects);
                        Array.prototype.forEach.call(elements, function (element) {
                            if (element.getAttribute('data-menu-submenu-hook')) return;
                            element.addEventListener('click', function (event) {
                                var goTo = this.getAttribute('href');
                                if (goTo !== null) {
                                    var ctrl = event.ctrlKey;
                                    var cmd = event.metaKey && navigator.platform.indexOf('Mac') !== -1;
                                    if (!ctrl && !cmd) {
                                        var target = this.getAttribute('target');
                                        if (target !== '_blank') {
                                            event.preventDefault();
                                            var allRecords = document.querySelector('.t-records');
                                            if (allRecords) {
                                                allRecords.classList.remove('t-records_visible');
                                            }
                                            setTimeout(function () {
                                                window.location = goTo;
                                            }, 500);
                                        }
                                    }
                                }
                            });
                        });
                    });</script>
            </div>
            <div id="rec669688426" class="r t-rec" style=" " data-animationappear="off" data-record-type="674">
                <!-- T674 -->
                <div class="t674">
                    <style>
                        body {
                            background-color: #262626;
                        }

                        #allrecords {
                            background-color: transparent !important;
                        }
                    </style>
                </div>
                <script>(function () { var isSafariOnIOS = !!navigator.userAgent.match(/iP(hone|od|ad)/) && navigator.userAgent.match(/WebKit/i) && !navigator.userAgent.match(/CriOS/i) && !navigator.userAgent.match(/FxiOS/i); if (!isSafariOnIOS) return; var recid = 'rec669688426'; var rec = document.getElementById(recid); if (!rec) return; rec.classList.add('safari'); })();</script>
            </div>
            <div id="rec509143764" class="r t-rec" style=" " data-animationappear="off" data-record-type="396">
                <!-- T396 -->
                <style>
                    #rec509143764 .t396__artboard {
                        position: fixed;
                        width: 100%;
                        left: 0;
                        top: 0;
                        transform: translateY(-100%);
                        transition: transform 0.15s;
                        z-index: 990;
                    }

                    #rec509143764 .t396__artboard {
                        height: 60px;
                        background-color: #262626;
                    }

                    #rec509143764 .t396__filter {
                        height: 60px;
                    }

                    #rec509143764 .t396__carrier {
                        height: 60px;
                        background-position: center center;
                        background-attachment: scroll;
                        background-size: cover;
                        background-repeat: no-repeat;
                    }

                    @media screen and (max-width: 1199px) {

                        #rec509143764 .t396__artboard,
                        #rec509143764 .t396__filter,
                        #rec509143764 .t396__carrier {}

                        #rec509143764 .t396__filter {}

                        #rec509143764 .t396__carrier {
                            background-attachment: scroll;
                        }
                    }

                    @media screen and (max-width: 959px) {

                        #rec509143764 .t396__artboard,
                        #rec509143764 .t396__filter,
                        #rec509143764 .t396__carrier {
                            height: 58px;
                        }

                        #rec509143764 .t396__filter {}

                        #rec509143764 .t396__carrier {
                            background-attachment: scroll;
                        }
                    }

                    @media screen and (max-width: 639px) {

                        #rec509143764 .t396__artboard,
                        #rec509143764 .t396__filter,
                        #rec509143764 .t396__carrier {
                            height: 48px;
                        }

                        #rec509143764 .t396__filter {}

                        #rec509143764 .t396__carrier {
                            background-attachment: scroll;
                        }
                    }

                    @media screen and (max-width: 479px) {

                        #rec509143764 .t396__artboard,
                        #rec509143764 .t396__filter,
                        #rec509143764 .t396__carrier {
                            height: 43px;
                        }

                        #rec509143764 .t396__artboard {
                            background-color: #262626;
                        }

                        #rec509143764 .t396__filter {}

                        #rec509143764 .t396__carrier {
                            background-position: center center;
                            background-attachment: scroll;
                        }
                    }

                    #rec509143764 .tn-elem[data-elem-id="1664813555412"] {
                        color: #ffffff;
                        text-align: center;
                        z-index: 2;
                        top: 16px;
                        left: calc(50% - 88px + 0px);
                        width: 176px;
                    }

                    #rec509143764 .tn-elem[data-elem-id="1664813555412"] .tn-atom {
                        color: #ffffff;
                        font-size: 21px;
                        font-family: 'Rooftop', Arial, sans-serif;
                        font-weight: 300;
                        opacity: 0.4;
                        background-position: center center;
                        border-color: transparent;
                        border-style: solid;
                    }

                    @media screen and (max-width: 1199px) {
                        #rec509143764 .tn-elem[data-elem-id="1664813555412"] {
                            top: 16px;
                            left: calc(50% - 88px + 1px);
                            width: 125px;
                        }
                    }

                    @media screen and (max-width: 959px) {
                        #rec509143764 .tn-elem[data-elem-id="1664813555412"] {
                            top: 21px;
                            left: calc(50% - 88px + 54px);
                        }

                        #rec509143764 .tn-elem[data-elem-id="1664813555412"] .tn-atom {
                            opacity: 0;
                        }
                    }

                    @media screen and (max-width: 639px) {
                        #rec509143764 .tn-elem[data-elem-id="1664813555412"] {
                            top: 34px;
                            left: calc(50% - 88px + 441px);
                        }
                    }

                    @media screen and (max-width: 479px) {
                        #rec509143764 .tn-elem[data-elem-id="1664813555412"] {
                            top: 49px;
                            left: calc(50% - 88px + 431px);
                        }
                    }

                    #rec509143764 .tn-elem[data-elem-id="1689777189431"] {
                        color: #ffffff;
                        text-align: RIGHT;
                        z-index: 3;
                        top: 20px;
                        left: 150px;
                        width: 70px;
                    }

                    @media (min-width: 1200px) {
                        #rec509143764 .tn-elem.t396__elem--anim-hidden[data-elem-id="1689777189431"] {
                            opacity: 0;
                        }
                    }

                    #rec509143764 .tn-elem[data-elem-id="1689777189431"] .tn-atom {
                        color: #ffffff;
                        font-size: 16px;
                        font-family: 'Rooftop', Arial, sans-serif;
                        line-height: 1.25;
                        font-weight: 400;
                        letter-spacing: 0.5px;
                        text-transform: uppercase;
                        background-position: center center;
                        border-color: transparent;
                        border-style: solid;
                    }

                    @media screen and (max-width: 1199px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189431"] {
                            top: 19px;
                            left: 125px;
                        }
                    }

                    @media screen and (max-width: 959px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189431"] {
                            top: 20px;
                            left: 123px;
                            width: 80px;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189431"] {
                            text-align: left;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189431"] .tn-atom {
                            font-size: 14px;
                            opacity: 1;
                        }
                    }

                    @media screen and (max-width: 639px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189431"] {
                            top: 15px;
                            left: 112px;
                            width: 80px;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189431"] {
                            text-align: left;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189431"] .tn-atom {
                            opacity: 1;
                        }
                    }

                    @media screen and (max-width: 479px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189431"] {
                            top: 15px;
                            left: 93px;
                            width: 59px;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189431"] {
                            text-align: left;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189431"] .tn-atom {
                            font-size: 10px;
                        }
                    }

                    #rec509143764 .tn-elem[data-elem-id="1689777189435"] {
                        color: #ffffff;
                        text-align: RIGHT;
                        z-index: 4;
                        top: 20px;
                        left: 266px;
                        width: 70px;
                    }

                    @media (min-width: 1200px) {
                        #rec509143764 .tn-elem.t396__elem--anim-hidden[data-elem-id="1689777189435"] {
                            opacity: 0;
                        }
                    }

                    #rec509143764 .tn-elem[data-elem-id="1689777189435"] .tn-atom {
                        color: #ffffff;
                        font-size: 16px;
                        font-family: 'Rooftop', Arial, sans-serif;
                        line-height: 1.25;
                        font-weight: 400;
                        text-transform: uppercase;
                        background-position: center center;
                        border-color: transparent;
                        border-style: solid;
                    }

                    @media screen and (max-width: 1199px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189435"] {
                            top: 19px;
                            left: -723px;
                        }
                    }

                    @media screen and (max-width: 959px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189435"] {
                            top: 20px;
                            left: 234px;
                            width: 79px;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189435"] {
                            text-align: left;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189435"] .tn-atom {
                            font-size: 14px;
                            opacity: 1;
                        }
                    }

                    @media screen and (max-width: 639px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189435"] {
                            top: 15px;
                            left: 212px;
                            width: 79px;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189435"] {
                            text-align: left;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189435"] .tn-atom {
                            opacity: 1;
                        }
                    }

                    @media screen and (max-width: 479px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189435"] {
                            top: 15px;
                            left: 169px;
                            width: 58px;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189435"] {
                            text-align: left;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189435"] .tn-atom {
                            font-size: 10px;
                        }
                    }

                    #rec509143764 .tn-elem[data-elem-id="1689777189438"] {
                        color: #ffffff;
                        text-align: center;
                        z-index: 5;
                        top: 20px;
                        left: calc(100% - 24px + -180px);
                        width: 24px;
                    }

                    @media (min-width: 1200px) {
                        #rec509143764 .tn-elem.t396__elem--anim-hidden[data-elem-id="1689777189438"] {
                            opacity: 0;
                        }
                    }

                    #rec509143764 .tn-elem[data-elem-id="1689777189438"] .tn-atom {
                        color: #ffffff;
                        font-size: 16px;
                        font-family: 'Rooftop', Arial, sans-serif;
                        line-height: 1.25;
                        font-weight: 400;
                        text-transform: uppercase;
                        background-position: center center;
                        border-color: transparent;
                        border-style: solid;
                    }

                    @media screen and (max-width: 1199px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189438"] {
                            top: 20px;
                            left: calc(100% - 24px + -165px);
                        }
                    }

                    @media screen and (max-width: 959px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189438"] {
                            top: 26px;
                            left: calc(100% - 24px + -15px);
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189438"] .tn-atom {
                            font-size: 14px;
                            opacity: 0;
                        }
                    }

                    @media screen and (max-width: 639px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189438"] {
                            top: 15px;
                            left: calc(100% - 24px + 414px);
                            width: 24px;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189438"] {
                            text-align: left;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189438"] .tn-atom {
                            opacity: 0;
                        }
                    }

                    @media screen and (max-width: 479px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189438"] {
                            top: 49px;
                            left: calc(100% - 24px + 437px);
                        }
                    }

                    #rec509143764 .tn-elem[data-elem-id="1689777189440"] {
                        color: #ffffff;
                        text-align: center;
                        z-index: 6;
                        top: 20px;
                        left: 30px;
                        width: 90px;
                    }

                    @media (min-width: 1200px) {
                        #rec509143764 .tn-elem.t396__elem--anim-hidden[data-elem-id="1689777189440"] {
                            opacity: 0;
                        }
                    }

                    #rec509143764 .tn-elem[data-elem-id="1689777189440"] .tn-atom {
                        color: #ffffff;
                        font-size: 16px;
                        font-family: 'Rooftop', Arial, sans-serif;
                        line-height: 1.25;
                        font-weight: 400;
                        letter-spacing: 0.5px;
                        text-transform: uppercase;
                        background-position: center center;
                        border-color: transparent;
                        border-style: solid;
                    }

                    @media screen and (max-width: 1199px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189440"] {
                            top: 19px;
                            left: 15px;
                        }
                    }

                    @media screen and (max-width: 959px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189440"] {
                            top: 20px;
                            left: 10px;
                            width: 82px;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189440"] {
                            text-align: left;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189440"] .tn-atom {
                            font-size: 14px;
                            opacity: 1;
                        }
                    }

                    @media screen and (max-width: 639px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189440"] {
                            top: 15px;
                            left: 10px;
                            width: 82px;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189440"] {
                            text-align: left;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189440"] .tn-atom {
                            opacity: 1;
                        }
                    }

                    @media screen and (max-width: 479px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189440"] {
                            top: 15px;
                            left: 15px;
                            width: 61px;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189440"] {
                            text-align: left;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189440"] .tn-atom {
                            font-size: 10px;
                        }
                    }

                    #rec509143764 .tn-elem[data-elem-id="1689777189443"] {
                        color: #ffffff;
                        text-align: RIGHT;
                        z-index: 7;
                        top: 20px;
                        left: calc(100% - 70px + -254px);
                        width: 70px;
                    }

                    @media (min-width: 1200px) {
                        #rec509143764 .tn-elem.t396__elem--anim-hidden[data-elem-id="1689777189443"] {
                            opacity: 0;
                        }
                    }

                    #rec509143764 .tn-elem[data-elem-id="1689777189443"] .tn-atom {
                        color: #ffffff;
                        font-size: 16px;
                        font-family: 'Rooftop', Arial, sans-serif;
                        line-height: 1.25;
                        font-weight: 400;
                        text-transform: uppercase;
                        background-position: center center;
                        border-color: transparent;
                        border-style: solid;
                    }

                    @media screen and (max-width: 1199px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189443"] {
                            top: 20px;
                            left: calc(100% - 70px + -229px);
                        }
                    }

                    @media screen and (max-width: 959px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189443"] {
                            top: 20px;
                            left: calc(100% - 70px + 344px);
                            width: 83px;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189443"] {
                            text-align: left;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189443"] .tn-atom {
                            font-size: 14px;
                            opacity: 1;
                        }
                    }

                    @media screen and (max-width: 639px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189443"] {
                            top: 15px;
                            left: calc(100% - 70px + 311px);
                            width: 83px;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189443"] {
                            text-align: left;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189443"] .tn-atom {
                            opacity: 1;
                        }
                    }

                    @media screen and (max-width: 479px) {
                        #rec509143764 .tn-elem[data-elem-id="1689777189443"] {
                            top: 15px;
                            left: calc(100% - 70px + 244px);
                            width: 60px;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189443"] {
                            text-align: left;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1689777189443"] .tn-atom {
                            font-size: 10px;
                        }
                    }

                    #rec509143764 .tn-elem[data-elem-id="1705312916644"] {
                        color: #262626;
                        text-align: center;
                        z-index: 8;
                        top: 14px;
                        left: calc(100% - 120px + -30px);
                        width: 120px;
                        height: 32px;
                    }

                    #rec509143764 .tn-elem[data-elem-id="1705312916644"] .tn-atom {
                        color: #262626;
                        font-size: 16px;
                        font-family: 'Rooftop', Arial, sans-serif;
                        line-height: 1.55;
                        font-weight: 400;
                        letter-spacing: -1px;
                        border-radius: 5px;
                        background-color: #ffffff;
                        background-position: center center;
                        border-color: transparent;
                        border-style: solid;
                        transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                    }

                    @media (hover),
                    (min-width:0\0) {
                        #rec509143764 .tn-elem[data-elem-id="1705312916644"] .tn-atom:hover {
                            background-color: #d6d6d6;
                            background-image: none;
                        }
                    }

                    @media screen and (max-width: 1199px) {
                        #rec509143764 .tn-elem[data-elem-id="1705312916644"] {
                            left: calc(100% - 120px + -15px);
                        }
                    }

                    @media screen and (max-width: 959px) {
                        #rec509143764 .tn-elem[data-elem-id="1705312916644"] {
                            top: 30px;
                            left: calc(100% - 120px + 207px);
                            width: 180px;
                        }

                        #rec509143764 .tn-elem[data-elem-id="1705312916644"] .tn-atom {
                            font-size: 14px;
                            opacity: 0;
                        }
                    }

                    @media screen and (max-width: 639px) {
                        #rec509143764 .tn-elem[data-elem-id="1705312916644"] {
                            top: 594px;
                            left: calc(100% - 120px + -15px);
                        }
                    }

                    @media screen and (max-width: 479px) {
                        #rec509143764 .tn-elem[data-elem-id="1705312916644"] {
                            top: 586px;
                            left: calc(100% - 120px + -10px);
                        }
                    }
                </style>
                <div class='t396'>
                    <div class="t396__artboard" data-artboard-recid="509143764"
                        data-artboard-screens="320,480,640,960,1200" data-artboard-height="60"
                        data-artboard-valign="center" data-artboard-upscale="grid" data-artboard-pos="fixed"
                        data-artboard-fixed-trigger="600" data-artboard-appear-anim="fixslide"
                        data-artboard-fixed-need-js="y" data-artboard-height-res-320="43"
                        data-artboard-upscale-res-320="window" data-artboard-height-res-480="48"
                        data-artboard-height-res-640="58">
                        <div class="t396__carrier" data-artboard-recid="509143764"></div>
                        <div class="t396__filter" data-artboard-recid="509143764"></div>
                        <div class='t396__elem tn-elem text tn-elem__5091437641664813555412'
                            data-elem-id='1664813555412' data-elem-type='text' data-field-top-value="16"
                            data-field-left-value="0" data-field-width-value="176" data-field-axisy-value="top"
                            data-field-axisx-value="center" data-field-container-value="window"
                            data-field-topunits-value="px" data-field-leftunits-value="px"
                            data-field-heightunits-value="" data-field-widthunits-value="px"
                            data-field-top-res-320-value="49" data-field-left-res-320-value="431"
                            data-field-axisx-res-320-value="left" data-field-container-res-320-value="grid"
                            data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                            data-field-top-res-480-value="34" data-field-left-res-480-value="441"
                            data-field-top-res-640-value="21" data-field-left-res-640-value="54"
                            data-field-axisx-res-640-value="center" data-field-container-res-640-value="window"
                            data-field-topunits-res-640-value="px" data-field-leftunits-res-640-value="px"
                            data-field-top-res-960-value="16" data-field-left-res-960-value="1"
                            data-field-width-res-960-value="125">
                            <div class='tn-atom'><a href="index.html" style="color: inherit">Nezdeck</a></div>
                        </div>
                        <div class='t396__elem tn-elem text tn-elem__5091437641689777189431 '
                            data-elem-id='1689777189431' data-elem-type='text' data-field-top-value="20"
                            data-field-left-value="150" data-field-width-value="70" data-field-axisy-value="top"
                            data-field-axisx-value="left" data-field-container-value="window"
                            data-field-topunits-value="px" data-field-leftunits-value="px"
                            data-field-heightunits-value="" data-field-widthunits-value="px"
                            data-animate-sbs-event="hover"
                            data-animate-sbs-trgels="1667394306297,1689755761971,1689776446679,1689777189431"
                            data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':0.7,'ro':0,'bl':'0','ea':'','dt':0}]"
                            data-field-top-res-320-value="15" data-field-left-res-320-value="93"
                            data-field-width-res-320-value="59" data-field-axisx-res-320-value="left"
                            data-field-container-res-320-value="grid" data-field-topunits-res-320-value="px"
                            data-field-leftunits-res-320-value="px" data-field-top-res-480-value="15"
                            data-field-left-res-480-value="112" data-field-width-res-480-value="80"
                            data-field-axisx-res-480-value="left" data-field-container-res-480-value="window"
                            data-field-topunits-res-480-value="px" data-field-leftunits-res-480-value="px"
                            data-field-top-res-640-value="20" data-field-left-res-640-value="123"
                            data-field-width-res-640-value="80" data-field-axisx-res-640-value="left"
                            data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                            data-field-leftunits-res-640-value="px" data-field-top-res-960-value="19"
                            data-field-left-res-960-value="125" data-field-axisx-res-960-value="left"
                            data-field-container-res-960-value="window" data-field-topunits-res-960-value="px"
                            data-field-leftunits-res-960-value="px">
                            <div class='tn-atom'><a href="index.html#services" style="color: inherit">SERVICES</a></div>
                        </div>
                        <div class='t396__elem tn-elem text tn-elem__5091437641689777189435 '
                            data-elem-id='1689777189435' data-elem-type='text' data-field-top-value="20"
                            data-field-left-value="266" data-field-width-value="70" data-field-axisy-value="top"
                            data-field-axisx-value="left" data-field-container-value="window"
                            data-field-topunits-value="px" data-field-leftunits-value="px"
                            data-field-heightunits-value="" data-field-widthunits-value="px"
                            data-animate-sbs-event="hover"
                            data-animate-sbs-trgels="1667394306297,1689755761971,1689776446679,1689777189435"
                            data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':0.7,'ro':0,'bl':'0','ea':'','dt':0}]"
                            data-field-top-res-320-value="15" data-field-left-res-320-value="169"
                            data-field-width-res-320-value="58" data-field-axisx-res-320-value="left"
                            data-field-container-res-320-value="grid" data-field-topunits-res-320-value="px"
                            data-field-leftunits-res-320-value="px" data-field-top-res-480-value="15"
                            data-field-left-res-480-value="212" data-field-width-res-480-value="79"
                            data-field-axisx-res-480-value="left" data-field-container-res-480-value="window"
                            data-field-topunits-res-480-value="px" data-field-leftunits-res-480-value="px"
                            data-field-top-res-640-value="20" data-field-left-res-640-value="234"
                            data-field-width-res-640-value="79" data-field-axisx-res-640-value="left"
                            data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                            data-field-leftunits-res-640-value="px" data-field-top-res-960-value="19"
                            data-field-left-res-960-value="-723" data-field-axisx-res-960-value="right"
                            data-field-container-res-960-value="window" data-field-topunits-res-960-value="px"
                            data-field-leftunits-res-960-value="px">
                            <div class='tn-atom'><a href="index.html#projects" style="color: inherit">projects</a></div>
                        </div>
                        <!-- <div class='t396__elem tn-elem text tn-elem__5091437641689777189438 '
                            data-elem-id='1689777189438' data-elem-type='text' data-field-top-value="20"
                            data-field-left-value="-180" data-field-width-value="24" data-field-axisy-value="top"
                            data-field-axisx-value="right" data-field-container-value="window"
                            data-field-topunits-value="px" data-field-leftunits-value="px"
                            data-field-heightunits-value="" data-field-widthunits-value="px"
                            data-animate-sbs-event="hover"
                            data-animate-sbs-trgels="1667394306297,1689755761971,1689776446679,1689777189438"
                            data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':0.7,'ro':0,'bl':'0','ea':'','dt':0}]"
                            data-field-top-res-320-value="49" data-field-left-res-320-value="437"
                            data-field-axisx-res-320-value="left" data-field-container-res-320-value="grid"
                            data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                            data-field-top-res-480-value="15" data-field-left-res-480-value="414"
                            data-field-width-res-480-value="24" data-field-axisx-res-480-value="left"
                            data-field-container-res-480-value="grid" data-field-topunits-res-480-value="px"
                            data-field-leftunits-res-480-value="px" data-field-top-res-640-value="26"
                            data-field-left-res-640-value="-15" data-field-top-res-960-value="20"
                            data-field-left-res-960-value="-165">
                            <div class='tn-atom'><a href="#lgg" style="color: inherit">en</a></div>
                        </div> -->
                        <div class='t396__elem tn-elem text tn-elem__5091437641689777189440 '
                            data-elem-id='1689777189440' data-elem-type='text' data-field-top-value="20"
                            data-field-left-value="30" data-field-width-value="90" data-field-axisy-value="top"
                            data-field-axisx-value="left" data-field-container-value="window"
                            data-field-topunits-value="px" data-field-leftunits-value="px"
                            data-field-heightunits-value="" data-field-widthunits-value="px"
                            data-animate-sbs-event="hover"
                            data-animate-sbs-trgels="1667394306297,1689755761971,1689776446679,1689777189440"
                            data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':0.7,'ro':0,'bl':'0','ea':'','dt':0}]"
                            data-field-top-res-320-value="15" data-field-left-res-320-value="15"
                            data-field-width-res-320-value="61" data-field-axisx-res-320-value="left"
                            data-field-container-res-320-value="grid" data-field-topunits-res-320-value="px"
                            data-field-leftunits-res-320-value="px" data-field-top-res-480-value="15"
                            data-field-left-res-480-value="10" data-field-width-res-480-value="82"
                            data-field-axisx-res-480-value="left" data-field-container-res-480-value="window"
                            data-field-topunits-res-480-value="px" data-field-leftunits-res-480-value="px"
                            data-field-top-res-640-value="20" data-field-left-res-640-value="10"
                            data-field-width-res-640-value="82" data-field-axisx-res-640-value="left"
                            data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                            data-field-leftunits-res-640-value="px" data-field-top-res-960-value="19"
                            data-field-left-res-960-value="15" data-field-axisx-res-960-value="left">
                            <div class='tn-atom'><a href="index.html#aboutus" style="color: inherit">About us</a></div>
                        </div>
                        <!-- <div class='t396__elem tn-elem text tn-elem__5091437641689777189443 '
                            data-elem-id='1689777189443' data-elem-type='text' data-field-top-value="20"
                            data-field-left-value="-254" data-field-width-value="70" data-field-axisy-value="top"
                            data-field-axisx-value="right" data-field-container-value="window"
                            data-field-topunits-value="px" data-field-leftunits-value="px"
                            data-field-heightunits-value="" data-field-widthunits-value="px"
                            data-animate-sbs-event="hover"
                            data-animate-sbs-trgels="1667394306297,1689755761971,1689776446679,1689777189443"
                            data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':0.7,'ro':0,'bl':'0','ea':'','dt':0}]"
                            data-field-top-res-320-value="15" data-field-left-res-320-value="244"
                            data-field-width-res-320-value="60" data-field-axisx-res-320-value="left"
                            data-field-container-res-320-value="grid" data-field-topunits-res-320-value="px"
                            data-field-leftunits-res-320-value="px" data-field-top-res-480-value="15"
                            data-field-left-res-480-value="311" data-field-width-res-480-value="83"
                            data-field-axisx-res-480-value="left" data-field-container-res-480-value="window"
                            data-field-topunits-res-480-value="px" data-field-leftunits-res-480-value="px"
                            data-field-top-res-640-value="20" data-field-left-res-640-value="344"
                            data-field-width-res-640-value="83" data-field-axisx-res-640-value="left"
                            data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                            data-field-leftunits-res-640-value="px" data-field-top-res-960-value="20"
                            data-field-left-res-960-value="-229">
                            <div class='tn-atom'><a href="index.html#contact" style="color: inherit">contacts</a></div>
                        </div> -->
                        <!-- <div class='t396__elem tn-elem tn-elem__5091437641705312916644' data-elem-id='1705312916644'
                            data-elem-type='button' data-field-top-value="14" data-field-left-value="-30"
                            data-field-height-value="32" data-field-width-value="120" data-field-axisy-value="top"
                            data-field-axisx-value="right" data-field-container-value="window"
                            data-field-topunits-value="px" data-field-leftunits-value="px"
                            data-field-heightunits-value="px" data-field-widthunits-value="px"
                            data-field-top-res-320-value="586" data-field-left-res-320-value="-10"
                            data-field-top-res-480-value="594" data-field-left-res-480-value="-15"
                            data-field-top-res-640-value="30" data-field-left-res-640-value="207"
                            data-field-width-res-640-value="180" data-field-left-res-960-value="-15"><a class='tn-atom'
                                href="#popup:myform">book a call</a></div> -->
                    </div>
                </div>
                <script>t_onFuncLoad('t396_initialScale', function () {
                        t396_initialScale('509143764');
                    });
                    t_onReady(function () {
                        t_onFuncLoad('t396_init', function () {
                            t396_init('509143764');
                        });
                    });</script><!-- /T396 -->
            </div>
            <div id="rec509871381" class="r t-rec t-rec_pt_0 t-rec_pb_0 t-screenmax-640px"
                style="padding-top:0px;padding-bottom:0px; " data-animationappear="off" data-record-type="450"
                data-screen-max="640px"><!-- t450 -->
                <div id="nav509871381marker"></div>
                <div class="t450__overlay">
                    <div class="t450__overlay_bg" style=" "></div>
                </div>
                <div id="nav509871381" class="t450 " data-tooltip-hook="#menuopen"
                    style="max-width: 600px;background-color: #262626;"><button type="button"
                        class="t450__close-button t450__close t450_opened " style="background-color: #262626;"
                        aria-label="Закрыть меню">
                        <div class="t450__close_icon"><span style="background-color:#ffffff;"></span><span
                                style="background-color:#ffffff;"></span><span
                                style="background-color:#ffffff;"></span><span style="background-color:#ffffff;"></span>
                        </div>
                    </button>
                    <div class="t450__container t-align_left">
                        <div class="t450__top">
                            <nav class="t450__menu">
                                <ul role="list" class="t450__list t-menu__list">
                                    <li class="t450__list_item"><a class="t-menu__link-item " href="index.html#services"
                                            data-menu-submenu-hook="" data-menu-item-number="1">SERVICES</a></li>
                                    <li class="t450__list_item"><a class="t-menu__link-item " href="index.html#aboutus"
                                            data-menu-submenu-hook="" data-menu-item-number="2">ABOUT US</a></li>
                                    <li class="t450__list_item"><a class="t-menu__link-item " href="index.html#projects"
                                            data-menu-submenu-hook="" data-menu-item-number="3">PROJECTS</a></li>
                                    <li class="t450__list_item"><a class="t-menu__link-item " href="index.html#contact"
                                            data-menu-submenu-hook="" data-menu-item-number="4">CONTACT</a></li>

                                </ul>
                            </nav>
                        </div>
                        <div class="t450__rightside">
                            <div class="t450__rightcontainer">
                                <div class="t450__right_descr t-descr t-descr_xs" field="descr">WE SPECIALIZE IN
                                    BUILDING HIGH-QUALITY WEBSITES, DIGITAL PRODUCT AND PROVIDING DESIGN-SUPPORT
                                    FOR&nbsp;BUSINESS, CORPORATIONS&nbsp;AND DYNAMIC STARTUPS</div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>t_onReady(function () {
                        var rec = document.querySelector('#rec509871381');
                        if (!rec) return;
                        rec.setAttribute('data-animationappear', 'off');
                        rec.style.opacity = 1;
                        t_onFuncLoad('t450_initMenu', function () {
                            t450_initMenu('509871381');
                        });
                    });</script>
                <script>t_onReady(function () {
                        var rec = document.querySelector('#rec509871381');
                        if (!rec) return;
                        var wrapperBlock = rec.querySelector('.t450');
                        if (wrapperBlock) {
                            wrapperBlock.classList.remove('t450__beforeready');
                        }
                        t_onFuncLoad('t450_appearMenu', function () {
                            t450_appearMenu('509871381');
                            window.addEventListener('scroll', t_throttle(function () {
                                t450_appearMenu('509871381');
                            }));
                        });
                    });</script>
                <style>
                    #rec509871381 .t-menu__link-item {
                        -webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                        transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                    }

                    #rec509871381 .t-menu__link-item:not(.t-active):not(.tooltipstered):hover {
                        color: #2a559d !important;
                    }

                    #rec509871381 .t-menu__link-item:not(.t-active):not(.tooltipstered):focus-visible {
                        color: #2a559d !important;
                    }

                    @supports (overflow:-webkit-marquee) and (justify-content:inherit) {

                        #rec509871381 .t-menu__link-item,
                        #rec509871381 .t-menu__link-item.t-active {
                            opacity: 1 !important;
                        }
                    }
                </style>
                <script>t_onReady(function () {
                        setTimeout(function () {
                            t_onFuncLoad('t_menusub_init', function () {
                                t_menusub_init('509871381');
                            });
                        }, 500);
                    });</script>
                <style>
                    #rec509871381 .t-menusub__link-item {
                        -webkit-transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                        transition: color 0.3s ease-in-out, opacity 0.3s ease-in-out;
                    }

                    #rec509871381 .t-menusub__link-item:not(.t-active):not(.tooltipstered):hover {
                        color: #2a559d !important;
                    }

                    @supports (overflow:-webkit-marquee) and (justify-content:inherit) {

                        #rec509871381 .t-menusub__link-item,
                        #rec509871381 .t-menusub__link-item.t-active {
                            opacity: 1 !important;
                        }
                    }

                    @media screen and (max-width: 980px) {
                        #rec509871381 .t-menusub__menu .t-menusub__link-item {
                            color: #ffffff !important;
                        }

                        #rec509871381 .t-menusub__menu .t-menusub__link-item.t-active {
                            color: #ffffff !important;
                        }
                    }

                    @media screen and (min-width: 981px) {
                        #rec509871381 .t-menusub__menu {
                            background-color: #262626;
                            text-align: left;
                            max-width: 250px;
                        }
                    }

                    #rec509871381 .t-menusub__menu_top:after {
                        border-top-color: #262626;
                    }

                    #rec509871381 .t-menusub__menu_bottom:after {
                        border-bottom-color: #262626;
                    }
                </style>
                <style>
                    #rec509871381 a.t-menusub__link-item {
                        font-size: 16px;
                        color: #ffffff;
                        font-weight: 400;
                        font-family: 'Rooftop';
                    }
                </style>
                <style>
                    #rec509871381 a.t-menu__link-item {
                        font-size: 20px;
                        color: #ffffff;
                        font-family: 'Rooftop';
                    }
                </style>
            </div>
            <div id="rec691990698" class="r t-rec" style=" " data-animationappear="off" data-record-type="794">
                <!-- T794 -->
                <div class="t794" data-tooltip-hook="#lgg" data-tooltip-margin="15px" data-add-arrow="">
                    <div class="t794__tooltip-menu">
                        <div class="t794__content">
                            <ul class="t794__list" role="menu" aria-label="">
                                <li class="t794__list_item t-submenublocks__item t-name t-name_xs"><a
                                        class="t794__typo t794__typo_691990698 t794__link t-name t-name_xs"
                                        role="menuitem" href="ru.html"
                                        style="color:#ffffff;font-size:16px;font-weight:400;font-family:'Rooftop';text-transform:uppercase;"
                                        data-menu-item-number="1">RU</a></li>
                                <li class="t794__list_item t-submenublocks__item t-name t-name_xs"><a
                                        class="t794__typo t794__typo_691990698 t794__link t-name t-name_xs"
                                        role="menuitem" href="page.html"
                                        style="color:#ffffff;font-size:16px;font-weight:400;font-family:'Rooftop';text-transform:uppercase;"
                                        data-menu-item-number="2">IT</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <script>t_onReady(function () {
                        t_onFuncLoad('t794_init', function () {
                            t794_init('691990698');
                        });
                    });</script>
                <style>
                    #rec691990698 .t794__tooltip-menu,
                    a[data-tooltip-menu-id="691990698"]+.t794__tooltip-menu {
                        background-color: #262626;
                        text-align: left;
                        max-width: 300px;
                        border-radius: 0px;
                    }

                    #rec691990698 .t794__content {
                        background-color: #262626;
                        border-radius: 0px;
                    }

                    @media screen and (max-width: 980px) {
                        a[data-tooltip-menu-id="691990698"]+.t794__tooltip-menu {
                            max-width: 100%;
                        }
                    }
                </style>
                <style>
                    #rec691990698 .t794__typo.t-active,
                    a[data-tooltip-menu-id="691990698"]+.t794__tooltip-menu .t794__typo.t-active {
                        color: #ffffff !important;
                    }
                </style>
                <style>
                    #rec691990698 .t794__typo:not(.t-active):hover {
                        color: #ffffff !important;
                        opacity: 0.4 !important;
                    }
                </style>
                <style></style>
                <style>
                    #rec691990698 .t794__tooltip-menu,
                    a[data-tooltip-menu-id="691990698"]+.t794__tooltip-menu {
                        box-shadow: 0px 0px 0px rgba(0, 0, 0, 0);
                    }
                </style>
            </div>
        </header><!--/header-->
        <div id="rec704885162" class="r t-rec t-rec_pb_0" style="padding-bottom:0px; " data-record-type="215"><a
                name="welcome" style="font-size:0;"></a></div>
        <div id="rec669681009" class="r t-rec" style=" " data-animationappear="off" data-record-type="396"><!-- T396 -->
            <style>
                #rec669681009 .t396__artboard {
                    min-height: 500px;
                    height: 100vh;
                    background-color: #262626;
                }

                #rec669681009 .t396__filter {
                    min-height: 500px;
                    height: 100vh;
                }

                #rec669681009 .t396__carrier {
                    min-height: 500px;
                    height: 100vh;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {

                    #rec669681009 .t396__artboard,
                    #rec669681009 .t396__filter,
                    #rec669681009 .t396__carrier {}

                    #rec669681009 .t396__filter {}

                    #rec669681009 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 959px) {

                    #rec669681009 .t396__artboard,
                    #rec669681009 .t396__filter,
                    #rec669681009 .t396__carrier {
                        min-height: 600px;
                    }

                    #rec669681009 .t396__filter {}

                    #rec669681009 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec669681009 .t396__artboard,
                    #rec669681009 .t396__filter,
                    #rec669681009 .t396__carrier {
                        min-height: 800px;
                    }

                    #rec669681009 .t396__filter {}

                    #rec669681009 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 479px) {

                    #rec669681009 .t396__artboard,
                    #rec669681009 .t396__filter,
                    #rec669681009 .t396__carrier {
                        min-height: 550px;
                    }

                    #rec669681009 .t396__filter {}

                    #rec669681009 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1664825892841"] {
                    z-index: 2;
                    top: calc(50vh - 50px + 0px);
                    left: calc(50% - 50% + 0px);
                    width: 100%;
                    height: 100%;
                }

                @media (min-width: 1200px) {
                    #rec669681009 .tn-elem.t396__elem--anim-hidden[data-elem-id="1664825892841"] {
                        opacity: 0;
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1664825892841"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec669681009 .tn-elem[data-elem-id="1664813555400"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 3;
                    top: calc(100vh + -132px);
                    left: calc(50% - 415px + 0px);
                    width: 830px;
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555400"] .tn-atom {
                    color: #ffffff;
                    font-size: 103px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    letter-spacing: -3px;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555400"] .tn-atom {
                        font-size: 94px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555400"] {
                        top: calc(500px + -120px);
                        left: calc(50% - 415px + 0px);
                    }

                    #rec669681009 .tn-elem[data-elem-id="1664813555400"] .tn-atom {
                        font-size: 82px;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555400"] {
                        top: calc(500px + -122px);
                        left: calc(50% - 415px + 0px);
                        width: 424px;
                    }

                    #rec669681009 .tn-elem[data-elem-id="1664813555400"] .tn-atom {
                        font-size: 60px;
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555408"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 4;
                    top: calc(100vh + -111px);
                    left: calc(50% - 203.5px + 1px);
                    width: 407px;
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555408"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555408"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555408"] {
                        top: calc(500px + -107px);
                        left: calc(50% - 203.5px + 0px);
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555412"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 5;
                    top: 16px;
                    left: calc(50% - 88px + 0px);
                    width: 176px;
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555412"] .tn-atom {
                    color: #ffffff;
                    font-size: 23px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    opacity: 0.4;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555412"] {
                        top: 41px;
                        left: calc(50% - 88px + 0px);
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555412"] {
                        top: 46px;
                        left: calc(50% - 88px + 0px);
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555415"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 6;
                    top: 88px;
                    left: calc(50% - 525px + 0px);
                    width: 1050px;
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555415"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.44;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555415"] {
                        top: 98px;
                        left: calc(50% - 525px + 0px);
                        width: 432px;
                    }

                    #rec669681009 .tn-elem[data-elem-id="1664813555415"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555415"] {
                        top: 108px;
                        left: calc(50% - 525px + 1px);
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555415"] {
                        top: 98px;
                        left: calc(50% - 525px + 1px);
                        width: 347px;
                    }

                    #rec669681009 .tn-elem[data-elem-id="1664813555415"] .tn-atom {
                        opacity: 0;
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555424"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 7;
                    top: calc(100vh + -30px);
                    left: calc(50% - 56px + 0px);
                    width: 112px;
                }

                #rec669681009 .tn-elem.t396__elem--anim-hidden[data-elem-id="1664813555424"] {
                    opacity: 0;
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555424"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555424"] {
                        top: calc(500px + -42px);
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555424"] {
                        top: calc(500px + -44px);
                        left: calc(50% - 56px + 0px);
                        width: 150px;
                    }

                    #rec669681009 .tn-elem[data-elem-id="1664813555424"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555424"] {
                        top: calc(500px + 14px);
                        left: calc(50% - 56px + 15px);
                        width: 114px;
                    }

                    #rec669681009 .tn-elem[data-elem-id="1664813555424"] {
                        text-align: left;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555424"] {
                        top: calc(500px + 13px);
                        left: calc(50% - 56px + 10px);
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555461"] {
                    color: #ffffff;
                    text-align: RIGHT;
                    z-index: 8;
                    top: 9px;
                    left: calc(100% - 70px + -45px);
                    width: 70px;
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555461"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 400;
                    text-transform: uppercase;
                    opacity: 0;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555461"] .tn-atom {
                        font-size: 14px;
                        opacity: 1;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555461"] {
                        top: 9px;
                        left: calc(100% - 70px + -45px);
                    }

                    #rec669681009 .tn-elem[data-elem-id="1664813555461"] .tn-atom {
                        opacity: 0;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555461"] {
                        top: 9px;
                        left: calc(100% - 70px + -40px);
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555464"] {
                    z-index: 9;
                    top: 13px;
                    left: calc(100% - 22px + -15px);
                    width: 22px;
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555464"] .tn-atom {
                    opacity: 0;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555464"] .tn-atom {
                        opacity: 1;
                    }
                }

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555464"] {
                        top: 16px;
                        left: calc(100% - 22px + -10px);
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555468"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 10;
                    top: calc(100vh + -12px);
                    left: 15px;
                    width: 114px;
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555468"] .tn-atom {
                    color: #ffffff;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.43;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555468"] .tn-atom {
                        font-size: 12px;
                    }
                }

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555468"] {
                        top: calc(500px + -15px);
                        left: 0px;
                    }

                    #rec669681009 .tn-elem[data-elem-id="1664813555468"] {
                        text-align: center;
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555471"] {
                    color: #ffffff;
                    text-align: right;
                    z-index: 11;
                    top: calc(100vh + -12px);
                    left: calc(100% - 211px + -15px);
                    width: 211px;
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555471"] .tn-atom {
                    color: #ffffff;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.43;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555471"] .tn-atom {
                        font-size: 12px;
                    }
                }

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555471"] {
                        top: calc(500px + -30px);
                        left: calc(100% - 211px + 0px);
                    }

                    #rec669681009 .tn-elem[data-elem-id="1664813555471"] {
                        text-align: center;
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555474"] {
                    z-index: 12;
                    top: 146px;
                    left: calc(50% - 19.5px + 1px);
                    width: 39px;
                }

                #rec669681009 .tn-elem[data-elem-id="1664813555474"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555474"] {
                        top: 154px;
                        left: calc(50% - 19.5px + 1px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555474"] {
                        top: 164px;
                        left: calc(50% - 19.5px + 1px);
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec669681009 .tn-elem[data-elem-id="1664813555474"] {
                        top: 102px;
                        left: calc(50% - 19.5px + 1px);
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1664828522799"] {
                    color: #ffffff;
                    text-align: right;
                    z-index: 13;
                    top: 111px;
                    left: calc(50% - 145px + -194px);
                    width: 290px;
                }

                #rec669681009 .tn-elem[data-elem-id="1664828522799"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.44;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {
                    #rec669681009 .tn-elem[data-elem-id="1664828522799"] {
                        top: 213px;
                        left: calc(50% - 145px + 0px);
                        width: 542px;
                    }

                    #rec669681009 .tn-elem[data-elem-id="1664828522799"] {
                        text-align: center;
                    }

                    #rec669681009 .tn-elem[data-elem-id="1664828522799"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669681009 .tn-elem[data-elem-id="1664828522799"] {
                        top: 223px;
                        left: calc(50% - 145px + 0px);
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec669681009 .tn-elem[data-elem-id="1664828522799"] {
                        top: 166px;
                        left: calc(50% - 145px + 0px);
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1664828531978"] {
                    color: #ffffff;
                    z-index: 14;
                    top: 111px;
                    left: calc(50% - 193.5px + 244px);
                    width: 387px;
                }

                #rec669681009 .tn-elem[data-elem-id="1664828531978"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.44;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {
                    #rec669681009 .tn-elem[data-elem-id="1664828531978"] {
                        top: 233px;
                        left: calc(50% - 193.5px + 0px);
                        width: 542px;
                    }

                    #rec669681009 .tn-elem[data-elem-id="1664828531978"] {
                        text-align: center;
                    }

                    #rec669681009 .tn-elem[data-elem-id="1664828531978"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669681009 .tn-elem[data-elem-id="1664828531978"] {
                        top: 243px;
                        left: calc(50% - 193.5px + 0px);
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec669681009 .tn-elem[data-elem-id="1664828531978"] {
                        top: 186px;
                        left: calc(50% - 193.5px + 1px);
                        width: 249px;
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1689776446675"] {
                    color: #ffffff;
                    text-align: RIGHT;
                    z-index: 15;
                    top: 19px;
                    left: 132px;
                    width: 70px;
                }

                @media (min-width: 1200px) {
                    #rec669681009 .tn-elem.t396__elem--anim-hidden[data-elem-id="1689776446675"] {
                        opacity: 0;
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1689776446675"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446675"] {
                        top: 19px;
                        left: 122px;
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446675"] {
                        top: 26px;
                        left: 15px;
                    }

                    #rec669681009 .tn-elem[data-elem-id="1689776446675"] .tn-atom {
                        font-size: 14px;
                        opacity: 0;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446675"] {
                        top: 362px;
                        left: -444px;
                    }

                    #rec669681009 .tn-elem[data-elem-id="1689776446675"] .tn-atom {
                        opacity: 0;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446675"] {
                        top: 49px;
                        left: -125px;
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1689776446679"] {
                    color: #ffffff;
                    text-align: RIGHT;
                    z-index: 16;
                    top: 19px;
                    left: calc(100% - 70px + -205px);
                    width: 70px;
                }

                @media (min-width: 1200px) {
                    #rec669681009 .tn-elem.t396__elem--anim-hidden[data-elem-id="1689776446679"] {
                        opacity: 0;
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1689776446679"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446679"] {
                        top: 19px;
                        left: calc(100% - 70px + -185px);
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446679"] {
                        top: 222px;
                        left: calc(100% - 70px + 123px);
                    }

                    #rec669681009 .tn-elem[data-elem-id="1689776446679"] .tn-atom {
                        font-size: 14px;
                        opacity: 0;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446679"] {
                        top: 362px;
                        left: calc(100% - 70px + -643px);
                    }

                    #rec669681009 .tn-elem[data-elem-id="1689776446679"] .tn-atom {
                        opacity: 0;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446679"] {
                        top: 49px;
                        left: calc(100% - 70px + 39px);
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1689776446681"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 17;
                    top: 19px;
                    left: calc(100% - 24px + -15px);
                    width: 24px;
                }

                #rec669681009 .tn-elem.t396__elem--anim-hidden[data-elem-id="1689776446681"] {
                    opacity: 0;
                }

                #rec669681009 .tn-elem[data-elem-id="1689776446681"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446681"] {
                        top: 19px;
                        left: calc(100% - 24px + -15px);
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446681"] {
                        top: 26px;
                        left: calc(100% - 24px + -15px);
                    }

                    #rec669681009 .tn-elem[data-elem-id="1689776446681"] .tn-atom {
                        font-size: 14px;
                        opacity: 0;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446681"] {
                        top: 362px;
                        left: calc(100% - 24px + -573px);
                    }

                    #rec669681009 .tn-elem[data-elem-id="1689776446681"] .tn-atom {
                        opacity: 0;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446681"] {
                        top: 49px;
                        left: calc(100% - 24px + 125px);
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1689776446684"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 18;
                    top: 19px;
                    left: 15px;
                    width: 87px;
                }

                @media (min-width: 1200px) {
                    #rec669681009 .tn-elem.t396__elem--anim-hidden[data-elem-id="1689776446684"] {
                        opacity: 0;
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1689776446684"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446684"] {
                        top: 19px;
                        left: 15px;
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446684"] {
                        top: 155px;
                        left: -154px;
                    }

                    #rec669681009 .tn-elem[data-elem-id="1689776446684"] .tn-atom {
                        font-size: 14px;
                        opacity: 0;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446684"] {
                        top: 372px;
                        left: -434px;
                    }

                    #rec669681009 .tn-elem[data-elem-id="1689776446684"] .tn-atom {
                        opacity: 0;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446684"] {
                        top: 59pxpx;
                        left: -115pxpx;
                    }
                }

                #rec669681009 .tn-elem[data-elem-id="1689776446687"] {
                    color: #ffffff;
                    text-align: RIGHT;
                    z-index: 19;
                    top: 19px;
                    left: calc(100% - 70px + -89px);
                    width: 70px;
                }

                #rec669681009 .tn-elem.t396__elem--anim-hidden[data-elem-id="1689776446687"] {
                    opacity: 0;
                }

                #rec669681009 .tn-elem[data-elem-id="1689776446687"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446687"] {
                        top: 19px;
                        left: calc(100% - 70px + -79px);
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446687"] {
                        top: 186px;
                        left: calc(100% - 70px + 118px);
                    }

                    #rec669681009 .tn-elem[data-elem-id="1689776446687"] .tn-atom {
                        font-size: 14px;
                        opacity: 0;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446687"] {
                        top: 362px;
                        left: calc(100% - 70px + -536px);
                    }

                    #rec669681009 .tn-elem[data-elem-id="1689776446687"] .tn-atom {
                        opacity: 0;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec669681009 .tn-elem[data-elem-id="1689776446687"] {
                        top: 49px;
                        left: calc(100% - 70px + 125px);
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="669681009" data-artboard-screens="320,480,640,960,1200"
                    data-artboard-height="500" data-artboard-valign="stretch" data-artboard-height_vh="100"
                    data-artboard-upscale="grid" data-artboard-height-res-320="550" data-artboard-height-res-480="800"
                    data-artboard-height-res-640="600">
                    <div class="t396__carrier" data-artboard-recid="669681009"></div>
                    <div class="t396__filter" data-artboard-recid="669681009"></div>
                    <div class='t396__elem tn-elem bg_image tn-elem__6696810091664825892841 '
                        data-elem-id='1664825892841' data-elem-type='shape' data-field-top-value="0"
                        data-field-left-value="0" data-field-height-value="100" data-field-width-value="100"
                        data-field-axisy-value="center" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="%" data-field-widthunits-value="%"
                        data-animate-sbs-event="scroll" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':1000,'mx':0,'my':300,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'}]">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6696810091664813555400' data-elem-id='1664813555400'
                        data-elem-type='text' data-field-top-value="-132" data-field-left-value="0"
                        data-field-width-value="830" data-field-axisy-value="bottom" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="-122" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="424" data-field-top-res-480-value="-120"
                        data-field-left-res-480-value="0">
                        <h1 class='tn-atom' field='tn_text_1664813555400'>Nezdeck</h1>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6696810091664813555408' data-elem-id='1664813555408'
                        data-elem-type='text' data-field-top-value="-111" data-field-left-value="1"
                        data-field-width-value="407" data-field-axisy-value="bottom" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="-107" data-field-left-res-320-value="0">
                        <div class='tn-atom' field='tn_text_1664813555408'>Software Company &amp; Creative Agency
                        </div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6696810091664813555412' data-elem-id='1664813555412'
                        data-elem-type='text' data-field-top-value="16" data-field-left-value="0"
                        data-field-width-value="176" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="46" data-field-left-res-320-value="0"
                        data-field-top-res-480-value="41" data-field-left-res-480-value="0">
                        <div class='tn-atom'><a href="index.html" style="color: inherit">Nezdeck</a></div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6696810091664813555415' data-elem-id='1664813555415'
                        data-elem-type='text' data-field-top-value="88" data-field-left-value="0"
                        data-field-width-value="1050" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="98" data-field-left-res-320-value="1"
                        data-field-width-res-320-value="347" data-field-top-res-480-value="108"
                        data-field-left-res-480-value="1" data-field-top-res-640-value="98"
                        data-field-left-res-640-value="0" data-field-width-res-640-value="432">
                        <div class='tn-atom' field='tn_text_1664813555415'>Nezdeck is a premier software company
                            delivering innovative tech solutions</div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6696810091664813555424 ' data-elem-id='1664813555424'
                        data-elem-type='text' data-field-top-value="-30" data-field-left-value="0"
                        data-field-width-value="112" data-field-axisy-value="bottom" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-trgels="1667394410801,1689756624614,1689765528602,1664813555424"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':0.7,'ro':0,'bl':'0','ea':'','dt':0}]"
                        data-field-top-res-320-value="13" data-field-left-res-320-value="10"
                        data-field-axisy-res-320-value="top" data-field-top-res-480-value="14"
                        data-field-left-res-480-value="15" data-field-width-res-480-value="114"
                        data-field-axisy-res-480-value="top" data-field-axisx-res-480-value="left"
                        data-field-top-res-640-value="-44" data-field-left-res-640-value="0"
                        data-field-width-res-640-value="150" data-field-top-res-960-value="-42">
                        <!-- <div class='tn-atom'><a href="#popup:myform" style="color: inherit"><u>book a call </u></a>
                        </div> -->
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6696810091664813555461' data-elem-id='1664813555461'
                        data-elem-type='text' data-field-top-value="9" data-field-left-value="-45"
                        data-field-width-value="70" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="9" data-field-left-res-320-value="-40"
                        data-field-top-res-480-value="9" data-field-left-res-480-value="-45">
                        <div class='tn-atom'><a href="#menuopen" style="color: inherit">menu</a></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696810091664813555464' data-elem-id='1664813555464'
                        data-elem-type='image' data-field-top-value="13" data-field-left-value="-15"
                        data-field-width-value="22" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="22" data-field-fileheight-value="12"
                        data-field-top-res-320-value="16" data-field-left-res-320-value="-10"><a class='tn-atom'
                            href="#menuopen"><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6361-3631-4133-b732-626432353062/menu.svg'
                                alt='' imgfield='tn_img_1664813555464' /></a></div>
                    <div class='t396__elem tn-elem text tn-elem__6696810091664813555468' data-elem-id='1664813555468'
                        data-elem-type='text' data-field-top-value="-12" data-field-left-value="15"
                        data-field-width-value="114" data-field-axisy-value="bottom" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="-15" data-field-left-res-320-value="0"
                        data-field-axisx-res-320-value="center">
                        <div class='tn-atom' field='tn_text_1664813555468'>NE – 2024-2028</div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6696810091664813555471' data-elem-id='1664813555471'
                        data-elem-type='text' data-field-top-value="-12" data-field-left-value="-15"
                        data-field-width-value="211" data-field-axisy-value="bottom" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="-30" data-field-left-res-320-value="0"
                        data-field-axisx-res-320-value="center">
                        <div class='tn-atom' field='tn_text_1664813555471'>©all rights reserved</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696810091664813555474' data-elem-id='1664813555474'
                        data-elem-type='image' data-field-top-value="146" data-field-left-value="1"
                        data-field-width-value="39" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="39" data-field-fileheight-value="39"
                        data-field-top-res-320-value="102" data-field-left-res-320-value="1"
                        data-field-top-res-480-value="164" data-field-left-res-480-value="1"
                        data-field-top-res-640-value="154" data-field-left-res-640-value="1">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3833-3835-4161-a161-343562396462/Union.svg'
                                alt='' imgfield='tn_img_1664813555474' /></div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6696810091664828522799' data-elem-id='1664828522799'
                        data-elem-type='text' data-field-top-value="111" data-field-left-value="-194"
                        data-field-width-value="290" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="166" data-field-left-res-320-value="0"
                        data-field-top-res-480-value="223" data-field-left-res-480-value="0"
                        data-field-top-res-640-value="213" data-field-left-res-640-value="0"
                        data-field-width-res-640-value="542">
                        <div class='tn-atom' field='tn_text_1664828522799'>software development <strong> </strong>
                        </div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6696810091664828531978' data-elem-id='1664828531978'
                        data-elem-type='text' data-field-top-value="111" data-field-left-value="244"
                        data-field-width-value="387" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="186" data-field-left-res-320-value="1"
                        data-field-width-res-320-value="249" data-field-top-res-480-value="243"
                        data-field-left-res-480-value="0" data-field-top-res-640-value="233"
                        data-field-left-res-640-value="0" data-field-width-res-640-value="542">
                        <div class='tn-atom' field='tn_text_1664828531978'>Bussiness Development</div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6696810091689776446675 ' data-elem-id='1689776446675'
                        data-elem-type='text' data-field-top-value="19" data-field-left-value="132"
                        data-field-width-value="70" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="hover"
                        data-animate-sbs-trgels="1667394307996,1689755761965,1689776446675"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':0.7,'ro':0,'bl':'0','ea':'','dt':0}]"
                        data-field-top-res-320-value="49" data-field-left-res-320-value="-125"
                        data-field-axisx-res-320-value="center" data-field-top-res-480-value="362"
                        data-field-left-res-480-value="-444" data-field-top-res-640-value="26"
                        data-field-left-res-640-value="15" data-field-top-res-960-value="19"
                        data-field-left-res-960-value="122" data-field-axisx-res-960-value="left">
                        <div class='tn-atom'><a href="index.html#services" style="color: inherit">SERVICES</a></div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6696810091689776446679 ' data-elem-id='1689776446679'
                        data-elem-type='text' data-field-top-value="19" data-field-left-value="-205"
                        data-field-width-value="70" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="hover"
                        data-animate-sbs-trgels="1667394306297,1689755761971,1689776446679"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':0.7,'ro':0,'bl':'0','ea':'','dt':0}]"
                        data-field-top-res-320-value="49" data-field-left-res-320-value="39"
                        data-field-axisx-res-320-value="center" data-field-container-res-320-value="window"
                        data-field-top-res-480-value="362" data-field-left-res-480-value="-643"
                        data-field-top-res-640-value="222" data-field-left-res-640-value="123"
                        data-field-top-res-960-value="19" data-field-left-res-960-value="-185">
                        <div class='tn-atom'><a href="index.html#projects" style="color: inherit">projects</a></div>
                    </div>
                    <!-- <div class='t396__elem tn-elem text tn-elem__6696810091689776446681 ' data-elem-id='1689776446681'
                        data-elem-type='text' data-field-top-value="19" data-field-left-value="-15"
                        data-field-width-value="24" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-trgels="1667394410801,1689756624614,1689776446681"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':0.7,'ro':0,'bl':'0','ea':'','dt':0}]"
                        data-field-top-res-320-value="49" data-field-left-res-320-value="125"
                        data-field-axisx-res-320-value="center" data-field-top-res-480-value="362"
                        data-field-left-res-480-value="-573" data-field-top-res-640-value="26"
                        data-field-left-res-640-value="-15" data-field-top-res-960-value="19"
                        data-field-left-res-960-value="-15">
                        <div class='tn-atom'><a href="#lg" style="color: inherit">EN</a></div>
                    </div> -->
                    <div class='t396__elem tn-elem text tn-elem__6696810091689776446684 ' data-elem-id='1689776446684'
                        data-elem-type='text' data-field-top-value="19" data-field-left-value="15"
                        data-field-width-value="87" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="hover"
                        data-animate-sbs-trgels="1667394307996,1689755803973,1689776446684"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':0.7,'ro':0,'bl':'0','ea':'','dt':0}]"
                        data-field-top-res-320-value="59px" data-field-left-res-320-value="-115px"
                        data-field-axisx-res-320-value="center" data-field-top-res-480-value="372"
                        data-field-left-res-480-value="-434" data-field-top-res-640-value="155"
                        data-field-left-res-640-value="-154" data-field-top-res-960-value="19"
                        data-field-left-res-960-value="15" data-field-axisx-res-960-value="left">
                        <div class='tn-atom'><a href="index.html#aboutus" style="color: inherit">About us</a></div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6696810091689776446687 ' data-elem-id='1689776446687'
                        data-elem-type='text' data-field-top-value="19" data-field-left-value="-89"
                        data-field-width-value="70" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-trgels="1667394410801,1689755761975,1689776446687"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':0.7,'ro':0,'bl':'0','ea':'','dt':0}]"
                        data-field-top-res-320-value="49" data-field-left-res-320-value="125"
                        data-field-axisx-res-320-value="center" data-field-top-res-480-value="362"
                        data-field-left-res-480-value="-536" data-field-top-res-640-value="186"
                        data-field-left-res-640-value="118" data-field-top-res-960-value="19"
                        data-field-left-res-960-value="-79">
                        <div class='tn-atom'><a href="index.html#contact" style="color: inherit">contacts</a></div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t396_init', function () {
                        t396_init('669681009');
                    });
                });</script><!-- /T396 -->
        </div>
        <div id="rec691913850" class="r t-rec" style=" " data-animationappear="off" data-record-type="794"><!-- T794 -->
            <div class="t794" data-tooltip-hook="#lg" data-tooltip-margin="15px" data-add-arrow="">
                <div class="t794__tooltip-menu">
                    <div class="t794__content">
                        <ul class="t794__list" role="menu" aria-label="">
                            <li class="t794__list_item t-submenublocks__item t-name t-name_xs"><a
                                    class="t794__typo t794__typo_691913850 t794__link t-name t-name_xs" role="menuitem"
                                    href="ru.html"
                                    style="color:#ffffff;font-size:16px;font-weight:400;font-family:'Rooftop';text-transform:uppercase;"
                                    data-menu-item-number="1">RU</a></li>
                            <li class="t794__list_item t-submenublocks__item t-name t-name_xs"><a
                                    class="t794__typo t794__typo_691913850 t794__link t-name t-name_xs" role="menuitem"
                                    href="page.html"
                                    style="color:#ffffff;font-size:16px;font-weight:400;font-family:'Rooftop';text-transform:uppercase;"
                                    data-menu-item-number="2">IT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t794_init', function () {
                        t794_init('691913850');
                    });
                });</script>
            <style>
                #rec691913850 .t794__tooltip-menu,
                a[data-tooltip-menu-id="691913850"]+.t794__tooltip-menu {
                    background-color: #262626;
                    text-align: left;
                    max-width: 285px;
                    border-radius: 0px;
                }

                #rec691913850 .t794__content {
                    background-color: #262626;
                    border-radius: 0px;
                }

                @media screen and (max-width: 980px) {
                    a[data-tooltip-menu-id="691913850"]+.t794__tooltip-menu {
                        max-width: 100%;
                    }
                }
            </style>
            <style>
                #rec691913850 .t794__typo.t-active,
                a[data-tooltip-menu-id="691913850"]+.t794__tooltip-menu .t794__typo.t-active {
                    color: #ffffff !important;
                }
            </style>
            <style>
                #rec691913850 .t794__typo:not(.t-active):hover {
                    color: #ffffff !important;
                    opacity: 0.4 !important;
                }
            </style>
            <style></style>
            <style>
                #rec691913850 .t794__tooltip-menu,
                a[data-tooltip-menu-id="691913850"]+.t794__tooltip-menu {
                    box-shadow: 0px 0px 0px rgba(0, 0, 0, 0);
                }
            </style>
        </div>
        <div id="rec669686034" class="r t-rec" style=" " data-animationappear="off" data-record-type="131"><!-- T123 -->
            <div class="t123">
                <div class="t-container_100 ">
                    <div class="t-width t-width_100 ">

                        <!--!ANNEXX!--><!--!ANX011-1!--!><!--![{"id":"","data":""},{"id":"anxcommentblock","data":""},{"id":"link","data":"https://kinescope.io/tX3FMRNhUpDnjEe5mb4ZBK"},{"id":"type-video","data":"mp4"},{"id":"kinescope-res","data":"1080p"},{"id":"shape","data":".tn-elem__6696810091664825892841"},{"id":"make-shape-transparent","data":"true"},{"id":"nocovervideo","data":"false"},{"id":"tone","data":"rgba(0, 0, 0, 0)"},{"id":"rotateshape","data":"0"},{"id":"roundshape","data":"-1"},{"id":"roundshape1200","data":"-1"},{"id":"roundshape960","data":"-1"},{"id":"roundshape640","data":"-1"},{"id":"roundshape480","data":"-1"},{"id":"video-shadow","data":"0px 0px 0px 0px rgba(255, 255, 255, 1)"},{"id":"video-shadow1200","data":"0px 0px 0px 0px rgba(255, 255, 255, 1)"},{"id":"video-shadow960","data":"0px 0px 0px 0px rgba(255, 255, 255, 1)"},{"id":"video-shadow640","data":"0px 0px 0px 0px rgba(255, 255, 255, 1)"},{"id":"video-shadow480","data":"0px 0px 0px 0px rgba(255, 255, 255, 1)"},{"id":"position-checkbox","data":"false"},{"id":"positionX","data":""},{"id":"positionY","data":""},{"id":"zoom-video","data":"100"},{"id":"zoom-video-hover","data":"100"},{"id":"zoom-video-duration","data":"0"},{"id":"zoom-video-delay","data":"0"},{"id":"inlinecontrols","data":"false"},{"id":"hide-cursor-on-video","data":"false"},{"id":"poster","data":""},{"id":"preload-disable","data":"false"},{"id":"previewvideo","data":""},{"id":"preview-on-pause","data":"false"},{"id":"preloader","data":""},{"id":"preloader-width","data":"20"},{"id":"shape-play-click","data":""},{"id":"shape-play-click-transparent","data":"true"},{"id":"shape-play-hover","data":""},{"id":"shape-play-hover-transparent","data":"false"},{"id":"switch-play-pause","data":"false"},{"id":"play-video-from-start","data":"none"},{"id":"play-video-when-mouseleave","data":"true"},{"id":"play-onload-page","data":"true"},{"id":"play-video-timeout","data":"0"},{"id":"play-video-unmute-load","data":"true"},{"id":"play-video-unmute-click","data":"false"},{"id":"play-video-loop","data":"true"},{"id":"video-hover-cursor","data":"false"},{"id":"removeelementload","data":""},{"id":"","data":""},{"id":"shape-play-analytic","data":""},{"id":"shape-pause-click","data":""},{"id":"shape-pause-click-transparent","data":"false"},{"id":"shape-pause-hover","data":""},{"id":"shape-pause-hover-transparent","data":"false"},{"id":"pause-video-when-mouseover","data":"false"},{"id":"switch-element-play-pause","data":"false"},{"id":"switch-element-play-pause-load","data":"play"},{"id":"play-video-visible-on-screen","data":"false"},{"id":"play-video-visible-on-screen-always","data":"false"},{"id":"play-video-on-start-visible-on-screen-always","data":"false"},{"id":"play-video-visible-on-screen-offset","data":"0"},{"id":"stop-video-visible-on-screen","data":"false"},{"id":"shape-unmute-click","data":""},{"id":"shape-unmute-click-transparent","data":"false"},{"id":"shape-mute-click","data":""},{"id":"shape-mute-click-transparent","data":"false"},{"id":"shape-unmute-hover","data":""},{"id":"shape-unmute-hover-transparent","data":"false"},{"id":"shape-mute-hover","data":""},{"id":"shape-mute-hover-transparent","data":"false"},{"id":"switch-element-mute-unmute","data":"false"},{"id":"switch-element-mute-unmute-load","data":"unmute"},{"id":"video-mute-hover-cursor","data":"false"},{"id":"","data":""},{"id":"shape-unmute-analytic","data":""},{"id":"switch-element-show-onhover-video","data":"false"},{"id":"switch-element-show-onhover-video-show-play","data":"false"},{"id":"switch-element-unmute-onhover-video","data":"false"},{"id":"switch-element-unmute-onhover-video-show-play","data":"false"},{"id":"show-elem-onplay","data":""},{"id":"hide-elem-onplay","data":""},{"id":"duration-show-hide-onplay","data":"500"},{"id":"onetimeshowonplay","data":"false"},{"id":"action-play-another-video","data":"mute"},{"id":"action-open-popup","data":"mute"},{"id":"action-open-tab","data":"mute,pause"},{"id":"action-close-tab","data":"mute,pause"},{"id":"fix-ig-fb-width","data":"false"},{"id":"fix-horizontal-scroll","data":"false"},{"id":"opera-fix-scale","data":"false"},{"id":"fix-html-elem","data":""},{"id":"","data":""},{"id":"adaptive-from","data":"0"},{"id":"adaptive-to","data":"20000"},{"id":"","data":""},{"id":"user-function-name-play","data":""},{"id":"user-function-name-pause","data":""},{"id":"user-function-name-end","data":""}]!-->
                        <script> (function () { function annexxAddStyle(numberMod, codestyle, idblock) { let styleBlock = document.querySelector('head > #annexxStyle' + numberMod + (idblock ? idblock : '')); if (!styleBlock) { document.querySelector('head').insertAdjacentHTML('beforeend', '<style id="annexxStyle' + numberMod + (idblock ? idblock : '') + '"></style>'); styleBlock = document.querySelector('head > #annexxStyle' + numberMod + (idblock ? idblock : '')); } let t = (function () { return !Array.from(styleBlock.childNodes).some(function (e) { if (e.textContent === codestyle) { return true; } }); }()); if (t) styleBlock.insertAdjacentHTML('beforeend', codestyle); } function annexxRemoveStyle(numberMod, idblock) { let block = document.querySelectorAll('head > #annexxStyle' + numberMod + (idblock ? idblock : '')); if (block.length) block.forEach(e => e.remove()); } if (typeof window.arrAnnexxVideoTooltip === 'undefined') { window.arrAnnexxVideoTooltip = []; } if ('') { annexxAddStyle('011', ` { display: none !important: } `, 'hide-elem-onplay') } if ('') { annexxAddStyle('011', ` /* fixing the bug with resizing zero html elements in the autoscale */ { zoom: initial !important; } `) } annexxAddStyle('011', ` /* Removing pop-up icons from videos in Opera */ #detach-button-host { display: none !important; } @media all and (display-mode: fullscreen) { div[class*="annexx-wrapper-video-in-shape"] video { border-radius: 0px; } } ${false ? ', {transition: opacity .3s linear 0s; opacity: 0; pointer-events: none;} .annexx-onhover-video-show, .annexx-onhover-video-show {opacity: 1; pointer-events: auto;}' : ''} ${false ? ', {transition: opacity .3s linear 0s; opacity: 0; pointer-events: none;} .annexx-onhover-video-show, .annexx-onhover-video-show {opacity: 1; pointer-events: auto;}' : ''} ${'' ? ` {display: none;} ${false ? ':hover {cursor: pointer;}' : ''}` : ''} ${'' && true ? ' .tn-atom {background-color: transparent !important;}' : ''} ${'' && false ? ':hover {cursor: default;}' : ''} ${'' && false ? ' .tn-atom {background-color: transparent !important;}' : ''} ${'' ? ` {display: none;} ${false ? ':hover {cursor: pointer;}' : ''}` : ''} ${'' && false ? ' .tn-atom {background-color: transparent !important;}' : ''} ${'' && false ? ':hover {cursor: default;}' : ''} ${'' && false ? ' .tn-atom {background-color: transparent !important;}' : ''} ${'' ? ` {display: none;} ${false ? ':hover {cursor: pointer;}' : ''}` : ''} ${'' && false ? ' .tn-atom {background-color: transparent !important;}' : ''} ${'' && false ? ':hover {cursor: default;}' : ''} ${'' && false ? ' .tn-atom {background-color: transparent !important;}' : ''} ${'' && false ? ':hover {cursor: default;}' : ''} ${'' && false ? ' .tn-atom {background-color: transparent !important;}' : ''} ${'' ? ` {display: none;} ${false ? ':hover {cursor: pointer;}' : ''}` : ''} ${'' && false ? ' .tn-atom {background-color: transparent !important;}' : ''} ${'' ? ' {display: none !important;}' : ''} ${'' ? ' {display: none !important;}' : ''} .hide-preload-shape { visibility: hidden !important; pointer-events: none !important; } `); let int = setInterval(function () { if (typeof $ === "function") { clearInterval(int); $(function () { let d = Math.round(Math.random() * 1e10), link = 'https://kinescope.io/tX3FMRNhUpDnjEe5mb4ZBK' ? (function () { let link = 'https://kinescope.io/tX3FMRNhUpDnjEe5mb4ZBK'; if (/kinescope/.test(link)) return link + '/' + ('1080p' !== '1080' ? '1080p' : '1080p'); else return link; }()) : false, $shape = '.tn-elem__6696810091664825892841' ? $('.tn-elem__6696810091664825892841') : false, shapeArr = (function () { let arr = []; if ($shape) { '.tn-elem__6696810091664825892841'.replace(/\s/g, '').split(/,\s|,/g).forEach(function (e) { arr.push(e); }); } return arr; }()), $previewvideo = '' ? $('') : false, previewOnPause = false, roundshape = -1, videoShadow = '-webkit-box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 1) !important;', defaultShadow = '-webkit-box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 1) !important;', inlinecontrols = false, preloader = '' ? '' : false, preloaderWidth = '20' ? '20' : false, $shapePlayClick = '' ? $('') : false, $shapePlayAnalytic = '' ? $('') : false, $shapePlayHover = '' ? $('') : false, playVideoFromStart = 'none' !== 'none' ? 'none' : 'none', playVideoFromStartState = false, playVideoWhenMouseleave = true, playOnloadPage = true, playVideoTimeout = 0 * 1000, playVideoUnmuteLoad = true, playVideoUnmuteClick = false, playVideoLoop = true, removeelementload = '' ? '' : false, $shapePauseClick = '' ? $('') : false, $shapePauseHover = '' ? $('') : false, pauseVideoWhenMouseover = false, switchElementPlayPause = false, switchElementPlayPauseLoad = 'play', switchElementPlayPauseFirst = switchElementPlayPause ? true : false, switchElementShowOnhoverVideo = false, switchElementUnmuteOnhoverVideo = false, playVideoVisibleOnScreen = false, playVideoVisibleOnScreenAlways = false, playVideoVisibleOnScreenOffset = 0, stopVideoVisibleOnScreen = false, fixVisibleTouch = false, $shapeUnmuteClick = '' ? $('') : false, $shapeMuteClick = '' ? $('') : false, $shapeMuteHover = '' ? $('') : false, $shapeUnmuteHover = '' ? $('') : false, switchElementMuteUnmute = false, switchElementMuteUnmuteLoad = 'unmute', $shapeUnmuteAnalytic = '' ? $('') : false, actionPlayAnotherVideo = 'mute', actionOpenPopup = 'mute', adaptiveFrom = 0, adaptiveTo = 20000, adaptiveCheck = adaptiveFrom < adaptiveTo ? ((adaptiveFrom < window.innerWidth && adaptiveFrom < window.outerWidth && adaptiveTo > window.innerWidth && adaptiveTo > window.outerWidth) ? true : false) : true, userFunctionNamePlay = '', userFunctionNamePause = '', userFunctionNameEnd = '', isSafari = (function () { let ua = navigator.userAgent; if (/safari/gi.test(ua) && !/chrome/gi.test(ua)) return true; else return false; })(), isMobile = (function () { let ua = navigator.userAgent; if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(ua) || (!/windows/i.test(ua) && /safari/i.test(ua) && navigator.maxTouchPoints > 1)) return true; else return false; }()), timeoutReady = false, playHTML = false, $showElemOnplay = '' ? $('') : false, $hideElemOnplay = '' ? $('') : false; if ($showElemOnplay) { annexxAddStyle('011', ` { transition: opacity 500ms linear; } .hide-elem-onplay { opacity: 0; pointer-events: none !important; } `); $showElemOnplay.addClass('hide-elem-onplay'); annexxRemoveStyle('011', 'hide-elem-onplay'); } if ($hideElemOnplay) { annexxAddStyle('011', ` { transition: opacity 500ms linear; } .hide-elem-onplay { opacity: 0; pointer-events: none !important; } `); } if ($shapePlayAnalytic) { $shapePlayAnalytic.find('.tn-atom').removeAttr('href'); } if (false && false) $shapePlayClick.css('opacity', 1); if (false && false) { if (switchElementMuteUnmute) { if (switchElementMuteUnmuteLoad === 'unmute') $shapeUnmuteClick.css('opacity', 1); else if (switchElementMuteUnmuteLoad === 'mute') $shapeMuteClick.css('opacity', 1); } else $shapeMuteClick.css('opacity', 1); } if ($shapeUnmuteAnalytic) { $shapeUnmuteAnalytic.find('.tn-atom').removeAttr('href'); } shapeArr.forEach(function (e) { /*if (isSafari) annexxAddStyle('011',`${e} .tn-atom {display: contents !important;}`);*/ if (false) annexxAddStyle('011', `${e}, ${e} video::-webkit-media-controls-fullscreen-button, ${e} video::-webkit-media-controls-play-button, ${e} video::-webkit-media-controls-timeline, ${e} video::-webkit-media-controls-current-time-display, ${e} video::-webkit-media-controls-time-remaining-display, ${e} video::-webkit-media-controls-mute-button, ${e} video::-webkit-media-controls-toggle-closed-captions-button, ${e} video::-webkit-media-controls-volume-slider {cursor: none;}`); if ('rgba(0, 0, 0, 0)' !== 'rgba(0, 0, 0, 0)') { annexxAddStyle('011', ` ${e} .toned-video { position: absolute; top: 0; width: 100%; height: 100%; z-index: 1; background-color: ${(function () { if (!/rgb/.test('rgba(0, 0, 0, 0)')) return '#'; else return ''; })()}rgba(0, 0, 0, 0); } `); } if (100 !== 100 || 100 !== 100) { annexxAddStyle('011', ` ${e} { ${(function () { return $(e).data("animate-sbs-event") ? "" : "overflow: hidden;"; }())} border-radius:${(function () { return getComputedStyle($(e).find(".tn-atom")[0]).borderRadius; }())}; } ${e} .tn-atom, ${e} .tn-atom__sbs-anim-wrapper { overflow: hidden; } `); } }); function addVideoShapeBorder() { annexxRemoveStyle('011', 'annexx-video-border' + d); shapeArr.forEach(function (e) { annexxAddStyle('011', ` ${e} .tn-atom {border-width: 0 !important; border-color: transparent !important;} ${e} .tn-atom video, ${e} .tn-atom .toned-video {${(function () { let t = '', el = document.querySelector(e).querySelector('.tn-atom'); if (getComputedStyle(el).borderStyle !== undefined) t += 'border-style:' + getComputedStyle(el).borderStyle + ';'; if (getComputedStyle(el).borderWidth !== undefined) t += 'border-width:' + Math.ceil(parseFloat(getComputedStyle(el).borderWidth)) + 'px;'; if (getComputedStyle(el).borderRadius !== undefined) t += 'border-radius:' + getComputedStyle(el).borderRadius + ';'; if (getComputedStyle(el).borderColor !== undefined) t += 'border-color:' + getComputedStyle(el).borderColor + ';'; return t; }())} } `, 'annexx-video-border' + d); }); } addVideoShapeBorder(); window.addEventListener('resize', addVideoShapeBorder); if (adaptiveCheck && $shape && link) { function fixImgSrc(i, e) { let $img = $(e).find('img[data-original]'); if ($img.length) $img.attr('src', $img.data('original')); } if ($shapePlayClick) $shapePlayClick.each(fixImgSrc); if ($shapePauseClick) $shapePauseClick.each(fixImgSrc); if ($shapeUnmuteClick) $shapeUnmuteClick.each(fixImgSrc); if ($shapeMuteClick) $shapeMuteClick.each(fixImgSrc); if ($shapeMuteHover) $shapeMuteHover.each(fixImgSrc); if ($shapeUnmuteHover) $shapeUnmuteHover.each(fixImgSrc); if ((userFunctionNamePlay || userFunctionNamePause || userFunctionNameEnd) && !window.arrAnnexxVideoTooltip.userFunction) window.arrAnnexxVideoTooltip.userFunction = []; function playV(el, unmuteClick, playVideoFromStart) { let action = false; $shape.find('video').data('mobileHasPlay', true); setTimeout(function () { playHTML = false; }, 500); if (userFunctionNamePlay) { window.arrAnnexxVideoTooltip.userFunction.forEach(function (e) { if (e === userFunctionNamePlay) window[e](); }); } if (el) { window.arrAnnexxVideoTooltip.forEach(function (e) { if (e.playElClick === d && el.el === e.el) { e.el.play().then(function () { fixVisibleTouch = true; }).catch(e => { }); if (!e.buttonMute) { setTimeout(function () { e.el.muted = false; }, 200); } } else { if (e.service === 'direct') actionDirectVideo(e); else if (e.service === 'youtube') e.el.pauseVideo(); else if (e.service === 'vimeo') e.el.pause(); } }); } else { window.arrAnnexxVideoTooltip.forEach(function (e) { if (e.playElClick === d) { if (playVideoFromStart === 'once' && !playVideoFromStartState) { setTimeout(function () { playVideoFromStartState = true; }, 200); e.el.currentTime = 0; } else if (playVideoFromStart === 'always') e.el.currentTime = 0; e.el.play(); if (unmuteClick) { setTimeout(function () { e.el.muted = false; if (switchElementMuteUnmute) { if ($shapeMuteClick) $shapeMuteClick.css('display', 'table'); if ($shapeUnmuteClick) $shapeUnmuteClick.hide(); } }, 200); } } else { if (e.service === 'direct') actionDirectVideo(e); else if (e.service === 'youtube') e.el.pauseVideo(); else if (e.service === 'vimeo') e.el.pause(); } }); } function actionDirectVideo(e) { action = true; switch (e.actionPlayAnotherVideo) { case 'mute': e.el.muted = true; e.buttonMute = true; if (switchElementMuteUnmute) { if (e.elements.shapeMuteClick) e.elements.shapeMuteClick.hide(); if (e.elements.shapeUnmuteClick) e.elements.shapeUnmuteClick.css('display', 'table'); } break; case 'pause': e.el.pause(); if (switchElementPlayPause) { if (e.elements.shapePauseClick) e.elements.shapePauseClick.hide(); if (e.elements.shapePlayClick) e.elements.shapePlayClick.css('display', 'table'); } break; case 'pauseandstart': e.el.pause(); e.el.currentTime = 0; if (switchElementPlayPause) { if (e.elements.shapePauseClick) e.elements.shapePauseClick.hide(); if (e.elements.shapePlayClick) e.elements.shapePlayClick.css('display', 'table'); } break; } } if (switchElementPlayPause && !action) { if (switchElementPlayPauseFirst) { setTimeout(function () { switchElementPlayPauseFirst = false; }, 500); } else { if ($shapePlayClick) $shapePlayClick.hide(); if ($shapePauseClick) $shapePauseClick.css('display', 'table'); }; } } function pauseVAddon() { if (userFunctionNamePause) { window.arrAnnexxVideoTooltip.userFunction.forEach(function (e) { if (e === userFunctionNamePause) window[e](); }); } if (switchElementPlayPause) { if ($shapePauseClick) $shapePauseClick.hide(); if ($shapePlayClick) $shapePlayClick.css('display', 'table'); } } function pauseV() { window.arrAnnexxVideoTooltip.forEach(function (e) { if (e.playElClick === d) { e.el.pause(); } }); } function mute() { /* playVideoUnmuteClick = false; */ window.arrAnnexxVideoTooltip.forEach(function (e) { if (e.playElClick === d) { e.el.muted = true; e.buttonMute = true; } }); if (switchElementMuteUnmute) { if ($shapeMuteClick) $shapeMuteClick.hide(); if ($shapeUnmuteClick) $shapeUnmuteClick.css('display', 'table'); } } function unmute() { window.arrAnnexxVideoTooltip.forEach(function (e) { if (e.playElClick === d) { e.el.muted = false; e.buttonMute = false; } }); if (switchElementMuteUnmute) { if ($shapeUnmuteClick) $shapeUnmuteClick.hide(); if ($shapeMuteClick) $shapeMuteClick.css('display', 'table'); } } function playOnTimeout(e) { e.muted = true; if (isMobile) setTimeout(playV, 200); else playV(); } annexxAddStyle('011', ` .annexx-wrapper-video-in-shape${d} { ${0 ? 'transform: rotate(' + 0 + 'deg);' : ''} } .annexx-wrapper-video-in-shape${d} .tn-atom { ${!false ? 'object-fit: cover;' : ''} ${true ? 'background-color: transparent !important;' : ''} ${100 !== 100 ? `transform: scale(100%) ${isSafari ? 'translateZ(0)' : ''};` : ''} transition: transform 0ms linear; } .annexx-wrapper-video-in-shape${d} .tn-atom:hover { ${`transform: scale(100%) ${isSafari ? 'translateZ(0)' : ''}; transition: transform 0ms linear 0ms;`} } .annexx-wrapper-video-in-shape${d} video { ${!false ? 'object-fit: cover;' : ''} ${false ? '' : 'height: 100%;'} width: 100%; height: 100%; position: absolute; top: 0; ${videoShadow !== defaultShadow ? videoShadow : ''} ${-1 > -1 ? 'border-radius: -1px !important;' : ''} ${(function () { return false ? `object-position:${0 + (function () { let posX = ''; if (/:/.test(posX)) { let arrW = ''.replace(/[^\d|,|:|\.|\-]/gi, '').split(',').map(e => e.split(':').map(e => +e)).sort((a, b) => a[0] - b[0]), ww = window.innerWidth, p = 0; arrW.forEach(e => { if (ww >= e[0]) { p = e[1]; return true; } else return false; }); return p; } else return +posX; }())}px ${0 + (function () { let posY = ''; if (/:/.test(posY)) { let arrW = ''.replace(/[^\d|,|:|\.|\-]/gi, '').split(',').map(e => e.split(':').map(e => +e)).sort((a, b) => a[0] - b[0]), ww = window.innerWidth, p = 0; arrW.forEach(e => { if (ww >= e[0]) { p = e[1]; return true; } else return false; }); return p; } else return +posY; }())}px;` : ''; }())} } ${roundshape > -1 ? '.annexx-wrapper-video-in-shape' + d + ' {border-radius: -1px !important;} .annexx-wrapper-video-in-shape' + d + ' .tn-atom {border-radius: -1px !important;}' : ''} ${(function () { if ('rgba(0, 0, 0, 0)' !== 'rgba(0, 0, 0, 0)') { return `.annexx-wrapper-video-in-shape${d} .toned-video { ${-1 > -1 ? 'border-radius: -1px !important;' : ''} ${0 ? 'transform: rotate(' + 0 + 'deg); z-index: 1' : ''} }`; } else return ''; }())} `); if ('-webkit-box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 1) !important;' !== defaultShadow) { annexxAddStyle('011', ` @media screen and (max-width: 1200px) { .annexx-wrapper-video-in-shape${d} video { ${'-webkit-box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 1) !important;'} } } `); } if ('-webkit-box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 1) !important;' !== defaultShadow) { annexxAddStyle('011', ` @media screen and (max-width: 960px) { .annexx-wrapper-video-in-shape${d} video { ${'-webkit-box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 1) !important;'} } } `); } if ('-webkit-box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 1) !important;' !== defaultShadow) { annexxAddStyle('011', ` @media screen and (max-width: 640px) { .annexx-wrapper-video-in-shape${d} video { ${'-webkit-box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 1) !important;'} } } `); } if ('-webkit-box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 1) !important;' !== defaultShadow) { annexxAddStyle('011', ` @media screen and (max-width: 480px) { .annexx-wrapper-video-in-shape${d} video { ${'-webkit-box-shadow: 0px 0px 0px 0px rgba(255, 255, 255, 1) !important;'} } } `); } annexxAddStyle('011', ` ${(function () { if (-1 > -1) { return ` @media screen and (max-width: 1200px) { .annexx-wrapper-video-in-shape${d} video { border-radius: ${-1}px !important; } .annexx-wrapper-video-in-shape${d} { border-radius: ${-1}px !important; } .annexx-wrapper-video-in-shape${d} .tn-atom { border-radius: ${-1}px !important; } ${(function () { if ('rgba(0, 0, 0, 0)' !== 'rgba(0, 0, 0, 0)') { return `.annexx-wrapper-video-in-shape${d} .toned-video { border-radius: -1px !important; }`; } else return ''; }())} } `; } else return ''; }())} ${(function () { if (-1 > -1) { return ` @media screen and (max-width: 960px) { .annexx-wrapper-video-in-shape${d} video { border-radius: ${-1}px !important; } .annexx-wrapper-video-in-shape${d} { border-radius: ${-1}px !important; } .annexx-wrapper-video-in-shape${d} .tn-atom { border-radius: ${-1}px !important; } ${(function () { if ('rgba(0, 0, 0, 0)' !== 'rgba(0, 0, 0, 0)') { return `.annexx-wrapper-video-in-shape${d} .toned-video { border-radius: -1px !important; }`; } else return ''; }())} } `; } else return ''; }())} ${(function () { if (-1 > -1) { return ` @media screen and (max-width: 640px) { .annexx-wrapper-video-in-shape${d} video { border-radius: ${-1}px !important; } .annexx-wrapper-video-in-shape${d} { border-radius: ${-1}px !important; } .annexx-wrapper-video-in-shape${d} .tn-atom { border-radius: ${-1}px !important; } ${(function () { if ('rgba(0, 0, 0, 0)' !== 'rgba(0, 0, 0, 0)') { return `.annexx-wrapper-video-in-shape${d} .toned-video { border-radius: -1px !important; }`; } else return ''; }())} } `; } else return ''; }())} ${(function () { if (-1 > -1) { return ` @media screen and (max-width: 480px) { .annexx-wrapper-video-in-shape${d} video { border-radius: ${-1}px !important; } .annexx-wrapper-video-in-shape${d} { border-radius: ${-1}px !important; } .annexx-wrapper-video-in-shape${d} .tn-atom { border-radius: ${-1}px !important; } ${(function () { if ('rgba(0, 0, 0, 0)' !== 'rgba(0, 0, 0, 0)') { return `.annexx-wrapper-video-in-shape${d} .toned-video { border-radius: -1px !important; }`; } else return ''; }())} } `; } else return ''; }())} `); if (preloader) { shapeArr.forEach(function (e) { annexxAddStyle('011', `${e} .annexx-preloader-video-shape { position: absolute; top: 0; left: 0; display: flex; justify-content: center; align-items: center; width: 100%; height: 100%; } ${e} .annexx-preloader-video-shape img { width: ${/%/.test(preloaderWidth) ? preloaderWidth : preloaderWidth + "px"}; } `); }); } let ll = $shape.length; function fixSizeVideoShape() { let shape = document.querySelectorAll('.annexx-wrapper-video-in-shape' + d); shape.forEach(function (e) { let tnatom = e.querySelector('.tn-atom'); /* исправил */ /* tnatom.style.width = getComputedStyle(e).width; */ /* tnatom.style.height = getComputedStyle(e).height; */ tnatom.style.width = ""; tnatom.style.height = ""; }); } if (isSafari) { shapeArr.forEach(e => { let tr = getComputedStyle(document.querySelector(e + " .tn-atom")).transform; if (tr !== "none") { annexxAddStyle('011', ` ${e} .media-controls { width: 100% !important; height: 100% !important; } ${e} .controls-bar.bottom { top: unset !important; bottom: 0 !important; } `); } }); } new Promise(function (resolve, reject) { $shape.each(function (i, e) { let $e = $(e), $tnatom = $e.find('.tn-atom'), autoplay = playOnloadPage && !playVideoTimeout && !playVideoVisibleOnScreen; $e.addClass('annexx-wrapper-video-in-shape' + d); fixSizeVideoShape(); $tnatom.html(`${preloader ? `<div class="annexx-preloader-video-shape"><img src=${preloader}></div>` : ''}<video ${'' ? "poster=''" : ""} ${!autoplay && !playVideoUnmuteLoad && !$shapePlayHover ? "" : "muted"} ${playVideoLoop ? "loop" : ""} ${inlinecontrols && !(isSafari && ((getComputedStyle($tnatom[0]).transform !== "none" && getComputedStyle($tnatom[0]).transform !== "matrix(1, 0, 0, 1, 0, 0)") || 0)) ? "controls" : ""} ${autoplay ? "autoplay" : ""} playsinline preload=${false && isMobile ? "none" : "metadata"} pip="false" style="display: inline; background-color: ${$tnatom.css('background-color')};" ${!autoplay && !playVideoUnmuteLoad && !$shapePlayHover ? "" : "onloadedmetadata='this.muted = true'"}><source src="${/dropbox\.com/i.test(link) ? link.replace('dropbox.com', 'dl.dropboxusercontent.com') + '#t=0.001' : /drive.google/i.test(link) && /file\/d/i.test(link) ? 'https://drive.google.com/uc?export=download&confirm=no_antivirus&id=' + link.split('file/d/index.html')[1].split('index.html')[0] + '#t=0.001' : /#t=/i.test(link) ? link : link + '#t=0.001'}" type="video/${'mp4'}"></video> `); let v = $e.find('video')[0], f = function () { v.pause(); annexxAddStyle('011', '.' + e.className.replace(/\s+/g, '.') + ' {display:table;}'); let $removeelementload = $(''); if ($removeelementload.length) $('').remove(); window.arrAnnexxVideoTooltip.push({ 'el': $e.find('video')[0], 'service': 'direct', 'modtype': '011', 'playElClick': d, 'buttonMute': 'no', 'actionPlayAnotherVideo': actionPlayAnotherVideo, 'actionOpenPopup': actionOpenPopup, 'actionCloseTab': 'mute,pause'.split(','), elements: { shapePlayClick: $shapePlayClick, shapePlayHover: $shapePlayHover, shapePauseClick: $shapePauseClick, shapePauseHover: $shapePauseHover, shapeUnmuteClick: $shapeUnmuteClick, shapeMuteClick: $shapeMuteClick, shapeMuteHover: $shapeMuteHover, shapeUnmuteHover: $shapeUnmuteHover }, 'switchElementMuteUnmute': switchElementMuteUnmute, function: { playV: playV, pauseV: pauseV, mute: mute } }); ll--; if (!ll) resolve(); if (userFunctionNameEnd) { v.addEventListener('ended', function () { window.arrAnnexxVideoTooltip.userFunction.forEach(function (e) { if (e === userFunctionNameEnd) window[e](); }); }); } if (autoplay) { v.muted = true; try { v.play(); } catch (e) { } } v.removeEventListener('canplay', f); function showElemOnplay() { if ($showElemOnplay) { $showElemOnplay.removeClass('hide-elem-onplay'); } if ($hideElemOnplay) { $hideElemOnplay.addClass('hide-elem-onplay'); } if (false) { this.removeEventListener('play', showElemOnplay); this.removeEventListener('pause', hideElemOnplay); } if ($previewvideo) { $previewvideo.addClass("hide-preload-shape"); if (!previewOnPause) $previewvideo = false; } } function hideElemOnplay() { if ($showElemOnplay) { $showElemOnplay.addClass('hide-elem-onplay'); } if ($hideElemOnplay) { $hideElemOnplay.removeClass('hide-elem-onplay'); } if ($previewvideo) { $previewvideo.removeClass("hide-preload-shape"); } } v.addEventListener('play', showElemOnplay); v.addEventListener('pause', hideElemOnplay); /* После обновления стал скакать зум видео */ /* $tnatom.css('zoom','inherit'); */ setTimeout(function () { $tnatom.css('zoom', ''); window.dispatchEvent(new CustomEvent('resize')); v.addEventListener('webkitfullscreenchange', function (e) { let fullscreen = e.target.webkitDisplayingFullscreen !== undefined ? e.target.webkitDisplayingFullscreen : 'nowebkit'; if (fullscreen !== 'nowebkit') { if (fullscreen) { v.style.objectFit = 'contain'; } else { v.style.objectFit = ''; } } }); }, 200); }; if (true) { v.addEventListener('canplay', f); } else { v.addEventListener('loadedmetadata', f); v.muted = true; v.play(); } if ('rgba(0, 0, 0, 0)' !== 'rgba(0, 0, 0, 0)') { e.querySelector('.tn-atom').insertAdjacentHTML('afterBegin', '<div class="toned-video"></div>'); } if (switchElementShowOnhoverVideo && $shapePlayClick && $shapePlayClick.length && $shapePauseClick && $shapePauseClick.length) { let timeout, firstHover = false; function mousemoveShow() { if (false && false && !firstHover) { firstHover = true; $shapePlayClick.css('opacity', ''); } if (timeout) clearTimeout(timeout); if (!$shapePlayClick.hasClass('annexx-onhover-video-show')) $shapePlayClick.addClass('annexx-onhover-video-show'); if (!$shapePauseClick.hasClass('annexx-onhover-video-show')) $shapePauseClick.addClass('annexx-onhover-video-show'); timeout = setTimeout(function () { $shapePlayClick.add($shapePauseClick).removeClass('annexx-onhover-video-show'); }, 2e3); } if ($previewvideo) $previewvideo.on('mousemove', mousemoveShow); $e.on('mousemove', mousemoveShow); } if (switchElementUnmuteOnhoverVideo && $shapeUnmuteClick && $shapeUnmuteClick.length && $shapeMuteClick && $shapeMuteClick.length) { let timeout, firstHover = false; function mousemoveShow() { if (false && false && !firstHover) { firstUnmuteHover = true; if (switchElementMuteUnmute) { if (switchElementMuteUnmuteLoad === 'unmute') $shapeUnmuteClick.css('opacity', ''); else if (switchElementMuteUnmuteLoad === 'mute') $shapeMuteClick.css('opacity', ''); } else $shapeUnmuteClick.css('opacity', ''); } if (timeout) clearTimeout(timeout); if (!$shapeUnmuteClick.hasClass('annexx-onhover-video-show')) $shapeUnmuteClick.addClass('annexx-onhover-video-show'); if (!$shapeMuteClick.hasClass('annexx-onhover-video-show')) $shapeMuteClick.addClass('annexx-onhover-video-show'); timeout = setTimeout(function () { $shapeUnmuteClick.add($shapeMuteClick).removeClass('annexx-onhover-video-show'); }, 2e3); } if ($previewvideo) $previewvideo.on('mousemove', mousemoveShow); $e.on('mousemove', mousemoveShow); } setTimeout(function () { /*Закомментировал блок ниже, так как тильда вроде попарвила масштабирование*/ /*if (/opr/i.test(navigator.userAgent) && false) { annexxAddStyle('011',` .annexx-wrapper-video-in-shape${d}:not(.t-animate), .annexx-wrapper-video-in-shape${d} .tn-atom__scale-wrapper { overflow: hidden; } .annexx-wrapper-video-in-shape${d}:not(.t-animate) .tn-atom__scale-wrapper { transform: none !important; } `); } else if (/firefox/i.test(navigator.userAgent)) { annexxAddStyle('011',` .annexx-wrapper-video-in-shape${d} .tn-atom__scale-wrapper { overflow: hidden; } `); } else if (!false && !/opr/i.test(navigator.userAgent) && !false) { annexxAddStyle('011',` .annexx-wrapper-video-in-shape${d} { overflow: hidden; } `); }*/ let $tab = $('.t395__tab, .t397__tab'), videoBlockId = +$e.closest('.r').attr('id').replace(/\D+/, ''), $tabVideo = $tab.filter((i, e) => $(e).data('tab-rec-ids').toString().split(',').some(e => +e === videoBlockId)); if ($tabVideo.length) { function processTab() { if ($tabVideo[0].classList.value.indexOf('tab_active') !== -1) { let action = 'mute,pause'.split(','); if (action.some(e => e === 'mute')) v.muted = true; else v.muted = false; if (action.some(e => e === 'pause')) v.pause(); else v.play(); if (action.some(e => e === 'start')) v.currentTime = 0; } else { let action = 'mute,pause'.split(','); if (action.some(e => e === 'mute')) v.muted = true; else v.muted = false; if (action.some(e => e === 'pause')) v.pause(); else v.play(); } } let config = { attributes: true, childList: false, characterData: false, }; observer = new MutationObserver(processTab); observer.observe($tabVideo[0], config); } /* Баг с тем что не применяется автоскейл тильды к шейпам с видео*/ /*function autoscaleVideoFix() { setTimeout(function(){ if ($e.closest('.t396__artboard_scale').length && !e.style.zoom) { $e.css('transform','scale(' + window.tn_scale_factor + ')'); } },1e3); } autoscaleVideoFix(); $(window).on("resize", autoscaleVideoFix);*/ }, 500); }); }).then(function () { if (!window.annexxTabClickPauseVideo) window.annexxTabClickPauseVideo = true; $('.t395__tab').on("click", e => { if ($(e.target).hasClass("t395__tab_active")) return false; $(e.target).closest(".t395__tab").siblings(".t395__tab:not('.t395__tab_active')").each((i, el) => { let id = "rec" + $(el).data("tab-rec-ids"); arrAnnexxVideoTooltip.forEach((e) => { if ($(e.el).closest(".r").attr("id") === id) e.function.pauseV(); }); }); }); let intFixSizeVideoShape; window.addEventListener('resize', function () { clearTimeout(intFixSizeVideoShape); intFixSizeVideoShape = setTimeout(fixSizeVideoShape, 500); }); $shape.find('.annexx-preloader-video-shape').fadeOut(500, function () { $(this).remove(); }); function isScrolledIntoView(elem, alwaysToStart) { let tnelem = elem.closest(".tn-elem"), docViewTop = window.pageYOffset, docViewBottom = docViewTop + window.innerHeight, elemHeight = elem.clientHeight, elemTop = isSafari && !isMobile && +tnelem.style.zoom ? (window.scrollY - elem.closest(".r").offsetTop) + tnelem.offsetTop * +tnelem.style.zoom + window.scrollY : elem.getBoundingClientRect().top + window.scrollY + (isMobile ? window.innerHeight / 2 : 0), elemBottom = elemTop + elemHeight, inViewport = elemBottom + playVideoVisibleOnScreenOffset <= docViewBottom + (elemHeight / 2) && elemTop >= docViewTop - (elemHeight / 2); return inViewport; }; if (false && !(isSafari && isMobile)) { window.arrAnnexxVideoTooltip.forEach(function (e, i) { if (e.playElClick && e.playElClick === d) { $(window).on('scroll', function () { let docViewTop = window.pageYOffset, docViewBottom = docViewTop + window.innerHeight, elemHeight = e.el.clientHeight, elemTop = e.el.getBoundingClientRect().top + window.scrollY, elemBottom = elemTop + elemHeight; if (elemTop > docViewBottom || elemBottom < docViewTop) e.el.currentTime = 0; }); } }); } if (playVideoTimeout && playVideoVisibleOnScreen) { window.arrAnnexxVideoTooltip.forEach(function (e, i) { if (e.playElClick && e.playElClick === d) { $(window).on('mousemove.screenPlayStart' + i + ' scroll.screenPlayStart' + i, function () { if (e.el.paused && isScrolledIntoView(e.el)) { function alwaysVideoOnScroll() { $(window).on('scroll.screenPlayStart' + i, function () { if (isScrolledIntoView(e.el)) { if (false) { e.el.muted = true; e.buttonMute = true; playV(e); } } }); } if (isMobile) { let int = setInterval(function () { if (rv) { firstLoadVideo(); clearInterval(int); setTimeout(function () { $shape.find('video').each(function (i, e) { playOnTimeout(e); }); timeoutReady = true; if (playVideoVisibleOnScreenAlways) alwaysVideoOnScroll(); }, playVideoTimeout); if (fixVisibleTouch) { $(window).off('mousemove.screenPlayStart' + i + ' scroll.screenPlayStart' + i); } } }, 500); } else { setTimeout(function () { $shape.find('video').each(function (i, e) { playOnTimeout(e); }); timeoutReady = true; if (playVideoVisibleOnScreenAlways) alwaysVideoOnScroll(); }, playVideoTimeout); $(window).off('mousemove.screenPlayStart' + i + ' scroll.screenPlayStart' + i); } } }); } }); } else if (playVideoTimeout) { if (isMobile) { let int = setInterval(function () { if (rv) { firstLoadVideo(); clearInterval(int); setTimeout(function () { $shape.find('video').each(function (i, e) { playOnTimeout(e); }); timeoutReady = true; }, playVideoTimeout); } }, 500); } else { setTimeout(function () { $shape.find('video').each(function (i, e) { playOnTimeout(e); }); timeoutReady = true; }, playVideoTimeout); } } else if (playVideoVisibleOnScreen) { window.arrAnnexxVideoTooltip.forEach(function (e, i) { if (e.playElClick && e.playElClick === d) { $(window).on('scroll.screenPlayStart' + i, function () { if (isScrolledIntoView(e.el)) { if (e.el.paused) { e.el.muted = true; e.buttonMute = true; playV(e); if (!playVideoVisibleOnScreenAlways) { if (isMobile) { if (fixVisibleTouch) { $(window).off('scroll.screenPlayStart' + i); } } else { $(window).off('scroll.screenPlayStart' + i); } } } } }); } }) }; if (stopVideoVisibleOnScreen) { window.arrAnnexxVideoTooltip.forEach(function (e, i) { if (e.playElClick && e.playElClick === d) { $(window).on('scroll', function () { if (!e.el.paused && !isScrolledIntoView(e.el)) pauseV(); }); } }) } let rv = false; window.arrAnnexxVideoTooltip.forEach(function (e, i) { if (e.playElClick === d) { e.el.addEventListener('play', function (e) { if (!playHTML) { if (!playVideoVisibleOnScreen) { window.arrAnnexxVideoTooltip.forEach(el => { if (el.el === e.target) playV(el); }); } playHTML = true; } if (switchElementPlayPause) { if (switchElementPlayPauseFirst) { setTimeout(function () { switchElementPlayPauseFirst = false; }, 1e3); } else { if ($shapePlayClick) $shapePlayClick.hide(); if ($shapePauseClick) $shapePauseClick.css('display', 'table'); }; } }); e.el.addEventListener('pause', function () { pauseVAddon(); }); e.el.addEventListener('volumechange', function (e) { if (!e.target.muted || !e.target.volume) { unmute(); if (!e.target.paused) { window.arrAnnexxVideoTooltip.forEach(function (e) { if (e.playElClick !== d) { setTimeout(function () { e.el.muted = true; if (e.switchElementMuteUnmute) { if (e.elements.shapeMuteClick) e.elements.shapeMuteClick.hide(); if (e.elements.shapeUnmuteClick) e.elements.shapeUnmuteClick.css('display', 'table'); } }, 200); } }); } } else mute(); }); } }); if (!switchElementPlayPause) { if ($shapePlayClick) $shapePlayClick.css('display', 'table'); if ($shapePauseClick) $shapePauseClick.css('display', 'table'); } else { switch (switchElementPlayPauseLoad) { case 'play': if ($shapePlayClick) $shapePlayClick.css('display', 'table'); break; case 'pause': if ($shapePauseClick) $shapePauseClick.css('display', 'table'); break; } } function checkPlayed() { let r = false; window.arrAnnexxVideoTooltip.forEach(function (e) { if (e.playElClick === d && !e.el.paused) r = true; }); return r; } if ($shapePlayClick) { $shapePlayClick.on('click', function () { if (false && checkPlayed()) { pauseV(); if (switchElementPlayPause) { $shapePauseClick.hide(); if ($shapePlayClick) $shapePlayClick.css('display', 'table'); } return false; } playV(undefined, playVideoUnmuteClick, playVideoFromStart); if (switchElementPlayPause) { $shapePlayClick.hide(); if ($shapePauseClick) $shapePauseClick.css('display', 'table'); } if ($shapePlayAnalytic) { let $el = $shapePlayAnalytic.find('a'); Tilda.sendEventToStatistics($el.data('tilda-event-name'), $el.text()); } }); } if ($shapePlayHover) { $shapePlayHover.on('mouseover', function () { if (false && checkPlayed()) { pauseV(); if (switchElementPlayPause) { $shapePauseClick.hide(); if ($shapePlayClick) $shapePlayClick.css('display', 'table'); } return false; } if (playVideoTimeout && !timeoutReady) return false; playV(undefined, undefined, playVideoFromStart); if (switchElementPlayPause) { if ($shapePlayClick) $shapePlayClick.hide(); if ($shapePauseClick) $shapePauseClick.css('display', 'table'); } }); if (!playVideoWhenMouseleave) { $shapePlayHover.on('mouseout', function () { if (playVideoTimeout && !timeoutReady) return false; window.arrAnnexxVideoTooltip.forEach(function (e) { if (e.playElClick === d) { pauseV(); if (switchElementPlayPause) { if ($shapePauseClick) $shapePauseClick.hide(); if ($shapePlayClick) $shapePlayClick.css('display', 'table'); } } }); }); } } if ($shapePauseClick) { $shapePauseClick.on('click', function () { pauseV(); if (switchElementPlayPause) { $shapePauseClick.hide(); if ($shapePlayClick) $shapePlayClick.css('display', 'table'); } }); } if ($shapePauseHover) { $shapePauseHover.on('mouseover', pauseV); if (pauseVideoWhenMouseover) { $shapePauseHover.on('mouseout', function () { if (playVideoTimeout && !timeoutReady) return false; playV(); if (switchElementPlayPause) { if ($shapePlayClick) $shapePlayClick.hide(); if ($shapePauseClick) $shapePauseClick.css('display', 'table'); } }); } } if ($shapeMuteClick) { $shapeMuteClick.on('click', function () { playVideoUnmuteClick = false; mute(); }); } if ($shapeUnmuteClick) { $shapeUnmuteClick.on('click', function () { playVideoUnmuteClick = true; unmute(); }); if ($shapeUnmuteAnalytic) { let $el = $shapeUnmuteAnalytic.find('a'); Tilda.sendEventToStatistics($el.data('tilda-event-name'), $el.text()); } } if ($shapeMuteHover) $shapeMuteHover.on('mouseover', mute); if ($shapeUnmuteHover) $shapeUnmuteHover.on('mouseover', unmute); if (!switchElementMuteUnmute) { if ($shapeMuteClick) $shapeMuteClick.css('display', 'table'); if ($shapeUnmuteClick) $shapeUnmuteClick.css('display', 'table'); } else { switch (switchElementMuteUnmuteLoad) { case 'mute': if ($shapeMuteClick) $shapeMuteClick.css('display', 'table'); break; case 'unmute': if ($shapeUnmuteClick) $shapeUnmuteClick.css('display', 'table'); break; } } let g = Math.round(Math.random() * 1e10); setTimeout(function () { if (isMobile && (playOnloadPage || playVideoTimeout || playVideoVisibleOnScreen) && !$shape.find('video').data('mobileHasPlay')) $('body').on('touchstart.loadVideo' + g, firstLoadVideo); }, 500); function firstLoadVideo() { let c = function () { window.arrAnnexxVideoTooltip.forEach(function (e) { if (e.playElClick === d) { let l = e.el; l.muted = true; l.play().then(() => { l.pause(); if ($(l).attr('autoplay')) playV(); }); } }); }; c(); $('body').off('touchstart.loadVideo' + g); rv = true; /* return c(); */ } function popupShowAction(mutationList, observer) { mutationList.forEach(function (mutation) { switch (mutation.type) { case 'attributes': if ($('body').hasClass('t-body_popupshowed')) { window.arrAnnexxVideoTooltip.forEach(function (e) { if (e.service === 'direct') { switch (e.actionOpenPopup) { case 'mute': e.el.muted = true; e.buttonMute = true; if (switchElementMuteUnmute) { if ($shapeMuteClick) $shapeMuteClick.hide(); if ($shapeUnmuteClick) $shapeUnmuteClick.css('display', 'table'); } break; case 'pause': e.el.pause(); if (switchElementPlayPause) { if ($shapePauseClick) $shapePauseClick.hide(); if ($shapePlayClick) $shapePlayClick.css('display', 'table'); } break; } } }); } break; } }); } let observerOptions = { childList: false, attributes: true, subtree: false }, observer = new MutationObserver(popupShowAction); observer.observe($('body')[0], observerOptions); $(document).on('click', '.t-popup', function () { if (!$(this).hasClass('t-popup_show')) { this.querySelectorAll('video').forEach(function (e) { e.pause(); }); } }); }); } }); } }, 100); setTimeout(function () { clearInterval(int); }, 5e3); }()) </script>


                    </div>
                </div>
            </div>
        </div>
        <div id="rec671175443" class="r t-rec" style=" " data-record-type="215"><a name="aboutus"
                style="font-size:0;"></a></div>
        <div id="rec669687289" class="r t-rec" style=" " data-animationappear="off" data-record-type="396"><!-- T396 -->
            <style>
                #rec669687289 .t396__artboard {
                    height: 2940px;
                    background-color: #ffffff;
                }

                #rec669687289 .t396__filter {
                    height: 2940px;
                }

                #rec669687289 .t396__carrier {
                    height: 2940px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1919px) {

                    #rec669687289 .t396__artboard,
                    #rec669687289 .t396__filter,
                    #rec669687289 .t396__carrier {
                        height: 2940px;
                    }

                    #rec669687289 .t396__filter {}

                    #rec669687289 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 1199px) {

                    #rec669687289 .t396__artboard,
                    #rec669687289 .t396__filter,
                    #rec669687289 .t396__carrier {
                        height: 1382px;
                    }

                    #rec669687289 .t396__filter {}

                    #rec669687289 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec669687289 .t396__artboard,
                    #rec669687289 .t396__filter,
                    #rec669687289 .t396__carrier {
                        height: 1224px;
                    }

                    #rec669687289 .t396__filter {}

                    #rec669687289 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700467375620"] {
                    z-index: 2;
                    top: -1px;
                    left: calc(100% - 1200px + -50px);
                    width: 1200px;
                    height: 900px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700467375620"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700467375620"] .tn-atom {
                    background-position: right bottom;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700467375620"] {
                        top: -1px;
                        left: calc(100% - 1200px + -50px);
                    }

                    #rec669687289 .tn-elem[data-elem-id="1700467375620"] .tn-atom {
                        opacity: 0.4;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700547328993"] {
                    z-index: 3;
                    top: 860px;
                    left: 51px;
                    width: 39px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700547328993"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700547328993"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec669687289 .tn-elem[data-elem-id="1700547328993"] {
                        top: 860px;
                        left: 51px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700547328993"] {
                        top: 1279px;
                        left: 15px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700547328993"] {
                        top: -30px;
                    }

                    #rec669687289 .tn-elem[data-elem-id="1700547328993"] .tn-atom {
                        opacity: 0.6;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700546955217"] {
                    z-index: 4;
                    top: -1px;
                    left: 77px;
                    width: 1200px;
                    height: 460px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700546955217"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700546955217"] .tn-atom {
                    background-position: left bottom;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700546955217"] {
                        top: -3px;
                        left: 72px;
                    }

                    #rec669687289 .tn-elem[data-elem-id="1700546955217"] .tn-atom {
                        opacity: 0.6;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700547211516"] {
                    z-index: 5;
                    top: 700px;
                    left: 86px;
                    width: 457px;
                    height: 10px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700547211516"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700547211516"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700547211516"] {
                        top: 560px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700547211516"] {
                        top: 832px;
                        left: 162px;
                    }

                    #rec669687289 .tn-elem[data-elem-id="1700547211516"] .tn-atom {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700463358621"] {
                    z-index: 6;
                    top: 15px;
                    left: 15px;
                    width: 11px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700463358621"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700463358621"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700463358621"] {
                        top: 14px;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700463270568"] {
                    color: #000000;
                    text-align: center;
                    z-index: 7;
                    top: 302px;
                    left: calc(50% - 313.5px + 1px);
                    width: 627px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700463270568"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700463270568"] .tn-atom {
                    color: #000000;
                    font-size: 43px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.2;
                    font-weight: 400;
                    letter-spacing: -3px;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700463270568"] {
                        top: 176px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700463270568"] {
                        top: 175px;
                        left: calc(50% - 313.5px + 1px);
                        width: 321px;
                    }

                    #rec669687289 .tn-elem[data-elem-id="1700463270568"] .tn-atom {
                        font-size: 28px;
                        letter-spacing: -1.8px;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700463627599"] {
                    color: #000000;
                    text-align: center;
                    z-index: 8;
                    top: 15px;
                    left: calc(50% - 280px + 0px);
                    width: 560px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700463627599"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700463627599"] .tn-atom {
                    color: #000000;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.43;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700463627599"] {
                        top: 14px;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464114701"] {
                    z-index: 9;
                    top: 50px;
                    left: calc(50% - 3px + -1px);
                    width: 6px;
                    height: 6px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700464114701"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464114701"] .tn-atom {
                    border-radius: 3000px;
                    background-color: #000000;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464114701"] {
                        top: 49px;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464526863"] {
                    z-index: 10;
                    top: 430px;
                    left: 1925px;
                    width: 360px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700464526863"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464526863"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464526863"] {
                        top: 422px;
                        left: 15px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464526863"] {
                        top: 371px;
                        left: 0px;
                        width: 320px;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464634684"] {
                    color: #ffffff;
                    z-index: 11;
                    top: 445px;
                    left: 1940px;
                    width: 275px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700464634684"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464634684"] .tn-atom {
                    color: #ffffff;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.2;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464634684"] {
                        top: 437px;
                        left: 30px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464634684"] {
                        top: 386px;
                        left: 15px;
                    }

                    #rec669687289 .tn-elem[data-elem-id="1700464634684"] {
                        text-align: left;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464723879"] {
                    color: #608fdd;
                    text-align: center;
                    z-index: 12;
                    top: 550px;
                    left: 1925px;
                    width: 360px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700464723879"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464723879"] .tn-atom {
                    color: #608fdd;
                    font-size: 63px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1;
                    font-weight: 400;
                    letter-spacing: -3px;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464723879"] {
                        top: 542px;
                        left: 15px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464723879"] {
                        top: 480px;
                        left: 0px;
                        width: 320px;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464770393"] {
                    z-index: 13;
                    top: 679px;
                    left: 1940px;
                    width: 6px;
                    height: 6px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700464770393"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464770393"] .tn-atom {
                    background-color: #ffffff;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464770393"] {
                        top: 671px;
                        left: 30px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464770393"] {
                        top: 590px;
                        left: 15px;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464810770"] {
                    z-index: 14;
                    top: 679px;
                    left: 2263px;
                    width: 7px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700464810770"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464810770"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464810770"] {
                        top: 671px;
                        left: 353px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464810770"] {
                        top: 590px;
                        left: -15px;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464888353"] {
                    z-index: 15;
                    top: 80px;
                    left: 2785px;
                    width: 360px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700464888353"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464888353"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464888353"] {
                        top: 722px;
                        left: -15px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464888353"] {
                        top: 626px;
                        left: 0px;
                        width: 320px;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464888371"] {
                    color: #ffffff;
                    z-index: 16;
                    top: 95px;
                    left: 2800px;
                    width: 275px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700464888371"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464888371"] .tn-atom {
                    color: #ffffff;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.2;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464888371"] {
                        top: 737px;
                        left: -85px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464888371"] {
                        top: 641px;
                        left: 15px;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464888379"] {
                    color: #608fdd;
                    text-align: center;
                    z-index: 17;
                    top: 200px;
                    left: 2785px;
                    width: 360px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700464888379"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464888379"] .tn-atom {
                    color: #608fdd;
                    font-size: 63px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1;
                    font-weight: 400;
                    letter-spacing: -3px;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464888379"] {
                        top: 842px;
                        left: -15px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464888379"] {
                        top: 735px;
                        left: 0px;
                        width: 320px;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464888389"] {
                    z-index: 18;
                    top: 329px;
                    left: 2800px;
                    width: 6px;
                    height: 6px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700464888389"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464888389"] .tn-atom {
                    background-color: #ffffff;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464888389"] {
                        top: 971px;
                        left: -354px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464888389"] {
                        top: 845px;
                        left: 15px;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464888394"] {
                    z-index: 19;
                    top: 329px;
                    left: 3123px;
                    width: 7px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700464888394"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464888394"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464888394"] {
                        top: 971px;
                        left: -30px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464888394"] {
                        top: 845px;
                        left: -15px;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464935864"] {
                    z-index: 20;
                    top: 80px;
                    left: 3160px;
                    width: 360px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700464935864"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464935864"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464935864"] {
                        top: 1022px;
                        left: 265px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464935864"] {
                        top: 881px;
                        left: 0px;
                        width: 320px;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464935878"] {
                    color: #ffffff;
                    z-index: 21;
                    top: 95px;
                    left: 3175px;
                    width: 331px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700464935878"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464935878"] .tn-atom {
                    color: #ffffff;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.2;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464935878"] {
                        top: 1037px;
                        left: 280px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464935878"] {
                        top: 896px;
                        left: 15px;
                        width: 274px;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464935882"] {
                    color: #608fdd;
                    text-align: center;
                    z-index: 22;
                    top: 200px;
                    left: 3160px;
                    width: 360px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700464935882"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464935882"] .tn-atom {
                    color: #608fdd;
                    font-size: 63px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1;
                    font-weight: 400;
                    letter-spacing: -3px;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464935882"] {
                        top: 1142px;
                        left: 265px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464935882"] {
                        top: 990px;
                        left: 0px;
                        width: 320px;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464935886"] {
                    z-index: 23;
                    top: 329px;
                    left: 3175px;
                    width: 6px;
                    height: 6px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700464935886"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464935886"] .tn-atom {
                    background-color: #ffffff;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464935886"] {
                        top: 1271px;
                        left: 280px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464935886"] {
                        top: 1100px;
                        left: 15px;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464935891"] {
                    z-index: 24;
                    top: 329px;
                    left: 3498px;
                    width: 7px;
                }

                @media (min-width: 1200px) {
                    #rec669687289 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700464935891"] {
                        opacity: 0;
                    }
                }

                #rec669687289 .tn-elem[data-elem-id="1700464935891"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464935891"] {
                        top: 1271px;
                        left: 603px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec669687289 .tn-elem[data-elem-id="1700464935891"] {
                        top: 1100px;
                        left: -15px;
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="669687289" data-artboard-screens="320,640,1200,1920"
                    data-artboard-height="2940" data-artboard-valign="top" data-artboard-upscale="grid"
                    data-artboard-height-res-320="1224" data-artboard-height-res-640="1382"
                    data-artboard-height-res-1200="2940">
                    <div class="t396__carrier" data-artboard-recid="669687289"></div>
                    <div class="t396__filter" data-artboard-recid="669687289"></div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700467375620 ' data-elem-id='1700467375620'
                        data-elem-type='shape' data-field-top-value="-1" data-field-left-value="-50"
                        data-field-height-value="900" data-field-width-value="1200" data-field-axisy-value="top"
                        data-field-axisx-value="right" data-field-container-value="window" data-field-topunits-value="%"
                        data-field-leftunits-value="%" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-sbs-event="scroll" data-animate-sbs-trg="0"
                        data-animate-sbs-trgofst="-20"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':2000,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-top-res-320-value="-1" data-field-left-res-320-value="-50">
                        <div class='tn-atom t-bgimg'
                            data-original="https://static.tildacdn.net/tild6631-3032-4662-a235-353034643837/2.svg">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700547328993 ' data-elem-id='1700547328993'
                        data-elem-type='image' data-field-top-value="860" data-field-left-value="51"
                        data-field-width-value="39" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="%" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="scroll" data-animate-sbs-trg="0" data-animate-sbs-trgofst="870"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':2000,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-filewidth-value="39" data-field-fileheight-value="13"
                        data-field-top-res-320-value="-30" data-field-axisy-res-320-value="bottom"
                        data-field-top-res-640-value="1279" data-field-left-res-640-value="15"
                        data-field-axisx-res-640-value="left" data-field-leftunits-res-640-value="px"
                        data-field-top-res-1200-value="860" data-field-left-res-1200-value="51">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3137-3666-4533-a164-393839376235/Group_21537.svg'
                                alt='' imgfield='tn_img_1700547328993' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700546955217 ' data-elem-id='1700546955217'
                        data-elem-type='shape' data-field-top-value="-1" data-field-left-value="77"
                        data-field-height-value="460" data-field-width-value="1200" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="window" data-field-topunits-value="%"
                        data-field-leftunits-value="%" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-sbs-event="scroll" data-animate-sbs-trg="0"
                        data-animate-sbs-trgofst="-20"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':2000,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-top-res-320-value="-3" data-field-left-res-320-value="72"
                        data-field-axisy-res-320-value="bottom">
                        <div class='tn-atom t-bgimg'
                            data-original="https://static.tildacdn.net/tild3361-6436-4266-a662-663233366535/Rectangle_205.svg">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700547211516 ' data-elem-id='1700547211516'
                        data-elem-type='shape' data-field-top-value="700" data-field-left-value="86"
                        data-field-height-value="10" data-field-width-value="457" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="%" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-sbs-event="scroll" data-animate-sbs-trg="0"
                        data-animate-sbs-trgofst="700"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':2000,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-top-res-320-value="832" data-field-left-res-320-value="162"
                        data-field-top-res-640-value="560">
                        <div class='tn-atom t-bgimg'
                            data-original="https://static.tildacdn.net/tild3236-3637-4132-b937-616531623964/Group_21536.svg">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700463358621 ' data-elem-id='1700463358621'
                        data-elem-type='image' data-field-top-value="15" data-field-left-value="15"
                        data-field-width-value="11" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="scroll" data-animate-sbs-trg="0" data-animate-sbs-trgofst="75"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':2000,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-filewidth-value="11" data-field-fileheight-value="13"
                        data-field-top-res-320-value="14">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3430-6561-4335-b234-646462623635/1.svg'
                                alt='' imgfield='tn_img_1700463358621' /></div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6696872891700463270568 t396__elem--anim-hidden'
                        data-elem-id='1700463270568' data-elem-type='text' data-field-top-value="302"
                        data-field-left-value="1" data-field-width-value="627" data-field-axisy-value="top"
                        data-field-axisx-value="center" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="scroll" data-animate-sbs-trg="0" data-animate-sbs-trgofst="400"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':0,'mx':0,'my':0,'sx':1,'sy':1,'op':0,'ro':0,'bl':'0','fi':'fixed','dd':'0'},{'di':100,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'},{'di':2000,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-top-res-320-value="175" data-field-left-res-320-value="1"
                        data-field-width-res-320-value="321" data-field-top-res-640-value="176"
                        data-animate-sbs-trgofst-res-1200="300">
                        <div class='tn-atom' field='tn_text_1700463270568'><b>Nezdeck</b> means Pioneering the Future of
                            Technology, Empowering Innovation.</div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6696872891700463627599 ' data-elem-id='1700463627599'
                        data-elem-type='text' data-field-top-value="15" data-field-left-value="0"
                        data-field-width-value="560" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-sbs-event="scroll"
                        data-animate-sbs-trg="0" data-animate-sbs-trgofst="75"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':2000,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-top-res-320-value="14">
                        <div class='tn-atom' field='tn_text_1700463627599'>about us</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700464114701 ' data-elem-id='1700464114701'
                        data-elem-type='shape' data-field-top-value="50" data-field-left-value="-1"
                        data-field-height-value="6" data-field-width-value="6" data-field-axisy-value="top"
                        data-field-axisx-value="center" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-sbs-event="scroll" data-animate-sbs-trg="0"
                        data-animate-sbs-trgofst="110"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','di':'0'},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','di':200,'dd':0,'fi':'fixed'},{'mx':0,'my':600,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','di':2000,'dd':0,'fi':'fixed'}]"
                        data-field-top-res-320-value="49">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700464526863 ' data-elem-id='1700464526863'
                        data-elem-type='image' data-field-top-value="430" data-field-left-value="1925"
                        data-field-width-value="360" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="scroll" data-animate-sbs-trg="0" data-animate-sbs-trgofst="530"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':300,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'},{'di':2000,'mx':-4000,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-filewidth-value="360" data-field-fileheight-value="270"
                        data-field-top-res-320-value="371" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="320" data-field-axisx-res-320-value="center"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="422"
                        data-field-left-res-640-value="15" data-animate-sbs-trgofst-res-1200="480">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3465-6539-4163-b562-646337626530/photo.svg'
                                alt='' imgfield='tn_img_1700464526863' /></div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6696872891700464634684 ' data-elem-id='1700464634684'
                        data-elem-type='text' data-field-top-value="445" data-field-left-value="1940"
                        data-field-width-value="275" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="scroll" data-animate-sbs-trg="0" data-animate-sbs-trgofst="545"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':300,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'},{'di':2000,'mx':-4000,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-top-res-320-value="386" data-field-left-res-320-value="15"
                        data-field-axisx-res-320-value="left" data-field-container-res-320-value="grid"
                        data-field-top-res-640-value="437" data-field-left-res-640-value="30"
                        data-animate-sbs-trgofst-res-1200="495">
                        <div class='tn-atom' field='tn_text_1700464634684'>WEBSITE DESIGNING: &nbsp;delivered
                            outstanding website designs! <a></a></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700464723879 ' data-elem-id='1700464723879'
                        data-elem-type='text' data-field-top-value="550" data-field-left-value="1925"
                        data-field-width-value="360" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="scroll" data-animate-sbs-trg="0" data-animate-sbs-trgofst="650"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':300,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'},{'di':2000,'mx':-4000,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-top-res-320-value="480" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="320" data-field-axisx-res-320-value="center"
                        data-field-top-res-640-value="542" data-field-left-res-640-value="15"
                        data-animate-sbs-trgofst-res-1200="600">
                        <div class='tn-atom' field='tn_text_1700464723879'>1000+</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700464770393 ' data-elem-id='1700464770393'
                        data-elem-type='shape' data-field-top-value="679" data-field-left-value="1940"
                        data-field-height-value="6" data-field-width-value="6" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-sbs-event="scroll" data-animate-sbs-trg="0"
                        data-animate-sbs-trgofst="779"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':300,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'},{'di':2000,'mx':-4000,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-top-res-320-value="590" data-field-left-res-320-value="15"
                        data-field-container-res-320-value="grid" data-field-top-res-640-value="671"
                        data-field-left-res-640-value="30" data-animate-sbs-trgofst-res-1200="729">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700464810770 ' data-elem-id='1700464810770'
                        data-elem-type='image' data-field-top-value="679" data-field-left-value="2263"
                        data-field-width-value="7" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="scroll" data-animate-sbs-trg="0" data-animate-sbs-trgofst="779"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':300,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'},{'di':2000,'mx':-4000,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-filewidth-value="7" data-field-fileheight-value="6"
                        data-field-top-res-320-value="590" data-field-left-res-320-value="-15"
                        data-field-axisx-res-320-value="right" data-field-container-res-320-value="grid"
                        data-field-top-res-640-value="671" data-field-left-res-640-value="353"
                        data-animate-sbs-trgofst-res-1200="729">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3062-6662-4036-a531-643339663832/Polygon_1.svg'
                                alt='' imgfield='tn_img_1700464810770' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700464888353 ' data-elem-id='1700464888353'
                        data-elem-type='image' data-field-top-value="80" data-field-left-value="2785"
                        data-field-width-value="360" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="scroll" data-animate-sbs-trg="0" data-animate-sbs-trgofst="210"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':300,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'},{'di':2000,'mx':-4000,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-filewidth-value="360" data-field-fileheight-value="270"
                        data-field-top-res-320-value="626" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="320" data-field-axisy-res-320-value="top"
                        data-field-axisx-res-320-value="center" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-top-res-640-value="722" data-field-left-res-640-value="-15"
                        data-field-axisx-res-640-value="right">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3465-6539-4163-b562-646337626530/photo.svg'
                                alt='' imgfield='tn_img_1700464888353' /></div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6696872891700464888371 ' data-elem-id='1700464888371'
                        data-elem-type='text' data-field-top-value="95" data-field-left-value="2800"
                        data-field-width-value="275" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="scroll" data-animate-sbs-trg="0" data-animate-sbs-trgofst="225"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':300,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'},{'di':2000,'mx':-4000,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-top-res-320-value="641" data-field-left-res-320-value="15"
                        data-field-axisx-res-320-value="left" data-field-container-res-320-value="grid"
                        data-field-top-res-640-value="737" data-field-left-res-640-value="-85"
                        data-field-axisx-res-640-value="right">
                        <div class='tn-atom' field='tn_text_1700464888371'>website development projects
                            (2023-2024)</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700464888379 ' data-elem-id='1700464888379'
                        data-elem-type='text' data-field-top-value="200" data-field-left-value="2785"
                        data-field-width-value="360" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="scroll" data-animate-sbs-trg="0" data-animate-sbs-trgofst="330"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':300,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'},{'di':2000,'mx':-4000,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-top-res-320-value="735" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="320" data-field-axisx-res-320-value="center"
                        data-field-top-res-640-value="842" data-field-left-res-640-value="-15"
                        data-field-axisx-res-640-value="right">
                        <div class='tn-atom' field='tn_text_1700464888379'>17+</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700464888389 ' data-elem-id='1700464888389'
                        data-elem-type='shape' data-field-top-value="329" data-field-left-value="2800"
                        data-field-height-value="6" data-field-width-value="6" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-sbs-event="scroll" data-animate-sbs-trg="0"
                        data-animate-sbs-trgofst="459"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':300,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'},{'di':2000,'mx':-4000,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-top-res-320-value="845" data-field-left-res-320-value="15"
                        data-field-axisx-res-320-value="left" data-field-container-res-320-value="grid"
                        data-field-top-res-640-value="971" data-field-left-res-640-value="-354"
                        data-field-axisx-res-640-value="right">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700464888394 ' data-elem-id='1700464888394'
                        data-elem-type='image' data-field-top-value="329" data-field-left-value="3123"
                        data-field-width-value="7" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="scroll" data-animate-sbs-trg="0" data-animate-sbs-trgofst="459"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':300,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'},{'di':2000,'mx':-4000,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-filewidth-value="7" data-field-fileheight-value="6"
                        data-field-top-res-320-value="845" data-field-left-res-320-value="-15"
                        data-field-container-res-320-value="grid" data-field-top-res-640-value="971"
                        data-field-left-res-640-value="-30" data-field-axisx-res-640-value="right">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3062-6662-4036-a531-643339663832/Polygon_1.svg'
                                alt='' imgfield='tn_img_1700464888394' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700464935864 ' data-elem-id='1700464935864'
                        data-elem-type='image' data-field-top-value="80" data-field-left-value="3160"
                        data-field-width-value="360" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="scroll" data-animate-sbs-trg="0" data-animate-sbs-trgofst="210"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':300,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'},{'di':2000,'mx':-4000,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-filewidth-value="360" data-field-fileheight-value="270"
                        data-field-top-res-320-value="881" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="320" data-field-axisy-res-320-value="top"
                        data-field-axisx-res-320-value="center" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-top-res-640-value="1022" data-field-left-res-640-value="265">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3465-6539-4163-b562-646337626530/photo.svg'
                                alt='' imgfield='tn_img_1700464935864' /></div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6696872891700464935878 ' data-elem-id='1700464935878'
                        data-elem-type='text' data-field-top-value="95" data-field-left-value="3175"
                        data-field-width-value="331" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="scroll" data-animate-sbs-trg="0" data-animate-sbs-trgofst="225"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':300,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'},{'di':2000,'mx':-4000,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-top-res-320-value="896" data-field-left-res-320-value="15"
                        data-field-width-res-320-value="274" data-field-axisy-res-320-value="top"
                        data-field-container-res-320-value="grid" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="1037"
                        data-field-left-res-640-value="280">
                        <div class='tn-atom' field='tn_text_1700464935878'>Software Development&nbsp;(2023-2024)</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700464935882 ' data-elem-id='1700464935882'
                        data-elem-type='text' data-field-top-value="200" data-field-left-value="3160"
                        data-field-width-value="360" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="scroll" data-animate-sbs-trg="0" data-animate-sbs-trgofst="330"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':300,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'},{'di':2000,'mx':-4000,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-top-res-320-value="990" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="320" data-field-axisy-res-320-value="top"
                        data-field-axisx-res-320-value="center" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-top-res-640-value="1142" data-field-left-res-640-value="265">
                        <div class='tn-atom' field='tn_text_1700464935882'>33</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700464935886 ' data-elem-id='1700464935886'
                        data-elem-type='shape' data-field-top-value="329" data-field-left-value="3175"
                        data-field-height-value="6" data-field-width-value="6" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-sbs-event="scroll" data-animate-sbs-trg="0"
                        data-animate-sbs-trgofst="459"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':300,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'},{'di':2000,'mx':-4000,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-top-res-320-value="1100" data-field-left-res-320-value="15"
                        data-field-container-res-320-value="grid" data-field-top-res-640-value="1271"
                        data-field-left-res-640-value="280">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6696872891700464935891 ' data-elem-id='1700464935891'
                        data-elem-type='image' data-field-top-value="329" data-field-left-value="3498"
                        data-field-width-value="7" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="scroll" data-animate-sbs-trg="0" data-animate-sbs-trgofst="459"
                        data-animate-sbs-opts="[{'di':'0','mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'','dd':'0'},{'di':300,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'},{'di':2000,'mx':-4000,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','fi':'fixed','dd':'0'}]"
                        data-field-filewidth-value="7" data-field-fileheight-value="6"
                        data-field-top-res-320-value="1100" data-field-left-res-320-value="-15"
                        data-field-axisx-res-320-value="right" data-field-container-res-320-value="grid"
                        data-field-top-res-640-value="1271" data-field-left-res-640-value="603">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3062-6662-4036-a531-643339663832/Polygon_1.svg'
                                alt='' imgfield='tn_img_1700464935891' /></div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t396_init', function () {
                        t396_init('669687289');
                    });
                });</script><!-- /T396 -->
        </div>
        <div id="rec669697131" class="r t-rec" style=" " data-animationappear="off" data-record-type="131"><!-- T123 -->
            <div class="t123">
                <div class="t-container_100 ">
                    <div class="t-width t-width_100 ">

                        <!--!ANNEXX!--><!--!ANX805-1!--!><!--![{"id":"anxcommentblock","data":""},{"id":"shirina","data":"9"},{"id":"height","data":"66"},{"id":"bgColor","data":""},{"id":"bgColorHover","data":""},{"id":"colorScroller","data":"#000000 100%, #000000 100%"},{"id":"colorScrollerHover","data":""},{"id":"borderRadius","data":"9"},{"id":"offset","data":"0"},{"id":"offset-hover","data":"0"},{"id":"transparent","data":"true"},{"id":"invert-color","data":"true"},{"id":"colorShadow","data":"0px 0px 0px 0px rgba(255, 255, 255, 1)"},{"id":"hidden-scroll","data":"false"}]!-->
                        <script
                            src="./cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/2.2.0/browser/overlayscrollbars.browser.es6.min.js"
                            integrity="sha512-UQIeqXP+ohueqWw3fdAMtxPqkEhft2pR5Q54s1nLfA3qB5m2JLIwYOc+uccEFzRDSlfDPgPFDJfK1anG5bfBiQ=="
                            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                        <link rel="stylesheet"
                            href="./cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/2.2.0/styles/overlayscrollbars.min.css"
                            integrity="sha512-e+FC8wgWgSdLUI1GYnQylY9isJKasgRN6H1daXDe+gf4eqi1/T+6Uew3RSCzcz6A/GydIJgnY8AECKrV4JNkAg=="
                            crossorigin="anonymous" referrerpolicy="no-referrer" />
                        <!-- <script> (function () { function annexxAddStyle(numberMod, codestyle) { let styleBlock = document.querySelector('head > #annexxStyle' + numberMod); if (!styleBlock) { document.querySelector('head').insertAdjacentHTML('beforeend', '<style id="annexxStyle' + numberMod + '"></style>'); styleBlock = document.querySelector('head > #annexxStyle' + numberMod); } let t = (function () { return !Array.from(styleBlock.childNodes).some(function (e) { if (e.textContent === codestyle) { return true; } }); }()); if (t) styleBlock.insertAdjacentHTML('beforeend', codestyle); } let isMobile = (function () { let ua = navigator.userAgent; if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(ua) || (!/windows/i.test(ua) && /safari/i.test(ua) && navigator.maxTouchPoints > 1)) return true; else return false; }()); if (!isMobile) { let { OverlayScrollbars, ScrollbarsHidingPlugin, SizeObserverPlugin, ClickScrollPlugin } = OverlayScrollbarsGlobal; OverlayScrollbars.plugin(ClickScrollPlugin); window.sb = OverlayScrollbars(document.body, { scrollbars: { autoHide: false ? "scroll" : "never", clickScroll: true } }); annexxAddStyle('805-1', ` .os-scrollbar.os-theme-dark { --os-size: 9px; --os-handle-min-size: 66px; --os-handle-border-radius: 9px; --os-track-bg: ${(function () { return true || true ? "none" : "linear-gradient(#FFFFFF 0%, #FFFFFF 100%)"; }())}; --os-track-bg-hover: ${(function () { return true || true ? "none" : "linear-gradient(#FFFFFF 0%, #FFFFFF 100%)"; }())}; --os-track-bg-active: ${(function () { return true || true ? "none" : "linear-gradient(#FFFFFF 0%, #FFFFFF 100%)"; }())}; --os-handle-bg: linear-gradient(#000000 100%, #000000 100%); --os-handle-bg-hover: linear-gradient(#989797 0%, #989797 100%); --os-handle-bg-active: linear-gradient(#989797 0%, #989797 100%); ${(function () { return true ? "mix-blend-mode: difference;" : ""; }())} } .os-scrollbar.os-theme-dark .os-scrollbar-handle { -webkit-box-shadow: inset 0px 0px 0px 0px rgba(255, 255, 255, 1) !important; } .os-scrollbar .os-scrollbar-track { transition: opacity .15s,background-color .15s,border-color .15s, left .2s linear !important; } .os-scrollbar-track { left: 0px; } .os-scrollbar-track:hover { left: 0px; } .t-body_popupshowed { overflow-x: visible !important; } `); document.addEventListener("click", function () { setTimeout(function () { if (document.body.classList.contains("t-body_popupshowed")) document.documentElement.style.overflowY = "hidden"; else document.documentElement.style.overflowY = ""; }, 200); }); } }()); </script> -->


                    </div>
                </div>
            </div>
        </div>
        <div id="rec670262247" class="r t-rec" style=" " data-animationappear="off" data-record-type="396"><!-- T396 -->
            <style>
                #rec670262247 .t396__artboard {
                    height: 135px;
                    background-color: #ffffff;
                }

                #rec670262247 .t396__filter {
                    height: 135px;
                }

                #rec670262247 .t396__carrier {
                    height: 135px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {

                    #rec670262247 .t396__artboard,
                    #rec670262247 .t396__filter,
                    #rec670262247 .t396__carrier {}

                    #rec670262247 .t396__filter {}

                    #rec670262247 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 959px) {

                    #rec670262247 .t396__artboard,
                    #rec670262247 .t396__filter,
                    #rec670262247 .t396__carrier {}

                    #rec670262247 .t396__filter {}

                    #rec670262247 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec670262247 .t396__artboard,
                    #rec670262247 .t396__filter,
                    #rec670262247 .t396__carrier {}

                    #rec670262247 .t396__filter {}

                    #rec670262247 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 479px) {

                    #rec670262247 .t396__artboard,
                    #rec670262247 .t396__filter,
                    #rec670262247 .t396__carrier {
                        height: 120px;
                    }

                    #rec670262247 .t396__filter {}

                    #rec670262247 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec670262247 .tn-elem[data-elem-id="1700548260371"] {
                    z-index: 2;
                    top: 39px;
                    left: 30px;
                    width: 112px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700548260371"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700548260371"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700548271880"] {
                    z-index: 3;
                    top: 30px;
                    left: 232px;
                    width: 123px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700548271880"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700548271880"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700548297660"] {
                    z-index: 4;
                    top: 34px;
                    left: 445px;
                    width: 112px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700548297660"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700548297660"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700548318703"] {
                    z-index: 5;
                    top: 30px;
                    left: 647px;
                    width: 101px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700548318703"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700548318703"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700548391663"] {
                    z-index: 6;
                    top: 30px;
                    left: 838px;
                    width: 115px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700548391663"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700548391663"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700548451364"] {
                    z-index: 7;
                    top: 30px;
                    left: 1043px;
                    width: 94px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700548451364"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700548451364"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549276006"] {
                    z-index: 8;
                    top: 39px;
                    left: 1227px;
                    width: 112px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549276006"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549276006"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549276018"] {
                    z-index: 9;
                    top: 30px;
                    left: 1429px;
                    width: 123px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549276018"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549276018"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549276028"] {
                    z-index: 10;
                    top: 34px;
                    left: 1642px;
                    width: 112px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549276028"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549276028"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549276038"] {
                    z-index: 11;
                    top: 30px;
                    left: 1844px;
                    width: 101px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549276038"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549276038"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549276050"] {
                    z-index: 12;
                    top: 30px;
                    left: 2035px;
                    width: 115px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549276050"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549276050"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549276060"] {
                    z-index: 13;
                    top: 30px;
                    left: 2240px;
                    width: 94px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549276060"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549276060"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549327373"] {
                    z-index: 14;
                    top: 39px;
                    left: 2424px;
                    width: 112px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549327373"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549327373"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549327399"] {
                    z-index: 15;
                    top: 30px;
                    left: 2626px;
                    width: 123px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549327399"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549327399"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549327415"] {
                    z-index: 16;
                    top: 34px;
                    left: 2839px;
                    width: 112px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549327415"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549327415"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549327427"] {
                    z-index: 17;
                    top: 30px;
                    left: 3041px;
                    width: 101px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549327427"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549327427"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549327439"] {
                    z-index: 18;
                    top: 30px;
                    left: 3232px;
                    width: 115px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549327439"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549327439"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549327452"] {
                    z-index: 19;
                    top: 30px;
                    left: 3437px;
                    width: 94px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549327452"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549327452"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549327465"] {
                    z-index: 20;
                    top: 39px;
                    left: 3621px;
                    width: 112px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549327465"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549327465"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549327477"] {
                    z-index: 21;
                    top: 30px;
                    left: 3823px;
                    width: 123px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549327477"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549327477"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549327490"] {
                    z-index: 22;
                    top: 34px;
                    left: 4036px;
                    width: 112px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549327490"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549327490"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549327503"] {
                    z-index: 23;
                    top: 30px;
                    left: 4238px;
                    width: 101px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549327503"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549327503"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549327518"] {
                    z-index: 24;
                    top: 30px;
                    left: 4429px;
                    width: 115px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549327518"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549327518"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}

                #rec670262247 .tn-elem[data-elem-id="1700549327531"] {
                    z-index: 25;
                    top: 30px;
                    left: 4634px;
                    width: 94px;
                }

                #rec670262247 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700549327531"] {
                    opacity: 0;
                }

                #rec670262247 .tn-elem[data-elem-id="1700549327531"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {}

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {}
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="670262247" data-artboard-screens="320,480,640,960,1200"
                    data-artboard-height="135" data-artboard-valign="center" data-artboard-upscale="grid"
                    data-artboard-height-res-320="120">
                    <div class="t396__carrier" data-artboard-recid="670262247"></div>
                    <div class="t396__filter" data-artboard-recid="670262247"></div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700548260371 ' data-elem-id='1700548260371'
                        data-elem-type='image' data-field-top-value="39" data-field-left-value="30"
                        data-field-width-value="112" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1159,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="112" data-field-fileheight-value="13">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6561-6236-4239-b365-363234326664/3-1.svg'
                                alt='' imgfield='tn_img_1700548260371' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700548271880 ' data-elem-id='1700548271880'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="232"
                        data-field-width-value="123" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1159,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="123" data-field-fileheight-value="30">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3937-6363-4235-a437-663065653232/3-2.svg'
                                alt='' imgfield='tn_img_1700548271880' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700548297660 ' data-elem-id='1700548297660'
                        data-elem-type='image' data-field-top-value="34" data-field-left-value="445"
                        data-field-width-value="112" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1159,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="113" data-field-fileheight-value="21">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3836-6236-4130-a666-326562663963/photo.svg'
                                alt='' imgfield='tn_img_1700548297660' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700548318703 ' data-elem-id='1700548318703'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="647"
                        data-field-width-value="101" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1159,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="101" data-field-fileheight-value="30">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3738-3732-4737-b437-306266663830/3-4.svg'
                                alt='' imgfield='tn_img_1700548318703' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700548391663 ' data-elem-id='1700548391663'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="838"
                        data-field-width-value="115" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1159,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="115" data-field-fileheight-value="30">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3939-6563-4638-b933-643762393264/3-5.svg'
                                alt='' imgfield='tn_img_1700548391663' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700548451364 ' data-elem-id='1700548451364'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="1043"
                        data-field-width-value="94" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1159,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="94" data-field-fileheight-value="30">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6635-3865-4064-b164-393563373136/3-6.svg'
                                alt='' imgfield='tn_img_1700548451364' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549276006 ' data-elem-id='1700549276006'
                        data-elem-type='image' data-field-top-value="39" data-field-left-value="1227"
                        data-field-width-value="112" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="112" data-field-fileheight-value="13">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6561-6236-4239-b365-363234326664/3-1.svg'
                                alt='' imgfield='tn_img_1700549276006' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549276018 ' data-elem-id='1700549276018'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="1429"
                        data-field-width-value="123" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="123" data-field-fileheight-value="30">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3937-6363-4235-a437-663065653232/3-2.svg'
                                alt='' imgfield='tn_img_1700549276018' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549276028 ' data-elem-id='1700549276028'
                        data-elem-type='image' data-field-top-value="34" data-field-left-value="1642"
                        data-field-width-value="112" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="113" data-field-fileheight-value="21">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6666-3536-4131-a365-666637356662/photo.svg'
                                alt='' imgfield='tn_img_1700549276028' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549276038 ' data-elem-id='1700549276038'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="1844"
                        data-field-width-value="101" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="101" data-field-fileheight-value="30">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3738-3732-4737-b437-306266663830/3-4.svg'
                                alt='' imgfield='tn_img_1700549276038' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549276050 ' data-elem-id='1700549276050'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="2035"
                        data-field-width-value="115" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="115" data-field-fileheight-value="30">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3939-6563-4638-b933-643762393264/3-5.svg'
                                alt='' imgfield='tn_img_1700549276050' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549276060 ' data-elem-id='1700549276060'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="2240"
                        data-field-width-value="94" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="94" data-field-fileheight-value="30">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6635-3865-4064-b164-393563373136/3-6.svg'
                                alt='' imgfield='tn_img_1700549276060' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549327373 ' data-elem-id='1700549327373'
                        data-elem-type='image' data-field-top-value="39" data-field-left-value="2424"
                        data-field-width-value="112" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="112" data-field-fileheight-value="13">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6561-6236-4239-b365-363234326664/3-1.svg'
                                alt='' imgfield='tn_img_1700549327373' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549327399 ' data-elem-id='1700549327399'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="2626"
                        data-field-width-value="123" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="123" data-field-fileheight-value="30">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3937-6363-4235-a437-663065653232/3-2.svg'
                                alt='' imgfield='tn_img_1700549327399' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549327415 ' data-elem-id='1700549327415'
                        data-elem-type='image' data-field-top-value="34" data-field-left-value="2839"
                        data-field-width-value="112" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="113" data-field-fileheight-value="21">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3537-3663-4266-b866-363862663930/photo.svg'
                                alt='' imgfield='tn_img_1700549327415' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549327427 ' data-elem-id='1700549327427'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="3041"
                        data-field-width-value="101" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="101" data-field-fileheight-value="30">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3738-3732-4737-b437-306266663830/3-4.svg'
                                alt='' imgfield='tn_img_1700549327427' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549327439 ' data-elem-id='1700549327439'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="3232"
                        data-field-width-value="115" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="115" data-field-fileheight-value="30">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3939-6563-4638-b933-643762393264/3-5.svg'
                                alt='' imgfield='tn_img_1700549327439' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549327452 ' data-elem-id='1700549327452'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="3437"
                        data-field-width-value="94" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="94" data-field-fileheight-value="30">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6635-3865-4064-b164-393563373136/3-6.svg'
                                alt='' imgfield='tn_img_1700549327452' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549327465 ' data-elem-id='1700549327465'
                        data-elem-type='image' data-field-top-value="39" data-field-left-value="3621"
                        data-field-width-value="112" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="112" data-field-fileheight-value="13">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6561-6236-4239-b365-363234326664/3-1.svg'
                                alt='' imgfield='tn_img_1700549327465' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549327477 ' data-elem-id='1700549327477'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="3823"
                        data-field-width-value="123" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="123" data-field-fileheight-value="30">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3937-6363-4235-a437-663065653232/3-2.svg'
                                alt='' imgfield='tn_img_1700549327477' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549327490 ' data-elem-id='1700549327490'
                        data-elem-type='image' data-field-top-value="34" data-field-left-value="4036"
                        data-field-width-value="112" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="113" data-field-fileheight-value="21">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6236-3331-4635-b361-646637313732/photo.svg'
                                alt='' imgfield='tn_img_1700549327490' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549327503 ' data-elem-id='1700549327503'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="4238"
                        data-field-width-value="101" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="101" data-field-fileheight-value="30">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3738-3732-4737-b437-306266663830/3-4.svg'
                                alt='' imgfield='tn_img_1700549327503' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549327518 ' data-elem-id='1700549327518'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="4429"
                        data-field-width-value="115" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="115" data-field-fileheight-value="30">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3939-6563-4638-b933-643762393264/3-5.svg'
                                alt='' imgfield='tn_img_1700549327518' /></div>
                    </div>
                    <div class='t396__elem tn-elem anim tn-elem__6702622471700549327531 ' data-elem-id='1700549327531'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="4634"
                        data-field-width-value="94" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="blockintoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':-1197,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':30000}]"
                        data-field-filewidth-value="94" data-field-fileheight-value="30">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6635-3865-4064-b164-393563373136/3-6.svg'
                                alt='' imgfield='tn_img_1700549327531' /></div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t396_init', function () {
                        t396_init('670262247');
                    });
                });</script><!-- /T396 -->
        </div>
        <div id="rec670275979" class="r t-rec uc-up-block" style="background-color:#ffffff; " data-animationappear="off"
            data-record-type="396" data-bg-color="#ffffff"><!-- T396 -->
            <style>
                #rec670275979 .t396__artboard {
                    min-height: 642px;
                    height: 100vh;
                    background-color: #ffffff;
                    overflow: visible;
                }

                #rec670275979 .t396__filter {
                    min-height: 642px;
                    height: 100vh;
                }

                #rec670275979 .t396__carrier {
                    min-height: 642px;
                    height: 100vh;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {

                    #rec670275979 .t396__artboard,
                    #rec670275979 .t396__filter,
                    #rec670275979 .t396__carrier {
                        min-height: 600px;
                    }

                    #rec670275979 .t396__filter {}

                    #rec670275979 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec670275979 .t396__artboard,
                    #rec670275979 .t396__filter,
                    #rec670275979 .t396__carrier {
                        min-height: 688px;
                        height: 10vh;
                    }

                    #rec670275979 .t396__filter {}

                    #rec670275979 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec670275979 .tn-elem[data-elem-id="1700550539881"] {
                    z-index: 2;
                    top: 0px;
                    left: calc(100% - 50% + 0px);
                    width: 50%;
                    height: 105%;
                }

                #rec670275979 .tn-elem[data-elem-id="1700550539881"] .tn-atom {
                    background-color: #f2f2f2;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 639px) {
                    #rec670275979 .tn-elem[data-elem-id="1700550539881"] {
                        width: 100%;
                        height: 400px;
                    }

                    #rec670275979 .tn-elem[data-elem-id="1700550539881"] .tn-atom {
                        background-position: center center;
                        opacity: 0;
                    }
                }

                #rec670275979 .tn-elem[data-elem-id="1700637659901"] {
                    z-index: 3;
                    top: 0px;
                    left: calc(100% - 70% + 0px);
                    width: 70%;
                    height: 100%;
                }

                #rec670275979 .tn-elem[data-elem-id="1700637659901"] .tn-atom {
                    background-position: left bottom;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec670275979 .tn-elem[data-elem-id="1700637659901"] {
                        height: 100%;
                    }

                    #rec670275979 .tn-elem[data-elem-id="1700637659901"] .tn-atom {
                        background-position: left bottom;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670275979 .tn-elem[data-elem-id="1700637659901"] {
                        top: 0px;
                        left: calc(100% - 70% + 0px);
                        width: 100%;
                        height: 601px;
                    }

                    #rec670275979 .tn-elem[data-elem-id="1700637659901"] .tn-atom {
                        background-position: left bottom;
                    }
                }

                #rec670275979 .tn-elem[data-elem-id="1664898801793"] {
                    color: #2b559d;
                    text-align: LEFT;
                    z-index: 4;
                    top: calc(50vh - 0px + -22px);
                    left: calc(50% - 137px + 167px);
                    width: 274px;
                }

                #rec670275979 .tn-elem[data-elem-id="1664898801793"] .tn-atom {
                    color: #2b559d;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.38;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec670275979 .tn-elem[data-elem-id="1664898801793"] {
                        top: calc(5vh - 0px + 234px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670275979 .tn-elem[data-elem-id="1664898801793"] {
                        top: calc(5vh - 0px + -15px);
                        left: calc(50% - 137px + 15px);
                        width: 295px;
                    }
                }

                #rec670275979 .tn-elem[data-elem-id="1664899613906"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 5;
                    top: calc(100vh + -30px);
                    left: 30px;
                    width: 42%;
                }

                #rec670275979 .tn-elem[data-elem-id="1664899613906"] .tn-atom {
                    color: #000000;
                    font-size: 43px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    letter-spacing: -3px;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec670275979 .tn-elem[data-elem-id="1664899613906"] {
                        top: calc(10vh + -30px);
                        left: 15px;
                        width: 36%;
                    }

                    #rec670275979 .tn-elem[data-elem-id="1664899613906"] .tn-atom {
                        font-size: 28px;
                        letter-spacing: -1.8px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670275979 .tn-elem[data-elem-id="1664899613906"] {
                        top: calc(10vh + 60px);
                        width: 95%;
                    }
                }

                #rec670275979 .tn-elem[data-elem-id="1700550469583"] {
                    z-index: 6;
                    top: 0px;
                    left: calc(50% - 50% + 0px);
                    width: 100%;
                    height: 2px;
                }

                #rec670275979 .tn-elem[data-elem-id="1700550469583"] .tn-atom {
                    background-color: #262626;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 639px) {}

                #rec670275979 .tn-elem[data-elem-id="1700551242335"] {
                    z-index: 7;
                    top: 30px;
                    left: calc(50% - 19.5px + -50px);
                    width: 39px;
                }

                #rec670275979 .tn-elem[data-elem-id="1700551242335"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 639px) {
                    #rec670275979 .tn-elem[data-elem-id="1700551242335"] {
                        top: 30px;
                        left: calc(50% - 19.5px + 1px);
                        width: 15px;
                    }

                    #rec670275979 .tn-elem[data-elem-id="1700551242335"] .tn-atom {
                        opacity: 0.6;
                    }
                }

                #rec670275979 .tn-elem[data-elem-id="1700551281975"] {
                    z-index: 8;
                    top: calc(50vh - 0px + -164px);
                    left: -64px;
                    width: 236px;
                }

                #rec670275979 .tn-elem[data-elem-id="1700551281975"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec670275979 .tn-elem[data-elem-id="1700551281975"] {
                        top: calc(5vh - 0px + -94px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670275979 .tn-elem[data-elem-id="1700551281975"] {
                        top: calc(5vh - 0px + 169px);
                        left: 127px;
                    }

                    #rec670275979 .tn-elem[data-elem-id="1700551281975"] .tn-atom {
                        opacity: 0.6;
                    }
                }

                #rec670275979 .tn-elem[data-elem-id="1664899450886"] {
                    z-index: 9;
                    top: 0px;
                    left: calc(50% - 1px + 0px);
                    width: 2px;
                    height: 100%;
                }

                #rec670275979 .tn-elem[data-elem-id="1664899450886"] .tn-atom {
                    background-color: #262626;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 639px) {
                    #rec670275979 .tn-elem[data-elem-id="1664899450886"] {
                        top: 400px;
                        left: calc(50% - 1px + 0px);
                        width: 100%;
                        height: 2px;
                    }

                    #rec670275979 .tn-elem[data-elem-id="1664899450886"] .tn-atom {
                        background-position: center center;
                        opacity: 0;
                    }
                }

                #rec670275979 .tn-elem[data-elem-id="1718813569673"] {
                    z-index: 10;
                    top: calc(50vh - 0px + -137px);
                    left: calc(50% - 600px + 631px);
                    width: 40px;
                }

                #rec670275979 .tn-elem[data-elem-id="1718813569673"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec670275979 .tn-elem[data-elem-id="1718813569673"] {
                        left: calc(50% - 320px + 351px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670275979 .tn-elem[data-elem-id="1718813569673"] {
                        top: calc(5vh - 0px + -177px);
                        left: calc(50% - 160px + 15px);
                    }
                }

                #rec670275979 .tn-elem[data-elem-id="1718813569684"] {
                    z-index: 11;
                    top: calc(50vh - 0px + -137px);
                    left: calc(50% - 600px + 667px);
                    width: 40px;
                }

                #rec670275979 .tn-elem[data-elem-id="1718813569684"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec670275979 .tn-elem[data-elem-id="1718813569684"] {
                        left: calc(50% - 320px + 387px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670275979 .tn-elem[data-elem-id="1718813569684"] {
                        top: calc(5vh - 0px + -177px);
                        left: calc(50% - 160px + 51px);
                    }
                }

                #rec670275979 .tn-elem[data-elem-id="1718813569692"] {
                    z-index: 12;
                    top: calc(50vh - 0px + -137px);
                    left: calc(50% - 600px + 703px);
                    width: 40px;
                }

                #rec670275979 .tn-elem[data-elem-id="1718813569692"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec670275979 .tn-elem[data-elem-id="1718813569692"] {
                        left: calc(50% - 320px + 423px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670275979 .tn-elem[data-elem-id="1718813569692"] {
                        top: calc(5vh - 0px + -177px);
                        left: calc(50% - 160px + 87px);
                    }
                }

                #rec670275979 .tn-elem[data-elem-id="1718813569698"] {
                    z-index: 13;
                    top: calc(50vh - 0px + -137px);
                    left: calc(50% - 600px + 739px);
                    width: 40px;
                }

                #rec670275979 .tn-elem[data-elem-id="1718813569698"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec670275979 .tn-elem[data-elem-id="1718813569698"] {
                        left: calc(50% - 320px + 459px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670275979 .tn-elem[data-elem-id="1718813569698"] {
                        top: calc(5vh - 0px + -177px);
                        left: calc(50% - 160px + 123px);
                    }
                }
            </style>
            <!-- <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="670275979" data-artboard-screens="320,640,1200"
                    data-artboard-height="642" data-artboard-valign="stretch" data-artboard-height_vh="100"
                    data-artboard-upscale="grid" data-artboard-ovrflw="visible" data-artboard-height-res-320="688"
                    data-artboard-height_vh-res-320="10" data-artboard-height-res-640="600">
                    <div class="t396__carrier" data-artboard-recid="670275979"></div>
                    <div class="t396__filter" data-artboard-recid="670275979"></div>
                    <div class='t396__elem tn-elem tn-elem__6702759791700550539881' data-elem-id='1700550539881'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="0"
                        data-field-height-value="105" data-field-width-value="50" data-field-axisy-value="top"
                        data-field-axisx-value="right" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="%"
                        data-field-widthunits-value="%" data-field-height-res-320-value="400"
                        data-field-width-res-320-value="100" data-field-heightunits-res-320-value="px">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6702759791700637659901' data-elem-id='1700637659901'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="0"
                        data-field-height-value="100" data-field-width-value="70" data-field-axisy-value="top"
                        data-field-axisx-value="right" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="%"
                        data-field-widthunits-value="%" data-field-top-res-320-value="0"
                        data-field-left-res-320-value="0" data-field-height-res-320-value="601"
                        data-field-width-res-320-value="100" data-field-heightunits-res-320-value="px"
                        data-field-height-res-640-value="100" data-field-heightunits-res-640-value="%">
                        <div class='tn-atom t-bgimg'
                            data-original="https://static.tildacdn.net/tild3931-6464-4139-b430-353066613031/Abstract_Gradients_2.jpg">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem highlight-v1 tn-elem__6702759791664898801793'
                        data-elem-id='1664898801793' data-elem-type='text' data-field-top-value="-22"
                        data-field-left-value="167" data-field-width-value="274" data-field-axisy-value="center"
                        data-field-axisx-value="center" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value=""
                        data-field-widthunits-value="px" data-animate-mobile="y" data-field-top-res-320-value="-15"
                        data-field-left-res-320-value="15" data-field-width-res-320-value="295"
                        data-field-axisy-res-320-value="bottom" data-field-axisx-res-320-value="left"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="234"
                        data-field-axisy-res-640-value="top">
                        <div class='tn-atom' field='tn_text_1664898801793'>International awards show that our design
                            is&nbsp;relevant to&nbsp;the whole world. We&nbsp;have more than 40 international awards.
                            In&nbsp;addition, the agency founder is&nbsp;a&nbsp;member of&nbsp;the CSSDA jury.</div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6702759791664899613906' data-elem-id='1664899613906'
                        data-elem-type='text' data-field-top-value="-30" data-field-left-value="30"
                        data-field-width-value="42" data-field-axisy-value="bottom" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="60" data-field-width-res-320-value="95"
                        data-field-axisy-res-320-value="top" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-top-res-640-value="-30" data-field-left-res-640-value="15"
                        data-field-width-res-640-value="36">
                        <div class='tn-atom' field='tn_text_1664899613906'><span style="color: rgb(43, 85, 157);">Design
                                beyond borders.</span> Work with&nbsp;clients all over the&nbsp;world.</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6702759791700550469583' data-elem-id='1700550469583'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="0"
                        data-field-height-value="2" data-field-width-value="100" data-field-axisy-value="top"
                        data-field-axisx-value="center" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="%">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6702759791700551242335' data-elem-id='1700551242335'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="-50"
                        data-field-width-value="39" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="39" data-field-fileheight-value="39"
                        data-field-top-res-320-value="30" data-field-left-res-320-value="1"
                        data-field-width-res-320-value="15" data-field-axisy-res-320-value="top"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="px">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6438-6461-4235-a263-646261336132/photo.svg'
                                alt='' imgfield='tn_img_1700551242335' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6702759791700551281975' data-elem-id='1700551281975'
                        data-elem-type='image' data-field-top-value="-164" data-field-left-value="-64"
                        data-field-width-value="236" data-field-axisy-value="center" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="236" data-field-fileheight-value="159"
                        data-field-top-res-320-value="169" data-field-left-res-320-value="127"
                        data-field-axisy-res-320-value="top" data-field-axisx-res-320-value="right"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="-94">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6639-3065-4362-b465-656138356632/Vector_51.svg'
                                alt='' imgfield='tn_img_1700551281975' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6702759791664899450886' data-elem-id='1664899450886'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="0"
                        data-field-height-value="100" data-field-width-value="2" data-field-axisy-value="top"
                        data-field-axisx-value="center" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="%"
                        data-field-widthunits-value="px" data-field-top-res-320-value="400"
                        data-field-left-res-320-value="0" data-field-height-res-320-value="2"
                        data-field-width-res-320-value="100" data-field-heightunits-res-320-value="px"
                        data-field-widthunits-res-320-value="%">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6702759791718813569673' data-elem-id='1718813569673'
                        data-elem-type='image' data-field-top-value="-137" data-field-left-value="631"
                        data-field-width-value="40" data-field-axisy-value="center" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-field-filewidth-value="80"
                        data-field-fileheight-value="80" data-field-top-res-320-value="-177"
                        data-field-left-res-320-value="15" data-field-axisy-res-320-value="bottom"
                        data-field-container-res-320-value="window" data-field-left-res-640-value="351">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3664-6334-4664-a330-626530303364/Group_20803.png'
                                alt='' imgfield='tn_img_1718813569673' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6702759791718813569684' data-elem-id='1718813569684'
                        data-elem-type='image' data-field-top-value="-137" data-field-left-value="667"
                        data-field-width-value="40" data-field-axisy-value="center" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-field-filewidth-value="80"
                        data-field-fileheight-value="80" data-field-top-res-320-value="-177"
                        data-field-left-res-320-value="51" data-field-axisy-res-320-value="bottom"
                        data-field-container-res-320-value="window" data-field-left-res-640-value="387">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6333-3231-4264-b535-383234643866/Ellipse_41.png'
                                alt='' imgfield='tn_img_1718813569684' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6702759791718813569692' data-elem-id='1718813569692'
                        data-elem-type='image' data-field-top-value="-137" data-field-left-value="703"
                        data-field-width-value="40" data-field-axisy-value="center" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-field-filewidth-value="80"
                        data-field-fileheight-value="80" data-field-top-res-320-value="-177"
                        data-field-left-res-320-value="87" data-field-axisy-res-320-value="bottom"
                        data-field-container-res-320-value="window" data-field-left-res-640-value="423">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3235-3264-4237-b835-306161663338/Ellipse_42.png'
                                alt='' imgfield='tn_img_1718813569692' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6702759791718813569698' data-elem-id='1718813569698'
                        data-elem-type='image' data-field-top-value="-137" data-field-left-value="739"
                        data-field-width-value="40" data-field-axisy-value="center" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-field-filewidth-value="80"
                        data-field-fileheight-value="80" data-field-top-res-320-value="-177"
                        data-field-left-res-320-value="123" data-field-axisy-res-320-value="bottom"
                        data-field-container-res-320-value="window" data-field-left-res-640-value="459">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6163-3962-4136-b932-643561326231/Group_1321314198.png'
                                alt='' imgfield='tn_img_1718813569698' /></div>
                    </div>
                </div>
            </div> -->
            <script>t_onReady(function () {
                    t_onFuncLoad('t396_init', function () {
                        t396_init('670275979');
                    });
                });</script><!-- /T396 -->
        </div>
        <div id="rec670285233" class="r t-rec" style=" " data-animationappear="off" data-record-type="131"><!-- T123 -->
            <div class="t123">
                <div class="t-container_100 ">
                    <div class="t-width t-width_100 ">

                        <!--!ANNEXX!--><!--!ANX822-1!--!><!--![{"id":"","data":""},{"id":"anxcommentblock","data":""},{"id":"shape","data":".tn-elem__6702759791700637659901"},{"id":"blocks","data":""},{"id":"fixed-block","data":"false"},{"id":"mix-blend","data":"darken"},{"id":"","data":""},{"id":"filter-blur","data":"-1"},{"id":"filter-brightness","data":"-1"},{"id":"filter-contrast","data":"-1"},{"id":"filter-drop-shadow","data":""},{"id":"filter-drop-shadow-color","data":"#000"},{"id":"filter-grayscale","data":"-1"},{"id":"filter-hue-rotate","data":"-1"},{"id":"filter-invert","data":"-1"},{"id":"filter-opacity","data":"-1"},{"id":"filter-saturate","data":"-1"},{"id":"filter-sepia","data":"-1"},{"id":"","data":""},{"id":"filter-blur-hover","data":"-1"},{"id":"filter-brightness-hover","data":"-1"},{"id":"filter-contrast-hover","data":"-1"},{"id":"filter-drop-shadow-hover","data":""},{"id":"filter-drop-shadow-color-hover","data":"#000"},{"id":"filter-grayscale-hover","data":"-1"},{"id":"filter-hue-rotate-hover","data":"-1"},{"id":"filter-invert-hover","data":"-1"},{"id":"filter-opacity-hover","data":"-1"},{"id":"filter-saturate-hover","data":"-1"},{"id":"filter-sepia-hover","data":"-1"},{"id":"","data":""},{"id":"backdrop-filter-blur","data":"-1"},{"id":"backdrop-filter-brightness","data":"-1"},{"id":"backdrop-filter-contrast","data":"-1"},{"id":"backdrop-filter-grayscale","data":"-1"},{"id":"backdrop-filter-hue-rotate","data":"-1"},{"id":"backdrop-filter-invert","data":"-1"},{"id":"backdrop-filter-opacity","data":"-1"},{"id":"backdrop-filter-saturate","data":"-1"},{"id":"backdrop-filter-sepia","data":"-1"},{"id":"","data":""},{"id":"backdrop-filter-blur-hover","data":"-1"},{"id":"backdrop-filter-brightness-hover","data":"-1"},{"id":"backdrop-filter-contrast-hover","data":"-1"},{"id":"backdrop-filter-grayscale-hover","data":"-1"},{"id":"backdrop-filter-hue-rotate-hover","data":"-1"},{"id":"backdrop-filter-invert-hover","data":"-1"},{"id":"backdrop-filter-opacity-hover","data":"-1"},{"id":"backdrop-filter-saturate-hover","data":"-1"},{"id":"backdrop-filter-sepia-hover","data":"-1"},{"id":"transition-duration","data":"0"},{"id":"border-limit","data":"false"}]!-->
                        <script> if ('.tn-elem__6702759791700637659901' || '') { function annexxAddStyle(numberMod, codestyle) { let styleBlock = document.querySelector('head > #annexxStyle' + numberMod); if (!styleBlock) { document.querySelector('head').insertAdjacentHTML('beforeend', '<style id="annexxStyle' + numberMod + '"></style>'); styleBlock = document.querySelector('head > #annexxStyle' + numberMod); } let t = (function () { return !Array.from(styleBlock.childNodes).some(function (e) { if (e.textContent === codestyle) { return true; } }); }()); if (t) styleBlock.insertAdjacentHTML('beforeend', codestyle); } if ('.tn-elem__6702759791700637659901') { document.addEventListener("DOMContentLoaded", function () { if (false && !isOpera && !isFirefox) { annexxAddStyle('822', ` .tn-elem__6702759791700637659901 { overflow: hidden; } `); } }); annexxAddStyle('822', ` ${(function () { return ".tn-elem__6702759791700637659901".split(",").map(e => e + " .tn-atom").join(","); }())} { transition: filter 0ms linear; ${(function () { let arr = []; if (-1 !== -1) { arr.push("blur(" + -1 + "px)"); } if (-1 !== -1) { arr.push("brightness(" + -1 + "%)"); } if (-1 !== -1) { arr.push("contrast(" + -1 + "%)"); } if ("") { arr.push("drop-shadow(" + "".split(" ").map(e => e + "px").join(" ") + " #000)"); } if (-1 !== -1) { arr.push("grayscale(" + -1 + "%)"); } if (-1 !== -1) { arr.push("hue-rotate(" + -1 + "deg)"); } if (-1 !== -1) { arr.push("invert(" + -1 + "%)"); } if (-1 !== -1) { arr.push("opacity(" + -1 + "%)"); } return arr.length ? "filter: " + arr.join(" ") + ";" : ""; }())} } ${(function () { return ".tn-elem__6702759791700637659901".split(",").map(e => e + " .tn-atom:hover").join(","); }())} { transition: filter 0ms linear; ${(function () { let arr = []; if (-1 !== -1) { arr.push("blur(" + -1 + "px)"); } if (-1 !== -1) { arr.push("brightness(" + -1 + "%)"); } if (-1 !== -1) { arr.push("contrast(" + -1 + "%)"); } if ("") { arr.push("drop-shadow(" + "".split(" ").map(e => e + "px").join(" ") + " #000)"); } if (-1 !== -1) { arr.push("grayscale(" + -1 + "%)"); } if (-1 !== -1) { arr.push("hue-rotate(" + -1 + "deg)"); } if (-1 !== -1) { arr.push("invert(" + -1 + "%)"); } if (-1 !== -1) { arr.push("opacity(" + -1 + "%)"); } return arr.length ? "filter: " + arr.join(" ") + ";" : ""; }())} } `); annexxAddStyle('822', ` .tn-elem__6702759791700637659901 { mix-blend-mode: darken; display: flex !important; transition: -webkit-backdrop-filter 0ms linear, backdrop-filter 0ms linear; ${(function () { let arr = []; if (-1 !== -1) { arr.push("blur(" + -1 + "px)"); } if (-1 !== -1) { arr.push("brightness(" + -1 + "%)"); } if (-1 !== -1) { arr.push("contrast(" + -1 + "%)"); } if (-1 !== -1) { arr.push("grayscale(" + -1 + "%)"); } if (-1 !== -1) { arr.push("hue-rotate(" + -1 + "deg)"); } if (-1 !== -1) { arr.push("invert(" + -1 + "%)"); } if (-1 !== -1) { arr.push("opacity(" + -1 + "%)"); } return arr.length ? "-webkit-backdrop-filter: " + arr.join(" ") + ";backdrop-filter: " + arr.join(" ") + ";" : ""; }())} } ${(function () { return ".tn-elem__6702759791700637659901".split(",").map(e => e + ":hover").join(","); }())} { transition: -webkit-backdrop-filter 0ms linear, backdrop-filter 0ms linear; ${(function () { let arr = []; if (-1 !== -1) { arr.push("blur(" + -1 + "px)"); } if (-1 !== -1) { arr.push("brightness(" + -1 + "%)"); } if (-1 !== -1) { arr.push("contrast(" + -1 + "%)"); } if (-1 !== -1) { arr.push("grayscale(" + -1 + "%)"); } if (-1 !== -1) { arr.push("hue-rotate(" + -1 + "deg)"); } if (-1 !== -1) { arr.push("invert(" + -1 + "%)"); } if (-1 !== -1) { arr.push("opacity(" + -1 + "%)"); } return arr.length ? "-webkit-backdrop-filter: " + arr.join(" ") + ";backdrop-filter: " + arr.join(" ") + ";" : ""; }())} } `); '.tn-elem__6702759791700637659901'.split(/,\s|,/g).forEach(function (e) { let elem = document.querySelector(e); if (!elem) return false; annexxAddStyle('822', ` ${e} .tn-atom { display: flex !important; ${(function () { let align = getComputedStyle(elem).textAlign; switch (align) { case 'left': return 'justify-content: flex-start;'; break; case 'center': return 'justify-content: center;'; break; case 'right': return 'justify-content: flex-end;'; break; default: return 'justify-content: flex-start;'; break; } }())} align-items: center; width: 100%; height: 100%; } `); }); } if ('') { annexxAddStyle('822', ` { mix-blend-mode: darken; ${(function () { let arr = []; if (-1 !== -1) { arr.push("blur(" + -1 + "px)"); } if (-1 !== -1) { arr.push("brightness(" + -1 + "%)"); } if (-1 !== -1) { arr.push("contrast(" + -1 + "%)"); } if ("") { arr.push("drop-shadow(" + "".split(" ").map(e => e + "px").join(" ") + " #000)"); } if (-1 !== -1) { arr.push("grayscale(" + -1 + "%)"); } if (-1 !== -1) { arr.push("hue-rotate(" + -1 + "deg)"); } if (-1 !== -1) { arr.push("invert(" + -1 + "%)"); } if (-1 !== -1) { arr.push("opacity(" + -1 + "%)"); } return arr.length ? "transition: -webkit-backdrop-filter 0ms linear, filter 0ms linear, backdrop-filter 0ms linear;filter: " + arr.join(" ") + ";" : ""; }())} ${(function () { let arr = []; if (-1 !== -1) { arr.push("blur(" + -1 + "px)"); } if (-1 !== -1) { arr.push("brightness(" + -1 + "%)"); } if (-1 !== -1) { arr.push("contrast(" + -1 + "%)"); } if (-1 !== -1) { arr.push("grayscale(" + -1 + "%)"); } if (-1 !== -1) { arr.push("hue-rotate(" + -1 + "deg)"); } if (-1 !== -1) { arr.push("invert(" + -1 + "%)"); } if (-1 !== -1) { arr.push("opacity(" + -1 + "%)"); } return arr.length ? "transition: -webkit-backdrop-filter 0ms linear, filter 0ms linear, backdrop-filter 0ms linear; -webkit-backdrop-filter: " + arr.join(" ") + ";backdrop-filter: " + arr.join(" ") + ";" : ""; }())} } :hover { ${(function () { let arr = []; if (-1 !== -1) { arr.push("blur(" + -1 + "px)"); } if (-1 !== -1) { arr.push("brightness(" + -1 + "%)"); } if (-1 !== -1) { arr.push("contrast(" + -1 + "%)"); } if ("") { arr.push("drop-shadow(" + "".split(" ").map(e => e + "px").join(" ") + " #000)"); } if (-1 !== -1) { arr.push("grayscale(" + -1 + "%)"); } if (-1 !== -1) { arr.push("hue-rotate(" + -1 + "deg)"); } if (-1 !== -1) { arr.push("invert(" + -1 + "%)"); } if (-1 !== -1) { arr.push("opacity(" + -1 + "%)"); } return arr.length ? "transition: -webkit-backdrop-filter 0ms linear, filter 0ms linear, backdrop-filter 0ms linear;filter: " + arr.join(" ") + ";" : ""; }())} ${(function () { let arr = []; if (-1 !== -1) { arr.push("blur(" + -1 + "px)"); } if (-1 !== -1) { arr.push("brightness(" + -1 + "%)"); } if (-1 !== -1) { arr.push("contrast(" + -1 + "%)"); } if (-1 !== -1) { arr.push("grayscale(" + -1 + "%)"); } if (-1 !== -1) { arr.push("hue-rotate(" + -1 + "deg)"); } if (-1 !== -1) { arr.push("invert(" + -1 + "%)"); } if (-1 !== -1) { arr.push("opacity(" + -1 + "%)"); } return arr.length ? "transition: -webkit-backdrop-filter 0ms linear, filter 0ms linear, backdrop-filter 0ms linear; -webkit-backdrop-filter: " + arr.join(" ") + ";backdrop-filter: " + arr.join(" ") + ";" : ""; }())} } ${(function () { if (false) { return ` { position: fixed; }` } else return ''; }())} `); } } </script>


                    </div>
                </div>
            </div>
        </div>
        <div id="rec671175376" class="r t-rec" style=" " data-record-type="215"><a name="projects"
                style="font-size:0;"></a></div>
        <div id="rec671412965" class="r t-rec uc-up-block" style="background-color:#ffffff; " data-animationappear="off"
            data-record-type="396" data-bg-color="#ffffff"><!-- T396 -->
            <style>
                #rec671412965 .t396__artboard {
                    height: 756px;
                }

                #rec671412965 .t396__filter {
                    height: 756px;
                }

                #rec671412965 .t396__carrier {
                    height: 756px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1919px) {

                    #rec671412965 .t396__artboard,
                    #rec671412965 .t396__filter,
                    #rec671412965 .t396__carrier {
                        height: 613px;
                    }

                    #rec671412965 .t396__filter {}

                    #rec671412965 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 1199px) {

                    #rec671412965 .t396__artboard,
                    #rec671412965 .t396__filter,
                    #rec671412965 .t396__carrier {
                        height: 1243px;
                    }

                    #rec671412965 .t396__filter {}

                    #rec671412965 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec671412965 .t396__artboard,
                    #rec671412965 .t396__filter,
                    #rec671412965 .t396__carrier {
                        height: 876px;
                    }

                    #rec671412965 .t396__filter {}

                    #rec671412965 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec671412965 .tn-elem[data-elem-id="1664896108753"] {
                    z-index: 2;
                    top: 0px;
                    left: calc(50% - 50% + 0px);
                    width: 100%;
                    height: 110%;
                }

                #rec671412965 .tn-elem[data-elem-id="1664896108753"] .tn-atom {
                    border-radius: 30px;
                    background-color: #0b0b1c;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec671412965 .tn-elem[data-elem-id="1664896108753"] {
                        top: 0px;
                        left: calc(50% - 50% + 0px);
                        width: 100%;
                        height: 110%;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec671412965 .tn-elem[data-elem-id="1664896108753"] {
                        top: 0px;
                        left: calc(50% - 50% + 0px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec671412965 .tn-elem[data-elem-id="1664896108753"] .tn-atom {
                        border-radius: 20px;
                    }
                }

                #rec671412965 .tn-elem[data-elem-id="1664893906817"] {
                    z-index: 3;
                    top: 47px;
                    left: 30px;
                    width: 48%;
                    height: 600px;
                }

                #rec671412965 .tn-elem.t396__elem--anim-hidden[data-elem-id="1664893906817"] {
                    opacity: 0;
                }

                #rec671412965 .tn-elem[data-elem-id="1664893906817"] .tn-atom {
                    background-color: #9ba3ab;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906817"] {
                        top: 47px;
                        left: 30px;
                        width: 47%;
                        height: 450px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906817"] {
                        left: 26px;
                        width: 92%;
                        height: 500px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906817"] {
                        top: 47px;
                        left: 0px;
                        height: 300px;
                    }
                }

                #rec671412965 .tn-elem[data-elem-id="1664893906823"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 4;
                    top: 665px;
                    left: 30px;
                    width: 48%;
                }

                #rec671412965 .tn-elem[data-elem-id="1664893906823"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.44;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906823"] {
                        top: 515px;
                        left: 30px;
                        width: 47%;
                    }

                    #rec671412965 .tn-elem[data-elem-id="1664893906823"] .tn-atom {
                        font-size: 16px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906823"] {
                        top: 557px;
                        left: 25px;
                        width: 92%;
                    }

                    #rec671412965 .tn-elem[data-elem-id="1664893906823"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906823"] {
                        top: 357px;
                        left: 0px;
                    }
                }

                #rec671412965 .tn-elem[data-elem-id="1664893906827"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 5;
                    top: 691px;
                    left: 30px;
                    width: 48%;
                }

                #rec671412965 .tn-elem[data-elem-id="1664893906827"] .tn-atom {
                    color: #ffffff;
                    font-size: 13px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    opacity: 0.4;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906827"] {
                        top: 541px;
                        left: 30px;
                        width: 47%;
                    }

                    #rec671412965 .tn-elem[data-elem-id="1664893906827"] .tn-atom {
                        font-size: 13px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906827"] {
                        top: 579px;
                        left: 25px;
                        width: 92%;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906827"] {
                        top: 379px;
                        left: 0px;
                    }
                }

                #rec671412965 .tn-elem[data-elem-id="1664893906830"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 6;
                    top: 17px;
                    left: calc(50% - 83px + 0px);
                    width: 166px;
                }

                #rec671412965 .tn-elem[data-elem-id="1664893906830"] .tn-atom {
                    color: #ffffff;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.43;
                    font-weight: 400;
                    opacity: 0.4;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906830"] {
                        top: 17px;
                        left: calc(50% - 83px + 0px);
                        width: 166px;
                    }

                    #rec671412965 .tn-elem[data-elem-id="1664893906830"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906830"] .tn-atom {
                        font-size: 12px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906830"] {
                        top: 13px;
                        left: calc(50% - 83px + 0px);
                    }
                }

                #rec671412965 .tn-elem[data-elem-id="1664893906833"] {
                    z-index: 7;
                    top: 47px;
                    left: calc(100% - 48% + -30px);
                    width: 48%;
                    height: 600px;
                }

                #rec671412965 .tn-elem.t396__elem--anim-hidden[data-elem-id="1664893906833"] {
                    opacity: 0;
                }

                #rec671412965 .tn-elem[data-elem-id="1664893906833"] .tn-atom {
                    background-color: #383b45;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906833"] {
                        top: 47px;
                        left: calc(100% - 48% + -30px);
                        width: 47%;
                        height: 450px;
                    }

                    #rec671412965 .tn-elem[data-elem-id="1664893906833"] .tn-atom {
                        background-color: #262626;
                        background-position: center top;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906833"] {
                        top: 654px;
                        left: calc(100% - 48% + 26px);
                        width: 92%;
                        height: 500px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906833"] {
                        top: 469px;
                        left: calc(100% - 48% + 0px);
                        height: 300px;
                    }
                }

                #rec671412965 .tn-elem[data-elem-id="1664893906837"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 8;
                    top: 665px;
                    left: calc(100% - 48% + -30px);
                    width: 48%;
                }

                #rec671412965 .tn-elem[data-elem-id="1664893906837"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.44;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906837"] {
                        top: 515px;
                        left: calc(100% - 48% + -30px);
                        width: 47%;
                    }

                    #rec671412965 .tn-elem[data-elem-id="1664893906837"] .tn-atom {
                        font-size: 16px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906837"] {
                        top: 1164px;
                        left: calc(100% - 48% + 25px);
                        width: 92%;
                    }

                    #rec671412965 .tn-elem[data-elem-id="1664893906837"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906837"] {
                        top: 779px;
                        left: calc(100% - 48% + 0px);
                    }
                }

                #rec671412965 .tn-elem[data-elem-id="1664893906841"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 9;
                    top: 691px;
                    left: calc(100% - 48% + -30px);
                    width: 48%;
                }

                #rec671412965 .tn-elem[data-elem-id="1664893906841"] .tn-atom {
                    color: #ffffff;
                    font-size: 13px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    opacity: 0.4;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906841"] {
                        top: 541px;
                        left: calc(100% - 48% + -30px);
                        width: 47%;
                    }

                    #rec671412965 .tn-elem[data-elem-id="1664893906841"] .tn-atom {
                        font-size: 13px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906841"] {
                        top: 1186px;
                        left: calc(100% - 48% + 25px);
                        width: 92%;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec671412965 .tn-elem[data-elem-id="1664893906841"] {
                        top: 801px;
                        left: calc(100% - 48% + 0px);
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="671412965" data-artboard-screens="320,640,1200,1920"
                    data-artboard-height="756" data-artboard-valign="center" data-artboard-upscale="grid"
                    data-artboard-height-res-320="876" data-artboard-height-res-640="1243"
                    data-artboard-height-res-1200="613">
                    <div class="t396__carrier" data-artboard-recid="671412965"></div>
                    <div class="t396__filter" data-artboard-recid="671412965"></div>
                    <div class='t396__elem tn-elem tn-elem__6714129651664896108753' data-elem-id='1664896108753'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="0"
                        data-field-height-value="110" data-field-width-value="100" data-field-axisy-value="top"
                        data-field-axisx-value="center" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="%"
                        data-field-widthunits-value="%" data-field-top-res-640-value="0"
                        data-field-left-res-640-value="0" data-field-top-res-1200-value="0"
                        data-field-left-res-1200-value="0" data-field-height-res-1200-value="110"
                        data-field-width-res-1200-value="100">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6714129651664893906817 ' data-elem-id='1664893906817'
                        data-elem-type='shape' data-field-top-value="47" data-field-left-value="30"
                        data-field-height-value="600" data-field-width-value="48" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="%" data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':0.95,'sy':0.95,'op':1,'ro':0,'bl':'0','ea':'','dt':0}]"
                        data-field-top-res-320-value="47" data-field-left-res-320-value="0"
                        data-field-height-res-320-value="300" data-field-axisx-res-320-value="center"
                        data-field-left-res-640-value="26" data-field-height-res-640-value="500"
                        data-field-width-res-640-value="92" data-field-top-res-1200-value="47"
                        data-field-left-res-1200-value="30" data-field-height-res-1200-value="450"
                        data-field-width-res-1200-value="47"><a class='tn-atom t-bgimg' data-original="images/card01.jpg"></a>
                    </div>
                    <!-- data-original="https://static.tildacdn.net/tild3232-6136-4331-b663-326564383135/image.png"></a> -->
                    <div class='t396__elem tn-elem tn-elem__6714129651664893906823' data-elem-id='1664893906823'
                        data-elem-type='text' data-field-top-value="665" data-field-left-value="30"
                        data-field-width-value="48" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="357" data-field-left-res-320-value="0"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="557"
                        data-field-left-res-640-value="25" data-field-width-res-640-value="92"
                        data-field-top-res-1200-value="515" data-field-left-res-1200-value="30"
                        data-field-width-res-1200-value="47">
                        <div class='tn-atom'><a style="color: inherit">Starlight Marketing</a></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6714129651664893906827' data-elem-id='1664893906827'
                        data-elem-type='text' data-field-top-value="691" data-field-left-value="30"
                        data-field-width-value="48" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="379" data-field-left-res-320-value="0"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="579"
                        data-field-left-res-640-value="25" data-field-width-res-640-value="92"
                        data-field-top-res-1200-value="541" data-field-left-res-1200-value="30"
                        data-field-width-res-1200-value="47">
                        <div class='tn-atom' field='tn_text_1664893906827'>Creative designing agency powered by nezdeck
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6714129651664893906830' data-elem-id='1664893906830'
                        data-elem-type='text' data-field-top-value="17" data-field-left-value="0"
                        data-field-width-value="166" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="13" data-field-left-res-320-value="0"
                        data-field-top-res-1200-value="17" data-field-left-res-1200-value="0"
                        data-field-width-res-1200-value="166">
                        <div class='tn-atom' field='tn_text_1664893906830'>our projects</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6714129651664893906833 ' data-elem-id='1664893906833'
                        data-elem-type='shape' data-field-top-value="47" data-field-left-value="-30"
                        data-field-height-value="600" data-field-width-value="48" data-field-axisy-value="top"
                        data-field-axisx-value="right" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="%" data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':0.95,'sy':0.95,'op':1,'ro':0,'bl':'0','ea':'','dt':0}]"
                        data-field-top-res-320-value="469" data-field-left-res-320-value="0"
                        data-field-height-res-320-value="300" data-field-axisx-res-320-value="center"
                        data-field-top-res-640-value="654" data-field-left-res-640-value="26"
                        data-field-height-res-640-value="500" data-field-width-res-640-value="92"
                        data-field-axisx-res-640-value="left" data-field-top-res-1200-value="47"
                        data-field-left-res-1200-value="-30" data-field-height-res-1200-value="450"
                        data-field-width-res-1200-value="47"><a class='tn-atom t-bgimg'
                            data-original="images/card02.png"></a>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6714129651664893906837' data-elem-id='1664893906837'
                        data-elem-type='text' data-field-top-value="665" data-field-left-value="-30"
                        data-field-width-value="48" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="779" data-field-left-res-320-value="0"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="1164"
                        data-field-left-res-640-value="25" data-field-width-res-640-value="92"
                        data-field-axisx-res-640-value="left" data-field-top-res-1200-value="515"
                        data-field-left-res-1200-value="-30" data-field-width-res-1200-value="47">
                        <div class='tn-atom'><a style="color: inherit">Development Craze</a></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6714129651664893906841' data-elem-id='1664893906841'
                        data-elem-type='text' data-field-top-value="691" data-field-left-value="-30"
                        data-field-width-value="48" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="801" data-field-left-res-320-value="0"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="1186"
                        data-field-left-res-640-value="25" data-field-width-res-640-value="92"
                        data-field-axisx-res-640-value="left" data-field-top-res-1200-value="541"
                        data-field-left-res-1200-value="-30" data-field-width-res-1200-value="47">
                        <div class='tn-atom' field='tn_text_1664893906841'>Website, Software & Mobile Applications
                            Development</div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t396_init', function () {
                        t396_init('671412965');
                    });
                });</script><!-- /T396 -->
        </div>
        <div id="rec670348760" class="r t-rec uc-up-block" style="background-color:#ffffff; " data-animationappear="off"
            data-record-type="396" data-bg-color="#ffffff"><!-- T396 -->
            <style>
                #rec670348760 .t396__artboard {
                    height: 581px;
                    background-color: #0b0b1c;
                }

                #rec670348760 .t396__filter {
                    height: 581px;
                }

                #rec670348760 .t396__carrier {
                    height: 581px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1919px) {

                    #rec670348760 .t396__artboard,
                    #rec670348760 .t396__filter,
                    #rec670348760 .t396__carrier {
                        height: 441px;
                    }

                    #rec670348760 .t396__filter {}

                    #rec670348760 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 1199px) {

                    #rec670348760 .t396__artboard,
                    #rec670348760 .t396__filter,
                    #rec670348760 .t396__carrier {
                        height: 1809px;
                    }

                    #rec670348760 .t396__filter {}

                    #rec670348760 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec670348760 .t396__artboard,
                    #rec670348760 .t396__filter,
                    #rec670348760 .t396__carrier {
                        height: 1253px;
                    }

                    #rec670348760 .t396__filter {}

                    #rec670348760 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec670348760 .tn-elem[data-elem-id="1664893906817"] {
                    z-index: 2;
                    top: 0px;
                    left: 30px;
                    width: 32%;
                    height: 465px;
                }

                #rec670348760 .tn-elem.t396__elem--anim-hidden[data-elem-id="1664893906817"] {
                    opacity: 0;
                }

                #rec670348760 .tn-elem[data-elem-id="1664893906817"] .tn-atom {
                    background-color: #9ba3ab;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906817"] {
                        top: 0px;
                        left: 30px;
                        width: 31%;
                        height: 310px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906817"] {
                        left: 26px;
                        width: 92%;
                        height: 500px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906817"] {
                        top: 0px;
                        left: 0px;
                        height: 300px;
                    }
                }

                #rec670348760 .tn-elem[data-elem-id="1664893906823"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 3;
                    top: 480px;
                    left: 30px;
                    width: 32%;
                }

                #rec670348760 .tn-elem[data-elem-id="1664893906823"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.44;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906823"] {
                        top: 325px;
                        left: 30px;
                        width: 31%;
                    }

                    #rec670348760 .tn-elem[data-elem-id="1664893906823"] .tn-atom {
                        font-size: 16px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906823"] {
                        top: 510px;
                        left: 25px;
                        width: 92%;
                    }

                    #rec670348760 .tn-elem[data-elem-id="1664893906823"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906823"] {
                        top: 310px;
                        left: 0px;
                    }
                }

                #rec670348760 .tn-elem[data-elem-id="1664893906827"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 4;
                    top: 506px;
                    left: 30px;
                    width: 32%;
                }

                #rec670348760 .tn-elem[data-elem-id="1664893906827"] .tn-atom {
                    color: #ffffff;
                    font-size: 13px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    opacity: 0.4;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906827"] {
                        top: 351px;
                        left: 30px;
                        width: 31%;
                    }

                    #rec670348760 .tn-elem[data-elem-id="1664893906827"] .tn-atom {
                        font-size: 13px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906827"] {
                        top: 532px;
                        left: 25px;
                        width: 92%;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906827"] {
                        top: 332px;
                        left: 0px;
                    }
                }

                #rec670348760 .tn-elem[data-elem-id="1664893906833"] {
                    z-index: 5;
                    top: 0px;
                    left: calc(50% - 16% + 0px);
                    width: 32%;
                    height: 465px;
                }

                #rec670348760 .tn-elem.t396__elem--anim-hidden[data-elem-id="1664893906833"] {
                    opacity: 0;
                }

                #rec670348760 .tn-elem[data-elem-id="1664893906833"] .tn-atom {
                    background-color: #383b45;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906833"] {
                        top: 0px;
                        left: calc(50% - 16% + 0px);
                        width: 32%;
                        height: 310px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906833"] {
                        top: 592px;
                        left: calc(50% - 16% + 26px);
                        width: 92%;
                        height: 500px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906833"] {
                        top: 407px;
                        left: calc(50% - 16% + 0px);
                        height: 300px;
                    }
                }

                #rec670348760 .tn-elem[data-elem-id="1664893906837"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 6;
                    top: 480px;
                    left: calc(100% - 32% + -30px);
                    width: 32%;
                }

                #rec670348760 .tn-elem[data-elem-id="1664893906837"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.44;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906837"] {
                        top: 325px;
                        left: calc(100% - 32% + -30px);
                        width: 31%;
                    }

                    #rec670348760 .tn-elem[data-elem-id="1664893906837"] .tn-atom {
                        font-size: 16px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906837"] {
                        top: 1711px;
                        left: calc(100% - 32% + 25px);
                        width: 92%;
                    }

                    #rec670348760 .tn-elem[data-elem-id="1664893906837"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906837"] {
                        top: 1140px;
                        left: calc(100% - 32% + 0px);
                    }
                }

                #rec670348760 .tn-elem[data-elem-id="1664893906841"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 7;
                    top: 506px;
                    left: calc(100% - 32% + -30px);
                    width: 32%;
                }

                #rec670348760 .tn-elem[data-elem-id="1664893906841"] .tn-atom {
                    color: #ffffff;
                    font-size: 13px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    opacity: 0.4;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906841"] {
                        top: 351px;
                        left: calc(100% - 32% + -30px);
                        width: 31%;
                    }

                    #rec670348760 .tn-elem[data-elem-id="1664893906841"] .tn-atom {
                        font-size: 13px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906841"] {
                        top: 1733px;
                        left: calc(100% - 32% + 25px);
                        width: 92%;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670348760 .tn-elem[data-elem-id="1664893906841"] {
                        top: 1162px;
                        left: calc(100% - 32% + 0px);
                    }
                }

                #rec670348760 .tn-elem[data-elem-id="1705475448661"] {
                    z-index: 8;
                    top: 0px;
                    left: calc(100% - 32% + -30px);
                    width: 32%;
                    height: 465px;
                }

                #rec670348760 .tn-elem.t396__elem--anim-hidden[data-elem-id="1705475448661"] {
                    opacity: 0;
                }

                #rec670348760 .tn-elem[data-elem-id="1705475448661"] .tn-atom {
                    background-color: #383b45;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec670348760 .tn-elem[data-elem-id="1705475448661"] {
                        top: 0px;
                        left: calc(100% - 32% + -30px);
                        width: 31%;
                        height: 310px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec670348760 .tn-elem[data-elem-id="1705475448661"] {
                        top: 1201px;
                        left: calc(100% - 32% + 26px);
                        width: 92%;
                        height: 500px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670348760 .tn-elem[data-elem-id="1705475448661"] {
                        top: 830px;
                        left: calc(100% - 32% + 0px);
                        height: 300px;
                    }
                }

                #rec670348760 .tn-elem[data-elem-id="1705475856463"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 9;
                    top: 480px;
                    left: calc(50% - 16% + 0px);
                    width: 32%;
                }

                #rec670348760 .tn-elem[data-elem-id="1705475856463"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.44;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec670348760 .tn-elem[data-elem-id="1705475856463"] {
                        top: 325px;
                        left: calc(50% - 16% + 0px);
                        width: 32%;
                    }

                    #rec670348760 .tn-elem[data-elem-id="1705475856463"] .tn-atom {
                        font-size: 16px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec670348760 .tn-elem[data-elem-id="1705475856463"] {
                        top: 1102px;
                        left: calc(50% - 16% + 26px);
                        width: 92%;
                    }

                    #rec670348760 .tn-elem[data-elem-id="1705475856463"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670348760 .tn-elem[data-elem-id="1705475856463"] {
                        top: 717px;
                        left: calc(50% - 16% + 0px);
                    }
                }

                #rec670348760 .tn-elem[data-elem-id="1705475856477"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 10;
                    top: 506px;
                    left: calc(50% - 16% + 0px);
                    width: 32%;
                }

                #rec670348760 .tn-elem[data-elem-id="1705475856477"] .tn-atom {
                    color: #ffffff;
                    font-size: 13px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    opacity: 0.4;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec670348760 .tn-elem[data-elem-id="1705475856477"] {
                        top: 351px;
                        left: calc(50% - 16% + 0px);
                        width: 32%;
                    }

                    #rec670348760 .tn-elem[data-elem-id="1705475856477"] .tn-atom {
                        font-size: 13px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec670348760 .tn-elem[data-elem-id="1705475856477"] {
                        top: 1124px;
                        left: calc(50% - 16% + 26px);
                        width: 92%;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670348760 .tn-elem[data-elem-id="1705475856477"] {
                        top: 739px;
                        left: calc(50% - 16% + 0px);
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="670348760" data-artboard-screens="320,640,1200,1920"
                    data-artboard-height="581" data-artboard-valign="center" data-artboard-upscale="grid"
                    data-artboard-height-res-320="1253" data-artboard-height-res-640="1809"
                    data-artboard-height-res-1200="441">
                    <div class="t396__carrier" data-artboard-recid="670348760"></div>
                    <div class="t396__filter" data-artboard-recid="670348760"></div>
                    <div class='t396__elem tn-elem tn-elem__6703487601664893906817 ' data-elem-id='1664893906817'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="30"
                        data-field-height-value="465" data-field-width-value="32" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="%" data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':0.95,'sy':0.95,'op':1,'ro':0,'bl':'0','ea':'','dt':0}]"
                        data-field-top-res-320-value="0" data-field-left-res-320-value="0"
                        data-field-height-res-320-value="300" data-field-axisx-res-320-value="center"
                        data-field-left-res-640-value="26" data-field-height-res-640-value="500"
                        data-field-width-res-640-value="92" data-field-top-res-1200-value="0"
                        data-field-left-res-1200-value="30" data-field-height-res-1200-value="310"
                        data-field-width-res-1200-value="31"><a class='tn-atom t-bgimg js-click-zero-stat'
                            data-tilda-event-name="/tilda/click/rec670348760/button1664893906817"
                            data-original="images/card04.png"></a>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6703487601664893906823' data-elem-id='1664893906823'
                        data-elem-type='text' data-field-top-value="480" data-field-left-value="30"
                        data-field-width-value="32" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="310" data-field-left-res-320-value="0"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="510"
                        data-field-left-res-640-value="25" data-field-width-res-640-value="92"
                        data-field-top-res-1200-value="325" data-field-left-res-1200-value="30"
                        data-field-width-res-1200-value="31">
                        <div class='tn-atom'><a style="color: inherit">Learning Management System</a></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6703487601664893906827' data-elem-id='1664893906827'
                        data-elem-type='text' data-field-top-value="506" data-field-left-value="30"
                        data-field-width-value="32" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="332" data-field-left-res-320-value="0"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="532"
                        data-field-left-res-640-value="25" data-field-width-res-640-value="92"
                        data-field-top-res-1200-value="351" data-field-left-res-1200-value="30"
                        data-field-width-res-1200-value="31">
                        <!-- <div class='tn-atom' field='tn_text_1664893906827'>UX/UI design and development of a multi-page
                            website for a startup in Italy</div> -->
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6703487601664893906833 ' data-elem-id='1664893906833'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="0"
                        data-field-height-value="465" data-field-width-value="32" data-field-axisy-value="top"
                        data-field-axisx-value="center" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="%" data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':0.95,'sy':0.95,'op':1,'ro':0,'bl':'0','ea':'','dt':0}]"
                        data-field-top-res-320-value="407" data-field-left-res-320-value="0"
                        data-field-height-res-320-value="300" data-field-axisx-res-320-value="center"
                        data-field-top-res-640-value="592" data-field-left-res-640-value="26"
                        data-field-height-res-640-value="500" data-field-width-res-640-value="92"
                        data-field-axisx-res-640-value="left" data-field-top-res-1200-value="0"
                        data-field-left-res-1200-value="0" data-field-height-res-1200-value="310"
                        data-field-width-res-1200-value="32"><a class='tn-atom t-bgimg js-click-zero-stat'
                            data-tilda-event-name="/tilda/click/rec670348760/button1664893906833"
                            data-original="images/card05.jpg"></a>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6703487601664893906837' data-elem-id='1664893906837'
                        data-elem-type='text' data-field-top-value="480" data-field-left-value="-30"
                        data-field-width-value="32" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="1140" data-field-left-res-320-value="0"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="1711"
                        data-field-left-res-640-value="25" data-field-width-res-640-value="92"
                        data-field-axisx-res-640-value="left" data-field-top-res-1200-value="325"
                        data-field-left-res-1200-value="-30" data-field-width-res-1200-value="31">
                        <div class='tn-atom' field='tn_text_1664893906837'>Restaurant Management System</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6703487601664893906841' data-elem-id='1664893906841'
                        data-elem-type='text' data-field-top-value="506" data-field-left-value="-30"
                        data-field-width-value="32" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="1162" data-field-left-res-320-value="0"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="1733"
                        data-field-left-res-640-value="25" data-field-width-res-640-value="92"
                        data-field-axisx-res-640-value="left" data-field-top-res-1200-value="351"
                        data-field-left-res-1200-value="-30" data-field-width-res-1200-value="31">
                        <!-- <div class='tn-atom' field='tn_text_1664893906841'>Branding for a network of business
                            physiotherapists in Germany</div> -->
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6703487601705475448661 ' data-elem-id='1705475448661'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="-30"
                        data-field-height-value="465" data-field-width-value="32" data-field-axisy-value="top"
                        data-field-axisx-value="right" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="%" data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':0.95,'sy':0.95,'op':1,'ro':0,'bl':'0','ea':'','dt':0}]"
                        data-field-top-res-320-value="830" data-field-left-res-320-value="0"
                        data-field-height-res-320-value="300" data-field-axisx-res-320-value="center"
                        data-field-top-res-640-value="1201" data-field-left-res-640-value="26"
                        data-field-height-res-640-value="500" data-field-width-res-640-value="92"
                        data-field-axisx-res-640-value="left" data-field-top-res-1200-value="0"
                        data-field-left-res-1200-value="-30" data-field-height-res-1200-value="310"
                        data-field-width-res-1200-value="31">
                        <div class='tn-atom t-bgimg' data-original="images/card06.png"></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6703487601705475856463' data-elem-id='1705475856463'
                        data-elem-type='text' data-field-top-value="480" data-field-left-value="0"
                        data-field-width-value="32" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="717" data-field-left-res-320-value="0"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="1102"
                        data-field-left-res-640-value="26" data-field-width-res-640-value="92"
                        data-field-axisx-res-640-value="left" data-field-top-res-1200-value="325"
                        data-field-left-res-1200-value="0" data-field-width-res-1200-value="32">
                        <div class='tn-atom'><a style="color: inherit">point of sale</a></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6703487601705475856477' data-elem-id='1705475856477'
                        data-elem-type='text' data-field-top-value="506" data-field-left-value="0"
                        data-field-width-value="32" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="739" data-field-left-res-320-value="0"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="1124"
                        data-field-left-res-640-value="26" data-field-width-res-640-value="92"
                        data-field-axisx-res-640-value="left" data-field-top-res-1200-value="351"
                        data-field-left-res-1200-value="0" data-field-width-res-1200-value="32">
                        <!-- <div class='tn-atom' field='tn_text_1705475856477'>Visual identity, UX/UI design and no-code
                            development for&nbsp;branding company from Switzerland</div> -->
                    </div>
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t396_init', function () {
                        t396_init('670348760');
                    });
                });</script><!-- /T396 -->
        </div>
        <div id="rec692916921" class="r t-rec uc-up-block" style="background-color:#ffffff; " data-animationappear="off"
            data-record-type="396" data-bg-color="#ffffff"><!-- T396 -->
            <style>
                #rec692916921 .t396__artboard {
                    height: 720px;
                    background-color: #0b0b1c;
                }

                #rec692916921 .t396__filter {
                    height: 720px;
                }

                #rec692916921 .t396__carrier {
                    height: 720px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1919px) {

                    #rec692916921 .t396__artboard,
                    #rec692916921 .t396__filter,
                    #rec692916921 .t396__carrier {
                        height: 571px;
                    }

                    #rec692916921 .t396__filter {}

                    #rec692916921 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 1199px) {

                    #rec692916921 .t396__artboard,
                    #rec692916921 .t396__filter,
                    #rec692916921 .t396__carrier {
                        height: 1214px;
                    }

                    #rec692916921 .t396__filter {}

                    #rec692916921 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec692916921 .t396__artboard,
                    #rec692916921 .t396__filter,
                    #rec692916921 .t396__carrier {
                        height: 861px;
                    }

                    #rec692916921 .t396__filter {}

                    #rec692916921 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec692916921 .tn-elem[data-elem-id="1664893906817"] {
                    z-index: 2;
                    top: 0px;
                    left: 30px;
                    width: 48%;
                    height: 600px;
                }

                #rec692916921 .tn-elem.t396__elem--anim-hidden[data-elem-id="1664893906817"] {
                    opacity: 0;
                }

                #rec692916921 .tn-elem[data-elem-id="1664893906817"] .tn-atom {
                    background-color: #9ba3ab;
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906817"] {
                        top: 0px;
                        left: 30px;
                        width: 47%;
                        height: 450px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906817"] {
                        left: 26px;
                        width: 92%;
                        height: 500px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906817"] {
                        top: 0px;
                        left: 0px;
                        height: 300px;
                    }
                }

                #rec692916921 .tn-elem[data-elem-id="1664893906823"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 3;
                    top: 618px;
                    left: 30px;
                    width: 48%;
                }

                #rec692916921 .tn-elem[data-elem-id="1664893906823"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.44;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906823"] {
                        top: 468px;
                        left: 30px;
                        width: 47%;
                    }

                    #rec692916921 .tn-elem[data-elem-id="1664893906823"] .tn-atom {
                        font-size: 16px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906823"] {
                        top: 510px;
                        left: 25px;
                        width: 92%;
                    }

                    #rec692916921 .tn-elem[data-elem-id="1664893906823"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906823"] {
                        top: 310px;
                        left: 0px;
                    }
                }

                #rec692916921 .tn-elem[data-elem-id="1664893906827"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 4;
                    top: 644px;
                    left: 30px;
                    width: 48%;
                }

                #rec692916921 .tn-elem[data-elem-id="1664893906827"] .tn-atom {
                    color: #ffffff;
                    font-size: 13px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    opacity: 0.4;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906827"] {
                        top: 494px;
                        left: 30px;
                        width: 47%;
                    }

                    #rec692916921 .tn-elem[data-elem-id="1664893906827"] .tn-atom {
                        font-size: 13px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906827"] {
                        top: 532px;
                        left: 25px;
                        width: 92%;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906827"] {
                        top: 332px;
                        left: 0px;
                    }
                }

                #rec692916921 .tn-elem[data-elem-id="1664893906833"] {
                    z-index: 5;
                    top: 0px;
                    left: calc(100% - 48% + -30px);
                    width: 48%;
                    height: 600px;
                }

                #rec692916921 .tn-elem.t396__elem--anim-hidden[data-elem-id="1664893906833"] {
                    opacity: 0;
                }

                #rec692916921 .tn-elem[data-elem-id="1664893906833"] .tn-atom {
                    background-color: #383b45;
                    background-position: center top;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906833"] {
                        top: 0px;
                        left: calc(100% - 48% + -30px);
                        width: 47%;
                        height: 450px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906833"] {
                        top: 607px;
                        left: calc(100% - 48% + 26px);
                        width: 92%;
                        height: 500px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906833"] {
                        top: 439px;
                        left: calc(100% - 48% + 0px);
                        height: 300px;
                    }
                }

                #rec692916921 .tn-elem[data-elem-id="1664893906837"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 6;
                    top: 618px;
                    left: calc(100% - 48% + -30px);
                    width: 48%;
                }

                #rec692916921 .tn-elem[data-elem-id="1664893906837"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.44;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906837"] {
                        top: 468px;
                        left: calc(100% - 48% + -30px);
                        width: 47%;
                    }

                    #rec692916921 .tn-elem[data-elem-id="1664893906837"] .tn-atom {
                        font-size: 16px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906837"] {
                        top: 1117px;
                        left: calc(100% - 48% + 25px);
                        width: 92%;
                    }

                    #rec692916921 .tn-elem[data-elem-id="1664893906837"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906837"] {
                        top: 749px;
                        left: calc(100% - 48% + 0px);
                    }
                }

                #rec692916921 .tn-elem[data-elem-id="1664893906841"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 7;
                    top: 644px;
                    left: calc(100% - 48% + -30px);
                    width: 48%;
                }

                #rec692916921 .tn-elem[data-elem-id="1664893906841"] .tn-atom {
                    color: #ffffff;
                    font-size: 13px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    opacity: 0.4;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906841"] {
                        top: 494px;
                        left: calc(100% - 48% + -30px);
                        width: 47%;
                    }

                    #rec692916921 .tn-elem[data-elem-id="1664893906841"] .tn-atom {
                        font-size: 13px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906841"] {
                        top: 1139px;
                        left: calc(100% - 48% + 25px);
                        width: 92%;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692916921 .tn-elem[data-elem-id="1664893906841"] {
                        top: 771px;
                        left: calc(100% - 48% + 0px);
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="692916921" data-artboard-screens="320,640,1200,1920"
                    data-artboard-height="720" data-artboard-valign="center" data-artboard-upscale="grid"
                    data-artboard-height-res-320="861" data-artboard-height-res-640="1214"
                    data-artboard-height-res-1200="571">
                    <div class="t396__carrier" data-artboard-recid="692916921"></div>
                    <div class="t396__filter" data-artboard-recid="692916921"></div>
                    <div class='t396__elem tn-elem tn-elem__6929169211664893906817 ' data-elem-id='1664893906817'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="30"
                        data-field-height-value="600" data-field-width-value="48" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="%" data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':0.95,'sy':0.95,'op':1,'ro':0,'bl':'0','ea':'','dt':0}]"
                        data-field-top-res-320-value="0" data-field-left-res-320-value="0"
                        data-field-height-res-320-value="300" data-field-axisx-res-320-value="center"
                        data-field-left-res-640-value="26" data-field-height-res-640-value="500"
                        data-field-width-res-640-value="92" data-field-top-res-1200-value="0"
                        data-field-left-res-1200-value="30" data-field-height-res-1200-value="450"
                        data-field-width-res-1200-value="47">
                        <!-- <video class='tn-atom t-bgimg' height="100%"  autoplay controls src="video/vid01.mp4"></video> -->
                        <a class='tn-atom t-bgimg' data-original="images/card07.png"></a>
                    </div>

                    <div class='t396__elem tn-elem tn-elem__6929169211664893906823' data-elem-id='1664893906823'
                        data-elem-type='text' data-field-top-value="618" data-field-left-value="30"
                        data-field-width-value="48" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="310" data-field-left-res-320-value="0"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="510"
                        data-field-left-res-640-value="25" data-field-width-res-640-value="92"
                        data-field-top-res-1200-value="468" data-field-left-res-1200-value="30"
                        data-field-width-res-1200-value="47">
                        <div class='tn-atom'><a style="color: inherit">Building Ecommerce Stores</a></div>
                    </div>
                    <!-- <div class='t396__elem tn-elem tn-elem__6929169211664893906827' data-elem-id='1664893906827'
                        data-elem-type='text' data-field-top-value="644" data-field-left-value="30"
                        data-field-width-value="48" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="332" data-field-left-res-320-value="0"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="532"
                        data-field-left-res-640-value="25" data-field-width-res-640-value="92"
                        data-field-top-res-1200-value="494" data-field-left-res-1200-value="30"
                        data-field-width-res-1200-value="47">
                        <div class='tn-atom' field='tn_text_1664893906827'>Visual identity, UX/UI design and development
                            for the law firm in&nbsp;the field of&nbsp;antimonopoly regulation in&nbsp;Kazakhstan
                            markets</div>
                    </div> -->
                    <div class='t396__elem tn-elem tn-elem__6929169211664893906833 ' data-elem-id='1664893906833'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="-30"
                        data-field-height-value="600" data-field-width-value="48" data-field-axisy-value="top"
                        data-field-axisx-value="right" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="%" data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':0.95,'sy':0.95,'op':1,'ro':0,'bl':'0','ea':'','dt':0}]"
                        data-field-top-res-320-value="439" data-field-left-res-320-value="0"
                        data-field-height-res-320-value="300" data-field-axisx-res-320-value="center"
                        data-field-top-res-640-value="607" data-field-left-res-640-value="26"
                        data-field-height-res-640-value="500" data-field-width-res-640-value="92"
                        data-field-axisx-res-640-value="left" data-field-top-res-1200-value="0"
                        data-field-left-res-1200-value="-30" data-field-height-res-1200-value="450"
                        data-field-width-res-1200-value="47"><a class='tn-atom t-bgimg'
                            data-original="images/card08.jpg"></a>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6929169211664893906837' data-elem-id='1664893906837'
                        data-elem-type='text' data-field-top-value="618" data-field-left-value="-30"
                        data-field-width-value="48" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="749" data-field-left-res-320-value="0"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="1117"
                        data-field-left-res-640-value="25" data-field-width-res-640-value="92"
                        data-field-axisx-res-640-value="left" data-field-top-res-1200-value="468"
                        data-field-left-res-1200-value="-30" data-field-width-res-1200-value="47">
                        <div class='tn-atom'><a style="color: inherit">Stunning Mobile Applications</a></div>
                    </div>
                    <!-- <div class='t396__elem tn-elem tn-elem__6929169211664893906841' data-elem-id='1664893906841'
                        data-elem-type='text' data-field-top-value="644" data-field-left-value="-30"
                        data-field-width-value="48" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="771" data-field-left-res-320-value="0"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="1139"
                        data-field-left-res-640-value="25" data-field-width-res-640-value="92"
                        data-field-axisx-res-640-value="left" data-field-top-res-1200-value="494"
                        data-field-left-res-1200-value="-30" data-field-width-res-1200-value="47">
                        <div class='tn-atom' field='tn_text_1664893906841'>Visual identity, UX/UI design and development
                            for the oil trading company from Switzerland</div>
                    </div> -->
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t396_init', function () {
                        t396_init('692916921');
                    });
                });</script><!-- /T396 -->
        </div>
        <div id="rec670836686" class="r t-rec t-rec_pt_0 uc-up-block" style="padding-top:0px;background-color:#ffffff; "
            data-animationappear="off" data-record-type="396" data-bg-color="#ffffff"><!-- T396 -->
            <style>
                #rec670836686 .t396__artboard {
                    height: 127px;
                    background-color: #0b0b1c;
                }

                #rec670836686 .t396__filter {
                    height: 127px;
                }

                #rec670836686 .t396__carrier {
                    height: 127px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {

                    #rec670836686 .t396__artboard,
                    #rec670836686 .t396__filter,
                    #rec670836686 .t396__carrier {}

                    #rec670836686 .t396__filter {}

                    #rec670836686 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 959px) {

                    #rec670836686 .t396__artboard,
                    #rec670836686 .t396__filter,
                    #rec670836686 .t396__carrier {
                        height: 124px;
                    }

                    #rec670836686 .t396__filter {}

                    #rec670836686 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec670836686 .t396__artboard,
                    #rec670836686 .t396__filter,
                    #rec670836686 .t396__carrier {}

                    #rec670836686 .t396__filter {}

                    #rec670836686 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 479px) {

                    #rec670836686 .t396__artboard,
                    #rec670836686 .t396__filter,
                    #rec670836686 .t396__carrier {
                        height: 77px;
                    }

                    #rec670836686 .t396__filter {}

                    #rec670836686 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec670836686 .tn-elem[data-elem-id="1664893906830"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 2;
                    top: 17px;
                    left: calc(50% - 83px + 0px);
                    width: 166px;
                }

                @media (min-width: 1200px) {
                    #rec670836686 .tn-elem.t396__elem--anim-hidden[data-elem-id="1664893906830"] {
                        opacity: 0;
                    }
                }

                #rec670836686 .tn-elem[data-elem-id="1664893906830"] .tn-atom {
                    color: #ffffff;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.43;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec670836686 .tn-elem[data-elem-id="1664893906830"] {
                        top: 17px;
                        left: calc(50% - 83px + 0px);
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec670836686 .tn-elem[data-elem-id="1664893906830"] {
                        top: 17px;
                        left: calc(50% - 83px + 0px);
                    }

                    #rec670836686 .tn-elem[data-elem-id="1664893906830"] .tn-atom {
                        font-size: 12px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670836686 .tn-elem[data-elem-id="1664893906830"] {
                        top: 17px;
                        left: calc(50% - 83px + 0px);
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec670836686 .tn-elem[data-elem-id="1664893906830"] {
                        top: 0px;
                        left: calc(50% - 83px + 0px);
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="670836686" data-artboard-screens="320,480,640,960,1200"
                    data-artboard-height="127" data-artboard-valign="center" data-artboard-upscale="grid"
                    data-artboard-height-res-320="77" data-artboard-height-res-640="124">
                    <div class="t396__carrier" data-artboard-recid="670836686"></div>
                    <div class="t396__filter" data-artboard-recid="670836686"></div>
                    <div class='t396__elem tn-elem tn-elem__6708366861664893906830 ' data-elem-id='1664893906830'
                        data-elem-type='text' data-field-top-value="17" data-field-left-value="0"
                        data-field-width-value="166" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="hover"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'ti':0,'ea':'0','dt':0},{'mx':0,'my':0,'sx':1,'sy':1,'op':0.7,'ro':0,'ti':300,'ea':'0','dt':0}]"
                        data-field-top-res-320-value="0" data-field-left-res-320-value="0"
                        data-field-top-res-480-value="17" data-field-left-res-480-value="0"
                        data-field-top-res-640-value="17" data-field-left-res-640-value="0"
                        data-field-top-res-960-value="17" data-field-left-res-960-value="0">
                        <!-- <div class='tn-atom'><a href="projects.html" style="color: inherit"><u>view all projects</u></a>
                        </div> -->
                    </div>
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t396_init', function () {
                        t396_init('670836686');
                    });
                });</script><!-- /T396 -->
        </div>
        <div id="rec671175734" class="r t-rec" style=" " data-record-type="215"><a name="services"
                style="font-size:0;"></a></div>
        <div id="rec729201590" class="r t-rec" style=" " data-animationappear="off" data-record-type="396"><!-- T396 -->
            <style>
                #rec729201590 .t396__artboard {
                    height: 125px;
                    background-color: #ffffff;
                }

                #rec729201590 .t396__filter {
                    height: 125px;
                }

                #rec729201590 .t396__carrier {
                    height: 125px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1919px) {

                    #rec729201590 .t396__artboard,
                    #rec729201590 .t396__filter,
                    #rec729201590 .t396__carrier {
                        height: 125px;
                    }

                    #rec729201590 .t396__filter {}

                    #rec729201590 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 1199px) {

                    #rec729201590 .t396__artboard,
                    #rec729201590 .t396__filter,
                    #rec729201590 .t396__carrier {}

                    #rec729201590 .t396__filter {}

                    #rec729201590 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec729201590 .t396__artboard,
                    #rec729201590 .t396__filter,
                    #rec729201590 .t396__carrier {}

                    #rec729201590 .t396__filter {}

                    #rec729201590 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec729201590 .tn-elem[data-elem-id="1712132285626"] {
                    color: #2a559d;
                    text-align: CENTER;
                    z-index: 2;
                    top: 90px;
                    left: calc(50% - 41.5px + 1px);
                    width: 83px;
                }

                #rec729201590 .tn-elem[data-elem-id="1712132285626"] .tn-atom {
                    color: #2a559d;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.43;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 639px) {
                    #rec729201590 .tn-elem[data-elem-id="1712132285626"] {
                        top: 60px;
                    }
                }

                #rec729201590 .tn-elem[data-elem-id="1712132285632"] {
                    z-index: 3;
                    top: -50px;
                    left: calc(100% - 1200px + -1700px);
                    width: 1200px;
                    height: 900px;
                }

                #rec729201590 .tn-elem[data-elem-id="1712132285632"] .tn-atom {
                    background-position: right bottom;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec729201590 .tn-elem[data-elem-id="1712132285632"] {
                        left: calc(100% - 1200px + -1100px);
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec729201590 .tn-elem[data-elem-id="1712132285632"] {
                        left: calc(100% - 1200px + -500px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec729201590 .tn-elem[data-elem-id="1712132285632"] {
                        top: -53px;
                        left: calc(100% - 1200px + -300px);
                    }

                    #rec729201590 .tn-elem[data-elem-id="1712132285632"] .tn-atom {
                        opacity: 0.6;
                    }
                }

                #rec729201590 .tn-elem[data-elem-id="1712132285637"] {
                    z-index: 4;
                    top: 50px;
                    left: calc(100% - 6px + -1698px);
                    width: 6px;
                    height: 6px;
                }

                @media (min-width: 1200px) {
                    #rec729201590 .tn-elem.t396__elem--anim-hidden[data-elem-id="1712132285637"] {
                        opacity: 0;
                    }
                }

                #rec729201590 .tn-elem[data-elem-id="1712132285637"] .tn-atom {
                    border-radius: 3000px;
                    background-color: #000000;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec729201590 .tn-elem[data-elem-id="1712132285637"] {
                        left: calc(100% - 6px + -1098px);
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec729201590 .tn-elem[data-elem-id="1712132285637"] {
                        left: calc(100% - 6px + -498px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec729201590 .tn-elem[data-elem-id="1712132285637"] {
                        top: 69px;
                        left: calc(100% - 6px + -298px);
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="729201590" data-artboard-screens="320,640,1200,1920"
                    data-artboard-height="125" data-artboard-valign="center" data-artboard-upscale="grid"
                    data-artboard-height-res-1200="125">
                    <div class="t396__carrier" data-artboard-recid="729201590"></div>
                    <div class="t396__filter" data-artboard-recid="729201590"></div>
                    <div class='t396__elem tn-elem tn-elem__7292015901712132285626' data-elem-id='1712132285626'
                        data-elem-type='text' data-field-top-value="90" data-field-left-value="1"
                        data-field-width-value="83" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="60">
                        <div class='tn-atom' field='tn_text_1712132285626'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7292015901712132285632' data-elem-id='1712132285632'
                        data-elem-type='shape' data-field-top-value="-50" data-field-left-value="-1700"
                        data-field-height-value="900" data-field-width-value="1200" data-field-axisy-value="top"
                        data-field-axisx-value="right" data-field-container-value="window" data-field-topunits-value="%"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="-53"
                        data-field-left-res-320-value="-300" data-field-left-res-640-value="-500"
                        data-field-left-res-1200-value="-1100">
                        <div class='tn-atom t-bgimg'
                            data-original="https://static.tildacdn.net/tild6631-3032-4662-a235-353034643837/2.svg">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__7292015901712132285637 ' data-elem-id='1712132285637'
                        data-elem-type='shape' data-field-top-value="50" data-field-left-value="-1698"
                        data-field-height-value="6" data-field-width-value="6" data-field-axisy-value="top"
                        data-field-axisx-value="right" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-sbs-event="intoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':0,'my':60,'sx':1,'sy':1,'op':1,'ro':0,'ti':2000,'ea':'easeOut','dt':0},{'mx':0,'my':-30,'sx':1,'sy':1,'op':1,'ro':0,'ti':1000,'ea':'easeIn','dt':0},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'ti':1000,'ea':'easeIn','dt':0}]"
                        data-field-top-res-320-value="69" data-field-left-res-320-value="-298"
                        data-field-left-res-640-value="-498" data-field-left-res-1200-value="-1098">
                        <div class='tn-atom'></div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t396_init', function () {
                        t396_init('729201590');
                    });
                });</script><!-- /T396 -->
        </div>
        <!-- <div id="rec729196291" class="r t-rec t-rec_pt_0 t-rec_pb_90 t-screenmin-1200px uc-serv"
            style="padding-top:0px;padding-bottom:90px;background-color:#ffffff; " data-animationappear="off"
            data-record-type="786" data-screen-min="1200px" data-bg-color="#ffffff">
            <div class="t786" data-show-count="">
                <div class="t786__container t786__container_indent t786__container_clgap-20px t786__container_mobile-grid"
                    data-buttons-v-align="yes" data-blocks-per-row=4>
                    <div class="t786__col t786__col_25 t-align_left t-item t786__col_mobile-grid js-product t-animate"
                        data-animate-style="fadeinup" data-animate-chain="yes" data-product-lid="4136307488580"><a
                            class="js-product-link" href="#popup:service1">
                            <div class="t786__content">
                                <div class="t786__imgwrapper t786__imgwrapper_3-4 t1002__picture-wrapper ">
                                    <div class="t786__bgimg t786__bgimg_first_hover t-bgimg js-product-img"
                                        data-original="https://static.tildacdn.net/tild6566-3933-4933-a139-626364316338/6_1.jpg"
                                        style="background-image:url('./thb.tildacdn.net/tild6566-3933-4933-a139-626364316338/-/resizeb/20x/6_1.jpg');"
                                        bgimgfield="li_gallery__4136307488580:::0"></div>
                                    <div class="t786__bgimg t786__bgimg_second t-bgimg"
                                        data-original="https://static.tildacdn.net/tild6538-6566-4465-a336-333535383537/7_1.jpg"
                                        style="background-image:url('./thb.tildacdn.net/tild6538-6566-4465-a336-333535383537/-/resizeb/20x/7_1.jpg');">
                                    </div>
                                </div>
                                <div class="t786__textwrapper">
                                    <div class="t786__title t-name t-name_xs js-product-name"
                                        field="li_title__4136307488580">Branding and identity </div>
                                    <div class="t786__descr t-descr t-descr_xxs" field="li_descr__4136307488580">//
                                        Naming // Brand strategy // Visual identity design // Logo // Corporate identity
                                        materials</div>
                                </div>
                            </div>
                        </a>
                        <div class="t786__buttons t1002__btns-wrapper "><a href="#popup:service1"
                                class="t786__btn t-btn t-btn_xs"
                                style="color:#ffffff;background-color:#000000;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;font-family:Rooftop;font-weight:400;text-transform:uppercase;">
                                <table role="presentation" style="width:100%; height:100%;">
                                    <tr>
                                        <td>DOWNLOAD PROPOSAL</td>
                                    </tr>
                                </table>
                            </a></div>
                    </div>
                    <div class="t786__col t786__col_25 t-align_left t-item t786__col_mobile-grid js-product t-animate"
                        data-animate-style="fadeinup" data-animate-chain="yes" data-product-lid="4136307488582"><a
                            class="js-product-link" href="#popup:service2">
                            <div class="t786__content">
                                <div class="t786__imgwrapper t786__imgwrapper_3-4 t1002__picture-wrapper ">
                                    <div class="t786__bgimg t-bgimg js-product-img"
                                        data-original="https://static.tildacdn.net/tild3462-6639-4761-b837-643336643833/2_1.jpg"
                                        style="background-image:url('./thb.tildacdn.net/tild3462-6639-4761-b837-643336643833/-/resizeb/20x/2_1.jpg');"
                                        bgimgfield="li_gallery__4136307488582:::0"></div>
                                </div>
                                <div class="t786__textwrapper">
                                    <div class="t786__title t-name t-name_xs js-product-name"
                                        field="li_title__4136307488582">UX / UI design</div>
                                    <div class="t786__descr t-descr t-descr_xxs" field="li_descr__4136307488582">//
                                        Sitemap // Copywriting // Wireframes // Website design // Responsive &amp;
                                        mobile // Figma styleguide</div>
                                </div>
                            </div>
                        </a>
                        <div class="t786__buttons t1002__btns-wrapper "><a href="#popup:service2"
                                class="t786__btn t-btn t-btn_xs"
                                style="color:#ffffff;background-color:#000000;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;font-family:Rooftop;font-weight:400;text-transform:uppercase;">
                                <table role="presentation" style="width:100%; height:100%;">
                                    <tr>
                                        <td>DOWNLOAD PROPOSAL</td>
                                    </tr>
                                </table>
                            </a></div>
                    </div>
                    <div class="t786__col t786__col_25 t-align_left t-item t786__col_mobile-grid js-product t-animate"
                        data-animate-style="fadeinup" data-animate-chain="yes" data-product-lid="4136307488581">
                        <div class="t786__content">
                            <div class="t786__imgwrapper t786__imgwrapper_3-4 t1002__picture-wrapper ">
                                <div class="t786__bgimg t-bgimg js-product-img"
                                    data-original="https://static.tildacdn.net/tild3966-3961-4839-a263-313132633662/Rectangle_703.jpg"
                                    style="background-image:url('./thb.tildacdn.net/tild3966-3961-4839-a263-313132633662/-/resizeb/20x/Rectangle_703.jpg');"
                                    bgimgfield="li_gallery__4136307488581:::0"></div>
                            </div>
                            <div class="t786__textwrapper">
                                <div class="t786__title t-name t-name_xs js-product-name"
                                    field="li_title__4136307488581"><span
                                        style="color: rgb(255, 255, 255);">//...</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="t786__col t786__col_25 t-align_left t-item t786__col_mobile-grid js-product t-animate"
                        data-animate-style="fadeinup" data-animate-chain="yes" data-product-lid="1712124333328"><a
                            class="js-product-link" href="#popup:service4">
                            <div class="t786__content">
                                <div class="t786__imgwrapper t786__imgwrapper_3-4 t1002__picture-wrapper ">
                                    <div class="t786__bgimg t-bgimg js-product-img"
                                        data-original="https://static.tildacdn.net/tild6639-6434-4733-b664-663061386536/3_1.jpg"
                                        style="background-image:url('./thb.tildacdn.net/tild6639-6434-4733-b664-663061386536/-/resizeb/20x/3_1.jpg');"
                                        bgimgfield="li_gallery__1712124333328:::0"></div>
                                </div>
                                <div class="t786__textwrapper">
                                    <div class="t786__title t-name t-name_xs js-product-name"
                                        field="li_title__1712124333328">Design Support</div>
                                    <div class="t786__descr t-descr t-descr_xxs" field="li_descr__1712124333328">Can
                                        work together with your team or instead, help with large volumes of tasks in
                                        short deadlines.</div>
                                </div>
                            </div>
                        </a>
                        <div class="t786__buttons t1002__btns-wrapper "><a href="#popup:service4"
                                class="t786__btn t-btn t-btn_xs"
                                style="color:#ffffff;background-color:#000000;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;font-family:Rooftop;font-weight:400;text-transform:uppercase;">
                                <table role="presentation" style="width:100%; height:100%;">
                                    <tr>
                                        <td>DOWNLOAD PROPOSAL</td>
                                    </tr>
                                </table>
                            </a></div>
                    </div>
                    <div class="t-clear t786__separator t786__separator_number" data-product-separator-number="5"
                        style="margin-bottom:60px;"></div>
                    <div class="t786__col t786__col_25 t-align_left t-item t786__col_mobile-grid js-product t-animate"
                        data-animate-style="fadeinup" data-animate-chain="yes" data-product-lid="1712126761238">
                        <div class="t786__content">
                            <div class="t786__imgwrapper t786__imgwrapper_3-4 t1002__picture-wrapper ">
                                <div class="t786__bgimg t-bgimg js-product-img"
                                    data-original="https://static.tildacdn.net/tild3966-3961-4839-a263-313132633662/Rectangle_703.jpg"
                                    style="background-image:url('./thb.tildacdn.net/tild3966-3961-4839-a263-313132633662/-/resizeb/20x/Rectangle_703.jpg');"
                                    bgimgfield="li_gallery__1712126761238:::0"></div>
                            </div>
                            <div class="t786__textwrapper">
                                <div class="t786__title t-name t-name_xs js-product-name"
                                    field="li_title__1712126761238"><span
                                        style="color: rgb(255, 255, 255);">//...</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="t786__col t786__col_25 t-align_left t-item t786__col_mobile-grid js-product t-animate"
                        data-animate-style="fadeinup" data-animate-chain="yes" data-product-lid="1712933684139">
                        <div class="t786__content">
                            <div class="t786__imgwrapper t786__imgwrapper_3-4 t1002__picture-wrapper ">
                                <div class="t786__bgimg t-bgimg js-product-img"
                                    data-original="https://static.tildacdn.net/tild3966-3961-4839-a263-313132633662/Rectangle_703.jpg"
                                    style="background-image:url('./thb.tildacdn.net/tild3966-3961-4839-a263-313132633662/-/resizeb/20x/Rectangle_703.jpg');"
                                    bgimgfield="li_gallery__1712933684139:::0"></div>
                            </div>
                            <div class="t786__textwrapper">
                                <div class="t786__title t-name t-name_xs js-product-name"
                                    field="li_title__1712933684139"><span
                                        style="color: rgb(255, 255, 255);">//...</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="t786__col t786__col_25 t-align_left t-item t786__col_mobile-grid js-product t-animate"
                        data-animate-style="fadeinup" data-animate-chain="yes" data-product-lid="1712126767757"><a
                            class="js-product-link" href="#popup:service3">
                            <div class="t786__content">
                                <div class="t786__imgwrapper t786__imgwrapper_3-4 t1002__picture-wrapper ">
                                    <div class="t786__bgimg t-bgimg js-product-img"
                                        data-original="https://static.tildacdn.net/tild3436-3266-4330-b866-386333323236/5.jpg"
                                        style="background-image:url('./thb.tildacdn.net/tild3436-3266-4330-b866-386333323236/-/resizeb/20x/5.jpg');"
                                        bgimgfield="li_gallery__1712126767757:::0"></div>
                                </div>
                                <div class="t786__textwrapper">
                                    <div class="t786__title t-name t-name_xs js-product-name"
                                        field="li_title__1712126767757">No-code development</div>
                                    <div class="t786__descr t-descr t-descr_xxs" field="li_descr__1712126767757">//
                                        Webflow // Tilda // Shopify // Wordpress // Frontend and backend</div>
                                </div>
                            </div>
                        </a>
                        <div class="t786__buttons t1002__btns-wrapper "><a href="#popup:service3"
                                class="t786__btn t-btn t-btn_xs"
                                style="color:#ffffff;background-color:#000000;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;font-family:Rooftop;font-weight:400;text-transform:uppercase;">
                                <table role="presentation" style="width:100%; height:100%;">
                                    <tr>
                                        <td>DOWNLOAD PROPOSAL</td>
                                    </tr>
                                </table>
                            </a></div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t786__showMore', function () {
                        t786__showMore('729196291');
                    });
                    t_onFuncLoad('t786__init', function () {
                        t786__init('729196291');
                    });
                });</script>
            <style>
                #rec729196291 .t-slds__bullet_active .t-slds__bullet_body {
                    background-color: #222 !important;
                }

                #rec729196291 .t-slds__bullet:hover .t-slds__bullet_body {
                    background-color: #222 !important;
                }
            </style>
            <style>
                @media (hover: hover),
                (min-width: 0\0) {
                    #rec729196291 .t-btn:not(.t-animate_no-hover):hover {
                        background-color: #464646 !important;
                    }

                    #rec729196291 .t-btn:not(.t-animate_no-hover):focus-visible {
                        background-color: #464646 !important;
                    }

                    #rec729196291 .t-btn:not(.t-animate_no-hover) {
                        transition-property: background-color, color, border-color, box-shadow;
                        transition-duration: 0.2s;
                        transition-timing-function: ease-in-out;
                    }
                }
            </style>
            <style>
                #rec729196291 .t786__content .t786__title {
                    font-size: 16px;
                    padding-top: 18px;
                    padding-bottom: 3px;
                    color: #000000;
                    font-weight: 400;
                    font-family: 'Rooftop';
                    text-transform: uppercase;
                }

                #rec729196291 .t786__price {
                    font-weight: 400;
                }

                #rec729196291 .t786__price_old {
                    font-weight: 400;
                }
            </style>
            <style>
                #rec729196291 .t786__textwrapper .t786__descr {
                    font-size: 13px;
                    line-height: 1.25;
                    color: #8a8a8a;
                    font-weight: 400;
                    padding-top: 0px;
                    padding-bottom: 0px;
                    font-family: 'Rooftop';
                }
            </style>
            <style>
                #rec729196291 .t-popup .t786__title {
                    color: #000000;
                    font-weight: 400;
                    font-family: 'Rooftop';
                    text-transform: uppercase;
                }

                #rec729196291 .t-popup .t786__descr {
                    line-height: 1.25;
                    color: #8a8a8a;
                    font-weight: 400;
                    font-family: 'Rooftop';
                }
            </style>
        </div> -->
        <!-- <div id="rec729196292" class="r t-rec t-rec_pt_0 t-rec_pb_90 t-screenmax-1200px"
            style="padding-top:0px;padding-bottom:90px;background-color:#ffffff; " data-animationappear="off"
            data-record-type="786" data-screen-max="1200px" data-bg-color="#ffffff">
            <div class="t786" data-show-count="">
                <div class="t786__container t786__container_indent t786__container_clgap-20px t786__container_mobile-grid"
                    data-buttons-v-align="yes" data-blocks-per-row=4>
                    <div class="t786__col t786__col_25 t-align_left t-item t786__col_mobile-grid js-product"
                        data-product-lid="2797291298900"><a class="js-product-link" href="#popup:service1">
                            <div class="t786__content">
                                <div class="t786__imgwrapper t786__imgwrapper_3-4 t1002__picture-wrapper ">
                                    <div class="t786__bgimg t-bgimg js-product-img"
                                        data-original="https://static.tildacdn.net/tild3932-3635-4933-a530-383030323537/6_1.jpg"
                                        style="background-image:url('./thb.tildacdn.net/tild3932-3635-4933-a530-383030323537/-/resizeb/20x/6_1.jpg');"
                                        bgimgfield="li_gallery__2797291298900:::0"></div>
                                </div>
                                <div class="t786__textwrapper">
                                    <div class="t786__title t-name t-name_xs js-product-name"
                                        field="li_title__2797291298900">Branding and identity </div>
                                    <div class="t786__descr t-descr t-descr_xxs" field="li_descr__2797291298900">//
                                        Naming // Brand strategy // Visual identity design // Logo // Corporate identity
                                        materials</div>
                                </div>
                            </div>
                        </a>
                        <div class="t786__buttons t1002__btns-wrapper "><a href="#popup:service1"
                                class="t786__btn t-btn t-btn_xs"
                                style="color:#ffffff;background-color:#000000;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;font-family:Rooftop;font-weight:400;text-transform:uppercase;">
                                <table role="presentation" style="width:100%; height:100%;">
                                    <tr>
                                        <td>DOWNLOAD PROPOSAL</td>
                                    </tr>
                                </table>
                            </a></div>
                    </div>
                    <div class="t786__col t786__col_25 t-align_left t-item t786__col_mobile-grid js-product"
                        data-product-lid="2797291298902"><a class="js-product-link" href="#popup:service2">
                            <div class="t786__content">
                                <div class="t786__imgwrapper t786__imgwrapper_3-4 t1002__picture-wrapper ">
                                    <div class="t786__bgimg t-bgimg js-product-img"
                                        data-original="https://static.tildacdn.net/tild3462-6639-4761-b837-643336643833/2_1.jpg"
                                        style="background-image:url('./thb.tildacdn.net/tild3462-6639-4761-b837-643336643833/-/resizeb/20x/2_1.jpg');"
                                        bgimgfield="li_gallery__2797291298902:::0"></div>
                                </div>
                                <div class="t786__textwrapper">
                                    <div class="t786__title t-name t-name_xs js-product-name"
                                        field="li_title__2797291298902">UX / UI design</div>
                                    <div class="t786__descr t-descr t-descr_xxs" field="li_descr__2797291298902">//
                                        Sitemap // Copywriting // Wireframes // Website design // Responsive &amp;
                                        mobile // Figma styleguide</div>
                                </div>
                            </div>
                        </a>
                        <div class="t786__buttons t1002__btns-wrapper "><a href="#popup:service2"
                                class="t786__btn t-btn t-btn_xs"
                                style="color:#ffffff;background-color:#000000;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;font-family:Rooftop;font-weight:400;text-transform:uppercase;">
                                <table role="presentation" style="width:100%; height:100%;">
                                    <tr>
                                        <td>DOWNLOAD PROPOSAL</td>
                                    </tr>
                                </table>
                            </a></div>
                    </div>
                    <div class="t786__col t786__col_25 t-align_left t-item t786__col_mobile-grid js-product"
                        data-product-lid="2797291298905"><a class="js-product-link" href="#popup:service3">
                            <div class="t786__content">
                                <div class="t786__imgwrapper t786__imgwrapper_3-4 t1002__picture-wrapper ">
                                    <div class="t786__bgimg t-bgimg js-product-img"
                                        data-original="https://static.tildacdn.net/tild3135-3632-4439-a231-666134633035/5.jpg"
                                        style="background-image:url('./thb.tildacdn.net/tild3135-3632-4439-a231-666134633035/-/resizeb/20x/5.jpg');"
                                        bgimgfield="li_gallery__2797291298905:::0"></div>
                                </div>
                                <div class="t786__textwrapper">
                                    <div class="t786__title t-name t-name_xs js-product-name"
                                        field="li_title__2797291298905">No-code development</div>
                                    <div class="t786__descr t-descr t-descr_xxs" field="li_descr__2797291298905">//
                                        Webflow // Tilda // Shopify // Wordpress // Frontend and backend</div>
                                </div>
                            </div>
                        </a>
                        <div class="t786__buttons t1002__btns-wrapper "><a href="#popup:service3"
                                class="t786__btn t-btn t-btn_xs"
                                style="color:#ffffff;background-color:#000000;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;font-family:Rooftop;font-weight:400;text-transform:uppercase;">
                                <table role="presentation" style="width:100%; height:100%;">
                                    <tr>
                                        <td>DOWNLOAD PROPOSAL</td>
                                    </tr>
                                </table>
                            </a></div>
                    </div>
                    <div class="t786__col t786__col_25 t-align_left t-item t786__col_mobile-grid js-product"
                        data-product-lid="2797291298903"><a class="js-product-link" href="#popup:service4">
                            <div class="t786__content">
                                <div class="t786__imgwrapper t786__imgwrapper_3-4 t1002__picture-wrapper ">
                                    <div class="t786__bgimg t-bgimg js-product-img"
                                        data-original="https://static.tildacdn.net/tild6639-6434-4733-b664-663061386536/3_1.jpg"
                                        style="background-image:url('./thb.tildacdn.net/tild6639-6434-4733-b664-663061386536/-/resizeb/20x/3_1.jpg');"
                                        bgimgfield="li_gallery__2797291298903:::0"></div>
                                </div>
                                <div class="t786__textwrapper">
                                    <div class="t786__title t-name t-name_xs js-product-name"
                                        field="li_title__2797291298903">Design Support</div>
                                    <div class="t786__descr t-descr t-descr_xxs" field="li_descr__2797291298903">Can
                                        work together with your team or instead, help with large volumes of tasks in
                                        short deadlines.</div>
                                </div>
                            </div>
                        </a>
                        <div class="t786__buttons t1002__btns-wrapper "><a href="#popup:service4"
                                class="t786__btn t-btn t-btn_xs"
                                style="color:#ffffff;background-color:#000000;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;font-family:Rooftop;font-weight:400;text-transform:uppercase;">
                                <table role="presentation" style="width:100%; height:100%;">
                                    <tr>
                                        <td>DOWNLOAD PROPOSAL</td>
                                    </tr>
                                </table>
                            </a></div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t786__showMore', function () {
                        t786__showMore('729196292');
                    });
                    t_onFuncLoad('t786__init', function () {
                        t786__init('729196292');
                    });
                });</script>
            <style>
                #rec729196292 .t-slds__bullet_active .t-slds__bullet_body {
                    background-color: #222 !important;
                }

                #rec729196292 .t-slds__bullet:hover .t-slds__bullet_body {
                    background-color: #222 !important;
                }
            </style>
            <style>
                @media (hover: hover),
                (min-width: 0\0) {
                    #rec729196292 .t-btn:not(.t-animate_no-hover):hover {
                        background-color: #464646 !important;
                    }

                    #rec729196292 .t-btn:not(.t-animate_no-hover):focus-visible {
                        background-color: #464646 !important;
                    }

                    #rec729196292 .t-btn:not(.t-animate_no-hover) {
                        transition-property: background-color, color, border-color, box-shadow;
                        transition-duration: 0.2s;
                        transition-timing-function: ease-in-out;
                    }
                }
            </style>
            <style>
                #rec729196292 .t786__content .t786__title {
                    font-size: 16px;
                    padding-top: 18px;
                    padding-bottom: 3px;
                    color: #000000;
                    font-weight: 400;
                    font-family: 'Rooftop';
                    text-transform: uppercase;
                }

                #rec729196292 .t786__price {
                    font-weight: 400;
                }

                #rec729196292 .t786__price_old {
                    font-weight: 400;
                }
            </style>
            <style>
                #rec729196292 .t786__textwrapper .t786__descr {
                    font-size: 13px;
                    line-height: 1.25;
                    color: #8a8a8a;
                    font-weight: 400;
                    padding-top: 0px;
                    padding-bottom: 0px;
                    font-family: 'Rooftop';
                }
            </style>
            <style>
                #rec729196292 .t-popup .t786__title {
                    color: #000000;
                    font-weight: 400;
                    font-family: 'Rooftop';
                    text-transform: uppercase;
                }

                #rec729196292 .t-popup .t786__descr {
                    line-height: 1.25;
                    color: #8a8a8a;
                    font-weight: 400;
                    font-family: 'Rooftop';
                }
            </style>
        </div> -->
        <div id="rec692913533" class="r t-rec" style=" " data-animationappear="off" data-record-type="396"><!-- T396 -->
            <style>
                #rec692913533 .t396__artboard {
                    height: 715px;
                    background-color: #ffffff;
                }

                #rec692913533 .t396__filter {
                    height: 715px;
                }

                #rec692913533 .t396__carrier {
                    height: 715px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1919px) {

                    #rec692913533 .t396__artboard,
                    #rec692913533 .t396__filter,
                    #rec692913533 .t396__carrier {
                        height: 763px;
                    }

                    #rec692913533 .t396__filter {}

                    #rec692913533 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 1359px) {

                    #rec692913533 .t396__artboard,
                    #rec692913533 .t396__filter,
                    #rec692913533 .t396__carrier {
                        height: 703px;
                    }

                    #rec692913533 .t396__filter {}

                    #rec692913533 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 1199px) {

                    #rec692913533 .t396__artboard,
                    #rec692913533 .t396__filter,
                    #rec692913533 .t396__carrier {
                        height: 1461px;
                    }

                    #rec692913533 .t396__filter {}

                    #rec692913533 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec692913533 .t396__artboard,
                    #rec692913533 .t396__filter,
                    #rec692913533 .t396__carrier {
                        height: 1441px;
                    }

                    #rec692913533 .t396__filter {}

                    #rec692913533 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705467311613"] {
                    z-index: 2;
                    top: 0px;
                    left: calc(50% - 50% + 0px);
                    width: 100%;
                    height: 110%;
                }

                #rec692913533 .tn-elem[data-elem-id="1705467311613"] .tn-atom {
                    border-radius: 30px;
                    background-color: #0b0b1c;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467311613"] {
                        top: -1px;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467311613"] {
                        top: -1px;
                        left: calc(50% - 50% + 0px);
                        width: 100%;
                        height: 110%;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467311613"] {
                        top: 0px;
                        left: calc(50% - 50% + 0px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467311613"] .tn-atom {
                        border-radius: 20px;
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705467311629"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 3;
                    top: 17px;
                    left: calc(50% - 83px + 0px);
                    width: 166px;
                }

                #rec692913533 .tn-elem[data-elem-id="1705467311629"] .tn-atom {
                    color: #ffffff;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.43;
                    font-weight: 400;
                    opacity: 0.4;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467311629"] {
                        top: 16px;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467311629"] {
                        top: 16px;
                        left: calc(50% - 83px + 0px);
                        width: 166px;
                    }

                    #rec692913533 .tn-elem[data-elem-id="1705467311629"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467311629"] .tn-atom {
                        font-size: 12px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467311629"] {
                        top: 13px;
                        left: calc(50% - 83px + 0px);
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705467345243"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 4;
                    top: 97px;
                    left: calc(50% - 25.5% + -6px);
                    width: 51%;
                }

                #rec692913533 .tn-elem[data-elem-id="1705467345243"] .tn-atom {
                    color: #ffffff;
                    font-size: 43px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    letter-spacing: -3px;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467345243"] {
                        top: 96px;
                        left: calc(50% - 25.5% + -7px);
                        width: 35%;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467345243"] {
                        top: 96px;
                        left: calc(50% - 25.5% + -4px);
                        width: 40%;
                    }

                    #rec692913533 .tn-elem[data-elem-id="1705467345243"] .tn-atom {
                        font-size: 43px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467345243"] {
                        top: 93px;
                        left: calc(50% - 25.5% + -1px);
                        width: 83%;
                    }

                    #rec692913533 .tn-elem[data-elem-id="1705467345243"] .tn-atom {
                        font-size: 43px;
                        letter-spacing: -1.8px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467345243"] {
                        top: 90px;
                        left: calc(50% - 25.5% + 0px);
                        width: 68%;
                    }

                    #rec692913533 .tn-elem[data-elem-id="1705467345243"] .tn-atom {
                        font-size: 28px;
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705467436491"] {
                    z-index: 5;
                    top: 183px;
                    left: 30px;
                    width: 32%;
                    height: 280px;
                }

                #rec692913533 .tn-elem[data-elem-id="1705467436491"] .tn-atom {
                    background-color: #242431;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467436491"] {
                        top: 231px;
                        width: 31%;
                        height: 225px;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467436491"] {
                        top: 231px;
                        width: 31%;
                        height: 200px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467436491"] {
                        top: 227px;
                        left: 15px;
                        width: 360px;
                        height: 190px;
                    }

                    #rec692913533 .tn-elem[data-elem-id="1705467436491"] .tn-atom {
                        background-position: center center;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467436491"] {
                        top: 227px;
                        left: 0px;
                        width: 320%;
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705467571646"] {
                    z-index: 6;
                    top: 183px;
                    left: calc(100% - 32% + -30px);
                    width: 32%;
                    height: 280px;
                }

                #rec692913533 .tn-elem[data-elem-id="1705467571646"] .tn-atom {
                    background-color: #242431;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467571646"] {
                        top: 231px;
                        width: 31%;
                        height: 225px;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467571646"] {
                        top: 231px;
                        width: 31%;
                        height: 200px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467571646"] {
                        top: 1039px;
                        left: calc(100% - 32% + -15px);
                        width: 360px;
                    }

                    #rec692913533 .tn-elem[data-elem-id="1705467571646"] .tn-atom {
                        background-position: center center;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467571646"] {
                        top: 1039px;
                        left: calc(100% - 32% + 0px);
                        width: 320%;
                        height: 180px;
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705467578298"] {
                    z-index: 7;
                    top: 183px;
                    left: calc(50% - 16% + 1px);
                    width: 32%;
                    height: 280px;
                }

                #rec692913533 .tn-elem[data-elem-id="1705467578298"] .tn-atom {
                    background-color: #242431;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467578298"] {
                        top: 231px;
                        left: calc(50% - 16% + 1px);
                        width: 32%;
                        height: 225px;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467578298"] {
                        top: 231px;
                        left: calc(50% - 16% + 0px);
                        width: 32%;
                        height: 200px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467578298"] {
                        top: 657px;
                        left: calc(50% - 16% + -15px);
                        width: 360px;
                        height: 190px;
                    }

                    #rec692913533 .tn-elem[data-elem-id="1705467578298"] .tn-atom {
                        background-position: center center;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467578298"] {
                        top: 657px;
                        left: calc(50% - 16% + 0px);
                        width: 320%;
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705467983090"] {
                    z-index: 8;
                    top: 182px;
                    left: calc(50% + 960px - 267px + -34px);
                    width: 267px;
                }

                #rec692913533 .tn-elem[data-elem-id="1705467983090"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467983090"] {
                        top: 230px;
                        left: calc(50% + 680px - 267px + -33px);
                        width: 170px;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467983090"] {
                        top: 230px;
                        left: calc(50% + 600px - 267px + -34px);
                        width: 149px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467983090"] {
                        top: 658px;
                        left: calc(50% + 320px - 267px + -15px);
                        width: 120px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467983090"] {
                        top: 658px;
                        left: calc(50% + 160px - 267px + 100px);
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705467694587"] {
                    z-index: 9;
                    top: 213px;
                    left: 60px;
                    width: 500px;
                }

                #rec692913533 .tn-elem[data-elem-id="1705467694587"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467694587"] {
                        top: 261px;
                        width: 370px;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467694587"] {
                        top: 261px;
                        width: 320px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467694587"] {
                        top: 257px;
                        left: 45px;
                        width: 290px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467694587"] {
                        top: 257px;
                        left: 0px;
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705467918411"] {
                    z-index: 10;
                    top: 203px;
                    left: calc(50% - 181px + 0px);
                    width: 362px;
                }

                #rec692913533 .tn-elem[data-elem-id="1705467918411"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467918411"] {
                        top: 251px;
                        left: calc(50% - 181px + 1px);
                        width: 279px;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467918411"] {
                        top: 251px;
                        left: calc(50% - 181px + 1px);
                        width: 241px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467918411"] {
                        top: 677px;
                        left: calc(50% - 181px + -82px);
                        width: 227px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705467918411"] {
                        top: 677px;
                        left: calc(50% - 181px + 1px);
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705468022397"] {
                    z-index: 11;
                    top: 217px;
                    left: calc(50% - 181px + 0px);
                    width: 362px;
                    height: 183px;
                    -webkit-backdrop-filter: blur(3px);
                    backdrop-filter: blur(3px);
                    border-radius: 12px;
                }

                #rec692913533 .tn-elem[data-elem-id="1705468022397"] .tn-atom {
                    border-radius: 12px;
                    opacity: 0.2;
                    background-color: #0b0b1c;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705468022397"] {
                        top: 261px;
                        left: calc(50% - 181px + 1px);
                        width: 279px;
                        height: 142px;
                        border-radius: 9px;
                    }

                    #rec692913533 .tn-elem[data-elem-id="1705468022397"] .tn-atom {
                        border-radius: 9px;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705468022397"] {
                        top: 261px;
                        left: calc(50% - 181px + 1px);
                        width: 241px;
                        height: 121px;
                        border-radius: 9px;
                    }

                    #rec692913533 .tn-elem[data-elem-id="1705468022397"] .tn-atom {
                        border-radius: 9px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705468022397"] {
                        top: 684px;
                        left: calc(50% - 181px + -81px);
                        width: 229px;
                        height: 116px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705468022397"] {
                        top: 684px;
                        left: calc(50% - 181px + 1px);
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705468174486"] {
                    z-index: 12;
                    top: 284px;
                    left: calc(50% - 25px + 0px);
                    width: 50px;
                }

                #rec692913533 .tn-elem[data-elem-id="1705468174486"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705468174486"] {
                        top: 312px;
                        width: 40px;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705468174486"] {
                        top: 305px;
                        left: calc(50% - 25px + 1px);
                        width: 33px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705468174486"] {
                        top: 727px;
                        left: calc(50% - 25px + -181px);
                        width: 30px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705468174486"] {
                        top: 727px;
                        left: calc(50% - 25px + 0px);
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705468245495"] {
                    z-index: 13;
                    top: 183px;
                    left: 67px;
                    width: 531px;
                }

                #rec692913533 .tn-elem[data-elem-id="1705468245495"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705468245495"] {
                        top: 231px;
                        width: 395px;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705468245495"] {
                        top: 231px;
                        width: 360px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705468245495"] {
                        top: 1039px;
                        left: -42px;
                        width: 333px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705468245495"] {
                        top: 1039px;
                        left: -7px;
                        width: 305px;
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705470118541"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 14;
                    top: 483px;
                    left: 30px;
                    width: 313px;
                }

                #rec692913533 .tn-elem[data-elem-id="1705470118541"] .tn-atom {
                    color: #ffffff;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.2;
                    font-weight: 690;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470118541"] {
                        top: 476px;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470118541"] {
                        top: 451px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470118541"] {
                        top: 437px;
                        left: 15px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470118541"] {
                        top: 437px;
                        left: 0px;
                        width: 320px;
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705470118635"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 15;
                    top: 515px;
                    left: 30px;
                    width: 464px;
                }

                #rec692913533 .tn-elem[data-elem-id="1705470118635"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 420;
                    opacity: 0.4;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470118635"] {
                        top: 508px;
                        width: 362px;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470118635"] {
                        top: 483px;
                        width: 364px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470118635"] {
                        top: 469px;
                        left: 15px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470118635"] {
                        top: 469px;
                        left: 0px;
                        width: 320px;
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705470184049"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 16;
                    top: 484px;
                    left: 34px;
                    width: 313px;
                }

                #rec692913533 .tn-elem[data-elem-id="1705470184049"] .tn-atom {
                    color: #ffffff;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.2;
                    font-weight: 690;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470184049"] {
                        top: 477px;
                        left: 34px;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470184049"] {
                        top: 452px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470184049"] {
                        top: 867px;
                        left: -15px;
                        width: 360px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470184049"] {
                        top: 867px;
                        left: 0px;
                        width: 320px;
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705470184053"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 17;
                    top: 516px;
                    left: 34px;
                    width: 497px;
                }

                #rec692913533 .tn-elem[data-elem-id="1705470184053"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 420;
                    opacity: 0.4;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470184053"] {
                        top: 509px;
                        left: 34px;
                        width: 378px;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470184053"] {
                        top: 484px;
                        width: 357px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470184053"] {
                        top: 899px;
                        left: -15px;
                        width: 360px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470184053"] {
                        top: 899px;
                        left: 0px;
                        width: 320px;
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705470217463"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 18;
                    top: 484px;
                    left: calc(100% - 32% + -30px);
                    width: 32%;
                }

                #rec692913533 .tn-elem[data-elem-id="1705470217463"] .tn-atom {
                    color: #ffffff;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.2;
                    font-weight: 690;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470217463"] {
                        top: 477px;
                        left: calc(100% - 32% + -30px);
                        width: 31%;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470217463"] {
                        top: 452px;
                        width: 31%;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470217463"] {
                        top: 1259px;
                        left: calc(100% - 32% + -15px);
                        width: 360px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470217463"] {
                        top: 1239px;
                        left: calc(100% - 32% + 0px);
                        width: 320%;
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705470217473"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 19;
                    top: 516px;
                    left: calc(100% - 32% + -30px);
                    width: 32%;
                }

                #rec692913533 .tn-elem[data-elem-id="1705470217473"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 420;
                    opacity: 0.4;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470217473"] {
                        top: 509px;
                        left: calc(100% - 32% + -30px);
                        width: 31%;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470217473"] {
                        top: 484px;
                        width: 31%;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470217473"] {
                        top: 1291px;
                        left: calc(100% - 32% + -15px);
                        width: 360px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470217473"] {
                        top: 1271px;
                        left: calc(100% - 32% + 0px);
                        width: 320px;
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705470359787"] {
                    color: #ffffff;
                    text-align: RIGHT;
                    z-index: 20;
                    top: 605px;
                    left: 226px;
                    width: 16px;
                }

                #rec692913533 .tn-elem[data-elem-id="1705470359787"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 1000;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470359787"] {
                        top: 653px;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470359787"] {
                        top: 593px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470359787"] {
                        top: 579px;
                        left: 189px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470359787"] {
                        top: 579px;
                        left: 0px;
                        width: 320px;
                    }

                    #rec692913533 .tn-elem[data-elem-id="1705470359787"] {
                        text-align: right;
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705470359795"] {
                    color: #ffffff;
                    z-index: 21;
                    top: 605px;
                    left: 30px;
                    width: 181px;
                }

                @media (min-width: 1200px) {
                    #rec692913533 .tn-elem.t396__elem--anim-hidden[data-elem-id="1705470359795"] {
                        opacity: 0;
                    }
                }

                #rec692913533 .tn-elem[data-elem-id="1705470359795"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 400;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470359795"] {
                        top: 653px;
                    }
                }

                @media screen and (max-width: 1359px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470359795"] {
                        top: 593px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470359795"] {
                        top: 579px;
                        left: 15px;
                        width: 159px;
                    }

                    #rec692913533 .tn-elem[data-elem-id="1705470359795"] {
                        text-align: left;
                    }

                    #rec692913533 .tn-elem[data-elem-id="1705470359795"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692913533 .tn-elem[data-elem-id="1705470359795"] {
                        top: 579px;
                        left: 0px;
                        width: 320px;
                    }

                    #rec692913533 .tn-elem[data-elem-id="1705470359795"] {
                        text-align: left;
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="692913533"
                    data-artboard-screens="320,640,1200,1360,1920" data-artboard-height="715"
                    data-artboard-valign="center" data-artboard-upscale="grid" data-artboard-height-res-320="1441"
                    data-artboard-height-res-640="1461" data-artboard-height-res-1200="703"
                    data-artboard-height-res-1360="763">
                    <div class="t396__carrier" data-artboard-recid="692913533"></div>
                    <div class="t396__filter" data-artboard-recid="692913533"></div>
                    <div class='t396__elem tn-elem tn-elem__6929135331705467311613' data-elem-id='1705467311613'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="0"
                        data-field-height-value="110" data-field-width-value="100" data-field-axisy-value="top"
                        data-field-axisx-value="center" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="%"
                        data-field-widthunits-value="%" data-field-top-res-640-value="0"
                        data-field-left-res-640-value="0" data-field-top-res-1200-value="-1"
                        data-field-left-res-1200-value="0" data-field-height-res-1200-value="110"
                        data-field-width-res-1200-value="100" data-field-top-res-1360-value="-1">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6929135331705467311629' data-elem-id='1705467311629'
                        data-elem-type='text' data-field-top-value="17" data-field-left-value="0"
                        data-field-width-value="166" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="13" data-field-left-res-320-value="0"
                        data-field-top-res-1200-value="16" data-field-left-res-1200-value="0"
                        data-field-width-res-1200-value="166" data-field-top-res-1360-value="16">
                        <div class='tn-atom' field='tn_text_1705467311629'>work process</div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6929135331705467345243' data-elem-id='1705467345243'
                        data-elem-type='text' data-field-top-value="97" data-field-left-value="-6"
                        data-field-width-value="51" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="90" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="68" data-field-axisy-res-320-value="top"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="93"
                        data-field-left-res-640-value="-1" data-field-width-res-640-value="83"
                        data-field-axisy-res-640-value="top" data-field-container-res-640-value="window"
                        data-field-topunits-res-640-value="px" data-field-leftunits-res-640-value="px"
                        data-field-top-res-1200-value="96" data-field-left-res-1200-value="-4"
                        data-field-width-res-1200-value="40" data-field-top-res-1360-value="96"
                        data-field-left-res-1360-value="-7" data-field-width-res-1360-value="35">
                        <div class='tn-atom' field='tn_text_1705467345243'>Focus on communication and&nbsp;process</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6929135331705467436491' data-elem-id='1705467436491'
                        data-elem-type='shape' data-field-top-value="183" data-field-left-value="30"
                        data-field-height-value="280" data-field-width-value="32" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="%" data-field-top-res-320-value="227"
                        data-field-left-res-320-value="0" data-field-width-res-320-value="320"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="227"
                        data-field-left-res-640-value="15" data-field-height-res-640-value="190"
                        data-field-width-res-640-value="360" data-field-axisy-res-640-value="top"
                        data-field-axisx-res-640-value="left" data-field-container-res-640-value="window"
                        data-field-topunits-res-640-value="px" data-field-leftunits-res-640-value="px"
                        data-field-widthunits-res-640-value="px" data-field-top-res-1200-value="231"
                        data-field-height-res-1200-value="200" data-field-width-res-1200-value="31"
                        data-field-top-res-1360-value="231" data-field-height-res-1360-value="225"
                        data-field-width-res-1360-value="31">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6929135331705467571646' data-elem-id='1705467571646'
                        data-elem-type='shape' data-field-top-value="183" data-field-left-value="-30"
                        data-field-height-value="280" data-field-width-value="32" data-field-axisy-value="top"
                        data-field-axisx-value="right" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="%" data-field-top-res-320-value="1039"
                        data-field-left-res-320-value="0" data-field-height-res-320-value="180"
                        data-field-width-res-320-value="320" data-field-axisx-res-320-value="center"
                        data-field-top-res-640-value="1039" data-field-left-res-640-value="-15"
                        data-field-width-res-640-value="360" data-field-widthunits-res-640-value="px"
                        data-field-top-res-1200-value="231" data-field-height-res-1200-value="200"
                        data-field-width-res-1200-value="31" data-field-top-res-1360-value="231"
                        data-field-height-res-1360-value="225" data-field-width-res-1360-value="31">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6929135331705467578298' data-elem-id='1705467578298'
                        data-elem-type='shape' data-field-top-value="183" data-field-left-value="1"
                        data-field-height-value="280" data-field-width-value="32" data-field-axisy-value="top"
                        data-field-axisx-value="center" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="%" data-field-top-res-320-value="657"
                        data-field-left-res-320-value="0" data-field-width-res-320-value="320"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="657"
                        data-field-left-res-640-value="-15" data-field-height-res-640-value="190"
                        data-field-width-res-640-value="360" data-field-axisx-res-640-value="right"
                        data-field-widthunits-res-640-value="px" data-field-top-res-1200-value="231"
                        data-field-left-res-1200-value="0" data-field-height-res-1200-value="200"
                        data-field-width-res-1200-value="32" data-field-top-res-1360-value="231"
                        data-field-left-res-1360-value="1" data-field-height-res-1360-value="225"
                        data-field-width-res-1360-value="32">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6929135331705467983090' data-elem-id='1705467983090'
                        data-elem-type='image' data-field-top-value="182" data-field-left-value="-34"
                        data-field-width-value="267" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="%"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="166" data-field-fileheight-value="159"
                        data-field-top-res-320-value="658" data-field-left-res-320-value="100"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="658"
                        data-field-left-res-640-value="-15" data-field-width-res-640-value="120"
                        data-field-leftunits-res-640-value="px" data-field-top-res-1200-value="230"
                        data-field-left-res-1200-value="-34" data-field-width-res-1200-value="149"
                        data-field-top-res-1360-value="230" data-field-left-res-1360-value="-33"
                        data-field-width-res-1360-value="170">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3630-3332-4832-b264-656236663161/Vector_106.svg'
                                alt='' imgfield='tn_img_1705467983090' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6929135331705467694587' data-elem-id='1705467694587'
                        data-elem-type='image' data-field-top-value="213" data-field-left-value="60"
                        data-field-width-value="500" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="387" data-field-fileheight-value="170"
                        data-field-top-res-320-value="257" data-field-left-res-320-value="0"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="257"
                        data-field-left-res-640-value="45" data-field-width-res-640-value="290"
                        data-field-axisx-res-640-value="left" data-field-top-res-1200-value="261"
                        data-field-width-res-1200-value="320" data-field-top-res-1360-value="261"
                        data-field-width-res-1360-value="370">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3835-6430-4238-a631-663966613037/Group_21625.svg'
                                alt='' imgfield='tn_img_1705467694587' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6929135331705467918411' data-elem-id='1705467918411'
                        data-elem-type='image' data-field-top-value="203" data-field-left-value="0"
                        data-field-width-value="362" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="258" data-field-fileheight-value="171"
                        data-field-top-res-320-value="677" data-field-left-res-320-value="1"
                        data-field-axisx-res-320-value="center" data-field-top-res-640-value="677"
                        data-field-left-res-640-value="-82" data-field-width-res-640-value="227"
                        data-field-axisx-res-640-value="right" data-field-container-res-640-value="window"
                        data-field-top-res-1200-value="251" data-field-left-res-1200-value="1"
                        data-field-width-res-1200-value="241" data-field-top-res-1360-value="251"
                        data-field-left-res-1360-value="1" data-field-width-res-1360-value="279">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3931-3336-4865-b365-363030636461/Group_21626.svg'
                                alt='' imgfield='tn_img_1705467918411' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6929135331705468022397' data-elem-id='1705468022397'
                        data-elem-type='shape' data-field-top-value="217" data-field-left-value="0"
                        data-field-height-value="183" data-field-width-value="362" data-field-axisy-value="top"
                        data-field-axisx-value="center" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="684"
                        data-field-left-res-320-value="1" data-field-axisx-res-320-value="center"
                        data-field-top-res-640-value="684" data-field-left-res-640-value="-81"
                        data-field-height-res-640-value="116" data-field-width-res-640-value="229"
                        data-field-axisx-res-640-value="right" data-field-container-res-640-value="window"
                        data-field-top-res-1200-value="261" data-field-left-res-1200-value="1"
                        data-field-height-res-1200-value="121" data-field-width-res-1200-value="241"
                        data-field-top-res-1360-value="261" data-field-left-res-1360-value="1"
                        data-field-height-res-1360-value="142" data-field-width-res-1360-value="279">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6929135331705468174486' data-elem-id='1705468174486'
                        data-elem-type='image' data-field-top-value="284" data-field-left-value="0"
                        data-field-width-value="50" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-field-filewidth-value="33"
                        data-field-fileheight-value="33" data-field-top-res-320-value="727"
                        data-field-left-res-320-value="0" data-field-axisx-res-320-value="center"
                        data-field-top-res-640-value="727" data-field-left-res-640-value="-181"
                        data-field-width-res-640-value="30" data-field-axisx-res-640-value="right"
                        data-field-container-res-640-value="window" data-field-top-res-1200-value="305"
                        data-field-left-res-1200-value="1" data-field-width-res-1200-value="33"
                        data-field-top-res-1360-value="312" data-field-width-res-1360-value="40">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3463-3037-4537-b966-616265316434/Group_21617.svg'
                                alt='' imgfield='tn_img_1705468174486' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6929135331705468245495' data-elem-id='1705468245495'
                        data-elem-type='image' data-field-top-value="183" data-field-left-value="67"
                        data-field-width-value="531" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="%" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="406" data-field-fileheight-value="179"
                        data-field-top-res-320-value="1039" data-field-left-res-320-value="-7"
                        data-field-width-res-320-value="305" data-field-axisx-res-320-value="center"
                        data-field-top-res-640-value="1039" data-field-left-res-640-value="-42"
                        data-field-width-res-640-value="333" data-field-axisx-res-640-value="right"
                        data-field-leftunits-res-640-value="px" data-field-top-res-1200-value="231"
                        data-field-width-res-1200-value="360" data-field-top-res-1360-value="231"
                        data-field-width-res-1360-value="395">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6261-6462-4165-b066-363162386436/Group_21627.svg'
                                alt='' imgfield='tn_img_1705468245495' /></div>
                    </div>
                    <div class='t396__elem tn-elem ue tn-elem__6929135331705470118541' data-elem-id='1705470118541'
                        data-elem-type='text' data-field-top-value="483" data-field-left-value="30"
                        data-field-width-value="313" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="437" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="320" data-field-axisy-res-320-value="top"
                        data-field-axisx-res-320-value="center" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-widthunits-res-320-value="px" data-field-top-res-640-value="437"
                        data-field-left-res-640-value="15" data-field-axisy-res-640-value="top"
                        data-field-leftunits-res-640-value="px" data-field-top-res-1200-value="451"
                        data-field-top-res-1360-value="476">
                        <div class='tn-atom' field='tn_text_1705470118541'>carry out processes clearly</div>
                    </div>
                    <div class='t396__elem tn-elem ue tn-elem__6929135331705470118635' data-elem-id='1705470118635'
                        data-elem-type='text' data-field-top-value="515" data-field-left-value="30"
                        data-field-width-value="464" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="469" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="320" data-field-axisy-res-320-value="top"
                        data-field-axisx-res-320-value="center" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-widthunits-res-320-value="px" data-field-top-res-640-value="469"
                        data-field-left-res-640-value="15" data-field-axisy-res-640-value="top"
                        data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                        data-field-leftunits-res-640-value="px" data-field-top-res-1200-value="483"
                        data-field-width-res-1200-value="364" data-field-top-res-1360-value="508"
                        data-field-width-res-1360-value="362">
                        <div class='tn-atom' field='tn_text_1705470118635'>We&nbsp;collect all the project’s information
                            in&nbsp;Notion. You can check the current stage of&nbsp;the project and review the materials
                            at&nbsp;any time.</div>
                    </div>
                    <div class='t396__elem tn-elem ue tn-elem__6929135331705470184049' data-elem-id='1705470184049'
                        data-elem-type='text' data-field-top-value="484" data-field-left-value="34"
                        data-field-width-value="313" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="%" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="867" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="320" data-field-axisy-res-320-value="top"
                        data-field-axisx-res-320-value="center" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-widthunits-res-320-value="px" data-field-top-res-640-value="867"
                        data-field-left-res-640-value="-15" data-field-width-res-640-value="360"
                        data-field-axisy-res-640-value="top" data-field-axisx-res-640-value="right"
                        data-field-leftunits-res-640-value="px" data-field-top-res-1200-value="452"
                        data-field-top-res-1360-value="477" data-field-left-res-1360-value="34">
                        <div class='tn-atom' field='tn_text_1705470184049'>always in touch</div>
                    </div>
                    <div class='t396__elem tn-elem ue tn-elem__6929135331705470184053' data-elem-id='1705470184053'
                        data-elem-type='text' data-field-top-value="516" data-field-left-value="34"
                        data-field-width-value="497" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="%" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="899" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="320" data-field-axisy-res-320-value="top"
                        data-field-axisx-res-320-value="center" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-widthunits-res-320-value="px" data-field-top-res-640-value="899"
                        data-field-left-res-640-value="-15" data-field-width-res-640-value="360"
                        data-field-axisy-res-640-value="top" data-field-axisx-res-640-value="right"
                        data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                        data-field-leftunits-res-640-value="px" data-field-top-res-1200-value="484"
                        data-field-width-res-1200-value="357" data-field-top-res-1360-value="509"
                        data-field-left-res-1360-value="34" data-field-width-res-1360-value="378">
                        <div class='tn-atom' field='tn_text_1705470184053'>We&nbsp;respond quickly and answer questions
                            in&nbsp;details. Also we&nbsp;choose a&nbsp;call time that is&nbsp;convenient for you and
                            send reports on&nbsp;completed work.</div>
                    </div>
                    <div class='t396__elem tn-elem ue tn-elem__6929135331705470217463' data-elem-id='1705470217463'
                        data-elem-type='text' data-field-top-value="484" data-field-left-value="-30"
                        data-field-width-value="32" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="1239" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="320" data-field-axisy-res-320-value="top"
                        data-field-axisx-res-320-value="center" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-top-res-640-value="1259" data-field-left-res-640-value="-15"
                        data-field-width-res-640-value="360" data-field-axisy-res-640-value="top"
                        data-field-widthunits-res-640-value="px" data-field-top-res-1200-value="452"
                        data-field-width-res-1200-value="31" data-field-top-res-1360-value="477"
                        data-field-left-res-1360-value="-30" data-field-width-res-1360-value="31">
                        <div class='tn-atom' field='tn_text_1705470217463'>work towards results</div>
                    </div>
                    <div class='t396__elem tn-elem ue tn-elem__6929135331705470217473' data-elem-id='1705470217473'
                        data-elem-type='text' data-field-top-value="516" data-field-left-value="-30"
                        data-field-width-value="32" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="1271" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="320" data-field-axisy-res-320-value="top"
                        data-field-axisx-res-320-value="center" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-widthunits-res-320-value="px" data-field-top-res-640-value="1291"
                        data-field-left-res-640-value="-15" data-field-width-res-640-value="360"
                        data-field-axisy-res-640-value="top" data-field-container-res-640-value="window"
                        data-field-topunits-res-640-value="px" data-field-leftunits-res-640-value="px"
                        data-field-widthunits-res-640-value="px" data-field-top-res-1200-value="484"
                        data-field-width-res-1200-value="31" data-field-top-res-1360-value="509"
                        data-field-left-res-1360-value="-30" data-field-width-res-1360-value="31">
                        <div class='tn-atom' field='tn_text_1705470217473'>We&nbsp;immerse ourselves in&nbsp;the task
                            and competently build processes&nbsp;to&nbsp;launch&nbsp;a&nbsp;high-quality <br>project
                            as&nbsp;early as&nbsp;possible.</div>
                    </div>
                    <!-- <div class='t396__elem tn-elem tn-elem__6929135331705470359787' data-elem-id='1705470359787'
                        data-elem-type='text' data-field-top-value="605" data-field-left-value="226"
                        data-field-width-value="16" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="579" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="320" data-field-axisx-res-320-value="center"
                        data-field-container-res-320-value="window" data-field-top-res-640-value="579"
                        data-field-left-res-640-value="189" data-field-axisx-res-640-value="left"
                        data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                        data-field-leftunits-res-640-value="px" data-field-top-res-1200-value="593"
                        data-field-top-res-1360-value="653">
                        <div class='tn-atom' field='tn_text_1705470359787'>&gt;&gt;</div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6929135331705470359795 ' data-elem-id='1705470359795'
                        data-elem-type='text' data-field-top-value="605" data-field-left-value="30"
                        data-field-width-value="181" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="hover" data-animate-sbs-trgels="1705470359795"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'ti':0,'ea':'0','dt':0},{'mx':0,'my':0,'sx':1,'sy':1,'op':0.7,'ro':0,'ti':300,'ea':'0','dt':0}]"
                        data-field-top-res-320-value="579" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="320" data-field-axisy-res-320-value="top"
                        data-field-axisx-res-320-value="center" data-field-container-res-320-value="window"
                        data-field-top-res-640-value="579" data-field-left-res-640-value="15"
                        data-field-width-res-640-value="159" data-field-axisx-res-640-value="left"
                        data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                        data-field-leftunits-res-640-value="px" data-field-top-res-1200-value="593"
                        data-field-top-res-1360-value="653">
                        <div class='tn-atom'><a
                                href="https://tested-stranger-430.notion.site/Project-template-Stellar-Branding-a32d3779e69a471aa6147962bf5ae9be?pvs=4"
                                target="_blank" style="color: inherit"><u>Open project card </u></a></div>
                    </div> -->
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t396_init', function () {
                        t396_init('692913533');
                    });
                });</script><!-- /T396 -->
        </div>
        <div id="rec692913583" class="r t-rec" style=" " data-animationappear="off" data-record-type="131"><!-- T123 -->
            <div class="t123">
                <div class="t-container_100 ">
                    <div class="t-width t-width_100 ">

                        <style>
                            /*скругление углов в процессе*/

                            @media screen and (min-width: 1200px) {
                                #rec692913533 .tn-elem[data-elem-id="1705467436491"] .tn-atom {
                                    border-radius: 15px 0 0px 15px !important;
                                }

                                #rec692913533 .tn-elem[data-elem-id="1705467571646"] .tn-atom {
                                    border-radius: 0px 15px 15px 0px !important;
                                }

                            }
                        </style>


                    </div>
                </div>
            </div>
        </div>
        <div id="rec670853975" class="r t-rec" style=" " data-animationappear="off" data-record-type="396"><!-- T396 -->
            <style>
                #rec670853975 .t396__artboard {
                    min-height: 854px;
                    height: 90vh;
                    background-color: #ffffff;
                    overflow: visible;
                }

                #rec670853975 .t396__filter {
                    min-height: 854px;
                    height: 90vh;
                }

                #rec670853975 .t396__carrier {
                    min-height: 854px;
                    height: 90vh;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1919px) {

                    #rec670853975 .t396__artboard,
                    #rec670853975 .t396__filter,
                    #rec670853975 .t396__carrier {
                        min-height: 813px;
                    }

                    #rec670853975 .t396__filter {}

                    #rec670853975 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 1199px) {

                    #rec670853975 .t396__artboard,
                    #rec670853975 .t396__filter,
                    #rec670853975 .t396__carrier {}

                    #rec670853975 .t396__filter {}

                    #rec670853975 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec670853975 .t396__artboard,
                    #rec670853975 .t396__filter,
                    #rec670853975 .t396__carrier {
                        min-height: 700px;
                    }

                    #rec670853975 .t396__filter {}

                    #rec670853975 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec670853975 .tn-elem[data-elem-id="1700645474488"] {
                    z-index: 2;
                    top: -451px;
                    left: calc(50% - 960px + -552px);
                    width: 2286px;
                    height: 2286px;
                    pointer-events: none;
                }

                @media (min-width: 1200px) {
                    #rec670853975 .tn-elem.t396__elem--anim-hidden[data-elem-id="1700645474488"] {
                        opacity: 0;
                    }
                }

                #rec670853975 .tn-elem[data-elem-id="1700645474488"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec670853975 .tn-elem[data-elem-id="1700645474488"] {
                        top: -232px;
                        left: calc(50% - 600px + -554px);
                        width: 1670px;
                        height: 1670px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec670853975 .tn-elem[data-elem-id="1700645474488"] {
                        top: 69px;
                        left: calc(50% - 320px + -586px);
                        width: 1162px;
                        height: 1162px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670853975 .tn-elem[data-elem-id="1700645474488"] {
                        top: 2px;
                        left: calc(50% - 160px + -612px);
                    }
                }

                #rec670853975 .tn-elem[data-elem-id="1700645117739"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 4;
                    top: 130px;
                    left: 30px;
                    width: 474px;
                }

                #rec670853975 .tn-elem[data-elem-id="1700645117739"] .tn-atom {
                    color: #000000;
                    font-size: 43px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 450;
                    letter-spacing: -1.8px;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec670853975 .tn-elem[data-elem-id="1700645117739"] {
                        top: 120px;
                        left: 30px;
                        width: 474px;
                    }

                    #rec670853975 .tn-elem[data-elem-id="1700645117739"] .tn-atom {
                        font-size: 43px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec670853975 .tn-elem[data-elem-id="1700645117739"] {
                        top: 122px;
                        left: 15px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670853975 .tn-elem[data-elem-id="1700645117739"] {
                        top: 60px;
                        left: 1px;
                        width: 287px;
                    }

                    #rec670853975 .tn-elem[data-elem-id="1700645117739"] {
                        text-align: center;
                    }

                    #rec670853975 .tn-elem[data-elem-id="1700645117739"] .tn-atom {
                        font-size: 28px;
                    }
                }

                #rec670853975 .tn-elem[data-elem-id="1700645352870"] {
                    z-index: 10;
                    top: 541px;
                    left: calc(100% - 7px + -165px);
                    width: 7px;
                    pointer-events: none;
                }

                #rec670853975 .tn-elem[data-elem-id="1700645352870"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec670853975 .tn-elem[data-elem-id="1700645352870"] {
                        top: 520px;
                        left: calc(100% - 7px + -165px);
                        width: 7px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec670853975 .tn-elem[data-elem-id="1700645352870"] {
                        top: 520px;
                        left: calc(100% - 7px + 162px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670853975 .tn-elem[data-elem-id="1700645352870"] {
                        top: 439px;
                        left: calc(100% - 7px + -15px);
                    }
                }

                #rec670853975 .tn-elem[data-elem-id="1700664664346"] {
                    z-index: 11;
                    top: 152px;
                    left: calc(50% - 203.5px + -312px);
                    width: 407px;
                }

                #rec670853975 .tn-elem[data-elem-id="1700664664346"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec670853975 .tn-elem[data-elem-id="1700664664346"] {
                        top: 112px;
                        left: calc(50% - 203.5px + -229px);
                    }

                    #rec670853975 .tn-elem[data-elem-id="1700664664346"] .tn-atom {
                        opacity: 0;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec670853975 .tn-elem[data-elem-id="1700664664346"] {
                        top: 122px;
                        left: calc(50% - 203.5px + -348px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670853975 .tn-elem[data-elem-id="1700664664346"] {
                        top: 183px;
                        left: calc(50% - 203.5px + -347px);
                    }

                    #rec670853975 .tn-elem[data-elem-id="1700664664346"] .tn-atom {
                        opacity: 0;
                    }
                }

                #rec670853975 .tn-elem[data-elem-id="1700664720915"] {
                    z-index: 12;
                    top: 629px;
                    left: -270px;
                    width: 829px;
                }

                #rec670853975 .tn-elem[data-elem-id="1700664720915"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec670853975 .tn-elem[data-elem-id="1700664720915"] {
                        top: 442px;
                        left: -545px;
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec670853975 .tn-elem[data-elem-id="1700664720915"] {
                        top: 675px;
                        left: -626px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670853975 .tn-elem[data-elem-id="1700664720915"] {
                        top: 581px;
                        left: -759px;
                    }
                }

                #rec670853975 .tn-elem[data-elem-id="1700666595675"] {
                    z-index: 13;
                    top: calc(90vh + -30px);
                    left: calc(50% - 19.5px + 0px);
                    width: 39px;
                }

                #rec670853975 .tn-elem[data-elem-id="1700666595675"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec670853975 .tn-elem[data-elem-id="1700666595675"] {
                        top: calc(854px + -30px);
                        left: calc(50% - 19.5px + 0px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670853975 .tn-elem[data-elem-id="1700666595675"] {
                        top: calc(854px + -15px);
                    }
                }

                #rec670853975 .tn-elem[data-elem-id="1705321547186"] {
                    z-index: 14;
                    top: 120px;
                    left: 52px;
                    width: 44%;
                }

                #rec670853975 .tn-elem[data-elem-id="1705321547186"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {
                    #rec670853975 .tn-elem[data-elem-id="1705321547186"] {
                        top: 286px;
                        left: 15px;
                        width: 610px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec670853975 .tn-elem[data-elem-id="1705321547186"] {
                        top: 158px;
                        left: 6px;
                        width: 88%;
                    }
                }

                #rec670853975 .tn-elem[data-elem-id="1705470462747"] {
                    z-index: 15;
                    top: 90px;
                    left: 0px;
                    width: 100%;
                    height: 2px;
                }

                #rec670853975 .tn-elem[data-elem-id="1705470462747"] .tn-atom {
                    background-color: #000000;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 639px) {
                    #rec670853975 .tn-elem[data-elem-id="1705470462747"] .tn-atom {
                        opacity: 0;
                    }
                }
            </style>
            <div class='t396'>
                <!-- <div class="t396__artboard" data-artboard-recid="670853975" data-artboard-screens="320,640,1200,1920"
                    data-artboard-height="854" data-artboard-valign="stretch" data-artboard-height_vh="90"
                    data-artboard-upscale="grid" data-artboard-ovrflw="visible" data-artboard-height-res-320="700"
                    data-artboard-height-res-1200="813">
                    <div class="t396__carrier" data-artboard-recid="670853975"></div>
                    <div class="t396__filter" data-artboard-recid="670853975"></div>
                    <div class='t396__elem tn-elem gradient tn-elem__6708539751700645474488 t396__elem--anim-hidden'
                        data-elem-id='1700645474488' data-elem-type='shape' data-field-top-value="-451"
                        data-field-left-value="-552" data-field-height-value="2286" data-field-width-value="2286"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-sbs-event="blockintoview"
                        data-animate-sbs-trg="0.5" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'ti':0,'dt':0},{'mx':0,'my':0,'sx':1,'sy':1,'op':0,'ro':20,'ti':0,'dt':0},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':20,'ti':5000,'dt':0}]"
                        data-field-top-res-320-value="2" data-field-left-res-320-value="-612"
                        data-field-top-res-640-value="69" data-field-left-res-640-value="-586"
                        data-field-height-res-640-value="1162" data-field-width-res-640-value="1162"
                        data-field-top-res-1200-value="-232" data-field-left-res-1200-value="-554"
                        data-field-height-res-1200-value="1670" data-field-width-res-1200-value="1670">
                        <div class='tn-atom t-bgimg'
                            data-original="https://static.tildacdn.net/tild3764-3534-4533-a135-353061373233/Mask_group.png">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem ue tn-elem__6708539751700645117739' data-elem-id='1700645117739'
                        data-elem-type='text' data-field-top-value="130" data-field-left-value="30"
                        data-field-width-value="474" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="60" data-field-left-res-320-value="1"
                        data-field-width-res-320-value="287" data-field-axisy-res-320-value="top"
                        data-field-axisx-res-320-value="center" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-top-res-640-value="122" data-field-left-res-640-value="15"
                        data-field-axisy-res-640-value="top" data-field-container-res-640-value="window"
                        data-field-topunits-res-640-value="px" data-field-leftunits-res-640-value="px"
                        data-field-top-res-1200-value="120" data-field-left-res-1200-value="30"
                        data-field-width-res-1200-value="474">
                        <div class='tn-atom' field='tn_text_1700645117739'>Let's <span
                                style="color: rgb(43, 85, 157);">collaborate</span> together!</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6708539751700645352870' data-elem-id='1700645352870'
                        data-elem-type='image' data-field-top-value="541" data-field-left-value="-165"
                        data-field-width-value="7" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="7" data-field-fileheight-value="6"
                        data-field-top-res-320-value="439" data-field-left-res-320-value="-15"
                        data-field-axisx-res-320-value="right" data-field-container-res-320-value="grid"
                        data-field-top-res-640-value="520" data-field-left-res-640-value="162"
                        data-field-axisx-res-640-value="center" data-field-top-res-1200-value="520"
                        data-field-left-res-1200-value="-165" data-field-width-res-1200-value="7">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3062-6662-4036-a531-643339663832/Polygon_1.svg'
                                alt='' imgfield='tn_img_1700645352870' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6708539751700664664346' data-elem-id='1700664664346'
                        data-elem-type='image' data-field-top-value="152" data-field-left-value="-312"
                        data-field-width-value="407" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="430" data-field-fileheight-value="330"
                        data-field-top-res-320-value="183" data-field-left-res-320-value="-347"
                        data-field-top-res-640-value="122" data-field-left-res-640-value="-348"
                        data-field-axisx-res-640-value="left" data-field-top-res-1200-value="112"
                        data-field-left-res-1200-value="-229">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6336-3239-4066-b563-396566343433/Group_21531.svg'
                                alt='' imgfield='tn_img_1700664664346' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6708539751700664720915' data-elem-id='1700664720915'
                        data-elem-type='image' data-field-top-value="629" data-field-left-value="-270"
                        data-field-width-value="829" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="829" data-field-fileheight-value="802"
                        data-field-top-res-320-value="581" data-field-left-res-320-value="-759"
                        data-field-top-res-640-value="675" data-field-left-res-640-value="-626"
                        data-field-top-res-1200-value="442" data-field-left-res-1200-value="-545">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3936-3264-4462-b763-643630663536/Rectangle_212.svg'
                                alt='' imgfield='tn_img_1700664720915' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6708539751700666595675' data-elem-id='1700666595675'
                        data-elem-type='image' data-field-top-value="-30" data-field-left-value="0"
                        data-field-width-value="39" data-field-axisy-value="bottom" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="%" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="39" data-field-fileheight-value="11"
                        data-field-top-res-320-value="-15" data-field-axisy-res-320-value="bottom"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="%" data-field-top-res-640-value="-30"
                        data-field-left-res-640-value="0" data-field-axisx-res-640-value="center">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6336-3036-4339-b939-636564313162/Group_21532.svg'
                                alt='' imgfield='tn_img_1700666595675' /></div>
                    </div>
                    <div class='t396__elem tn-elem ue tn-elem__6708539751705321547186' data-elem-id='1705321547186'
                        data-elem-type='form' data-field-top-value="120" data-field-left-value="52"
                        data-field-width-value="44" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="%" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="158" data-field-left-res-320-value="6"
                        data-field-width-res-320-value="88" data-field-axisy-res-320-value="top"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="%" data-field-widthunits-res-320-value="%"
                        data-field-top-res-640-value="286" data-field-left-res-640-value="15"
                        data-field-width-res-640-value="610" data-field-axisy-res-640-value="top"
                        data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                        data-field-leftunits-res-640-value="px" data-field-widthunits-res-640-value="px"
                        data-field-inputpos-value="v" data-field-inputfontfamily-value="Rooftop"
                        data-field-buttonhoverbgcolor-value="#464646" data-field-inputfontsize-value="16"
                        data-field-inputfontweight-value="400" data-field-inputcolor-value="#000000"
                        data-field-inputbgcolor-value="#ffffff" data-field-inputbordercolor-value="#8a8a8a"
                        data-field-inputbordersize-value="1" data-field-inputheight-value="50"
                        data-field-inputmargbottom-value="20" data-field-inputmargright-value="20"
                        data-field-inputtitlefontsize-value="16" data-field-inputtitlefontweight-value="400"
                        data-field-inputtitlecolor-value="#000000" data-field-inputtitlemargbottom-value="5"
                        data-field-inputelscolor-value="#8a8a8a" data-field-inputelsfontweight-value="400"
                        data-field-inputelsfontsize-value="14" data-field-inputsstyle-value="y"
                        data-field-buttontitle-value="send request" data-field-buttoncolor-value="#ffffff"
                        data-field-buttonbgcolor-value="#000000" data-field-buttonradius-value="5"
                        data-field-buttonmargtop-value="60" data-field-buttonwidth-value="160"
                        data-field-buttonheight-value="32" data-field-buttonfontfamily-value="Rooftop"
                        data-field-buttonfontsize-value="16" data-field-buttonfontweight-value="400"
                        data-field-receivers-value="ba180d474ff61a0324ce76935f4c9404,231ee57d3eaa954f25a1f271261e3d53,847e86bd706894c65f97612149697dfb,4692cd2a551fa9cbaf6d4764b8f4fdb1,efc77e169a24727fa3c8f0402c3546bd">
                        <div class='tn-atom tn-atom__form'></div>
                        <div data-nosnippet="true" class="tn-atom__inputs-wrapp" style="display:none;"><textarea
                                class="tn-atom__inputs-textarea">[{"lid":"1705321547187","ls":"10","loff":"","li_type":"nm","li_name":"name","li_ph":"Name","li_req":"y","li_nm":"name"},{"lid":"1705321547188","ls":"20","loff":"","li_type":"ph","li_name":"phone","li_req":"y","li_masktype":"a","li_maskcountry":"IT","li_nm":"phone"},{"lid":"1705321582574","ls":"30","loff":"","li_type":"em","li_name":"email","li_ph":"Email","li_req":"y","li_nm":"email"},{"lid":"1705321606396","ls":"40","loff":"","li_type":"in","li_ph":"Your request","li_req":"y","li_nm":"Input"}]</textarea>
                        </div>
                    </div>
                    <div class='t396__elem tn-elem ue tn-elem__6708539751705470462747' data-elem-id='1705470462747'
                        data-elem-type='shape' data-field-top-value="90" data-field-left-value="0"
                        data-field-height-value="2" data-field-width-value="100" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="%">
                        <div class='tn-atom'></div>
                    </div>
                </div> -->
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t396_init', function () {
                        t396_init('670853975');
                    });
                });</script><!-- /T396 -->
        </div>
        <div id="rec692190875" class="r t-rec" style=" " data-animationappear="off" data-record-type="131"><!-- T123 -->
            <div class="t123">
                <div class="t-container_100 ">
                    <div class="t-width t-width_100 ">

                        <!--!ANNEXX!--><!--!ANX013-1!--!><!--![{"id":"","data":""},{"id":"anxcommentblock","data":""},{"id":"shape-hide-cursor","data":"false"},{"id":"shape","data":""},{"id":"cursor-for-shape","data":""},{"id":"width-cursor-shape","data":"30"},{"id":"mix-blend-shape","data":"normal"},{"id":"easing-shape","data":"linear"},{"id":"duration-shape","data":"0"},{"id":"offsetX-shape","data":"0"},{"id":"offsetY-shape","data":"0"},{"id":"link-shape","data":""},{"id":"link-shape-newwindow","data":"false"},{"id":"blocks-hide-cursor","data":"true"},{"id":"blocks","data":"#rec692190873"},{"id":"cursor-for-blocks","data":"https://static.tildacdn.net/tild6539-6164-4933-a262-393238383063/Group_21608.svg"},{"id":"width-cursor-blocks","data":"120"},{"id":"mix-blend-blocks","data":"darken"},{"id":"easing-blocks","data":"cubic-bezier(0.33, 1, 0.68, 1)"},{"id":"duration-blocks","data":"0"},{"id":"offsetX-blocks","data":"0"},{"id":"offsetY-blocks","data":"0"},{"id":"link-block","data":""},{"id":"link-block-newwindow","data":"false"},{"id":"","data":""},{"id":"body-hide-cursor","data":"false"},{"id":"cursor-for-body","data":""},{"id":"width-cursor-body","data":"30"},{"id":"mix-blend-body","data":"normal"},{"id":"easing-body","data":"linear"},{"id":"duration-body","data":"0"},{"id":"offsetX-body","data":"0"},{"id":"offsetY-body","data":"0"},{"id":"zoom-active-element","data":"100"},{"id":"zoom-element-select","data":""},{"id":"shadow","data":"0px 0px 0px rgba(255, 255, 255, 0)"},{"id":"zindex","data":"10000000000"},{"id":"width-checkbox","data":"1200-20000"},{"id":"disable-touch-device","data":"false"},{"id":"scrollhide","data":"true"}]!-->
                        <script> (function () { function annexxAddStyle(numberMod, codestyle, idblock) { let styleBlock = document.querySelector('head > #annexxStyle' + numberMod + (idblock ? idblock : '')); if (!styleBlock) { document.querySelector('head').insertAdjacentHTML('beforeend', '<style id="annexxStyle' + numberMod + (idblock ? idblock : '') + '"></style>'); styleBlock = document.querySelector('head > #annexxStyle' + numberMod + (idblock ? idblock : '')); } let t = (function () { return !Array.from(styleBlock.childNodes).some(function (e) { if (e.textContent === codestyle) { return true; } }); }()); if (t) styleBlock.insertAdjacentHTML('beforeend', codestyle); } function annexxRemoveStyle(numberMod, idblock) { let block = document.querySelector('head > #annexxStyle' + numberMod + (idblock ? idblock : '')); if (block) block.remove(); } function hideCursorStyle() { annexxAddStyle('013', ` body.annexxHideBodyCursor *, body.annexxHideBodyCursor video::-webkit-media-controls-fullscreen-button, body.annexxHideBodyCursor video::-webkit-media-controls-play-button, body.annexxHideBodyCursor video::-webkit-media-controls-timeline, body.annexxHideBodyCursor video::-webkit-media-controls-current-time-display, body.annexxHideBodyCursor video::-webkit-media-controls-time-remaining-display, body.annexxHideBodyCursor video::-webkit-media-controls-mute-button, body.annexxHideBodyCursor video::-webkit-media-controls-toggle-closed-captions-button, body.annexxHideBodyCursor video::-webkit-media-controls-volume-slider {cursor: none !important; -webkit-user-select: none !important;} `, 'hidecursor'); } if (false) { document.body.classList.add('annexxHideBodyCursor'); } document.addEventListener("DOMContentLoaded", function () { function addElementsToArray() { document.querySelectorAll('').forEach(function (e) { let tnAtom = e.querySelector('.tn-atom'); if (tnAtom) e.style.borderRadius = getComputedStyle(tnAtom).borderRadius; window.arrAnnexxCursorImage.elements = window.arrAnnexxCursorImage.elements.filter(arrEl => arrEl.el.classList.value.replace('t-animate_wait', '') + (arrEl.el.dataset.productLid ? arrEl.el.dataset.productLid : '') !== e.classList.value.replace('t-animate_wait', '') + (e.dataset.productLid ? e.dataset.productLid : '')); window.arrAnnexxCursorImage.elements.push({ el: e, width: '30px', mixBlendMode: 'normal', zIndex: 10000000000, image: '', link: '', linknewwindow: (false ? (!/popup/.test('') ? true : false) : false), offsetX: 0, offsetY: 0, easing: 'linear', duration: '0ms' }); }); } function checkArrCursor(action) { if (action === 'create' && typeof window.arrAnnexxCursorImage === 'undefined') { createArrayOK = true; window.arrAnnexxCursorImage = { 'elements': [], 'blocks': [], 'body': [] }; } else if (action === 'check') return typeof window.arrAnnexxCursorImage !== 'undefined'; if (!window.arrAnnexxCursorImage.zoomClassReady) { let z = 100 / 100; annexxAddStyle('013', ` .annexxCursorImage.annexxCursorVisible.annexxCursorZoom {transform: translate(-50%, -50%) scale(${z}) !important;} `); annexxAddStyle('013', ` body.annexxFixCursorIframe iframe {pointer-events: none;} `); document.body.classList.add('annexxFixCursorIframe'); window.arrAnnexxCursorImage.zoomClassReady = true; } } function addArrAnnexxCursorImage() { if (!window.arrAnnexxCursorImage.arrActiveEl) { let selectElem = '' ? ''.split(/,\s|,/g).map(e => document.querySelector(e)) : false; annexxRemoveStyle('013', 'hidecursor'); window.arrAnnexxCursorImage.arrActiveEl = Array.from(document.querySelectorAll('*')).filter(function (e) { /* Убрал тег video */ let tag = /META|SCRIPT|STYLE|SOURCE|BODY|HTML|HEAD|LINK|TITLE|IFRAME|desc|polyline|path|g$/.test(e.tagName); if (!tag) { if (/pointer/.test(getComputedStyle(e).cursor)) return true; else if (selectElem && selectElem.some(el => el === e)) return true; else return false; } else return false; }); hideCursorStyle(); } } function preloadImage(link) { document.head.insertAdjacentHTML('beforeend', '<link rel="prefetch prerender" href=' + link + ' />'); } function checkWidth() { let windowWidth = window.innerWidth; return arrWidth.some(e => e[0] <= windowWidth && windowWidth <= e[1] ? true : false); } let arrWidth = "1200-20000".split(/,\s|,/g).map(e => e.split('-').map(e => +e)), isMobile = (function () { let ua = navigator.userAgent; if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(ua) || (!/windows/i.test(ua) && /safari/i.test(ua) && navigator.maxTouchPoints > 1)) return true; else return false; }()); if ((false && isMobile) || !checkWidth()) return false; let d = Math.round(Math.random() * 1e10), cursorEl = document.querySelector('.annexxCursorImage'), createArrayOK; if ('' && '') { checkArrCursor('create'); if (!cursorEl) { document.body.insertAdjacentHTML('beforeend', `<img class="annexxCursorImage" src=""></img>`); cursorEl = document.querySelector('.annexxCursorImage'); } if (!window.arrAnnexxCursorImage.cursorEl) window.arrAnnexxCursorImage.cursorEl = cursorEl; annexxAddStyle('013', ` .annexxCursorImage { position: fixed; transition-property: width, transform; pointer-events: none; transform: translate(-50%, -50%) scale(0); box-shadow: 0px 0px 0px rgba(255, 255, 255, 0); } .annexxCursorImage.annexxCursorVisible { transform: translate(-50%, -50%) scale(1); } `); addElementsToArray(); setTimeout(addElementsToArray, 1e3); let intS; window.addEventListener("scroll", function () { clearTimeout(intS); intS = setTimeout(addElementsToArray, 1e3); }); preloadImage(''); } if ('#rec692190873' && 'https://static.tildacdn.net/tild6539-6164-4933-a262-393238383063/Group_21608.svg') { checkArrCursor('create'); if (!cursorEl) { document.body.insertAdjacentHTML('beforeend', `<img class="annexxCursorImage" src=""></img>`); cursorEl = document.querySelector('.annexxCursorImage'); } if (!window.arrAnnexxCursorImage.cursorEl) window.arrAnnexxCursorImage.cursorEl = cursorEl; annexxAddStyle('013', ` .annexxCursorImage { position: fixed; transition: width 300ms ease 0s, transform 300ms ease 0s; pointer-events: none; transform: translate(-50%, -50%) scale(0); box-shadow: 0px 0px 0px rgba(255, 255, 255, 0); } .annexxCursorImage.annexxCursorVisible { transform: translate(-50%, -50%) scale(1); } `); document.querySelectorAll('#rec692190873').forEach(function (e) { window.arrAnnexxCursorImage.blocks.push({ el: e, width: '120px', mixBlendMode: 'darken', zIndex: 10000000000, image: 'https://static.tildacdn.net/tild6539-6164-4933-a262-393238383063/Group_21608.svg', link: '', linknewwindow: (false ? (!/popup/.test('') ? true : false) : false), offsetX: 0, offsetY: 0, easing: 'cubic-bezier(0.33, 1, 0.68, 1)', duration: '0ms' }); }); preloadImage('https://static.tildacdn.net/tild6539-6164-4933-a262-393238383063/Group_21608.svg'); } if ('') { checkArrCursor('create'); if (window.arrAnnexxCursorImage.bodyReady) return false; else window.arrAnnexxCursorImage.bodyReady = true; if (false) { if (window.arrAnnexxCursorImage.bodyHideCursor) return false; else window.arrAnnexxCursorImage.bodyHideCursor = true; } if (!cursorEl) { document.body.insertAdjacentHTML('beforeend', `<img class="annexxCursorImage" src=""></img>`); cursorEl = document.querySelector('.annexxCursorImage'); } if (!window.arrAnnexxCursorImage.cursorEl) window.arrAnnexxCursorImage.cursorEl = cursorEl; annexxAddStyle('013', ` .annexxCursorImage { position: fixed; transition: width 300ms ease 0s, transform 300ms ease 0s; pointer-events: none; transform: translate(-50%, -50%) scale(0); -webkit-filter: drop-shadow(0px 0px 0px rgba(255, 255, 255, 0)); filter: drop-shadow(0px 0px 0px rgba(255, 255, 255, 0)); } .annexxCursorImage.annexxCursorVisible { transform: translate(-50%, -50%) scale(1); } `); window.arrAnnexxCursorImage.body = { el: document.body, width: '30px', mixBlendMode: 'normal', zIndex: 10000000000, image: '', offsetX: 0, offsetY: 0, easing: 'linear', duration: '0ms' }; preloadImage(''); } if (checkArrCursor('check') && !window.arrAnnexxCursorImage.readyMove) { window.arrAnnexxCursorImage.readyMove = true; document.querySelector("#allrecords").insertAdjacentHTML("beforeend", "<a id='annexx-cursor-link' style='display: none;'></a>"); let cursorLinkButton = document.querySelector("#annexx-cursor-link"), cursorX, cursorY; document.addEventListener("click", function (e) { if (cursorLinkButton.href && !e.target.href) { cursorLinkButton.click(); } }); function cursor(e, clickEvent) { let path = clickEvent ? (function () { let bl; return Array.from(document.elementsFromPoint(cursorX, cursorY)).filter(e => { if (!bl) { if (e.classList.contains('r')) bl = true; return true; } else return false; }) }()) : e.composedPath(), has = false, iframe = false, body = false; function checkIframeUnderCursor() { return document.elementsFromPoint(clickEvent ? cursorX : e.clientX, clickEvent ? cursorY : e.clientY).some(function (e) { let children = Array.from(e.children); if (children.length) { return children.some(e => e.tagName === 'IFRAME' && !/jsbridge/i.test(e.id) && !/join-ad-interest-group/i.test(e.allow)); } else return false; }); } if (checkIframeUnderCursor()) { document.body.classList.remove('annexxFixCursorIframe'); has = true; iframe = true; } else document.body.classList.add('annexxFixCursorIframe'); let offsetX, offsetY; cursorLinkButton.removeAttribute("href"); cursorLinkButton.removeAttribute("target"); if (!has) { path.forEach(function (pathEl) { for (let el of window.arrAnnexxCursorImage.elements) { if (el.el === pathEl) { has = true; if (window.arrAnnexxCursorImage.cursorEl.src !== el.image) window.arrAnnexxCursorImage.cursorEl.src = el.image; if (el.link) { cursorLinkButton.setAttribute("href", el.link); cursorLinkButton.setAttribute("target", el.linknewwindow ? "_blank" : "_self"); } Object.assign(window.arrAnnexxCursorImage.cursorEl.style, { 'width': el.width, 'mix-blend-mode': el.mixBlendMode, 'z-index': el.zIndex, 'transition-timing-function': el.easing, 'transition-duration': el.duration }); offsetX = el.offsetX; offsetY = el.offsetY; } } }); } if (!has) { path.forEach(function (pathEl) { for (let el of window.arrAnnexxCursorImage.blocks) { if (el.el === pathEl) { has = true; if (window.arrAnnexxCursorImage.cursorEl.src !== el.image) window.arrAnnexxCursorImage.cursorEl.src = el.image; if (el.link) { cursorLinkButton.setAttribute("href", el.link); cursorLinkButton.setAttribute("target", el.linknewwindow ? "_blank" : "_self"); } Object.assign(window.arrAnnexxCursorImage.cursorEl.style, { 'width': el.width, 'mix-blend-mode': el.mixBlendMode, 'z-index': el.zIndex, 'transition-timing-function': el.easing, 'transition-duration': el.duration }); offsetX = el.offsetX; offsetY = el.offsetY; } } }); } if (!has && window.arrAnnexxCursorImage.bodyReady) { /* path.forEach(function(pathEl) { if (window.arrAnnexxCursorImage.body.el === pathEl) { */ let el = window.arrAnnexxCursorImage.body; has = true; body = true; if (window.arrAnnexxCursorImage.cursorEl.src !== el.image) window.arrAnnexxCursorImage.cursorEl.src = el.image; Object.assign(window.arrAnnexxCursorImage.cursorEl.style, { 'width': el.width, 'mix-blend-mode': el.mixBlendMode, 'z-index': el.zIndex, 'transition-timing-function': el.easing, 'transition-duration': el.duration }); offsetX = el.offsetX; offsetY = el.offsetY; /*} });*/ } Object.assign(window.arrAnnexxCursorImage.cursorEl.style, { 'left': ((clickEvent ? cursorX : e.clientX) + offsetX) + 'px', 'top': ((clickEvent ? cursorY : e.clientY) - offsetY) + 'px' }); if (has && !iframe) window.arrAnnexxCursorImage.cursorEl.classList.add('annexxCursorVisible'); else window.arrAnnexxCursorImage.cursorEl.classList.remove('annexxCursorVisible'); if (window.arrAnnexxCursorImage.bodyHideCursor || body && false) document.body.classList.add('annexxHideBodyCursor'); else document.body.classList.remove('annexxHideBodyCursor'); if (!clickEvent) { if (window.arrAnnexxCursorImage.arrActiveEl && window.arrAnnexxCursorImage.arrActiveEl.some(el => el === e.target || el === e.target.closest('.t396__elem'))) window.arrAnnexxCursorImage.cursorEl.classList.add('annexxCursorZoom'); else window.arrAnnexxCursorImage.cursorEl.classList.remove('annexxCursorZoom'); } else { let e = document.elementFromPoint(cursorX, cursorY); if (window.arrAnnexxCursorImage.arrActiveEl && window.arrAnnexxCursorImage.arrActiveEl.some(el => el === e || el === e.closest('.t396__elem'))) window.arrAnnexxCursorImage.cursorEl.classList.add('annexxCursorZoom'); else window.arrAnnexxCursorImage.cursorEl.classList.remove('annexxCursorZoom'); } } document.addEventListener('pointermove', cursor); document.addEventListener('click', function (e) { setTimeout(function () { cursorX = e.clientX; cursorY = e.clientY; cursor(undefined, true); }, 10); }); if (true) { document.addEventListener('scroll', function () { if (window.arrAnnexxCursorImage.bodyReady) { let el = window.arrAnnexxCursorImage.body; if (window.arrAnnexxCursorImage.cursorEl.src !== el.image) window.arrAnnexxCursorImage.cursorEl.src = el.image; Object.assign(window.arrAnnexxCursorImage.cursorEl.style, { 'width': el.width, 'mix-blend-mode': el.mixBlendMode, 'z-index': el.zIndex, 'transition-timing-function': el.easing, 'transition-duration': el.duration }); } else window.arrAnnexxCursorImage.cursorEl.classList.remove('annexxCursorVisible'); }); } } if ('' && false) { ''.split(/,\s|,/g).forEach(function (e) { annexxAddStyle('013', ` ${e}, ${e} video::-webkit-media-controls-fullscreen-button, ${e} video::-webkit-media-controls-play-button, ${e} video::-webkit-media-controls-timeline, ${e} video::-webkit-media-controls-current-time-display, ${e} video::-webkit-media-controls-time-remaining-display, ${e} video::-webkit-media-controls-mute-button, ${e} video::-webkit-media-controls-toggle-closed-captions-button, ${e} video::-webkit-media-controls-volume-slider, ${e} *, ${e} .tn-elem:not(.tn-elem__gallery_arrows-cursor) .t-slds {cursor: none !important;} `); }); } if ('#rec692190873' && true) { '#rec692190873'.split(/,\s|,/g).forEach(function (e) { annexxAddStyle('013', ` ${e}, ${e} video::-webkit-media-controls-fullscreen-button, ${e} video::-webkit-media-controls-play-button, ${e} video::-webkit-media-controls-timeline, ${e} video::-webkit-media-controls-current-time-display, ${e} video::-webkit-media-controls-time-remaining-display, ${e} video::-webkit-media-controls-mute-button, ${e} video::-webkit-media-controls-toggle-closed-captions-button, ${e} video::-webkit-media-controls-volume-slider, ${e} * {cursor: none;} `); }); } window.addEventListener('load', function () { if (!createArrayOK) return false; addArrAnnexxCursorImage(); if (!false && isMobile && !window.arrAnnexxCursorImage.mobileOn) { window.arrAnnexxCursorImage.mobileOn = true; window.addEventListener('touchstart', function (e) { if (window.arrAnnexxCursorImage.cursorEl.classList.contains('annexxCursorVisible')) { window.arrAnnexxCursorImage.cursorEl.classList.remove('annexxCursorVisible'); } }); } }); if ('' && '') { document.addEventListener("click", function () { setTimeout(addElementsToArray, 100); setTimeout(addElementsToArray, 500); }); } }); }()); </script>


                    </div>
                </div>
            </div>
        </div>
        <div id="rec692190874" class="r t-rec" style=" " data-animationappear="off" data-record-type="131"><!-- T123 -->
            <div class="t123">
                <div class="t-container_100 ">
                    <div class="t-width t-width_100 ">

                        <script src="./unpkg.com/scrollbooster%403.0.2/dist/scrollbooster.min.js" defer></script>

                        <script>
                            $(function () {

                                // Укажи ID Zero блока и включи overflow: auto
                                const blockId = '#rec692190873';

                                $(blockId + ' .t396__artboard').addClass('scrollbooster-viewport').wrapInner('<div class="scrollbooster-content"></div>');
                                $(blockId + ' .t396').css('overflow', 'hidden');

                                new ScrollBooster({
                                    viewport: $(blockId + ' .scrollbooster-viewport')[0],
                                    content: $(blockId + ' .scrollbooster-content')[0],
                                    scrollMode: 'native',
                                    pointerMode: 'mouse',
                                    bounce: false,
                                    onPointerDown: function () { $(blockId + ' *:focus').blur() }
                                });

                            });
                        </script>

                        <style>
                            .scrollbooster-viewport {
                                cursor: -webkit-grab;
                                cursor: grab;
                                padding-bottom: 30px;
                                margin-bottom: -30px;
                            }

                            .scrollbooster-viewport:active {
                                cursor: -webkit-grabbing;
                                cursor: grabbing;
                            }

                            .scrollbooster-content {
                                position: absolute;
                                width: 100%;
                                height: 100%;
                            }
                        </style>


                    </div>
                </div>
            </div>
        </div>
        <div id="rec692190872" class="r t-rec t-rec_pb_0" style="padding-bottom:0px; " data-animationappear="off"
            data-record-type="396"><!-- T396 -->
            <style>
                #rec692190872 .t396__artboard {
                    height: 30px;
                    background-color: #ffffff;
                    overflow: visible;
                }

                #rec692190872 .t396__filter {
                    height: 30px;
                }

                #rec692190872 .t396__carrier {
                    height: 30px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {

                    #rec692190872 .t396__artboard,
                    #rec692190872 .t396__filter,
                    #rec692190872 .t396__carrier {
                        height: 839px;
                    }

                    #rec692190872 .t396__filter {}

                    #rec692190872 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec692190872 .t396__artboard,
                    #rec692190872 .t396__filter,
                    #rec692190872 .t396__carrier {
                        height: 688px;
                    }

                    #rec692190872 .t396__filter {}

                    #rec692190872 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec692190872 .tn-elem[data-elem-id="1705325137699"] {
                    z-index: 2;
                    top: 0px;
                    left: 0px;
                    width: 50%;
                    height: 792px;
                }

                #rec692190872 .tn-elem[data-elem-id="1705325137699"] .tn-atom {
                    background-color: #ffffff;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190872 .tn-elem[data-elem-id="1705325137699"] {
                        width: 100%;
                        height: 675px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190872 .tn-elem[data-elem-id="1705325137699"] {
                        height: 607px;
                    }
                }

                #rec692190872 .tn-elem[data-elem-id="1705323233871"] {
                    z-index: 3;
                    top: 0px;
                    left: calc(100% - 50% + 0px);
                    width: 50%;
                    height: 105%;
                }

                #rec692190872 .tn-elem[data-elem-id="1705323233871"] .tn-atom {
                    background-color: #f2f2f2;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190872 .tn-elem[data-elem-id="1705323233871"] {
                        top: 775px;
                        width: 100%;
                        height: 63px;
                    }

                    #rec692190872 .tn-elem[data-elem-id="1705323233871"] .tn-atom {
                        background-position: center center;
                        opacity: 1;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190872 .tn-elem[data-elem-id="1705323233871"] {
                        top: 17px;
                        width: 100%;
                        height: 81px;
                    }

                    #rec692190872 .tn-elem[data-elem-id="1705323233871"] .tn-atom {
                        background-position: center center;
                        opacity: 1;
                    }
                }

                #rec692190872 .tn-elem[data-elem-id="1705323148601"] {
                    z-index: 4;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 2px;
                }

                #rec692190872 .tn-elem[data-elem-id="1705323148601"] .tn-atom {
                    background-color: #000000;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 639px) {}

                #rec692190872 .tn-elem[data-elem-id="1705323169588"] {
                    z-index: 5;
                    top: 0px;
                    left: calc(50% - 1px + 0px);
                    width: 2px;
                    height: 792px;
                }

                #rec692190872 .tn-elem[data-elem-id="1705323169588"] .tn-atom {
                    background-color: #000000;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190872 .tn-elem[data-elem-id="1705323169588"] {
                        top: 775px;
                        width: 100%;
                        height: 2px;
                    }

                    #rec692190872 .tn-elem[data-elem-id="1705323169588"] .tn-atom {
                        background-position: center center;
                        opacity: 1;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190872 .tn-elem[data-elem-id="1705323169588"] {
                        top: 624px;
                    }
                }

                #rec692190872 .tn-elem[data-elem-id="1705323253734"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 6;
                    top: 520px;
                    left: 30px;
                    width: 35%;
                }

                #rec692190872 .tn-elem[data-elem-id="1705323253734"] .tn-atom {
                    color: #000000;
                    font-size: 43px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    letter-spacing: -3px;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190872 .tn-elem[data-elem-id="1705323253734"] {
                        top: 520px;
                        left: 15px;
                        width: 77%;
                    }

                    #rec692190872 .tn-elem[data-elem-id="1705323253734"] .tn-atom {
                        font-size: 28px;
                        letter-spacing: -1.8px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190872 .tn-elem[data-elem-id="1705323253734"] {
                        top: 318px;
                        width: 95%;
                    }
                }

                #rec692190872 .tn-elem[data-elem-id="1705323279526"] {
                    z-index: 7;
                    top: 30px;
                    left: calc(100% - 11px + -30px);
                    width: 11px;
                }

                #rec692190872 .tn-elem[data-elem-id="1705323279526"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190872 .tn-elem[data-elem-id="1705323279526"] {
                        top: 794px;
                        left: calc(100% - 11px + -15px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190872 .tn-elem[data-elem-id="1705323279526"] {
                        top: 642px;
                    }
                }

                #rec692190872 .tn-elem[data-elem-id="1705323330245"] {
                    color: #2b559d;
                    z-index: 8;
                    top: 26px;
                    left: calc(50% - 600px + 630px);
                    width: 166px;
                }

                #rec692190872 .tn-elem[data-elem-id="1705323330245"] .tn-atom {
                    color: #2b559d;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.43;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190872 .tn-elem[data-elem-id="1705323330245"] {
                        top: 792px;
                        left: calc(50% - 320px + 15px);
                    }

                    #rec692190872 .tn-elem[data-elem-id="1705323330245"] .tn-atom {
                        font-size: 12px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190872 .tn-elem[data-elem-id="1705323330245"] {
                        top: 641px;
                        left: calc(50% - 160px + 15px);
                    }
                }

                #rec692190872 .tn-elem[data-elem-id="1705323508408"] {
                    z-index: 9;
                    top: 30px;
                    left: 30px;
                    width: 460px;
                    height: 460px;
                }

                #rec692190872 .tn-elem[data-elem-id="1705323508408"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190872 .tn-elem[data-elem-id="1705323508408"] {
                        top: 30px;
                        left: 15px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190872 .tn-elem[data-elem-id="1705323508408"] {
                        top: 15px;
                        width: 289px;
                        height: 288px;
                    }
                }

                #rec692190872 .tn-elem[data-elem-id="1705323603454"] {
                    color: #8a8a8a;
                    text-align: LEFT;
                    z-index: 10;
                    top: 576px;
                    left: 30px;
                    width: 377px;
                }

                #rec692190872 .tn-elem[data-elem-id="1705323603454"] .tn-atom {
                    color: #8a8a8a;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.2;
                    font-weight: 690;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190872 .tn-elem[data-elem-id="1705323603454"] {
                        top: 558px;
                        left: 15px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190872 .tn-elem[data-elem-id="1705323603454"] {
                        top: 355px;
                        left: 15px;
                        width: 266px;
                    }
                }

                #rec692190872 .tn-elem[data-elem-id="1705323624405"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 11;
                    top: 623px;
                    left: 30px;
                    width: 556px;
                }

                #rec692190872 .tn-elem[data-elem-id="1705323624405"] .tn-atom {
                    color: #000000;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 420;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190872 .tn-elem[data-elem-id="1705323624405"] {
                        top: 605px;
                        left: 15px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190872 .tn-elem[data-elem-id="1705323624405"] {
                        top: 404px;
                        width: 90%;
                    }
                }
            </style>
            <?php if(isset($team_view) &&  $team_view['view'] == 1):?>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="692190872" data-artboard-screens="320,640,1200"
                    data-artboard-height="30" data-artboard-valign="top" data-artboard-upscale="grid"
                    data-artboard-ovrflw="visible" data-artboard-height-res-320="688"
                    data-artboard-height-res-640="839">
                    <div class="t396__carrier" data-artboard-recid="692190872"></div>
                    <div class="t396__filter" data-artboard-recid="692190872"></div>
                    <div class='t396__elem tn-elem white tn-elem__6921908721705325137699' data-elem-id='1705325137699'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="0"
                        data-field-height-value="792" data-field-width-value="50" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="%" data-field-height-res-320-value="607"
                        data-field-height-res-640-value="675" data-field-width-res-640-value="100">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908721705323233871' data-elem-id='1705323233871'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="0"
                        data-field-height-value="105" data-field-width-value="50" data-field-axisy-value="top"
                        data-field-axisx-value="right" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="%"
                        data-field-widthunits-value="%" data-field-top-res-320-value="17"
                        data-field-height-res-320-value="81" data-field-width-res-320-value="100"
                        data-field-axisy-res-320-value="bottom" data-field-heightunits-res-320-value="px"
                        data-field-top-res-640-value="775" data-field-height-res-640-value="63"
                        data-field-width-res-640-value="100" data-field-heightunits-res-640-value="px">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem ue tn-elem__6921908721705323148601' data-elem-id='1705323148601'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="0"
                        data-field-height-value="2" data-field-width-value="100" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="%">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem ue tn-elem__6921908721705323169588' data-elem-id='1705323169588'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="0"
                        data-field-height-value="792" data-field-width-value="2" data-field-axisy-value="top"
                        data-field-axisx-value="center" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="624"
                        data-field-top-res-640-value="775" data-field-height-res-640-value="2"
                        data-field-width-res-640-value="100" data-field-axisy-res-640-value="top"
                        data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                        data-field-leftunits-res-640-value="px" data-field-widthunits-res-640-value="%">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem ue tn-elem__6921908721705323253734' data-elem-id='1705323253734'
                        data-elem-type='text' data-field-top-value="520" data-field-left-value="30"
                        data-field-width-value="35" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="318" data-field-width-res-320-value="95"
                        data-field-axisy-res-320-value="top" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-top-res-640-value="520" data-field-left-res-640-value="15"
                        data-field-width-res-640-value="77">
                        <div class='tn-atom' field='tn_text_1705323253734'>Rayyan Ali Khan</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908721705323279526' data-elem-id='1705323279526'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="-30"
                        data-field-width-value="11" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="11" data-field-fileheight-value="13"
                        data-field-top-res-320-value="642" data-field-top-res-640-value="794"
                        data-field-left-res-640-value="-15">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3430-6561-4335-b234-646462623635/1.svg'
                                alt='' imgfield='tn_img_1705323279526' /></div>
                    </div>
                    <div class='t396__elem tn-elem ue tn-elem__6921908721705323330245' data-elem-id='1705323330245'
                        data-elem-type='text' data-field-top-value="26" data-field-left-value="630"
                        data-field-width-value="166" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="641" data-field-left-res-320-value="15"
                        data-field-top-res-640-value="792" data-field-left-res-640-value="15"
                        data-field-axisy-res-640-value="top" data-field-container-res-640-value="window"
                        data-field-topunits-res-640-value="px" data-field-leftunits-res-640-value="px">
                        <div class='tn-atom' field='tn_text_1705323330245'>team</div>
                    </div>
                    <div class='t396__elem tn-elem ue tn-elem__6921908721705323508408' data-elem-id='1705323508408'
                        data-elem-type='shape' data-field-top-value="30" data-field-left-value="30"
                        data-field-height-value="460" data-field-width-value="460" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="15"
                        data-field-height-res-320-value="288" data-field-width-res-320-value="289"
                        data-field-top-res-640-value="30" data-field-left-res-640-value="15">
                        <div class='tn-atom t-bgimg'
                        data-original="images/image.jpg">
                    </div>
                    </div>
                    <div class='t396__elem tn-elem ue tn-elem__6921908721705323603454' data-elem-id='1705323603454'
                        data-elem-type='text' data-field-top-value="576" data-field-left-value="30"
                        data-field-width-value="377" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="355" data-field-left-res-320-value="15"
                        data-field-width-res-320-value="266" data-field-axisy-res-320-value="top"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="558"
                        data-field-left-res-640-value="15" data-field-axisy-res-640-value="top">
                        <div class='tn-atom' field='tn_text_1705323603454'>CEO &amp; FOUNDER OF Nezdeck
                        </div>
                    </div>
                    <div class='t396__elem tn-elem ue tn-elem__6921908721705323624405' data-elem-id='1705323624405'
                        data-elem-type='text' data-field-top-value="623" data-field-left-value="30"
                        data-field-width-value="556" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="404" data-field-width-res-320-value="90"
                        data-field-axisy-res-320-value="top" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-widthunits-res-320-value="%" data-field-top-res-640-value="605"
                        data-field-left-res-640-value="15" data-field-axisy-res-640-value="top"
                        data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                        data-field-leftunits-res-640-value="px">
                        <div class='tn-atom' field='tn_text_1705323624405'>Economic education and experience
                            in&nbsp;analytics allow me&nbsp;to&nbsp;easily navigate in&nbsp;complex projects. Web design
                            and development are an&nbsp;ideal platform for this because this field combines both
                            marketing and analytics with creativity.</div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <script>t_onReady(function () {
                    t_onFuncLoad('t396_init', function () {
                        t396_init('692190872');
                    });
                });</script><!-- /T396 -->
        </div>
        <div id="rec692190873" class="r t-rec t-rec_pb_0" style="padding-bottom:0px; F" data-animationappear="off"
            data-record-type="396"><!-- T396 -->
            <style>
                #rec692190873 .t396__artboard {
                    height: 762px;
                    background-color: #f2f2f2;
                    overflow: auto;
                }

                #rec692190873 .t396__filter {
                    height: 762px;
                }

                #rec692190873 .t396__carrier {
                    height: 762px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {

                    #rec692190873 .t396__artboard,
                    #rec692190873 .t396__filter,
                    #rec692190873 .t396__carrier {
                        height: 514px;
                    }

                    #rec692190873 .t396__filter {}

                    #rec692190873 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec692190873 .t396__artboard,
                    #rec692190873 .t396__filter,
                    #rec692190873 .t396__carrier {
                        height: 454px;
                    }

                    #rec692190873 .t396__filter {}

                    #rec692190873 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1705324677287"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 2;
                    top: 489px;
                    left: calc(50% - 600px + 1210px);
                    width: 100px;
                }

                #rec692190873 .tn-elem[data-elem-id="1705324677287"] .tn-atom {
                    color: #000000;
                    font-size: 43px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    letter-spacing: -3px;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324677287"] {
                        top: 260px;
                        left: calc(50% - 320px + 595px);
                        width: 40px;
                    }

                    #rec692190873 .tn-elem[data-elem-id="1705324677287"] .tn-atom {
                        font-size: 28px;
                        letter-spacing: -1.8px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324677287"] {
                        top: 245px;
                        left: calc(50% - 160px + 595px);
                        width: 95px;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1705324677293"] {
                    color: #8a8a8a;
                    text-align: LEFT;
                    z-index: 3;
                    top: 545px;
                    left: calc(50% - 600px + 1210px);
                    width: 165px;
                }

                #rec692190873 .tn-elem[data-elem-id="1705324677293"] .tn-atom {
                    color: #8a8a8a;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.2;
                    font-weight: 690;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324677293"] {
                        top: 297px;
                        left: calc(50% - 320px + 595px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324677293"] {
                        top: 282px;
                        left: calc(50% - 160px + 595px);
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1705324677299"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 4;
                    top: 592px;
                    left: calc(50% - 600px + 1210px);
                    width: 199px;
                }

                #rec692190873 .tn-elem[data-elem-id="1705324677299"] .tn-atom {
                    color: #000000;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 420;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324677299"] {
                        top: 344px;
                        left: calc(50% - 320px + 595px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324677299"] {
                        top: 314px;
                        left: calc(50% - 160px + 595px);
                        width: 240px;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1705324677303"] {
                    z-index: 7;
                    top: 259px;
                    left: calc(50% - 600px + 1210px);
                    width: 200px;
                    height: 200px;
                }

                #rec692190873 .tn-elem[data-elem-id="1705324677303"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324677303"] {
                        top: 30px;
                        left: calc(50% - 320px + 595px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324677303"] {
                        top: 30px;
                        left: calc(50% - 160px + 595px);
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1705323946678"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 5;
                    top: 489px;
                    left: calc(50% - 600px + 920px);
                    width: 100px;
                }

                #rec692190873 .tn-elem[data-elem-id="1705323946678"] .tn-atom {
                    color: #000000;
                    font-size: 43px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    letter-spacing: -3px;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1705323946678"] {
                        top: 260px;
                        left: calc(50% - 320px + 305px);
                        width: 40px;
                    }

                    #rec692190873 .tn-elem[data-elem-id="1705323946678"] .tn-atom {
                        font-size: 28px;
                        letter-spacing: -1.8px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1705323946678"] {
                        top: 245px;
                        left: calc(50% - 160px + 305px);
                        width: 95px;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1705323946683"] {
                    color: #8a8a8a;
                    text-align: LEFT;
                    z-index: 6;
                    top: 545px;
                    left: calc(50% - 600px + 920px);
                    width: 232px;
                }

                #rec692190873 .tn-elem[data-elem-id="1705323946683"] .tn-atom {
                    color: #8a8a8a;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.2;
                    font-weight: 690;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1705323946683"] {
                        top: 297px;
                        left: calc(50% - 320px + 305px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1705323946683"] {
                        top: 282px;
                        left: calc(50% - 160px + 305px);
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1705323946692"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 8;
                    top: 592px;
                    left: calc(50% - 600px + 920px);
                    width: 220px;
                }

                #rec692190873 .tn-elem[data-elem-id="1705323946692"] .tn-atom {
                    color: #000000;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 420;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1705323946692"] {
                        top: 344px;
                        left: calc(50% - 320px + 305px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1705323946692"] {
                        top: 314px;
                        left: calc(50% - 160px + 305px);
                        width: 210px;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1705324575351"] {
                    z-index: 9;
                    top: 259px;
                    left: calc(50% - 600px + 920px);
                    width: 200px;
                    height: 200px;
                }

                #rec692190873 .tn-elem[data-elem-id="1705324575351"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324575351"] {
                        top: 30px;
                        left: calc(50% - 320px + 305px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324575351"] {
                        top: 30px;
                        left: calc(50% - 160px + 305px);
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1705324742998"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 10;
                    top: 489px;
                    left: calc(50% - 600px + 1500px);
                    width: 100px;
                }

                #rec692190873 .tn-elem[data-elem-id="1705324742998"] .tn-atom {
                    color: #000000;
                    font-size: 43px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    letter-spacing: -3px;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324742998"] {
                        top: 260px;
                        left: calc(50% - 320px + 885px);
                        width: 40px;
                    }

                    #rec692190873 .tn-elem[data-elem-id="1705324742998"] .tn-atom {
                        font-size: 28px;
                        letter-spacing: -1.8px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324742998"] {
                        top: 245px;
                        left: calc(50% - 160px + 885px);
                        width: 95px;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1705324743016"] {
                    color: #8a8a8a;
                    text-align: LEFT;
                    z-index: 11;
                    top: 545px;
                    left: calc(50% - 600px + 1500px);
                    width: 165px;
                }

                #rec692190873 .tn-elem[data-elem-id="1705324743016"] .tn-atom {
                    color: #8a8a8a;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.2;
                    font-weight: 690;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324743016"] {
                        top: 297px;
                        left: calc(50% - 320px + 885px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324743016"] {
                        top: 282px;
                        left: calc(50% - 160px + 885px);
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1705324743024"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 12;
                    top: 592px;
                    left: calc(50% - 600px + 1500px);
                    width: 220px;
                }

                #rec692190873 .tn-elem[data-elem-id="1705324743024"] .tn-atom {
                    color: #000000;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 420;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324743024"] {
                        top: 344px;
                        left: calc(50% - 320px + 885px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324743024"] {
                        top: 314px;
                        left: calc(50% - 160px + 885px);
                        width: 194px;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1705324743029"] {
                    z-index: 13;
                    top: 259px;
                    left: calc(50% - 600px + 1500px);
                    width: 200px;
                    height: 200px;
                }

                #rec692190873 .tn-elem[data-elem-id="1705324743029"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324743029"] {
                        top: 30px;
                        left: calc(50% - 320px + 885px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1705324743029"] {
                        top: 30px;
                        left: calc(50% - 160px + 885px);
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573940"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 14;
                    top: 489px;
                    left: calc(50% - 600px + 630px);
                    width: 229px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573940"] .tn-atom {
                    color: #000000;
                    font-size: 43px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    letter-spacing: -3px;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573940"] {
                        top: 260px;
                        left: calc(50% - 320px + 15px);
                        width: 40px;
                    }

                    #rec692190873 .tn-elem[data-elem-id="1718814573940"] .tn-atom {
                        font-size: 28px;
                        letter-spacing: -1.8px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573940"] {
                        top: 245px;
                        left: calc(50% - 160px + 15px);
                        width: 95px;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573944"] {
                    color: #8a8a8a;
                    text-align: LEFT;
                    z-index: 16;
                    top: 545px;
                    left: calc(50% - 600px + 630px);
                    width: 196px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573944"] .tn-atom {
                    color: #8a8a8a;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.2;
                    font-weight: 690;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573944"] {
                        top: 297px;
                        left: calc(50% - 320px + 15px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573944"] {
                        top: 282px;
                        left: calc(50% - 160px + 15px);
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573947"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 18;
                    top: 592px;
                    left: calc(50% - 600px + 630px);
                    width: 203px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573947"] .tn-atom {
                    color: #000000;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 420;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573947"] {
                        top: 344px;
                        left: calc(50% - 320px + 15px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573947"] {
                        top: 314px;
                        left: calc(50% - 160px + 15px);
                        width: 210px;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573950"] {
                    z-index: 19;
                    top: 259px;
                    left: calc(50% - 600px + 630px);
                    width: 200px;
                    height: 200px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573950"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573950"] {
                        top: 30px;
                        left: calc(50% - 320px + 15px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573950"] {
                        top: 30px;
                        left: calc(50% - 160px + 15px);
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573954"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 15;
                    top: 489px;
                    left: calc(50% - 600px + 2670px);
                    width: 119px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573954"] .tn-atom {
                    color: #000000;
                    font-size: 43px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    letter-spacing: -3px;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573954"] {
                        top: 260px;
                        left: calc(50% - 320px + 2055pxpx);
                        width: 40px;
                    }

                    #rec692190873 .tn-elem[data-elem-id="1718814573954"] .tn-atom {
                        font-size: 28px;
                        letter-spacing: -1.8px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573954"] {
                        top: 245px;
                        left: calc(50% - 160px + 2045px);
                        width: 95px;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573956"] {
                    color: #8a8a8a;
                    text-align: LEFT;
                    z-index: 17;
                    top: 545px;
                    left: calc(50% - 600px + 2670px);
                    width: 165px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573956"] .tn-atom {
                    color: #8a8a8a;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.2;
                    font-weight: 690;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573956"] {
                        top: 297px;
                        left: calc(50% - 320px + 2055pxpx);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573956"] {
                        top: 282px;
                        left: calc(50% - 160px + 2045px);
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573959"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 20;
                    top: 592px;
                    left: calc(50% - 600px + 2670px);
                    width: 211px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573959"] .tn-atom {
                    color: #000000;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 420;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573959"] {
                        top: 344px;
                        left: calc(50% - 320px + 2055pxpx);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573959"] {
                        top: 314px;
                        left: calc(50% - 160px + 2045px);
                        width: 204px;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573962"] {
                    z-index: 21;
                    top: 259px;
                    left: calc(50% - 600px + 2670px);
                    width: 200px;
                    height: 200px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573962"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573962"] {
                        top: 30px;
                        left: calc(50% - 320px + 2055pxpx);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573962"] {
                        top: 30px;
                        left: calc(50% - 160px + 2045px);
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573965"] {
                    z-index: 22;
                    top: 315px;
                    left: calc(50% - 600px + 2880px);
                    width: 30px;
                    height: 100px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573965"] .tn-atom {
                    background-color: #f2f2f2;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573965"] {
                        top: 76px;
                        left: calc(50% - 320px + 2255pxpx);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573965"] {
                        top: 88px;
                        left: calc(50% - 160px + 2245px);
                        width: 15px;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573991"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 28;
                    top: 489px;
                    left: calc(50% - 600px + 2380px);
                    width: 229px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573991"] .tn-atom {
                    color: #000000;
                    font-size: 43px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    letter-spacing: -3px;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573991"] {
                        top: 260px;
                        left: calc(50% - 320px + 1755px);
                        width: 40px;
                    }

                    #rec692190873 .tn-elem[data-elem-id="1718814573991"] .tn-atom {
                        font-size: 28px;
                        letter-spacing: -1.8px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573991"] {
                        top: 245px;
                        left: calc(50% - 160px + 1755px);
                        width: 95px;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573993"] {
                    color: #8a8a8a;
                    text-align: LEFT;
                    z-index: 30;
                    top: 545px;
                    left: calc(50% - 600px + 2380px);
                    width: 196px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573993"] .tn-atom {
                    color: #8a8a8a;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.2;
                    font-weight: 690;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573993"] {
                        top: 297px;
                        left: calc(50% - 320px + 1755px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573993"] {
                        top: 282px;
                        left: calc(50% - 160px + 1755px);
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573996"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 32;
                    top: 592px;
                    left: calc(50% - 600px + 2380px);
                    width: 203px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573996"] .tn-atom {
                    color: #000000;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 420;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573996"] {
                        top: 344px;
                        left: calc(50% - 320px + 1755px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573996"] {
                        top: 314px;
                        left: calc(50% - 160px + 1755px);
                        width: 210px;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573999"] {
                    z-index: 34;
                    top: 259px;
                    left: calc(50% - 600px + 2380px);
                    width: 200px;
                    height: 200px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573999"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573999"] {
                        top: 30px;
                        left: calc(50% - 320px + 1755px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573999"] {
                        top: 30px;
                        left: calc(50% - 160px + 1755px);
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573968"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 23;
                    top: 489px;
                    left: calc(50% - 600px + 1780px);
                    width: 118px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573968"] .tn-atom {
                    color: #000000;
                    font-size: 43px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    letter-spacing: -3px;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573968"] {
                        top: 260px;
                        left: calc(50% - 320px + 1175px);
                        width: 40px;
                    }

                    #rec692190873 .tn-elem[data-elem-id="1718814573968"] .tn-atom {
                        font-size: 28px;
                        letter-spacing: -1.8px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573968"] {
                        top: 245px;
                        left: calc(50% - 160px + 1175px);
                        width: 95px;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573971"] {
                    color: #8a8a8a;
                    text-align: LEFT;
                    z-index: 24;
                    top: 545px;
                    left: calc(50% - 600px + 1780px);
                    width: 207px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573971"] .tn-atom {
                    color: #8a8a8a;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.2;
                    font-weight: 690;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573971"] {
                        top: 297px;
                        left: calc(50% - 320px + 1175px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573971"] {
                        top: 282px;
                        left: calc(50% - 160px + 1175px);
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573974"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 25;
                    top: 592px;
                    left: calc(50% - 600px + 1780px);
                    width: 244px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573974"] .tn-atom {
                    color: #000000;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 420;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573974"] {
                        top: 344px;
                        left: calc(50% - 320px + 1175px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573974"] {
                        top: 314px;
                        left: calc(50% - 160px + 1175px);
                        width: 259px;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573977"] {
                    z-index: 26;
                    top: 259px;
                    left: calc(50% - 600px + 1780px);
                    width: 200px;
                    height: 200px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573977"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573977"] {
                        top: 30px;
                        left: calc(50% - 320px + 1175px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573977"] {
                        top: 30px;
                        left: calc(50% - 160px + 1175px);
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573980"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 27;
                    top: 489px;
                    left: calc(50% - 600px + 2070px);
                    width: 118px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573980"] .tn-atom {
                    color: #000000;
                    font-size: 43px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    letter-spacing: -3px;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573980"] {
                        top: 260px;
                        left: calc(50% - 320px + 1465px);
                        width: 40px;
                    }

                    #rec692190873 .tn-elem[data-elem-id="1718814573980"] .tn-atom {
                        font-size: 28px;
                        letter-spacing: -1.8px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573980"] {
                        top: 245px;
                        left: calc(50% - 160px + 1465px);
                        width: 95px;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573982"] {
                    color: #8a8a8a;
                    text-align: LEFT;
                    z-index: 29;
                    top: 545px;
                    left: calc(50% - 600px + 2070px);
                    width: 207px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573982"] .tn-atom {
                    color: #8a8a8a;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.2;
                    font-weight: 690;
                    text-transform: uppercase;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573982"] {
                        top: 297px;
                        left: calc(50% - 320px + 1465px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573982"] {
                        top: 282px;
                        left: calc(50% - 160px + 1465px);
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573985"] {
                    color: #000000;
                    text-align: LEFT;
                    z-index: 31;
                    top: 592px;
                    left: calc(50% - 600px + 2070px);
                    width: 244px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573985"] .tn-atom {
                    color: #000000;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.25;
                    font-weight: 420;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573985"] {
                        top: 344px;
                        left: calc(50% - 320px + 1465px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573985"] {
                        top: 314px;
                        left: calc(50% - 160px + 1465px);
                        width: 245px;
                    }
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573988"] {
                    z-index: 33;
                    top: 259px;
                    left: calc(50% - 600px + 2070px);
                    width: 200px;
                    height: 200px;
                }

                #rec692190873 .tn-elem[data-elem-id="1718814573988"] .tn-atom {
                    background-position: center center;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573988"] {
                        top: 30px;
                        left: calc(50% - 320px + 1465px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692190873 .tn-elem[data-elem-id="1718814573988"] {
                        top: 30px;
                        left: calc(50% - 160px + 1465px);
                    }
                }
            </style>
            <?php if(isset($team_view) &&  $team_view['view'] == 1):?>

            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="692190873" data-artboard-screens="320,640,1200"
                    data-artboard-height="762" data-artboard-valign="center" data-artboard-upscale="grid"
                    data-artboard-ovrflw="auto" data-artboard-height-res-320="454" data-artboard-height-res-640="514">
                    <div class="t396__carrier" data-artboard-recid="692190873"></div>
                    <div class="t396__filter" data-artboard-recid="692190873"></div>
                    <div class='t396__elem tn-elem text tn-elem__6921908731705324677287' data-elem-id='1705324677287'
                        data-elem-type='text' data-field-top-value="489" data-field-left-value="1210"
                        data-field-width-value="100" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="245" data-field-left-res-320-value="595"
                        data-field-width-res-320-value="95" data-field-axisy-res-320-value="top"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="260"
                        data-field-left-res-640-value="595" data-field-width-res-640-value="40">
                        <div class='tn-atom' field='tn_text_1705324677287'>Abdullah</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731705324677293' data-elem-id='1705324677293'
                        data-elem-type='text' data-field-top-value="545" data-field-left-value="1210"
                        data-field-width-value="165" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="282" data-field-left-res-320-value="595"
                        data-field-axisy-res-320-value="top" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-top-res-640-value="297" data-field-left-res-640-value="595"
                        data-field-axisy-res-640-value="top">
                        <div class='tn-atom' field='tn_text_1705324677293'>Brand & Lead UI/UX Designer</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731705324677299' data-elem-id='1705324677299'
                        data-elem-type='text' data-field-top-value="592" data-field-left-value="1210"
                        data-field-width-value="199" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="314" data-field-left-res-320-value="595"
                        data-field-width-res-320-value="240" data-field-container-res-320-value="window"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="344"
                        data-field-left-res-640-value="595" data-field-axisy-res-640-value="top"
                        data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                        data-field-leftunits-res-640-value="px">
                        <div class='tn-atom' field='tn_text_1705324677299'>manage Brand Visual Identity, Wireframing and
                            Prototyping, Interaction Designs.</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731705324677303' data-elem-id='1705324677303'
                        data-elem-type='shape' data-field-top-value="259" data-field-left-value="1210"
                        data-field-height-value="200" data-field-width-value="200" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="30"
                        data-field-left-res-320-value="595" data-field-container-res-320-value="window"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="30"
                        data-field-left-res-640-value="595">
                        <div class='tn-atom t-bgimg'
                            data-original="images/abd-02.jpg">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6921908731705323946678' data-elem-id='1705323946678'
                        data-elem-type='text' data-field-top-value="489" data-field-left-value="920"
                        data-field-width-value="100" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="245" data-field-left-res-320-value="305"
                        data-field-width-res-320-value="95" data-field-axisy-res-320-value="top"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="260"
                        data-field-left-res-640-value="305" data-field-width-res-640-value="40">
                        <div class='tn-atom' field='tn_text_1705323946678'>Siyara</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731705323946683' data-elem-id='1705323946683'
                        data-elem-type='text' data-field-top-value="545" data-field-left-value="920"
                        data-field-width-value="232" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="282" data-field-left-res-320-value="305"
                        data-field-axisy-res-320-value="top" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-top-res-640-value="297" data-field-left-res-640-value="305"
                        data-field-axisy-res-640-value="top">
                        <div class='tn-atom' field='tn_text_1705323946683'>Product Designer</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731705323946692' data-elem-id='1705323946692'
                        data-elem-type='text' data-field-top-value="592" data-field-left-value="920"
                        data-field-width-value="220" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="314" data-field-left-res-320-value="305"
                        data-field-width-res-320-value="210" data-field-top-res-640-value="344"
                        data-field-left-res-640-value="305" data-field-axisy-res-640-value="top"
                        data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                        data-field-leftunits-res-640-value="px">
                        <div class='tn-atom' field='tn_text_1705323946692'>Design product Packaging and handle customer support calls.</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731705324575351' data-elem-id='1705324575351'
                        data-elem-type='shape' data-field-top-value="259" data-field-left-value="920"
                        data-field-height-value="200" data-field-width-value="200" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="30"
                        data-field-left-res-320-value="305" data-field-container-res-320-value="window"
                        data-field-top-res-640-value="30" data-field-left-res-640-value="305">
                        <div class='tn-atom t-bgimg'
                            data-original="https://static.tildacdn.net/tild3364-6262-4263-a162-646364356564/_86_1.jpg">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6921908731705324742998' data-elem-id='1705324742998'
                        data-elem-type='text' data-field-top-value="489" data-field-left-value="1500"
                        data-field-width-value="100" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="245" data-field-left-res-320-value="885"
                        data-field-width-res-320-value="95" data-field-axisy-res-320-value="top"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="260"
                        data-field-left-res-640-value="885" data-field-width-res-640-value="40">
                        <div class='tn-atom' field='tn_text_1705324742998'>Arham</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731705324743016' data-elem-id='1705324743016'
                        data-elem-type='text' data-field-top-value="545" data-field-left-value="1500"
                        data-field-width-value="165" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="282" data-field-left-res-320-value="885"
                        data-field-axisy-res-320-value="top" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-top-res-640-value="297" data-field-left-res-640-value="885"
                        data-field-axisy-res-640-value="top">
                        <div class='tn-atom' field='tn_text_1705324743016'>Website Engineer</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731705324743024' data-elem-id='1705324743024'
                        data-elem-type='text' data-field-top-value="592" data-field-left-value="1500"
                        data-field-width-value="220" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="314" data-field-left-res-320-value="885"
                        data-field-width-res-320-value="194" data-field-container-res-320-value="window"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="344"
                        data-field-left-res-640-value="885" data-field-axisy-res-640-value="top"
                        data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                        data-field-leftunits-res-640-value="px">
                        <div class='tn-atom' field='tn_text_1705324743024'>Develop robust and complex websites with
                            responsive design.</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731705324743029' data-elem-id='1705324743029'
                        data-elem-type='shape' data-field-top-value="259" data-field-left-value="1500"
                        data-field-height-value="200" data-field-width-value="200" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="30"
                        data-field-left-res-320-value="885" data-field-container-res-320-value="window"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="30"
                        data-field-left-res-640-value="885">
                        <div class='tn-atom t-bgimg'
                            data-original="images/ar-01.jpg">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6921908731718814573940' data-elem-id='1718814573940'
                        data-elem-type='text' data-field-top-value="489" data-field-left-value="630"
                        data-field-width-value="229" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="245" data-field-left-res-320-value="15"
                        data-field-width-res-320-value="95" data-field-axisy-res-320-value="top"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="260"
                        data-field-left-res-640-value="15" data-field-width-res-640-value="40">
                        <div class='tn-atom' field='tn_text_1718814573940'>Fabiha</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731718814573944' data-elem-id='1718814573944'
                        data-elem-type='text' data-field-top-value="545" data-field-left-value="630"
                        data-field-width-value="196" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="282" data-field-left-res-320-value="15"
                        data-field-axisy-res-320-value="top" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-top-res-640-value="297" data-field-left-res-640-value="15"
                        data-field-axisy-res-640-value="top">
                        <div class='tn-atom' field='tn_text_1718814573944'>Social media Manager & Content Writer</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731718814573947' data-elem-id='1718814573947'
                        data-elem-type='text' data-field-top-value="592" data-field-left-value="630"
                        data-field-width-value="203" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="314" data-field-left-res-320-value="15"
                        data-field-width-res-320-value="210" data-field-container-res-320-value="window"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="344"
                        data-field-left-res-640-value="15" data-field-axisy-res-640-value="top"
                        data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                        data-field-leftunits-res-640-value="px">
                        <div class='tn-atom' field='tn_text_1718814573947'>Assist in managing the social media platforms for Nezdeck.</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731718814573950' data-elem-id='1718814573950'
                        data-elem-type='shape' data-field-top-value="259" data-field-left-value="630"
                        data-field-height-value="200" data-field-width-value="200" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="30"
                        data-field-left-res-320-value="15" data-field-container-res-320-value="window"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="30"
                        data-field-left-res-640-value="15">
                        <div class='tn-atom t-bgimg'
                            data-original="images/fab-02.jpg">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6921908731718814573991' data-elem-id='1718814573991'
                        data-elem-type='text' data-field-top-value="489" data-field-left-value="2380"
                        data-field-width-value="229" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="245" data-field-left-res-320-value="1755"
                        data-field-width-res-320-value="95" data-field-axisy-res-320-value="top"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="260"
                        data-field-left-res-640-value="1755" data-field-width-res-640-value="40">
                        <div class='tn-atom' field='tn_text_1718814573991'>Hashir</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731718814573993' data-elem-id='1718814573993'
                        data-elem-type='text' data-field-top-value="545" data-field-left-value="2380"
                        data-field-width-value="196" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="282" data-field-left-res-320-value="1755"
                        data-field-axisy-res-320-value="top" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-top-res-640-value="297" data-field-left-res-640-value="1755"
                        data-field-axisy-res-640-value="top">
                        <div class='tn-atom' field='tn_text_1718814573993'>Mobile App Engineer</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731718814573996' data-elem-id='1718814573996'
                        data-elem-type='text' data-field-top-value="592" data-field-left-value="2380"
                        data-field-width-value="203" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="314" data-field-left-res-320-value="1755"
                        data-field-width-res-320-value="210" data-field-container-res-320-value="window"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="344"
                        data-field-left-res-640-value="1755" data-field-axisy-res-640-value="top"
                        data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                        data-field-leftunits-res-640-value="px">
                        <div class='tn-atom' field='tn_text_1718814573996'>Develop and integrate new features based on
                            project requirements and user feedback.</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731718814573999' data-elem-id='1718814573999'
                        data-elem-type='shape' data-field-top-value="259" data-field-left-value="2380"
                        data-field-height-value="200" data-field-width-value="200" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="30"
                        data-field-left-res-320-value="1755" data-field-container-res-320-value="window"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="30"
                        data-field-left-res-640-value="1755">
                        <div class='tn-atom t-bgimg'
                            data-original="images/hashir-01.jpg">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6921908731718814573968' data-elem-id='1718814573968'
                        data-elem-type='text' data-field-top-value="489" data-field-left-value="1780"
                        data-field-width-value="118" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="245" data-field-left-res-320-value="1175"
                        data-field-width-res-320-value="95" data-field-axisy-res-320-value="top"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="260"
                        data-field-left-res-640-value="1175" data-field-width-res-640-value="40">
                        <div class='tn-atom' field='tn_text_1718814573968'>Zaid</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731718814573971' data-elem-id='1718814573971'
                        data-elem-type='text' data-field-top-value="545" data-field-left-value="1780"
                        data-field-width-value="207" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="282" data-field-left-res-320-value="1175"
                        data-field-axisy-res-320-value="top" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-top-res-640-value="297" data-field-left-res-640-value="1175"
                        data-field-axisy-res-640-value="top">
                        <div class='tn-atom' field='tn_text_1718814573971'>Ecommerce Store Manager</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731718814573974' data-elem-id='1718814573974'
                        data-elem-type='text' data-field-top-value="592" data-field-left-value="1780"
                        data-field-width-value="244" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="314" data-field-left-res-320-value="1175"
                        data-field-width-res-320-value="259" data-field-container-res-320-value="window"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="344"
                        data-field-left-res-640-value="1175" data-field-axisy-res-640-value="top"
                        data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                        data-field-leftunits-res-640-value="px">
                        <div class='tn-atom' field='tn_text_1718814573974'>Handle our online e-commerce platforms,
                            including Nezdeck.Store.</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731718814573977' data-elem-id='1718814573977'
                        data-elem-type='shape' data-field-top-value="259" data-field-left-value="1780"
                        data-field-height-value="200" data-field-width-value="200" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="30"
                        data-field-left-res-320-value="1175" data-field-container-res-320-value="window"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="30"
                        data-field-left-res-640-value="1175">
                        <div class='tn-atom t-bgimg'
                            data-original="images/zaid-01.jpg">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6921908731718814573980' data-elem-id='1718814573980'
                        data-elem-type='text' data-field-top-value="489" data-field-left-value="2070"
                        data-field-width-value="118" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="245" data-field-left-res-320-value="1465"
                        data-field-width-res-320-value="95" data-field-axisy-res-320-value="top"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="260"
                        data-field-left-res-640-value="1465" data-field-width-res-640-value="40">
                        <div class='tn-atom' field='tn_text_1718814573980'>Muhammad</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731718814573982' data-elem-id='1718814573982'
                        data-elem-type='text' data-field-top-value="545" data-field-left-value="2070"
                        data-field-width-value="207" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="282" data-field-left-res-320-value="1465"
                        data-field-axisy-res-320-value="top" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-top-res-640-value="297" data-field-left-res-640-value="1465"
                        data-field-axisy-res-640-value="top">
                        <div class='tn-atom' field='tn_text_1718814573982'>Software Engineer</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731718814573985' data-elem-id='1718814573985'
                        data-elem-type='text' data-field-top-value="592" data-field-left-value="2070"
                        data-field-width-value="244" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="314" data-field-left-res-320-value="1465"
                        data-field-width-res-320-value="245" data-field-container-res-320-value="window"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="344"
                        data-field-left-res-640-value="1465" data-field-axisy-res-640-value="top"
                        data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                        data-field-leftunits-res-640-value="px">
                        <div class='tn-atom' field='tn_text_1718814573985'>Develop softwares that uplift your bussiness
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921908731718814573988' data-elem-id='1718814573988'
                        data-elem-type='shape' data-field-top-value="259" data-field-left-value="2070"
                        data-field-height-value="200" data-field-width-value="200" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="30"
                        data-field-left-res-320-value="1465" data-field-container-res-320-value="window"
                        data-field-leftunits-res-320-value="px" data-field-top-res-640-value="30"
                        data-field-left-res-640-value="1465">
                        <div class='tn-atom t-bgimg'
                            data-original="images/mu-01.jpg">
                        </div>
                    </div>
                </div>
            </div>
           <?php endif; ?>
            <script>t_onReady(function () {
                    t_onFuncLoad('t396_init', function () {
                        t396_init('692190873');
                    });
                });</script><!-- /T396 -->
        </div>
        <div id="rec692511973" class="r t-rec" style=" " data-animationappear="off" data-record-type="131"><!-- T123 -->
            <div class="t123">
                <div class="t-container_100 ">
                    <div class="t-width t-width_100 ">

                        <style>
                            .ue {
                                z-index: 51 !important;
                            }

                            .gradient {
                                z-index: 50 !important;
                            }

                            .white {
                                z-index: 49 !important;
                            }
                        </style>


                    </div>
                </div>
            </div>
        </div>
        <div id="rec692197703" class="r t-rec" style=" " data-animationappear="off" data-record-type="396"><!-- T396 -->
            <style>
                #rec692197703 .t396__artboard {
                    z-index: 52;
                }

                #rec692197703 .t396__artboard {
                    height: 127px;
                    background-color: #ffffff;
                    overflow: visible;
                }

                #rec692197703 .t396__filter {
                    height: 127px;
                }

                #rec692197703 .t396__carrier {
                    height: 127px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {

                    #rec692197703 .t396__artboard,
                    #rec692197703 .t396__filter,
                    #rec692197703 .t396__carrier {}

                    #rec692197703 .t396__filter {}

                    #rec692197703 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 959px) {

                    #rec692197703 .t396__artboard,
                    #rec692197703 .t396__filter,
                    #rec692197703 .t396__carrier {}

                    #rec692197703 .t396__filter {}

                    #rec692197703 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec692197703 .t396__artboard,
                    #rec692197703 .t396__filter,
                    #rec692197703 .t396__carrier {}

                    #rec692197703 .t396__filter {}

                    #rec692197703 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 479px) {

                    #rec692197703 .t396__artboard,
                    #rec692197703 .t396__filter,
                    #rec692197703 .t396__carrier {
                        height: 60px;
                    }

                    #rec692197703 .t396__filter {}

                    #rec692197703 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec692197703 .tn-elem[data-elem-id="1705398802906"] {
                    z-index: 2;
                    top: 0px;
                    left: calc(100% - 50% + 0px);
                    width: 50%;
                    height: 100px;
                }

                #rec692197703 .tn-elem[data-elem-id="1705398802906"] .tn-atom {
                    background-color: #f2f2f2;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {
                    #rec692197703 .tn-elem[data-elem-id="1705398802906"] {
                        width: 100%;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692197703 .tn-elem[data-elem-id="1705398802906"] {
                        width: 100%;
                    }
                }

                @media screen and (max-width: 479px) {
                    #rec692197703 .tn-elem[data-elem-id="1705398802906"] {
                        width: 100%;
                        height: 100%;
                    }

                    #rec692197703 .tn-elem[data-elem-id="1705398802906"] .tn-atom {
                        background-position: center center;
                    }
                }

                #rec692197703 .tn-elem[data-elem-id="1705417247321"] {
                    z-index: 3;
                    top: 63px;
                    left: calc(50% - 50% + 0px);
                    width: 100%;
                    height: 51%;
                }

                #rec692197703 .tn-elem[data-elem-id="1705417247321"] .tn-atom {
                    border-radius: 0px;
                    background-color: #0b0b1c;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692197703 .tn-elem[data-elem-id="1705417247321"] {
                        top: 63px;
                    }
                }

                @media screen and (max-width: 959px) {
                    #rec692197703 .tn-elem[data-elem-id="1705417247321"] {
                        top: 63px;
                        left: calc(50% - 50% + 0px);
                    }
                }

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {
                    #rec692197703 .tn-elem[data-elem-id="1705417247321"] {
                        top: 30px;
                    }
                }

                #rec692197703 .tn-elem[data-elem-id="1705332964126"] {
                    z-index: 4;
                    top: 0px;
                    left: calc(50% - 50% + 0px);
                    width: 100%;
                    height: 100%;
                }

                #rec692197703 .tn-elem[data-elem-id="1705332964126"] .tn-atom {
                    border-radius: 30px;
                    background-color: #0b0b1c;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {
                    #rec692197703 .tn-elem[data-elem-id="1705332964126"] {
                        top: 0px;
                        left: calc(50% - 50% + 0px);
                    }
                }

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {
                    #rec692197703 .tn-elem[data-elem-id="1705332964126"] {
                        height: 100%;
                        border-radius: 20px;
                    }

                    #rec692197703 .tn-elem[data-elem-id="1705332964126"] .tn-atom {
                        border-radius: 20px;
                    }
                }

                #rec692197703 .tn-elem[data-elem-id="1705332964140"] {
                    color: #ffffff;
                    text-align: CENTER;
                    z-index: 5;
                    top: 17px;
                    left: calc(50% - 83px + 0px);
                    width: 166px;
                }

                #rec692197703 .tn-elem[data-elem-id="1705332964140"] .tn-atom {
                    color: #ffffff;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.43;
                    font-weight: 400;
                    opacity: 0.4;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 959px) {
                    #rec692197703 .tn-elem[data-elem-id="1705332964140"] .tn-atom {
                        font-size: 12px;
                    }
                }

                @media screen and (max-width: 639px) {}

                @media screen and (max-width: 479px) {
                    #rec692197703 .tn-elem[data-elem-id="1705332964140"] {
                        top: 13px;
                        left: calc(50% - 83px + 0px);
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="692197703" data-artboard-screens="320,480,640,960,1200"
                    data-artboard-height="127" data-artboard-valign="center" data-artboard-upscale="grid"
                    data-artboard-ovrflw="visible" data-artboard-height-res-320="60">
                    <div class="t396__carrier" data-artboard-recid="692197703"></div>
                    <div class="t396__filter" data-artboard-recid="692197703"></div>
                    <div class='t396__elem tn-elem tn-elem__6921977031705398802906' data-elem-id='1705398802906'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="0"
                        data-field-height-value="100" data-field-width-value="50" data-field-axisy-value="top"
                        data-field-axisx-value="right" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="%" data-field-height-res-320-value="100"
                        data-field-width-res-320-value="100" data-field-heightunits-res-320-value="%"
                        data-field-width-res-480-value="100" data-field-width-res-640-value="100">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921977031705417247321' data-elem-id='1705417247321'
                        data-elem-type='shape' data-field-top-value="63" data-field-left-value="0"
                        data-field-height-value="51" data-field-width-value="100" data-field-axisy-value="top"
                        data-field-axisx-value="center" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="%"
                        data-field-widthunits-value="%" data-field-top-res-320-value="30"
                        data-field-top-res-640-value="63" data-field-left-res-640-value="0"
                        data-field-top-res-960-value="63">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921977031705332964126' data-elem-id='1705332964126'
                        data-elem-type='shape' data-field-top-value="0" data-field-left-value="0"
                        data-field-height-value="100" data-field-width-value="100" data-field-axisy-value="top"
                        data-field-axisx-value="center" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="%"
                        data-field-widthunits-value="%" data-field-height-res-320-value="100"
                        data-field-top-res-640-value="0" data-field-left-res-640-value="0">
                        <div class='tn-atom'></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6921977031705332964140' data-elem-id='1705332964140'
                        data-elem-type='text' data-field-top-value="17" data-field-left-value="0"
                        data-field-width-value="166" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="13" data-field-left-res-320-value="0">
                        <div class='tn-atom' field='tn_text_1705332964140'>reviews</div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t396_init', function () {
                        t396_init('692197703');
                    });
                });</script><!-- /T396 -->
        </div>
        <div id="rec692198616" class="r t-rec t-rec_pt_15 t-rec_pt-res-480_0 t-rec_pb_90 t-rec_pb-res-480_60"
            style="padding-top:15px;padding-bottom:90px;background-color:#0b0b1c; " data-animationappear="off"
            data-record-type="605" data-bg-color="#0b0b1c"><!-- t605 -->
            <div class="t605 t605__witharrows">
                <div class="t-slds" style="visibility: hidden;" aria-roledescription="carousel" aria-label="Слайдер">
                    <div class="t-slds__main t-container">
                        <ul role="list" class="t-slds__arrow_container">
                            <style type="text/css">
                                #rec692198616 .t-slds__arrow_wrapper:hover .t-slds__arrow-withbg {
                                    border-color: #000000 !important;
                                    background-color: rgba(214, 214, 214, 1) !important;
                                }

                                #rec692198616 .t-slds__arrow-withbg:focus-visible {
                                    border-color: #000000 !important;
                                    background-color: rgba(214, 214, 214, 1) !important;
                                }
                            </style>
                            <li class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left" data-slide-direction="left">
                                <button type="button" class="t-slds__arrow t-slds__arrow-left t-slds__arrow-withbg"
                                    aria-controls="carousel_692198616" aria-disabled="false"
                                    aria-label="Предыдущий слайд"
                                    style="width: 40px; height: 40px;background-color: rgba(255,255,255,1);">
                                    <div class="t-slds__arrow_body t-slds__arrow_body-left" style="width: 10px;"><svg
                                            role="presentation" focusable="false" style="display: block"
                                            viewBox="0 0 10.6 18" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <style type="text/css">
                                                #rec692198616 .t-slds__arrow_wrapper polyline {
                                                    -webkit-transition: stroke ease-in-out .2s;
                                                    -moz-transition: stroke ease-in-out .2s;
                                                    -o-transition: stroke ease-in-out .2s;
                                                    transition: stroke ease-in-out .2s;
                                                }

                                                #rec692198616 .t-slds__arrow_wrapper:hover polyline {
                                                    stroke: #000000 !important;
                                                }

                                                #rec692198616 .t-slds__arrow:focus-visible polyline {
                                                    stroke: #000000 !important;
                                                }
                                            </style>
                                            <polyline fill="none" stroke="#000000" stroke-linejoin="butt"
                                                stroke-linecap="butt" stroke-width="2" points="1,1 9,9 1,17" />
                                        </svg></div>
                                </button>
                            </li>
                            <li class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right" data-slide-direction="right">
                                <button type="button" class="t-slds__arrow t-slds__arrow-right t-slds__arrow-withbg"
                                    aria-controls="carousel_692198616" aria-disabled="false"
                                    aria-label="Следующий слайд"
                                    style="width: 40px; height: 40px;background-color: rgba(255,255,255,1);">
                                    <div class="t-slds__arrow_body t-slds__arrow_body-right" style="width: 10px;"><svg
                                            role="presentation" focusable="false" style="display: block"
                                            viewBox="0 0 10.6 18" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <polyline fill="none" stroke="#000000" stroke-linejoin="butt"
                                                stroke-linecap="butt" stroke-width="2" points="1,1 9,9 1,17" />
                                        </svg></div>
                                </button>
                            </li>
                        </ul>
                        <div class="t-slds__container">
                            <div class="t-slds__items-wrapper t-slds_animated-slow" id="carousel_692198616"
                                data-slider-transition="500" data-slider-with-cycle="true"
                                data-slider-correct-height="true" data-auto-correct-mobile-width="false"
                                data-slider-timeout="10000" aria-roledescription="carousel" aria-live="off">
                                <div class="t-slds__item t-slds__item_active" data-slide-index="1" role="group"
                                    aria-roledescription="slide" aria-hidden="false" aria-label="1 из 7">
                                    <div class="t-width t-width_6 t-margin_auto">
                                        <div class="t-slds__wrapper t-align_center">
                                            <div class="t605__bgimg t605__img_circle t-bgimg "
                                                data-original="./static.tildacdn.net/tild3563-6331-4237-a331-376335313033/noroot.png"
                                                bgimgfield="li_img__2878426370980" data-animate-order="1"
                                                style="width: 120px; height: 120px; background-image: url('./thb.tildacdn.net/tild3563-6331-4237-a331-376335313033/-/resizeb/20x/noroot.png');"
                                                itemscope itemtype="http://schema.org/ImageObject">
                                                <meta itemprop="image"
                                                    content="./static.tildacdn.net/tild3563-6331-4237-a331-376335313033/noroot.png">
                                            </div>
                                            <div class="t605__text t-text t-text_md " field="li_text__2878426370980"
                                                data-animate-order="2" data-animate-delay="0.3">As a startup founder,
                                                partnering with Nezdeck has been invaluable. They understood
                                                our unique challenges and provided scalable solutions that helped us
                                                launch and grow our platform successfully. Highly recommend their
                                                services for any tech startup.</div>
                                            <div class="t605__title t-name t-name_lg " field="li_title__2878426370980"
                                                data-animate-order="3" data-animate-delay="0.3">Michael Lee</div>
                                            <div class="t605__descr t-descr t-descr_xxs "
                                                field="li_descr__2878426370980" data-animate-order="4"
                                                data-animate-delay="0.2">Founder of Startech Solutions</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="t-slds__item" data-slide-index="2" role="group" aria-roledescription="slide"
                                    aria-hidden="true" aria-label="2 из 7">
                                    <div class="t-width t-width_6 t-margin_auto">
                                        <div class="t-slds__wrapper t-align_center">
                                            <div class="t605__bgimg t605__img_circle t-bgimg "
                                                data-original="./static.tildacdn.net/tild6538-3135-4131-b737-336233393963/noroot.png"
                                                bgimgfield="li_img__1707472904722" data-animate-order="1"
                                                style="width: 120px; height: 120px; background-image: url('./thb.tildacdn.net/tild6538-3135-4131-b737-336233393963/-/resizeb/20x/noroot.png');"
                                                itemscope itemtype="http://schema.org/ImageObject">
                                                <meta itemprop="image"
                                                    content="./static.tildacdn.net/tild6538-3135-4131-b737-336233393963/noroot.png">
                                            </div>
                                            <div class="t605__text t-text t-text_md " field="li_text__1707472904722"
                                                data-animate-order="2" data-animate-delay="0.3">Choosing Nezdeck was one of the best decisions we made for our IT infrastructure.
                                                Their team's expertise in software development and cybersecurity has
                                                strengthened our company's security posture and optimized our IT
                                                operations.</div>
                                            <div class="t605__title t-name t-name_lg " field="li_title__1707472904722"
                                                data-animate-order="3" data-animate-delay="0.3">Emily Brown</div>
                                            <div class="t605__descr t-descr t-descr_xxs "
                                                field="li_descr__1707472904722" data-animate-order="4"
                                                data-animate-delay="0.2">IT Manager at Dynamic Enterprises</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="t-slds__item" data-slide-index="3" role="group" aria-roledescription="slide"
                                    aria-hidden="true" aria-label="3 из 7">
                                    <div class="t-width t-width_6 t-margin_auto">
                                        <div class="t-slds__wrapper t-align_center">
                                            <div class="t605__bgimg t605__img_circle t-bgimg "
                                                data-original="./static.tildacdn.net/tild6536-3935-4664-a633-366538653866/noroot.png"
                                                bgimgfield="li_img__1707472967075" data-animate-order="1"
                                                style="width: 120px; height: 120px; background-image: url('./thb.tildacdn.net/tild6536-3935-4664-a633-366538653866/-/resizeb/20x/noroot.png');"
                                                itemscope itemtype="http://schema.org/ImageObject">
                                                <meta itemprop="image"
                                                    content="./static.tildacdn.net/tild6536-3935-4664-a633-366538653866/noroot.png">
                                            </div>
                                            <div class="t605__text t-text t-text_md " field="li_text__1707472967075"
                                                data-animate-order="2" data-animate-delay="0.3">We've partnered with Nezdeck for several years now, and they consistently deliver
                                                exceptional results. Their attention to detail and responsiveness to our
                                                needs have made a significant impact on our business efficiency and
                                                growth.</div>
                                            <div class="t605__title t-name t-name_lg " field="li_title__1707472967075"
                                                data-animate-order="3" data-animate-delay="0.3">David Johnson</div>
                                            <div class="t605__descr t-descr t-descr_xxs "
                                                field="li_descr__1707472967075" data-animate-order="4"
                                                data-animate-delay="0.2">CFO at FinanceTech Innovations</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="t-slds__item" data-slide-index="4" role="group" aria-roledescription="slide"
                                    aria-hidden="true" aria-label="4 из 7">
                                    <div class="t-width t-width_6 t-margin_auto">
                                        <div class="t-slds__wrapper t-align_center">
                                            <div class="t605__bgimg t605__img_circle t-bgimg "
                                                data-original="./static.tildacdn.net/tild6661-3538-4463-b333-636637653665/noroot.png"
                                                bgimgfield="li_img__1707473094047" data-animate-order="1"
                                                style="width: 120px; height: 120px; background-image: url('./thb.tildacdn.net/tild6661-3538-4463-b333-636637653665/-/resizeb/20x/noroot.png');"
                                                itemscope itemtype="http://schema.org/ImageObject">
                                                <meta itemprop="image"
                                                    content="./static.tildacdn.net/tild6661-3538-4463-b333-636637653665/noroot.png">
                                            </div>
                                            <div class="t605__text t-text t-text_md " field="li_text__1707473094047"
                                                data-animate-order="2" data-animate-delay="0.3">Anastasia,
                                                I&nbsp;am&nbsp;so glad I&nbsp;turned to&nbsp;you! It’s important when
                                                you are heard, when someone delves into the process, interested
                                                in&nbsp;the outcome👍🏻 and I&nbsp;am&nbsp;100% satisfied with the
                                                result!!! I&nbsp;am&nbsp;very grateful to&nbsp;you for your work,
                                                patience, and loyalty💫</div>
                                            <div class="t605__title t-name t-name_lg " field="li_title__1707473094047"
                                                data-animate-order="3" data-animate-delay="0.3">Taya Chalova</div>
                                            <div class="t605__descr t-descr t-descr_xxs "
                                                field="li_descr__1707473094047" data-animate-order="4"
                                                data-animate-delay="0.2">founder of evolve company</div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="t-slds__item" data-slide-index="5" role="group" aria-roledescription="slide"
                                    aria-hidden="true" aria-label="5 из 7">
                                    <div class="t-width t-width_6 t-margin_auto">
                                        <div class="t-slds__wrapper t-align_center">
                                            <div class="t605__bgimg t605__img_circle t-bgimg "
                                                data-original="./static.tildacdn.net/tild6132-3036-4463-b635-383063663834/image.png"
                                                bgimgfield="li_img__1718814958526" data-animate-order="1"
                                                style="width: 120px; height: 120px; background-image: url('./thb.tildacdn.net/tild6132-3036-4463-b635-383063663834/-/resizeb/20x/image.png');"
                                                itemscope itemtype="http://schema.org/ImageObject">
                                                <meta itemprop="image"
                                                    content="./static.tildacdn.net/tild6132-3036-4463-b635-383063663834/image.png">
                                            </div>
                                            <div class="t605__text t-text t-text_md " field="li_text__1718814958526"
                                                data-animate-order="2" data-animate-delay="0.3">Thank you
                                                to&nbsp;the&nbsp;Nezdeck team for developing our website. It&nbsp;was
                                                very pleasant to&nbsp;work together.<br /><br />I&nbsp;hope for
                                                long-term and effective cooperation with you.</div>
                                            <div class="t605__title t-name t-name_lg " field="li_title__1718814958526"
                                                data-animate-order="3" data-animate-delay="0.3">Lukas Bürgstaller</div>
                                            <div class="t605__descr t-descr t-descr_xxs "
                                                field="li_descr__1718814958526" data-animate-order="4"
                                                data-animate-delay="0.2">TANTUM company</div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="t-slds__item" data-slide-index="6" role="group" aria-roledescription="slide"
                                    aria-hidden="true" aria-label="6 из 7">
                                    <div class="t-width t-width_6 t-margin_auto">
                                        <div class="t-slds__wrapper t-align_center">
                                            <div class="t605__bgimg t605__img_circle t-bgimg "
                                                data-original="./static.tildacdn.net/tild3761-6431-4332-b261-393763623062/image.png"
                                                bgimgfield="li_img__1718814984591" data-animate-order="1"
                                                style="width: 120px; height: 120px; background-image: url('./thb.tildacdn.net/tild3761-6431-4332-b261-393763623062/-/resizeb/20x/image.png');"
                                                itemscope itemtype="http://schema.org/ImageObject">
                                                <meta itemprop="image"
                                                    content="./static.tildacdn.net/tild3761-6431-4332-b261-393763623062/image.png">
                                            </div>
                                            <div class="t605__text t-text t-text_md " field="li_text__1718814984591"
                                                data-animate-order="2" data-animate-delay="0.3">AZ&nbsp;Agency,
                                                I&nbsp;am&nbsp;so glad I&nbsp;I&nbsp;chose you!<br /><br />It’s
                                                important when you are heard, when someone delves into the process, and
                                                is&nbsp;interested in&nbsp;the outcome👍🏻 and I&nbsp;am&nbsp;100%
                                                satisfied with the result!!! I&nbsp;am&nbsp;very grateful to&nbsp;you
                                                for your work, patience, and loyalty💫</div>
                                            <div class="t605__title t-name t-name_lg " field="li_title__1718814984591"
                                                data-animate-order="3" data-animate-delay="0.3">Vera Sibilio</div>
                                            <div class="t605__descr t-descr t-descr_xxs "
                                                field="li_descr__1718814984591" data-animate-order="4"
                                                data-animate-delay="0.2">FONDAZIONE SIMONE CESARETTI ETS</div>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- <div class="t-slds__item" data-slide-index="7" role="group" aria-roledescription="slide"
                                    aria-hidden="true" aria-label="7 из 7">
                                    <div class="t-width t-width_6 t-margin_auto">
                                        <div class="t-slds__wrapper t-align_center">
                                            <div class="t605__bgimg t605__img_circle t-bgimg "
                                                data-original="./static.tildacdn.net/tild3832-3034-4964-b761-613237303138/image.png"
                                                bgimgfield="li_img__1718815011101" data-animate-order="1"
                                                style="width: 120px; height: 120px; background-image: url('./thb.tildacdn.net/tild3832-3034-4964-b761-613237303138/-/resizeb/20x/image.png');"
                                                itemscope itemtype="http://schema.org/ImageObject">
                                                <meta itemprop="image"
                                                    content="./static.tildacdn.net/tild3832-3034-4964-b761-613237303138/image.png">
                                            </div>
                                            <div class="t605__text t-text t-text_md " field="li_text__1718815011101"
                                                data-animate-order="2" data-animate-delay="0.3">Thanks
                                                to&nbsp;the&nbsp;Nezdeck team for developing our corporate website.
                                                It&nbsp;was very easy and a&nbsp;pleasure to&nbsp;work
                                                together.<br /><br />We&nbsp;also ordered the development of&nbsp;the
                                                corporate identity of&nbsp;social networks.<br /><br />Thank you!</div>
                                            <div class="t605__title t-name t-name_lg " field="li_title__1718815011101"
                                                data-animate-order="3" data-animate-delay="0.3">Svetlana Kuznetsova
                                            </div>
                                            <div class="t605__descr t-descr t-descr_xxs "
                                                field="li_descr__1718815011101" data-animate-order="4"
                                                data-animate-delay="0.2">the founder of the Verba company</div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <script>t_onReady(function () {
                        t_onFuncLoad('t_sldsInit', function () {
                            t_sldsInit('692198616', {
                            });
                        });
                    });</script>
                <style>
                    #rec692198616 .t-slds__bullet_active .t-slds__bullet_body {
                        background-color: #222 !important;
                    }

                    #rec692198616 .t-slds__bullet:hover .t-slds__bullet_body {
                        background-color: #222 !important;
                    }
                </style>
            </div>
            <style>
                .t-review-social-links {
                    line-height: 0px;
                }

                .t-review-social-links__wrapper {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    -webkit-box-align: center;
                    -ms-flex-align: center;
                    align-items: center;
                    -ms-flex-wrap: wrap;
                    flex-wrap: wrap;
                    width: auto;
                }

                .t-review-social-links {
                    margin-top: 15px;
                }

                .t-review-social-links__item {
                    padding: 0px 4px;
                }

                .t-review-social-links__item svg {
                    width: 20px;
                    height: 20px;
                }

                .t-review-social-links__wrapper_round .t-review-social-links__item svg {
                    width: 23px;
                    height: 23px;
                }

                .t-review-social-links__item:first-child {
                    padding-left: 0px;
                }

                @media screen and (max-width: 960px) {
                    .t-review-social-links__item {
                        margin-bottom: 3px;
                    }
                }

                @media screen and (max-width: 640px) {
                    .t-review-social-links {
                        margin-top: 13px;
                    }

                    .t-review-social-links__item {
                        padding: 0px 3px;
                    }

                    .t-review-social-links__item svg {
                        width: 17px;
                        height: 17px;
                    }

                    .t-review-social-links__wrapper_round .t-review-social-links__item svg {
                        width: 20px;
                        height: 20px;
                    }
                }
            </style>
            <script>function t_social_init(recid, groupName) {
                    var rec = document.getElementById('rec' + recid);
                    if (!rec) return;
                    var socialLinks = rec.querySelectorAll('.' + groupName + '-social-links');
                    Array.prototype.forEach.call(socialLinks, function (link) {
                        var socialAttr = link.getAttribute('data-social-links');
                        var socialWrapper = link.querySelector('.' + groupName + '-social-links__wrapper');
                        link.removeAttribute('data-social-links');
                        if (socialAttr) {
                            var dataLinks = socialAttr.split(',');
                            if (dataLinks.length > 7) {
                                dataLinks = dataLinks.slice(0, 7);
                            }
                            Array.prototype.forEach.call(dataLinks, function (item) {
                                t_social_add_item(item.trim(), socialWrapper, groupName);
                            });
                        }
                    });
                }
                function t_social_add_item(item, socialWrapper, groupName) {
                    var fill = socialWrapper.getAttribute('data-social-color') || '#000000';
                    var isRoundIcon = socialWrapper.classList.contains(groupName + '-social-links__wrapper_round');
                    if (item.indexOf('tel:') !== -1) {
                        var phone = '<div class="' + groupName + '-social-links__item">';
                        phone += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            phone += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM32.3668 30.3616C33.8958 28.835 34.6798 28.1875 35.1534 28.0601C35.715 27.909 36.2052 28.0405 36.7168 28.4797C37.1497 28.8512 38.2438 29.9713 38.9927 30.8096C41.1931 33.2729 43.8747 36.6359 44.2503 37.4031C44.3639 37.6353 44.375 37.701 44.3558 38.0323C44.3204 38.643 44.196 38.8343 43.3793 39.5344C42.0767 40.6509 40.0803 42.739 39.3824 43.7149C38.9257 44.3535 38.9126 44.7536 39.3248 45.483C39.675 46.1027 41.378 48.345 42.5783 49.7667C44.5875 52.1467 46.9159 54.3696 49.1773 56.0669C50.8579 57.3283 53.2214 58.7821 54.8035 59.5275C55.9343 60.0603 56.2878 60.0303 57.0122 59.3401C57.7069 58.6782 58.5246 57.6102 59.8946 55.5759C60.3408 54.9132 60.7739 54.3136 60.857 54.2434C61.1104 54.0293 61.3967 53.9282 61.8141 53.9055C62.0813 53.891 62.2608 53.9062 62.4057 53.9555C62.6843 54.0504 63.4107 54.5045 66.36 56.4276C67.7285 57.32 69.2454 58.3032 69.7309 58.6125C72.4818 60.3651 72.7871 60.6005 72.9291 61.0781C73.1185 61.7157 72.9605 62.1254 72.063 63.3233C70.9487 64.8107 69.0734 66.8197 67.674 68.0252C66.5388 69.0032 65.0797 69.9865 63.6409 70.743L63.0188 71.0701L62.389 71.0696C60.5532 71.0685 58.822 70.7024 56.1724 69.7552C49.967 67.5366 44.465 64.2895 39.647 60.0025C38.7431 59.1981 36.6429 57.0816 35.8606 56.1866C33.2537 53.2039 31.2905 50.2948 29.5948 46.9021C28.373 44.4575 27.2502 41.6203 27.0609 40.4995C26.7835 38.8572 27.4592 36.7086 28.9757 34.4108C29.8832 33.0359 30.8773 31.8488 32.3668 30.3616V30.3616Z" fill="' + fill + '"/></svg>';
                        } else {
                            phone += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M79.6737 54.027C78.7931 54.027 77.8726 53.7468 76.992 53.5467C75.2103 53.1483 73.4583 52.6267 71.7488 51.9858C69.892 51.3103 67.851 51.3453 66.0185 52.0842C64.186 52.8231 62.6916 54.2137 61.8227 55.9882L60.9422 57.8293C57.0551 55.6248 53.4641 52.9349 50.2556 49.8244C47.1451 46.616 44.4552 43.025 42.2507 39.1379L44.0918 38.2974C45.8664 37.4285 47.2569 35.934 47.9958 34.1016C48.7347 32.2691 48.7698 30.2281 48.0943 28.3713C47.4587 26.6463 46.9372 24.8814 46.5333 23.088C46.3332 22.2075 46.1731 21.2869 46.053 20.4064C45.567 17.5871 44.0903 15.0341 41.889 13.2069C39.6876 11.3798 36.9062 10.3987 34.0457 10.4403H21.9983C20.3062 10.4381 18.6328 10.7935 17.0877 11.4832C15.5427 12.173 14.1608 13.1815 13.0328 14.4427C11.8814 15.7381 11.024 17.2675 10.5197 18.9256C10.0153 20.5838 9.87588 22.3315 10.111 24.0486C12.2867 40.7074 19.8978 56.183 31.7643 68.0756C43.657 79.9421 59.1325 87.5532 75.7913 89.7289C76.3109 89.7686 76.8327 89.7686 77.3522 89.7289C80.3037 89.7332 83.1534 88.6504 85.3572 86.6871C86.6183 85.559 87.6269 84.1772 88.3166 82.6321C89.0064 81.087 89.3618 79.4136 89.3596 77.7216V65.7142C89.338 62.9486 88.3624 60.2753 86.5977 58.1459C84.8329 56.0165 82.3871 54.5616 79.6737 54.027ZM81.6349 78.0417C81.6336 78.6003 81.5154 79.1523 81.2879 79.6624C81.0604 80.1725 80.7287 80.6294 80.3141 81.0036C79.8754 81.4032 79.3534 81.7003 78.7857 81.8734C78.2181 82.0465 77.6191 82.0911 77.032 82.0042C62.096 80.0535 48.2154 73.2468 37.5278 62.6323C26.8311 51.9356 19.9652 38.0067 17.9958 23.008C17.9089 22.421 17.9535 21.8219 18.1266 21.2543C18.2997 20.6867 18.5968 20.1646 18.9964 19.726C19.3752 19.3063 19.8385 18.9716 20.3559 18.744C20.8733 18.5163 21.433 18.4009 21.9983 18.4052H34.0057C34.9309 18.3825 35.8353 18.6813 36.5651 19.2505C37.2948 19.8197 37.8048 20.6242 38.0081 21.5271C38.0081 22.6077 38.3683 23.7284 38.6085 24.8091C39.0711 26.9058 39.6864 28.9659 40.4496 30.9729L34.8462 33.6145C33.883 34.0566 33.1346 34.8627 32.7649 35.8559C32.3646 36.8303 32.3646 37.9233 32.7649 38.8977C38.5252 51.2363 48.4435 61.1546 60.7821 66.9149C61.7565 67.3152 62.8495 67.3152 63.8239 66.9149C64.8171 66.5453 65.6232 65.7968 66.0653 64.8336L68.5869 59.2302C70.6518 59.9832 72.7644 60.5982 74.9107 61.0713C75.9514 61.3115 77.0721 61.5116 78.1527 61.6717C79.0556 61.875 79.8601 62.385 80.4293 63.1147C80.9985 63.8445 81.2973 64.7489 81.2746 65.6742L81.6349 78.0417ZM58.0204 10C57.0998 10 56.1392 10 55.2187 10C54.1571 10.0902 53.175 10.5984 52.4881 11.4129C51.8013 12.2273 51.4662 13.2811 51.5564 14.3427C51.6466 15.4042 52.1549 16.3864 52.9693 17.0732C53.7837 17.76 54.8376 18.0951 55.8991 18.0049H58.0204C64.3895 18.0049 70.4977 20.535 75.0014 25.0387C79.505 29.5423 82.0351 35.6505 82.0351 42.0196C82.0351 42.7401 82.0351 43.4205 82.0351 44.1409C81.9464 45.1968 82.28 46.2448 82.9627 47.0551C83.6455 47.8655 84.6217 48.372 85.6774 48.4636H85.9975C86.9995 48.4677 87.9665 48.0958 88.7076 47.4214C89.4487 46.747 89.9098 45.8193 90 44.8214C90 43.9008 90 42.9402 90 42.0196C90 33.5344 86.632 25.3962 80.6358 19.3925C74.6396 13.3888 66.5056 10.0106 58.0204 10V10ZM66.0253 42.0196C66.0253 43.0812 66.447 44.0992 67.1976 44.8498C67.9482 45.6004 68.9662 46.0221 70.0278 46.0221C71.0893 46.0221 72.1073 45.6004 72.8579 44.8498C73.6085 44.0992 74.0302 43.0812 74.0302 42.0196C74.0302 37.7736 72.3435 33.7014 69.341 30.699C66.3386 27.6966 62.2665 26.0098 58.0204 26.0098C56.9589 26.0098 55.9408 26.4315 55.1902 27.1821C54.4396 27.9327 54.0179 28.9508 54.0179 30.0123C54.0179 31.0738 54.4396 32.0918 55.1902 32.8424C55.9408 33.593 56.9589 34.0147 58.0204 34.0147C60.1434 34.0147 62.1795 34.8581 63.6807 36.3593C65.1819 37.8605 66.0253 39.8966 66.0253 42.0196Z" fill="' + fill + '"/></svg>';
                        }
                        phone += '</a>';
                        phone += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', phone);
                        return;
                    }
                    else if (item.indexOf('mailto:') !== -1) {
                        var email = '<div class="' + groupName + '-social-links__item">';
                        email += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            email += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.6142 0 50-22.3858 50-50S77.6142 0 50 0 0 22.3858 0 50s22.3858 50 50 50ZM26.2268 34.1813c.3042-.9738.9636-1.693 1.8568-2.0249l.4151-.1543 21.4794-.0018c21.3404-.0017 21.4819-.0009 21.8807.1335.9642.3248 1.6814 1.1482 1.9797 2.2727l.0944.3556-1.7711 1.2707c-2.462 1.7666-6.8447 4.9166-8.8523 6.3624-.925.6662-2.2783 1.639-3.0072 2.1619-2.1029 1.5081-4.2894 3.0785-5.891 4.2312-3.6493 2.6264-4.3577 3.1288-4.4113 3.1288-.0541 0-.817-.5414-4.5039-3.1961-1.6149-1.1627-3.4655-2.4914-5.7994-4.1637-.7296-.5227-2.1661-1.5561-3.1924-2.2964-1.0262-.7404-2.4421-1.7593-3.1465-2.2642-.7044-.5051-2.3496-1.6873-3.656-2.6273s-2.646-1.9002-2.9769-2.1338c-.667-.4708-.675-.4878-.4981-1.0543Zm-.1497 27.1823c-.0616.0397-.0771-2.244-.0771-11.3267 0-6.257.0122-11.3764.0271-11.3764.015 0 1.063.7458 2.3291 1.6574 2.2612 1.628 3.4539 2.4857 6.7132 4.8273 2.1704 1.5593 4.0585 2.9159 5.6761 4.0785.7296.5244 1.3265.9876 1.3265 1.0293 0 .0718-.8103.6465-3.9486 2.8008-.7465.5124-2.0931 1.4401-2.9923 2.0616-.8992.6215-3.1064 2.1429-4.9049 3.3809-1.7984 1.238-3.4504 2.3784-3.6709 2.5342-.2206.1559-.4357.3058-.4782.3331Zm43.234-19.3639c.6277-.4485 1.9187-1.381 2.8688-2.0722.9502-.6912 1.7483-1.259 1.7738-1.2619.0255-.0028.0463 5.1143.0463 11.3713 0 9.0827-.0155 11.3664-.0771 11.3267-.0424-.0273-.2576-.1768-.4782-.3323-.2205-.1554-1.0951-.7591-1.9434-1.3415-.8483-.5824-1.6812-1.1582-1.8509-1.2795-.1697-.1213-.7388-.5155-1.2648-.8759-.526-.3604-1.3172-.9043-1.7583-1.2086-.4412-.3043-2.1348-1.4711-3.7635-2.593-4.735-3.2613-4.9358-3.4028-4.9358-3.4788 0-.0759.2206-.2386 4.0412-2.9806 1.3064-.9376 3.2359-2.3243 4.2879-3.0815 1.0519-.7573 2.4262-1.7437 3.054-2.1922ZM37.8152 57.1366c.3609-.2411 1.7297-1.1886 4.8121-3.3308 1.2215-.849 2.2627-1.5349 2.3136-1.5242.0509.0107 1.0504.7092 2.2211 1.5523 1.1706.8431 2.2361 1.5743 2.3676 1.625.3044.1171.6365.117.9414-.0003.1318-.0507 1.1964-.7809 2.3658-1.6228 1.1693-.8418 2.1572-1.5435 2.1951-1.5594.0604-.0253 1.5111.9576 5.8267 3.9476 1.1431.7919 2.7209 1.8798 5.9537 4.1051.9502.6541 2.9214 2.014 4.3805 3.022l2.653 1.8328-.0051.2599c-.0072.3723-.3476 1.0784-.7463 1.5482-.3863.4549-1.0056.8296-1.5552.9408C71.322 67.9767 63.8578 68 50 68c-13.8578 0-21.322-.0233-21.5392-.0672-.5496-.1112-1.1689-.4859-1.5552-.9408-.3741-.4409-.7126-1.118-.7618-1.5243l-.0316-.2603 1.656-1.14c.9108-.627 2.2112-1.5239 2.8899-1.9932 3.6716-2.539 6.8851-4.7559 7.1571-4.9376Z" fill="' + fill + '"/></svg>';
                        } else {
                            email += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M78 18H22C18.8174 18 15.7652 19.2643 13.5147 21.5147C11.2643 23.7652 10 26.8174 10 30V70C10 73.1826 11.2643 76.2348 13.5147 78.4853C15.7652 80.7357 18.8174 82 22 82H78C81.1826 82 84.2348 80.7357 86.4853 78.4853C88.7357 76.2348 90 73.1826 90 70V30C90 26.8174 88.7357 23.7652 86.4853 21.5147C84.2348 19.2643 81.1826 18 78 18V18ZM76.36 26L52.84 49.52C52.4681 49.8949 52.0257 50.1925 51.5383 50.3956C51.0509 50.5986 50.528 50.7032 50 50.7032C49.472 50.7032 48.9491 50.5986 48.4617 50.3956C47.9743 50.1925 47.5319 49.8949 47.16 49.52L23.64 26H76.36ZM82 70C82 71.0609 81.5786 72.0783 80.8284 72.8284C80.0783 73.5786 79.0609 74 78 74H22C20.9391 74 19.9217 73.5786 19.1716 72.8284C18.4214 72.0783 18 71.0609 18 70V31.64L41.52 55.16C43.77 57.4072 46.82 58.6694 50 58.6694C53.18 58.6694 56.23 57.4072 58.48 55.16L82 31.64V70Z" fill="' + fill + '"/></svg>';
                        }
                        email += '</a>';
                        email += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', email);
                    }
                    else if (item.indexOf('telegram') !== -1 || item.indexOf('t.html') !== -1) {
                        var telegram = '<div class="' + groupName + '-social-links__item">';
                        telegram += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            telegram += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm21.977-68.056c.386-4.38-4.24-2.576-4.24-2.576-3.415 1.414-6.937 2.85-10.497 4.302-11.04 4.503-22.444 9.155-32.159 13.734-5.268 1.932-2.184 3.864-2.184 3.864l8.351 2.577c3.855 1.16 5.91-.129 5.91-.129l17.988-12.238c6.424-4.38 4.882-.773 3.34.773l-13.49 12.882c-2.056 1.804-1.028 3.35-.129 4.123 2.55 2.249 8.82 6.364 11.557 8.16.712.467 1.185.778 1.292.858.642.515 4.111 2.834 6.424 2.319 2.313-.516 2.57-3.479 2.57-3.479l3.083-20.226c.462-3.511.993-6.886 1.417-9.582.4-2.546.705-4.485.767-5.362Z" fill="' + fill + '"/></svg>';
                        } else {
                            telegram += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M83.1797 17.5886C83.1797 17.5886 90.5802 14.7028 89.9635 21.711C89.758 24.5968 87.9079 34.6968 86.4688 45.6214L81.5351 77.9827C81.5351 77.9827 81.124 82.7235 77.4237 83.548C73.7233 84.3724 68.173 80.6623 67.145 79.8378C66.3227 79.2195 51.7273 69.9438 46.5878 65.4092C45.1488 64.1724 43.5042 61.6989 46.7934 58.8132L68.3785 38.201C70.8454 35.7274 73.3122 29.956 63.0336 36.9642L34.2535 56.5459C34.2535 56.5459 30.9644 58.6071 24.7973 56.752L11.4351 52.6295C11.4351 52.6295 6.50135 49.5377 14.9298 46.4457C35.4871 36.7579 60.7724 26.864 83.1797 17.5886Z" fill="' + fill + '"/></svg>';
                        }
                        telegram += '</a>';
                        telegram += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', telegram);
                    }
                    else if (item.indexOf('whatsapp') !== -1 || item.indexOf('wa.html') !== -1) {
                        var whatsapp = '<div class="' + groupName + '-social-links__item">';
                        whatsapp += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            whatsapp += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM69.7626 28.9928C64.6172 23.841 57.7739 21.0027 50.4832 21C35.4616 21 23.2346 33.2252 23.2292 48.2522C23.2274 53.0557 24.4823 57.7446 26.8668 61.8769L23 76L37.4477 72.2105C41.4282 74.3822 45.9107 75.5262 50.4714 75.528H50.4823C65.5029 75.528 77.7299 63.301 77.7363 48.2749C77.7408 40.9915 74.9089 34.1446 69.7626 28.9928ZM62.9086 53.9588C62.2274 53.6178 58.8799 51.9708 58.2551 51.7435C57.6313 51.5161 57.1766 51.4024 56.7228 52.0845C56.269 52.7666 54.964 54.2998 54.5666 54.7545C54.1692 55.2092 53.7718 55.2656 53.0915 54.9246C52.9802 54.8688 52.8283 54.803 52.6409 54.7217C51.6819 54.3057 49.7905 53.4855 47.6151 51.5443C45.5907 49.7382 44.2239 47.5084 43.8265 46.8272C43.4291 46.1452 43.7837 45.7769 44.1248 45.4376C44.3292 45.2338 44.564 44.9478 44.7987 44.662C44.9157 44.5194 45.0328 44.3768 45.146 44.2445C45.4345 43.9075 45.56 43.6516 45.7302 43.3049C45.7607 43.2427 45.7926 43.1776 45.8272 43.1087C46.0545 42.654 45.9409 42.2565 45.7708 41.9155C45.6572 41.6877 45.0118 40.1167 44.4265 38.6923C44.1355 37.984 43.8594 37.3119 43.671 36.8592C43.1828 35.687 42.6883 35.69 42.2913 35.6924C42.2386 35.6928 42.1876 35.6931 42.1386 35.6906C41.7421 35.6706 41.2874 35.667 40.8336 35.667C40.3798 35.667 39.6423 35.837 39.0175 36.5191C38.9773 36.5631 38.9323 36.6111 38.8834 36.6633C38.1738 37.4209 36.634 39.0648 36.634 42.2002C36.634 45.544 39.062 48.7748 39.4124 49.2411L39.415 49.2444C39.4371 49.274 39.4767 49.3309 39.5333 49.4121C40.3462 50.5782 44.6615 56.7691 51.0481 59.5271C52.6732 60.2291 53.9409 60.6475 54.9303 60.9612C56.5618 61.4796 58.046 61.4068 59.22 61.2313C60.5286 61.0358 63.2487 59.5844 63.8161 57.9938C64.3836 56.4033 64.3836 55.0392 64.2136 54.7554C64.0764 54.5258 63.7545 54.3701 63.2776 54.1395C63.1633 54.0843 63.0401 54.0247 62.9086 53.9588Z" fill="' + fill + '"/></svg>';
                        } else {
                            whatsapp += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50.168 10C60.8239 10.004 70.8257 14.1522 78.346 21.6819C85.8676 29.2114 90.0066 39.2185 90 49.8636C89.9906 71.8252 72.1203 89.6956 50.1668 89.6956H50.1508C43.4852 89.6929 36.9338 88.0208 31.1162 84.8468L10 90.3853L15.6516 69.7437C12.1665 63.7042 10.3323 56.851 10.3349 49.8304C10.343 27.8676 28.2134 10 50.168 10V10ZM61.5376 54.7631C62.4507 55.0954 67.3433 57.5023 68.3389 58.0009C68.5313 58.0971 68.7113 58.1842 68.8784 58.265C69.5753 58.602 70.0458 58.8296 70.2462 59.1651C70.4947 59.5799 70.4947 61.5736 69.6654 63.8982C68.8359 66.2229 64.8605 68.3442 62.9478 68.63C61.2319 68.8865 59.0627 68.9928 56.6782 68.2353C55.2322 67.7767 53.3794 67.1653 51.0041 66.1392C41.6698 62.1082 35.3628 53.06 34.1747 51.3556C34.0919 51.2368 34.0341 51.1538 34.0017 51.1106L33.9981 51.1056C33.486 50.4243 29.9372 45.7022 29.9372 40.8149C29.9372 36.2325 32.1873 33.8303 33.2244 32.7232C33.2961 32.6467 33.3619 32.5763 33.4208 32.5118C34.3341 31.5149 35.412 31.2664 36.0751 31.2664C36.7385 31.2664 37.4029 31.2717 37.9826 31.301C38.0541 31.3046 38.1286 31.304 38.2056 31.3037C38.786 31.3001 39.5087 31.2957 40.2221 33.0089C40.4976 33.6707 40.9012 34.653 41.3265 35.6882C42.1818 37.7702 43.1251 40.066 43.2912 40.399C43.5397 40.8974 43.7058 41.4782 43.3736 42.1427C43.323 42.2436 43.2763 42.3387 43.2318 42.4295C42.9831 42.9364 42.7995 43.3104 42.378 43.8029C42.2125 43.9963 42.0413 44.2045 41.8703 44.4131C41.5273 44.8309 41.1842 45.2488 40.8853 45.5467C40.387 46.0425 39.8686 46.5808 40.4493 47.5777C41.0303 48.5731 43.028 51.8323 45.9867 54.472C49.1661 57.3091 51.93 58.5078 53.3318 59.1157C53.6058 59.2346 53.8279 59.3308 53.9907 59.4124C54.9849 59.9109 55.5658 59.8284 56.1465 59.1637C56.7274 58.4993 58.6347 56.2583 59.298 55.2615C59.9612 54.2646 60.6259 54.4307 61.5376 54.7631V54.7631Z" fill="' + fill + '"/></svg>';
                        }
                        whatsapp += '</a>';
                        whatsapp += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', whatsapp);
                    }
                    else if (item.indexOf('viber.com') !== -1) {
                        var viber = '<div class="' + groupName + '-social-links__item">';
                        viber += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            viber += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm19.546-71.18c-1.304-1.184-6.932-4.72-18.674-4.772 0 0-13.905-.913-20.655 5.2-3.757 3.71-5.022 9.226-5.161 15.957l-.016.691c-.156 6.885-.433 19.013 11.47 22.32l-.053 10.386c0 .587.093.988.428 1.071.241.059.602-.066.91-.372 1.968-1.978 8.271-9.582 8.271-9.582 8.457.553 15.186-1.117 15.91-1.354.17-.054.415-.111.72-.183 2.752-.641 10.37-2.417 11.776-13.773 1.613-13.003-.594-21.88-4.926-25.589ZM48.664 31.51a.908.908 0 0 1 .914-.901c4.585.032 8.468 1.56 11.584 4.597 3.146 3.067 4.696 7.24 4.736 12.404a.908.908 0 1 1-1.815.013c-.037-4.79-1.461-8.458-4.188-11.117-2.757-2.688-6.18-4.053-10.33-4.082a.908.908 0 0 1-.9-.914Zm2.374 2.932a1.15 1.15 0 1 0-.168 2.294c2.918.213 5.067 1.184 6.597 2.854 1.541 1.684 2.304 3.784 2.248 6.389a1.15 1.15 0 0 0 2.3.05c.067-3.133-.87-5.826-2.851-7.992-2.01-2.193-4.758-3.349-8.126-3.595Zm1.156 4.454a.908.908 0 1 0-.095 1.812c1.335.07 2.223.458 2.8 1.054.58.6.964 1.535 1.033 2.936a.908.908 0 0 0 1.813-.09c-.083-1.677-.558-3.09-1.542-4.108-.987-1.021-2.368-1.519-4.009-1.604Zm1.805 15.633c-.594.732-1.698.64-1.698.64-8.066-2.06-10.224-10.23-10.224-10.23s-.097-1.104.638-1.698l1.458-1.158c.722-.557 1.183-1.908.448-3.228a34.125 34.125 0 0 0-1.839-2.881c-.641-.877-2.136-2.671-2.142-2.677-.72-.85-1.78-1.048-2.898-.466a.045.045 0 0 0-.012.003l-.011.003a12.062 12.062 0 0 0-2.986 2.432c-.69.833-1.085 1.65-1.185 2.45a1.57 1.57 0 0 0-.022.357c-.003.354.05.706.16 1.042l.038.026c.348 1.236 1.22 3.296 3.114 6.731a40.117 40.117 0 0 0 3.735 5.654c.703.89 1.456 1.74 2.256 2.543l.029.03.057.056.085.086.086.085.086.086a29.64 29.64 0 0 0 2.543 2.255 40.072 40.072 0 0 0 5.655 3.736c3.433 1.894 5.495 2.766 6.73 3.114l.026.038c.336.11.688.164 1.041.16.12.006.24-.001.358-.022.802-.095 1.618-.49 2.448-1.184a.032.032 0 0 0 .007-.004.101.101 0 0 0 .003-.004l.012-.008a12.09 12.09 0 0 0 2.41-2.97l.003-.01a.054.054 0 0 0 .002-.013c.583-1.117.385-2.177-.47-2.899l-.189-.154c-.484-.4-1.783-1.47-2.487-1.988a34.12 34.12 0 0 0-2.879-1.838c-1.32-.736-2.669-.275-3.228.448L54 54.528Z" fill="' + fill + '"/></svg>';
                        } else {
                            viber += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M51.1674 15.0695C68.0367 15.1431 76.1216 20.223 77.9946 21.9248C84.2184 27.2536 87.3892 40.0049 85.0706 58.6857C83.0511 74.9991 72.1076 77.5505 68.1547 78.4721C67.7162 78.5744 67.3637 78.6565 67.119 78.7352C66.0794 79.075 56.4132 81.4739 44.2639 80.6805C44.2639 80.6805 35.2092 91.6043 32.3809 94.4446C31.9394 94.8848 31.4203 95.0641 31.0738 94.9798C30.5921 94.8607 30.4583 94.2841 30.4583 93.4412C30.4664 92.2358 30.5359 78.5212 30.5359 78.5212C13.4356 73.7704 13.8327 56.3465 14.0581 46.4559C14.0658 46.1159 14.0734 45.7848 14.08 45.4635C14.2793 35.7933 16.0975 27.869 21.4945 22.5402C31.1915 13.757 51.1674 15.0695 51.1674 15.0695ZM49.3088 24.4928C48.5887 24.4878 48.001 25.0674 47.996 25.7874C47.991 26.5075 48.5706 27.0952 49.2906 27.1002C55.2525 27.1418 60.169 29.1034 64.1298 32.9646C68.0476 36.7839 70.0936 42.0538 70.1459 48.9357C70.1514 49.6557 70.7395 50.235 71.4596 50.2295C72.1796 50.224 72.7588 49.6359 72.7533 48.9159C72.6969 41.4967 70.4696 35.5035 65.9499 31.0975C61.4732 26.7334 55.8962 24.5387 49.3088 24.4928ZM49.6375 31.5265C49.7041 30.6166 50.4958 29.9329 51.4058 29.9995C56.2447 30.3536 60.1933 32.0139 63.0793 35.1642L63.0799 35.1649C65.9271 38.276 67.272 42.1448 67.1746 46.6444C67.1549 47.5566 66.3994 48.2801 65.4872 48.2604C64.575 48.2406 63.8515 47.4851 63.8712 46.5729C63.9522 42.8311 62.8559 39.8143 60.6424 37.3956C58.4445 34.9967 55.356 33.6016 51.1646 33.2948C50.2546 33.2282 49.5709 32.4365 49.6375 31.5265ZM51.6968 37.6317C51.7344 36.9127 52.3477 36.3602 53.0667 36.3977C55.4237 36.5206 57.4077 37.2357 58.8266 38.7028C60.2394 40.1635 60.9217 42.1942 61.0412 44.6041C61.0769 45.3232 60.5228 45.9352 59.8037 45.9708C59.0845 46.0065 58.4726 45.4524 58.4369 44.7333C58.3371 42.7201 57.7863 41.3778 56.9523 40.5155C56.1245 39.6596 54.848 39.1017 52.9309 39.0016C52.2118 38.9641 51.6593 38.3508 51.6968 37.6317ZM53.2206 59.7748C53.2206 59.7748 54.806 59.9086 55.6595 58.857L57.3239 56.7632C58.1266 55.725 60.0638 55.0628 61.961 56.1197C63.3826 56.9305 64.7628 57.8119 66.0963 58.7607C67.1087 59.5052 68.974 61.042 69.6701 61.6156C69.8397 61.7553 69.9398 61.8378 69.9414 61.8378C71.1696 62.8747 71.4532 64.3972 70.617 66.0026C70.617 66.0075 70.6152 66.0142 70.6135 66.0206C70.6119 66.0265 70.6104 66.0322 70.6104 66.0361C69.6894 67.6326 68.5202 69.0723 67.1466 70.3013C67.1382 70.3054 67.1342 70.3096 67.1302 70.3138C67.1265 70.3177 67.1229 70.3215 67.1158 70.3253C65.9224 71.3225 64.75 71.8893 63.5985 72.0258C63.429 72.0555 63.2567 72.0662 63.0848 72.0579C62.577 72.0628 62.0718 71.9851 61.589 71.8278L61.5516 71.7729C59.7775 71.2726 56.8155 70.0203 51.8827 67.2991C49.0282 65.7429 46.3106 63.9477 43.7591 61.9328C42.4802 60.9235 41.2603 59.8416 40.1053 58.6925L39.9823 58.5694L39.8592 58.4463L39.7361 58.3232C39.7085 58.2965 39.6815 58.2692 39.6543 58.2417L39.613 58.2001C38.4639 57.0452 37.382 55.8253 36.3726 54.5464C34.3581 51.9951 32.5629 49.278 31.0064 46.4241C28.2852 41.49 27.0329 38.5306 26.5325 36.7539L26.4777 36.7164C26.3208 36.2336 26.2436 35.7284 26.2489 35.2207C26.2395 35.0488 26.2499 34.8765 26.2797 34.7069C26.4233 33.5573 26.991 32.3839 27.9828 31.187C27.9866 31.1799 27.9905 31.1763 27.9943 31.1726C27.9985 31.1686 28.0027 31.1646 28.0069 31.1562C29.2355 29.7826 30.6753 28.6138 32.272 27.6938C32.2759 27.6938 32.2816 27.6919 32.2875 27.69C32.294 27.6879 32.3006 27.6857 32.3055 27.6857C33.9109 26.8496 35.4335 27.1332 36.469 28.3547C36.477 28.3627 38.6243 30.9408 39.5461 32.1998C40.495 33.5346 41.3764 34.9161 42.1871 36.3392C43.244 38.2349 42.5818 40.1762 41.5436 40.9762L39.4498 42.6406C38.3928 43.4941 38.532 45.0795 38.532 45.0795C38.532 45.0795 41.6332 56.8168 53.2206 59.7748Z" fill="' + fill + '"/></svg>';
                        }
                        viber += '</a>';
                        viber += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', viber);
                    }
                    else if (item.indexOf('vk.html') !== -1) {
                        var vkmessenger = '<div class="' + groupName + '-social-links__item">';
                        vkmessenger += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            vkmessenger += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm-5.08-76.414a48.135 48.135 0 0 0 2.187-.422c.324-.08 1.735-.153 3.134-.163 2.047-.013 3.002.067 4.89.41 7.843 1.428 13.918 5.42 18.472 12.135 1.99 2.934 3.603 7.076 4.066 10.44.313 2.276.265 7.758-.084 9.632-.373 2.006-1.503 5.362-2.424 7.2-2.132 4.25-5.556 8.135-9.378 10.638-1.183.774-3.108 1.843-3.838 2.13-.324.127-.669.291-.766.364-.387.29-3.382 1.191-5.337 1.604-1.807.382-2.488.44-5.279.445-2.862.007-3.437-.042-5.395-.455-3.863-.814-7.02-2.082-9.589-3.85-.587-.404-1.059-.363-4.407.381-3.654.812-4.57.94-4.88.682-.382-.316-.335-.8.4-4.153.749-3.409.938-4.215.702-4.867-.082-.227-.216-.436-.397-.731-2.693-4.394-3.984-9.062-3.997-14.46-.012-4.75.867-8.55 2.898-12.526.727-1.424 2.002-3.481 2.66-4.293.753-.927 4.735-4.855 5.312-5.24 2.412-1.604 2.967-1.933 4.722-2.79 1.91-.934 4.466-1.787 6.329-2.11Zm-4.47 22.33c-.949-2.514-1.303-3.314-1.605-3.615-.316-.317-.585-.352-3.088-.4-2.973-.058-3.103-.022-3.396.94-.119.39.636 3.353.932 3.657a.624.624 0 0 1 .156.375c0 .21.655 1.726 1.42 3.283.396.807 2.79 4.884 2.955 5.034.051.047.547.692 1.102 1.433 1.524 2.037 3.773 4.03 5.762 5.105 1.877 1.015 4.904 1.58 7.043 1.312 1.52-.19 1.615-.358 1.615-2.881 0-3.283.375-3.786 2.166-2.903.73.36 3.253 2.726 4.916 4.61.417.473.924.947 1.127 1.054.385.204 5.693.285 6.19.094.496-.19.516-1.17.043-2.138-.546-1.117-2.396-3.43-4.437-5.55-1.08-1.121-1.575-1.76-1.575-2.033 0-.34.841-1.897 1.161-2.15.107-.084.956-1.339 1.282-1.893.094-.16.636-1.07 1.204-2.023 1.464-2.455 1.755-3.08 1.864-4.002.088-.74.057-.84-.335-1.097-.367-.24-.822-.275-3.044-.228-2.49.051-2.631.073-3.043.46-.237.223-.479.565-.536.758-.168.565-1.947 4.025-2.2 4.278-.127.127-.23.305-.23.397 0 .281-1.514 2.377-2.339 3.24-.903.943-1.416 1.2-1.888.947-.31-.165-.326-.399-.329-4.679-.002-3.293-.06-4.617-.216-4.926l-.213-.421H45.35l-.25.447c-.24.425-.219.501.414 1.518l.666 1.07v4.3c0 4.29 0 4.3-.367 4.352-.5.07-1.505-.864-2.465-2.296-.797-1.188-2.506-4.389-2.898-5.429Z" fill="' + fill + '"/></svg>';
                        } else {
                            vkmessenger += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M45.065 10.238c-.473.116-1.904.392-3.18.614-2.71.472-6.429 1.712-9.206 3.07-2.552 1.248-3.36 1.726-6.868 4.06-.84.559-6.632 6.273-7.725 7.62-.958 1.182-2.813 4.174-3.871 6.246-2.954 5.783-4.232 11.31-4.215 18.22.02 7.85 1.897 14.64 5.814 21.032 1.014 1.655 1.026 1.45-.443 8.143-1.07 4.875-1.138 5.58-.583 6.04.452.375 1.783.19 7.1-.992 4.868-1.082 5.554-1.142 6.409-.554 3.735 2.571 8.328 4.415 13.947 5.6 2.849.6 3.685.671 7.848.662 4.059-.008 5.05-.092 7.679-.647 2.843-.601 7.199-1.911 7.763-2.334.14-.106.641-.344 1.113-.53 1.063-.418 3.862-1.971 5.583-3.098 5.56-3.64 10.54-9.291 13.64-15.474 1.34-2.672 2.984-7.553 3.527-10.472.508-2.725.577-10.7.121-14.009-.673-4.894-3.02-10.92-5.913-15.186-6.624-9.768-15.461-15.573-26.87-17.65-2.745-.5-4.134-.617-7.112-.597-2.035.014-4.086.12-4.558.236ZM33.047 38.074c.438.438.954 1.601 2.333 5.259.57 1.513 3.055 6.168 4.214 7.896 1.397 2.082 2.858 3.443 3.586 3.34.533-.077.535-.091.535-6.331v-6.254l-.97-1.557c-.92-1.478-.95-1.588-.603-2.207l.365-.651h11.004l.31.613c.226.448.31 2.376.313 7.165.004 6.226.028 6.565.479 6.806.687.368 1.432-.006 2.746-1.38 1.2-1.253 3.401-4.302 3.401-4.71 0-.134.151-.394.335-.578.368-.368 2.957-5.4 3.2-6.222.084-.282.435-.778.78-1.103.6-.563.805-.595 4.427-.67 3.232-.067 3.893-.017 4.427.333.57.373.615.52.488 1.595-.16 1.341-.583 2.25-2.712 5.82-.826 1.386-1.614 2.71-1.751 2.944-.474.806-1.71 2.632-1.864 2.754-.466.367-1.689 2.632-1.689 3.127 0 .396.72 1.326 2.29 2.956 2.97 3.083 5.66 6.449 6.454 8.073.689 1.408.66 2.834-.064 3.11-.721.278-8.442.16-9.002-.136-.295-.156-1.032-.846-1.639-1.533-2.419-2.742-6.089-6.183-7.15-6.706-2.606-1.284-3.152-.553-3.152 4.222 0 3.67-.137 3.914-2.349 4.19-3.111.39-7.514-.43-10.244-1.907-2.893-1.565-6.164-4.463-8.38-7.425-.807-1.08-1.53-2.017-1.604-2.085-.241-.219-3.723-6.149-4.299-7.322-1.112-2.265-2.065-4.47-2.065-4.776a.908.908 0 0 0-.226-.545c-.431-.443-1.529-4.753-1.356-5.32.426-1.398.615-1.45 4.94-1.367 3.64.07 4.032.12 4.492.582Z" fill="' + fill + '"/></svg>';
                        }
                        vkmessenger += '</a>';
                        vkmessenger += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', vkmessenger);
                    }
                    else if (item.indexOf('m.html') !== -1) {
                        var messenger = '<div class="' + groupName + '-social-links__item">';
                        messenger += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            messenger += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.6142 0 50-22.3858 50-50S77.6142 0 50 0 0 22.3858 0 50s22.3858 50 50 50ZM37.7393 25.758c2.8018-1.3272 5.3019-2.0536 8.669-2.5188 6.7361-.9303 14.1508.886 19.8801 4.8702 2.042 1.42 5.1907 4.6272 6.5551 6.6771 2.8427 4.2711 4.1615 8.6062 4.1615 13.6791 0 6.5673-2.5263 12.4327-7.4647 17.3311-4.5276 4.4908-10.5306 7.2023-17.2285 7.7818-3.1118.2691-6.0149.0371-9.2078-.736-.1178-.0285-.2137-.0518-.3109-.0603-.4308-.0373-.887.2183-3.3835 1.6142-.4935.276-2.1489 1.1996-3.6788 2.0528L32.9493 78l-.0477-4.9107-.0477-4.9109-2.3037-2.2796c-2.6029-2.5759-4.3336-5.0005-5.4853-7.6851-.376-.8763-.7541-1.7547-.8404-1.9521-.0861-.1974-.37-1.1664-.631-2.1534-.4032-1.5257-.4872-2.2823-.5606-5.0507-.0759-2.8655-.0389-3.487.3074-5.1783.9917-4.8426 2.975-8.662 6.3487-12.2269 2.507-2.6489 4.9039-4.4039 8.0503-5.8943ZM52.863 47.6927c-.5712-.6168-2.0737-2.1915-3.3392-3.4993-2.1996-2.273-2.5621-2.5717-2.6968-2.2227-.0329.0852-1.3188 1.4781-2.8577 3.0956-6.6099 6.9469-10.9084 11.5463-10.8475 11.607.0644.0646.508-.1716 4.1344-2.2005 2.1839-1.2219 3.7256-2.0694 3.7646-2.0694.0231 0 .7438-.4038 1.6014-.8973.8576-.4935 1.5977-.8973 1.6445-.8973.0467 0 .4066-.2029.7996-.4511l.7148-.4512 2.7639 2.8307c1.5202 1.557 3.064 3.1733 3.4308 3.5916.3668.4185.7309.7609.8093.7609.0785 0 1.8734-1.8373 3.9889-4.0826 2.1154-2.2453 5.2404-5.5607 6.9443-7.3672 1.7041-1.8068 3.0507-3.3323 2.9928-3.3904-.0582-.058-.2086-.0214-.3344.0816-.2402.1969-9.633 5.427-9.7459 5.427-.036 0-.5338.2825-1.1063.6276-.5725.3453-1.1718.6279-1.3321.6281-.16.0003-.7583-.5041-1.3294-1.1211Z" fill="' + fill + '"/></svg>';
                        } else {
                            messenger += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M45.0484 10.3479c-4.8975.6766-8.5341 1.7332-12.6094 3.6638-4.5765 2.1677-8.063 4.7205-11.7095 8.5735-4.9072 5.1852-7.7921 10.7408-9.2345 17.7845-.5037 2.4601-.5575 3.3641-.4471 7.5321.1068 4.0268.2289 5.1272.8154 7.3464.3796 1.4357.7925 2.8452.9178 3.1323.1255.2871.6755 1.5648 1.2224 2.8394 1.6752 3.9049 4.1925 7.4316 7.9786 11.1783l3.3508 3.3158.0694 7.1431L25.4717 90l4.0459-2.2558c2.2252-1.2409 4.6331-2.5843 5.351-2.9858 4.4506-2.4886 4.4431-2.4854 5.3736-2.2602 4.6441 1.1245 8.8669 1.462 13.3931 1.0705 9.7424-.8429 18.4741-4.7869 25.0597-11.319 7.1831-7.1249 10.8578-15.6564 10.8578-25.2088 0-7.3788-1.9183-13.6843-6.0531-19.8969-1.9846-2.9817-6.5645-7.6467-9.5347-9.7122-8.3336-5.7952-19.1186-8.43699-28.9166-7.0839ZM49.58 40.8268c1.8408 1.9023 4.0263 4.1928 4.8571 5.0899.8306.8974 1.7009 1.6311 1.9337 1.6306.2331-.0003 1.1049-.4114 1.9376-.9136.8326-.5019 1.5567-.9128 1.6092-.9128.1642 0 13.8263-7.6075 14.1758-7.8938.183-.1498.4018-.2031.4863-.1188.0843.0846-1.8744 2.3035-4.353 4.9315-2.4784 2.6277-7.0239 7.4501-10.1008 10.716-3.0772 3.2659-5.688 5.9383-5.802 5.9383-.1141 0-.6437-.498-1.1772-1.1067-.5336-.6085-2.7792-2.9595-4.9903-5.2241l-4.0202-4.1174-1.0397.6562c-.5716.361-1.0953.6562-1.1631.6562-.0681 0-1.1446.5873-2.392 1.3051-1.2475.7178-2.2957 1.3051-2.3294 1.3051-.0566 0-2.2991 1.2328-5.4757 3.0101-5.2748 2.9512-5.92 3.2947-6.0137 3.2007-.0885-.0882 6.1638-6.7782 15.7783-16.8829 2.2382-2.3526 4.1087-4.3787 4.1565-4.5027.196-.5077.7233-.0731 3.9226 3.2331Z" fill="' + fill + '"/></svg>';
                        }
                        messenger += '</a>';
                        messenger += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', messenger);
                    }
                    else if (item.indexOf('skype') !== -1) {
                        var skype = '<div class="' + groupName + '-social-links__item">';
                        skype += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            skype += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm23.303-45.561c.01-.047.017-.095.024-.142l.02-.123a14.013 14.013 0 0 1 1.774 6.816c0 3.743-1.457 7.262-4.104 9.907A13.907 13.907 0 0 1 61.112 75c-2.423 0-4.797-.63-6.893-1.816l.123-.02c.047-.007.094-.014.142-.023h-.003a3.25 3.25 0 0 1-.14.023c-.04.006-.081.012-.122.02-.03-.017-.06-.034-.092-.05l-.147-.08-.002-.001.13.071.111.06a23.767 23.767 0 0 1-4.145.369c-3.194 0-6.294-.626-9.212-1.863a23.552 23.552 0 0 1-7.524-5.07 23.557 23.557 0 0 1-5.07-7.523 23.491 23.491 0 0 1-1.861-9.213c0-1.369.122-2.739.356-4.08A14.002 14.002 0 0 1 25 39.012c0-3.742 1.459-7.26 4.104-9.907A13.917 13.917 0 0 1 39.011 25c2.292 0 4.557.572 6.57 1.642l.008-.001h.004a23.816 23.816 0 0 1 4.481-.424 23.588 23.588 0 0 1 16.733 6.931 23.556 23.556 0 0 1 5.073 7.523 23.49 23.49 0 0 1 1.862 9.213c0 1.44-.136 2.882-.395 4.29a4.678 4.678 0 0 0-.02.123 3.888 3.888 0 0 1-.024.142ZM38 57.147c0 3.098 3.762 7.231 12.17 7.231 8 0 11.964-3.856 11.964-9.018 0-3.336-1.537-6.875-7.6-8.226l-5.536-1.23c-2.105-.479-4.53-1.113-4.53-3.098 0-1.99 1.701-3.38 4.77-3.38 3.63 0 4.934 1.464 6.014 2.673.76.852 1.408 1.579 2.678 1.579 1.615 0 3.03-.95 3.03-2.584 0-3.812-6.102-6.673-11.278-6.673-5.619 0-11.602 2.385-11.602 8.74 0 3.06 1.094 6.316 7.116 7.827l7.479 1.867c2.263.558 2.83 1.832 2.83 2.98 0 1.91-1.898 3.775-5.335 3.775-3.876 0-5.203-1.722-6.325-3.177-.822-1.066-1.533-1.989-3.054-1.989-1.617 0-2.79 1.113-2.79 2.703Z" fill="' + fill + '"/></svg>';
                        } else {
                            skype += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M87.3554 56.6781C87.3296 56.8184 87.3124 56.9616 87.2852 57.1019L87.1478 56.2944C87.2222 56.4204 87.2852 56.5507 87.3554 56.6781C87.7692 54.4258 87.9868 52.1191 87.9868 49.8139C87.9868 44.7022 86.986 39.7423 85.0086 35.0745C83.1014 30.5641 80.3723 26.5149 76.8915 23.0369C73.4164 19.5604 69.3643 16.8299 64.8568 14.9227C60.189 12.9482 55.2305 11.9473 50.1188 11.9473C47.709 11.9473 45.2964 12.1735 42.9482 12.6246C42.9424 12.626 42.9367 12.626 42.931 12.6274C43.0627 12.6976 43.1959 12.7592 43.3262 12.8322L42.5301 12.7076C42.6632 12.6818 42.7978 12.6546 42.931 12.6274C39.7093 10.9149 36.0853 10 32.4184 10C26.4304 10 20.8004 12.331 16.5664 16.5664C12.3339 20.8004 10 26.4304 10 32.4184C10 36.23 10.9808 39.9757 12.8207 43.2875C12.8451 43.1501 12.8608 43.0126 12.888 42.8751L13.0255 43.6684C12.9539 43.5438 12.8923 43.4149 12.8207 43.2875C12.447 45.4324 12.2509 47.6246 12.2509 49.8139C12.2509 54.927 13.2517 59.8855 15.2291 64.5547C17.1334 69.065 19.864 73.1128 23.3405 76.5908C26.8199 80.0673 30.8677 82.8007 35.3794 84.7036C40.0473 86.6824 45.0072 87.6847 50.1188 87.6847C52.3439 87.6847 54.5733 87.4814 56.7511 87.0948C56.6237 87.0232 56.4948 86.9588 56.3645 86.8843L57.1735 87.0261C57.0332 87.0533 56.8929 87.069 56.7511 87.0948C60.1045 88.992 63.9018 90 67.7792 90C73.7658 90 79.3929 87.6718 83.6269 83.435C87.8623 79.2039 90.1933 73.5724 90.1933 67.5845C90.1933 63.7614 89.2082 60.0014 87.3554 56.6781ZM50.2706 73.0054C36.817 73.0054 30.799 66.3917 30.799 61.4347C30.799 58.8918 32.6761 57.1105 35.2635 57.1105C41.0209 57.1105 39.5289 65.3766 50.2706 65.3766C55.7703 65.3766 58.8058 62.3912 58.8058 59.3356C58.8058 57.4986 57.8995 55.461 54.2784 54.5676L42.3124 51.5808C32.6761 49.1638 30.9264 43.9548 30.9264 39.0578C30.9264 28.8903 40.4997 25.073 49.4903 25.073C57.7721 25.073 67.5344 29.6506 67.5344 35.7503C67.5344 38.3634 65.2706 39.884 62.6861 39.884C57.7721 39.884 58.677 33.0828 48.7801 33.0828C43.8688 33.0828 41.1483 35.3064 41.1483 38.4894C41.1483 41.6652 45.0272 42.6804 48.3949 43.4479L57.2523 45.4138C66.953 47.5759 69.4129 53.2388 69.4129 58.5753C69.4129 66.8356 63.0699 73.0054 50.2706 73.0054ZM56.3645 86.8829C56.4934 86.9573 56.6237 87.0232 56.7511 87.0933C56.8929 87.0676 57.0347 87.0518 57.1735 87.0246L56.3645 86.8829ZM87.2852 57.1019C87.3124 56.9602 87.3296 56.8184 87.3554 56.6781C87.2852 56.5507 87.2237 56.4204 87.1478 56.2944L87.2852 57.1019ZM12.888 42.8751C12.8608 43.0126 12.8451 43.1501 12.8207 43.2875C12.8923 43.4149 12.9539 43.5438 13.0255 43.6684L12.888 42.8751ZM43.3262 12.8322C43.1973 12.7592 43.0627 12.6976 42.931 12.6274C42.7978 12.6546 42.6632 12.6818 42.5301 12.7076L43.3262 12.8322Z" fill="' + fill + '"/></svg>';
                        }
                        skype += '</a>';
                        skype += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', skype);
                    }
                    else if (item.indexOf('facebook.com') !== -1) {
                        var fb = '<div class="' + groupName + '-social-links__item">';
                        fb += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            fb += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.6142 0 50-22.3858 50-50S77.6142 0 50 0 0 22.3858 0 50s22.3858 50 50 50Zm3.431-73.9854c-2.5161.0701-5.171.6758-7.0464 2.4577-1.5488 1.4326-2.329 3.5177-2.5044 5.602-.0534 1.4908-.0458 2.9855-.0382 4.4796.0058 1.1205.0115 2.2407-.0085 3.3587-.6888.005-1.3797.0036-2.0709.0021-.9218-.0019-1.8441-.0038-2.7626.0096 0 .8921.0013 1.7855.0026 2.6797.0026 1.791.0052 3.5853-.0026 5.3799.9185.0134 1.8409.0115 2.7627.0096.6912-.0015 1.382-.0029 2.0708.0021.0155 3.5565.0127 7.1128.0098 10.669-.0036 4.4452-.0072 8.8903.0252 13.3354 1.8903-.0134 3.7765-.0115 5.6633-.0095 1.4152.0014 2.8306.0028 4.2484-.0022.0117-4.0009.0088-7.9986.0058-11.9963-.0029-3.9979-.0058-7.9957.0059-11.9964.9533-.005 1.9067-.0036 2.86-.0021 1.2713.0019 2.5425.0038 3.8137-.0096.396-2.679.7335-5.3814.9198-8.0947-1.2576-.0058-2.5155-.0058-3.7734-.0058-1.2578 0-2.5157 0-3.7734-.0059 0-.4689-.0007-.9378-.0014-1.4066-.0022-1.4063-.0044-2.8123.0131-4.2188.198-1.0834 1.3158-1.9104 2.3992-1.8403h5.1476c.0117-2.8069.0117-5.602 0-8.4089-.6636 0-1.3273-.0007-1.9911-.0014-1.9915-.0022-3.9832-.0044-5.975.0131Z" fill="' + fill + '"/></svg>';
                        } else {
                            fb += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M43.3077 14.1204C46.4333 11.1506 50.8581 10.1412 55.0516 10.0244C59.4777 9.98539 63.9037 10.0049 68.3285 10.0049C68.348 14.683 68.348 19.3416 68.3285 24.0197C65.4757 24.0197 62.6021 24.0197 59.7492 24.0197C57.9435 23.9028 56.0805 25.2811 55.7505 27.0868C55.7116 30.2125 55.7311 33.3369 55.7311 36.4625C59.9233 36.482 64.1168 36.4625 68.3091 36.482C67.9986 41.0042 67.436 45.5082 66.7761 49.9732C63.0684 50.0122 59.3608 49.9732 55.6531 49.9927C55.6142 63.3281 55.6726 76.6439 55.6336 89.9805C50.1203 90 44.6276 89.961 39.1142 90C39.0168 76.6646 39.1142 63.3293 39.0558 49.9927C36.377 49.9732 33.6788 50.0122 31 49.9732C31.0195 45.4887 31 41.0054 31 36.5404C33.6788 36.5015 36.377 36.5404 39.0558 36.521C39.1337 32.1728 38.9778 27.8052 39.1337 23.4571C39.4259 19.9833 40.7263 16.5082 43.3077 14.1204Z" fill="' + fill + '"/></svg>';
                        }
                        fb += '</a>';
                        fb += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', fb);
                    }
                    else if (item.indexOf('twitter.com') !== -1) {
                        var twi = '<div class="' + groupName + '-social-links__item">';
                        twi += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            twi += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm19.091-63.636c2.046-.227 4.09-.682 5.909-1.591-1.364 2.045-2.954 3.863-5.228 5v1.364c0 13.636-10.227 29.09-29.09 29.09-5.909 0-11.137-1.59-15.682-4.545.909.227 1.59.227 2.5.227 4.773 0 9.318-1.59 12.727-4.318-4.545 0-8.181-2.955-9.545-7.046.455.227 1.137.227 1.818.227.907 0 1.814-.226 2.72-.453l.008-.002c-4.772-.909-8.182-5-8.182-10v-.227a8.196 8.196 0 0 0 4.546 1.364c-2.727-1.819-4.546-4.773-4.546-8.41 0-2.045.455-3.636 1.364-5.226 5.227 6.136 12.727 10.227 21.136 10.682-.227-.682-.227-1.364-.227-2.273A10.184 10.184 0 0 1 59.546 30c2.954 0 5.681 1.136 7.5 3.181 2.5-.454 4.545-1.362 6.59-2.5-.909 2.501-2.5 4.319-4.545 5.683Z" fill="' + fill + '"/></svg>';
                        } else {
                            twi += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M90 25.6368C87.0903 27.091 83.8187 27.8187 80.5458 28.1819C83.8187 26 86.3639 23.0916 87.8181 19.091C84.5452 20.9097 81.2723 22.3639 77.2729 23.0903C74.3632 19.8174 70.0006 18 65.2735 18C56.1826 18 48.9103 25.2723 48.9103 34.3632C48.9103 35.8174 48.9103 36.9084 49.2735 37.9994C35.8187 37.2716 23.8193 30.7271 15.4561 20.9084C14.0019 23.4536 13.2742 25.9987 13.2742 29.2716C13.2742 35.0897 16.1838 39.8168 20.5464 42.7265C18.0013 42.7265 15.4561 41.9987 13.2742 40.5445V40.9078C13.2742 48.9078 18.729 55.4536 26.3645 56.9078C24.9103 57.271 23.4548 57.6355 22.0006 57.6355C20.9097 57.6355 19.8187 57.6355 19.091 57.2723C21.2729 63.8181 27.091 68.5452 34.3632 68.5452C28.9084 72.909 21.6361 75.4542 13.9994 75.4542C12.5452 75.4542 11.4542 75.4542 10 75.091C17.2723 79.8181 25.6368 82.3632 35.091 82.3632C65.2723 82.3632 81.6355 57.6368 81.6355 35.8187V33.6368C85.2729 31.8181 87.8181 28.9097 90 25.6368Z" fill="' + fill + '"/></svg>';
                        }
                        twi += '</a>';
                        twi += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', twi);
                    }
                    else if (item.indexOf('vk.com') !== -1) {
                        var vk = '<div class="' + groupName + '-social-links__item">';
                        vk += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            vk += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50ZM25 34c.406 19.488 10.15 31.2 27.233 31.2h.968V54.05c6.278.625 11.024 5.216 12.93 11.15H75c-2.436-8.87-8.838-13.773-12.836-15.647C66.162 47.242 71.783 41.62 73.126 34h-8.058c-1.749 6.184-6.932 11.805-11.867 12.336V34h-8.057v21.611C40.147 54.362 33.838 48.304 33.556 34H25Z" fill="' + fill + '"/></svg>';
                        } else {
                            vk += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M53.7512 76.4147C25.0516 76.4147 8.68207 56.7395 8 24H22.376C22.8482 48.03 33.4463 58.2086 41.8411 60.3073V24H55.3782V44.7245C63.668 43.8326 72.3765 34.3885 75.3146 24H88.8514C86.5954 36.802 77.1513 46.2461 70.4355 50.1287C77.1513 53.2767 87.9076 61.5141 92 76.4147H77.0988C73.8983 66.446 65.9241 58.7333 55.3782 57.684V76.4147H53.7512Z" fill="' + fill + '"/></svg>';
                        }
                        vk += '</a>';
                        vk += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', vk);
                    }
                    else if (item.indexOf('instagram') !== -1) {
                        var instagram = '<div class="' + groupName + '-social-links__item">';
                        instagram += ' <a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            instagram += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM25 39.3918C25 31.4558 31.4566 25 39.3918 25H60.6082C68.5442 25 75 31.4566 75 39.3918V60.8028C75 68.738 68.5442 75.1946 60.6082 75.1946H39.3918C31.4558 75.1946 25 68.738 25 60.8028V39.3918ZM36.9883 50.0054C36.9883 42.8847 42.8438 37.0922 50.0397 37.0922C57.2356 37.0922 63.0911 42.8847 63.0911 50.0054C63.0911 57.1252 57.2356 62.9177 50.0397 62.9177C42.843 62.9177 36.9883 57.1252 36.9883 50.0054ZM41.7422 50.0054C41.7422 54.5033 45.4641 58.1638 50.0397 58.1638C54.6153 58.1638 58.3372 54.5041 58.3372 50.0054C58.3372 45.5066 54.6145 41.8469 50.0397 41.8469C45.4641 41.8469 41.7422 45.5066 41.7422 50.0054ZM63.3248 39.6355C65.0208 39.6355 66.3956 38.2606 66.3956 36.5646C66.3956 34.8687 65.0208 33.4938 63.3248 33.4938C61.6288 33.4938 60.2539 34.8687 60.2539 36.5646C60.2539 38.2606 61.6288 39.6355 63.3248 39.6355Z" fill="' + fill + '"/></svg>';
                        } else {
                            instagram += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M66.9644 10H33.04C20.3227 10 10 20.3227 10 32.9573V67.1167C10 79.6816 20.3227 90 33.04 90H66.96C79.6816 90 90 79.6816 90 67.0384V32.9616C90.0044 20.3227 79.6816 10 66.9644 10ZM29.2 50.0022C29.2 38.5083 38.5257 29.2 50.0022 29.2C61.4786 29.2 70.8 38.5083 70.8 50.0022C70.8 61.4961 61.4743 70.8 50.0022 70.8C38.5257 70.8 29.2 61.4961 29.2 50.0022ZM72.8854 31.2027C70.2079 31.2027 68.0789 29.0824 68.0789 26.4049C68.0789 23.7273 70.2035 21.6027 72.8854 21.6027C75.5586 21.6027 77.6833 23.7273 77.6833 26.4049C77.6833 29.0824 75.5586 31.2027 72.8854 31.2027Z" fill="' + fill + '"/><path d="M50.0022 36.4011C42.4659 36.4011 36.4011 42.4876 36.4011 50.0022C36.4011 57.5124 42.4659 63.6033 50.0022 63.6033C57.5429 63.6033 63.6033 57.5124 63.6033 50.0022C63.6033 42.492 57.4514 36.4011 50.0022 36.4011Z" fill="' + fill + '"/></svg>';
                        }
                        instagram += '</a>';
                        instagram += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', instagram);
                    }
                    else if (item.indexOf('tiktok.com') !== -1) {
                        var tiktok = '<div class="' + groupName + '-social-links__item">';
                        tiktok += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            tiktok += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm5.495-74.986c-1.555.002-3.113.004-4.676.028l.001.002c-.04 5.37-.038 10.742-.035 16.12.001 3.007.003 6.015-.004 9.026-.006 1.01-.005 2.019-.004 3.027.002 2.712.005 5.421-.144 8.138-.022.754-.4 1.417-.767 2.06l-.088.154c-1.212 1.977-3.442 3.327-5.769 3.352-3.51.31-6.797-2.563-7.292-5.982-.004-.167-.01-.336-.016-.505-.034-.964-.069-1.948.298-2.846.522-1.482 1.524-2.791 2.843-3.646 1.806-1.255 4.222-1.442 6.29-.773 0-1.318.022-2.636.044-3.953.03-1.767.06-3.534.036-5.303-4.525-.846-9.358.585-12.808 3.59-3.044 2.58-5.005 6.372-5.38 10.336a34.879 34.879 0 0 0 .025 3.1c.431 4.876 3.392 9.418 7.6 11.9 2.54 1.496 5.516 2.309 8.496 2.139 4.858-.082 9.588-2.686 12.313-6.682 1.694-2.4 2.655-5.299 2.818-8.211.042-4.001.04-8.01.036-12.023 0-2.068-.002-4.138.003-6.208 1.082.708 2.189 1.4 3.376 1.938 2.727 1.293 5.746 1.919 8.75 2.017v-8.39c-3.206-.357-6.501-1.415-8.83-3.726-2.335-2.255-3.482-5.504-3.646-8.693-1.156.01-2.312.012-3.47.014Z" fill="' + fill + '"/></svg>';
                        } else {
                            tiktok += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M51.5101 10.0675C55.8728 10 60.2106 10.04 64.5433 10C64.8058 15.1028 66.6409 20.3005 70.3761 23.9082C74.1038 27.6059 79.3766 29.2985 84.5069 29.8711V43.2943C79.6991 43.1368 74.8688 42.1367 70.5061 40.0666C68.606 39.2066 66.8359 38.099 65.1033 36.9664C65.0808 46.707 65.1433 56.435 65.0408 66.1355C64.7808 70.7957 63.2432 75.4335 60.5331 79.2737C56.1728 85.6665 48.6049 89.8343 40.832 89.9643C36.0643 90.2368 31.3015 88.9367 27.2388 86.5416C20.5059 82.5714 15.7682 75.3035 15.0782 67.5031C14.9981 65.8355 14.9706 64.1704 15.0381 62.5428C15.6382 56.2 18.7759 50.1321 23.6461 46.0044C29.1664 41.1967 36.8993 38.9065 44.1397 40.2616C44.2072 45.1994 44.0097 50.1321 44.0097 55.0699C40.702 53.9998 36.8368 54.2999 33.9467 56.3075C31.8365 57.675 30.234 59.7702 29.3989 62.1403C28.7089 63.8304 28.9064 65.708 28.9464 67.5031C29.7389 72.9734 34.9992 77.5711 40.6145 77.0736C44.3372 77.0336 47.9049 74.8735 49.845 71.7108C50.4725 70.6032 51.1751 69.4707 51.2126 68.1681C51.5401 62.2053 51.4101 56.2675 51.4501 50.3046C51.4776 36.8664 51.4101 23.4657 51.5126 10.07L51.5101 10.0675Z" fill="' + fill + '"/></svg>';
                        }
                        tiktok += '</a>';
                        tiktok += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', tiktok);
                    }
                    else if (item.indexOf('ok.ru') !== -1) {
                        var ok = '<div class="' + groupName + '-social-links__item">';
                        ok += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            ok += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm13.463-63.08c0 7.688-6.233 13.92-13.92 13.92-7.688 0-13.92-6.232-13.92-13.92S41.855 23 49.543 23s13.92 6.232 13.92 13.92Zm-7.072 0a6.848 6.848 0 1 0-13.696 0 6.848 6.848 0 0 0 13.696 0Zm3.341 15.006c2.894-2.28 5.07-.967 5.856.612 1.37 2.753-.178 4.084-3.671 6.326-2.96 1.9-7.016 2.619-9.665 2.892l2.217 2.216 8.203 8.203a3.192 3.192 0 0 1 0 4.514l-.376.376a3.192 3.192 0 0 1-4.514 0l-8.203-8.203-8.203 8.203a3.192 3.192 0 0 1-4.514 0l-.376-.376a3.192 3.192 0 0 1 0-4.514l8.203-8.203 2.21-2.21c-2.648-.268-6.748-.983-9.732-2.898-3.494-2.243-5.041-3.573-3.671-6.326.786-1.579 2.963-2.892 5.855-.612 3.91 3.08 10.19 3.08 10.19 3.08s6.282 0 10.191-3.08Z" fill="' + fill + '"/></svg>';
                        } else {
                            ok += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M50.0621 50.4946C61.2444 50.4946 70.3094 41.4296 70.3094 30.2473C70.3094 19.065 61.2444 10 50.0621 10C38.8797 10 29.8147 19.065 29.8147 30.2473C29.8147 41.4296 38.8797 50.4946 50.0621 50.4946ZM50.0621 20.2863C55.5635 20.2863 60.023 24.7459 60.023 30.2473C60.023 35.7488 55.5635 40.2083 50.0621 40.2083C44.5606 40.2083 40.1011 35.7488 40.1011 30.2473C40.1011 24.7471 44.5606 20.2863 50.0621 20.2863ZM73.4004 52.9648C72.2568 50.6681 69.0916 48.7577 64.8833 52.0737C59.1965 56.5547 50.0609 56.5547 50.0609 56.5547C50.0609 56.5547 40.9253 56.5547 35.2384 52.0737C31.0313 48.7577 27.8649 50.6681 26.7213 52.9648C24.7284 56.9686 26.9797 58.9029 32.0613 62.165C36.4012 64.951 42.3644 65.9917 46.2162 66.3817L43.0019 69.596C38.4742 74.1237 34.1032 78.4947 31.0708 81.5271C29.2573 83.3394 29.2573 86.2797 31.0708 88.0932L31.6175 88.6399C33.4309 90.4534 36.3701 90.4522 38.1835 88.6399L50.1147 76.7087C54.6424 81.2364 59.0134 85.6075 62.0459 88.6399C63.8581 90.4534 66.7985 90.4534 68.6119 88.6399L69.1586 88.0932C70.9721 86.2797 70.9709 83.3406 69.1586 81.5271L57.2275 69.596L54.0024 66.3721C57.8567 65.975 63.7565 64.9295 68.0605 62.1662C73.1421 58.9041 75.3933 56.9686 73.4004 52.9648Z" fill="' + fill + '"/></svg>';
                        }
                        ok += '</a>';
                        ok += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', ok);
                    }
                    else if (item.indexOf('behance.net') !== -1 || item.indexOf('behance.com') !== -1) {
                        var behance = '<div class="' + groupName + '-social-links__item">';
                        behance += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            behance += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.6142 0 50-22.3858 50-50S77.6142 0 50 0 0 22.3858 0 50s22.3858 50 50 50Zm-1.4722-51.0072c1.0869-.5533 1.9078-1.167 2.4634-1.8412.9991-1.2023 1.4951-2.7852 1.4951-4.7637 0-1.9173-.4897-3.5669-1.4794-4.9411-1.6488-2.2414-4.4411-3.3824-8.38-3.4468H27v32.3572h14.5721c1.6395 0 3.162-.1468 4.5683-.4371 1.4017-.2904 2.6212-.8327 3.6517-1.6246.915-.6843 1.6763-1.5343 2.2892-2.5412.9638-1.5217 1.4378-3.2435 1.4378-5.1631 0-1.8561-.4207-3.4374-1.2612-4.7394-.835-1.3067-2.0836-2.2555-3.7301-2.859Zm-14.066-9.3729h6.0226c1.5476 0 2.8229.1719 3.8196.5062 1.1599.4803 1.7383 1.4794 1.7383 2.9846 0 1.3624-.4363 2.3112-1.3122 2.8449-.8766.5344-2.0138.8021-3.4209.8021h-6.8474v-7.1378Zm10.1153 20.5507c-.7848.3838-1.8717.5674-3.2765.5674h-6.838v-8.6233h6.9455c1.3867.0133 2.469.1938 3.2357.5486 1.371.6239 2.0577 1.7854 2.0577 3.4664 0 1.9926-.7094 3.3354-2.1244 4.0409Zm29.3836-24.827v3.2365H60.9299v-3.2365h13.0308Zm2.9849 10.7282c.9504 1.3797 1.5625 2.976 1.8474 4.7936.1578 1.0587.2284 2.5945.1994 4.602H62.1169c.0934 2.3293.897 3.9585 2.4227 4.8901.9197.5847 2.0349.8703 3.3408.8703 1.3766 0 2.4988-.3484 3.3629-1.0634.4709-.379.886-.9143 1.2447-1.59h6.1857c-.1616 1.3758-.9064 2.7712-2.2453 4.1893-2.0734 2.2539-4.9819 3.384-8.7167 3.384-3.085 0-5.8044-.9527-8.165-2.8519-2.3521-1.9063-3.534-4.9968-3.534-9.285 0-4.0205 1.0611-7.0985 3.1894-9.2402 2.1363-2.1464 4.8933-3.2145 8.2922-3.2145 2.0146 0 3.8298.3602 5.4504 1.0838 1.6151.7244 2.9493 1.8647 4.0009 3.4319Zm-13.0669 1.8098c-.8609.8789-1.3961 2.075-1.6159 3.5881h10.4426c-.1138-1.6104-.6514-2.83-1.6199-3.6627-.9606-.8358-2.1597-1.2549-3.5912-1.2549-1.5578 0-2.7609.4481-3.6156 1.3295Z" fill="' + fill + '"/></svg>';
                        } else {
                            behance += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M48.7537 46.2442C47.8562 47.3331 46.5301 48.3245 44.7744 49.2182C47.434 50.1931 49.4509 51.7257 50.7998 53.8364C52.1575 55.9396 52.837 58.494 52.837 61.4921C52.837 64.5929 52.0713 67.3743 50.5145 69.8323C49.5244 71.4588 48.2948 72.8317 46.8166 73.9372C45.1521 75.2163 43.1821 76.0923 40.918 76.5613C38.6463 77.0304 36.1869 77.2674 33.5387 77.2674H10V25H35.2425C41.6051 25.104 46.1156 26.9472 48.779 30.5678C50.3776 32.7875 51.1687 35.4522 51.1687 38.5492C51.1687 41.7451 50.3675 44.3021 48.7537 46.2442ZM31.7817 34.078H22.0533V45.6078H22.0546H33.114C35.387 45.6078 37.2239 45.1755 38.6399 44.3122C40.0547 43.4502 40.7596 41.9175 40.7596 39.7168C40.7596 37.2853 39.8253 35.6715 37.9516 34.8957C36.3416 34.3557 34.2816 34.078 31.7817 34.078ZM33.1001 68.1907C35.3693 68.1907 37.125 67.894 38.3927 67.2741C40.6784 66.1344 41.8244 63.9654 41.8244 60.7467C41.8244 58.0313 40.7152 56.1551 38.5005 55.1473C37.262 54.5743 35.5138 54.2827 33.2738 54.2611H22.0546V68.1907H33.1001ZM85.8592 32.3983V27.1703H64.8102V32.3983H85.8579H85.8592ZM93.6676 52.2431C93.2074 49.3071 92.2186 46.7286 90.6834 44.5C88.9847 41.9684 86.8296 40.1264 84.2207 38.9563C81.6029 37.7875 78.6707 37.2056 75.4165 37.2056C69.9261 37.2056 65.4726 38.931 62.0219 42.3981C58.5839 45.8577 56.87 50.8296 56.87 57.3241C56.87 64.2508 58.7792 69.243 62.5785 72.3223C66.3917 75.3901 70.7843 76.9291 75.7676 76.9291C81.8006 76.9291 86.4987 75.1036 89.848 71.4628C92.0107 69.172 93.2138 66.918 93.4749 64.6958H83.4829C82.9035 65.7872 82.2329 66.6518 81.4723 67.2641C80.0766 68.419 78.2638 68.9819 76.0402 68.9819C73.9307 68.9819 72.1293 68.5204 70.6436 67.576C68.1792 66.0712 66.881 63.4395 66.7302 59.6769H93.9896C94.0365 56.4341 93.9224 53.9532 93.6676 52.2431ZM66.966 53.2192C67.3209 50.7751 68.1855 48.8431 69.5762 47.4233C70.9567 45.9997 72.9001 45.2758 75.4165 45.2758C77.7288 45.2758 79.6658 45.9528 81.2175 47.3029C82.7818 48.6479 83.6502 50.6179 83.834 53.2192H66.966Z" fill="' + fill + '"/></svg>';
                        }
                        behance += '</a>';
                        behance += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', behance);
                    }
                    else if (item.indexOf('pinterest.com') !== -1 || item.indexOf('pin.it') !== -1) {
                        var pinterest = '<div class="' + groupName + '-social-links__item">';
                        pinterest += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            pinterest += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.6142 0 50-22.3858 50-50S77.6142 0 50 0 0 22.3858 0 50s22.3858 50 50 50Zm15.246-69.7382C61.5715 26.7539 56.8667 25 51.1317 25c-6.8481 0-12.2498 2.0044-16.2024 6.0131C30.9767 35.0218 29 39.4761 29 44.3761c0 6.1244 2.1158 10.0494 6.3481 11.7757.3342 0 .6123.0142.8351.0419.2228.0276.418-.1533.5846-.5428.1676-.3895.279-.6818.3342-.8769.0553-.1952.1248-.5294.2086-1.0026.0829-.4733.1533-.7656.2086-.877.1666-.557.0276-1.1132-.418-1.6702-1.3921-1.6701-2.0881-3.703-2.0881-6.0968 0-4.064 1.4046-7.5551 4.2164-10.4783 2.8118-2.9232 6.5006-4.3848 11.0663-4.3848 4.064 0 7.2243 1.1006 9.4791 3.2993 2.2548 2.1986 3.3822 5.0523 3.3822 8.5602 0 4.5649-.918 8.463-2.7557 11.6919-1.8377 3.229-4.1762 4.8438-7.0157 4.8438-1.6702 0-3.0061-.5988-4.0087-1.7958-1.0026-1.1969-1.3083-2.6024-.9189-4.2172.2228-.9465.5847-2.2138 1.0856-3.8002.5008-1.5872.9046-2.9793 1.2111-4.1762.3057-1.197.459-2.213.459-3.048 0-1.3368-.3618-2.4358-1.0855-3.2993-.7237-.8636-1.7539-1.295-3.0899-1.295-1.6701 0-3.0899.7656-4.2591 2.2967-1.1693 1.5312-1.754 3.4384-1.754 5.7208 0 1.9482.3342 3.5631 1.0026 4.8438L38.103 66.8428c-.7237 3.1176-.7522 7.0434-.0838 11.7758.1114.4447.3342.5009.6684.1667 2.8403-3.564 4.7048-6.9604 5.596-10.1894.2781-.8903 1.0017-3.7298 2.171-8.5183.557 1.0579 1.5596 1.9759 3.007 2.7557 1.4473.7798 2.9785 1.1693 4.5933 1.1693 4.8991 0 8.9079-2.0044 12.0262-6.0131 3.1184-4.0087 4.6771-9.103 4.6771-15.2836 0-4.7885-1.8376-8.9363-5.5122-12.4441Z" fill="' + fill + '"/></svg>';
                        } else {
                            pinterest += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M50.7878 10C59.2841 10 66.2541 12.5984 71.6978 17.7952C77.1416 22.992 79.8641 29.1368 79.8641 36.231C79.8641 45.3874 77.5548 52.9344 72.935 58.8733C68.3152 64.8121 62.3763 67.7816 55.1184 67.7816C52.726 67.7816 50.4577 67.2046 48.3135 66.0493C46.1692 64.894 44.6839 63.534 43.8587 61.9668C42.1264 69.0609 41.0543 73.2675 40.6423 74.5866C39.322 79.3701 36.5598 84.4019 32.352 89.6819C31.8569 90.177 31.5268 90.0938 31.3618 89.4349C30.3716 82.424 30.4138 76.608 31.4859 71.9894L37.3006 46.8727C36.3104 44.9754 35.8153 42.583 35.8153 39.6967C35.8153 36.3153 36.6814 33.4899 38.4137 31.2215C40.146 28.9532 42.2493 27.819 44.7236 27.819C46.7028 27.819 48.2291 28.4581 49.3012 29.7374C50.3733 31.0168 50.9094 32.6448 50.9094 34.6253C50.9094 35.8624 50.6823 37.3676 50.2294 39.1408C49.7752 40.914 49.1771 42.9764 48.4351 45.3278C47.693 47.6781 47.157 49.5555 46.8269 50.9577C46.2499 53.3501 46.7028 55.4323 48.1881 57.2056C49.6735 58.9788 51.6527 59.866 54.127 59.866C58.3336 59.866 61.7981 57.4736 64.5206 52.69C67.2431 47.9064 68.6031 42.1313 68.6031 35.3685C68.6031 30.1717 66.9329 25.9441 63.5924 22.6868C60.252 19.4294 55.5701 17.7989 49.5494 17.7989C42.7853 17.7989 37.3205 19.9643 33.1549 24.2949C28.9892 28.6256 26.9083 33.7976 26.9083 39.8183C26.9083 43.3648 27.9394 46.3764 30.0018 48.8507C30.6619 49.6759 30.8679 50.4998 30.621 51.325C30.5391 51.4901 30.4349 51.9231 30.312 52.6242C30.1879 53.3253 30.0849 53.8204 30.003 54.1096C29.9211 54.3987 29.7561 54.8318 29.5079 55.4088C29.261 55.9858 28.9719 56.2538 28.6418 56.2128C28.3117 56.1719 27.8997 56.1508 27.4046 56.1508C21.1345 53.5934 18 47.7786 18 38.7053C18 31.4461 20.9285 24.8471 26.7842 18.9083C32.6399 12.9694 40.6423 10 50.7878 10Z" fill="' + fill + '"/></svg>';
                        }
                        pinterest += '</a>';
                        pinterest += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', pinterest);
                    }
                    else if (item.indexOf('vimeo.com') !== -1) {
                        var vimeo = '<div class="' + groupName + '-social-links__item">';
                        vimeo += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            vimeo += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.6142 0 50-22.3858 50-50S77.6142 0 50 0 0 22.3858 0 50s22.3858 50 50 50ZM28.8685 43.3711 27 40.9207s7.8239-9.3426 13.7764-10.5114c4.9324-.9682 6.0055 5.4946 6.963 11.262.268 1.6138.5268 3.1731.8587 4.5 1.4689 5.8705 2.4548 9.2291 3.7371 9.2291 1.2844 0 3.737-3.2737 6.4216-8.2923 2.6889-5.0237-.1157-9.4612-5.3714-6.306C55.4889 28.1909 75.34 25.1587 72.771 39.634c-2.5711 14.4798-16.9323 26.7411-21.2512 29.5414-4.3211 2.8002-8.2616-1.1206-9.6902-4.0869-.7552-1.5611-2.206-6.3062-3.6758-11.1136-1.7153-5.61-3.4564-11.3047-4.1481-12.1225-1.2845-1.5187-5.1372 1.5187-5.1372 1.5187Z" fill="' + fill + '"/></svg>';
                        } else {
                            vimeo += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 33.9925L13.2496 38.254C13.2496 38.254 19.9499 32.9717 22.1838 35.6128C24.4176 38.254 32.9445 70.1403 35.7906 76.0234C38.2752 81.1823 45.1282 88.001 52.6432 83.1311C60.1543 78.2611 85.1303 56.937 89.6018 31.7548C94.0695 6.5803 59.5459 11.8537 55.8877 33.7863C65.0281 28.299 69.9056 36.0163 65.2292 44.7532C60.5603 53.4812 56.295 59.1747 54.0611 59.1747C51.8311 59.1747 50.1166 53.3335 47.5619 43.124C44.922 32.5695 44.9373 13.5568 33.9589 15.7118C23.6068 17.7445 10 33.9925 10 33.9925Z" fill="' + fill + '"/></svg>';
                        }
                        vimeo += '</a>';
                        vimeo += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', vimeo);
                    }
                    else if (item.indexOf('youtube.com') !== -1 || item.indexOf('youtu.be') !== -1) {
                        var youtube = '<div class="' + groupName + '-social-links__item">';
                        youtube += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            youtube += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm17.9-67.374c3.838.346 6 2.695 6.474 6.438.332 2.612.626 6.352.626 10.375 0 7.064-.626 11.148-.626 11.148-.588 3.728-2.39 5.752-6.18 6.18-4.235.48-13.76.7-17.992.7-4.38 0-13.237-.184-17.66-.552-3.8-.317-6.394-2.44-6.916-6.218-.38-2.752-.626-6.022-.626-11.222 0-5.788.209-8.238.7-10.853.699-3.732 2.48-5.54 6.548-5.96C36.516 32.221 40.55 32 49.577 32c4.413 0 13.927.228 18.322.626Zm-23.216 9.761v14.374L58.37 49.5l-13.686-7.114Z" fill="' + fill + '"/></svg>';
                        } else {
                            youtube += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M90.9491 31.8675C90.1526 25.5784 86.5194 21.6336 80.0708 21.0509C72.6871 20.3839 56.7031 20 49.2893 20C34.1245 20 27.3476 20.3704 20.1762 21.1127C13.342 21.8188 10.3503 24.8557 9.1744 31.1252C8.35082 35.5187 8 39.6336 8 49.3586C8 58.0944 8.41255 63.5885 9.05094 68.2108C9.92873 74.5586 14.2861 78.1255 20.6715 78.657C28.1004 79.2758 42.9822 79.5844 50.3403 79.5844C57.4499 79.5844 73.4504 79.214 80.5646 78.41C86.932 77.6903 89.9598 74.2891 90.9491 68.0256C90.9491 68.0256 92 61.1644 92 49.2969C92 42.5395 91.5061 36.255 90.9491 31.8675ZM41.0685 61.598V37.4504L64.0612 49.4008L41.0685 61.598Z" fill="' + fill + '"/></svg>';
                        }
                        youtube += '</a>';
                        youtube += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', youtube);
                    }
                    else if (item.indexOf('snapchat.com') !== -1) {
                        var snapchat = '<div class="' + groupName + '-social-links__item">';
                        snapchat += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            snapchat += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM50.4811 27H50.4834C52.5522 27 59.5571 27.5755 62.8567 34.9738C63.9672 37.4632 63.7008 41.6913 63.4864 45.0887L63.4774 45.2324C63.4541 45.6033 63.4323 45.9576 63.4127 46.3022C63.5669 46.388 63.8378 46.4918 64.2523 46.5114C64.8775 46.4835 65.6019 46.2781 66.4077 45.9005C66.75 45.7402 67.1171 45.7064 67.3646 45.7064C67.7265 45.7064 68.0959 45.7763 68.4073 45.9057L68.4103 45.9065C69.3357 46.2375 69.918 46.9041 69.9323 47.6519C69.9503 48.6035 69.1002 49.4251 67.4052 50.0946C67.1985 50.1766 66.9474 50.2563 66.6798 50.3412L66.6793 50.3414C65.7231 50.6446 64.2771 51.1035 63.8852 52.0281C63.682 52.5066 63.7625 53.1227 64.1251 53.8585C64.1293 53.8668 64.1333 53.8752 64.1372 53.8837C64.141 53.8919 64.1447 53.9003 64.1485 53.9089C64.2756 54.2046 67.3338 61.18 74.1317 62.3002C74.6546 62.386 75.0277 62.8517 74.9984 63.3806C74.9894 63.5386 74.9517 63.6965 74.8863 63.8485C74.3777 65.0357 72.2268 65.9084 68.3088 66.5162C68.1786 66.6923 68.0425 67.3152 67.9597 67.6951C67.8754 68.0773 67.7912 68.4557 67.6731 68.8559C67.5098 69.4142 67.0991 69.7219 66.5168 69.7219H66.4882L66.4588 69.7211C66.1812 69.7211 65.8013 69.6745 65.3296 69.5819C64.5765 69.4345 63.7324 69.299 62.6649 69.299C62.0442 69.299 61.401 69.3525 60.7548 69.4601C59.492 69.6698 58.4192 70.4277 57.1747 71.307L57.1715 71.3092C55.3915 72.5679 53.3753 73.9935 50.3088 73.9935C50.1712 73.9935 50.0418 73.989 49.9424 73.9845C49.8582 73.9913 49.7739 73.9935 49.6897 73.9935C46.624 73.9935 44.607 72.5679 42.8263 71.3085C41.5834 70.4298 40.5091 69.6707 39.2452 69.4601C38.5975 69.3532 37.9543 69.299 37.3344 69.299C36.2174 69.299 35.3247 69.4731 34.6727 69.6001L34.6697 69.6007L34.6657 69.6015C34.2325 69.6862 33.8577 69.7595 33.5404 69.7595C32.7527 69.7595 32.4458 69.2795 32.3277 68.877C32.2081 68.4704 32.1241 68.0852 32.0426 67.7113L32.0411 67.7041L32.038 67.6903C31.9543 67.3085 31.8198 66.6954 31.6905 66.5207C27.7739 65.9129 25.6223 65.0394 25.1122 63.847C25.0475 63.695 25.0106 63.5386 25.0016 63.3813C24.9723 62.8524 25.3454 62.3868 25.8683 62.3002C32.6632 61.1815 35.7236 54.2053 35.8508 53.9089C35.8548 53.8998 35.8587 53.8909 35.8628 53.8821C35.8664 53.8742 35.8702 53.8663 35.8741 53.8585C36.2367 53.1227 36.318 52.5066 36.1149 52.0273C35.7231 51.1039 34.2782 50.645 33.3212 50.341L33.32 50.3407C33.0552 50.2571 32.8039 50.1774 32.5948 50.0946C30.2791 49.1798 29.9571 48.1288 30.0941 47.4089C30.2836 46.4083 31.5039 45.7372 32.524 45.7372C32.8182 45.7372 33.0853 45.7914 33.3162 45.8997C34.1867 46.3075 34.9608 46.5144 35.6153 46.5144C36.1058 46.5144 36.4173 46.397 36.5881 46.3022C36.5714 46.0064 36.5524 45.7032 36.5336 45.4041C36.5268 45.297 36.5201 45.1905 36.5136 45.085C36.2999 41.6898 36.0344 37.4647 37.1433 34.9776C40.4414 27.5838 47.4312 27.009 49.4941 27.009C49.558 27.009 50.3592 27.0008 50.3592 27.0008C50.3784 27.0004 50.3981 27.0002 50.4184 27.0001C50.4387 27 50.4596 27 50.4811 27Z" fill="' + fill + '"/></svg>';
                        } else {
                            snapchat += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M51.225 15H51.2217C51.1573 15 51.0964 15 51.0388 15.0011C51.0388 15.0011 49.837 15.0135 49.7411 15.0135C46.6468 15.0135 36.1621 15.8757 31.2149 26.9664C29.5515 30.6971 29.9499 37.0346 30.2704 42.1274C30.3076 42.7278 30.3482 43.3507 30.3821 43.9533C30.1259 44.0955 29.6587 44.2715 28.923 44.2715C27.9412 44.2715 26.78 43.9612 25.4743 43.3496C25.1279 43.1871 24.7273 43.1058 24.2861 43.1058C22.7558 43.1058 20.9255 44.1124 20.6411 45.6133C20.4357 46.6933 20.9187 48.2697 24.3921 49.642C24.7059 49.7661 25.0828 49.8857 25.48 50.011C26.9154 50.4669 29.0843 51.1552 29.6723 52.541C29.977 53.2599 29.8551 54.1841 29.3112 55.2877C29.2988 55.3126 29.2875 55.3374 29.2762 55.3633C29.0855 55.808 24.4948 66.2723 14.3024 67.9504C13.5181 68.0801 12.9584 68.7787 13.0024 69.572C13.016 69.8078 13.0713 70.0426 13.1683 70.2705C13.9334 72.0591 17.1609 73.3693 23.0357 74.2811C23.2321 74.5463 23.4363 75.4852 23.5616 76.0562C23.6846 76.6204 23.811 77.2016 23.9915 77.8155C24.1687 78.4192 24.6291 79.1392 25.8106 79.1392C26.288 79.1392 26.8522 79.0286 27.5045 78.9011C28.4829 78.7104 29.8235 78.4486 31.5015 78.4486C32.4314 78.4486 33.3962 78.5298 34.3679 78.6901C36.2637 79.006 37.8752 80.1447 39.7394 81.4627C42.4105 83.3518 45.436 85.4903 50.0345 85.4903C50.1609 85.4903 50.2873 85.4869 50.4137 85.4767C50.5626 85.4835 50.7567 85.4903 50.9632 85.4903C55.5629 85.4903 58.5872 83.3518 61.2572 81.4639C63.126 80.1435 64.7363 79.0049 66.6321 78.6901C67.6015 78.5287 68.5663 78.4486 69.4973 78.4486C71.0986 78.4486 72.3648 78.6517 73.4944 78.8729C74.202 79.0117 74.7718 79.0816 75.1882 79.0816L75.2323 79.0828H75.2751C76.1486 79.0828 76.7647 78.6212 77.0096 77.7839C77.1868 77.1836 77.3132 76.6159 77.4396 76.0427C77.5637 75.4728 77.7679 74.5384 77.9632 74.2743C83.8403 73.3625 87.0666 72.0535 87.8294 70.2728C87.9276 70.0448 87.984 69.8078 87.9976 69.5709C88.0416 68.7775 87.4819 68.079 86.6976 67.9504C76.5007 66.2701 71.9134 55.8068 71.7227 55.3633C71.7114 55.3374 71.7001 55.3126 71.6877 55.2877C71.1438 54.1841 71.023 53.2599 71.3277 52.5421C71.9157 51.1552 74.0846 50.4669 75.5189 50.0121C75.9206 49.8846 76.2975 49.765 76.6079 49.642C79.1503 48.6376 80.4255 47.4053 80.3984 45.9778C80.377 44.8561 79.5035 43.8563 78.1155 43.3597L78.111 43.3586C77.6438 43.1645 77.0897 43.0596 76.5469 43.0596C76.1757 43.0596 75.625 43.1103 75.1115 43.3507C73.9029 43.9172 72.8162 44.2253 71.8784 44.267C71.2566 44.2377 70.8504 44.082 70.619 43.9533C70.6484 43.4365 70.6811 42.905 70.7161 42.3486L70.7296 42.1331C71.0513 37.0369 71.4507 30.6948 69.7851 26.9607C64.8356 15.8633 54.3284 15 51.225 15Z" fill="' + fill + '"/></svg>';
                        }
                        snapchat += '</a>';
                        snapchat += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', snapchat);
                    }
                    else if (item.indexOf('linkedin.com') !== -1) {
                        var linkedin = '<div class="' + groupName + '-social-links__item">';
                        linkedin += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            linkedin += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.6142 0 50-22.3858 50-50S77.6142 0 50 0 0 22.3858 0 50s22.3858 50 50 50Zm23-31.0002V52.363c0-8.9114-4.7586-13.0586-11.1079-13.0586-5.1234 0-7.4123 2.8199-8.6942 4.7942v-4.1124h-9.6468c.1297 2.7235 0 29.0136 0 29.0136h9.6484v-16.203c0-.8675.0657-1.731.3203-2.3513.6981-1.7351 2.284-3.5286 4.9491-3.5286 3.4905 0 4.8859 2.6611 4.8859 6.5602v15.5227H73ZM53.1979 44.0986v.094h-.0632c.0069-.0111.0148-.0228.0229-.0346.0137-.0198.0281-.0401.0403-.0594ZM28 31.0123C28 28.1648 30.1583 26 33.4591 26c3.3016 0 5.3302 2.1648 5.3934 5.0123 0 2.7851-2.0918 5.0156-5.4567 5.0156h-.064c-3.2351 0-5.3318-2.2305-5.3318-5.0156Zm10.2177 37.9875h-9.6445V39.9862h9.6445v29.0136Z" fill="' + fill + '"/></svg>';
                        } else {
                            linkedin += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M90 58.8676V88.444H72.8529V60.8481C72.8529 53.9164 70.3722 49.1856 64.1669 49.1856C59.429 49.1856 56.6096 52.374 55.3686 55.4587C54.9159 56.5614 54.7992 58.0965 54.7992 59.6388V88.444H37.6463C37.6463 88.444 37.877 41.7061 37.6463 36.8644H54.7963V44.1753C54.7617 44.2301 54.717 44.2891 54.6839 44.3425H54.7963V44.1753C57.0752 40.6654 61.1443 35.6522 70.2526 35.6522C81.5403 35.6522 90 43.025 90 58.8676ZM19.705 12C13.837 12 10 15.8486 10 20.9108C10 25.8621 13.7275 29.8274 19.4787 29.8274H19.5926C25.5745 29.8274 29.2933 25.8621 29.2933 20.9108C29.1809 15.8486 25.5745 12 19.705 12ZM11.0191 88.444H28.1647V36.8644H11.0191V88.444Z" fill="' + fill + '"/></svg>';
                        }
                        linkedin += '</a>';
                        linkedin += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', linkedin);
                    }
                    else if (item.indexOf('hh.ru') !== -1) {
                        var hh = '<div class="' + groupName + '-social-links__item">';
                        hh += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            hh += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.6142 0 50-22.3858 50-50S77.6142 0 50 0 0 22.3858 0 50s22.3858 50 50 50ZM23 70.1231V29h7.4643v15.7597l1.0149-.9811c1.2041-1.1639 1.95-1.6902 3.2181-2.2703 1.8106-.8284 3.795-1.1243 5.7858-.863 3.3098.4347 5.8216 2.0471 6.983 4.4827 1.136 2.382 1.2227 3.5316 1.1735 15.5625l-.0384 9.3631h-7.3333l-.081-9.6905c-.088-10.5366-.1075-10.8169-.8403-12.0673-1.3585-2.318-5.4383-2.5267-7.753-.3966-.9416.8665-1.4075 1.7529-1.8279 3.477-.1796.7374-.2231 2.2062-.2892 9.7726l-.0777 8.9048-3.6994.0348L23 70.1231Zm29.3652-20.4326c-.0185-11.1997-.0057-20.4367.0286-20.5268.0478-.1256.917-.1637 3.7331-.1637h3.6707v7.7698c0 4.2735.027 7.7969.0599 7.8298.033.033.4829-.341.9999-.8312 2.4374-2.3104 5.2795-3.4007 8.3214-3.1923 4.1592.2848 7.1323 2.3968 8.222 5.8406.5531 1.7477.5984 2.7724.5988 13.5229L78 70.1231l-3.6994-.0347-3.6994-.0348-.0748-9.9524c-.0774-10.3036-.088-10.4966-.6382-11.5751-1.0822-2.1212-4.2138-2.7414-6.8562-1.3578-.974.5101-1.6357 1.1848-2.1511 2.1936-.9172 1.795-.9653 2.3555-1.0427 12.149l-.0681 8.6122-3.6856-.0348-3.6857-.0347-.0336-20.3631Z" fill="' + fill + '"/></svg>';
                        } else {
                            hh += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M10 49.9078V79.8154L15.381 79.765L20.7619 79.7143L20.8749 66.7619C20.971 55.7562 21.0343 53.6198 21.2956 52.5472C21.907 50.0394 22.5848 48.7501 23.9543 47.4897C27.3211 44.3914 33.2554 44.695 35.2314 48.0667C36.2973 49.8853 36.3257 50.2931 36.4537 65.619L36.5714 79.7143H41.9048H47.2381L47.2939 66.0952C47.3655 48.5958 47.2394 46.9236 45.587 43.4589C43.8977 39.9162 40.2442 37.5709 35.4299 36.9387C32.5343 36.5585 29.6478 36.989 27.0143 38.1939C25.1697 39.0377 24.0848 39.8032 22.3333 41.4962L20.8571 42.9232V31.4615V20H15.4286H10V49.9078ZM52.7547 20.2381C52.7048 20.3691 52.6861 33.8048 52.713 50.0952L52.7619 79.7143L58.1229 79.7648L63.4838 79.8154L63.5829 67.2886C63.6954 53.0434 63.7653 52.2282 65.0994 49.6173C65.8491 48.1499 66.8116 47.1686 68.2284 46.4267C72.0718 44.4141 76.6269 45.3162 78.201 48.4015C79.0013 49.9703 79.0168 50.251 79.1293 65.2381L79.2381 79.7143L84.619 79.765L90 79.8154L89.9994 65.003C89.9989 49.3659 89.933 47.8754 89.1284 45.3333C87.5434 40.3242 83.2189 37.2522 77.1691 36.8379C72.7446 36.5349 68.6107 38.1208 65.0653 41.4813C64.3133 42.1943 63.6589 42.7383 63.6109 42.6903C63.563 42.6425 63.5238 37.5175 63.5238 31.3015V20H58.1846C54.0884 20 52.8242 20.0554 52.7547 20.2381Z" fill="' + fill + '"/></svg>';
                        }
                        hh += '</a>';
                        hh += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', hh);
                    }
                    else if (item.indexOf('soundcloud.com') !== -1) {
                        var soundcloud = '<div class="' + groupName + '-social-links__item">';
                        soundcloud += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            soundcloud += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm19.701-52.297c-1.137 0-2.222.23-3.212.644C65.83 40.867 59.555 35 51.906 35c-1.873 0-3.7.366-5.312.99-.627.242-.792.492-.799.976V63.31a.976.976 0 0 0 .897.952c.02.003 23.009 0 23.009 0 4.586 0 8.3-3.673 8.3-8.259a8.3 8.3 0 0 0-8.3-8.3Zm-27-10.759a.927.927 0 0 1 .915.91l.403 18.699-.404 6.787v-.007a.924.924 0 0 1-.915.912.92.92 0 0 1-.912-.904l-.185-3.349-.191-3.438.373-18.605.003-.095a.917.917 0 0 1 .337-.701.896.896 0 0 1 .575-.209Zm-7.13 4.26a.69.69 0 0 0-.684-.68c-.374 0-.675.3-.683.68l-.428 15.345.428 7.044a.684.684 0 0 0 .683.676.69.69 0 0 0 .683-.68l.48-7.04-.48-15.344Zm-5.09 1.679a.579.579 0 0 1 .57-.565.58.58 0 0 1 .567.565l.56 13.702-.56 7.16v-.003a.58.58 0 0 1-.567.564.578.578 0 0 1-.57-.561l-.492-7.16.493-13.702Zm-6.49 5.881a.404.404 0 0 0-.395.39L23 56.54l.596 7.148a.403.403 0 0 0 .394.388c.21 0 .38-.168.397-.389l.676-7.147-.676-7.39a.406.406 0 0 0-.397-.387Zm3.846.92a.458.458 0 0 0-.452-.442.458.458 0 0 0-.453.449l-.562 6.85.562 7.207a.46.46 0 0 0 .453.449c.24 0 .436-.194.451-.449l.64-7.206-.64-6.857Zm10.93-8.335a.802.802 0 0 0-.8.797l-.355 14.405.358 6.932a.798.798 0 0 0 1.596-.005v.006l.401-6.931-.401-14.408a.8.8 0 0 0-.8-.796Z" fill="' + fill + '"/></svg>';
                        } else {
                            soundcloud += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M74.4194 48.3839C75.9307 47.7507 77.5875 47.4002 79.3243 47.4002C86.3276 47.4002 92.0003 53.0765 92.0003 60.0773C92.0003 67.0806 86.3276 72.6902 79.3243 72.6902C79.3243 72.6902 44.2148 72.695 44.1832 72.6902C43.4264 72.615 42.8248 72.0122 42.8139 71.2371V31.0031C42.8248 30.2633 43.0771 29.8812 44.034 29.5113C46.4974 28.5591 49.2859 28 52.1471 28C63.8296 28 73.4115 36.9608 74.4194 48.3839ZM38.7997 31.1694C38.5911 31.0397 38.3473 30.9693 38.0877 30.9693C37.7566 30.9693 37.4497 31.0882 37.2096 31.2883C36.8979 31.5442 36.6977 31.9299 36.6941 32.3593L36.6905 32.5048L36.1204 60.918L36.4115 66.1698L36.6953 71.2834C36.7038 72.039 37.3297 72.6649 38.0877 72.6649C38.8482 72.6649 39.4741 72.039 39.485 71.2713V71.2822L40.1023 60.9168L39.485 32.3581C39.4777 31.8547 39.2012 31.4096 38.7997 31.1694ZM26.154 36.4369C26.7204 36.4369 27.1777 36.8941 27.1971 37.4763L27.9297 60.9106L27.1971 71.6617C27.1777 72.2451 26.7204 72.7011 26.154 72.7011C25.5827 72.7011 25.123 72.2439 25.1109 71.6689L24.4571 60.9106L25.1109 37.4763C25.123 36.8941 25.5827 36.4369 26.154 36.4369ZM20.2956 39.1768C19.8274 39.1768 19.4453 39.5588 19.4259 40.0391L18.6739 60.9651L19.4259 71.9006C19.4453 72.3772 19.8274 72.7581 20.2956 72.7581C20.7565 72.7581 21.1422 72.376 21.1616 71.8957V71.9006L22.0155 60.9651L21.1616 40.0391C21.1422 39.5588 20.7565 39.1768 20.2956 39.1768ZM8.90967 49.6162C8.93393 49.2778 9.19349 49.0219 9.51248 49.0219C9.83268 49.0219 10.0922 49.2778 10.1189 49.6125L11.1511 60.8985L10.1189 71.8145C10.091 72.1517 9.83147 72.4076 9.51248 72.4076C9.19349 72.4076 8.93271 72.1529 8.90967 71.8145L8 60.8985L8.90967 49.6162ZM14.6988 49.7508C15.0651 49.7508 15.3646 50.0419 15.3877 50.4276L16.3641 60.8997L15.3877 71.9054C15.3646 72.2948 15.0651 72.5907 14.6988 72.5907C14.3252 72.5907 14.0293 72.2948 14.0062 71.9054L13.1487 60.8997L14.0062 50.436C14.0293 50.0419 14.3252 49.7508 14.6988 49.7508ZM30.8593 38.9138C30.8751 38.2321 31.41 37.6972 32.0795 37.6972C32.749 37.6972 33.2875 38.2321 33.2997 38.9125L33.9134 60.9168L33.2997 71.5017V71.4932C33.2888 72.1749 32.749 72.7098 32.0795 72.7098C31.41 72.7098 30.8751 72.1737 30.863 71.5005L30.316 60.9144L30.8593 38.9138Z" fill="' + fill + '"/></svg>';
                        }
                        soundcloud += '</a>';
                        soundcloud += ' </div>';
                        socialWrapper.insertAdjacentHTML('beforeend', soundcloud);
                    }
                    else if (item.indexOf('github.com') !== -1) {
                        var github = '<div class="' + groupName + '-social-links__item">';
                        github += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            github += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M52.078 99.958C78.728 98.868 100 76.918 100 50c0-27.614-22.386-50-50-50S0 22.386 0 50s22.386 50 50 50l.368-.001.335.001c.432 0 .894-.015 1.375-.042Zm0 0c3.828-.216 8.81-1.186 8.81-1.186l-.053-2.99s.05-5.839.05-11.388c0-3.873-1.327-6.407-2.818-7.688 9.248-1.027 18.954-4.537 18.954-20.484 0-4.532-1.607-8.238-4.268-11.14.427-1.05 1.852-5.271-.413-10.986 0 0-3.479-1.116-11.405 4.256-3.316-.92-6.867-1.381-10.392-1.397-3.53.016-7.082.476-10.393 1.397-7.93-5.372-11.416-4.256-11.416-4.256-2.258 5.716-.833 9.937-.407 10.986-2.655 2.902-4.272 6.607-4.272 11.14 0 15.907 9.69 19.469 18.909 20.517-1.186 1.038-2.258 2.867-2.635 5.55-2.366 1.062-8.378 2.894-12.081-3.45 0 0-2.193-3.984-6.358-4.278 0 0-4.055-.052-.286 2.523 0 0 2.722 1.277 4.609 6.073 0 0 2.436 8.073 13.984 5.565.01 1.884.026 3.515.038 4.77.01 1.053.018 1.84.018 2.29l.01 2.889c3.232.84 6.617 1.3 10.105 1.328a50.99 50.99 0 0 0 1.71-.041Z" fill="' + fill + '"/></svg>';
                        } else {
                            github += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M41.0262 86.4895C44.8161 87.4745 48.7909 88 52.8903 88C57.2916 88 64.4639 86.6046 64.4639 86.6046L64.4035 83.2062C64.4035 83.2062 64.461 76.5717 64.461 70.2656C64.461 65.8652 62.9524 62.9858 61.258 61.53C71.7673 60.362 82.7964 56.3739 82.7964 38.2518C82.7964 33.1023 80.9708 28.8907 77.947 25.5932C78.4319 24.3997 80.0509 19.6031 77.4772 13.1092C77.4772 13.1092 73.524 11.8412 64.5177 17.9455C60.7494 16.8992 56.7133 16.3755 52.7082 16.3576C48.6966 16.3755 44.6604 16.8992 40.8979 17.9455C31.8859 11.8412 27.9252 13.1092 27.9252 13.1092C25.3589 19.6041 26.9779 24.4007 27.4629 25.5932C24.4456 28.8907 22.6078 33.1014 22.6078 38.2518C22.6078 56.3287 33.62 60.3761 44.0953 61.5668C42.748 62.7461 41.5291 64.8246 41.1007 67.873C38.4128 69.0806 31.5802 71.1619 27.3723 63.9538C27.3723 63.9538 24.8806 59.4261 20.1472 59.0921C20.1472 59.0921 15.5402 59.0326 19.8226 61.9593C19.8226 61.9593 22.9153 63.4103 25.0598 68.8598C25.0598 68.8598 27.8289 78.0341 40.9507 75.1839C40.9734 79.121 41.0149 82.0873 41.0149 83.2072" fill="' + fill + '"/></svg>';
                        }
                        github += '</a>';
                        github += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', github);
                    }
                    else if (item.indexOf('dribbble.com') !== -1) {
                        var dribbble = '<div class="' + groupName + '-social-links__item">';
                        dribbble += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            dribbble += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50ZM28.35 37.45C26.117 41.283 25 45.467 25 50c0 4.533 1.117 8.717 3.35 12.55s5.267 6.867 9.1 9.1C41.283 73.883 45.467 75 50 75c4.533 0 8.717-1.117 12.55-3.35s6.867-5.267 9.1-9.1C73.883 58.717 75 54.533 75 50c0-4.533-1.117-8.717-3.35-12.55s-5.267-6.867-9.1-9.1C58.717 26.117 54.533 25 50 25c-4.533 0-8.717 1.117-12.55 3.35s-6.867 5.267-9.1 9.1Zm6.05 26.3c-3.5-3.967-5.25-8.55-5.25-13.75 0-.133.008-.3.025-.5s.025-.367.025-.5c.633.033 1.6.05 2.9.05 6.667 0 12.867-.917 18.6-2.75.467.933.95 1.983 1.45 3.15-3.3.733-6.683 2.517-10.15 5.35-3.467 2.833-6 5.817-7.6 8.95Zm-1.35-18.8c-1.433 0-2.517-.033-3.25-.1.767-2.867 2.092-5.483 3.975-7.85s4.142-4.217 6.775-5.55c3.033 3 5.817 6.75 8.35 11.25-5 1.5-10.283 2.25-15.85 2.25ZM50 70.85c-4.733 0-8.983-1.467-12.75-4.4 1.5-2.967 3.808-5.8 6.925-8.5s6.208-4.383 9.275-5.05a73.443 73.443 0 0 1 3.9 16.55c-2.433.933-4.883 1.4-7.35 1.4Zm3.05-29.65c-2.5-4.533-5.217-8.317-8.15-11.35 1.7-.467 3.4-.7 5.1-.7 5 0 9.433 1.6 13.3 4.8-2.3 2.933-5.717 5.35-10.25 7.25Zm3.5 7.6c-.633-1.633-1.2-2.983-1.7-4.05 5.167-2.267 8.833-5.017 11-8.25 3 3.533 4.633 7.567 4.9 12.1-2.033-.1-4.083-.15-6.15-.15-2.9 0-5.583.117-8.05.35Zm4.7 18.7c-.6-5.2-1.75-10.267-3.45-15.2 2.333-.167 4.417-.25 6.25-.25 2 0 4.217.083 6.65.25a20.191 20.191 0 0 1-3 8.65 20.864 20.864 0 0 1-6.45 6.55Z" fill="' + fill + '"/></svg>';
                        } else {
                            dribbble += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10 50C10 42.7471 11.7871 36.0529 15.36 29.92C18.9329 23.7871 23.7871 18.9329 29.92 15.36C36.0529 11.7871 42.7471 10 50 10C57.2529 10 63.9471 11.7871 70.08 15.36C76.2129 18.9329 81.0671 23.7871 84.64 29.92C88.2129 36.0529 90 42.7471 90 50C90 57.2529 88.2129 63.9471 84.64 70.08C81.0671 76.2129 76.2129 81.0671 70.08 84.64C63.9471 88.2129 57.2529 90 50 90C42.7471 90 36.0529 88.2129 29.92 84.64C23.7871 81.0671 18.9329 76.2129 15.36 70.08C11.7871 63.9471 10 57.2529 10 50ZM16.64 50C16.64 58.32 19.44 65.6529 25.04 72C27.6 66.9871 31.6529 62.2129 37.2 57.68C42.7471 53.1471 48.16 50.2929 53.44 49.12C52.64 47.2529 51.8671 45.5729 51.12 44.08C41.9471 47.0129 32.0271 48.48 21.36 48.48C19.28 48.48 17.7329 48.4529 16.72 48.4C16.72 48.6129 16.7071 48.88 16.68 49.2C16.6529 49.52 16.64 49.7871 16.64 50ZM17.68 41.76C18.8529 41.8671 20.5871 41.92 22.88 41.92C31.7871 41.92 40.24 40.72 48.24 38.32C44.1871 31.12 39.7329 25.12 34.88 20.32C30.6671 22.4529 27.0529 25.4129 24.04 29.2C21.0271 32.9871 18.9071 37.1729 17.68 41.76ZM29.6 76.32C35.6271 81.0129 42.4271 83.36 50 83.36C53.9471 83.36 57.8671 82.6129 61.76 81.12C60.6929 72 58.6129 63.1729 55.52 54.64C50.6129 55.7071 45.6671 58.4 40.68 62.72C35.6929 67.04 32 71.5729 29.6 76.32ZM41.84 17.76C46.5329 22.6129 50.88 28.6671 54.88 35.92C62.1329 32.88 67.6 29.0129 71.28 24.32C65.0929 19.2 58 16.64 50 16.64C47.28 16.64 44.56 17.0129 41.84 17.76ZM57.76 41.6C58.56 43.3071 59.4671 45.4671 60.48 48.08C64.4271 47.7071 68.72 47.52 73.36 47.52C76.6671 47.52 79.9471 47.6 83.2 47.76C82.7729 40.5071 80.16 34.0529 75.36 28.4C71.8929 33.5729 66.0271 37.9729 57.76 41.6ZM62.48 53.68C65.2 61.5729 67.04 69.68 68 78C72.2129 75.28 75.6529 71.7871 78.32 67.52C80.9871 63.2529 82.5871 58.64 83.12 53.68C79.2271 53.4129 75.68 53.28 72.48 53.28C69.5471 53.28 66.2129 53.4129 62.48 53.68Z" fill="' + fill + '"/></svg>';
                        }
                        dribbble += '</a>';
                        dribbble += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', dribbble);
                    }
                    else if (item.indexOf('medium.com') !== -1) {
                        var medium = '<div class="' + groupName + '-social-links__item">';
                        medium += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            medium += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm4.023-50.382C54.023 40.993 47.08 34 38.512 34S23 40.993 23 49.618c0 8.626 6.945 15.618 15.512 15.618 8.566 0 15.511-6.992 15.511-15.618Zm17.016 0c0-8.12-3.472-14.703-7.756-14.703-4.283 0-7.755 6.584-7.755 14.703 0 8.12 3.472 14.704 7.756 14.704 4.283 0 7.756-6.585 7.756-14.704Zm6.961 0c0-7.274-1.222-13.172-2.728-13.172-1.506 0-2.727 5.898-2.727 13.172 0 7.275 1.22 13.172 2.727 13.172S78 56.891 78 49.618Z" fill="' + fill + '"/></svg>';
                        } else {
                            medium += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M31.6909 26C44.7751 26 55.381 36.68 55.381 49.8535C55.381 63.027 44.7743 73.7062 31.6909 73.7062C18.6076 73.7062 8 63.027 8 49.8535C8 36.68 18.6067 26 31.6909 26ZM69.5236 27.3973C76.0657 27.3973 81.3691 37.4503 81.3691 49.8535H81.3699C81.3699 62.2535 76.0665 72.3097 69.5244 72.3097C62.9824 72.3097 57.679 62.2535 57.679 49.8535C57.679 37.4535 62.9816 27.3973 69.5236 27.3973ZM87.8339 29.7363C90.1343 29.7363 92 38.7429 92 49.8535C92 60.9609 90.1351 69.9708 87.8339 69.9708C85.5328 69.9708 83.6687 60.9633 83.6687 49.8535C83.6687 38.7437 85.5336 29.7363 87.8339 29.7363Z" fill="' + fill + '"/></svg>';
                        }
                        medium += '</a>';
                        medium += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', medium);
                    }
                    else if (item.indexOf('zen.yandex.ru') !== -1) {
                        var zen = '<div class="' + groupName + '-social-links__item">';
                        zen += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            zen += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.6142 0 50-22.3858 50-50S77.6142 0 50 0 0 22.3858 0 50s22.3858 50 50 50ZM35.3336 27.8846c1.2589-.3077 2.3116-.4739 4.8709-.7693.7839-.0905 1.3869-.103 5.2489-.1088L49.8167 27l-.0339.3452c-.0186.1899-.1204 1.6999-.2263 3.3555-.4348 6.8018-.6381 8.3757-1.3516 10.467-.2973.8712-1.0137 2.2987-1.4822 2.9532-.4581.64-1.3831 1.6092-1.9816 2.0761-1.6917 1.3198-3.8089 2.1132-7.0551 2.6436-2.6678.436-4.7613.6235-8.9945.8058-.7307.0315-1.4102.0677-1.5099.0806L27 49.7504l.0166-4.2914.0164-4.2913.2644-2.1817c.3766-3.1087.5331-3.9621.9614-5.2442.5988-1.7921 1.6612-3.2524 3.0514-4.194.9943-.6735 2.4704-1.2837 4.0234-1.6632Zm15.224 4.6389c-.0765-1.1086-.3068-5.1806-.3068-5.4268-.0001-.0912.2362-.0967 4.1877-.0967 3.9405 0 4.2223.0065 4.774.1095.3225.0601 1.072.1598 1.6656.2213 2.4298.2519 3.4802.4076 4.4588.6609 2.7604.7144 4.7564 2.2289 5.8632 4.4489.5777 1.1587.8034 1.961 1.1033 3.9217.2277 1.4894.4354 3.2249.5619 4.695.1036 1.2043.1734 6.194.1076 7.6843l-.0404.912-.4782-.0323c-1.9452-.1314-3.1578-.2092-4.768-.3061-5.2572-.3164-7.4005-.6222-9.2684-1.3223-1.6732-.6272-3.251-1.6887-4.2962-2.8902-.8884-1.0214-1.675-2.3791-2.1437-3.7002-.6773-1.909-1.1383-4.7907-1.4204-8.879ZM27.0033 58.3121v-8.1135l.1799.0002c.0989.0001.5659.0364 1.0378.0806 1.1314.1061 1.975.1679 4.5665.3346 4.1299.2655 6.0308.4888 7.5539.8872 3.8588 1.0095 6.5704 3.5441 7.8248 7.3141.5523 1.6597.9022 3.805 1.2657 7.7605.1121 1.2196.126 1.673.1193 3.8833-.0042 1.3763-.0221 2.5167-.0397 2.5343-.0541.054-7.5172-.2361-10.248-.3983-1.667-.099-2.6352-.2506-4.3727-.685-1.3707-.3426-2.1775-.633-2.8783-1.0361-1.7943-1.0319-3.0155-2.6066-3.7588-4.8469-.3924-1.1825-.6039-2.3774-1.0009-5.6545l-.2495-2.0605Zm43.838-7.92c.685-.0459 1.37-.0913 1.5222-.1009.1522-.0095.3576-.0219.4566-.0274L73 50.2539l-.0008 3.3279c-.0009 4.085-.0714 5.7459-.3382 7.9676-.2117 1.7635-.6244 3.7599-.9962 4.8196-.8917 2.5413-2.6656 4.3097-5.2174 5.2015-1.2738.4451-3.4947.8733-5.597 1.0789-1.7994.176-2.5751.2042-6.4345.2339l-3.9438.0303v-2.0673c0-1.8113.0207-2.3196.1667-4.1037.2446-2.9873.4094-4.3643.6974-5.8284.8877-4.5117 3.1252-7.4157 6.8788-8.9277 1.8378-.7403 4.0014-1.0565 9.582-1.4003.9894-.0609 2.3593-.1483 3.0443-.1941Z" fill="' + fill + '"/></svg>';
                        } else {
                            zen += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M34.5291 13.1879C30.3563 13.6696 28.64 13.9406 26.5874 14.4423C24.0554 15.061 21.6486 16.056 20.0275 17.1541C17.7609 18.6893 16.0287 21.0702 15.0524 23.9921C14.3541 26.0825 14.0989 27.4739 13.4849 32.5423L13.0539 36.0996L13.027 43.0963L13 50.093L13.296 50.0549C13.4587 50.0339 14.5666 49.9748 15.7578 49.9235C22.6598 49.6263 26.0732 49.3206 30.4229 48.6097C35.7155 47.7448 39.1675 46.4513 41.9257 44.2994C42.9015 43.5382 44.4097 41.958 45.1566 40.9146C45.9204 39.8474 47.0885 37.52 47.5732 36.0996C48.7365 32.6898 49.068 30.1236 49.7769 19.0338C49.9495 16.3344 50.1156 13.8725 50.1459 13.5629L50.2011 13L43.0871 13.0106C36.7903 13.0201 35.8071 13.0404 34.5291 13.1879ZM50.9089 13.1576C50.9089 13.5591 51.2844 20.1982 51.4091 22.0057C51.8691 28.6714 52.6207 33.3699 53.725 36.4824C54.4892 38.6363 55.7717 40.8499 57.2201 42.5152C58.9243 44.4743 61.4967 46.2049 64.2248 47.2275C67.2702 48.369 70.7649 48.8676 79.3364 49.3834C81.9616 49.5415 83.9388 49.6684 87.1103 49.8826L87.89 49.9353L87.9558 48.4483C88.0632 46.0184 87.9493 37.8831 87.7803 35.9195C87.5741 33.5227 87.2354 30.693 86.8642 28.2646C86.3753 25.0679 86.0073 23.7597 85.0655 21.8706C83.2608 18.251 80.0064 15.7817 75.5059 14.6169C73.9103 14.204 72.1977 13.9501 68.2361 13.5394C67.2682 13.439 66.0461 13.2766 65.5204 13.1785C64.6209 13.0105 64.1614 13 57.7366 13C51.294 13 50.9088 13.0089 50.9089 13.1576ZM13.0053 57.4381V64.0523L13.4122 67.4119C14.0595 72.755 14.4043 74.7031 15.0441 76.6311C16.256 80.2838 18.2471 82.8512 21.1726 84.5338C22.3152 85.1909 23.6307 85.6643 25.8654 86.223C28.6983 86.9312 30.2768 87.1784 32.9949 87.3398C37.4472 87.6043 49.6154 88.0772 49.7035 87.9892C49.7322 87.9606 49.7614 86.1011 49.7682 83.8572C49.7792 80.2535 49.7565 79.5143 49.5738 77.5257C48.981 71.0766 48.4106 67.5789 47.5102 64.8727C45.4649 58.7261 41.0439 54.5936 34.7522 52.9477C32.2689 52.298 29.1697 51.9339 22.4361 51.501C18.2108 51.2293 16.8355 51.1285 14.9907 50.9556C14.2214 50.8835 13.46 50.8243 13.2986 50.8241L13.0053 50.8239V57.4381ZM86.9622 50.9748C86.714 50.9905 85.5972 51.0644 84.4804 51.1393C83.3636 51.214 81.13 51.3565 79.5168 51.4558C70.4181 52.0163 66.8904 52.5318 63.894 53.7388C57.774 56.204 54.1259 60.9389 52.6786 68.2949C52.2089 70.6819 51.9403 72.9271 51.5416 77.7977C51.3034 80.7066 51.2698 81.5353 51.2698 84.4886V87.8592L57.6998 87.8098C63.9923 87.7613 65.2571 87.7154 68.1909 87.4284C71.6185 87.0931 75.2396 86.3951 77.3164 85.6693C81.477 84.2153 84.3692 81.332 85.823 77.1886C86.4293 75.4608 87.1021 72.2058 87.4473 69.3306C87.8823 65.7083 87.9972 63.0003 87.9987 56.3399L88 50.9139L87.7067 50.9301C87.5453 50.9391 87.2103 50.9592 86.9622 50.9748Z" fill="' + fill + '"/></svg>';
                        }
                        zen += '</a>';
                        zen += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', zen);
                    }
                    else if (item.indexOf('http://') !== -1 || item.indexOf('https:///') !== -1) {
                        var website = '<div class="' + groupName + '-social-links__item">';
                        website += '<a href="' + item + '" target="_blank">';
                        if (isRoundIcon) {
                            website += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50Zm23.567-58.55v.125a24.723 24.723 0 0 1 0 16.85v.125a25.074 25.074 0 0 1-47.087 0v-.125a24.723 24.723 0 0 1 0-16.85v-.125a25.073 25.073 0 0 1 47.087 0ZM35.23 44.985h-4.663a19.608 19.608 0 0 0 0 10.03h4.663a41.946 41.946 0 0 1 0-10.03Zm.903 15.044h-3.51a20.06 20.06 0 0 0 6.017 6.444 30.466 30.466 0 0 1-2.507-6.444Zm-3.51-20.058h3.51a30.465 30.465 0 0 1 2.432-6.444 20.059 20.059 0 0 0-5.942 6.444Zm8.75 20.058a15.896 15.896 0 0 0 6.093 9.277V60.03h-6.093Zm-1.078-5.014h7.17v-10.03h-7.17a36.004 36.004 0 0 0 0 10.03Zm1.078-15.044h6.093v-9.277a15.896 15.896 0 0 0-6.093 9.277Zm22.44 0h3.51a20.06 20.06 0 0 0-6.017-6.444 30.466 30.466 0 0 1 2.508 6.444Zm-5.24 0a15.896 15.896 0 0 0-6.092-9.277v9.277h6.092Zm-6.092 20.058v9.277a15.896 15.896 0 0 0 6.092-9.277h-6.092Zm0-5.014h7.17a36.004 36.004 0 0 0 0-10.03h-7.17v10.03Zm11.408 5.014a30.466 30.466 0 0 1-2.508 6.444A20.06 20.06 0 0 0 67.4 60.03h-3.51Zm.827-5.014h4.664c.87-3.287.87-6.743 0-10.03h-4.664c.203 1.664.304 3.339.301 5.015a40.487 40.487 0 0 1-.3 5.015Z" fill="' + fill + '"/></svg>';
                        } else {
                            website += '<svg role="presentation" class="' + groupName + '-social-links__svg" width="30" height="30" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M85.8219 37.1946C85.8219 37.1946 85.8219 37.1946 85.8219 37.0041C83.1366 29.6723 78.2642 23.3423 71.8637 18.8703C65.4632 14.3982 57.8436 12 50.0356 12C42.2275 12 34.6079 14.3982 28.2074 18.8703C21.8069 23.3423 16.9345 29.6723 14.2492 37.0041C14.2492 37.0041 14.2492 37.0041 14.2492 37.1946C11.2503 45.4682 11.2503 54.5318 14.2492 62.8053C14.2492 62.8053 14.2492 62.8054 14.2492 62.9959C16.9345 70.3277 21.8069 76.6577 28.2074 81.1297C34.6079 85.6018 42.2275 88 50.0356 88C57.8436 88 65.4632 85.6018 71.8637 81.1297C78.2642 76.6577 83.1366 70.3277 85.8219 62.9959C85.8219 62.9959 85.8219 62.9959 85.8219 62.8053C88.8208 54.5318 88.8208 45.4682 85.8219 37.1946V37.1946ZM20.4613 57.6222C19.1397 52.6267 19.1397 47.3733 20.4613 42.3778H27.55C26.9403 47.441 26.9403 52.559 27.55 57.6222H20.4613ZM23.5864 65.2445H28.922C29.8165 68.6434 31.0951 71.9294 32.7331 75.039C28.9955 72.4929 25.8711 69.1473 23.5864 65.2445ZM28.922 34.7555H23.5864C25.8383 30.8647 28.9227 27.52 32.6187 24.961C31.0202 28.0756 29.78 31.3614 28.922 34.7555V34.7555ZM46.1482 79.3456C41.4673 75.9106 38.1797 70.9049 36.8872 65.2445H46.1482V79.3456ZM46.1482 57.6222H35.2484C34.5372 52.5656 34.5372 47.4344 35.2484 42.3778H46.1482V57.6222ZM46.1482 34.7555H36.8872C38.1797 29.0951 41.4673 24.0894 46.1482 20.6544V34.7555ZM76.3323 34.7555H70.9967C70.1022 31.3566 68.8236 28.0706 67.1856 24.961C70.9232 27.507 74.0475 30.8527 76.3323 34.7555ZM53.7704 20.6544C58.4514 24.0894 61.7389 29.0951 63.0315 34.7555H53.7704V20.6544ZM53.7704 79.3456V65.2445H63.0315C61.7389 70.9049 58.4514 75.9106 53.7704 79.3456V79.3456ZM64.6702 57.6222H53.7704V42.3778H64.6702C65.3814 47.4344 65.3814 52.5656 64.6702 57.6222ZM67.2999 75.039C68.9379 71.9294 70.2165 68.6434 71.111 65.2445H76.4466C74.1618 69.1473 71.0375 72.4929 67.2999 75.039ZM79.4574 57.6222H72.3687C72.6787 55.0934 72.8314 52.5478 72.826 50C72.8302 47.4523 72.6775 44.9067 72.3687 42.3778H79.4574C80.779 47.3733 80.779 52.6267 79.4574 57.6222Z" fill="' + fill + '"/></svg>';
                        }
                        website += '</a>';
                        website += '</div>';
                        socialWrapper.insertAdjacentHTML('beforeend', website);
                    }
                }</script>
            <script>t_onReady(function () {
                    if (typeof jQuery !== 'undefined') {
                        $('#rec692198616').find('.t605').bind('displayChanged', function () {
                            t_onFuncLoad('t_slds_updateSlider', function () {
                                t_slds_updateSlider('692198616');
                            });
                        });
                    } else {
                        var rec = document.querySelector('#rec692198616');
                        if (!rec) return;
                        var wrapper = rec.querySelector('.t605');
                        if (wrapper) {
                            wrapper.addEventListener('displayChanged', function () {
                                t_onFuncLoad('t_slds_updateSlider', function () {
                                    t_slds_updateSlider('692198616');
                                });
                            });
                        }
                    }
                    t_onFuncLoad('t_social_init', function () {
                        t_social_init('692198616', 't-review');
                    });
                });</script>
            <style>
                #rec692198616 .t605__text {
                    font-size: 16px;
                    color: #ffffff;
                    padding-bottom: 60px;
                }

                #rec692198616 .t605__title {
                    font-size: 14px;
                    line-height: 1.2;
                    color: #ffffff;
                    padding-bottom: 0px;
                    text-transform: uppercase;
                }

                #rec692198616 .t605__descr {
                    font-size: 14px;
                    line-height: 1;
                    color: #ffffff;
                    padding-top: 0px;
                    text-transform: uppercase;
                    opacity: 0.4;
                }
            </style>
        </div>
        <div id="rec692202574" class="r t-rec" style=" " data-animationappear="off" data-record-type="396"><!-- T396 -->
            <style>
                #rec692202574 .t396__artboard {
                    height: 125px;
                    background-color: #ffffff;
                }

                #rec692202574 .t396__filter {
                    height: 125px;
                }

                #rec692202574 .t396__carrier {
                    height: 125px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1919px) {

                    #rec692202574 .t396__artboard,
                    #rec692202574 .t396__filter,
                    #rec692202574 .t396__carrier {
                        height: 125px;
                    }

                    #rec692202574 .t396__filter {}

                    #rec692202574 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 1199px) {

                    #rec692202574 .t396__artboard,
                    #rec692202574 .t396__filter,
                    #rec692202574 .t396__carrier {
                        height: 125px;
                    }

                    #rec692202574 .t396__filter {}

                    #rec692202574 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec692202574 .t396__artboard,
                    #rec692202574 .t396__filter,
                    #rec692202574 .t396__carrier {
                        height: 110px;
                    }

                    #rec692202574 .t396__filter {}

                    #rec692202574 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec692202574 .tn-elem[data-elem-id="1705333630829"] {
                    color: #2a559d;
                    text-align: CENTER;
                    z-index: 2;
                    top: 90px;
                    left: calc(50% - 41.5px + 1px);
                    width: 83px;
                }

                #rec692202574 .tn-elem[data-elem-id="1705333630829"] .tn-atom {
                    color: #2a559d;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.43;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {}

                @media screen and (max-width: 1199px) {}

                @media screen and (max-width: 639px) {
                    #rec692202574 .tn-elem[data-elem-id="1705333630829"] {
                        top: 60px;
                    }
                }

                #rec692202574 .tn-elem[data-elem-id="1705333630836"] {
                    z-index: 3;
                    top: -50px;
                    left: calc(100% - 1200px + -1700px);
                    width: 1200px;
                    height: 900px;
                }

                #rec692202574 .tn-elem[data-elem-id="1705333630836"] .tn-atom {
                    background-position: right bottom;
                    background-size: cover;
                    background-repeat: no-repeat;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692202574 .tn-elem[data-elem-id="1705333630836"] {
                        left: calc(100% - 1200px + -1100px);
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692202574 .tn-elem[data-elem-id="1705333630836"] {
                        left: calc(100% - 1200px + -500px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692202574 .tn-elem[data-elem-id="1705333630836"] {
                        top: -53px;
                        left: calc(100% - 1200px + -300px);
                    }

                    #rec692202574 .tn-elem[data-elem-id="1705333630836"] .tn-atom {
                        opacity: 0.6;
                    }
                }

                #rec692202574 .tn-elem[data-elem-id="1705333630843"] {
                    z-index: 4;
                    top: 37px;
                    left: calc(100% - 6px + -1698px);
                    width: 6px;
                    height: 6px;
                }

                @media (min-width: 1200px) {
                    #rec692202574 .tn-elem.t396__elem--anim-hidden[data-elem-id="1705333630843"] {
                        opacity: 0;
                    }
                }

                #rec692202574 .tn-elem[data-elem-id="1705333630843"] .tn-atom {
                    border-radius: 3000px;
                    background-color: #000000;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1919px) {
                    #rec692202574 .tn-elem[data-elem-id="1705333630843"] {
                        left: calc(100% - 6px + -1098px);
                    }
                }

                @media screen and (max-width: 1199px) {
                    #rec692202574 .tn-elem[data-elem-id="1705333630843"] {
                        left: calc(100% - 6px + -498px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692202574 .tn-elem[data-elem-id="1705333630843"] {
                        top: 67px;
                        left: calc(100% - 6px + -298px);
                    }
                }
            </style>
            <!-- <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="692202574" data-artboard-screens="320,640,1200,1920"
                    data-artboard-height="125" data-artboard-valign="center" data-artboard-upscale="grid"
                    data-artboard-height-res-320="110" data-artboard-height-res-640="125"
                    data-artboard-height-res-1200="125">
                    <div class="t396__carrier" data-artboard-recid="692202574"></div>
                    <div class="t396__filter" data-artboard-recid="692202574"></div>
                    <div class='t396__elem tn-elem tn-elem__6922025741705333630829' data-elem-id='1705333630829'
                        data-elem-type='text' data-field-top-value="90" data-field-left-value="1"
                        data-field-width-value="83" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="60">
                        <div class='tn-atom' field='tn_text_1705333630829'>media</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6922025741705333630836' data-elem-id='1705333630836'
                        data-elem-type='shape' data-field-top-value="-50" data-field-left-value="-1700"
                        data-field-height-value="900" data-field-width-value="1200" data-field-axisy-value="top"
                        data-field-axisx-value="right" data-field-container-value="window" data-field-topunits-value="%"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="-53"
                        data-field-left-res-320-value="-300" data-field-left-res-640-value="-500"
                        data-field-left-res-1200-value="-1100">
                        <div class='tn-atom t-bgimg'
                            data-original="https://static.tildacdn.net/tild6631-3032-4662-a235-353034643837/2.svg">
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6922025741705333630843 ' data-elem-id='1705333630843'
                        data-elem-type='shape' data-field-top-value="37" data-field-left-value="-1698"
                        data-field-height-value="6" data-field-width-value="6" data-field-axisy-value="top"
                        data-field-axisx-value="right" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-sbs-event="intoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ti':0},{'mx':0,'my':60,'sx':1,'sy':1,'op':1,'ro':0,'ti':2000,'ea':'easeOut','dt':0},{'mx':0,'my':-30,'sx':1,'sy':1,'op':1,'ro':0,'ti':1000,'ea':'easeIn','dt':0},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'ti':1000,'ea':'easeIn','dt':0}]"
                        data-field-top-res-320-value="67" data-field-left-res-320-value="-298"
                        data-field-left-res-640-value="-498" data-field-left-res-1200-value="-1098">
                        <div class='tn-atom'></div>
                    </div>
                </div>
            </div> -->
            <script>t_onReady(function () {
                    t_onFuncLoad('t396_init', function () {
                        t396_init('692202574');
                    });
                });</script><!-- /T396 -->
        </div>
        <!-- <div id="rec764372261" class="r t-rec t-rec_pt_0 t-rec_pb_90 t-rec_pb-res-480_0 uc-media"
            style="padding-top:0px;padding-bottom:90px;background-color:#ffffff; " data-animationappear="off"
            data-record-type="897" data-bg-color="#ffffff">
          <div class="t897">
             <div class="js-feed t-feed t-feed_col" data-feed-grid-type="col" data-feed-recid="764372261">
                    <div class="t-feed__container t897__container">
                        <div class="js-feed-parts-select-container t-col t-col_12"></div>
                    </div>   <div
                        class="js-feed-preloader t-feed__post-preloader_col t-feed__post-preloader__container_hidden t897__container t897__container_mobile-flex">
                        <div class="t-feed__post-preloader t-feed__grid-col t-col t-col_3">
                            <div class="t-feed__post-preloader__img"></div>
                            <div class="t-feed__post-preloader__text"></div>
                            <div class="t-feed__post-preloader__text"></div>
                            <div class="t-feed__post-preloader__text"></div>
                        </div>
                        <div class="t-feed__post-preloader t-feed__grid-col t-col t-col_3">
                            <div class="t-feed__post-preloader__img"></div>
                            <div class="t-feed__post-preloader__text"></div>
                            <div class="t-feed__post-preloader__text"></div>
                            <div class="t-feed__post-preloader__text"></div>
                        </div>
                        <div class="t-feed__post-preloader t-feed__grid-col t-col t-col_3">
                            <div class="t-feed__post-preloader__img"></div>
                            <div class="t-feed__post-preloader__text"></div>
                            <div class="t-feed__post-preloader__text"></div>
                            <div class="t-feed__post-preloader__text"></div>
                        </div>
                        <div class="t-feed__post-preloader t-feed__grid-col t-col t-col_3">
                            <div class="t-feed__post-preloader__img"></div>
                            <div class="t-feed__post-preloader__text"></div>
                            <div class="t-feed__post-preloader__text"></div>
                            <div class="t-feed__post-preloader__text"></div>
                        </div>
                        <div class="t-clear t-feed__grid-separator" style="margin-bottom:60px;"></div>
                        <div class="t-feed__post-preloader t-feed__grid-col t-col t-col_3">
                            <div class="t-feed__post-preloader__img"></div>
                            <div class="t-feed__post-preloader__text"></div>
                            <div class="t-feed__post-preloader__text"></div>
                            <div class="t-feed__post-preloader__text"></div>
                        </div>
                        <div class="t-feed__post-preloader t-feed__grid-col t-col t-col_3">
                            <div class="t-feed__post-preloader__img"></div>
                            <div class="t-feed__post-preloader__text"></div>
                            <div class="t-feed__post-preloader__text"></div>
                            <div class="t-feed__post-preloader__text"></div>
                        </div>
                        <div class="t-feed__post-preloader t-feed__grid-col t-col t-col_3">
                            <div class="t-feed__post-preloader__img"></div>
                            <div class="t-feed__post-preloader__text"></div>
                            <div class="t-feed__post-preloader__text"></div>
                            <div class="t-feed__post-preloader__text"></div>
                        </div>
                        <div class="t-feed__post-preloader t-feed__grid-col t-col t-col_3">
                            <div class="t-feed__post-preloader__img"></div>
                            <div class="t-feed__post-preloader__text"></div>
                            <div class="t-feed__post-preloader__text"></div>
                            <div class="t-feed__post-preloader__text"></div>
                        </div>
                    </div>
                    <div class="t897__scroll-icon-wrapper" style="mix-blend-mode: multiply;"><svg role="presentation"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38 16" height="16" width="38">
                            <rect class="tooltip-horizontal-scroll-icon_circle" x="22" y="0" width="16" height="16"
                                rx="8" fill="rgba(190,190,190,0.3)"></rect>
                            <style>
                                .tooltip-horizontal-scroll-icon_circle {
                                    animation: tooltip-horizontal-scroll-icon_anim-scroll-circle 2.9s infinite linear;
                                }

                                @keyframes tooltip-horizontal-scroll-icon_anim-scroll-circle {
                                    0% {
                                        opacity: 1;
                                        transform: translateX(0);
                                        width: 16px;
                                        animation-timing-function: ease-in-out;
                                    }

                                    27% {
                                        opacity: 1;
                                        transform: translateX(-20px);
                                        width: 21px;
                                        animation-timing-function: ease-out;
                                    }

                                    37% {
                                        opacity: 1;
                                        transform: translateX(-22px);
                                        width: 16px;
                                        animation-timing-function: ease-in-out;
                                    }

                                    54% {
                                        opacity: 0;
                                        transform: translateX(-22px);
                                        width: 16px;
                                        animation-timing-function: ease-in-out;
                                    }

                                    100% {
                                        opacity: 0;
                                        transform: translateX(-22px);
                                        width: 16px;
                                    }
                                }
                            </style>
                        </svg></div>
                    <ul role="list"
                        class="js-feed-container t-feed__container t897__container t897__container_mobile-flex"
                        data-feed-show-count="8" data-feed-show-slice="1"></ul>
                </div>
            </div>
            <style type="text/css">
                /* Feed part switch buttons styles */
                #rec764372261 .t-feed__parts-switch-btn {
                    border: 1px solid #000000;
                    border-radius: 40px;
                }

                #rec764372261 .t-feed__parts-switch-btn span,
                #rec764372261 .t-feed__parts-switch-btn a {
                    color: #000000;
                    padding: 6px 18px 6px;
                    border-radius: 40px;
                }

                #rec764372261 .t-feed__parts-switch-btn.t-active {
                    background-color: #000000;
                }

                #rec764372261 .t-feed__parts-switch-btn.t-active span,
                #rec764372261 .t-feed__parts-switch-btn.t-active a {
                    color: #ffffff !important;
                }
            </style>
            <style>
                @media (hover: hover),
                (min-width: 0\0) {

                    #rec764372261 .t-feed__showmore-btn:not(.t-animate_no-hover):hover,
                    #rec764372261 .t-feed__showallpost-btn:not(.t-animate_no-hover):hover {
                        background-color: #464646 !important;
                    }

                    #rec764372261 .t-feed__showmore-btn:not(.t-animate_no-hover):focus-visible,
                    #rec764372261 .t-feed__showallpost-btn:not(.t-animate_no-hover):focus-visible {
                        background-color: #464646 !important;
                    }

                    #rec764372261 .t-feed__showmore-btn:not(.t-animate_no-hover),
                    #rec764372261 .t-feed__showallpost-btn:not(.t-animate_no-hover) {
                        transition-property: background-color, color, border-color, box-shadow;
                        transition-duration: 0.2s;
                        transition-timing-function: ease-in-out;
                    }
                }
            </style>
            <style type="text/css">
                #rec764372261 .t-feed__post-popup__cover-wrapper .t-slds__bullet_active .t-slds__bullet_body,
                #rec764372261 .t-feed__post-popup__cover-wrapper .t-slds__bullet:hover .t-slds__bullet_body {
                    background-color: #222 !important;
                }
            </style>
            <style>
                #rec764372261 .t-feed__post-title {
                    font-size: 16px;
                    line-height: 1.2;
                    color: #000000;
                    padding-top: 15px;
                    font-family: 'Rooftop';
                    text-transform: uppercase;
                }

                #rec764372261 .t-feed__parts-switch-btn {
                    color: #000000;
                    font-weight: 400;
                }
            </style>  <script type="text/javascript">t_onReady(function () {
                    var separator_optsObj = {
                        height: '',
                        color: '',
                        opacity: '',
                        hideSeparator: false
                    };
                    var popup_optsObj = {
                        popupBgColor: '#ffffff',
                        overlayBgColorRgba: 'rgba(255,255,255,1)',
                        closeText: '',
                        iconColor: '#000000',
                        popupStat: '/tilda/popup/rec764372261/opened',
                        titleColor: '',
                        textColor: '',
                        subtitleColor: '',
                        datePos: 'aftertext',
                        partsPos: 'aftertext',
                        imagePos: 'aftertitle',
                        inTwoColumns: false,
                        zoom: false,
                        styleRelevants: '',
                        methodRelevants: 'random',
                        titleRelevants: '',
                        showRelevants: '',
                        shareStyle: '',
                        shareBg: '',
                        isShare: false,
                        shareServices: '',
                        shareFBToken: '',
                        showDate: true,
                        bgSize: 'cover'
                    };
                    var arrowtop_optsObj = {
                        isShow: false,
                        style: '',
                        color: '',
                        bottom: '',
                        left: '',
                        right: ''
                    };
                    var parts_optsObj = {
                        partsBgColor: '',
                        partsBorderSize: '1px',
                        partsBorderColor: '#000000',
                        align: 'center'
                    };
                    var gallery_optsObj = {
                        control: '',
                        arrowSize: '',
                        arrowBorderSize: '',
                        arrowColor: '',
                        arrowColorHover: '',
                        arrowBg: '',
                        arrowBgHover: '',
                        arrowBgOpacity: '',
                        arrowBgOpacityHover: '',
                        showBorder: '',
                        dotsWidth: '',
                        dotsBg: '',
                        dotsActiveBg: '',
                        dotsBorderSize: ''
                    };
                    var btnAllPosts_optsObj = {
                        text: '',
                        link: '',
                        target: ''
                    };
                    var colWithBg_optsObj = {
                        paddingSize: '',
                        background: '',
                        borderRadius: '',
                        shadow: '',
                        shadowSize: '',
                        shadowOpacity: '',
                        shadowHover: '',
                        shadowSizeHover: '',
                        shadowOpacityHover: '',
                        shadowShiftyHover: ''
                    };
                    var options = {
                        feeduid: '446569202531',
                        previewmode: 'yes',
                        align: 'center',
                        amountOfPosts: '8',
                        reverse: 'desc',
                        blocksInRow: '4',
                        blocksClass: 't-feed__grid-col t-col t-col_3',
                        blocksWidth: '260',
                        colClass: '',
                        prefixClass: '',
                        vindent: '60px',
                        dateFormat: '4',
                        timeFormat: '',
                        imageRatio: '75',
                        hasOriginalAspectRatio: true,
                        imageHeight: '',
                        imageWidth: '',
                        dateFilter: 'all',
                        showPartAll: true,
                        showImage: true,
                        showShortDescr: false,
                        showParts: true,
                        showDate: false,
                        hideFeedParts: false,
                        parts_opts: parts_optsObj,
                        btnsAlign: false,
                        colWithBg: colWithBg_optsObj,
                        separator: separator_optsObj,
                        btnAllPosts: btnAllPosts_optsObj,
                        popup_opts: popup_optsObj,
                        arrowtop_opts: arrowtop_optsObj,
                        gallery: gallery_optsObj,
                        amountOfSymbols: '',
                        bbtnStyle: 'color:#ffffff;background-color:#000000;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;font-family:Rooftop;font-weight:400;',
                        btnStyle: 'color:#000000;border:1px solid #000000;background-color:#ffffff;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;',
                        btnTextColor: '#000000',
                        btnType: '',
                        btnSize: 'sm',
                        btnText: 'read more',
                        btnReadMore: '',
                        isHorizOnMob: true,
                        itemsAnim: '',
                        datePosPs: 'beforetitle',
                        partsPosPs: 'beforetitle',
                        imagePosPs: 'beforetitle',
                        datePos: 'afterdescr',
                        partsPos: 'onimage',
                        imagePos: 'beforetitle'
                    };
                    t_onFuncLoad('t_feed_init', function () {
                        t_feed_init('764372261', options);
                    });
                    var rec = document.getElementById('rec764372261');
                    if (!rec) return;
                    var allRecords = document.getElementById('allrecords');
                    if (!allRecords.getAttribute('data-tilda-mode') && (window.lazy === 'y' || allRecords.getAttribute('data-tilda-lazy') === 'yes')) {
                        t_onFuncLoad('t_lazyload_update', function () {
                            var container = rec.querySelector('.js-feed-container.t897__container_mobile-flex');
                            if (!container) return
                            container.addEventListener('scroll', t_throttle(function () {
                                t_lazyload_update();
                            }));
                        });
                    }
                });</script>
        </div> -->
        <div id="rec670924916" class="r t-rec" style=" " data-record-type="215"><a name="contact"
                style="font-size:0;"></a></div>
        <div id="rec692463964" class="r t-rec" style=" " data-animationappear="off" data-record-type="396"><!-- T396 -->
            <style>
                #rec692463964 .t396__artboard {
                    height: 826px;
                    background-color: #262626;
                    overflow: visible;
                }

                #rec692463964 .t396__filter {
                    height: 826px;
                }

                #rec692463964 .t396__carrier {
                    height: 826px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {

                    #rec692463964 .t396__artboard,
                    #rec692463964 .t396__filter,
                    #rec692463964 .t396__carrier {
                        height: 871px;
                    }

                    #rec692463964 .t396__filter {}

                    #rec692463964 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec692463964 .t396__artboard,
                    #rec692463964 .t396__filter,
                    #rec692463964 .t396__carrier {
                        height: 894px;
                    }

                    #rec692463964 .t396__filter {}

                    #rec692463964 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec692463964 .tn-elem[data-elem-id="1664989196143"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 2;
                    top: 90px;
                    left: 52px;
                    width: 418px;
                }

                @media (min-width: 1200px) {
                    #rec692463964 .tn-elem.t396__elem--anim-hidden[data-elem-id="1664989196143"] {
                        opacity: 0;
                    }
                }

                #rec692463964 .tn-elem[data-elem-id="1664989196143"] .tn-atom {
                    color: #ffffff;
                    font-size: 43px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463964 .tn-elem[data-elem-id="1664989196143"] {
                        top: 190px;
                        left: 15px;
                    }

                    #rec692463964 .tn-elem[data-elem-id="1664989196143"] .tn-atom {
                        font-size: 38px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463964 .tn-elem[data-elem-id="1664989196143"] {
                        top: 177px;
                        left: 6px;
                        width: 269px;
                    }

                    #rec692463964 .tn-elem[data-elem-id="1664989196143"] .tn-atom {
                        font-size: 18px;
                    }
                }

                #rec692463964 .tn-elem[data-elem-id="1664989196146"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 3;
                    top: 200px;
                    left: 52px;
                    width: 110px;
                }

                #rec692463964 .tn-elem.t396__elem--anim-hidden[data-elem-id="1664989196146"] {
                    opacity: 0;
                }

                #rec692463964 .tn-elem[data-elem-id="1664989196146"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.38;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463964 .tn-elem[data-elem-id="1664989196146"] {
                        top: 298px;
                        left: 15px;
                    }

                    #rec692463964 .tn-elem[data-elem-id="1664989196146"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463964 .tn-elem[data-elem-id="1664989196146"] {
                        top: 261px;
                        left: 6px;
                    }
                }

                #rec692463964 .tn-elem[data-elem-id="1664989196155"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 4;
                    top: 222px;
                    left: 52px;
                    width: 110px;
                }

                #rec692463964 .tn-elem.t396__elem--anim-hidden[data-elem-id="1664989196155"] {
                    opacity: 0;
                }

                #rec692463964 .tn-elem[data-elem-id="1664989196155"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.38;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463964 .tn-elem[data-elem-id="1664989196155"] {
                        top: 320px;
                        left: 15px;
                    }

                    #rec692463964 .tn-elem[data-elem-id="1664989196155"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463964 .tn-elem[data-elem-id="1664989196155"] {
                        top: 295px;
                        left: 6px;
                    }
                }

                #rec692463964 .tn-elem[data-elem-id="1664989196158"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 5;
                    top: 200px;
                    left: 63px;
                    width: 70px;
                }

                #rec692463964 .tn-elem.t396__elem--anim-hidden[data-elem-id="1664989196158"] {
                    opacity: 0;
                }

                #rec692463964 .tn-elem[data-elem-id="1664989196158"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.38;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463964 .tn-elem[data-elem-id="1664989196158"] {
                        top: 298px;
                        left: 198px;
                    }

                    #rec692463964 .tn-elem[data-elem-id="1664989196158"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463964 .tn-elem[data-elem-id="1664989196158"] {
                        top: 261px;
                        left: 160px;
                    }
                }

                #rec692463964 .tn-elem[data-elem-id="1664989196161"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 6;
                    top: 222px;
                    left: 63px;
                    width: 68px;
                }

                #rec692463964 .tn-elem.t396__elem--anim-hidden[data-elem-id="1664989196161"] {
                    opacity: 0;
                }

                #rec692463964 .tn-elem[data-elem-id="1664989196161"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.38;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463964 .tn-elem[data-elem-id="1664989196161"] {
                        top: 320px;
                        left: 198px;
                    }

                    #rec692463964 .tn-elem[data-elem-id="1664989196161"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463964 .tn-elem[data-elem-id="1664989196161"] {
                        top: 295px;
                        left: 160px;
                    }
                }

                #rec692463964 .tn-elem[data-elem-id="1664989196163"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 7;
                    top: 272px;
                    left: 52px;
                    width: 108px;
                }

                #rec692463964 .tn-elem.t396__elem--anim-hidden[data-elem-id="1664989196163"] {
                    opacity: 0;
                }

                #rec692463964 .tn-elem[data-elem-id="1664989196163"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.38;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463964 .tn-elem[data-elem-id="1664989196163"] {
                        top: 298px;
                        left: 350px;
                    }

                    #rec692463964 .tn-elem[data-elem-id="1664989196163"] .tn-atom {
                        font-size: 14px;
                        -webkit-transform: rotate(0deg);
                        -moz-transform: rotate(0deg);
                        transform: rotate(0deg);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463964 .tn-elem[data-elem-id="1664989196163"] {
                        top: 374px;
                        left: 6px;
                    }
                }

                #rec692463964 .tn-elem[data-elem-id="1664989196165"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 8;
                    top: 448px;
                    left: calc(50% - 132.5px + -25px);
                    width: 265px;
                }

                #rec692463964 .tn-elem[data-elem-id="1664989196165"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.38;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463964 .tn-elem[data-elem-id="1664989196165"] {
                        top: 98px;
                        left: calc(50% - 132.5px + 0px);
                        width: 304px;
                    }

                    #rec692463964 .tn-elem[data-elem-id="1664989196165"] .tn-atom {
                        font-size: 14px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463964 .tn-elem[data-elem-id="1664989196165"] {
                        top: 60px;
                        left: calc(50% - 132.5px + 0px);
                        width: 233px;
                    }
                }

                #rec692463964 .tn-elem[data-elem-id="1689779438134"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 9;
                    top: 272px;
                    left: 63px;
                    width: 108px;
                }

                #rec692463964 .tn-elem.t396__elem--anim-hidden[data-elem-id="1689779438134"] {
                    opacity: 0;
                }

                #rec692463964 .tn-elem[data-elem-id="1689779438134"] .tn-atom {
                    color: #ffffff;
                    font-size: 16px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.38;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463964 .tn-elem[data-elem-id="1689779438134"] {
                        top: 320px;
                        left: 350px;
                    }

                    #rec692463964 .tn-elem[data-elem-id="1689779438134"] .tn-atom {
                        font-size: 14px;
                        -webkit-transform: rotate(0deg);
                        -moz-transform: rotate(0deg);
                        transform: rotate(0deg);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463964 .tn-elem[data-elem-id="1689779438134"] {
                        top: 374px;
                        left: 160px;
                    }
                }

                #rec692463964 .tn-elem[data-elem-id="1705392440994"] {
                    z-index: 10;
                    top: 384px;
                    left: 52px;
                    width: 44%;
                }

                #rec692463964 .tn-elem[data-elem-id="1705392440994"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463964 .tn-elem[data-elem-id="1705392440994"] {
                        top: 429px;
                        left: 15px;
                        width: 610px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463964 .tn-elem[data-elem-id="1705392440994"] {
                        top: 483px;
                        left: 6px;
                        width: 88%;
                    }
                }

                #rec692463964 .tn-elem[data-elem-id="1705392463227"] {
                    z-index: 11;
                    top: 30px;
                    left: 30px;
                    width: 39px;
                }

                #rec692463964 .tn-elem[data-elem-id="1705392463227"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463964 .tn-elem[data-elem-id="1705392463227"] {
                        top: 15px;
                        left: 15px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463964 .tn-elem[data-elem-id="1705392463227"] {
                        top: 30px;
                        left: 0px;
                        width: 15px;
                    }
                }

                #rec692463964 .tn-elem[data-elem-id="1705399497353"] {
                    z-index: 12;
                    top: calc(826px + 99px);
                    left: -3px;
                    width: 183px;
                }

                #rec692463964 .tn-elem[data-elem-id="1705399497353"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463964 .tn-elem[data-elem-id="1705399497353"] {
                        top: calc(826px + 682px);
                        left: 150px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463964 .tn-elem[data-elem-id="1705399497353"] {
                        top: calc(826px + 729px);
                        left: 22px;
                        width: 104px;
                    }
                }

                #rec692463964 .tn-elem[data-elem-id="1705399592165"] {
                    z-index: 13;
                    top: -103px;
                    left: calc(100% - 503px + 375px);
                    width: 503px;
                }

                #rec692463964 .tn-elem[data-elem-id="1705399592165"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463964 .tn-elem[data-elem-id="1705399592165"] {
                        top: -117px;
                        left: calc(100% - 503px + 389px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463964 .tn-elem[data-elem-id="1705399592165"] {
                        top: -58px;
                        left: calc(100% - 503px + 354px);
                        width: 386px;
                    }
                }

                #rec692463964 .tn-elem[data-elem-id="1707712253725"] {
                    color: #ffffff;
                    text-align: LEFT;
                    z-index: 14;
                    top: 142px;
                    left: 52px;
                    width: 418px;
                }

                @media (min-width: 1200px) {
                    #rec692463964 .tn-elem.t396__elem--anim-hidden[data-elem-id="1707712253725"] {
                        opacity: 0;
                    }
                }

                #rec692463964 .tn-elem[data-elem-id="1707712253725"] .tn-atom {
                    color: #ffffff;
                    font-size: 43px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463964 .tn-elem[data-elem-id="1707712253725"] {
                        top: 236px;
                        left: 16px;
                    }

                    #rec692463964 .tn-elem[data-elem-id="1707712253725"] .tn-atom {
                        font-size: 38px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463964 .tn-elem[data-elem-id="1707712253725"] {
                        top: 208px;
                        left: 6px;
                        width: 354px;
                    }

                    #rec692463964 .tn-elem[data-elem-id="1707712253725"] .tn-atom {
                        font-size: 18px;
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="692463964" data-artboard-screens="320,640,1200"
                    data-artboard-height="826" data-artboard-valign="center" data-artboard-upscale="grid"
                    data-artboard-ovrflw="visible" data-artboard-height-res-320="894"
                    data-artboard-height-res-640="871">
                    <div class="t396__carrier" data-artboard-recid="692463964"></div>
                    <div class="t396__filter" data-artboard-recid="692463964"></div>
                    <div class='t396__elem tn-elem text tn-elem__6924639641664989196143 ' data-elem-id='1664989196143'
                        data-elem-type='text' data-field-top-value="90" data-field-left-value="52"
                        data-field-width-value="418" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="%" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="hover" data-animate-sbs-trgels="1664989196143"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'ti':0,'ea':'0','dt':0},{'mx':0,'my':0,'sx':1,'sy':1,'op':0.6,'ro':0,'ti':200,'ea':'0','dt':0}]"
                        data-field-top-res-320-value="177" data-field-left-res-320-value="6"
                        data-field-width-res-320-value="269" data-field-axisy-res-320-value="top"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="%" data-field-top-res-640-value="190"
                        data-field-left-res-640-value="15" data-field-leftunits-res-640-value="px">
                        <div class='tn-atom'><a href="mailto:nezdeck.tech@gmail.com" target="_blank"
                                style="color: inherit">nezdeck.tech@gmail.com</a></div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6924639641664989196146 ' data-elem-id='1664989196146'
                        data-elem-type='text' data-field-top-value="200" data-field-left-value="52"
                        data-field-width-value="110" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="%" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':0.4,'ro':0,'bl':'0','ea':'easeInOut','dt':0}]"
                        data-field-top-res-320-value="261" data-field-left-res-320-value="6"
                        data-field-leftunits-res-320-value="%" data-field-top-res-640-value="298"
                        data-field-left-res-640-value="15" data-field-leftunits-res-640-value="px">
                        <div class='tn-atom'><a href="https://www.instagram.com/nezdeck.store" rel="nofollow"
                                target="_blank" style="color: inherit">Instagram</a></div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6924639641664989196155 ' data-elem-id='1664989196155'
                        data-elem-type='text' data-field-top-value="222" data-field-left-value="52"
                        data-field-width-value="110" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="%" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':0.4,'ro':0,'bl':'0','ea':'easeInOut','dt':0}]"
                        data-field-top-res-320-value="295" data-field-left-res-320-value="6"
                        data-field-leftunits-res-320-value="%" data-field-top-res-640-value="320"
                        data-field-left-res-640-value="15" data-field-leftunits-res-640-value="px">
                        <div class='tn-atom'><a href="https://wa.me/+923170666298" rel="nofollow" target="_blank"
                                style="color: inherit">WhatsApp</a></div>
                    </div>
                    <!-- <div class='t396__elem tn-elem text tn-elem__6924639641664989196158 ' data-elem-id='1664989196158'
                        data-elem-type='text' data-field-top-value="200" data-field-left-value="63"
                        data-field-width-value="70" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="%" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':0.4,'ro':0,'bl':'0','ea':'easeInOut','dt':0}]"
                        data-field-top-res-320-value="261" data-field-left-res-320-value="160"
                        data-field-top-res-640-value="298" data-field-left-res-640-value="198"
                        data-field-leftunits-res-640-value="px">
                        <div class='tn-atom'><a href="https://www.behance.net/az_studio" rel="nofollow" target="_blank"
                                style="color: inherit">Behance</a></div>
                    </div> -->
                    <!-- <div class='t396__elem tn-elem text tn-elem__6924639641664989196161 ' data-elem-id='1664989196161'
                        data-elem-type='text' data-field-top-value="222" data-field-left-value="63"
                        data-field-width-value="68" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="%" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':0.4,'ro':0,'bl':'0','ea':'easeInOut','dt':0}]"
                        data-field-top-res-320-value="295" data-field-left-res-320-value="160"
                        data-field-top-res-640-value="320" data-field-left-res-640-value="198"
                        data-field-leftunits-res-640-value="px">
                        <div class='tn-atom'><a href="https://www.linkedin.com/in/anastasiia-zh/" rel="nofollow"
                                target="_blank" style="color: inherit">LinkedIn</a></div>
                    </div> -->
                    <!-- <div class='t396__elem tn-elem text tn-elem__6924639641664989196163 ' data-elem-id='1664989196163'
                        data-elem-type='text' data-field-top-value="272" data-field-left-value="52"
                        data-field-width-value="108" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="%" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':0.4,'ro':0,'bl':'0','ea':'easeInOut','dt':0}]"
                        data-field-top-res-320-value="374" data-field-left-res-320-value="6"
                        data-field-leftunits-res-320-value="%" data-field-top-res-640-value="298"
                        data-field-left-res-640-value="350" data-field-leftunits-res-640-value="px">
                        <div class='tn-atom'><a href="https://www.instagram.com/nezdeck.store" rel="nofollow" target="_blank"
                                style="color: inherit">Instagram</a></div>
                    </div> -->
                    <div class='t396__elem tn-elem text tn-elem__6924639641664989196165' data-elem-id='1664989196165'
                        data-elem-type='text' data-field-top-value="448" data-field-left-value="-25"
                        data-field-width-value="265" data-field-axisy-value="top" data-field-axisx-value="center"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="%" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="60" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="233" data-field-axisy-res-320-value="top"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="%" data-field-top-res-640-value="98"
                        data-field-left-res-640-value="0" data-field-width-res-640-value="304">
                        <div class='tn-atom' field='tn_text_1664989196165'>For cooperation, please submit a request or
                            contact us</div>
                    </div>
                    <!-- <div class='t396__elem tn-elem text tn-elem__6924639641689779438134 ' data-elem-id='1689779438134'
                        data-elem-type='text' data-field-top-value="272" data-field-left-value="63"
                        data-field-width-value="108" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="%" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':0.4,'ro':0,'bl':'0','ea':'easeInOut','dt':0}]"
                        data-field-top-res-320-value="374" data-field-left-res-320-value="160"
                        data-field-top-res-640-value="320" data-field-left-res-640-value="350"
                        data-field-leftunits-res-640-value="px">
                        <div class='tn-atom'><a href="https://medium.com/@azagency.design" rel="nofollow"
                                target="_blank" style="color: inherit">Medium</a></div>
                    </div> -->
                    <div class='t396__elem tn-elem tn-elem__6924639641705392440994' data-elem-id='1705392440994'
                        data-elem-type='form' data-field-top-value="384" data-field-left-value="52"
                        data-field-width-value="44" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="%" data-field-heightunits-value="" data-field-widthunits-value="%"
                        data-field-top-res-320-value="483" data-field-left-res-320-value="6"
                        data-field-width-res-320-value="88" data-field-axisy-res-320-value="top"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="%" data-field-widthunits-res-320-value="%"
                        data-field-top-res-640-value="429" data-field-left-res-640-value="15"
                        data-field-width-res-640-value="610" data-field-axisy-res-640-value="top"
                        data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                        data-field-leftunits-res-640-value="px" data-field-widthunits-res-640-value="px"
                        data-field-inputpos-value="v" data-field-inputfontfamily-value="Rooftop"
                        data-field-buttonhoverbgcolor-value="#d6d6d6" data-field-inputfontsize-value="16"
                        data-field-inputfontweight-value="400" data-field-inputcolor-value="#ffffff"
                        data-field-inputbgcolor-value="#ffffff" data-field-inputbordercolor-value="#ffffff"
                        data-field-inputbordersize-value="1" data-field-inputheight-value="50"
                        data-field-inputmargbottom-value="20" data-field-inputmargright-value="20"
                        data-field-inputtitlefontsize-value="16" data-field-inputtitlefontweight-value="400"
                        data-field-inputtitlecolor-value="#000000" data-field-inputtitlemargbottom-value="5"
                        data-field-inputelscolor-value="#8a8a8a" data-field-inputelsfontweight-value="400"
                        data-field-inputelsfontsize-value="14" data-field-inputsstyle-value="y"
                        data-field-buttontitle-value="send request" data-field-buttoncolor-value="#000000"
                        data-field-buttonbgcolor-value="#ffffff" data-field-buttonradius-value="5"
                        data-field-buttonmargtop-value="60" data-field-buttonwidth-value="160"
                        data-field-buttonheight-value="32" data-field-buttonfontfamily-value="Rooftop"
                        data-field-buttonfontsize-value="16" data-field-buttonfontweight-value="400"
                        data-field-receivers-value="ba180d474ff61a0324ce76935f4c9404,231ee57d3eaa954f25a1f271261e3d53,847e86bd706894c65f97612149697dfb,4692cd2a551fa9cbaf6d4764b8f4fdb1,efc77e169a24727fa3c8f0402c3546bd">
                        <form id="contactForm">
                            <div class="t-input-block"><input aria-label="name" required type="text" name="name" class="t-input js-tilda-rule t-input_bbonly t-input-inline-styles" data-tilda-rule="name" placeholder="Name" data-tilda-req="1" style="color: rgb(255, 255, 255); border: 1px solid rgb(255, 255, 255); background-color: rgb(255, 255, 255); font-size: 16px; font-weight: 400; height: 50px;"><div class="t-input-error"></div></div>
                            <div class="t-input-block"><input aria-label="phone" required type="text" name="phone" class="t-input js-tilda-rule t-input_bbonly t-input-inline-styles" data-tilda-rule="phone" placeholder="phone" data-tilda-req="1" style="color: rgb(255, 255, 255); border: 1px solid rgb(255, 255, 255); background-color: rgb(255, 255, 255); font-size: 16px; font-weight: 400; height: 50px;"><div class="t-input-error"></div></div>
                            <div class="t-input-block"><input aria-label="email" required type="email" name="email" class="t-input js-tilda-rule t-input_bbonly t-input-inline-styles" data-tilda-rule="email" placeholder="email" data-tilda-req="1" style="color: rgb(255, 255, 255); border: 1px solid rgb(255, 255, 255); background-color: rgb(255, 255, 255); font-size: 16px; font-weight: 400; height: 50px;"><div class="t-input-error"></div></div>
                            <div class="t-input-group t-input-group_in" data-input-lid="1705392440998" style="margin-bottom: 20px;"><div class="t-input-block"><input aria-label="oneline" type="text" name="desc" class="t-input js-tilda-rule t-input_bbonly t-input-inline-styles" placeholder="Your request" data-tilda-req="1" style="color: rgb(255, 255, 255); border: 1px solid rgb(255, 255, 255); background-color: rgb(255, 255, 255); font-size: 16px; font-weight: 400; height: 50px;"><div class="t-input-error"></div></div></div>
                            <style>
                                 #message{
                                    padding:10px ;
                                    text-align:center;
                                    border-radius:5px;
                                    font-family:monospace;
                                    display:none;
                                }
                                #message.error{
                                    display:block;
                                    background: #e5383b;
                                    color:white;
                                }
                                #message.success{
                                    display:block;
                                    background: #49a078;
                                    color:white;
                                }
                                .disable{
                                    opacity:.5;
                                    pointer-events:none;
                                    cursor:not-allowed;
                                }
                                </style>
                                <div id="message" ></div>
                            <div class="tn-form__submit " style="margin-top: 10px;"><button type="submit" id="submit-btn" class="t-submit" style="border-radius:5px;background:white;padding: 0px 15px; display: block; width: 160px; font-weight: 400; height: 32px;">send request</button></div>
                        </form>
                        <script>
                        document.getElementById('contactForm').addEventListener('submit', function(e) {
                            e.preventDefault();
                            document.getElementById('submit-btn').classList.add('disable');
                            const formData = new FormData(this);
                            const xhr = new XMLHttpRequest();
                                xhr.open('POST', 'ajax/contact.php', true);
                                xhr.onload = function() {
                                    if (xhr.status === 200) {
                                        document.getElementById('message').classList.remove('success');
                                        document.getElementById('message').classList.remove('error');
                                        var response = JSON.parse(xhr.responseText);
                                        
                                        if(response.success){
                                            
                                            document.getElementById('message').innerText = response.msg;
                                            document.getElementById('message').classList.add('success');
                                        }else{
                                            document.getElementById('message').innerText = response.msg;
                                            document.getElementById('message').classList.add('error');
                                            
                                        }
                                    } else {
                                        document.getElementById('response').innerText = 'Error: ' + xhr.status;
                                    }
                                    document.getElementById('submit-btn').classList.remove('disable');
                                };
                                xhr.send(formData);
                            })
                        </script>                       
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6924639641705392463227' data-elem-id='1705392463227'
                        data-elem-type='image' data-field-top-value="30" data-field-left-value="30"
                        data-field-width-value="39" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="39" data-field-fileheight-value="39"
                        data-field-top-res-320-value="30" data-field-left-res-320-value="0"
                        data-field-width-res-320-value="15" data-field-axisy-res-320-value="top"
                        data-field-axisx-res-320-value="center" data-field-container-res-320-value="window"
                        data-field-topunits-res-320-value="px" data-field-leftunits-res-320-value="px"
                        data-field-top-res-640-value="15" data-field-left-res-640-value="15">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild6663-6538-4539-a130-646164356336/Group_21595.svg'
                                alt='' imgfield='tn_img_1705392463227' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6924639641705399497353' data-elem-id='1705399497353'
                        data-elem-type='image' data-field-top-value="99" data-field-left-value="-3"
                        data-field-width-value="183" data-field-axisy-value="bottom" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="159" data-field-fileheight-value="216"
                        data-field-top-res-320-value="729" data-field-left-res-320-value="22"
                        data-field-width-res-320-value="104" data-field-axisx-res-320-value="right"
                        data-field-top-res-640-value="682" data-field-left-res-640-value="150">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3437-3666-4639-a464-633061303339/Vector_104.svg'
                                alt='' imgfield='tn_img_1705399497353' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6924639641705399592165' data-elem-id='1705399592165'
                        data-elem-type='image' data-field-top-value="-103" data-field-left-value="375"
                        data-field-width-value="503" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="503" data-field-fileheight-value="304"
                        data-field-top-res-320-value="-58" data-field-left-res-320-value="354"
                        data-field-width-res-320-value="386" data-field-top-res-640-value="-117"
                        data-field-left-res-640-value="389">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3039-3163-4233-b634-353865356363/Rectangle_672.svg'
                                alt='' imgfield='tn_img_1705399592165' /></div>
                    </div>
                    <div class='t396__elem tn-elem text tn-elem__6924639641707712253725 ' data-elem-id='1707712253725'
                        data-elem-type='text' data-field-top-value="142" data-field-left-value="52"
                        data-field-width-value="418" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="%" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="hover" data-animate-sbs-trgels="1707712253725"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'ti':0,'ea':'0','dt':0},{'mx':0,'my':0,'sx':1,'sy':1,'op':0.6,'ro':0,'ti':200,'ea':'0','dt':0}]"
                        data-field-top-res-320-value="208" data-field-left-res-320-value="6"
                        data-field-width-res-320-value="354" data-field-axisy-res-320-value="top"
                        data-field-container-res-320-value="window" data-field-topunits-res-320-value="px"
                        data-field-leftunits-res-320-value="%" data-field-top-res-640-value="236"
                        data-field-left-res-640-value="16" data-field-leftunits-res-640-value="px">
                        <div class='tn-atom'><a href="tel:+393457638642" rel="nofollow" target="_blank"
                                style="color: inherit">+91 317 0666 298</a></div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t396_init', function () {
                        t396_init('692463964');
                    });
                });</script><!-- /T396 -->
        </div>
        <div id="rec692463965" class="r t-rec" style=" " data-animationappear="off" data-record-type="396"><!-- T396 -->
            <style>
                #rec692463965 .t396__artboard {
                    height: 150px;
                    background-color: #262626;
                }

                #rec692463965 .t396__filter {
                    height: 150px;
                }

                #rec692463965 .t396__carrier {
                    height: 150px;
                    background-position: center center;
                    background-attachment: scroll;
                    background-size: cover;
                    background-repeat: no-repeat;
                }

                @media screen and (max-width: 1199px) {

                    #rec692463965 .t396__artboard,
                    #rec692463965 .t396__filter,
                    #rec692463965 .t396__carrier {
                        height: 183px;
                    }

                    #rec692463965 .t396__filter {}

                    #rec692463965 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                @media screen and (max-width: 639px) {

                    #rec692463965 .t396__artboard,
                    #rec692463965 .t396__filter,
                    #rec692463965 .t396__carrier {
                        height: 107px;
                    }

                    #rec692463965 .t396__filter {}

                    #rec692463965 .t396__carrier {
                        background-attachment: scroll;
                    }
                }

                #rec692463965 .tn-elem[data-elem-id="1705392631589"] {
                    z-index: 2;
                    top: 0px;
                    left: calc(50% - 600px + 30px);
                    width: 923px;
                }

                #rec692463965 .tn-elem[data-elem-id="1705392631589"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463965 .tn-elem[data-elem-id="1705392631589"] {
                        width: 580px;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463965 .tn-elem[data-elem-id="1705392631589"] {
                        top: 0px;
                        left: calc(50% - 160px + 15px);
                        width: 290px;
                    }
                }

                #rec692463965 .tn-elem[data-elem-id="1705393290120"] {
                    color: #ffffff;
                    text-align: right;
                    z-index: 3;
                    top: 76px;
                    left: calc(50% + 600px - 116px + -45px);
                    width: 116px;
                }

                #rec692463965 .tn-elem[data-elem-id="1705393290120"] .tn-atom {
                    color: #ffffff;
                    font-size: 9px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 400;
                    opacity: 0.4;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463965 .tn-elem[data-elem-id="1705393290120"] {
                        top: 124px;
                        left: calc(50% + 320px - 116px + 0px);
                    }

                    #rec692463965 .tn-elem[data-elem-id="1705393290120"] {
                        text-align: center;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463965 .tn-elem[data-elem-id="1705393290120"] {
                        top: 63px;
                        left: calc(50% + 160px - 116px + -96px);
                        width: 96px;
                    }

                    #rec692463965 .tn-elem[data-elem-id="1705393290120"] {
                        text-align: left;
                    }
                }

                #rec692463965 .tn-elem[data-elem-id="1705393334223"] {
                    color: #ffffff;
                    text-align: right;
                    z-index: 4;
                    top: 91px;
                    left: calc(50% + 600px - 116px + -45px);
                    width: 116px;
                }

                #rec692463965 .tn-elem[data-elem-id="1705393334223"] .tn-atom {
                    color: #ffffff;
                    font-size: 9px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 400;
                    opacity: 0.4;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463965 .tn-elem[data-elem-id="1705393334223"] {
                        top: 139px;
                        left: calc(50% + 320px - 116px + 0px);
                    }

                    #rec692463965 .tn-elem[data-elem-id="1705393334223"] {
                        text-align: center;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463965 .tn-elem[data-elem-id="1705393334223"] {
                        top: 49px;
                        left: calc(50% + 160px - 116px + -15px);
                        width: 68px;
                    }

                    #rec692463965 .tn-elem[data-elem-id="1705393334223"] {
                        text-align: right;
                    }
                }

                #rec692463965 .tn-elem[data-elem-id="1705393343197"] {
                    color: #ffffff;
                    text-align: right;
                    z-index: 5;
                    top: 106px;
                    left: calc(50% + 600px - 116px + -45px);
                    width: 116px;
                }

                #rec692463965 .tn-elem[data-elem-id="1705393343197"] .tn-atom {
                    color: #ffffff;
                    font-size: 9px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 400;
                    opacity: 0.4;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463965 .tn-elem[data-elem-id="1705393343197"] {
                        top: 154px;
                        left: calc(50% + 320px - 116px + 0px);
                    }

                    #rec692463965 .tn-elem[data-elem-id="1705393343197"] {
                        text-align: center;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463965 .tn-elem[data-elem-id="1705393343197"] {
                        top: 63px;
                        left: calc(50% + 160px - 116px + -15px);
                        width: 71px;
                    }

                    #rec692463965 .tn-elem[data-elem-id="1705393343197"] {
                        text-align: right;
                    }
                }

                #rec692463965 .tn-elem[data-elem-id="1707718556985"] {
                    z-index: 6;
                    top: 3px;
                    left: calc(50% + 600px - 7px + -45px);
                    width: 7px;
                }

                #rec692463965 .tn-elem[data-elem-id="1707718556985"] .tn-atom {
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463965 .tn-elem[data-elem-id="1707718556985"] .tn-atom {
                        opacity: 0;
                    }
                }

                @media screen and (max-width: 639px) {}

                #rec692463965 .tn-elem[data-elem-id="1707718678195"] {
                    color: #ffffff;
                    text-align: right;
                    z-index: 7;
                    top: -1px;
                    left: calc(50% + 600px - 116px + -58px);
                    width: 116px;
                }

                @media (min-width: 1200px) {
                    #rec692463965 .tn-elem.t396__elem--anim-hidden[data-elem-id="1707718678195"] {
                        opacity: 0;
                    }
                }

                #rec692463965 .tn-elem[data-elem-id="1707718678195"] .tn-atom {
                    color: #ffffff;
                    font-size: 9px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 400;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463965 .tn-elem[data-elem-id="1707718678195"] {
                        top: 95px;
                        left: calc(50% + 320px - 116px + 0px);
                    }

                    #rec692463965 .tn-elem[data-elem-id="1707718678195"] {
                        text-align: center;
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463965 .tn-elem[data-elem-id="1707718678195"] {
                        top: 49px;
                        left: calc(50% + 160px - 116px + 15px);
                        width: 77px;
                    }

                    #rec692463965 .tn-elem[data-elem-id="1707718678195"] {
                        text-align: left;
                    }
                }

                #rec692463965 .tn-elem[data-elem-id="1707718625653"] {
                    color: #ffffff;
                    text-align: center;
                    z-index: 8;
                    top: 0px;
                    left: calc(50% + 600px - 78px + -32px);
                    width: 78px;
                    height: 17px;
                }

                #rec692463965 .tn-elem[data-elem-id="1707718625653"] .tn-atom {
                    color: #ffffff;
                    font-size: 14px;
                    font-family: 'Rooftop', Arial, sans-serif;
                    line-height: 1.55;
                    font-weight: 600;
                    background-position: center center;
                    border-color: transparent;
                    border-style: solid;
                    transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, border-color 0.2s ease-in-out;
                }

                @media screen and (max-width: 1199px) {
                    #rec692463965 .tn-elem[data-elem-id="1707718625653"] {
                        top: 92px;
                        left: calc(50% + 320px - 78px + 0px);
                    }
                }

                @media screen and (max-width: 639px) {
                    #rec692463965 .tn-elem[data-elem-id="1707718625653"] {
                        top: 46px;
                        left: calc(50% + 160px - 78px + 14px);
                    }
                }
            </style>
            <div class='t396'>
                <div class="t396__artboard" data-artboard-recid="692463965" data-artboard-screens="320,640,1200"
                    data-artboard-height="150" data-artboard-valign="center" data-artboard-upscale="window"
                    data-artboard-height-res-320="107" data-artboard-height-res-640="183">
                    <div class="t396__carrier" data-artboard-recid="692463965"></div>
                    <div class="t396__filter" data-artboard-recid="692463965"></div>
                    <div class='t396__elem tn-elem tn-elem__6924639651705392631589' data-elem-id='1705392631589'
                        data-elem-type='image' data-field-top-value="0" data-field-left-value="30"
                        data-field-width-value="923" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-filewidth-value="1096" data-field-fileheight-value="143"
                        data-field-top-res-320-value="0" data-field-left-res-320-value="15"
                        data-field-width-res-320-value="290" data-field-width-res-640-value="580">
                        <div class='tn-atom'><img class='tn-atom__img t-img' data-original='' alt=''
                                imgfield='tn_img_1705392631589' />
                            <h1 class="t702__descr t-descr t-descr_xs" style="color: #ffffff;font-size: 8rem;">NEZDECK
                            </h1>
                        </div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6924639651705393290120' data-elem-id='1705393290120'
                        data-elem-type='text' data-field-top-value="76" data-field-left-value="-45"
                        data-field-width-value="116" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="63" data-field-left-res-320-value="-96"
                        data-field-width-res-320-value="96" data-field-top-res-640-value="124"
                        data-field-left-res-640-value="0" data-field-axisx-res-640-value="center">
                        <div class='tn-atom' field='tn_text_1705393290120'>© Nezdeck, 2024</div>
                    </div>
                    <!-- <div class='t396__elem tn-elem tn-elem__6924639651705393334223' data-elem-id='1705393334223'
                        data-elem-type='text' data-field-top-value="91" data-field-left-value="-45"
                        data-field-width-value="116" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="49" data-field-left-res-320-value="-15"
                        data-field-width-res-320-value="68" data-field-axisx-res-320-value="right"
                        data-field-top-res-640-value="139" data-field-left-res-640-value="0"
                        data-field-axisx-res-640-value="center">
                        <div class='tn-atom'><a href="policy.html" style="color: inherit">Privacy Policy</a></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6924639651705393343197' data-elem-id='1705393343197'
                        data-elem-type='text' data-field-top-value="106" data-field-left-value="-45"
                        data-field-width-value="116" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="63" data-field-left-res-320-value="-15"
                        data-field-width-res-320-value="71" data-field-axisx-res-320-value="right"
                        data-field-top-res-640-value="154" data-field-left-res-640-value="0"
                        data-field-axisx-res-640-value="center">
                        <div class='tn-atom'><a href="offer.html" style="color: inherit">Contract offer</a></div>
                    </div> -->
                    <div class='t396__elem tn-elem tn-elem__6924639651707718556985' data-elem-id='1707718556985'
                        data-elem-type='image' data-field-top-value="3" data-field-left-value="-45"
                        data-field-width-value="7" data-field-axisy-value="top" data-field-axisx-value="right"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-field-filewidth-value="7"
                        data-field-fileheight-value="6">
                        <div class='tn-atom'><img class='tn-atom__img t-img'
                                data-original='https://static.tildacdn.net/tild3236-3432-4665-b437-656334653561/Polygon_1.svg'
                                alt='' imgfield='tn_img_1707718556985' /></div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6924639651707718678195 t396__elem--anim-hidden'
                        data-elem-id='1707718678195' data-elem-type='text' data-field-top-value="-1"
                        data-field-left-value="-58" data-field-width-value="116" data-field-axisy-value="top"
                        data-field-axisx-value="right" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="hover" data-animate-sbs-trgels="1707718625653"
                        data-animate-sbs-opts="[{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'ti':0,'ea':'0','dt':0},{'mx':30,'my':0,'sx':1,'sy':1,'op':0,'ro':0,'ti':0,'ea':'0','dt':0},{'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'ti':600,'ea':'easeOut','dt':0}]"
                        data-field-top-res-320-value="49" data-field-left-res-320-value="15"
                        data-field-width-res-320-value="77" data-field-axisx-res-320-value="left"
                        data-field-top-res-640-value="95" data-field-left-res-640-value="0"
                        data-field-axisx-res-640-value="center">
                        <div class='tn-atom' field='tn_text_1707718678195'>Back to top</div>
                    </div>
                    <div class='t396__elem tn-elem tn-elem__6924639651707718625653' data-elem-id='1707718625653'
                        data-elem-type='button' data-field-top-value="0" data-field-left-value="-32"
                        data-field-height-value="17" data-field-width-value="78" data-field-axisy-value="top"
                        data-field-axisx-value="right" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="46"
                        data-field-left-res-320-value="14" data-field-axisx-res-320-value="left"
                        data-field-top-res-640-value="92" data-field-left-res-640-value="0"
                        data-field-axisx-res-640-value="center"><a class='tn-atom' href="#welcome"></a></div>
                </div>
            </div>
            <script>t_onFuncLoad('t396_initialScale', function () {
                    t396_initialScale('692463965');
                });
                t_onReady(function () {
                    t_onFuncLoad('t396_init', function () {
                        t396_init('692463965');
                    });
                });</script><!-- /T396 -->
        </div>
        <div id="rec671173156" class="r t-rec" style=" " data-animationappear="off" data-record-type="702"><!-- T702 -->
            <div class="t702">
                <div class="t-popup" data-tooltip-hook="#popup:myform"
                    data-track-popup='/tilda/popup/rec671173156/opened' role="dialog" aria-modal="true" tabindex="-1"
                    aria-label="Nezdeck">
                    <div class="t-popup__close t-popup__block-close"><button type="button"
                            class="t-popup__close-wrapper t-popup__block-close-button"
                            aria-label="Закрыть диалоговое окно"><svg role="presentation" class="t-popup__close-icon"
                                width="23px" height="23px" viewBox="0 0 23 23" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                </g>
                            </svg></button></div>
                    <style>
                        @media screen and (max-width: 560px) {
                            #rec671173156 .t-popup__close-icon g {
                                fill: #ffffff !important;
                            }
                        }
                    </style>
                 
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t702_initPopup', function () {
                        t702_initPopup('671173156');
                    });
                });</script>
            <style>
                @media (hover: hover),
                (min-width: 0\0) {
                    #rec671173156 .t-submit:hover {
                        color: #ffffff !important;
                        background-color: #262626 !important;
                    }

                    #rec671173156 .t-submit:focus-visible {
                        color: #ffffff !important;
                        background-color: #262626 !important;
                    }
                }

                #rec671173156 .t-submit {
                    transition-property: background-color, color, border-color, box-shadow;
                    transition-duration: 0.2s;
                    transition-timing-function: ease-in-out;
                }
            </style>
            <style>
                #rec671173156 .t702__title {
                    color: #000000;
                    font-family: 'Rooftop';
                }

                #rec671173156 .t702__descr {
                    font-size: 16px;
                    color: #000000;
                    font-family: 'Rooftop';
                }
            </style>
        </div>
        <div id="rec731897484" class="r t-rec" style=" " data-animationappear="off" data-record-type="702"><!-- T702 -->
            <div class="t702">
                <div class="t-popup" data-tooltip-hook="#popup:service1"
                    data-track-popup='/tilda/popup/rec731897484/opened' role="dialog" aria-modal="true" tabindex="-1"
                    aria-label="Nezdeck">
                    <div class="t-popup__close t-popup__block-close"><button type="button"
                            class="t-popup__close-wrapper t-popup__block-close-button"
                            aria-label="Закрыть диалоговое окно"><svg role="presentation" class="t-popup__close-icon"
                                width="23px" height="23px" viewBox="0 0 23 23" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                </g>
                            </svg></button></div>
                    <style>
                        @media screen and (max-width: 560px) {
                            #rec731897484 .t-popup__close-icon g {
                                fill: #ffffff !important;
                            }
                        }
                    </style>
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t702_initPopup', function () {
                        t702_initPopup('731897484');
                    });
                });</script>
            <style>
                @media (hover: hover),
                (min-width: 0\0) {
                    #rec731897484 .t-submit:hover {
                        color: #ffffff !important;
                        background-color: #262626 !important;
                    }

                    #rec731897484 .t-submit:focus-visible {
                        color: #ffffff !important;
                        background-color: #262626 !important;
                    }
                }

                #rec731897484 .t-submit {
                    transition-property: background-color, color, border-color, box-shadow;
                    transition-duration: 0.2s;
                    transition-timing-function: ease-in-out;
                }
            </style>
            <style>
                #rec731897484 .t702__title {
                    color: #000000;
                    font-family: 'Rooftop';
                }

                #rec731897484 .t702__descr {
                    font-size: 16px;
                    color: #000000;
                    font-family: 'Rooftop';
                }
            </style>
        </div>
        <div id="rec731897911" class="r t-rec" style=" " data-animationappear="off" data-record-type="702"><!-- T702 -->
            <div class="t702">
                <div class="t-popup" data-tooltip-hook="#popup:service2"
                    data-track-popup='/tilda/popup/rec731897911/opened' role="dialog" aria-modal="true" tabindex="-1"
                    aria-label="Nezdeck">
                    <div class="t-popup__close t-popup__block-close"><button type="button"
                            class="t-popup__close-wrapper t-popup__block-close-button"
                            aria-label="Закрыть диалоговое окно"><svg role="presentation" class="t-popup__close-icon"
                                width="23px" height="23px" viewBox="0 0 23 23" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                </g>
                            </svg></button></div>
                    <style>
                        @media screen and (max-width: 560px) {
                            #rec731897911 .t-popup__close-icon g {
                                fill: #ffffff !important;
                            }
                        }
                    </style>
                
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t702_initPopup', function () {
                        t702_initPopup('731897911');
                    });
                });</script>
            <style>
                @media (hover: hover),
                (min-width: 0\0) {
                    #rec731897911 .t-submit:hover {
                        color: #ffffff !important;
                        background-color: #262626 !important;
                    }

                    #rec731897911 .t-submit:focus-visible {
                        color: #ffffff !important;
                        background-color: #262626 !important;
                    }
                }

                #rec731897911 .t-submit {
                    transition-property: background-color, color, border-color, box-shadow;
                    transition-duration: 0.2s;
                    transition-timing-function: ease-in-out;
                }
            </style>
            <style>
                #rec731897911 .t702__title {
                    color: #000000;
                    font-family: 'Rooftop';
                }

                #rec731897911 .t702__descr {
                    font-size: 16px;
                    color: #000000;
                    font-family: 'Rooftop';
                }
            </style>
        </div>
        <div id="rec731897997" class="r t-rec" style=" " data-animationappear="off" data-record-type="702"><!-- T702 -->
            <div class="t702">
                <div class="t-popup" data-tooltip-hook="#popup:service3"
                    data-track-popup='/tilda/popup/rec731897997/opened' role="dialog" aria-modal="true" tabindex="-1"
                    aria-label="Nezdeck">
                    <div class="t-popup__close t-popup__block-close"><button type="button"
                            class="t-popup__close-wrapper t-popup__block-close-button"
                            aria-label="Закрыть диалоговое окно"><svg role="presentation" class="t-popup__close-icon"
                                width="23px" height="23px" viewBox="0 0 23 23" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                </g>
                            </svg></button></div>
                    <style>
                        @media screen and (max-width: 560px) {
                            #rec731897997 .t-popup__close-icon g {
                                fill: #ffffff !important;
                            }
                        }
                    </style>
               
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t702_initPopup', function () {
                        t702_initPopup('731897997');
                    });
                });</script>
            <style>
                @media (hover: hover),
                (min-width: 0\0) {
                    #rec731897997 .t-submit:hover {
                        color: #ffffff !important;
                        background-color: #262626 !important;
                    }

                    #rec731897997 .t-submit:focus-visible {
                        color: #ffffff !important;
                        background-color: #262626 !important;
                    }
                }

                #rec731897997 .t-submit {
                    transition-property: background-color, color, border-color, box-shadow;
                    transition-duration: 0.2s;
                    transition-timing-function: ease-in-out;
                }
            </style>
            <style>
                #rec731897997 .t702__title {
                    color: #000000;
                    font-family: 'Rooftop';
                }

                #rec731897997 .t702__descr {
                    font-size: 16px;
                    color: #000000;
                    font-family: 'Rooftop';
                }
            </style>
        </div>
        <div id="rec731898070" class="r t-rec" style=" " data-animationappear="off" data-record-type="702"><!-- T702 -->
            <div class="t702">
                <div class="t-popup" data-tooltip-hook="#popup:service4"
                    data-track-popup='/tilda/popup/rec731898070/opened' role="dialog" aria-modal="true" tabindex="-1"
                    aria-label="Nezdeck">
                    <div class="t-popup__close t-popup__block-close"><button type="button"
                            class="t-popup__close-wrapper t-popup__block-close-button"
                            aria-label="Закрыть диалоговое окно"><svg role="presentation" class="t-popup__close-icon"
                                width="23px" height="23px" viewBox="0 0 23 23" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                </g>
                            </svg></button></div>
                    <style>
                        @media screen and (max-width: 560px) {
                            #rec731898070 .t-popup__close-icon g {
                                fill: #ffffff !important;
                            }
                        }
                    </style>
                </div>
            </div>
            <script>t_onReady(function () {
                    t_onFuncLoad('t702_initPopup', function () {
                        t702_initPopup('731898070');
                    });
                });</script>
            <style>
                @media (hover: hover),
                (min-width: 0\0) {
                    #rec731898070 .t-submit:hover {
                        color: #ffffff !important;
                        background-color: #262626 !important;
                    }

                    #rec731898070 .t-submit:focus-visible {
                        color: #ffffff !important;
                        background-color: #262626 !important;
                    }
                }

                #rec731898070 .t-submit {
                    transition-property: background-color, color, border-color, box-shadow;
                    transition-duration: 0.2s;
                    transition-timing-function: ease-in-out;
                }
            </style>
            <style>
                #rec731898070 .t702__title {
                    color: #000000;
                    font-family: 'Rooftop';
                }

                #rec731898070 .t702__descr {
                    font-size: 16px;
                    color: #000000;
                    font-family: 'Rooftop';
                }
            </style>
        </div>
        <div id="rec671017122" class="r t-rec" style=" " data-animationappear="off" data-record-type="270">
            <div class="t270" data-history-disabled="yes"></div>
            <script>t_onReady(function () {
                    var hash = window.location.hash;
                    t_onFuncLoad('t270_scroll', function () {
                        t270_scroll(hash, -3);
                    });
                    setTimeout(function () {
                        var curPath = window.location.pathname;
                        var curFullPath = window.location.origin + curPath;
                        var recs = document.querySelectorAll('.r');
                        Array.prototype.forEach.call(recs, function (rec) {
                            var selects =
                                'a[href^="#"]\
:not([href="#"])\
:not(.carousel-control)\
:not(.t-carousel__control)\
:not([href^="#price"])\
:not([href^="#submenu"])\
:not([href^="#popup"])\
:not([href*="#zeropopup"])\
:not([href*="#closepopup"])\
:not([href*="#closeallpopup"])\
:not([href^="#prodpopup"])\
:not([href^="#order"])\
:not([href^="#!"])\
:not([target="_blank"]),' +
                                'a[href^="' + curPath + '#"]\
:not([href*="#!/tfeeds/"])\
:not([href*="#!/tproduct/"])\
:not([href*="#!/tab/"])\
:not([href*="#popup"])\
:not([href*="#zeropopup"])\
:not([href*="#closepopup"])\
:not([href*="#closeallpopup"])\
:not([target="_blank"]),' +
                                'a[href^="' + curFullPath + '#"]\
:not([href*="#!/tfeeds/"])\
:not([href*="#!/tproduct/"])\
:not([href*="#!/tab/"])\
:not([href*="#popup"])\
:not([href*="#zeropopup"])\
:not([href*="#closepopup"])\
:not([href*="#closeallpopup"])\
:not([target="_blank"])';
                            var elements = rec.querySelectorAll(selects);
                            Array.prototype.forEach.call(elements, function (element) {
                                element.addEventListener('click', function (event) {
                                    event.preventDefault();
                                    var hash = this.hash.trim();
                                    t_onFuncLoad('t270_scroll', function () {
                                        t270_scroll(hash, -3);
                                    });
                                });
                            });
                        });
                        if (document.querySelectorAll('.js-store').length > 0 || document.querySelectorAll('.js-feed').length > 0) {
                            t_onFuncLoad('t270_scroll', function () {
                                t270_scroll(hash, -3, 1);
                            });
                        }
                    }, 500);
                    setTimeout(function () {
                        var hash = window.location.hash;
                        if (hash && document.querySelectorAll('a[name="' + hash.slice(1) + '"]').length > 0) {
                            if (window.isMobile) {
                                t_onFuncLoad('t270_scroll', function () {
                                    t270_scroll(hash, 0);
                                });
                            } else {
                                t_onFuncLoad('t270_scroll', function () {
                                    t270_scroll(hash, 0);
                                });
                            }
                        }
                    }, 1000);
                    window.addEventListener('popstate', function () {
                        var hash = window.location.hash;
                        if (hash && document.querySelectorAll('a[name="' + hash.slice(1) + '"]').length > 0) {
                            if (window.isMobile) {
                                t_onFuncLoad('t270_scroll', function () {
                                    t270_scroll(hash, 0);
                                });
                            } else {
                                t_onFuncLoad('t270_scroll', function () {
                                    t270_scroll(hash, 0);
                                });
                            }
                        }
                    });
                });</script>
        </div>
        <div id="rec692410561" class="r t-rec" style=" " data-animationappear="off" data-record-type="131"><!-- T123 -->
            <div class="t123">
                <div class="t-container_100 ">
                    <div class="t-width t-width_100 ">

                        <style>
                            /* услуги */

                            .uc-serv .t786__imgwrapper {
                                margin-bottom: 0px !important;
                            }

                            .uc-serv .t786__descr {
                                margin-top: 0px !important;
                            }



                            /* блюр фона в поп-апе */
                            .t-popup.t-popup_show {
                                backdrop-filter: blur(6px) !important;
                            }


                            /*скругления в портфолио*/

                            @media screen and (min-width: 1200px) {

                                #rec670295961 .tn-elem[data-elem-id="1664893906833"] .tn-atom,
                                #rec671412965 .tn-elem[data-elem-id="1664893906833"] .tn-atom {
                                    border-radius: 0 23px 0 0;
                                }

                                #rec670295961 .tn-elem[data-elem-id="1664893906817"] .tn-atom,
                                #rec671412965 .tn-elem[data-elem-id="1664893906817"] .tn-atom {
                                    border-radius: 23px 0 0 0;
                                }
                            }

                            @media screen and (max-width: 1200px) {

                                #rec670295961 .tn-elem[data-elem-id="1664893906817"] .tn-atom,
                                #rec671412965 .tn-elem[data-elem-id="1664893906817"] .tn-atom {
                                    border-radius: 23px 23px 0 0;
                                }
                            }

                            /*скругления в услугах*/
                            @media screen and (max-width: 1200px) {

                                #rec670838562 .tn-elem[data-elem-id="1706084960477"] .tn-atom,
                                #rec696105253 .tn-elem[data-elem-id="1700637863585"] .tn-atom,
                                #rec671362341 .tn-elem[data-elem-id="1706085345357"] .tn-atom {
                                    border-radius: 15px 15px 0 0px !important;
                                }
                            }

                            /*размер кнопки в форме*/
                            #rec670853975 [data-elem-id="1705321547186"] .t-submit,
                            #rec692463964 [data-elem-id="1705392440994"] .t-submit {
                                width: 100% !important;

                            }


                            /*блок отзывы*/

                            .t-slds__arrow-withbg {
                                border-radius: 6px !important;

                            }

                            .t-slds__arrow {
                                stroke-linejoin: bevel;
                            }


                            /*блок медиа      */

                            @media screen and (max-width: 640px) {
                                .t-feed__post-title {
                                    padding-top: 0px !important;
                                }

                                .t-feed__col-grid__post-wrapper .t-feed__post-imgwrapper {
                                    margin-bottom: 0px !important;
                                }
                            }


                            @media screen and (min-width: 1200px) {
                                .uc-media .t897__container {
                                    max-width: 100vw !important;
                                }

                                .uc-media .t-col_3 {
                                    max-width: 22.6% !important;
                                }

                                .uc-media .t-col {
                                    margin-left: 15px !important;
                                    margin-right: 15px !important;
                                }

                                .uc-media .t-feed__col-grid__post-wrapper .t-feed__post-imgwrapper {
                                    padding-bottom: 0% !important;
                                }

                                .uc-media .t-feed__col-grid__post-wrapper .t-feed__post-imgwrapper {
                                    margin-bottom: -20px !important;
                                }
                            }

                            @media screen and (min-width: 1400px) {

                                .uc-media .t897__container {
                                    max-width: 100vw !important;
                                }

                                .uc-media .t-col_3 {
                                    max-width: 22.7% !important;
                                }

                                .uc-media .t-col {
                                    margin-left: 15px !important;
                                    margin-right: 15px !important;
                                }

                                .uc-media .t-feed__col-grid__post-wrapper .t-feed__post-imgwrapper {
                                    padding-bottom: 0% !important;
                                }

                                .uc-media .t-feed__col-grid__post-wrapper .t-feed__post-imgwrapper {
                                    margin-bottom: -25px !important;
                                }
                            }

                            @media screen and (min-width: 1900px) {
                                .uc-media .t-col_3 {
                                    max-width: 23.2% !important;
                                }

                                .uc-media .t-feed__col-grid__post-wrapper .t-feed__post-imgwrapper {
                                    margin-bottom: -30px !important;
                                }
                            }

                            .uc-media .t-feed__post-img {
                                transition: 0.3s;
                                margin: 0 !important;
                            }

                            .uc-media .t-feed__post-img:hover {
                                transform: scale(0.9);
                            }

                            .uc-media .t-feed__buttons-wrapper {
                                margin-top: 60px !important;
                            }

                            .uc-media .t-btn_md {
                                height: 32px !important;
                                padding-left: 24px !important;
                                padding-right: 24px !important;
                            }
                        </style>


                    </div>
                </div>
            </div>
        </div><!--footer-->
        <footer id="t-footer" class="t-records" data-hook="blocks-collection-content-node"
            data-tilda-project-id="6225424" data-tilda-page-id="51904307" data-tilda-page-alias="footer"
            data-tilda-formskey="94726ef7d7f0519bc3e1e761a6225424" data-tilda-lazy="yes" data-tilda-root-zone="one">
           
            <div id="rec772782191" class="r t-rec" style=" " data-animationappear="off" data-record-type="131">
                <!-- T123 -->
                <div class="t123">
                    <div class="t-container_100 ">
                        <div class="t-width t-width_100 ">

                            <style>
                                .t972 {
                                    bottom: 15px !important;
                                }
                            </style>


                        </div>
                    </div>
                </div>
            </div>
        </footer><!--/footer-->
    </div><!--/allrecords--><!-- Stat -->
    <script type="text/javascript">if (!window.mainTracker) { window.mainTracker = 'tilda'; }
        window.tildastatcookiegdpr = 'yes';
        setTimeout(function () {
            (function (d, w, k, o, g) { var n = d.getElementsByTagName(o)[0], s = d.createElement(o), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.key = k; s.id = "tildastatscript"; s.src = g; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, '2f1c5b644186f430034509acb3537e23', 'script', './static.tildacdn.net/js/tilda-stat-1.0.min.js');
        }, 2000); </script>
</body>

</html>