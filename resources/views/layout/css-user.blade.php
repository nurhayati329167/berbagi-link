<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
<link href="https://berbagi.link/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css">
<link href="https://berbagi.link/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://berbagi.link/plugins/swiper-master/css/swiper.min.css">
<link
    href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800&amp;family=Poppins:300,400,500,600,700,800&amp;display=swap"
    rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://berbagi.link/assets/theme/default/css/style2.css?v=34">
<link rel="stylesheet" href="https://berbagi.link/assets/theme/default/css/tab_content_style.css?v=30">
<link rel="stylesheet" href="https://berbagi.link/assets/theme/default/css/article.css?v=2">
<link rel="stylesheet" href="https://berbagi.link/css/animate.css">
<link rel="stylesheet" href="https://berbagi.link/css/link-animation.css">
<link rel="stylesheet" href="https://berbagi.link/assets/theme/default/css/fundraiser_style_preview.css?v=1">
<link rel="stylesheet" href="https://berbagi.link/css/tailwind.css?v=7">
<link href="{{ asset('images/BB.PNG')}}" rel="shortcut icon">

<style type="text/css">
span.im-caret {
    -webkit-animation: 1s blink step-end infinite;
    animation: 1s blink step-end infinite;
}

@keyframes blink {

    from,
    to {
        border-right-color: black;
    }

    50% {
        border-right-color: transparent;
    }
}

@-webkit-keyframes blink {

    from,
    to {
        border-right-color: black;
    }

    50% {
        border-right-color: transparent;
    }
}

span.im-static {
    color: grey;
}

div.im-colormask {
    display: inline-block;
    border-style: inset;
    border-width: 2px;
    -webkit-appearance: textfield;
    -moz-appearance: textfield;
    appearance: textfield;
}

div.im-colormask>input {
    position: absolute;
    display: inline-block;
    background-color: transparent;
    color: transparent;
    -webkit-appearance: caret;
    -moz-appearance: caret;
    appearance: caret;
    border-style: none;
    left: 0;
    /*calculated*/
}

div.im-colormask>input:focus {
    outline: none;
}

div.im-colormask>input::-moz-selection {
    background: none;
}

div.im-colormask>input::selection {
    background: none;
}

div.im-colormask>input::-moz-selection {
    background: none;
}

div.im-colormask>div {
    color: black;
    display: inline-block;
    width: 100px;
    /*calculated*/
}
</style>

<style type="text/css">
/* Chart.js */
@-webkit-keyframes chartjs-render-animation {
    from {
        opacity: 0.99
    }

    to {
        opacity: 1
    }
}

@keyframes chartjs-render-animation {
    from {
        opacity: 0.99
    }

    to {
        opacity: 1
    }
}

.chartjs-render-monitor {
    -webkit-animation: chartjs-render-animation 0.001s;
    animation: chartjs-render-animation 0.001s;
}
</style>
<style>
html,
body,
.mc_default {
    cursor: url(chrome-extension://ipfjnikpccdpgjelgomppkdgiokfkjeg/cur/44.cur), default !important;
}

a,
input[type="submit"],
input[type="image"],
label[for],
select,
button,
[role="button"],
.pointer,
DIV.location-container,
.mc_pointer {
    cursor: url(chrome-extension://ipfjnikpccdpgjelgomppkdgiokfkjeg/cur/0.cur), pointer !important;
}
</style>

<style type="text/css">
[id^=root],
[id^=docs],
.cc_cursor,
body,
.ogdlpmhglpejoiomcodnpjnfgcpmgale_default,
body,
html,
input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"],
input::-webkit-contacts-auto-fill-button,
input:read-only {
    cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAABDFJREFUWEfFl2toHFUUx/93dnx8qCJ1+yCgASvaSgUVq9BVMB8sJa6itokhbRFKa/uhimAD1qaoH0oFsfVBIRasbTRqSNmm6dLG1BhBaVq32tA8RNOaNcGmZu7M7JI1+5i5c+Xe3VmyJGn3kcQDw87M3nvPb878zzl3iNfrbaSUbgWQxP9gxOv1WgDOJRKJdbFYbGy+GSQAIUQFEGaM+Q3D6J9PiMkA4JyPM8ZeMk3z9HxBZAGYw6AQRfhlAOoopQfmA0ICMMdWN1bsQmv3p0hY49Iv5/wQpXQHAKGRObMswJ6aAJbcUYa9zbUYiw6DECIgOi3LqopGo+ZcEeQA3Fu2CozFcbBjC3p+PyshAAwCeEbTNPE765YDsGzpo7j7oZuwcq2KTW/sQkfTYSiK1IXJOa/Sdb1ztgmyALurA6isXo0VFbegNQyc1YE/Th/CTx/VQyFSE0ILr1FKG2YTIg3AbPWLhjasrXoSTZeBPhPSKQhwbaAT7W9thpOKCwjh+0NK6c5MtpTMIgFs21YDbUEM3OnDcAxIv/q0CZ//6oM4uXM94tqoC9EOoJpSmk6ZEkwCOMxWaz4J4rb7fNMuJSBudgyE3t2IXy6E3AwZsCzLH41Gh0rwDwnAma0+eyCIJQ9MD7BABbavADzRJLbWvI4feltccY7Ztr3eNM0fi4W4LoB444tvBbYtB2zK0P1lHJwRfHuhAU1d70HxyHeVdBznFV3XG4uBmBFAhL18AbDlfiASthFqSYCLIi20SYCBv7rwwfHtYDzl1ot9mqbtFrIpBGRaAIcDDy4EapcBo30WLp5I5ghTihOAFh3EvuYNiExors8TlNJaABP5QkwBYA7gWwo8Xw5c6U6h/7sUFJmTmQebdMrBkUgZeP/YZgyNXcpEh/Qwxp4zDGMkH4gcAO9yHyrvAirKgL6OJMIhC6dCBzH0T6/slB7FA0XxwEM8IIoi7xFxrQDf97SAcdvNkKuc8xd0Xf/5RhBZAP/+IF71+/DwQo6LrQn83W/jUrgd+1u3QfWI/cpUyxQm16kbAXdgnDH2smEYLdeDSFdC21aPBoKofGI1zn+dgD7MEJ0YQd1na2A7CeHgKOc8HWNZH9MH59wtWURJNw1xrWTuy3Pbto9EIpHwTBDZSth67CT4lUcQ0xy5Bahv9OOqKRtgQNO0dTcKZbH/Z5vRO5sCuGfRKim4I2feRFfvN+LJezRNE9Upb1UXCjJlP/Dr5TZ83LYDHo86yhh7PF81F+rYHZ8D4L19MeoOr4HDrYTjOE/pun6+2IXznZcBsNQ9Nc34/MzbuBb5U3S8DZTSr/JdpJRx6W7ImVq+aCVG6G/C+V5d1+tLWbSQue6XkUx0QshxTdNeLGSBUsdO/jCZc8VPB+sCUMbYY3Ot+JkAxh3HedowjHOlhrOY+SICQvFNxUyejTn/ASpTSz8lteAEAAAAAElFTkSuQmCC") 0 0, auto !important;
}

[role^=button],
button,
.cc_pointer,
[type="search"]::-webkit-search-cancel-button,
a,
select,
[type="search"]::-webkit-search-decoration,
.paper-button,
.ytp-progress-bar-container,
input[type=submit],
:link,
:visited,
a>*,
img,
button,
::-webkit-scrollbar-button,
.ogdlpmhglpejoiomcodnpjnfgcpmgale_pointer,
::-webkit-file-upload-button,
button,
.ytp-volume-panel,
#myogdlpmhglpejoiomcodnpjnfgcpmgale .icon {
    cursor: url("data:image/png;base64,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") 11 0, auto !important;
}

* {
    cursor: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAABDFJREFUWEfFl2toHFUUx/93dnx8qCJ1+yCgASvaSgUVq9BVMB8sJa6itokhbRFKa/uhimAD1qaoH0oFsfVBIRasbTRqSNmm6dLG1BhBaVq32tA8RNOaNcGmZu7M7JI1+5i5c+Xe3VmyJGn3kcQDw87M3nvPb878zzl3iNfrbaSUbgWQxP9gxOv1WgDOJRKJdbFYbGy+GSQAIUQFEGaM+Q3D6J9PiMkA4JyPM8ZeMk3z9HxBZAGYw6AQRfhlAOoopQfmA0ICMMdWN1bsQmv3p0hY49Iv5/wQpXQHAKGRObMswJ6aAJbcUYa9zbUYiw6DECIgOi3LqopGo+ZcEeQA3Fu2CozFcbBjC3p+PyshAAwCeEbTNPE765YDsGzpo7j7oZuwcq2KTW/sQkfTYSiK1IXJOa/Sdb1ztgmyALurA6isXo0VFbegNQyc1YE/Th/CTx/VQyFSE0ILr1FKG2YTIg3AbPWLhjasrXoSTZeBPhPSKQhwbaAT7W9thpOKCwjh+0NK6c5MtpTMIgFs21YDbUEM3OnDcAxIv/q0CZ//6oM4uXM94tqoC9EOoJpSmk6ZEkwCOMxWaz4J4rb7fNMuJSBudgyE3t2IXy6E3AwZsCzLH41Gh0rwDwnAma0+eyCIJQ9MD7BABbavADzRJLbWvI4feltccY7Ztr3eNM0fi4W4LoB444tvBbYtB2zK0P1lHJwRfHuhAU1d70HxyHeVdBznFV3XG4uBmBFAhL18AbDlfiASthFqSYCLIi20SYCBv7rwwfHtYDzl1ot9mqbtFrIpBGRaAIcDDy4EapcBo30WLp5I5ghTihOAFh3EvuYNiExors8TlNJaABP5QkwBYA7gWwo8Xw5c6U6h/7sUFJmTmQebdMrBkUgZeP/YZgyNXcpEh/Qwxp4zDGMkH4gcAO9yHyrvAirKgL6OJMIhC6dCBzH0T6/slB7FA0XxwEM8IIoi7xFxrQDf97SAcdvNkKuc8xd0Xf/5RhBZAP/+IF71+/DwQo6LrQn83W/jUrgd+1u3QfWI/cpUyxQm16kbAXdgnDH2smEYLdeDSFdC21aPBoKofGI1zn+dgD7MEJ0YQd1na2A7CeHgKOc8HWNZH9MH59wtWURJNw1xrWTuy3Pbto9EIpHwTBDZSth67CT4lUcQ0xy5Bahv9OOqKRtgQNO0dTcKZbH/Z5vRO5sCuGfRKim4I2feRFfvN+LJezRNE9Upb1UXCjJlP/Dr5TZ83LYDHo86yhh7PF81F+rYHZ8D4L19MeoOr4HDrYTjOE/pun6+2IXznZcBsNQ9Nc34/MzbuBb5U3S8DZTSr/JdpJRx6W7ImVq+aCVG6G/C+V5d1+tLWbSQue6XkUx0QshxTdNeLGSBUsdO/jCZc8VPB+sCUMbYY3Ot+JkAxh3HedowjHOlhrOY+SICQvFNxUyejTn/ASpTSz8lteAEAAAAAElFTkSuQmCC") 0 0, auto
}

a,
button,
[type^=button],
[role^=button] {
    cursor: url("data:image/png;base64,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") 11 0, auto
}
</style>

<style>
.berbagi-link-super-container {
    font-family: Raleway;
}

#ibadah-app a {
    color: black;
    text-decoration: none;
}

.hide-scrollbar {
    -ms-overflow-style: none;
    /* IE and Edge */
    scrollbar-width: none;
    /* Firefox */
}


.swiper-slide {
    padding: 20px;
    width: 100%;
    border-radius: 10%;
    box-shadow: 5px 5px 10px 0px rgba(96, 94, 102, 0.7);
    border: 1px solid #e1e1e1;
}

.swiper-slide:hover {
    width: 100%;
    border-radius: 10%;
    transform: translateY(-5px);
    box-shadow: 0px 0px 0px 0px rgba(96, 94, 102, 0.7);
}

.swiper-slide:hover {
    transform: translateY(5px);
    box-shadow: inset 0px 0px 0px 2pxrgba(96, 94, 102, 0.7);
}

.swiper-slide:hover {
    width: 100%;
    border-radius: 10%;
    transform: translateY(-5px);
    box-shadow: 0px 0px 0px 0px rgba(96, 94, 102, 0.7);
}
</style>